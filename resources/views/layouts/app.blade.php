<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/ionicons/dist/ionicons.js') }}"></script>
    @yield('lib')
</head>
<body>
    <nav class="navbar" role="navigation">
        <div class="navbar-brand">
            <a href="{{ route('index') }}" class="navbar-item">Blog</a>
            <a role="button" class="navbar-burger burger" data-target="navbarItem">
                @for($i=0; $i<4; $i++)
                    <span aria-hidden="true"></span>
                @endfor
            </a>
        </div>
        <div id="navbarItem" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="{{ route('post.list', 'notice') }}">
                    공지사항
                </a>
                <a class="navbar-item" href="{{ route('post.list', 'free') }}">
                    자유게시판
                </a>
                <a class="navbar-item" href="{{ route('post.list', 'programming') }}">
                    프로그래밍
                </a>
                <a class="navbar-item" href="{{ route('post.list', 'game') }}">
                    게임
                </a>
            </div>
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="field">
                        <div class="control">
                            <input class="input is-primary" type="text" placeholder="찾기">
                        </div>
                    </div>
                </div>
                @if(Auth::check())
                    <div class="buttons">
                        <a href="{{ route('home') }}" class="button is-primary is-outlined">
                            <strong>{{ Auth::user()->name }}</strong>
                        </a>
                        <a id="logout" href="{{ route('user.logout') }}" class="button is-primary is-outlined">
                            <strong>로그아웃</strong>
                        </a>
                        <form id="logout-form" action="{{ route('user.logout') }}" method="post">
                            @csrf
                        </form>
                    </div>
                @else
                    <div class="buttons">
                        <a href="{{ route('register') }}" class="button is-primary is-outlined">
                            <strong>회원가입</strong>
                        </a>
                        <a href="{{ route('login') }}" class="button is-primary is-outlined">
                            <strong>로그인</strong>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </nav>
    @yield('content')
    <footer class="footer">
        <div class="columns">
            <div class="column has-text-centered">
                <span class="icon is-large">
                    <ion-icon name="phone-portrait-outline" size="large"></ion-icon>
                </span>
                <p class="has-text-centered">010-5744-4407</p>
            </div>
            <div class="column has-text-centered">
                <span class="icon is-large">
                    <ion-icon name="mail-outline" size="large"></ion-icon>
                </span>
                <p class="has-text-centered">kjs0713kjs@gmail.com</p>
            </div>
            <div class="column has-text-centered">
                <span class="icon is-large">
                    <ion-icon name="logo-github" size="large"></ion-icon>
                </span>
                <p class="has-text-centered">https://github.com/area123</p>
            </div>
        </div>
        <p class="has-text-centered">
            copyright&copy;2019-강해찬
        </p>
    </footer>
</body>
</html>
