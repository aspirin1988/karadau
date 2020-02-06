<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $guarded = [];

    public function getVideoSize(int $size = null)
    {
        $video = $this->video;
        if ($video) {
            if ($size) {
                $path = explode('/', $video);
                $path[count($path) - 1] = $size . '_' . $path[count($path) - 1];

                $video = implode('/', $path);
            }

            return $video;
        } else {
            return null;
        }
    }

}
