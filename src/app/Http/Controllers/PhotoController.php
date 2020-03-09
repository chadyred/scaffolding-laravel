<?php

namespace App\Http\Controllers;

use App\Gestion\PhotoGestionInterface;
use App\Http\Requests\ImageRequest;

class PhotoController extends Controller
{

    public function show()
    {
        return view('photo/show');
    }

    public function create(
        ImageRequest $request,
        PhotoGestionInterface $photoGestion
    )
    {
        $image = $request->file('image');

        if($image->isValid()) {
            $done = $photoGestion($image);

            if ($done) {
                return view('photo/confirm');
            }
        }

        return redirect('photo')
            ->with('error','Désolé mais votre image ne peut pas être envoyée !');
    }

}
