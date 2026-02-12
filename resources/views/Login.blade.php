<!DOCTYPE html>
<html lang="en" data-theme="barcie">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - BarCIE</title>
    <link rel="icon" type="image/x-icon" href="/imageBg/barcie_logo.jpg">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="relative min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 overflow-hidden flex items-center justify-center">

    <!-- Animated background blobs -->
    <div class="absolute w-96 h-96 rounded-full opacity-30 blur-3xl animate-blob"
        style="background: linear-gradient(135deg, #4f46e5, #6366f1, #ec4899, #fcd34d);">
    </div>

    <div
        class="absolute top-1/4 left-1/4 w-72 h-72 bg-gradient-to-br from-pink-400 to-yellow-300 rounded-full opacity-20 blur-3xl animate-blob delay-4000">
    </div>

    <!-- Login Card -->
    <div
        class="relative z-10 w-full max-w-md bg-white rounded-3xl shadow-2xl border border-gray-100 p-10 animate-fadeInUp">
        <!-- Logo -->
        <div class="flex flex-col items-center mb-6">
            <div
                class="w-36 h-36 rounded-full overflow-hidden mb-4 shadow-lg transform transition-transform duration-500 hover:scale-105">
                <img src="/imageBg/barcie_logo.jpg" alt="BarCIE Logo"
                    class="w-full h-full object-cover animate-zoomSlow">
            </div>
            <h1 class="text-3xl font-bold text-gray-800 mb-1">Welcome to BarCIE</h1>
            <p class="text-gray-500 text-sm">Sign in to your account</p>
        </div>

        <!-- Login Form -->
        @include('Components.Forms.LoginForm')

        <!-- Footer Link -->
        <div class="mt-6 text-center">
            <a href="#" class="text-blue-500 hover:underline text-sm">Forgot your password?</a>
        </div>
    </div>

</body>

</html>