@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class='border-2 border-green-950 rounded p-6'>
    <h1 class='main-heading'>{{ $resume->name }}</h1>
    <p class='italic'>{{$resume->location}}</p>
    <hr class='my-6'>
    <p>{{$resume->description}}</p>
    <a href={{$resume->website}}>Website</a>
    <p class='font-bold'>{{$resume->skills}}</p>
    <hr class='my-6'>
    <p class='font-bold'>Contact:</p>
    <p>{{$resume->email}}</p>
</div>
@endsection