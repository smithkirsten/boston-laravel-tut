@extends('layouts.app')

@section('title', 'Resumes')

@section('content')
<div class='flex flex-col items-center w-full'>
    <h1 class='main-heading'>{{ $heading }}</h1>
    @unless(count($resumes) == 0)

    <ul>
        @foreach ($resumes as $key => $resume)
            <li class="p-4">
                <x-resume-card :resume="$resume" />
            </li>
        @endforeach
    
    </ul>
    @else
        <p>No one wants to work anymore</p>
    @endunless
</div>

    {{ env('TEST')}}

@endsection