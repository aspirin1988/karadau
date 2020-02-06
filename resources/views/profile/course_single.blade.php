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
        footer{
            margin-top: 0;
        }
        header{
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
             style="background: #000 url({{$course->getThumbCategory()}}) no-repeat left bottom/cover;">
            <div class="courses-main-title">
                {{$course->title}}
            </div>
        </div>
        <div class="courses-progress">
            <div>
                <label class="progress-label" for="">Курс по {{$course->title}}: <b>{{$course->progress()}}%</b></label>
                <div class="progress">
                    <div style="width:{{$course->progress()}}%"></div>
                </div>
            </div>
        </div>
        <div class="courses-main-grid">
            @foreach($course->getParentSection() as $item)
                <a href="{{$item->getUrl()}}" class="courses-main-grid-item"
                   style="background-image: url('{{$item->getThumb()}}')">
                </a>
            @endforeach
        </div>
    </div>
    <aside>
        <ul>
            @php $key =0; @endphp
            <li><a href="/home/course/{{$course->id}}/intro"><span>вступление</span></a></li>
            @foreach($course->getParentSection() as $key =>  $item)
                @if($child = $item->getChild() and  count($child))
                    <li class="parent {{(request()->getPathInfo()=="/home/course/".$course->id.'/'.$item->id?'open':'')}}">
                        <a href="/home/course/{{$course->id}}/{{$item->id}}"><span>{{($key+1)}}.</span><span>{{$item->title}}</span></a>
                        <ul>
                            @foreach($child as $key_ =>  $value)
                                @php $lessons = $value->getLesson() @endphp
                                <li class="{{(request()->getPathInfo()=="/home/course/".$course->id."/".$item->id || request()->getPathInfo()=="/home/course/".$course->id."/".$item->id."/".$value->id?'active':'')}}">
                                    <a href="/home/course/{{$course->id}}/{{$value->id}}">
                                        <span>{{$key+1}}.{{$key_+1}}.</span><span>{{$value->title}}</span>
                                    </a>
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
