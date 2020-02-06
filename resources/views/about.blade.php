@extends('layouts.app')

@section('content')
    <section id="slider" class="slider">
        <div class="uk-height-viewport uk-overflow-hidden">
            <div class="uk-background-cover uk-background-top-center uk-background-muted uk-height-viewport uk-panel uk-flex uk-flex-center uk-flex-middle"
                 style="background-image: url(/images/event_1.png);"></div>
            <div class="uk-flex uk-flex-left uk-flex-middle uk-height-viewport uk-overlay-primary uk-position-top-left uk-width-1-1@s">
                <div class="uk-width-1-2@s uk-margin-large-left">
                    <h2 class="uk-article-title" uk-slideshow-parallax="x: 100,-100">
                        Юсуп Карада:
                    </h2>
                    <p class="uk-text-white uk-card-title"><span class="uk-text-red">-</span> Топовый консультант по
                        малобюджетному маркетингу и продажам
                    </p>
                    <p class="uk-text-white uk-card-title"><span class="uk-text-red">-</span> Помогаю бизнесам получать
                        много клиентов малыми затратами!
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="marketing">
        <hr>
        <div class="uk-container uk-container-large uk-padding">
            <h1 class="uk-h3 uk-text-center uk-text-uppercase">“Умный маркетинг - основа больших продаж”</h1>
            <hr>
            <div class="uk-my-grid-2">
                <div>
                    <div>
                        <div class="uk-card uk-padding">
                            <div class="uk-card uk-margin-large-top">
                                <article class="uk-article">
                                    <h1 class="">Юсуп Карада</h1>
                                    <ul class="uk-list uk-list-red uk-list-check">
                                        <li>Топовый консультант Казахстана по малобюджетному маркетингу и продажам</li>
                                        <li>Автор книг «прибыльный маркетинг» , «малобюджетный маркетинг»</li>
                                        <li>Основатель Бизнес Школы Karada</li>
                                        <li>Более 20 лет опыта работы в маркетинге и продажах в Сша, Европе и
                                            Центральной Азии
                                        </li>
                                        <li>Получил степень Магистра Менеджмента в Чикаго, Сша в 2007 г.</li>
                                    </ul>
                                </article>
                            </div>

                            <div class="uk-child-width-1-2@m uk-grid-small uk-grid-match uk-margin-medium-top" uk-grid>
                                <div>
                                    <div class="uk-card uk-card-default uk-card-body">
                                        <h3 class="uk-card-title uk-text-red">
                                            <span class="uk-text-small">более</span> 200
                                        </h3>
                                        <p>подняли продажи после консультаций и сотрудничества с Юсупом.</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-card uk-card-default uk-card-body">
                                        <h3 class="uk-card-title uk-text-red">
                                            <span class="uk-text-small">более</span> 1000
                                        </h3>
                                        <p>предпринимателей прошли обучение маркетингу и продажам у Юсупа</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-position-relative uk-first">
                    <div>
                        <div class="uk-background-cover uk-background-top-center uk-height-1-1 uk-width-1-1 uk-position-top-left"
                             style="background-image: url(/images/layer_77.png); z-index: 0"></div>
                        <div class="uk-flex uk-flex-center uk-flex-middle uk-height-1-1 uk-padding uk-position-top-left uk-text-center uk-width-1-1">
                            <span uk-icon="icon: play; ratio: 5" class="uk-text-white"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </section>
    <section class="mass-media">
        <div class="uk-container uk-container-large uk-padding">
            <h1 class="uk-h3 uk-text-center uk-text-uppercase">
                СМИ:
            </h1>
            <div uk-slider="">
                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                    <ul class="uk-slider-items uk-child-width-1-4@s uk-grid">
                        <li>
                            <div class="uk-card uk-card-default uk-height-1-1">
                                <div class="uk-card-media-top uk-position-relative">
                                    <div class="uk-position-top-left uk-height-medium uk-overlay-primary uk-width-1-1"></div>
                                    <div class="uk-background-cover uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle"
                                         style="background-image: url(/images/about/about_4.png);"></div>
                                    <div class="uk-flex uk-flex-center uk-flex-middle uk-height-1-1 uk-padding uk-position-top-left uk-text-center uk-width-1-1">
                                        <span uk-icon="icon: play; ratio: 5" class="uk-text-white uk-icon"></span>
                                    </div>
                                </div>
                                <div class="uk-padding-small">
                                    <div>
                                        <div>
                                            <h3 class="uk-card-title">Интервью телеканал "хабар"</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-card uk-card-default uk-height-1-1">
                                <div class="uk-card-media-top uk-position-relative">
                                    <div class="uk-position-top-left uk-height-medium uk-overlay-primary uk-width-1-1"></div>
                                    <div class="uk-background-contain uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle"
                                         style="background-image: url(/images/about/about_3.png);"></div>
                                    <div class="uk-flex uk-flex-center uk-flex-middle uk-height-1-1 uk-padding uk-position-top-left uk-text-center uk-width-1-1">
                                        <span uk-icon="icon: play; ratio: 5" class="uk-text-white uk-icon"></span>
                                    </div>
                                </div>
                                <div class="uk-padding-small">
                                    <div>
                                        <div>
                                            <h3 class="uk-card-title">Статья о бизнес-школе в журнале "gq"</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-card uk-card-default uk-height-1-1">
                                <div class="uk-card-media-top uk-position-relative">
                                    <div class="uk-position-top-left uk-height-medium uk-overlay-primary uk-width-1-1"></div>
                                    <div class="uk-background-cover uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle"
                                         style="background-image: url(/images/about/about_2.png);"></div>
                                    <div class="uk-flex uk-flex-center uk-flex-middle uk-height-1-1 uk-padding uk-position-top-left uk-text-center uk-width-1-1">
                                        <span uk-icon="icon: play; ratio: 5" class="uk-text-white uk-icon"></span>
                                    </div>
                                </div>
                                <div class="uk-padding-small">
                                    <div>
                                        <div>
                                            <h3 class="uk-card-title">Большое интервью телеканалу "ел Арна"</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-card uk-card-default uk-height-1-1">
                                <div class="uk-card-media-top uk-position-relative">
                                    <div class="uk-position-top-left uk-height-medium uk-overlay-primary uk-width-1-1"></div>
                                    <div class="uk-background-cover uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle"
                                         style="background-image: url(/images/about/about_1.png);"></div>
                                    <div class="uk-flex uk-flex-center uk-flex-middle uk-height-1-1 uk-padding uk-position-top-left uk-text-center uk-width-1-1">
                                        <span uk-icon="icon: play; ratio: 5" class="uk-text-white uk-icon"></span>
                                    </div>
                                </div>
                                <div class="uk-padding-small">
                                    <div>
                                        <div>
                                            <h3 class="uk-card-title">Большое интервью в передаче о бизнесе</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-card uk-card-default uk-height-1-1">
                                <div class="uk-card-media-top uk-position-relative">
                                    <div class="uk-position-top-left uk-height-medium uk-overlay-primary uk-width-1-1"></div>
                                    <div class="uk-background-cover uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle"
                                         style="background-image: url(/images/about/about_4.png);"></div>
                                    <div class="uk-flex uk-flex-center uk-flex-middle uk-height-1-1 uk-padding uk-position-top-left uk-text-center uk-width-1-1">
                                        <span uk-icon="icon: play; ratio: 5" class="uk-text-white uk-icon"></span>
                                    </div>
                                </div>
                                <div class="uk-padding-small">
                                    <div>
                                        <div>
                                            <h3 class="uk-card-title">Интервью телеканал "хабар"</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-card uk-card-default uk-height-1-1">
                                <div class="uk-card-media-top uk-position-relative">
                                    <div class="uk-position-top-left uk-height-medium uk-overlay-primary uk-width-1-1"></div>
                                    <div class="uk-background-contain uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle"
                                         style="background-image: url(/images/about/about_3.png);"></div>
                                    <div class="uk-flex uk-flex-center uk-flex-middle uk-height-1-1 uk-padding uk-position-top-left uk-text-center uk-width-1-1">
                                        <span uk-icon="icon: play; ratio: 5" class="uk-text-white uk-icon"></span>
                                    </div>
                                </div>
                                <div class="uk-padding-small">
                                    <div>
                                        <div>
                                            <h3 class="uk-card-title">Статья о бизнес-школе в журнале "gq"</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-card uk-card-default uk-height-1-1">
                                <div class="uk-card-media-top uk-position-relative">
                                    <div class="uk-position-top-left uk-height-medium uk-overlay-primary uk-width-1-1"></div>
                                    <div class="uk-background-cover uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle"
                                         style="background-image: url(/images/about/about_2.png);"></div>
                                    <div class="uk-flex uk-flex-center uk-flex-middle uk-height-1-1 uk-padding uk-position-top-left uk-text-center uk-width-1-1">
                                        <span uk-icon="icon: play; ratio: 5" class="uk-text-white uk-icon"></span>
                                    </div>
                                </div>
                                <div class="uk-padding-small">
                                    <div>
                                        <div>
                                            <h3 class="uk-card-title">Большое интервью телеканалу "ел Арна"</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-card uk-card-default uk-height-1-1">
                                <div class="uk-card-media-top uk-position-relative">
                                    <div class="uk-position-top-left uk-height-medium uk-overlay-primary uk-width-1-1"></div>
                                    <div class="uk-background-cover uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle"
                                         style="background-image: url(/images/about/about_1.png);"></div>
                                    <div class="uk-flex uk-flex-center uk-flex-middle uk-height-1-1 uk-padding uk-position-top-left uk-text-center uk-width-1-1">
                                        <span uk-icon="icon: play; ratio: 5" class="uk-text-white uk-icon"></span>
                                    </div>
                                </div>
                                <div class="uk-padding-small">
                                    <div>
                                        <div>
                                            <h3 class="uk-card-title">Большое интервью в передаче о бизнесе</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <a class="uk-position-center-left uk-position-small uk-border-solid-circle uk-border-red uk-text-red uk-visible@s"
                       href="#"
                       uk-slider-item="previous" uk-icon="icon: arrow-left; ratio: 2"></a>
                    <a class="uk-position-center-right uk-position-small uk-border-solid-circle uk-border-red uk-text-red uk-visible@s"
                       href="#"
                       uk-slider-item="next"
                       uk-icon="icon: arrow-right; ratio: 2"></a>
                </div>
            </div>
        </div>
    </section>
    <section class="clients">
        <div class="uk-container uk-container-large uk-padding">
            <h1 class="uk-h3 uk-text-center uk-text-uppercase">
                Наши клиенты:
            </h1>
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="center: true; ">
                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-5@s uk-child-width-1-5@m">
                    <li>
                        <img src="/images/layer_51.png" alt="">
                    </li>
                    <li>
                        <img src="/images/layer_52.png" alt="">
                    </li>
                    <li>
                        <img src="/images/layer_53.png" alt="">
                    </li>
                    <li>
                        <img src="/images/layer_54.png" alt="">
                    </li>
                    <li>
                        <img src="/images/layer_55.png" alt="">
                    </li>
                    <li>
                        <img src="/images/layer_51.png" alt="">
                    </li>
                    <li>
                        <img src="/images/layer_52.png" alt="">
                    </li>
                    <li>
                        <img src="/images/layer_53.png" alt="">
                    </li>
                    <li>
                        <img src="/images/layer_54.png" alt="">
                    </li>
                    <li>
                        <img src="/images/layer_55.png" alt="">
                    </li>


                </ul>

                <a class="uk-position-center-left uk-position-small uk-border-solid-circle uk-border-red uk-text-red uk-visible@s"
                   href="#"
                   uk-slider-item="previous" uk-icon="icon: arrow-left; ratio: 2"></a>
                <a class="uk-position-center-right uk-position-small uk-border-solid-circle uk-border-red uk-text-red uk-visible@s"
                   href="#"
                   uk-slider-item="next"
                   uk-icon="icon: arrow-right; ratio: 2"></a>

            </div>
        </div>
    </section>
    @include('widgets.reviews',['image'=>'/images/event_1.png'])
@endsection
