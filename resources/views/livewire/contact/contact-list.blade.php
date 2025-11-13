<div>
    @php use Illuminate\Support\Str; @endphp

<div class="p-6">
    <div class="max-w-7xl mx-auto">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-semibold">Contacts</h1>
        </div>

        @if (session()->has('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">{{ session('success') }}</div>
        @endif

        <div class="flex flex-col sm:flex-row gap-3 items-center justify-between mb-4">
            <div class="flex items-center gap-2">
                <input wire:model.debounce.live.300ms="search" type="text" placeholder="Search name, phone or email" class="border rounded px-3 py-2 w-64" />
                <select wire:model.live="perPage" class="border rounded px-2 py-2">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                </select>
            </div>
          
        </div>

        <div class="bg-white rounded-lg shadow border p-4">
            <div class="overflow-x-auto">
                <table class="min-w-full text-sm text-left">
                    <thead class="text-xs text-gray-500 uppercase bg-gray-50">
                        <tr>
                            <th class="px-3 py-2">#</th>
                            <th class="px-3 py-2">Name</th>
                            <th class="px-3 py-2">Email</th>
                            <th class="px-3 py-2">Phone</th>
                            <th class="px-3 py-2">Message</th>
                            <th class="px-3 py-2">Status</th>
                            <th class="px-3 py-2">Received</th>
                            <th class="px-3 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($contacts as $c)
                        <tr class="border-t">
                            <td class="px-3 py-2 align-top">{{ $c->id }}</td>
                            <td class="px-3 py-2 align-top">{{ $c->name }}</td>
                            <td class="px-3 py-2 align-top">{{ $c->email }}</td>
                            <td class="px-3 py-2 align-top">{{ $c->phone }}</td>
                            <td class="px-3 py-2 align-top max-w-xl">{{ Str::limit($c->message, 120) }}</td>
                            <td class="px-3 py-2 align-top">
                                @if($c->is_processed)
                                <span class="text-white bg-green-600 px-2 py-1 rounded text-xs">Processed</span>
                                @else
                                <span class="text-yellow-800 bg-yellow-100 px-2 py-1 rounded text-xs">Pending</span>
                                @endif
                            </td>
                            <td class="px-3 py-2 align-top">{{ $c->created_at->format('Y-m-d H:i') }}</td>
                            <td class="px-3 py-2 align-top">
                                @if(!$c->is_processed)
                                <button wire:click="markProcessed({{ $c->id }})" class="px-2 py-1 bg-cyan-700 text-white rounded text-xs">Mark processed</button>
                                @else
                                <button wire:click="markUnprocessed({{ $c->id }})" class="px-2 py-1 bg-yellow-500 text-white rounded text-xs">Mark unprocessed</button>
                                @endif

                                <button @click="$dispatch('open-delete', {{ $c->id }})" class="ml-2 px-2 py-1 bg-red-600 text-white rounded text-xs">Delete</button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="px-3 py-4 text-center text-gray-500">No contacts found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                {{ $contacts->links() }}
            </div>
        </div>
    </div>
</div>

<!-- Alpine-driven delete confirmation modal (opens immediately on click) -->
<div x-data="{ open: false, id: null }" x-on:open-delete.window="open = true; id = $event.detail;" x-cloak>
    <div x-show="open" class="fixed inset-0 z-50 flex items-center justify-center" aria-modal="true">
        <div class="fixed inset-0 bg-black/50" x-show="open" x-transition @click="open = false"></div>

        <div x-show="open" x-transition x-on:keydown.escape.window="open = false" class="bg-white rounded-lg shadow-lg max-w-md w-full mx-4 z-10">
            <div class="p-4 border-b">
                <h3 class="text-lg font-semibold">Confirm delete</h3>
            </div>
            <div class="p-4">
                <p class="text-sm text-gray-700">Are you sure you want to delete this contact? This action cannot be undone.</p>
            </div>
            <div class="p-4 border-t flex justify-end gap-2">
                <button @click="open = false; id = null" class="px-4 py-2 bg-gray-100 rounded">Cancel</button>
                <button @click="$wire.deleteById(id); open = false; id = null" class="px-4 py-2 bg-red-600 text-white rounded">Delete</button>
            </div>
        </div>
    </div>
</div>
</div>