@props([
    'src' => null,
    'alt' => '',
    'title' => '',
    'description' => '',
    'buttonText' => '',
    'href' => null,
    'route' => null,
    'routeParams' => [],
])

@php
    if (!empty($route)) {
        $url = route($route, $routeParams);
    } else {
        $url = $href;
    }
@endphp

<div class="flex justify-center mt-10">
<div class="card bg-base-100 w-96 shadow-sm">
        <figure class="px-10 pt-10">
        <img src="{{ $src }}" alt="{{ $alt }}" class="rounded-xl" />
        </figure>
        <div class="card-body items-center text-center">
            <h2 class="card-title">{{ $title }}</h2>
            <p>{{ $description }}</p>
            <div class="card-actions">
                @if (!empty($url))
                    <a href="{{ $url }}" class="btn btn-primary">{{ $buttonText }}</a>
                @else
                    <button class="btn btn-primary">{{ $buttonText }}</button>
                @endif
            </div>
        </div>
    </div>
</div>