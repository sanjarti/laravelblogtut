@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10" style="margin: 30px;">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <a href="/posts/create" class="btn btn-primary" style="margin-bottom: 15px">Create post</a>

                    <h3>Your Blog Posts</h3>

                    <table class="table table-striped"style="margin-top: 20px">

                    @foreach($posts as $post)
                    <tr>
                        <th>{{$post->title}}</th>
                        <th><a class="btn btn-default" href="posts/{{$post->id}}/edit">Edit</a></th>
                        <th></th>
                    </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
