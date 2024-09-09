@extends('layouts.admin')

@section('content')

    @foreach($posts as $post)
        <div class="elemPosts">
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->content }}</p>
        </div>
    @endforeach

@endsection
