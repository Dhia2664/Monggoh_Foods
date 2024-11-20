<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monggo Food - Menu</title>
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

    <!-- Section Makanan -->
    <section id="makanan" class="py-16 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold text-indigo-600 mb-8">Makanan</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Menu Item 1 - Makanan -->
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <img src="https://via.placeholder.com/300" alt="Menu Item 1" class="w-full h-48 object-cover rounded-t-lg">
                    <h3 class="text-xl font-semibold text-indigo-600 mt-4">Delicious Burger</h3>
                    <p class="text-gray-600 mt-2">Rp 50,000</p>
                </div>
                <!-- Menu Item 2 - Makanan -->
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <img src="https://via.placeholder.com/300" alt="Menu Item 2" class="w-full h-48 object-cover rounded-t-lg">
                    <h3 class="text-xl font-semibold text-indigo-600 mt-4">Tasty Pizza</h3>
                    <p class="text-gray-600 mt-2">Rp 75,000</p>
                </div>
                <!-- Menu Item 3 - Makanan -->
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <img src="https://via.placeholder.com/300" alt="Menu Item 3" class="w-full h-48 object-cover rounded-t-lg">
                    <h3 class="text-xl font-semibold text-indigo-600 mt-4">Grilled Chicken</h3>
                    <p class="text-gray-600 mt-2">Rp 65,000</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Minuman -->
    <section id="minuman" class="py-16 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold text-indigo-600 mb-8">Minuman</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Menu Item 1 - Minuman -->
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <img src="https://via.placeholder.com/300" alt="Menu Item 1" class="w-full h-48 object-cover rounded-t-lg">
                    <h3 class="text-xl font-semibold text-indigo-600 mt-4">Iced Tea</h3>
                    <p class="text-gray-600 mt-2">Rp 15,000</p>
                </div>
                <!-- Menu Item 2 - Minuman -->
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <img src="https://via.placeholder.com/300" alt="Menu Item 2" class="w-full h-48 object-cover rounded-t-lg">
                    <h3 class="text-xl font-semibold text-indigo-600 mt-4">Orange Juice</h3>
                    <p class="text-gray-600 mt-2">Rp 20,000</p>
                </div>
                <!-- Menu Item 3 - Minuman -->
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <img src="https://via.placeholder.com/300" alt="Menu Item 3" class="w-full h-48 object-cover rounded-t-lg">
                    <h3 class="text-xl font-semibold text-indigo-600 mt-4">Coffee</h3>
                    <p class="text-gray-600 mt-2">Rp 25,000</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-indigo-600 text-white py-4 text-center">
        <p>&copy; 2024 Monggo Food. All Rights Reserved.</p>
    </footer>

    
</body>

</html>
