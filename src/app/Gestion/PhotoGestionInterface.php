<?php

namespace App\Gestion;

use Symfony\Component\HttpFoundation\File\UploadedFile;

interface PhotoGestionInterface
{
    /**
     * @param UploadedFile $image
     * @return bool
     */
    public function __invoke(UploadedFile $image);
}
