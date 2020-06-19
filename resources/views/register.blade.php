@extends('layouts.app')

@section('lib')
    <script src="{{ asset('js/register.js') }}"></script>
@endsection

@section('content')
    <section class="hero is-fullheight-with-navbar">
        <div class="hero-body">
            <div class="container">
                <div class="box">
                    <form method="post" action="{{ route('user.register') }}" enctype="multipart/form-data">
                        @csrf
                        <h3 class="title has-text-black has-text-centered">회원가입</h3>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">이메일</label>
                            </div>
                            <div class="field-body">
                                <div class="field has-addons">
                                    <p class="control is-expanded">
                                        <input id="email" class="input is-primary" name="email" type="email" placeholder="아이디"
                                               required>
                                    </p>
                                    <div class="control">
                                        <button id="check" class="button is-primary is-outlined" type="button">아이디 확인
                                        </button>
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
                                        <input id="password" class="input is-primary" name="password" type="password"
                                               placeholder="비밀번호" required>
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
                                        <input id="name" class="input is-primary" name="name" type="text" placeholder="이름"
                                               required>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">생일</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <p class="control">
                                        <input id="birthday" class="input is-primary" name="birthday" type="date" placeholder="생일">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">전화번호</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <p class="control">
                                        <input id="phone" class="input is-primary" name="phone" type="tel" placeholder="전화번호">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">성별</label>
                            </div>
                            <div class="field-body">
                                <div class="control">
                                    <label class="radio">
                                        <input type="radio" name="sex" value="0">
                                        남자
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="sex" value="1">
                                        여자
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div id="thumbnail" class="field">
                            <div class="file has-name is-fullwidth">
                                <label class="file-label">
                                    <input class="file-input" type="file" name="thumbnail">
                                    <span class="file-cta">
                                        <span class="file-icon">
                                            <ion-icon name="cloud-upload-outline" size="large"></ion-icon>
                                        </span>
                                        <span class="file-label">
                                            썸네일을 골라주세요
                                        </span>
                                    </span>
                                    <span class="file-name">
                                        파일 이름
                                    </span>
                                </label>
                            </div>
                        </div>
                        <button id="submit" type="submit" class="button is-primary is-large is-fullwidth is-outlined">회원가입</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal" id="email_check_success">
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="box">
                    <p>사용가능한 이메일 입니다.</p>
                </div>
                <button class="modal-close is-large" aria-label="close"></button>
            </div>
        </div>
        <div class="modal" id="email_check_failed">
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="box">
                    <p>중복되는 이메일 입니다.</p>
                </div>
                <button class="modal-close is-large" aria-label="close"></button>
            </div>
        </div>
    </section>
@endsection
