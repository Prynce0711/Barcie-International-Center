@props([
    'title' => '',
    'delay' => '100' 
])

<div {{ $attributes->merge(['class' => "card flex-1 min-w-[280px] max-w-sm bg-white/5 backdrop-blur-md border-2 border-white/30 rounded-2xl shadow-2xl transition-all duration-300 hover:bg-white/10 flex flex-col"]) }}
     data-aos="fade-up" 
     data-aos-delay="{{ $delay }}">
    
    <div class="card-body p-8 flex flex-col h-full ">
        <div class="w-full text-center pt-8 pb-6">
            <h2 class="text-4xl lg:text-5xl font-extrabold tracking-wide text-white relative inline-block">
                {{ $title }}
                <span class="block h-1 w-12 bg-yellow-400 mx-auto mt-4 rounded-full"></span>
            </h2>
        </div>

        <div class="text-lg md:text-xl text-white/90 leading-relaxed font-light grow">
            {{ $slot }}
        </div>
    </div>
</div>