<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Monggo Food</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Registration Form -->
    <div class="max-w-md mx-auto mt-20 p-6 bg-white shadow-lg rounded-lg">
        <h2 class="text-2xl font-bold text-center text-indigo-600 mb-6">Create an Account</h2>

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Full Name</label>
                <input type="text" id="name" name="name" class="w-full p-3 mt-2 border border-gray-300 rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="w-full p-3 mt-2 border border-gray-300 rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="w-full p-3 mt-2 border border-gray-300 rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-700">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="w-full p-3 mt-2 border border-gray-300 rounded-lg" required>
            </div>

            <button type="submit" class="w-full p-3 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700 transition">Register</button>

            <div class="mt-4 text-center">
                <p class="text-gray-600">Already have an account? <a href="login.html" class="text-indigo-600">Login</a></p>
            </div>
        </form>
    </div>

</body>
</html>
