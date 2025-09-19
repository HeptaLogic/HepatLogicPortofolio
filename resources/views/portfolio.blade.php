<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Portfolio') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

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
                <span class="font-semibold">IT Company.</span>
            </a>
            <nav class="hidden md:flex items-center gap-6 text-white/80">
                <a href="#" class="hover:text-white">Home</a>
                <a href="#" class="hover:text-white">Services</a>
                <a href="#" class="hover:text-white">Projects</a>
                <a href="#" class="hover:text-white">Blogs</a>
                <a href="#" class="hover:text-white">About Us</a>
                <a href="#" class="hover:text-white">Pricing</a>
            </nav>
            <a href="#"
                class="hidden sm:inline-block px-5 py-2 rounded-full bg-blue-500 hover:bg-blue-600 text-white text-sm font-medium shadow-md">Get
                A Quote</a>
        </div>
    </header>

    <!-- Hero -->
    <section class="relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 py-16 md:py-24 grid md:grid-cols-2 gap-10 items-center">
            <div>
                <p class="text-blue-400 text-sm mb-4">Experience The Best IT Solutions</p>
                <h1 class="text-4xl md:text-5xl font-semibold leading-tight mb-6">Where Creativity
                    <br class="hidden md:block" />
                    Meets Cutting-Edge
                    <br class="hidden md:block" />
                    Technology
                </h1>
                <p class="text-white/70 mb-8 max-w-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore.</p>
                <div class="flex items-center gap-4">
                    <a href="#"
                        class="px-6 py-3 rounded-full bg-blue-500 hover:bg-blue-600 text-white font-medium inline-flex items-center gap-2">
                        <span>Explore More</span>
                        <span class="inline-grid place-items-center w-5 h-5 rounded-full bg-white/20">→</span>
                    </a>
                    <a href="#" class="text-white/90 underline underline-offset-4">View All Services</a>
                </div>
            </div>
            <div class="relative">
                <div class="rounded-lg overflow-hidden border border-white/10 shadow-[0_10px_25px_rgba(0,0,0,0.3)]">
                    <img src="https://images.unsplash.com/photo-1606857521015-7f9fcf423740?q=80&w=1200&auto=format&fit=crop"
                        alt="Team" class="w-full h-[420px] object-cover">
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
</body>

</html>
