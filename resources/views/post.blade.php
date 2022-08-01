@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2>{{ $posts->title }}</h2>
                <p>By: <a class="text-decoration-none" href="/authors/{{ $posts->author->username }}">{{ $posts->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $posts->category->slug }}">{{ $posts->category->name }}</a></p>

                <img src="https://source.unsplash.com/1200x400?{{ $posts->category->name }}" alt="{{ $posts->category->name }}" class="img-fluid"/>


                {{-- <h5>{{ $posts->author }}</h5> --}}
                {{-- {{  }} -> untuk escape html tag
                {!!  !!} -> tidak escape html tag --}}

                <article class="my-3 fs-5 ">
                    {!! $posts->body !!}
                </article>


                <a href="/blog" class="d-block mt-3">Back to Posts</a>
            </div>
        </div>
    </div>



@endsection
