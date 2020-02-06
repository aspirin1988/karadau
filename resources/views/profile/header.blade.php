<header>
    <nav>
        <div rel="menu" class="menu">

        </div>
        <div class="logo-container">
            <a class="logo" href="/">
                <img src="/images/Ellipse_8.png" alt="">
                <div>
                    <span class="big">Karadau</span> <span class="small">university</span>
                </div>
            </a>
            @if(isset($back_url))
                <a href="{{$back_url}}" class="back-button">
                    <img src="/images/arrow-back.svg" alt="">назад
                </a>
            @endif
        </div>
        <div class="title">{{$title ??"Karadau sales & marketing university"}}</div>
        @if(Auth::check())
            <div>
                <a style="float: right; position: absolute; right: 30px; top: 0; height: 70px;" class="back-button"
                   href="/logout">выйти</a>
            </div>
        @else
            <div>
                <a style="float: right; position: absolute; right: 30px; top: 0; height: 70px;" class="back-button"
                   href="/login">войти</a>
            </div>
        @endif
    </nav>
</header>
