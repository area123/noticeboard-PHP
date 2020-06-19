@extends('layouts.app')

@section('lib')
    <style>
        html,body {
            font-size: 16px;
            line-height: 1.5;
            height: 100%;
        }
        .columns {
            width: 100%;
            height: 100%;
            margin-left: 0;
        }
        .menu-label {
            color: #8F99A3;
            letter-spacing: 1.3;
            font-weight: 700;
        }
        .menu-list a {
            color: #0F1D38;
            font-size: 14px;
            font-weight: 700;
        }

        .menu-list a:hover {
            background-color: transparent;
            color: #276cda;
        }

        .menu-list a.is-active {
            background-color: transparent;
            color: #276cda;
            font-weight: 700;
        }

        .card {
            box-shadow: 0px 2px 4px rgba(0,0,0,0.18);
            margin-bottom: 2rem;
        }
        .card-header-title {
            color: #8F99A3;
        }
        .info-tiles {
            margin: 1rem 0;
        }
        .info-tiles .subtitle {
            font-weight: 300;
            color: #8F99A3;
        }
        .hero.welcome.is-info {
            background: #36D1DC;
            background: -webkit-linear-gradient(to right, #5B86E5, #36D1DC);
            background: linear-gradient(to right, #5B86E5, #36D1DC);
        }
        .hero.welcome .title, .hero.welcome .subtitle {
            color: hsl(192, 17%, 99%);
        }
        .card .content {
            font-size: 14px;
        }
        .card-footer-item {
            font-size: 14px;
            font-weight: 700;
            color: #8F99A3;
        }
        .card-footer-item:hover {
        }
        .card-table .table {
            margin-bottom: 0;
        }
        .events-card .card-table {
            max-height: 250px;
            overflow-y: scroll;
        }
    </style>
@endsection

@section('content')
    <div>
        <div class="columns">
            <div class="column is-3">
                <aside class="menu is-hidden-mobile">
                    <p class="menu-label">
                        General
                    </p>
                    <ul class="menu-list">
                        <li>Dashboard</li>
                        <li><a href="#">설정 변경</a></li>
                    </ul>
                </aside>
            </div>
            <div class="column is-9">
                <section class="hero is-primary welcome is-small">
                    <div class="hero-body">
                        <div class="container">
                            <h1 class="title">
                                환영합니다,  {{--{{ Auth::user()->name }}--}}이름
                            </h1>
                        </div>
                    </div>
                </section>
                <section class="info-tiles">
                    <div class="tile is-ancestor has-text-centered">
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">439k</p>
                                <p class="subtitle">내가 쓴 글 갯수</p>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">439k</p>
                                <p class="subtitle">내가 달은 댓글 갯수</p>
                            </article>
                        </div>
                    </div>
                </section>
                <div class="columns">
                    <div class="column is-6">
                        <div class="card events-card">
                            <header class="card-header">
                                <p class="card-header-title is-centered">
                                    내가 쓴 글
                                </p>
                            </header>
                            <div class="card-table">
                                <div class="content">
                                    <table class="table is-fullwidth is-striped">
                                        <thead>
                                            <tr>
                                                <th>번호</th>
                                                <th>제목</th>
                                                <th>글쓴이</th>
                                                <th>날짜</th>
                                                <th>편집</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>번호</td>
                                                <td>제목</td>
                                                <td>글쓴이</td>
                                                <td>날짜</td>
                                                <td>편집</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-6"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
