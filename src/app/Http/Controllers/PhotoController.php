<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;

class PhotoController extends Controller
{

    public function show()
    {
        return view('photo/show');
    }

    public function create(ImageRequest $request)
    {
        $image = $request->file('image');

        if($image->isValid())
        {
            $chemin = config('image.path');

            $extension = $image->getClientOriginalExtension();

            do {
                $nom = uniqid() . '.' . $extension;
            } while(file_exists($chemin . '/' . $nom));

            if($image->move($chemin, $nom)) {
                return view('photo/confirm');
            }
        }

        return redirect('photo')
            ->with('error','Désolé mais votre image ne peut pas être envoyée !');
    }

}
