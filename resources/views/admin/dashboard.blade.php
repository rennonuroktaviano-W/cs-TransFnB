<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trans Food &amp; Beverage Official — Premium Brand Dashboard</title>
    <meta name="description"
        content="Dashboard premium Trans Food & Beverage Official. Kelola seluruh brand, outlet, campaign, dan performa dalam satu pusat kendali kelas dunia." />
    <meta property="og:title" content="Trans Food & Beverage Official — Premium Brand Dashboard" />
    <meta property="og:description"
        content="Satu dashboard premium untuk seluruh brand Trans F&B: Coffee Bean, Wendy's, Baskin Robbins, Warung Wardani, Gyukatsu, Tasty Kitchen." />
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="summary_large_image" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;600;700;800&family=Manrope:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                fontFamily: {
                    display: ['Sora', 'sans-serif'],
                    body: ['Manrope', 'sans-serif']
                },
                colors: {
                    navy: {
                        950: '#050818',
                        900: '#080d24',
                        800: '#0c1330',
                        700: '#131c45'
                    },
                    electric: {
                        400: '#54b7ff',
                        500: '#2a8fff',
                        600: '#1367e6'
                    },
                    violet2: {
                        400: '#a97cff',
                        500: '#8b5cf6',
                        600: '#6d3ae0'
                    },
                    aqua: {
                        400: '#4be6d4'
                    }
                },
                boxShadow: {
                    glow: '0 0 40px -8px rgba(42,143,255,.55)',
                    glowv: '0 0 50px -10px rgba(139,92,246,.6)',
                    soft: '0 24px 70px -30px rgba(0,0,0,.85)'
                },
                keyframes: {
                    floaty: {
                        '0%,100%': {
                            transform: 'translateY(0)'
                        },
                        '50%': {
                            transform: 'translateY(-18px)'
                        }
                    },
                    aurora: {
                        '0%': {
                            transform: 'translate3d(-10%,-10%,0) rotate(0deg) scale(1)'
                        },
                        '50%': {
                            transform: 'translate3d(10%,8%,0) rotate(180deg) scale(1.25)'
                        },
                        '100%': {
                            transform: 'translate3d(-10%,-10%,0) rotate(360deg) scale(1)'
                        }
                    },
                    shimmer: {
                        '0%': {
                            backgroundPosition: '0% 50%'
                        },
                        '100%': {
                            backgroundPosition: '200% 50%'
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
                    pulseRing: {
                        '0%': {
                            transform: 'scale(.9)',
                            opacity: '.7'
                        },
                        '100%': {
                            transform: 'scale(1.8)',
                            opacity: '0'
                        }
                    }
                },
                animation: {
                    floaty: 'floaty 7s ease-in-out infinite',
                    aurora: 'aurora 26s linear infinite',
                    shimmer: 'shimmer 6s linear infinite',
                    marquee: 'marquee 32s linear infinite',
                    pulseRing: 'pulseRing 2.4s ease-out infinite'
                }
            }
        }
    }
    </script>
    <style>
    :root {
        --grid: rgba(255, 255, 255, .045);
    }

    html,
    body {
        background: #050818;
    }

    body {
        font-family: 'Manrope', sans-serif;
        color: #e8ecff;
        overflow-x: hidden;
    }

    h1,
    h2,
    h3,
    .font-display {
        font-family: 'Sora', sans-serif;
    }

    ::selection {
        background: #2a8fff;
        color: #fff;
    }

    ::-webkit-scrollbar {
        width: 10px;
    }

    ::-webkit-scrollbar-track {
        background: #050818;
    }

    ::-webkit-scrollbar-thumb {
        background: linear-gradient(#2a8fff, #8b5cf6);
        border-radius: 99px;
    }

    .glass {
        background: linear-gradient(150deg, rgba(255, 255, 255, .075), rgba(255, 255, 255, .02));
        backdrop-filter: blur(22px) saturate(150%);
        border: 1px solid rgba(255, 255, 255, .09);
    }

    .glass-strong {
        background: rgba(9, 14, 36, .72);
        backdrop-filter: blur(26px) saturate(160%);
        border: 1px solid rgba(255, 255, 255, .10);
    }

    .grad-border {
        position: relative;
    }

    .grad-border::before {
        content: '';
        position: absolute;
        inset: 0;
        border-radius: inherit;
        padding: 1px;
        background: linear-gradient(135deg, rgba(84, 183, 255, .85), rgba(169, 124, 255, .6), rgba(75, 230, 212, .35), transparent 70%);
        -webkit-mask: linear-gradient(#000 0 0) content-box, linear-gradient(#000 0 0);
        mask: linear-gradient(#000 0 0) content-box, linear-gradient(#000 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
        opacity: .7;
        transition: opacity .4s;
        pointer-events: none;
    }

    .grad-border:hover::before {
        opacity: 1;
    }

    .grid-pattern {
        background-image: linear-gradient(var(--grid) 1px, transparent 1px), linear-gradient(90deg, var(--grid) 1px, transparent 1px);
        background-size: 64px 64px;
        mask-image: radial-gradient(ellipse 80% 60% at 50% 0%, #000 40%, transparent 100%);
    }

    .noise {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='140' height='140'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.85' numOctaves='3'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='.55'/%3E%3C/svg%3E");
        opacity: .045;
    }

    .text-grad {
        background: linear-gradient(100deg, #ffffff 10%, #8ec7ff 45%, #b79bff 80%);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .text-grad-anim {
        background: linear-gradient(100deg, #54b7ff, #a97cff, #4be6d4, #54b7ff);
        background-size: 200% 100%;
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        animation: shimmer 6s linear infinite;
    }

    .reveal {
        opacity: 0;
        transform: translateY(38px);
        transition: opacity .9s cubic-bezier(.2, .7, .2, 1), transform .9s cubic-bezier(.2, .7, .2, 1);
    }

    .reveal.in {
        opacity: 1;
        transform: none;
    }

    .reveal-l {
        opacity: 0;
        transform: translateX(-46px);
        transition: all .95s cubic-bezier(.2, .7, .2, 1);
    }

    .reveal-l.in {
        opacity: 1;
        transform: none;
    }

    .reveal-r {
        opacity: 0;
        transform: translateX(46px);
        transition: all .95s cubic-bezier(.2, .7, .2, 1);
    }

    .reveal-r.in {
        opacity: 1;
        transform: none;
    }

    .reveal-s {
        opacity: 0;
        transform: scale(.94);
        transition: all .9s cubic-bezier(.2, .7, .2, 1);
    }

    .reveal-s.in {
        opacity: 1;
        transform: none;
    }

    .magnetic {
        transition: transform .25s cubic-bezier(.2, .7, .2, 1), box-shadow .35s;
        will-change: transform;
    }

    .ripple {
        position: relative;
        overflow: hidden;
    }

    .ripple span.rp {
        position: absolute;
        border-radius: 50%;
        transform: scale(0);
        animation: rp .7s linear;
        background: rgba(255, 255, 255, .35);
        pointer-events: none;
    }

    @keyframes rp {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }

    .tilt {
        transform-style: preserve-3d;
        transition: transform .35s cubic-bezier(.2, .7, .2, 1), box-shadow .35s;
    }

    .brand-bg {
        transition: transform 1.2s cubic-bezier(.2, .7, .2, 1), filter .8s;
    }

    .brand-card:hover .brand-bg {
        transform: scale(1.09);
        filter: saturate(1.25);
    }

    .batik {
        background-image: radial-gradient(circle at 20% 20%, rgba(255, 196, 110, .16) 0 6px, transparent 7px),
            radial-gradient(circle at 70% 60%, rgba(255, 196, 110, .12) 0 4px, transparent 5px),
            repeating-linear-gradient(45deg, rgba(255, 196, 110, .07) 0 2px, transparent 2px 16px);
        background-size: 90px 90px, 70px 70px, auto;
    }

    .seigaiha {
        background-image: repeating-radial-gradient(circle at 50% 100%, transparent 0 14px, rgba(255, 255, 255, .06) 14px 15px);
        background-size: 44px 22px;
    }

    .scroll-x {
        scrollbar-width: none;
    }

    .scroll-x::-webkit-scrollbar {
        display: none;
    }

    @media (prefers-reduced-motion: reduce) {
        * {
            animation: none !important;
            transition-duration: .01ms !important;
        }
    }
    </style>
</head>

<body class="relative bg-navy-950 antialiased">

    <!-- ===== GLOBAL BACKGROUND ===== -->
    <div class="fixed inset-0 -z-50 overflow-hidden pointer-events-none">
        <div class="absolute inset-0 bg-[radial-gradient(120%_80%_at_50%_-10%,#0d1740_0%,#070b20_45%,#040713_100%)]">
        </div>
        <div class="absolute inset-0 grid-pattern"></div>
        <div id="aurora1"
            class="absolute -top-40 -left-40 h-[46rem] w-[46rem] rounded-full blur-[130px] opacity-45 animate-aurora"
            style="background:radial-gradient(circle,#1c5cff 0%,transparent 65%)"></div>
        <div id="aurora2"
            class="absolute top-1/3 -right-52 h-[42rem] w-[42rem] rounded-full blur-[140px] opacity-40 animate-aurora"
            style="animation-duration:34s;background:radial-gradient(circle,#7c3aed 0%,transparent 65%)"></div>
        <div id="aurora3"
            class="absolute bottom-0 left-1/3 h-[38rem] w-[38rem] rounded-full blur-[150px] opacity-30 animate-aurora"
            style="animation-duration:42s;background:radial-gradient(circle,#0ea5a5 0%,transparent 65%)"></div>
        <canvas id="particles" class="absolute inset-0 h-full w-full opacity-70"></canvas>
        <div class="absolute inset-0 noise mix-blend-overlay"></div>
    </div>

    <!-- scroll progress -->
    <div class="fixed top-0 left-0 z-[60] h-[3px] w-full bg-transparent">
        <div id="progress"
            class="h-full w-0 bg-gradient-to-r from-electric-400 via-violet2-400 to-aqua-400 shadow-glow"></div>
    </div>

    <!-- ===== NAVBAR ===== -->
    <header id="nav" class="fixed inset-x-0 top-0 z-50 transition-all duration-500">
        <div class="mx-auto max-w-[1400px] px-4 sm:px-6 lg:px-8 pt-3">
            <nav class="glass-strong grad-border rounded-2xl px-4 sm:px-5 py-3 shadow-soft">
                <div class="grid grid-cols-[minmax(0,1fr)_auto] items-center gap-3 lg:flex lg:justify-between">
                    <!-- logo -->
                    <a href="#top" class="flex min-w-0 items-center gap-3">
                        <span
                            class="relative grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-gradient-to-br from-electric-500 to-violet2-500 shadow-glow font-display font-extrabold text-white">T
                            <span class="absolute inset-0 rounded-xl border border-white/30 animate-pulseRing"></span>
                        </span>
                        <span class="min-w-0 hidden sm:block">
                            <span class="block truncate font-display text-[15px] font-extrabold tracking-tight">Trans
                                <span class="text-grad-anim">F&amp;B</span></span>
                            <span
                                class="block text-[10px] uppercase tracking-[0.22em] text-white/40 whitespace-nowrap">Official
                                Dashboard</span>
                        </span>
                    </a>

                    <!-- desktop menu -->
                    <ul class="hidden xl:flex items-center gap-1 text-[13px] font-medium text-white/65">
                        <li><a class="navlink rounded-lg px-3 py-2 transition hover:text-white hover:bg-white/5"
                                href="#top">Dashboard</a></li>
                        <li><a class="navlink rounded-lg px-3 py-2 transition hover:text-white hover:bg-white/5"
                                href="#brands">Brands</a></li>
                        <li><a class="navlink rounded-lg px-3 py-2 transition hover:text-white hover:bg-white/5"
                                href="#campaign">Campaign</a></li>
                        <li><a class="navlink rounded-lg px-3 py-2 transition hover:text-white hover:bg-white/5"
                                href="#performance">Performance</a></li>
                        <li><a class="navlink rounded-lg px-3 py-2 transition hover:text-white hover:bg-white/5"
                                href="#news">News</a></li>
                        <li><a class="navlink rounded-lg px-3 py-2 transition hover:text-white hover:bg-white/5"
                                href="#gallery">Gallery</a></li>
                        <li><a class="navlink rounded-lg px-3 py-2 transition hover:text-white hover:bg-white/5"
                                href="#promotion">Promotion</a></li>
                    </ul>

                    <!-- right -->
                    <div class="flex items-center gap-2 justify-self-end">
                        <div
                            class="hidden md:flex items-center gap-2 rounded-xl border border-white/10 bg-white/5 px-3 py-2 focus-within:border-electric-400/60 transition">
                            <svg class="h-4 w-4 shrink-0 text-white/40" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <circle cx="11" cy="11" r="7" />
                                <path d="m20 20-3.2-3.2" />
                            </svg>
                            <input id="searchInput" placeholder="Search brand, outlet, campaign…"
                                class="w-40 lg:w-56 bg-transparent text-xs text-white placeholder-white/35 outline-none" />
                            <kbd
                                class="hidden lg:block rounded border border-white/15 px-1.5 py-0.5 text-[10px] text-white/40">⌘K</kbd>
                        </div>
                        <button id="bellBtn"
                            class="magnetic relative grid h-10 w-10 shrink-0 place-items-center rounded-xl border border-white/10 bg-white/5 text-white/70 transition hover:text-white hover:border-electric-400/50">
                            <svg class="h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <path d="M18 8a6 6 0 1 0-12 0c0 7-3 9-3 9h18s-3-2-3-9" />
                                <path d="M13.7 21a2 2 0 0 1-3.4 0" />
                            </svg>
                            <span
                                class="absolute right-2 top-2 h-2 w-2 rounded-full bg-aqua-400 shadow-[0_0_10px_#4be6d4]"></span>
                        </button>
                        <button
                            class="magnetic flex shrink-0 items-center gap-2 rounded-xl border border-white/10 bg-white/5 py-1.5 pl-1.5 pr-3 transition hover:border-violet2-400/50">
                            <img src="https://images.unsplash.com/photo-1607346256330-dee7af15f7c5?w=80&q=70&auto=format&fit=crop"
                                alt="Foto profil admin Trans F&B" class="h-7 w-7 rounded-lg object-cover" />
                            <span class="hidden sm:block text-left leading-tight">
                                <span class="block text-[11px] font-semibold">Admin HQ</span>
                                <span class="block text-[9px] text-white/40">Super Access</span>
                            </span>
                        </button>
                        <button id="burger"
                            class="xl:hidden grid h-10 w-10 place-items-center rounded-xl border border-white/10 bg-white/5">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <path d="M4 7h16M4 12h16M4 17h16" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- mobile menu -->
                <div id="mobileMenu" class="xl:hidden grid grid-rows-[0fr] transition-all duration-500 overflow-hidden">
                    <div class="min-h-0">
                        <div class="mt-3 grid grid-cols-2 gap-2 border-t border-white/10 pt-3 text-sm">
                            <a class="mnav rounded-lg px-3 py-2 text-white/70 hover:bg-white/5"
                                href="#top">Dashboard</a>
                            <a class="mnav rounded-lg px-3 py-2 text-white/70 hover:bg-white/5"
                                href="#brands">Brands</a>
                            <a class="mnav rounded-lg px-3 py-2 text-white/70 hover:bg-white/5"
                                href="#campaign">Campaign</a>
                            <a class="mnav rounded-lg px-3 py-2 text-white/70 hover:bg-white/5"
                                href="#performance">Performance</a>
                            <a class="mnav rounded-lg px-3 py-2 text-white/70 hover:bg-white/5" href="#news">News</a>
                            <a class="mnav rounded-lg px-3 py-2 text-white/70 hover:bg-white/5"
                                href="#gallery">Gallery</a>
                            <a class="mnav rounded-lg px-3 py-2 text-white/70 hover:bg-white/5"
                                href="#promotion">Promotion</a>
                            <a class="mnav rounded-lg px-3 py-2 text-white/70 hover:bg-white/5"
                                href="#events">Events</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main id="top" class="relative">

        <!-- ===== HERO ===== -->
        <section class="relative px-4 sm:px-6 lg:px-8 pt-36 pb-16">
            <div class="mx-auto w-full max-w-[1400px]">
                <div class="grid gap-8 lg:grid-cols-[1.15fr_.85fr] items-stretch">

                    <div data-parallax="0.03"
                        class="glass grad-border reveal relative overflow-hidden rounded-[28px] p-7 sm:p-12 shadow-soft">
                        <div
                            class="absolute -top-24 -left-16 h-72 w-72 rounded-full bg-electric-500/25 blur-3xl animate-floaty">
                        </div>
                        <div class="absolute -bottom-24 right-0 h-72 w-72 rounded-full bg-violet2-500/25 blur-3xl animate-floaty"
                            style="animation-delay:-3s"></div>
                        <div class="relative">
                            <span
                                class="inline-flex items-center gap-2 rounded-full border border-white/12 bg-white/5 px-3 py-1.5 text-[11px] tracking-wide text-white/65">
                                <span class="h-1.5 w-1.5 rounded-full bg-aqua-400 shadow-[0_0_10px_#4be6d4]"></span>
                                Live · Kamis, 06 Agustus 2026 · 6 Brand Aktif
                            </span>
                            <p class="mt-7 font-display text-lg text-white/55">Welcome Back,</p>
                            <h1
                                class="mt-1 font-display text-[2.1rem] sm:text-6xl xl:text-7xl font-extrabold leading-[1.02] tracking-tight">
                                <span class="text-grad">Trans Food &amp;</span><br /><span
                                    class="text-grad-anim">Beverage Official</span>
                            </h1>
                            <p class="mt-6 max-w-xl text-[15px] leading-relaxed text-white/60">
                                Manage all Trans F&amp;B brands in one premium dashboard. Satu pusat kendali untuk
                                performa outlet, campaign nasional, dan pengalaman pelanggan di seluruh Indonesia.
                            </p>
                            <div class="mt-9 flex flex-wrap gap-3">
                                <button
                                    class="magnetic ripple group relative rounded-xl bg-gradient-to-r from-electric-500 to-violet2-500 px-6 py-3.5 text-sm font-semibold text-white shadow-glow transition hover:shadow-glowv">
                                    Explore Dashboard
                                    <span class="ml-1 inline-block transition group-hover:translate-x-1">→</span>
                                </button>
                                <button
                                    class="magnetic ripple rounded-xl border border-white/15 bg-white/5 px-6 py-3.5 text-sm font-semibold text-white/85 backdrop-blur transition hover:border-electric-400/60 hover:bg-white/10">
                                    Download Report
                                </button>
                            </div>
                            <div
                                class="mt-10 flex flex-wrap items-center gap-x-8 gap-y-3 border-t border-white/10 pt-6 text-xs text-white/45">
                                <span>⌁ Uptime sistem <b class="text-white/80">99.98%</b></span>
                                <span>⌁ Sinkronisasi <b class="text-white/80">real-time</b></span>
                                <span>⌁ 34 Provinsi</span>
                            </div>
                        </div>
                    </div>

                    <div data-parallax="0.06" class="reveal-r grid gap-4 content-start">
                        <div class="glass grad-border tilt rounded-[24px] p-6 shadow-soft">
                            <div class="flex items-center justify-between">
                                <p class="text-xs uppercase tracking-[0.2em] text-white/45">Live Revenue Pulse</p>
                                <span
                                    class="rounded-full bg-aqua-400/15 px-2 py-1 text-[10px] font-semibold text-aqua-400">+18.4%</span>
                            </div>
                            <p class="mt-3 font-display text-4xl font-extrabold">Rp <span class="countup"
                                    data-target="4128" data-dec="0" data-div="1">0</span><span
                                    class="text-white/40">M</span></p>
                            <canvas id="sparkline" height="90" class="mt-4 w-full"></canvas>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="glass grad-border rounded-[20px] p-5">
                                <p class="text-[11px] uppercase tracking-wider text-white/45">Orders / min</p>
                                <p class="mt-2 font-display text-2xl font-bold"><span class="countup"
                                        data-target="1264">0</span></p>
                                <div class="mt-3 h-1.5 overflow-hidden rounded-full bg-white/10">
                                    <div
                                        class="h-full w-[72%] rounded-full bg-gradient-to-r from-electric-400 to-violet2-400">
                                    </div>
                                </div>
                            </div>
                            <div class="glass grad-border rounded-[20px] p-5">
                                <p class="text-[11px] uppercase tracking-wider text-white/45">Active Outlet</p>
                                <p class="mt-2 font-display text-2xl font-bold"><span class="countup"
                                        data-target="682">0</span></p>
                                <div class="mt-3 h-1.5 overflow-hidden rounded-full bg-white/10">
                                    <div
                                        class="h-full w-[88%] rounded-full bg-gradient-to-r from-aqua-400 to-electric-400">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ===== OVERVIEW CARDS ===== -->
                <div class="mt-6 grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
                    <div class="glass grad-border tilt reveal group rounded-[22px] p-6 shadow-soft"
                        style="transition-delay:.05s">
                        <div class="flex items-start justify-between">
                            <span
                                class="grid h-11 w-11 place-items-center rounded-xl bg-electric-500/15 text-electric-400 shadow-glow">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8">
                                    <path d="M3 21h18M5 21V7l7-4 7 4v14M9 21v-5h6v5" />
                                </svg>
                            </span>
                            <span class="text-[11px] font-semibold text-aqua-400">+2 YoY</span>
                        </div>
                        <p class="mt-5 text-xs uppercase tracking-[0.18em] text-white/45">Total Brand</p>
                        <p class="mt-1 font-display text-4xl font-extrabold"><span class="countup"
                                data-target="12">0</span></p>
                        <p class="mt-2 text-xs text-white/40">6 brand unggulan aktif dipromosikan</p>
                    </div>
                    <div class="glass grad-border tilt reveal group rounded-[22px] p-6 shadow-soft"
                        style="transition-delay:.12s">
                        <div class="flex items-start justify-between">
                            <span
                                class="grid h-11 w-11 place-items-center rounded-xl bg-violet2-500/15 text-violet2-400 shadow-glowv">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8">
                                    <path d="M12 21s7-5.4 7-11a7 7 0 1 0-14 0c0 5.6 7 11 7 11Z" />
                                    <circle cx="12" cy="10" r="2.5" />
                                </svg>
                            </span>
                            <span class="text-[11px] font-semibold text-aqua-400">+37 outlet</span>
                        </div>
                        <p class="mt-5 text-xs uppercase tracking-[0.18em] text-white/45">Total Outlet</p>
                        <p class="mt-1 font-display text-4xl font-extrabold"><span class="countup"
                                data-target="742">0</span></p>
                        <p class="mt-2 text-xs text-white/40">Tersebar di 34 provinsi</p>
                    </div>
                    <div class="glass grad-border tilt reveal group rounded-[22px] p-6 shadow-soft"
                        style="transition-delay:.19s">
                        <div class="flex items-start justify-between">
                            <span class="grid h-11 w-11 place-items-center rounded-xl bg-aqua-400/15 text-aqua-400">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8">
                                    <path d="M12 2v20M17 6H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
                                </svg>
                            </span>
                            <span class="text-[11px] font-semibold text-aqua-400">+18.4%</span>
                        </div>
                        <p class="mt-5 text-xs uppercase tracking-[0.18em] text-white/45">Today's Revenue</p>
                        <p class="mt-1 font-display text-4xl font-extrabold">Rp <span class="countup" data-target="4128"
                                data-dec="0" data-div="1">0</span><span class="text-white/40 text-2xl">M</span></p>
                        <p class="mt-2 text-xs text-white/40">Update terakhir 2 menit lalu</p>
                    </div>
                    <div class="glass grad-border tilt reveal group rounded-[22px] p-6 shadow-soft"
                        style="transition-delay:.26s">
                        <div class="flex items-start justify-between">
                            <span class="grid h-11 w-11 place-items-center rounded-xl bg-amber-400/15 text-amber-300">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8">
                                    <path d="m12 3 2.6 5.6 6.1.8-4.5 4.2 1.2 6-5.4-3-5.4 3 1.2-6L3.3 9.4l6.1-.8Z" />
                                </svg>
                            </span>
                            <span class="text-[11px] font-semibold text-aqua-400">Excellent</span>
                        </div>
                        <p class="mt-5 text-xs uppercase tracking-[0.18em] text-white/45">Customer Satisfaction</p>
                        <p class="mt-1 font-display text-4xl font-extrabold"><span class="countup" data-target="968"
                                data-dec="1" data-div="10">0</span><span class="text-white/40 text-2xl">%</span></p>
                        <div class="mt-3 h-1.5 overflow-hidden rounded-full bg-white/10">
                            <div class="h-full w-[96%] rounded-full bg-gradient-to-r from-amber-300 to-violet2-400">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== MARQUEE ===== -->
        <section class="relative overflow-hidden border-y border-white/8 py-5">
            <div
                class="flex w-max animate-marquee gap-14 whitespace-nowrap px-8 font-display text-sm uppercase tracking-[0.35em] text-white/25">
                <span>The Coffee Bean &amp; Tea Leaf</span><span>•</span><span>Wendy's</span><span>•</span><span>Baskin
                    Robbins</span><span>•</span><span>Warung
                    Wardani</span><span>•</span><span>Gyukatsu</span><span>•</span><span>Tasty
                    Kitchen</span><span>•</span>
                <span>The Coffee Bean &amp; Tea Leaf</span><span>•</span><span>Wendy's</span><span>•</span><span>Baskin
                    Robbins</span><span>•</span><span>Warung
                    Wardani</span><span>•</span><span>Gyukatsu</span><span>•</span><span>Tasty
                    Kitchen</span><span>•</span>
            </div>
        </section>

        <!-- ===== BRANDS ===== -->
        <section id="brands" class="relative px-4 sm:px-6 lg:px-8 py-24">
            <div class="mx-auto max-w-[1400px]">
                <div class="reveal max-w-2xl">
                    <span class="text-[11px] uppercase tracking-[0.35em] text-electric-400">Our Portfolio</span>
                    <h2 class="mt-3 font-display text-3xl sm:text-5xl font-extrabold tracking-tight text-grad">Brand
                        Universe</h2>
                    <p class="mt-4 text-white/55">Setiap brand punya panggungnya sendiri — identitas visual, performa
                        harian, dan campaign yang dikurasi khusus.</p>
                </div>

                <!-- BRAND 1 — Coffee Bean -->
                <article
                    class="brand-card reveal group relative mt-14 overflow-hidden rounded-[32px] border border-white/10 shadow-soft">
                    <img src="https://images.unsplash.com/photo-1447933601403-0c6688de566e?w=1600&q=80&auto=format&fit=crop"
                        alt="Secangkir kopi panas The Coffee Bean & Tea Leaf" loading="lazy"
                        class="brand-bg absolute inset-0 h-full w-full object-cover" />
                    <div class="absolute inset-0 bg-gradient-to-r from-navy-950 via-navy-950/85 to-navy-950/20"></div>
                    <div
                        class="absolute inset-0 bg-[radial-gradient(60%_80%_at_15%_50%,rgba(42,143,255,.28),transparent_70%)]">
                    </div>
                    <div class="relative grid gap-10 p-7 sm:p-12 lg:grid-cols-[1.05fr_.95fr] lg:items-center">
                        <div data-parallax="0.02">
                            <span
                                class="inline-block rounded-full border border-amber-300/30 bg-amber-300/10 px-3 py-1 text-[11px] tracking-widest text-amber-200">SINCE
                                1963 · PREMIUM COFFEE</span>
                            <h3 class="mt-5 font-display text-3xl sm:text-5xl font-extrabold leading-tight">The Coffee
                                Bean<br /><span class="text-grad-anim">&amp; Tea Leaf</span></h3>
                            <p class="mt-5 max-w-lg text-sm leading-relaxed text-white/60">Biji arabika pilihan,
                                roasting harian, dan ritual seduh yang konsisten di setiap gerai. Ikon kopi premium yang
                                menemani pagi Indonesia.</p>
                            <button
                                class="magnetic ripple mt-7 rounded-xl bg-gradient-to-r from-amber-400 to-electric-500 px-6 py-3 text-sm font-semibold text-navy-950 shadow-glow transition">Explore
                                Brand →</button>
                        </div>
                        <div class="grid grid-cols-2 gap-3 sm:gap-4">
                            <div class="glass grad-border rounded-2xl p-5">
                                <p class="text-[11px] uppercase tracking-wider text-white/45">Today's Sales</p>
                                <p class="mt-1 font-display text-2xl font-bold">Rp <span class="countup"
                                        data-target="892" data-dec="1" data-div="1">0</span>Jt</p>
                            </div>
                            <div class="glass grad-border rounded-2xl p-5">
                                <p class="text-[11px] uppercase tracking-wider text-white/45">Visitors</p>
                                <p class="mt-1 font-display text-2xl font-bold"><span class="countup"
                                        data-target="18420">0</span></p>
                            </div>
                            <div class="glass grad-border rounded-2xl p-5">
                                <p class="text-[11px] uppercase tracking-wider text-white/45">Promotion</p>
                                <p class="mt-1 font-display text-lg font-bold text-amber-200">Buy 1 Get 1 Latte</p>
                            </div>
                            <div class="glass grad-border rounded-2xl p-5">
                                <p class="text-[11px] uppercase tracking-wider text-white/45">Rating</p>
                                <p class="mt-1 font-display text-2xl font-bold">4.<span class="countup"
                                        data-target="9">0</span> <span class="text-amber-300 text-base">★★★★★</span></p>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- BRAND 2 — Wendy's -->
                <article
                    class="brand-card reveal-l group relative mt-8 overflow-hidden rounded-[32px] border border-white/10 shadow-soft">
                    <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?w=1600&q=80&auto=format&fit=crop"
                        alt="Burger juicy khas Wendy's" loading="lazy"
                        class="brand-bg absolute inset-0 h-full w-full object-cover" />
                    <div class="absolute inset-0 bg-gradient-to-l from-navy-950 via-navy-950/85 to-navy-950/25"></div>
                    <div
                        class="absolute inset-0 bg-[radial-gradient(60%_80%_at_85%_50%,rgba(239,68,68,.28),transparent_70%)]">
                    </div>
                    <div class="relative grid gap-10 p-7 sm:p-12 lg:grid-cols-[.95fr_1.05fr] lg:items-center">
                        <div class="order-2 lg:order-1 grid gap-3">
                            <div class="glass grad-border rounded-2xl p-5 animate-floaty" style="animation-duration:9s">
                                <p class="text-[11px] uppercase tracking-wider text-white/45">Promo Banner</p>
                                <p class="mt-1 font-display text-xl font-extrabold text-red-300">FLASH DEAL 12.12 —
                                    Baconator 50% OFF</p>
                                <p class="mt-1 text-xs text-white/45">Berlaku 11.00 – 14.00 WIB di seluruh outlet</p>
                            </div>
                            <div class="grid grid-cols-2 gap-3">
                                <div class="glass grad-border rounded-2xl p-5">
                                    <p class="text-[11px] uppercase tracking-wider text-white/45">Best Seller</p>
                                    <p class="mt-1 font-display text-lg font-bold">Baconator</p>
                                    <p class="text-xs text-white/40">4.312 terjual hari ini</p>
                                </div>
                                <div class="glass grad-border rounded-2xl p-5">
                                    <p class="text-[11px] uppercase tracking-wider text-white/45">Today's Sales</p>
                                    <p class="mt-1 font-display text-2xl font-bold">Rp <span class="countup"
                                            data-target="1140" data-dec="0" data-div="1">0</span>Jt</p>
                                </div>
                            </div>
                        </div>
                        <div class="order-1 lg:order-2 lg:text-right" data-parallax="0.02">
                            <span
                                class="inline-block rounded-full border border-red-300/30 bg-red-400/10 px-3 py-1 text-[11px] tracking-widest text-red-200">FRESH,
                                NEVER FROZEN</span>
                            <h3 class="mt-5 font-display text-3xl sm:text-5xl font-extrabold leading-tight">Wendy's</h3>
                            <p class="mt-5 lg:ml-auto max-w-lg text-sm leading-relaxed text-white/60">Daging sapi segar
                                tanpa pembekuan, dipanggang saat dipesan. Rasa berani untuk generasi yang tidak mau
                                kompromi.</p>
                            <button
                                class="magnetic ripple mt-7 rounded-xl bg-gradient-to-r from-red-500 to-violet2-500 px-6 py-3 text-sm font-semibold text-white shadow-glowv">Order
                                Insight →</button>
                        </div>
                    </div>
                </article>

                <!-- BRAND 3 — Baskin Robbins -->
                <article
                    class="brand-card reveal-r group relative mt-8 overflow-hidden rounded-[32px] border border-white/10 shadow-soft">
                    <img src="https://images.unsplash.com/photo-1497034825429-c343d7c6a68f?w=1600&q=80&auto=format&fit=crop"
                        alt="Es krim warna-warni Baskin Robbins" loading="lazy"
                        class="brand-bg absolute inset-0 h-full w-full object-cover" />
                    <div class="absolute inset-0"
                        style="background:linear-gradient(115deg,rgba(5,8,24,.94) 30%,rgba(236,72,153,.35) 75%,rgba(84,183,255,.3))">
                    </div>
                    <div
                        class="pointer-events-none absolute right-[8%] top-10 h-24 w-24 rounded-full bg-pink-400/30 blur-2xl animate-floaty">
                    </div>
                    <div class="pointer-events-none absolute right-[24%] bottom-10 h-20 w-20 rounded-full bg-electric-400/30 blur-2xl animate-floaty"
                        style="animation-delay:-2.5s"></div>
                    <div class="relative grid gap-10 p-7 sm:p-12 lg:grid-cols-2 lg:items-center">
                        <div data-parallax="0.02">
                            <span
                                class="inline-block rounded-full border border-pink-300/30 bg-pink-400/10 px-3 py-1 text-[11px] tracking-widest text-pink-200">31
                                FLAVORS · SINCE 1945</span>
                            <h3 class="mt-5 font-display text-3xl sm:text-5xl font-extrabold leading-tight">Baskin <span
                                    class="text-grad-anim">Robbins</span></h3>
                            <p class="mt-5 max-w-lg text-sm leading-relaxed text-white/60">Satu rasa untuk setiap hari.
                                Es krim ikonik dengan tekstur creamy dan warna yang membuat momen jadi perayaan.</p>
                            <button
                                class="magnetic ripple mt-7 rounded-xl bg-gradient-to-r from-pink-500 to-electric-500 px-6 py-3 text-sm font-semibold text-white shadow-glow">Scoop
                                the Data →</button>
                        </div>
                        <div class="grid gap-3 sm:grid-cols-2">
                            <div class="glass grad-border rounded-2xl p-5">
                                <p class="text-[11px] uppercase tracking-wider text-white/45">Today's Sales</p>
                                <p class="mt-1 font-display text-2xl font-bold">Rp <span class="countup"
                                        data-target="623">0</span>Jt</p>
                            </div>
                            <div class="glass grad-border rounded-2xl p-5">
                                <p class="text-[11px] uppercase tracking-wider text-white/45">Scoops Sold</p>
                                <p class="mt-1 font-display text-2xl font-bold"><span class="countup"
                                        data-target="27540">0</span></p>
                            </div>
                            <div class="glass grad-border sm:col-span-2 rounded-2xl p-5">
                                <p class="text-[11px] uppercase tracking-wider text-white/45">Promo</p>
                                <p class="mt-1 font-display text-lg font-bold text-pink-200">31% OFF setiap tanggal 31 ·
                                    Pint &amp; Quart</p>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- BRAND 4 — Warung Wardani -->
                <article
                    class="brand-card reveal-l group relative mt-8 overflow-hidden rounded-[32px] border border-amber-200/15 shadow-soft">
                    <img src="https://images.unsplash.com/photo-1596797038530-2c107229654b?w=1600&q=80&auto=format&fit=crop"
                        alt="Hidangan nusantara Warung Wardani" loading="lazy"
                        class="brand-bg absolute inset-0 h-full w-full object-cover" />
                    <div class="absolute inset-0 bg-gradient-to-tr from-[#160d05f2] via-navy-950/90 to-navy-950/40">
                    </div>
                    <div class="absolute inset-0 batik opacity-60"></div>
                    <div class="relative grid gap-10 p-7 sm:p-12 lg:grid-cols-[1fr_1fr] lg:items-center">
                        <div data-parallax="0.02">
                            <span
                                class="inline-block rounded-full border border-amber-200/30 bg-amber-200/10 px-3 py-1 text-[11px] tracking-widest text-amber-100">WARISAN
                                RASA NUSANTARA</span>
                            <h3
                                class="mt-5 font-display text-3xl sm:text-5xl font-extrabold leading-tight text-amber-50">
                                Warung <span class="text-amber-300">Wardani</span></h3>
                            <p class="mt-5 max-w-lg text-sm leading-relaxed text-white/60">Resep turun-temurun, bumbu
                                diulek manual, disajikan hangat. Rumah bagi mereka yang rindu masakan Indonesia sejati.
                            </p>
                            <button
                                class="magnetic ripple mt-7 rounded-xl border border-amber-200/40 bg-amber-200/10 px-6 py-3 text-sm font-semibold text-amber-100 backdrop-blur transition hover:bg-amber-200/20">Lihat
                                Menu Andalan →</button>
                        </div>
                        <div class="grid gap-3">
                            <div class="glass grad-border rounded-2xl p-5">
                                <p class="text-[11px] uppercase tracking-wider text-white/45">Best Menu</p>
                                <ul class="mt-3 space-y-2 text-sm text-white/75">
                                    <li class="flex justify-between"><span>Nasi Campur Bali</span><span
                                            class="text-amber-300">1.842 porsi</span></li>
                                    <li class="flex justify-between"><span>Ayam Betutu</span><span
                                            class="text-amber-300">1.209 porsi</span></li>
                                    <li class="flex justify-between"><span>Sate Lilit</span><span
                                            class="text-amber-300">986 porsi</span></li>
                                </ul>
                            </div>
                            <div class="grid grid-cols-2 gap-3">
                                <div class="glass grad-border rounded-2xl p-5">
                                    <p class="text-[11px] uppercase tracking-wider text-white/45">Today's Sales</p>
                                    <p class="mt-1 font-display text-2xl font-bold">Rp <span class="countup"
                                            data-target="418">0</span>Jt</p>
                                </div>
                                <div class="glass grad-border rounded-2xl p-5">
                                    <p class="text-[11px] uppercase tracking-wider text-white/45">Rating</p>
                                    <p class="mt-1 font-display text-2xl font-bold">4.<span class="countup"
                                            data-target="8">0</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- BRAND 5 — Gyukatsu -->
                <article
                    class="brand-card reveal group relative mt-8 overflow-hidden rounded-[32px] border border-white/10 shadow-soft">
                    <img src="https://images.unsplash.com/photo-1580822184713-fc5400e7fe10?w=1600&q=80&auto=format&fit=crop"
                        alt="Gyukatsu daging sapi premium ala Jepang" loading="lazy"
                        class="brand-bg absolute inset-0 h-full w-full object-cover opacity-70" />
                    <div class="absolute inset-0 bg-gradient-to-b from-[#03050ff2] via-[#05081ae6] to-[#03050ff5]">
                    </div>
                    <div class="absolute inset-0 seigaiha opacity-40"></div>
                    <div class="relative p-7 sm:p-14 text-center">
                        <span
                            class="inline-block rounded-full border border-white/15 bg-white/5 px-3 py-1 text-[11px] tracking-[0.4em] text-white/60">牛カツ
                            · PREMIUM JAPANESE</span>
                        <h3 class="mt-6 font-display text-4xl sm:text-6xl font-extrabold tracking-tight text-grad">
                            Gyukatsu</h3>
                        <p class="mx-auto mt-5 max-w-xl text-sm leading-relaxed text-white/55">Daging sapi pilihan
                            dilapisi panko, digoreng 60 detik, lalu dimatangkan sendiri di atas batu panas. Ritual makan
                            yang tenang dan presisi.</p>
                        <div class="mx-auto mt-10 grid max-w-3xl gap-3 sm:grid-cols-3">
                            <div class="glass grad-border rounded-2xl p-5">
                                <p class="text-[11px] uppercase tracking-wider text-white/45">Today's Sales</p>
                                <p class="mt-1 font-display text-2xl font-bold">Rp <span class="countup"
                                        data-target="537">0</span>Jt</p>
                            </div>
                            <div class="glass grad-border rounded-2xl p-5">
                                <p class="text-[11px] uppercase tracking-wider text-white/45">Avg. Ticket</p>
                                <p class="mt-1 font-display text-2xl font-bold">Rp <span class="countup"
                                        data-target="188">0</span>K</p>
                            </div>
                            <div class="glass grad-border rounded-2xl p-5">
                                <p class="text-[11px] uppercase tracking-wider text-white/45">Waiting List</p>
                                <p class="mt-1 font-display text-2xl font-bold"><span class="countup"
                                        data-target="214">0</span></p>
                            </div>
                        </div>
                        <button
                            class="magnetic ripple mt-9 rounded-xl border border-white/20 bg-white/5 px-8 py-3 text-sm font-semibold tracking-wide backdrop-blur transition hover:border-electric-400/70 hover:shadow-glow">Enter
                            Experience →</button>
                    </div>
                </article>

                <!-- BRAND 6 — Tasty Kitchen -->
                <article
                    class="brand-card reveal-r group relative mt-8 overflow-hidden rounded-[32px] border border-white/10 shadow-soft">
                    <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=1600&q=80&auto=format&fit=crop"
                        alt="Sajian modern Tasty Kitchen" loading="lazy"
                        class="brand-bg absolute inset-0 h-full w-full object-cover" />
                    <div class="absolute inset-0 bg-gradient-to-r from-navy-950/95 via-navy-950/80 to-violet2-600/30">
                    </div>
                    <div class="relative grid gap-8 p-7 sm:p-12 lg:grid-cols-[1fr_1.1fr] lg:items-center">
                        <div data-parallax="0.02">
                            <span
                                class="inline-block rounded-full border border-aqua-400/30 bg-aqua-400/10 px-3 py-1 text-[11px] tracking-widest text-aqua-400">MODERN
                                CLOUD KITCHEN</span>
                            <h3 class="mt-5 font-display text-3xl sm:text-5xl font-extrabold leading-tight">Tasty <span
                                    class="text-grad-anim">Kitchen</span></h3>
                            <p class="mt-5 max-w-lg text-sm leading-relaxed text-white/60">Dapur modern yang bergerak
                                cepat mengikuti tren rasa. Menu baru setiap bulan, dikurasi langsung oleh chef kami.</p>
                            <button
                                class="magnetic ripple mt-7 rounded-xl bg-gradient-to-r from-aqua-400 to-electric-500 px-6 py-3 text-sm font-semibold text-navy-950">See
                                Trending →</button>
                        </div>
                        <div class="grid gap-3 sm:grid-cols-2">
                            <div class="glass grad-border rounded-2xl p-5 sm:col-span-2">
                                <p class="text-[11px] uppercase tracking-wider text-white/45">Chef Recommendation</p>
                                <p class="mt-1 font-display text-xl font-extrabold">Truffle Mushroom Rice Bowl</p>
                                <p class="mt-1 text-xs text-white/45">Dikurasi Chef Ardi Prasetyo · rating 4.9 dari 3.2K
                                    ulasan</p>
                            </div>
                            <div class="glass grad-border rounded-2xl p-5">
                                <p class="text-[11px] uppercase tracking-wider text-white/45">Trending Menu</p>
                                <p class="mt-1 font-display text-lg font-bold">Spicy Karaage</p>
                                <p class="text-xs text-aqua-400">▲ 62% minggu ini</p>
                            </div>
                            <div class="glass grad-border rounded-2xl p-5">
                                <p class="text-[11px] uppercase tracking-wider text-white/45">Today's Sales</p>
                                <p class="mt-1 font-display text-2xl font-bold">Rp <span class="countup"
                                        data-target="498">0</span>Jt</p>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <!-- ===== PROMOTION SLIDER ===== -->
        <section id="promotion" class="relative px-4 sm:px-6 lg:px-8 py-20">
            <div class="mx-auto max-w-[1400px]">
                <div class="reveal grid gap-4 sm:flex sm:items-end sm:justify-between">
                    <div>
                        <span class="text-[11px] uppercase tracking-[0.35em] text-violet2-400">Promotion</span>
                        <h2 class="mt-3 font-display text-3xl sm:text-5xl font-extrabold text-grad">Campaign Spotlight
                        </h2>
                    </div>
                    <div class="flex gap-2">
                        <button id="prevSlide"
                            class="magnetic grid h-11 w-11 place-items-center rounded-xl border border-white/12 bg-white/5 transition hover:border-electric-400/60">←</button>
                        <button id="nextSlide"
                            class="magnetic grid h-11 w-11 place-items-center rounded-xl border border-white/12 bg-white/5 transition hover:border-electric-400/60">→</button>
                    </div>
                </div>

                <div class="reveal-s mt-8 overflow-hidden rounded-[30px]">
                    <div id="slides" class="flex transition-transform duration-[900ms] ease-[cubic-bezier(.2,.7,.2,1)]">
                    </div>
                </div>
                <div id="dots" class="mt-6 flex justify-center gap-2"></div>
            </div>
        </section>

        <!-- ===== ANALYTICS ===== -->
        <section id="performance" class="relative px-4 sm:px-6 lg:px-8 py-20">
            <div class="mx-auto max-w-[1400px]">
                <div class="reveal max-w-2xl">
                    <span class="text-[11px] uppercase tracking-[0.35em] text-aqua-400">Analytics</span>
                    <h2 class="mt-3 font-display text-3xl sm:text-5xl font-extrabold text-grad">Performance Intelligence
                    </h2>
                    <p class="mt-4 text-white/55">Data agregat seluruh brand Trans F&amp;B dalam 12 bulan terakhir.</p>
                </div>

                <div class="mt-10 grid gap-4 lg:grid-cols-3">
                    <div class="glass grad-border reveal rounded-[24px] p-6 lg:col-span-2 shadow-soft">
                        <div class="grid grid-cols-[minmax(0,1fr)_auto] items-center gap-4">
                            <div class="min-w-0">
                                <p class="truncate font-display text-lg font-bold">Revenue vs Visitors</p>
                                <p class="text-xs text-white/45">Dummy data · Jan – Des</p>
                            </div>
                            <div class="flex shrink-0 gap-3 text-[11px]">
                                <span class="flex items-center gap-1.5"><i
                                        class="h-2 w-2 rounded-full bg-electric-400 inline-block"></i>Revenue</span>
                                <span class="flex items-center gap-1.5"><i
                                        class="h-2 w-2 rounded-full bg-violet2-400 inline-block"></i>Visitors</span>
                            </div>
                        </div>
                        <canvas id="mainChart" height="260" class="mt-6 w-full"></canvas>
                    </div>

                    <div class="grid gap-4">
                        <div class="glass grad-border reveal rounded-[24px] p-6">
                            <p class="font-display text-lg font-bold">Orders per Brand</p>
                            <canvas id="barChart" height="170" class="mt-4 w-full"></canvas>
                        </div>
                        <div class="glass grad-border reveal rounded-[24px] p-6">
                            <p class="font-display text-lg font-bold">Growth Index</p>
                            <div class="mt-4 space-y-3">
                                <div>
                                    <div class="flex justify-between text-xs text-white/60"><span>Coffee
                                            Bean</span><span>+24%</span></div>
                                    <div class="mt-1.5 h-2 rounded-full bg-white/10">
                                        <div class="growbar h-full rounded-full bg-gradient-to-r from-electric-400 to-violet2-400"
                                            data-w="82%" style="width:0"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between text-xs text-white/60">
                                        <span>Wendy's</span><span>+19%</span>
                                    </div>
                                    <div class="mt-1.5 h-2 rounded-full bg-white/10">
                                        <div class="growbar h-full rounded-full bg-gradient-to-r from-red-400 to-violet2-400"
                                            data-w="68%" style="width:0"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between text-xs text-white/60"><span>Baskin
                                            Robbins</span><span>+31%</span></div>
                                    <div class="mt-1.5 h-2 rounded-full bg-white/10">
                                        <div class="growbar h-full rounded-full bg-gradient-to-r from-pink-400 to-electric-400"
                                            data-w="91%" style="width:0"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between text-xs text-white/60">
                                        <span>Gyukatsu</span><span>+14%</span>
                                    </div>
                                    <div class="mt-1.5 h-2 rounded-full bg-white/10">
                                        <div class="growbar h-full rounded-full bg-gradient-to-r from-aqua-400 to-electric-400"
                                            data-w="54%" style="width:0"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== CAMPAIGN ===== -->
        <section id="campaign" class="relative px-4 sm:px-6 lg:px-8 py-20">
            <div class="mx-auto max-w-[1400px]">
                <div class="reveal max-w-2xl">
                    <span class="text-[11px] uppercase tracking-[0.35em] text-electric-400">Campaign</span>
                    <h2 class="mt-3 font-display text-3xl sm:text-5xl font-extrabold text-grad">Active Campaigns</h2>
                </div>
                <div class="mt-10 grid gap-4 md:grid-cols-2 xl:grid-cols-3">
                    <div class="glass grad-border tilt reveal rounded-[22px] p-6">
                        <div class="flex items-center justify-between"><span
                                class="rounded-full bg-electric-500/15 px-2.5 py-1 text-[10px] font-semibold text-electric-400">RUNNING</span><span
                                class="text-xs text-white/40">D-12</span></div>
                        <p class="mt-4 font-display text-xl font-bold">Nusantara Flavor Fest</p>
                        <p class="mt-2 text-sm text-white/50">Kolaborasi 6 brand, 120 outlet terpilih.</p>
                        <div class="mt-5 h-2 rounded-full bg-white/10">
                            <div class="growbar h-full rounded-full bg-gradient-to-r from-electric-400 to-violet2-400"
                                data-w="74%" style="width:0"></div>
                        </div>
                        <p class="mt-2 text-xs text-white/40">74% target tercapai</p>
                    </div>
                    <div class="glass grad-border tilt reveal rounded-[22px] p-6">
                        <div class="flex items-center justify-between"><span
                                class="rounded-full bg-violet2-500/15 px-2.5 py-1 text-[10px] font-semibold text-violet2-400">SCHEDULED</span><span
                                class="text-xs text-white/40">D-27</span></div>
                        <p class="mt-4 font-display text-xl font-bold">Midnight Coffee Run</p>
                        <p class="mt-2 text-sm text-white/50">Program larut malam untuk 48 gerai 24 jam.</p>
                        <div class="mt-5 h-2 rounded-full bg-white/10">
                            <div class="growbar h-full rounded-full bg-gradient-to-r from-violet2-400 to-pink-400"
                                data-w="38%" style="width:0"></div>
                        </div>
                        <p class="mt-2 text-xs text-white/40">38% persiapan</p>
                    </div>
                    <div class="glass grad-border tilt reveal rounded-[22px] p-6 md:col-span-2 xl:col-span-1">
                        <div class="flex items-center justify-between"><span
                                class="rounded-full bg-aqua-400/15 px-2.5 py-1 text-[10px] font-semibold text-aqua-400">HIGH
                                IMPACT</span><span class="text-xs text-white/40">D-3</span></div>
                        <p class="mt-4 font-display text-xl font-bold">Family Weekend Bundle</p>
                        <p class="mt-2 text-sm text-white/50">Paket keluarga lintas brand, harga spesial akhir pekan.
                        </p>
                        <div class="mt-5 h-2 rounded-full bg-white/10">
                            <div class="growbar h-full rounded-full bg-gradient-to-r from-aqua-400 to-electric-400"
                                data-w="92%" style="width:0"></div>
                        </div>
                        <p class="mt-2 text-xs text-white/40">92% siap tayang</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== NEWS ===== -->
        <section id="news" class="relative px-4 sm:px-6 lg:px-8 py-20">
            <div class="mx-auto max-w-[1400px]">
                <div class="reveal grid gap-4 sm:flex sm:items-end sm:justify-between">
                    <div><span class="text-[11px] uppercase tracking-[0.35em] text-violet2-400">Newsroom</span>
                        <h2 class="mt-3 font-display text-3xl sm:text-5xl font-extrabold text-grad">Latest News</h2>
                    </div>
                    <a href="#" class="text-sm text-white/50 transition hover:text-white">Lihat semua →</a>
                </div>
                <div class="mt-10 grid gap-5 lg:grid-cols-3" id="newsGrid"></div>
            </div>
        </section>

        <!-- ===== EVENTS ===== -->
        <section id="events" class="relative px-4 sm:px-6 lg:px-8 py-20">
            <div class="mx-auto max-w-[1400px]">
                <div class="reveal max-w-2xl"><span
                        class="text-[11px] uppercase tracking-[0.35em] text-aqua-400">Agenda</span>
                    <h2 class="mt-3 font-display text-3xl sm:text-5xl font-extrabold text-grad">Upcoming Events</h2>
                </div>
                <div class="relative mt-12 pl-6 sm:pl-10">
                    <div
                        class="absolute left-[7px] sm:left-[15px] top-2 bottom-2 w-px bg-gradient-to-b from-electric-400 via-violet2-400 to-transparent">
                    </div>
                    <div id="timeline" class="space-y-6"></div>
                </div>
            </div>
        </section>

        <!-- ===== GALLERY ===== -->
        <section id="gallery" class="relative px-4 sm:px-6 lg:px-8 py-20">
            <div class="mx-auto max-w-[1400px]">
                <div class="reveal max-w-2xl"><span
                        class="text-[11px] uppercase tracking-[0.35em] text-electric-400">Gallery</span>
                    <h2 class="mt-3 font-display text-3xl sm:text-5xl font-extrabold text-grad">Moments Across Outlets
                    </h2>
                </div>
                <div class="mt-10 grid grid-cols-2 gap-3 sm:gap-4 lg:grid-cols-4" id="galleryGrid"></div>
            </div>
        </section>

        <!-- ===== TESTIMONIAL ===== -->
        <section class="relative px-4 sm:px-6 lg:px-8 py-20">
            <div class="mx-auto max-w-[1400px]">
                <div class="reveal text-center"><span
                        class="text-[11px] uppercase tracking-[0.35em] text-violet2-400">Testimonial</span>
                    <h2 class="mt-3 font-display text-3xl sm:text-5xl font-extrabold text-grad">Customer Review</h2>
                </div>
                <div class="reveal-s mt-10 overflow-hidden rounded-[28px]">
                    <div id="testiTrack"
                        class="flex transition-transform duration-[900ms] ease-[cubic-bezier(.2,.7,.2,1)]"></div>
                </div>
                <div id="testiDots" class="mt-6 flex justify-center gap-2"></div>
            </div>
        </section>

        <!-- ===== CTA ===== -->
        <section class="relative px-4 sm:px-6 lg:px-8 pb-20">
            <div class="mx-auto max-w-[1400px]">
                <div
                    class="glass grad-border reveal relative overflow-hidden rounded-[30px] p-8 sm:p-14 text-center shadow-soft">
                    <div
                        class="absolute -top-24 left-1/3 h-72 w-72 rounded-full bg-electric-500/25 blur-3xl animate-floaty">
                    </div>
                    <div class="relative">
                        <h2 class="font-display text-3xl sm:text-5xl font-extrabold text-grad">Satu Grup. Satu Standar.
                            Rasa Terbaik.</h2>
                        <p class="mx-auto mt-4 max-w-xl text-white/55">Trans Food &amp; Beverage Official terus
                            memperluas jangkauan kuliner premium di seluruh Indonesia.</p>
                        <button
                            class="magnetic ripple mt-8 rounded-xl bg-gradient-to-r from-electric-500 to-violet2-500 px-8 py-3.5 text-sm font-semibold shadow-glow">Explore
                            All Brands →</button>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- ===== FOOTER ===== -->
    <footer class="relative border-t border-white/8 px-4 sm:px-6 lg:px-8 py-14">
        <div class="mx-auto max-w-[1400px]">
            <div class="glass rounded-[26px] p-8 sm:p-10">
                <div class="grid gap-10 lg:grid-cols-[1.3fr_1fr_1fr_1fr]">
                    <div>
                        <div class="flex items-center gap-3">
                            <span
                                class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-gradient-to-br from-electric-500 to-violet2-500 font-display font-extrabold shadow-glow">T</span>
                            <span><span class="block font-display font-extrabold">Trans <span
                                        class="text-grad-anim">F&amp;B</span></span><span
                                    class="block text-[10px] uppercase tracking-[0.28em] text-white/40">Official</span></span>
                        </div>
                        <p class="mt-5 max-w-sm text-sm leading-relaxed text-white/50">Menghadirkan pengalaman kuliner
                            kelas dunia melalui portofolio brand terbaik di Indonesia.</p>
                        <div class="mt-6 flex gap-2">
                            <a href="#" aria-label="Instagram Trans F&B"
                                class="magnetic grid h-10 w-10 place-items-center rounded-xl border border-white/10 bg-white/5 transition hover:border-violet2-400/60 hover:shadow-glowv"><svg
                                    class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.7">
                                    <rect x="3" y="3" width="18" height="18" rx="5" />
                                    <circle cx="12" cy="12" r="4" />
                                    <circle cx="17.5" cy="6.5" r="1" />
                                </svg></a>
                            <a href="#" aria-label="X Trans F&B"
                                class="magnetic grid h-10 w-10 place-items-center rounded-xl border border-white/10 bg-white/5 transition hover:border-electric-400/60 hover:shadow-glow"><svg
                                    class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M17.5 3h3l-6.6 7.6L21.8 21h-5.9l-4.3-5.7L6.6 21H3.5l7-8-6.8-10h6l3.9 5.2L17.5 3Z" />
                                </svg></a>
                            <a href="#" aria-label="YouTube Trans F&B"
                                class="magnetic grid h-10 w-10 place-items-center rounded-xl border border-white/10 bg-white/5 transition hover:border-electric-400/60 hover:shadow-glow"><svg
                                    class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.7">
                                    <rect x="2.5" y="5" width="19" height="14" rx="4" />
                                    <path d="m10.5 9.5 5 2.5-5 2.5z" />
                                </svg></a>
                            <a href="#" aria-label="LinkedIn Trans F&B"
                                class="magnetic grid h-10 w-10 place-items-center rounded-xl border border-white/10 bg-white/5 transition hover:border-violet2-400/60 hover:shadow-glowv"><svg
                                    class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M4.98 3.5A2.5 2.5 0 1 0 5 8.5a2.5 2.5 0 0 0-.02-5ZM3 9.5h4V21H3V9.5Zm6.5 0h3.8v1.6h.05c.53-.95 1.83-1.95 3.77-1.95 4.03 0 4.78 2.5 4.78 5.75V21h-4v-5.3c0-1.26-.02-2.9-1.8-2.9-1.8 0-2.07 1.38-2.07 2.8V21h-4V9.5Z" />
                                </svg></a>
                        </div>
                    </div>
                    <div>
                        <p class="font-display text-sm font-bold">Brands</p>
                        <ul class="mt-4 space-y-2.5 text-sm text-white/50">
                            <li><a class="transition hover:text-white" href="#brands">Coffee Bean &amp; Tea Leaf</a>
                            </li>
                            <li><a class="transition hover:text-white" href="#brands">Wendy's</a></li>
                            <li><a class="transition hover:text-white" href="#brands">Baskin Robbins</a></li>
                            <li><a class="transition hover:text-white" href="#brands">Warung Wardani</a></li>
                            <li><a class="transition hover:text-white" href="#brands">Gyukatsu</a></li>
                            <li><a class="transition hover:text-white" href="#brands">Tasty Kitchen</a></li>
                        </ul>
                    </div>
                    <div>
                        <p class="font-display text-sm font-bold">Dashboard</p>
                        <ul class="mt-4 space-y-2.5 text-sm text-white/50">
                            <li><a class="transition hover:text-white" href="#performance">Performance</a></li>
                            <li><a class="transition hover:text-white" href="#campaign">Campaign</a></li>
                            <li><a class="transition hover:text-white" href="#promotion">Promotion</a></li>
                            <li><a class="transition hover:text-white" href="#news">News</a></li>
                            <li><a class="transition hover:text-white" href="#gallery">Gallery</a></li>
                        </ul>
                    </div>
                    <div>
                        <p class="font-display text-sm font-bold">Contact</p>
                        <ul class="mt-4 space-y-2.5 text-sm text-white/50">
                            <li>Menara Trans, Jakarta</li>
                            <li>hq@transfnb.co.id</li>
                            <li>+62 21 5555 0000</li>
                            <li>Sen–Jum · 09.00–18.00</li>
                        </ul>
                    </div>
                </div>
                <div
                    class="mt-10 grid gap-3 border-t border-white/10 pt-6 text-xs text-white/40 sm:flex sm:items-center sm:justify-between">
                    <p>© 2026 Trans Food &amp; Beverage Official. All rights reserved.</p>
                    <p class="flex flex-wrap gap-4"><a class="transition hover:text-white" href="#">Privacy</a><a
                            class="transition hover:text-white" href="#">Terms</a><a class="transition hover:text-white"
                            href="#">Security</a></p>
                </div>
            </div>
        </div>
    </footer>

    <button id="toTop"
        class="magnetic fixed bottom-6 right-6 z-50 grid h-12 w-12 translate-y-24 place-items-center rounded-xl border border-white/12 bg-navy-800/80 backdrop-blur-xl opacity-0 shadow-glow transition-all duration-500 hover:border-electric-400/70">↑</button>

    <script>
    (() => {
        'use strict';
        const $ = (s, c = document) => c.querySelector(s),
            $$ = (s, c = document) => [...c.querySelectorAll(s)];
        const reduce = matchMedia('(prefers-reduced-motion: reduce)').matches;

        /* ---------- PARTICLES ---------- */
        const cv = $('#particles'),
            ctx = cv.getContext('2d');
        let W, H, parts = [];
        const resize = () => {
            W = cv.width = innerWidth;
            H = cv.height = innerHeight;
            const n = innerWidth < 640 ? 40 : innerWidth < 1024 ? 70 : 110;
            parts = Array.from({
                length: n
            }, () => ({
                x: Math.random() * W,
                y: Math.random() * H,
                r: Math.random() * 1.7 + .4,
                vx: (Math.random() - .5) * .25,
                vy: (Math.random() - .5) * .25,
                h: Math.random() > .5 ? '84,183,255' : '169,124,255',
                a: Math.random() * .6 + .15
            }));
        };
        resize();
        addEventListener('resize', resize);
        const mouse = {
            x: -999,
            y: -999
        };
        addEventListener('mousemove', e => {
            mouse.x = e.clientX;
            mouse.y = e.clientY;
        });
        (function loop() {
            ctx.clearRect(0, 0, W, H);
            for (const p of parts) {
                p.x += p.vx;
                p.y += p.vy;
                if (p.x < 0 || p.x > W) p.vx *= -1;
                if (p.y < 0 || p.y > H) p.vy *= -1;
                const dx = p.x - mouse.x,
                    dy = p.y - mouse.y,
                    d = Math.hypot(dx, dy);
                const boost = d < 140 ? (1 - d / 140) : 0;
                if (boost) {
                    p.x += dx / d * boost * 1.2;
                    p.y += dy / d * boost * 1.2;
                }
                ctx.beginPath();
                ctx.arc(p.x, p.y, p.r + boost * 1.6, 0, 7);
                ctx.fillStyle = `rgba(${p.h},${p.a+boost*.4})`;
                ctx.fill();
            }
            if (!reduce) requestAnimationFrame(loop);
        })();

        /* ---------- NAVBAR ---------- */
        const nav = $('#nav'),
            prog = $('#progress'),
            toTop = $('#toTop');
        const onScroll = () => {
            const y = scrollY;
            nav.classList.toggle('py-0', y > 20);
            nav.style.transform = y > 20 ? 'scale(.985)' : 'scale(1)';
            const max = document.body.scrollHeight - innerHeight;
            prog.style.width = (max > 0 ? (y / max) * 100 : 0) + '%';
            toTop.classList.toggle('opacity-0', y < 600);
            toTop.classList.toggle('translate-y-24', y < 600);
        };
        addEventListener('scroll', onScroll, {
            passive: true
        });
        onScroll();
        toTop.onclick = () => scrollTo({
            top: 0,
            behavior: 'smooth'
        });

        const mm = $('#mobileMenu');
        $('#burger').onclick = () => mm.classList.toggle('grid-rows-[1fr]');
        $$('.mnav').forEach(a => a.onclick = () => mm.classList.remove('grid-rows-[1fr]'));
        addEventListener('keydown', e => {
            if ((e.metaKey || e.ctrlKey) && e.key.toLowerCase() === 'k') {
                e.preventDefault();
                $('#searchInput')?.focus();
            }
        });

        /* ---------- REVEAL ---------- */
        const io = new IntersectionObserver(es => es.forEach(e => {
            if (e.isIntersecting) {
                e.target.classList.add('in');
                io.unobserve(e.target);
            }
        }), {
            threshold: .12,
            rootMargin: '0px 0px -60px'
        });
        const observeReveals = () => $$('.reveal,.reveal-l,.reveal-r,.reveal-s').forEach(el => io.observe(el));

        /* ---------- COUNT UP ---------- */
        const cio = new IntersectionObserver(es => es.forEach(e => {
            if (!e.isIntersecting) return;
            cio.unobserve(e.target);
            const el = e.target,
                target = +el.dataset.target,
                dec = +(el.dataset.dec || 0),
                div = +(el.dataset.div || 1);
            const dur = 1600,
                t0 = performance.now();
            const tick = t => {
                const p = Math.min((t - t0) / dur, 1),
                    e2 = 1 - Math.pow(1 - p, 3),
                    v = (target * e2) / div;
                el.textContent = v.toLocaleString('id-ID', {
                    minimumFractionDigits: dec,
                    maximumFractionDigits: dec
                });
                if (p < 1) requestAnimationFrame(tick);
            };
            requestAnimationFrame(tick);
        }), {
            threshold: .5
        });
        const observeCounts = () => $$('.countup').forEach(el => cio.observe(el));

        /* ---------- GROW BARS ---------- */
        const gio = new IntersectionObserver(es => es.forEach(e => {
            if (e.isIntersecting) {
                e.target.style.transition = 'width 1.4s cubic-bezier(.2,.7,.2,1)';
                e.target.style.width = e.target.dataset.w;
                gio.unobserve(e.target);
            }
        }), {
            threshold: .4
        });
        const observeBars = () => $$('.growbar').forEach(el => gio.observe(el));

        /* ---------- MAGNETIC + RIPPLE + TILT ---------- */
        const bindFx = () => {
            $$('.magnetic').forEach(el => {
                if (el._mag) return;
                el._mag = 1;
                el.addEventListener('mousemove', e => {
                    const r = el.getBoundingClientRect();
                    el.style.transform =
                        `translate(${(e.clientX-r.left-r.width/2)*.28}px,${(e.clientY-r.top-r.height/2)*.28}px)`;
                });
                el.addEventListener('mouseleave', () => el.style.transform = '');
            });
            $$('.ripple').forEach(el => {
                if (el._rp) return;
                el._rp = 1;
                el.addEventListener('click', e => {
                    const r = el.getBoundingClientRect(),
                        d = Math.max(r.width, r.height);
                    const s = document.createElement('span');
                    s.className = 'rp';
                    s.style.cssText =
                        `width:${d}px;height:${d}px;left:${e.clientX-r.left-d/2}px;top:${e.clientY-r.top-d/2}px`;
                    el.appendChild(s);
                    setTimeout(() => s.remove(), 700);
                });
            });
            $$('.tilt').forEach(el => {
                if (el._tl) return;
                el._tl = 1;
                el.addEventListener('mousemove', e => {
                    if (innerWidth < 1024) return;
                    const r = el.getBoundingClientRect();
                    const rx = ((e.clientY - r.top) / r.height - .5) * -7,
                        ry = ((e.clientX - r.left) / r.width - .5) * 7;
                    el.style.transform =
                        `perspective(900px) rotateX(${rx}deg) rotateY(${ry}deg) translateY(-6px)`;
                    el.style.boxShadow = '0 30px 70px -30px rgba(42,143,255,.55)';
                });
                el.addEventListener('mouseleave', () => {
                    el.style.transform = '';
                    el.style.boxShadow = '';
                });
            });
        };

        /* ---------- MOUSE PARALLAX ---------- */
        addEventListener('mousemove', e => {
            if (innerWidth < 1024 || reduce) return;
            const cx = (e.clientX / innerWidth - .5),
                cy = (e.clientY / innerHeight - .5);
            $$('[data-parallax]').forEach(el => {
                const f = +el.dataset.parallax * 100;
                el.style.transform = `translate3d(${cx*f}px,${cy*f}px,0)`;
            });
            ['#aurora1', '#aurora2', '#aurora3'].forEach((s, i) => {
                const el = $(s);
                if (el) el.style.marginLeft = (cx * (i + 1) * 24) + 'px', el.style.marginTop = (cy *
                    (i + 1) * 20) + 'px';
            });
        });

        /* ---------- CHARTS (canvas, no library) ---------- */
        const dpr = () => Math.min(devicePixelRatio || 1, 2);

        function prep(c, h) {
            const w = c.clientWidth;
            c.width = w * dpr();
            c.height = h * dpr();
            const x = c.getContext('2d');
            x.setTransform(dpr(), 0, 0, dpr(), 0, 0);
            return {
                x,
                w,
                h
            };
        }

        const REV = [280, 320, 300, 370, 420, 460, 430, 510, 560, 540, 610, 680];
        const VIS = [180, 210, 200, 250, 270, 300, 290, 330, 360, 350, 400, 440];
        const MON = ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'];

        function line(canvas, series, pad = 34) {
            if (!canvas) return;
            const {
                x,
                w,
                h
            } = prep(canvas, canvas.dataset.h ? +canvas.dataset.h : canvas.height / (dpr() || 1));
            const H2 = h,
                W2 = w;
            x.clearRect(0, 0, W2, H2);
            const all = series.flatMap(s => s.data),
                mx = Math.max(...all) * 1.12,
                mn = 0;
            const px = i => pad + (W2 - pad * 1.4) * (i / (series[0].data.length - 1));
            const py = v => H2 - pad - (H2 - pad * 1.6) * ((v - mn) / (mx - mn));
            x.strokeStyle = 'rgba(255,255,255,.07)';
            x.lineWidth = 1;
            for (let i = 0; i <= 4; i++) {
                const y = pad * .6 + (H2 - pad * 1.6) * (i / 4);
                x.beginPath();
                x.moveTo(pad, y);
                x.lineTo(W2 - pad * .4, y);
                x.stroke();
            }
            x.fillStyle = 'rgba(255,255,255,.35)';
            x.font = '10px Manrope, sans-serif';
            MON.forEach((m, i) => x.fillText(m, px(i) - 3, H2 - 10));
            series.forEach(s => {
                const g = x.createLinearGradient(0, 0, 0, H2);
                g.addColorStop(0, s.fill1);
                g.addColorStop(1, 'rgba(0,0,0,0)');
                x.beginPath();
                s.data.forEach((v, i) => {
                    const X = px(i),
                        Y = py(v);
                    if (!i) x.moveTo(X, Y);
                    else {
                        const pX = px(i - 1),
                            pY = py(s.data[i - 1]);
                        x.bezierCurveTo((pX + X) / 2, pY, (pX + X) / 2, Y, X, Y);
                    }
                });
                x.strokeStyle = s.color;
                x.lineWidth = 2.4;
                x.shadowColor = s.color;
                x.shadowBlur = 14;
                x.stroke();
                x.shadowBlur = 0;
                x.lineTo(px(s.data.length - 1), H2 - pad);
                x.lineTo(px(0), H2 - pad);
                x.closePath();
                x.fillStyle = g;
                x.fill();
                s.data.forEach((v, i) => {
                    x.beginPath();
                    x.arc(px(i), py(v), 2.6, 0, 7);
                    x.fillStyle = s.color;
                    x.fill();
                });
            });
        }

        function drawMain() {
            const c = $('#mainChart');
            if (!c) return;
            c.style.height = '260px';
            c.dataset.h = 260;
            line(c, [{
                data: REV,
                color: '#54b7ff',
                fill1: 'rgba(84,183,255,.28)'
            }, {
                data: VIS,
                color: '#a97cff',
                fill1: 'rgba(169,124,255,.24)'
            }]);
        }

        function drawBar() {
            const c = $('#barChart');
            if (!c) return;
            c.style.height = '170px';
            const {
                x,
                w,
                h
            } = prep(c, 170);
            x.clearRect(0, 0, w, h);
            const d = [92, 78, 64, 48, 55, 71],
                L = ['CB', 'WD', 'BR', 'WW', 'GK', 'TK'],
                mx = 100,
                bw = (w - 24) / d.length - 12;
            d.forEach((v, i) => {
                const X = 12 + i * ((w - 24) / d.length),
                    BH = (h - 34) * (v / mx),
                    Y = h - 24 - BH;
                const g = x.createLinearGradient(0, Y, 0, h - 24);
                g.addColorStop(0, '#54b7ff');
                g.addColorStop(1, 'rgba(139,92,246,.35)');
                x.fillStyle = g;
                x.beginPath();
                x.roundRect(X, Y, bw, BH, 8);
                x.fill();
                x.fillStyle = 'rgba(255,255,255,.4)';
                x.font = '10px Manrope, sans-serif';
                x.fillText(L[i], X + bw / 2 - 8, h - 8);
            });
        }

        function drawSpark() {
            const c = $('#sparkline');
            if (!c) return;
            c.style.height = '90px';
            const {
                x,
                w,
                h
            } = prep(c, 90);
            x.clearRect(0, 0, w, h);
            const d = [30, 45, 38, 60, 52, 74, 68, 88, 80, 96],
                mx = 110;
            const px = i => (w) * (i / (d.length - 1)),
                py = v => h - 8 - (h - 20) * (v / mx);
            x.beginPath();
            d.forEach((v, i) => {
                const X = px(i),
                    Y = py(v);
                if (!i) x.moveTo(X, Y);
                else {
                    const pX = px(i - 1),
                        pY = py(d[i - 1]);
                    x.bezierCurveTo((pX + X) / 2, pY, (pX + X) / 2, Y, X, Y);
                }
            });
            x.strokeStyle = '#4be6d4';
            x.lineWidth = 2.2;
            x.shadowColor = '#4be6d4';
            x.shadowBlur = 16;
            x.stroke();
            x.shadowBlur = 0;
            x.lineTo(w, h);
            x.lineTo(0, h);
            x.closePath();
            const g = x.createLinearGradient(0, 0, 0, h);
            g.addColorStop(0, 'rgba(75,230,212,.35)');
            g.addColorStop(1, 'rgba(0,0,0,0)');
            x.fillStyle = g;
            x.fill();
        }
        const drawAll = () => {
            drawMain();
            drawBar();
            drawSpark();
        };

        /* ---------- PROMO SLIDER ---------- */
        const promos = [{
                t: 'Nusantara Flavor Fest',
                d: 'Diskon hingga 45% untuk 120 outlet pilihan selama festival rasa nusantara.',
                tag: 'FESTIVAL',
                img: 'https://images.unsplash.com/photo-1555396273-367ea4eb4db5?w=1400&q=80&auto=format&fit=crop',
                c: 'from-electric-500 to-violet2-500'
            },
            {
                t: 'Buy 1 Get 1 Coffee Hour',
                d: 'Setiap hari kerja pukul 15.00–17.00 di seluruh gerai Coffee Bean.',
                tag: 'DAILY',
                img: 'https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=1400&q=80&auto=format&fit=crop',
                c: 'from-amber-400 to-electric-500'
            },
            {
                t: 'Sweet Sunday 31%',
                d: 'Potongan 31% untuk semua pint &amp; quart Baskin Robbins setiap Minggu.',
                tag: 'WEEKEND',
                img: 'https://images.unsplash.com/photo-1563805042-7684c019e1cb?w=1400&q=80&auto=format&fit=crop',
                c: 'from-pink-500 to-violet2-500'
            },
            {
                t: 'Premium Dinner Set',
                d: 'Paket makan malam Gyukatsu untuk dua orang dengan harga spesial.',
                tag: 'PREMIUM',
                img: 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=1400&q=80&auto=format&fit=crop',
                c: 'from-aqua-400 to-electric-500'
            }
        ];
        const slidesEl = $('#slides'),
            dotsEl = $('#dots');
        slidesEl.innerHTML = promos.map(p => `
    <div class="group relative min-w-full overflow-hidden">
      <div class="relative h-[380px] sm:h-[440px] overflow-hidden rounded-[30px]">
        <img src="${p.img}" alt="Promo ${p.t} Trans F&B" loading="lazy" class="absolute inset-0 h-full w-full object-cover transition-transform duration-[1200ms] group-hover:scale-105" />
        <div class="absolute inset-0 bg-gradient-to-tr from-navy-950 via-navy-950/70 to-transparent"></div>
        <div class="absolute inset-0 flex items-end p-6 sm:p-12">
          <div class="glass grad-border max-w-lg rounded-2xl p-6 backdrop-blur-2xl">
            <span class="rounded-full bg-white/10 px-2.5 py-1 text-[10px] tracking-widest text-white/70">${p.tag}</span>
            <h3 class="mt-3 font-display text-2xl sm:text-3xl font-extrabold">${p.t}</h3>
            <p class="mt-2 text-sm text-white/60">${p.d}</p>
            <button class="magnetic ripple mt-5 rounded-xl bg-gradient-to-r ${p.c} px-5 py-2.5 text-sm font-semibold shadow-glow">Explore →</button>
          </div>
        </div>
      </div>
    </div>`).join('');
        dotsEl.innerHTML = promos.map((_, i) =>
            `<button data-i="${i}" class="h-1.5 rounded-full transition-all ${i?'w-4 bg-white/20':'w-8 bg-gradient-to-r from-electric-400 to-violet2-400'}"></button>`
        ).join('');
        let si = 0,
            timer;
        const go = i => {
            si = (i + promos.length) % promos.length;
            slidesEl.style.transform = `translateX(-${si*100}%)`;
            $$('#dots button').forEach((b, k) => b.className =
                `h-1.5 rounded-full transition-all ${k===si?'w-8 bg-gradient-to-r from-electric-400 to-violet2-400':'w-4 bg-white/20'}`
            );
        };
        const auto = () => {
            clearInterval(timer);
            timer = setInterval(() => go(si + 1), 5000);
        };
        $('#nextSlide').onclick = () => {
            go(si + 1);
            auto();
        };
        $('#prevSlide').onclick = () => {
            go(si - 1);
            auto();
        };
        dotsEl.onclick = e => {
            const b = e.target.closest('button');
            if (b) {
                go(+b.dataset.i);
                auto();
            }
        };
        auto();

        /* ---------- NEWS ---------- */
        const news = [{
                t: 'Trans F&B Buka 50 Outlet Baru Sepanjang 2026',
                c: 'Expansion',
                d: '02 Agu 2026',
                img: 'https://images.unsplash.com/photo-1552566626-52f8b828add9?w=900&q=80&auto=format&fit=crop'
            },
            {
                t: 'Kolaborasi Chef Nasional untuk Menu Musiman',
                c: 'Culinary',
                d: '28 Jul 2026',
                img: 'https://images.unsplash.com/photo-1577219491135-ce391730fb2c?w=900&q=80&auto=format&fit=crop'
            },
            {
                t: 'Program Kemasan Ramah Lingkungan Diperluas',
                c: 'Sustainability',
                d: '19 Jul 2026',
                img: 'https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?w=900&q=80&auto=format&fit=crop'
            }
        ];
        $('#newsGrid').innerHTML = news.map((n, i) => `
    <article class="glass grad-border tilt reveal group overflow-hidden rounded-[24px]" style="transition-delay:${i*.08}s">
      <div class="relative h-52 overflow-hidden">
        <img src="${n.img}" alt="${n.t}" loading="lazy" class="h-full w-full object-cover transition-transform duration-[1100ms] group-hover:scale-110" />
        <div class="absolute inset-0 bg-gradient-to-t from-navy-950 via-transparent to-transparent"></div>
        <span class="absolute left-4 top-4 rounded-full bg-navy-950/70 px-3 py-1 text-[10px] tracking-widest text-electric-400 backdrop-blur">${n.c.toUpperCase()}</span>
      </div>
      <div class="p-6">
        <p class="text-xs text-white/40">${n.d}</p>
        <h3 class="mt-2 font-display text-lg font-bold leading-snug">${n.t}</h3>
        <button class="magnetic ripple mt-5 rounded-lg border border-white/12 bg-white/5 px-4 py-2 text-xs font-semibold transition hover:border-electric-400/60">Read More →</button>
      </div>
    </article>`).join('');

        /* ---------- EVENTS ---------- */
        const events = [{
                d: '12 Agu 2026',
                t: 'Trans Culinary Festival',
                s: 'Festival',
                x: 'Jakarta Convention Center · 3 hari, 40 tenant brand.'
            },
            {
                d: '27 Agu 2026',
                t: 'Grand Opening Gyukatsu Surabaya',
                s: 'Opening Store',
                x: 'Outlet ke-58 dengan konsep omakase counter.'
            },
            {
                d: '09 Sep 2026',
                t: 'Baskin Robbins Flavor Launching',
                s: 'Launching',
                x: 'Peluncuran rasa terbatas Pandan Gula Melaka.'
            },
            {
                d: '21 Sep 2026',
                t: 'Wendy\'s Anniversary Promo',
                s: 'Promo',
                x: 'Harga spesial nasional selama satu minggu penuh.'
            }
        ];
        $('#timeline').innerHTML = events.map((e, i) => `
    <div class="reveal-l relative" style="transition-delay:${i*.08}s">
      <span class="absolute -left-6 sm:-left-10 top-6 h-3.5 w-3.5 rounded-full bg-gradient-to-br from-electric-400 to-violet2-400 shadow-glow ring-4 ring-navy-950"></span>
      <div class="glass grad-border rounded-[20px] p-6">
        <div class="grid grid-cols-[minmax(0,1fr)_auto] items-center gap-3">
          <p class="min-w-0 truncate font-display text-lg font-bold">${e.t}</p>
          <span class="shrink-0 rounded-full bg-white/8 px-3 py-1 text-[10px] tracking-widest text-white/60">${e.s.toUpperCase()}</span>
        </div>
        <p class="mt-1 text-xs text-electric-400">${e.d}</p>
        <p class="mt-2 text-sm text-white/50">${e.x}</p>
      </div>
    </div>`).join('');

        /* ---------- GALLERY ---------- */
        const gal = [
            ['https://images.unsplash.com/photo-1554118811-1e0d58224f24?w=800&q=80&auto=format&fit=crop',
                'Interior gerai kopi Trans F&B'
            ],
            ['https://images.unsplash.com/photo-1550547660-d9450f859349?w=800&q=80&auto=format&fit=crop',
                'Burger signature Wendy\'s'
            ],
            ['https://images.unsplash.com/photo-1516559828984-fb3b99548b21?w=800&q=80&auto=format&fit=crop',
                'Scoop es krim Baskin Robbins'
            ],
            ['https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445?w=800&q=80&auto=format&fit=crop',
                'Sarapan di outlet Tasty Kitchen'
            ],
            ['https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=800&q=80&auto=format&fit=crop',
                'Suasana ruang makan premium'
            ],
            ['https://images.unsplash.com/photo-1600891964599-f61ba0e24092?w=800&q=80&auto=format&fit=crop',
                'Hidangan daging premium Gyukatsu'
            ],
            ['https://images.unsplash.com/photo-1466637574441-749b8f19452f?w=800&q=80&auto=format&fit=crop',
                'Bahan segar pilihan dapur'
            ],
            ['https://images.unsplash.com/photo-1559339352-11d035aa65de?w=800&q=80&auto=format&fit=crop',
                'Barista menyajikan kopi'
            ]
        ];
        $('#galleryGrid').innerHTML = gal.map((g, i) => `
    <figure class="reveal-s group relative overflow-hidden rounded-[20px] border border-white/10 ${i===0||i===5?'lg:col-span-2 lg:row-span-1':''}" style="transition-delay:${i*.05}s">
      <img src="${g[0]}" alt="${g[1]}" loading="lazy" class="h-44 sm:h-56 w-full object-cover transition-transform duration-[1100ms] group-hover:scale-115" />
      <figcaption class="absolute inset-0 flex items-end bg-gradient-to-t from-navy-950/95 via-navy-950/20 to-transparent p-4 opacity-0 backdrop-blur-[2px] transition duration-500 group-hover:opacity-100">
        <span class="text-xs text-white/85">${g[1]}</span>
      </figcaption>
    </figure>`).join('');

        /* ---------- TESTIMONIALS ---------- */
        const testi = [{
                n: 'Ayu Kartika',
                r: 'Food Blogger, Jakarta',
                s: 5,
                q: 'Konsistensi rasa di setiap outlet Trans F&B luar biasa. Pelayanannya juga selalu hangat.',
                a: 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=200&q=70&auto=format&fit=crop'
            },
            {
                n: 'Rangga Mahendra',
                r: 'Corporate Client',
                s: 5,
                q: 'Kami rutin memesan katering lintas brand. Prosesnya rapi, tepat waktu, dan kualitasnya premium.',
                a: 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=200&q=70&auto=format&fit=crop'
            },
            {
                n: 'Sinta Prameswari',
                r: 'Loyal Member',
                s: 4,
                q: 'Program loyalty-nya paling masuk akal. Poin bisa dipakai di semua brand tanpa ribet.',
                a: 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=200&q=70&auto=format&fit=crop'
            },
            {
                n: 'Damar Wicaksono',
                r: 'Culinary Reviewer',
                s: 5,
                q: 'Gyukatsu jadi favorit saya. Standar penyajiannya benar-benar setara restoran Jepang.',
                a: 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=200&q=70&auto=format&fit=crop'
            }
        ];
        const tt = $('#testiTrack'),
            td = $('#testiDots');
        const perView = () => innerWidth >= 1024 ? 3 : innerWidth >= 640 ? 2 : 1;
        const renderTesti = () => {
            const pv = perView();
            tt.innerHTML = testi.map(t => `
      <div class="px-2 sm:px-3" style="min-width:${100/pv}%">
        <div class="glass grad-border tilt h-full rounded-[24px] p-7">
          <div class="flex items-center gap-3">
            <img src="${t.a}" alt="Foto ${t.n}" loading="lazy" class="h-12 w-12 shrink-0 rounded-xl object-cover" />
            <div class="min-w-0"><p class="truncate font-display font-bold">${t.n}</p><p class="truncate text-xs text-white/45">${t.r}</p></div>
          </div>
          <p class="mt-5 text-sm leading-relaxed text-white/65">"${t.q}"</p>
          <p class="mt-5 text-amber-300">${'★'.repeat(t.s)}<span class="text-white/20">${'★'.repeat(5-t.s)}</span></p>
        </div>
      </div>`).join('');
            const pages = Math.max(1, testi.length - pv + 1);
            td.innerHTML = Array.from({
                    length: pages
                }, (_, i) =>
                `<button data-i="${i}" class="h-1.5 rounded-full transition-all ${i?'w-4 bg-white/20':'w-8 bg-gradient-to-r from-electric-400 to-violet2-400'}"></button>`
            ).join('');
            ti = 0;
            moveTesti();
            bindFx();
            observeReveals();
        };
        let ti = 0,
            ttimer;
        const moveTesti = () => {
            const pv = perView(),
                pages = Math.max(1, testi.length - pv + 1);
            ti = ((ti % pages) + pages) % pages;
            tt.style.transform = `translateX(-${ti*(100/pv)}%)`;
            $$('#testiDots button').forEach((b, k) => b.className =
                `h-1.5 rounded-full transition-all ${k===ti?'w-8 bg-gradient-to-r from-electric-400 to-violet2-400':'w-4 bg-white/20'}`
            );
        };
        const autoTesti = () => {
            clearInterval(ttimer);
            ttimer = setInterval(() => {
                ti++;
                moveTesti();
            }, 4200);
        };
        td.onclick = e => {
            const b = e.target.closest('button');
            if (b) {
                ti = +b.dataset.i;
                moveTesti();
                autoTesti();
            }
        };
        renderTesti();
        autoTesti();

        /* ---------- SMOOTH ANCHORS ---------- */
        $$('a[href^="#"]').forEach(a => a.addEventListener('click', e => {
            const id = a.getAttribute('href');
            if (id.length < 2) return;
            const el = $(id);
            if (!el) return;
            e.preventDefault();
            scrollTo({
                top: el.getBoundingClientRect().top + scrollY - 90,
                behavior: 'smooth'
            });
        }));

        /* ---------- BELL ---------- */
        $('#bellBtn').onclick = () => {
            const n = document.createElement('div');
            n.className =
                'glass-strong grad-border fixed right-4 top-24 z-[70] w-72 rounded-2xl p-4 text-sm shadow-soft';
            n.innerHTML =
                '<p class="font-display font-bold">3 Notifikasi Baru</p><ul class="mt-3 space-y-2 text-xs text-white/60"><li>• Revenue harian melampaui target 18%</li><li>• Campaign "Family Weekend" siap tayang</li><li>• 2 outlet baru menunggu verifikasi</li></ul>';
            document.body.appendChild(n);
            setTimeout(() => n.remove(), 4200);
        };

        /* ---------- SEARCH FILTER (brand sections) ---------- */
        $('#searchInput')?.addEventListener('input', e => {
            const q = e.target.value.toLowerCase().trim();
            $$('#brands .brand-card').forEach(c => {
                c.style.display = !q || c.textContent.toLowerCase().includes(q) ? '' : 'none';
            });
        });

        /* ---------- INIT ---------- */
        bindFx();
        observeReveals();
        observeCounts();
        observeBars();
        drawAll();
        let rt;
        addEventListener('resize', () => {
            clearTimeout(rt);
            rt = setTimeout(() => {
                drawAll();
                renderTesti();
                autoTesti();
            }, 220);
        });
    })();
    </script>
</body>

</html>