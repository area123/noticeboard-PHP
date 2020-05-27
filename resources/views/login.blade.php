@extends('layouts.app')

@section('lib')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
    <section class="hero is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <div class="box">
                        <form method="post" action="{{ route('api.login') }}">
                            @csrf
                            <h3 class="title has-text-black">로그인</h3>
                            <div class="field">
                                <div class="control">
                                    <input class="input is-large is-primary" name="email" type="email" placeholder="이메일을 입력해주세요">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input class="input is-large is-primary" name="password" type="password" placeholder="비밀번호를 입력해주세요">
                                </div>
                            </div>
                            <button class="button is-primary is-large is-fullwidth is-outlined">로그인</button>
                        </form>
                    </div>
                    <p class="has-text-primary">
                        <a href="{{ route('register') }}">회원가입</a> &nbsp;·&nbsp;
                        <a href="#">비밀번호 찾기</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection