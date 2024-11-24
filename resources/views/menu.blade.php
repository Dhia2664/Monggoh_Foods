<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monggoh Foods</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-poppins min-h-screen flex flex-col">
    <!-- Kontainer Utama -->
    <div class="container mx-auto px-4 flex-grow">
        <!-- Bagian Atas -->
        <div class="w-[1000px] h-9 bg-lime-500 rounded-b-lg flex justify-center items-center mx-auto text-sm">
            <p>🌟Get 5% Off your first order, <span class="text-orange-500">Promo: Ardi ganteng</span></p>
        </div>

        <!-- Header -->
        <header class="mt-5">
            <nav class="container mx-auto flex items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center">
                    <img src="https://via.placeholder.com/100x50" alt="Logo" class="h-10">
                </div>

                <!-- Navbar Links -->
                <div class="navbar flex-1 ml-11">
                    <ul class="flex justify-left space-x-8">
                        <li><a href="{{ url('/') }}" class="text-black hover:text-lime-500">Home</a></li>
                        <li><a href="{{ url('/menu') }}" class="bg-lime-500 text-white px-5 py-2 rounded-full">Browse
                                Menu</a></li>
                    </ul>
                </div>

                <!-- Shopping Cart and Login/Signup Buttons -->
                <div class="flex items-center space-x-4">
                    <!-- Shopping Cart Button -->
                    <div class="relative">
                        <button id="cart-button"
                            class="bg-lime-500 text-white px-5 py-2 rounded-full flex items-center">
                            🛒
                        </button>

                        <!-- Shopping Cart Popup -->
                        <div id="cartPopup" class="fixed top-20 right-10 bg-white shadow-lg rounded-lg w-72 p-4 hidden">
                            <h3 class="font-semibold text-lg">Shopping Cart</h3>
                            <ul id="cartItems" class="mt-4 space-y-2">
                                <!-- Items will be dynamically added here -->
                            </ul>
                            <hr class="my-4">
                            <div class="flex justify-between items-center">
                                <span class="font-semibold">Total:</span>
                                <span id="cartTotal" class="font-bold text-lime-500">Rp 0</span>
                            </div>
                        </div>
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
                </div>

                <!-- Modal -->
                <div id="modal"
                    class="hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
                    <div class="bg-white p-5 rounded-lg w-80">
                        <h3 id="modal-item-name" class="text-xl font-semibold">Item Name</h3>
                        <img id="modal-item-image" class="w-full h-40 object-cover mb-3">
                        <p id="modal-item-description" class="text-sm mb-3"></p>
                        <p id="modal-item-price" class="text-lg font-bold mb-3">Rp 0</p>

                        <button id="addToCartButton" class="bg-lime-500 text-white px-4 py-2 rounded-full w-full">Add to
                            Cart</button>
                        <button onclick="closeModal()" class="mt-3 text-sm text-gray-600">Close</button>
                    </div>
                </div>

                <script>
                    let cart = []; // Array to hold cart items

                    // Function to open the modal with food/drink details
                    function openModal(id, name, price, image) {
                        document.getElementById('modal').classList.remove('hidden');
                        document.getElementById('modal-item-name').textContent = name;
                        document.getElementById('modal-item-price').textContent = `Rp ${price}`;
                        document.getElementById('modal-item-image').src = image;
                        document.getElementById('modal-item-description').textContent = `Delicious ${name}`;

                        // Attach function to the Add to Cart button
                        document.getElementById('addToCartButton').onclick = function() {
                            addToCart({
                                id,
                                name,
                                price,
                                image
                            });
                        };
                    }

                    // Function to close the modal
                    function closeModal() {
                        document.getElementById('modal').classList.add('hidden');
                    }

                    // Add to Cart function
                    function addToCart(item) {
                        cart.push(item);
                        updateCartPopup();
                        closeModal();
                    }

                    // Update the Cart Popup
                    function updateCartPopup() {
                        // Code to update the cart popup
                        console.log(cart);
                    }
                </script>
            </nav>
        </header>

        <section class="py-10 bg-gray-50">
            <div class="container mx-auto px-4">
                <h2 class="text-lime-500 text-2xl font-bold text-center mb-8">Foods</h2>
                <!-- Garis Horizontal Lime -->
                <hr class="border-t-8 border-lime-500 mb-8">
                <div class="flex flex-wrap gap-6 justify-center">
                    {{-- <!-- Card Item 1 -->
                    @foreach ($foodItems as $item)
                        <a href="javascript:void(0)" onclick="openModal('{{ $item->name }}', {{ $item->price }})"
                            class="w-[400px] h-[200px] bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow flex items-center p-4">
                            <img src="{{ $item->image ? asset('storage/' . $item->image) : 'https://via.placeholder.com/150' }}"
                                alt="{{ $item->name }}" class="w-full h-40 object-cover mb-3">
                            <h3 class="text-lg font-semibold">{{ $item->name }}</h3>
                            <p class="text-sm text-gray-600 mb-3">{{ $item->description }}</p>
                            <p class="text-lg font-bold">Rp {{ number_format($item->price, 0, ',', '.') }}</p>
                            <!-- Text Content -->
                            <div class="flex-1">
                                <h3 class="text-lg font-semibold">{{ $item->name }}</h3>
                                <p class="text-sm text-gray-600">{{ $item->description }}</p>
                                <p class="text-lg font-bold mt-2">Rp
                                    {{ number_format($food->price, 0, ',', '.') }}</p>
                            </div>
                            <div class="relative ml-4">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="Food Image"
                                    class="w-[100px] h-[100px] rounded-md">
                                <div
                                    class="absolute bottom-[-10px] right-[-10px] w-10 h-10 bg-white text-black rounded-full flex items-center justify-center border border-white opacity-95 hover:bg-white cursor-pointer">
                                    <span class="text-xl font-bold">+</span>
                                </div>
                            </div>
                        </a>
                    @endforeach --}}

                    <!-- Card Item 1 -->
                    <a href="javascript:void(0)" onclick="openModal()"
                        class="w-[400px] h-[200px] bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow flex items-center p-4">
                        <!-- Text Content -->
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold">Nama makanan 1</h3>
                            <p class="text-sm text-gray-600">Deskripsi makanan 1</p>
                            <p class="text-lg font-bold mt-2">Rp 50,000</p>
                        </div>
                        <div class="relative ml-4">
                            <img src="https://via.placeholder.com/150" alt="Food Image"
                                class="w-[100px] h-[100px] rounded-md">
                            <div
                                class="absolute bottom-[-10px] right-[-10px] w-10 h-10 bg-white text-black rounded-full flex items-center justify-center border border-white opacity-95 hover:bg-white cursor-pointer">
                                <span class="text-xl font-bold">+</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <section class="py-10 bg-gray-50">
            <div class="container mx-auto px-4">
                <h2 class="text-lime-500 text-2xl font-bold text-center mb-8">Drinks</h2>
                <!-- Garis Horizontal Lime -->
                <hr class="border-t-8 border-lime-500 mb-8">
                <div class="flex flex-wrap gap-6 justify-center">

                    {{-- <!-- Card Item 1 -->
                    @foreach ($drinkItems as $item)
                        <a href="javascript:void(0)" onclick="openModal('{{ $item->name }}', {{ $item->price }})"
                            class="w-[400px] h-[200px] bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow flex items-center p-4">
                            <img src="{{ $item->image ? asset('storage/' . $item->image) : 'https://via.placeholder.com/150' }}"
                                alt="{{ $item->name }}" class="w-full h-40 object-cover mb-3">
                            <h3 class="text-lg font-semibold">{{ $item->name }}</h3>
                            <p class="text-sm text-gray-600 mb-3">{{ $item->description }}</p>
                            <p class="text-lg font-bold">Rp {{ number_format($item->price, 0, ',', '.') }}</p>
                            <!-- Text Content -->
                            <div class="flex-1">
                                <h3 class="text-lg font-semibold">{{ $item->name }}</h3>
                                <p class="text-sm text-gray-600">{{ $item->description }}</p>
                                <p class="text-lg font-bold mt-2">Rp
                                    {{ number_format($food->price, 0, ',', '.') }}</p>
                            </div>
                            <div class="relative ml-4">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="Food Image"
                                    class="w-[100px] h-[100px] rounded-md">
                                <div
                                    class="absolute bottom-[-10px] right-[-10px] w-10 h-10 bg-white text-black rounded-full flex items-center justify-center border border-white opacity-95 hover:bg-white cursor-pointer">
                                    <span class="text-xl font-bold">+</span>
                                </div>
                            </div>
                        </a>
                    @endforeach --}}

                    <!-- Card Item 1 -->
                    <a href="javascript:void(0)" onclick="openModal()"
                        class="w-[400px] h-[200px] bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow flex items-center p-4">
                        <!-- Text Content -->
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold">Nama makanan 1</h3>
                            <p class="text-sm text-gray-600">Deskripsi makanan 1</p>
                            <p class="text-lg font-bold mt-2">Rp 50,000</p>
                        </div>
                        <div class="relative ml-4">
                            <img src="https://via.placeholder.com/150" alt="Food Image"
                                class="w-[100px] h-[100px] rounded-md">
                            <!-- Lingkaran biasa -->
                            <div
                                class="absolute bottom-[-10px] right-[-10px] w-10 h-10 bg-white text-black rounded-full flex items-center justify-center border border-white opacity-95 hover:bg-white cursor-pointer">
                                <span class="text-xl font-bold">+</span>
                            </div>
                        </div>
                    </a>
        </section>
</body>

</html>
