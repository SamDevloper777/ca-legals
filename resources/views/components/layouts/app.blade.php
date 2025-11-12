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
    <script type="module" src="{{ asset('build/' . $jsFile) }}"></script>
    @endif
    @endif
<!-- Font Awesome CDN -->
    @livewireScripts
</body>

</html>