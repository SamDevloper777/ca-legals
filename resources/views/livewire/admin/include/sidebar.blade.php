<div x-data="{ open: false }" x-on:toggle-admin-sidebar.window="open = !open">
    <!-- Mobile off-canvas sidebar (visible when `open`) -->
    <div x-show="open" x-cloak class="fixed inset-0 z-40 flex lg:hidden" aria-hidden="true">
        <div class="fixed inset-0 bg-black/50" @click="open = false"></div>
        <aside class="relative flex-1 max-w-xs w-full bg-white shadow-xl ring-1 ring-cyan-50">
            <div class="flex items-center justify-between px-4 py-3 border-b border-cyan-100">
                <a href="/admin" class="flex items-center gap-3">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-8 h-8 object-contain">
                    <span class="font-semibold text-cyan-800">Admin</span>
                </a>
                <button @click="open = false" class="p-2 rounded-md text-cyan-700 hover:bg-cyan-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <nav class="px-2 py-4">
                <a href="/admin" class="flex items-center gap-3 px-3 py-2 rounded-md text-cyan-800 hover:bg-cyan-50 hover:text-cyan-900">
                    <i class="fa-solid fa-gauge-high w-4 text-cyan-600"></i>
                    <span>Dashboard</span>
                </a>
                <a href="/admin/services" class="flex items-center gap-3 mt-1 px-3 py-2 rounded-md text-cyan-800 hover:bg-cyan-50 hover:text-cyan-900">
                    <i class="fa-solid fa-briefcase w-4 text-cyan-600"></i>
                    <span>Services</span>
                </a>
                <a href="/admin/users" class="flex items-center gap-3 mt-1 px-3 py-2 rounded-md text-cyan-800 hover:bg-cyan-50 hover:text-cyan-900">
                    <i class="fa-solid fa-users w-4 text-cyan-600"></i>
                    <span>Users</span>
                </a>
                <a href="/admin/settings" class="flex items-center gap-3 mt-1 px-3 py-2 rounded-md text-cyan-800 hover:bg-cyan-50 hover:text-cyan-900">
                    <i class="fa-solid fa-gear w-4 text-cyan-600"></i>
                    <span>Settings</span>
                </a>
            </nav>
        </aside>
        <div class="w-14 flex-shrink-0" aria-hidden="true"></div>
    </div>

    <!-- Desktop static sidebar -->
    <aside class="hidden lg:flex lg:flex-col lg:w-64 lg:fixed lg:inset-y-0 bg-white border-r border-cyan-100">
        <div class="flex flex-col h-0 flex-1">
            <div class="flex items-center h-16 px-4 border-b border-cyan-100">
                <a href="/admin" class="flex items-center gap-3">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-10 h-10 object-contain">
                    <div>
                        <div class="font-semibold text-cyan-900">Admin</div>
                        <div class="text-xs text-cyan-600">Dashboard</div>
                    </div>
                </a>
            </div>
            <div class="flex-1 overflow-y-auto">
                <nav class="px-2 py-4 space-y-1">
                    <a href="/admin" class="flex items-center gap-3 px-3 py-2 rounded-md text-sm text-cyan-800 hover:bg-cyan-50 hover:text-cyan-900">
                        <i class="fa-solid fa-gauge-high w-4 text-cyan-600"></i>
                        <span>Dashboard</span>
                    </a>
                    <a href="/admin/services" class="flex items-center gap-3 px-3 py-2 rounded-md text-sm text-cyan-800 hover:bg-cyan-50 hover:text-cyan-900">
                        <i class="fa-solid fa-briefcase w-4 text-cyan-600"></i>
                        <span>Services</span>
                    </a>
                    <a href="/admin/services/create" class="flex items-center gap-3 px-3 py-2 rounded-md text-sm text-cyan-800 hover:bg-cyan-50 hover:text-cyan-900">
                        <i class="fa-solid fa-plus w-4 text-cyan-600"></i>
                        <span>Add Service</span>
                    </a>
                    <a href="/admin/users" class="flex items-center gap-3 px-3 py-2 rounded-md text-sm text-cyan-800 hover:bg-cyan-50 hover:text-cyan-900">
                        <i class="fa-solid fa-users w-4 text-cyan-600"></i>
                        <span>Users</span>
                    </a>
                    <a href="/admin/settings" class="flex items-center gap-3 px-3 py-2 rounded-md text-sm text-cyan-800 hover:bg-cyan-50 hover:text-cyan-900">
                        <i class="fa-solid fa-gear w-4 text-cyan-600"></i>
                        <span>Settings</span>
                    </a>
                </nav>
            </div>
            <div class="p-4 border-t border-cyan-100 bg-cyan-50">
                <div class="text-xs text-cyan-700">Logged in as</div>
                <div class="mt-2 flex items-center gap-3">
                    <img src="{{ asset('images/logo.png') }}" alt="User" class="w-8 h-8 rounded-full object-cover">
                    <div>
                        <div class="text-sm font-medium text-cyan-900">Admin</div>
                        <div class="text-xs text-cyan-600">admin@example.com</div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
</div>
