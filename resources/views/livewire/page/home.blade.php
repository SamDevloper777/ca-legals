<main class="flex-1  bg-gradient-to-r from-cyan-50 via-white to-cyan-50  container mx-auto px-4 sm:py-16 space-y-12 sm:space-y-24">

    {{-- Consultation form modal component (Livewire) --}}
    <livewire:form.consultation-form />

    <!-- Hero Section -->
    <!-- Hero Section -->
    <section
        x-data="{ visible: false }"
        x-init="setTimeout(() => visible = true, 300)"
        class="relative overflow-hidden rounded-3xl">
        <div class="absolute top-0 right-0 w-96 h-96 bg-cyan-100 rounded-full blur-3xl opacity-40 -z-10 animate-pulse"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-cyan-50 rounded-full blur-3xl opacity-40 -z-10 animate-pulse delay-300"></div>

        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center px-8 py-12 relative z-10">

            <!-- Left Content -->
            <div
                x-show="visible"
                x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 -translate-x-10"
                x-transition:enter-end="opacity-100 translate-x-0">
                <h1 class="text-3xl font-extrabold sm:text-4xl md:text-6xl md:font-bold text-gray-900 leading-tight mb-6 font-bebas tracking-wide">
                    Empowering Your Growth with <span class="text-cyan-800">Expert Financial Guidance</span>
                </h1>

                <p class="text-lg text-gray-600 mb-8">
                    Professional Chartered Accountancy, Taxation, Audit, and Business Consulting  trusted by 1000+ clients for accuracy, ethics, and excellence.
                </p>

                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 items-stretch sm:items-center mt-2">
                    <button type="button" wire:click="$dispatch('openConsultation')"
                        class="w-full sm:w-auto text-center bg-emerald-600 text-white px-6 py-3 rounded-lg font-medium shadow hover:bg-emerald-700 transition duration-300 transform hover:-translate-y-0.5">
                        Get Consultation
                    </button>
                    <a href="#ca-works"
                        class="w-full sm:w-auto text-center border border-cyan-700 text-cyan-700 px-6 py-3 rounded-lg font-medium hover:bg-cyan-700 hover:text-white transition duration-300 transform hover:-translate-y-0.5">
                        Explore Services
                    </a>
                </div>

                <div class="mt-6 flex flex-col sm:flex-row gap-3 sm:gap-6 text-sm text-gray-500">
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 bg-cyan-700 rounded-full animate-ping"></span>
                        20+ Years Experience
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 bg-cyan-700 rounded-full animate-ping"></span>
                        1000+ Satisfied Clients
                    </div>
                </div>
            </div>

            <!-- Right Illustration -->
            <div
                x-show="visible"
                x-transition:enter="transition ease-out duration-1000"
                x-transition:enter-start="opacity-0 translate-y-10 scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                class="flex justify-center relative">
                <div class="relative flex justify-center">
                    <div class="relative">
                        <div class="bg-white rounded-2xl overflow-hidden shadow-lg">
                            <img src="{{ asset('images/office-desk-6952919_1280.jpg') }}"
                                alt="CA illustration"
                                class="w-full max-w-xl lg:max-w-2xl object-cover h-64 sm:h-96 md:h-[420px] lg:h-[520px]">
                        </div>

                        <!-- Floating badge -->
                        <div x-data="{ float: false }"
                            x-init="setInterval(() => float = !float, 1500)"
                            class="absolute -top-6 right-6 bg-white shadow-lg rounded-xl px-4 py-2 border border-cyan-100 flex items-center gap-2"
                            :class="float ? 'translate-y-1' : 'translate-y-0'"
                            style="transition: all 0.5s ease;">
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <span class="text-sm font-medium text-gray-700">Rated 5★ by Clients</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


   

    <!-- Featured Services (image cards) -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-10">
                <h3 class="text-3xl md:text-5xl font-bold text-cyan-800 font-playfair">Featured Services</h3>
                <p class="text-gray-600 mt-2">Hand-picked services that help businesses scale, protected by expert guidance and practical solutions.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($services ?? collect() as $service)

                @php
                    $icon = ($icons[$service->slug] ?? 'fa-briefcase');
                    $excerpt = \Illuminate\Support\Str::limit($service->description ?? '', 120);
                @endphp

                <div class="rounded-2xl p-1" style="background: repeating-linear-gradient(135deg,#07324a 0 12px,#0f6b86 12px 24px);">
                    <div class="bg-white rounded-xl p-6 h-full flex flex-col items-center text-center shadow-md">
                        <div class="w-20 h-20 flex items-center justify-center mb-4 bg-cyan-50 rounded-full">
                            <i class="fa-solid {{ $icon }} text-cyan-700 text-3xl"></i>
                        </div>
                        <h4 class="text-xl font-semibold text-gray-900 mb-2">{{ $service->name }}</h4>
                        <p class="text-gray-600 text-sm mb-4">{{ $excerpt }}</p>
                        <a href="{{route('service.view', ['slug' => $service->slug])}}" class="mt-auto inline-block bg-cyan-700 text-white px-5 py-2 rounded-full text-sm font-medium hover:opacity-95">Read More</a>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="bg-gradient-to-r from-cyan-50 via-white to-cyan-50 rounded-3xl py-12 sm:py-20">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 items-center px-4 sm:px-8">
            <div class="relative">
                <div class="overflow-hidden rounded-2xl">
                    <img src="{{ asset('images/hero1.jpg') }}" alt="About CA Firm" class="rounded-2xl shadow-lg object-cover w-full h-auto sm:h-72 md:h-auto">
                    <div class="absolute inset-0 bg-cyan-700/10 rounded-2xl pointer-events-none"></div>
                </div>
            </div>
            <div>
                <h2 class="text-3xl font-bold text-cyan-700 mb-5 font-playfair">About ABC & Co.</h2>
                <p class="text-gray-700 mb-4 leading-relaxed">
                    Founded in 2001, <strong>ABC & Co.</strong> is a reputed Chartered Accountancy firm offering a full spectrum of financial, taxation, and advisory services. Our commitment to integrity and excellence ensures our clients’ success and growth.
                </p>
                <p class="text-gray-700 mb-6 leading-relaxed">
                    Backed by experienced professionals and innovative solutions, we simplify complexities, ensure compliance, and empower businesses to achieve their strategic goals.
                </p>
                <a href="/about" class="inline-block bg-cyan-700 text-white px-6 py-3 rounded-lg font-medium hover:bg-cyan-700 transition duration-300 transform hover:-translate-y-1">
                    Read More
                </a>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section id="why" class="py-8 sm:py-12">
        <div class="text-center mb-14">
            <h2 class="text-3xl md:text-5xl font-bold text-cyan-800 mb-3 font-playfair">Why Choose Us?</h2>
            <p class="text-gray-600 text-lg">Trusted for expertise, ethics, and excellence.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 sm:gap-8">
            @foreach ([
            ['fa-user-tie', 'Qualified Experts', 'Certified professionals with proven experience.'],
            ['fa-handshake-angle', 'Client Focused', 'Your success is our priority, always.'],
            ['fa-bolt', 'Efficient Service', 'Reliable, timely, and transparent processes.'],
            ['fa-award', 'Award-Winning', 'Recognized excellence in professional service.']
            ] as [$icon, $title, $desc])
            <div class="bg-white rounded-2xl shadow-md p-8 text-center hover:shadow-lg transition transform hover:-translate-y-1">
                <i class="fa-solid {{ $icon }} text-3xl text-cyan-700 mb-3"></i>
                <h4 class="font-semibold text-gray-800 mb-2">{{ $title }}</h4>
                <p class="text-gray-600 text-sm">{{ $desc }}</p>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Testimonials -->
    <section class="bg-gradient-to-r from-white via-cyan-50 to-white rounded-3xl py-12 sm:py-16">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-cyan-700 mb-3 font-playfair">Client Testimonials</h2>
            <p class="text-gray-600 text-lg">Hear from businesses that trust our expertise.</p>
        </div>
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8 px-4 md:px-8">
            @foreach ([
            ['"ABC & Co. made our tax filing smooth and stress-free. Highly professional team!"', 'Ravi Sharma', 'Entrepreneur'],
            ['"Their audit service helped us improve internal controls and compliance."', 'Priya Mehta', 'Finance Head, TechCorp'],
            ['"We trust ABC & Co. for all financial advisory and strategy planning."', 'Anil Kumar', 'Managing Director']
            ] as [$quote, $name, $role])
            <div class="bg-white rounded-2xl shadow-md p-6 text-center hover:shadow-lg transition transform hover:-translate-y-1">
                <p class="text-gray-600 italic mb-4">{{ $quote }}</p>
                <div class="font-medium text-gray-900 font-playfair">{{ $name }}</div>
                <div class="text-sm text-gray-500">{{ $role }}</div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- faq.blade.php -->
    <section class="bg-gray-50 py-12 sm:py-16">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-3">Frequently Asked Questions</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Find answers to some of the most common questions our clients ask about taxation, auditing, and accounting services.
                </p>
            </div>

            <div class="space-y-4" x-data="{ open: null }">
                <!-- FAQ 1 -->
                <div class="bg-white shadow-sm rounded-lg border border-gray-100">
                    <button @click="open === 1 ? open = null : open = 1"
                        class="w-full flex justify-between items-center px-6 py-4 text-left text-gray-800 font-medium focus:outline-none">
                        <span>What services does ABC & Co. provide?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" :class="{'rotate-180': open === 1}" class="w-5 h-5 text-cyan-700 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open === 1" x-collapse class="px-6 pb-4 text-gray-600 text-sm leading-relaxed">
                        We offer a complete range of professional services including Accounting, Auditing, Taxation (Direct & Indirect), Business Advisory, Financial Consulting, and Compliance Management.
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="bg-white shadow-sm rounded-lg border border-gray-100">
                    <button @click="open === 2 ? open = null : open = 2"
                        class="w-full flex justify-between items-center px-6 py-4 text-left text-gray-800 font-medium focus:outline-none">
                        <span>Do you help with company registration and compliance?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" :class="{'rotate-180': open === 2}" class="w-5 h-5 text-cyan-700 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open === 2" x-collapse class="px-6 pb-4 text-gray-600 text-sm leading-relaxed">
                        Yes, our firm provides end-to-end company incorporation, ROC filing, GST registration, and legal compliance support under MCA and Income Tax Act.
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="bg-white shadow-sm rounded-lg border border-gray-100">
                    <button @click="open === 3 ? open = null : open = 3"
                        class="w-full flex justify-between items-center px-6 py-4 text-left text-gray-800 font-medium focus:outline-none">
                        <span>Can you assist with tax planning for individuals and businesses?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" :class="{'rotate-180': open === 3}" class="w-5 h-5 text-cyan-700 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open === 3" x-collapse class="px-6 pb-4 text-gray-600 text-sm leading-relaxed">
                        Absolutely. We help clients minimize tax liability legally through strategic planning, deductions, exemptions, and investment structuring for both individuals and corporate entities.
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="bg-white shadow-sm rounded-lg border border-gray-100">
                    <button @click="open === 4 ? open = null : open = 4"
                        class="w-full flex justify-between items-center px-6 py-4 text-left text-gray-800 font-medium focus:outline-none">
                        <span>Do you provide virtual or online consultations?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" :class="{'rotate-180': open === 4}" class="w-5 h-5 text-cyan-700 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open === 4" x-collapse class="px-6 pb-4 text-gray-600 text-sm leading-relaxed">
                        Yes, we offer online consultations via video call or email for clients across India and abroad, ensuring professional support no matter where you are.
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="bg-white shadow-sm rounded-lg border border-gray-100">
                    <button @click="open === 5 ? open = null : open = 5"
                        class="w-full flex justify-between items-center px-6 py-4 text-left text-gray-800 font-medium focus:outline-none">
                        <span>How can I book a consultation with your firm?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" :class="{'rotate-180': open === 5}" class="w-5 h-5 text-cyan-700 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open === 5" x-collapse class="px-6 pb-4 text-gray-600 text-sm leading-relaxed">
                        You can easily schedule a meeting by visiting our <a href="/contact" class="text-cyan-700 hover:underline">Contact Page</a> or calling our office directly. Our team will confirm your appointment promptly.
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Contact CTA -->
    <section id="contact" class="max-w-xl mx-auto py-8">
        <div class="bg-cyan-700 rounded-2xl shadow-md p-6 sm:p-10 text-center text-white">
            <h3 class="text-2xl font-semibold mb-3">Let’s Discuss Your Financial Goals</h3>
            <p class="text-cyan-100 mb-6">Get in touch for personalized consultation or expert advice.</p>
            <div class="flex flex-col md:flex-row items-center justify-center gap-6 mb-6">
                <div class="flex items-center gap-2"><i class="fa-solid fa-phone"></i> <span>+91-9876543210</span></div>
                <div class="flex items-center gap-2"><i class="fa-solid fa-envelope"></i> <span>info@techonikaca.com</span></div>
            </div>
            <a href="/contact" class="inline-block w-full md:w-auto bg-white text-cyan-700 font-medium px-6 py-3 rounded-lg hover:bg-cyan-50 transition duration-300 transform hover:-translate-y-0.5 text-center">
                Contact Page
            </a>
        </div>
    </section>



</main>