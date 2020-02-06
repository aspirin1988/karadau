<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Section extends Model
{
    protected $guarded = [];

    public function getChild()
    {
        return Section::where('parent_id', $this->id)->orderBy('sort', 'desc')->get();
    }

    public function getLesson()
    {
        return Lesson::where('section_id', $this->id)->get();
    }

    public function getUrl()
    {
//        if ($this->parent_id) {
//            return "/home/course/" . $this->course_id . "/" . $this->parent_id . "/" . $this->id;

//        } else {
        return "/home/course/" . $this->course_id . "/" . $this->id;

//        }

    }

    public function getThumb()
    {
        $thumb = Media::where('id', $this->thumb)->first();

        if ($thumb) {
            return $thumb->image;
        } else {
            return '/img/empty.png';
        }
    }

    public function getThumbCategory()
    {
        $thumb = Media::where('id', $this->thumb_category)->first();

        if ($thumb) {
            return $thumb->image;
        } else {
            return '/img/empty.png';
        }
    }

    public function getLessonsCountCheck()
    {
        $lessons = 0;
        $tests = 0;
        $tests_check = 0;
        $resource = new RedisData('karada');
        $user_id = Auth::id();
        $sections = $this->getChild();

        $result = [
            'id' => $this->id,
            'progress_lesson' => 0,
            'progress_test' => 0,
        ];

        foreach ($sections as $section) {

            $lessons_ = $section->getLesson();

            foreach ($lessons_ as $item) {
                $key = "user_{$user_id}:stat:lesson";

                if ($resource->getKey($key, $item->id)) {
                    $lessons++;
                }

                $test = $item->getTest();
                if ($test) {
                    $tests++;
                    if ($test->getComplete()) {
                        $tests_check++;
                    }
                }
            }
        }

        $result ['progress_lesson'] = ($lessons > 0 ? intval((count($lessons_) / $lessons) * 100) : 0);
        $result ['progress_test'] = ($tests_check > 0 ? intval(($tests / $tests_check) * 100) : 0);
        $result ['section_id'] = $this->id;
        $result ['template'] = $this->certificats;


        return $result;
    }
}
