@extends('layout.main')
@section('container')

    <h1>{{$title}}</h1>

    @if ($posts->count())
        
    <div class="card mb-3">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body text-center">
            <h3 class="card-title">{{$posts[0]->title}}</h3>
            <p class="card-text">{{$posts[0]->excerpt}}</p>

            <p>
                <small class="text-muted">
                By. <a href="/author/{{$posts[0]->author->user_name}}"> {{$posts[0]->author->name}}</a> in 
                <a href="/categories/{{$posts[0]->category->slug}}"class="text-decoration-none">{{$posts[0]->category->name}}
                </a>
                {{$posts[0]->created_at->diffForHumans()}}
            </small>
            </p>
            <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn-primary">Read more</a>
    
        </div>
    </div>
    @else 
    <p class="text-center fs-4">no post found.</p>
    @endif


    @foreach ($posts->skip(1) as $post)
    <article class="mb-9 border-bottom">
        <h2>
            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{$post->title}}</a>
        </h2>

    <p>By. <a href="/author/{{$post->author->user_name}}"> {{$post->author->name}}</a> in 
        <a href="/categories/{{$post->category->slug}}"class="text-decoration-none">{{$post->category->name}}
        </a> {{$post->created_at->diffForHumans()}}
    </p>
        <p>{{$post->excerpt}}</p>
        <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more...</a>
    </article>
    @endforeach

    @endsection



   