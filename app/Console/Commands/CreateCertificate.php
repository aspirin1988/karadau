<?php

namespace App\Console\Commands;

use App\Certificat;
use App\Course;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;

class CreateCertificate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'certificate:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $users = User::get();


        $sales = Course::where('id', 1)->first();
        $marketing = Course::where('id', 2)->first();

        foreach ($users as $user) {

            Auth::login($user);
            $marketing_stat = [];
            $marketing_sections = $marketing->getParentSection();
            foreach ($marketing_sections as $key => $marketing_section) {
                $marketing_sections[$key]->child = $marketing_section->getChild();
                $course_stat = $marketing_sections[$key]->getLessonsCountCheck();
                $marketing_stat[] = $course_stat;
            }
            $sales_stat = [];
            $sales_sections = $sales->getParentSection();
            foreach ($sales_sections as $key => $sales_section) {
                $sales_sections[$key]->child = $sales_section->getChild();
                $course_stat = $sales_sections[$key]->getLessonsCountCheck();
                $sales_stat[] = $course_stat;
            }
            foreach ($marketing_stat as $item) {
                $certificat = Certificat::where('user_id', $user->id)->where('section_id', $item['id'])->first();
                if (!$certificat) {

                    if ($item['progress_lesson'] && $item['progress_lesson']) {
                        $certificat = Certificat::create([
                            'user_id' => $user->id,
                            'user_name' => $user->first_name . ' ' . $user->last_name,
                            'section' => 'M',
                            'image' => '',
                            'section_id' => $item['section_id'],
                        ]);
                        $num = sprintf('M%04d', $certificat->id);
                        $path = '/images/user/' . $user->id . '/' . $num . '.png';
                        $thumb = '/images/user/' . $user->id . '/' . $num . '_thumb.png';
                        if ($item['template']) {
                            $template = public_path($item['template']);
                        } else {
                            $template = public_path('certificate/m_template.jpg');
                        }
                        var_dump($template,$item['section_id']);
                        $img = Image::make($template);
                        $img->text($num, 290, 2175, function ($font) {
                            $font->file(public_path('fonts/Montserrat-Black.ttf'));
                            $font->size(120);
                            $font->color('#000000');
                            $font->align('left');
                            $font->valign('top');
                            $font->angle(0);
                        });

                        $img->text($user->first_name, 1050, 1050, function ($font) {
                            $font->file(public_path('fonts/Montserrat-Medium.ttf'));
                            $font->size(200);
                            $font->color('#000000');
                            $font->align('left');
                            $font->valign('top');
                            $font->angle(0);
                        });
                        $img->text($user->last_name, 1050, 1300, function ($font) {
                            $font->file(public_path('fonts/Montserrat-Medium.ttf'));
                            $font->size(200);
                            $font->color('#000000');
                            $font->align('left');
                            $font->valign('top');
                            $font->angle(0);
                        });
                        $img->text(date('d.m.Y'), 2800, 2175, function ($font) {
                            $font->file(public_path('fonts/Montserrat-Light.ttf'));
                            $font->size(120);
                            $font->color('#000000');
                            $font->align('left');
                            $font->valign('top');
                            $font->angle(0);
                        });

                        $img->save(public_path($path));
                        $img->resize(300, 212);
                        $img->save(public_path($thumb));

                        $certificat->image = $path;
                        $certificat->thumb = $thumb;
                        $certificat->save();
                    }
                }


            }
            foreach ($sales_stat as $item) {
                $certificat = Certificat::where('user_id', $user->id)->where('section_id', $item['id'])->first();
                if (!$certificat) {

                    if ($item['progress_lesson'] && $item['progress_lesson']) {
                        $num_section = sprintf('S-%02d-', $item['section_id']);
                        $certificat = Certificat::create([
                            'user_id' => $user->id,
                            'user_name' => $user->first_name . ' ' . $user->last_name,
                            'section' => $num_section,
                            'image' => '',
                            'section_id' => $item['section_id'],
                        ]);
                        $num = sprintf($num_section.'%04d', $certificat->id);
                        $path = '/images/user/' . $user->id . '/' . $num . '.png';
                        $thumb = '/images/user/' . $user->id . '/' . $num . '_thumb.png';
                        if ($item['template']) {
                            $template = public_path($item['template']);
                        } else {
                            $template = public_path('certificate/s_template.jpg');
                        }
                        var_dump($template,$item['section_id']);
                        $img = Image::make($template);
                        $img->text($num, 260, 2175, function ($font) {
                            $font->file(public_path('fonts/Montserrat-Black.ttf'));
                            $font->size(100);
                            $font->color('#000000');
                            $font->align('left');
                            $font->valign('top');
                            $font->angle(0);
                        });

                        $img->text($user->first_name, 1050, 1050, function ($font) {
                            $font->file(public_path('fonts/Montserrat-Medium.ttf'));
                            $font->size(200);
                            $font->color('#000000');
                            $font->align('left');
                            $font->valign('top');
                            $font->angle(0);
                        });
                        $img->text($user->last_name, 1050, 1300, function ($font) {
                            $font->file(public_path('fonts/Montserrat-Medium.ttf'));
                            $font->size(200);
                            $font->color('#000000');
                            $font->align('left');
                            $font->valign('top');
                            $font->angle(0);
                        });
                        $img->text(date('d.m.Y'), 2800, 2175, function ($font) {
                            $font->file(public_path('fonts/Montserrat-Light.ttf'));
                            $font->size(120);
                            $font->color('#000000');
                            $font->align('left');
                            $font->valign('top');
                            $font->angle(0);
                        });

                        $img->save(public_path($path));
                        $img->resize(300, 212);
                        $img->save(public_path($thumb));

                        $certificat->image = $path;
                        $certificat->thumb = $thumb;
                        $certificat->save();
                    }
                }
            }

            if ($sales->progress() == 100) {
                $certificat = Certificat::where('user_id', $user->id)->where('section', 'SD')->first();
                if (!$certificat) {
                    $certificat = Certificat::create([
                        'user_id' => $user->id,
                        'user_name' => $user->first_name . ' ' . $user->last_name,
                        'section' => 'SD-',
                        'image' => '',
                        'section_id' => 0,
                    ]);
                    $num = sprintf('SD-%04d', $certificat->id);
                    $path = '/images/user/' . $user->id . '/' . $num . '.png';
                    $thumb = '/images/user/' . $user->id . '/' . $num . '_thumb.png';
                    $template = public_path('certificate/s_certificate_template.jpg');
                    var_dump($template);
                    $img = Image::make($template);
                    $img->text($num, 260, 2175, function ($font) {
                        $font->file(public_path('fonts/Montserrat-Black.ttf'));
                        $font->size(110);
                        $font->color('#000000');
                        $font->align('left');
                        $font->valign('top');
                        $font->angle(0);
                    });

                    $img->text($user->first_name, 1050, 1050, function ($font) {
                        $font->file(public_path('fonts/Montserrat-Medium.ttf'));
                        $font->size(200);
                        $font->color('#000000');
                        $font->align('left');
                        $font->valign('top');
                        $font->angle(0);
                    });
                    $img->text($user->last_name, 1050, 1300, function ($font) {
                        $font->file(public_path('fonts/Montserrat-Medium.ttf'));
                        $font->size(200);
                        $font->color('#000000');
                        $font->align('left');
                        $font->valign('top');
                        $font->angle(0);
                    });
                    $img->text(date('d.m.Y'), 2800, 2175, function ($font) {
                        $font->file(public_path('fonts/Montserrat-Light.ttf'));
                        $font->size(120);
                        $font->color('#000000');
                        $font->align('left');
                        $font->valign('top');
                        $font->angle(0);
                    });

                    $img->save(public_path($path));
                    $img->resize(300, 212);
                    $img->save(public_path($thumb));

                    $certificat->image = $path;
                    $certificat->thumb = $thumb;
                    $certificat->save();
                }
            }
            if ($marketing->progress() == 100) {
                $certificat = Certificat::where('user_id', $user->id)->where('section', 'MD')->first();
                if (!$certificat) {
                    $certificat = Certificat::create([
                        'user_id' => $user->id,
                        'user_name' => $user->first_name . ' ' . $user->last_name,
                        'section' => 'MD',
                        'image' => '',
                        'section_id' => 0,
                    ]);
                    $num = sprintf('MD%04d', $certificat->id);
                    $path = '/images/user/' . $user->id . '/' . $num . '.png';
                    $thumb = '/images/user/' . $user->id . '/' . $num . '_thumb.png';
                    $template = public_path('certificate/m_certificate_template.jpg');
                    var_dump($template);
                    $img = Image::make($template);
                    $img->text($num, 290, 2175, function ($font) {
                        $font->file(public_path('fonts/Montserrat-Black.ttf'));
                        $font->size(120);
                        $font->color('#000000');
                        $font->align('left');
                        $font->valign('top');
                        $font->angle(0);
                    });

                    $img->text($user->first_name, 1050, 1050, function ($font) {
                        $font->file(public_path('fonts/Montserrat-Medium.ttf'));
                        $font->size(200);
                        $font->color('#000000');
                        $font->align('left');
                        $font->valign('top');
                        $font->angle(0);
                    });
                    $img->text($user->last_name, 1050, 1300, function ($font) {
                        $font->file(public_path('fonts/Montserrat-Medium.ttf'));
                        $font->size(200);
                        $font->color('#000000');
                        $font->align('left');
                        $font->valign('top');
                        $font->angle(0);
                    });
                    $img->text(date('d.m.Y'), 2800, 2175, function ($font) {
                        $font->file(public_path('fonts/Montserrat-Light.ttf'));
                        $font->size(120);
                        $font->color('#000000');
                        $font->align('left');
                        $font->valign('top');
                        $font->angle(0);
                    });

                    $img->save(public_path($path));
                    $img->resize(300, 212);
                    $img->save(public_path($thumb));

                    $certificat->image = $path;
                    $certificat->thumb = $thumb;
                    $certificat->save();
                }
            }

            if ($sales->progress() == 100 && $marketing->progress() == 100) {

                Mail::send('emails.complete', ['user' => $user], function ($m) use ($user) {
                    $m->from('karada.help@mail.ru', 'Karadau');
                    $m->to('info@karada.kz', 'karada.kz')->subject($user->first_name . ' завершил оба курса. ');
                });

            }
        }


    }
}
