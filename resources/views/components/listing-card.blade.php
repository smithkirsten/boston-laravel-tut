@props(['listing'])

    <x-card>
        <header class='flex"'>
            <a href="/listing/{{$listing['id']}}"><h2 class='listing-header'>{{ $listing->title }}</h2></a>
            <p class='italic'>{{$listing->location}}</p>
        </header>
        <hr class='m-2'>
        <p>{{$listing->description}}</p>
    </x-card>