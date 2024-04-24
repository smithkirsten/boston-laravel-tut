@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class='border-2 border-green-950 rounded p-6'>
    <h1 class='main-heading'>{{ $listing->title }}</h1>
    <p class='italic'>{{$listing->location}}</p>
    <hr class='my-6'>
    <p>{{$listing->description}}</p>
    <a href={{$listing->website}}>Website</a>
    <p class='font-bold'>{{$listing->tags}}</p>
    <hr class='my-6'>
    <p class='font-bold'>Contact: {{$listing->email}}</p>
    
</div>
@endsection