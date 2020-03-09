<?php

namespace App\Http\Controllers;

use App\Email;
use App\Http\Requests\EmailRequest;
use App\Repository\Email\EmailInterface;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function getForm(Request $request)
    {
        return view('register/show');
    }

    /**
     * @param EmailRequest $request
     * @param EmailInterface $emailRepository
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function postForm(
        EmailRequest $request,
        EmailInterface $emailRepository
    ) {

        $email = $request->input('email');;

        $emailRepository->save($email);

        return view('register/verify', ['email' => $email]);
    }
}
