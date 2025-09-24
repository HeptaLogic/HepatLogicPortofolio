<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Portfolio') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#0b1530] text-white antialiased">
    <!-- Top contact bar -->
    <div class="bg-[#0a1228] text-white/90 text-[13px]">
        <div class="max-w-7xl mx-auto px-4 py-2 flex items-center justify-between">
            <div class="flex items-center gap-6">
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-4 h-4 text-blue-400">
                        <path
                            d="M2.25 6.75c0-1.243 1.007-2.25 2.25-2.25h3.5c.966 0 1.818.62 2.121 1.539l.89 2.672a2.25 2.25 0 01-.54 2.297l-1.116 1.117a16.5 16.5 0 006.364 6.364l1.116-1.116a2.25 2.25 0 012.298-.54l2.671.89A2.25 2.25 0 0121.5 18v3.5a2.25 2.25 0 01-2.25 2.25H18C9.716 23.75 2.25 16.284 2.25 8V6.75z" />
                    </svg>
                    <span>(000) 000-0000</span>
                </div>
                <div class="hidden sm:flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-4 h-4 text-blue-400">
                        <path
                            d="M1.5 6.75A2.25 2.25 0 013.75 4.5h16.5a2.25 2.25 0 012.25 2.25v.243a2.25 2.25 0 01-.879 1.8l-7.5 5.625a2.25 2.25 0 01-2.742 0L2.38 8.793A2.25 2.25 0 011.5 6.993V6.75z" />
                        <path
                            d="M22.5 8.25v9a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 17.25v-9l8.379 6.29a3.75 3.75 0 004.242 0L22.5 8.25z" />
                    </svg>
                    <span>example@gmail.com</span>
                </div>
                <div class="hidden md:flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-4 h-4 text-blue-400">
                        <path fill-rule="evenodd"
                            d="M11.47.659a.75.75 0 01.997 0l9 8.25a.75.75 0 01-1.004 1.112L21 9.277V21a2.25 2.25 0 01-2.25 2.25h-4.5a.75.75 0 01-.75-.75v-5.25a1.5 1.5 0 00-1.5-1.5h-1.5a1.5 1.5 0 00-1.5 1.5v5.25a.75.75 0 01-.75.75h-4.5A2.25 2.25 0 013 21V9.277l-.463.744a.75.75 0 11-1.004-1.112l9-8.25z"
                            clip-rule="evenodd" />
                    </svg>
                    <span>2464 Royal Ln. Mesa, New Jersey 45463</span>
                </div>
            </div>
            <div class="hidden sm:flex items-center gap-3">
                <a href="#" class="w-8 h-8 rounded-full bg-white/10 hover:bg-white/20 grid place-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                        <path
                            d="M22.675 0h-21.35C.595 0 0 .594 0 1.326v21.348C0 23.406.595 24 1.326 24h11.495v-9.294H9.691V11.01h3.13V8.41c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.098 2.794.142v3.24l-1.918.001c-1.504 0-1.796.716-1.796 1.766v2.316h3.588l-.467 3.696h-3.121V24h6.116C23.406 24 24 23.406 24 22.674V1.326C24 .594 23.406 0 22.675 0z" />
                    </svg>
                </a>
                <a href="#" class="w-8 h-8 rounded-full bg-white/10 hover:bg-white/20 grid place-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                        <path
                            d="M23.954 4.569c-.885.392-1.83.656-2.825.775 1.014-.611 1.794-1.574 2.163-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-2.723 0-4.928 2.206-4.928 4.93 0 .386.045.762.127 1.124C7.69 8.095 4.066 6.13 1.64 3.161c-.423.722-.666 1.561-.666 2.475 0 1.708.87 3.213 2.19 4.099-.807-.025-1.566-.248-2.229-.616v.062c0 2.386 1.697 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.376 4.6 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.402 4.768 2.219 7.557 2.219 9.054 0 14.002-7.496 14.002-13.986 0-.21 0-.423-.016-.633.961-.695 1.8-1.562 2.46-2.549z" />
                    </svg>
                </a>
                <a href="#" class="w-8 h-8 rounded-full bg-white/10 hover:bg-white/20 grid place-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-4 h-4">
                        <path
                            d="M12 2.163c3.204 0 3.584.012 4.85.07 1.17.056 1.97.24 2.43.403a4.92 4.92 0 011.77 1.153 4.92 4.92 0 011.153 1.77c.163.46.347 1.26.403 2.43.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.056 1.17-.24 1.97-.403 2.43a4.92 4.92 0 01-1.153 1.77 4.92 4.92 0 01-1.77 1.153c-.46.163-1.26.347-2.43.403-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.17-.056-1.97-.24-2.43-.403a4.92 4.92 0 01-1.77-1.153 4.92 4.92 0 01-1.153-1.77c-.163-.46-.347-1.26-.403-2.43C2.175 15.584 2.163 15.204 2.163 12s.012-3.584.07-4.85c.056-1.17.24-1.97.403-2.43a4.92 4.92 0 011.153-1.77 4.92 4.92 0 011.77-1.153c.46-.163 1.26-.347 2.43-.403C8.416 2.175 8.796 2.163 12 2.163zm0 3.24a6.597 6.597 0 100 13.194 6.597 6.597 0 000-13.194zm0 10.89a4.293 4.293 0 110-8.586 4.293 4.293 0 010 8.586zm6.406-11.845a1.54 1.54 0 11-3.082 0 1.54 1.54 0 013.082 0z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <header class="border-b border-white/10 bg-[#0b1530]/80 backdrop-blur">
        <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">
            <a href="/" class="flex items-center gap-2">
                <span
                    class="w-9 h-9 rounded-full bg-blue-500 grid place-items-center text-white font-semibold">IT</span>
                <span class="font-semibold">HEPTALOGIC</span>
            </a>
            <nav class="hidden md:flex items-center gap-6 text-white/80">
                <a href="#home" class="hover:text-white">Home</a>
                <a href="#services" class="hover:text-white">Tentang Kami</a>
                <a href="#projects" class="hover:text-white">Layanan</a>
                <a href="#blogs" class="hover:text-white">Projects</a>
                <a href="#about" class="hover:text-white">Kontak</a>
            </nav>
            <a href="#"
                class="hidden sm:inline-block px-5 py-2 rounded-full bg-blue-500 hover:bg-blue-600 text-white text-sm font-medium shadow-md">Get
                A Quote</a>
        </div>
    </header>

    <!-- Hero -->
    <section id="home" class="relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 py-16 md:py-24 grid md:grid-cols-2 gap-10 items-center">
            <div>
                <p class="text-blue-400 text-sm mb-2">Solusi Digital Terpercaya</p>
                <h1 class="text-4xl md:text-5xl font-semibold leading-tight mb-3" data-split-done>
                    Membangun Website dan Aplikasi Profesional
                </h1>
                <p class="text-white/80 italic mb-4">“Dari Logika, Hadirkan Solusi.”</p>
                <p class="text-white/70 mb-8 max-w-xl">Hepta Logic menghadirkan layanan pengembangan website dan aplikasi dengan desain modern, teknologi terbaru, dan hasil yang dapat diandalkan.</p>
                <div class="flex items-center gap-4">
                    <a href="#services"
                        class="px-6 py-3 rounded-full bg-blue-500 hover:bg-blue-600 text-white font-medium inline-flex items-center gap-2">
                        <span>Lihat Layanan</span>
                        <span class="inline-grid place-items-center w-5 h-5 rounded-full bg-white/20">→</span>
                    </a>
                    <a href="#about" class="px-6 py-3 rounded-full bg-white/10 hover:bg-white/20 text-white font-medium">Konsultasi Gratis</a>
                </div>
            </div>
            <div class="relative group">
                <div class="rounded-lg overflow-hidden border border-white/10 shadow-[0_10px_25px_rgba(0,0,0,0.3)] transition-all duration-500 ease-out group-hover:shadow-[0_20px_40px_rgba(0,0,0,0.4)] group-hover:border-blue-400/30">
                    <img src="https://images.unsplash.com/photo-1606857521015-7f9fcf423740?q=80&w=1200&auto=format&fit=crop"
                        alt="Team" class="w-full h-[420px] object-cover transition-all duration-500 ease-out group-hover:scale-105 group-hover:brightness-110">
                </div>
            </div>
        </div>

        <!-- Service ribbon -->
        <div class="bg-blue-600">
            <div
                class="max-w-7xl mx-auto px-4 py-4 grid grid-cols-2 md:grid-cols-4 gap-3 text-center text-white font-medium">
                <div>Website Development</div>
                <div>UX/UI Design</div>
                <div>Graphics Design</div>
                <div class="hidden md:block">App Development</div>
            </div>
        </div>
    </section>



    <!-- About Section -->
    <section id="about" class="relative bg-white text-[#0b1530]">
        <div class="max-w-7xl mx-auto px-4 py-20 grid md:grid-cols-2 gap-12 items-center">
            <!-- Collage -->
            <div class="relative">
                <div class="relative grid grid-cols-2 gap-4 w-full max-w-[540px]">
                    <div class="rounded-[2.2rem] overflow-hidden border-2 border-blue-500/30 shadow-md">
                        <img class="w-full h-48 md:h-56 object-cover"
                            src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?q=80&w=800&auto=format&fit=crop"
                            alt="team-1">
                    </div>
                    <div class="rounded-[2.2rem] overflow-hidden border-2 border-blue-500/30 shadow-md">
                        <img class="w-full h-48 md:h-56 object-cover"
                            src="https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=800&auto=format&fit=crop"
                            alt="team-2">
                    </div>
                    <div class="rounded-[2.2rem] overflow-hidden border-2 border-blue-500/30 shadow-md">
                        <img class="w-full h-48 md:h-56 object-cover"
                            src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?q=80&w=800&auto=format&fit=crop"
                            alt="team-3">
                    </div>
                    <div class="rounded-[2.2rem] overflow-hidden border-2 border-blue-500/30 shadow-md">
                        <img class="w-full h-48 md:h-56 object-cover"
                            src="https://images.unsplash.com/photo-1557426272-fc759fdf7a8d?q=80&w=800&auto=format&fit=crop"
                            alt="team-4">
                    </div>
                </div>

                <!-- Badge -->
                <div class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2">
                    <div
                        class="w-24 h-24 rounded-full bg-white shadow-lg grid place-items-center border-2 border-blue-500">
                        <div
                            class="w-16 h-16 rounded-full bg-blue-600 grid place-items-center text-white text-xs font-semibold">
                            10+<br />Years</div>
                    </div>
                </div>

                <!-- Decorative stars -->
                <div class="absolute -left-6 bottom-10 text-blue-600">
                    <div class="relative">
                        <span class="inline-block w-3 h-3 bg-blue-600 rotate-45"></span>
                        <span class="inline-block w-2 h-2 bg-blue-400 rotate-45 ml-3"></span>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div>
                <p class="text-blue-500 text-sm mb-2">// About Us</p>
                <h2 class="text-3xl md:text-4xl font-semibold leading-tight mb-4" data-split>
                    Transforming <span class="text-blue-600">Ideas</span><br class="hidden md:block" /> into <span
                        class="text-blue-600">Digital Reality</span>
                </h2>
                <p class="text-slate-600 mb-8 max-w-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore.</p>

                <!-- Metrics -->
                <div class="grid grid-cols-3 gap-6 mb-10">
                    <div>
                        <div class="text-xl font-semibold text-blue-600">150+</div>
                        <div class="text-[12px] text-slate-500">Team Members</div>
                    </div>
                    <div>
                        <div class="text-xl font-semibold text-blue-600">2000+</div>
                        <div class="text-[12px] text-slate-500">Happy Clients</div>
                    </div>
                    <div>
                        <div class="text-xl font-semibold text-blue-600">99%</div>
                        <div class="text-[12px] text-slate-500">Client Satisfaction</div>
                    </div>
                </div>

                <!-- Signature -->
                <div>
                    <div class="font-medium text-lg mb-1">Jenny Alexander</div>
                    <div class="text-[12px] text-slate-500">Jenny Alexander • CEO</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="relative bg-[#f6f8ff]">
        <div
            class="absolute inset-x-0 top-4 select-none pointer-events-none text-[#0b1530]/5 font-extrabold tracking-tight text-6xl md:text-8xl text-center">
            OUR SERVICES</div>
        <div class="max-w-7xl mx-auto px-4 py-20">
            <div class="flex items-start justify-between gap-6 mb-10">
                <div>
                    <h2 class="text-[28px] md:text-4xl font-semibold text-[#0b1530] leading-snug" data-split>Services
                        We Provide
                        to<br /><span class="text-blue-600">Elevate Your Business</span></h2>
                </div>
                <a href="#"
                    class="shrink-0 h-10 px-5 rounded-full bg-blue-600 hover:bg-blue-700 text-white text-sm grid place-items-center shadow-md">View
                    All Services</a>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="bg-white rounded-2xl shadow-sm border border-slate-200/70 overflow-hidden">
                    <div class="p-6">
                        <div
                            class="w-12 h-12 rounded-xl bg-blue-600/10 text-blue-600 grid place-items-center mb-4 shadow-inner">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6">
                                <path d="M4.5 5.25A2.25 2.25 0 016.75 3h10.5A2.25 2.25 0 0119.5 5.25v.75h-15v-.75z" />
                                <path fill-rule="evenodd"
                                    d="M3 7.5h18v9.75A2.25 2.25 0 0118.75 19.5H5.25A2.25 2.25 0 013 17.25V7.5zm5.25 9a.75.75 0 000 1.5h7.5a.75.75 0 000-1.5h-7.5z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="font-semibold text-[#0b1530] mb-2">Website Development</h3>
                        <p class="text-slate-500 text-sm leading-6 mb-5">Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor incididunt ut labore...</p>
                        <a href="#" class="text-blue-600 text-sm inline-flex items-center gap-2">Learn more
                            <span>→</span></a>
                    </div>
                    <div class="h-[3px] bg-gradient-to-r from-blue-600 to-blue-400"></div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-2xl shadow-sm border border-slate-200/70 overflow-hidden">
                    <div class="p-6">
                        <div
                            class="w-12 h-12 rounded-xl bg-blue-600/10 text-blue-600 grid place-items-center mb-4 shadow-inner">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6">
                                <path
                                    d="M7.5 1.5A2.25 2.25 0 005.25 3.75v16.5A2.25 2.25 0 007.5 22.5h9a2.25 2.25 0 002.25-2.25V3.75A2.25 2.25 0 0016.5 1.5h-9zM9 3.75h6v.75H9v-.75zM12 19.5a1.125 1.125 0 100-2.25 1.125 1.125 0 000 2.25z" />
                            </svg>
                        </div>
                        <h3 class="font-semibold text-[#0b1530] mb-2">Mobile App Development</h3>
                        <p class="text-slate-500 text-sm leading-6 mb-5">Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor incididunt ut labore...</p>
                        <a href="#" class="text-blue-600 text-sm inline-flex items-center gap-2">Learn more
                            <span>→</span></a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-2xl shadow-sm border border-slate-200/70 overflow-hidden">
                    <div class="p-6">
                        <div
                            class="w-12 h-12 rounded-xl bg-blue-600/10 text-blue-600 grid place-items-center mb-4 shadow-inner">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6">
                                <path
                                    d="M3 6.75A2.25 2.25 0 015.25 4.5h13.5A2.25 2.25 0 0121 6.75v10.5A2.25 2.25 0 0118.75 19.5H5.25A2.25 2.25 0 013 17.25V6.75z" />
                                <path d="M7.5 7.5h3v3h-3v-3zM13.5 7.5h3v3h-3v-3zM7.5 13.5h9v3h-9v-3z" />
                            </svg>
                        </div>
                        <h3 class="font-semibold text-[#0b1530] mb-2">UI/UX Design</h3>
                        <p class="text-slate-500 text-sm leading-6 mb-5">Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor incididunt ut labore...</p>
                        <a href="#" class="text-blue-600 text-sm inline-flex items-center gap-2">Learn more
                            <span>→</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Work Process Section -->
    <section id="process" class="relative bg-white">
        <div
            class="absolute inset-x-0 top-32 select-none pointer-events-none text-[#0b1530]/5 font-extrabold tracking-tight text-6xl md:text-8xl text-center">
            WORK PROCESS</div>
        <div class="max-w-7xl mx-auto px-4 py-20 text-center">
            <h2 class="text-[28px] md:text-4xl font-semibold text-[#0b1530] mb-12" data-split>Our Proven <span
                    class="text-blue-600">Work Process</span></h2>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 md:gap-6 items-start relative">
                <div class="hidden md:block absolute left-0 right-0 top-8 h-px bg-slate-200"></div>
                <!-- Step 1 -->
                <div class="flex flex-col items-center">
                    <div class="relative mb-4">
                        <div
                            class="w-16 h-16 rounded-full bg-blue-600 text-white grid place-items-center ring-8 ring-blue-600/10">
                            <!-- chat icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-7 h-7">
                                <path
                                    d="M1.5 6.75A2.25 2.25 0 013.75 4.5h12.5A2.25 2.25 0 0118.5 6.75v5A2.25 2.25 0 0116.25 14.5H7.06l-3.138 2.351A.75.75 0 012 16.25v-9.5z" />
                                <path
                                    d="M6.75 7.5h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 010-1.5zM6.75 10.5h5a.75.75 0 010 1.5h-5a.75.75 0 010-1.5z" />
                            </svg>
                        </div>
                        <div
                            class="absolute -right-4 bottom-0 bg-[#0b1530] text-white text-xs font-semibold rounded-full px-2 py-1 shadow">
                            01</div>
                    </div>
                    <div class="font-semibold text-[#0b1530] mb-1">Consultation</div>
                    <div class="text-slate-500 text-sm leading-6">Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit</div>
                </div>

                <!-- Step 2 -->
                <div class="flex flex-col items-center">
                    <div class="relative mb-4">
                        <div
                            class="w-16 h-16 rounded-full bg-blue-600 text-white grid place-items-center ring-8 ring-blue-600/10">
                            <!-- bulb icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-7 h-7">
                                <path
                                    d="M12 2.25a6.75 6.75 0 00-3.9 12.309c.31.22.525.54.6.905l.2 1a1.125 1.125 0 001.107.881h3.986a1.125 1.125 0 001.107-.881l.2-1a1.5 1.5 0 01.6-.905A6.75 6.75 0 0012 2.25z" />
                                <path d="M9 19.5h6a.75.75 0 010 1.5H9a.75.75 0 010-1.5z" />
                            </svg>
                        </div>
                        <div
                            class="absolute -right-4 bottom-0 bg-[#0b1530] text-white text-xs font-semibold rounded-full px-2 py-1 shadow">
                            02</div>
                    </div>
                    <div class="font-semibold text-[#0b1530] mb-1">Strategy</div>
                    <div class="text-slate-500 text-sm leading-6">Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit</div>
                </div>

                <!-- Step 3 -->
                <div class="flex flex-col items-center">
                    <div class="relative mb-4">
                        <div
                            class="w-16 h-16 rounded-full bg-blue-600 text-white grid place-items-center ring-8 ring-blue-600/10">
                            <!-- stack icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-7 h-7">
                                <path d="M12 3l8.485 4.243L12 11.485 3.515 7.243 12 3z" />
                                <path d="M3.515 12.257L12 16.5l8.485-4.243" />
                                <path d="M3.515 16.257L12 20.5l8.485-4.243" />
                            </svg>
                        </div>
                        <div
                            class="absolute -right-4 bottom-0 bg-[#0b1530] text-white text-xs font-semibold rounded-full px-2 py-1 shadow">
                            03</div>
                    </div>
                    <div class="font-semibold text-[#0b1530] mb-1">Implementation</div>
                    <div class="text-slate-500 text-sm leading-6">Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit</div>
                </div>

                <!-- Step 4 -->
                <div class="flex flex-col items-center">
                    <div class="relative mb-4">
                        <div
                            class="w-16 h-16 rounded-full bg-blue-600 text-white grid place-items-center ring-8 ring-blue-600/10">
                            <!-- smile icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-7 h-7">
                                <path fill-rule="evenodd"
                                    d="M12 2.25a9.75 9.75 0 100 19.5 9.75 9.75 0 000-19.5zM9 10.5a1.125 1.125 0 110-2.25 1.125 1.125 0 010 2.25zm6 0a1.125 1.125 0 110-2.25 1.125 1.125 0 010 2.25zM7.875 13.5a.75.75 0 01.75.75 3.375 3.375 0 006.75 0 .75.75 0 111.5 0 4.875 4.875 0 01-9.75 0 .75.75 0 01.75-.75z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div
                            class="absolute -right-4 bottom-0 bg-[#0b1530] text-white text-xs font-semibold rounded-full px-2 py-1 shadow">
                            04</div>
                    </div>
                    <div class="font-semibold text-[#0b1530] mb-1">Final Result</div>
                    <div class="text-slate-500 text-sm leading-6">Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section id="why" class="relative bg-[#0d1835] text-white">
        <!-- Top ribbon -->
        <div class="bg-[#3c6cf3] text-white/95 text-sm">
            <div id="rb-top"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 py-16 md:py-20 relative">
            <!-- Watermark heading -->
            <div
                class="absolute -top-6 left-4 md:left-6 text-6xl md:text-8xl tracking-tight text-white/5 select-none pointer-events-none">
                WHY CHOOSE US</div>

            <div class="flex items-start justify-between mb-8">
                <div>
                    <p class="text-white/70 text-sm mb-2">Why Choose Us</p>
                    <h2 class="text-3xl md:text-4xl font-semibold leading-snug" data-split>Why Trust Us for<br />Your
                        IT Needs?
                    </h2>
                </div>
                <div id="magnet-cta"></div>
            </div>

            <div class="grid lg:grid-cols-2 gap-10 items-start">
                <!-- Video / image card -->
                <div>
                    <div
                        class="rounded-xl overflow-hidden bg-white/5 border border-white/10 shadow-xl w-full max-w-[640px]">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1552581234-26160f608093?q=80&w=1200&auto=format&fit=crop"
                                alt="Team meeting" class="w-full h-[300px] md:h-[340px] object-cover">
                            <button
                                class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-14 h-14 rounded-full bg-white/90 text-[#0d1835] grid place-items-center shadow">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-6 h-6">
                                    <path d="M8.25 5.5v13l10.5-6.5-10.5-6.5z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Features 2x2 -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-10">
                    <div class="flex items-start gap-4">
                        <div class="w-11 h-11 rounded-lg bg-white/10 grid place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6">
                                <path
                                    d="M12 2.25a9.75 9.75 0 100 19.5 9.75 9.75 0 000-19.5zM9 12h6a.75.75 0 010 1.5H9A.75.75 0 019 12z" />
                            </svg>
                        </div>
                        <div>
                            <div class="font-semibold">Affordable Price</div>
                            <p class="text-white/70 text-xs leading-6 max-w-[240px]">Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-11 h-11 rounded-lg bg-white/10 grid place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6">
                                <path
                                    d="M12 2.25a9.75 9.75 0 100 19.5 9.75 9.75 0 000-19.5zM8.625 9.75a.75.75 0 111.5 0 .75.75 0 01-1.5 0zm5.25 0a.75.75 0 111.5 0 .75.75 0 01-1.5 0zM8.25 13.5a3.75 3.75 0 007.5 0 .75.75 0 111.5 0 5.25 5.25 0 01-10.5 0 .75.75 0 011.5 0z" />
                            </svg>
                        </div>
                        <div>
                            <div class="font-semibold">Professional Team</div>
                            <p class="text-white/70 text-xs leading-6 max-w-[240px]">Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-11 h-11 rounded-lg bg-white/10 grid place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6">
                                <path d="M6 2.25h12v1.5H6v-1.5zM6 6h12v1.5H6V6zM6 9.75h12V15a6 6 0 11-12 0V9.75z" />
                            </svg>
                        </div>
                        <div>
                            <div class="font-semibold">18+ Years Experience</div>
                            <p class="text-white/70 text-xs leading-6 max-w-[240px]">Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-11 h-11 rounded-lg bg-white/10 grid place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6">
                                <path
                                    d="M12 2.25l2.598 5.262 5.81.845-4.204 4.098.993 5.79L12 15.75l-5.197 2.495.993-5.79L3.592 8.357l5.81-.845L12 2.25z" />
                            </svg>
                        </div>
                        <div>
                            <div class="font-semibold">Award Winning</div>
                            <p class="text-white/70 text-xs leading-6 max-w-[240px]">Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom ribbon -->
        <div class="bg-[#3c6cf3] text-white/95 text-sm">
            <div id="rb-bottom"></div>
        </div>
    </section>
    <!-- Projects Section -->
    <section id="projects" class="relative bg-white">
        <div
            class="absolute inset-x-0 top-6 select-none pointer-events-none text-[#0b1530]/5 font-extrabold tracking-tight text-6xl md:text-8xl text-center">
            LATEST PROJECTS</div>
        <div class="max-w-7xl mx-auto px-4 py-20">
            <div class="text-center mb-10">
                <p class="text-blue-500 text-sm mb-2">// Our Latest Projects</p>
                <h2 class="text-3xl md:text-4xl font-semibold text-[#0b1530]" data-split>
                    Explore Our Showcase of
                    <br class="hidden md:block" />
                    <span class="text-blue-600">Featured Works</span>
                </h2>
            </div>

            <div class="grid md:grid-cols-2 gap-6 mb-10">
                <!-- Card 1 -->
                <article class="relative rounded-2xl overflow-hidden shadow-sm border border-slate-200/80">
                    <img class="w-full h-[260px] md:h-[300px] object-cover"
                        src="https://images.unsplash.com/photo-1547658719-29fa03e284e8?q=80&w=1200&auto=format&fit=crop"
                        alt="project-1">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                    <div class="absolute left-0 right-0 bottom-0 p-5 text-white">
                        <h3 class="font-semibold leading-snug">Care Connect - Doctor Appointment App</h3>
                        <div class="mt-3 flex flex-wrap gap-2 text-[11px]">
                            <span class="px-2 py-1 rounded-full bg-white/15">UI/UX Design</span>
                            <span class="px-2 py-1 rounded-full bg-white/15">App Design</span>
                            <span class="px-2 py-1 rounded-full bg-white/15">Wireframe</span>
                        </div>
                    </div>
                    <button
                        class="absolute right-4 bottom-4 w-12 h-12 rounded-full bg-blue-600 hover:bg-blue-700 grid place-items-center text-white shadow-md">↗</button>
                </article>

                <!-- Card 2 -->
                <article class="relative rounded-2xl overflow-hidden shadow-sm border border-slate-200/80">
                    <img class="w-full h-[260px] md:h-[300px] object-cover"
                        src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1200&auto=format&fit=crop"
                        alt="project-2">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                    <div class="absolute left-0 right-0 bottom-0 p-5 text-white">
                        <h3 class="font-semibold leading-snug">Dental - Dentist and Dental Clinic Website UI/UX Design
                        </h3>
                        <div class="mt-3 flex flex-wrap gap-2 text-[11px]">
                            <span class="px-2 py-1 rounded-full bg-white/15">UI/UX Design</span>
                            <span class="px-2 py-1 rounded-full bg-white/15">Web Design</span>
                            <span class="px-2 py-1 rounded-full bg-white/15">Wireframe</span>
                        </div>
                    </div>
                    <button
                        class="absolute right-4 bottom-4 w-12 h-12 rounded-full bg-blue-600 hover:bg-blue-700 grid place-items-center text-white shadow-md">↗</button>
                </article>

                <!-- Card 3 -->
                <article class="relative rounded-2xl overflow-hidden shadow-sm border border-slate-200/80">
                    <img class="w-full h-[260px] md:h-[300px] object-cover"
                        src="https://images.unsplash.com/photo-1549921296-3ecf9f10d0f4?q=80&w=1200&auto=format&fit=crop"
                        alt="project-3">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                    <div class="absolute left-0 right-0 bottom-0 p-5 text-white">
                        <h3 class="font-semibold leading-snug">Car Rental - Car Rental Booking Mobile App</h3>
                        <div class="mt-3 flex flex-wrap gap-2 text-[11px]">
                            <span class="px-2 py-1 rounded-full bg-white/15">UI/UX Design</span>
                            <span class="px-2 py-1 rounded-full bg-white/15">App Design</span>
                            <span class="px-2 py-1 rounded-full bg-white/15">Wireframe</span>
                        </div>
                    </div>
                    <button
                        class="absolute right-4 bottom-4 w-12 h-12 rounded-full bg-blue-600 hover:bg-blue-700 grid place-items-center text-white shadow-md">↗</button>
                </article>

                <!-- Card 4 -->
                <article class="relative rounded-2xl overflow-hidden shadow-sm border border-slate-200/80">
                    <img class="w-full h-[260px] md:h-[300px] object-cover"
                        src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?q=80&w=1200&auto=format&fit=crop"
                        alt="project-4">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                    <div class="absolute left-0 right-0 bottom-0 p-5 text-white">
                        <h3 class="font-semibold leading-snug">Hotel Booking - Landing Page UI/UX Design</h3>
                        <div class="mt-3 flex flex-wrap gap-2 text-[11px]">
                            <span class="px-2 py-1 rounded-full bg-white/15">UI/UX Design</span>
                            <span class="px-2 py-1 rounded-full bg-white/15">Landing Page</span>
                            <span class="px-2 py-1 rounded-full bg-white/15">Wireframe</span>
                        </div>
                    </div>
                    <button
                        class="absolute right-4 bottom-4 w-12 h-12 rounded-full bg-blue-600 hover:bg-blue-700 grid place-items-center text-white shadow-md">↗</button>
                </article>
            </div>

            <div class="text-center">
                <a href="#"
                    class="inline-flex h-10 px-5 rounded-full bg-[#3c6cf3] hover:bg-[#305ee6] text-white text-sm items-center justify-center shadow-md">View
                    All Works</a>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="bg-[#0a1228] text-white border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4 py-16">
            <!-- Main Footer Content -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <!-- Company Info -->
                <div class="lg:col-span-2">
                    <div class="flex items-center gap-2 mb-6">
                        <span class="w-9 h-9 rounded-full bg-blue-500 grid place-items-center text-white font-semibold">IT</span>
                        <span class="font-semibold text-xl">IT Company.</span>
                    </div>
                    <p class="text-white/70 text-sm leading-6 mb-6 max-w-md">
                        Transforming ideas into digital reality with cutting-edge technology solutions. 
                        We deliver exceptional IT services that drive business growth and innovation.
                    </p>
                    <!-- Social Links -->
                    <div class="flex items-center gap-3">
                        <a href="#" class="w-10 h-10 rounded-full bg-white/10 hover:bg-blue-500 transition-colors grid place-items-center group">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 group-hover:scale-110 transition-transform">
                                <path d="M22.675 0h-21.35C.595 0 0 .594 0 1.326v21.348C0 23.406.595 24 1.326 24h11.495v-9.294H9.691V11.01h3.13V8.41c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.098 2.794.142v3.24l-1.918.001c-1.504 0-1.796.716-1.796 1.766v2.316h3.588l-.467 3.696h-3.121V24h6.116C23.406 24 24 23.406 24 22.674V1.326C24 .594 23.406 0 22.675 0z" />
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/10 hover:bg-blue-500 transition-colors grid place-items-center group">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 group-hover:scale-110 transition-transform">
                                <path d="M23.954 4.569c-.885.392-1.83.656-2.825.775 1.014-.611 1.794-1.574 2.163-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-2.723 0-4.928 2.206-4.928 4.93 0 .386.045.762.127 1.124C7.69 8.095 4.066 6.13 1.64 3.161c-.423.722-.666 1.561-.666 2.475 0 1.708.87 3.213 2.19 4.099-.807-.025-1.566-.248-2.229-.616v.062c0 2.386 1.697 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.376 4.6 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.402 4.768 2.219 7.557 2.219 9.054 0 14.002-7.496 14.002-13.986 0-.21 0-.423-.016-.633.961-.695 1.8-1.562 2.46-2.549z" />
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/10 hover:bg-blue-500 transition-colors grid place-items-center group">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-5 h-5 group-hover:scale-110 transition-transform">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.17.056 1.97.24 2.43.403a4.92 4.92 0 011.77 1.153 4.92 4.92 0 011.153 1.77c.163.46.347 1.26.403 2.43.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.056 1.17-.24 1.97-.403 2.43a4.92 4.92 0 01-1.153 1.77 4.92 4.92 0 01-1.77 1.153c-.46.163-1.26.347-2.43.403-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.17-.056-1.97-.24-2.43-.403a4.92 4.92 0 01-1.77-1.153 4.92 4.92 0 01-1.153-1.77c-.163-.46-.347-1.26-.403-2.43C2.175 15.584 2.163 15.204 2.163 12s.012-3.584.07-4.85c.056-1.17.24-1.97.403-2.43a4.92 4.92 0 011.153-1.77 4.92 4.92 0 011.77-1.153c.46-.163 1.26-.347 2.43-.403C8.416 2.175 8.796 2.163 12 2.163zm0 3.24a6.597 6.597 0 100 13.194 6.597 6.597 0 000-13.194zm0 10.89a4.293 4.293 0 110-8.586 4.293 4.293 0 010 8.586zm6.406-11.845a1.54 1.54 0 11-3.082 0 1.54 1.54 0 013.082 0z" />
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/10 hover:bg-blue-500 transition-colors grid place-items-center group">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 group-hover:scale-110 transition-transform">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="font-semibold text-lg mb-6">Quick Links</h3>
                    <ul class="space-y-3">
                        <li><a href="#home" class="text-white/70 hover:text-white transition-colors text-sm">Home</a></li>
                        <li><a href="#services" class="text-white/70 hover:text-white transition-colors text-sm">Services</a></li>
                        <li><a href="#projects" class="text-white/70 hover:text-white transition-colors text-sm">Projects</a></li>
                        <li><a href="#about" class="text-white/70 hover:text-white transition-colors text-sm">About Us</a></li>
                        <li><a href="#pricing" class="text-white/70 hover:text-white transition-colors text-sm">Pricing</a></li>
                        <li><a href="#blogs" class="text-white/70 hover:text-white transition-colors text-sm">Blog</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h3 class="font-semibold text-lg mb-6">Services</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-white/70 hover:text-white transition-colors text-sm">Website Development</a></li>
                        <li><a href="#" class="text-white/70 hover:text-white transition-colors text-sm">Mobile App Development</a></li>
                        <li><a href="#" class="text-white/70 hover:text-white transition-colors text-sm">UI/UX Design</a></li>
                        <li><a href="#" class="text-white/70 hover:text-white transition-colors text-sm">Graphics Design</a></li>
                        <li><a href="#" class="text-white/70 hover:text-white transition-colors text-sm">Digital Marketing</a></li>
                        <li><a href="#" class="text-white/70 hover:text-white transition-colors text-sm">Consulting</a></li>
                    </ul>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="border-t border-white/10 pt-8 mb-8">
                <div class="grid md:grid-cols-3 gap-6">
                    <!-- Phone -->
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-lg bg-blue-500/20 grid place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-blue-400">
                                <path d="M2.25 6.75c0-1.243 1.007-2.25 2.25-2.25h3.5c.966 0 1.818.62 2.121 1.539l.89 2.672a2.25 2.25 0 01-.54 2.297l-1.116 1.117a16.5 16.5 0 006.364 6.364l1.116-1.116a2.25 2.25 0 012.298-.54l2.671.89A2.25 2.25 0 0121.5 18v3.5a2.25 2.25 0 01-2.25 2.25H18C9.716 23.75 2.25 16.284 2.25 8V6.75z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-white/70 text-sm">Phone</p>
                            <p class="text-white font-medium">(000) 000-0000</p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-lg bg-blue-500/20 grid place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-blue-400">
                                <path d="M1.5 6.75A2.25 2.25 0 013.75 4.5h16.5a2.25 2.25 0 012.25 2.25v.243a2.25 2.25 0 01-.879 1.8l-7.5 5.625a2.25 2.25 0 01-2.742 0L2.38 8.793A2.25 2.25 0 011.5 6.993V6.75z" />
                                <path d="M22.5 8.25v9a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 17.25v-9l8.379 6.29a3.75 3.75 0 004.242 0L22.5 8.25z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-white/70 text-sm">Email</p>
                            <p class="text-white font-medium">example@gmail.com</p>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-lg bg-blue-500/20 grid place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-blue-400">
                                <path fill-rule="evenodd" d="M11.47.659a.75.75 0 01.997 0l9 8.25a.75.75 0 01-1.004 1.112L21 9.277V21a2.25 2.25 0 01-2.25 2.25h-4.5a.75.75 0 01-.75-.75v-5.25a1.5 1.5 0 00-1.5-1.5h-1.5a1.5 1.5 0 00-1.5 1.5v5.25a.75.75 0 01-.75.75h-4.5A2.25 2.25 0 013 21V9.277l-.463.744a.75.75 0 11-1.004-1.112l9-8.25z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-white/70 text-sm">Address</p>
                            <p class="text-white font-medium">2464 Royal Ln. Mesa, New Jersey 45463</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="border-t border-white/10 pt-6">
                <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                    <p class="text-white/60 text-sm">
                        © 2024 IT Company. All rights reserved. Designed with ❤️ for your success.
                    </p>
                    <div class="flex items-center gap-6">
                        <a href="#" class="text-white/60 hover:text-white transition-colors text-sm">Privacy Policy</a>
                        <a href="#" class="text-white/60 hover:text-white transition-colors text-sm">Terms of Service</a>
                        <a href="#" class="text-white/60 hover:text-white transition-colors text-sm">Cookie Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
