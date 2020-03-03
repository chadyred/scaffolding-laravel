<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact/show');
    }

    public function create(ContactRequest $request)
    {
        Mail::send('contact/email', $request->all(), function (Message $message) use ($request) {
            $message
                ->from('contact@contact.com')
                ->to('chadyred@gmail.com')
                ->subject('Contact')
            ;
        });

        return view('contact/confirm', ['form' => $request->all()]);
    }
}
