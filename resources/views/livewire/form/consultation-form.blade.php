<div>
  <div>
    @if($open)
    <div class="fixed inset-0 z-50 flex items-center justify-center">
        <div class="absolute inset-0 bg-black/50" wire:click="close"></div>

        <div class="relative bg-white rounded-2xl shadow-xl w-full max-w-2xl mx-4 overflow-hidden">
            <div class="flex items-center justify-between px-6 py-4 bg-emerald-600 text-white">
                <h3 class="text-lg font-semibold">Request Consultation</h3>
                <button wire:click="close" class="p-1 rounded-md hover:bg-emerald-500/50">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>

            <div class="p-6">

                <form wire:submit.prevent="submit" class="space-y-4">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Full name</label>
                            <input type="text" wire:model.defer="name" class="mt-1 block w-full rounded-md border border-gray-200 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-200">
                            @error('name') <div class="text-xs text-red-600 mt-1">{{ $message }}</div> @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" wire:model.defer="email" class="mt-1 block w-full rounded-md border border-gray-200 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-200">
                            @error('email') <div class="text-xs text-red-600 mt-1">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Phone (optional)</label>
                            <input type="text" wire:model.defer="phone" class="mt-1 block w-full rounded-md border border-gray-200 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-200">
                            @error('phone') <div class="text-xs text-red-600 mt-1">{{ $message }}</div> @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">Service interested in</label>
                            <select wire:model.defer="service" class="mt-1 block w-full rounded-md border border-gray-200 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-200">
                                <option value="">-- Select service --</option>
                                @foreach($services as $s)
                                    <option value="{{ $s->name }}">{{ $s->name }}</option>
                                @endforeach
                            </select>
                            @error('service') <div class="text-xs text-red-600 mt-1">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Message (optional)</label>
                        <textarea wire:model.defer="message" rows="4" class="mt-1 block w-full rounded-md border border-gray-200 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-200"></textarea>
                        @error('message') <div class="text-xs text-red-600 mt-1">{{ $message }}</div> @enderror
                    </div>

                    <div class="flex items-center justify-end gap-3 pt-2">
                        <button type="button" wire:click="close" class="px-4 py-2 rounded-lg bg-gray-100 text-gray-700 hover:bg-gray-200">Cancel</button>
                        <button type="submit" @if($isProcessed) disabled @endif wire:loading.attr="disabled" wire:target="submit" class="px-4 py-2 rounded-lg bg-emerald-600 text-white hover:bg-emerald-700 disabled:opacity-60">Send Request</button>
                        <span wire:loading wire:target="submit" class="text-sm text-gray-500 ml-2">Sending...</span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endif

        {{-- Confirmation modal (Livewire-controlled) --}}
    @if($showConfirmation)
        <div class="fixed inset-0 z-50 flex items-center justify-center">
            <div class="absolute inset-0 bg-black/40" wire:click="$set('showConfirmation', false)"></div>

            <div class="relative bg-white rounded-2xl shadow-lg max-w-md w-full p-6 text-center">
                <div class="text-4xl text-emerald-600 mb-2"><i class="fa-solid fa-circle-check"></i></div>
                <h3 class="text-lg font-semibold mb-2">Request Sent</h3>
                <p class="text-gray-600 mb-4">Thank you we've received your request. We'll contact you shortly.</p>
                <div class="flex items-center justify-center">
                    <button wire:click="$set('showConfirmation', false)" class="inline-block px-4 py-2 bg-emerald-600 text-white rounded-md">Close</button>
                </div>
            </div>
        </div>
    @endif

    {{-- Processing modal shown when user has a pending request within 48 hours --}}
    @if($showProcessingModal)
        <div class="fixed inset-0 z-50 flex items-center justify-center">
            <div class="absolute inset-0 bg-black/40" wire:click="$set('showProcessingModal', false)"></div>

            <div class="relative bg-white rounded-2xl shadow-lg max-w-md w-full p-6 text-center">
                <div class="text-4xl text-amber-600 mb-2"><i class="fa-solid fa-hourglass-half"></i></div>
                <h3 class="text-lg font-semibold mb-2">Request In Progress</h3>
                <p class="text-gray-700 mb-2">{{ $processingMessage }}</p>
                <p class="text-gray-600 text-sm mb-4">Submitted: <strong>{{ $processingSince }}</strong></p>
                <p class="text-gray-600 text-sm mb-4">You can submit a new request after: <strong>{{ $processingAvailableAt }}</strong></p>
                <div class="flex items-center justify-center">
                    <button wire:click="$set('showProcessingModal', false)" class="inline-block px-4 py-2 bg-amber-600 text-white rounded-md">Close</button>
                </div>
            </div>
        </div>
    @endif
</div>

</div>
