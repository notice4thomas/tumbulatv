@extends('layouts.app')

@section('content')
    <div class="links">
        {{$tagline}}
    </div>

    <div class="title m-b-md">
        {{$title}}
    </div>
    @if(count($bottomlines) > 0)
        <div class="links">
            @foreach($bottomlines as $bottomline)
            <a href="./">{{$bottomline}}</a>| 
            @endforeach
        </div>
    @endif

@endsection
