<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap">


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class=" h-screen font-sans antialiased">
    <div class="h-full">

        <header class="flex flex-row h-[10%] justify-between shadow border-b border-gray-300">
            @include('layouts.nav-bar')
        </header>
        <div class="flex flex-row h-[90%] bg-gray-600">
            @include('layouts.navigation')

            <!-- Page Heading -->

            <!-- Page Content -->
            <main class="h-full w-full">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>

</html>