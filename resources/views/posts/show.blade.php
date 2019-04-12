{{--Laat Post zien--}}

@extends('layouts.app')

@section('content')
    <div>
        <a href="/posts" class="btn btn-primary">Go back</a>
    </div>
    &nbsp;
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-dark">Edit</a>
@endsection