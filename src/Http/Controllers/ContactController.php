<?php

namespace ShahrozMian\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use ShahrozMian\Contact\Mail\ContactMailable;
use ShahrozMian\Contact\Models\Contact;

class ContactController extends Controller
{
    function index()
    {
        return view('contact::contact');
    }

    function send(Request $request)
    {
        // return $request;
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message));
        Contact::create($request->all());
        return redirect('/contact');
    }
}
