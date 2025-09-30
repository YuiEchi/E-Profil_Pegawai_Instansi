<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - E-Profil Pegawai</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url('{{ asset("assets/images/bg_login.png") }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen px-4">
    <div class="w-full max-w-sm sm:max-w-md">
        <div class="bg-white shadow-md rounded-lg p-6 sm:p-8 bg-opacity-90">
            <!-- Logo -->
            <div class="text-center mb-6">
                <img src="{{ asset('assets/images/simasneg2.png') }}" alt="Logo" class="mx-auto h-14 sm:h-16 mb-4">
                <h1 class="text-xl sm:text-2xl font-bold text-gray-800">Masuk ke Akun Anda</h1>
            </div>

            <!-- Form Login -->
            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" id="username" name="username"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm 
                               placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                        required autofocus>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm 
                               placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                        required>
                </div>

                <div class="flex items-center justify-between">
                    <a href="{{ route('password.request') }}" class="text-sm text-blue-600 hover:underline">Lupa Password?</a>
                </div>

                <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm 
                           text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none 
                           focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Login
                </button>
            </form>

            <!-- Footer -->
            <p class="mt-4 text-center text-sm text-gray-600">
                Belum punya akun?
                <a href="#" class="font-medium text-blue-600 hover:text-blue-500">Daftar di sini</a>
            </p>
        </div>
    </div>
</body>
</html>
