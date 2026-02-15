<section id="Hero"
    class="relative overflow-hidden min-h-screen flex items-center justify-center inset-0 bg-[#1e252b]/80">

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8 py-24 lg:py-5">
        <div class="grid lsg:grid-cols-12 gap-8 items-center">

            <!-- Text column -->
            <div class="lg:grid lg:grid-cols-12 gap-6 items-center">


                <!-- Left column -->
                <div class="lg:col-span-7 flex flex-col justify">
                    <h2
                        class="text-5xl lg:text-6xl font-extrabold leading-tight drop-shadow-lg animate-slide-in-left hover:text-yellow-300 transition-colors duration-300 cursor-default">
                        Welcome to</h2>
                    <h1 class="text-5xl lg:text-7xl font-extrabold leading-tight mt-1 text-yellow-300 animate-slide-in-left hover:scale-105 transition-transform duration-300 cursor-default"
                        style="animation-delay: 0.2s;">BarCIE</h1>
                    <h3 class="text-3xl lg:text-5xl font-extrabold leading-tight mt-1 animate-slide-in-left hover:text-white transition-colors duration-300 cursor-default"
                        style="animation-delay: 0.4s;">International<br>Center</h3>

                    <p class="mt-4 max-w-lg text-base lg:text-lg text-white/85 animate-fade-in-up hover:text-white/95 transition-colors duration-300"
                        style="animation-delay: 0.6s;">
                        This is a Capstone Project for the Barasoain Center for Innovative Education (BarCIE), LCUP's
                        premier laboratory facility for BS. Tourism Management. It offers world-class hospitality
                        education and services.
                    </p>

                    <div class="mt-8 flex flex-col sm:flex-row gap-4 sm:gap-6 items-start sm:items-center animate-fade-in animate-float"
                        style="animation-delay: 0.8s;">
                        <div
                            class="bg-white/10 backdrop-blur-sm rounded-lg p-4 flex items-start gap-4 border-l-4 border-yellow-400 max-w-md">
                            <div
                                class="w-10 h-10 rounded-full bg-yellow-400 flex items-center justify-center text-primary font-bold animate-pulse">
                                ✓</div>
                            <div>
                                <div class="font-semibold">Ready to book?</div>
                                <div class="text-xs text-white/80">Click "Get Started" to begin your reservation now!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <x-Card.ImageCard src="/imageBg/barcie_logo.jpg" alt="BarCIE Seal" height="h-[400px]"
                    class="animate-slide-in-right animate-float hover:scale-110 transition-transform duration-300"
                    style="animation-delay: 0.8s;" />


                {{-- button --}}
                <div class="d-flex justify-between w-100 hero-buttons animate-fade-in-up" style="animation-delay: 1s;">
                    <button
                        class="btn btn-warning transition duration-300 ease-in-out hover:scale-105 hover:-translate-y-1"
                        onclick="window.location.href='{{ route('GuestDashboard') }}'">
                        <i class="fas fa-arrow-right me-2"></i>Get Started
                    </button>
                    <button
                        class="btn btn-outline-custom btn-lg transition duration-300 ease-in-out hover:scale-105 hover:-translate-y-1"
                        onclick="scrollToSection('about')">
                        <i class="fas fa-info-circle me-2"></i>Learn More
                    </button>
                </div>

            </div>
        </div>



    </div>
</section>