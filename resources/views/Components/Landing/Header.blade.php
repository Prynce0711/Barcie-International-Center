<nav class="bg-base-100 shadow-sm sticky top-1 z-50">
    <div class="max-w-7xl mx-auto px-5 lg:px-6">
        <div class="flex items-center justify-between h-16">
            <!-- Left: brand -->
            <div class="flex items-center shrink-0">
                <a href="/" class="text-lg font-semibold">Barcie International Center</a>
            </div>

            <!-- Center: navigation (desktop) -->
            <div class="hidden lg:flex flex-1 justify-center gap-2">
                <button onclick="window.location.href='/'"
                    class="btn btn-ghost btn-sm uppercase tracking-tight font-normal px-3">Home</button>

                <button onclick="document.getElementById('About').scrollIntoView({ behavior: 'smooth' })"
                    class="btn btn-ghost btn-sm uppercase tracking-tight font-normal px-3">About</button>

                <button onclick="document.getElementById('Foundation').scrollIntoView({ behavior: 'smooth' })"
                    class="btn btn-ghost btn-sm uppercase tracking-tight font-normal px-3">Vision & Mission</button>

                <button onclick="document.getElementById('News').scrollIntoView({ behavior: 'smooth' })"
                    class="btn btn-ghost btn-sm uppercase tracking-tight font-normal px-3">News & Updates</button>

                <button onclick="document.getElementById('EventStylists').scrollIntoView({ behavior: 'smooth' })"
                    class="btn btn-ghost btn-sm uppercase tracking-tight font-normal px-3">Event Stylists</button>

                <button onclick="document.getElementById('Caterings').scrollIntoView({ behavior: 'smooth' })"
                    class="btn btn-ghost btn-sm uppercase tracking-tight font-normal px-3">Caterings</button>

                <button onclick="document.getElementById('Brochure').scrollIntoView({ behavior: 'smooth' })"
                    class="btn btn-ghost btn-sm uppercase tracking-tight px-4">Brochure</button>
            </div>

            <!-- Right: action + mobile toggle -->
            <div class="flex items-center gap-3">


                <!-- Mobile menu button -->
                <div class="lg:hidden">
                    <button id="mobile-menu-btn" class="btn btn-ghost p-2" aria-label="Open menu">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu (hidden by default) -->
    <div id="mobile-menu" class="hidden lg:hidden bg-base-100 transition-all duration-300">
        <ul class="menu menu-vertical p-2">
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/vision-mission">Vision & Mission</a></li>
            <li><a href="/news">News & Updates</a></li>
            <li><a href="/event-stylists">Event Stylists</a></li>
            <li><a href="/caterings">Caterings</a></li>
            <li><a href="/brochure">Brochure</a></li>
            <li><a href="/contact">Contact</a></li>

        </ul>
    </div>
</nav>