@extends('layouts.app')

@section('content')
    <div class="links">
        {{$tagline}}
    </div>

    <div class="title m-b-md">
        {{$title}}
    </div>

    <div class="links">
        <a href="./kabubu">kaBuBu</a> | 
        <a href="./kb">kaBinika</a> | 
        <a href="./kakeeka">kakeeka</a>
    </div>

    <div class="links">
        <a href="./architecture">arch</a> | 
        <a href="./brochure">brochure</a> | 
        <a href="./catalogue">catalogue</a>| 
        <a href="./directory">directory</a>| 
        <a href="./engagment">engagment</a>
    </div>

@endsection