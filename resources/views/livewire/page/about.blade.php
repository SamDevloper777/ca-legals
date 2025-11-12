<div>
    <section class="bg-gray-50 py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left: Image -->
            <div class="relative">
                <img src="{{ asset('assets/img/about/about-us.jpg') }}" alt="About Chartered Accountant"
                     class="rounded-2xl shadow-md w-full object-cover h-[400px]">
                <div class="absolute -bottom-5 -right-5 bg-green-600 text-white px-6 py-4 rounded-xl shadow-lg">
                    <p class="text-3xl font-bold">10+</p>
                    <p class="text-sm uppercase tracking-wide">Years of Experience</p>
                </div>
            </div>

            <!-- Right: Content -->
            <div>
                <h2 class="text-4xl font-bold text-green-700 mb-4">About Our Firm</h2>
                <p class="text-gray-700 leading-relaxed mb-6">
                    We are a team of dedicated Chartered Accountants providing end-to-end financial, taxation, and
                    business advisory solutions. With our deep expertise and client-first approach, we help
                    individuals, startups, and established businesses simplify compliance, plan tax efficiently,
                    and achieve sustainable growth.
                </p>
                <p class="text-gray-700 leading-relaxed mb-8">
                    Our goal is to deliver transparency, precision, and timely service — ensuring your business
                    meets every regulatory requirement while maximizing profitability.
                </p>
                <a href="{{ route('contact') }}"
                   class="inline-block bg-green-600 text-white px-6 py-3 rounded-xl hover:bg-green-700 transition">
                   Get in Touch
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="py-20 bg-white border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center mb-12">
        <h2 class="text-3xl font-bold text-green-700 mb-3">Our Mission & Vision</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">
            We are committed to delivering trustworthy, efficient, and strategic financial solutions that empower
            businesses to grow and thrive in a competitive world.
        </p>
    </div>

    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-10 px-6">
        <div class="bg-gray-50 rounded-xl p-8 shadow-sm hover:shadow-md transition">
            <h3 class="text-xl font-semibold text-green-700 mb-4">Our Mission</h3>
            <p class="text-gray-600">
                To provide clients with precise, reliable, and timely financial insights through professional integrity
                and advanced accounting practices — building trust that lasts.
            </p>
        </div>
        <div class="bg-gray-50 rounded-xl p-8 shadow-sm hover:shadow-md transition">
            <h3 class="text-xl font-semibold text-green-700 mb-4">Our Vision</h3>
            <p class="text-gray-600">
                To become a leading Chartered Accountancy firm known for excellence, innovation, and long-term
                partnerships with our clients across diverse sectors.
            </p>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="bg-gray-50 py-20">
    <div class="max-w-7xl mx-auto px-6 text-center mb-12">
        <h2 class="text-3xl font-bold text-green-700 mb-3">Why Choose Us</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">We believe in providing more than just accounting — we deliver peace of mind and strategic growth.</p>
    </div>

    <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8 px-6">
        <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-lg transition">
            <i class="fa-solid fa-user-tie text-green-600 text-4xl mb-4"></i>
            <h4 class="text-lg font-semibold mb-2 text-gray-900">Expert Professionals</h4>
            <p class="text-gray-600 text-sm">Our team of certified CAs and tax experts ensures every financial detail is accurate and compliant.</p>
        </div>
        <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-lg transition">
            <i class="fa-solid fa-clock text-green-600 text-4xl mb-4"></i>
            <h4 class="text-lg font-semibold mb-2 text-gray-900">Timely Service</h4>
            <p class="text-gray-600 text-sm">We understand the importance of deadlines and deliver every report and filing promptly.</p>
        </div>
        <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-lg transition">
            <i class="fa-solid fa-handshake text-green-600 text-4xl mb-4"></i>
            <h4 class="text-lg font-semibold mb-2 text-gray-900">Trusted by Clients</h4>
            <p class="text-gray-600 text-sm">We build long-term partnerships based on trust, transparency, and consistent results.</p>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="bg-green-700 py-16 text-center text-white">
    <h2 class="text-3xl font-bold mb-4">Ready to Streamline Your Finances?</h2>
    <p class="text-lg mb-6">Partner with us for reliable accounting, tax, and business solutions.</p>
    <a href="{{ route('contact') }}"
       class="bg-white text-green-700 px-6 py-3 rounded-xl font-semibold hover:bg-gray-100 transition">
       Contact Us Now
    </a>
</section>
</div>
