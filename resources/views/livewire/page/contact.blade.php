<main class="container mx-auto px-4 py-12">
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-cyan-50 via-white to-cyan-50 rounded-3xl p-8 sm:p-12 mb-10">
        <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
            <div>
                <h1 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mb-3 font-bebas tracking-wide">Get In Touch</h1>
                <p class="text-gray-700">Have a question or need expert advice? Our Chartered Accountants are here to help — reach out and we'll get back within 24 hours.</p>
                <div class="mt-6 flex flex-col sm:flex-row gap-3">
                    <a href="#contact-form" class="inline-block bg-cyan-700 text-white px-6 py-3 rounded-lg font-medium shadow hover:bg-cyan-800 transition w-full sm:w-auto text-center">Request Consultation</a>
                    <a href="#info" class="inline-block border border-cyan-700 text-cyan-700 px-6 py-3 rounded-lg font-medium hover:bg-cyan-700 hover:text-white transition w-full sm:w-auto text-center">Contact Details</a>
                </div>
            </div>
            <div class="hidden md:block">
                <img src="{{ asset('images/pic1.jpg') }}" alt="Contact" class="w-full rounded-2xl object-cover h-auto md:h-56">
            </div>
        </div>
    </section>

    <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Contact Form -->
        <div class="lg:col-span-2 bg-white rounded-2xl shadow-md p-6 sm:p-8">
            <h2 class="text-2xl font-semibold text-gray-900 mb-4 font-playfair">Send Us a Message</h2>

            @if (session()->has('success'))
                <div class="p-3 mb-4 bg-green-100 text-green-700 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif
            @if (session()->has('info'))
                <div class="p-3 mb-4 bg-yellow-50 text-yellow-800 rounded-lg border border-yellow-100">
                    {{ session('info') }}
                </div>
            @endif

            <form wire:submit.prevent="submit" id="contact-form" class="space-y-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm text-gray-700 mb-1">Full name</label>
                        <input wire:model="name" type="text" class="w-full border border-gray-200 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-200" placeholder="Your name">
                        @error('name') <div class="text-red-600 text-sm mt-1">{{ $message }}</div> @enderror
                    </div>

                    <div>
                        <label class="block text-sm text-gray-700 mb-1">Email</label>
                        <input wire:model="email" type="email" class="w-full border border-gray-200 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-200" placeholder="you@example.com">
                        @error('email') <div class="text-red-600 text-sm mt-1">{{ $message }}</div> @enderror
                    </div>
                </div>

                <div>
                        <label class="block text-sm text-gray-700 mb-1">Phone <span class="text-red-500">*</span></label>
                        <input wire:model="phone" type="number" required class="w-full border border-gray-200 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-200" placeholder="Enter your phone number">
                </div>

                <div>
                    <label class="block text-sm text-gray-700 mb-1">Service</label>
                    <select wire:model="service" type="text" class="w-full border border-gray-200 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-200">
                        <option value="" selected>select a service</option>
                        @foreach($serviceList as $s)
                            <option value="{{ $s->name }}">{{ $s->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-sm text-gray-700 mb-1">Message</label>
                    <textarea wire:model="message" rows="6" class="w-full border border-gray-200 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-200" placeholder="How can we help?"></textarea>
                    @error('message') <div class="text-red-600 text-sm mt-1">{{ $message }}</div> @enderror
                </div>

                <div class="flex items-center gap-4">
                    <button type="submit" class="bg-cyan-700 text-white px-6 py-3 rounded-lg font-medium hover:bg-cyan-800 transition w-full sm:w-auto">
                        Send Message
                    </button>
                </div>
            </form>
        </div>

        <!-- Info + Map -->
        <aside id="info" class="bg-gradient-to-b from-cyan-50 to-white rounded-2xl p-6 shadow-md">
            <h3 class="text-xl font-semibold mb-4 font-playfair">Contact Details</h3>
            <div class="space-y-4 text-sm text-gray-700">
                <div class="flex items-start gap-3">
                    <i class="fa-solid fa-phone text-cyan-700 mt-1"></i>
                    <div>
                        <div class="font-medium">Phone</div>
                        <div class="text-gray-600">+91-9876543210</div>
                    </div>
                </div>
                <div class="flex items-start gap-3">
                    <i class="fa-solid fa-envelope text-cyan-700 mt-1"></i>
                    <div>
                        <div class="font-medium">Email</div>
                        <div class="text-gray-600">info@techonikaca.com</div>
                    </div>
                </div>
                <div class="flex items-start gap-3">
                    <i class="fa-solid fa-location-dot text-cyan-700 mt-1"></i>
                    <div>
                        <div class="font-medium">Office</div>
                        <div class="text-gray-600">123 Business Street, Mumbai, India</div>
                    </div>
                </div>
            </div>

            <div class="mt-6 rounded-lg overflow-hidden">
                <iframe class="w-full h-40 border-0" loading="lazy"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.0!2d72.8777!3d19.0760!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c63c0bb06d9b%3A0x0!2sMumbai%20%2C%20India!5e0!3m2!1sen!2sin!4v0000000000000"
                    allowfullscreen></iframe>
            </div>

            <div class="mt-4 text-xs text-gray-500">
                We respond during office hours: Mon - Fri, 9:30 AM - 6:30 PM IST
            </div>
        </aside>
    </div>
</main>
