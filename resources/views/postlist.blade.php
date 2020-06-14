@extends('layouts.app')

@section('content')
    @switch($title)
        @case("notice")
            <h1 class="is-size-1 has-text-centered">공지사항</h1>
            @break
        @case("notice")
            <h1 class="is-size-1 has-text-centered">자유게시판</h1>
            @break
        @case("notice")
            <h1 class="is-size-1 has-text-centered">프로그래밍</h1>
            @break
        @default
            <h1 class="is-size-1 has-text-centered">게임</h1>
    @endswitch

    <table class="table is-fullwidth">
        <thead>
        <th>번호</th>
        <th>제목</th>
        <th>글쓴이</th>
        <th>날짜</th>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td><a class="has-text-black" href="{{ route('post',$post->id) }}">{{ $post->title }}</a></td>
                <td>{{ $post->email }}</td>
                <td>{{ $post->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <nav class="pagination is-centered" role="navigation" aria-label="pagination">
        <a href="{{ $posts->previousPageUrl() }}" class="pagination-previous">이전 페이지</a>
        <a href="{{ $posts->nextPageUrl() }}" class="pagination-next">다음 페이지</a>
        <ul class="pagination-list">
            @for($i=1; $i < 10; $i++)
                @if($posts->currentPage() == $i)
                    <li><a href="{{ "http://127.0.0.1:8000/".$title."/list?page=".$i }}" class="pagination-link is-current">{{ $i }}</a></li>
                @else
                    <li><a href="{{ "http://127.0.0.1:8000/".$title."/list?page=".$i }}" class="pagination-link">{{ $i }}</a></li>
                @endif
            @endfor
        </ul>
    </nav>
@endsection
