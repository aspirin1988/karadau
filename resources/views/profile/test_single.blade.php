@extends('profile.app')

@section('styles')
    @parent
    <link rel="stylesheet" href="/css/test.css?v=34">
@stop

@section('script')
    @parent
    <script src="/js/courses.js"></script>
@stop

@section('content')
    <div class="container">
        <div class="test-container">
            @php $next_url  = ($next_lesson?$next_lesson->getUrl():$lesson->getUrl())  @endphp
            <div class="test-title">Тест: <br> “{{$test->title}}”</div>
            <test-widget-component :id="'{{$test->id}}'" :back_url="'{{$lesson->getUrl()}}'" :next_url="'{{$next_url}}'" ></test-widget-component>
            <timer-component :id="'{{\Illuminate\Support\Facades\Auth::id()}}'" :course_id="'{{$course_id}}'"  ></timer-component>
        </div>
    </div>
@endsection
