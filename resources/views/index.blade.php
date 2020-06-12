@extends('layouts.app')

@section('lib')
    <script src="{{ asset('js/ionicons/dist/ionicons.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="columns mb-3">
        @foreach($posts as $post)
            <div class="column card mr-3">
                <div class="card-image">
                    <figure class="image is-4by3">
                        <img src="https://bulma.io/images/placeholders/1280x960.png" alt="썸네일">
                    </figure>
                </div>
                <div class="card-content">
                    <div class="media">
                        <div class="media-left">
                            <figure class="image is-48x48">
                                <img src="https://bulma.io/images/placeholders/96x96.png" alt="유저 썸네일">
                            </figure>
                        </div>
                        <div class="media-content">
                            <p class="title is-4">{{ $post->email }}</p>
                            <p class="subtitle is-6">{{ $post->created_at }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="columns">
        <div class="column card">
            <header class="card-header">
                <a href="{{ route('post.list', '공지사항') }}">
                    <p class="card-header-title">
                        공지사항
                    </p>
                </a>
            </header>
            <div class="card-content">
                <ul>
                    @foreach ($notices as $notice)
                        <li>{{ $notice->title }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="column card">
            <header class="card-header">
                <a href="{{ route('post.list', '자유게시판') }}">
                    <p class="card-header-title">
                        자유게시판
                    </p>
                </a>
            </header>
            <div class="card-content">
                <ul>
                    @foreach ($frees as $free)
                        <li>{{ $free->title }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="column card">
            <header class="card-header">
                <a href="{{ route('post.list', '프로그래밍') }}">
                    <p class="card-header-title">
                        프로그래밍
                    </p>
                </a>
            </header>
            <div class="card-content">
                <ul>
                    @foreach ($programmings as $programming)
                        <li>{{ $programming->title }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="column card">
            <header class="card-header">
                <a href="{{ route('post.list', '게임') }}">
                    <p class="card-header-title">
                        게임
                    </p>
                </a>
            </header>
            <div class="card-content">
                <ul>
                    @foreach ($games as $game)
                        <li>{{ $game->title }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
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
@endsection
