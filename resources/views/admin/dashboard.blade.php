<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trans Food & Beverage Official — Premium Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Sora:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    navy: {
                        950: '#05070f',
                        900: '#070a16',
                        800: '#0b1022',
                        700: '#111733',
                        600: '#1a2147'
                    },
                    electric: {
                        400: '#3b82f6',
                        500: '#2563eb',
                        600: '#1d4ed8'
                    },
                    violet: {
                        400: '#8b5cf6',
                        500: '#7c3aed',
                        600: '#6d28d9'
                    },
                    accent: {
                        400: '#22d3ee',
                        500: '#06b6d4'
                    }
                },
                fontFamily: {
                    sans: ['"Plus Jakarta Sans"', 'system-ui', 'sans-serif'],
                    display: ['Sora', 'system-ui', 'sans-serif']
                },
                animation: {
                    'aurora': 'aurora 18s ease-in-out infinite',
                    'float-slow': 'floatSlow 9s ease-in-out infinite',
                    'float-mid': 'floatMid 6s ease-in-out infinite',
                    'spin-slow': 'spin 22s linear infinite',
                    'shimmer': 'shimmer 3s linear infinite',
                    'pulse-glow': 'pulseGlow 4s ease-in-out infinite',
                    'marquee': 'marquee 28s linear infinite',
                },
                keyframes: {
                    aurora: {
                        '0%,100%': {
                            transform: 'translate(0,0) scale(1)',
                            opacity: '.55'
                        },
                        '50%': {
                            transform: 'translate(4%, -3%) scale(1.15)',
                            opacity: '.8'
                        }
                    },
                    floatSlow: {
                        '0%,100%': {
                            transform: 'translateY(0)'
                        },
                        '50%': {
                            transform: 'translateY(-18px)'
                        }
                    },
                    floatMid: {
                        '0%,100%': {
                            transform: 'translateY(0)'
                        },
                        '50%': {
                            transform: 'translateY(-10px)'
                        }
                    },
                    shimmer: {
                        '0%': {
                            backgroundPosition: '-200% 0'
                        },
                        '100%': {
                            backgroundPosition: '200% 0'
                        }
                    },
                    pulseGlow: {
                        '0%,100%': {
                            opacity: .5
                        },
                        '50%': {
                            opacity: 1
                        }
                    },
                    marquee: {
                        '0%': {
                            transform: 'translateX(0)'
                        },
                        '100%': {
                            transform: 'translateX(-50%)'
                        }
                    },
                }
            }
        }
    }
    </script>
    <style>
    :root {
        --bg: #05070f;
        --glass: rgba(255, 255, 255, 0.045);
        --glass-border: rgba(255, 255, 255, 0.09);
    }

    html,
    body {
        background: var(--bg);
        color: #e7ecf5;
    }

    body {
        font-family: 'Plus Jakarta Sans', system-ui, sans-serif;
        overflow-x: hidden;
    }

    /* ---------- Background layers ---------- */
    .bg-grid {
        background-image:
            linear-gradient(rgba(59, 130, 246, .06) 1px, transparent 1px),
            linear-gradient(90deg, rgba(139, 92, 246, .06) 1px, transparent 1px);
        background-size: 56px 56px;
        mask-image: radial-gradient(ellipse 80% 60% at 50% 0%, #000 40%, transparent 100%);
    }

    .noise {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='160' height='160'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.5'/%3E%3C/svg%3E");
        opacity: .04;
    }

    .aurora-blob {
        position: absolute;
        border-radius: 50%;
        filter: blur(90px);
        mix-blend-mode: screen;
        pointer-events: none;
    }

    /* ---------- Glass ---------- */
    .glass {
        background: var(--glass);
        border: 1px solid var(--glass-border);
        backdrop-filter: blur(18px) saturate(140%);
        -webkit-backdrop-filter: blur(18px) saturate(140%);
    }

    .glass-strong {
        background: rgba(10, 14, 30, 0.6);
        border: 1px solid rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(22px) saturate(160%);
        -webkit-backdrop-filter: blur(22px) saturate(160%);
    }

    .grad-border {
        position: relative;
    }

    .grad-border::before {
        content: '';
        position: absolute;
        inset: 0;
        padding: 1px;
        border-radius: inherit;
        background: linear-gradient(135deg, rgba(59, 130, 246, .7), rgba(139, 92, 246, .5), rgba(34, 211, 238, .4));
        -webkit-mask: linear-gradient(#000 0 0) content-box, linear-gradient(#000 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
        pointer-events: none;
    }

    /* ---------- Text gradient ---------- */
    .text-grad {
        background: linear-gradient(110deg, #fff 10%, #93c5fd 40%, #c4b5fd 70%, #67e8f9 100%);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .text-grad-blue {
        background: linear-gradient(110deg, #60a5fa, #818cf8 50%, #22d3ee);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    /* ---------- Buttons ---------- */
    .btn-magnetic {
        transition: transform .25s cubic-bezier(.2, .8, .2, 1), box-shadow .25s;
    }

    .btn-magnetic:hover {
        box-shadow: 0 0 0 1px rgba(99, 102, 241, .5), 0 12px 40px -8px rgba(59, 130, 246, .6);
    }

    .ripple {
        position: absolute;
        border-radius: 50%;
        transform: scale(0);
        animation: ripple .6s ease-out;
        background: rgba(255, 255, 255, .45);
        pointer-events: none;
    }

    @keyframes ripple {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }

    /* ---------- Reveal ---------- */
    .reveal {
        opacity: 0;
        transform: translateY(28px);
        transition: opacity .8s cubic-bezier(.2, .8, .2, 1), transform .8s cubic-bezier(.2, .8, .2, 1);
    }

    .reveal.in {
        opacity: 1;
        transform: none;
    }

    .reveal-scale {
        opacity: 0;
        transform: scale(.94);
        transition: opacity .8s ease, transform .8s cubic-bezier(.2, .8, .2, 1);
    }

    .reveal-scale.in {
        opacity: 1;
        transform: none;
    }

    /* ---------- Brand cards ---------- */
    .brand-bg {
        background-size: cover;
        background-position: center;
    }

    .brand-scrim {
        background: linear-gradient(180deg, rgba(5, 7, 15, .35) 0%, rgba(5, 7, 15, .55) 45%, rgba(5, 7, 15, .92) 100%);
    }

    /* marquee */
    .marquee-track {
        display: flex;
        width: max-content;
        animation: marquee 30s linear infinite;
    }

    @keyframes marquee {
        0% {
            transform: translateX(0)
        }

        100% {
            transform: translateX(-50%)
        }
    }

    /* scrollbar */
    ::-webkit-scrollbar {
        width: 10px;
        height: 10px;
    }

    ::-webkit-scrollbar-track {
        background: #070a16;
    }

    ::-webkit-scrollbar-thumb {
        background: linear-gradient(#1d4ed8, #7c3aed);
        border-radius: 10px;
    }

    /* nav link */
    .nav-link {
        position: relative;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -6px;
        height: 2px;
        width: 0;
        background: linear-gradient(90deg, #3b82f6, #8b5cf6);
        transition: width .3s ease;
    }

    .nav-link:hover::after,
    .nav-link.active::after {
        width: 100%;
    }

    /* gallery */
    .gallery-item img {
        transition: transform .7s cubic-bezier(.2, .8, .2, 1);
    }

    .gallery-item:hover img {
        transform: scale(1.12);
    }

    /* slider */
    .promo-slide {
        transition: opacity .8s ease, transform .8s ease;
    }

    /* count glow */
    .count-glow {
        text-shadow: 0 0 24px rgba(96, 165, 250, .5);
    }

    /* timeline */
    .timeline-dot {
        box-shadow: 0 0 0 4px rgba(59, 130, 246, .15), 0 0 18px rgba(59, 130, 246, .6);
    }

    /* chart bars */
    .chart-bar {
        transition: height 1s cubic-bezier(.2, .8, .2, 1), opacity .3s;
    }

    /* mobile menu */
    .mobile-menu {
        max-height: 0;
        overflow: hidden;
        transition: max-height .4s ease;
    }

    .mobile-menu.open {
        max-height: 520px;
    }

    @media (prefers-reduced-motion: reduce) {
        * {
            animation: none !important;
            transition: none !important;
        }
    }
    </style>
</head>

<body class="relative antialiased selection:bg-blue-500/30 selection:text-white">

    <!-- ============ BACKGROUND LAYERS ============ -->
    <div class="fixed inset-0 -z-10 overflow-hidden bg-navy-950">
        <div class="absolute inset-0 bg-grid"></div>
        <div class="aurora-blob w-[42rem] h-[42rem] -top-40 -left-32 bg-blue-600/30 animate-aurora"></div>
        <div class="aurora-blob w-[36rem] h-[36rem] top-1/3 -right-24 bg-violet-600/25 animate-aurora"
            style="animation-delay:-6s"></div>
        <div class="aurora-blob w-[30rem] h-[30rem] bottom-0 left-1/3 bg-cyan-500/20 animate-aurora"
            style="animation-delay:-12s"></div>
        <canvas id="particles" class="absolute inset-0 w-full h-full"></canvas>
        <div class="absolute inset-0 noise"></div>
        <div id="parallax-light"
            class="absolute w-[28rem] h-[28rem] rounded-full bg-blue-500/10 blur-3xl pointer-events-none transition-transform duration-300">
        </div>
    </div>

    <!-- ============ NAVBAR ============ -->
    <header id="navbar" class="fixed top-0 inset-x-0 z-50 transition-all duration-500">
        <nav class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mt-3 flex items-center justify-between rounded-2xl glass-strong px-4 sm:px-6 h-16 transition-all duration-500"
                id="nav-inner">
                <!-- Logo -->
                <a href="#hero" class="flex items-center gap-3 group">
                    <div
                        class="relative w-10 h-10 rounded-xl bg-gradient-to-br from-blue-500 via-indigo-500 to-violet-500 flex items-center justify-center shadow-lg shadow-blue-500/30">
                        <span class="font-display font-extrabold text-white text-lg">T</span>
                        <div class="absolute inset-0 rounded-xl ring-1 ring-white/30"></div>
                    </div>
                    <div class="leading-tight">
                        <p class="font-display font-bold text-white text-sm sm:text-base tracking-tight">Trans <span
                                class="text-grad-blue">F&amp;B</span></p>
                        <p class="text-[10px] uppercase tracking-[0.2em] text-slate-400">Food &amp; Beverage</p>
                    </div>
                </a>

                <!-- Desktop Menu -->
                <div class="hidden lg:flex items-center gap-8 text-sm font-medium text-slate-300">
                    <a href="#hero" class="nav-link active hover:text-white">Dashboard</a>
                    <a href="#brands" class="nav-link hover:text-white">Brands</a>
                    <a href="#promotion" class="nav-link hover:text-white">Campaign</a>
                    <a href="#analytics" class="nav-link hover:text-white">Performance</a>
                    <a href="#news" class="nav-link hover:text-white">News</a>
                    <a href="#gallery" class="nav-link hover:text-white">Gallery</a>
                    <a href="#promotion" class="nav-link hover:text-white">Promotion</a>
                </div>

                <!-- Right -->
                <div class="flex items-center gap-2 sm:gap-3">
                    <button
                        class="hidden sm:flex items-center gap-2 glass rounded-xl px-3 h-10 text-slate-400 hover:text-white transition"
                        onclick="document.getElementById('search-bar').classList.toggle('hidden')">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="11" cy="11" r="7" />
                            <path d="m21 21-4.3-4.3" />
                        </svg>
                        <span class="text-xs">Search</span>
                    </button>
                    <button
                        class="relative glass rounded-xl w-10 h-10 flex items-center justify-center text-slate-300 hover:text-white transition"
                        aria-label="Notifications">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path
                                d="M15 17h5l-1.4-1.4A2 2 0 0 1 18 14.2V11a6 6 0 1 0-12 0v3.2c0 .5-.2 1-.6 1.4L4 17h5m6 0v1a3 3 0 1 1-6 0v-1m6 0H9" />
                        </svg>
                        <span class="absolute top-2 right-2 w-2 h-2 rounded-full bg-cyan-400 animate-pulse-glow"></span>
                    </button>
                    <button
                        class="flex items-center gap-2 glass rounded-xl pl-1 pr-3 h-10 hover:ring-1 hover:ring-white/20 transition">
                        <span
                            class="w-8 h-8 rounded-lg bg-gradient-to-br from-violet-500 to-blue-500 flex items-center justify-center text-xs font-bold text-white">OF</span>
                        <span class="hidden sm:block text-xs text-slate-200 font-medium">Official</span>
                    </button>
                    <button id="menu-btn"
                        class="lg:hidden glass rounded-xl w-10 h-10 flex items-center justify-center text-white"
                        aria-label="Menu">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Search bar -->
            <div id="search-bar" class="hidden mt-2 glass-strong rounded-2xl p-4">
                <div class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <circle cx="11" cy="11" r="7" />
                        <path d="m21 21-4.3-4.3" />
                    </svg>
                    <input type="text" placeholder="Search brands, promotions, news…"
                        class="flex-1 bg-transparent outline-none text-sm text-white placeholder:text-slate-500" />
                    <kbd class="text-[10px] text-slate-400 glass px-2 py-1 rounded">ESC</kbd>
                </div>
            </div>

            <!-- Mobile menu -->
            <div id="mobile-menu" class="mobile-menu lg:hidden mt-2 glass-strong rounded-2xl">
                <div class="flex flex-col p-4 text-sm text-slate-300">
                    <a href="#hero" class="py-2.5 hover:text-white">Dashboard</a>
                    <a href="#brands" class="py-2.5 hover:text-white">Brands</a>
                    <a href="#promotion" class="py-2.5 hover:text-white">Campaign</a>
                    <a href="#analytics" class="py-2.5 hover:text-white">Performance</a>
                    <a href="#news" class="py-2.5 hover:text-white">News</a>
                    <a href="#gallery" class="py-2.5 hover:text-white">Gallery</a>
                    <a href="#promotion" class="py-2.5 hover:text-white">Promotion</a>
                </div>
            </div>
        </nav>
    </header>

    <main class="pt-24">

        <!-- ============ HERO ============ -->
        <section id="hero" class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-10 pb-20">
            <div class="relative">
                <div class="reveal in text-center max-w-4xl mx-auto">
                    <div
                        class="inline-flex items-center gap-2 glass rounded-full px-4 py-1.5 text-xs text-slate-300 mb-6">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse-glow"></span>
                        Live Dashboard · Real-time overview
                    </div>
                    <h1
                        class="font-display text-4xl sm:text-6xl lg:text-7xl font-extrabold tracking-tight leading-[1.05]">
                        <span class="text-slate-200">Welcome Back,</span><br />
                        <span class="text-grad">Trans Food &amp; Beverage</span><br />
                        <span class="text-grad-blue">Official</span>
                    </h1>
                    <p class="mt-6 text-base sm:text-lg text-slate-400 max-w-2xl mx-auto">
                        Manage all Trans F&amp;B brands in one premium dashboard — performance, campaigns, and growth,
                        beautifully unified.
                    </p>
                    <div class="mt-8 flex flex-wrap items-center justify-center gap-3">
                        <a href="#brands"
                            class="btn-magnetic relative overflow-hidden rounded-xl px-6 h-12 inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-violet-600 text-white font-semibold text-sm">
                            Explore Brands
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M5 12h14M13 6l6 6-6 6" />
                            </svg>
                        </a>
                        <a href="#analytics"
                            class="btn-magnetic rounded-xl px-6 h-12 inline-flex items-center gap-2 glass text-white font-semibold text-sm hover:ring-1 hover:ring-white/20">
                            View Performance
                        </a>
                    </div>
                </div>

                <!-- Floating glass preview card -->
                <div class="mt-16 grid lg:grid-cols-3 gap-6">
                    <div
                        class="lg:col-span-2 reveal-scale in grad-border rounded-3xl glass-strong p-6 sm:p-8 relative overflow-hidden">
                        <div class="absolute -top-20 -right-20 w-64 h-64 rounded-full bg-blue-600/20 blur-3xl"></div>
                        <div class="flex items-center justify-between mb-6">
                            <div>
                                <p class="text-xs uppercase tracking-widest text-slate-400">Network Snapshot</p>
                                <h3 class="font-display text-2xl font-bold text-white mt-1">Trans F&amp;B Ecosystem</h3>
                            </div>
                            <span class="glass rounded-full px-3 py-1 text-xs text-cyan-300">Q4 · 2026</span>
                        </div>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                            <div class="glass rounded-2xl p-4">
                                <p class="text-[11px] uppercase tracking-wider text-slate-400">Brands</p>
                                <p class="font-display text-2xl font-bold text-white mt-1">6</p>
                                <p class="text-xs text-emerald-400 mt-1">+2 this year</p>
                            </div>
                            <div class="glass rounded-2xl p-4">
                                <p class="text-[11px] uppercase tracking-wider text-slate-400">Outlets</p>
                                <p class="font-display text-2xl font-bold text-white mt-1">1,240</p>
                                <p class="text-xs text-emerald-400 mt-1">+8.4%</p>
                            </div>
                            <div class="glass rounded-2xl p-4">
                                <p class="text-[11px] uppercase tracking-wider text-slate-400">Countries</p>
                                <p class="font-display text-2xl font-bold text-white mt-1">14</p>
                                <p class="text-xs text-cyan-400 mt-1">Global reach</p>
                            </div>
                            <div class="glass rounded-2xl p-4">
                                <p class="text-[11px] uppercase tracking-wider text-slate-400">Employees</p>
                                <p class="font-display text-2xl font-bold text-white mt-1">22K</p>
                                <p class="text-xs text-violet-400 mt-1">Worldwide</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="reveal-scale in grad-border rounded-3xl glass-strong p-6 sm:p-8 relative overflow-hidden">
                        <div class="absolute -bottom-16 -left-16 w-56 h-56 rounded-full bg-violet-600/20 blur-3xl">
                        </div>
                        <p class="text-xs uppercase tracking-widest text-slate-400">Live Revenue</p>
                        <h3 class="font-display text-2xl font-bold text-white mt-1">Today</h3>
                        <p class="font-display text-4xl font-extrabold text-grad-blue mt-4 count-glow"
                            data-count="487200" data-prefix="Rp ">Rp 0</p>
                        <div class="mt-6 h-2 rounded-full bg-white/5 overflow-hidden">
                            <div
                                class="h-full w-3/4 rounded-full bg-gradient-to-r from-blue-500 to-violet-500 animate-pulse-glow">
                            </div>
                        </div>
                        <p class="text-xs text-slate-400 mt-3">78% of daily target · updating live</p>
                        <div class="mt-6 flex items-center gap-2 text-xs text-emerald-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="m6 9 6-6 6 6M6 15l6 6 6-6" />
                            </svg>
                            +12.6% vs yesterday
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============ OVERVIEW CARDS ============ -->
        <section class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pb-16">
            <div class="flex items-end justify-between mb-6">
                <div>
                    <p class="text-xs uppercase tracking-widest text-slate-400">Overview</p>
                    <h2 class="font-display text-2xl sm:text-3xl font-bold text-white">At a Glance</h2>
                </div>
                <span class="glass rounded-full px-3 py-1 text-xs text-slate-300">Updated just now</span>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                <!-- card -->
                <article
                    class="reveal grad-border rounded-3xl glass p-6 relative overflow-hidden group hover:-translate-y-1 transition-transform duration-500">
                    <div
                        class="absolute -top-10 -right-10 w-40 h-40 rounded-full bg-blue-600/20 blur-2xl group-hover:bg-blue-500/30 transition">
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="w-11 h-11 rounded-xl bg-blue-500/15 flex items-center justify-center text-blue-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M3 7h18M3 12h18M3 17h18" />
                            </svg>
                        </div>
                        <span class="text-xs text-emerald-400">+2</span>
                    </div>
                    <p class="mt-5 text-xs uppercase tracking-wider text-slate-400">Total Brand</p>
                    <p class="font-display text-4xl font-extrabold text-white mt-1 count" data-count="6">0</p>
                    <p class="text-xs text-slate-500 mt-2">Active across network</p>
                </article>

                <article
                    class="reveal grad-border rounded-3xl glass p-6 relative overflow-hidden group hover:-translate-y-1 transition-transform duration-500"
                    style="transition-delay:.05s">
                    <div
                        class="absolute -top-10 -right-10 w-40 h-40 rounded-full bg-violet-600/20 blur-2xl group-hover:bg-violet-500/30 transition">
                    </div>
                    <div class="flex items-center justify-between">
                        <div
                            class="w-11 h-11 rounded-xl bg-violet-500/15 flex items-center justify-center text-violet-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M12 21s-7-4.5-7-10a7 7 0 0 1 14 0c0 5.5-7 10-7 10Z" />
                                <circle cx="12" cy="11" r="2.5" />
                            </svg>
                        </div>
                        <span class="text-xs text-emerald-400">+8.4%</span>
                    </div>
                    <p class="mt-5 text-xs uppercase tracking-wider text-slate-400">Total Outlet</p>
                    <p class="font-display text-4xl font-extrabold text-white mt-1 count" data-count="1240">0</p>
                    <p class="text-xs text-slate-500 mt-2">14 countries worldwide</p>
                </article>

                <article
                    class="reveal grad-border rounded-3xl glass p-6 relative overflow-hidden group hover:-translate-y-1 transition-transform duration-500"
                    style="transition-delay:.1s">
                    <div
                        class="absolute -top-10 -right-10 w-40 h-40 rounded-full bg-cyan-500/20 blur-2xl group-hover:bg-cyan-400/30 transition">
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="w-11 h-11 rounded-xl bg-cyan-500/15 flex items-center justify-center text-cyan-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
                            </svg>
                        </div>
                        <span class="text-xs text-emerald-400">+12.6%</span>
                    </div>
                    <p class="mt-5 text-xs uppercase tracking-wider text-slate-400">Today's Revenue</p>
                    <p class="font-display text-4xl font-extrabold text-white mt-1"><span class="count" data-count="487"
                            data-prefix="" data-suffix="M">0</span></p>
                    <p class="text-xs text-slate-500 mt-2">Rp 487M · live</p>
                </article>

                <article
                    class="reveal grad-border rounded-3xl glass p-6 relative overflow-hidden group hover:-translate-y-1 transition-transform duration-500"
                    style="transition-delay:.15s">
                    <div
                        class="absolute -top-10 -right-10 w-40 h-40 rounded-full bg-emerald-500/20 blur-2xl group-hover:bg-emerald-400/30 transition">
                    </div>
                    <div class="flex items-center justify-between">
                        <div
                            class="w-11 h-11 rounded-xl bg-emerald-500/15 flex items-center justify-center text-emerald-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="m12 2 2.4 7.4H22l-6 4.5 2.3 7.1-6.3-4.6L5.7 21 8 14 2 9.4h7.6Z" />
                            </svg>
                        </div>
                        <span class="text-xs text-emerald-400">+0.3</span>
                    </div>
                    <p class="mt-5 text-xs uppercase tracking-wider text-slate-400">Customer Satisfaction</p>
                    <p class="font-display text-4xl font-extrabold text-white mt-1"><span class="count" data-count="4.9"
                            data-decimals="1">0</span><span class="text-2xl text-slate-400">/5</span></p>
                    <p class="text-xs text-slate-500 mt-2">From 128K reviews</p>
                </article>
            </div>
        </section>

        <!-- ============ BRANDS ============ -->
        <section id="brands" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center mb-12 reveal">
                <p class="text-xs uppercase tracking-widest text-slate-400">Our Brands</p>
                <h2 class="font-display text-3xl sm:text-5xl font-extrabold text-grad mt-2">A Portfolio of Icons</h2>
                <p class="text-slate-400 mt-3 max-w-2xl mx-auto">Each brand, a world of its own. Explore the stories
                    behind the names.</p>
            </div>

            <!-- 1. The Coffee Bean & Tea Leaf -->
            <article class="reveal relative rounded-[2rem] overflow-hidden grad-border group mb-10" data-parallax>
                <div class="brand-bg absolute inset-0 scale-110 transition-transform duration-700 group-hover:scale-125"
                    style="background-image:url('https://images.pexels.com/photos/13240964/pexels-photo-13240964.jpeg?auto=compress&cs=tinysrgb&h=650&w=940')">
                </div>
                <div class="brand-scrim absolute inset-0"></div>
                <div class="absolute top-6 right-6 glass rounded-full px-3 py-1 text-xs text-amber-200">Coffee · Premium
                </div>
                <div class="relative p-8 sm:p-12 lg:p-16 min-h-[28rem] flex flex-col justify-end">
                    <p class="text-xs uppercase tracking-[0.3em] text-amber-300/80 mb-3">Since 1963</p>
                    <h3 class="font-display text-3xl sm:text-5xl font-extrabold text-white max-w-xl">The Coffee Bean
                        &amp; Tea Leaf</h3>
                    <p class="mt-4 text-slate-200 max-w-xl text-sm sm:text-base">Hand-crafted coffee and rare teas,
                        roasted to perfection. A California icon now loved across the world.</p>
                    <div class="mt-6 flex flex-wrap items-center gap-3">
                        <button
                            class="btn-magnetic rounded-xl px-5 h-11 bg-gradient-to-r from-amber-500 to-orange-500 text-white font-semibold text-sm">Explore</button>
                        <button class="btn-magnetic rounded-xl px-5 h-11 glass text-white font-semibold text-sm">View
                            Outlets</button>
                    </div>
                    <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-2xl">
                        <div class="glass rounded-2xl p-3">
                            <p class="text-[10px] uppercase tracking-wider text-slate-400">Today's Sales</p>
                            <p class="font-display text-lg font-bold text-white">Rp 92M</p>
                        </div>
                        <div class="glass rounded-2xl p-3">
                            <p class="text-[10px] uppercase tracking-wider text-slate-400">Visitors</p>
                            <p class="font-display text-lg font-bold text-white">18.4K</p>
                        </div>
                        <div class="glass rounded-2xl p-3">
                            <p class="text-[10px] uppercase tracking-wider text-slate-400">Promotion</p>
                            <p class="font-display text-lg font-bold text-amber-300">3 Live</p>
                        </div>
                        <div class="glass rounded-2xl p-3">
                            <p class="text-[10px] uppercase tracking-wider text-slate-400">Rating</p>
                            <p class="font-display text-lg font-bold text-white">4.9 ★</p>
                        </div>
                    </div>
                </div>
            </article>

            <!-- 2. Wendy's -->
            <article class="reveal relative rounded-[2rem] overflow-hidden grad-border group mb-10" data-parallax>
                <div class="brand-bg absolute inset-0 scale-110 transition-transform duration-700 group-hover:scale-125"
                    style="background-image:url('https://images.pexels.com/photos/18987002/pexels-photo-18987002.jpeg?auto=compress&cs=tinysrgb&h=650&w=940')">
                </div>
                <div class="brand-scrim absolute inset-0"></div>
                <div class="absolute top-6 left-6 glass rounded-full px-3 py-1 text-xs text-red-200">Burger · Best
                    Seller</div>
                <div class="relative p-8 sm:p-12 lg:p-16 min-h-[28rem] flex flex-col justify-end items-end text-right">
                    <div class="max-w-xl">
                        <p class="text-xs uppercase tracking-[0.3em] text-red-300/80 mb-3">Fresh, Never Frozen</p>
                        <h3 class="font-display text-3xl sm:text-5xl font-extrabold text-white">Wendy's</h3>
                        <p class="mt-4 text-slate-200 text-sm sm:text-base">Square patties, fresh produce, and that
                            signature creamy Frosty. Bold flavor, honest food.</p>
                        <div class="mt-6 inline-flex glass rounded-2xl px-4 py-2 text-sm text-amber-200">🔥 Best Seller:
                            Baconator Combo</div>
                        <div class="mt-6 flex flex-wrap items-center justify-end gap-3">
                            <button
                                class="btn-magnetic rounded-xl px-5 h-11 bg-gradient-to-r from-red-500 to-rose-500 text-white font-semibold text-sm">Order
                                Now</button>
                            <button
                                class="btn-magnetic rounded-xl px-5 h-11 glass text-white font-semibold text-sm">Explore</button>
                        </div>
                        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3">
                            <div class="glass rounded-2xl p-3">
                                <p class="text-[10px] uppercase tracking-wider text-slate-400">Today's Sales</p>
                                <p class="font-display text-lg font-bold text-white">Rp 78M</p>
                            </div>
                            <div class="glass rounded-2xl p-3">
                                <p class="text-[10px] uppercase tracking-wider text-slate-400">Visitors</p>
                                <p class="font-display text-lg font-bold text-white">22.1K</p>
                            </div>
                            <div class="glass rounded-2xl p-3">
                                <p class="text-[10px] uppercase tracking-wider text-slate-400">Promotion</p>
                                <p class="font-display text-lg font-bold text-red-300">5 Live</p>
                            </div>
                            <div class="glass rounded-2xl p-3">
                                <p class="text-[10px] uppercase tracking-wider text-slate-400">Rating</p>
                                <p class="font-display text-lg font-bold text-white">4.7 ★</p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <!-- 3. Baskin Robbins -->
            <article class="reveal relative rounded-[2rem] overflow-hidden grad-border group mb-10" data-parallax>
                <div class="brand-bg absolute inset-0 scale-110 transition-transform duration-700 group-hover:scale-125"
                    style="background-image:url('https://images.pexels.com/photos/26068500/pexels-photo-26068500.jpeg?auto=compress&cs=tinysrgb&h=650&w=940')">
                </div>
                <div class="brand-scrim absolute inset-0"
                    style="background:linear-gradient(180deg, rgba(5,7,15,.3) 0%, rgba(5,7,15,.5) 40%, rgba(5,7,15,.9) 100%);">
                </div>
                <div class="absolute top-6 right-6 glass rounded-full px-3 py-1 text-xs text-pink-200">Ice Cream · 31
                    Flavors</div>
                <!-- floating scoops -->
                <div
                    class="absolute top-1/4 left-10 w-16 h-16 rounded-full bg-gradient-to-br from-pink-400 to-rose-500 blur-[2px] opacity-80 animate-float-slow shadow-lg shadow-pink-500/40">
                </div>
                <div
                    class="absolute top-1/3 left-1/4 w-12 h-12 rounded-full bg-gradient-to-br from-amber-300 to-orange-400 blur-[2px] opacity-80 animate-float-mid shadow-lg shadow-amber-500/40">
                </div>
                <div class="absolute top-1/2 left-16 w-10 h-10 rounded-full bg-gradient-to-br from-fuchsia-400 to-violet-500 blur-[2px] opacity-80 animate-float-slow shadow-lg shadow-fuchsia-500/40"
                    style="animation-delay:-3s"></div>
                <div class="relative p-8 sm:p-12 lg:p-16 min-h-[28rem] flex flex-col justify-end">
                    <p class="text-xs uppercase tracking-[0.3em] text-pink-300/80 mb-3">31 Flavors of Joy</p>
                    <h3 class="font-display text-3xl sm:text-5xl font-extrabold text-white">Baskin Robbins</h3>
                    <p class="mt-4 text-slate-200 max-w-xl text-sm sm:text-base">A flavor for every day of the month.
                        Creamy, dreamy, and always celebrating the sweet side of life.</p>
                    <div class="mt-6 flex flex-wrap items-center gap-3">
                        <button
                            class="btn-magnetic rounded-xl px-5 h-11 bg-gradient-to-r from-pink-500 to-fuchsia-500 text-white font-semibold text-sm">Explore
                            Flavors</button>
                        <span class="glass rounded-xl px-4 h-11 inline-flex items-center text-sm text-pink-200">Today's
                            Sales: Rp 54M</span>
                    </div>
                </div>
            </article>

            <!-- 4. Warung Wardani -->
            <article class="reveal relative rounded-[2rem] overflow-hidden grad-border group mb-10" data-parallax>
                <div class="brand-bg absolute inset-0 scale-110 transition-transform duration-700 group-hover:scale-125"
                    style="background-image:url('https://images.pexels.com/photos/37179935/pexels-photo-37179935.jpeg?auto=compress&cs=tinysrgb&h=650&w=940')">
                </div>
                <div class="brand-scrim absolute inset-0"></div>
                <!-- traditional pattern overlay -->
                <div class="absolute inset-0 opacity-20"
                    style="background-image:radial-gradient(circle at 20% 20%, #d97706 0, transparent 8%), radial-gradient(circle at 80% 30%, #b45309 0, transparent 8%), radial-gradient(circle at 40% 70%, #92400e 0, transparent 8%); background-size:120px 120px;">
                </div>
                <div class="absolute top-6 left-6 glass rounded-full px-3 py-1 text-xs text-amber-200">Nusantara ·
                    Heritage</div>
                <div
                    class="relative p-8 sm:p-12 lg:p-16 min-h-[28rem] flex flex-col justify-center items-center text-center">
                    <p class="text-xs uppercase tracking-[0.3em] text-amber-300/80 mb-3">Warisan Nusantara</p>
                    <h3 class="font-display text-3xl sm:text-5xl font-extrabold text-white">Warung Wardani</h3>
                    <p class="mt-4 text-slate-200 max-w-xl text-sm sm:text-base">Sajian nusantara otentik dengan resep
                        turun-temurun. Cita rasa rumahan yang tak tergantikan.</p>
                    <div class="mt-6 glass rounded-2xl px-4 py-2 text-sm text-amber-200">👑 Best Menu: Nasi Liwet
                        Spesial</div>
                    <div class="mt-6 flex flex-wrap items-center justify-center gap-3">
                        <button
                            class="btn-magnetic rounded-xl px-5 h-11 bg-gradient-to-r from-amber-500 to-yellow-600 text-white font-semibold text-sm">Explore
                            Menu</button>
                        <button class="btn-magnetic rounded-xl px-5 h-11 glass text-white font-semibold text-sm">Reserve
                            Table</button>
                    </div>
                    <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3">
                        <div class="glass rounded-2xl p-3">
                            <p class="text-[10px] uppercase tracking-wider text-slate-400">Today's Sales</p>
                            <p class="font-display text-lg font-bold text-white">Rp 31M</p>
                        </div>
                        <div class="glass rounded-2xl p-3">
                            <p class="text-[10px] uppercase tracking-wider text-slate-400">Visitors</p>
                            <p class="font-display text-lg font-bold text-white">9.8K</p>
                        </div>
                        <div class="glass rounded-2xl p-3">
                            <p class="text-[10px] uppercase tracking-wider text-slate-400">Promotion</p>
                            <p class="font-display text-lg font-bold text-amber-300">2 Live</p>
                        </div>
                        <div class="glass rounded-2xl p-3">
                            <p class="text-[10px] uppercase tracking-wider text-slate-400">Rating</p>
                            <p class="font-display text-lg font-bold text-white">4.8 ★</p>
                        </div>
                    </div>
                </div>
            </article>

            <!-- 5. Gyukatsu -->
            <article class="reveal relative rounded-[2rem] overflow-hidden grad-border group mb-10" data-parallax>
                <div class="brand-bg absolute inset-0 scale-110 transition-transform duration-700 group-hover:scale-125"
                    style="background-image:url('https://images.pexels.com/photos/31406831/pexels-photo-31406831.jpeg?auto=compress&cs=tinysrgb&h=650&w=940')">
                </div>
                <div class="brand-scrim absolute inset-0"
                    style="background:linear-gradient(180deg, rgba(5,7,15,.5) 0%, rgba(5,7,15,.7) 50%, rgba(5,7,15,.95) 100%);">
                </div>
                <div class="absolute top-6 right-6 glass rounded-full px-3 py-1 text-xs text-red-300">Japan · Premium
                </div>
                <div class="relative p-8 sm:p-12 lg:p-16 min-h-[28rem] flex flex-col justify-end">
                    <p class="text-xs uppercase tracking-[0.3em] text-red-300/80 mb-3">日本の味 · Premium Cut</p>
                    <h3 class="font-display text-3xl sm:text-5xl font-extrabold text-white">Gyukatsu</h3>
                    <p class="mt-4 text-slate-200 max-w-xl text-sm sm:text-base">Wagyu cutlet, breaded crisp and seared
                        at your table. A Japanese ritual of texture and taste, served premium.</p>
                    <div class="mt-6 flex flex-wrap items-center gap-3">
                        <button
                            class="btn-magnetic rounded-xl px-5 h-11 bg-gradient-to-r from-red-600 to-rose-700 text-white font-semibold text-sm">Reserve
                            Experience</button>
                        <button
                            class="btn-magnetic rounded-xl px-5 h-11 glass text-white font-semibold text-sm">Explore</button>
                    </div>
                    <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-2xl">
                        <div class="glass rounded-2xl p-3">
                            <p class="text-[10px] uppercase tracking-wider text-slate-400">Today's Sales</p>
                            <p class="font-display text-lg font-bold text-white">Rp 67M</p>
                        </div>
                        <div class="glass rounded-2xl p-3">
                            <p class="text-[10px] uppercase tracking-wider text-slate-400">Visitors</p>
                            <p class="font-display text-lg font-bold text-white">7.2K</p>
                        </div>
                        <div class="glass rounded-2xl p-3">
                            <p class="text-[10px] uppercase tracking-wider text-slate-400">Promotion</p>
                            <p class="font-display text-lg font-bold text-red-300">1 Live</p>
                        </div>
                        <div class="glass rounded-2xl p-3">
                            <p class="text-[10px] uppercase tracking-wider text-slate-400">Rating</p>
                            <p class="font-display text-lg font-bold text-white">4.9 ★</p>
                        </div>
                    </div>
                </div>
            </article>

            <!-- 6. Tasty Kitchen -->
            <article class="reveal relative rounded-[2rem] overflow-hidden grad-border group" data-parallax>
                <div class="brand-bg absolute inset-0 scale-110 transition-transform duration-700 group-hover:scale-125"
                    style="background-image:url('https://images.pexels.com/photos/35546716/pexels-photo-35546716.jpeg?auto=compress&cs=tinysrgb&h=650&w=940')">
                </div>
                <div class="brand-scrim absolute inset-0"></div>
                <div class="absolute top-6 left-6 glass rounded-full px-3 py-1 text-xs text-emerald-200">Modern ·
                    Trending</div>
                <div class="relative p-8 sm:p-12 lg:p-16 min-h-[28rem] flex flex-col justify-end items-end text-right">
                    <div class="max-w-xl">
                        <p class="text-xs uppercase tracking-[0.3em] text-emerald-300/80 mb-3">Chef's Recommendation</p>
                        <h3 class="font-display text-3xl sm:text-5xl font-extrabold text-white">Tasty Kitchen</h3>
                        <p class="mt-4 text-slate-200 text-sm sm:text-base">Modern comfort food with a chef's touch.
                            Globally inspired, locally loved, always trending.</p>
                        <div class="mt-6 inline-flex glass rounded-2xl px-4 py-2 text-sm text-emerald-200">📈 Trending:
                            Truffle Mushroom Pasta</div>
                        <div class="mt-6 flex flex-wrap items-center justify-end gap-3">
                            <button
                                class="btn-magnetic rounded-xl px-5 h-11 bg-gradient-to-r from-emerald-500 to-teal-500 text-white font-semibold text-sm">Explore
                                Menu</button>
                            <button
                                class="btn-magnetic rounded-xl px-5 h-11 glass text-white font-semibold text-sm">Book
                                Table</button>
                        </div>
                        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3">
                            <div class="glass rounded-2xl p-3">
                                <p class="text-[10px] uppercase tracking-wider text-slate-400">Today's Sales</p>
                                <p class="font-display text-lg font-bold text-white">Rp 44M</p>
                            </div>
                            <div class="glass rounded-2xl p-3">
                                <p class="text-[10px] uppercase tracking-wider text-slate-400">Visitors</p>
                                <p class="font-display text-lg font-bold text-white">12.6K</p>
                            </div>
                            <div class="glass rounded-2xl p-3">
                                <p class="text-[10px] uppercase tracking-wider text-slate-400">Promotion</p>
                                <p class="font-display text-lg font-bold text-emerald-300">4 Live</p>
                            </div>
                            <div class="glass rounded-2xl p-3">
                                <p class="text-[10px] uppercase tracking-wider text-slate-400">Rating</p>
                                <p class="font-display text-lg font-bold text-white">4.8 ★</p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>

        <!-- ============ PROMOTION SLIDER ============ -->
        <section id="promotion" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
            <div class="flex items-end justify-between mb-6">
                <div>
                    <p class="text-xs uppercase tracking-widest text-slate-400">Campaign</p>
                    <h2 class="font-display text-2xl sm:text-3xl font-bold text-white">Live Promotions</h2>
                </div>
                <div class="flex gap-2">
                    <button id="promo-prev"
                        class="glass rounded-xl w-10 h-10 flex items-center justify-center text-white hover:ring-1 hover:ring-white/20">‹</button>
                    <button id="promo-next"
                        class="glass rounded-xl w-10 h-10 flex items-center justify-center text-white hover:ring-1 hover:ring-white/20">›</button>
                </div>
            </div>
            <div class="relative rounded-[2rem] overflow-hidden grad-border h-[22rem] sm:h-[26rem]">
                <div id="promo-track" class="relative h-full"></div>
                <div id="promo-dots" class="absolute bottom-5 left-1/2 -translate-x-1/2 flex gap-2"></div>
            </div>
        </section>

        <!-- ============ ANALYTICS ============ -->
        <section id="analytics" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
            <div class="mb-6 reveal">
                <p class="text-xs uppercase tracking-widest text-slate-400">Performance</p>
                <h2 class="font-display text-2xl sm:text-3xl font-bold text-white">Analytics Overview</h2>
            </div>
            <div class="grid lg:grid-cols-3 gap-5">
                <!-- Revenue chart -->
                <div class="lg:col-span-2 reveal grad-border rounded-3xl glass p-6 sm:p-8">
                    <div class="flex flex-wrap items-center justify-between gap-3 mb-6">
                        <div>
                            <h3 class="font-display text-lg font-bold text-white">Revenue & Orders</h3>
                            <p class="text-xs text-slate-400">Last 12 months · dummy data</p>
                        </div>
                        <div class="flex gap-2 text-xs">
                            <span class="glass rounded-full px-3 py-1 text-blue-300">● Revenue</span>
                            <span class="glass rounded-full px-3 py-1 text-violet-300">● Orders</span>
                        </div>
                    </div>
                    <div class="relative h-64">
                        <canvas id="chart-revenue" class="w-full h-full"></canvas>
                    </div>
                </div>
                <!-- Visitors donut -->
                <div class="reveal grad-border rounded-3xl glass p-6 sm:p-8" style="transition-delay:.1s">
                    <h3 class="font-display text-lg font-bold text-white">Visitors by Brand</h3>
                    <p class="text-xs text-slate-400 mb-6">Share of traffic</p>
                    <div class="relative h-48 flex items-center justify-center">
                        <canvas id="chart-donut" class="w-full h-full"></canvas>
                        <div class="absolute text-center">
                            <p class="font-display text-2xl font-bold text-white">128K</p>
                            <p class="text-[10px] text-slate-400 uppercase tracking-wider">Total</p>
                        </div>
                    </div>
                    <div class="mt-6 space-y-2 text-sm" id="donut-legend"></div>
                </div>
            </div>

            <!-- Growth bars -->
            <div class="mt-5 reveal grad-border rounded-3xl glass p-6 sm:p-8">
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h3 class="font-display text-lg font-bold text-white">Monthly Growth</h3>
                        <p class="text-xs text-slate-400">Revenue in millions (Rp)</p>
                    </div>
                    <span class="glass rounded-full px-3 py-1 text-xs text-emerald-300">+18.2% YoY</span>
                </div>
                <div class="flex items-end justify-between gap-2 sm:gap-3 h-44" id="growth-bars"></div>
                <div class="flex justify-between mt-3 text-[10px] text-slate-500" id="growth-labels"></div>
            </div>
        </section>

        <!-- ============ NEWS ============ -->
        <section id="news" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
            <div class="flex items-end justify-between mb-6 reveal">
                <div>
                    <p class="text-xs uppercase tracking-widest text-slate-400">News</p>
                    <h2 class="font-display text-2xl sm:text-3xl font-bold text-white">Latest Stories</h2>
                </div>
                <a href="#" class="text-sm text-blue-300 hover:text-blue-200">View all →</a>
            </div>
            <div class="grid md:grid-cols-3 gap-5">
                <!-- big card -->
                <article class="reveal md:col-span-2 grad-border rounded-3xl glass overflow-hidden group">
                    <div class="relative h-56 sm:h-72 overflow-hidden">
                        <img src="https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&h=650&w=940"
                            alt="news"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                        <div class="absolute inset-0 bg-gradient-to-t from-navy-950 via-navy-950/40 to-transparent">
                        </div>
                        <div class="absolute top-4 left-4 glass rounded-full px-3 py-1 text-xs text-cyan-200">Expansion
                        </div>
                    </div>
                    <div class="p-6 sm:p-8">
                        <p class="text-xs text-slate-400">Aug 06, 2026 · 4 min read</p>
                        <h3 class="font-display text-xl sm:text-2xl font-bold text-white mt-2">Trans F&amp;B Opens 50th
                            Coffee Bean Outlet in Southeast Asia</h3>
                        <p class="text-sm text-slate-400 mt-3">A milestone expansion marking the brand's strongest
                            regional footprint yet, with new flagship stores in Jakarta and Singapore.</p>
                        <button
                            class="mt-5 btn-magnetic rounded-xl px-5 h-10 bg-gradient-to-r from-blue-600 to-violet-600 text-white text-sm font-semibold">Read
                            More</button>
                    </div>
                </article>
                <!-- side cards -->
                <div class="flex flex-col gap-5">
                    <article class="reveal grad-border rounded-3xl glass overflow-hidden group flex flex-col"
                        style="transition-delay:.05s">
                        <div class="relative h-40 overflow-hidden">
                            <img src="https://images.pexels.com/photos/11385490/pexels-photo-11385490.jpeg?auto=compress&cs=tinysrgb&h=650&w=940"
                                alt="news"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                            <div class="absolute top-3 left-3 glass rounded-full px-3 py-1 text-xs text-amber-200">
                                Campaign</div>
                        </div>
                        <div class="p-5">
                            <p class="text-xs text-slate-400">Aug 02, 2026</p>
                            <h3 class="font-display text-base font-bold text-white mt-1">New "Brew &amp; You" Loyalty
                                Program Launches</h3>
                            <button class="mt-3 text-sm text-blue-300 hover:text-blue-200">Read More →</button>
                        </div>
                    </article>
                    <article class="reveal grad-border rounded-3xl glass overflow-hidden group flex flex-col"
                        style="transition-delay:.1s">
                        <div class="relative h-40 overflow-hidden">
                            <img src="https://images.pexels.com/photos/37696167/pexels-photo-37696167.jpeg?auto=compress&cs=tinysrgb&h=650&w=940"
                                alt="news"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                            <div class="absolute top-3 left-3 glass rounded-full px-3 py-1 text-xs text-pink-200">Award
                            </div>
                        </div>
                        <div class="p-5">
                            <p class="text-xs text-slate-400">Jul 28, 2026</p>
                            <h3 class="font-display text-base font-bold text-white mt-1">Baskin Robbins Wins Flavor of
                                the Year 2026</h3>
                            <button class="mt-3 text-sm text-blue-300 hover:text-blue-200">Read More →</button>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- ============ EVENT TIMELINE ============ -->
        <section class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
            <div class="mb-10 reveal text-center">
                <p class="text-xs uppercase tracking-widest text-slate-400">Events</p>
                <h2 class="font-display text-2xl sm:text-3xl font-bold text-white">Upcoming Highlights</h2>
            </div>
            <div class="relative">
                <div
                    class="absolute left-4 sm:left-1/2 top-0 bottom-0 w-px bg-gradient-to-b from-blue-500/50 via-violet-500/40 to-transparent sm:-translate-x-1/2">
                </div>
                <div class="space-y-8" id="timeline"></div>
            </div>
        </section>

        <!-- ============ GALLERY ============ -->
        <section id="gallery" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
            <div class="mb-6 reveal">
                <p class="text-xs uppercase tracking-widest text-slate-400">Gallery</p>
                <h2 class="font-display text-2xl sm:text-3xl font-bold text-white">Moments &amp; Spaces</h2>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-4" id="gallery-grid"></div>
        </section>

        <!-- ============ TESTIMONIAL ============ -->
        <section class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
            <div class="mb-8 reveal text-center">
                <p class="text-xs uppercase tracking-widest text-slate-400">Testimonials</p>
                <h2 class="font-display text-2xl sm:text-3xl font-bold text-white">What People Say</h2>
            </div>
            <div class="relative overflow-hidden grad-border rounded-3xl glass p-6 sm:p-10">
                <div id="testimonial-track" class="flex transition-transform duration-700 ease-out"></div>
                <div class="flex justify-center gap-2 mt-6" id="testimonial-dots"></div>
            </div>
        </section>

        <!-- ============ FOOTER ============ -->
        <footer class="relative mt-16 border-t border-white/5">
            <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-blue-500/50 to-transparent">
            </div>
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-14">
                <div class="grid md:grid-cols-4 gap-10">
                    <div class="md:col-span-2">
                        <div class="flex items-center gap-3 mb-4">
                            <div
                                class="w-10 h-10 rounded-xl bg-gradient-to-br from-blue-500 via-indigo-500 to-violet-500 flex items-center justify-center">
                                <span class="font-display font-extrabold text-white text-lg">T</span>
                            </div>
                            <div>
                                <p class="font-display font-bold text-white">Trans <span
                                        class="text-grad-blue">F&amp;B</span></p>
                                <p class="text-[10px] uppercase tracking-[0.2em] text-slate-400">Food &amp; Beverage
                                    Official</p>
                            </div>
                        </div>
                        <p class="text-sm text-slate-400 max-w-md">Managing Indonesia's most loved food &amp; beverage
                            brands under one premium ecosystem. Crafted with care, served with pride.</p>
                        <div class="flex gap-3 mt-5">
                            <a href="#"
                                class="glass rounded-xl w-10 h-10 flex items-center justify-center text-slate-300 hover:text-white hover:ring-1 hover:ring-white/20"
                                aria-label="Instagram">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.2c3.2 0 3.6 0 4.9.1 1.2.1 1.8.3 2.2.4.6.2 1 .5 1.4.9.4.4.7.8.9 1.4.1.4.3 1 .4 2.2.1 1.3.1 1.7.1 4.9s0 3.6-.1 4.9c-.1 1.2-.3 1.8-.4 2.2-.2.6-.5 1-.9 1.4-.4.4-.8.7-1.4.9-.4.1-1 .3-2.2.4-1.3.1-1.7.1-4.9.1s-3.6 0-4.9-.1c-1.2-.1-1.8-.3-2.2-.4-.6-.2-1-.5-1.4-.9-.4-.4-.7-.8-.9-1.4-.1-.4-.3-1-.4-2.2C2.2 15.6 2.2 15.2 2.2 12s0-3.6.1-4.9c.1-1.2.3-1.8.4-2.2.2-.6.5-1 .9-1.4.4-.4.8-.7 1.4-.9.4-.1 1-.3 2.2-.4C8.4 2.2 8.8 2.2 12 2.2Zm0 1.8c-3.1 0-3.5 0-4.7.1-1.1.1-1.7.2-2.1.4-.5.2-.9.4-1.3.8-.4.4-.6.8-.8 1.3-.2.4-.3 1-.4 2.1C2.6 8.5 2.6 8.9 2.6 12s0 3.5.1 4.7c.1 1.1.2 1.7.4 2.1.2.5.4.9.8 1.3.4.4.8.6 1.3.8.4.2 1 .3 2.1.4 1.2.1 1.6.1 4.7.1s3.5 0 4.7-.1c1.1-.1 1.7-.2 2.1-.4.5-.2.9-.4 1.3-.8.4-.4.6-.8.8-1.3.2-.4.3-1 .4-2.1.1-1.2.1-1.6.1-4.7s0-3.5-.1-4.7c-.1-1.1-.2-1.7-.4-2.1-.2-.5-.4-.9-.8-1.3-.4-.4-.8-.6-1.3-.8-.4-.2-1-.3-2.1-.4-1.2-.1-1.6-.1-4.7-.1Zm0 3.1a4.9 4.9 0 1 1 0 9.8 4.9 4.9 0 0 1 0-9.8Zm0 1.8a3.1 3.1 0 1 0 0 6.2 3.1 3.1 0 0 0 0-6.2Zm6.3-3.4a1.1 1.1 0 1 1-2.2 0 1.1 1.1 0 0 1 2.2 0Z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="glass rounded-xl w-10 h-10 flex items-center justify-center text-slate-300 hover:text-white hover:ring-1 hover:ring-white/20"
                                aria-label="X">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M18.9 2H22l-7.5 8.6L23 22h-6.8l-5.3-7-6.1 7H1.7l8-9.2L1 2h7l4.8 6.4L18.9 2Zm-1.2 18h1.7L7.4 3.8H5.6L17.7 20Z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="glass rounded-xl w-10 h-10 flex items-center justify-center text-slate-300 hover:text-white hover:ring-1 hover:ring-white/20"
                                aria-label="Facebook">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M22 12a10 10 0 1 0-11.6 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.2c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.3v7A10 10 0 0 0 22 12Z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="glass rounded-xl w-10 h-10 flex items-center justify-center text-slate-300 hover:text-white hover:ring-1 hover:ring-white/20"
                                aria-label="YouTube">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M23 12s0-3.2-.4-4.7a2.5 2.5 0 0 0-1.7-1.7C19.4 5.2 12 5.2 12 5.2s-7.4 0-8.9.4A2.5 2.5 0 0 0 1.4 7.3C1 8.8 1 12 1 12s0 3.2.4 4.7a2.5 2.5 0 0 0 1.7 1.7c1.5.4 8.9.4 8.9.4s7.4 0 8.9-.4a2.5 2.5 0 0 0 1.7-1.7c.4-1.5.4-4.7.4-4.7Zm-13 3.5v-7l6 3.5-6 3.5Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div>
                        <h4 class="font-display text-sm font-bold text-white mb-4">Explore</h4>
                        <ul class="space-y-2 text-sm text-slate-400">
                            <li><a href="#brands" class="hover:text-white">Brands</a></li>
                            <li><a href="#promotion" class="hover:text-white">Campaign</a></li>
                            <li><a href="#analytics" class="hover:text-white">Performance</a></li>
                            <li><a href="#news" class="hover:text-white">News</a></li>
                            <li><a href="#gallery" class="hover:text-white">Gallery</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-display text-sm font-bold text-white mb-4">Company</h4>
                        <ul class="space-y-2 text-sm text-slate-400">
                            <li><a href="#" class="hover:text-white">About Trans F&amp;B</a></li>
                            <li><a href="#" class="hover:text-white">Careers</a></li>
                            <li><a href="#" class="hover:text-white">Press Kit</a></li>
                            <li><a href="#" class="hover:text-white">Contact</a></li>
                            <li><a href="#" class="hover:text-white">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div
                    class="mt-12 pt-6 border-t border-white/5 flex flex-col sm:flex-row items-center justify-between gap-3">
                    <p class="text-xs text-slate-500">© 2026 Trans Food &amp; Beverage Official. All rights reserved.
                    </p>
                    <p class="text-xs text-slate-500">Crafted with care · Premium Dashboard</p>
                </div>
            </div>
        </footer>

    </main>

    <!-- back to top -->
    <button id="to-top"
        class="fixed bottom-6 right-6 z-40 glass-strong rounded-xl w-11 h-11 flex items-center justify-center text-white opacity-0 pointer-events-none transition-opacity duration-300 hover:ring-1 hover:ring-white/20"
        aria-label="Back to top">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="m18 15-6-6-6 6" />
        </svg>
    </button>

    <script>
    /* =========================================================
   Trans F&B Premium Dashboard — Vanilla JS
   ========================================================= */

    /* ---------- Particle background ---------- */
    (function() {
        const canvas = document.getElementById('particles');
        const ctx = canvas.getContext('2d');
        let w, h, particles;

        function resize() {
            w = canvas.width = canvas.offsetWidth;
            h = canvas.height = canvas.offsetHeight;
            const count = Math.min(70, Math.floor(w / 22));
            particles = Array.from({
                length: count
            }, () => ({
                x: Math.random() * w,
                y: Math.random() * h,
                r: Math.random() * 1.6 + 0.4,
                vx: (Math.random() - .5) * 0.25,
                vy: (Math.random() - .5) * 0.25,
                a: Math.random() * 0.5 + 0.2,
                hue: Math.random() > 0.5 ? '59,130,246' : '139,92,246'
            }));
        }

        function tick() {
            ctx.clearRect(0, 0, w, h);
            for (const p of particles) {
                p.x += p.vx;
                p.y += p.vy;
                if (p.x < 0 || p.x > w) p.vx *= -1;
                if (p.y < 0 || p.y > h) p.vy *= -1;
                ctx.beginPath();
                ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
                ctx.fillStyle = `rgba(${p.hue},${p.a})`;
                ctx.fill();
            }
            requestAnimationFrame(tick);
        }
        resize();
        tick();
        window.addEventListener('resize', resize);
    })();

    /* ---------- Mouse parallax light ---------- */
    (function() {
        const light = document.getElementById('parallax-light');
        window.addEventListener('mousemove', (e) => {
            const x = (e.clientX / window.innerWidth - .5);
            const y = (e.clientY / window.innerHeight - .5);
            light.style.transform = `translate(${x*120}px, ${y*120}px)`;
            light.style.left = (e.clientX - 224) + 'px';
            light.style.top = (e.clientY - 224) + 'px';
        });
    })();

    /* ---------- Navbar scroll state ---------- */
    (function() {
        const nav = document.getElementById('nav-inner');
        const onScroll = () => {
            if (window.scrollY > 20) {
                nav.classList.add('shadow-2xl', 'shadow-blue-950/40');
                nav.style.background = 'rgba(7,10,22,0.85)';
            } else {
                nav.style.background = '';
                nav.classList.remove('shadow-2xl', 'shadow-blue-950/40');
            }
            document.getElementById('to-top').style.opacity = window.scrollY > 600 ? '1' : '0';
            document.getElementById('to-top').style.pointerEvents = window.scrollY > 600 ? 'auto' : 'none';
        };
        window.addEventListener('scroll', onScroll, {
            passive: true
        });
        onScroll();
    })();

    /* ---------- Mobile menu ---------- */
    document.getElementById('menu-btn').addEventListener('click', () => {
        document.getElementById('mobile-menu').classList.toggle('open');
    });
    document.querySelectorAll('#mobile-menu a').forEach(a => a.addEventListener('click', () => {
        document.getElementById('mobile-menu').classList.remove('open');
    }));

    /* ---------- ESC closes search ---------- */
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') document.getElementById('search-bar').classList.add('hidden');
    });

    /* ---------- Reveal on scroll ---------- */
    (function() {
        const io = new IntersectionObserver((entries) => {
            entries.forEach(en => {
                if (en.isIntersecting) {
                    en.target.classList.add('in');
                    io.unobserve(en.target);
                }
            });
        }, {
            threshold: 0.12
        });
        document.querySelectorAll('.reveal, .reveal-scale').forEach(el => io.observe(el));
    })();

    /* ---------- Count up ---------- */
    (function() {
        const els = document.querySelectorAll('.count, [data-count]');
        const animate = (el) => {
            const target = parseFloat(el.dataset.count || el.textContent);
            const decimals = parseInt(el.dataset.decimals || '0');
            const prefix = el.dataset.prefix || '';
            const suffix = el.dataset.suffix || '';
            const dur = 1600;
            const start = performance.now();
            const step = (now) => {
                const p = Math.min((now - start) / dur, 1);
                const eased = 1 - Math.pow(1 - p, 3);
                const val = target * eased;
                el.textContent = prefix + val.toLocaleString('en-US', {
                    maximumFractionDigits: decimals,
                    minimumFractionDigits: decimals
                }) + suffix;
                if (p < 1) requestAnimationFrame(step);
            };
            requestAnimationFrame(step);
        };
        const io = new IntersectionObserver((entries) => {
            entries.forEach(en => {
                if (en.isIntersecting) {
                    animate(en.target);
                    io.unobserve(en.target);
                }
            });
        }, {
            threshold: 0.5
        });
        els.forEach(el => io.observe(el));
    })();

    /* ---------- Magnetic buttons + ripple ---------- */
    document.querySelectorAll('.btn-magnetic').forEach(btn => {
        btn.style.position = 'relative';
        btn.addEventListener('mousemove', (e) => {
            const r = btn.getBoundingClientRect();
            const x = e.clientX - r.left - r.width / 2;
            const y = e.clientY - r.top - r.height / 2;
            btn.style.transform = `translate(${x*0.15}px, ${y*0.25}px)`;
        });
        btn.addEventListener('mouseleave', () => {
            btn.style.transform = '';
        });
        btn.addEventListener('click', (e) => {
            const r = btn.getBoundingClientRect();
            const span = document.createElement('span');
            span.className = 'ripple';
            span.style.left = (e.clientX - r.left - 10) + 'px';
            span.style.top = (e.clientY - r.top - 10) + 'px';
            span.style.width = span.style.height = '20px';
            btn.appendChild(span);
            setTimeout(() => span.remove(), 600);
        });
    });

    /* ---------- Brand parallax on scroll ---------- */
    (function() {
        const items = document.querySelectorAll('[data-parallax] .brand-bg');
        window.addEventListener('scroll', () => {
            items.forEach(el => {
                const parent = el.closest('[data-parallax]');
                const r = parent.getBoundingClientRect();
                const offset = (r.top + r.height / 2 - window.innerHeight / 2) / r.height;
                el.style.transform = `translateY(${offset*-20}px) scale(1.15)`;
            });
        }, {
            passive: true
        });
    })();

    /* ---------- Active nav on scroll ---------- */
    (function() {
        const sections = ['hero', 'brands', 'promotion', 'analytics', 'news', 'gallery'];
        const links = document.querySelectorAll('.nav-link');
        window.addEventListener('scroll', () => {
            let cur = 'hero';
            sections.forEach(id => {
                const s = document.getElementById(id);
                if (s && s.getBoundingClientRect().top < 120) cur = id;
            });
            links.forEach(l => {
                l.classList.toggle('active', l.getAttribute('href') === '#' + cur);
            });
        }, {
            passive: true
        });
    })();

    /* ---------- Promotion slider ---------- */
    (function() {
        const promos = [{
                title: 'Buy 1 Get 1 — Coffee Bean',
                desc: 'All signature lattes, every Friday.',
                tag: 'Coffee',
                cta: 'Claim',
                img: 'https://images.pexels.com/photos/15149236/pexels-photo-15149236.jpeg?auto=compress&cs=tinysrgb&h=650&w=940',
                grad: 'from-amber-500 to-orange-600'
            },
            {
                title: 'Wendy\'s Combo Fiesta',
                desc: 'Baconator + Frosty at 30% off this week.',
                tag: 'Burger',
                cta: 'Order',
                img: 'https://images.pexels.com/photos/34407059/pexels-photo-34407059.jpeg?auto=compress&cs=tinysrgb&h=650&w=940',
                grad: 'from-red-500 to-rose-600'
            },
            {
                title: '31 Scoops of Summer',
                desc: 'New tropical flavors at Baskin Robbins.',
                tag: 'Ice Cream',
                cta: 'Taste',
                img: 'https://images.pexels.com/photos/37696167/pexels-photo-37696167.jpeg?auto=compress&cs=tinysrgb&h=650&w=940',
                grad: 'from-pink-500 to-fuchsia-600'
            },
            {
                title: 'Nusantara Heritage Feast',
                desc: 'All-you-can-eat Wardani special menu.',
                tag: 'Nusantara',
                cta: 'Reserve',
                img: 'https://images.pexels.com/photos/37081081/pexels-photo-37081081.jpeg?auto=compress&cs=tinysrgb&h=650&w=940',
                grad: 'from-amber-500 to-yellow-600'
            },
        ];
        const track = document.getElementById('promo-track');
        const dots = document.getElementById('promo-dots');
        let idx = 0;
        track.innerHTML = promos.map((p, i) => `
    <div class="promo-slide absolute inset-0 ${i===0?'opacity-100':'opacity-0'}" data-i="${i}">
      <div class="absolute inset-0 bg-cover bg-center" style="background-image:url('${p.img}')"></div>
      <div class="absolute inset-0 bg-gradient-to-r from-navy-950 via-navy-950/70 to-transparent"></div>
      <div class="relative h-full flex flex-col justify-center p-8 sm:p-14 max-w-2xl">
        <span class="glass rounded-full px-3 py-1 text-xs text-white w-fit mb-4">${p.tag}</span>
        <h3 class="font-display text-2xl sm:text-4xl font-extrabold text-white">${p.title}</h3>
        <p class="text-slate-300 mt-3 text-sm sm:text-base">${p.desc}</p>
        <button class="btn-magnetic mt-6 rounded-xl px-6 h-12 bg-gradient-to-r ${p.grad} text-white font-semibold text-sm w-fit">${p.cta} Promotion</button>
      </div>
    </div>`).join('');
        dots.innerHTML = promos.map((_, i) =>
            `<button class="w-2.5 h-2.5 rounded-full transition ${i===0?'bg-white':'bg-white/30'}" data-i="${i}"></button>`
        ).join('');

        function go(n) {
            idx = (n + promos.length) % promos.length;
            track.querySelectorAll('.promo-slide').forEach(s => s.classList.toggle('opacity-0', +s.dataset.i !==
                idx));
            track.querySelectorAll('.promo-slide').forEach(s => s.classList.toggle('opacity-100', +s.dataset.i ===
                idx));
            dots.querySelectorAll('button').forEach(d => d.classList.toggle('bg-white', +d.dataset.i === idx));
            dots.querySelectorAll('button').forEach(d => d.classList.toggle('bg-white/30', +d.dataset.i !== idx));
        }
        document.getElementById('promo-next').onclick = () => go(idx + 1);
        document.getElementById('promo-prev').onclick = () => go(idx - 1);
        dots.querySelectorAll('button').forEach(d => d.onclick = () => go(+d.dataset.i));
        let auto = setInterval(() => go(idx + 1), 5000);
        track.parentElement.addEventListener('mouseenter', () => clearInterval(auto));
        track.parentElement.addEventListener('mouseleave', () => auto = setInterval(() => go(idx + 1), 5000));
    })();

    /* ---------- Revenue line chart (canvas) ---------- */
    (function() {
        const canvas = document.getElementById('chart-revenue');
        if (!canvas) return;
        const ctx = canvas.getContext('2d');
        const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        const revenue = [120, 135, 128, 160, 175, 168, 190, 210, 205, 240, 255, 285];
        const orders = [80, 92, 88, 110, 120, 115, 130, 145, 140, 160, 172, 190];

        function draw() {
            const dpr = window.devicePixelRatio || 1;
            const W = canvas.width = canvas.offsetWidth * dpr;
            const H = canvas.height = canvas.offsetHeight * dpr;
            ctx.scale(dpr, dpr);
            const w = canvas.offsetWidth,
                h = canvas.offsetHeight;
            ctx.clearRect(0, 0, w, h);
            const pad = {
                l: 36,
                r: 12,
                t: 12,
                b: 24
            };
            const max = Math.max(...revenue) * 1.15;
            const xstep = (w - pad.l - pad.r) / (months.length - 1);
            const yscale = (h - pad.t - pad.b) / max;
            // grid
            ctx.strokeStyle = 'rgba(255,255,255,0.06)';
            ctx.fillStyle = 'rgba(148,163,184,0.6)';
            ctx.font = '10px Plus Jakarta Sans';
            for (let i = 0; i <= 4; i++) {
                const y = pad.t + (h - pad.t - pad.b) * i / 4;
                ctx.beginPath();
                ctx.moveTo(pad.l, y);
                ctx.lineTo(w - pad.r, y);
                ctx.stroke();
                ctx.fillText(Math.round(max * (1 - i / 4)), 4, y + 3);
            }
            // revenue area
            const grad = ctx.createLinearGradient(0, pad.t, 0, h - pad.b);
            grad.addColorStop(0, 'rgba(59,130,246,0.35)');
            grad.addColorStop(1, 'rgba(59,130,246,0)');
            ctx.beginPath();
            revenue.forEach((v, i) => {
                const x = pad.l + i * xstep,
                    y = pad.t + (max - v) * yscale;
                i ? ctx.lineTo(x, y) : ctx.moveTo(x, y);
            });
            ctx.lineTo(pad.l + (months.length - 1) * xstep, h - pad.b);
            ctx.lineTo(pad.l, h - pad.b);
            ctx.closePath();
            ctx.fillStyle = grad;
            ctx.fill();
            // revenue line
            ctx.beginPath();
            revenue.forEach((v, i) => {
                const x = pad.l + i * xstep,
                    y = pad.t + (max - v) * yscale;
                i ? ctx.lineTo(x, y) : ctx.moveTo(x, y);
            });
            ctx.strokeStyle = '#3b82f6';
            ctx.lineWidth = 2.5;
            ctx.stroke();
            // orders line
            ctx.beginPath();
            orders.forEach((v, i) => {
                const x = pad.l + i * xstep,
                    y = pad.t + (max - v) * yscale;
                i ? ctx.lineTo(x, y) : ctx.moveTo(x, y);
            });
            ctx.strokeStyle = '#8b5cf6';
            ctx.lineWidth = 2;
            ctx.setLineDash([4, 4]);
            ctx.stroke();
            ctx.setLineDash([]);
            // points + labels
            ctx.fillStyle = 'rgba(148,163,184,0.7)';
            months.forEach((m, i) => {
                const x = pad.l + i * xstep;
                ctx.fillText(m, x - 6, h - 6);
            });
        }
        draw();
        window.addEventListener('resize', draw);
    })();

    /* ---------- Donut chart ---------- */
    (function() {
        const canvas = document.getElementById('chart-donut');
        if (!canvas) return;
        const data = [{
                label: 'Coffee Bean',
                val: 32,
                color: '#3b82f6'
            },
            {
                label: "Wendy's",
                val: 24,
                color: '#ef4444'
            },
            {
                label: 'Baskin Robbins',
                val: 18,
                color: '#ec4899'
            },
            {
                label: 'Wardani',
                val: 12,
                color: '#f59e0b'
            },
            {
                label: 'Gyukatsu',
                val: 8,
                color: '#a855f7'
            },
            {
                label: 'Tasty Kitchen',
                val: 6,
                color: '#10b981'
            },
        ];
        const ctx = canvas.getContext('2d');

        function draw() {
            const dpr = window.devicePixelRatio || 1;
            canvas.width = canvas.offsetWidth * dpr;
            canvas.height = canvas.offsetHeight * dpr;
            ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
            const w = canvas.offsetWidth,
                h = canvas.offsetHeight;
            const cx = w / 2,
                cy = h / 2,
                R = Math.min(w, h) / 2 - 6,
                r = R - 18;
            const total = data.reduce((s, d) => s + d.val, 0);
            let a = -Math.PI / 2;
            data.forEach(d => {
                const ang = (d.val / total) * Math.PI * 2;
                ctx.beginPath();
                ctx.arc(cx, cy, R, a, a + ang);
                ctx.arc(cx, cy, r, a + ang, a, true);
                ctx.closePath();
                ctx.fillStyle = d.color;
                ctx.fill();
                a += ang;
            });
        }
        draw();
        window.addEventListener('resize', draw);
        document.getElementById('donut-legend').innerHTML = data.map(d => `
    <div class="flex items-center justify-between">
      <span class="flex items-center gap-2 text-slate-300"><span class="w-2.5 h-2.5 rounded-full" style="background:${d.color}"></span>${d.label}</span>
      <span class="text-slate-400">${d.val}%</span>
    </div>`).join('');
    })();

    /* ---------- Growth bars ---------- */
    (function() {
        const data = [180, 205, 240, 225, 260, 295, 310, 285, 330, 360, 390, 420];
        const labels = ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'];
        const max = Math.max(...data);
        const bars = document.getElementById('growth-bars');
        const labs = document.getElementById('growth-labels');
        bars.innerHTML = data.map((v, i) => `
    <div class="flex-1 group relative">
      <div class="chart-bar rounded-t-md bg-gradient-to-t from-blue-600 to-violet-500 w-full" style="height:0%" data-h="${(v/max*100).toFixed(0)}"></div>
      <div class="opacity-0 group-hover:opacity-100 transition absolute -top-7 left-1/2 -translate-x-1/2 text-[10px] glass rounded px-1.5 py-0.5 text-white whitespace-nowrap">Rp ${v}M</div>
    </div>`).join('');
        labs.innerHTML = labels.map(l => `<span class="flex-1 text-center">${l}</span>`).join('');
        const io = new IntersectionObserver((entries) => {
            entries.forEach(en => {
                if (en.isIntersecting) {
                    bars.querySelectorAll('.chart-bar').forEach((b, i) => {
                        setTimeout(() => {
                            b.style.height = b.dataset.h + '%';
                            b.style.opacity = '1';
                        }, i * 60);
                    });
                    io.unobserve(en.target);
                }
            });
        }, {
            threshold: 0.3
        });
        io.observe(bars);
    })();

    /* ---------- Timeline ---------- */
    (function() {
        const events = [{
                date: 'Aug 20, 2026',
                tag: 'Festival',
                title: 'Coffee Bean Flavor Festival',
                desc: 'A month-long celebration of rare single-origin beans across all outlets.',
                color: 'from-amber-500 to-orange-600'
            },
            {
                date: 'Sep 05, 2026',
                tag: 'Promo',
                title: "Wendy's National Burger Day",
                desc: 'Exclusive BOGO deals and limited-edition Baconator variants nationwide.',
                color: 'from-red-500 to-rose-600'
            },
            {
                date: 'Oct 12, 2026',
                tag: 'Launching',
                title: 'Baskin Robbins Winter Collection',
                desc: '12 new seasonal flavors launching across 14 countries simultaneously.',
                color: 'from-pink-500 to-fuchsia-600'
            },
            {
                date: 'Nov 01, 2026',
                tag: 'Opening Store',
                title: 'Gyukatsu Flagship — Jakarta',
                desc: 'The first premium Gyukatsu flagship store opens in central Jakarta.',
                color: 'from-violet-500 to-indigo-600'
            },
        ];
        document.getElementById('timeline').innerHTML = events.map((e, i) => `
    <div class="reveal relative pl-12 sm:pl-0 ${i%2===0?'sm:pr-1/2':'sm:pl-1/2 sm:text-right'}">
      <div class="absolute left-4 sm:left-1/2 top-1 w-3 h-3 rounded-full bg-blue-500 timeline-dot sm:-translate-x-1/2"></div>
      <div class="grad-border rounded-2xl glass p-5 ${i%2===0?'sm:mr-10':'sm:ml-10'}">
        <div class="flex items-center gap-2 ${i%2!==0?'sm:justify-end':''}">
          <span class="glass rounded-full px-3 py-1 text-xs text-white bg-gradient-to-r ${e.color}">${e.tag}</span>
          <span class="text-xs text-slate-400">${e.date}</span>
        </div>
        <h3 class="font-display text-lg font-bold text-white mt-3">${e.title}</h3>
        <p class="text-sm text-slate-400 mt-1">${e.desc}</p>
      </div>
    </div>`).join('');
        // re-observe new reveals
        document.querySelectorAll('#timeline .reveal').forEach(el => {
            const io = new IntersectionObserver((ents) => ents.forEach(en => {
                if (en.isIntersecting) {
                    en.target.classList.add('in');
                    io.unobserve(en.target);
                }
            }), {
                threshold: 0.15
            });
            io.observe(el);
        });
    })();

    /* ---------- Gallery ---------- */
    (function() {
        const imgs = [
            'https://images.pexels.com/photos/31106210/pexels-photo-31106210.jpeg?auto=compress&cs=tinysrgb&h=650&w=940',
            'https://images.pexels.com/photos/18713424/pexels-photo-18713424.jpeg?auto=compress&cs=tinysrgb&h=650&w=940',
            'https://images.pexels.com/photos/15811723/pexels-photo-15811723.jpeg?auto=compress&cs=tinysrgb&h=650&w=940',
            'https://images.pexels.com/photos/37113556/pexels-photo-37113556.jpeg?auto=compress&cs=tinysrgb&h=650&w=940',
            'https://images.pexels.com/photos/31406820/pexels-photo-31406820.jpeg?auto=compress&cs=tinysrgb&h=650&w=940',
            'https://images.pexels.com/photos/16544183/pexels-photo-16544183.jpeg?auto=compress&cs=tinysrgb&h=650&w=940',
            'https://images.pexels.com/photos/10135116/pexels-photo-10135116.jpeg?auto=compress&cs=tinysrgb&h=650&w=940',
            'https://images.pexels.com/photos/36094445/pexels-photo-36094445.jpeg?auto=compress&cs=tinysrgb&h=650&w=940',
        ];
        const grid = document.getElementById('gallery-grid');
        grid.innerHTML = imgs.map((src, i) => `
    <div class="gallery-item reveal relative rounded-2xl overflow-hidden grad-border group ${i%5===0?'col-span-2 row-span-2':''}" style="${i%5===0?'aspect-square':'aspect-square'}">
      <img src="${src}" alt="gallery" class="w-full h-full object-cover" loading="lazy" />
      <div class="absolute inset-0 bg-gradient-to-t from-navy-950/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition flex items-end p-4">
        <span class="text-white text-sm font-medium">Trans F&amp;B Moment</span>
      </div>
    </div>`).join('');
        grid.querySelectorAll('.reveal').forEach(el => {
            const io = new IntersectionObserver((ents) => ents.forEach(en => {
                if (en.isIntersecting) {
                    en.target.classList.add('in');
                    io.unobserve(en.target);
                }
            }), {
                threshold: 0.1
            });
            io.observe(el);
        });
    })();

    /* ---------- Testimonials ---------- */
    (function() {
        const data = [{
                name: 'Andini Putri',
                role: 'Coffee Enthusiast',
                text: 'The Coffee Bean dashboard insights helped us track our favorite store openings effortlessly. Premium experience.',
                rating: 5
            },
            {
                name: 'Reza Mahendra',
                role: 'Food Blogger',
                text: "Wendy's campaign analytics are stunning. I can see live promotions and plan my reviews around real-time data.",
                rating: 5
            },
            {
                name: 'Sari Dewi',
                role: 'Loyal Customer',
                text: 'Baskin Robbins flavor launches are always exciting. The dashboard makes it so easy to discover new promos.',
                rating: 4
            },
            {
                name: 'Budi Santoso',
                role: 'Restaurant Owner',
                text: 'As a partner, the performance overview gives me confidence in the Trans F&B ecosystem. World-class.',
                rating: 5
            },
        ];
        const track = document.getElementById('testimonial-track');
        const dots = document.getElementById('testimonial-dots');
        track.innerHTML = data.map(t => `
    <div class="min-w-full px-2">
      <div class="glass rounded-2xl p-6 sm:p-8">
        <div class="flex items-center gap-4 mb-4">
          <div class="w-12 h-12 rounded-full bg-gradient-to-br from-blue-500 to-violet-500 flex items-center justify-center font-bold text-white">${t.name[0]}</div>
          <div>
            <p class="font-semibold text-white">${t.name}</p>
            <p class="text-xs text-slate-400">${t.role}</p>
          </div>
          <div class="ml-auto text-amber-400 text-sm">${'★'.repeat(t.rating)}${'☆'.repeat(5-t.rating)}</div>
        </div>
        <p class="text-slate-300 text-sm sm:text-base leading-relaxed">"${t.text}"</p>
      </div>
    </div>`).join('');
        dots.innerHTML = data.map((_, i) =>
            `<button class="w-2.5 h-2.5 rounded-full transition ${i===0?'bg-white':'bg-white/30'}" data-i="${i}"></button>`
        ).join('');
        let idx = 0;

        function go(n) {
            idx = (n + data.length) % data.length;
            track.style.transform = `translateX(-${idx*100}%)`;
            dots.querySelectorAll('button').forEach(d => d.classList.toggle('bg-white', +d.dataset.i === idx));
            dots.querySelectorAll('button').forEach(d => d.classList.toggle('bg-white/30', +d.dataset.i !== idx));
        }
        dots.querySelectorAll('button').forEach(d => d.onclick = () => go(+d.dataset.i));
        let auto = setInterval(() => go(idx + 1), 5500);
        track.parentElement.addEventListener('mouseenter', () => clearInterval(auto));
        track.parentElement.addEventListener('mouseleave', () => auto = setInterval(() => go(idx + 1), 5500));
    })();

    /* ---------- Back to top ---------- */
    document.getElementById('to-top').onclick = () => window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
    </script>
</body>

</html>