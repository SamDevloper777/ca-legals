<main class="container mx-auto px-4 py-12">

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-cyan-50 via-white to-cyan-50 rounded-3xl p-8 sm:p-12 mb-10">
        <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
            <div>
                <h1 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mb-3 tracking-wide">
                    Get In Touch
                </h1>
                <p class="text-gray-700">
                    Have a question or need expert advice? Our Chartered Accountants are here to help.
                    Reach out and we’ll get back to you within 24 hours.
                </p>
                <div class="mt-6 flex flex-col sm:flex-row gap-3">
                    <a href="#contact-form"
                        class="inline-block bg-cyan-700 text-white px-6 py-3 rounded-lg font-medium hover:bg-cyan-800 transition w-full sm:w-auto text-center">
                        Request Consultation
                    </a>
                    <a href="#info"
                        class="inline-block border border-cyan-700 text-cyan-700 px-6 py-3 rounded-lg font-medium hover:bg-cyan-700 hover:text-white transition w-full sm:w-auto text-center">
                        View Offices
                    </a>
                </div>
            </div>

            <div class="hidden md:block">
                <img src="{{ asset('images/pexels-vlada-karpovich-7433832.jpg') }}" alt="Contact"
                    class="w-full rounded-2xl object-cover h-auto md:h-56 shadow-sm border border-gray-100">
            </div>
        </div>

        <!-- Contact Info -->
        <div id="info" class="flex flex-col lg:flex-row justify-center items-stretch gap-6 mt-12">

            <!-- Office Card -->
            @php
            $offices = [
            [
            'title' => 'Head Office',
            'address' => '13A, Pathuria Ghat Street, First
            Floor, R.No.12A, Near Binani
            Dharmashala, Kolkata-700 006 ',
            'phones' => ['+91 9903095446', '+91 8620852167'],
            'email' => 'adrassociates@yahoo.in'
            ],
            [
            'title' => 'Kolkata Branch',
            'address' => '3A, Chowringhee Place, 2nd Floor, R.No.70,<br>Kolkata - 700 013',
            'phones' => ['+91 9051132111'],
            'email' => 'rkchoudhary8@rediffmail.com'
            ],
            [
            'title' => 'Asansol
            Branch ',
            'address' => 'Vill.- Dhrubdangal,Near Water
            Tank, P.O.-Radha Nagar Road,
            Dist.- Burdwan, Asansol-713 325 ',
            'phones' => ['+91 9333797746 '],
            'email' => '
            caashok.asn@gmail.co
            m '
            ]
            ];
            @endphp

            @foreach ($offices as $office)
            <div
                class="flex-1 bg-white border border-gray-200 rounded-xl p-8 text-center transition duration-200 hover:-translate-y-1 hover:shadow-md">
                <h3 class="text-lg font-semibold text-gray-800 mb-3">{{ $office['title'] }}</h3>

                <div class="space-y-3 text-gray-600 text-sm">
                    <div class="flex items-start justify-center gap-2">
                        <i class="fa-solid fa-location-dot text-cyan-700 mt-1"></i>
                        <p>{!! $office['address'] !!}</p>
                    </div>
                    <div class="flex items-start justify-center gap-2">
                        <i class="fa-solid fa-phone text-cyan-700 mt-1"></i>
                        <div class="flex flex-col text-cyan-700">
                            @foreach ($office['phones'] as $phone)
                            <a href="tel:{{ $phone }}" class="hover:underline">{{ $phone }}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="flex items-start justify-center gap-2">
                        <i class="fa-solid fa-envelope text-cyan-700 mt-1"></i>
                        <a href="mailto:{{ $office['email'] }}" class="text-cyan-700 hover:underline break-all">
                            {{ $office['email'] }}
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Contact Form + Map -->
    <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Contact Form -->
        <div class="lg:col-span-2 bg-white border border-gray-200 rounded-2xl p-8 shadow-sm">
            <h2 class="text-2xl font-semibold text-gray-900 mb-4">Send Us a Message</h2>

            <form wire:submit.prevent="submit" id="contact-form" class="space-y-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm text-gray-700 mb-1">Full Name</label>
                        <input wire:model="name" type="text"
                            class="w-full border border-gray-200 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-200"
                            placeholder="Your name">
                    </div>
                    <div>
                        <label class="block text-sm text-gray-700 mb-1">Email</label>
                        <input wire:model="email" type="email"
                            class="w-full border border-gray-200 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-200"
                            placeholder="you@example.com">
                    </div>
                </div>

                <div>
                    <label class="block text-sm text-gray-700 mb-1">Phone</label>
                    <input wire:model="phone" type="number"
                        class="w-full border border-gray-200 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-200"
                        placeholder="Enter your phone number">
                </div>

                <div>
                    <label class="block text-sm text-gray-700 mb-1">Message</label>
                    <textarea wire:model="message" rows="5"
                        class="w-full border border-gray-200 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-200"
                        placeholder="How can we help?"></textarea>
                </div>

                <button type="submit"
                    class="bg-cyan-700 text-white px-6 py-3 rounded-lg font-medium hover:bg-cyan-800 transition w-full sm:w-auto">
                    Send Message
                </button>
            </form>
        </div>

        <!-- Info + Map -->
        <aside class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm">
            <h3 class="text-xl font-semibold mb-4">Locate Us</h3>
            <iframe class="w-full h-48 rounded-lg border-0"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3683.727975145343!2d88.35463!3d22.589275200000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0277c8472d3761%3A0x4a1d7748fe386c1b!2sBinani%20Bhawan%2C%20Malapara%2C%20Jorabagan%2C%20Kolkata%2C%20West%20Bengal%20700006!5e0!3m2!1sen!2sin!4v1763037932984!5m2!1sen!2sin" 
                allowfullscreen="" loading="lazy"></iframe>
            <p class="text-xs text-gray-500 mt-3">We respond during office hours: Mon - Fri, 9:30 AM - 6:30 PM IST</p>
        </aside>
    </div>

</main>