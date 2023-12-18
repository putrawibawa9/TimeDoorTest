@extends ('layout.main')


@section('container')
<article>

    <h2 class="mb-5">{{$post->title}}</h2>

    <p>By. <a href="/author{{ $post->author->id }}}">{{$post->author->name}}</a> in 
        <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}
        </a>
    </p>

    {!! $post->body !!}

    <a href="/posts" class="d-block">Back</a>
    @endsection

</article>






    