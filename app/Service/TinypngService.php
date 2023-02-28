<?php

namespace App\Service;

use Tinify;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class TinypngService
{
    public string $profile_photo_path;

    /**
     * Update the user's profile photo.
     *
     * @param  App\Models\User $user
     */
    public function __construct(User $user)
    {
        $this->profile_photo_path = $user->profile_photo_path;
    }

    /**
     * Update the user's profile photo.
     *
     * @param  App\Models\User $user
     */
    public function resizeAvatar()
    {
        Tinify\setKey("8kHJt1jRmHj5YVbt0bL9vbkcxHzffQsf");
        $source = Tinify\fromFile(Storage::disk(config('jetstream.profile_photo_disk', 'public'))
        ->url($this->profile_photo_path));

        $resized = $source->resize(array(
            "method" => "cover",
            "width" => 70,
            "height" => 70
        ));

        $resized->toFile("storage/" . $this->profile_photo_path);
    }
}
