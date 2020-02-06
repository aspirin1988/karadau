<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ExecutiveSection extends Model
{
    protected $guarded =[];

    public function getVideo()
    {
        return Video::where('id', $this->video_id)->first();
    }

    public function getVideoSize(int $size = null)
    {
        $video = $this->getVideo();
        if($video) {
            if ($size) {
                $path = explode('/', $video->video);
                $path[count($path) - 1] = $size . '_' . $path[count($path) - 1];

                $video->video = implode('/', $path);
            }
            return $video->video;
        }else{
            return null;
        }

    }
    public function isSee()
    {
        $user_id = Auth::id();
        $key = "user_{$user_id}:see";
        $id = "executive_section:{$this->id}";

        $resource = new RedisData('karada');
        return $resource->getKey($key, $id);


    }
}
