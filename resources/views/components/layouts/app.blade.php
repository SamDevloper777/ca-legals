<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'CA' }}</title>

    @if (file_exists(public_path('build/manifest.json')))
    @php
    $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
    $cssFile = $manifest['resources/css/app.css']['file'] ?? null;
    $jsFile = $manifest['resources/js/app.js']['file'] ?? null;
    @endphp

    @if ($cssFile)
    <link rel="stylesheet" href="{{ asset('build/' . $cssFile) }}">
    @endif
    @else
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" crossorigin="anonymous">

    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    
    
    @vite('resources/css/app.css')
    @livewireStyles
    <style>[x-cloak]{display:none!important;} .transition-fast{transition:all .25s ease}</style>
</head>

<body class="antialiased bg-gray-50 text-gray-800">
    <livewire:includes.header />

    {{ $slot }}
    <livewire:includes.footer />
    @if (file_exists(public_path('build/manifest.json')))
    @php
    $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
    $jsFile = $manifest['resources/js/app.js']['file'] ?? null;
    @endphp

    @if ($jsFile)
    @endif
    @endif
    @livewireScripts
</head>

<body>
    {{-- Floating consultation button (site-wide) --}}
    <div class="fixed right-6 bottom-16 md:right-12 md:bottom-20 z-50 group">
        <button id="floating-consult-btn" aria-label="Get Consultation" title="Get Consultation"
            class="relative inline-flex items-center justify-center w-14 h-14 rounded-full shadow-2xl transform transition-all duration-200 ease-out bg-gradient-to-br from-cyan-500 to-cyan-700 text-white ring-2 ring-cyan-300 hover:scale-105 focus:outline-none  md:w-16 md:h-16"
            onclick="(function(){ if (window.Livewire && typeof Livewire.emit === 'function') { Livewire.emit('openConsultation'); } else if (window.Livewire && typeof Livewire.dispatch === 'function') { Livewire.dispatch('openConsultation'); } window.dispatchEvent(new CustomEvent('openConsultation')); })();">
            <!-- subtle animated ping behind the button -->
            <span class="absolute -inset-1 rounded-full bg-cyan-400 opacity-30 blur-sm animate-ping"></span>
            <i class="fa-solid fa-headset fa-lg z-10"></i>
        </button>

        <!-- Tooltip that appears on hover -->
        <div class="absolute right-20 bottom-1/2 transform translate-y-1/2 hidden group-hover:block">
            <div class="bg-white text-cyan-700 px-3 py-2 rounded-md shadow-md text-sm font-medium">Get Consultation</div>
        </div>
    </div>
    <livewire:form.consultation-form />
    @livewireScripts
</body>

</html>