<!-- header.blade.php -->
<header 
    x-data="{ mobile: false, scrolled: false, mobileServicesOpen: false }" 
    x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 20)" 
    :class="scrolled ? 'shadow-md bg-white/90 backdrop-blur-md' : 'bg-white'"
    class="sticky top-0 z-50 transition-all duration-300  bg-gradient-to-r from-cyan-50 via-white to-cyan-50" 
    x-cloak
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 md:h-20">

            <!-- Logo Section -->
            <a href="/" wire:navigate class="flex items-center gap-3 group">
               <img src="{{asset('images/logo.png')}}" class="w-12 h-auto object-cover" alt="ABC & Co. Logo">
                <div>
                    <div class="font-semibold text-gray-900 group-hover:text-cyan-700 transition">ABC & Co.</div>
                    <div class="text-xs text-gray-500 uppercase tracking-wide">Chartered Accountants</div>
                </div>
            </a>

            <!-- Desktop Menu (dynamic - enabled by route existence) -->
            <div class="hidden md:flex items-center gap-8">
                @php
                    $menu = [
                        ['label' => 'Home', 'route' => '/', 'routeName' => 'home'],
                        ['label' => 'Services', 'route' => '/services', 'routeName' => 'services.index'],
                        ['label' => 'About', 'route' => '/about', 'routeName' => 'about'],
                        ['label' => 'Team', 'route' => '/team', 'routeName' => 'team'],
                        ['label' => 'Contact', 'route' => '/contact', 'routeName' => 'contact']
                    ];

                    // Load top services for the dropdown
                    $headerServices = \App\Models\Service::orderBy('id')->take(8)->get();
                @endphp

                <nav class="flex items-center gap-6 text-sm font-medium">
                    @foreach($menu as $item)
                        @php
                            // Ensure Services shows even if a named route isn't registered (fallback to /services)
                            if (($item['label'] ?? '') === 'Services') {
                                $enabled = true;
                                $href = (isset($item['routeName']) && \Illuminate\Support\Facades\Route::has($item['routeName'])) ? route($item['routeName']) : url('/services');
                                $isActive = request()->is('services*') || request()->is('service/*') || (isset($item['routeName']) && request()->routeIs($item['routeName']));
                            } else {
                                $enabled = isset($item['routeName']) ? \Illuminate\Support\Facades\Route::has($item['routeName']) : true;
                                $href = (isset($item['routeName']) && \Illuminate\Support\Facades\Route::has($item['routeName'])) ? route($item['routeName']) : $item['route'];
                                $isActive = (isset($item['routeName']) && \Illuminate\Support\Facades\Route::has($item['routeName']) && request()->routeIs($item['routeName'])) || request()->is(ltrim($item['route'], '/'));
                            }
                        @endphp

                        @if($enabled)
                    @if($item['label'] === 'Services')
                                <div class="relative group">
                                    <a href="{{ $item['label'] === 'Services' ? '#': $href }}" wire:navigate class="inline-flex items-center gap-2 {{ $isActive ? 'text-cyan-700 font-semibold' : 'text-gray-700 hover:text-cyan-700' }} transition">
                                        {{ $item['label'] }}
                                        <svg class="w-3 h-3 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                    </a>

                                    <div class="absolute left-0 mt-3 w-64 bg-white rounded-lg shadow-lg border border-gray-100 opacity-0 group-hover:opacity-100 invisible group-hover:visible transform transition-all duration-200 translate-y-1 z-50">
                                        <div class="p-3">
                                            @forelse($headerServices as $hs)
                                                <a href="{{ route('service.view', ['slug' => $hs->slug]) }}" wire:navigate class="block px-3 py-2 rounded hover:bg-cyan-50 text-sm text-gray-700">{{ $hs->name }}</a>
                                            @empty
                                                <div class="text-sm text-gray-500 px-3 py-2">No services</div>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                            @else
                                <a href="{{ $href }}" wire:navigate class="{{ $isActive ? 'text-cyan-700 font-semibold' : 'text-gray-700 hover:text-cyan-700' }} transition">{{ $item['label'] }}</a>
                            @endif
                        @endif
                    @endforeach
                </nav>

                @php
                    // Consultation button only shows if contact route exists (named) or contact path exists
                    $consultEnabled = \Illuminate\Support\Facades\Route::has('contact') || request()->is('contact') || true;
                @endphp

                @if($consultEnabled)
                    <a href="{{ \Illuminate\Support\Facades\Route::has('contact') ? route('contact') : url('/contact') }}"
                       class="inline-flex items-center gap-2 px-5 py-2.5 bg-cyan-700 text-white rounded-lg text-sm font-medium shadow-sm hover:bg-cyan-700 transition duration-300 transform hover:-translate-y-0.5">
                        <i class="fa-solid fa-phone"></i> Consultation
                    </a>
                @endif
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button 
                    @click="mobile = !mobile" 
                    class="p-2 rounded-md hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-cyan-500 transition"
                    aria-label="Toggle menu"
                >
                    <template x-if="!mobile">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </template>
                    <template x-if="mobile">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </template>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div 
        x-show="mobile" 
        x-transition.opacity.scale.origin.top.duration.300ms
        class="md:hidden bg-white border-t border-gray-100 shadow-md"
    >
        @php
            // reuse $menu definition for mobile (same logic)
            $mobileMenu = $menu ?? [
                ['label' => 'Home', 'route' => '/', 'routeName' => 'home'],
                ['label' => 'Services', 'route' => '/services', 'routeName' => 'services.index'],
                ['label' => 'About', 'route' => '/about', 'routeName' => 'about'],
                ['label' => 'Team', 'route' => '/team', 'routeName' => 'team'],
                ['label' => 'Contact', 'route' => '/contact', 'routeName' => 'contact']
            ];
        @endphp

        <nav class="flex flex-col px-4 py-3 space-y-1 text-sm font-medium text-gray-700">
            @foreach($mobileMenu as $item)
                @php
                    // Similar logic as desktop for href/active detection
                    if (($item['label'] ?? '') === 'Services') {
                        $enabled = true;
                        $href = (isset($item['routeName']) && \Illuminate\Support\Facades\Route::has($item['routeName'])) ? route($item['routeName']) : url('/services');
                        $isActive = request()->is('services*') || request()->is('service/*') || (isset($item['routeName']) && request()->routeIs($item['routeName']));
                    } else {
                        $enabled = isset($item['routeName']) ? \Illuminate\Support\Facades\Route::has($item['routeName']) : true;
                        $href = (isset($item['routeName']) && \Illuminate\Support\Facades\Route::has($item['routeName'])) ? route($item['routeName']) : $item['route'];
                        $isActive = (isset($item['routeName']) && \Illuminate\Support\Facades\Route::has($item['routeName']) && request()->routeIs($item['routeName'])) || request()->is(ltrim($item['route'], '/'));
                    }
                @endphp

                @if($enabled)
                    @if($item['label'] === 'Services')
                        <button @click="mobileServicesOpen = !mobileServicesOpen" aria-expanded="false" class="w-full text-left px-3 py-2 rounded flex items-center justify-between {{ $isActive ? 'bg-cyan-50 text-cyan-700 font-semibold' : 'hover:bg-cyan-50 hover:text-cyan-700' }} transition">
                            <span>Services</span>
                            <svg :class="mobileServicesOpen ? 'rotate-180' : ''" class="w-4 h-4 text-gray-500 transform transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>

                        <div x-show="mobileServicesOpen" x-collapse class="pl-4 mt-1 space-y-1">
                            @foreach($headerServices as $hs)
                                <a href="{{ route('service.view', ['slug' => $hs->slug]) }}" wire:navigate class="block px-3 py-2 rounded hover:bg-cyan-50 text-sm text-gray-700">{{ $hs->name }}</a>
                            @endforeach
                        </div>
                    @else
                        <a href="{{ $href }}" wire:navigate class="block px-3 py-2 rounded {{ $isActive ? 'bg-cyan-50 text-cyan-700 font-semibold' : 'hover:bg-cyan-50 hover:text-cyan-700' }} transition">{{ $item['label'] }}</a>
                    @endif
                @endif
            @endforeach

            <a href="{{ \Illuminate\Support\Facades\Route::has('contact') ? route('contact') : url('/contact') }}" class="mt-3 inline-block text-center bg-cyan-700 text-white py-2.5 rounded-md font-medium hover:bg-cyan-700 transition">
                <i class="fa-solid fa-phone mr-2"></i> Get Consultation
            </a>
        </nav>
    </div>
</header>
