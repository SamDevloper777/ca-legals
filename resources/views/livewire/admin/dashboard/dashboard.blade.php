<div class="p-6">
    <div class="max-w-7xl mx-auto">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-semibold">Dashboard</h1>
            <div class="text-sm text-gray-600">Welcome back, Admin</div>
        </div>

        @if (session()->has('success'))
            <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">{{ session('success') }}</div>
        @endif

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
            <div class="p-4 bg-white rounded-lg shadow-sm border">
                <div class="text-sm text-gray-500">Services</div>
                <div class="mt-2 text-2xl font-bold text-cyan-700">{{ $servicesCount }}</div>
                <div class="text-xs text-gray-400 mt-1">Total services</div>
            </div>

            <div class="p-4 bg-white rounded-lg shadow-sm border">
                <div class="text-sm text-gray-500">Users</div>
                <div class="mt-2 text-2xl font-bold text-cyan-700">{{ $usersCount }}</div>
                <div class="text-xs text-gray-400 mt-1">Total users</div>
            </div>

            <div class="p-4 bg-white rounded-lg shadow-sm border">
                <div class="text-sm text-gray-500">Contacts</div>
                <div class="mt-2 text-2xl font-bold text-cyan-700">{{ $contactsCount }}</div>
                <div class="text-xs text-gray-400 mt-1">Total contact submissions</div>
            </div>

            <div class="p-4 bg-white rounded-lg shadow-sm border">
                <div class="flex items-center justify-between">
                    <div>
                        <div class="text-sm text-gray-500">Pending</div>
                        <div class="mt-2 text-2xl font-bold text-yellow-600">{{ $unprocessedCount }}</div>
                        <div class="text-xs text-gray-400 mt-1">Unprocessed contacts</div>
                    </div>
                    <div class="text-right">
                        <div class="text-sm text-gray-500">Processed</div>
                        <div class="mt-2 text-2xl font-bold text-green-600">{{ $processedCount }}</div>
                        <div class="text-xs text-gray-400 mt-1">Processed contacts</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow border p-4">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-semibold">Recent Contacts</h2>
                <a href="{{ route('admin.contact.list') }}" class="text-sm text-cyan-700 hover:underline">View all</a>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full text-sm text-left">
                    <thead class="text-xs text-gray-500 uppercase bg-gray-50">
                        <tr>
                            <th class="px-3 py-2">#</th>
                            <th class="px-3 py-2">Name</th>
                            <th class="px-3 py-2">Phone</th>
                            <th class="px-3 py-2">Service</th>
                            <th class="px-3 py-2">Message</th>
                            <th class="px-3 py-2">Status</th>
                            <th class="px-3 py-2">Received</th>
                            <th class="px-3 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($recentContacts as $c)
                            <tr class="border-t">
                                <td class="px-3 py-2 align-top">{{ $c->id }}</td>
                                <td class="px-3 py-2 align-top">{{ $c->name }}</td>
                                <td class="px-3 py-2 align-top">{{ $c->phone }}</td>
                                <td class="px-3 py-2 align-top">{{ $c->service ?? '-' }}</td>
                                <td class="px-3 py-2 align-top max-w-xl truncate">{{ $c->message }}</td>
                                <td class="px-3 py-2 align-top">
                                    @if($c->is_processed)
                                        <span class="text-white bg-green-600 px-2 py-1 rounded text-xs">Processed</span>
                                    @else
                                        <span class="text-yellow-800 bg-yellow-100 px-2 py-1 rounded text-xs">Pending</span>
                                    @endif
                                </td>
                                <td class="px-3 py-2 align-top">{{ $c->created_at->diffForHumans() }}</td>
                                <td class="px-3 py-2 align-top">
                                    @if(!$c->is_processed)
                                        <button wire:click="markProcessed({{ $c->id }})" class="px-2 py-1 bg-cyan-700 text-white rounded text-xs">Mark processed</button>
                                    @else
                                        <button wire:click="markUnprocessed({{ $c->id }})" class="px-2 py-1 bg-yellow-500 text-white rounded text-xs">Mark unprocessed</button>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="px-3 py-4 text-center text-gray-500">No contacts yet.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
