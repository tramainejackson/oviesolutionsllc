<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSettingsRequest;
use App\Http\Requests\StoreMessagesRequest;
use App\Models\Message;
use App\Models\Review;
use App\Models\Term;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Carbon\Carbon;

class SettingController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only('index', 'update', 'update_2', 'messages');
    }

    /**
     * Display a listing of the resource.
     *
     * @return mixed
     */
    public function index()
    {
        $admin = Auth::user();
        $applications = Application::all();
        $messages = Message::all();
        $today = Carbon::now();
        $standard_calls = Price::StandardCalls()->get();
        $no_holds_calls = Price::NoHoldsCalls()->get();
        $sound_room_calls = Price::SoundRoomCalls()->get();

        return view('dashboard', compact('admin', 'applications', 'messages', 'today', 'standard_calls', 'no_holds_calls', 'sound_room_calls'));
    }

    /**
     * Display the web home page
     *
     * @return mixed
     */
    public function welcome()
    {
        return view('welcome');
    }

    /**
     * Display the terms and conditions page
     *
     * @return mixed
     */
    public function terms()
    {
        $all_terms = Term::showTerms();

        return view('terms', compact('all_terms'));
    }

    /**
     * Display the about page
     *
     * @return mixed
     */
    public function about()
    {
        //Return the view
        return view('about');
    }

    /**
     * Display the servives page
     *
     * @return mixed
     */
    public function services()
    {
        //Return the view
        return view('services');
    }

    /**
     * Display the contact page
     *
     * @return mixed
     */
    public function contact()
    {
        //Return the view
        return view('contact');
    }

    /**
     * Store post from contact page
     *
     * @param StoreMessagesRequest $request
     * @return mixed
     */
    public function contact_post(StoreMessagesRequest $request)
    {
        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->phone = $request->phone;
        $message->organization = $request->organization;
        $message->reason = $request->reason;

        if ($message->save()) {
            return back()->with('status', 'Your message has been received! We will review the message and reach out to you with a response in a resonable amount of time. Thank you for contacting us.');
        } else {
            return back()->with('bad_status', 'Message not saved. Please try again.');
        }
    }

    /**
     * Display the admin dashboard
     *
     * @return mixed
     */
    public function dashboard()
    {
        //Return the view
        return view('admin.index');
    }

    /**
     * Update the admin options
     *
     * @param UpdateSettingsRequest $request
     * @return \Illuminate\Http\Response
     */
    public function dashboard_update(UpdateSettingsRequest $request)
    {
        $setting = Setting::first();
        $setting->email = $request->email;
        $setting->phone = $request->phone;
        $setting->address = $request->address;
        $setting->city = $request->city;
        $setting->state = $request->state;
        $setting->zip = $request->zip;
        $setting->mission = $request->mission;
        $setting->vision = $request->vision;

        if($setting->save()) {
            return redirect()->back()->with('status', 'Settings Updated Successfully');
        } else {
            return redirect()->route('welcome')->with('status', 'Settings not updated. Please try to save again.');
        }
    }

    /**
     * Retrieve the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_messages()
    {
        // Get all messages
        $messages = Message::leastRecent();

        return view('admin.messages', compact('messages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return string
     */
    public function admin_messages_remove(Request $request)
    {
        $messages = $request->message_id;
        $remove_count = 0;

        foreach ($messages as $message) {
            if(Message::find($message)->delete()) {
                $remove_count++;
            }
        }

        return back()->with('status', 'You have removed ' . $remove_count . ' messages successfully.');
    }

    /**
     * Display the admin dashboard
     *
     * @return mixed
     */
    public function admin_terms()
    {
        $all_terms = Term::all();

        //Return the view
        return view('admin.terms', compact('all_terms'));
    }

    /**
     * Display the admin dashboard
     *
     * @return string
     */
    public function admin_terms_update(Request $request)
    {
        $term = Term::find(str_ireplace('term_num_', '', $request->term_id));

        $term->show_term = $request->show_term;

        if($term->save()) {
            return 'Term/Condition Updated Successfully';
        } else {
            return 'Term/Condition Not Updated Successfully. Please Try Again';
        }
    }

    /**
     * Display the admin dashboard
     *
     * @return mixed
     */
    public function admin_reviews()
    {
        $reviews = Review::all();

        //Return the view
        return view('admin.reviews', compact('reviews'));
    }

    /**
     * Update the admin options in database
     * @return string
     */
    public function admin_reviews_update(Request $request)
    {
        $review = Review::find(str_ireplace('review_num_', '', $request->review_id));

        $review->show_review = $request->show_review;

        if($review->save()) {
            return 'Review Updated Successfully';
        } else {
            return 'Review Not Updated. Please Try Again.';
        }

    }
}
