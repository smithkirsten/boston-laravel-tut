@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class='flex flex-col justify-center'>
    <h1 class='main-heading'>{{ $heading }}</h1>
    @include('partials._hero')
    @unless(count($resumes) == 0)
    <div class="flex justify-center gap-4">
        <div class='border-2 border-green-950 rounded p-6'>
            <h2>Latest Listings</h2>
            <ul>
                @foreach ($listings as $key => $listing)
                    <li>
                        <a href="/listing/{{$listing['id']}}"><h2 class='listing-header'>{{ $listing->title }}</h2></a>
                        <p>{{$listing->skills}}</p>
                        <p>{{$listing->location}}</p>
                    </li>
                @endforeach
            </ul>
            <a href='/listings' class='p-2 bg-green-500 rounded hover:text-white'>View all listings</a>
        </div>
        <div class='border-2 border-green-950 rounded p-6'>
            <h2>Latest Resumes</h2>
            <ul>
                @foreach ($resumes as $key => $resume)
                    <li>
                        <a href="/resume/{{$resume['id']}}"><h2 class='listing-header'>{{ $resume->name }}, {{$resume->years_experience}} years experience</h2></a>
                        <p>{{$resume->skills}}</p>
                        <p>{{$resume->location}}</p>
                    </li>
                @endforeach
            </ul>
            <a href='/resumes' class='p-2 bg-green-500 rounded hover:text-white'>View all resumes</a>
        </div>

    </div>
    @else
        <p>The robots have come for our jobs and we are now in economic collapse. Please check again later.</p>
    @endunless
</div>

@endsection