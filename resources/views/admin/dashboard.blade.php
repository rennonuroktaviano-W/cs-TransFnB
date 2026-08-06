<!DOCTYPE html>
<html lang="id" class="dark scroll-smooth h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Premium - Trans Food & Beverage Official</title>
    <meta name="description"
        content="Dashboard resmi manajemen brand F&B PT Trans Food & Beverage. Platform kelas internasional untuk pemantauan performa brand, outlet, dan analitik secara real-time.">
    <meta name="theme-color" content="#020617">

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&family=Poppins:wght@400;500;600;700;800;900&family=Space+Grotesk:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- FONT AWESOME ICON CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- TAILWIND CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- TAILWIND CONFIGURATION -->
    <script>
    tailwind.config = {
        darkMode: 'class',
        theme: {
            extend: {
                colors: {
                    'trans-navy': '#020617',
                    'trans-navy-dark': '#010409',
                    'acc-blue': '#2563EB',
                    'acc-purple': '#9333EA',
                    'acc-green': '#22C55E',
                    'acc-yellow': '#FBBF24',
                    'acc-red': '#EF4444',
                    'acc-blue-glow': '#3B82F6',
                    'acc-green-glow': '#4ADE80',
                },
                fontFamily: {
                    sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    display: ['"Space Grotesk"', 'sans-serif'],
                    heading: ['"Poppins"', 'sans-serif'],
                },
                animation: {
                    'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    'glow-pulse-blue': 'glowPulseBlue 3s ease-in-out infinite alternate',
                    'shine-sweep': 'shineSweep 3s linear infinite',
                    'spin-slow': 'spin 15s linear infinite',
                    'aurora': 'auroraMove 12s ease-in-out infinite alternate',
                    'fade-in': 'fadeIn 0.8s ease-out forwards',
                    'float': 'floatAnim 6s ease-in-out infinite',
                },
                keyframes: {
                    glowPulseBlue: {
                        '0%': {
                            filter: 'drop-shadow(0 0 10px rgba(59, 130, 246, 0.3))'
                        },
                        '100%': {
                            filter: 'drop-shadow(0 0 25px rgba(59, 130, 246, 0.7))'
                        },
                    },
                    shineSweep: {
                        '0%': {
                            transform: 'translateX(-100%)'
                        },
                        '100%': {
                            transform: 'translateX(250%)'
                        },
                    },
                    auroraMove: {
                        '0%': {
                            transform: 'translate(0%, 0%) scale(1)'
                        },
                        '50%': {
                            transform: 'translate(5%, 8%) scale(1.1)'
                        },
                        '100%': {
                            transform: 'translate(-3%, 3%) scale(0.98)'
                        }
                    },
                    fadeIn: {
                        '0%': {
                            opacity: 0,
                            transform: 'translateY(15px)'
                        },
                        '100%': {
                            opacity: 1,
                            transform: 'translateY(0)'
                        },
                    },
                    floatAnim: {
                        '0%, 100%': {
                            transform: 'translateY(0px)'
                        },
                        '50%': {
                            transform: 'translateY(-12px)'
                        },
                    }
                }
            }
        }
    }
    </script>

    <!-- CUSTOM CSS -->
    <style>
    ::-webkit-scrollbar {
        width: 8px;
    }

    ::-webkit-scrollbar-track {
        background: #010409;
    }

    ::-webkit-scrollbar-thumb {
        background: rgba(37, 99, 235, 0.4);
        border-radius: 999px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: rgba(37, 99, 235, 0.8);
    }

    .glass-panel {
        background: rgba(3, 7, 18, 0.75);
        backdrop-filter: blur(28px);
        -webkit-backdrop-filter: blur(28px);
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 30px 60px rgba(0, 0, 0, 0.7), inset 0 1px 1px rgba(255, 255, 255, 0.1);
    }

    .glass-card {
        background: rgba(255, 255, 255, 0.03);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.06);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
        transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .glass-card:hover {
        border-color: rgba(37, 99, 235, 0.4);
        background: rgba(255, 255, 255, 0.06);
        box-shadow: 0 20px 40px rgba(37, 99, 235, 0.15);
        transform: translateY(-4px);
    }

    .glass-button {
        position: relative;
        overflow: hidden;
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.12);
        transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .glass-button:hover {
        background: rgba(255, 255, 255, 0.1);
        border-color: rgba(255, 255, 255, 0.25);
    }

    .glass-button-primary {
        position: relative;
        overflow: hidden;
        background: linear-gradient(135deg, #2563EB 0%, #9333EA 100%);
        border: 1px solid rgba(255, 255, 255, 0.2);
        box-shadow: 0 10px 25px rgba(147, 51, 234, 0.3), inset 0 1px 0 rgba(255, 255, 255, 0.2);
        transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .glass-button-primary:hover {
        box-shadow: 0 15px 35px rgba(147, 51, 234, 0.5), 0 0 20px rgba(59, 130, 246, 0.4);
        transform: translateY(-2px) scale(1.01);
    }

    .input-field {
        background: rgba(1, 4, 9, 0.7);
        border: 1px solid rgba(255, 255, 255, 0.12);
        color: white;
        transition: all 0.3s;
    }

    .input-field:focus {
        border-color: #2563EB;
        box-shadow: 0 0 15px rgba(37, 99, 235, 0.2);
        outline: none;
    }

    .ripple {
        position: absolute;
        border-radius: 50%;
        background: rgba(59, 130, 246, 0.4);
        transform: scale(0);
        animation: ripple-animation 0.6s linear;
        pointer-events: none;
    }

    @keyframes ripple-animation {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }

    .bg-noise {
        background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.03'/%3E%3C/svg%3E");
    }

    .animated-border-box {
        position: relative;
        border-radius: 2rem;
        overflow: hidden;
    }

    .animated-border-box::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: conic-gradient(transparent, transparent, transparent, #2563EB, #9333EA, #22C55E);
        animation: spin 6s linear infinite;
        z-index: 0;
    }

    .animated-border-content {
        position: relative;
        z-index: 1;
        margin: 2px;
        border-radius: calc(2rem - 2px);
        background: rgba(2, 6, 23, 0.9);
        backdrop-filter: blur(24px);
    }

    .reveal-element {
        opacity: 0;
        transform: translateY(30px) scale(0.96);
        filter: blur(8px);
        transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .reveal-element.active {
        opacity: 1;
        transform: translateY(0) scale(1);
        filter: blur(0px);
    }
    </style>
</head>

<body
    class="bg-trans-navy text-white font-sans antialiased selection:bg-acc-blue selection:text-white overflow-x-hidden h-full relative">

    <!-- BACKGROUND EFFECTS -->
    <div class="fixed inset-0 z-0 overflow-hidden pointer-events-none">
        <canvas id="particle-canvas" class="absolute inset-0 w-full h-full opacity-40"></canvas>
        <div
            class="absolute -top-20 -left-20 w-[650px] h-[650px] bg-acc-blue opacity-15 blur-[140px] rounded-full animate-aurora">
        </div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[550px] h-[550px] bg-acc-purple opacity-10 blur-[120px] rounded-full animate-aurora"
            style="animation-delay: -4s;"></div>
        <div class="absolute top-[30%] left-[40%] w-[350px] h-[350px] bg-acc-green opacity-5 blur-[100px] rounded-full animate-aurora"
            style="animation-delay: -8s;"></div>
        <div
            class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:5rem_5rem]">
        </div>
        <div class="absolute inset-0 bg-noise opacity-40"></div>
    </div>

    <!-- NAVBAR -->
    <header
        class="fixed top-0 left-0 right-0 z-[1000] glass-panel border-b border-white/10 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-8 h-20 flex items-center justify-between">
            <!-- Logo -->
            <a href="#" class="flex items-center space-x-3 group">
                <div
                    class="w-10 h-10 bg-acc-blue rounded-xl flex items-center justify-center font-bold text-xl tracking-tighter text-white shadow-[0_0_20px_rgba(59,130,246,0.6)] group-hover:scale-105 transition-transform">
                    T
                </div>
                <div class="leading-tight">
                    <span class="font-display font-black text-lg sm:text-xl tracking-tighter text-white">TRANS <span
                            class="text-acc-blue">F<span class="text-white">&</span>B</span></span>
                    <span class="block text-[9px] tracking-[0.3em] font-semibold text-acc-purple uppercase">OFFICIAL
                        DASHBOARD</span>
                </div>
            </a>

            <!-- Desktop Menu -->
            <nav
                class="hidden lg:flex items-center space-x-1 bg-white/5 border border-white/10 px-3 py-1.5 rounded-full backdrop-blur-xl">
                <a href="#dashboard"
                    class="px-4 py-2 rounded-full text-xs font-semibold text-white bg-acc-blue/20 border border-acc-blue/40 transition-all shadow-[0_0_15px_rgba(37,99,235,0.3)]">Dashboard</a>
                <a href="#brands"
                    class="px-4 py-2 rounded-full text-xs font-medium text-slate-300 hover:text-white hover:bg-white/5 transition-all">Brands</a>
                <a href="#campaign"
                    class="px-4 py-2 rounded-full text-xs font-medium text-slate-300 hover:text-white hover:bg-white/5 transition-all">Campaign</a>
                <a href="#performance"
                    class="px-4 py-2 rounded-full text-xs font-medium text-slate-300 hover:text-white hover:bg-white/5 transition-all">Performance</a>
                <a href="#news"
                    class="px-4 py-2 rounded-full text-xs font-medium text-slate-300 hover:text-white hover:bg-white/5 transition-all">News</a>
                <a href="#gallery"
                    class="px-4 py-2 rounded-full text-xs font-medium text-slate-300 hover:text-white hover:bg-white/5 transition-all">Gallery</a>
                <a href="#promotion"
                    class="px-4 py-2 rounded-full text-xs font-medium text-slate-300 hover:text-white hover:bg-white/5 transition-all">Promotion</a>
            </nav>

            <!-- Right Actions -->
            <div class="flex items-center space-x-3">
                <button id="search-btn"
                    class="w-10 h-10 rounded-xl glass-button flex items-center justify-center text-slate-300 hover:text-white transition-colors"
                    title="Pencarian">
                    <i class="fa-solid fa-magnifying-glass text-sm"></i>
                </button>
                <div class="relative">
                    <button id="notif-btn"
                        class="w-10 h-10 rounded-xl glass-button flex items-center justify-center text-slate-300 hover:text-white transition-colors relative"
                        title="Notifikasi">
                        <i class="fa-regular fa-bell text-sm"></i>
                        <span class="absolute top-2 right-2 w-2 h-2 bg-acc-blue rounded-full animate-ping"></span>
                        <span class="absolute top-2 right-2 w-2 h-2 bg-acc-blue rounded-full"></span>
                    </button>
                </div>
                <div class="hidden sm:flex items-center space-x-3 pl-2 border-l border-white/10">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-acc-blue to-acc-purple p-0.5 shadow-lg">
                        <div
                            class="w-full h-full bg-trans-navy-dark rounded-[10px] flex items-center justify-center font-bold text-xs text-white">
                            TF
                        </div>
                    </div>
                    <div class="text-left">
                        <span class="block font-heading font-bold text-xs text-white">Admin Trans F&B</span>
                        <span class="block text-[10px] text-acc-green font-medium flex items-center gap-1"><span
                                class="w-1.5 h-1.5 rounded-full bg-acc-green animate-pulse"></span> Online</span>
                    </div>
                </div>
                <button id="mobile-menu-toggle"
                    class="lg:hidden w-10 h-10 rounded-xl glass-button flex items-center justify-center text-slate-300 hover:text-white">
                    <i class="fa-solid fa-bars text-lg"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div id="mobile-menu"
            class="lg:hidden hidden px-6 py-4 bg-trans-navy-dark/95 border-t border-white/10 backdrop-blur-2xl">
            <div class="flex flex-col space-y-2">
                <a href="#dashboard"
                    class="px-4 py-2.5 rounded-xl text-xs font-semibold bg-acc-blue/20 text-white">Dashboard</a>
                <a href="#brands" class="px-4 py-2.5 rounded-xl text-xs text-slate-300 hover:bg-white/5">Brands
                    Showcase</a>
                <a href="#campaign" class="px-4 py-2.5 rounded-xl text-xs text-slate-300 hover:bg-white/5">Campaign &
                    Event</a>
                <a href="#performance"
                    class="px-4 py-2.5 rounded-xl text-xs text-slate-300 hover:bg-white/5">Performance Analytics</a>
                <a href="#news" class="px-4 py-2.5 rounded-xl text-xs text-slate-300 hover:bg-white/5">News &
                    Updates</a>
                <a href="#gallery" class="px-4 py-2.5 rounded-xl text-xs text-slate-300 hover:bg-white/5">Gallery</a>
                <a href="#promotion"
                    class="px-4 py-2.5 rounded-xl text-xs text-slate-300 hover:bg-white/5">Promotions</a>
            </div>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <main id="dashboard" class="relative z-10 pt-32 pb-24 px-4 sm:px-8 max-w-7xl mx-auto space-y-20">

        <!-- HERO SECTION -->
        <section
            class="reveal-element text-center sm:text-left flex flex-col sm:flex-row items-center justify-between gap-8 glass-panel p-8 sm:p-12 rounded-[2.5rem] relative overflow-hidden">
            <div class="absolute -right-20 -top-20 w-80 h-80 bg-acc-blue/20 rounded-full blur-3xl pointer-events-none">
            </div>
            <div
                class="absolute -left-20 -bottom-20 w-80 h-80 bg-acc-purple/15 rounded-full blur-3xl pointer-events-none">
            </div>

            <div class="space-y-4 relative z-10 max-w-2xl">
                <div
                    class="inline-flex items-center space-x-2 px-3.5 py-1.5 rounded-full bg-acc-blue/10 border border-acc-blue/30 text-acc-blue text-xs font-semibold">
                    <i class="fa-solid fa-shield-halved"></i>
                    <span>Enterprise Executive Suite v4.2</span>
                </div>
                <h1 class="text-3xl sm:text-5xl font-black tracking-tight text-white font-heading">
                    Welcome Back,<br>
                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-acc-blue via-acc-blue-glow to-acc-purple">Trans
                        Food & Beverage Official</span>
                </h1>
                <p class="text-sm sm:text-base text-slate-400 font-light leading-relaxed">
                    Manage all Trans F&B brands in one premium dashboard. Real-time insights, multi-brand supervision,
                    and national performance optimization.
                </p>
                <div class="pt-2 flex flex-wrap gap-3 justify-center sm:justify-start">
                    <a href="#brands"
                        class="glass-button-primary px-6 py-3 rounded-xl text-xs font-bold uppercase tracking-wider text-white flex items-center space-x-2">
                        <span>Explore Brands</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="#performance"
                        class="glass-button px-6 py-3 rounded-xl text-xs font-bold uppercase tracking-wider text-white flex items-center space-x-2">
                        <i class="fa-solid fa-chart-line text-acc-blue"></i>
                        <span>View Analytics</span>
                    </a>
                </div>
            </div>

            <!-- Quick Status Box -->
            <div class="relative z-10 w-full sm:w-auto">
                <div class="glass-card p-6 rounded-3xl space-y-4 min-w-[260px] border border-white/10 shadow-2xl">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400">System Status</span>
                        <span
                            class="px-2.5 py-1 rounded-full bg-acc-green/15 text-acc-green text-[10px] font-bold">Operational</span>
                    </div>
                    <div class="space-y-2">
                        <div class="flex justify-between text-xs">
                            <span class="text-slate-400">Active Outlets</span>
                            <span class="font-bold text-white">450+ Stores</span>
                        </div>
                        <div class="flex justify-between text-xs">
                            <span class="text-slate-400">Network Uptime</span>
                            <span class="font-bold text-acc-green">99.98%</span>
                        </div>
                        <div class="flex justify-between text-xs">
                            <span class="text-slate-400">Sync Frequency</span>
                            <span class="font-bold text-acc-blue">Real-Time</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- OVERVIEW CARDS (4 PREMIUM CARDS) -->
        <section class="reveal-element grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Card 1 -->
            <div class="glass-card p-6 rounded-3xl relative overflow-hidden group">
                <div
                    class="absolute -right-10 -bottom-10 w-32 h-32 bg-acc-blue/15 rounded-full blur-2xl group-hover:scale-150 transition-transform">
                </div>
                <div class="flex items-center justify-between mb-4">
                    <div
                        class="w-12 h-12 rounded-2xl bg-acc-blue/15 border border-acc-blue/30 text-acc-blue flex items-center justify-center text-lg">
                        <i class="fa-solid fa-utensils"></i>
                    </div>
                    <span class="text-[10px] font-bold px-2.5 py-1 rounded-full bg-acc-green/15 text-acc-green">+12.5%
                        YoY</span>
                </div>
                <h3 class="text-slate-400 text-xs font-semibold uppercase tracking-wider mb-1">Total Brand</h3>
                <div class="text-3xl font-black text-white tracking-tighter mb-1 font-display">6 <span
                        class="text-xs font-normal text-slate-400">Premium Brands</span></div>
                <p class="text-[11px] text-slate-500">The Coffee Bean, Wendy's, Baskin-Robbins, dll.</p>
            </div>

            <!-- Card 2 -->
            <div class="glass-card p-6 rounded-3xl relative overflow-hidden group">
                <div
                    class="absolute -right-10 -bottom-10 w-32 h-32 bg-acc-purple/15 rounded-full blur-2xl group-hover:scale-150 transition-transform">
                </div>
                <div class="flex items-center justify-between mb-4">
                    <div
                        class="w-12 h-12 rounded-2xl bg-acc-purple/15 border border-acc-purple/30 text-acc-purple flex items-center justify-center text-lg">
                        <i class="fa-solid fa-store"></i>
                    </div>
                    <span class="text-[10px] font-bold px-2.5 py-1 rounded-full bg-acc-green/15 text-acc-green">+8
                        New</span>
                </div>
                <h3 class="text-slate-400 text-xs font-semibold uppercase tracking-wider mb-1">Total Outlet</h3>
                <div class="text-3xl font-black text-white tracking-tighter mb-1 font-display" id="counter-outlets">458
                </div>
                <p class="text-[11px] text-slate-500">Tersebar di seluruh kota besar di Indonesia.</p>
            </div>

            <!-- Card 3 -->
            <div class="glass-card p-6 rounded-3xl relative overflow-hidden group">
                <div
                    class="absolute -right-10 -bottom-10 w-32 h-32 bg-acc-green/15 rounded-full blur-2xl group-hover:scale-150 transition-transform">
                </div>
                <div class="flex items-center justify-between mb-4">
                    <div
                        class="w-12 h-12 rounded-2xl bg-acc-green/15 border border-acc-green/30 text-acc-green flex items-center justify-center text-lg">
                        <i class="fa-solid fa-wallet"></i>
                    </div>
                    <span
                        class="text-[10px] font-bold px-2.5 py-1 rounded-full bg-acc-green/15 text-acc-green">+18.4%</span>
                </div>
                <h3 class="text-slate-400 text-xs font-semibold uppercase tracking-wider mb-1">Today's Revenue</h3>
                <div class="text-3xl font-black text-white tracking-tighter mb-1 font-display">Rp 4.2B</div>
                <p class="text-[11px] text-slate-500">Akumulasi seluruh transaksi nasional hari ini.</p>
            </div>

            <!-- Card 4 -->
            <div class="glass-card p-6 rounded-3xl relative overflow-hidden group">
                <div
                    class="absolute -right-10 -bottom-10 w-32 h-32 bg-acc-yellow/15 rounded-full blur-2xl group-hover:scale-150 transition-transform">
                </div>
                <div class="flex items-center justify-between mb-4">
                    <div
                        class="w-12 h-12 rounded-2xl bg-acc-yellow/15 border border-acc-yellow/30 text-acc-yellow flex items-center justify-center text-lg">
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <span
                        class="text-[10px] font-bold px-2.5 py-1 rounded-full bg-acc-green/15 text-acc-green">Excellent</span>
                </div>
                <h3 class="text-slate-400 text-xs font-semibold uppercase tracking-wider mb-1">Customer Satisfaction
                </h3>
                <div class="text-3xl font-black text-white tracking-tighter mb-1 font-display">4.92 <span
                        class="text-xs font-normal text-slate-400">/ 5.0</span></div>
                <p class="text-[11px] text-slate-500">Berdasarkan 45,000+ ulasan terverifikasi.</p>
            </div>
        </section>

        <!-- BRANDS SECTION (DIFFERENT DESIGN FOR EACH BRAND) -->
        <section id="brands" class="space-y-12">
            <div class="text-center max-w-2xl mx-auto space-y-3 reveal-element">
                <span class="text-xs font-bold uppercase tracking-[0.3em] text-acc-blue">Jaringan Kuliner
                    Nasional</span>
                <h2 class="text-3xl sm:text-4xl font-black font-heading text-white">Our Flagship Brands</h2>
                <p class="text-sm text-slate-400 font-light">Setiap brand dirancang dengan identitas dan pengalaman
                    visual unik kelas dunia.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                <!-- 1. The Coffee Bean & Tea Leaf -->
                <div
                    class="reveal-element glass-card p-8 sm:p-10 rounded-[2.5rem] relative overflow-hidden group border border-amber-500/20">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-amber-950/40 via-trans-navy to-trans-navy-dark z-0">
                    </div>
                    <div
                        class="absolute -right-20 -bottom-20 w-64 h-64 bg-amber-600/10 rounded-full blur-3xl pointer-events-none">
                    </div>

                    <div class="relative z-10 space-y-6">
                        <div class="flex items-center justify-between">
                            <span
                                class="px-3 py-1 rounded-full bg-amber-500/20 border border-amber-500/40 text-amber-400 text-[11px] font-bold uppercase tracking-widest">Coffee
                                & Beverage</span>
                            <span class="text-xs font-mono text-amber-300"><i
                                    class="fa-solid fa-star text-amber-400"></i> 4.9 (12.4k ulasan)</span>
                        </div>
                        <div>
                            <h3 class="text-2xl sm:text-3xl font-black font-heading text-white mb-2">The Coffee Bean &
                                Tea Leaf</h3>
                            <p class="text-xs sm:text-sm text-slate-300 font-light leading-relaxed">Nikmati racikan biji
                                kopi pilihan kualitas dunia dan daun teh premium yang disajikan dengan standar kafe
                                internasional.</p>
                        </div>
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 pt-2">
                            <div class="p-3 rounded-2xl bg-white/5 border border-white/10">
                                <span class="block text-[10px] text-slate-400 uppercase">Today's Sales</span>
                                <span class="font-bold text-sm text-white">Rp 1.1B</span>
                            </div>
                            <div class="p-3 rounded-2xl bg-white/5 border border-white/10">
                                <span class="block text-[10px] text-slate-400 uppercase">Visitors</span>
                                <span class="font-bold text-sm text-amber-400">32,450</span>
                            </div>
                            <div class="p-3 rounded-2xl bg-white/5 border border-white/10 col-span-2 sm:col-span-1">
                                <span class="block text-[10px] text-slate-400 uppercase">Promotion</span>
                                <span class="font-bold text-sm text-white">Diskon 30% CBD</span>
                            </div>
                        </div>
                        <div class="pt-4 flex items-center justify-between">
                            <button
                                onclick="openBrandModal('The Coffee Bean & Tea Leaf', 'Nikmati kopi artisan terbaik dengan suasana mewah dan eksklusif.')"
                                class="px-6 py-3 rounded-xl bg-amber-600 hover:bg-amber-500 text-white font-heading font-semibold text-xs tracking-wider uppercase transition-all shadow-[0_0_20px_rgba(217,119,6,0.4)] flex items-center space-x-2">
                                <span>Explore Brand</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </button>
                            <span class="text-xs text-slate-400 font-mono">142 Outlets Active</span>
                        </div>
                    </div>
                </div>

                <!-- 2. Wendy's -->
                <div
                    class="reveal-element glass-card p-8 sm:p-10 rounded-[2.5rem] relative overflow-hidden group border border-red-500/20">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-red-950/40 via-trans-navy to-trans-navy-dark z-0">
                    </div>
                    <div
                        class="absolute -right-20 -bottom-20 w-64 h-64 bg-red-600/10 rounded-full blur-3xl pointer-events-none">
                    </div>

                    <div class="relative z-10 space-y-6">
                        <div class="flex items-center justify-between">
                            <span
                                class="px-3 py-1 rounded-full bg-red-500/20 border border-red-500/40 text-red-400 text-[11px] font-bold uppercase tracking-widest">Fast
                                Casual Dining</span>
                            <span class="text-xs font-mono text-red-300"><i
                                    class="fa-solid fa-star text-yellow-400"></i> 4.8 (18.2k ulasan)</span>
                        </div>
                        <div>
                            <h3 class="text-2xl sm:text-3xl font-heading font-black text-white mb-2">Wendy's Indonesia
                            </h3>
                            <p class="text-xs sm:text-sm text-slate-300 font-light leading-relaxed">Burger persegi
                                ikonik dengan daging sapi segar pilihan (never frozen) serta Baked Potato legendaris.
                            </p>
                        </div>
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 pt-2">
                            <div class="p-3 rounded-2xl bg-white/5 border border-white/10">
                                <span class="block text-[10px] text-slate-400 uppercase">Today's Sales</span>
                                <span class="font-bold text-sm text-white">Rp 1.4B</span>
                            </div>
                            <div class="p-3 rounded-2xl bg-white/5 border border-white/10">
                                <span class="block text-[10px] text-slate-400 uppercase">Visitors</span>
                                <span class="font-bold text-sm text-red-400">48,200</span>
                            </div>
                            <div class="p-3 rounded-2xl bg-white/5 border border-white/10 col-span-2 sm:col-span-1">
                                <span class="block text-[10px] text-slate-400 uppercase">Best Seller</span>
                                <span class="font-bold text-sm text-white">Baconator Combo</span>
                            </div>
                        </div>
                        <div class="pt-4 flex items-center justify-between">
                            <button
                                onclick="openBrandModal('Wendy\'s Indonesia', 'Nikmati kelezatan burger daging segar kualitas premium.')"
                                class="px-6 py-3 rounded-xl bg-red-600 hover:bg-red-500 text-white font-heading font-semibold text-xs tracking-wider uppercase transition-all shadow-[0_0_20px_rgba(239,68,68,0.4)] flex items-center space-x-2">
                                <span>Explore Brand</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </button>
                            <span class="text-xs text-slate-400 font-mono">115 Outlets Active</span>
                        </div>
                    </div>
                </div>

                <!-- 3. Baskin-Robbins -->
                <div
                    class="reveal-element glass-card p-8 sm:p-10 rounded-[2.5rem] relative overflow-hidden group border border-pink-500/20">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-pink-950/40 via-trans-navy to-trans-navy-dark z-0">
                    </div>
                    <div
                        class="absolute -right-20 -bottom-20 w-64 h-64 bg-pink-600/10 rounded-full blur-3xl pointer-events-none">
                    </div>

                    <div class="relative z-10 space-y-6">
                        <div class="flex items-center justify-between">
                            <span
                                class="px-3 py-1 rounded-full bg-pink-500/20 border border-pink-500/40 text-pink-400 text-[11px] font-bold uppercase tracking-widest">Premium
                                Ice Cream</span>
                            <span class="text-xs font-mono text-pink-300"><i
                                    class="fa-solid fa-star text-yellow-400"></i> 4.9 (9.8k ulasan)</span>
                        </div>
                        <div>
                            <h3 class="text-2xl sm:text-3xl font-heading font-black text-white mb-2">Baskin-Robbins</h3>
                            <p class="text-xs sm:text-sm text-slate-300 font-light leading-relaxed">31 pilihan rasa es
                                krim premium untuk setiap hari dalam sebulan, membawa kebahagiaan di setiap scoop.</p>
                        </div>
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 pt-2">
                            <div class="p-3 rounded-2xl bg-white/5 border border-white/10">
                                <span class="block text-[10px] text-slate-400 uppercase">Today's Sales</span>
                                <span class="font-bold text-sm text-white">Rp 750M</span>
                            </div>
                            <div class="p-3 rounded-2xl bg-white/5 border border-white/10">
                                <span class="block text-[10px] text-slate-400 uppercase">Visitors</span>
                                <span class="font-bold text-sm text-pink-400">22,100</span>
                            </div>
                            <div class="p-3 rounded-2xl bg-white/5 border border-white/10 col-span-2 sm:col-span-1">
                                <span class="block text-[10px] text-slate-400 uppercase">Promo</span>
                                <span class="font-bold text-sm text-white">Value Scoop Deal</span>
                            </div>
                        </div>
                        <div class="pt-4 flex items-center justify-between">
                            <button
                                onclick="openBrandModal('Baskin-Robbins', 'Rasakan kelezatan 31 varian rasa es krim kelas dunia.')"
                                class="px-6 py-3 rounded-xl bg-pink-600 hover:bg-pink-500 text-white font-heading font-semibold text-xs tracking-wider uppercase transition-all shadow-[0_0_20px_rgba(236,72,153,0.4)] flex items-center space-x-2">
                                <span>Explore Brand</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </button>
                            <span class="text-xs text-slate-400 font-mono">98 Outlets Active</span>
                        </div>
                    </div>
                </div>

                <!-- 4. Warung Wardani -->
                <div
                    class="reveal-element glass-card p-8 sm:p-10 rounded-[2.5rem] relative overflow-hidden group border border-yellow-500/20">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-yellow-950/40 via-trans-navy to-trans-navy-dark z-0">
                    </div>
                    <div
                        class="absolute -right-20 -bottom-20 w-64 h-64 bg-yellow-600/10 rounded-full blur-3xl pointer-events-none">
                    </div>

                    <div class="relative z-10 space-y-6">
                        <div class="flex items-center justify-between">
                            <span
                                class="px-3 py-1 rounded-full bg-yellow-500/20 border border-yellow-500/40 text-yellow-400 text-[11px] font-bold uppercase tracking-widest">Nusantara
                                Heritage</span>
                            <span class="text-xs font-mono text-yellow-300"><i
                                    class="fa-solid fa-star text-yellow-400"></i> 4.95 (15.1k ulasan)</span>
                        </div>
                        <div>
                            <h3 class="text-2xl sm:text-3xl font-heading font-black text-white mb-2">Warung Wardani</h3>
                            <p class="text-xs sm:text-sm text-slate-300 font-light leading-relaxed">Autentik kuliner
                                legendaris Bali dengan resep turun-temurun seperti Nasi Campur Bali dan Ayam Goreng
                                khas.</p>
                        </div>
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 pt-2">
                            <div class="p-3 rounded-2xl bg-white/5 border border-white/10">
                                <span class="block text-[10px] text-slate-400 uppercase">Today's Sales</span>
                                <span class="font-bold text-sm text-white">Rp 620M</span>
                            </div>
                            <div class="p-3 rounded-2xl bg-white/5 border border-white/10">
                                <span class="block text-[10px] text-slate-400 uppercase">Visitors</span>
                                <span class="font-bold text-sm text-yellow-400">19,800</span>
                            </div>
                            <div class="p-3 rounded-2xl bg-white/5 border border-white/10 col-span-2 sm:col-span-1">
                                <span class="block text-[10px] text-slate-400 uppercase">Best Menu</span>
                                <span class="font-bold text-sm text-white">Nasi Campur Spesial</span>
                            </div>
                        </div>
                        <div class="pt-4 flex items-center justify-between">
                            <button
                                onclick="openBrandModal('Warung Wardani', 'Keautentikan rasa kuliner tradisional Bali di setiap sajian.')"
                                class="px-6 py-3 rounded-xl bg-yellow-600 hover:bg-yellow-500 text-white font-heading font-semibold text-xs tracking-wider uppercase transition-all shadow-[0_0_20px_rgba(202,138,4,0.4)] flex items-center space-x-2">
                                <span>Explore Brand</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </button>
                            <span class="text-xs text-slate-400 font-mono">35 Outlets Active</span>
                        </div>
                    </div>
                </div>

                <!-- 5. Gyukatsu Niku Niku -->
                <div
                    class="reveal-element glass-card p-8 sm:p-10 rounded-[2.5rem] relative overflow-hidden group border border-blue-500/20">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-blue-950/40 via-trans-navy to-trans-navy-dark z-0">
                    </div>
                    <div
                        class="absolute -right-20 -bottom-20 w-64 h-64 bg-blue-600/10 rounded-full blur-3xl pointer-events-none">
                    </div>

                    <div class="relative z-10 space-y-6">
                        <div class="flex items-center justify-between">
                            <span
                                class="px-3 py-1 rounded-full bg-blue-500/20 border border-blue-500/40 text-blue-400 text-[11px] font-bold uppercase tracking-widest">Japanese
                                Grill</span>
                            <span class="text-xs font-mono text-blue-300"><i
                                    class="fa-solid fa-star text-yellow-400"></i> 4.9 (8.4k ulasan)</span>
                        </div>
                        <div>
                            <h3 class="text-2xl sm:text-3xl font-heading font-black text-white mb-2">Gyukatsu Niku Niku
                            </h3>
                            <p class="text-xs sm:text-sm text-slate-300 font-light leading-relaxed">Daging sapi katsu
                                premium ala Jepang dengan batu bakar personal (ishiyaki) untuk tingkat kematangan
                                sempurna.</p>
                        </div>
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 pt-2">
                            <div class="p-3 rounded-2xl bg-white/5 border border-white/10">
                                <span class="block text-[10px] text-slate-400 uppercase">Today's Sales</span>
                                <span class="font-bold text-sm text-white">Rp 480M</span>
                            </div>
                            <div class="p-3 rounded-2xl bg-white/5 border border-white/10">
                                <span class="block text-[10px] text-slate-400 uppercase">Visitors</span>
                                <span class="font-bold text-sm text-blue-400">14,200</span>
                            </div>
                            <div class="p-3 rounded-2xl bg-white/5 border border-white/10 col-span-2 sm:col-span-1">
                                <span class="block text-[10px] text-slate-400 uppercase">Style</span>
                                <span class="font-bold text-sm text-white">Ishiyaki Experience</span>
                            </div>
                        </div>
                        <div class="pt-4 flex items-center justify-between">
                            <button
                                onclick="openBrandModal('Gyukatsu Niku Niku', 'Nikmati sensasi memanggang daging wagyu katsu sendiri di atas batu bakar.')"
                                class="px-6 py-3 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-heading font-semibold text-xs tracking-wider uppercase transition-all shadow-[0_0_20px_rgba(37,99,235,0.4)] flex items-center space-x-2">
                                <span>Explore Brand</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </button>
                            <span class="text-xs text-slate-400 font-mono">28 Outlets Active</span>
                        </div>
                    </div>
                </div>

                <!-- 6. Tasty Kitchen -->
                <div
                    class="reveal-element glass-card p-8 sm:p-10 rounded-[2.5rem] relative overflow-hidden group border border-purple-500/20">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-purple-950/40 via-trans-navy to-trans-navy-dark z-0">
                    </div>
                    <div
                        class="absolute -right-20 -bottom-20 w-64 h-64 bg-purple-600/10 rounded-full blur-3xl pointer-events-none">
                    </div>

                    <div class="relative z-10 space-y-6">
                        <div class="flex items-center justify-between">
                            <span
                                class="px-3 py-1 rounded-full bg-purple-500/20 border border-purple-500/40 text-purple-400 text-[11px] font-bold uppercase tracking-widest">Asian
                                Cuisine</span>
                            <span class="text-xs font-mono text-purple-300"><i
                                    class="fa-solid fa-star text-yellow-400"></i> 4.85 (11.6k ulasan)</span>
                        </div>
                        <div>
                            <h3 class="text-2xl sm:text-3xl font-heading font-black text-white mb-2">Tasty Kitchen</h3>
                            <p class="text-xs sm:text-sm text-slate-300 font-light leading-relaxed">Kelezatan kuliner
                                khas Hongkong dan Chinese Comfort Food modern dengan racikan bumbu rempah pilihan.</p>
                        </div>
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 pt-2">
                            <div class="p-3 rounded-2xl bg-white/5 border border-white/10">
                                <span class="block text-[10px] text-slate-400 uppercase">Today's Sales</span>
                                <span class="font-bold text-sm text-white">Rp 510M</span>
                            </div>
                            <div class="p-3 rounded-2xl bg-white/5 border border-white/10">
                                <span class="block text-[10px] text-slate-400 uppercase">Visitors</span>
                                <span class="font-bold text-sm text-purple-400">16,500</span>
                            </div>
                            <div class="p-3 rounded-2xl bg-white/5 border border-white/10 col-span-2 sm:col-span-1">
                                <span class="block text-[10px] text-slate-400 uppercase">Chef Rec</span>
                                <span class="font-bold text-sm text-white">Roasted Duck Rice</span>
                            </div>
                        </div>
                        <div class="pt-4 flex items-center justify-between">
                            <button
                                onclick="openBrandModal('Tasty Kitchen', 'Sajian kuliner khas orientalis modern dengan cita rasa otentik.')"
                                class="px-6 py-3 rounded-xl bg-purple-600 hover:bg-purple-500 text-white font-heading font-semibold text-xs tracking-wider uppercase transition-all shadow-[0_0_20px_rgba(147,51,234,0.4)] flex items-center space-x-2">
                                <span>Explore Brand</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </button>
                            <span class="text-xs text-slate-400 font-mono">39 Outlets Active</span>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- PROMOTION SECTION (AUTOMATIC SLIDER) -->
        <section id="promotion" class="reveal-element space-y-6">
            <div class="flex items-center justify-between">
                <div>
                    <span class="text-xs font-bold uppercase tracking-[0.3em] text-acc-purple">Penawaran
                        Eksklusif</span>
                    <h2 class="text-2xl sm:text-3xl font-black font-heading text-white">Active Campaigns & Promotions
                    </h2>
                </div>
                <div class="flex space-x-2">
                    <button id="slider-prev"
                        class="w-10 h-10 rounded-xl glass-button flex items-center justify-center text-white hover:bg-white/10"><i
                            class="fa-solid fa-chevron-left"></i></button>
                    <button id="slider-next"
                        class="w-10 h-10 rounded-xl glass-button flex items-center justify-center text-white hover:bg-white/10"><i
                            class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>

            <!-- Promotion Slider Container -->
            <div class="glass-panel p-8 sm:p-12 rounded-[2.5rem] relative overflow-hidden border border-white/10">
                <div
                    class="absolute -right-20 -bottom-20 w-80 h-80 bg-acc-blue/15 rounded-full blur-3xl pointer-events-none">
                </div>

                <div id="promo-slider-track" class="grid grid-cols-1 md:grid-cols-3 gap-6 transition-all duration-500">
                    <!-- Promo 1 -->
                    <div
                        class="glass-card p-6 rounded-3xl space-y-4 border border-acc-blue/30 relative overflow-hidden">
                        <div
                            class="absolute top-0 right-0 px-4 py-1.5 bg-acc-blue text-white text-[10px] font-bold uppercase tracking-wider rounded-bl-2xl">
                            Mega Deal</div>
                        <span class="text-xs text-slate-400 font-mono">Berlaku di Semua Outlet</span>
                        <h3 class="text-xl font-bold font-heading text-white">Trans F&B PayDay Extravaganza</h3>
                        <p class="text-xs text-slate-300 font-light">Diskon spesial hingga 50% untuk seluruh menu
                            pilihan di Coffee Bean, Wendy's, dan Baskin-Robbins menggunakan QRIS.</p>
                        <div class="pt-2">
                            <button
                                onclick="openPromoModal('Trans F&B PayDay Extravaganza', 'Diskon spesial 50% di seluruh brand Trans F&B.')"
                                class="w-full py-3 rounded-xl bg-acc-blue hover:bg-blue-600 text-white font-heading font-semibold text-xs tracking-wider uppercase transition-all shadow-[0_0_15px_rgba(37,99,235,0.4)]">
                                Klaim Promo
                            </button>
                        </div>
                    </div>

                    <!-- Promo 2 -->
                    <div
                        class="glass-card p-6 rounded-3xl space-y-4 border border-acc-purple/30 relative overflow-hidden">
                        <div
                            class="absolute top-0 right-0 px-4 py-1.5 bg-acc-purple text-white text-[10px] font-bold uppercase tracking-wider rounded-bl-2xl">
                            Bundle Spesial</div>
                        <span class="text-xs text-slate-400 font-mono">Khusus Dine-In & Takeaway</span>
                        <h3 class="text-xl font-bold font-heading text-white">Wendy's Family Feast Package</h3>
                        <p class="text-xs text-slate-300 font-light">Paket hemat keluarga berisi 4 burger pilihan, 4
                            fries, dan minuman segar dengan harga spesial akhir pekan.</p>
                        <div class="pt-2">
                            <button
                                onclick="openPromoModal('Wendy\'s Family Feast Package', 'Paket hemat keluarga spesial akhir pekan.')"
                                class="w-full py-3 rounded-xl bg-acc-purple hover:bg-purple-600 text-white font-heading font-semibold text-xs tracking-wider uppercase transition-all shadow-[0_0_15px_rgba(147,51,234,0.4)]">
                                Klaim Promo
                            </button>
                        </div>
                    </div>

                    <!-- Promo 3 -->
                    <div
                        class="glass-card p-6 rounded-3xl space-y-4 border border-acc-green/30 relative overflow-hidden">
                        <div
                            class="absolute top-0 right-0 px-4 py-1.5 bg-acc-green text-white text-[10px] font-bold uppercase tracking-wider rounded-bl-2xl">
                            Loyalty Reward</div>
                        <span class="text-xs text-slate-400 font-mono">All-Store Member Rewards</span>
                        <h3 class="text-xl font-bold font-heading text-white">Baskin-Robbins Happy Scoop Day</h3>
                        <p class="text-xs text-slate-300 font-light">Beli 1 Get 1 Free untuk semua varian Scoop Ice
                            Cream favoritmu setiap hari Rabu menggunakan aplikasi CT Corp.</p>
                        <div class="pt-2">
                            <button
                                onclick="openPromoModal('Baskin-Robbins Happy Scoop Day', 'Beli 1 Get 1 Free setiap hari Rabu.')"
                                class="w-full py-3 rounded-xl bg-acc-green hover:bg-green-600 text-white font-heading font-semibold text-xs tracking-wider uppercase transition-all shadow-[0_0_15px_rgba(34,197,94,0.4)]">
                                Klaim Promo
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ANALYTICS SECTION -->
        <section id="performance" class="reveal-element space-y-6">
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                <div>
                    <span class="text-xs font-bold uppercase tracking-[0.3em] text-acc-blue">Executive
                        Intelligence</span>
                    <h2 class="text-2xl sm:text-3xl font-black font-heading text-white">Performance Analytics & Growth
                    </h2>
                </div>
                <div class="flex items-center space-x-2 bg-white/5 border border-white/10 p-1 rounded-xl">
                    <button
                        class="px-3 py-1.5 rounded-lg text-xs font-semibold bg-acc-blue text-white shadow">Bulanan</button>
                    <button
                        class="px-3 py-1.5 rounded-lg text-xs font-medium text-slate-400 hover:text-white">Tahunan</button>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Main Chart Simulation Box -->
                <div class="lg:col-span-2 glass-panel p-6 sm:p-8 rounded-[2.5rem] border border-white/10 space-y-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="font-heading font-bold text-lg text-white">Revenue Trajectory (Q1 - Q3)</h3>
                            <p class="text-xs text-slate-400">Tren pertumbuhan pendapatan bersih nasional</p>
                        </div>
                        <span class="text-xs font-mono text-acc-green font-bold">+24.8% vs Tahun Lalu</span>
                    </div>

                    <!-- Visual Simulated Bar Chart -->
                    <div class="h-64 flex items-end justify-between gap-3 pt-8 px-4 border-b border-white/10">
                        <div class="w-full flex flex-col items-center gap-2 group">
                            <div
                                class="text-[10px] text-slate-400 opacity-0 group-hover:opacity-100 transition-opacity font-mono">
                                Rp 3.1B</div>
                            <div
                                class="w-full bg-gradient-to-t from-acc-blue/40 to-acc-blue rounded-t-xl h-[55%] transition-all duration-500 group-hover:brightness-125">
                            </div>
                            <span class="text-[11px] text-slate-400">Jan</span>
                        </div>
                        <div class="w-full flex flex-col items-center gap-2 group">
                            <div
                                class="text-[10px] text-slate-400 opacity-0 group-hover:opacity-100 transition-opacity font-mono">
                                Rp 3.4B</div>
                            <div
                                class="w-full bg-gradient-to-t from-acc-blue/40 to-acc-blue rounded-t-xl h-[65%] transition-all duration-500 group-hover:brightness-125">
                            </div>
                            <span class="text-[11px] text-slate-400">Feb</span>
                        </div>
                        <div class="w-full flex flex-col items-center gap-2 group">
                            <div
                                class="text-[10px] text-slate-400 opacity-0 group-hover:opacity-100 transition-opacity font-mono">
                                Rp 3.9B</div>
                            <div
                                class="w-full bg-gradient-to-t from-acc-blue/40 to-acc-blue rounded-t-xl h-[75%] transition-all duration-500 group-hover:brightness-125">
                            </div>
                            <span class="text-[11px] text-slate-400">Mar</span>
                        </div>
                        <div class="w-full flex flex-col items-center gap-2 group">
                            <div
                                class="text-[10px] text-slate-400 opacity-0 group-hover:opacity-100 transition-opacity font-mono">
                                Rp 3.7B</div>
                            <div
                                class="w-full bg-gradient-to-t from-acc-purple/40 to-acc-purple rounded-t-xl h-[70%] transition-all duration-500 group-hover:brightness-125">
                            </div>
                            <span class="text-[11px] text-slate-400">Apr</span>
                        </div>
                        <div class="w-full flex flex-col items-center gap-2 group">
                            <div
                                class="text-[10px] text-slate-400 opacity-0 group-hover:opacity-100 transition-opacity font-mono">
                                Rp 4.1B</div>
                            <div
                                class="w-full bg-gradient-to-t from-acc-purple/40 to-acc-purple rounded-t-xl h-[82%] transition-all duration-500 group-hover:brightness-125">
                            </div>
                            <span class="text-[11px] text-slate-400">Mei</span>
                        </div>
                        <div class="w-full flex flex-col items-center gap-2 group">
                            <div
                                class="text-[10px] text-slate-400 opacity-0 group-hover:opacity-100 transition-opacity font-mono">
                                Rp 4.5B</div>
                            <div
                                class="w-full bg-gradient-to-t from-acc-purple/40 to-acc-purple rounded-t-xl h-[95%] transition-all duration-500 group-hover:brightness-125">
                            </div>
                            <span class="text-[11px] text-slate-400">Jun</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-between text-xs text-slate-400 px-2">
                        <span><i class="fa-solid fa-circle text-acc-blue text-[8px]"></i> Q1 Average</span>
                        <span><i class="fa-solid fa-circle text-acc-purple text-[8px]"></i> Q2 Peak Performance</span>
                        <span class="font-bold text-white">Total 2026 YTD: Rp 23.8B</span>
                    </div>
                </div>

                <!-- Side Metrics -->
                <div
                    class="glass-panel p-6 sm:p-8 rounded-[2.5rem] border border-white/10 space-y-6 flex flex-col justify-between">
                    <div>
                        <h3 class="font-heading font-bold text-lg text-white mb-1">Brand Contribution</h3>
                        <p class="text-xs text-slate-400 mb-6">Persentase kontribusi pendapatan per brand</p>

                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between text-xs mb-1">
                                    <span class="text-white font-medium">Wendy's Indonesia</span>
                                    <span class="text-acc-blue font-bold">32%</span>
                                </div>
                                <div class="h-2 w-full bg-white/5 rounded-full overflow-hidden">
                                    <div class="h-full bg-acc-blue rounded-full" style="width: 32%;"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-xs mb-1">
                                    <span class="text-white font-medium">The Coffee Bean & Tea Leaf</span>
                                    <span class="text-amber-400 font-bold">28%</span>
                                </div>
                                <div class="h-2 w-full bg-white/5 rounded-full overflow-hidden">
                                    <div class="h-full bg-amber-500 rounded-full" style="width: 28%;"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-xs mb-1">
                                    <span class="text-white font-medium">Baskin-Robbins</span>
                                    <span class="text-pink-400 font-bold">18%</span>
                                </div>
                                <div class="h-2 w-full bg-white/5 rounded-full overflow-hidden">
                                    <div class="h-full bg-pink-500 rounded-full" style="width: 18%;"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-xs mb-1">
                                    <span class="text-white font-medium">Brand Lainnya (Wardani, dll)</span>
                                    <span class="text-acc-purple font-bold">22%</span>
                                </div>
                                <div class="h-2 w-full bg-white/5 rounded-full overflow-hidden">
                                    <div class="h-full bg-acc-purple rounded-full" style="width: 22%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 rounded-2xl bg-white/5 border border-white/10 text-center">
                        <span class="block text-[11px] text-slate-400">Target Tahunan Tercapai</span>
                        <span class="font-display font-black text-xl text-acc-green">86.5%</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- NEWS SECTION -->
        <section id="news" class="reveal-element space-y-6">
            <div class="flex items-center justify-between">
                <div>
                    <span class="text-xs font-bold uppercase tracking-[0.3em] text-acc-blue">Informasi Terkini</span>
                    <h2 class="text-2xl sm:text-3xl font-black font-heading text-white">Latest Corporate News</h2>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- News 1 -->
                <div class="glass-card p-6 rounded-3xl space-y-4 flex flex-col justify-between group">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between text-xs text-slate-400 font-mono">
                            <span><i class="fa-regular fa-calendar text-acc-blue mr-1"></i> 05 Agustus 2026</span>
                            <span
                                class="px-2.5 py-0.5 rounded-full bg-acc-blue/15 text-acc-blue text-[10px] font-bold">Expansion</span>
                        </div>
                        <h3
                            class="font-heading font-bold text-lg text-white group-hover:text-acc-blue transition-colors">
                            Trans F&B Resmikan 10 Outlet Baru di Jabodetabek</h3>
                        <p class="text-xs text-slate-300 font-light leading-relaxed">PT Trans Food & Beverage memperluas
                            jangkauan pasar dengan membuka 10 outlet gabungan Coffee Bean dan Wendy's di kawasan
                            strategis.</p>
                    </div>
                    <button
                        onclick="openNewsModal('Trans F&B Resmikan 10 Outlet Baru di Jabodetabek', 'PT Trans Food & Beverage memperluas jangkauan pasar dengan membuka 10 outlet gabungan Coffee Bean dan Wendy\'s di kawasan strategis Jabodetabek guna mendekatkan diri kepada para pelanggan setia.')"
                        class="text-xs font-bold text-acc-blue flex items-center space-x-2 pt-2 hover:underline">
                        <span>Read Full Story</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>

                <!-- News 2 -->
                <div class="glass-card p-6 rounded-3xl space-y-4 flex flex-col justify-between group">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between text-xs text-slate-400 font-mono">
                            <span><i class="fa-regular fa-calendar text-acc-purple mr-1"></i> 28 Juli 2026</span>
                            <span
                                class="px-2.5 py-0.5 rounded-full bg-acc-purple/15 text-acc-purple text-[10px] font-bold">Innovation</span>
                        </div>
                        <h3
                            class="font-heading font-bold text-lg text-white group-hover:text-acc-purple transition-colors">
                            Peluncuran Fitur Digital Ordering & Loyalty v3.0</h3>
                        <p class="text-xs text-slate-300 font-light leading-relaxed">Integrasi sistem pemesanan
                            nirsentuh dan poin reward lintas brand kini resmi dapat dinikmati melalui aplikasi CT Corp
                            ecosystem.</p>
                    </div>
                    <button
                        onclick="openNewsModal('Peluncuran Fitur Digital Ordering & Loyalty v3.0', 'Integrasi sistem pemesanan nirsentuh dan poin reward lintas brand kini resmi dapat dinikmati melalui aplikasi CT Corp ecosystem untuk memberikan kemudahan bertransaksi.')"
                        class="text-xs font-bold text-acc-purple flex items-center space-x-2 pt-2 hover:underline">
                        <span>Read Full Story</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>

                <!-- News 3 -->
                <div class="glass-card p-6 rounded-3xl space-y-4 flex flex-col justify-between group">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between text-xs text-slate-400 font-mono">
                            <span><i class="fa-regular fa-calendar text-acc-green mr-1"></i> 14 Juli 2026</span>
                            <span
                                class="px-2.5 py-0.5 rounded-full bg-acc-green/15 text-acc-green text-[10px] font-bold">Award</span>
                        </div>
                        <h3
                            class="font-heading font-bold text-lg text-white group-hover:text-acc-green transition-colors">
                            Trans F&B Raih Penghargaan Best F&B Network 2026</h3>
                        <p class="text-xs text-slate-300 font-light leading-relaxed">Apresiasi nasional atas komitmen
                            perusahaan dalam menjaga kualitas produk, pelayanan prima, dan inovasi kuliner
                            berkelanjutan.</p>
                    </div>
                    <button
                        onclick="openNewsModal('Trans F&B Raih Penghargaan Best F&B Network 2026', 'Apresiasi nasional atas komitmen perusahaan dalam menjaga kualitas produk, pelayanan prima, dan inovasi kuliner berkelanjutan di Indonesia.')"
                        class="text-xs font-bold text-acc-green flex items-center space-x-2 pt-2 hover:underline">
                        <span>Read Full Story</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </section>

        <!-- EVENT & TIMELINE SECTION -->
        <section class="reveal-element space-y-6">
            <div>
                <span class="text-xs font-bold uppercase tracking-[0.3em] text-acc-purple">Agenda Mendatang</span>
                <h2 class="text-2xl sm:text-3xl font-black font-heading text-white">Upcoming Events & Grand Openings
                </h2>
            </div>

            <div
                class="glass-panel p-6 sm:p-8 rounded-[2.5rem] border border-white/10 grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="space-y-2 p-4 rounded-2xl bg-white/5 border border-white/10">
                    <span
                        class="text-[10px] font-mono px-2.5 py-1 rounded-full bg-acc-blue/20 text-acc-blue font-bold">15
                        Agt 2026</span>
                    <h4 class="font-heading font-bold text-sm text-white pt-2">Grand Opening Wardani</h4>
                    <p class="text-xs text-slate-400">Pembukaan outlet ke-36 Warung Wardani di Surabaya Grand City.</p>
                </div>
                <div class="space-y-2 p-4 rounded-2xl bg-white/5 border border-white/10">
                    <span
                        class="text-[10px] font-mono px-2.5 py-1 rounded-full bg-acc-purple/20 text-acc-purple font-bold">22
                        Agt 2026</span>
                    <h4 class="font-heading font-bold text-sm text-white pt-2">Culinary Festival 2026</h4>
                    <p class="text-xs text-slate-400">Partisipasi akbar seluruh brand Trans F&B di Jakarta Convention
                        Center.</p>
                </div>
                <div class="space-y-2 p-4 rounded-2xl bg-white/5 border border-white/10">
                    <span
                        class="text-[10px] font-mono px-2.5 py-1 rounded-full bg-acc-green/20 text-acc-green font-bold">05
                        Sep 2026</span>
                    <h4 class="font-heading font-bold text-sm text-white pt-2">Baskin-Robbins Flavor Launch</h4>
                    <p class="text-xs text-slate-400">Peluncuran 3 varian rasa es krim edisi spesial musim gugur.</p>
                </div>
                <div class="space-y-2 p-4 rounded-2xl bg-white/5 border border-white/10">
                    <span
                        class="text-[10px] font-mono px-2.5 py-1 rounded-full bg-acc-yellow/20 text-acc-yellow font-bold">18
                        Sep 2026</span>
                    <h4 class="font-heading font-bold text-sm text-white pt-2">Wendy's Anniversary Promo</h4>
                    <p class="text-xs text-slate-400">Perayaan ulang tahun Wendy's dengan penawaran nasional
                        spektakuler.</p>
                </div>
            </div>
        </section>

        <!-- GALLERY SECTION -->
        <section id="gallery" class="reveal-element space-y-6">
            <div>
                <span class="text-xs font-bold uppercase tracking-[0.3em] text-acc-blue">Visual Showcase</span>
                <h2 class="text-2xl sm:text-3xl font-black font-heading text-white">Trans F&B Gallery</h2>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div
                    class="glass-card h-48 rounded-2xl overflow-hidden relative group cursor-pointer flex items-center justify-center bg-gradient-to-br from-amber-900/40 to-trans-navy">
                    <i
                        class="fa-solid fa-mug-hot text-4xl text-amber-400/60 group-hover:scale-110 transition-transform"></i>
                    <div
                        class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center p-4 text-center">
                        <span class="text-xs font-bold text-white">The Coffee Bean & Tea Leaf Ambiance</span>
                    </div>
                </div>
                <div
                    class="glass-card h-48 rounded-2xl overflow-hidden relative group cursor-pointer flex items-center justify-center bg-gradient-to-br from-red-900/40 to-trans-navy">
                    <i
                        class="fa-solid fa-burger text-4xl text-red-400/60 group-hover:scale-110 transition-transform"></i>
                    <div
                        class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center p-4 text-center">
                        <span class="text-xs font-bold text-white">Wendy's Fresh Premium Burger</span>
                    </div>
                </div>
                <div
                    class="glass-card h-48 rounded-2xl overflow-hidden relative group cursor-pointer flex items-center justify-center bg-gradient-to-br from-pink-900/40 to-trans-navy">
                    <i
                        class="fa-solid fa-ice-cream text-4xl text-pink-400/60 group-hover:scale-110 transition-transform"></i>
                    <div
                        class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center p-4 text-center">
                        <span class="text-xs font-bold text-white">Baskin-Robbins Ice Cream Station</span>
                    </div>
                </div>
                <div
                    class="glass-card h-48 rounded-2xl overflow-hidden relative group cursor-pointer flex items-center justify-center bg-gradient-to-br from-yellow-900/40 to-trans-navy">
                    <i
                        class="fa-solid fa-bowl-rice text-4xl text-yellow-400/60 group-hover:scale-110 transition-transform"></i>
                    <div
                        class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center p-4 text-center">
                        <span class="text-xs font-bold text-white">Warung Wardani Traditional Dish</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- TESTIMONIAL SECTION -->
        <section class="reveal-element space-y-6">
            <div class="text-center max-w-xl mx-auto space-y-2">
                <span class="text-xs font-bold uppercase tracking-[0.3em] text-acc-green">Testimoni Pelanggan</span>
                <h2 class="text-2xl sm:text-3xl font-black font-heading text-white">What Our Customers Say</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="glass-card p-6 rounded-3xl space-y-4">
                    <div class="flex items-center space-x-1 text-yellow-400 text-xs">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-xs text-slate-300 font-light leading-relaxed">"Suasana di The Coffee Bean sangat
                        nyaman untuk meeting santai. Kualitas kopi dan pelayanannya selalu memuaskan!"</p>
                    <div class="flex items-center space-x-3 pt-2 border-t border-white/5">
                        <div
                            class="w-8 h-8 rounded-full bg-acc-blue flex items-center justify-center font-bold text-xs text-white">
                            AS</div>
                        <div>
                            <span class="block font-heading font-bold text-xs text-white">Aditya Pratama</span>
                            <span class="block text-[10px] text-slate-400">Loyal Customer</span>
                        </div>
                    </div>
                </div>

                <div class="glass-card p-6 rounded-3xl space-y-4">
                    <div class="flex items-center space-x-1 text-yellow-400 text-xs">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-xs text-slate-300 font-light leading-relaxed">"Burger Wendy's benar-benar juara!
                        Dagingnya terasa segar dan porsinya mengenyangkan. Anak-anak sangat suka."</p>
                    <div class="flex items-center space-x-3 pt-2 border-t border-white/5">
                        <div
                            class="w-8 h-8 rounded-full bg-acc-purple flex items-center justify-center font-bold text-xs text-white">
                            SN</div>
                        <div>
                            <span class="block font-heading font-bold text-xs text-white">Siti Nurhaliza</span>
                            <span class="block text-[10px] text-slate-400">Food Blogger</span>
                        </div>
                    </div>
                </div>

                <div class="glass-card p-6 rounded-3xl space-y-4">
                    <div class="flex items-center space-x-1 text-yellow-400 text-xs">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-xs text-slate-300 font-light leading-relaxed">"Warung Wardani mengobati kerinduan
                        saya dengan cita rasa masakan Bali yang otentik. Bumbu rempahnya sangat meresap."</p>
                    <div class="flex items-center space-x-3 pt-2 border-t border-white/5">
                        <div
                            class="w-8 h-8 rounded-full bg-acc-green flex items-center justify-center font-bold text-xs text-white">
                            RD</div>
                        <div>
                            <span class="block font-heading font-bold text-xs text-white">Rian Darmawan</span>
                            <span class="block text-[10px] text-slate-400">Culinary Enthusiast</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <footer class="relative z-10 border-t border-white/10 bg-trans-navy-dark py-12">
        <div
            class="max-w-7xl mx-auto px-4 sm:px-8 flex flex-col md:flex-row items-center justify-between gap-6 text-center md:text-left">
            <div class="flex items-center space-x-3">
                <div
                    class="w-10 h-10 bg-acc-blue rounded-xl flex items-center justify-center font-bold text-xl text-white">
                    T</div>
                <div>
                    <span class="font-display font-black text-white text-lg">PT Trans Food & Beverage</span>
                    <span class="block text-xs text-slate-400">Part of CT Corp • Official Corporate Dashboard</span>
                </div>
            </div>
            <div class="flex items-center space-x-6 text-sm text-slate-400">
                <a href="#dashboard" class="hover:text-acc-blue transition-colors">Privacy Policy</a>
                <a href="#dashboard" class="hover:text-acc-blue transition-colors">Terms of Service</a>
                <a href="#dashboard" class="hover:text-acc-blue transition-colors">Corporate Support</a>
            </div>
            <div class="text-xs text-slate-500">
                © 2026 TRANS F&B OFFICIAL. ALL RIGHTS RESERVED.
            </div>
        </div>
    </footer>

    <!-- MODAL POPUP (DYNAMIC) -->
    <div id="general-modal"
        class="fixed inset-0 z-[10000] bg-trans-navy-dark/85 backdrop-blur-2xl flex items-center justify-center p-4 opacity-0 pointer-events-none transition-all duration-300">
        <div
            class="glass-panel w-full max-w-lg rounded-3xl p-6 sm:p-8 relative transform scale-95 transition-all duration-300 border border-white/10 shadow-2xl">
            <button onclick="closeGeneralModal()"
                class="absolute top-6 right-6 w-10 h-10 rounded-full bg-white/5 hover:bg-acc-blue text-white flex items-center justify-center transition-colors">
                <i class="fa-solid fa-xmark text-lg"></i>
            </button>
            <div class="space-y-4">
                <div
                    class="w-12 h-12 rounded-2xl bg-acc-blue/15 border border-acc-blue/30 text-acc-blue flex items-center justify-center text-xl">
                    <i class="fa-solid fa-circle-info" id="modal-icon"></i>
                </div>
                <h3 id="modal-title" class="font-heading font-bold text-xl text-white">Modal Title</h3>
                <p id="modal-desc" class="text-xs sm:text-sm text-slate-300 font-light leading-relaxed">Modal content
                    description goes here.</p>
                <div class="pt-4">
                    <button onclick="closeGeneralModal()"
                        class="glass-button-primary w-full py-3 rounded-xl font-heading font-semibold text-xs text-white uppercase tracking-wider">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- SEARCH MODAL -->
    <div id="search-modal"
        class="fixed inset-0 z-[10000] bg-trans-navy-dark/90 backdrop-blur-2xl flex items-start justify-center pt-28 p-4 opacity-0 pointer-events-none transition-all duration-300">
        <div class="glass-panel w-full max-w-2xl rounded-3xl p-6 relative border border-white/10 shadow-2xl space-y-4">
            <div class="flex items-center space-x-3 border-b border-white/10 pb-4">
                <i class="fa-solid fa-magnifying-glass text-slate-400"></i>
                <input type="text" id="search-input" placeholder="Cari brand, outlet, atau laporan performa..."
                    class="w-full bg-transparent text-sm text-white outline-none placeholder:text-slate-500">
                <button onclick="closeSearchModal()"
                    class="text-xs text-slate-400 hover:text-white px-3 py-1 rounded-lg bg-white/5">ESC</button>
            </div>
            <div class="space-y-2 text-xs text-slate-400">
                <span class="block font-semibold uppercase tracking-wider text-[10px] text-slate-500">Pencarian
                    Populer</span>
                <div class="flex flex-wrap gap-2">
                    <span
                        class="px-3 py-1.5 rounded-xl bg-white/5 border border-white/10 text-white cursor-pointer hover:bg-acc-blue/20">The
                        Coffee Bean</span>
                    <span
                        class="px-3 py-1.5 rounded-xl bg-white/5 border border-white/10 text-white cursor-pointer hover:bg-acc-blue/20">Wendy's
                        Promo</span>
                    <span
                        class="px-3 py-1.5 rounded-xl bg-white/5 border border-white/10 text-white cursor-pointer hover:bg-acc-blue/20">Laporan
                        Q2</span>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT LOGIC -->
    <script>
    document.addEventListener('DOMContentLoaded', () => {

        // 1. Particle Canvas Background Animation
        const canvas = document.getElementById('particle-canvas');
        if (canvas) {
            const ctx = canvas.getContext('2d');
            let width = canvas.width = window.innerWidth;
            let height = canvas.height = window.innerHeight;

            window.addEventListener('resize', () => {
                width = canvas.width = window.innerWidth;
                height = canvas.height = window.innerHeight;
            });

            class Particle {
                constructor() {
                    this.x = Math.random() * width;
                    this.y = Math.random() * height;
                    this.vx = (Math.random() - 0.5) * 0.4;
                    this.vy = (Math.random() - 0.5) * 0.4;
                    this.radius = Math.random() * 1.5 + 0.5;
                    const colorArray = ['rgba(59, 130, 246, 0.5)', 'rgba(147, 51, 234, 0.4)',
                        'rgba(34, 197, 94, 0.3)'
                    ];
                    this.color = colorArray[Math.floor(Math.random() * colorArray.length)];
                }
                update() {
                    this.x += this.vx;
                    this.y += this.vy;
                    if (this.x < 0 || this.x > width) this.vx *= -1;
                    if (this.y < 0 || this.y > height) this.vy *= -1;
                }
                draw() {
                    ctx.beginPath();
                    ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
                    ctx.fillStyle = this.color;
                    ctx.fill();
                }
            }

            const particles = Array.from({
                length: 45
            }, () => new Particle());

            function animateParticles() {
                ctx.clearRect(0, 0, width, height);
                for (let i = 0; i < particles.length; i++) {
                    particles[i].update();
                    particles[i].draw();
                }
                requestAnimationFrame(animateParticles);
            }
            animateParticles();
        }

        // 2. Scroll Observer for Reveal Animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, {
            threshold: 0.1
        });

        document.querySelectorAll('.reveal-element').forEach(el => observer.observe(el));

        // 3. Mobile Menu Toggle
        const mobileToggle = document.getElementById('mobile-menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        if (mobileToggle && mobileMenu) {
            mobileToggle.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }

        // 4. Search Modal Toggle
        const searchBtn = document.getElementById('search-btn');
        const searchModal = document.getElementById('search-modal');
        const searchInput = document.getElementById('search-input');

        if (searchBtn && searchModal) {
            searchBtn.addEventListener('click', () => {
                searchModal.classList.remove('opacity-0', 'pointer-events-none');
                if (searchInput) searchInput.focus();
            });
        }

        window.closeSearchModal = function() {
            if (searchModal) searchModal.classList.add('opacity-0', 'pointer-events-none');
        };

        if (searchModal) {
            searchModal.addEventListener('click', (e) => {
                if (e.target === searchModal) closeSearchModal();
            });
        }

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeSearchModal();
        });

        // 5. General Modal Handlers
        window.openBrandModal = function(brandName, brandDesc) {
            const modal = document.getElementById('general-modal');
            document.getElementById('modal-title').textContent = brandName;
            document.getElementById('modal-desc').textContent = brandDesc;
            document.getElementById('modal-icon').className = "fa-solid fa-utensils text-xl";
            if (modal) {
                modal.classList.remove('opacity-0', 'pointer-events-none');
                modal.children[0].classList.remove('scale-95');
                modal.children[0].classList.add('scale-100');
            }
        };

        window.openPromoModal = function(promoName, promoDesc) {
            const modal = document.getElementById('general-modal');
            document.getElementById('modal-title').textContent = promoName;
            document.getElementById('modal-desc').textContent = promoDesc +
                " Klaim penawaran ini langsung di outlet terdekat atau melalui aplikasi digital Trans F&B.";
            document.getElementById('modal-icon').className = "fa-solid fa-tags text-xl";
            if (modal) {
                modal.classList.remove('opacity-0', 'pointer-events-none');
                modal.children[0].classList.remove('scale-95');
                modal.children[0].classList.add('scale-100');
            }
        };

        window.openNewsModal = function(newsTitle, newsDesc) {
            const modal = document.getElementById('general-modal');
            document.getElementById('modal-title').textContent = newsTitle;
            document.getElementById('modal-desc').textContent = newsDesc;
            document.getElementById('modal-icon').className = "fa-solid fa-newspaper text-xl";
            if (modal) {
                modal.classList.remove('opacity-0', 'pointer-events-none');
                modal.children[0].classList.remove('scale-95');
                modal.children[0].classList.add('scale-100');
            }
        };

        window.closeGeneralModal = function() {
            const modal = document.getElementById('general-modal');
            if (modal) {
                modal.children[0].classList.remove('scale-100');
                modal.children[0].classList.add('scale-95');
                modal.classList.add('opacity-0', 'pointer-events-none');
            }
        };

        // 6. Promotion Slider Auto / Manual
        const sliderTrack = document.getElementById('promo-slider-track');
        const btnPrev = document.getElementById('slider-prev');
        const btnNext = document.getElementById('slider-next');

        if (btnPrev && btnNext && sliderTrack) {
            let scrollAmount = 0;
            btnNext.addEventListener('click', () => {
                sliderTrack.scrollBy({
                    left: 350,
                    behavior: 'smooth'
                });
            });
            btnPrev.addEventListener('click', () => {
                sliderTrack.scrollBy({
                    left: -350,
                    behavior: 'smooth'
                });
            });
        }

    });
    </script>
</body>

</html>