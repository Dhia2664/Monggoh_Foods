<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monggo Food - Delivery Order</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 font-sans leading-normal tracking-wider">

    <!-- Navigation Bar -->
    <nav class="bg-indigo-600 p-5 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-white text-3xl font-semibold hover:text-indigo-300">Monggo Food</a>
            <div class="hidden md:flex space-x-6">
                <a href="{{ url('/') }}" class="text-white hover:text-indigo-300 tab-link" data-tab="home"
                    id="homeTab">Home</a>
                <a href="{{ url('/menu') }}" class="text-white hover:text-indigo-300 tab-link" data-tab="menu"
                    id="menuTab">Menu</a>
                <a href="{{ url('/history') }}" class="text-white hover:text-indigo-300 tab-link" data-tab="history"
                    id="historyTab">History</a>
                <a href="{{ url('/settings') }}" class="text-white hover:text-indigo-300 tab-link" data-tab="settings"
                    id="settingsTab">Settings</a>
            </div>
        </div>
    </nav>


    <!-- Main Hero Section -->
    <header class="bg-indigo-600 text-white text-center py-24 mt-8 relative overflow-hidden">
        <div class="container mx-auto px-6 md:px-12 lg:px-20">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Welcome to Monggo Food</h1>
            <p class="text-lg md:text-xl mb-6">Order your favorite food and enjoy fast, reliable delivery!</p>
            <a href="#menu"
                class="px-8 py-3 bg-indigo-700 text-white rounded-lg shadow-lg hover:bg-indigo-800 transition duration-300">Browse
                Menu</a>
        </div>
        <div
            class="absolute top-0 right-0 bottom-0 left-0 bg-gradient-to-r from-indigo-600 via-indigo-500 to-indigo-400 opacity-40">
        </div>
    </header>

    <!-- Section Menu -->
    <section id="menu" class="py-16 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold text-indigo-600 mb-8">Explore Our Menu</h2>
            <p class="text-lg text-gray-600 mb-8">Browse through a variety of delicious meals crafted to satisfy your
                cravings.</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <img src="https://via.placeholder.com/300" alt="Menu Item 1"
                        class="w-full h-48 object-cover rounded-t-lg">
                    <h3 class="text-xl font-semibold text-indigo-600 mt-4">Delicious Burger</h3>
                    <p class="text-gray-600 mt-2">A tasty beef burger with all your favorite toppings!</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <img src="https://via.placeholder.com/300" alt="Menu Item 2"
                        class="w-full h-48 object-cover rounded-t-lg">
                    <h3 class="text-xl font-semibold text-indigo-600 mt-4">Fresh Salad</h3>
                    <p class="text-gray-600 mt-2">A healthy and refreshing salad with a variety of greens and toppings.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <img src="https://via.placeholder.com/300" alt="Menu Item 3"
                        class="w-full h-48 object-cover rounded-t-lg">
                    <h3 class="text-xl font-semibold text-indigo-600 mt-4">Tasty Pizza</h3>
                    <p class="text-gray-600 mt-2">Enjoy a hot, cheesy pizza with your favorite toppings.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold text-indigo-600 mb-8">Why Choose Monggo Food?</h2>
            <p class="text-lg text-gray-600 mb-12">Monggo Food is more than just a food delivery service. We strive to
                deliver quality, convenience, and a unique experience that makes your meal time better.</p>

            <!-- Three Reasons -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="bg-indigo-600 text-white p-8 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto mb-4 text-white" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 11c2.487 0 4.5-2.013 4.5-4.5S14.487 2 12 2 7.5 4.013 7.5 6.5 9.513 11 12 11zM12 16c-2.487 0-4.5 2.013-4.5 4.5S9.513 25 12 25s4.5-2.013 4.5-4.5S14.487 16 12 16z">
                        </path>
                    </svg>
                    <h3 class="text-xl font-semibold mb-4">Fast Delivery</h3>
                    <p class="text-gray-200">Our delivery team works tirelessly to ensure that your food arrives on
                        time, hot, and fresh. Fast delivery is our promise!</p>
                </div>

                <div class="bg-indigo-600 text-white p-8 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto mb-4 text-white" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 12h9M12 6h9M12 18H3"></path>
                    </svg>
                    <h3 class="text-xl font-semibold mb-4">Variety of Choices</h3>
                    <p class="text-gray-200">We offer a wide range of meal options for everyone, from quick snacks to
                        hearty meals. Choose your favorite, and we’ll bring it to you!</p>
                </div>

                <div class="bg-indigo-600 text-white p-8 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto mb-4 text-white" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M5.25 2.25L12 5.7l6.75-3.45a.75.75 0 011.05.65v6.9a.75.75 0 01-.35.63l-6.75 4.35a.75.75 0 01-.7 0L5.25 13.2a.75.75 0 01-.35-.63V2.9a.75.75 0 011.05-.65z">
                        </path>
                    </svg>
                    <h3 class="text-xl font-semibold mb-4">Quality Ingredients</h3>
                    <p class="text-gray-200">We believe in using only the finest, freshest ingredients for every dish.
                        Taste the difference in every bite.</p>
                </div>
            </div>

            <div class="mt-12">
                <p class="text-lg text-gray-600 mb-6">Experience Monggo Food today and make your meals even more
                    enjoyable. We’re here to serve you!</p>
                <a href="#menu"
                    class="mt-6 px-5 py-3 bg-indigo-700 text-white rounded-lg shadow-lg hover:bg-indigo-800 transition duration-300">Order
                    Now</a>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="bg-indigo-600 text-white py-4 text-center">
        <p>&copy; 2024 Monggo Food. All Rights Reserved.</p>
    </footer>

</body>

</html>
