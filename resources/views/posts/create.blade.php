@extends('layouts.app')

@section('content')
    <h1>Create post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{form::label('title', 'Title')}}
            {{form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{form::label('body', 'Body')}}
            {{--CK editor toegevoeg in array binnen textarea--}}
            {{form::textarea('body', '', [ 'id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
            {{form::file('cover_image')}}
        </div>
    {{form::submit('Submit', ['class'=> 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection