@extends('layout.main')
@section('container')
    <h1>About Page</h1>
 <h3> {{ $nama }}</h3>
 <p>{{$alamat}}</p>
 <img src="img/{{ $image }}" alt="" width="200" class="img-thumbnail rounded-circle">

{{$post->slug}}

    

 
 @endsection

