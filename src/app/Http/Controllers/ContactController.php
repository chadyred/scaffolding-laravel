<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact/show');
    }

    public function create(Request $request)
    {
        return view('contact/create', ['form' => $request->all()]);
    }
}
