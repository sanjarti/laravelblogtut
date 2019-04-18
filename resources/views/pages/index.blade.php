{{--Pagina-skelet wordt aangeroepen --}}
@extends('layouts.app')

{{--Hier wordt de index-pagina ingeladen in de 'content'--}}
@section('content')

        <div class="jumbotron text-center" style="margin-top: 15px">

{{--            Wordt geladen als gebr is ingelogd--}}
            @guest

                <a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a class="btn btn-success btn-lg" href="{{ route('register') }}" >{{ __('Register') }}</a>
                @endif
                @else
                <h1>Welcome to your Larablog account</h1>
                <h3>{{ Auth::user()->name }} </h3>
            @endguest
        </div>

@endsection