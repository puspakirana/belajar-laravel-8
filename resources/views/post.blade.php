@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $posts->title }}</h2>
        <p>By: <a class="text-decoration-none" href="/authors/{{ $posts->author->username }}">{{ $posts->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $posts->category->slug }}">{{ $posts->category->name }}</a></p>
        {{-- <h5>{{ $posts->author }}</h5> --}}
        {{-- {{  }} -> untuk escape html tag
        {!!  !!} -> tidak escape html tag --}}
        {!! $posts->body !!}
    </article>

    <a href="/blog" class="d-block mt-3">Back to Posts</a>
@endsection
