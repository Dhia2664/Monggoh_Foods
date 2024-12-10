<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo dan Navigation Links -->
            <div class="flex items-center space-x-4">
                <!-- Logo -->
                <a href="{{ route('dashboard') }}">
                    <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                </a>

                <!-- Navigation Links -->
                <div class="hidden md:flex items-center space-x-4">
                    {{-- Cek User --}}
                    @auth
                    @if(Auth::user()->role == 'admin')
                        <a href="{{ route('admin.dashboard') }}" class="text-gray-700 hover:text-lime-500 transition duration-300">Admin Dashboard</a>
                    @else
                        <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-lime-500 transition duration-300">Dashboard</a>
                    @endif
                @endauth                

                    <a href="{{ url('/menu') }}"
                        class="text-gray-700 hover:text-lime-500 transition duration-300">Browse Menu</a>
                </div>
            </div>

            <!-- Cart dan Settings Dropdown -->
            <div class="hidden md:flex items-center space-x-4">
                @auth
                    <!-- Cart -->
                    <a href="{{ route('cart.show') }}"
                        class="flex items-center px-4 py-2 text-gray-700 bg-gray-200 rounded-full hover:bg-lime-500 hover:text-white transition duration-300">
                        <svg class="h-5 w-5 text-gray-700 mr-2" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="M16 11H4a1 1 0 01-1-.92l-1-8A1 1 0 013 1h14a1 1 0 011 .92l-1 8a1 1 0 01-1 .08zM5.12 4L6 10h8l.88-6H5.12z" />
                        </svg>
                        <span>{{ Cart::getContent()->count() }} Items</span>
                    </a>

                    <!-- Settings -->
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="flex items-center px-4 py-2 text-gray-700 bg-gray-200 rounded-full hover:bg-lime-500 hover:text-white transition">
                                <div>{{ Auth::user()->name }}</div>
                                <svg class="ml-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                </svg>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">{{ __('Profile') }}</x-dropdown-link>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @else
                    <!-- Login/Register -->
                    <a href="{{ route('login') }}"
                        class="text-gray-700 hover:text-lime-500 transition duration-300 mr-4">Login</a>
                    <a href="{{ route('register') }}"
                        class="bg-lime-500 text-white px-4 py-2 rounded-full transition duration-300 ease-in-out hover:bg-lime-600">Register</a>
                @endauth
            </div>

            <!-- Hamburger Menu -->
            <div class="flex items-center md:hidden">
                <button @click="open = ! open"
                    class="p-2 rounded-md text-gray-500 hover:text-gray-700 hover:bg-gray-100 focus:outline-none">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden md:hidden">
        <div class="space-y-1 px-2 pt-2 pb-3">
            <a href="{{ url('/') }}"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-lime-500 hover:text-white">Home</a>
            <a href="{{ url('/menu') }}"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-lime-500 hover:text-white">Browse
                Menu</a>

            @auth
                <a href="{{ route('cart.show') }}"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-lime-500 hover:text-white">Cart</a>
            @else
                <a href="{{ route('login') }}"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-lime-500 hover:text-white">Login</a>
                <a href="{{ route('register') }}"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-lime-500 hover:text-white">Register</a>
            @endauth
        </div>
    </div>
</nav>
