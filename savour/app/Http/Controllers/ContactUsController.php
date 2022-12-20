<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    //

    public function create(Request $request)
    {
        return view('welcome/contact');
    }

    // Store Contact Form data

    public function sendForm(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Mail::send('mail', array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'user_query' => $request->message,
        ), function ($message) use ($request) {
            $message->from($request->email);
            $message->to('', 'Admin')->subject($request->subject);
        });

        return back()->with('success', 'We have received your message. We\'ll contact you as soon as possible.');
    }
}
