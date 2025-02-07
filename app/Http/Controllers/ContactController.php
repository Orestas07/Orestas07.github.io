<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::raw($request->message, function ($message) use ($request) {
            $message->to('your-email@example.com') 
                ->subject("New Contact Form Submission from {$request->name}");
        });

        return back()->with('success', 'Message sent successfully!');
    }
}
