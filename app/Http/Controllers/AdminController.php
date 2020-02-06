<?php

namespace App\Http\Controllers;

use App\RedisData;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

//    public function reset()
//    {
//        return view('auth.reset_form');
//    }
//
//    public function updatePassword (Request $request)
//    {
//
//    }

    public function index()
    {
        return view('admin.home');
    }
//    public function myCommand()
//    {
//        return view('admin.user.my_command');
//    }

    public function trial()
    {
        return view('admin.user.trial');
    }

    public function config()
    {
        return view('admin.user.config');
    }

    public function getTrial()
    {
        $resource = new RedisData('karada');
        $trial = $resource->getKey('trial', 'limit');
        $price = $resource->getKey('trial', 'price');

        return response()->json([
            'limit' => $trial,
            'price' => $price,
        ]);

    }

    public function setTrial(Request $request)
    {
        $limit = (int)$request->input('limit');
        $price = (int)$request->input('price');


        $resource = new RedisData('karada');
        $trial = $resource->setKey($limit, 'trial', 'limit');
        $price = $resource->setKey($price, 'trial', 'price');

        return response()->json([
            'limit' => $trial,
            'price' => $price,
        ]);

    }

    public function getConfig()
    {
        $resource = new RedisData('karada');
        $video_id = $resource->getKey('trial', 'video');
        $video_title = $resource->getKeyRaw('trial', 'video_title');

        $video = Video::where('id', $video_id)->first();

        return response()->json([
            'video' => $video,
            'video_title' => $video_title,
        ]);

    }

    public function setConfig(Request $request)
    {
        $video = $request->input('video');
        $video_title = $request->input('video_title');
        if (isset($video) && isset($video['id'])) {
            $video_id = $video['id'];
        }else{
            $video_id = 0;
        }
        $resource = new RedisData('karada');
        $video_id = $resource->setKey($video_id, 'trial', 'video');
        $resource->setKeyRaw($video_title, 'trial', 'video_title');

        $video = Video::where('id', $video_id)->first();

        return response()->json([
            'video' => $video,
            'video_title' => $video_title,
        ]);
    }
}
