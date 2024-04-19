@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class='flex flex-col justify-center'>
    <h1 class='main-heading'>{{ $heading }}</h1>
    @unless(count($listings) == 0)

    <ul>
        @foreach ($listings as $key => $listing)
            <li>
                <a href="/listing/{{$listing['id']}}"><h2 class='listing-header'>{{ $key }}: {{ $listing['title'] }}</h2></a>
                <p>{{$listing['description']}}</p>
            </li>
        @endforeach
    
    </ul>
    @else
        <p>Listings seem to be low... know anyone hiring? Send them our way!</p>
    @endunless
</div>

    {{ env('TEST')}}

@endsection
