@extends('layouts.app')

@section('lib')
    <link rel="stylesheet" href="{{ asset('css/write.css') }}">
@endsection

@section('content')
    <form method="post" action="#">
        @csrf
        <div class="field has-addons">
            <div class="control is-expanded">
                <input class="input is-primary" name="title" placeholder="제목을 입력해주세요">
            </div>
            <p class="control">
                <span class="select is-primary">
                    <select name="sort">
                        <option>공지사항</option>
                        <option>자유게시판</option>
                        <option>프로그래밍</option>
                        <option>게임</option>
                    </select>
                </span>
            </p>
        </div>
        <div class="field">
            <div class="control">
                <textarea class="textarea is-primary" name="content" placeholder="내용을 입력해주세요"></textarea>
            </div>
        </div>
        <button class="button is-primary is-outlined is-fullwidth" type="submit">글 저장하기</button>
    </form>
@endsection
