<header class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center gap-4">
                <!-- Mobile sidebar toggle -->
                <button class="p-2 rounded-md text-gray-600 hover:bg-gray-100 lg:hidden" aria-label="Open sidebar"
                    onclick="window.dispatchEvent(new CustomEvent('toggle-admin-sidebar'))">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

                <!-- Logo -->
                <a href="/admin" class="flex items-center gap-3">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-10 h-10 object-contain">
                    <div>
                        <div class="font-semibold text-gray-900">Admin</div>
                        <div class="text-xs text-gray-500">Dashboard</div>
                    </div>
                </a>
            </div>

            <div class="flex items-center gap-4">
                <!-- Search (optional) -->
                <div class="hidden sm:block">
                    <label class="sr-only">Search</label>
                    <div class="relative">
                        <input type="search" placeholder="Search..." class="bg-gray-50 border border-gray-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-cyan-200">
                        <button class="absolute right-1 top-1/2 -translate-y-1/2 text-gray-500 px-2 py-1">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </div>

                <!-- User / actions -->
                <div class="flex items-center gap-3">
                    <button class="p-2 rounded-md hover:bg-gray-100 text-gray-600">
                        <i class="fa-regular fa-bell"></i>
                    </button>
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open" class="flex items-center gap-2 rounded-md px-3 py-2 hover:bg-gray-100">
                            <img src="{{ asset('images/logo.png') }}" alt="User" class="w-8 h-8 rounded-full object-cover">
                            <span class="text-sm text-gray-700">Admin</span>
                        </button>
                        <div x-show="open" @click.outside="open = false" x-transition class="origin-top-right absolute right-0 mt-2 w-44 bg-white border border-gray-100 rounded-md shadow-lg py-2">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">Profile</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">Settings</a>
                            <form method="POST" action="/logout">
                                @csrf
                                <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
