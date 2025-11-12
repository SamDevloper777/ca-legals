<!-- footer.blade.php -->
<footer class="bg-gray-50 border-t border-gray-200 text-gray-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 grid grid-cols-1 md:grid-cols-4 gap-10">

        <!-- Brand Info -->
        <div>
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-lg bg-green-600 flex items-center justify-center text-white font-semibold text-lg shadow-md">
                    AC
                </div>
                <div>
                    <h3 class="text-lg font-bold text-gray-900">ABC & Co.</h3>
                    <p class="text-sm text-gray-500">Chartered Accountants</p>
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
                <li><a href="/services" class="hover:text-green-600 transition-colors flex items-center gap-2"><span>›</span> Services</a></li>
                <li><a href="/about" class="hover:text-green-600 transition-colors flex items-center gap-2"><span>›</span> About</a></li>
                <li><a href="/team" class="hover:text-green-600 transition-colors flex items-center gap-2"><span>›</span> Team</a></li>
                <li><a href="/contact" class="hover:text-green-600 transition-colors flex items-center gap-2"><span>›</span> Contact</a></li>
            </ul>
        </div>

        <!-- Services -->
        <div>
            <h3 class="text-sm font-semibold text-gray-900 uppercase tracking-wide border-b border-gray-200 pb-2">
                Our Services
            </h3>
            <ul class="mt-4 space-y-2 text-sm text-gray-600">
                <li><span class="hover:text-green-600 cursor-pointer">Tax Planning & Compliance</span></li>
                <li><span class="hover:text-green-600 cursor-pointer">Audit & Assurance</span></li>
                <li><span class="hover:text-green-600 cursor-pointer">Business Advisory</span></li>
                <li><span class="hover:text-green-600 cursor-pointer">Payroll & GST Management</span></li>
                <li><span class="hover:text-green-600 cursor-pointer">Financial Reporting</span></li>
            </ul>
        </div>

        <!-- Contact Info -->
        <div>
            <h3 class="text-sm font-semibold text-gray-900 uppercase tracking-wide border-b border-gray-200 pb-2">
                Contact Us
            </h3>
            <ul class="mt-4 space-y-3 text-sm text-gray-600">
                <li class="flex items-start gap-2">
                    <span class="text-green-600 mt-0.5"><i class="fas fa-phone-alt"></i></span>
                    <span>+91 98765 43210</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-green-600 mt-0.5"><i class="fas fa-envelope"></i></span>
                    <span>info@techonikaca.com</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-green-600 mt-0.5"><i class="fas fa-map-marker-alt"></i></span>
                    <span>Delhi NCR, India</span>
                </li>
            </ul>

            <!-- Social Links -->
            <div class="mt-5 flex space-x-4">
                <a href="#" class="text-gray-500 hover:text-green-600 transition"><i class="fab fa-linkedin text-xl"></i></a>
                <a href="#" class="text-gray-500 hover:text-green-600 transition"><i class="fab fa-twitter text-xl"></i></a>
                <a href="#" class="text-gray-500 hover:text-green-600 transition"><i class="fab fa-facebook text-xl"></i></a>
                <a href="#" class="text-gray-500 hover:text-green-600 transition"><i class="fab fa-instagram text-xl"></i></a>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="border-t border-gray-200 py-5 text-center text-sm text-gray-500 bg-white">
        <p>
            © {{ date('Y') }} <span class="font-medium text-gray-700">ABC & Co.</span> — All Rights Reserved.
        </p>
        <p class="text-xs mt-1">
            Designed & Maintained with ❤️ by <a href="#" class="text-green-600 hover:underline">Techonik</a>
        </p>
    </div>
</footer>
