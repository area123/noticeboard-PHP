@extends('layouts.app')

@section('lib')
    <style>
        h1 {
            font-size: 32px;
        }
        h2 {
            font-size: 24px;
        }
        h3 {
            font-size: 19px;
        }
        h4 {
            font-size: 16px;
        }
        h5 {
            font-size: 13.5px;
        }
        h6 {
            font-size: 10.5px;
        }
    </style>
@endsection

@section('content')
    <h1 class="is-size-1 has-text-centered">{{ $post->title }}</h1>
    <div class="card">
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
    {!! $content !!}
@endsection
