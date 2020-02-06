<?php

namespace App\Http\Controllers;

use App\ArbitraryFields;
use App\Mail\DemoEmail;
use App\Page;
use App\PromoCode;
use App\RedisData;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    public function index()
    {
//        return redirect()->to('http://karadau.kz/');

        if (request()->getHttpHost() !== 'karada.kz') {
            $page = Page::where('slug', 'index')->first();

            return view('profile.main_index', ['page' => $page]);
        } else {

            $slug = 'consulting';
            $page = Page::where('slug', $slug)->where('status', true)->first();
            if (!$page) {
                return abort(404);
            }
            $data = ArbitraryFields::where('object_type', 'page')->where('object_id', $page->id)->first();
            $result = [];
            if ($data) {
                $fields = json_decode($data->fields, true);
                foreach ($fields as $item) {
                    $result[$item['key']] = $item['value'];
                }
            }

            $template_path = "pages." . $slug . '.index';

            return view($template_path, ['fields' => $result, 'test' => 'test']);
        }

    }

    public function book()
    {
        return view('book');
    }

    public function partnership()
    {
        return view('partnership');
    }

    public function events()
    {
        return view('events');
    }

    public function reviews()
    {
        return view('reviews');
    }

    public function clients()
    {
        return view('clients');
    }

    public function about()
    {
        return view('about');
    }

    public function speaker()
    {
        return view('speaker');
    }

    public function masterClass()
    {
        return view('master_class');
    }

    public function consulting()
    {
        return view('consulting');
    }

    public function workshop()
    {
        return view('workshop');
    }

    public function onlineCourse()
    {
        return view('online_course');
    }

    public function orderForm(Request $request)
    {
        $data = $request->all();

//        Mail::to('aspirins24@gmail.com')->send(new DemoEmail());
        $type = [
            'counseling' => "“КОНСУЛЬТАЦИИ”",
            'project_consulting' => "“ПРОЕКТНЫЙ КОНСАЛТИНГ”",
        ];

        Mail::send('emails.consulting', ['data' => $data, 'type' => $type], function ($m) use ($data, $type) {
            $m->from('karada.help@mail.ru', 'Karadau');
            $m->to('info@karada.kz', 'karada.kz')->subject('Заявка на услугу ' . $type[$data['type']]);
        });

        return response()->json(['result' => true]);
    }

    public function getPrice(Request $request)
    {
        $code = $request->input('code');

        $resource = new RedisData('karada');
        $trial = $resource->getKey('trial', 'limit');
        $price = $resource->getKey('trial', 'price');

        $promo_code = PromoCode::where('code', $code)->where('date_end', '>', Carbon::now())->first();
        if ($promo_code) {
            $price = ceil(($price / 100) * (100 - $promo_code->discount));
        }

        return response()->json(['price' => $price]);
    }
}
