<!-- footer.blade.php -->
@php
use Illuminate\Support\Str;
$routeName = Route::currentRouteName();
$currentSlug = request()->segment(2); // used for /service/{slug}
$currentService = null;
if ($currentSlug) {
$currentService = \App\Models\Service::where('slug', $currentSlug)->first();
}
$servicesList = \App\Models\Service::orderBy('id')->get();
@endphp

<footer class="bg-gray-50 border-t border-gray-200 text-gray-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 grid grid-cols-1 md:grid-cols-4 gap-10">

        <!-- Brand Info -->
        <div>
            <div class="flex items-center gap-3">
                <img src="{{ asset('images/logo.png') }}" alt="ADR & ASSOCIATES Logo" class="w-12 h-12  object-contain">
                <div>
                    <h3 class="text-lg font-bold text-cyan-700">ADR & ASSOCIATES</h3>
                    <p class="text-sm text-[#72b544]">Chartered Accountants</p>
                </div>
            </div>
            <p class="mt-5 text-sm text-gray-600 leading-relaxed">
                Delivering excellence in Audit, Taxation, and Business Advisory.
                Trusted by businesses for integrity, precision, and insight.
            </p>
        </div>

        <!-- Quick Links -->
        <div>
            <h3 class="text-sm font-semibold text-gray-900 uppercase tracking-wide border-b border-gray-200 pb-2">
                Quick Links
            </h3>
            <ul class="mt-4 space-y-2 text-sm text-gray-600">
                <li>
                    <a wire:navigate href="/" class="transition-colors flex items-center gap-2 {{ $routeName === 'about' ? 'text-cyan-700' : 'hover:text-cyan-700' }}">
                        <span>›</span> Home
                    </a>
                </li>
                <li>
                    <a wire:navigate href="/about" class="transition-colors flex items-center gap-2 {{ $routeName === 'about' ? 'text-cyan-700' : 'hover:text-cyan-700' }}">
                        <span>›</span> About
                    </a>
                </li>

                <li>
                    <a wire:navigate href="/contact" class="transition-colors flex items-center gap-2 {{ $routeName === 'contact' ? 'text-cyan-700' : 'hover:text-cyan-700' }}">
                        <span>›</span> Contact
                    </a>
                </li>
            </ul>
        </div>

        <!-- Services -->
        <div>
            <h3 class="text-sm font-semibold text-gray-900 uppercase tracking-wide border-b border-gray-200 pb-2">
                Our Services
            </h3>
            <ul class="mt-4 space-y-2 text-sm text-gray-600">
                @forelse($servicesList as $s)
                <li>
                    <a href="{{ route('service.view', ['slug' => $s->slug]) }}" wire:navigate class="hover:text-cyan-700 transition">{{ $s->name }}</a>
                </li>
                @empty
                <li class="text-gray-500">No services found.</li>
                @endforelse
            </ul>
        </div>

        <!-- Contact Info -->
        <div>
            <h3 class="text-sm font-semibold text-gray-900 uppercase tracking-wide border-b border-gray-200 pb-2">
                Contact Us
            </h3>
            <ul class="mt-4 space-y-3 text-sm text-gray-600">
                <!-- Phone Numbers -->
                <li class="flex items-start gap-2">
                    <span class="text-cyan-700 mt-0.5">
                        <i class="fas fa-phone-alt"></i>
                    </span>
                    <span class="flex flex-col text-cyan-700">
                        <a href="tel:+919903095446" class="hover:underline">+91 99030 95446</a>
                        <a href="tel:+918620852167" class="hover:underline">+91 86208 52167</a>
                    </span>
                </li>

                <!-- Email -->
                <li class="flex items-start gap-2">
                    <span class="text-cyan-700 flex flex-col gap-2 mt-0.5">
                        <i class="fas fa-envelope"></i>
                        <i class="fas fa-envelope"></i>
                    </span>
                    <span class="flex flex-col text-cyan-700">
                        <a href="mailto:adrassociates@yahoo.in"
                            class="text-cyan-700 hover:underline break-all">
                            adrassociates@yahoo.in
                        </a>
                        <a href="mailto:fcadst@gmail.com"
                            class="text-cyan-700 hover:underline break-all">
                            fcadst@gmail.com
                        </a>
                    </span>
                </li>

                <!-- Address -->
                <li class="flex items-start gap-2">
                    <span class="text-cyan-700 mt-0.5">
                        <i class="fas fa-map-marker-alt"></i>
                    </span>
                    <a href="https://www.google.com/maps/place/Binani+Bhawan,+Malapara,+Jorabagan,+Kolkata,+West+Bengal+700006/@22.5892752,88.35463,17z/data=!3m1!4b1!4m6!3m5!1s0x3a0277c8472d3761:0x4a1d7748fe386c1b!8m2!3d22.5892752!4d88.35463!16s%2Fg%2F11l5gk27sb!17m2!4m1!1e3!18m1!1e1?entry=ttu&g_ep=EgoyMDI1MTExMC4wIKXMDSoASAFQAw%3D%3D"
                        target="_blank"
                        class="text-cyan-700 hover:underline">
                        13A, Pathuria Ghat Street, First Floor, R.No.12A,<br>
                        Near Binani Dharmashala, Kolkata - 700 006
                    </a>
                </li>
            </ul>


            <!-- Social Links -->
            <div class="mt-5 flex space-x-4">
                <a href="#" class="text-gray-500 hover:text-cyan-700 transition"><i class="fab fa-linkedin text-xl"></i></a>
                <a href="#" class="text-gray-500 hover:text-cyan-700 transition"><i class="fab fa-twitter text-xl"></i></a>
                <a href="#" class="text-gray-500 hover:text-cyan-700 transition"><i class="fab fa-facebook text-xl"></i></a>
                <a href="#" class="text-gray-500 hover:text-cyan-700 transition"><i class="fab fa-instagram text-xl"></i></a>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="border-t border-gray-200 py-5 text-center text-sm text-gray-500 bg-white">
        <p>
            © {{ date('Y') }} <span class="font-medium text-gray-700">ADR & ASSOCIATES</span> — All Rights Reserved.
        </p>
        <p class="text-xs mt-1">
            Designed & Maintained with ❤️ by <a href="#" class="text-cyan-700 hover:underline">Techonika</a>
        </p>
    </div>
</footer>