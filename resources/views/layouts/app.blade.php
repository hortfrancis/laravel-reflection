<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-200 dark:bg-gray-600">
    @include('layouts.navigation')

    <!-- Page Heading -->
    @if (isset($heading))
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="font-semibold text-xl leading-tight text-gray-800 dark:text-white">
                    {{ $heading }}
                </h1>

            </div>
        </header>
    @endif

    @if (isset($secondaryNav))

        {{--                STATIC CONTENT FOR DEBUGGING--}}

        <!-- Secondary Navigation -->

        {{--                <header class="bg-white dark:bg-gray-800 shadow">--}}
        {{--                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">--}}
        <div class="max-w-7xl mx-auto my-10 px-6  sm:px-6 lg:px-8 flex justify-between space-x-6  ">
            {{--                        <div class="flex "></div>--}}
            {{ $secondaryNav }}
        </div>
        {{--                </header>--}}
    @endif

    <!-- Page Content -->
    <main class="max-w-7xl mx-auto my-8 sm:px-6 lg:px-8 ">
        {{--                <div class="p-6 bg-gray-500 border-b border-gray-200 ">--}}
        <div class=" bg-white  sm:rounded-lg">
            {{ $slot }}
        </div>
    </main>

    <x-footer/>
</div>
</body>
</html>
