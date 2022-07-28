@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $posts->title }}</h2>
        <p>By: Puspakirana in <a href="/categories/{{ $posts->category->slug }}">{{ $posts->category->name }}</a></p>
        {{-- <h5>{{ $posts->author }}</h5> --}}
        {{-- {{  }} -> untuk escape html tag
        {!!  !!} -> tidak escape html tag --}}
        {!! $posts->body !!}
    </article>

    <a href="/blog">Back to Posts</a>
@endsection
