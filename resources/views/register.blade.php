@extends('layouts.app')

@section('lib')

@endsection

@section('content')
    <section class="hero is-fullheight">
        <div class="hero-body">
            <div class="container">
                <div class="box">
                    <form method="post" action="{{ route('api.register') }}">
                        @csrf
                        <h3 class="title has-text-black has-text-centered">회원가입</h3>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">이메일</label>
                            </div>
                            <div class="field-body">
                                <div class="field has-addons">
                                    <p class="control is-expanded">
                                        <input class="input is-primary" name="email" type="email" placeholder="아이디" required>
                                    </p>
                                    <div class="control">
                                        <button class="button is-primary is-outlined">아이디 확인</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">비밀번호</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <p class="control">
                                        <input class="input is-primary" name="password" type="password" placeholder="비밀번호" required>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">이름</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <p class="control">
                                        <input class="input is-primary" name="name" type="text" placeholder="이름" required>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <button class="button is-primary is-large is-fullwidth is-outlined">회원가입</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection