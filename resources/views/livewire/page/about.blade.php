<div>
    <section class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left: Image -->
                <div class="relative">
                    <img src="{{ asset('images/stairs-6133971_1280.jpg') }}" alt="About Chartered Accountant"
                        class="rounded-2xl shadow-md w-full object-cover h-[400px]">
                    <div class="absolute -bottom-5 -right-5 bg-cyan-700 text-white px-6 py-4 rounded-xl shadow-lg">
                        <p class="text-3xl font-bold">27+</p>
                        <p class="text-sm uppercase tracking-wide">Years of Experience</p>
                    </div>
                </div>

                <!-- Right: Content -->
                <div>
                    <h2 class="text-4xl font-bold text-cyan-800 mb-4">About Our Firm</h2>
                    <p class="text-gray-700 leading-relaxed mb-6">
                        We are ADR & Associates, a chartered accountancy firm established in 2002 with offices in Kolkata and Asansol. With over 27 years of leadership experience, we specialize in Audit & Assurance, Tax and Corporate Advisory, Insolvency, and M&A services. Our team proudly serves clients across India, including banks, delivering trusted financial expertise and strategic insight.
                    </p>
                    <p class="text-gray-700 leading-relaxed mb-8">
                        Our goal is to deliver transparency, precision, and timely service ensuring your business
                        meets every regulatory requirement while maximizing profitability.
                    </p>
                    <a href="{{ route('contact') }}"
                        class="inline-block bg-cyan-700 text-white px-6 py-3 rounded-xl hover:bg-cyan-700 transition">
                        Get in Touch
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="py-20 bg-white border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center mb-12">
            <h2 class="text-3xl font-bold text-cyan-800 mb-3">Our Mission & Vision</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                We are committed to delivering trustworthy, efficient, and strategic financial solutions that empower
                businesses to grow and thrive in a competitive world.
            </p>
        </div>

        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-10 px-6">
            <div class="bg-gray-50 rounded-xl p-8 shadow-sm hover:shadow-md transition">
                <h3 class="text-xl font-semibold text-cyan-800 mb-4">Our Mission</h3>
                <p class="text-gray-600">
                    To deliver trusted, insightful, and client-focused chartered accountancy services that empower businesses and institutions across India. We are committed to excellence, integrity, and innovation in every audit, advisory, and financial solution we provide.
                </p>
            </div>
            <div class="bg-gray-50 rounded-xl p-8 shadow-sm hover:shadow-md transition">
                <h3 class="text-xl font-semibold text-cyan-800 mb-4">Our Vision</h3>
                <p class="text-gray-600">
                    To be India’s most respected and reliable chartered accountancy firm—recognized for our expertise, ethical standards, and transformative impact on clients’ financial success and strategic growth.
                </p>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-6 text-center mb-12">
            <h2 class="text-3xl font-bold text-cyan-800 mb-3">Why Choose Us</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">We believe in providing more than just accounting — we deliver peace of mind and strategic growth.</p>
        </div>

        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8 px-6">
            <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-lg transition">
                <i class="fa-solid fa-user-tie text-cyan-700 text-4xl mb-4"></i>
                <h4 class="text-lg font-semibold mb-2 text-gray-900">Expert Professionals</h4>
                <p class="text-gray-600 text-sm">Our team of certified CAs and tax experts ensures every financial detail is accurate and compliant.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-lg transition">
                <i class="fa-solid fa-clock text-cyan-700 text-4xl mb-4"></i>
                <h4 class="text-lg font-semibold mb-2 text-gray-900">Timely Service</h4>
                <p class="text-gray-600 text-sm">We understand the importance of deadlines and deliver every report and filing promptly.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-lg transition">
                <i class="fa-solid fa-handshake text-cyan-700 text-4xl mb-4"></i>
                <h4 class="text-lg font-semibold mb-2 text-gray-900">Trusted by Clients</h4>
                <p class="text-gray-600 text-sm">We build long-term partnerships based on trust, transparency, and consistent results.</p>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-cyan-700 py-16 text-center text-white">
        <h2 class="text-3xl font-bold mb-4">Ready to Streamline Your Finances?</h2>
        <p class="text-lg mb-6">Partner with us for reliable accounting, tax, and business solutions.</p>
        <a href="{{ route('contact') }}"
            class="bg-white text-cyan-800 px-6 py-3 rounded-xl font-semibold hover:bg-gray-100 transition">
            Contact Us Now
        </a>
    </section>
</div>