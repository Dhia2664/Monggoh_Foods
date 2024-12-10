<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>{{ config('app.name', 'Monggoh_Foods') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Promo Bar -->
    <div class="w-full max-w-[1000px] h-9 bg-lime-500 rounded-b-lg flex justify-center items-center mx-auto text-sm">
        <p>🌟 Get 5% Off your first order, <span class="text-orange-500">Promo: Ardi Ganteng</span></p>
    </div>
</head>

<body class="font-sans antialiased bg-gray-100">
    <div class="min-h-screen">
        <!-- Navigation -->
        <div class="mb-6"> <!-- Tambahkan margin bawah -->
            @include('layouts.navigation')
        </div>

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white shadow mb-8"> <!-- Tambahkan margin bawah -->
                <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main class="px-4 sm:px-6 lg:px-8">
            {{ $slot }}
        </main>
    </div>


    <!-- Footer -->
    <footer class="bg-lime-600 text-white py-10 mt-20">
        <div class="max-w-[1500px] mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">
            <!-- Company Info -->
            <div class="pl-6">
                <img src="{{ asset('img/logo/logo.png') }}" alt="Logo" class="w-[132px]">
                <p class="mt-5">Company # 490039-445, Registered with House of Companies.</p>
                <p class="mt-3">&copy; 2024, All Rights Reserved.</p>
            </div>

            <!-- Legal Pages -->
            <div class="ml-8">
                <h3 class="text-lg font-bold">Legal Pages</h3>
                <ul class="space-y-2 mt-3">
                    <li><a href="#" class="text-white-600">Terms and Conditions</a></li>
                    <li><a href="#" class="text-white-600">Privacy</a></li>
                    <li><a href="#" class="text-white-600">Cookies</a></li>
                </ul>
            </div>

            <!-- Important Links -->
            <div>
                <h3 class="text-lg font-bold">Important Links</h3>
                <ul class="space-y-2 mt-3">
                    <li><a href="{{ url('/') }}" class="text-white-600">Home</a></li>
                    <li><a href="{{ url('/about') }}" class="text-white-600">About Us</a></li>
                    <li><a href="{{ url('/contact') }}" class="text-white-600">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>
