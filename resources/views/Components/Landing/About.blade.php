<section id="About" class="relative text-white overflow-hidden min-h-screen flex flex-col ">

    <!-- semi-transparent background overlay (Tailwind alpha) -->
    <div class="absolute inset-0 bg-[#1e252b]/80 pointer-events-none"></div>

   


    <!-- Top Title -->
    <div class="w-full text-center pt-16 pb-6 relative z-10">
        <h1 class="text-4xl lg:text-5xl font-extrabold tracking-wide text-white relative inline-block">
            About Us
            <span class="block h-1 w-20 bg-yellow-400 mx-auto mt-4 rounded-full"></span>
        </h1>
    </div>



    <!-- Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8 py-16 flex-1 flex items-center">

        <div class="grid lg:grid-cols-12 gap-12 items-center w-full">

            <x-Card.ImageCard src="/imageBg/BarcieAbout.jpg" alt="BarCIE Seal" height="h-[550px]" />


            <!-- Right Text -->
            <x-Card.CardHorizontal title="Hospitality Management Training Facility">



                <p class="text-xl text-white/90 leading-relaxed font-light ">
                    The Barasoain Center for Innovative Education (BarCIE) is a
                    <span class="text-white font-semibold text-shadow">state-of-the-art facility</span>
                    dedicated to
                    providing world-class hospitality education and services. It serves as a premier
                    laboratory for <span class="text-yellow-400 font-medium">BS Tourism Management</span>
                    students, offering hands-on experience in a real-world environment.
                </p>

                <p class="text-xl text-white/80 leading-relaxed font-light mt-6">
                    We provide comprehensive hands-on training in hotel operations, guest services, event
                    management, and professional hospitality standards. Our facility bridges the gap between
                    classroom theory and real-world industry experience.
                </p>
            </x-Card.CardHorizontal>

        </div>

    </div>


</section>