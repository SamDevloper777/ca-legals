<!-- header.blade.php -->
<header 
    x-data="{ mobile: false, scrolled: false }" 
    x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 20)" 
    :class="scrolled ? 'shadow-md bg-white/90 backdrop-blur-md' : 'bg-white'"
    class="sticky top-0 z-50 transition-all duration-300" 
    x-cloak
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 md:h-20">

            <!-- Logo Section -->
            <a href="/" class="flex items-center gap-3 group">
                <div class="w-11 h-11 rounded-md bg-green-600 flex items-center justify-center text-white font-bold text-lg tracking-wide">
                    AC
                </div>
                <div>
                    <div class="font-semibold text-gray-900 group-hover:text-green-700 transition">ABC & Co.</div>
                    <div class="text-xs text-gray-500 uppercase tracking-wide">Chartered Accountants</div>
                </div>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-8">
                <nav class="flex items-center gap-6 text-sm font-medium">
                    <a href="/" class="text-gray-700 hover:text-green-700 transition {{ request()->is('/') ? 'text-green-700 font-semibold' : '' }}">Home</a>
                    <a href="/services" class="text-gray-700 hover:text-green-700 transition {{ request()->is('services') ? 'text-green-700 font-semibold' : '' }}">Services</a>
                    <a href="/about" class="text-gray-700 hover:text-green-700 transition {{ request()->is('about') ? 'text-green-700 font-semibold' : '' }}">About</a>
                    <a href="/team" class="text-gray-700 hover:text-green-700 transition {{ request()->is('team') ? 'text-green-700 font-semibold' : '' }}">Team</a>
                    <a href="/contact" class="text-gray-700 hover:text-green-700 transition {{ request()->is('contact') ? 'text-green-700 font-semibold' : '' }}">Contact</a>
                </nav>

                <a href="/contact" 
                   class="inline-flex items-center gap-2 px-5 py-2.5 bg-green-600 text-white rounded-lg text-sm font-medium shadow-sm hover:bg-green-700 transition duration-300 transform hover:-translate-y-0.5">
                    <i class="fa-solid fa-phone"></i> Consultation
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button 
                    @click="mobile = !mobile" 
                    class="p-2 rounded-md hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-green-500 transition"
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
        <nav class="flex flex-col px-4 py-3 space-y-1 text-sm font-medium text-gray-700">
            <a href="/" class="block px-3 py-2 rounded hover:bg-green-50 hover:text-green-700 transition {{ request()->is('/') ? 'bg-green-50 text-green-700 font-semibold' : '' }}">Home</a>
            <a href="/services" class="block px-3 py-2 rounded hover:bg-green-50 hover:text-green-700 transition {{ request()->is('services') ? 'bg-green-50 text-green-700 font-semibold' : '' }}">Services</a>
            <a href="/about" class="block px-3 py-2 rounded hover:bg-green-50 hover:text-green-700 transition {{ request()->is('about') ? 'bg-green-50 text-green-700 font-semibold' : '' }}">About</a>
            <a href="/team" class="block px-3 py-2 rounded hover:bg-green-50 hover:text-green-700 transition {{ request()->is('team') ? 'bg-green-50 text-green-700 font-semibold' : '' }}">Team</a>
            <a href="/contact" class="block px-3 py-2 rounded hover:bg-green-50 hover:text-green-700 transition {{ request()->is('contact') ? 'bg-green-50 text-green-700 font-semibold' : '' }}">Contact</a>
            <a href="/contact" class="mt-3 inline-block text-center bg-green-600 text-white py-2.5 rounded-md font-medium hover:bg-green-700 transition">
                <i class="fa-solid fa-phone mr-2"></i> Get Consultation
            </a>
        </nav>
    </div>
</header>
