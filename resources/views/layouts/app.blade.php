<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="@yield('description')">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>@yield('title') @hasSection('title') | @endif {{ env('APP_NAME') }}</title>
        <style>[x-cloak] {display: none !important}</style>

    </head>
    <body class="@yield('body_classes')">
        <nav class='font-bold text-large w-full'>
            <a href='/'> <h1 class='text-center p-2 main-heading'>{{ env('APP_NAME') }}</h1> </a>
            <ul class='my-6 p-6 flex justify-between border-y-2'>
                <li><a href='/listings'>Listings</a></li>
                <li><a href='/resumes'>Resumes</a></li>
                <li><a href='/submit'>Submit</a></li> 
            </ul>
        </nav>
        <main>
            <div class='m-auto flex flex-col items-center'>
                @yield('content')
            </div>
        </main>
        @yield('extra_js')
    </body>
</html>
