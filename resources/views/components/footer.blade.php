<footer class="relative z-10 border-t border-white/10 bg-[#020617] pt-16 pb-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
            
            <div class="col-span-1 md:col-span-1">
                <div class="flex items-center gap-3 mb-6">
                    <img src="/logo.png" alt="Christmas Decorating Service Logo" class="w-8 h-8 object-cover rounded-full shadow-[0_0_15px_rgba(234,179,8,0.2)] border border-yellow-500/20">
                    <span class="font-display font-bold text-lg text-white">ChristmasDecorating<span class="text-yellow-400">Service</span></span>
                </div>
                <p class="text-slate-400 text-sm leading-relaxed mb-6">
                    Premium holiday decorating for luxury homes and commercial properties. Creating unforgettable seasonal experiences.
                </p>
                <div class="flex space-x-4">
                    <a href="mailto:hello@ChristmasDecoratingService.com" class="text-slate-400 hover:text-white transition-colors flex items-center justify-center" title="Contact Us">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </a>
                </div>
            </div>

            <div>
                <h4 class="text-white font-semibold mb-4 text-sm tracking-wider uppercase">Services</h4>
                <ul class="space-y-3 text-sm text-slate-400">
                    <li><a href="#" class="hover:text-yellow-400 transition-colors">Residential Decorating</a></li>
                    <li><a href="#" class="hover:text-yellow-400 transition-colors">Commercial Installations</a></li>
                    <li><a href="#" class="hover:text-yellow-400 transition-colors">Holiday Lighting</a></li>
                    <li><a href="#" class="hover:text-yellow-400 transition-colors">Corporate Events</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-semibold mb-4 text-sm tracking-wider uppercase">Company</h4>
                <ul class="space-y-3 text-sm text-slate-400">
                    <li><a href="#" class="hover:text-yellow-400 transition-colors">About</a></li>
                    <li><a href="#" class="hover:text-yellow-400 transition-colors">Careers</a></li>
                    <li><a href="#" class="hover:text-yellow-400 transition-colors">Press</a></li>
                    <li><a href="{{ route('acquisition.show') }}" class="hover:text-yellow-400 transition-colors">Brand Acquisition</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-semibold mb-4 text-sm tracking-wider uppercase">Stay Updated</h4>
                <p class="text-sm text-slate-400 mb-4">Subscribe to our newsletter for seasonal planning and design inspiration.</p>
                <form class="flex">
                    <input type="email" placeholder="Enter your email" class="w-full bg-white/5 border border-white/10 rounded-l-lg px-4 py-2 text-sm text-white focus:outline-none focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 transition-all">
                    <button type="submit" class="bg-yellow-500 hover:bg-yellow-400 text-slate-900 px-4 py-2 rounded-r-lg text-sm font-semibold transition-colors">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>

        <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center">
            <p class="text-slate-500 text-sm">
                &copy; {{ date('Y') }} ChristmasDecoratingService.com. All rights reserved.
            </p>
            <div class="flex space-x-6 mt-4 md:mt-0 text-sm text-slate-500">
                <a href="#" class="hover:text-slate-300">Privacy Policy</a>
                <a href="#" class="hover:text-slate-300">Terms of Service</a>
                <a href="#" class="hover:text-slate-300">Cookie Policy</a>
            </div>
        </div>
    </div>
</footer>
