@extends('layouts.app')

@section('content')
    <h3 style="margin: 30px">Posts</h3>
    <hr>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card p-3">
                <h3><a href="posts\{{$post->id}}">{{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}}</small>
            </div>
        @endforeach
    @else
        <p>No posts found</p>
    @endif
@endsection