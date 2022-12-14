<?php

namespace App\Http\Controllers;

//use App\Http\Requests\StoreSettingRequest;
//use App\Http\Requests\UpdateSettingRequest;
//use App\Http\Requests\UpdatePriceRequest;
//use App\Models\Message;
//use App\Models\Application;
//use App\Models\Price;
//use App\Models\Setting;
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
        return view('terms');
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
     * Display the reviews page
     *
     * @return mixed
     */
    public function reviews()
    {
        //Return the view
        return view('reviews');
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
     * Update the specified resource in storage.
     *
     * @param \App\Models\Setting $message
     * @return \Illuminate\Http\Response
     */
    public function messages()
    {
        // Get all messages
        $messages = Message::paginate(10);

        return view('messages', compact('messages'));
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

    public function remove_multiple_messages(Request $request) {
        $remove_selected = $request->remove_message;
        $removed_count = 0;

        foreach ($remove_selected as $message_id) {
            $message = Message::find($message_id);

            // Removed Consult Request
            if($message->delete()) {
                $removed_count++;
            }
        }

        return back()->with('status', $removed_count . ' Messages Removed Successfully');
    }
}
