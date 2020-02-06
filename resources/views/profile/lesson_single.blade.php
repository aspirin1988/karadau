@extends('profile.app')

@section('styles')
    @parent
    <link rel="stylesheet" href="/css/courses.css?v=34">
    <style>
        #app {
            display: grid;
            grid-template-columns: 400px calc(100% - 400px);
            background-color: white;
            margin-top: 70px;
        }

        .courses-main {
            margin: 0;
        }

        aside {
            position: relative;
            order: -1;
            left: 0;
            top: 0;
            height: 100%;
        }

        footer {
            margin-top: 0;
        }

        header {
            z-index: 1;
        }
    </style>

@stop

@section('script')
    @parent
    <script src="/js/courses.js"></script>
@stop

@section('content')
    <div class="courses-main">
        <div class="lesson">
            @foreach($lesson->getVideo() as $video )
                {{--                <video  src="{{$video->getVideoSize()}}"></video>--}}
                <video class="lesson-video" src="{{$video->getVideoSize()}}"
                       data-video-1080="{{$video->getVideoSize()}}" data-video-720="{{$video->getVideoSize(720)}}"
                       data-video-480="{{$video->getVideoSize(480)}}"></video>
            @endforeach
            <div class="text">
                <div class="lesson-title">{{$lesson->title}}</div>
                {!! $lesson->description !!}
            </div>
            @foreach($lesson->getDocs() as $doc )
                <a href="{{$doc['url']}}" download="{{$doc['name']}}" class="pdf-download button round button-gray-stroke">{{$doc['name']}}</a>
            @endforeach

            @if($test = $lesson->getTest())
                <div class="test-button-container">
                    <a href="{{$lesson->getTestUrl()}}" rel="motivation_modal_close"
                       class="button round button-yellow-stroke">решать тест</a>
                </div>
            @endif
        </div>
    </div>
    <timer-component :id="'{{\Illuminate\Support\Facades\Auth::id()}}'"
                     :course_id="'{{$course->id}}'"></timer-component>
    <aside>
        <ul>
            @php $key =0; @endphp
            <li><a href="/home/course/{{$course->id}}/intro"><span>вступление</span></a></li>
            @foreach($course->getParentSection() as $key =>  $item)
                @if($child = $item->getChild() and  count($child))
                    <li class="parent {{($section_id==$item->id?'open':'')}}">
                        <a href="{{$item->getUrl()}}"><span>{{($key+1)}}.</span><span>{{$item->title}}</span></a>
                        <ul>
                            @foreach($child as $key_ =>  $value)
                                @php $lessons = $value->getLesson() @endphp
                                <li class="{{($sub_section_id==$value->id?'active':'')}}">
                                    <a href="{{$value->getUrl()}}"><span>{{$key+1}}.{{$key_+1}}.</span><span>{{$value->title}}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        <span class="parent-btn"></span>
                    </li>
                @else
                    <li><a href="{{$item->getUrl()}}"><span>{{($key+1)}}.</span><span>{{$item->title}}</span></a></li>
                @endif
            @endforeach
        </ul>
    </aside>
@endsection
