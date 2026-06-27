<nav class="fixed w-full z-50 glass border-b-0 border-white/5 transition-all duration-300" x-data="{ scrolled: false, mobileMenuOpen: false }" @scroll.window="scrolled = (window.pageYOffset > 20)">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center gap-3 cursor-pointer">
                <img src="/logo.png" alt="Christmas Decorating Service Logo" class="w-10 h-10 object-cover rounded-full shadow-[0_0_15px_rgba(234,179,8,0.3)] border border-yellow-500/20">
                <span class="font-display font-bold text-xl tracking-tight text-white">ChristmasDecorating<span class="text-yellow-400">Service</span></span>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="/#services" class="text-sm font-medium text-slate-300 hover:text-white transition-colors">Services</a>
                <a href="/#showcase" class="text-sm font-medium text-slate-300 hover:text-white transition-colors">Portfolio</a>
                <a href="{{ route('acquisition.show') }}" class="text-sm font-medium text-slate-300 hover:text-white transition-colors">Acquisition</a>
            </div>

            <!-- CTA Button -->
            <div class="hidden md:flex items-center">
                <a href="{{ route('acquisition.show') }}" class="px-5 py-2.5 text-sm font-semibold text-white bg-white/5 border border-white/10 rounded-full hover:bg-white/10 hover:border-white/20 transition-all duration-300 backdrop-blur-md">
                    Contact Us
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-slate-300 hover:text-white focus:outline-none">
                    <svg x-show="!mobileMenuOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="mobileMenuOpen" class="h-6 w-6 hidden" :class="{'hidden': !mobileMenuOpen}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="md:hidden glass border-t border-white/10 hidden"
         :class="{'hidden': !mobileMenuOpen}"
         @click.away="mobileMenuOpen = false">
        <div class="px-4 pt-2 pb-6 space-y-1 shadow-2xl">
            <a @click="mobileMenuOpen = false" href="/#services" class="block px-3 py-3 rounded-md text-base font-medium text-white hover:bg-white/5">Services</a>
            <a @click="mobileMenuOpen = false" href="/#showcase" class="block px-3 py-3 rounded-md text-base font-medium text-white hover:bg-white/5">Portfolio</a>
            <a @click="mobileMenuOpen = false" href="{{ route('acquisition.show') }}" class="block px-3 py-3 rounded-md text-base font-medium text-yellow-400 hover:bg-white/5">Acquisition</a>
        </div>
    </div>
</nav>
