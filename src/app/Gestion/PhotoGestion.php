<?php

namespace App\Gestion;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class PhotoGestion implements PhotoGestionInterface
{
    /**
     * @param UploadedFile $image
     * @return bool
     */
    public function __invoke(UploadedFile $image)
    {
        $chemin = config('image.path');

        $extension = $image->getClientOriginalExtension();

        do {
            $nom = uniqid() . '.' . $extension;
        } while(file_exists($chemin . '/' . $nom));

        if($image->move($chemin, $nom)) {
            return true;
        }

        return false;
    }
}
