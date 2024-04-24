@props(['resume'])

<article class='w-full bg-white rounded p-4'>
    <header class='flex"'>
        <div class='flex gap-4'>
            <a href="/listing/{{$resume['id']}}"><h2 class='listing-header'>{{ $resume->name }}</h2></a> 
            <p class='bg-green-500 rounded p-2 text-sm'>{{$resume->years_experience}} years experience</p>
        </div>
        <p class='italic'>{{$resume->location}} </p>
    </header>
    <p class='font-bold'>{{$resume->skills}}</p>
</article>