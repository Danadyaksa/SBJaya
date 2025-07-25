<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', config('app.name', 'SB Jaya'))</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        @livewireStyles
        
    </head>
    <body id="page-top" class="font-sans antialiased">
        @if (session('success'))
            <div class="bg-green-500 text-white font-bold text-center py-3" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="min-h-screen bg-gray-100 flex flex-col">
            
            @include('layouts.partials.header')

            <main class="flex-grow">
                @yield('content')
            </main>

            @include('layouts.partials.footer')
        </div>

        

        
        @livewireScripts
    </body>
</html>