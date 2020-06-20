@extends('layouts.app')

@section('lib')
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
                                <img src="{{ \App\User::where('email', $post->email)->first()->thumbnail }}" alt="유저 썸네일">
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
                <a class="card-header-title is-centered" href="{{ route('post.list', 'notice') }}">
                    공지사항
                </a>
            </header>
            <div class="card-content">
                <ul>
                    @foreach ($notices as $notice)
                        <li>
                            <a class="has-text-black" href="{{ route('post',$notice->id) }}">
                                {{ $notice->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="column card">
            <header class="card-header">
                <a class="card-header-title is-centered" href="{{ route('post.list', 'free') }}">
                    자유게시판
                </a>
            </header>
            <div class="card-content">
                <ul>
                    @foreach ($frees as $free)
                        <li>
                            <a class="has-text-black" href="{{ route('post',$free->id) }}">
                                {{ $free->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="column card">
            <header class="card-header">
                <a class="card-header-title is-centered" href="{{ route('post.list', 'programming') }}">
                    프로그래밍
                </a>
            </header>
            <div class="card-content">
                <ul>
                    @foreach ($programmings as $programming)
                        <li>
                            <a class="has-text-black" href="{{ route('post',$programming->id) }}">
                                {{ $programming->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="column card">
            <header class="card-header">
                <a class="card-header-title is-centered" href="{{ route('post.list', 'game') }}">
                    게임
                </a>
            </header>
            <div class="card-content">
                <ul>
                    @foreach ($games as $game)
                        <li>
                            <a class="has-text-black" href="{{ route('post',$game->id) }}">
                                {{ $game->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
