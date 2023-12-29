<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,800&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

@php
    $logInButtonStyles = $viewButtonStyles = 'tracking-wide min-w-[20rch] inline-flex  gap-1 justify-center w-20 py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white font-semibold rounded';

    $logoutButtonStyles = 'tracking-wide min-w-[20rch] inline-flex  gap-1 justify-center w-20 py-2 px-4 bg-gray-500 hover:bg-gray-600 text-white font-semibold rounded';
@endphp


<body
    class="antialiased flex flex-col min-h-[100vh]  gap-10 justify-center items-center  dark:bg-gray-800   bg-gradient-to-b from-slate-100 to-stone-100 dark:from-slate-800	dark:to-stone-800">

    <x-site-title-banner />

    <p class="text-center text-lg leading-8 flex flex-col dark:text-white">
        <span >A <a href="https://laravel.com/" target="_blank" class="font-bold text-red-600 hover:text-red-400 dark:text-red-400 dark:hover:text-red-600">Laravel</a> Project, </span>
        <span>with <a href="https://laravel.com/" target="_blank" class="font-bold text-sky-600 hover:text-sky-400 dark:text-sky-400 dark:hover:text-sky-600">Tailwind CSS</a></span>
        <span>by <a href="https://github.com/hortfrancis" target="_blank" class="font-bold hover:text-gray-500 dark:hover:text-gray-400">Alex Hort-Francis</a></span>
    </p>

    @auth
        {{-- If the user is logged in,
            show links to companies and employees --}}
        <div class="flex flex-col gap-4">
            <a href="{{ route('companies.index') }}" class="{{ $viewButtonStyles }}">
                <span class="font-medium">View All</span> Companies</a>
            <a href="{{ route('employees.index') }}" class="{{ $viewButtonStyles }}">
                <span class="font-medium">View All</span> Employees</a>
        </div>
    @else

            <x-nice-hr />

            <a href="/login" class="{{ $logInButtonStyles }}">Log In</a>

    @endauth

    @auth
        {{-- If the user is logged in --}}
        {{-- Show the logout button --}}

        <x-nice-hr />

        <form action="{{ route('logout') }}" method="POST" class="flex flex-col gap-6">
            @csrf
            <button type="submit" class="{{ $logoutButtonStyles }}">Log Out</button>
        </form>
    @endauth

</body>

</html>
