@props([
'title' => 'Dashboard',
'subtitle' => '',
'isAdmin' => false,
])


<div class="bg-base-200 py-8">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold">{{ $title }}</h1>
                @if(!empty($subtitle))
                <p class="text-sm text-gray-600">{{ $subtitle }}</p>
                @endif
            </div>
            <div>
                @if($isAdmin)
                <nav class="flex gap-2">
                    <a href="{{ url('/admin') }}" class="btn btn-sm">Admin Home</a>
                    <a href="{{ url('/admin/settings') }}" class="btn btn-sm btn-ghost">Settings</a>
                </nav>
                @else
                <nav class="flex gap-2">
                    <a href="{{ url('/') }}" class="btn btn-sm">Home</a>
                </nav>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="container mx-auto px-4 py-6">
    {{ $slot }}
</div>