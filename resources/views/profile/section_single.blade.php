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
        <div class="courses-main-header"
             style="background: #000 url({{$section->getThumbCategory()}}) no-repeat left bottom/cover;">
            <div class="courses-main-title">
                {{$section->title}}
            </div>
        </div>
        @if($sub_section_id && $sub_section_id != $section_id)
            <div class="courses-main-grid">
                @foreach( $section->getLesson() as $key => $lesson)
                    <div class="courses-main-list block">
                        <div class="courses-main-list-item {{($lesson->getComplete()?'complete':'')}}">
                            <img src="{{ $lesson->getThumb() ?? '/img/empty.png'}}" alt="">
                            <span class="name">{{$key+1}} урок: </span>
                            <a href="{{$lesson->getUrl()}}" class="title">{{$lesson->title}}</a>
                            <span>
                                @if($lesson->getComplete())
                                    <img src="/images/success.png" alt="">
                                @endif
                            </span>
                        </div>
                        @if($test = $lesson->getTest())
                            <div class="courses-main-list-item {{($test->getComplete()?'complete':'')}}">
                                <img src="/images/фото.png" alt="">
                                <span class="name">Тест: </span>
                                <a href="{{$lesson->getTestUrl()}}" class="title">{{$test->title}}</a>
                                <span>
                                @if($test->getComplete())
                                    <img src="/images/success.png" alt="">
                                @endif
                                </span>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        @else
            <div class="courses-main-grid">
                @foreach($section->getChild() as $item)
                    <a href="{{$item->getUrl()}}" class="courses-main-grid-item"
                       style="background-image: url('{{$item->getThumb()}}')">
                    </a>
                @endforeach
            </div>
        @endif
    </div>
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
                                    <a href="{{$value->getUrl()}}"><span>{{$key+1}}.{{$key_+1}}.</span><span>{{$value->title}}</span></a>
                                </li>
                            @endforeach
                        </ul>
                        <span class="parent-btn"></span>
                    </li>
                @else
                    <li>
                        <a href="/home/course/{{$course->id}}/{{$item->id}}"><span>{{($key+1)}}.</span><span>{{$item->title}}</span></a>
                    </li>
                @endif
            @endforeach
        </ul>
    </aside>

@endsection
