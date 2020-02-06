@extends('profile.app')

@section('content')

    @if(!$user->getAccess())
        <div class="offcanvas active" rel="no-pay">
            <div class="no-pay-overlay"></div>
            <div class="center-center">
                <div class="block modal-body">
                    <a href="#" class="modal-body-header">Закончился период оплаты!</a>
                    <div class="grid">
                        <div class="image">
                            <img src="/images/no-pay.png" alt="">
                        </div>
                        <div class="text">
                            <p>Дорогой пользователь! </p>
                            <p>У тебя закончился период оплаты.
                                Надеюсь, что тебе всё понравилось и ты продолжишь дальше
                                заниматься по нашей программе.
                            </p>
                            <ul>
                                <li class="header"><b>Мы гарантируем:</b></li>
                                <li>Полную конфиденциальность личных и корпоративных данных.</li>
                                <li>Поддержку 24/7</li>
                                <li>Бесперебойную работу портала.</li>
                            </ul>
                        </div>
                    </div>
                    <a href="#" rel="motivation_modal_close" class="button round button-yellow-stroke">перейти к
                        оплате</a>
                    <span>Мы используем систему оплату PayBox</span>
                </div>
            </div>
        </div>
    @endif
    <div class="container">
        <div class="profile-grid">
            <div class="block profile">
                <div class="profile-ava"><img src="{{$ava??'/img/empty.png'}}" alt=""></div>
                <div class="profile-data">
                    <div class="name">{{$first_name}} {{$last_name}}</div>
                    <div>
                        <a style="display: inline-flex; margin-bottom: 15px;" href="/home/edit"
                           class="button round button-blue-stroke ">
                            <i class="icon config"></i>
                            редактировать данные</a>
                        <br>
                        <a style="display: inline-flex; margin-bottom: 15px;" href="/home/password/update"
                           class="button round button-blue-stroke ">
                            <i class="icon lock"></i>
                            сменить пароль</a>
                        <br>
                        <a style="display: inline-flex; margin-bottom: 15px;" href="/home/help"
                           class="button round button-blue-stroke ">
                            <i class="icon help_1"></i>
                            помощь</a>
                    </div>
                </div>
            </div>
            <div class="block motivation">
                <a href="#" class="button circle button-yellow-fill ">Мотивация на сегодня:</a>
                <span class="motivation_count"><span>{{$count_motivation}}</span></span>
                <div style="position: relative" class="profile-ava" data-video-1080="{{$motivation->getVideoSize()}}"
                     data-video-720="{{$motivation->getVideoSize(720)}}"
                     data-video-480="{{$motivation->getVideoSize(480)}}"><img
                        src="{{$motivation->thumb?? '/images/2-layers.png'}}" alt="">
                </div>
                <a href="/home/motivation" class="button round button-yellow-stroke "><img src="/images/cup.svg" alt="">перейти
                    в
                    раздел</a>
            </div>
            {{--            @if(!$user->isChief())--}}
            {{--                <div class="block sales_program">--}}
            {{--                    <a href="#" class="sales_program_title">Годовой план продаж:</a>--}}
            {{--                    <span class="plan">{{($sales_plan_sum?number_format($sales_plan_sum, 0, ',', ' '):0)}}</span>--}}
            {{--                    <pie-component :value="{{($sales_plan_sum ? ceil(($sales_fact_sum/$sales_plan_sum)*100):0)}}"--}}
            {{--                                   :big="true"></pie-component>--}}
            {{--                    <a href="/home/plan" class="button round button-blue-stroke "><i class="icon plan"></i>перейти--}}
            {{--                        в--}}
            {{--                        раздел</a>--}}
            {{--                </div>--}}
            {{--            @else--}}
            @if($user->isChief())
                <div class="block team">
                    <a href="#" class="team_title">Моя команда:</a>
                    <img src="/images/Boevaja_komanda_prodazh-200468_copy.png" alt="">
                    <div class="limit-team">
                        {{$user->getCountTeam()}} / {{$user->company_limit}}
                        <span>сотрудников</span>
                    </div>
                    <a href="/home/my-team" class="button round button-blue-stroke ">
                        <i class="icon users"></i>перейти в раздел
                    </a>
                </div>
            @endif
            {{--            @if(!$user->isChief())--}}
            <div class="block personal_goals {{(!$user->isChief()?'chief':'')}}">
                <a href="#" class="personal_goals_title">мои личные цели:</a>
                <div class="slider">
                    <div class="slider-container owl-carousel">
                        @foreach($personal_goals as $key => $personal_goal)
                            <div class="slider-item {{($key<2?'active':'')}} {{$personal_goal->getStatus()}}">
                                <img src="{{$personal_goal->image}}" alt="">
                            </div>
                        @endforeach
                    </div>
                    <div class="slider-arrow-container">
                        <span class="slide-arrow-left"><img src="/images/arrow_left.png" alt=""></span>
                        <span class="slide-arrow-right"><img src="/images/arrow_right.png" alt=""></span>
                    </div>
                </div>
                <div class="display-flex flex-center">
                    <a href="/home/personal_goals" class="button round button-blue-stroke ">
                        <i class="icon goals"></i>
                        <span>перейти в раздел</span>
                    </a>
                </div>
            </div>
            {{--            @else--}}
            {{--                <div class="block personal_goals image-round my_materials">--}}
            {{--                    <a href="#" class="personal_goals_title">мои Материалы:</a>--}}
            {{--                    <div class="slider">--}}
            {{--                        <div class="slider-container owl-carousel">--}}
            {{--                            @foreach(\App\ExecutiveSection::orderBy('created_at','DESC')->get() as $key => $item)--}}
            {{--                                @php $video  = $item->getVideo() @endphp--}}
            {{--                                <a href="#" class="slider-item {{($key<2?'active':'')}}">--}}
            {{--                                    <img src="{{$video->thumb}}" alt="">--}}
            {{--                                    <span>{{$item->title}}</span>--}}
            {{--                                </a>--}}

            {{--                            @endforeach--}}
            {{--                        </div>--}}
            {{--                        <div class="slider-arrow-container">--}}
            {{--                            <span class="slide-arrow-left"><img src="/images/arrow_left.png" alt=""></span>--}}
            {{--                            <span class="slide-arrow-right"><img src="/images/arrow_right.png" alt=""></span>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <div class="flex-center">--}}
            {{--                        <a href="/home/video_chief" class="button round button-blue-stroke ">--}}
            {{--                            <i class="icon star"></i>--}}
            {{--                            <span>перейти в раздел</span>--}}
            {{--                        </a>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            @endif--}}

            {{--            @if($user->isChief())--}}
            {{--                <div class="block personal_goals">--}}
            {{--                    <a href="#" class="personal_goals_title">мои личные цели:</a>--}}
            {{--                    <div class="slider">--}}
            {{--                        <div class="slider-container owl-carousel">--}}
            {{--                            @foreach($personal_goals as $key => $personal_goal)--}}
            {{--                                <div class="slider-item {{($key<3?'active':'')}} {{$personal_goal->getStatus()}}">--}}
            {{--                                    <img src="{{$personal_goal->image}}" alt="">--}}
            {{--                                </div>--}}
            {{--                            @endforeach--}}
            {{--                        </div>--}}
            {{--                        <div class="slider-arrow-container">--}}
            {{--                            <span class="slide-arrow-left"><img src="/images/arrow_left.png" alt=""></span>--}}
            {{--                            <span class="slide-arrow-right"><img src="/images/arrow_right.png" alt=""></span>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <div class="display-flex flex-center">--}}
            {{--                        <a href="/home/personal_goals" class="button round button-blue-stroke ">--}}
            {{--                            <i class="icon goals"></i>--}}
            {{--                            <span>перейти в раздел</span>--}}
            {{--                        </a>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            @endif--}}

            <div class="block online courses">
                <a href="#" class="courses_title">Курсы по продажам:</a>
                <div class="courses_items">
                    <div class="courses_item">
                        <div>
                            <img class="border-rounded" src="/images/Layer_3_copy.png" alt="">
                            <div class="actions">
                                <a href="/home/course" class="button round button-blue-stroke ">
                                    <i class="icon copy"></i>перейти в раздел
                                </a>
                                <a href="{{$last_lesson_url?? '#'}}" class="button round button-green-stroke ">
                                    <i class="icon play"></i>продолжить урок
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="progress-container">
                                <div>
                                    <label class="progress-label" for="">Завершено уроков:</label>
                                    <b>{{$sales->getLessonsCountCheck()}}</b>
                                </div>
                                <div>
                                    <label class="progress-label" for="">Завершено разделов:</label>
                                    <b>0</b>
                                </div>
                                <div>
                                    <label class="progress-label">Общее время:</label>
                                    <b>{{$sales->getStat()}}</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="block my_rewards">
                <a href="#" class="my_rewards_title">Мои награды:</a>
                <div class="my_rewards_item">
                    <img src="/images/Group_4.png" alt="">
                    <div>
                        <label class="progress-label" for="">Сертификатов: <b>{{count($sales_cer)}}
                                / {{$sales_cer_count}}</b></label>
                        <div class="progress">
                            <div
                                style="width: {{($sales_cer_count?ceil((count($sales_cer)/$sales_cer_count)*100):0)}}%"></div>
                        </div>
                    </div>
                </div>
                <a href="/home/rewards" class="button round button-blue-stroke ">
                    <i class="icon medal"></i>
                    перейти в раздел</a>

            </div>

            <div class="block news_block">
                <div class="news_head">
                    <a href="#" class="button circle button-yellow-fill ">Новости:</a>
                    @if($new_news)<span class="news_count"><span>{{$new_news}}</span></span>@endif
                </div>
                <div class="slider">
                    <div class="slider-container owl-carousel">
                        @foreach($news as $key => $item)
                            @if($item->type =='doc')
                                <a href="{{$item->doc->url}}" target="_blank" class="slider-item">
                                    <img src="{{$item->thumb}}" alt="">
                                    <p>{{$item->title}}</p>
                                </a>
                            @else
                                <div class="slider-item" data-video-1080="{{$item->getVideoSize()}}"
                                     data-video-720="{{$item->getVideoSize(720)}}"
                                     data-video-480="{{$item->getVideoSize(480)}}">
                                    <img src="{{$item->thumb}}" alt="">
                                    <p>{{$item->title}}</p>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="slider-arrow-container">
                        <span class="slide-arrow-left"><img src="/images/arrow_left.png" alt=""></span>
                        <span class="slide-arrow-right"><img src="/images/arrow_right.png" alt=""></span>
                    </div>
                </div>
                <a href="/home/news" class="button round button-blue-stroke " style="margin-top: 0">
                    <i class="icon news"></i>
                    перейти в раздел</a>
            </div>
        </div>
    </div>
    {{--    @php $resource = new \App\RedisData('karada'); @endphp--}}
    {{--    @if($user->getAccess())--}}
    {{--        @if(!$user->isChief())--}}
    {{--            @if($sales_fact_sum > $sales_plan_sum )--}}
    {{--                @php $sales_program_modal_overful = $resource->getKey('sales_program_modal_overful',$user->id) @endphp--}}
    {{--                @if(!$sales_program_modal_overful)--}}
    {{--                    <div class="offcanvas" rel="sales_program_modal">--}}
    {{--                        <div class="overlay"></div>--}}
    {{--                        <div class="center-center">--}}
    {{--                            <div class="block modal-body"--}}
    {{--                                 style="width: 540px;height: 390px;text-align: center;display: flex;flex-direction: column;align-items: center;">--}}
    {{--                                <div class="sales_program">--}}
    {{--                                    <a href="#" style="color: #37a2e9; margin: 0" class="sales_program_title">План--}}
    {{--                                        перевыполнен!</a>--}}
    {{--                                </div>--}}
    {{--                                <p style="color: #010101; font-family: Montserrat; font-size: 18px; font-weight: 400; line-height: 27px;">--}}
    {{--                                    Поздравляем!--}}
    {{--                                    <br>--}}
    {{--                                    Вы перевыполнили свой план продаж.--}}
    {{--                                    <br>--}}
    {{--                                    Для самомотвации и достижения новых вершин рекомендуем обновить сумму.--}}
    {{--                                </p>--}}
    {{--                                <div class="modal-body-sub-header">--}}

    {{--                                </div>--}}
    {{--                                <a style="width: 201px; height: 50px;" href="#" rel="sales_program_modal_close"--}}
    {{--                                   class="button round button-yellow-stroke">Понятно</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    @php $resource->setKeyEx(1,'sales_program_modal_overful',$user->id,24*60*60) @endphp--}}
    {{--                @endif--}}
    {{--            @else--}}
    {{--                @php $sales_program_modal = $resource->getKey('sales_program_modal',$user->id) @endphp--}}
    {{--                @if(!$sales_program_modal)--}}
    {{--                    <div class="offcanvas" rel="sales_program_modal">--}}
    {{--                        <div class="overlay"></div>--}}
    {{--                        <div class="center-center">--}}
    {{--                            <div class="block modal-body">--}}
    {{--                                <div class="close" rel="sales_program_modal_close">закрыть</div>--}}
    {{--                                <div class="sales_program">--}}
    {{--                                    <a href="#" class="sales_program_title">Мой план продаж:</a>--}}
    {{--                                    <span--}}
    {{--                                        class="plan">{{($sales_plan_sum?number_format($sales_plan_sum, 0, ',', ' '):0)}}</span>--}}
    {{--                                    <pie-component--}}
    {{--                                        :value="{{($sales_plan_sum ? ceil(($sales_fact_sum/$sales_plan_sum)*100):0)}}"></pie-component>--}}
    {{--                                    <div class="modal-body-sub-header">--}}
    {{--                                        Поднажми!--}}
    {{--                                    </div>--}}
    {{--                                    <a href="#" rel="sales_program_modal_close"--}}
    {{--                                       class="button round button-blue-stroke ">я--}}
    {{--                                        сделаю--}}
    {{--                                        это!</a>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    @php $resource->setKeyEx(1,'sales_program_modal',$user->id,24*60*60) @endphp--}}
    {{--                @endif--}}
    {{--            @endif--}}
    {{--        @endif--}}
    {{--        @php $personal_goals_modal = $resource->getKey('personal_goals_modal',$user->id) @endphp--}}
    {{--        @if(!$personal_goals_modal)--}}
    {{--            <div class="offcanvas" rel="personal_goals_modal">--}}
    {{--                <div class="overlay"></div>--}}
    {{--                <div class="center-center">--}}
    {{--                    <div class="block modal-body">--}}
    {{--                        <div class="close" rel="personal_goals_modal_close">закрыть</div>--}}
    {{--                        <div>--}}
    {{--                            <a href="#" class="modal-body-header">Не забывай, ради чего ты здесь!</a>--}}
    {{--                            <div class="slider">--}}
    {{--                                <div class="slider-container owl-carousel">--}}
    {{--                                    @foreach($personal_goals as $key => $personal_goal)--}}
    {{--                                        <div--}}
    {{--                                            class="slider-item {{($key<2?'active':'')}} {{$personal_goal->getStatus()}}">--}}
    {{--                                            <img src="{{$personal_goal->image}}" alt="">--}}
    {{--                                        </div>--}}
    {{--                                    @endforeach--}}
    {{--                                </div>--}}
    {{--                                <div class="slider-arrow-container">--}}
    {{--                                    <span class="slide-arrow-left"><img src="/images/arrow_left.png" alt=""></span>--}}
    {{--                                    <span class="slide-arrow-right"><img src="/images/arrow_right.png"--}}
    {{--                                                                         alt=""></span>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="status in_process">В процессе: <b>{{$personal_goals_in_process}}</b></div>--}}
    {{--                            <div class="status complete">Выполнено: <b>{{$personal_goals_complete}}</b></div>--}}
    {{--                            <div class="status failed">Не сделано: <b>{{$personal_goals_failed}}</b></div>--}}
    {{--                            <a href="#" rel="personal_goals_modal_close"--}}
    {{--                               class="button round button-blue-stroke "><span>вперёд!</span></a>--}}
    {{--                        </div>--}}

    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            @php $resource->setKeyEx(1,'personal_goals_modal',$user->id,24*60*60) @endphp--}}
    {{--        @endif--}}
    {{--        @php $motivation_modal = $resource->getKey('motivation_modal',$user->id) @endphp--}}
    {{--        @if($motivation && !$motivation_modal)--}}
    {{--            <div class="offcanvas" rel="motivation_modal">--}}
    {{--                <div class="overlay"></div>--}}
    {{--                <div class="center-center">--}}
    {{--                    <div class="block modal-body">--}}
    {{--                        <div class="close" rel="motivation_modal_close">закрыть</div>--}}
    {{--                        <a href="#" class="modal-body-header">Мотивация на сегодня:</a>--}}
    {{--                        --}}{{--                <img src="/images/_DSC8514.png" alt="">--}}
    {{--                        <video controls="controls" src="{{$motivation->getVideoSize()}}"--}}
    {{--                               data-video-1080="{{$motivation->getVideoSize()}}"--}}
    {{--                               data-video-720="{{$motivation->getVideoSize(720)}}"--}}
    {{--                               data-video-480="{{$motivation->getVideoSize(480)}}"--}}
    {{--                               controlsList="nodownload"></video>--}}
    {{--                        <p class="modal-body-sub-header">{{$motivation->title}}</p>--}}
    {{--                        <a href="#" rel="motivation_modal_close" class="button round button-blue-stroke">я--}}
    {{--                            готов!</a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            @php $resource->setKeyEx(1,'motivation_modal',$user->id,24*60*60) @endphp--}}
    {{--        @endif--}}
    {{--    @endif--}}
@endsection
