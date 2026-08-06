<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trans Food & Beverage Official - Executive Premium Dashboard</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <!-- Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap"
        rel="stylesheet">

    <script>
    tailwind.config = {
        theme: {
            extend: {
                fontFamily: {
                    sans: ['Plus Jakarta Sans', 'sans-serif'],
                    serif: ['Playfair Display', 'serif'],
                },
                colors: {
                    navy: {
                        950: '#020617',
                        900: '#0a0f1d',
                        800: '#0f172a',
                        700: '#1e293b',
                    },
                    neon: {
                        blue: '#00F0FF',
                        purple: '#8B5CF6',
                        pink: '#EC4899',
                        amber: '#F59E0B',
                        emerald: '#10B981',
                    }
                },
                boxShadow: {
                    'glow-blue': '0 0 25px -5px rgba(59, 130, 246, 0.4)',
                    'glow-purple': '0 0 25px -5px rgba(139, 92, 246, 0.4)',
                    'glow-pink': '0 0 25px -5px rgba(236, 72, 153, 0.4)',
                    'glow-amber': '0 0 25px -5px rgba(245, 158, 11, 0.4)',
                    'glass': '0 8px 32px 0 rgba(0, 0, 0, 0.37)',
                },
                animation: {
                    'float': 'float 6s ease-in-out infinite',
                    'pulse-glow': 'pulseGlow 3s ease-in-out infinite',
                    'aurora': 'aurora 15s ease infinite alternate',
                    'gradient-x': 'gradientX 8s ease infinite',
                    'spin-slow': 'spin 20s linear infinite',
                },
                keyframes: {
                    float: {
                        '0%, 100%': {
                            transform: 'translateY(0px)'
                        },
                        '50%': {
                            transform: 'translateY(-12px)'
                        },
                    },
                    pulseGlow: {
                        '0%, 100%': {
                            opacity: '0.4',
                            filter: 'drop-shadow(0 0 15px rgba(0,240,255,0.4))'
                        },
                        '50%': {
                            opacity: '0.8',
                            filter: 'drop-shadow(0 0 30px rgba(0,240,255,0.8))'
                        },
                    },
                    aurora: {
                        '0%': {
                            backgroundPosition: '0% 50%'
                        },
                        '50%': {
                            backgroundPosition: '100% 50%'
                        },
                        '100%': {
                            backgroundPosition: '0% 50%'
                        },
                    },
                    gradientX: {
                        '0%, 100%': {
                            'background-size': '200% 200%',
                            'background-position': 'left center'
                        },
                        '50%': {
                            'background-size': '200% 200%',
                            'background-position': 'right center'
                        }
                    }
                }
            }
        }
    }
    </script>
    <style>
    /* Custom Glassmorphism Styles - Sleek Interface Theme */
    .glass-panel {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .glass-panel-hover {
        transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .glass-panel-hover:hover {
        background: rgba(255, 255, 255, 0.08);
        border-color: rgba(59, 130, 246, 0.4);
        transform: translateY(-4px);
        box-shadow: 0 20px 40px -15px rgba(0, 0, 0, 0.7), 0 0 30px -10px rgba(59, 130, 246, 0.3);
    }

    .glass-card-brand {
        background: rgba(15, 23, 42, 0.7);
        backdrop-filter: blur(24px);
        -webkit-backdrop-filter: blur(24px);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    /* Custom Scrollbar */
    ::-webkit-scrollbar {
        width: 8px;
        height: 8px;
    }

    ::-webkit-scrollbar-track {
        background: #020617;
    }

    ::-webkit-scrollbar-thumb {
        background: #1e293b;
        border-radius: 4px;
        border: 2px solid #020617;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #3b82f6;
    }

    /* Grid Pattern Background overlay */
    .bg-grid-pattern {
        background-size: 40px 40px;
        background-image:
            linear-gradient(to right, rgba(255, 255, 255, 0.03) 1px, transparent 1px),
            linear-gradient(to bottom, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
    }

    /* Gradient Text */
    .text-gradient-cyan {
        background: linear-gradient(135deg, #FFFFFF 0%, #00F0FF 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .text-gradient-gold {
        background: linear-gradient(135deg, #FFF 0%, #F59E0B 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .text-gradient-purple {
        background: linear-gradient(135deg, #FFF 0%, #C084FC 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    /* Hide elements during scroll reveal */
    .reveal {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .reveal.active {
        opacity: 1;
        transform: translateY(0);
    }
    </style>
</head>

<body
    class="bg-navy-950 text-slate-100 font-sans antialiased overflow-x-hidden selection:bg-neon-blue selection:text-navy-950">

    <!-- CANVAS BACKGROUNDS -->
    <div class="fixed inset-0 pointer-events-none z-0 overflow-hidden">
        <!-- Interactive Particle Canvas -->
        <canvas id="particleCanvas" class="absolute inset-0 w-full h-full opacity-60"></canvas>

        <!-- Animated Aurora Glowing Orbs -->
        <div class="absolute -top-40 -left-40 w-96 h-96 bg-neon-blue/20 rounded-full blur-[140px] animate-aurora"></div>
        <div class="absolute top-1/3 -right-40 w-[500px] h-[500px] bg-neon-purple/20 rounded-full blur-[160px] animate-aurora"
            style="animation-delay: -5s;"></div>
        <div class="absolute bottom-1/4 left-1/4 w-[450px] h-[450px] bg-neon-pink/15 rounded-full blur-[180px] animate-aurora"
            style="animation-delay: -10s;"></div>

        <!-- Grid Pattern Overlay -->
        <div class="absolute inset-0 bg-grid-pattern opacity-40"></div>
    </div>

    <!-- MAIN WRAPPER -->
    <div class="relative z-10 flex flex-col min-h-screen">

        <!-- NAVBAR -->
        <header id="mainNavbar"
            class="sticky top-0 z-50 w-full transition-all duration-300 border-b border-white/5 bg-navy-900/70 backdrop-blur-xl">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-20">

                    <!-- BRAND LOGO -->
                    <a href="#dashboard" class="flex items-center gap-3 group">
                        <div
                            class="relative w-11 h-11 rounded-xl bg-gradient-to-tr from-blue-600 via-indigo-600 to-purple-600 p-[1px] shadow-glow-blue group-hover:scale-105 transition-transform">
                            <div
                                class="w-full h-full bg-navy-900 rounded-[11px] flex items-center justify-center overflow-hidden">
                                <span
                                    class="font-black text-xl text-transparent bg-clip-text bg-gradient-to-r from-neon-blue via-white to-neon-purple tracking-tighter">TF</span>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex items-center gap-2">
                                <span class="font-extrabold text-lg tracking-wider text-white uppercase font-sans">TRANS
                                    <span class="text-neon-blue">F&B</span></span>
                                <span
                                    class="px-2 py-0.5 text-[10px] font-bold tracking-widest text-neon-blue bg-neon-blue/10 border border-neon-blue/30 rounded-full uppercase">Official</span>
                            </div>
                            <span class="text-[10px] tracking-widest text-slate-400 uppercase">Food & Beverage
                                Management</span>
                        </div>
                    </a>

                    <!-- DESKTOP NAVIGATION MENU -->
                    <nav
                        class="hidden lg:flex items-center gap-1 bg-navy-800/50 p-1.5 rounded-full border border-white/10 backdrop-blur-md">
                        <a href="#dashboard"
                            class="nav-link active px-4 py-2 text-xs font-semibold rounded-full text-white bg-gradient-to-r from-blue-600/80 to-purple-600/80 shadow-md transition-all">Dashboard</a>
                        <a href="#brands"
                            class="nav-link px-4 py-2 text-xs font-medium text-slate-300 hover:text-white hover:bg-white/5 rounded-full transition-all">Brands</a>
                        <a href="#promotion"
                            class="nav-link px-4 py-2 text-xs font-medium text-slate-300 hover:text-white hover:bg-white/5 rounded-full transition-all">Campaign</a>
                        <a href="#analytics"
                            class="nav-link px-4 py-2 text-xs font-medium text-slate-300 hover:text-white hover:bg-white/5 rounded-full transition-all">Performance</a>
                        <a href="#news"
                            class="nav-link px-4 py-2 text-xs font-medium text-slate-300 hover:text-white hover:bg-white/5 rounded-full transition-all">News</a>
                        <a href="#events"
                            class="nav-link px-4 py-2 text-xs font-medium text-slate-300 hover:text-white hover:bg-white/5 rounded-full transition-all">Events</a>
                        <a href="#gallery"
                            class="nav-link px-4 py-2 text-xs font-medium text-slate-300 hover:text-white hover:bg-white/5 rounded-full transition-all">Gallery</a>
                    </nav>

                    <!-- RIGHT CONTROLS -->
                    <div class="flex items-center gap-3">
                        <!-- Search Trigger -->
                        <button onclick="toggleSearchModal()"
                            class="flex items-center gap-2 px-3 py-2 text-xs text-slate-300 bg-white/5 hover:bg-white/10 border border-white/10 rounded-xl transition-all group">
                            <i data-lucide="search" class="w-4 h-4 text-slate-400 group-hover:text-neon-blue"></i>
                            <span class="hidden sm:inline">Search...</span>
                            <kbd
                                class="hidden md:inline-block px-1.5 py-0.5 text-[10px] font-mono text-slate-400 bg-navy-950/80 border border-white/10 rounded">⌘K</kbd>
                        </button>

                        <!-- Notification Button -->
                        <div class="relative">
                            <button onclick="toggleNotificationDropdown()"
                                class="relative p-2.5 text-slate-300 bg-white/5 hover:bg-white/10 border border-white/10 rounded-xl transition-all">
                                <i data-lucide="bell" class="w-4 h-4"></i>
                                <span
                                    class="absolute top-1.5 right-1.5 w-2 h-2 bg-neon-blue rounded-full animate-ping"></span>
                                <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-neon-blue rounded-full"></span>
                            </button>

                            <!-- Notification Panel -->
                            <div id="notifDropdown"
                                class="hidden absolute right-0 mt-3 w-80 sm:w-96 glass-panel rounded-2xl shadow-2xl p-4 border border-white/10 z-50 animate-fade-in">
                                <div class="flex items-center justify-between pb-3 border-b border-white/10">
                                    <h4 class="text-sm font-bold text-white flex items-center gap-2">
                                        <i data-lucide="bell" class="w-4 h-4 text-neon-blue"></i> Notifications
                                    </h4>
                                    <span
                                        class="text-[10px] px-2 py-0.5 bg-neon-blue/20 text-neon-blue font-semibold rounded-full">3
                                        New</span>
                                </div>
                                <div class="divide-y divide-white/5 max-h-72 overflow-y-auto my-2">
                                    <div class="py-3 px-1 hover:bg-white/5 rounded-lg transition-colors cursor-pointer">
                                        <p class="text-xs font-semibold text-white">CBTL Grand Indonesia Record Revenue
                                        </p>
                                        <p class="text-[11px] text-slate-400 mt-0.5">Daily sales exceeded Rp 85 Million
                                            in single location.</p>
                                        <span class="text-[9px] text-slate-500 mt-1 block">10 mins ago</span>
                                    </div>
                                    <div class="py-3 px-1 hover:bg-white/5 rounded-lg transition-colors cursor-pointer">
                                        <p class="text-xs font-semibold text-white">Wendy's Square Patty Campaign Live
                                        </p>
                                        <p class="text-[11px] text-slate-400 mt-0.5">National promo launched across 65
                                            outlets nationwide.</p>
                                        <span class="text-[9px] text-slate-500 mt-1 block">1 hour ago</span>
                                    </div>
                                    <div class="py-3 px-1 hover:bg-white/5 rounded-lg transition-colors cursor-pointer">
                                        <p class="text-xs font-semibold text-white">Baskin-Robbins New Outlet Opening
                                        </p>
                                        <p class="text-[11px] text-slate-400 mt-0.5">Grand opening at Trans Studio Mall
                                            Makassar.</p>
                                        <span class="text-[9px] text-slate-500 mt-1 block">3 hours ago</span>
                                    </div>
                                </div>
                                <div class="pt-2 text-center border-t border-white/10">
                                    <a href="#events" onclick="toggleNotificationDropdown()"
                                        class="text-xs font-medium text-neon-blue hover:underline">View All Corporate
                                        Activity →</a>
                                </div>
                            </div>
                        </div>

                        <!-- User Profile Badge -->
                        <div class="flex items-center gap-2.5 pl-2 border-l border-white/10">
                            <div class="relative w-9 h-9 rounded-xl overflow-hidden ring-2 ring-neon-blue/40">
                                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&q=80"
                                    alt="Executive" class="w-full h-full object-cover" referrerPolicy="no-referrer">
                            </div>
                            <div class="hidden sm:flex flex-col text-left">
                                <span class="text-xs font-bold text-white leading-tight">Executive Board</span>
                                <span class="text-[10px] text-emerald-400 flex items-center gap-1">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span> Online
                                </span>
                            </div>
                        </div>

                        <!-- Mobile Menu Button -->
                        <button onclick="toggleMobileMenu()"
                            class="lg:hidden p-2 text-slate-300 hover:text-white bg-white/5 rounded-xl">
                            <i data-lucide="menu" class="w-6 h-6"></i>
                        </button>
                    </div>
                </div>

                <!-- MOBILE NAVIGATION MENU DROPDOWN -->
                <div id="mobileMenu" class="hidden lg:hidden py-4 border-t border-white/10 space-y-2">
                    <a href="#dashboard" onclick="toggleMobileMenu()"
                        class="block px-4 py-2.5 text-sm font-semibold text-white bg-white/10 rounded-xl">Dashboard</a>
                    <a href="#brands" onclick="toggleMobileMenu()"
                        class="block px-4 py-2.5 text-sm font-medium text-slate-300 hover:text-white hover:bg-white/5 rounded-xl">Brands</a>
                    <a href="#promotion" onclick="toggleMobileMenu()"
                        class="block px-4 py-2.5 text-sm font-medium text-slate-300 hover:text-white hover:bg-white/5 rounded-xl">Campaign</a>
                    <a href="#analytics" onclick="toggleMobileMenu()"
                        class="block px-4 py-2.5 text-sm font-medium text-slate-300 hover:text-white hover:bg-white/5 rounded-xl">Performance</a>
                    <a href="#news" onclick="toggleMobileMenu()"
                        class="block px-4 py-2.5 text-sm font-medium text-slate-300 hover:text-white hover:bg-white/5 rounded-xl">News</a>
                    <a href="#events" onclick="toggleMobileMenu()"
                        class="block px-4 py-2.5 text-sm font-medium text-slate-300 hover:text-white hover:bg-white/5 rounded-xl">Events</a>
                    <a href="#gallery" onclick="toggleMobileMenu()"
                        class="block px-4 py-2.5 text-sm font-medium text-slate-300 hover:text-white hover:bg-white/5 rounded-xl">Gallery</a>
                </div>
            </div>
        </header>

        <!-- HERO DASHBOARD SECTION -->
        <section id="dashboard" class="relative pt-10 pb-16 md:pt-16 md:pb-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <!-- HERO CONTENT -->
                <div
                    class="relative z-10 glass-panel rounded-3xl p-6 sm:p-10 lg:p-12 overflow-hidden border border-white/10 shadow-2xl">
                    <!-- Background Accent Glows -->
                    <div
                        class="absolute -top-24 -right-24 w-80 h-80 bg-neon-blue/20 rounded-full blur-3xl pointer-events-none">
                    </div>
                    <div
                        class="absolute -bottom-24 -left-24 w-80 h-80 bg-neon-purple/20 rounded-full blur-3xl pointer-events-none">
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                        <div class="lg:col-span-7 space-y-6 text-left">
                            <div
                                class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/5 border border-white/10 backdrop-blur-md">
                                <span class="w-2 h-2 rounded-full bg-neon-blue animate-ping"></span>
                                <span class="text-xs font-semibold text-slate-200">TRANS F&B EXECUTIVE NETWORK
                                    v4.2</span>
                            </div>

                            <h1
                                class="text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-white leading-none">
                                Welcome Back, <br>
                                <span class="text-gradient-cyan">Trans Food & Beverage</span> <br>
                                <span class="font-serif italic font-normal text-slate-300">Official Executive Hub</span>
                            </h1>

                            <p class="text-sm sm:text-base text-slate-300 max-w-xl leading-relaxed">
                                Manage all 6 flagship Trans F&B brands in one ultra-premium executive dashboard.
                                Real-time network sync, revenue intelligence, and omnichannel store operational feeds.
                            </p>

                            <div class="flex flex-wrap items-center gap-4 pt-2">
                                <a href="#brands"
                                    class="px-6 py-3.5 rounded-xl bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 text-white font-bold text-sm shadow-glow-blue hover:shadow-glow-purple hover:scale-105 transition-all flex items-center gap-2">
                                    <i data-lucide="layout-grid" class="w-4 h-4"></i> Explore All Brands
                                </a>
                                <a href="#analytics"
                                    class="px-6 py-3.5 rounded-xl bg-white/5 hover:bg-white/10 text-slate-200 border border-white/10 font-bold text-sm transition-all flex items-center gap-2 backdrop-blur-md">
                                    <i data-lucide="trending-up" class="w-4 h-4 text-neon-blue"></i> Live Analytics
                                </a>
                            </div>
                        </div>

                        <!-- HERO MINI STATUS BOARD -->
                        <div class="lg:col-span-5 grid grid-cols-2 gap-4">
                            <div
                                class="glass-panel p-5 rounded-2xl border border-white/10 hover:border-neon-blue/30 transition-all">
                                <div class="flex items-center justify-between text-slate-400 mb-2">
                                    <span class="text-xs font-medium uppercase tracking-wider">Network Outlets</span>
                                    <i data-lucide="store" class="w-4 h-4 text-neon-blue"></i>
                                </div>
                                <div class="text-2xl font-black text-white">384 <span
                                        class="text-xs text-emerald-400 font-normal">+12 Q3</span></div>
                                <p class="text-[11px] text-slate-400 mt-1">99.8% System Uptime</p>
                            </div>

                            <div
                                class="glass-panel p-5 rounded-2xl border border-white/10 hover:border-neon-purple/30 transition-all">
                                <div class="flex items-center justify-between text-slate-400 mb-2">
                                    <span class="text-xs font-medium uppercase tracking-wider">Daily Orders</span>
                                    <i data-lucide="shopping-bag" class="w-4 h-4 text-neon-purple"></i>
                                </div>
                                <div class="text-2xl font-black text-white">142.8K</div>
                                <p class="text-[11px] text-emerald-400 mt-1">↑ +14.2% vs yesterday</p>
                            </div>

                            <div
                                class="glass-panel p-5 rounded-2xl border border-white/10 hover:border-neon-amber/30 transition-all">
                                <div class="flex items-center justify-between text-slate-400 mb-2">
                                    <span class="text-xs font-medium uppercase tracking-wider">Brand Rating</span>
                                    <i data-lucide="star" class="w-4 h-4 text-neon-amber"></i>
                                </div>
                                <div class="text-2xl font-black text-white">4.91 <span
                                        class="text-xs text-slate-400 font-normal">/ 5.0</span></div>
                                <p class="text-[11px] text-slate-400 mt-1">45,000+ Verified Reviews</p>
                            </div>

                            <div
                                class="glass-panel p-5 rounded-2xl border border-white/10 hover:border-neon-pink/30 transition-all">
                                <div class="flex items-center justify-between text-slate-400 mb-2">
                                    <span class="text-xs font-medium uppercase tracking-wider">App Members</span>
                                    <i data-lucide="users" class="w-4 h-4 text-neon-pink"></i>
                                </div>
                                <div class="text-2xl font-black text-white">2.4M</div>
                                <p class="text-[11px] text-neon-pink mt-1">Trans F&B Club Loyalty</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- OVERVIEW METRIC CARDS (4 PREMIUM CARDS) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-8">

                    <!-- Card 1: Total Brand -->
                    <div class="glass-panel glass-panel-hover p-6 rounded-2xl relative overflow-hidden group">
                        <div
                            class="absolute -right-6 -bottom-6 w-24 h-24 bg-neon-blue/10 rounded-full blur-2xl group-hover:bg-neon-blue/20 transition-all">
                        </div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">Total Brands</span>
                            <div
                                class="w-10 h-10 rounded-xl bg-neon-blue/10 border border-neon-blue/30 flex items-center justify-center text-neon-blue shadow-glow-blue">
                                <i data-lucide="layers" class="w-5 h-5"></i>
                            </div>
                        </div>
                        <div class="space-y-1">
                            <div class="text-3xl font-extrabold text-white tracking-tight count-up" data-target="6">0
                            </div>
                            <div class="flex items-center justify-between text-xs pt-2 border-t border-white/5">
                                <span class="text-slate-400">Flagship Concepts</span>
                                <span class="text-emerald-400 font-bold flex items-center gap-0.5">
                                    <i data-lucide="check-circle-2" class="w-3.5 h-3.5"></i> 100% Active
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2: Total Outlet -->
                    <div class="glass-panel glass-panel-hover p-6 rounded-2xl relative overflow-hidden group">
                        <div
                            class="absolute -right-6 -bottom-6 w-24 h-24 bg-neon-purple/10 rounded-full blur-2xl group-hover:bg-neon-purple/20 transition-all">
                        </div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">Total
                                Outlets</span>
                            <div
                                class="w-10 h-10 rounded-xl bg-neon-purple/10 border border-neon-purple/30 flex items-center justify-center text-neon-purple shadow-glow-purple">
                                <i data-lucide="map-pin" class="w-5 h-5"></i>
                            </div>
                        </div>
                        <div class="space-y-1">
                            <div class="text-3xl font-extrabold text-white tracking-tight count-up" data-target="384">0
                            </div>
                            <div class="flex items-center justify-between text-xs pt-2 border-t border-white/5">
                                <span class="text-slate-400">Indonesia Network</span>
                                <span class="text-emerald-400 font-bold flex items-center gap-0.5">
                                    <i data-lucide="arrow-up-right" class="w-3.5 h-3.5"></i> +12 Outlets Q3
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3: Today's Revenue -->
                    <div class="glass-panel glass-panel-hover p-6 rounded-2xl relative overflow-hidden group">
                        <div
                            class="absolute -right-6 -bottom-6 w-24 h-24 bg-neon-amber/10 rounded-full blur-2xl group-hover:bg-neon-amber/20 transition-all">
                        </div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">Today's
                                Revenue</span>
                            <div
                                class="w-10 h-10 rounded-xl bg-neon-amber/10 border border-neon-amber/30 flex items-center justify-center text-neon-amber shadow-glow-amber">
                                <i data-lucide="wallet" class="w-5 h-5"></i>
                            </div>
                        </div>
                        <div class="space-y-1">
                            <div class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">Rp 1.845B</div>
                            <div class="flex items-center justify-between text-xs pt-2 border-t border-white/5">
                                <span class="text-slate-400">Real-Time Sync</span>
                                <span class="text-emerald-400 font-bold flex items-center gap-0.5">
                                    <i data-lucide="trending-up" class="w-3.5 h-3.5"></i> +18.4%
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4: Customer Satisfaction -->
                    <div class="glass-panel glass-panel-hover p-6 rounded-2xl relative overflow-hidden group">
                        <div
                            class="absolute -right-6 -bottom-6 w-24 h-24 bg-neon-pink/10 rounded-full blur-2xl group-hover:bg-neon-pink/20 transition-all">
                        </div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">CSAT
                                Satisfaction</span>
                            <div
                                class="w-10 h-10 rounded-xl bg-neon-pink/10 border border-neon-pink/30 flex items-center justify-center text-neon-pink shadow-glow-pink">
                                <i data-lucide="smile" class="w-5 h-5"></i>
                            </div>
                        </div>
                        <div class="space-y-1">
                            <div class="text-3xl font-extrabold text-white tracking-tight">98.6%</div>
                            <div class="flex items-center justify-between text-xs pt-2 border-t border-white/5">
                                <span class="text-slate-400">Avg Rating 4.91/5</span>
                                <span class="text-neon-pink font-bold flex items-center gap-0.5">
                                    <i data-lucide="heart" class="w-3.5 h-3.5"></i> Exceptional
                                </span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- SECTION BRANDS (EACH BRAND HAS ITS OWN BESPOKE LANDING PAGE SHOWCASE) -->
        <section id="brands" class="py-16 md:py-24 relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-20">

                <!-- SECTION TITLE -->
                <div class="text-center max-w-3xl mx-auto space-y-3">
                    <span
                        class="px-4 py-1.5 rounded-full text-xs font-bold tracking-widest uppercase bg-neon-blue/10 text-neon-blue border border-neon-blue/30 inline-block">
                        TRANS F&B BRAND PORTFOLIO
                    </span>
                    <h2 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight">
                        Our Flagship <span class="text-gradient-cyan">Culinary Brands</span>
                    </h2>
                    <p class="text-slate-400 text-sm sm:text-base">
                        Every brand represents world-class quality, unmatched dining experiences, and high-performance
                        retail operational standards across Indonesia.
                    </p>
                </div>

                <!-- BRAND 1: THE COFFEE BEAN & TEA LEAF (CBTL) -->
                <div
                    class="reveal relative glass-card-brand rounded-3xl overflow-hidden border border-amber-500/30 shadow-2xl group">
                    <div class="absolute inset-0 z-0">
                        <img src="/src/assets/images/cbtl_banner_1786008502343.jpg" alt="CBTL"
                            class="w-full h-full object-cover opacity-35 group-hover:scale-105 transition-transform duration-700"
                            referrerPolicy="no-referrer">
                        <div class="absolute inset-0 bg-gradient-to-r from-navy-950 via-navy-950/90 to-transparent">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-navy-950 via-transparent to-transparent">
                        </div>
                    </div>

                    <div class="relative z-10 p-8 sm:p-12 lg:p-16 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                        <div class="lg:col-span-7 space-y-6 text-left">
                            <div class="flex items-center gap-3">
                                <span
                                    class="px-3 py-1 bg-amber-500/20 text-amber-300 border border-amber-500/40 text-xs font-bold rounded-full uppercase tracking-wider">
                                    Gourmet Coffee & Fine Tea
                                </span>
                                <span class="text-xs text-slate-400 font-medium">Est. 1963 • Southern California</span>
                            </div>

                            <h3 class="text-3xl sm:text-5xl font-extrabold text-white leading-tight font-serif">
                                The Coffee Bean & <br>
                                <span class="text-gradient-gold">Tea Leaf®</span>
                            </h3>

                            <p class="text-slate-300 text-sm sm:text-base leading-relaxed max-w-xl">
                                Handcrafted espresso drinks, rare estate teas, and the legendary Original Ice Blended®
                                drinks. Serving passionate coffee connoisseurs in over 90+ premium shopping centers and
                                airports in Indonesia.
                            </p>

                            <!-- Live Brand Stats -->
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 py-4 border-y border-amber-500/20">
                                <div>
                                    <p class="text-[10px] uppercase text-amber-200/70 font-semibold tracking-wider">
                                        Today's Sales</p>
                                    <p class="text-lg font-black text-white">Rp 412.5M</p>
                                </div>
                                <div>
                                    <p class="text-[10px] uppercase text-amber-200/70 font-semibold tracking-wider">
                                        Daily Visitors</p>
                                    <p class="text-lg font-black text-white">28,400</p>
                                </div>
                                <div>
                                    <p class="text-[10px] uppercase text-amber-200/70 font-semibold tracking-wider">
                                        Active Outlets</p>
                                    <p class="text-lg font-black text-white">92 Outlets</p>
                                </div>
                                <div>
                                    <p class="text-[10px] uppercase text-amber-200/70 font-semibold tracking-wider">
                                        Rating</p>
                                    <p class="text-lg font-black text-amber-400 flex items-center gap-1">4.9 <i
                                            data-lucide="star" class="w-3.5 h-3.5 fill-amber-400"></i></p>
                                </div>
                            </div>

                            <!-- Featured Active Promo Pill -->
                            <div
                                class="flex items-center gap-3 bg-amber-500/10 border border-amber-500/30 p-3 rounded-xl">
                                <i data-lucide="coffee" class="w-5 h-5 text-amber-400"></i>
                                <span class="text-xs text-amber-200 font-medium"><strong class="text-white">Active
                                        Promo:</strong> Buy 1 Get 1 Hazelnut Ice Blended with Allo Bank Paylater</span>
                            </div>

                            <div class="flex flex-wrap items-center gap-4 pt-2">
                                <button onclick="showBrandDetail('cbtl')"
                                    class="px-6 py-3 rounded-xl bg-gradient-to-r from-amber-600 to-amber-500 text-navy-950 font-extrabold text-xs uppercase tracking-wider shadow-glow-amber hover:scale-105 transition-all">
                                    Explore CBTL Brand Hub →
                                </button>
                                <a href="#promotion"
                                    class="px-5 py-3 rounded-xl bg-white/5 hover:bg-white/10 text-white border border-white/10 font-bold text-xs transition-all">
                                    View Promotions
                                </a>
                            </div>
                        </div>

                        <!-- Right Showcase Card -->
                        <div class="lg:col-span-5 space-y-4">
                            <div class="glass-panel p-6 rounded-2xl border border-amber-500/20 text-left space-y-4">
                                <h4 class="text-xs font-bold text-amber-400 uppercase tracking-widest">Iconic Best
                                    Sellers</h4>
                                <div class="space-y-3">
                                    <div class="flex items-center justify-between p-2.5 bg-white/5 rounded-xl">
                                        <div class="flex items-center gap-3">
                                            <span
                                                class="w-7 h-7 rounded-lg bg-amber-500/20 text-amber-400 font-bold text-xs flex items-center justify-center">01</span>
                                            <span class="text-xs font-semibold text-white">Original Mocha Ice
                                                Blended®</span>
                                        </div>
                                        <span class="text-xs font-bold text-amber-300">Rp 68K</span>
                                    </div>
                                    <div class="flex items-center justify-between p-2.5 bg-white/5 rounded-xl">
                                        <div class="flex items-center gap-3">
                                            <span
                                                class="w-7 h-7 rounded-lg bg-amber-500/20 text-amber-400 font-bold text-xs flex items-center justify-center">02</span>
                                            <span class="text-xs font-semibold text-white">Caramel Macchiato
                                                Latte</span>
                                        </div>
                                        <span class="text-xs font-bold text-amber-300">Rp 62K</span>
                                    </div>
                                    <div class="flex items-center justify-between p-2.5 bg-white/5 rounded-xl">
                                        <div class="flex items-center gap-3">
                                            <span
                                                class="w-7 h-7 rounded-lg bg-amber-500/20 text-amber-400 font-bold text-xs flex items-center justify-center">03</span>
                                            <span class="text-xs font-semibold text-white">Genmaicha Green Tea</span>
                                        </div>
                                        <span class="text-xs font-bold text-amber-300">Rp 48K</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- BRAND 2: WENDY'S -->
                <div
                    class="reveal relative glass-card-brand rounded-3xl overflow-hidden border border-red-500/30 shadow-2xl group">
                    <div class="absolute inset-0 z-0">
                        <img src="/src/assets/images/wendys_banner_1786008515555.jpg" alt="Wendy's"
                            class="w-full h-full object-cover opacity-35 group-hover:scale-105 transition-transform duration-700"
                            referrerPolicy="no-referrer">
                        <div class="absolute inset-0 bg-gradient-to-r from-navy-950 via-navy-950/90 to-transparent">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-navy-950 via-transparent to-transparent">
                        </div>
                    </div>

                    <div class="relative z-10 p-8 sm:p-12 lg:p-16 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                        <div class="lg:col-span-7 space-y-6 text-left">
                            <div class="flex items-center gap-3">
                                <span
                                    class="px-3 py-1 bg-red-600/30 text-red-400 border border-red-500/40 text-xs font-bold rounded-full uppercase tracking-wider">
                                    100% Fresh Beef Burger
                                </span>
                                <span class="text-xs text-slate-400 font-medium">Quality Is Our Recipe</span>
                            </div>

                            <h3 class="text-3xl sm:text-5xl font-extrabold text-white leading-tight">
                                Wendy's® <br>
                                <span class="text-red-500">Square Patty Double Stack</span>
                            </h3>

                            <p class="text-slate-300 text-sm sm:text-base leading-relaxed max-w-xl">
                                Real, fresh, never-frozen square beef patties, thick-cut Applewood smoked bacon, and
                                creamy Frosty® desserts. Operating 68 high-performing quick-service restaurants
                                nationwide.
                            </p>

                            <!-- Live Brand Stats -->
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 py-4 border-y border-red-500/20">
                                <div>
                                    <p class="text-[10px] uppercase text-red-300/70 font-semibold tracking-wider">
                                        Today's Sales</p>
                                    <p class="text-lg font-black text-white">Rp 385.2M</p>
                                </div>
                                <div>
                                    <p class="text-[10px] uppercase text-red-300/70 font-semibold tracking-wider">Orders
                                        Served</p>
                                    <p class="text-lg font-black text-white">14,200</p>
                                </div>
                                <div>
                                    <p class="text-[10px] uppercase text-red-300/70 font-semibold tracking-wider">
                                        Outlets</p>
                                    <p class="text-lg font-black text-white">68 Stores</p>
                                </div>
                                <div>
                                    <p class="text-[10px] uppercase text-red-300/70 font-semibold tracking-wider">Rating
                                    </p>
                                    <p class="text-lg font-black text-yellow-400 flex items-center gap-1">4.8 <i
                                            data-lucide="star" class="w-3.5 h-3.5 fill-yellow-400"></i></p>
                                </div>
                            </div>

                            <!-- Featured Active Promo -->
                            <div class="flex items-center gap-3 bg-red-500/10 border border-red-500/30 p-3 rounded-xl">
                                <i data-lucide="flame" class="w-5 h-5 text-red-500"></i>
                                <span class="text-xs text-red-200 font-medium"><strong class="text-white">HOT
                                        DEAL:</strong> Double Cheeseburger Combo + Frosty for Rp 49.000</span>
                            </div>

                            <div class="flex flex-wrap items-center gap-4 pt-2">
                                <button onclick="showBrandDetail('wendys')"
                                    class="px-6 py-3 rounded-xl bg-gradient-to-r from-red-600 to-amber-500 text-white font-extrabold text-xs uppercase tracking-wider shadow-lg hover:scale-105 transition-all">
                                    Explore Wendy's Hub →
                                </button>
                                <a href="#promotion"
                                    class="px-5 py-3 rounded-xl bg-white/5 hover:bg-white/10 text-white border border-white/10 font-bold text-xs transition-all">
                                    Campaign Offers
                                </a>
                            </div>
                        </div>

                        <!-- Right Showcase Card -->
                        <div class="lg:col-span-5 space-y-4">
                            <div class="glass-panel p-6 rounded-2xl border border-red-500/20 text-left space-y-4">
                                <h4 class="text-xs font-bold text-red-400 uppercase tracking-widest">Customer Fan
                                    Favorites</h4>
                                <div class="space-y-3">
                                    <div class="flex items-center justify-between p-2.5 bg-white/5 rounded-xl">
                                        <span class="text-xs font-semibold text-white">Dave's Double Beef Stack</span>
                                        <span class="text-xs font-bold text-red-400">Rp 75K</span>
                                    </div>
                                    <div class="flex items-center justify-between p-2.5 bg-white/5 rounded-xl">
                                        <span class="text-xs font-semibold text-white">Baconator Double Patty</span>
                                        <span class="text-xs font-bold text-red-400">Rp 88K</span>
                                    </div>
                                    <div class="flex items-center justify-between p-2.5 bg-white/5 rounded-xl">
                                        <span class="text-xs font-semibold text-white">Classic Chocolate Frosty®</span>
                                        <span class="text-xs font-bold text-red-400">Rp 28K</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- BRAND 3: BASKIN-ROBBINS -->
                <div
                    class="reveal relative glass-card-brand rounded-3xl overflow-hidden border border-pink-500/30 shadow-2xl group">
                    <div class="absolute inset-0 z-0">
                        <img src="/src/assets/images/baskin_banner_1786008552083.jpg" alt="Baskin-Robbins"
                            class="w-full h-full object-cover opacity-35 group-hover:scale-105 transition-transform duration-700"
                            referrerPolicy="no-referrer">
                        <div class="absolute inset-0 bg-gradient-to-r from-navy-950 via-navy-950/90 to-transparent">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-navy-950 via-transparent to-transparent">
                        </div>
                    </div>

                    <div class="relative z-10 p-8 sm:p-12 lg:p-16 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                        <div class="lg:col-span-7 space-y-6 text-left">
                            <div class="flex items-center gap-3">
                                <span
                                    class="px-3 py-1 bg-pink-500/20 text-pink-300 border border-pink-500/40 text-xs font-bold rounded-full uppercase tracking-wider">
                                    31 Flavors Premium Ice Cream
                                </span>
                                <span class="text-xs text-slate-400 font-medium">World's Largest Ice Cream
                                    Specialty</span>
                            </div>

                            <h3 class="text-3xl sm:text-5xl font-extrabold text-white leading-tight">
                                Baskin-Robbins® <br>
                                <span class="text-gradient-purple">31 Flavors Festival</span>
                            </h3>

                            <p class="text-slate-300 text-sm sm:text-base leading-relaxed max-w-xl">
                                A different flavor for every day of the month! Premium imported ice creams, custom ice
                                cream cakes, and sundaes across 120+ parlors nationwide.
                            </p>

                            <!-- Live Brand Stats -->
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 py-4 border-y border-pink-500/20">
                                <div>
                                    <p class="text-[10px] uppercase text-pink-200/70 font-semibold tracking-wider">
                                        Today's Sales</p>
                                    <p class="text-lg font-black text-white">Rp 315.8M</p>
                                </div>
                                <div>
                                    <p class="text-[10px] uppercase text-pink-200/70 font-semibold tracking-wider">
                                        Scoops Served</p>
                                    <p class="text-lg font-black text-white">31,500+</p>
                                </div>
                                <div>
                                    <p class="text-[10px] uppercase text-pink-200/70 font-semibold tracking-wider">
                                        Stores</p>
                                    <p class="text-lg font-black text-white">124 Parlors</p>
                                </div>
                                <div>
                                    <p class="text-[10px] uppercase text-pink-200/70 font-semibold tracking-wider">
                                        Rating</p>
                                    <p class="text-lg font-black text-pink-400 flex items-center gap-1">4.9 <i
                                            data-lucide="star" class="w-3.5 h-3.5 fill-pink-400"></i></p>
                                </div>
                            </div>

                            <div
                                class="flex items-center gap-3 bg-pink-500/10 border border-pink-500/30 p-3 rounded-xl">
                                <i data-lucide="sparkles" class="w-5 h-5 text-pink-400"></i>
                                <span class="text-xs text-pink-200 font-medium"><strong class="text-white">31st
                                        Special:</strong> 31% OFF Fresh Pack Pints on 31st of every month</span>
                            </div>

                            <div class="flex flex-wrap items-center gap-4 pt-2">
                                <button onclick="showBrandDetail('baskin')"
                                    class="px-6 py-3 rounded-xl bg-gradient-to-r from-pink-500 to-purple-600 text-white font-extrabold text-xs uppercase tracking-wider shadow-glow-pink hover:scale-105 transition-all">
                                    Explore Baskin Hub →
                                </button>
                                <a href="#promotion"
                                    class="px-5 py-3 rounded-xl bg-white/5 hover:bg-white/10 text-white border border-white/10 font-bold text-xs transition-all">
                                    Flavors List
                                </a>
                            </div>
                        </div>

                        <!-- Right Showcase Card -->
                        <div class="lg:col-span-5 space-y-4">
                            <div class="glass-panel p-6 rounded-2xl border border-pink-500/20 text-left space-y-4">
                                <h4 class="text-xs font-bold text-pink-400 uppercase tracking-widest">Trending Flavors
                                </h4>
                                <div class="space-y-3">
                                    <div class="flex items-center justify-between p-2.5 bg-white/5 rounded-xl">
                                        <span class="text-xs font-semibold text-white">Jamoca® Almond Fudge</span>
                                        <span class="text-xs font-bold text-pink-300">Top #1</span>
                                    </div>
                                    <div class="flex items-center justify-between p-2.5 bg-white/5 rounded-xl">
                                        <span class="text-xs font-semibold text-white">Mint Chocolate Chip</span>
                                        <span class="text-xs font-bold text-pink-300">Top #2</span>
                                    </div>
                                    <div class="flex items-center justify-between p-2.5 bg-white/5 rounded-xl">
                                        <span class="text-xs font-semibold text-white">Love Potion #31</span>
                                        <span class="text-xs font-bold text-pink-300">Seasonal</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- BRAND 4: WARUNG WARDANI BALI -->
                <div
                    class="reveal relative glass-card-brand rounded-3xl overflow-hidden border border-emerald-500/30 shadow-2xl group">
                    <div class="absolute inset-0 z-0">
                        <img src="/src/assets/images/wardani_banner_1786008568412.jpg" alt="Warung Wardani"
                            class="w-full h-full object-cover opacity-35 group-hover:scale-105 transition-transform duration-700"
                            referrerPolicy="no-referrer">
                        <div class="absolute inset-0 bg-gradient-to-r from-navy-950 via-navy-950/90 to-transparent">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-navy-950 via-transparent to-transparent">
                        </div>
                    </div>

                    <div class="relative z-10 p-8 sm:p-12 lg:p-16 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                        <div class="lg:col-span-7 space-y-6 text-left">
                            <div class="flex items-center gap-3">
                                <span
                                    class="px-3 py-1 bg-emerald-500/20 text-emerald-300 border border-emerald-500/40 text-xs font-bold rounded-full uppercase tracking-wider">
                                    Legendaris Kuliner Authentic Bali
                                </span>
                                <span class="text-xs text-slate-400 font-medium">Heritage Recipe Since 1980</span>
                            </div>

                            <h3 class="text-3xl sm:text-5xl font-extrabold text-white leading-tight font-serif">
                                Warung Wardani <br>
                                <span class="text-emerald-400">Nusantara Heritage</span>
                            </h3>

                            <p class="text-slate-300 text-sm sm:text-base leading-relaxed max-w-xl">
                                Famous Denpasar culinary legend bringing authentic Nasi Campur 7 Lauk Bali with Sate
                                Lilit, Sambal Matah, and Dendeng Sapi to major Indonesian cities.
                            </p>

                            <!-- Live Brand Stats -->
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 py-4 border-y border-emerald-500/20">
                                <div>
                                    <p class="text-[10px] uppercase text-emerald-200/70 font-semibold tracking-wider">
                                        Today's Revenue</p>
                                    <p class="text-lg font-black text-white">Rp 245.1M</p>
                                </div>
                                <div>
                                    <p class="text-[10px] uppercase text-emerald-200/70 font-semibold tracking-wider">
                                        Daily Diners</p>
                                    <p class="text-lg font-black text-white">8,900</p>
                                </div>
                                <div>
                                    <p class="text-[10px] uppercase text-emerald-200/70 font-semibold tracking-wider">
                                        Locations</p>
                                    <p class="text-lg font-black text-white">18 Outlets</p>
                                </div>
                                <div>
                                    <p class="text-[10px] uppercase text-emerald-200/70 font-semibold tracking-wider">
                                        Rating</p>
                                    <p class="text-lg font-black text-emerald-400 flex items-center gap-1">4.95 <i
                                            data-lucide="star" class="w-3.5 h-3.5 fill-emerald-400"></i></p>
                                </div>
                            </div>

                            <div
                                class="flex items-center gap-3 bg-emerald-500/10 border border-emerald-500/30 p-3 rounded-xl">
                                <i data-lucide="utensils" class="w-5 h-5 text-emerald-400"></i>
                                <span class="text-xs text-emerald-200 font-medium"><strong class="text-white">Heritage
                                        Favorite:</strong> Nasi Campur Wardani Komplit with Sate Sapi & Sate
                                    Lilit</span>
                            </div>

                            <div class="flex flex-wrap items-center gap-4 pt-2">
                                <button onclick="showBrandDetail('wardani')"
                                    class="px-6 py-3 rounded-xl bg-gradient-to-r from-emerald-600 to-teal-500 text-white font-extrabold text-xs uppercase tracking-wider shadow-lg hover:scale-105 transition-all">
                                    Explore Wardani Hub →
                                </button>
                            </div>
                        </div>

                        <!-- Right Showcase Card -->
                        <div class="lg:col-span-5 space-y-4">
                            <div class="glass-panel p-6 rounded-2xl border border-emerald-500/20 text-left space-y-4">
                                <h4 class="text-xs font-bold text-emerald-400 uppercase tracking-widest">Heritage Dish
                                    Highlights</h4>
                                <div class="space-y-3">
                                    <div class="flex items-center justify-between p-2.5 bg-white/5 rounded-xl">
                                        <span class="text-xs font-semibold text-white">Nasi Campur 7 Lauk Bali</span>
                                        <span class="text-xs font-bold text-emerald-300">Rp 78K</span>
                                    </div>
                                    <div class="flex items-center justify-between p-2.5 bg-white/5 rounded-xl">
                                        <span class="text-xs font-semibold text-white">Sate Lilit Sapi khas
                                            Denpasar</span>
                                        <span class="text-xs font-bold text-emerald-300">Rp 52K</span>
                                    </div>
                                    <div class="flex items-center justify-between p-2.5 bg-white/5 rounded-xl">
                                        <span class="text-xs font-semibold text-white">Ayam Suwir Sambal Matah</span>
                                        <span class="text-xs font-bold text-emerald-300">Rp 45K</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- BRAND 5: GYUKATSU NIKU-NIKU -->
                <div
                    class="reveal relative glass-card-brand rounded-3xl overflow-hidden border border-slate-700 shadow-2xl group">
                    <div class="absolute inset-0 z-0">
                        <img src="/src/assets/images/gyukatsu_banner_1786008586037.jpg" alt="Gyukatsu"
                            class="w-full h-full object-cover opacity-35 group-hover:scale-105 transition-transform duration-700"
                            referrerPolicy="no-referrer">
                        <div class="absolute inset-0 bg-gradient-to-r from-navy-950 via-navy-950/90 to-transparent">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-navy-950 via-transparent to-transparent">
                        </div>
                    </div>

                    <div class="relative z-10 p-8 sm:p-12 lg:p-16 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                        <div class="lg:col-span-7 space-y-6 text-left">
                            <div class="flex items-center gap-3">
                                <span
                                    class="px-3 py-1 bg-white/10 text-slate-200 border border-white/20 text-xs font-bold rounded-full uppercase tracking-wider">
                                    Japanese Wagyu Dining
                                </span>
                                <span class="text-xs text-slate-400 font-medium">Sizzling Hot Stone Cutlet</span>
                            </div>

                            <h3 class="text-3xl sm:text-5xl font-extrabold text-white leading-tight">
                                Gyukatsu Niku-Niku® <br>
                                <span class="text-red-400 font-serif italic">Premium Ishiyaki</span>
                            </h3>

                            <p class="text-slate-300 text-sm sm:text-base leading-relaxed max-w-xl">
                                Premium Japanese crispy Wagyu beef cutlets served medium-rare for guests to sizzle on
                                personal volcanic hot stones with fresh wasabi and soy dipping sauces.
                            </p>

                            <!-- Live Brand Stats -->
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 py-4 border-y border-white/10">
                                <div>
                                    <p class="text-[10px] uppercase text-slate-400 font-semibold tracking-wider">Today's
                                        Sales</p>
                                    <p class="text-lg font-black text-white">Rp 288.4M</p>
                                </div>
                                <div>
                                    <p class="text-[10px] uppercase text-slate-400 font-semibold tracking-wider">Tables
                                        Reserved</p>
                                    <p class="text-lg font-black text-emerald-400">100% Full</p>
                                </div>
                                <div>
                                    <p class="text-[10px] uppercase text-slate-400 font-semibold tracking-wider">Outlets
                                    </p>
                                    <p class="text-lg font-black text-white">14 Locations</p>
                                </div>
                                <div>
                                    <p class="text-[10px] uppercase text-slate-400 font-semibold tracking-wider">Rating
                                    </p>
                                    <p class="text-lg font-black text-yellow-400 flex items-center gap-1">4.9 <i
                                            data-lucide="star" class="w-3.5 h-3.5 fill-yellow-400"></i></p>
                                </div>
                            </div>

                            <div class="flex flex-wrap items-center gap-4 pt-2">
                                <button onclick="showBrandDetail('gyukatsu')"
                                    class="px-6 py-3 rounded-xl bg-white text-navy-950 font-extrabold text-xs uppercase tracking-wider hover:bg-slate-200 hover:scale-105 transition-all">
                                    Explore Gyukatsu Hub →
                                </button>
                            </div>
                        </div>

                        <!-- Right Showcase Card -->
                        <div class="lg:col-span-5 space-y-4">
                            <div class="glass-panel p-6 rounded-2xl border border-white/10 text-left space-y-4">
                                <h4 class="text-xs font-bold text-slate-300 uppercase tracking-widest">Sizzling Sets
                                </h4>
                                <div class="space-y-3">
                                    <div class="flex items-center justify-between p-2.5 bg-white/5 rounded-xl">
                                        <span class="text-xs font-semibold text-white">Sirloin Wagyu Gyukatsu Set</span>
                                        <span class="text-xs font-bold text-white">Rp 148K</span>
                                    </div>
                                    <div class="flex items-center justify-between p-2.5 bg-white/5 rounded-xl">
                                        <span class="text-xs font-semibold text-white">Tenderloin Prime Gyukatsu
                                            Set</span>
                                        <span class="text-xs font-bold text-white">Rp 185K</span>
                                    </div>
                                    <div class="flex items-center justify-between p-2.5 bg-white/5 rounded-xl">
                                        <span class="text-xs font-semibold text-white">Truffle Gyukatsu Donburi</span>
                                        <span class="text-xs font-bold text-white">Rp 128K</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- BRAND 6: TASTY KITCHEN -->
                <div
                    class="reveal relative glass-card-brand rounded-3xl overflow-hidden border border-red-500/30 shadow-2xl group">
                    <div class="absolute inset-0 z-0">
                        <img src="/src/assets/images/tasty_banner_1786008602789.jpg" alt="Tasty Kitchen"
                            class="w-full h-full object-cover opacity-35 group-hover:scale-105 transition-transform duration-700"
                            referrerPolicy="no-referrer">
                        <div class="absolute inset-0 bg-gradient-to-r from-navy-950 via-navy-950/90 to-transparent">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-navy-950 via-transparent to-transparent">
                        </div>
                    </div>

                    <div class="relative z-10 p-8 sm:p-12 lg:p-16 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                        <div class="lg:col-span-7 space-y-6 text-left">
                            <div class="flex items-center gap-3">
                                <span
                                    class="px-3 py-1 bg-red-500/20 text-red-300 border border-red-500/40 text-xs font-bold rounded-full uppercase tracking-wider">
                                    Hong Kong Dim Sum & Roast
                                </span>
                                <span class="text-xs text-slate-400 font-medium">Master Chef Asian Cuisine</span>
                            </div>

                            <h3 class="text-3xl sm:text-5xl font-extrabold text-white leading-tight">
                                Tasty Kitchen® <br>
                                <span class="text-yellow-400 font-serif">Hong Kong Delicacies</span>
                            </h3>

                            <p class="text-slate-300 text-sm sm:text-base leading-relaxed max-w-xl">
                                Steaming handcrafted Dim Sum baskets, traditional HK Roasted Duck, and wok-hei noodles
                                served in a vibrant modern Asian ambiance.
                            </p>

                            <!-- Live Brand Stats -->
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 py-4 border-y border-red-500/20">
                                <div>
                                    <p class="text-[10px] uppercase text-red-200/70 font-semibold tracking-wider">
                                        Today's Revenue</p>
                                    <p class="text-lg font-black text-white">Rp 198.9M</p>
                                </div>
                                <div>
                                    <p class="text-[10px] uppercase text-red-200/70 font-semibold tracking-wider">Dim
                                        Sum Baskets</p>
                                    <p class="text-lg font-black text-white">12,400</p>
                                </div>
                                <div>
                                    <p class="text-[10px] uppercase text-red-200/70 font-semibold tracking-wider">
                                        Outlets</p>
                                    <p class="text-lg font-black text-white">16 Stores</p>
                                </div>
                                <div>
                                    <p class="text-[10px] uppercase text-red-200/70 font-semibold tracking-wider">Rating
                                    </p>
                                    <p class="text-lg font-black text-yellow-400 flex items-center gap-1">4.85 <i
                                            data-lucide="star" class="w-3.5 h-3.5 fill-yellow-400"></i></p>
                                </div>
                            </div>

                            <div class="flex flex-wrap items-center gap-4 pt-2">
                                <button onclick="showBrandDetail('tasty')"
                                    class="px-6 py-3 rounded-xl bg-gradient-to-r from-red-600 to-amber-500 text-white font-extrabold text-xs uppercase tracking-wider shadow-lg hover:scale-105 transition-all">
                                    Explore Tasty Kitchen Hub →
                                </button>
                            </div>
                        </div>

                        <!-- Right Showcase Card -->
                        <div class="lg:col-span-5 space-y-4">
                            <div class="glass-panel p-6 rounded-2xl border border-red-500/20 text-left space-y-4">
                                <h4 class="text-xs font-bold text-red-400 uppercase tracking-widest">Chef
                                    Recommendations</h4>
                                <div class="space-y-3">
                                    <div class="flex items-center justify-between p-2.5 bg-white/5 rounded-xl">
                                        <span class="text-xs font-semibold text-white">Signature Steamed
                                            Xiaolongbao</span>
                                        <span class="text-xs font-bold text-amber-300">Rp 42K</span>
                                    </div>
                                    <div class="flex items-center justify-between p-2.5 bg-white/5 rounded-xl">
                                        <span class="text-xs font-semibold text-white">HK Roasted Peking Duck
                                            Half</span>
                                        <span class="text-xs font-bold text-amber-300">Rp 195K</span>
                                    </div>
                                    <div class="flex items-center justify-between p-2.5 bg-white/5 rounded-xl">
                                        <span class="text-xs font-semibold text-white">Crispy Pork Belly Char Siu</span>
                                        <span class="text-xs font-bold text-amber-300">Rp 88K</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- PROMOTION SECTION (AUTO SLIDER CAROUSEL) -->
        <section id="promotion" class="py-16 bg-navy-900/40 relative border-y border-white/5">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
                <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4">
                    <div class="text-left space-y-2">
                        <span
                            class="px-3 py-1 rounded-full text-xs font-bold tracking-widest uppercase bg-neon-purple/10 text-neon-purple border border-neon-purple/30">
                            SPECIAL CAMPAIGNS & PROMOTIONS
                        </span>
                        <h2 class="text-2xl sm:text-4xl font-extrabold text-white">Active <span
                                class="text-gradient-purple">National Offers</span></h2>
                    </div>
                    <div class="flex items-center gap-2">
                        <button onclick="prevPromo()"
                            class="p-3 rounded-xl bg-white/5 hover:bg-white/10 text-white border border-white/10 transition-all">
                            <i data-lucide="chevron-left" class="w-5 h-5"></i>
                        </button>
                        <button onclick="nextPromo()"
                            class="p-3 rounded-xl bg-white/5 hover:bg-white/10 text-white border border-white/10 transition-all">
                            <i data-lucide="chevron-right" class="w-5 h-5"></i>
                        </button>
                    </div>
                </div>

                <!-- PROMO CAROUSEL WRAPPER -->
                <div class="relative overflow-hidden rounded-3xl">
                    <div id="promoSlider" class="flex transition-transform duration-500 ease-in-out gap-6">

                        <!-- Promo 1 -->
                        <div
                            class="min-w-full md:min-w-[48%] lg:min-w-[32%] glass-panel p-6 rounded-3xl border border-white/10 space-y-4 hover:border-neon-blue/40 transition-all">
                            <div class="relative h-48 rounded-2xl overflow-hidden">
                                <img src="/src/assets/images/cbtl_banner_1786008502343.jpg" alt="Promo CBTL"
                                    class="w-full h-full object-cover" referrerPolicy="no-referrer">
                                <span
                                    class="absolute top-3 left-3 px-3 py-1 bg-amber-500 text-navy-950 font-black text-xs rounded-full shadow-lg">BUY
                                    1 GET 1</span>
                            </div>
                            <div class="text-left space-y-2">
                                <span class="text-[11px] text-amber-400 font-bold uppercase tracking-wider">The Coffee
                                    Bean & Tea Leaf</span>
                                <h3 class="text-lg font-bold text-white">Allo Bank Paylater 1-for-1 Special</h3>
                                <p class="text-xs text-slate-300">Enjoy Buy 1 Get 1 Free Ice Blended for all Allo Bank
                                    prime members across all outlets.</p>
                            </div>
                            <button onclick="claimVoucher('CBTL Buy 1 Get 1')"
                                class="w-full py-2.5 rounded-xl bg-amber-500 text-navy-950 font-bold text-xs hover:bg-amber-400 transition-all">
                                Claim Digital Voucher
                            </button>
                        </div>

                        <!-- Promo 2 -->
                        <div
                            class="min-w-full md:min-w-[48%] lg:min-w-[32%] glass-panel p-6 rounded-3xl border border-white/10 space-y-4 hover:border-red-500/40 transition-all">
                            <div class="relative h-48 rounded-2xl overflow-hidden">
                                <img src="/src/assets/images/wendys_banner_1786008515555.jpg" alt="Promo Wendy's"
                                    class="w-full h-full object-cover" referrerPolicy="no-referrer">
                                <span
                                    class="absolute top-3 left-3 px-3 py-1 bg-red-600 text-white font-black text-xs rounded-full shadow-lg">30%
                                    DISCOUNT</span>
                            </div>
                            <div class="text-left space-y-2">
                                <span class="text-[11px] text-red-400 font-bold uppercase tracking-wider">Wendy's
                                    Burgers</span>
                                <h3 class="text-lg font-bold text-white">Square Patty Stack Feast</h3>
                                <p class="text-xs text-slate-300">Get 30% discount on all Dave's Double Burger Combo
                                    meals every weekend.</p>
                            </div>
                            <button onclick="claimVoucher('Wendy\'s 30% Off')"
                                class="w-full py-2.5 rounded-xl bg-red-600 text-white font-bold text-xs hover:bg-red-500 transition-all">
                                Claim Digital Voucher
                            </button>
                        </div>

                        <!-- Promo 3 -->
                        <div
                            class="min-w-full md:min-w-[48%] lg:min-w-[32%] glass-panel p-6 rounded-3xl border border-white/10 space-y-4 hover:border-pink-500/40 transition-all">
                            <div class="relative h-48 rounded-2xl overflow-hidden">
                                <img src="/src/assets/images/baskin_banner_1786008552083.jpg" alt="Promo Baskin"
                                    class="w-full h-full object-cover" referrerPolicy="no-referrer">
                                <span
                                    class="absolute top-3 left-3 px-3 py-1 bg-pink-500 text-white font-black text-xs rounded-full shadow-lg">31%
                                    OFF PINTS</span>
                            </div>
                            <div class="text-left space-y-2">
                                <span
                                    class="text-[11px] text-pink-400 font-bold uppercase tracking-wider">Baskin-Robbins</span>
                                <h3 class="text-lg font-bold text-white">31st Fresh Pack Festival</h3>
                                <p class="text-xs text-slate-300">Special 31% discount on Fresh Pack Hand-Packed Pints
                                    on every 31st of the month.</p>
                            </div>
                            <button onclick="claimVoucher('Baskin 31% Off')"
                                class="w-full py-2.5 rounded-xl bg-pink-500 text-white font-bold text-xs hover:bg-pink-400 transition-all">
                                Claim Digital Voucher
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- ANALYTICS & PERFORMANCE SECTION -->
        <section id="analytics" class="py-16 md:py-24 relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
                <div class="text-center max-w-2xl mx-auto space-y-3">
                    <span
                        class="px-4 py-1.5 rounded-full text-xs font-bold tracking-widest uppercase bg-neon-blue/10 text-neon-blue border border-neon-blue/30">
                        EXECUTIVE REVENUE INTELLIGENCE
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white">Financial & Sales <span
                            class="text-gradient-cyan">Performance</span></h2>
                    <p class="text-slate-400 text-xs sm:text-sm">Real-time revenue telemetry across all 6 Trans F&B
                        brand divisions in 2026.</p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                    <!-- Revenue Growth Chart (Chart.js) -->
                    <div class="lg:col-span-8 glass-panel p-6 sm:p-8 rounded-3xl border border-white/10 space-y-6">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                            <div class="text-left">
                                <h3 class="text-lg font-bold text-white">Monthly Revenue Growth (in Billions IDR)</h3>
                                <p class="text-xs text-slate-400">Aggregated gross network revenue 2026</p>
                            </div>
                            <div class="flex items-center gap-1 bg-white/5 p-1 rounded-xl border border-white/10">
                                <button onclick="updateChartPeriod('monthly')" id="btnMonthly"
                                    class="px-3 py-1 text-xs font-bold text-white bg-blue-600 rounded-lg">Monthly</button>
                                <button onclick="updateChartPeriod('weekly')" id="btnWeekly"
                                    class="px-3 py-1 text-xs font-medium text-slate-400 hover:text-white rounded-lg">Weekly</button>
                            </div>
                        </div>

                        <!-- Canvas Chart Container -->
                        <div class="h-72 w-full relative">
                            <canvas id="revenueChart"></canvas>
                        </div>
                    </div>

                    <!-- Revenue Share By Brand (Doughnut Chart) -->
                    <div
                        class="lg:col-span-4 glass-panel p-6 sm:p-8 rounded-3xl border border-white/10 space-y-6 text-left">
                        <div>
                            <h3 class="text-lg font-bold text-white">Revenue Share by Brand</h3>
                            <p class="text-xs text-slate-400">Current Q3 Sales Mix</p>
                        </div>

                        <div class="h-60 relative flex items-center justify-center">
                            <canvas id="brandDoughnutChart"></canvas>
                        </div>

                        <div class="space-y-2 pt-2 border-t border-white/10 text-xs">
                            <div class="flex justify-between text-slate-300">
                                <span class="flex items-center gap-2"><span
                                        class="w-2.5 h-2.5 rounded-full bg-amber-500"></span> CBTL Coffee</span>
                                <span class="font-bold text-white">32.5%</span>
                            </div>
                            <div class="flex justify-between text-slate-300">
                                <span class="flex items-center gap-2"><span
                                        class="w-2.5 h-2.5 rounded-full bg-red-600"></span> Wendy's Burgers</span>
                                <span class="font-bold text-white">28.4%</span>
                            </div>
                            <div class="flex justify-between text-slate-300">
                                <span class="flex items-center gap-2"><span
                                        class="w-2.5 h-2.5 rounded-full bg-pink-500"></span> Baskin-Robbins</span>
                                <span class="font-bold text-white">18.2%</span>
                            </div>
                            <div class="flex justify-between text-slate-300">
                                <span class="flex items-center gap-2"><span
                                        class="w-2.5 h-2.5 rounded-full bg-emerald-500"></span> Warung Wardani</span>
                                <span class="font-bold text-white">11.1%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- LATEST NEWS SECTION -->
        <section id="news" class="py-16 bg-navy-900/30 border-t border-white/5 relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
                <div class="text-center max-w-2xl mx-auto space-y-2">
                    <span
                        class="px-3 py-1 rounded-full text-xs font-bold tracking-widest uppercase bg-neon-blue/10 text-neon-blue border border-neon-blue/30">
                        PRESS & MEDIA CENTER
                    </span>
                    <h2 class="text-3xl font-extrabold text-white">Trans F&B <span class="text-gradient-cyan">Latest
                            News</span></h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-left">
                    <!-- Article 1 -->
                    <div
                        class="glass-panel rounded-2xl overflow-hidden border border-white/10 group hover:border-neon-blue/40 transition-all flex flex-col justify-between">
                        <div class="relative h-48 overflow-hidden">
                            <img src="/src/assets/images/cbtl_banner_1786008502343.jpg" alt="News 1"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                referrerPolicy="no-referrer">
                            <span
                                class="absolute top-3 left-3 px-2.5 py-1 bg-navy-950/80 backdrop-blur-md text-neon-blue font-bold text-[10px] rounded-lg border border-neon-blue/30">EXPANSION</span>
                        </div>
                        <div class="p-6 space-y-3 flex-1 flex flex-col justify-between">
                            <div class="space-y-2">
                                <span class="text-[10px] text-slate-400">August 05, 2026 • Trans F&B Press</span>
                                <h3 class="text-base font-bold text-white group-hover:text-neon-blue transition-colors">
                                    Trans F&B Opens 15 New Flagship Stores in Major Indonesian Airports</h3>
                                <p class="text-xs text-slate-400 line-clamp-2">Expanding travel retail touchpoints with
                                    express CBTL and Wendy's drive-thru locations in Bali and Jakarta.</p>
                            </div>
                            <button onclick="readNews('Airport Expansion 2026')"
                                class="text-xs font-bold text-neon-blue flex items-center gap-1 pt-2 hover:underline">
                                Read Full Article →
                            </button>
                        </div>
                    </div>

                    <!-- Article 2 -->
                    <div
                        class="glass-panel rounded-2xl overflow-hidden border border-white/10 group hover:border-neon-purple/40 transition-all flex flex-col justify-between">
                        <div class="relative h-48 overflow-hidden">
                            <img src="/src/assets/images/gyukatsu_banner_1786008586037.jpg" alt="News 2"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                referrerPolicy="no-referrer">
                            <span
                                class="absolute top-3 left-3 px-2.5 py-1 bg-navy-950/80 backdrop-blur-md text-neon-purple font-bold text-[10px] rounded-lg border border-neon-purple/30">CULINARY
                                INNOVATION</span>
                        </div>
                        <div class="p-6 space-y-3 flex-1 flex flex-col justify-between">
                            <div class="space-y-2">
                                <span class="text-[10px] text-slate-400">August 02, 2026 • Culinary Desk</span>
                                <h3
                                    class="text-base font-bold text-white group-hover:text-neon-purple transition-colors">
                                    Gyukatsu Niku-Niku Introduces Authentic Miyazaki A5 Wagyu Cutlet Sets</h3>
                                <p class="text-xs text-slate-400 line-clamp-2">Exclusive partnership with Japanese Wagyu
                                    growers bringing top grade marbling cutlets to Jakarta.</p>
                            </div>
                            <button onclick="readNews('Gyukatsu A5 Wagyu')"
                                class="text-xs font-bold text-neon-purple flex items-center gap-1 pt-2 hover:underline">
                                Read Full Article →
                            </button>
                        </div>
                    </div>

                    <!-- Article 3 -->
                    <div
                        class="glass-panel rounded-2xl overflow-hidden border border-white/10 group hover:border-neon-emerald/40 transition-all flex flex-col justify-between">
                        <div class="relative h-48 overflow-hidden">
                            <img src="/src/assets/images/wardani_banner_1786008568412.jpg" alt="News 3"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                referrerPolicy="no-referrer">
                            <span
                                class="absolute top-3 left-3 px-2.5 py-1 bg-navy-950/80 backdrop-blur-md text-emerald-400 font-bold text-[10px] rounded-lg border border-emerald-400/30">HERITAGE</span>
                        </div>
                        <div class="p-6 space-y-3 flex-1 flex flex-col justify-between">
                            <div class="space-y-2">
                                <span class="text-[10px] text-slate-400">July 28, 2026 • Heritage Food</span>
                                <h3
                                    class="text-base font-bold text-white group-hover:text-emerald-400 transition-colors">
                                    Warung Wardani Celebrates 46 Years of Preserving Authentic Balinese Flavors</h3>
                                <p class="text-xs text-slate-400 line-clamp-2">Denpasar's beloved Nasi Campur brand
                                    launches special anniversary heritage dining sets.</p>
                            </div>
                            <button onclick="readNews('Warung Wardani 46 Years')"
                                class="text-xs font-bold text-emerald-400 flex items-center gap-1 pt-2 hover:underline">
                                Read Full Article →
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- EVENTS TIMELINE SECTION -->
        <section id="events" class="py-16 md:py-24 relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
                <div class="text-center max-w-2xl mx-auto space-y-2">
                    <span
                        class="px-3 py-1 rounded-full text-xs font-bold tracking-widest uppercase bg-neon-purple/10 text-neon-purple border border-neon-purple/30">
                        CORPORATE CALENDAR
                    </span>
                    <h2 class="text-3xl font-extrabold text-white">Upcoming <span class="text-gradient-purple">Events &
                            Launch Pad</span></h2>
                </div>

                <div class="relative max-w-4xl mx-auto">
                    <!-- Center Timeline Line -->
                    <div
                        class="absolute left-1/2 transform -translate-x-1/2 top-0 bottom-0 w-0.5 bg-gradient-to-b from-neon-blue via-neon-purple to-neon-pink opacity-40">
                    </div>

                    <div class="space-y-12">
                        <!-- Event 1 -->
                        <div class="relative flex items-center justify-between flex-col md:flex-row gap-8">
                            <div class="w-full md:w-1/2 md:pr-12 text-left md:text-right">
                                <div
                                    class="glass-panel p-6 rounded-2xl border border-neon-blue/30 space-y-2 hover:border-neon-blue transition-all">
                                    <span class="text-xs font-bold text-neon-blue">SEPTEMBER 15, 2026</span>
                                    <h3 class="text-base font-bold text-white">Trans Culinary Festival 2026</h3>
                                    <p class="text-xs text-slate-300">Grand culinary showcase uniting CBTL, Wendy's,
                                        Baskin-Robbins, Wardani, Gyukatsu & Tasty Kitchen at Trans Studio Mall.</p>
                                </div>
                            </div>
                            <div
                                class="absolute left-1/2 transform -translate-x-1/2 w-8 h-8 rounded-full bg-navy-900 border-2 border-neon-blue flex items-center justify-center text-neon-blue shadow-glow-blue z-10">
                                <i data-lucide="calendar" class="w-4 h-4"></i>
                            </div>
                            <div class="w-full md:w-1/2 md:pl-12"></div>
                        </div>

                        <!-- Event 2 -->
                        <div class="relative flex items-center justify-between flex-col md:flex-row gap-8">
                            <div class="w-full md:w-1/2 md:pr-12"></div>
                            <div
                                class="absolute left-1/2 transform -translate-x-1/2 w-8 h-8 rounded-full bg-navy-900 border-2 border-neon-purple flex items-center justify-center text-neon-purple shadow-glow-purple z-10">
                                <i data-lucide="sparkles" class="w-4 h-4"></i>
                            </div>
                            <div class="w-full md:w-1/2 md:pl-12 text-left">
                                <div
                                    class="glass-panel p-6 rounded-2xl border border-neon-purple/30 space-y-2 hover:border-neon-purple transition-all">
                                    <span class="text-xs font-bold text-neon-purple">OCTOBER 31, 2026</span>
                                    <h3 class="text-base font-bold text-white">Baskin-Robbins 31st Anniversary Bash</h3>
                                    <p class="text-xs text-slate-300">National free scoop day and exclusive new flavor
                                        launch across all 120+ parlors.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- GALLERY SECTION (FILTERABLE GRID) -->
        <section id="gallery" class="py-16 bg-navy-900/40 relative border-t border-white/5">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
                <div class="text-center max-w-2xl mx-auto space-y-3">
                    <span
                        class="px-3 py-1 rounded-full text-xs font-bold tracking-widest uppercase bg-neon-amber/10 text-neon-amber border border-neon-amber/30">
                        VISUAL SHOWCASE
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white">Trans F&B <span
                            class="text-gradient-gold">Gallery Showcase</span></h2>
                </div>

                <!-- Gallery Category Tabs -->
                <div class="flex flex-wrap items-center justify-center gap-2">
                    <button onclick="filterGallery('all')"
                        class="gallery-tab active px-4 py-2 text-xs font-bold rounded-xl bg-white/10 text-white border border-white/20">All
                        Photos</button>
                    <button onclick="filterGallery('outlets')"
                        class="gallery-tab px-4 py-2 text-xs font-medium text-slate-300 hover:text-white bg-white/5 hover:bg-white/10 rounded-xl">Outlets
                        & Ambience</button>
                    <button onclick="filterGallery('culinary')"
                        class="gallery-tab px-4 py-2 text-xs font-medium text-slate-300 hover:text-white bg-white/5 hover:bg-white/10 rounded-xl">Signature
                        Dishes</button>
                    <button onclick="filterGallery('events')"
                        class="gallery-tab px-4 py-2 text-xs font-medium text-slate-300 hover:text-white bg-white/5 hover:bg-white/10 rounded-xl">Events
                        & VIPS</button>
                </div>

                <!-- Gallery Grid -->
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    <div class="gallery-item culinary relative h-56 rounded-2xl overflow-hidden group cursor-pointer"
                        onclick="openLightbox('/src/assets/images/cbtl_banner_1786008502343.jpg', 'CBTL Handcrafted Coffee')">
                        <img src="/src/assets/images/cbtl_banner_1786008502343.jpg"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                            referrerPolicy="no-referrer">
                        <div
                            class="absolute inset-0 bg-navy-950/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center p-4">
                            <span class="text-xs font-bold text-white text-center">CBTL Handcrafted Espresso</span>
                        </div>
                    </div>

                    <div class="gallery-item culinary relative h-56 rounded-2xl overflow-hidden group cursor-pointer"
                        onclick="openLightbox('/src/assets/images/wendys_banner_1786008515555.jpg', 'Wendy\'s Square Patty Burger')">
                        <img src="/src/assets/images/wendys_banner_1786008515555.jpg"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                            referrerPolicy="no-referrer">
                        <div
                            class="absolute inset-0 bg-navy-950/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center p-4">
                            <span class="text-xs font-bold text-white text-center">Wendy's Gourmet Double Stack</span>
                        </div>
                    </div>

                    <div class="gallery-item culinary relative h-56 rounded-2xl overflow-hidden group cursor-pointer"
                        onclick="openLightbox('/src/assets/images/baskin_banner_1786008552083.jpg', 'Baskin-Robbins 31 Flavors')">
                        <img src="/src/assets/images/baskin_banner_1786008552083.jpg"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                            referrerPolicy="no-referrer">
                        <div
                            class="absolute inset-0 bg-navy-950/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center p-4">
                            <span class="text-xs font-bold text-white text-center">Baskin-Robbins Artisanal
                                Flavors</span>
                        </div>
                    </div>

                    <div class="gallery-item culinary relative h-56 rounded-2xl overflow-hidden group cursor-pointer"
                        onclick="openLightbox('/src/assets/images/wardani_banner_1786008568412.jpg', 'Warung Wardani Nasi Campur')">
                        <img src="/src/assets/images/wardani_banner_1786008568412.jpg"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                            referrerPolicy="no-referrer">
                        <div
                            class="absolute inset-0 bg-navy-950/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center p-4">
                            <span class="text-xs font-bold text-white text-center">Warung Wardani Authentic Bali</span>
                        </div>
                    </div>

                    <div class="gallery-item outlets relative h-56 rounded-2xl overflow-hidden group cursor-pointer"
                        onclick="openLightbox('/src/assets/images/gyukatsu_banner_1786008586037.jpg', 'Gyukatsu Sizzling Ishiyaki')">
                        <img src="/src/assets/images/gyukatsu_banner_1786008586037.jpg"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                            referrerPolicy="no-referrer">
                        <div
                            class="absolute inset-0 bg-navy-950/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center p-4">
                            <span class="text-xs font-bold text-white text-center">Gyukatsu Ishiyaki Dining</span>
                        </div>
                    </div>

                    <div class="gallery-item events relative h-56 rounded-2xl overflow-hidden group cursor-pointer"
                        onclick="openLightbox('/src/assets/images/tasty_banner_1786008602789.jpg', 'Tasty Kitchen HK Dim Sum')">
                        <img src="/src/assets/images/tasty_banner_1786008602789.jpg"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                            referrerPolicy="no-referrer">
                        <div
                            class="absolute inset-0 bg-navy-950/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center p-4">
                            <span class="text-xs font-bold text-white text-center">Tasty Kitchen Hong Kong Dim
                                Sum</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <footer class="bg-navy-950 border-t border-white/10 pt-16 pb-12 relative z-10 text-left">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

                    <div class="space-y-4">
                        <div class="flex items-center gap-2">
                            <span class="font-extrabold text-xl tracking-wider text-white">TRANS <span
                                    class="text-neon-blue">F&B</span></span>
                        </div>
                        <p class="text-xs text-slate-400 leading-relaxed">
                            PT Trans Food & Beverage Official. Indonesia's premier food & beverage brand group operating
                            world-class dining, cafe, and retail concepts.
                        </p>
                        <div class="flex items-center gap-3 pt-2">
                            <a href="#"
                                class="p-2.5 rounded-xl bg-white/5 hover:bg-neon-blue hover:text-navy-950 text-slate-300 transition-all">
                                <i data-lucide="instagram" class="w-4 h-4"></i>
                            </a>
                            <a href="#"
                                class="p-2.5 rounded-xl bg-white/5 hover:bg-neon-blue hover:text-navy-950 text-slate-300 transition-all">
                                <i data-lucide="linkedin" class="w-4 h-4"></i>
                            </a>
                            <a href="#"
                                class="p-2.5 rounded-xl bg-white/5 hover:bg-neon-blue hover:text-navy-950 text-slate-300 transition-all">
                                <i data-lucide="globe" class="w-4 h-4"></i>
                            </a>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <h4 class="text-xs font-bold text-white uppercase tracking-widest">Brand Hubs</h4>
                        <ul class="space-y-2 text-xs text-slate-400">
                            <li><a href="#brands" class="hover:text-neon-blue transition-colors">The Coffee Bean & Tea
                                    Leaf</a></li>
                            <li><a href="#brands" class="hover:text-neon-blue transition-colors">Wendy's Indonesia</a>
                            </li>
                            <li><a href="#brands" class="hover:text-neon-blue transition-colors">Baskin-Robbins 31</a>
                            </li>
                            <li><a href="#brands" class="hover:text-neon-blue transition-colors">Warung Wardani Bali</a>
                            </li>
                            <li><a href="#brands" class="hover:text-neon-blue transition-colors">Gyukatsu Niku-Niku</a>
                            </li>
                            <li><a href="#brands" class="hover:text-neon-blue transition-colors">Tasty Kitchen HK</a>
                            </li>
                        </ul>
                    </div>

                    <div class="space-y-3">
                        <h4 class="text-xs font-bold text-white uppercase tracking-widest">Corporate Links</h4>
                        <ul class="space-y-2 text-xs text-slate-400">
                            <li><a href="#dashboard" class="hover:text-neon-blue transition-colors">Executive Portal</a>
                            </li>
                            <li><a href="#analytics" class="hover:text-neon-blue transition-colors">Real-Time
                                    Performance</a></li>
                            <li><a href="#news" class="hover:text-neon-blue transition-colors">Media & Newsroom</a></li>
                            <li><a href="#events" class="hover:text-neon-blue transition-colors">Corporate Calendar</a>
                            </li>
                            <li><a href="#" class="hover:text-neon-blue transition-colors">Franchise Opportunities</a>
                            </li>
                        </ul>
                    </div>

                    <div class="space-y-3">
                        <h4 class="text-xs font-bold text-white uppercase tracking-widest">Executive Office</h4>
                        <p class="text-xs text-slate-400">Menara Bank Mega, Jl. Kapten Tendean No. 12-14A, Mampang
                            Prapatan, Jakarta Selatan 12790</p>
                        <p class="text-xs text-slate-400">Email: corporate@trans-fb.com</p>
                    </div>

                </div>

                <div
                    class="pt-8 border-t border-white/5 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
                    <p>© 2026 PT Trans Food & Beverage Official. All Rights Reserved. Member of CT Corp.</p>
                    <a href="#dashboard" class="text-slate-400 hover:text-white flex items-center gap-1">Back to Top
                        ↑</a>
                </div>
            </div>
        </footer>

    </div>

    <!-- SEARCH MODAL -->
    <div id="searchModal"
        class="hidden fixed inset-0 z-50 bg-navy-950/80 backdrop-blur-xl flex items-start justify-center pt-20 px-4">
        <div class="w-full max-w-xl glass-panel p-6 rounded-3xl border border-white/20 shadow-2xl space-y-4">
            <div class="flex items-center justify-between pb-3 border-b border-white/10">
                <div class="flex items-center gap-3 w-full">
                    <i data-lucide="search" class="w-5 h-5 text-neon-blue"></i>
                    <input type="text" id="searchInput" placeholder="Search brands, outlets, metrics, campaigns..."
                        class="bg-transparent text-white placeholder-slate-400 text-sm focus:outline-none w-full">
                </div>
                <button onclick="toggleSearchModal()" class="text-slate-400 hover:text-white text-xs">ESC</button>
            </div>
            <div class="space-y-2 text-xs text-left">
                <p class="text-slate-400 font-semibold uppercase tracking-wider text-[10px]">Quick Suggestions</p>
                <a href="#brands" onclick="toggleSearchModal()"
                    class="block p-2 hover:bg-white/5 rounded-lg text-slate-200">The Coffee Bean & Tea Leaf Outlets</a>
                <a href="#promotion" onclick="toggleSearchModal()"
                    class="block p-2 hover:bg-white/5 rounded-lg text-slate-200">Wendy's Square Patty Voucher
                    Campaign</a>
                <a href="#analytics" onclick="toggleSearchModal()"
                    class="block p-2 hover:bg-white/5 rounded-lg text-slate-200">Q3 Revenue Reports & Performance</a>
            </div>
        </div>
    </div>

    <!-- BRAND DETAIL MODAL -->
    <div id="brandModal"
        class="hidden fixed inset-0 z-50 bg-navy-950/85 backdrop-blur-xl flex items-center justify-center p-4">
        <div id="brandModalContent"
            class="w-full max-w-2xl glass-panel p-8 rounded-3xl border border-white/20 shadow-2xl relative space-y-6 text-left max-h-[90vh] overflow-y-auto">
            <!-- Modal Header populated dynamically -->
        </div>
    </div>

    <!-- TOAST NOTIFICATION CONTAINER -->
    <div id="toastContainer" class="fixed bottom-6 right-6 z-50 space-y-3 pointer-events-none"></div>

    <!-- VANILLA JAVASCRIPT LOGIC -->
    <script>
    // Initialize Lucide Icons
    document.addEventListener('DOMContentLoaded', () => {
        lucide.createIcons();
        initParticleCanvas();
        initCharts();
        initScrollReveal();
        initCountUp();
    });

    // Interactive Particle Canvas Engine
    function initParticleCanvas() {
        const canvas = document.getElementById('particleCanvas');
        const ctx = canvas.getContext('2d');
        let width = canvas.width = window.innerWidth;
        let height = canvas.height = window.innerHeight;

        window.addEventListener('resize', () => {
            width = canvas.width = window.innerWidth;
            height = canvas.height = window.innerHeight;
        });

        const particles = Array.from({
            length: 45
        }, () => ({
            x: Math.random() * width,
            y: Math.random() * height,
            vx: (Math.random() - 0.5) * 0.4,
            vy: (Math.random() - 0.5) * 0.4,
            radius: Math.random() * 2 + 0.5,
            alpha: Math.random() * 0.5 + 0.2
        }));

        function animate() {
            ctx.clearRect(0, 0, width, height);
            particles.forEach(p => {
                p.x += p.vx;
                p.y += p.vy;
                if (p.x < 0) p.x = width;
                if (p.x > width) p.x = 0;
                if (p.y < 0) p.y = height;
                if (p.y > height) p.y = 0;

                ctx.beginPath();
                ctx.arc(p.x, p.y, p.radius, 0, Math.PI * 2);
                ctx.fillStyle = `rgba(0, 240, 255, ${p.alpha})`;
                ctx.fill();
            });
            requestAnimationFrame(animate);
        }
        animate();
    }

    // Count Up Numbers Animation
    function initCountUp() {
        const counters = document.querySelectorAll('.count-up');
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-target'));
            let count = 0;
            const speed = target / 40;
            const update = () => {
                count += speed;
                if (count < target) {
                    counter.innerText = Math.ceil(count);
                    setTimeout(update, 30);
                } else {
                    counter.innerText = target;
                }
            };
            update();
        });
    }

    // Scroll Reveal Effect
    function initScrollReveal() {
        const reveals = document.querySelectorAll('.reveal');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, {
            threshold: 0.1
        });

        reveals.forEach(reveal => observer.observe(reveal));
    }

    // Chart.js Setup
    let revenueChartInstance;

    function initCharts() {
        // Revenue Area Chart
        const ctx1 = document.getElementById('revenueChart').getContext('2d');
        const gradient1 = ctx1.createLinearGradient(0, 0, 0, 300);
        gradient1.addColorStop(0, 'rgba(0, 240, 255, 0.4)');
        gradient1.addColorStop(1, 'rgba(0, 240, 255, 0.0)');

        revenueChartInstance = new Chart(ctx1, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Revenue (Billion IDR)',
                    data: [120, 135, 142, 150, 168, 175, 182, 184.5, 190, 205, 215, 240],
                    borderColor: '#00F0FF',
                    borderWidth: 3,
                    backgroundColor: gradient1,
                    fill: true,
                    tension: 0.4,
                    pointBackgroundColor: '#00F0FF',
                    pointHoverRadius: 6
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    x: {
                        grid: {
                            color: 'rgba(255, 255, 255, 0.05)'
                        },
                        ticks: {
                            color: '#94a3b8'
                        }
                    },
                    y: {
                        grid: {
                            color: 'rgba(255, 255, 255, 0.05)'
                        },
                        ticks: {
                            color: '#94a3b8'
                        }
                    }
                }
            }
        });

        // Brand Share Doughnut Chart
        const ctx2 = document.getElementById('brandDoughnutChart').getContext('2d');
        new Chart(ctx2, {
            type: 'doughnut',
            data: {
                labels: ['CBTL', 'Wendy\'s', 'Baskin-Robbins', 'Warung Wardani', 'Gyukatsu', 'Tasty Kitchen'],
                datasets: [{
                    data: [32.5, 28.4, 18.2, 11.1, 5.8, 4.0],
                    backgroundColor: ['#F59E0B', '#EF4444', '#EC4899', '#10B981', '#8B5CF6', '#3B82F6'],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                cutout: '75%'
            }
        });
    }

    function updateChartPeriod(period) {
        const btnMonthly = document.getElementById('btnMonthly');
        const btnWeekly = document.getElementById('btnWeekly');

        if (period === 'monthly') {
            btnMonthly.className = 'px-3 py-1 text-xs font-bold text-white bg-blue-600 rounded-lg';
            btnWeekly.className = 'px-3 py-1 text-xs font-medium text-slate-400 hover:text-white rounded-lg';
            revenueChartInstance.data.labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct',
                'Nov', 'Dec'
            ];
            revenueChartInstance.data.datasets[0].data = [120, 135, 142, 150, 168, 175, 182, 184.5, 190, 205, 215, 240];
        } else {
            btnWeekly.className = 'px-3 py-1 text-xs font-bold text-white bg-blue-600 rounded-lg';
            btnMonthly.className = 'px-3 py-1 text-xs font-medium text-slate-400 hover:text-white rounded-lg';
            revenueChartInstance.data.labels = ['W1', 'W2', 'W3', 'W4', 'W5', 'W6', 'W7', 'W8'];
            revenueChartInstance.data.datasets[0].data = [42, 45, 48, 51, 49, 53, 56, 58.2];
        }
        revenueChartInstance.update();
    }

    // Toggle Modals & UI Controls
    function toggleSearchModal() {
        const modal = document.getElementById('searchModal');
        modal.classList.toggle('hidden');
        if (!modal.classList.contains('hidden')) {
            document.getElementById('searchInput').focus();
        }
    }

    function toggleNotificationDropdown() {
        document.getElementById('notifDropdown').classList.toggle('hidden');
    }

    function toggleMobileMenu() {
        document.getElementById('mobileMenu').classList.toggle('hidden');
    }

    // Promo Carousel Logic
    let currentPromoIndex = 0;

    function nextPromo() {
        const slider = document.getElementById('promoSlider');
        currentPromoIndex = (currentPromoIndex + 1) % 3;
        slider.style.transform = `translateX(-${currentPromoIndex * 100}%)`;
    }

    function prevPromo() {
        const slider = document.getElementById('promoSlider');
        currentPromoIndex = (currentPromoIndex - 1 + 3) % 3;
        slider.style.transform = `translateX(-${currentPromoIndex * 100}%)`;
    }

    // Gallery Filter
    function filterGallery(category) {
        const tabs = document.querySelectorAll('.gallery-tab');
        tabs.forEach(t => t.className =
            'gallery-tab px-4 py-2 text-xs font-medium text-slate-300 hover:text-white bg-white/5 hover:bg-white/10 rounded-xl'
        );
        event.target.className =
            'gallery-tab active px-4 py-2 text-xs font-bold rounded-xl bg-white/10 text-white border border-white/20';

        const items = document.querySelectorAll('.gallery-item');
        items.forEach(item => {
            if (category === 'all' || item.classList.contains(category)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    }

    // Toast Notification System
    function showToast(title, message) {
        const container = document.getElementById('toastContainer');
        const toast = document.createElement('div');
        toast.className =
            'pointer-events-auto p-4 rounded-2xl glass-panel border border-neon-blue/40 shadow-2xl flex items-center gap-3 animate-fade-in text-left max-w-sm';
        toast.innerHTML = `
                <div class="w-8 h-8 rounded-xl bg-neon-blue/20 text-neon-blue flex items-center justify-center font-bold">✓</div>
                <div>
                    <h5 class="text-xs font-bold text-white">${title}</h5>
                    <p class="text-[11px] text-slate-300">${message}</p>
                </div>
            `;
        container.appendChild(toast);
        setTimeout(() => toast.remove(), 4000);
    }

    function claimVoucher(promoName) {
        showToast('Digital Voucher Claimed!', `Voucher for "${promoName}" added to your Trans F&B Club account.`);
    }

    function readNews(articleTitle) {
        showToast('Article Opened', `Loading article details for "${articleTitle}"...`);
    }

    // Brand Detail Modal Trigger
    const brandData = {
        cbtl: {
            title: 'The Coffee Bean & Tea Leaf®',
            category: 'Gourmet Coffee & Fine Tea',
            outlets: '92 Locations in Indonesia',
            revenue: 'Rp 412.500.000 / Day',
            desc: 'Founded in Southern California in 1963, CBTL is renowned for sourcing top 1% Arabica beans and hand-harvested whole leaf teas from worldwide private estates.',
            bestSellers: ['Hazelnut Ice Blended®', 'Caramel Macchiato', 'Gibraltar Espresso', 'African Rum Tea']
        },
        wendys: {
            title: 'Wendy\'s® Burgers',
            category: 'Quick Service Restaurant',
            outlets: '68 Locations in Indonesia',
            revenue: 'Rp 385.200.000 / Day',
            desc: 'Famous for fresh, never-frozen square beef patties, thick-cut bacon, and original Frosty desserts since 1969.',
            bestSellers: ['Dave\'s Double Beef Burger', 'Baconator Double', 'Crispy Chicken Sandwich',
                'Chocolate Frosty'
            ]
        },
        baskin: {
            title: 'Baskin-Robbins® 31',
            category: 'Ice Cream Specialty Parlor',
            outlets: '124 Parlors in Indonesia',
            revenue: 'Rp 315.800.000 / Day',
            desc: 'The world\'s largest ice cream chain offering 31 signature flavors so guests can enjoy a different flavor every single day.',
            bestSellers: ['Jamoca® Almond Fudge', 'Mint Chocolate Chip', 'Love Potion #31',
                'Custom Ice Cream Cakes'
            ]
        },
        wardani: {
            title: 'Warung Wardani Denpasar Bali',
            category: 'Authentic Indonesian Cuisine',
            outlets: '18 Locations in Indonesia',
            revenue: 'Rp 245.100.000 / Day',
            desc: 'Bali\'s legendary culinary staple famous for authentic Denpasar Nasi Campur 7 Lauk served with spicy Sambal Matah and Sate Lilit.',
            bestSellers: ['Nasi Campur Wardani Komplit', 'Sate Lilit Sapi Bali', 'Ayam Suwir Sambal Matah',
                'Dendeng Sapi Balado'
            ]
        },
        gyukatsu: {
            title: 'Gyukatsu Niku-Niku®',
            category: 'Japanese Wagyu Dining',
            outlets: '14 Locations in Indonesia',
            revenue: 'Rp 288.400.000 / Day',
            desc: 'Authentic Japanese deep-fried Wagyu beef cutlets served on sizzling personal volcanic hot stones.',
            bestSellers: ['Wagyu Sirloin Gyukatsu Set', 'Prime Tenderloin Gyukatsu', 'Truffle Gyukatsu Donburi']
        },
        tasty: {
            title: 'Tasty Kitchen Hong Kong',
            category: 'Modern Asian Dim Sum & Roast',
            outlets: '16 Locations in Indonesia',
            revenue: 'Rp 198.900.000 / Day',
            desc: 'Handcrafted Hong Kong Dim Sum baskets, traditional HK Roasted Peking Duck, and master wok noodles.',
            bestSellers: ['Steamed Xiaolongbao', 'HK Roasted Peking Duck', 'Crispy Char Siu Pork',
                'Wok-Hei Seafood Noodles'
            ]
        }
    };

    function showBrandDetail(brandKey) {
        const data = brandData[brandKey];
        if (!data) return;

        const modal = document.getElementById('brandModal');
        const content = document.getElementById('brandModalContent');

        content.innerHTML = `
                <button onclick="closeBrandModal()" class="absolute top-6 right-6 text-slate-400 hover:text-white p-2 rounded-xl bg-white/5">✕</button>
                <div class="space-y-4">
                    <span class="px-3 py-1 bg-neon-blue/20 text-neon-blue text-xs font-bold rounded-full border border-neon-blue/30">${data.category}</span>
                    <h3 class="text-2xl font-extrabold text-white">${data.title}</h3>
                    <p class="text-xs text-slate-300 leading-relaxed">${data.desc}</p>
                    
                    <div class="grid grid-cols-2 gap-4 py-3 border-y border-white/10 text-xs">
                        <div>
                            <span class="text-slate-400 block">Outlets Network</span>
                            <strong class="text-white text-sm">${data.outlets}</strong>
                        </div>
                        <div>
                            <span class="text-slate-400 block">Daily Gross Revenue</span>
                            <strong class="text-emerald-400 text-sm">${data.revenue}</strong>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <h4 class="text-xs font-bold text-white uppercase tracking-wider">Top Menu Highlights</h4>
                        <div class="flex flex-wrap gap-2">
                            ${data.bestSellers.map(item => `<span class="px-3 py-1 bg-white/5 text-slate-200 text-xs rounded-lg border border-white/10">${item}</span>`).join('')}
                        </div>
                    </div>

                    <button onclick="closeBrandModal(); showToast('Brand Selected', 'Navigating to ${data.title} operational console...');" class="w-full py-3 rounded-xl bg-gradient-to-r from-blue-600 to-purple-600 text-white font-bold text-xs uppercase tracking-wider shadow-glow-blue hover:scale-[1.02] transition-all">
                        Launch Live Brand Console →
                    </button>
                </div>
            `;

        modal.classList.remove('hidden');
    }

    function closeBrandModal() {
        document.getElementById('brandModal').classList.add('hidden');
    }

    // Keyboard Shortcut CMD+K for Search
    document.addEventListener('keydown', (e) => {
        if ((e.metaKey || e.ctrlKey) && e.key === 'k') {
            e.preventDefault();
            toggleSearchModal();
        }
    });
    </script>
</body>

</html>