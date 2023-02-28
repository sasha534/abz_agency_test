<?php

namespace App\Service;

use Tinify;
use Illuminate\Http\UploadedFile;

class TinypngService
{
    public UploadedFile $photo;

    /**
     * Update the user's profile photo.
     *
     * @param  \Illuminate\Http\UploadedFile $photo
     */
    public function __construct(UploadedFile $photo)
    {
        $this->photo = $photo;
    }

    /**
     * Update the user's profile photo.
     *
     * @param  \Illuminate\Http\UploadedFile $photo
     */
    public function resizeAvatar()
    {
        // $tinify = \Tinify\setKey("YOUR_API_KEY");
        dd($this->photo);
        // $source = $tinify->fromFile("large.jpg");
        $source = \Tinify\fromFile("large.jpg");
        $resized = $source->resize(array(
            "method" => "fit",
            "width" => 70,
            "height" => 70
        ));
        $resized->toFile("thumbnail.jpg");


    }
}
