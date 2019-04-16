{{--Pagina-skelet wordt aangeroepen --}}
@extends('layouts.app')

{{--Hier wordt de index-pagina ingeladen in de 'content'--}}
@section('content')
        <div class="jumbotron text-center" class="padding-top: 10">
            <h1>Welcome to Laravel!</h1>
            <p>This is a laravel app from the tut.</p>
            <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/Register" role="button">Register</a></p>
        </div>

@endsection