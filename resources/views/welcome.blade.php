<!DOCTYPE html>
<html lang="id" class="dark scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trans Food & Beverage Official - Website Resmi Coming Soon</title>
    <meta name="description"
        content="Website Resmi PT Trans Food & Beverage (Trans F&B Official). Platform modern untuk pengalaman digital premium dari jaringan brand F&B nasional kami.">
    <meta name="theme-color" content="#020617">

    <!-- GOOGLE FONTS (Plus Jakarta Sans, Space Grotesk, Poppins) -->
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

    <!-- TAILWIND CONFIGURATION FOR NEW COLOR THEME FROM PHOTO -->
    <script>
    tailwind.config = {
        darkMode: 'class',
        theme: {
            extend: {
                colors: {
                    // Modern Navy from Background in photo
                    'trans-navy': '#020617',
                    'trans-navy-dark': '#010409',
                    // The core vivid accent colors from the photo logo/text gradient
                    'acc-blue': '#2563EB', // Blue-600
                    'acc-purple': '#9333EA', // Purple-600
                    'acc-green': '#22C55E', // Green-500
                    'acc-yellow': '#FBBF24', // Yellow-400
                    'acc-red': '#EF4444', // Red-500
                    // Glow effect variations
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
                    }
                }
            }
        }
    }
    </script>

    <!-- CUSTOM CSS FOR EDITORIAL GLASSMORPHISM & TYPOGRAPHY -->
    <style>
    /* Smooth Custom Scrollbar - Navy Theme */
    ::-webkit-scrollbar {
        width: 8px;
    }

    ::-webkit-scrollbar-track {
        background: #010409;
    }

    ::-webkit-scrollbar-thumb {
        background: rgba(37, 99, 235, 0.4);
        /* acc-blue */
        border-radius: 999px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: rgba(37, 99, 235, 0.8);
    }

    /* Editorial Outline Text */
    .text-stroke-white {
        -webkit-text-stroke: 1.5px rgba(255, 255, 255, 0.6);
        color: transparent;
    }

    /* Editorial Glassmorphic Paneling - Updated to Navy Base */
    .glass-panel {
        background: rgba(3, 7, 18, 0.7);
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
        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .glass-card:hover {
        border-color: rgba(37, 99, 235, 0.4);
        /* acc-blue */
        background: rgba(255, 255, 255, 0.06);
        box-shadow: 0 20px 40px rgba(37, 99, 235, 0.15);
        transform: translateY(-3px);
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

    /* Button Primary - Vivid Blue to Purple Gradient from photo */
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

    /* Input Field - Dark Navy Base */
    .input-field {
        background: rgba(1, 4, 9, 0.7);
        border: 1px solid rgba(255, 255, 255, 0.12);
        color: white;
        transition: all 0.3s;
    }

    .input-field:focus {
        border-color: #2563EB;
        /* acc-blue */
        box-shadow: 0 0 15px rgba(37, 99, 235, 0.2);
        outline: none;
    }

    /* Ripple Effect Element - Updated color to Blue */
    .ripple {
        position: absolute;
        border-radius: 50%;
        background: rgba(59, 130, 246, 0.4);
        /* acc-blue-glow */
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

    /* Editorial Noise Overlay Background */
    .bg-noise {
        background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.03'/%3E%3C/svg%3E");
    }

    /* Smooth Countdown Digit Animation */
    .flip-unit {
        position: relative;
        overflow: hidden;
    }

    .flip-card-inner {
        display: inline-block;
        transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .flip-unit.do-update .flip-card-inner {
        animation: digitSlideUp 0.5s cubic-bezier(0.16, 1, 0.3, 1);
    }

    @keyframes digitSlideUp {
        0% {
            opacity: 0.4;
            transform: translateY(12px) scale(0.92);
            filter: blur(2px);
        }

        100% {
            opacity: 1;
            transform: translateY(0) scale(1);
            filter: blur(0);
        }
    }

    /* Multi-Color Gradient Text - Core theme from photo */
    .text-gradient-multi {
        background: linear-gradient(135deg, #FFF 0%, #FFF 30%, #2563EB 60%, #9333EA 80%, #22C55E 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    /* Pure vivid multi-color gradient from photo text */
    .text-vivid-gradient {
        background: linear-gradient(135deg, #2563EB 0%, #9333EA 50%, #22C55E 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    /* Pure Green Text from photo */
    .text-acc-green {
        color: #22C55E;
    }

    /* Editorial Animated Border Effect - Multi-color version */
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
        /* Gradient uses blue, purple, green from photo */
        background: conic-gradient(transparent, transparent, transparent, #2563EB, #9333EA, #22C55E);
        animation: spin 6s linear infinite;
        z-index: 0;
    }

    .animated-border-content {
        position: relative;
        z-index: 1;
        margin: 2px;
        border-radius: calc(2rem - 2px);
        background: rgba(2, 6, 23, 0.85);
        /* trans-navy base */
        backdrop-filter: blur(24px);
    }

    /* Intersection Observer Reveal Classes */
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
    class="bg-trans-navy text-white font-sans antialiased selection:bg-acc-blue selection:text-white overflow-x-hidden min-h-screen relative">

    <!-- ================================================================= -->
    <!-- LOADING SCREEN                                                    -->
    <!-- ================================================================= -->
    <div id="loading-screen"
        class="fixed inset-0 z-[10000] bg-trans-navy-dark flex flex-col items-center justify-center transition-opacity duration-700 ease-out p-6">
        <div class="relative flex flex-col items-center max-w-sm w-full text-center fade-in">

            <!-- Logo in Loader - Blue Glow -->
            <div class="relative mb-8 transform transition-transform duration-500 hover:scale-105">
                <div class="absolute -inset-4 bg-acc-blue/20 rounded-full blur-2xl animate-pulse-slow"></div>
                <!-- Logo Badge Updated with Photo Skew/Aesthetic -->
                <div
                    class="relative flex items-center space-x-3 bg-black/80 px-6 py-4 rounded-2xl border border-white/10 shadow-2xl">
                    <div
                        class="w-10 h-10 bg-acc-blue rounded-lg flex items-center justify-center font-bold text-xl tracking-tighter text-white shadow-[0_0_15px_rgba(59,130,246,0.6)]">
                        T
                    </div>
                    <div class="text-left">
                        <div class="font-display font-black text-2xl tracking-tighter leading-none text-white">
                            TRANS <span class="text-acc-blue">F<span class="text-white">&</span>B</span>
                        </div>
                        <div class="text-[9px] tracking-[0.4em] font-semibold text-acc-purple uppercase mt-1">
                            OFFICIAL BRAND
                        </div>
                    </div>
                </div>
            </div>

            <!-- Loader Modern Spinner - Blue/Purple -->
            <div class="relative w-16 h-16 mb-6">
                <div class="absolute inset-0 rounded-full border-2 border-white/5"></div>
                <div class="absolute inset-0 rounded-full border-2 border-acc-blue border-t-transparent animate-spin">
                </div>
                <div
                    class="absolute inset-2 rounded-full border-2 border-acc-purple/60 border-b-transparent animate-spin-slow">
                </div>
            </div>

            <!-- Loader Status & Progress Percentage -->
            <p id="loading-text" class="text-xs font-semibold tracking-widest uppercase text-slate-400 mb-2">Memuat
                Pengalaman Digital...</p>
            <span id="loading-percentage" class="font-display font-black text-2xl text-acc-blue mb-4">0%</span>

            <!-- Progress Bar Container -->
            <div class="w-full bg-white/5 rounded-full h-1.5 overflow-hidden border border-white/5 shadow-inner">
                <div id="loader-progress-bar"
                    class="bg-gradient-to-r from-acc-blue via-acc-purple to-acc-green h-full w-0 transition-all duration-300 ease-out shadow-[0_0_12px_rgba(59,130,246,0.6)]">
                </div>
            </div>
        </div>
    </div>


    <!-- ================================================================= -->
    <!-- EDITORIAL BACKGROUND CANVAS & MULTI-LAYER AURORA EFFECTS          -->
    <!-- ================================================================= -->
    <div class="fixed inset-0 z-0 overflow-hidden pointer-events-none">

        <!-- Interactive Particle Canvas -->
        <canvas id="particle-canvas" class="absolute inset-0 w-full h-full opacity-40"></canvas>

        <!-- Editorial Aurora Mesh Gradient Orbs - Blue, Purple, Green from photo -->
        <div
            class="absolute -top-20 -left-20 w-[650px] h-[650px] bg-acc-blue opacity-15 blur-[140px] rounded-full animate-aurora">
        </div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[550px] h-[550px] bg-acc-purple opacity-10 blur-[120px] rounded-full animate-aurora"
            style="animation-delay: -4s;"></div>
        <div class="absolute top-[30%] left-[40%] w-[350px] h-[350px] bg-acc-green opacity-5 blur-[100px] rounded-fullanimate-aurora"
            style="animation-delay: -8s;"></div>
        <div class="absolute top-[20%] right-[15%] w-[350px] h-[350px] bg-white opacity-5 blur-[100px] rounded-full">
        </div>

        <!-- Geometric Grid Overlay -->
        <div
            class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:5rem_5rem]">
        </div>

        <!-- Decorative Floating Lines for Editorial Aesthetic -->
        <div
            class="absolute top-1/2 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-white/5 to-transparent pointer-events-none">
        </div>
        <div
            class="absolute top-0 left-1/4 w-[1px] h-full bg-gradient-to-b from-transparent via-white/5 to-transparent pointer-events-none">
        </div>
        <div
            class="absolute top-0 right-1/4 w-[1px] h-full bg-gradient-to-b from-transparent via-white/5 to-transparent pointer-events-none">
        </div>

        <!-- SVG Film Noise Texture -->
        <div class="absolute inset-0 bg-noise opacity-40"></div>
    </div>



    <!-- ================================================================= -->
    <!-- MAIN HERO SECTION (MIN 100VH)                                     -->
    <!-- ================================================================= -->
    <main class="relative z-10 min-h-screen flex flex-col justify-center items-center px-4 sm:px-8 pt-32 pb-20">

        <div class="max-w-5xl w-full mx-auto text-center flex flex-col items-center">

            <!-- Title: Vivid Gradient from Photo -->
            <div class="reveal-element mb-6 relative group">
                <h1
                    class="text-[64px] sm:text-[100px] md:text-[130px] font-black leading-[0.85] tracking-tighter mb-2 text-white">
                    COMING<br />
                    <span
                        class="text-stroke-white animate-glow-pulse-blue drop-shadow-[0_0_25px_rgba(59,130,246,0.3)]">SOON</span>
                </h1>
                <div
                    class="h-1 w-24 sm:w-40 bg-gradient-to-r from-transparent via-acc-blue to-transparent mx-auto mt-6 rounded-full shadow-[0_0_20px_rgba(59,130,246,0.6)]">
                </div>
            </div>

            <!-- Subtitle: Trans is Vivid Blue, F&B is White/Gray in Photo -->
            <p
                class="reveal-element max-w-2xl text-base sm:text-xl text-white/70 font-light leading-relaxed mb-12 text-balance">
                Website resmi <strong class="text-acc-blue font-semibold">Trans</strong> <span
                    class="text-white/60">Food & Beverage</span> sedang dalam tahap pengerjaan. Kami akan segera hadir
                membawa pengalaman digital premium untuk jaringan brand F&B nasional kami.
            </p>


            <!-- ========================================================= -->
            <!-- EDITORIAL COUNTDOWN & PROGRESS CENTRAL CARD                -->
            <!-- ========================================================= -->
            <div id="parallax-card"
                class="reveal-element w-full max-w-3xl mb-14 transform transition-transform duration-200 ease-out fade-in">
                <div class="animated-border-box shadow-2xl shadow-acc-blue/15">
                    <div class="animated-border-content p-6 sm:p-12 text-center relative overflow-hidden">

                        <!-- Internal Decorative Background Light - Purple/Blue -->
                        <div
                            class="absolute -right-20 -top-20 w-48 h-48 bg-acc-purple/15 rounded-full blur-3xl pointer-events-none">
                        </div>
                        <div
                            class="absolute -left-20 bottom-10 w-40 h-40 bg-acc-blue/10 rounded-full blur-3xl pointer-events-none">
                        </div>

                        <!-- Badge Status - Updated to Purple from photo accent -->

                        <h2 class="font-heading font-extrabold text-2xl sm:text-4xl text-white mb-3 tracking-tight">
                            Persiapan Grand Launching
                        </h2>

                        <p class="text-slate-400 text-sm sm:text-base mb-10 max-w-lg mx-auto font-light">
                            Dapatkan pemberitahuan eksklusif pertama saat website resmi <span
                                class="text-white font-medium">Trans Food & Beverage</span> diluncurkan.
                        </p>


                        <!-- ===================================================== -->
                        <!-- EDITORIAL COUNTDOWN TIMER - Green accent on Seconds   -->
                        <!-- ===================================================== -->
                        <div
                            class="grid grid-cols-4 gap-2 sm:gap-6 p-4 sm:p-8 bg-white/3 border border-white/5 backdrop-blur-xl rounded-[28px] shadow-2xl mb-10 max-w-2xl mx-auto">

                            <!-- Hari -->
                            <div class="flip-unit flex flex-col items-center">
                                <div class="flip-card-inner">
                                    <span id="timer-days"
                                        class="text-3xl sm:text-5xl font-black text-white tracking-tighter">00</span>
                                </div>
                                <span
                                    class="text-[9px] sm:text-[10px] tracking-[0.3em] uppercase opacity-60 font-bold mt-2 text-acc-purple">HARI</span>
                            </div>

                            <!-- Jam -->
                            <div class="flip-unit flex flex-col items-center border-l border-white/5 pl-2 sm:pl-4">
                                <div class="flip-card-inner">
                                    <span id="timer-hours"
                                        class="text-3xl sm:text-5xl font-black text-white tracking-tighter">00</span>
                                </div>
                                <span
                                    class="text-[9px] sm:text-[10px] tracking-[0.3em] uppercase opacity-60 font-bold mt-2 text-acc-purple">JAM</span>
                            </div>

                            <!-- Menit -->
                            <div class="flip-unit flex flex-col items-center border-l border-white/5 pl-2 sm:pl-4">
                                <div class="flip-card-inner">
                                    <span id="timer-minutes"
                                        class="text-3xl sm:text-5xl font-black text-white tracking-tighter">00</span>
                                </div>
                                <span
                                    class="text-[9px] sm:text-[10px] tracking-[0.3em] uppercase opacity-60 font-bold mt-2 text-acc-purple">MENIT</span>
                            </div>

                            <!-- Detik - Accentuated Green from photo gradient -->
                            <div class="flip-unit flex flex-col items-center border-l border-white/5 pl-2 sm:pl-4">
                                <div class="flip-card-inner">
                                    <span id="timer-seconds"
                                        class="text-3xl sm:text-5xl font-black text-acc-green tracking-tighter">00</span>
                                </div>
                                <span
                                    class="text-[9px] sm:text-[10px] tracking-[0.3em] uppercase opacity-60 font-bold mt-2 text-acc-green">DETIK</span>
                            </div>
                        </div>


                        <!-- ===================================================== -->
                        <!-- DEVELOPMENT PROGRESS BAR - Rainbow gradient bar       -->
                        <!-- ===================================================== -->
                        <div class="max-w-xl mx-auto text-left">
                            <div class="flex justify-between items-end mb-3">
                                <span
                                    class="text-[11px] font-bold tracking-[0.2em] uppercase opacity-60 text-slate-300 flex items-center gap-2">
                                    <i class="fa-solid fa-code text-acc-blue"></i> Kesiapan Pengembangan
                                </span>
                                <span id="progress-percent-text"
                                    class="text-sm font-mono font-bold text-acc-green">85%</span>
                            </div>

                            <!-- Animated Progress Bar Container - Blue/Purple/Green Gradient -->
                            <div
                                class="h-2 w-full bg-white/5 rounded-full overflow-hidden border border-white/5 shadow-inner relative">
                                <div id="dev-progress-fill"
                                    class="h-full bg-gradient-to-r from-acc-blue via-acc-purple to-acc-green rounded-full transition-all duration-1000 ease-out relative overflow-hidden"
                                    style="width: 85%;">
                                    <!-- Shine Animation Sweep -->
                                    <div
                                        class="absolute inset-0 bg-gradient-to-r from-transparent via-white/40 to-transparent animate-shine-sweep">
                                    </div>
                                </div>
                            </div>

                            <!-- Progress Milestone Pills - Emerald/Green accents -->
                            <div
                                class="flex flex-wrap items-center justify-between gap-2 mt-4 text-[11px] text-slate-400 font-medium">
                                <span class="flex items-center gap-1.5 text-acc-green"><i
                                        class="fa-solid fa-circle-check"></i> Desain UI Editorial</span>
                                <span class="flex items-center gap-1.5 text-acc-green"><i
                                        class="fa-solid fa-circle-check"></i> Sistem Backend</span>
                                <span class="flex items-center gap-1.5 text-acc-purple"><i
                                        class="fa-solid fa-spinner animate-spin text-[10px]"></i> Integrasi Portal
                                    (85%)</span>
                            </div>
                        </div>


                        <!-- ===================================================== -->
                        <!-- EMAIL NOTIFICATION INPUT FORM                         -->
                        <!-- ===================================================== -->
                        <form id="subscribe-form" class="mt-10 max-w-md mx-auto flex flex-col sm:flex-row gap-3">
                            <div class="relative flex-1">
                                <i
                                    class="fa-regular fa-envelope absolute left-4 top-1/2 -translate-y-1/2 text-slate-500 text-sm"></i>
                                <input type="email" id="subscriber-email" required placeholder="Masukkan email Anda..."
                                    class="input-field w-full text-xs rounded-xl pl-11 pr-4 py-3.5 outline-none transition-all placeholder:text-slate-600">
                            </div>
                            <button type="submit"
                                class="glass-button-primary px-6 py-3.5 rounded-xl font-heading font-semibold text-xs text-white tracking-wider uppercase flex items-center justify-center space-x-2 magnetic-btn">
                                <span>Notifikasi Saya</span>
                                <i class="fa-solid fa-paper-plane text-xs"></i>
                            </button>
                        </form>

                    </div>
                </div>
            </div>


            <!-- ========================================================= -->
            <!-- ACTION BUTTONS SECTION                                    -->
            <!-- ========================================================= -->
            <div class="reveal-element flex flex-wrap items-center justify-center gap-4 sm:gap-6 mb-16 fade-in">

                <!-- Contact Us Button - Blue accent from photo logo -->
                <button id="btn-open-contact"
                    class="glass-button px-8 py-4 rounded-2xl font-heading font-bold text-xs sm:text-sm text-white tracking-widest uppercase shadow-2xl flex items-center space-x-3 magnetic-btn group">
                    <i
                        class="fa-solid fa-headset text-base text-acc-blue group-hover:rotate-12 transition-transform duration-300"></i>
                    <span>Contact Us</span>
                    <i
                        class="fa-solid fa-arrow-right text-xs text-slate-500 group-hover:translate-x-1 transition-transform duration-300"></i>
                </button>

                <!-- Instagram Button - Blue text from photo text -->
                <a href="https://instagram.com" target="_blank" rel="noopener noreferrer"
                    class="glass-button px-8 py-4 rounded-2xl font-heading font-bold text-xs sm:text-sm text-white tracking-widest uppercase flex items-center space-x-3 magnetic-btn group">
                    <i
                        class="fa-brands fa-instagram text-lg text-white group-hover:scale-125 transition-transform duration-300"></i>
                    <span class="text-acc-blue">Instagram Official</span>
                    <i
                        class="fa-solid fa-arrow-up-right-from-square text-xs text-slate-500 group-hover:text-white transition-colors"></i>
                </a>
            </div>

        </div>
    </main>


    <!-- ================================================================= -->
    <!-- PORTFOLIO BRANDS SHOWCASE SECTION - Updated Navy theme            -->
    <!-- ================================================================= -->
    <section class="relative z-10 py-16 border-t border-white/5 bg-trans-navy-dark/70 backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-6 sm:px-12 text-center fade-in">

            <p class="text-[11px] font-bold uppercase tracking-[0.3em] text-slate-500 mb-10 reveal-element">
                Kuliner Terkemuka PT Trans Food & Beverage
            </p>

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4 sm:gap-6">

                <!-- Brand 1 - The Coffee Bean (Blue Accent from theme) -->
                <div
                    class="glass-card p-5 rounded-2xl flex flex-col items-center justify-center space-y-2.5 text-center transition-all duration-300 group reveal-element">
                    <div
                        class="w-10 h-10 rounded-xl bg-acc-blue/10 border border-acc-blue/20 flex items-center justify-center text-acc-blue group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-mug-hot text-base"></i>
                    </div>
                    <span class="font-heading font-bold text-xs text-white">The Coffee Bean</span>
                    <span class="text-[10px] text-slate-400">& Tea Leaf</span>
                </div>

                <!-- Brand 2 - Wendy's (Red Accent) -->
                <div
                    class="glass-card p-5 rounded-2xl flex flex-col items-center justify-center space-y-2.5 text-center transition-all duration-300 group reveal-element">
                    <div
                        class="w-10 h-10 rounded-xl bg-acc-red/10 border border-acc-red/20 flex items-center justify-center text-acc-red group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-burger text-base"></i>
                    </div>
                    <span class="font-heading font-bold text-xs text-white">Wendy's</span>
                    <span class="text-[10px] text-slate-400">Indonesia</span>
                </div>

                <!-- Brand 3 - Baskin-Robbins (Purple Accent) -->
                <div
                    class="glass-card p-5 rounded-2xl flex flex-col items-center justify-center space-y-2.5 text-center transition-all duration-300 group reveal-element">
                    <div
                        class="w-10 h-10 rounded-xl bg-acc-purple/10 border border-acc-purple/20 flex items-center justify-center text-acc-purple group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-ice-cream text-base"></i>
                    </div>
                    <span class="font-heading font-bold text-xs text-white">Baskin-Robbins</span>
                    <span class="text-[10px] text-slate-400">Premium Ice Cream</span>
                </div>

                <!-- Brand 4 - Tasty Kitchen (Blue Accent) -->
                <div
                    class="glass-card p-5 rounded-2xl flex flex-col items-center justify-center space-y-2.5 text-center transition-all duration-300 group reveal-element">
                    <div
                        class="w-10 h-10 rounded-xl bg-acc-blue/10 border border-acc-blue/20 flex items-center justify-center text-acc-blue group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-utensils text-base"></i>
                    </div>
                    <span class="font-heading font-bold text-xs text-white">Tasty Kitchen</span>
                    <span class="text-[10px] text-slate-400">Asian Cuisine</span>
                </div>

                <!-- Brand 5 - Warung Wardani (Yellow Accent) -->
                <div
                    class="glass-card p-5 rounded-2xl flex flex-col items-center justify-center space-y-2.5 text-center transition-all duration-300 group reveal-element">
                    <div
                        class="w-10 h-10 rounded-xl bg-acc-yellow/10 border border-acc-yellow/20 flex items-center justify-center text-acc-yellow group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-bowl-rice text-base"></i>
                    </div>
                    <span class="font-heading font-bold text-xs text-white">Warung Wardani</span>
                    <span class="text-[10px] text-slate-400">Authentic Bali</span>
                </div>

                <!-- Brand 6 - Niku Niku (Green Accent) -->
                <div
                    class="glass-card p-5 rounded-2xl flex flex-col items-center justify-center space-y-2.5 text-center transition-all duration-300 group reveal-element">
                    <div
                        class="w-10 h-10 rounded-xl bg-acc-green/10 border border-acc-green/20 flex items-center justify-center text-acc-green group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-fire text-base"></i>
                    </div>
                    <span class="font-heading font-bold text-xs text-white">Gyukatsu Niku Niku</span>
                    <span class="text-[10px] text-slate-400">Japanese Grill</span>
                </div>

            </div>
        </div>
    </section>


    <!-- ================================================================= -->
    <!-- FOOTER - Updated Navy theme                                       -->
    <!-- ================================================================= -->
    <footer class="relative z-10 py-10 border-t border-white/5 bg-trans-navy-dark text-center text-xs text-slate-500">
        <div
            class="max-w-7xl mx-auto px-6 sm:px-12 flex flex-col sm:flex-row items-center justify-between gap-4 fade-in">

            <div class="flex items-center space-x-2">
                <span class="font-bold text-white">PT Trans Food & Beverage</span>
                <span>• Part of CT Corp</span>
            </div>

            <p class="text-[11px] tracking-wider opacity-60">© 2026 TRANS F&B OFFICIAL. ALL RIGHTS RESERVED.</p>

            <div class="flex items-center space-x-6">
                <a href="#" id="btn-footer-contact" class="hover:text-acc-blue transition-colors">Hubungi Kami</a>
                <a href="https://instagram.com" target="_blank"
                    class="hover:text-acc-blue transition-colors">Instagram</a>
            </div>
        </div>
    </footer>


    <!-- ================================================================= -->
    <!-- GLASSMORPHISM CONTACT US MODAL - Updated Navy Theme               -->
    <!-- ================================================================= -->
    <div id="contact-modal"
        class="fixed inset-0 z-[9000] bg-trans-navy-dark/85 backdrop-blur-2xl flex items-center justify-center p-4 opacity-0 pointer-events-none transition-all duration-300">

        <div
            class="glass-panel w-full max-w-xl rounded-3xl p-6 sm:p-10 relative transform scale-95 transition-all duration-300 border border-white/10 shadow-2xl">

            <!-- Close Button -->
            <button id="btn-close-contact"
                class="absolute top-6 right-6 w-10 h-10 rounded-full bg-white/5 hover:bg-acc-blue text-white flex items-center justify-center transition-colors"
                aria-label="Tutup modal">
                <i class="fa-solid fa-xmark text-lg"></i>
            </button>

            <!-- Modal Header - Updated color to Blue from photo -->
            <div class="flex items-center space-x-4 mb-6 reveal-element fade-in">
                <div
                    class="w-12 h-12 rounded-2xl bg-acc-blue/15 border border-acc-blue/30 text-acc-blue-glow flex items-center justify-center">
                    <i class="fa-solid fa-building text-xl"></i>
                </div>
                <div>
                    <h3 class="font-heading font-bold text-xl text-white">Hubungi Trans F&B Official</h3>
                    <p class="text-xs text-slate-400">Kantor Pusat PT Trans Food & Beverage</p>
                </div>
            </div>

            <!-- Contact Information Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-6 reveal-element fade-in">

                <div class="p-4 rounded-xl bg-white/5 border border-white/10 flex items-start space-x-3">
                    <i class="fa-solid fa-location-dot text-acc-blue mt-1"></i>
                    <div class="text-xs">
                        <span class="font-semibold text-white block mb-0.5">Kantor Pusat:</span>
                        <span class="text-slate-300">Menara Bank Mega, Jl. Kapten Tendean No. 12-14A, Jakarta
                            Selatan</span>
                    </div>
                </div>

                <div class="p-4 rounded-xl bg-white/5 border border-white/10 flex items-start space-x-3">
                    <i class="fa-solid fa-envelope text-acc-purple mt-1"></i>
                    <div class="text-xs">
                        <span class="font-semibold text-white block mb-0.5">Email Resmi:</span>
                        <a href="mailto:corporate@transfb.com"
                            class="text-acc-blue hover:underline">corporate@transfb.com</a>
                    </div>
                </div>
            </div>

            <!-- Inquiry Form inside Modal - New multi-color border box -->
            <div class="animated-border-box !rounded-2xl reveal-element fade-in">
                <div class="animated-border-content !rounded-[calc(1rem-2px)] p-6">
                    <form id="modal-contact-form" class="space-y-3">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <input type="text" required placeholder="Nama Lengkap"
                                class="input-field w-full text-xs rounded-xl px-4 py-3 outline-none transition-all placeholder:text-slate-600">
                            <input type="email" required placeholder="Email Anda"
                                class="input-field w-full text-xs rounded-xl px-4 py-3 outline-none transition-all placeholder:text-slate-600">
                        </div>
                        <input type="text" required placeholder="Subjek Pesan"
                            class="input-field w-full text-xs rounded-xl px-4 py-3 outline-none transition-all placeholder:text-slate-600">
                        <textarea required rows="3" placeholder="Pesan Anda..."
                            class="input-field w-full text-xs rounded-xl px-4 py-3 outline-none resize-none transition-all placeholder:text-slate-600"></textarea>

                        <button type="submit"
                            class="glass-button-primary w-full py-3.5 rounded-xl font-heading font-semibold text-xs text-white tracking-widest uppercase flex items-center justify-center space-x-2">
                            <span>Kirim Pesan</span>
                            <i class="fa-solid fa-paper-plane text-xs"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- ================================================================= -->
    <!-- TOAST NOTIFICATION CONTAINER - Navy Theme Green Accent            -->
    <!-- ================================================================= -->
    <div id="toast-notification"
        class="fixed bottom-6 right-6 z-[9999] transform translate-y-20 opacity-0 transition-all duration-500 pointer-events-none">
        <div
            class="glass-panel px-6 py-4 rounded-2xl flex items-center space-x-4 border border-acc-green/30 shadow-2xl">
            <div class="w-9 h-9 rounded-full bg-acc-green/15 text-acc-green flex items-center justify-center font-bold">
                <i class="fa-solid fa-circle-check text-lg"></i>
            </div>
            <div>
                <h4 id="toast-title" class="font-heading font-bold text-xs text-white">Berhasil!</h4>
                <p id="toast-message" class="text-xs text-slate-300">Terima kasih, data Anda telah tercatat.</p>
            </div>
        </div>
    </div>


    <!-- ================================================================= -->
    <!-- VANILLA JAVASCRIPT LOGIC (ALL-IN-ONE HIGH PERFORMANCE)            -->
    <!-- ================================================================= -->
    <script>
    document.addEventListener('DOMContentLoaded', () => {

        /* ------------------------------------------------------------- */
        /* 1. LOADING SCREEN ANIMATION LOGIC                            */
        /* ------------------------------------------------------------- */
        const loadingScreen = document.getElementById('loading-screen');
        const loaderProgressBar = document.getElementById('loader-progress-bar');
        const loadingPercentage = document.getElementById('loading-percentage');
        const loadingText = document.getElementById('loading-text');

        let progress = 0;
        const loadingInterval = setInterval(() => {
            progress += Math.floor(Math.random() * 18) + 12;
            if (progress >= 100) {
                progress = 100;
                clearInterval(loadingInterval);

                if (loaderProgressBar) loaderProgressBar.style.width = '100%';
                if (loadingPercentage) loadingPercentage.textContent = '100%';
                if (loadingText) loadingText.textContent = 'Siap! Mengalihkan...';

                setTimeout(() => {
                    loadingScreen.classList.add('opacity-0', 'pointer-events-none');
                    setTimeout(() => {
                        loadingScreen.style.display = 'none';
                        initScrollObserver();
                    }, 700);
                }, 400);
            } else {
                if (loaderProgressBar) loaderProgressBar.style.width = `${progress}%`;
                if (loadingPercentage) loadingPercentage.textContent = `${progress}%`;
            }
        }, 180);


        /* ------------------------------------------------------------- */
        /* 2. CANVAS INTERACTIVE PARTICLE SYSTEM - Color from photo logo  */
        /* ------------------------------------------------------------- */
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
                    this.vx = (Math.random() - 0.5) * 0.4; // Slower particles
                    this.vy = (Math.random() - 0.5) * 0.4;
                    this.radius = Math.random() * 1.5 + 0.5;
                    // Colors are sampled from photo logo gradient
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
                length: Math.min(window.innerWidth < 640 ? 25 : 50, 70)
            }, () => new Particle());

            function animateParticles() {
                ctx.clearRect(0, 0, width, height);

                for (let i = 0; i < particles.length; i++) {
                    particles[i].update();
                    particles[i].draw();

                    for (let j = i + 1; j < particles.length; j++) {
                        const dx = particles[i].x - particles[j].x;
                        const dy = particles[i].y - particles[j].y;
                        const dist = Math.sqrt(dx * dx + dy * dy);

                        if (dist < 110) {
                            ctx.beginPath();
                            ctx.moveTo(particles[i].x, particles[i].y);
                            ctx.lineTo(particles[j].x, particles[j].y);
                            // Connection color is faint Blue
                            ctx.strokeStyle = `rgba(59, 130, 246, ${0.15 * (1 - dist / 110)})`;
                            ctx.lineWidth = 0.5;
                            ctx.stroke();
                        }
                    }
                }
                requestAnimationFrame(animateParticles);
            }
            animateParticles();
        }


        /* ------------------------------------------------------------- */
        /* 3. FLIP COUNTDOWN TIMER LOGIC (FIXED STATIC TARGET)           */
        /* ------------------------------------------------------------- */
        // Ubah target date ke tanggal peluncuran pasti (Contoh: 1 Oktober 2026 00:00:00)
        const targetDate = new Date('October 1, 2026 00:00:00').getTime();

        const timerDays = document.getElementById('timer-days');
        const timerHours = document.getElementById('timer-hours');
        const timerMinutes = document.getElementById('timer-minutes');
        const timerSeconds = document.getElementById('timer-seconds');

        function updateTimer() {
            const now = new Date().getTime();
            const distance = targetDate - now;

            // Jika waktu sudah lewat
            if (distance < 0) {
                if (timerDays) timerDays.textContent = "00";
                if (timerHours) timerHours.textContent = "00";
                if (timerMinutes) timerMinutes.textContent = "00";
                if (timerSeconds) timerSeconds.textContent = "00";
                return;
            }

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            setFlipDigit(timerDays, days);
            setFlipDigit(timerHours, hours);
            setFlipDigit(timerMinutes, minutes);
            setFlipDigit(timerSeconds, seconds);
        }

        function setFlipDigit(element, value) {
            if (!element) return;
            const formatted = value < 10 ? `0${value}` : `${value}`;
            if (element.textContent !== formatted) {
                const flipUnit = element.closest('.flip-unit');
                if (flipUnit) {
                    // Remove class first to reset animation if rapid changes occur
                    flipUnit.classList.remove('do-update');
                    // Force reflow to restart animation
                    void flipUnit.offsetWidth;
                    flipUnit.classList.add('do-update');
                    // Clean up class after animation completes
                    setTimeout(() => flipUnit.classList.remove('do-update'), 500);
                }
                element.textContent = formatted;
            }
        }

        setInterval(updateTimer, 1000);
        updateTimer();
        /* ------------------------------------------------------------- */
        /* 4. MOUSE PARALLAX TILT ON MAIN GLASS CARD                    */
        /* ------------------------------------------------------------- */
        const parallaxCard = document.getElementById('parallax-card');
        if (parallaxCard) {
            window.addEventListener('mousemove', (e) => {
                const xAxis = (window.innerWidth / 2 - e.clientX) / 50; // gentler tilt
                const yAxis = (window.innerHeight / 2 - e.clientY) / 50;
                parallaxCard.style.transform =
                    `perspective(1000px) rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
            });
        }


        /* ------------------------------------------------------------- */
        /* 5. MAGNETIC BUTTON HOVER EFFECT                               */
        /* ------------------------------------------------------------- */
        document.querySelectorAll('.magnetic-btn').forEach(btn => {
            btn.addEventListener('mousemove', (e) => {
                const rect = btn.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;
                btn.style.transform = `translate(${x * 0.22}px, ${y * 0.22}px)`;
            });
            btn.addEventListener('mouseleave', () => {
                btn.style.transform = `translate(0px, 0px)`;
            });
        });


        /* ------------------------------------------------------------- */
        /* 6. BUTTON CLICK RIPPLE EFFECT                                 */
        /* ------------------------------------------------------------- */
        document.querySelectorAll('.glass-button, .glass-button-primary').forEach(button => {
            button.addEventListener('click', function(e) {
                const rect = this.getBoundingClientRect();
                const circle = document.createElement('span');
                const diameter = Math.max(rect.width, rect.height);
                const radius = diameter / 2;

                circle.style.width = circle.style.height = `${diameter}px`;
                circle.style.left = `${e.clientX - rect.left - radius}px`;
                circle.style.top = `${e.clientY - rect.top - radius}px`;
                circle.classList.add('ripple');

                const existingRipple = this.querySelector('.ripple');
                if (existingRipple) existingRipple.remove();

                this.appendChild(circle);
            });
        });


        /* ------------------------------------------------------------- */
        /* 7. INTERSECTION OBSERVER SCROLL REVEAL                        */
        /* ------------------------------------------------------------- */
        function initScrollObserver() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                    }
                });
            }, {
                threshold: 0.12 // Trigger slightly later
            });

            document.querySelectorAll('.reveal-element').forEach(el => observer.observe(el));
        }


        /* ------------------------------------------------------------- */
        /* 8. CONTACT MODAL & TOAST HANDLERS                            */
        /* ------------------------------------------------------------- */
        const contactModal = document.getElementById('contact-modal');
        const btnOpenContact = document.getElementById('btn-open-contact');
        const btnFooterContact = document.getElementById('btn-footer-contact');
        const btnCloseContact = document.getElementById('btn-close-contact');
        const modalContactForm = document.getElementById('modal-contact-form');
        const subscribeForm = document.getElementById('subscribe-form');

        function openModal() {
            if (contactModal) {
                contactModal.classList.remove('opacity-0', 'pointer-events-none');
                contactModal.children[0].classList.remove('scale-95');
                contactModal.children[0].classList.add('scale-100');
            }
        }

        function closeModal() {
            if (contactModal) {
                contactModal.children[0].classList.remove('scale-100');
                contactModal.children[0].classList.add('scale-95');
                contactModal.classList.add('opacity-0', 'pointer-events-none');
            }
        }

        if (btnOpenContact) btnOpenContact.addEventListener('click', openModal);
        if (btnFooterContact) btnFooterContact.addEventListener('click', (e) => {
            e.preventDefault();
            openModal();
        });
        if (btnCloseContact) btnCloseContact.addEventListener('click', closeModal);

        if (contactModal) {
            contactModal.addEventListener('click', (e) => {
                if (e.target === contactModal) closeModal();
            });
        }

        // Toast Function
        function showToast(title, message) {
            const toast = document.getElementById('toast-notification');
            const toastTitle = document.getElementById('toast-title');
            const toastMessage = document.getElementById('toast-message');

            if (toast && toastTitle && toastMessage) {
                toastTitle.textContent = title;
                toastMessage.textContent = message;

                toast.classList.remove('translate-y-20', 'opacity-0', 'pointer-events-none');
                toast.classList.add('translate-y-0', 'opacity-100');

                setTimeout(() => {
                    toast.classList.remove('translate-y-0', 'opacity-100');
                    toast.classList.add('translate-y-20', 'opacity-0', 'pointer-events-none');
                }, 4000);
            }
        }

        // Modal Form Submission
        if (modalContactForm) {
            modalContactForm.addEventListener('submit', (e) => {
                e.preventDefault();
                closeModal();
                showToast('Pesan Terkirim!',
                    'Tim PT Trans Food & Beverage akan membalas pesan Anda segera.');
                modalContactForm.reset();
            });
        }

        // Email Subscribe Form Submission
        if (subscribeForm) {
            subscribeForm.addEventListener('submit', (e) => {
                e.preventDefault();
                const emailInput = document.getElementById('subscriber-email');
                if (emailInput && emailInput.value) {
                    showToast('Berhasil Terdaftar!',
                        `Email ${emailInput.value} telah didaftarkan untuk notifikasi.`);
                    subscribeForm.reset();
                }
            });
        }

    });
    </script>
</body>

</html>