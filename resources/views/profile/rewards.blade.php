@extends('profile.app')

@section('content')
    <div class="container">
        <div class="rewards-grid">
            <div class="rewards-grid-item block">
                <div class="rewards-title">
                    Продажи:
                </div>
                <div class="rewards-img">
                    {{--                    <img src="/images/rewards.png" alt="">--}}
                </div>
                <div class="rewards-body">
                    <div>
                        <label class="progress-label" for="">Сертификатов: <b>{{count($sales_cer)}}
                                / {{$sales_cer_count}}</b></label>
                        <div class="progress">
                            <div style="width: {{ceil((count($sales_cer)/$sales_cer_count)*100)}}%"></div>
                        </div>
                        @if(!($user->isChief() || $user->isAdmin() || $user->isSolo()))<p style="text-align: center; margin-top: 20px; font-size: 18px; font-family: Montserrat;">Для получения сертификата обратитесь к своему руководителю.</p>@endif

                        <div class="rewards-body-grid">
                            @foreach($sales_section as $key => $item)
                                @php $item = (isset($sales_cer[$key])?$sales_cer[$key]:null) @endphp
                                @if($item)
                                    <div data-img="{{$item->image}}" class="rewards-body-grid-item complete" {{($user->isChief() || $user->isAdmin() || $user->isSolo()? "reward-download=\"1\"":'') }} >
                                        <img src="{{$item->thumb}}" alt="">
                                    </div>
                                @else
                                    <div class="rewards-body-grid-item">
                                        <img src="/images/Group_4.png" alt="">
                                    </div>
                                @endif
                            @endforeach
                        </div>

                    </div>
                </div>

            </div>
{{--            <div class="rewards-grid-item block">--}}
{{--                <div class="rewards-title">--}}
{{--                    Маркетинг:--}}
{{--                </div>--}}
{{--                <div class="rewards-img">--}}
{{--                    --}}{{--                    <img src="/images/rewards.png" alt="">--}}
{{--                </div>--}}
{{--                <div class="rewards-body">--}}
{{--                    <div>--}}
{{--                        <label class="progress-label" for="">Сертификатов: <b>{{count($marketing_cer)}}--}}
{{--                                / {{$marketing_cer_count}}</b></label>--}}
{{--                        <div class="progress">--}}
{{--                            <div style="width: 0%"></div>--}}
{{--                        </div>--}}
{{--                        <div class="rewards-body-grid">--}}
{{--                            @foreach($marketing_section as $key => $item)--}}
{{--                                @php $item = (isset($marketing_cer[$key])?$marketing_cer[$key] :null) @endphp--}}
{{--                                @if($item)--}}
{{--                                    <div data-img="{{$item->image}}" class="rewards-body-grid-item complete"--}}
{{--                                         reward-download="1">--}}
{{--                                        <img src="{{$item->image}}" alt="">--}}
{{--                                    </div>--}}
{{--                                @else--}}
{{--                                    <div class="rewards-body-grid-item"--}}
{{--                                         reward-download="1">--}}
{{--                                        <img src="/images/Group_4.png" alt="">--}}
{{--                                    </div>--}}
{{--                                @endif--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

        </div>
        <div class="offcanvas" rel="download_rewards_modal">
            <div class="overlay"></div>
            <div class="center-center">
                <div>
                    <img src="/images/rewards_big.png" alt="">
                    <div class="form">

                        <div class="row flex-center">
                            <a href="#" rel="modal_close" class="button round button-gray-stroke">закрыть</a>
                            <a href="#" download="" class="button round button-yellow-stroke">скачать</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
