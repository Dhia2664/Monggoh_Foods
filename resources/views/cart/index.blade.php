@extends('layouts.cart')

@section('content')
    <div class="container mx-auto mt-10 px-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Your Cart</h1>

        @if ($cartCount > 0)
            <div class="bg-white shadow-lg rounded-lg p-6">
                <ul class="space-y-4">
                    @foreach ($cartItems as $item)
                        <li class="flex items-center justify-between border-b pb-4">
                            <!-- Product Info -->
                            <div class="flex items-center space-x-4">
                                <!-- Placeholder image -->
                                <div class="w-16 h-16 bg-gray-200 rounded-md">
                                    <img src="{{ asset('img/products/' . $item->id . '.jpg') }}" alt="{{ $item->name }}"
                                        class="w-full h-full object-cover rounded-md">
                                </div>
                                <div>
                                    <p class="text-lg font-semibold text-gray-700">{{ $item->name }}</p>
                                    <p class="text-sm text-gray-500">{{ $item->quantity }} x
                                        ${{ number_format($item->price, 2) }}</p>
                                </div>
                            </div>

                            <!-- Remove Button -->
                            <div class="flex items-center space-x-4">
                                <p class="text-lg font-semibold text-gray-800">
                                    ${{ number_format($item->price * $item->quantity, 2) }}</p>
                                <a href="{{ route('cart.remove', $item->id) }}"
                                    class="text-red-600 hover:text-red-800 text-sm font-semibold">Remove</a>
                            </div>
                        </li>
                    @endforeach
                </ul>

                <!-- Cart Summary -->
                <div class="mt-6 border-t pt-4">
                    <div class="flex justify-between text-gray-800 text-lg font-semibold">
                        <p>Total Items</p>
                        <p>{{ $cartCount }}</p>
                    </div>
                    <div class="flex justify-between text-gray-800 text-lg font-semibold mt-2">
                        <p>Total Price</p>
                        <p>${{ number_format($cartTotal, 2) }}</p>
                    </div>
                </div>

                <!-- Checkout Button -->
                <div class="mt-6 text-right">
                    <a href="{{ route('checkout') }}"
                        class="px-6 py-2 bg-lime-500 text-white font-semibold rounded-lg shadow-lg hover:bg-lime-600">Proceed
                        to Checkout</a>
                </div>
            </div>
        @else
            <div class="text-center">
                <p class="text-lg text-gray-500">Your cart is empty!</p>
                <a href="{{ url('/') }}"
                    class="mt-4 inline-block px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Continue
                    Shopping</a>
            </div>
        @endif
    </div>
@endsection
