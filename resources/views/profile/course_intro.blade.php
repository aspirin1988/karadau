@extends('profile.app')

@section('styles')
    @parent
    <link rel="stylesheet" href="/css/courses.css?v=34">
@stop

@section('script')
    @parent
    <script src="/js/courses.js"></script>
@stop

@section('content')
    <div class="courses-main">
        <div class="lesson">
            <video class="lesson-video" src="{{$course->getVideoSize()}}" data-video-1080="{{$course->getVideoSize()}}"
                   data-video-720="{{$course->getVideoSize(720)}}"
                   data-video-480="{{$course->getVideoSize(480)}}"></video>
            <div class="text">
                <div class="lesson-title">Вступление</div>
                {!! $course->description !!}
            </div>
        </div>
    </div>
    <aside>
        <ul>
            @php $key =0; @endphp
            <li class="parent open"><a href="/home/course/{{$course->id}}/intro">вступление</a></li>
            @foreach($course->getParentSection() as $key =>  $item)
                @if($child = $item->getChild() and  count($child))
                    <li class="parent {{(request()->getPathInfo()=="/home/course/".$course->id.'/'.$item->id?'open':'')}}">
                        <a href="/home/course/{{$course->id}}/{{$item->id}}"><span>{{($key+1)}}.</span><span>{{$item->title}}</span>
                        <ul>
                            @foreach($child as $key_ =>  $value)
                                @php $lessons = $value->getLesson() @endphp
                                <li class="{{(request()->getPathInfo()=="/home/course/".$course->id."/".$item->id || request()->getPathInfo()=="/home/course/".$course->id."/".$item->id."/".$value->id?'active':'')}}">
                                    <a href="/home/course/{{$course->id}}/{{$value->id}}"><span>{{$key+1}}.{{$key_+1}}.</span><span>{{$value->title}}</span></a>
                                </li>
                            @endforeach
                        </ul>
                        <span class="parent-btn"></span>
                    </li>
                @else
                @endif
            @endforeach
        </ul>
    </aside>

@endsection
