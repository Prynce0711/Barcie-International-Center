@props([
    'src' => '',
    'alt' => 'Image description',
    'height' => 'h-[550px]'
])

<div {{ $attributes->merge(['class' => "lg:col-span-5 flex justify-center lg:justify-start"]) }}>
    <div class="bg-white/10 backdrop-blur-xl rounded-3xl p-8 w-full max-w-sm {{ $height }} shadow-2xl border-2 border-white/30 flex items-center justify-center">
        <img src="{{ $src }}" alt="{{ $alt }}" 
             class="w-full h-full object-contain rounded-xl transition-transform duration-500 hover:scale-105">
    </div>
</div>