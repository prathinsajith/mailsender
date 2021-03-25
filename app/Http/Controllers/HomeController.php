<?php

namespace App\Http\Controllers;

use App\Models\Sendmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = [

            'job_title' => 'Super Admin',
        ];
        $ip = request()->ip();
        $data = geoip($ip);

        return view('home', compact('user', 'data'));
    }

    public function mailSend(Request $request)
    {

        $request->validate([
            'recipient_name' => 'required|max:255',
            'recipient_email' => 'required|email',
            'subject' => 'required|max:555',
            'title' => 'required',
        ]);

        $data = new Sendmail();
        $data->recipient_name = $request->input('recipient_name');
        $data->sender_id = Auth::id();
        $data->recipient_email = $request->input('recipient_email');
        $data->title = $request->input('title');
        $data->subject = $request->input('subject');
        $data->save();

        $details = [
            'name' => $request->input('recipient_name'),
            'title' => $request->input('title'),
            'body' => $request->input('subject')
        ];

        Mail::to($request->input('recipient_email'))->send(new \App\Mail\MyTestMail($details));

        return  redirect()->back()->with('success', 'Mail Send Successfully.');

    }

    public function mailEntry()
    {
        $user = [
            'job_title' => 'Super Admin',
        ];
        return view('mailentry', compact('user'));
    }
}
