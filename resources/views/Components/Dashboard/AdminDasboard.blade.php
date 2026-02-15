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

<body>

    <div class="flex min-h-screen bg-gray-50">

        <!-- Sidebar -->
        <x-sidebar.Sidebar userName="Admin User" :isAdmin="true" />

        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto">
            <x-dashboard.HeroDashboard title="Admin Dashboard" subtitle="Manage your system" :isAdmin="true">
                <!-- admin body content here -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                        <h3 class="text-lg font-semibold mb-2">Total Bookings</h3>
                        <p class="text-3xl font-bold text-indigo-600">124</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                        <h3 class="text-lg font-semibold mb-2">Active Clients</h3>
                        <p class="text-3xl font-bold text-green-600">87</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                        <h3 class="text-lg font-semibold mb-2">Pending</h3>
                        <p class="text-3xl font-bold text-yellow-600">12</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                        <h3 class="text-lg font-semibold mb-2">Revenue</h3>
                        <p class="text-3xl font-bold text-blue-600">₱45K</p>
                    </div>
                </div>
            </x-dashboard.HeroDashboard>
        </main>



    </div>

</body>

</html>