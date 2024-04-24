@extends('layouts.app')

@section('title', 'Listings')

@section('content')
<div class='flex flex-col items-center'>
    <h1 class='main-heading'>{{ $heading }}</h1>
    @unless(count($listings) == 0)

    <ul class='p-10 w-1/2'>
        @foreach ($listings as $key => $listing)
            <li class='mt-4'>
                <x-listing-card :listing="$listing" />
            </li>
        @endforeach
    
    </ul>
    @else
        <p>Listings seem to be low... know anyone hiring? Send them our way!</p>
    @endunless
</div>

    {{ env('TEST')}}

@endsection
