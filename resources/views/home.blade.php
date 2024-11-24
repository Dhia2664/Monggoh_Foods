<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-poppins">
    <!-- Kontainer Utama -->
    <div class="container mx-auto px-4 flex-grow">
        <!-- Bagian Atas -->
        <div class="w-full max-w-[1000px] h-9 bg-lime-500 rounded-b-lg flex justify-center items-center mx-auto text-sm">
            <p>🌟Get 5% Off your first order, <span class="text-orange-500">Promo: Ardi ganteng</span></p>
        </div>

        <!-- Header -->
        <header class="mt-5">
            <nav class="container mx-auto flex items-center justify-between flex-wrap">
                <!-- Logo -->
                <div class="flex items-center">
                    <img src="https://via.placeholder.com/100x50" alt="Logo" class="h-10">
                </div>

                <!-- Navbar Links -->
                <div class="navbar flex-1 ml-11">
                    <ul class="flex justify-left space-x-8">
                        <li><a href="" class="bg-lime-500 text-white px-5 py-2 rounded-full">Home</a></li>
                        <li><a href="{{ url('/menu') }}" class="text-black hover:text-lime-500">Browse Menu</a></li>
                    </ul>
                </div>

                <!-- Login/Signup Button -->
                <div>
                    @if (auth()->check())
                        <!-- Jika User Sudah Login -->
                        <button class="bg-lime-500 text-white px-5 py-2 rounded-full flex items-center">
                            <span class="mr-2">👤</span> {{ auth()->user()->name }}
                        </button>
                    @else
                        <!-- Jika User Belum Login -->
                        <button class="bg-lime-500 text-white px-5 py-2 rounded-full flex items-center">
                            <span class="mr-2">👤</span> Login/Signup
                        </button>
                    @endif
                </div>
            </nav>
        </header>


        <!-- Section -->
        <section class="my-10">
            <div class="w-full h-[510px] border border-gray-500 rounded-md relative mx-auto">
                <div class="absolute top-0 left-[23%] h-[100%]">
                    <img src="img/orang.png" alt="" class="h-full">
                </div>
                <div class="absolute top-0 right-0 z-[-1]">
                    <img src="img/circle.png" alt="">
                </div>
                <div class="p-5">
                    <h1 class="text-4xl font-bold">Rasakan Masakanan enak,</h1>
                    <h1 class="text-lime-500 text-4xl font-bold mt-2">Cepat dan Maknyus</h1>
                </div>
            </div>
        </section>

        <!-- Stats -->
        <div
            class="flex flex-wrap justify-between items-center bg-lime-400 p-6 rounded-md max-w-[1200px] mx-auto mt-10 divide-x-2 divide-white">
            <!-- Stat 1 -->
            <div class="text-center text-white flex-1">
                <p class="text-4xl font-bold">546+</p>
                <p>Drivers Terdaftar</p>
            </div>

            <div class="text-center text-white flex-1">
                <p class="text-4xl font-bold">789,900+</p>
                <p>Order diterima</p>
            </div>
            <div class="text-center text-white flex-1">
                <p class="text-4xl font-bold">690+</p>
                <p>Restoran</p>
            </div>
            <div class="text-center text-white flex-1">
                <p class="text-4xl font-bold">17,457+</p>
                <p>Food items</p>
            </div>
        </div>


        <!-- Diskon -->
        <div class="flex justify-around mt-10 space-x-8 flex-wrap">
            <!-- Content Box 1 -->
            <div class="w-[445px] h-[335px] bg-gray-200 rounded-lg relative overflow-hidden mb-8">
                <div class="absolute bg-red-500 text-white font-bold text-sm py-1 px-3 rounded-bl-lg"
                    style="top: 0; right: 0;">
                    86% OFF
                </div>
                <img src="https://via.placeholder.com/445x200" alt="Makanan Diskon" class="w-full h-2/3 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Makanan Lezat</h3>
                    <p class="text-gray-600 text-sm">Diskon besar untuk menu spesial hari ini.</p>
                </div>
            </div>

            <!-- Content Box 2 -->
            <div class="w-[445px] h-[335px] bg-gray-200 rounded-lg relative overflow-hidden mb-8">
                <div class="absolute bg-red-500 text-white font-bold text-sm py-1 px-3 rounded-bl-lg"
                    style="top: 0; right: 0;">
                    10% OFF
                </div>
                <img src="https://via.placeholder.com/445x200" alt="Makanan Diskon" class="w-full h-2/3 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Promo Hari Ini</h3>
                    <p class="text-gray-600 text-sm">Nikmati hidangan favorit Anda dengan harga terjangkau.</p>
                </div>
            </div>

            <!-- Content Box 3 -->
            <div class="w-[445px] h-[335px] bg-gray-200 rounded-lg relative overflow-hidden mb-8">
                <div class="absolute bg-red-500 text-white font-bold text-sm py-1 px-3 rounded-bl-lg"
                    style="top: 0; right: 0;">
                    16% OFF
                </div>
                <img src="https://via.placeholder.com/445x200" alt="Makanan Diskon" class="w-full h-2/3 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">Menu Spesial</h3>
                    <p class="text-gray-600 text-sm">Dapatkan penawaran terbaik untuk makanan berkualitas.</p>
                </div>
            </div>
        </div>


        <!-- Footer -->
        <footer class="bg-gray-100 py-10 mt-20">
            <div class="max-w-[1500px] mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">
                <!-- Company Info -->
                <div class="pl-6">
                    <img src="img/logo/logo.png" alt="" class="w-[132px]">
                    <p class="mt-5">Company # 490039-445, Registered with House of companies.</p>
                    <p class="mt-3">&copy; 2024, All Rights Reserved.</p>
                </div>
                <!-- Legal Pages -->
                <div class="ml-8">
                    <h3 class="text-lg font-bold">Legal Pages</h3>
                    <ul class="space-y-2 mt-3">
                        <li><a href="#" class="text-gray-600">Terms and conditions</a></li>
                        <li><a href="#" class="text-gray-600">Privacy</a></li>
                        <li><a href="#" class="text-gray-600">Cookies</a></li>
                    </ul>
                </div>
                <!-- Important Links -->
                <div>
                    <h3 class="text-lg font-bold">Important Links</h3>
                    <ul class="space-y-2 mt-3">
                        <li><a href="#" class="text-gray-600">Home</a></li>
                        <li><a href="#" class="text-gray-600">About Us</a></li>
                        <li><a href="#" class="text-gray-600">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
