@props(['listing'])

    <article class='w-full bg-white rounded p-4'>
        <header class='flex"'>
            <a href="/listing/{{$listing['id']}}"><h2 class='listing-header'>{{ $listing->title }}</h2></a>
            <p class='italic'>{{$listing->location}}</p>
        </header>
        <hr class='m-2'>
        <p>{{$listing->description}}</p>
    </article>