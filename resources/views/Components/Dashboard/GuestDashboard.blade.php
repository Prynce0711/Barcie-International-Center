<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barcie International Center</title>
    <link rel="icon" type="image/x-icon" href="/imageBg/barcie_logo.jpg">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-screen overflow-hidden">

    <!-- Sidebar (fixed) -->
    <x-sidebar.Sidebar userName="Guest User" />

    <div class="h-screen bg-gradient-to-br from-blue-50 to-slate-100 ml-64">

        <!-- Main Content (scrollable) -->
        <main class="flex-1 h-screen overflow-y-auto">

            <!-- Guest Hero Section -->
            <div
                class="relative bg-gradient-to-r from-blue-900 via-slate-800 to-slate-700 min-h-screen flex items-center px-6 shadow-xl overflow-hidden">
                <div class="absolute inset-0 bg-black/30"></div>
                <div class="relative max-w-5xl mx-auto text-center py-8">
                    <div class="mb-6">
                        <img src="/imageBg/barcie_logo.jpg" alt="BarCIE Logo"
                            class="w-24 h-24 mx-auto rounded-full shadow-2xl border-4 border-white">
                    </div>
                    <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4 leading-tight">
                        Welcome to BarCIE International Center
                    </h1>
                    <p class="text-xl text-blue-100 mb-3 flex items-center justify-center gap-2">
                        <span class="text-2xl">🏛</span>
                        <span class="font-semibold">La Consolacion University Philippines</span>
                    </p>
                    <p class="text-base text-blue-200/90 mb-8 max-w-3xl mx-auto">
                        The Laboratory of the College of International Tourism and Hospitality Management
                    </p>
                    <a href="#"
                        class="inline-flex items-center gap-2 px-8 py-4 bg-yellow-400 text-blue-900 font-bold rounded-full shadow-2xl hover:bg-yellow-300 transition transform hover:scale-105">
                        <span class="text-xl">📅</span>
                        <span>Book Your Stay Now</span>
                        <span>→</span>
                    </a>
                </div>
            </div>

            <!-- Booking Steps Section -->
            <section class="py-12 px-6 min-h-screen">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-10">
                        <div class="text-blue-600 text-4xl mb-3">📖</div>
                        <h2 class="text-3xl font-bold text-blue-900 mb-2">How to Book Your Stay</h2>
                        <p class="text-gray-600">Follow these simple steps to reserve your accommodation</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">
                        <!-- Step 1 -->
                        <div class="text-center">
                            <div
                                class="w-20 h-20 bg-blue-700 text-white rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-4 shadow-lg">
                                1
                            </div>
                            <div class="flex items-center justify-center gap-2 mb-3">
                                <span class="text-2xl">🛏</span>
                                <h3 class="text-lg font-bold text-blue-700">Browse Rooms</h3>
                            </div>
                            <p class="text-sm text-gray-600 mb-4">Explore our premium accommodations with detailed
                                amenities and pricing</p>
                            <button
                                class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition text-sm font-medium">
                                → Browse Now
                            </button>
                        </div>

                        <!-- Step 2 -->
                        <div class="text-center">
                            <div
                                class="w-20 h-20 bg-blue-600 text-white rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-4 shadow-lg">
                                2
                            </div>
                            <div class="flex items-center justify-center gap-2 mb-3">
                                <span class="text-2xl">📅</span>
                                <h3 class="text-lg font-bold text-blue-600">Check Availability</h3>
                            </div>
                            <p class="text-sm text-gray-600 mb-4">View real-time availability calendar for your
                                preferred dates</p>
                            <button
                                class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition text-sm font-medium">
                                📅 Check Now
                            </button>
                        </div>

                        <!-- Step 3 -->
                        <div class="text-center">
                            <div
                                class="w-20 h-20 bg-green-600 text-white rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-4 shadow-lg">
                                3
                            </div>
                            <div class="flex items-center justify-center gap-2 mb-3">
                                <span class="text-2xl">✅</span>
                                <h3 class="text-lg font-bold text-green-600">Make Reservation</h3>
                            </div>
                            <p class="text-sm text-gray-600 mb-4">Complete the booking form with your details and
                                dates
                            </p>
                            <button
                                class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition text-sm font-medium">
                                📝 Book Now
                            </button>
                        </div>

                        <!-- Step 4 -->
                        <div class="text-center">
                            <div
                                class="w-20 h-20 bg-orange-500 text-white rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-4 shadow-lg">
                                4
                            </div>
                            <div class="flex items-center justify-center gap-2 mb-3">
                                <span class="text-2xl">📧</span>
                                <h3 class="text-lg font-bold text-orange-500">Confirmation</h3>
                            </div>
                            <p class="text-sm text-gray-600 mb-4">Receive instant confirmation with receipt and
                                payment
                                details via email</p>
                            <button
                                class="px-4 py-2 bg-yellow-400 text-blue-900 rounded-md hover:bg-yellow-300 transition text-sm font-bold">
                                ⚡ Instant Confirmation
                            </button>
                        </div>
                    </div>

                    <!-- Information & Contact Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Important Information -->
                        <div class="bg-white rounded-xl shadow-lg p-6 border-t-4 border-blue-600">
                            <h3 class="text-xl font-bold text-blue-900 mb-4 flex items-center gap-2">
                                <span class="text-2xl">ℹ️</span>
                                Important Information
                            </h3>
                            <div class="space-y-3 text-sm">
                                <div class="flex gap-3">
                                    <span class="text-blue-600">✓</span>
                                    <div>
                                        <strong>Non-Refundable Bookings:</strong> All bookings are non-refundable
                                        once
                                        confirmed.
                                    </div>
                                </div>
                                <div class="flex gap-3">
                                    <span class="text-blue-600">🆔</span>
                                    <div>
                                        <strong>Valid ID Required:</strong> Please present a government-issued ID
                                        upon
                                        check-in.
                                    </div>
                                </div>
                                <div class="flex gap-3">
                                    <span class="text-blue-600">🕐</span>
                                    <div>
                                        <strong>Check-in: 2:00 PM | Check-out: 12:00 PM</strong>
                                    </div>
                                </div>
                                <div class="flex gap-3">
                                    <span class="text-blue-600">🚭</span>
                                    <div>
                                        <strong>No Smoking Policy:</strong> All indoor facilities are strictly
                                        non-smoking.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Us -->
                        <div class="bg-white rounded-xl shadow-lg p-6 border-t-4 border-blue-600">
                            <h3 class="text-xl font-bold text-blue-900 mb-4 flex items-center gap-2">
                                <span class="text-2xl">📞</span>
                                Contact Us
                            </h3>
                            <div class="space-y-3 text-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                                        <span class="text-blue-600">📱</span>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-gray-700">Viber</div>
                                        <div class="text-blue-600">0939 905 7425</div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                                        <span class="text-blue-600">☎️</span>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-gray-700">Telephone</div>
                                        <div class="text-blue-600">044 791 7424 / 044 919 8410</div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                                        <span class="text-blue-600">📧</span>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-gray-700">Email</div>
                                        <div class="text-blue-600 text-xs">barcieinternationalcenter@gmail.com</div>
                                    </div>
                                </div>
                                <div class="mt-4 p-3 bg-blue-50 rounded-lg">
                                    <div class="font-semibold text-gray-700 mb-1">📍 Address</div>
                                    <div class="text-gray-600 text-xs">Valenzuela St. Capitol View Park, Subd. Brgy.
                                        Bulihan, City of Malolos, Bulacan 3000</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        @include('Footer')

    </div>

</body>

</html>