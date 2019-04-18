@extends('layouts.app')

@section('content')
    <h3 style="margin: 30px">{{$title}}</h3>
    @if(count($services) > 0)
        <ul class="list-group">
            @foreach($services as $service)
                <li class="list-group-item">{{$service}}</li>
            @endforeach
        </ul>
    @endif
@endsection