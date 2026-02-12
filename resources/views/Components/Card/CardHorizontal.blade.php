<div class="lg:col-span-7 card">
    <h2 class="text-4xl lg:text-6xl font-extrabold hover:text-yellow-400 leading-tight drop-shadow-lg ">
        {{ $title }}
    </h2>

    <div class="mt-8 mx-auto max-w-6xl card 
            bg-white/5 backdrop-blur-md 
            border-2 border-white/30 rounded-2xl 
            shadow-2xl transition-all duration-300 hover:bg-white/10">

        <div class="card-body p-8">
            {{ $slot }}
        </div>
    </div>
</div>