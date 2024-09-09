@extends('layouts.app')

@section('content')

    @foreach($posts as $post)
        <div class="elemPosts">
            <h3><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></h3>
            <p>{{ $post->content }}</p>
        </div>
    @endforeach

@endsection
