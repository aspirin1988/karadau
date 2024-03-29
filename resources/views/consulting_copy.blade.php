<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Малобюджетный маркетинг, реклама, продвижение и продажи</title>
    <link rel="stylesheet" href="/css/uikit.css?v=34">
    <link rel="stylesheet" href="/css/app.css?v=34">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="/images/favicon.png">
</head>
<body>
<header class="consulting">
    <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-left">
                <div class="uk-position-relative">
                    <a class="uk-logo" href="#"><img src="/images/consulting/logo.png" alt=""></a>
                </div>
            </div>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav uk-visible@m">
                    <li><a href="#services" uk-scroll>Услуги</a></li>
                    <li><a href="#founder" uk-scroll>Основатель</a></li>
                    <li><a href="#mass-media" uk-scroll>СМИ</a></li>
                    <li><a href="#customers" uk-scroll>Клиенты</a></li>
                    <li><a class="uk-margin-right" href="#reviews" uk-scroll>Отзывы</a></li>
                    <li class="uk-phone">
                        <a href="tel:+77052711177" class="uk-text-bold">
                            <img src="/images/consulting/phone.png" alt="">
                            +7(705) 271 11 77
                        </a>
                    </li>
                </ul>
                <a uk-navbar-toggle-icon="" href="#offcanvas" uk-toggle=""
                   class="uk-navbar-toggle uk-hidden@m uk-navbar-toggle-icon uk-icon"></a>
            </div>
        </nav>
    </div>
    <div id="offcanvas" uk-offcanvas="mode: push; overlay: true" class="uk-offcanvas uk-offcanvas-overlay consulting">
        <div class="uk-offcanvas-bar uk-offcanvas-bar-animation uk-offcanvas-push">
            <div class="uk-panel">
                <a class="uk-navbar-item uk-logo" href="/">KARADA</a>
                <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
                    <li><a href="#services" uk-scroll="">Услуги</a></li>
                    <li><a href="#founder" uk-scroll="">Основатель</a></li>
                    <li><a href="#mass-media" uk-scroll="">СМИ</a></li>
                    <li><a href="#customers" uk-scroll="">Клиенты</a></li>
                    <li><a class="uk-margin-right" href="#reviews" uk-scroll="">Отзывы</a></li>
                    <li class="uk-phone">
                        <a href="tel:+77052711177" class="uk-text-bold">
                            <img src="/images/consulting/phone.png" alt="">
                            +7(705) 271 11 77
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<main class="consulting">
    <section class="business-card">
        <div>
            <div class="uk-form">
                <div class="uk-child-width-expand@s uk-grid-collapse uk-grid" uk-grid="">
                    <div class="uk-grid-item-match">
                        <div class="uk-card uk-position-relative uk-height-viewport">
                            <div
                                    class="uk-flex uk-flex-center uk-flex-column uk-flex-middle uk-height-1-1 uk-overlay-primary uk-width-1-1"></div>
                            <div
                                    class="uk-background-cover uk-background-top-center uk-height-1-1 uk-width-1-1 uk-position-top-left"
                                    style="background-image: url(/images/consulting/background.jpg)"></div>

                            <div class="business-card-text uk-padding uk-position-top-left uk-width-2-3@s">
                                <h1 class="uk-h2 uk-width-5-6@s">Помогу Вашему бизнесу
                                    получать <span class="uk-text-red">много клиентов малыми затратами!</span></h1>
                                <h3 class="uk-text-bold">Юсуп Карада
                                    <img src="/images/strelka.png" alt="">
                                </h3>
                                <p>Топовый консультант по малобюджетному маркетингу и продажам</p>
                            </div>
                            <div
                                    class="business-card-img uk-padding-remove-bottom uk-padding-small uk-position-bottom-right uk-text-center uk-width-1-3@s uk-visible@s">
                                <div class="uk-background-cover uk-background-top-center uk-height-1-1 uk-width-1-1"
                                     style="background-image: url(/images/book/layer_82.png)"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="services" class="business-benefit uk-padding uk-padding-remove-horizontal uk-margin-top">
        <div class="uk-container uk-container-services">
            <div class="uk-custom-grid uk-custom-grid-width-1-2 uk-custom-grid-gap-medium">
                <div class="uk-height-1-1">
                    <div class="uk-card uk-card-default uk-margin uk-height-1-1">
                        <div class="uk-card-body">
                            <h3 class="uk-card-title uk-text-large uk-text-turquoise">Консультации</h3>
                            <ul class="uk-list-red">
                                <li>
                                    Почасовые консультации по следующих вопросам
                                    <ul class="uk-no-margin">
                                        <li> Маркетинг, реклама и продвижение</li>
                                        <li> Продажи и масштабирование бизнеса</li>
                                        <li> Борьба с конкурентами</li>
                                        <li> Личный бренд</li>
                                        <li> Запуск нового продукта</li>
                                        <li> Подготовка к продаже бизнеса</li>
                                        <li> другое</li>
                                    </ul>
                                </li>
                                <li>Консультации для всех сфер кроме: алкоголя, табака,
                                    финансовых пирамид и запрещенных законом
                                    деятельностей.
                                </li>
                                <li>Консультации проводятся вживую и онлайн</li>
                                <li>Вы получите быстрое решение своих бизнес вопросов от
                                    - практика, который уже помог сотням
                                    предпринимателей
                                </li>
                            </ul>

                            <button class="uk-button uk-button-default uk-text-bold uk-border-yellow"
                                    uk-toggle="target: #modal-close-counseling">Оставить заявку
                            </button>
                        </div>
                    </div>
                </div>
                <div class="uk-height-1-1">
                    <div class="uk-card uk-card-default uk-margin uk-height-1-1">
                        <div class="uk-card-body">
                            <h3 class="uk-card-title uk-text-large uk-text-turquoise">Проектный консалтинг</h3>
                            <ul class="uk-list-red">
                                <li>
                                    Поможем Вашему бизнесу с продвижением товара или
                                    услуг «под ключ» с гарантией результата.
                                </li>
                                <li>Используем лучшие онлайн и офлайн инструменты, с
                                    привлечением профессиональных подрядчиков,
                                    специалистов и экспертов.
                                </li>
                                <li>Поиск клиентов и партнеров на рынках Казахстана и
                                    Узбекистана.
                                </li>
                                <li>Помогаем бизнесам расширять рынки сбыта, поиск
                                    клиентов, дистрибьюторов, маркетинговый анализ рынка,
                                    анализ конкурентов и прочее.
                                </li>
                            </ul>

                            <button class="uk-button uk-button-default uk-text-bold uk-border-yellow"
                                    uk-toggle="target: #modal-close-outside">Оставить заявку
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="founder" class="marketing">
        <div class="uk-container uk-container-large">
            <div class="uk-my-grid-2">
                <div>
                    <div>
                        <div class="uk-card uk-padding uk-padding-remove-vertical">
                            <div class="uk-card">
                                <article class="uk-article">
                                    <h3 class="">Юсуп Карада</h3>
                                    <p class="uk-text-red uk-quote">“УМНЫЙ МАРКЕТИНГ – ОСНОВА БОЛЬШИХ ПРОДАЖ”</p>
                                    <ul class="uk-list-red">
                                        <li>Топовый консультант Казахстана по малобюджетному маркетингу и продажам</li>
                                        <li>Автор книг «Прибыльный маркетинг» , «Малобюджетный маркетинг»</li>
                                        <li>Основатель <a class="uk-link-red" href="http://karadau.kz">Бизнес Школы
                                                KARADAU</a></li>
                                        <li>Более 20 лет опыта работы в маркетинге и продажах в США, Европе и
                                            Центральной Азии
                                        </li>
                                        <li>Получил степень Магистра Менеджмента в Чикаго, США в 2007 г.</li>
                                    </ul>
                                </article>
                            </div>

                            <div class="uk-marketing-card-parent uk-child-width-1-2@m uk-grid-collapse uk-grid-match uk-margin-medium-top"
                                 uk-grid="">
                                <div>
                                    <div class="uk-marketing-card">
                                        <i class="uk-icon uk-icon-image uk-position-top-right"
                                           style="background-image: url(/images/consulting/Uzor.png);"></i>
                                        <h3 class="uk-card-title uk-text-red">
                                            <span class="uk-text-small">Более</span> 200
                                        </h3>
                                        <p>подняли продажи после консультаций и сотрудничества с Юсупом.</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-marketing-card">
                                        <i class="uk-icon uk-icon-image uk-position-top-right"
                                           style="background-image: url(/images/consulting/Uzor.png);"></i>
                                        <h3 class="uk-card-title uk-text-red">
                                            <span class="uk-text-small">Более</span> 1000
                                        </h3>
                                        <p>предпринимателей прошли обучение маркетингу и продажам у Юсупа</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-position-relative uk-height-1-1">
                    <div class="uk-height-1-1">
                        <div class="uk-auto-play uk-position-relative uk-height-1-1" uk-slideshow="animation: fade;">
                            <div class="uk-slideshow-dots-container">
                                <a class="uk-visible@s" href="#" uk-slideshow-item="previous">
                                    <span class="uk-slider-arrow-up"></span>
                                </a>
                                <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin uk-position-z-index"></ul>
                                <a class="uk-visible@s" href="#" uk-slideshow-item="next">
                                    <span class="uk-slider-arrow-down"></span>
                                </a>
                            </div>
                            {{! $images = \App\MediaCollection::getImages(1) }}
                            <div class="uk-position-relative uk-visible-toggle uk-light uk-height-1-1" tabindex="-1">
                                <ul class="uk-slideshow-items uk-height-1-1">
                                    @foreach($images as $image)
                                        <li @if($image->video) uk-lightbox="" @endif >
                                            @if($image->video)<a class="uk-button" href="{{$image->video}}">@endif
                                                <div class="uk-background-cover uk-background-top-center uk-height-1-1 uk-width-1-1 uk-position-top-left"
                                                     style="background-image: url({{$image->image}}); z-index: 0"></div>
                                                <div class="uk-flex uk-flex-center uk-flex-middle uk-height-1-1 uk-padding uk-position-top-left uk-text-center uk-width-1-1">
                                            @if($image->video)
                                                <span uk-icon="icon: play; ratio: 5" class="uk-text-white uk-icon">
                                                    <svg width="100" height="100" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="play">
                                                        <polygon fill="none" stroke="#000" points="6.5,5 14.5,10 6.5,15"></polygon>
                                                    </svg>
                                                </span>
                                            </a>
                                            @endif
                            </div>
                            </li>
                            @endforeach
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section id="mass-media" class="mass-media">
        <div class="uk-container uk-container-expand">
            <h1 class="uk-h3 uk-text-center uk-text-uppercase">
                СМИ:
            </h1>
            <div uk-slider="">
                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                    <ul class="uk-slider-items uk-child-width-1-4@s uk-grid">
                        <li>
                            <div class="uk-card uk-card-default uk-height-1-1">
                                <div class="uk-card-media-top uk-position-relative">
                                    <div
                                            class="uk-position-top-left uk-height-medium uk-overlay-primary uk-width-1-1"></div>
                                    <div
                                            class="uk-background-cover uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle"
                                            style="background-image: url(/images/about/about_4.png);"></div>
                                    <div
                                            class="uk-flex uk-flex-center uk-flex-middle uk-height-1-1 uk-padding uk-position-top-left uk-text-center uk-width-1-1">
                                        <span uk-icon="icon: play; ratio: 5" class="uk-text-white uk-icon"></span>
                                    </div>
                                </div>
                                <div class="uk-padding-small">
                                    <h3 class="uk-card-title">Интервью телеканале "Хабар"</h3>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-card uk-card-default uk-height-1-1">
                                <div class="uk-card-media-top uk-position-relative">
                                    <div
                                            class="uk-position-top-left uk-height-medium uk-overlay-primary uk-width-1-1"></div>
                                    <div
                                            class="uk-background-contain uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle"
                                            style="background-image: url(/images/about/about_3.png);"></div>
                                    <div
                                            class="uk-flex uk-flex-center uk-flex-middle uk-height-1-1 uk-padding uk-position-top-left uk-text-center uk-width-1-1">
                                        <span uk-icon="icon: play; ratio: 5" class="uk-text-white uk-icon"></span>
                                    </div>
                                </div>
                                <div class="uk-padding-small">
                                    <h3 class="uk-card-title">Статья о бизнес-школе в журнале "gq"</h3>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-card uk-card-default uk-height-1-1">
                                <div class="uk-card-media-top uk-position-relative">
                                    <div
                                            class="uk-position-top-left uk-height-medium uk-overlay-primary uk-width-1-1"></div>
                                    <div
                                            class="uk-background-cover uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle"
                                            style="background-image: url(/images/about/about_2.png);"></div>
                                    <div
                                            class="uk-flex uk-flex-center uk-flex-middle uk-height-1-1 uk-padding uk-position-top-left uk-text-center uk-width-1-1">
                                        <span uk-icon="icon: play; ratio: 5" class="uk-text-white uk-icon"></span>
                                    </div>
                                </div>
                                <div class="uk-padding-small">
                                    <h3 class="uk-card-title">Большое интервью телеканалу "ел Арна"</h3>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-card uk-card-default uk-height-1-1">
                                <div class="uk-card-media-top uk-position-relative">
                                    <div
                                            class="uk-position-top-left uk-height-medium uk-overlay-primary uk-width-1-1"></div>
                                    <div
                                            class="uk-background-cover uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle"
                                            style="background-image: url(/images/about/about_1.png);"></div>
                                    <div
                                            class="uk-flex uk-flex-center uk-flex-middle uk-height-1-1 uk-padding uk-position-top-left uk-text-center uk-width-1-1">
                                        <span uk-icon="icon: play; ratio: 5" class="uk-text-white uk-icon"></span>
                                    </div>
                                </div>
                                offcanvas       <div class="uk-padding-small">
                                    <h3 class="uk-card-title">Большое интервью в передаче о бизнесе</h3>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-card uk-card-default uk-height-1-1">
                                <div class="uk-card-media-top uk-position-relative">
                                    <div
                                            class="uk-position-top-left uk-height-medium uk-overlay-primary uk-width-1-1"></div>
                                    <div
                                            class="uk-background-cover uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle"
                                            style="background-image: url(/images/about/about_4.png);"></div>
                                    <div
                                            class="uk-flex uk-flex-center uk-flex-middle uk-height-1-1 uk-padding uk-position-top-left uk-text-center uk-width-1-1">
                                        <span uk-icon="icon: play; ratio: 5" class="uk-text-white uk-icon"></span>
                                    </div>
                                </div>
                                <div class="uk-padding-small">
                                    <h3 class="uk-card-title">Интервью телеканал "хабар"</h3>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-card uk-card-default uk-height-1-1">
                                <div class="uk-card-media-top uk-position-relative">
                                    <div
                                            class="uk-position-top-left uk-height-medium uk-overlay-primary uk-width-1-1"></div>
                                    <div
                                            class="uk-background-contain uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle"
                                            style="background-image: url(/images/about/about_3.png);"></div>
                                    <div
                                            class="uk-flex uk-flex-center uk-flex-middle uk-height-1-1 uk-padding uk-position-top-left uk-text-center uk-width-1-1">
                                        <span uk-icon="icon: play; ratio: 5" class="uk-text-white uk-icon"></span>
                                    </div>
                                </div>
                                <div class="uk-padding-small">
                                    <h3 class="uk-card-title">Статья о бизнес-школе в журнале "gq"</h3>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-card uk-card-default uk-height-1-1">
                                <div class="uk-card-media-top uk-position-relative">
                                    <div
                                            class="uk-position-top-left uk-height-medium uk-overlay-primary uk-width-1-1"></div>
                                    <div
                                            class="uk-background-cover uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle"
                                            style="background-image: url(/images/about/about_2.png);"></div>
                                    <div
                                            class="uk-flex uk-flex-center uk-flex-middle uk-height-1-1 uk-padding uk-position-top-left uk-text-center uk-width-1-1">
                                        <span uk-icon="icon: play; ratio: 5" class="uk-text-white uk-icon"></span>
                                    </div>
                                </div>
                                <div class="uk-padding-small">
                                    <h3 class="uk-card-title">Большое интервью телеканалу "ел Арна"</h3>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-card uk-card-default uk-height-1-1">
                                <div class="uk-card-media-top uk-position-relative">
                                    <div
                                            class="uk-position-top-left uk-height-medium uk-overlay-primary uk-width-1-1"></div>
                                    <div
                                            class="uk-background-cover uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle"
                                            style="background-image: url(/images/about/about_1.png);"></div>
                                    <div
                                            class="uk-flex uk-flex-center uk-flex-middle uk-height-1-1 uk-padding uk-position-top-left uk-text-center uk-width-1-1">
                                        <span uk-icon="icon: play; ratio: 5" class="uk-text-white uk-icon"></span>
                                    </div>
                                </div>
                                <div class="uk-padding-small">
                                    <h3 class="uk-card-title">Большое интервью в передаче о бизнесе</h3>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <a class="uk-position-center-left uk-position-small uk-visible@s" href="#"
                       uk-slider-item="previous">
                        <span class="uk-slider-arrow-left"></span>
                    </a>
                    <a class="uk-position-center-right uk-position-small uk-visible@s" href="#" uk-slider-item="next">
                        <span class="uk-slider-arrow-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="customers" class="clients">
        <div class="uk-container uk-container-expand">
            <h1 class="uk-h3 uk-text-center uk-text-uppercase">
                Клиенты:
            </h1>
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="center: false; ">
                {{! $clients = \App\MediaCollection::getImages(2) }}
                <ul class="uk-slider-items uk-child-width-auto@s uk-child-width-1-6@m">
                    @foreach($clients as $key=>$client)
                        @if($key == 0)<li class="grid">@endif
                        @if($key!=0 && ($key % 2) == 0)
                            </li><li class="grid">
                        @endif
                            <div class="uk-card uk-card-default"><img src="{{$client->image}}" alt=""></div>
                    @endforeach
                </ul>

                <a class="uk-position-center-left uk-position-small uk-visible@s" href="#" uk-slider-item="previous">
                    <span class="uk-slider-arrow-left"></span>
                </a>
                <a class="uk-position-center-right uk-position-small uk-visible@s" href="#" uk-slider-item="next">
                    <span class="uk-slider-arrow-right"></span>
                </a>

            </div>
        </div>
    </section>
    <section id="reviews" class="reviews uk-margin-top uk-visible@s">
        <div class="uk-position-relative uk-height-viewport">
            <div class="uk-position-top-left uk-background-cover uk-background-top-center uk-background-muted uk-height-viewport uk-width-1-1 uk-panel uk-flex uk-flex-center uk-flex-middle"
                 style="background-image: url(/images/consulting/layer_17.png);"></div>
            <div class="uk-flex uk-flex-left uk-flex-center uk-flex-middle uk-height-viewport uk-overlay-primary uk-position-top-left uk-width-1-1"></div>
            <div class="uk-position-top-left uk-flex uk-flex-center uk-flex-middle uk-margin-large-top uk-width-1-1">
                <div uk-slider="" class="uk-container uk-container-large">
                    <h3 class="uk-h2 uk-text-center uk-text-uppercase uk-text-white uk-text-bold">
                        Отзывы клиентов:
                    </h3>
                    <div class="uk-position-relative uk-visible-toggle uk-margin-large-top" tabindex="-1">
                        <ul class="uk-slider-items uk-child-width-1-2@s" uk-grid="">
                            <li>
                                <div class="uk-card uk-card-default uk-card-body uk-padding-small">
                                    <article class="uk-comment">
                                        <div class="uk-comment-body">
                                            <p class="uk-text-justify uk-padding-small">Я получил действительно
                                                много полезных знаний, которые сейчас я променяю на
                                                практике. Я научился правильно создавать коммерческое предложение,
                                                благодаря
                                                которому я нахожу еще больше клиентов. Для меня очень удобным
                                                является процесс
                                                просмотра этого курса, потому что я могу смотреть его в любом месте.
                                                Я открыл для себя
                                                новые подходы в поиске клиентов, о которых я даже не подозревал
                                                ранее.</p>
                                        </div>
                                        <header class="uk-comment-header uk-flex-middle uk-my-grid-comment">
                                            <div class="uk-width-auto">
                                                <img class="uk-comment-avatar uk-border-circle"
                                                     src="/images/about/about_5.png" width="80" height="80"
                                                     alt="">
                                            </div>
                                            <div class="uk-width-expand">
                                                <h4 class="uk-comment-title uk-margin-remove uk-text-left">
                                                    <span class="uk-text-bold">Александр Корнилов</span>
                                                </h4>
                                                <p class="uk-margin-remove uk-text-left uk-text-meta">
                                                    Видеооператор</p>
                                            </div>
                                            <div class="uk-width-expand uk-column-1-1@s">
                                                <button class="uk-button uk-button-default uk-border-red">
                                                    Открыть видео
                                                </button>
                                            </div>
                                        </header>
                                    </article>
                                </div>
                            </li>
                            <li>
                                <div class="uk-card uk-card-default uk-card-body uk-padding-small uk-visible@s">
                                    <article class="uk-comment">
                                        <div class="uk-comment-body">
                                            <p class="uk-text-justify uk-padding-small">Я получил действительно
                                                много полезных знаний, которые сейчас я променяю на
                                                практике. Я научился правильно создавать коммерческое предложение,
                                                благодаря
                                                которому я нахожу еще больше клиентов. Для меня очень удобным
                                                является процесс
                                                просмотра этого курса, потому что я могу смотреть его в любом месте.
                                                Я открыл для себя
                                                новые подходы в поиске клиентов, о которых я даже не подозревал
                                                ранее.</p>
                                        </div>
                                        <header class="uk-comment-header uk-flex-middle uk-my-grid-comment">
                                            <div class="uk-width-auto">
                                                <img class="uk-comment-avatar uk-border-circle"
                                                     src="/images/about/about_5.png" width="80" height="80"
                                                     alt="">
                                            </div>
                                            <div class="uk-width-expand">
                                                <h4 class="uk-comment-title uk-margin-remove uk-text-left">
                                                    <span class="uk-text-bold">Александр Корнилов</span>
                                                </h4>
                                                <p class="uk-margin-remove uk-text-left uk-text-meta">
                                                    Видеооператор</p>
                                            </div>
                                            <div class="uk-width-expand uk-column-1-1@s">
                                                <button
                                                        class="uk-button uk-button-default uk-border-red">
                                                    Открыть видео
                                                </button>
                                            </div>
                                        </header>
                                    </article>
                                </div>
                            </li>
                            <li>
                                <div class="uk-card uk-card-default uk-card-body uk-padding-small">
                                    <article class="uk-comment">
                                        <div class="uk-comment-body">
                                            <p class="uk-text-justify uk-padding-small">Я получил действительно
                                                много полезных знаний, которые сейчас я променяю на
                                                практике. Я научился правильно создавать коммерческое предложение,
                                                благодаря
                                                которому я нахожу еще больше клиентов. Для меня очень удобным
                                                является процесс
                                                просмотра этого курса, потому что я могу смотреть его в любом месте.
                                                Я открыл для себя
                                                новые подходы в поиске клиентов, о которых я даже не подозревал
                                                ранее.</p>
                                        </div>
                                        <header class="uk-comment-header uk-flex-middle uk-my-grid-comment">
                                            <div class="uk-width-auto">
                                                <img class="uk-comment-avatar uk-border-circle"
                                                     src="/images/about/about_5.png" width="80" height="80"
                                                     alt="">
                                            </div>
                                            <div class="uk-width-expand">
                                                <h4 class="uk-comment-title uk-margin-remove uk-text-left">
                                                    <span class="uk-text-bold">Александр Корнилов</span>
                                                </h4>
                                                <p class="uk-margin-remove uk-text-left uk-text-meta">
                                                    Видеооператор</p>
                                            </div>
                                            <div class="uk-width-expand uk-column-1-1@s">
                                                <button
                                                        class="uk-button uk-button-default uk-border-red">
                                                    Открыть видео
                                                </button>
                                            </div>
                                        </header>
                                    </article>
                                </div>
                            </li>
                            <li>
                                <div class="uk-card uk-card-default uk-card-body uk-padding-small uk-visible@s">
                                    <article class="uk-comment">
                                        <div class="uk-comment-body">
                                            <p class="uk-text-justify uk-padding-small">Я получил действительно
                                                много полезных знаний, которые сейчас я променяю на
                                                практике. Я научился правильно создавать коммерческое предложение,
                                                благодаря
                                                которому я нахожу еще больше клиентов. Для меня очень удобным
                                                является процесс
                                                просмотра этого курса, потому что я могу смотреть его в любом месте.
                                                Я открыл для себя
                                                новые подходы в поиске клиентов, о которых я даже не подозревал
                                                ранее.</p>
                                        </div>
                                        <header class="uk-comment-header uk-flex-middle uk-my-grid-comment">
                                            <div class="uk-width-auto">
                                                <img class="uk-comment-avatar uk-border-circle"
                                                     src="/images/about/about_5.png" width="80" height="80"
                                                     alt="">
                                            </div>
                                            <div class="uk-width-expand">
                                                <h4 class="uk-comment-title uk-margin-remove uk-text-left">
                                                    <span class="uk-text-bold">Александр Корнилов</span>
                                                </h4>
                                                <p class="uk-margin-remove uk-text-left uk-text-meta">
                                                    Видеооператор</p>
                                            </div>
                                            <div class="uk-width-expand uk-column-1-1@s">
                                                <button
                                                        class="uk-button uk-button-default uk-border-red">
                                                    Открыть видео
                                                </button>
                                            </div>
                                        </header>
                                    </article>
                                </div>
                            </li>
                            <li>
                                <div class="uk-card uk-card-default uk-card-body uk-padding-small">
                                    <article class="uk-comment">
                                        <div class="uk-comment-body">
                                            <p class="uk-text-justify uk-padding-small">Я получил действительно
                                                много полезных знаний, которые сейчас я променяю на
                                                практике. Я научился правильно создавать коммерческое предложение,
                                                благодаря
                                                которому я нахожу еще больше клиентов. Для меня очень удобным
                                                является процесс
                                                просмотра этого курса, потому что я могу смотреть его в любом месте.
                                                Я открыл для себя
                                                новые подходы в поиске клиентов, о которых я даже не подозревал
                                                ранее.</p>
                                        </div>
                                        <header class="uk-comment-header uk-flex-middle uk-my-grid-comment">
                                            <div class="uk-width-auto">
                                                <img class="uk-comment-avatar uk-border-circle"
                                                     src="/images/about/about_5.png" width="80" height="80"
                                                     alt="">
                                            </div>
                                            <div class="uk-width-expand">
                                                <h4 class="uk-comment-title uk-margin-remove uk-text-left">
                                                    <span class="uk-text-bold">Александр Корнилов</span>
                                                </h4>
                                                <p class="uk-margin-remove uk-text-left uk-text-meta">
                                                    Видеооператор</p>
                                            </div>
                                            <div class="uk-width-expand uk-column-1-1@s">
                                                <button
                                                        class="uk-button uk-button-default uk-border-red">
                                                    Открыть видео
                                                </button>
                                            </div>
                                        </header>
                                    </article>
                                </div>
                            </li>
                            <li>
                                <div class="uk-card uk-card-default uk-card-body uk-padding-small uk-visible@s">
                                    <article class="uk-comment">
                                        <div class="uk-comment-body">
                                            <p class="uk-text-justify uk-padding-small">Я получил действительно
                                                много полезных знаний, которые сейчас я променяю на
                                                практике. Я научился правильно создавать коммерческое предложение,
                                                благодаря
                                                которому я нахожу еще больше клиентов. Для меня очень удобным
                                                является процесс
                                                просмотра этого курса, потому что я могу смотреть его в любом месте.
                                                Я открыл для себя
                                                новые подходы в поиске клиентов, о которых я даже не подозревал
                                                ранее.</p>
                                        </div>
                                        <header class="uk-comment-header uk-flex-middle uk-my-grid-comment">
                                            <div class="uk-width-auto">
                                                <img class="uk-comment-avatar uk-border-circle"
                                                     src="/images/about/about_5.png" width="80" height="80"
                                                     alt="">
                                            </div>
                                            <div class="uk-width-expand">
                                                <h4 class="uk-comment-title uk-margin-remove uk-text-left">
                                                    <span class="uk-text-bold">Александр Корнилов</span>
                                                </h4>
                                                <p class="uk-margin-remove uk-text-left uk-text-meta">
                                                    Видеооператор</p>
                                            </div>
                                            <div class="uk-width-expand uk-column-1-1@s">
                                                <button class="uk-button uk-button-default uk-border-red">
                                                    Открыть видео
                                                </button>
                                            </div>
                                        </header>
                                    </article>
                                </div>
                            </li>
                        </ul>
                        <a class="uk-position-center-left uk-position-small uk-visible@s" href="#"
                           uk-slider-item="previous">
                            <span class="uk-slider-arrow-left uk-slider-arrow-gray"></span>
                        </a>
                        <a class="uk-position-center-right uk-position-small uk-visible@s" href="#"
                           uk-slider-item="next">
                            <span class="uk-slider-arrow-right uk-slider-arrow-gray"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer class="consulting">
    <hr>
    <div class="uk-child-width-1-1@s" uk-grid>
        <div>
            <div class="uk-dark uk-padding-small uk-text-center uk-container">
                <h3 class="uk-h4 uk-margin-remove uk-text-uppercase">Мы поможем вашему бизнесам получать</h3>
                <p class="uk-h3 uk-text-danger uk-text-uppercase uk-margin-remove">много клиентов малыми затратами</p>
            </div>
            <hr class="uk-hr">
        </div>
    </div>
    <div class="uk-container uk-margin-top uk-container-expand">
        <div class="uk-child-width-1-3@s uk-text-center uk-padding-custom" uk-grid>
            <div>
                <div class="">
                    <a href="tel:+77052711177" class="uk-button uk-button-text uk-text-bold">+7(705) 271 11 77</a>
                    <br>
                    <a href="mailto:info@karada.kz" class="uk-button uk-button-text uk-text-bold">info@karada.kz</a>
                </div>
            </div>
            <div>
                <div class="">
                    <p class="uk-text-subscribe">Подписывайтесь на нас:</p>
                    <a href="" class="uk-margin-small-right uk-icon-facebook"></a>
                    <a href="" class="uk-margin-small-right uk-icon-instagram"></a>
                    <a href="" class="uk-icon-youtube"></a>
                </div>
            </div>
            <div>
                <div class="uk-text-right">
                    <p class="uk-margin-remove uk-text-copyright">Консалтинг KARADA, 2017. Все права защищены</p>
                    <a class="uk-margin-remove uk-text-copyright">Разработка сайта - <br>
                        <img src="/images/simple_space.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="app">
        <div id="modal-close-outside" uk-modal>
            <div class="uk-modal-dialog uk-modal-body uk-width-1-2@s">
                <button class="uk-modal-close-outside" type="button" uk-close></button>
                <div class="uk-modal-title uk-text-center">
                    <h2 class="uk-margin-small-bottom">Заявка на услугу</h2>
                    <span class="uk-text-uppercase uk-text-turquoise">“Проектный консалтинг”</span>
                </div>
                <modal-consulting-component :type="'project_consulting'"></modal-consulting-component>
            </div>
        </div>
        <div id="modal-close-counseling" uk-modal>
            <div class="uk-modal-dialog uk-modal-body uk-width-1-2@s">
                <button class="uk-modal-close-outside" type="button" uk-close></button>
                <div class="uk-modal-container">
                    <div class="uk-modal-title uk-text-center">
                        <h2 class="uk-margin-small-bottom">Заявка на услугу</h2>
                        <span class="uk-text-uppercase uk-text-turquoise">“Консультации”</span>
                    </div>
                    <modal-consulting-component :type="'counseling'"></modal-consulting-component>
                </div>
            </div>
        </div>
        <div id="modal-result" uk-modal>
            <div class="uk-modal-dialog uk-modal-body">
                <div class="uk-modal-container">
                    <button class="uk-modal-close-outside uk-close-large" type="button" uk-close></button>
                    <div class="uk-modal-title uk-text-center">
                        <h2 class="uk-margin-small-bottom">Заявка отправлена!</h2>
                    </div>
                    <div class="uk-flex uk-flex-center">
                        <p>Наши менеджеры свяжутся с Вами
                            самое ближайшее время.</p>
                    </div>
                    <div class="uk-margin-small-top uk-flex uk-flex-center">
                        <button class="uk-button uk-button-default uk-text-bold uk-border-yellow uk-modal-close"
                                type="button">Вернуться на главную
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
<script src="/js/uikit.js"></script>
<script src="/js/uikit-icons.js"></script>
<script src="/js/app.js"></script>
</html>
