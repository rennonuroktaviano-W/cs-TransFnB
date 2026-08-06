<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trans F&B Official — Premium Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.4/dist/chart.umd.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <style>
    :root {
        --navy-950: #04060f;
        --navy-900: #070b1a;
        --navy-800: #0d1226;
        --navy-700: #141b36;
        --blue-400: #4ea8ff;
        --blue-500: #2e8dff;
        --purple-400: #a78bfa;
        --purple-500: #8b5cf6;
        --glow-blue: 0 0 40px rgba(46, 141, 255, .35);
        --glow-purple: 0 0 40px rgba(139, 92, 246, .35);
    }

    * {
        scroll-behavior: smooth;
    }

    body {
        background: var(--navy-950);
        color: #e7ecff;
        font-family: 'Inter', sans-serif;
        overflow-x: hidden;
        position: relative;
    }

    h1,
    h2,
    h3,
    .font-display {
        font-family: 'Space Grotesk', sans-serif;
    }

    /* Reduced motion */
    @media (prefers-reduced-motion: reduce) {
        * {
            animation-duration: .001ms !important;
            animation-iteration-count: 1 !important;
            transition-duration: .001ms !important;
        }
    }

    /* ===== Background layers ===== */
    .bg-noise {
        position: fixed;
        inset: 0;
        z-index: 0;
        pointer-events: none;
        opacity: .05;
        mix-blend-mode: overlay;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='2' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E");
    }

    .bg-grid {
        position: fixed;
        inset: 0;
        z-index: 0;
        pointer-events: none;
        background-image:
            linear-gradient(rgba(78, 168, 255, .06) 1px, transparent 1px),
            linear-gradient(90deg, rgba(78, 168, 255, .06) 1px, transparent 1px);
        background-size: 56px 56px;
        mask-image: radial-gradient(ellipse 80% 60% at 50% 0%, #000 40%, transparent 100%);
    }

    .aurora {
        position: fixed;
        inset: -20%;
        z-index: 0;
        pointer-events: none;
        filter: blur(90px);
        opacity: .55;
        background:
            radial-gradient(40% 30% at 20% 20%, rgba(46, 141, 255, .5), transparent 60%),
            radial-gradient(35% 30% at 80% 10%, rgba(139, 92, 246, .45), transparent 60%),
            radial-gradient(30% 35% at 50% 90%, rgba(46, 141, 255, .3), transparent 60%);
        animation: auroraMove 22s ease-in-out infinite alternate;
    }

    @keyframes auroraMove {
        0% {
            transform: translate(0, 0) rotate(0deg);
        }

        100% {
            transform: translate(3%, -4%) rotate(6deg);
        }
    }

    .blur-circle {
        position: absolute;
        border-radius: 9999px;
        filter: blur(70px);
        pointer-events: none;
    }

    /* ===== Glass ===== */
    .glass {
        background: linear-gradient(145deg, rgba(255, 255, 255, .06), rgba(255, 255, 255, .015));
        border: 1px solid rgba(255, 255, 255, .08);
        backdrop-filter: blur(18px);
        -webkit-backdrop-filter: blur(18px);
    }

    .glass-strong {
        background: linear-gradient(145deg, rgba(20, 27, 54, .75), rgba(7, 11, 26, .75));
        border: 1px solid rgba(255, 255, 255, .1);
        backdrop-filter: blur(22px);
        -webkit-backdrop-filter: blur(22px);
    }

    /* gradient border */
    .gradient-border {
        position: relative;
        border-radius: 1.25rem;
    }

    .gradient-border::before {
        content: '';
        position: absolute;
        inset: 0;
        border-radius: inherit;
        padding: 1px;
        background: linear-gradient(135deg, rgba(78, 168, 255, .6), rgba(167, 139, 250, .6), transparent);
        -webkit-mask: linear-gradient(#000 0 0) content-box, linear-gradient(#000 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
        pointer-events: none;
    }

    /* Nav underline */
    .nav-link {
        position: relative;
        padding-bottom: 2px;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -4px;
        height: 2px;
        width: 0%;
        background: linear-gradient(90deg, var(--blue-400), var(--purple-400));
        transition: width .35s ease;
    }

    .nav-link:hover::after,
    .nav-link.active::after {
        width: 100%;
    }

    /* Magnetic / ripple buttons */
    .btn-glow {
        position: relative;
        overflow: hidden;
        box-shadow: 0 0 0 rgba(46, 141, 255, 0);
        transition: box-shadow .4s ease, transform .3s ease;
    }

    .btn-glow:hover {
        box-shadow: var(--glow-blue);
        transform: translateY(-2px);
    }

    .ripple {
        position: absolute;
        border-radius: 9999px;
        background: rgba(255, 255, 255, .5);
        transform: scale(0);
        animation: rippleAnim .6s ease-out forwards;
        pointer-events: none;
    }

    @keyframes rippleAnim {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }

    /* card hover */
    .card-hover {
        transition: transform .45s cubic-bezier(.2, .8, .2, 1), box-shadow .45s ease;
    }

    .card-hover:hover {
        transform: translateY(-8px) scale(1.015);
        box-shadow: 0 25px 60px -15px rgba(46, 141, 255, .25);
    }

    /* reveal */
    .reveal {
        opacity: 0;
        transform: translateY(28px);
        transition: opacity .8s ease, transform .8s cubic-bezier(.2, .8, .2, 1);
    }

    .reveal.show {
        opacity: 1;
        transform: translateY(0);
    }

    /* scale on load */
    .pop {
        opacity: 0;
        transform: scale(.92);
        transition: opacity .7s ease, transform .7s cubic-bezier(.2, .8, .2, 1);
    }

    .pop.show {
        opacity: 1;
        transform: scale(1);
    }

    ::-webkit-scrollbar {
        width: 10px;
    }

    ::-webkit-scrollbar-track {
        background: var(--navy-950);
    }

    ::-webkit-scrollbar-thumb {
        background: linear-gradient(var(--blue-500), var(--purple-500));
        border-radius: 8px;
    }

    .text-gradient {
        background: linear-gradient(90deg, #7fc0ff, #c4a9ff);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .marquee-track {
        animation: marquee 30s linear infinite;
    }

    @keyframes marquee {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-50%);
        }
    }

    /* focus visibility */
    a:focus-visible,
    button:focus-visible {
        outline: 2px solid var(--blue-400);
        outline-offset: 3px;
        border-radius: 6px;
    }

    .particle {
        position: absolute;
        border-radius: 9999px;
        background: rgba(255, 255, 255, .5);
        pointer-events: none;
        animation: floatY linear infinite;
    }

    @keyframes floatY {
        0% {
            transform: translateY(0) translateX(0);
            opacity: 0;
        }

        10% {
            opacity: .8;
        }

        90% {
            opacity: .5;
        }

        100% {
            transform: translateY(-120vh) translateX(20px);
            opacity: 0;
        }
    }

    .brand-section {
        position: relative;
        overflow: hidden;
    }

    .brand-bg {
        position: absolute;
        inset: 0;
        background-size: cover;
        background-position: center;
        transform: scale(1.08);
        transition: transform 1.2s cubic-bezier(.2, .8, .2, 1), filter .6s ease;
        filter: saturate(1.05);
    }

    .brand-section:hover .brand-bg {
        transform: scale(1.16);
    }

    .brand-overlay {
        position: absolute;
        inset: 0;
    }

    input[type=range] {
        accent-color: #2e8dff;
    }
    </style>
</head>

<body class="antialiased">

    <div class="bg-noise"></div>
    <div class="bg-grid"></div>
    <div class="aurora"></div>
    <div id="particles" class="fixed inset-0 z-0 pointer-events-none overflow-hidden"></div>

    <!-- ============ NAVBAR ============ -->
    <header id="navbar" class="fixed top-0 inset-x-0 z-50 transition-all duration-500">
        <div class="glass-strong border-b border-white/5">
            <div class="max-w-[1440px] mx-auto px-5 md:px-8 h-16 md:h-[70px] flex items-center justify-between">
                <a href="#top" class="flex items-center gap-2.5 group">
                    <div
                        class="w-9 h-9 rounded-xl bg-gradient-to-br from-blue-500 to-purple-500 flex items-center justify-center font-display font-bold text-sm shadow-[0_0_25px_rgba(78,168,255,.5)] group-hover:shadow-[0_0_35px_rgba(139,92,246,.6)] transition-shadow">
                        TF</div>
                    <div class="leading-tight">
                        <p class="font-display font-semibold text-[15px] tracking-tight">Trans F&B</p>
                        <p class="text-[10px] text-white/40 tracking-widest uppercase -mt-0.5">Official Group</p>
                    </div>
                </a>

                <nav class="hidden lg:flex items-center gap-8 text-[13.5px] text-white/70 font-medium">
                    <a href="#top" class="nav-link active hover:text-white transition-colors">Dashboard</a>
                    <a href="#brands" class="nav-link hover:text-white transition-colors">Brands</a>
                    <a href="#promotion" class="nav-link hover:text-white transition-colors">Campaign</a>
                    <a href="#analytics" class="nav-link hover:text-white transition-colors">Performance</a>
                    <a href="#news" class="nav-link hover:text-white transition-colors">News</a>
                    <a href="#gallery" class="nav-link hover:text-white transition-colors">Gallery</a>
                    <a href="#promotion" class="nav-link hover:text-white transition-colors">Promotion</a>
                </nav>

                <div class="flex items-center gap-2.5 md:gap-3.5">
                    <button aria-label="Search"
                        class="w-9 h-9 rounded-full glass flex items-center justify-center hover:bg-white/10 transition-colors">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <circle cx="11" cy="11" r="7" />
                            <path d="m21 21-4.3-4.3" />
                        </svg>
                    </button>
                    <button aria-label="Notifications"
                        class="relative w-9 h-9 rounded-full glass flex items-center justify-center hover:bg-white/10 transition-colors">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M18 8a6 6 0 0 0-12 0c0 7-3 9-3 9h18s-3-2-3-9" />
                            <path d="M13.7 21a2 2 0 0 1-3.4 0" />
                        </svg>
                        <span
                            class="absolute top-1.5 right-1.5 w-1.5 h-1.5 rounded-full bg-blue-400 shadow-[0_0_8px_2px_rgba(78,168,255,.8)]"></span>
                    </button>
                    <button
                        class="flex items-center gap-2 pl-1.5 pr-3 py-1 rounded-full glass hover:bg-white/10 transition-colors">
                        <img src="https://api.dicebear.com/7.x/notionists/svg?seed=TransFB&backgroundColor=141b36"
                            class="w-7 h-7 rounded-full border border-white/10" alt="Profile avatar">
                        <span class="hidden md:block text-[13px] font-medium text-white/80">Admin</span>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- ============ HERO ============ -->
    <section id="top" class="relative pt-36 md:pt-44 pb-24 md:pb-32 px-5 md:px-8">
        <div class="blur-circle w-[420px] h-[420px] bg-blue-500/25 -top-20 -left-32"></div>
        <div class="blur-circle w-[380px] h-[380px] bg-purple-500/25 top-10 right-0"></div>

        <div class="max-w-[1440px] mx-auto relative">
            <div class="reveal max-w-3xl">
                <span
                    class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full glass text-[11.5px] tracking-wide text-blue-300/90 font-medium mb-6">
                    <span
                        class="w-1.5 h-1.5 rounded-full bg-emerald-400 shadow-[0_0_8px_2px_rgba(52,211,153,.7)]"></span>
                    All systems operational — Group performance live
                </span>
                <h1 class="font-display text-[38px] leading-[1.08] sm:text-5xl md:text-6xl font-bold tracking-tight">
                    Welcome Back,<br>
                    <span class="text-gradient">Trans Food &amp; Beverage Official</span>
                </h1>
                <p class="mt-6 text-white/55 text-[15.5px] md:text-lg max-w-xl leading-relaxed">
                    Manage all Trans F&B brands in one premium dashboard — real-time performance, campaigns, and outlet
                    operations across the archipelago.
                </p>
                <div class="mt-9 flex flex-wrap items-center gap-4">
                    <a href="#brands"
                        class="btn-glow bg-gradient-to-r from-blue-500 to-purple-500 text-white text-sm font-semibold px-6 py-3.5 rounded-full">Explore
                        Brands</a>
                    <a href="#analytics"
                        class="glass hover:bg-white/10 transition-colors text-sm font-semibold px-6 py-3.5 rounded-full">View
                        Performance →</a>
                </div>
            </div>

            <!-- Overview cards -->
            <div id="overview" class="mt-16 md:mt-20 grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-5">
                <div class="reveal gradient-border glass card-hover rounded-[1.25rem] p-5 md:p-6">
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-10 h-10 rounded-xl bg-blue-500/15 flex items-center justify-center text-blue-300">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <rect x="3" y="3" width="7" height="7" rx="1.5" />
                                <rect x="14" y="3" width="7" height="7" rx="1.5" />
                                <rect x="3" y="14" width="7" height="7" rx="1.5" />
                                <rect x="14" y="14" width="7" height="7" rx="1.5" />
                            </svg>
                        </div>
                        <span class="text-[11px] text-emerald-400 font-medium">+2 new</span>
                    </div>
                    <p class="font-display text-3xl md:text-[34px] font-bold" data-count="6">0</p>
                    <p class="text-white/40 text-[12.5px] mt-1 tracking-wide">Total Brand</p>
                </div>

                <div class="reveal gradient-border glass card-hover rounded-[1.25rem] p-5 md:p-6">
                    <div class="flex items-center justify-between mb-6">
                        <div
                            class="w-10 h-10 rounded-xl bg-purple-500/15 flex items-center justify-center text-purple-300">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path d="M3 21h18" />
                                <path d="M5 21V7l7-4 7 4v14" />
                                <path d="M9 9h1M9 13h1M14 9h1M14 13h1" />
                            </svg>
                        </div>
                        <span class="text-[11px] text-emerald-400 font-medium">+18 this yr</span>
                    </div>
                    <p class="font-display text-3xl md:text-[34px] font-bold" data-count="284">0</p>
                    <p class="text-white/40 text-[12.5px] mt-1 tracking-wide">Total Outlet</p>
                </div>

                <div class="reveal gradient-border glass card-hover rounded-[1.25rem] p-5 md:p-6">
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-10 h-10 rounded-xl bg-blue-500/15 flex items-center justify-center text-blue-300">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path d="M12 1v22" />
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
                            </svg>
                        </div>
                        <span class="text-[11px] text-emerald-400 font-medium">+12.4%</span>
                    </div>
                    <p class="font-display text-3xl md:text-[34px] font-bold"><span data-count="1.82" data-decimals="2"
                            data-prefix="Rp ">0</span> M</p>
                    <p class="text-white/40 text-[12.5px] mt-1 tracking-wide">Today's Revenue</p>
                </div>

                <div class="reveal gradient-border glass card-hover rounded-[1.25rem] p-5 md:p-6">
                    <div class="flex items-center justify-between mb-6">
                        <div
                            class="w-10 h-10 rounded-xl bg-purple-500/15 flex items-center justify-center text-purple-300">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path d="M12 17.3 6.2 21l1.6-6.8L2 9.7l6.9-.6L12 2.6l3.1 6.5 6.9.6-5.8 4.5L17.8 21z" />
                            </svg>
                        </div>
                        <span class="text-[11px] text-emerald-400 font-medium">Excellent</span>
                    </div>
                    <p class="font-display text-3xl md:text-[34px] font-bold"><span data-count="97.6"
                            data-decimals="1">0</span>%</p>
                    <p class="text-white/40 text-[12.5px] mt-1 tracking-wide">Customer Satisfaction</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ BRANDS ============ -->
    <section id="brands" class="relative py-20 md:py-28 px-5 md:px-8">
        <div class="max-w-[1440px] mx-auto mb-12 md:mb-16 reveal">
            <p class="text-blue-300/80 text-[12.5px] tracking-[0.2em] uppercase font-medium mb-3">Our Portfolio</p>
            <h2 class="font-display text-3xl md:text-[44px] font-bold tracking-tight">Brands Under Trans F&B</h2>
            <p class="text-white/45 mt-3 max-w-xl">Six distinct experiences, one premium standard.</p>
        </div>

        <div class="max-w-[1440px] mx-auto flex flex-col gap-6 md:gap-8">

            <!-- Coffee Bean -->
            <div class="brand-section reveal rounded-[1.75rem] h-[420px] md:h-[480px] group">
                <div class="brand-bg"
                    style="background-image:url('https://images.unsplash.com/photo-1509042239860-f550ce710b93?q=80&w=1600&auto=format&fit=crop')">
                </div>
                <div class="brand-overlay bg-gradient-to-r from-[#04060f] via-[#04060f]/70 to-transparent"></div>
                <div class="brand-overlay bg-gradient-to-t from-[#04060f]/80 via-transparent to-transparent"></div>
                <div class="relative h-full flex flex-col justify-end p-7 md:p-12 max-w-xl">
                    <span class="text-amber-300/90 text-[11.5px] tracking-[0.2em] uppercase font-medium mb-3">Coffee
                        &amp; Tea House</span>
                    <h3 class="font-display text-3xl md:text-[42px] font-bold leading-tight">The Coffee Bean<br>&amp;
                        Tea Leaf</h3>
                    <p class="text-white/60 text-[14px] mt-3 max-w-md">Roasted daily, brewed with intention — a
                        coffeehouse rhythm for every part of the day.</p>
                    <div class="flex flex-wrap gap-6 md:gap-10 mt-7">
                        <div>
                            <p class="font-display text-xl font-bold" data-count="412" data-prefix="Rp "
                                data-suffix="M">0</p>
                            <p class="text-white/40 text-[11px] mt-0.5">Today's Sales</p>
                        </div>
                        <div>
                            <p class="font-display text-xl font-bold" data-count="8420">0</p>
                            <p class="text-white/40 text-[11px] mt-0.5">Visitors</p>
                        </div>
                        <div>
                            <p class="font-display text-xl font-bold" data-count="4.8" data-decimals="1">0</p>
                            <p class="text-white/40 text-[11px] mt-0.5">Rating</p>
                        </div>
                    </div>
                    <a href="#"
                        class="btn-glow mt-7 w-fit bg-white/10 hover:bg-white/15 border border-white/15 backdrop-blur-md text-[13.5px] font-semibold px-5 py-2.5 rounded-full">Explore
                        Brand →</a>
                </div>
                <span
                    class="absolute top-7 right-7 glass px-3 py-1.5 rounded-full text-[11px] font-medium text-amber-200">🔥
                    Buy 1 Get 1 — Iced Series</span>
            </div>

            <!-- Wendy's -->
            <div class="brand-section reveal rounded-[1.75rem] h-[420px] md:h-[480px] group">
                <div class="brand-bg"
                    style="background-image:url('https://images.unsplash.com/photo-1568901346375-23c9450c58cd?q=80&w=1600&auto=format&fit=crop')">
                </div>
                <div class="brand-overlay bg-gradient-to-tr from-red-950/85 via-[#04060f]/60 to-transparent"></div>
                <div class="relative h-full flex flex-col justify-end p-7 md:p-12 max-w-xl">
                    <span
                        class="inline-flex w-fit items-center gap-1.5 bg-red-500/20 border border-red-400/30 text-red-200 text-[11px] font-semibold px-3 py-1 rounded-full mb-4">★
                        Best Seller</span>
                    <h3 class="font-display text-3xl md:text-[42px] font-bold">Wendy's</h3>
                    <p class="text-white/60 text-[14px] mt-3 max-w-md">Fresh, never frozen. The square patty that never
                        cuts corners.</p>
                    <div class="mt-6 glass-strong rounded-2xl p-4 max-w-sm flex items-center gap-4">
                        <div class="w-14 h-14 rounded-xl bg-red-500/20 flex items-center justify-center text-2xl">🍔
                        </div>
                        <div>
                            <p class="font-semibold text-[13.5px]">Baconator Combo Promo</p>
                            <p class="text-white/40 text-[11.5px]">Save 25% — this week only</p>
                        </div>
                    </div>
                    <a href="#"
                        class="btn-glow mt-6 w-fit bg-white/10 hover:bg-white/15 border border-white/15 backdrop-blur-md text-[13.5px] font-semibold px-5 py-2.5 rounded-full">Order
                        Now →</a>
                </div>
            </div>

            <!-- Baskin Robbins -->
            <div class="brand-section reveal rounded-[1.75rem] h-[420px] md:h-[480px] group">
                <div class="brand-bg"
                    style="background-image:url('https://images.unsplash.com/photo-1497034825429-c343d7c6a68f?q=80&w=1600&auto=format&fit=crop')">
                </div>
                <div class="brand-overlay bg-gradient-to-t from-pink-950/80 via-[#04060f]/40 to-purple-900/30"></div>
                <div class="relative h-full p-7 md:p-12 flex flex-col justify-end">
                    <div class="absolute top-8 right-10 text-5xl md:text-6xl animate-bounce"
                        style="animation-duration:3s;">🍦</div>
                    <span class="text-pink-200/90 text-[11.5px] tracking-[0.2em] uppercase font-medium mb-3">31 Flavors,
                        One Craving</span>
                    <h3 class="font-display text-3xl md:text-[42px] font-bold">Baskin Robbins</h3>
                    <div class="flex flex-wrap gap-6 md:gap-10 mt-6">
                        <div>
                            <p class="font-display text-xl font-bold" data-count="196" data-prefix="Rp "
                                data-suffix="M">0</p>
                            <p class="text-white/40 text-[11px] mt-0.5">Today's Sales</p>
                        </div>
                        <div>
                            <p
                                class="font-display text-xl font-bold bg-gradient-to-r from-pink-300 to-purple-300 bg-clip-text text-transparent">
                                2 for 1</p>
                            <p class="text-white/40 text-[11px] mt-0.5">Weekend Promo</p>
                        </div>
                    </div>
                    <a href="#"
                        class="btn-glow mt-6 w-fit bg-white/10 hover:bg-white/15 border border-white/15 backdrop-blur-md text-[13.5px] font-semibold px-5 py-2.5 rounded-full">Scoop
                        More →</a>
                </div>
            </div>

            <!-- Warung Wardani -->
            <div class="brand-section reveal rounded-[1.75rem] h-[420px] md:h-[480px] group">
                <div class="brand-bg"
                    style="background-image:url('https://images.unsplash.com/photo-1512058564366-18510be2db19?q=80&w=1600&auto=format&fit=crop')">
                </div>
                <div class="brand-overlay bg-gradient-to-r from-[#1a1206]/90 via-[#1a1206]/50 to-transparent"></div>
                <div class="absolute inset-0 opacity-[.08]"
                    style="background-image:repeating-linear-gradient(45deg, #f2c879 0 2px, transparent 2px 22px);">
                </div>
                <div class="relative h-full flex flex-col justify-end p-7 md:p-12 max-w-xl">
                    <span class="text-amber-300/90 text-[11.5px] tracking-[0.2em] uppercase font-medium mb-3">Cita Rasa
                        Nusantara</span>
                    <h3 class="font-display text-3xl md:text-[42px] font-bold">Warung Wardani</h3>
                    <p class="text-white/60 text-[14px] mt-3 max-w-md">Resep turun-temurun, disajikan dengan standar
                        restoran modern.</p>
                    <p class="mt-5 text-[13px] text-amber-200/90 font-medium">🏆 Best Menu — Nasi Bakar Ayam Rempah</p>
                    <a href="#"
                        class="btn-glow mt-6 w-fit bg-white/10 hover:bg-white/15 border border-white/15 backdrop-blur-md text-[13.5px] font-semibold px-5 py-2.5 rounded-full">Lihat
                        Menu →</a>
                </div>
            </div>

            <!-- Gyukatsu -->
            <div class="brand-section reveal rounded-[1.75rem] h-[420px] md:h-[480px] group bg-black">
                <div class="brand-bg opacity-70"
                    style="background-image:url('https://images.unsplash.com/photo-1554502078-ef0fc409efce?q=80&w=1600&auto=format&fit=crop')">
                </div>
                <div class="brand-overlay bg-gradient-to-t from-black via-black/60 to-black/20"></div>
                <div class="relative h-full flex flex-col justify-end p-7 md:p-12 max-w-xl">
                    <span class="text-red-400/90 text-[11.5px] tracking-[0.35em] uppercase font-medium mb-3">牛かつ —
                        Premium Katsu</span>
                    <h3 class="font-display text-3xl md:text-[42px] font-bold tracking-wide">Gyukatsu</h3>
                    <p class="text-white/50 text-[14px] mt-3 max-w-md">Seared rare, finished on your own hot stone. A
                        ritual, not just a meal.</p>
                    <a href="#"
                        class="btn-glow mt-7 w-fit border border-red-400/40 text-red-100 hover:bg-red-500/10 text-[13.5px] font-semibold px-5 py-2.5 rounded-full">Reserve
                        Table →</a>
                </div>
            </div>

            <!-- Tasty Kitchen -->
            <div class="brand-section reveal rounded-[1.75rem] h-[420px] md:h-[480px] group">
                <div class="brand-bg"
                    style="background-image:url('https://images.unsplash.com/photo-1466637574441-749b8f19452f?q=80&w=1600&auto=format&fit=crop')">
                </div>
                <div class="brand-overlay bg-gradient-to-r from-blue-950/80 via-[#04060f]/50 to-purple-950/40"></div>
                <div class="relative h-full flex flex-col justify-end p-7 md:p-12 max-w-xl">
                    <span class="text-blue-300/90 text-[11.5px] tracking-[0.2em] uppercase font-medium mb-3">Modern
                        Comfort Food</span>
                    <h3 class="font-display text-3xl md:text-[42px] font-bold">Tasty Kitchen</h3>
                    <div class="mt-5 flex items-center gap-3 glass-strong rounded-2xl p-3.5 w-fit pr-6">
                        <img src="https://api.dicebear.com/7.x/notionists/svg?seed=Chef&backgroundColor=141b36"
                            class="w-10 h-10 rounded-full" alt="Chef avatar">
                        <div>
                            <p class="text-[11px] text-white/40">Chef Recommendation</p>
                            <p class="text-[13.5px] font-semibold">Truffle Mushroom Risotto</p>
                        </div>
                    </div>
                    <p class="mt-4 text-[12.5px] text-purple-300/90">📈 Trending Menu of the Week</p>
                    <a href="#"
                        class="btn-glow mt-5 w-fit bg-white/10 hover:bg-white/15 border border-white/15 backdrop-blur-md text-[13.5px] font-semibold px-5 py-2.5 rounded-full">See
                        Full Menu →</a>
                </div>
            </div>

        </div>
    </section>

    <!-- ============ PROMOTION SLIDER ============ -->
    <section id="promotion" class="relative py-20 md:py-28 px-5 md:px-8">
        <div class="blur-circle w-[360px] h-[360px] bg-purple-500/20 top-0 left-1/4"></div>
        <div class="max-w-[1440px] mx-auto reveal mb-10 flex items-end justify-between flex-wrap gap-4">
            <div>
                <p class="text-purple-300/80 text-[12.5px] tracking-[0.2em] uppercase font-medium mb-3">Live Campaigns
                </p>
                <h2 class="font-display text-3xl md:text-[40px] font-bold tracking-tight">Promotion Center</h2>
            </div>
            <div class="flex gap-2">
                <button id="promoPrev" aria-label="Previous promo"
                    class="w-10 h-10 rounded-full glass hover:bg-white/10 flex items-center justify-center transition-colors"><svg
                        width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="m15 18-6-6 6-6" />
                    </svg></button>
                <button id="promoNext" aria-label="Next promo"
                    class="w-10 h-10 rounded-full glass hover:bg-white/10 flex items-center justify-center transition-colors"><svg
                        width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="m9 18 6-6-6-6" />
                    </svg></button>
            </div>
        </div>

        <div class="max-w-[1440px] mx-auto overflow-hidden relative reveal">
            <div id="promoTrack" class="flex gap-5 transition-transform duration-700 ease-[cubic-bezier(.2,.8,.2,1)]">
                <!-- slides injected by JS -->
            </div>
        </div>
        <div id="promoDots" class="max-w-[1440px] mx-auto flex justify-center gap-2 mt-7"></div>
    </section>

    <!-- ============ ANALYTICS ============ -->
    <section id="analytics" class="relative py-20 md:py-28 px-5 md:px-8">
        <div class="max-w-[1440px] mx-auto reveal mb-12">
            <p class="text-blue-300/80 text-[12.5px] tracking-[0.2em] uppercase font-medium mb-3">Group Performance</p>
            <h2 class="font-display text-3xl md:text-[40px] font-bold tracking-tight">Analytics Overview</h2>
        </div>

        <div class="max-w-[1440px] mx-auto grid lg:grid-cols-3 gap-5 md:gap-6">
            <div class="reveal lg:col-span-2 gradient-border glass rounded-[1.5rem] p-6 md:p-8">
                <div class="flex items-center justify-between mb-6 flex-wrap gap-3">
                    <div>
                        <p class="text-white/40 text-[12px]">Revenue &amp; Orders</p>
                        <p class="font-display text-xl font-bold mt-1">Last 7 Days</p>
                    </div>
                    <div class="flex gap-2 text-[11.5px]">
                        <span class="flex items-center gap-1.5 text-white/50"><span
                                class="w-2 h-2 rounded-full bg-blue-400"></span>Revenue</span>
                        <span class="flex items-center gap-1.5 text-white/50"><span
                                class="w-2 h-2 rounded-full bg-purple-400"></span>Orders</span>
                    </div>
                </div>
                <canvas id="revenueChart" height="110"></canvas>
            </div>

            <div class="reveal gradient-border glass rounded-[1.5rem] p-6 md:p-8 flex flex-col">
                <p class="text-white/40 text-[12px]">Visitor Growth</p>
                <p class="font-display text-xl font-bold mt-1 mb-6">By Channel</p>
                <div class="flex-1 flex items-center justify-center">
                    <canvas id="growthChart" height="200"></canvas>
                </div>
            </div>
        </div>

        <div class="max-w-[1440px] mx-auto grid sm:grid-cols-3 gap-5 mt-6">
            <div class="reveal glass rounded-2xl p-6 card-hover">
                <p class="text-white/40 text-[12px] mb-2">Total Orders (7d)</p>
                <p class="font-display text-2xl font-bold" data-count="48920">0</p>
                <p class="text-emerald-400 text-[12px] mt-2">▲ 8.2% vs last week</p>
            </div>
            <div class="reveal glass rounded-2xl p-6 card-hover">
                <p class="text-white/40 text-[12px] mb-2">Avg. Order Value</p>
                <p class="font-display text-2xl font-bold"><span data-prefix="Rp " data-count="87.4"
                        data-decimals="1">0</span>K</p>
                <p class="text-emerald-400 text-[12px] mt-2">▲ 3.1% vs last week</p>
            </div>
            <div class="reveal glass rounded-2xl p-6 card-hover">
                <p class="text-white/40 text-[12px] mb-2">Active Outlets</p>
                <p class="font-display text-2xl font-bold" data-count="278">0</p>
                <p class="text-white/40 text-[12px] mt-2">of 284 total</p>
            </div>
        </div>
    </section>

    <!-- ============ NEWS ============ -->
    <section id="news" class="relative py-20 md:py-28 px-5 md:px-8">
        <div class="max-w-[1440px] mx-auto reveal mb-12">
            <p class="text-blue-300/80 text-[12.5px] tracking-[0.2em] uppercase font-medium mb-3">Newsroom</p>
            <h2 class="font-display text-3xl md:text-[40px] font-bold tracking-tight">Latest News</h2>
        </div>

        <div class="max-w-[1440px] mx-auto grid md:grid-cols-3 gap-5 md:gap-6">
            <article class="reveal gradient-border glass card-hover rounded-[1.5rem] overflow-hidden flex flex-col">
                <div class="h-44 bg-cover bg-center"
                    style="background-image:url('https://images.unsplash.com/photo-1521017432531-fbd92d768814?q=80&w=1200&auto=format&fit=crop')">
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <div class="flex items-center gap-3 text-[11px] text-white/40 mb-3">
                        <span class="px-2.5 py-1 rounded-full bg-blue-500/15 text-blue-300">Expansion</span>
                        <span>Aug 2, 2026</span>
                    </div>
                    <h3 class="font-display font-semibold text-[16.5px] leading-snug mb-2">Trans F&B Buka 12 Outlet Baru
                        di Q3 2026</h3>
                    <p class="text-white/45 text-[13px] flex-1">Ekspansi agresif menyasar kota-kota tier dua di seluruh
                        Indonesia.</p>
                    <a href="#"
                        class="mt-4 text-blue-300 text-[13px] font-semibold hover:text-blue-200 transition-colors w-fit">Read
                        More →</a>
                </div>
            </article>

            <article class="reveal gradient-border glass card-hover rounded-[1.5rem] overflow-hidden flex flex-col">
                <div class="h-44 bg-cover bg-center"
                    style="background-image:url('https://images.unsplash.com/photo-1414235077428-338989a2e8c0?q=80&w=1200&auto=format&fit=crop')">
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <div class="flex items-center gap-3 text-[11px] text-white/40 mb-3">
                        <span class="px-2.5 py-1 rounded-full bg-purple-500/15 text-purple-300">Award</span>
                        <span>Jul 24, 2026</span>
                    </div>
                    <h3 class="font-display font-semibold text-[16.5px] leading-snug mb-2">Gyukatsu Raih Penghargaan
                        Best Dining Concept</h3>
                    <p class="text-white/45 text-[13px] flex-1">Diapresiasi atas inovasi konsep hot-stone dining premium
                        di Asia Tenggara.</p>
                    <a href="#"
                        class="mt-4 text-blue-300 text-[13px] font-semibold hover:text-blue-200 transition-colors w-fit">Read
                        More →</a>
                </div>
            </article>

            <article class="reveal gradient-border glass card-hover rounded-[1.5rem] overflow-hidden flex flex-col">
                <div class="h-44 bg-cover bg-center"
                    style="background-image:url('https://images.unsplash.com/photo-1556740738-b6a63e27c4df?q=80&w=1200&auto=format&fit=crop')">
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <div class="flex items-center gap-3 text-[11px] text-white/40 mb-3">
                        <span class="px-2.5 py-1 rounded-full bg-emerald-500/15 text-emerald-300">Sustainability</span>
                        <span>Jul 15, 2026</span>
                    </div>
                    <h3 class="font-display font-semibold text-[16.5px] leading-snug mb-2">Warung Wardani Luncurkan
                        Kemasan Ramah Lingkungan</h3>
                    <p class="text-white/45 text-[13px] flex-1">Langkah nyata menuju target net-zero packaging pada
                        2028.</p>
                    <a href="#"
                        class="mt-4 text-blue-300 text-[13px] font-semibold hover:text-blue-200 transition-colors w-fit">Read
                        More →</a>
                </div>
            </article>
        </div>
    </section>

    <!-- ============ EVENTS ============ -->
    <section id="events" class="relative py-20 md:py-28 px-5 md:px-8">
        <div class="max-w-[1440px] mx-auto reveal mb-14">
            <p class="text-purple-300/80 text-[12.5px] tracking-[0.2em] uppercase font-medium mb-3">What's Next</p>
            <h2 class="font-display text-3xl md:text-[40px] font-bold tracking-tight">Upcoming Events</h2>
        </div>

        <div class="max-w-[1440px] mx-auto relative reveal">
            <div
                class="absolute left-[15px] md:left-1/2 top-0 bottom-0 w-px bg-gradient-to-b from-blue-400/50 via-purple-400/50 to-transparent md:-translate-x-1/2">
            </div>

            <div class="flex flex-col gap-10">
                <div class="relative pl-10 md:pl-0 md:grid md:grid-cols-2 md:gap-10">
                    <div
                        class="absolute left-0 md:left-1/2 top-1 w-[9px] h-[9px] rounded-full bg-blue-400 shadow-[0_0_10px_3px_rgba(78,168,255,.7)] md:-translate-x-1/2">
                    </div>
                    <div class="md:text-right md:pr-10">
                        <p class="text-blue-300 text-[11.5px] font-medium mb-1">Aug 18, 2026 — Jakarta</p>
                        <h3 class="font-display font-semibold text-lg">Trans F&B Coffee Festival</h3>
                        <p class="text-white/45 text-[13px] mt-1.5 md:ml-auto max-w-sm">Perayaan kopi nusantara bersama
                            The Coffee Bean & Tea Leaf.</p>
                    </div>
                    <div class="hidden md:block"></div>
                </div>

                <div class="relative pl-10 md:pl-0 md:grid md:grid-cols-2 md:gap-10">
                    <div
                        class="absolute left-0 md:left-1/2 top-1 w-[9px] h-[9px] rounded-full bg-purple-400 shadow-[0_0_10px_3px_rgba(167,139,250,.7)] md:-translate-x-1/2">
                    </div>
                    <div class="hidden md:block"></div>
                    <div class="md:pl-10">
                        <p class="text-purple-300 text-[11.5px] font-medium mb-1">Sep 5, 2026 — Surabaya</p>
                        <h3 class="font-display font-semibold text-lg">Grand Opening: Gyukatsu Surabaya</h3>
                        <p class="text-white/45 text-[13px] mt-1.5 max-w-sm">Toko flagship kedua resmi dibuka dengan
                            promo hot-stone gratis.</p>
                    </div>
                </div>

                <div class="relative pl-10 md:pl-0 md:grid md:grid-cols-2 md:gap-10">
                    <div
                        class="absolute left-0 md:left-1/2 top-1 w-[9px] h-[9px] rounded-full bg-blue-400 shadow-[0_0_10px_3px_rgba(78,168,255,.7)] md:-translate-x-1/2">
                    </div>
                    <div class="md:text-right md:pr-10">
                        <p class="text-blue-300 text-[11.5px] font-medium mb-1">Sep 20, 2026 — Nationwide</p>
                        <h3 class="font-display font-semibold text-lg">Baskin Robbins Sundae Weekend</h3>
                        <p class="text-white/45 text-[13px] mt-1.5 md:ml-auto max-w-sm">Promo beli 2 gratis 1 di seluruh
                            gerai se-Indonesia.</p>
                    </div>
                    <div class="hidden md:block"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ GALLERY ============ -->
    <section id="gallery" class="relative py-20 md:py-28 px-5 md:px-8">
        <div class="max-w-[1440px] mx-auto reveal mb-12">
            <p class="text-blue-300/80 text-[12.5px] tracking-[0.2em] uppercase font-medium mb-3">Moments</p>
            <h2 class="font-display text-3xl md:text-[40px] font-bold tracking-tight">Gallery</h2>
        </div>

        <div class="max-w-[1440px] mx-auto grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="reveal relative group rounded-2xl overflow-hidden h-56 md:h-64">
                <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?q=80&w=800&auto=format&fit=crop"
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-125"
                    alt="Coffee brewing moment">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/0 to-black/0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4">
                    <p class="text-[12.5px] font-medium">Morning Brew Ritual</p>
                </div>
            </div>
            <div class="reveal relative group rounded-2xl overflow-hidden h-56 md:h-64">
                <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?q=80&w=800&auto=format&fit=crop"
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-125"
                    alt="Wendy's burger">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/0 to-black/0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4">
                    <p class="text-[12.5px] font-medium">Baconator Launch Day</p>
                </div>
            </div>
            <div class="reveal relative group rounded-2xl overflow-hidden h-56 md:h-64">
                <img src="https://images.unsplash.com/photo-1497034825429-c343d7c6a68f?q=80&w=800&auto=format&fit=crop"
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-125"
                    alt="Ice cream scoops">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/0 to-black/0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4">
                    <p class="text-[12.5px] font-medium">Sundae Weekend</p>
                </div>
            </div>
            <div class="reveal relative group rounded-2xl overflow-hidden h-56 md:h-64">
                <img src="https://images.unsplash.com/photo-1554502078-ef0fc409efce?q=80&w=800&auto=format&fit=crop"
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-125"
                    alt="Gyukatsu dining">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/0 to-black/0 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4">
                    <p class="text-[12.5px] font-medium">Hot Stone Sear</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ TESTIMONIAL ============ -->
    <section id="testimonial" class="relative py-20 md:py-28 px-5 md:px-8 overflow-hidden">
        <div class="blur-circle w-[400px] h-[400px] bg-blue-500/20 bottom-0 right-1/4"></div>
        <div class="max-w-[1440px] mx-auto reveal mb-12 text-center">
            <p class="text-purple-300/80 text-[12.5px] tracking-[0.2em] uppercase font-medium mb-3">Voices</p>
            <h2 class="font-display text-3xl md:text-[40px] font-bold tracking-tight">Customer Review</h2>
        </div>

        <div class="max-w-2xl mx-auto reveal relative">
            <div id="testiTrack" class="relative h-52 md:h-44">
                <!-- injected by JS -->
            </div>
            <div id="testiDots" class="flex justify-center gap-2 mt-8"></div>
        </div>
    </section>

    <!-- ============ FOOTER ============ -->
    <footer class="relative border-t border-white/5 mt-10">
        <div class="max-w-[1440px] mx-auto px-5 md:px-8 py-14 grid md:grid-cols-4 gap-10">
            <div class="md:col-span-2">
                <div class="flex items-center gap-2.5 mb-4">
                    <div
                        class="w-9 h-9 rounded-xl bg-gradient-to-br from-blue-500 to-purple-500 flex items-center justify-center font-display font-bold text-sm">
                        TF</div>
                    <p class="font-display font-semibold text-[15px]">Trans Food & Beverage Official</p>
                </div>
                <p class="text-white/40 text-[13px] max-w-sm leading-relaxed">Menaungi enam brand F&B premium di seluruh
                    Indonesia — dari kopi hingga fine dining, satu standar keunggulan.</p>
                <div class="flex gap-3 mt-6">
                    <a href="#" aria-label="Instagram"
                        class="w-9 h-9 rounded-full glass flex items-center justify-center hover:bg-white/10 transition-colors"><svg
                            width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <rect x="2" y="2" width="20" height="20" rx="5" />
                            <circle cx="12" cy="12" r="4" />
                            <circle cx="17.5" cy="6.5" r="1" />
                        </svg></a>
                    <a href="#" aria-label="X"
                        class="w-9 h-9 rounded-full glass flex items-center justify-center hover:bg-white/10 transition-colors"><svg
                            width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M18.9 1.9h3.7l-8 9.2 9.5 12.5h-7.4l-5.8-7.6-6.6 7.6H.6l8.6-9.9L0 1.9h7.6l5.2 7z" />
                        </svg></a>
                    <a href="#" aria-label="LinkedIn"
                        class="w-9 h-9 rounded-full glass flex items-center justify-center hover:bg-white/10 transition-colors"><svg
                            width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M4.98 3.5a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5zM3 9h4v12H3zM9 9h3.8v1.7h.1c.5-1 1.8-2 3.7-2 4 0 4.7 2.6 4.7 6V21h-4v-5.3c0-1.3 0-2.9-1.8-2.9s-2 1.4-2 2.8V21H9z" />
                        </svg></a>
                </div>
            </div>
            <div>
                <p class="font-semibold text-[13px] text-white/70 mb-4 tracking-wide">Brands</p>
                <ul class="space-y-2.5 text-[13px] text-white/40">
                    <li><a href="#brands" class="hover:text-white transition-colors">Coffee Bean & Tea Leaf</a></li>
                    <li><a href="#brands" class="hover:text-white transition-colors">Wendy's</a></li>
                    <li><a href="#brands" class="hover:text-white transition-colors">Baskin Robbins</a></li>
                    <li><a href="#brands" class="hover:text-white transition-colors">Gyukatsu</a></li>
                </ul>
            </div>
            <div>
                <p class="font-semibold text-[13px] text-white/70 mb-4 tracking-wide">Company</p>
                <ul class="space-y-2.5 text-[13px] text-white/40">
                    <li><a href="#analytics" class="hover:text-white transition-colors">Performance</a></li>
                    <li><a href="#news" class="hover:text-white transition-colors">Newsroom</a></li>
                    <li><a href="#gallery" class="hover:text-white transition-colors">Gallery</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Careers</a></li>
                </ul>
            </div>
        </div>
        <div class="glass-strong border-t border-white/5 py-5 px-5 md:px-8">
            <p class="max-w-[1440px] mx-auto text-[12px] text-white/35 text-center">© 2026 Trans Food & Beverage
                Official Group. All rights reserved.</p>
        </div>
    </footer>

    <script>
    /* ===================== Particles ===================== */
    (function() {
        const wrap = document.getElementById('particles');
        const n = window.innerWidth < 768 ? 14 : 28;
        for (let i = 0; i < n; i++) {
            const p = document.createElement('div');
            p.className = 'particle';
            const size = Math.random() * 3 + 1.5;
            p.style.width = size + 'px';
            p.style.height = size + 'px';
            p.style.left = Math.random() * 100 + '%';
            p.style.top = 100 + Math.random() * 20 + '%';
            p.style.animationDuration = (10 + Math.random() * 14) + 's';
            p.style.animationDelay = (Math.random() * 10) + 's';
            p.style.background = Math.random() > .5 ? 'rgba(78,168,255,.6)' : 'rgba(167,139,250,.6)';
            wrap.appendChild(p);
        }
    })();

    /* ===================== Navbar shrink on scroll ===================== */
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        navbar.style.boxShadow = window.scrollY > 10 ? '0 10px 30px -15px rgba(0,0,0,.5)' : 'none';
    });

    /* ===================== Scroll reveal ===================== */
    const revealEls = document.querySelectorAll('.reveal');
    const io = new IntersectionObserver((entries) => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                e.target.classList.add('show');
                io.unobserve(e.target);
            }
        });
    }, {
        threshold: 0.15
    });
    revealEls.forEach(el => io.observe(el));

    /* ===================== Count up numbers ===================== */
    function animateCount(el) {
        const target = parseFloat(el.getAttribute('data-count'));
        const decimals = parseInt(el.getAttribute('data-decimals') || '0');
        const prefix = el.getAttribute('data-prefix') || '';
        const suffix = el.getAttribute('data-suffix') || '';
        const dur = 1600;
        const start = performance.now();

        function tick(now) {
            const p = Math.min((now - start) / dur, 1);
            const eased = 1 - Math.pow(1 - p, 3);
            const val = target * eased;
            el.textContent = prefix + val.toLocaleString('id-ID', {
                minimumFractionDigits: decimals,
                maximumFractionDigits: decimals
            }) + suffix;
            if (p < 1) requestAnimationFrame(tick);
        }
        requestAnimationFrame(tick);
    }
    const countEls = document.querySelectorAll('[data-count]');
    const countIo = new IntersectionObserver((entries) => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                animateCount(e.target);
                countIo.unobserve(e.target);
            }
        });
    }, {
        threshold: 0.4
    });
    countEls.forEach(el => countIo.observe(el));

    /* ===================== Ripple buttons ===================== */
    document.querySelectorAll('.btn-glow').forEach(btn => {
        btn.addEventListener('click', function(e) {
            const rect = this.getBoundingClientRect();
            const ripple = document.createElement('span');
            ripple.className = 'ripple';
            const size = Math.max(rect.width, rect.height);
            ripple.style.width = ripple.style.height = size + 'px';
            ripple.style.left = (e.clientX - rect.left - size / 2) + 'px';
            ripple.style.top = (e.clientY - rect.top - size / 2) + 'px';
            this.appendChild(ripple);
            setTimeout(() => ripple.remove(), 650);
        });
    });

    /* ===================== Mouse parallax on hero blur circles ===================== */
    document.addEventListener('mousemove', (e) => {
        const x = (e.clientX / window.innerWidth - 0.5);
        const y = (e.clientY / window.innerHeight - 0.5);
        document.querySelectorAll('.blur-circle').forEach((el, i) => {
            const factor = (i % 2 === 0 ? 18 : -18);
            el.style.transform = `translate(${x*factor}px, ${y*factor}px)`;
        });
    });

    /* ===================== Active nav link on scroll ===================== */
    const sections = ['top', 'brands', 'promotion', 'analytics', 'news', 'gallery'];
    const navLinks = document.querySelectorAll('.nav-link');
    window.addEventListener('scroll', () => {
        let current = sections[0];
        sections.forEach(id => {
            const el = document.getElementById(id);
            if (el && window.scrollY >= el.offsetTop - 140) current = id;
        });
        navLinks.forEach(l => {
            l.classList.toggle('active', l.getAttribute('href') === '#' + current);
        });
    });

    /* ===================== Promotion Slider ===================== */
    const promos = [{
            tag: 'Coffee Bean & Tea Leaf',
            title: 'Weekday Espresso Bundle',
            desc: 'Diskon 30% untuk pembelian 2 cup espresso series, Senin–Jumat.',
            color: 'from-amber-500/25 to-transparent',
            emoji: '☕'
        },
        {
            tag: "Wendy's",
            title: 'Baconator Combo Deal',
            desc: 'Hemat 25% untuk combo Baconator sepanjang minggu ini.',
            color: 'from-red-500/25 to-transparent',
            emoji: '🍔'
        },
        {
            tag: 'Baskin Robbins',
            title: 'Sundae Weekend Special',
            desc: 'Beli 2 gratis 1 untuk semua varian sundae, khusus akhir pekan.',
            color: 'from-pink-500/25 to-transparent',
            emoji: '🍨'
        },
        {
            tag: 'Gyukatsu',
            title: 'Hot Stone Experience',
            desc: 'Gratis appetizer untuk reservasi meja hari ini.',
            color: 'from-red-400/25 to-transparent',
            emoji: '🥩'
        },
        {
            tag: 'Tasty Kitchen',
            title: 'Chef\'s Table Friday',
            desc: 'Menu degustasi 5 course dengan harga spesial setiap Jumat.',
            color: 'from-blue-500/25 to-transparent',
            emoji: '🍽️'
        },
    ];
    const promoTrack = document.getElementById('promoTrack');
    const promoDots = document.getElementById('promoDots');
    let promoIndex = 0;
    let promoVisible = window.innerWidth < 768 ? 1 : (window.innerWidth < 1100 ? 2 : 3);

    function renderPromos() {
        promoTrack.innerHTML = promos.map(p => `
    <div class="shrink-0 gradient-border glass rounded-[1.5rem] p-7 relative overflow-hidden card-hover" style="width:calc((100% - ${(promoVisible-1)*20}px)/${promoVisible})">
      <div class="absolute inset-0 bg-gradient-to-br ${p.color} pointer-events-none"></div>
      <div class="relative">
        <span class="text-4xl">${p.emoji}</span>
        <p class="text-[11px] text-white/40 uppercase tracking-wider mt-5">${p.tag}</p>
        <h3 class="font-display font-semibold text-lg mt-1.5">${p.title}</h3>
        <p class="text-white/50 text-[13px] mt-2 leading-relaxed">${p.desc}</p>
        <a href="#" class="mt-5 inline-block text-blue-300 text-[13px] font-semibold hover:text-blue-200 transition-colors">Explore →</a>
      </div>
    </div>
  `).join('');
        const dotCount = promos.length - promoVisible + 1;
        promoDots.innerHTML = Array.from({
            length: Math.max(dotCount, 1)
        }).map((_, i) => `
    <button data-i="${i}" aria-label="Go to promo ${i+1}" class="promo-dot w-2 h-2 rounded-full transition-all ${i===0?'bg-blue-400 w-6':'bg-white/20'}"></button>
  `).join('');
        updatePromo();
    }

    function updatePromo() {
        const cardWidth = promoTrack.children[0]?.getBoundingClientRect().width || 0;
        promoTrack.style.transform = `translateX(-${promoIndex*(cardWidth+20)}px)`;
        document.querySelectorAll('.promo-dot').forEach((d, i) => {
            d.classList.toggle('bg-blue-400', i === promoIndex);
            d.classList.toggle('w-6', i === promoIndex);
            d.classList.toggle('bg-white/20', i !== promoIndex);
        });
    }
    document.getElementById('promoNext').addEventListener('click', () => {
        const max = promos.length - promoVisible;
        promoIndex = Math.min(promoIndex + 1, max);
        updatePromo();
    });
    document.getElementById('promoPrev').addEventListener('click', () => {
        promoIndex = Math.max(promoIndex - 1, 0);
        updatePromo();
    });
    promoDots.addEventListener('click', (e) => {
        const btn = e.target.closest('.promo-dot');
        if (!btn) return;
        promoIndex = parseInt(btn.dataset.i);
        updatePromo();
    });
    renderPromos();
    let promoAuto = setInterval(() => {
        const max = promos.length - promoVisible;
        promoIndex = promoIndex >= max ? 0 : promoIndex + 1;
        updatePromo();
    }, 4500);
    window.addEventListener('resize', () => {
        const newVisible = window.innerWidth < 768 ? 1 : (window.innerWidth < 1100 ? 2 : 3);
        if (newVisible !== promoVisible) {
            promoVisible = newVisible;
            promoIndex = 0;
            renderPromos();
        } else {
            updatePromo();
        }
    });

    /* ===================== Testimonial auto slide ===================== */
    const testimonials = [{
            name: 'Amelia Putri',
            role: 'Loyal Customer — Jakarta',
            text: 'Kualitas dan konsistensi rasa dari brand-brand Trans F&B selalu terjaga. Favorit keluarga kami!',
            rating: 5
        },
        {
            name: 'Bagus Santoso',
            role: 'Food Enthusiast — Surabaya',
            text: 'Gyukatsu punya pengalaman makan yang benar-benar premium. Worth every penny.',
            rating: 5
        },
        {
            name: 'Clara Wijaya',
            role: 'Coffee Lover — Bandung',
            text: 'The Coffee Bean & Tea Leaf jadi tempat kerja favorit saya, suasananya nyaman banget.',
            rating: 4
        },
    ];
    const testiTrack = document.getElementById('testiTrack');
    const testiDotsWrap = document.getElementById('testiDots');
    let testiIndex = 0;

    function renderTesti() {
        testiTrack.innerHTML = testimonials.map((t, i) => `
    <div class="testi-slide absolute inset-0 gradient-border glass-strong rounded-[1.5rem] p-8 flex flex-col items-center text-center transition-opacity duration-700 ${i===0?'opacity-100':'opacity-0 pointer-events-none'}">
      <img src="https://api.dicebear.com/7.x/notionists/svg?seed=${encodeURIComponent(t.name)}&backgroundColor=141b36" class="w-14 h-14 rounded-full border border-white/10 mb-3" alt="${t.name} avatar">
      <p class="text-white/70 text-[14.5px] leading-relaxed max-w-md">"${t.text}"</p>
      <div class="flex gap-0.5 mt-3 text-amber-300 text-[13px]">${'★'.repeat(t.rating)}${'☆'.repeat(5-t.rating)}</div>
      <p class="font-semibold text-[13px] mt-2">${t.name}</p>
      <p class="text-white/35 text-[11.5px]">${t.role}</p>
    </div>
  `).join('');
        testiDotsWrap.innerHTML = testimonials.map((_, i) => `
    <button data-i="${i}" aria-label="Go to testimonial ${i+1}" class="testi-dot w-2 h-2 rounded-full transition-all ${i===0?'bg-purple-400 w-6':'bg-white/20'}"></button>
  `).join('');
    }

    function showTesti(i) {
        document.querySelectorAll('.testi-slide').forEach((el, idx) => {
            el.classList.toggle('opacity-100', idx === i);
            el.classList.toggle('pointer-events-none', idx !== i);
            el.classList.toggle('opacity-0', idx !== i);
        });
        document.querySelectorAll('.testi-dot').forEach((d, idx) => {
            d.classList.toggle('bg-purple-400', idx === i);
            d.classList.toggle('w-6', idx === i);
            d.classList.toggle('bg-white/20', idx !== i);
        });
        testiIndex = i;
    }
    renderTesti();
    testiDotsWrap.addEventListener('click', (e) => {
        const btn = e.target.closest('.testi-dot');
        if (!btn) return;
        showTesti(parseInt(btn.dataset.i));
    });
    setInterval(() => {
        showTesti((testiIndex + 1) % testimonials.length);
    }, 5000);

    /* ===================== Charts ===================== */
    const ctx = document.getElementById('revenueChart');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'],
            datasets: [{
                    label: 'Revenue',
                    data: [142, 158, 149, 171, 196, 224, 182],
                    borderColor: '#4ea8ff',
                    backgroundColor: 'rgba(78,168,255,.12)',
                    tension: .4,
                    fill: true,
                    pointRadius: 3,
                    pointBackgroundColor: '#4ea8ff',
                    borderWidth: 2.5
                },
                {
                    label: 'Orders',
                    data: [5200, 5600, 5300, 6100, 6900, 7800, 6400],
                    borderColor: '#a78bfa',
                    backgroundColor: 'rgba(167,139,250,.08)',
                    tension: .4,
                    fill: true,
                    pointRadius: 3,
                    pointBackgroundColor: '#a78bfa',
                    borderWidth: 2.5,
                    yAxisID: 'y1'
                }
            ]
        },
        options: {
            responsive: true,
            interaction: {
                mode: 'index',
                intersect: false
            },
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                x: {
                    ticks: {
                        color: 'rgba(255,255,255,.4)'
                    },
                    grid: {
                        color: 'rgba(255,255,255,.05)'
                    }
                },
                y: {
                    ticks: {
                        color: 'rgba(255,255,255,.4)'
                    },
                    grid: {
                        color: 'rgba(255,255,255,.05)'
                    }
                },
                y1: {
                    display: false
                }
            }
        }
    });

    new Chart(document.getElementById('growthChart'), {
        type: 'doughnut',
        data: {
            labels: ['App', 'Walk-in', 'Delivery Partner', 'Website'],
            datasets: [{
                data: [38, 29, 24, 9],
                backgroundColor: ['#4ea8ff', '#8b5cf6', '#a78bfa', '#2e8dff'],
                borderColor: '#070b1a',
                borderWidth: 4
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        color: 'rgba(255,255,255,.55)',
                        boxWidth: 10,
                        padding: 14,
                        font: {
                            size: 11.5
                        }
                    }
                }
            },
            cutout: '68%'
        }
    });
    </script>
</body>

</html>