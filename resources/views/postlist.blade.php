@extends('layouts.app')

@section('content')
    <div>
        <h1 class="is-size-1 has-text-centered">{{ $post }}</h1>
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
    </div>
@endsection
