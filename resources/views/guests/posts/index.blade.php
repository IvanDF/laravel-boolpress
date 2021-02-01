@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Your personal posts</h1>

    @if ( $posts -> isEmpty() )
        <h4>There's no posts</h4>
    @else 
        @foreach ($posts as $post)
            <article class="mb-5">
                <h2 class="display-3">{{ $post->title }}</h2>
                <div class="info">
                    By {{ $post->user->name }}
                    <div class="date">{{ $post->updated_at->diffForHumans() }}</div>
                </div>
                <a href=" {{ route('posts.show', $post->slug) }} ">Read More</a>
            </article>
        @endforeach
    @endif

</div>
@endsection
