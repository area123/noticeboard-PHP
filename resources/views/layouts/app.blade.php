<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('lib')
</head>
<body>
    <nav class="navbar" role="navigation">
        <div class="navbar-brand">
            <a href="{{ route('home') }}" class="navbar-item">Blog</a>
            <a role="button" class="navbar-burger burger" data-target="navbarItem">
                @for($i=0; $i<4; $i++)
                    <span aria-hidden="true"></span>
                @endfor
            </a>
        </div>
        <div id="navbarItem" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item">
                    공지사항
                </a>
                <a class="navbar-item">
                    자유게시판
                </a>
                <a class="navbar-item">
                    프로그래밍
                </a>
                <a class="navbar-item">
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
                @if(\Illuminate\Support\Facades\Auth::check())
                    <div class="buttons">
                        <a href="{{ route('register') }}" class="button is-primary is-outlined">
                            <strong>{{ $name }}</strong>
                        </a>
                        <a href="{{ route('api.logout') }}" class="button is-primary is-outlined">
                            <strong>로그아웃</strong>
                        </a>
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
</body>
</html>
