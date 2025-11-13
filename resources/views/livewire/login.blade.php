<div class="max-w-md mx-auto mt-12 bg-white p-6 py-20 mb-20 rounded-lg shadow">
    <h2 class="text-2xl font-semibold mb-4">Login</h2>

    @if (session()->has('error'))
        <div class="mb-4 p-3 bg-red-50 text-red-700 rounded">{{ session('error') }}</div>
    @endif

    <form wire:submit.prevent="login" class="space-y-4">
        <div>
            <label class="block text-sm text-gray-700 mb-1">Email</label>
            <input wire:model.defer="email" type="email" class="w-full border border-gray-200 rounded-lg px-3 py-2" placeholder="you@example.com">
            @error('email') <div class="text-red-600 text-sm mt-1">{{ $message }}</div> @enderror
        </div>

        <div>
            <label class="block text-sm text-gray-700 mb-1">Password</label>
            <input wire:model.defer="password" type="password" class="w-full border border-gray-200 rounded-lg px-3 py-2" placeholder="Password">
            @error('password') <div class="text-red-600 text-sm mt-1">{{ $message }}</div> @enderror
        </div>

        <div class="flex items-center justify-between">
            <label class="inline-flex items-center text-sm">
                <input wire:model="remember" type="checkbox" class="mr-2"> Remember me
            </label>
        </div>

        <div>
            <button type="submit" class="w-full bg-cyan-700 text-white py-2 rounded-lg">Sign in</button>
        </div>
    </form>
</div>
