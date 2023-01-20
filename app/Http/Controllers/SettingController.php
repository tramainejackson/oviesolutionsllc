<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSettingsRequest;
use App\Http\Requests\StoreMessagesRequest;
use App\Models\Message;
use App\Models\Review;
use App\Models\Term;
use App\Models\Setting;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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
            return back()->with('status', 'You contact request has been save! We will reach out to you in a reasonable amount of time. Thank You');
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
            return redirect()->route('welcome')->with('status', 'Message Sent Successfully');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Models\Setting $message
     * @return \Illuminate\Http\Response
     */
    public function admin_messages()
    {
        // Get all messages
        $messages = Message::paginate(10);

        return view('admin.messages', compact('messages'));
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
     * @return mixed
     */
    public function admin_terms_update(Request $request)
    {
        $term = Term::find(str_ireplace('term_num_', '', $request->term_id));

        $term->show_term = $request->show_term;

        $term->save();
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
     * Display the admin dashboard
     *
     * @return mixed
     */
    public function admin_reviews_update(Request $request)
    {
        $review = Review::find(str_ireplace('review_num_', '', $request->review_id));

        $review->show_review = $request->show_review;

        $review->save();
    }

    /**
     * Display the payment options
     *
     * @return mixed
     */
    public function payment_options()
    {
        //Return the view
        return view('payment');
    }

    /**
     * Post and save a contact message
     *
     * @return mixed
     */
    public function send_contact(Request $request)
    {
        $message = new Message();

        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message;

        if ($message->save()) {
            return redirect()->route('welcome')->with('status', 'Message Sent Successfully');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreSettingRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSettingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Setting $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Setting $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateSettingRequest $request
     * @param \App\Models\Setting $setting
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePriceRequest $request, Setting $setting)
    {
        // Get settings instance
        // $settings = $setting;

        // Validated data
        $validated = $request->safe();

        // Add values to application variable
        foreach ($validated as $key => $value) {
            Price::where('type', $key)
                ->update(['price' => $value]);
        }

        return redirect()->back()->with('status', 'Prices updated successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateSettingRequest $request
     * @param \App\Models\Setting $setting
     * @return \Illuminate\Http\Response
     */
    public function update_2(UpdateSettingRequest $request, Setting $setting)
    {
        // Get settings instance
        $settings = $setting;
        dd($settings);
        // Validated data
        $validated = $request->safe();

        // Add values to application variable
        foreach ($validated as $key => $value) {
            Price::where('type', $key)
                ->update(['price' => $value]);
        }

        return redirect()->back()->with('status', 'Settings updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Setting $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }

    public function remove_multiple_messages(Request $request)
    {
        $remove_selected = $request->remove_message;
        $removed_count = 0;

        foreach ($remove_selected as $message_id) {
            $message = Message::find($message_id);

            // Removed Consult Request
            if ($message->delete()) {
                $removed_count++;
            }
        }

        return back()->with('status', $removed_count . ' Messages Removed Successfully');
    }
}
