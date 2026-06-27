<x-layouts.app>
    <!-- Background Effects -->
    <div class="fixed inset-0 z-0 pointer-events-none overflow-hidden bg-[#021209]">
        <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-emerald-900/30 rounded-full blur-[120px] animate-blob"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-yellow-600/10 rounded-full blur-[120px] animate-blob" style="animation-delay: 2s;"></div>
        <div class="absolute top-[40%] left-[60%] w-[30%] h-[30%] bg-green-800/20 rounded-full blur-[120px] animate-blob" style="animation-delay: 4s;"></div>
        <div class="absolute inset-0 bg-grid-pattern opacity-[0.10]"></div>
    </div>

    <div class="relative z-10">
        <!-- 1. HERO SECTION -->
        <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
            <!-- Glitters -->
            <div class="absolute top-1/4 left-1/4 animate-sparkle" style="animation-delay: 0.5s;">
                <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z"/></svg>
            </div>
            <div class="absolute top-1/3 right-1/4 animate-sparkle" style="animation-delay: 1.2s;">
                <svg class="w-8 h-8 text-yellow-200" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z"/></svg>
            </div>
            <div class="absolute bottom-1/4 left-1/3 animate-sparkle" style="animation-delay: 0.2s;">
                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z"/></svg>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
                <div class="animate-fade-in-up">
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass border border-yellow-500/30 text-yellow-400 text-sm font-medium mb-8">
                        <span class="w-2 h-2 rounded-full bg-yellow-400 animate-pulse"></span>
                        Premium Residential & Commercial
                    </div>
                    
                    <h1 x-data="typewriter()" x-init="start()" class="text-5xl md:text-6xl lg:text-7xl font-extrabold font-display tracking-tight mb-8 leading-tight min-h-[3em] md:min-h-[2em]">
                        <span x-html="displayedText"></span><span class="animate-pulse border-r-4 border-yellow-400 ml-1 inline-block h-[1em] align-middle -mt-2"></span>
                    </h1>
                    
                    <p class="text-xl md:text-2xl text-slate-300 max-w-3xl mx-auto mb-10 font-light">
                        Transform your property into a breathtaking holiday experience with professional Christmas decorating services.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                        <x-ui.button variant="primary" href="#services" class="w-full sm:w-auto text-lg px-8 py-4 bg-yellow-500 text-slate-900 hover:bg-yellow-400">
                            Explore Our Services
                        </x-ui.button>
                        <x-ui.button variant="secondary" href="#acquisition" class="w-full sm:w-auto text-lg px-8 py-4">
                            Strategic Acquisition Inquiry
                        </x-ui.button>
                    </div>
                </div>

                <!-- Animated Hero Image Mockup -->
                <div class="mt-20 relative mx-auto max-w-5xl animate-fade-in-up" style="animation-delay: 0.3s;">
                    <div class="glass p-2 rounded-2xl border border-white/10 shadow-2xl shadow-yellow-500/10">
                        <div class="bg-[#052e16] rounded-xl overflow-hidden relative aspect-[16/9] flex items-center justify-center">
                            <img src="/hero_christmas_luxury_1782571566005.png" alt="Luxury Christmas Decorating" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-80" onerror="this.src='https://images.unsplash.com/photo-1544816155-12df9643f363?auto=format&fit=crop&q=80'; this.classList.remove('mix-blend-overlay', 'opacity-80')">
                            
                            <!-- Floating UI Elements -->
                            <div class="absolute top-10 left-10 glass p-4 rounded-lg w-48 animate-float hidden md:block">
                                <div class="text-xs text-slate-200 mb-1">Installation Status</div>
                                <div class="text-lg font-bold text-yellow-400">Booking Now</div>
                            </div>
                            
                            <div class="absolute bottom-10 right-10 glass p-4 rounded-lg w-48 animate-float-delayed hidden md:block">
                                <div class="text-xs text-slate-200 mb-1">Premium Lighting</div>
                                <div class="text-white flex items-center gap-2">
                                    <div class="w-2 h-2 rounded-full bg-yellow-400 shadow-[0_0_10px_#fef08a]"></div> Custom Design
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 2. SERVICES SECTION -->
        <section id="services" class="py-24 border-y border-white/5 bg-white/[0.02]" x-data="{ shown: false }" x-intersect.margin.-100px="shown = true">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div :class="shown ? 'reveal-visible' : 'reveal-hidden'">
                    <x-ui.section-title 
                        title="Luxury Holiday Installations" 
                        subtitle="From elegant residential displays to grand commercial experiences, our professional designers craft the perfect festive atmosphere."
                    />
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-16" :class="shown ? 'reveal-visible' : 'reveal-hidden'" style="transition-delay: 200ms;">
                    <!-- Service 1 -->
                    <x-ui.glass-card>
                        <div class="w-12 h-12 rounded-lg bg-yellow-500/20 flex items-center justify-center mb-6 border border-yellow-500/30">
                            <svg class="w-6 h-6 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Residential Decorating</h3>
                        <p class="text-slate-300 leading-relaxed">Bespoke exterior and interior designs that turn your home into a stunning holiday showcase.</p>
                    </x-ui.glass-card>

                    <!-- Service 2 -->
                    <x-ui.glass-card>
                        <div class="w-12 h-12 rounded-lg bg-emerald-500/20 flex items-center justify-center mb-6 border border-emerald-500/30">
                            <svg class="w-6 h-6 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Commercial Decorating</h3>
                        <p class="text-slate-300 leading-relaxed">Impressive, large-scale holiday installations for shopping centers, offices, and storefronts.</p>
                    </x-ui.glass-card>

                    <!-- Service 3 -->
                    <x-ui.glass-card>
                        <div class="w-12 h-12 rounded-lg bg-white/10 flex items-center justify-center mb-6 border border-white/20">
                            <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" /></svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Holiday Lighting</h3>
                        <p class="text-slate-300 leading-relaxed">Professional-grade LED lighting displays that offer brilliant colors and energy efficiency.</p>
                    </x-ui.glass-card>

                    <!-- Service 4 -->
                    <x-ui.glass-card>
                        <div class="w-12 h-12 rounded-lg bg-yellow-500/20 flex items-center justify-center mb-6 border border-yellow-500/30">
                            <svg class="w-6 h-6 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" /></svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Corporate Christmas Experiences</h3>
                        <p class="text-slate-300 leading-relaxed">Complete holiday theming for corporate events, lobbies, and office celebrations.</p>
                    </x-ui.glass-card>

                    <!-- Service 5 -->
                    <x-ui.glass-card>
                        <div class="w-12 h-12 rounded-lg bg-emerald-500/20 flex items-center justify-center mb-6 border border-emerald-500/30">
                            <svg class="w-6 h-6 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" /></svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Professional Designers</h3>
                        <p class="text-slate-300 leading-relaxed">Collaborate with our expert design team to create a unique holiday aesthetic tailored to your brand.</p>
                    </x-ui.glass-card>

                    <!-- Service 6 -->
                    <x-ui.glass-card>
                        <div class="w-12 h-12 rounded-lg bg-white/10 flex items-center justify-center mb-6 border border-white/20">
                            <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Seasonal Planning</h3>
                        <p class="text-slate-300 leading-relaxed">Turnkey service from initial design concept through installation, maintenance, and post-season removal.</p>
                    </x-ui.glass-card>
                </div>
            </div>
        </section>

        <!-- 3. SHOWCASE SECTION -->
        <section id="showcase" class="py-24 border-y border-white/5 bg-gradient-to-b from-transparent to-emerald-900/20" x-data="{ shown: false }" x-intersect.margin.-100px="shown = true">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col-reverse gap-16 lg:gap-0 lg:grid lg:grid-cols-2 lg:gap-16 items-center">
                    <div :class="shown ? 'reveal-visible' : 'reveal-hidden'">
                        <h2 class="text-3xl md:text-5xl font-bold font-display tracking-tight text-white mb-6">
                            Unmatched <br/><span class="text-gradient">Elegance & Scale</span>
                        </h2>
                        <p class="text-lg text-slate-300 mb-8 leading-relaxed">
                            Whether you manage a sprawling commercial property or a luxury residence, our premium decorating service delivers breathtaking results without the hassle. We handle everything from custom design to meticulous installation.
                        </p>
                        
                        <div class="space-y-6">
                            <div class="flex gap-4">
                                <div class="w-10 h-10 rounded-full bg-yellow-500/20 flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                </div>
                                <div>
                                    <h4 class="text-white font-semibold mb-1">Premium Materials</h4>
                                    <p class="text-sm text-slate-400">We exclusively use commercial-grade LED lighting and lifelike foliage.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="w-10 h-10 rounded-full bg-emerald-500/20 flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                </div>
                                <div>
                                    <h4 class="text-white font-semibold mb-1">Zero Downtime</h4>
                                    <p class="text-sm text-slate-400">Rapid, discreet installation ensuring minimal disruption to your property.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="relative" :class="shown ? 'reveal-visible' : 'reveal-hidden'" style="transition-delay: 300ms;">
                        <div class="absolute inset-0 bg-gradient-to-r from-yellow-500/20 to-emerald-500/20 rounded-3xl blur-3xl opacity-50"></div>
                        <div class="relative glass p-4 rounded-3xl border border-white/10 shadow-2xl overflow-hidden">
                            <img src="/commercial_christmas_decor_1782571623504.png" alt="Commercial Decorating" class="rounded-2xl w-full h-auto" onerror="this.src='https://images.unsplash.com/photo-1544816155-12df9643f363?auto=format&fit=crop&q=80'">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. DOMAIN ACQUISITION SECTION -->
        <section id="acquisition" class="py-24 border-t border-white/10 bg-[#020617]" x-data="{ shown: false }" x-intersect.margin.-100px="shown = true">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
                    <!-- Image on Left -->
                    <div class="mb-16 lg:mb-0 relative" :class="shown ? 'reveal-visible' : 'reveal-hidden'">
                        <div class="absolute inset-0 bg-gradient-to-r from-emerald-500/20 to-yellow-500/20 rounded-3xl blur-3xl opacity-50"></div>
                        <div class="relative glass p-4 rounded-3xl border border-white/10 shadow-2xl overflow-hidden">
                            <img src="/residential_decor.png" alt="Residential Decorating" class="rounded-2xl w-full h-auto" onerror="this.src='https://images.unsplash.com/photo-1544816155-12df9643f363?auto=format&fit=crop&q=80'">
                        </div>
                    </div>

                    <!-- Content on Right -->
                    <div class="glass rounded-3xl p-10 md:p-12 border border-white/10 relative overflow-hidden" :class="shown ? 'reveal-visible' : 'reveal-hidden'" style="transition-delay: 200ms;">
                        <div class="absolute inset-0 bg-gradient-to-br from-yellow-500/5 to-emerald-500/5 z-0"></div>
                        
                        <div class="relative z-10">
                            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-white/5 border border-white/10 mb-8">
                                <svg class="w-8 h-8 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>
                            </div>
                            
                            <h2 class="text-3xl md:text-4xl font-display font-bold text-white mb-4">
                                Strategic Brand Opportunity
                            </h2>
                            
                            <p class="text-lg text-slate-300 mb-10 leading-relaxed">
                                <span class="text-white font-medium">ChristmasDecoratingService.com</span> and its associated digital brand assets may be available for acquisition by qualified organizations seeking category-defining branding before the holiday season.
                            </p>
                            
                            <div class="flex flex-col sm:flex-row items-center gap-4">
                                <a href="{{ route('acquisition.show') }}" class="inline-flex items-center justify-center px-8 py-4 text-sm font-semibold text-white bg-white/10 border border-white/20 rounded-full hover:bg-white/20 hover:border-white/30 transition-all duration-300 backdrop-blur-md">
                                    Acquisition Inquiry
                                    <svg class="ml-2 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('typewriter', () => ({
                text: 'Own the Definitive Brand for <br class="hidden md:block"/><span class="text-gradient">Christmas Decorating</span>',
                displayedText: '',
                start() {
                    let i = 0;
                    let isTag = false;
                    const type = () => {
                        if (i < this.text.length) {
                            let char = this.text.charAt(i);
                            if (char === '<') isTag = true;
                            
                            this.displayedText += char;
                            i++;
                            
                            if (isTag) {
                                while (i < this.text.length && this.text.charAt(i-1) !== '>') {
                                    this.displayedText += this.text.charAt(i);
                                    i++;
                                }
                                isTag = false;
                                type();
                            } else {
                                setTimeout(type, 60);
                            }
                        }
                    };
                    setTimeout(type, 500);
                }
            }));
        });
    </script>
</x-layouts.app>
