<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getInfos()
    {
        return view('users/from');
    }

    public function postInfos(Request $request)
    {
        return view('users/infos', ['infos' => $request->all()]);
    }
}
