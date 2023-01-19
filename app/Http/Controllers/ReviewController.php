<?php

namespace App\Http\Controllers;

//use App\Http\Requests\UpdateSettingRequest;
//use App\Http\Requests\UpdatePriceRequest;
//use App\Models\Message;
//use App\Models\Application;
//use App\Models\Price;
//use App\Models\Setting;
use App\Http\Requests\StoreReviewsRequest;
use App\Models\Review;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->except(['index', 'store', 'survey']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $get_show_reviews = Review::showTestimonials();

        return view('reviews', compact('get_show_reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.recommendations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreReviewsRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReviewsRequest $request)
    {
        $review = new Review();
        $review->first_name = $request->first_name;
        $review->last_name = $request->last_name;
        $review->email = $request->email;
        $review->recommend = $request->recommend;
        $review->meet_needs = $request->meet_needs;
        $review->rating = $request->rating;
        $review->suggestions = $request->suggestions;
        $review->tell_someone = $request->tell_someone;

        if ($review->save()) {
            return back()->with('status', 'Testimonial saved successfully!');
        } else {
            return back()->with('bad_status', 'Testimonial not saved. Please try again.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Review $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Review $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        $contact = $review->consultContact;

        return view('admin.recommendations.edit', compact('review', 'contact'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Review $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        $this->validate($request, [
            'meet_needs' => 'required|integer',
            'recommend' => 'required|integer',
            'rating' => 'required|numeric',
            'suggestions' => 'nullable',
            'tell_someone' => 'nullable',
        ]);

        $review->meet_needs = $request->meet_needs;
        $review->recommend = $request->recommend;
        $review->rating = $request->rating;
        $review->suggestions = $request->suggestions;
        $review->tell_someone = $request->tell_someone;
        $review->show_testimonial = $request->show_testimonial;

        if ($review->save()) {
            return back()->with('status', 'Testimonial saved successfully!');
        } else {
            return back()->with('bad_status', 'Testimonial not saved. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Review $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        if ($review->delete()) {
            return redirect()->action('RecommendationController@index')->with('status', 'Review removed successfully!');
        }
    }

    /**
     * Survey the specified resource from storage.
     *
     * @param \App\Review $review
     * @return \Illuminate\Http\Response
     */
    public function survey($survey_id)
    {
        $survey_contact = ConsultContact::surveyId($survey_id);

        if ($survey_contact->count() > 0) {
            return view('admin.recommendations.create', compact('survey_id'));
        } else {
            abort(404);
        }
    }

    /**
     * Survey the specified resource from storage.
     *
     * @param \App\Review $review
     * @return \Illuminate\Http\Response
     */
    public function send_survey(ConsultContact $consult_contact)
    {
        // Send an email if the consult contact exist
        if ($consult_contact) {
            // Create/Replace survery id and save to the contact
            $consult_contact->survey_id = str_ireplace('/', 'z', bcrypt(str_ireplace(' ', '_', $consult_contact->full_name() . $consult_contact->id)));

            if ($consult_contact->save()) {
                // Send survey in an email
                \Mail::to($consult_contact->email)->send(new NewContactSurvey($consult_contact));
                \Mail::to('pristineaccting@gmail.com')->send(new AdminContactSurvey($consult_contact));
                return back()->with('status', 'Email Sent Successfully To Contact');
            } else {
                return back()->with('status', 'Survey ID unable to be saved to contact. Please try again');
            }

        } else {
            return back()->with('bad_status', 'Email Not Sent, Please Try Sending Again');
        }
    }
}
