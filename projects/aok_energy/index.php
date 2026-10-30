<!DOCTYPE html>
<html lang="en" class="dark scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A.O.K Energy & Infrastructure | Powering Global Horizon</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        navy: {
                            950: '#060B13',
                            900: '#0A111E',
                            800: '#0F1B2F',
                            700: '#182A45',
                            600: '#233B5F',
                        },
                        amber: {
                            400: '#FFC107',
                            500: '#FF9800',
                            600: '#E68A00',
                        },
                        gold: '#D4AF37',
                    },
                    fontFamily: {
                        sans: ['Outfit', 'Inter', 'sans-serif'],
                        mono: ['JetBrains Mono', 'monospace'],
                    },
                    backgroundImage: {
                        'hero-gradient': 'radial-gradient(circle at 50% 30%, rgba(230, 138, 0, 0.12) 0%, rgba(10, 17, 30, 0.95) 70%)',
                        'card-gradient': 'linear-gradient(135deg, rgba(24, 42, 69, 0.6) 0%, rgba(10, 17, 30, 0.8) 100%)',
                        'gold-gradient': 'linear-gradient(135deg, #FFB800 0%, #E67E00 100%)',
                    }
                }
            }
        }
    </script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;600&family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- FontAwesome & Chart.js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        body {
            font-family: 'Outfit', sans-serif;
            background-color: #060B13;
            color: #E2E8F0;
            overflow-x: hidden;
        }

        /* Glassmorphism Styles */
        .glass-panel {
            background: rgba(15, 27, 47, 0.65);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 184, 0, 0.12);
        }

        .glass-card {
            background: linear-gradient(145deg, rgba(24, 42, 69, 0.4) 0%, rgba(10, 17, 30, 0.7) 100%);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .glass-card:hover {
            border-color: rgba(255, 184, 0, 0.4);
            transform: translateY(-5px);
            box-shadow: 0 15px 35px -10px rgba(230, 138, 0, 0.2);
        }

        .gold-glow {
            text-shadow: 0 0 12px rgba(255, 184, 0, 0.5);
        }

        .gold-border-glow:hover {
            box-shadow: 0 0 20px rgba(230, 138, 0, 0.3);
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #060B13;
        }
        ::-webkit-scrollbar-thumb {
            background: #182A45;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #FFB800;
        }

        @keyframes pulse-slow {
            0%, 100% { opacity: 0.3; transform: scale(1); }
            50% { opacity: 0.6; transform: scale(1.05); }
        }

        .animate-pulse-slow {
            animation: pulse-slow 6s infinite ease-in-out;
        }
    </style>
</head>
<body class="selection:bg-amber-500 selection:text-navy-950"><style id="ko-portfolio-return">.ko-portfolio-return{position:fixed;left:20px;bottom:20px;z-index:99999;display:inline-flex;align-items:center;gap:9px;padding:13px 18px;border:1px solid rgba(255,255,255,.22);border-radius:999px;background:rgba(8,8,8,.88);backdrop-filter:blur(14px);color:#fff;text-decoration:none;font:600 12px/1 Arial,sans-serif;box-shadow:0 10px 35px rgba(0,0,0,.3);transition:.25s}.ko-portfolio-return:hover{transform:translateY(-3px);border-color:#d7ff45;color:#d7ff45}.ko-portfolio-return .ko-arrow{font-size:17px}@media(max-width:600px){.ko-portfolio-return{left:12px;bottom:12px;padding:11px 14px;font-size:11px}}</style><a class="ko-portfolio-return" href="/KO_DIVINII_PREMIUM_PORTFOLIO/#work" aria-label="Return to K.O DIVINII portfolio"><span class="ko-arrow">←</span> Back to Portfolio</a>

    <!-- Top Market Ticker Bar -->
    <div class="bg-navy-950 border-b border-navy-700/50 py-2 text-xs font-mono text-gray-400 sticky top-0 z-50 backdrop-blur-md bg-opacity-90">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between overflow-x-auto whitespace-nowrap scrollbar-none">
            <div class="flex items-center space-x-2 text-amber-500 font-semibold uppercase tracking-wider pr-4 border-r border-navy-700">
                <span class="inline-block w-2 h-2 rounded-full bg-emerald-500 animate-ping"></span>
                <span>Market Live</span>
            </div>
            
            <div id="ticker-container" class="flex items-center space-x-8 px-4 text-xs">
                <!-- Live JS Populated Items -->
                <div class="flex items-center space-x-2">
                    <span class="text-gray-300 font-medium">BRENT CRUDE:</span>
                    <span id="brent-price" class="text-white">$82.45</span>
                    <span id="brent-change" class="text-emerald-400"><i class="fa-solid fa-caret-up"></i> +1.24%</span>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="text-gray-300 font-medium">WTI CRUDE:</span>
                    <span id="wti-price" class="text-white">$78.10</span>
                    <span id="wti-change" class="text-emerald-400"><i class="fa-solid fa-caret-up"></i> +0.85%</span>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="text-gray-300 font-medium">NATURAL GAS:</span>
                    <span id="gas-price" class="text-white">$2.68</span>
                    <span id="gas-change" class="text-rose-400"><i class="fa-solid fa-caret-down"></i> -0.42%</span>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="text-gray-300 font-medium">OPEC BASKET:</span>
                    <span id="opec-price" class="text-white">$84.15</span>
                    <span id="opec-change" class="text-emerald-400"><i class="fa-solid fa-caret-up"></i> +0.65%</span>
                </div>
            </div>

            <div class="hidden md:flex items-center space-x-4 pl-4 border-l border-navy-700 text-gray-400">
                <span><i class="fa-regular fa-clock text-amber-500 mr-1"></i> UTC <span id="utc-clock">00:00:00</span></span>
            </div>
        </div>
    </div>

    <!-- Main Navigation Header -->
    <header class="sticky top-9 z-40 bg-navy-900/80 backdrop-blur-xl border-b border-navy-700/60 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                
                <!-- Logo A.O.K -->
                <a href="#" class="flex items-center space-x-3 group">
                    <div class="relative w-12 h-12 flex items-center justify-center">
                        <div class="absolute inset-0 bg-amber-500/20 rounded-xl blur-sm group-hover:bg-amber-500/40 transition-all"></div>
                        <!-- Animated Vector SVG Logo -->
                        <svg class="w-10 h-10 relative z-10 text-amber-500" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M50 10 L85 80 L65 80 L50 45 L35 80 L15 80 Z" fill="url(#goldGradient)" />
                            <circle cx="50" cy="30" r="8" fill="#FF5500" class="animate-pulse" />
                            <path d="M50 45 L60 65 L40 65 Z" fill="#0A111E" />
                            <defs>
                                <linearGradient id="goldGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" stop-color="#FFB800" />
                                    <stop offset="100%" stop-color="#E65500" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-2xl font-extrabold tracking-wider bg-clip-text text-transparent bg-gradient-to-r from-white via-gray-200 to-amber-400">A.O.K</span>
                        <span class="text-[10px] tracking-[0.25em] text-amber-500 font-semibold uppercase -mt-1">ENERGY & GAS</span>
                    </div>
                </a>

                <!-- Desktop Nav Items -->
                <nav class="hidden lg:flex items-center space-x-8 text-sm font-medium text-gray-300">
                    <a href="#hero" class="hover:text-amber-400 transition-colors py-2 border-b-2 border-transparent hover:border-amber-400">Home</a>
                    <a href="#divisions" class="hover:text-amber-400 transition-colors py-2 border-b-2 border-transparent hover:border-amber-400">Divisions</a>
                    <a href="#operations" class="hover:text-amber-400 transition-colors py-2 border-b-2 border-transparent hover:border-amber-400">Global Operations</a>
                    <a href="#sustainability" class="hover:text-amber-400 transition-colors py-2 border-b-2 border-transparent hover:border-amber-400">Sustainability (ESG)</a>
                    <a href="#news" class="hover:text-amber-400 transition-colors py-2 border-b-2 border-transparent hover:border-amber-400">Insights</a>
                    <a href="#contact" class="hover:text-amber-400 transition-colors py-2 border-b-2 border-transparent hover:border-amber-400">Contact</a>
                </nav>

                <!-- CTA & Database Status -->
                <div class="hidden sm:flex items-center space-x-4">
                    <!-- <button onclick="openModal('dbModal')" class="text-xs font-mono px-3 py-1.5 rounded-lg border border-navy-600 bg-navy-800 hover:bg-navy-700 text-amber-400 flex items-center space-x-2 transition">
                        <i class="fa-solid fa-database"></i>
                        <span>XAMPP / SQL Ready</span>
                    </button> -->
                    
                    <a href="#contact" class="relative inline-flex items-center justify-center p-0.5 overflow-hidden text-sm font-medium rounded-xl group bg-gradient-to-br from-amber-500 to-orange-600 group-hover:from-amber-500 group-hover:to-orange-600 hover:text-white text-navy-950 font-bold shadow-lg shadow-amber-500/20">
                        <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-amber-500 rounded-lg group-hover:bg-opacity-0 text-navy-950 group-hover:text-white">
                            Partner With Us <i class="fa-solid fa-arrow-right ml-2 text-xs"></i>
                        </span>
                    </a>
                </div>

                <!-- Mobile Menu Toggle Button -->
                <button id="mobile-menu-btn" class="lg:hidden text-gray-300 hover:text-white focus:outline-none">
                    <i class="fa-solid fa-bars text-2xl"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Drawer -->
        <div id="mobile-menu" class="hidden lg:hidden bg-navy-900/95 border-b border-navy-700 px-4 pt-2 pb-6 space-y-3">
            <a href="#hero" class="block py-2 text-gray-300 hover:text-amber-400">Home</a>
            <a href="#divisions" class="block py-2 text-gray-300 hover:text-amber-400">Divisions</a>
            <a href="#operations" class="block py-2 text-gray-300 hover:text-amber-400">Global Operations</a>
            <a href="#sustainability" class="block py-2 text-gray-300 hover:text-amber-400">Sustainability (ESG)</a>
            <a href="#news" class="block py-2 text-gray-300 hover:text-amber-400">Insights</a>
            <a href="#contact" class="block py-2 text-gray-300 hover:text-amber-400">Contact</a>
            <!-- <button onclick="openModal('dbModal')" class="w-full text-left py-2 text-amber-400 font-mono text-sm">
                <i class="fa-solid fa-database mr-2"></i> View XAMPP / SQL Code
            </button> -->
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden pt-12 pb-24 bg-hero-gradient">
        <!-- Interactive Canvas Background -->
        <canvas id="particle-canvas" class="absolute inset-0 z-0 pointer-events-none opacity-60"></canvas>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- Left Column Text Content -->
                <div class="lg:col-span-7 space-y-8 text-center lg:text-left">
                    <div class="inline-flex items-center space-x-2 px-3 py-1.5 rounded-full glass-panel border border-amber-500/30 text-amber-400 text-xs font-semibold tracking-wider uppercase">
                        <span class="w-2 h-2 rounded-full bg-amber-500 animate-ping"></span>
                        <span>Next-Gen Hydrocarbons & Transition Energy</span>
                    </div>

                    <h1 class="text-4xl sm:text-6xl xl:text-7xl font-black tracking-tight leading-none text-white">
                        Powering <span class="bg-clip-text text-transparent bg-gradient-to-r from-amber-400 via-amber-200 to-orange-500">Global Horizon,</span> <br>
                        Engineering Tomorrow.
                    </h1>

                    <p class="text-lg sm:text-xl text-gray-300 font-light max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                        A.O.K Energy pioneers integrated offshore deepwater exploration, LNG midstream logistics, and high-efficiency hybrid solar integration to meet the world’s expanding power demands safely and sustainably.
                    </p>

                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 pt-4">
                        <a href="#operations" class="w-full sm:w-auto px-8 py-4 rounded-xl bg-gradient-to-r from-amber-500 to-orange-600 text-navy-950 font-bold hover:brightness-110 transition shadow-lg shadow-amber-500/20 text-center flex items-center justify-center space-x-3">
                            <span>Explore Strategic Assets</span>
                            <i class="fa-solid fa-compass"></i>
                        </a>

                        <a href="#sustainability" class="w-full sm:w-auto px-8 py-4 rounded-xl glass-panel text-gray-200 hover:text-white hover:border-amber-500/50 transition text-center flex items-center justify-center space-x-3">
                            <i class="fa-solid fa-leaf text-emerald-400"></i>
                            <span>ESG Transition Calculator</span>
                        </a>
                    </div>

                    <!-- Live Key Metrics Ribbon -->
                    <div class="grid grid-cols-3 gap-4 pt-8 border-t border-navy-700/60 max-w-xl mx-auto lg:mx-0">
                        <div>
                            <div class="text-2xl sm:text-3xl font-extrabold text-amber-400 font-mono" id="counter-barrels">0</div>
                            <div class="text-xs text-gray-400 uppercase tracking-wider font-medium mt-1">BPD Daily Output</div>
                        </div>
                        <div>
                            <div class="text-2xl sm:text-3xl font-extrabold text-amber-400 font-mono" id="counter-facilities">0</div>
                            <div class="text-xs text-gray-400 uppercase tracking-wider font-medium mt-1">Global Assets</div>
                        </div>
                        <div>
                            <div class="text-2xl sm:text-3xl font-extrabold text-amber-400 font-mono" id="counter-safety">0</div>
                            <div class="text-xs text-gray-400 uppercase tracking-wider font-medium mt-1">Zero-LTI Hours</div>
                        </div>
                    </div>
                </div>

                <!-- Right Column Interactive Floating Visual Card -->
                <div class="lg:col-span-5 relative">
                    <div class="relative mx-auto max-w-md lg:max-w-none">
                        <!-- Glowing backdrop ring -->
                        <div class="absolute -inset-1 rounded-3xl bg-gradient-to-r from-amber-500/30 to-orange-600/30 blur-2xl animate-pulse-slow"></div>

                        <div class="relative rounded-3xl glass-card p-6 sm:p-8 space-y-6">
                            <div class="flex items-center justify-between border-b border-navy-700/80 pb-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 rounded-xl bg-amber-500/20 flex items-center justify-center text-amber-400">
                                        <i class="fa-solid fa-tower-cell text-lg"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-white">A.O.K Deepwater Rig 09</h3>
                                        <p class="text-xs text-gray-400">Golf Deepwater Basin • Active</p>
                                    </div>
                                </div>
                                <span class="px-2.5 py-1 rounded-full bg-emerald-500/20 text-emerald-400 text-xs font-mono font-semibold border border-emerald-500/30">ONLINE</span>
                            </div>

                            <!-- Live Telemetry Card Mockup -->
                            <div class="space-y-4">
                                <div class="bg-navy-950/80 p-4 rounded-xl border border-navy-700/50 space-y-2">
                                    <div class="flex justify-between text-xs">
                                        <span class="text-gray-400">Extraction Pressure</span>
                                        <span class="text-amber-400 font-mono font-bold">14,250 PSI</span>
                                    </div>
                                    <div class="w-full bg-navy-800 rounded-full h-2">
                                        <div class="bg-gradient-to-r from-amber-500 to-orange-500 h-2 rounded-full" style="width: 82%"></div>
                                    </div>
                                </div>

                                <div class="grid grid-cols-2 gap-3 text-xs">
                                    <div class="bg-navy-950/80 p-3 rounded-xl border border-navy-700/50">
                                        <div class="text-gray-400">Methane Recovery</div>
                                        <div class="text-lg font-bold text-white font-mono mt-1">99.4%</div>
                                    </div>
                                    <div class="bg-navy-950/80 p-3 rounded-xl border border-navy-700/50">
                                        <div class="text-gray-400">Solar Power Hybrid</div>
                                        <div class="text-lg font-bold text-emerald-400 font-mono mt-1">3.2 MW</div>
                                    </div>
                                </div>
                            </div>

                            <button onclick="openModal('rigModal')" class="w-full py-3 rounded-xl bg-navy-800 hover:bg-navy-700 text-amber-400 font-semibold text-xs uppercase tracking-wider border border-amber-500/20 transition flex items-center justify-center space-x-2">
                                <span>View Live Asset Telemetry</span>
                                <i class="fa-solid fa-chart-line"></i>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Core Divisions Section -->
    <section id="divisions" class="py-24 bg-navy-900/50 relative border-t border-b border-navy-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                <h2 class="text-xs font-semibold text-amber-500 uppercase tracking-widest">Operational Excellence</h2>
                <p class="text-3xl sm:text-5xl font-extrabold text-white">Integrated Energy Value Chain</p>
                <p class="text-gray-400">From subsurface reservoir evaluation to refined distribution and clean hybrid transition grids.</p>
            </div>

            <!-- Division Grid Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Upstream -->
                <div class="glass-card rounded-2xl p-6 relative overflow-hidden group">
                    <div class="w-14 h-14 rounded-2xl bg-amber-500/10 border border-amber-500/20 flex items-center justify-center text-amber-400 mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-oil-well text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Upstream Exploration</h3>
                    <p class="text-sm text-gray-400 mb-4 leading-relaxed">
                        Deepwater ultra-deep drilling, seismic 3D imaging, and high-yield offshore extraction optimized with AI technology.
                    </p>
                    <ul class="text-xs space-y-2 text-gray-300 font-mono border-t border-navy-700/60 pt-4">
                        <li><i class="fa-solid fa-check text-amber-500 mr-2"></i>3D Seismic Reservoir Mapping</li>
                        <li><i class="fa-solid fa-check text-amber-500 mr-2"></i>Ultra-Deepwater Rigs</li>
                        <li><i class="fa-solid fa-check text-amber-500 mr-2"></i>Zero Flaring Technology</li>
                    </ul>
                </div>

                <!-- Midstream -->
                <div class="glass-card rounded-2xl p-6 relative overflow-hidden group">
                    <div class="w-14 h-14 rounded-2xl bg-amber-500/10 border border-amber-500/20 flex items-center justify-center text-amber-400 mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-ship text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Midstream & Logistics</h3>
                    <p class="text-sm text-gray-400 mb-4 leading-relaxed">
                        Global LNG cryogenic tanker fleets, underground strategic storage, and cross-border high-pressure pipeline networks.
                    </p>
                    <ul class="text-xs space-y-2 text-gray-300 font-mono border-t border-navy-700/60 pt-4">
                        <li><i class="fa-solid fa-check text-amber-500 mr-2"></i>LNG Floating Liquefaction</li>
                        <li><i class="fa-solid fa-check text-amber-500 mr-2"></i>Automated Pipeline Monitoring</li>
                        <li><i class="fa-solid fa-check text-amber-500 mr-2"></i>Strategic Storage Terminals</li>
                    </ul>
                </div>

                <!-- Downstream -->
                <div class="glass-card rounded-2xl p-6 relative overflow-hidden group">
                    <div class="w-14 h-14 rounded-2xl bg-amber-500/10 border border-amber-500/20 flex items-center justify-center text-amber-400 mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-industry text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Downstream Refining</h3>
                    <p class="text-sm text-gray-400 mb-4 leading-relaxed">
                        High-efficiency complex refining complexes manufacturing ultra-low sulfur diesel, aviation fuels, and petrochemical feedstocks.
                    </p>
                    <ul class="text-xs space-y-2 text-gray-300 font-mono border-t border-navy-700/60 pt-4">
                        <li><i class="fa-solid fa-check text-amber-500 mr-2"></i>Euro-VI Clean Fuel Production</li>
                        <li><i class="fa-solid fa-check text-amber-500 mr-2"></i>Specialty Petrochemicals</li>
                        <li><i class="fa-solid fa-check text-amber-500 mr-2"></i>Aviation Hydrant Terminals</li>
                    </ul>
                </div>

                <!-- Renewable Hybrid -->
                <div class="glass-card rounded-2xl p-6 relative overflow-hidden group border-amber-500/40">
                    <div class="w-14 h-14 rounded-2xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-solar-panel text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Hybrid Clean Power</h3>
                    <p class="text-sm text-gray-400 mb-4 leading-relaxed">
                        Integrating offshore wind power, solar arrays, and green hydrogen technology into classic oil & gas production assets.
                    </p>
                    <ul class="text-xs space-y-2 text-gray-300 font-mono border-t border-navy-700/60 pt-4">
                        <li><i class="fa-solid fa-check text-emerald-400 mr-2"></i>Green Hydrogen Pilots</li>
                        <li><i class="fa-solid fa-check text-emerald-400 mr-2"></i>Offshore Wind Microgrids</li>
                        <li><i class="fa-solid fa-check text-emerald-400 mr-2"></i>Carbon Capture & Storage</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- Global Operations Section -->
    <section id="operations" class="py-24 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
                <div>
                    <h2 class="text-xs font-semibold text-amber-500 uppercase tracking-widest mb-2">Strategic Assets</h2>
                    <p class="text-3xl sm:text-4xl font-extrabold text-white">Global Operations Portfolio</p>
                </div>

                <!-- Filter Controls -->
                <div class="flex flex-wrap gap-2 bg-navy-900/80 p-1.5 rounded-xl border border-navy-700 text-xs font-medium">
                    <button onclick="filterProjects('all')" class="filter-btn active px-4 py-2 rounded-lg bg-amber-500 text-navy-950 font-bold transition">All Facilities</button>
                    <button onclick="filterProjects('upstream')" class="filter-btn px-4 py-2 rounded-lg hover:bg-navy-800 text-gray-300 transition">Offshore Rig</button>
                    <button onclick="filterProjects('midstream')" class="filter-btn px-4 py-2 rounded-lg hover:bg-navy-800 text-gray-300 transition">LNG & Logistics</button>
                    <button onclick="filterProjects('renewable')" class="filter-btn px-4 py-2 rounded-lg hover:bg-navy-800 text-gray-300 transition">Hybrid Clean</button>
                </div>
            </div>

            <!-- Projects Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8" id="projects-grid">
                
                <!-- Project Item 1 -->
                <div class="project-card upstream glass-card rounded-2xl overflow-hidden group">
                    <div class="relative h-48 bg-navy-800 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=800&q=80" alt="Offshore Rig" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" onerror="this.src='https://placehold.co/800x600/0f1b2f/ffb800?text=A.O.K+Offshore+Rig'">
                        <div class="absolute inset-0 bg-gradient-to-t from-navy-950 via-transparent to-transparent"></div>
                        <span class="absolute top-4 left-4 px-3 py-1 rounded-full bg-amber-500/90 text-navy-950 font-bold text-xs uppercase">Deepwater Upstream</span>
                    </div>
                    <div class="p-6 space-y-4">
                        <h3 class="text-lg font-bold text-white group-hover:text-amber-400 transition">A.O.K Apex Deepwater Rig Alpha</h3>
                        <p class="text-xs text-gray-400">Location: Gulf Continental Shelf • Depth: 3,200m</p>
                        <div class="flex items-center justify-between text-xs font-mono pt-2 border-t border-navy-700/60">
                            <span class="text-gray-400">Daily Capacity:</span>
                            <span class="text-amber-400 font-bold">185,000 BPD</span>
                        </div>
                    </div>
                </div>

                <!-- Project Item 2 -->
                <div class="project-card midstream glass-card rounded-2xl overflow-hidden group">
                    <div class="relative h-48 bg-navy-800 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=800&q=80" alt="LNG Terminal" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" onerror="this.src='https://placehold.co/800x600/0f1b2f/ffb800?text=A.O.K+LNG+Terminal'">
                        <div class="absolute inset-0 bg-gradient-to-t from-navy-950 via-transparent to-transparent"></div>
                        <span class="absolute top-4 left-4 px-3 py-1 rounded-full bg-sky-500/90 text-navy-950 font-bold text-xs uppercase">Midstream LNG</span>
                    </div>
                    <p class="hidden">LNG Facility</p>
                    <div class="p-6 space-y-4">
                        <h3 class="text-lg font-bold text-white group-hover:text-amber-400 transition">Atlantis Floating LNG Terminal</h3>
                        <p class="text-xs text-gray-400">Location: Rotterdam Energy Hub • Cryogenic Fleet</p>
                        <div class="flex items-center justify-between text-xs font-mono pt-2 border-t border-navy-700/60">
                            <span class="text-gray-400">Storage Capacity:</span>
                            <span class="text-amber-400 font-bold">4.2M Tons / Yr</span>
                        </div>
                    </div>
                </div>

                <!-- Project Item 3 -->
                <div class="project-card renewable glass-card rounded-2xl overflow-hidden group">
                    <div class="relative h-48 bg-navy-800 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1466611653911-95081537e5b7?auto=format&fit=crop&w=800&q=80" alt="Hybrid Power" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" onerror="this.src='https://placehold.co/800x600/0f1b2f/ffb800?text=A.O.K+Hybrid+Solar'">
                        <div class="absolute inset-0 bg-gradient-to-t from-navy-950 via-transparent to-transparent"></div>
                        <span class="absolute top-4 left-4 px-3 py-1 rounded-full bg-emerald-500/90 text-navy-950 font-bold text-xs uppercase">Hybrid Transition</span>
                    </div>
                    <div class="p-6 space-y-4">
                        <h3 class="text-lg font-bold text-white group-hover:text-amber-400 transition">Sol-Gas Hybrid Microgrid Hub</h3>
                        <p class="text-xs text-gray-400">Location: North Sea Operations Field</p>
                        <div class="flex items-center justify-between text-xs font-mono pt-2 border-t border-navy-700/60">
                            <span class="text-gray-400">CO2 Offset:</span>
                            <span class="text-emerald-400 font-bold">420,000 MT / Yr</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Interactive Sustainability & ESG Calculator Section -->
    <section id="sustainability" class="py-24 bg-navy-900/60 relative border-t border-b border-navy-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <div class="lg:col-span-5 space-y-6">
                    <div class="inline-flex items-center space-x-2 px-3 py-1 rounded-full bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-xs font-semibold">
                        <i class="fa-solid fa-leaf"></i>
                        <span>Target 2035 Net Zero Footprint</span>
                    </div>
                    <h2 class="text-3xl sm:text-5xl font-extrabold text-white">Interactive ESG Transition Calculator</h2>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Use our real-time scenario modeling tool to calculate carbon intensity reductions when deploying A.O.K’s closed-loop methane recovery and solar-gas microgrids across major field operations.
                    </p>

                    <!-- Calculator Inputs -->
                    <div class="glass-panel p-6 rounded-2xl space-y-6">
                        <div>
                            <div class="flex justify-between text-xs font-semibold mb-2">
                                <label class="text-gray-300">Annual Production Level (Barrels/Day):</label>
                                <span id="val-bpd" class="text-amber-400 font-mono">150,000 BPD</span>
                            </div>
                            <input type="range" id="input-bpd" min="50000" max="500000" step="10000" value="150000" class="w-full accent-amber-500 cursor-pointer">
                        </div>

                        <div>
                            <div class="flex justify-between text-xs font-semibold mb-2">
                                <label class="text-gray-300">Hybrid Renewable Integration Ratio:</label>
                                <span id="val-renewable" class="text-emerald-400 font-mono">35%</span>
                            </div>
                            <input type="range" id="input-renewable" min="0" max="100" step="5" value="35" class="w-full accent-emerald-500 cursor-pointer">
                        </div>

                        <div>
                            <div class="flex justify-between text-xs font-semibold mb-2">
                                <label class="text-gray-300">Carbon Capture Efficiency (CCUS):</label>
                                <span id="val-ccus" class="text-sky-400 font-mono">60%</span>
                            </div>
                            <input type="range" id="input-ccus" min="10" max="95" step="5" value="60" class="w-full accent-sky-500 cursor-pointer">
                        </div>
                    </div>
                </div>

                <!-- Live Chart & ESG Output Panel -->
                <div class="lg:col-span-7">
                    <div class="glass-card p-6 sm:p-8 rounded-3xl space-y-6">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-bold text-white flex items-center">
                                <i class="fa-solid fa-chart-pie text-amber-500 mr-2"></i> Projected Emissions Impact
                            </h3>
                            <span class="px-3 py-1 rounded-full bg-emerald-500/20 text-emerald-400 font-mono text-xs font-bold border border-emerald-500/30">ESG Rating: A+</span>
                        </div>

                        <!-- Canvas Chart -->
                        <div class="h-64 relative">
                            <canvas id="esgChart"></canvas>
                        </div>

                        <!-- Computed Stat Boxes -->
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 pt-4 border-t border-navy-700">
                            <div class="bg-navy-950 p-4 rounded-xl border border-navy-800 text-center">
                                <div class="text-xs text-gray-400 mb-1">CO2 Reductions</div>
                                <div id="calc-co2" class="text-xl font-extrabold text-emerald-400 font-mono">485,000</div>
                                <div class="text-[10px] text-gray-500">Metric Tons / Yr</div>
                            </div>

                            <div class="bg-navy-950 p-4 rounded-xl border border-navy-800 text-center">
                                <div class="text-xs text-gray-400 mb-1">Energy Saved</div>
                                <div id="calc-mwh" class="text-xl font-extrabold text-amber-400 font-mono">182,500</div>
                                <div class="text-[10px] text-gray-500">MWh Equivalent</div>
                            </div>

                            <div class="col-span-2 sm:col-span-1 bg-navy-950 p-4 rounded-xl border border-navy-800 text-center">
                                <div class="text-xs text-gray-400 mb-1">Clean Credit Rating</div>
                                <div class="text-xl font-extrabold text-sky-400 font-mono">TIER-1</div>
                                <div class="text-[10px] text-gray-500">ISO 14064 Certified</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- News & Market Insights -->
    <section id="news" class="py-24 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between mb-12">
                <div>
                    <h2 class="text-xs font-semibold text-amber-500 uppercase tracking-widest mb-2">Corporate Updates</h2>
                    <p class="text-3xl sm:text-4xl font-extrabold text-white">Press Releases & Insights</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- Article 1 -->
                <div class="glass-card rounded-2xl p-6 flex flex-col justify-between space-y-4">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between text-xs text-amber-400 font-mono">
                            <span>PRESS RELEASE</span>
                            <span>OCT 24, 2026</span>
                        </div>
                        <h3 class="text-lg font-bold text-white hover:text-amber-400 transition cursor-pointer">
                            A.O.K Commissions $1.2B Ultra-Deepwater Drilling Complex in Gulf Basin
                        </h3>
                        <p class="text-xs text-gray-400 leading-relaxed">
                            Incorporating automated pressure valves and closed-loop natural gas recovery systems to reduce operational footprint.
                        </p>
                    </div>
                    <button onclick="openModal('newsModal1')" class="text-xs font-semibold text-amber-500 hover:text-amber-400 flex items-center space-x-1 pt-4 border-t border-navy-700">
                        <span>Read Full Announcement</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </button>
                </div>

                <!-- Article 2 -->
                <div class="glass-card rounded-2xl p-6 flex flex-col justify-between space-y-4">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between text-xs text-amber-400 font-mono">
                            <span>FINANCIAL REPORT</span>
                            <span>SEP 18, 2026</span>
                        </div>
                        <h3 class="text-lg font-bold text-white hover:text-amber-400 transition cursor-pointer">
                            Q3 Financial Results: Record Earnings Driven by High LNG Export Volumes
                        </h3>
                        <p class="text-xs text-gray-400 leading-relaxed">
                            Consolidated revenues up 18% year-over-year following successful expansion of European terminal network.
                        </p>
                    </div>
                    <button onclick="openModal('newsModal1')" class="text-xs font-semibold text-amber-500 hover:text-amber-400 flex items-center space-x-1 pt-4 border-t border-navy-700">
                        <span>Read Full Announcement</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </button>
                </div>

                <!-- Article 3 -->
                <div class="glass-card rounded-2xl p-6 flex flex-col justify-between space-y-4">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between text-xs text-amber-400 font-mono">
                            <span>SUSTAINABILITY</span>
                            <span>AUG 05, 2026</span>
                        </div>
                        <h3 class="text-lg font-bold text-white hover:text-amber-400 transition cursor-pointer">
                            A.O.K Partnering with Green Energy Offshore Wind Consortium
                        </h3>
                        <p class="text-xs text-gray-400 leading-relaxed">
                            Initiating a 500MW offshore wind power integration to drive zero-emission drilling operations.
                        </p>
                    </div>
                    <button onclick="openModal('newsModal1')" class="text-xs font-semibold text-amber-500 hover:text-amber-400 flex items-center space-x-1 pt-4 border-t border-navy-700">
                        <span>Read Full Announcement</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </button>
                </div>

            </div>
        </div>
    </section>

    <!-- Contact & Project Inquiry Section -->
    <section id="contact" class="py-24 bg-navy-900/40 relative border-t border-navy-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                
                <div class="lg:col-span-5 space-y-6">
                    <h2 class="text-xs font-semibold text-amber-500 uppercase tracking-widest">Connect With Us</h2>
                    <p class="text-3xl sm:text-5xl font-extrabold text-white">Initiate a Strategic Energy Inquiry</p>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Whether inquiring regarding upstream joint ventures, LNG spot contract purchasing, or ESG hybrid integration, our corporate business development panel is available.
                    </p>

                    <div class="space-y-4 pt-4">
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 rounded-xl bg-amber-500/10 border border-amber-500/20 flex items-center justify-center text-amber-400 shrink-0">
                                <i class="fa-solid fa-building"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold text-sm">Global Headquarters</h4>
                                <p class="text-xs text-gray-400">A.O.K Energy Tower, Suite 4000, Global Financial District</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 rounded-xl bg-amber-500/10 border border-amber-500/20 flex items-center justify-center text-amber-400 shrink-0">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold text-sm">Corporate Communications</h4>
                                <p class="text-xs text-gray-400">inquiries@aok-energy.com • investors@aok-energy.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Card -->
                <div class="lg:col-span-7">
                    <div class="glass-panel p-8 rounded-3xl relative">
                        <form id="inquiryForm" onsubmit="handleFormSubmit(event)" class="space-y-6">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Full Name *</label>
                                    <input type="text" required id="form-name" placeholder="John Doe" class="w-full bg-navy-950 border border-navy-700 focus:border-amber-500 rounded-xl px-4 py-3 text-sm text-white focus:outline-none transition">
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Corporate Email *</label>
                                    <input type="email" required id="form-email" placeholder="john@company.com" class="w-full bg-navy-950 border border-navy-700 focus:border-amber-500 rounded-xl px-4 py-3 text-sm text-white focus:outline-none transition">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Company / Organization</label>
                                    <input type="text" id="form-company" placeholder="Petroleum Logistics Ltd" class="w-full bg-navy-950 border border-navy-700 focus:border-amber-500 rounded-xl px-4 py-3 text-sm text-white focus:outline-none transition">
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Service Division</label>
                                    <select id="form-service" class="w-full bg-navy-950 border border-navy-700 focus:border-amber-500 rounded-xl px-4 py-3 text-sm text-white focus:outline-none transition">
                                        <option value="Upstream Joint Venture">Upstream Exploration & JV</option>
                                        <option value="LNG & Midstream Supply">LNG & Midstream Logistics</option>
                                        <option value="Downstream Refined Fuel">Downstream Refined Fuels</option>
                                        <option value="ESG Clean Integration">ESG & Renewable Transition</option>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Project Brief / Inquiry *</label>
                                <textarea required id="form-message" rows="4" placeholder="Detail your operational requirement or commercial proposal..." class="w-full bg-navy-950 border border-navy-700 focus:border-amber-500 rounded-xl px-4 py-3 text-sm text-white focus:outline-none transition"></textarea>
                            </div>

                            <button type="submit" class="w-full py-4 rounded-xl bg-gradient-to-r from-amber-500 to-orange-600 text-navy-950 font-extrabold uppercase tracking-wider hover:brightness-110 transition shadow-lg shadow-amber-500/20">
                                Transmit Official Inquiry
                            </button>
                        </form>

                        <!-- Form Submission Success Overlay Modal -->
                        <div id="form-success" class="hidden absolute inset-0 bg-navy-950/95 rounded-3xl p-8 flex flex-col items-center justify-center text-center space-y-4">
                            <div class="w-16 h-16 bg-emerald-500/20 border border-emerald-500 text-emerald-400 rounded-full flex items-center justify-center text-2xl">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-white">Inquiry Received</h3>
                            <p class="text-xs text-gray-300 max-w-sm">
                                Your message has been logged in the A.O.K Corporate Database simulation.
                            </p>
                            
                            <!-- SQL Payload Preview -->
                            <div class="w-full bg-navy-900 border border-navy-700 rounded-xl p-4 text-left font-mono text-[11px] text-amber-400 overflow-x-auto">
                                <div class="text-gray-400 mb-1">// XAMPP Prepared Statement Executed:</div>
                                <code id="sql-preview-text">INSERT INTO inquiries (full_name, email, company, service_type, message) VALUES (...);</code>
                            </div>

                            <button onclick="resetForm()" class="px-6 py-2 rounded-xl bg-navy-800 text-gray-300 text-xs font-semibold hover:bg-navy-700">
                                Submit Another Inquiry
                            </button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-navy-950 border-t border-navy-800 py-12 text-xs text-gray-400">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6 border-b border-navy-800 pb-8">
                
                <div class="flex items-center space-x-3">
                    <svg class="w-8 h-8 text-amber-500" viewBox="0 0 100 100" fill="none">
                        <path d="M50 10 L85 80 L65 80 L50 45 L35 80 L15 80 Z" fill="currentColor" />
                    </svg>
                    <div>
                        <span class="text-lg font-bold text-white">A.O.K OIL & GAS</span>
                        <p class="text-[10px] text-gray-500">Global Hydrocarbon & Renewable Infrastructure</p>
                    </div>
                </div>

                <div class="flex flex-wrap gap-6 text-gray-300">
                    <a href="#hero" class="hover:text-amber-400 transition">Overview</a>
                    <a href="#divisions" class="hover:text-amber-400 transition">Divisions</a>
                    <a href="#operations" class="hover:text-amber-400 transition">Operations</a>
                    <a href="#sustainability" class="hover:text-amber-400 transition">Sustainability</a>
                    <a href="#contact" class="hover:text-amber-400 transition">Contact</a>
                </div>

                <div class="flex space-x-4 text-lg text-gray-400">
                    <a href="#" class="hover:text-amber-400"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="#" class="hover:text-amber-400"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#" class="hover:text-amber-400"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>

            <div class="pt-8 flex flex-col sm:flex-row justify-between items-center text-gray-500 text-[11px] gap-4">
                <p>&copy; 2026 A.O.K Energy Holdings N.V. All Rights Reserved. Ready for XAMPP deployment.</p>
                <div class="flex space-x-4">
                    <a href="#" class="hover:text-gray-300">Privacy Policy</a>
                    <a href="#" class="hover:text-gray-300">Terms of Operation</a>
                    <a href="#" class="hover:text-gray-300">Security Disclosures</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modal 1: Asset Telemetry -->
    <div id="rigModal" class="fixed inset-0 bg-navy-950/80 backdrop-blur-md hidden z-50 flex items-center justify-center p-4">
        <div class="glass-card max-w-xl w-full rounded-3xl p-6 sm:p-8 space-y-6 relative border-amber-500/30">
            <button onclick="closeModal('rigModal')" class="absolute top-4 right-4 text-gray-400 hover:text-white">
                <i class="fa-solid fa-xmark text-xl"></i>
            </button>
            <div class="flex items-center space-x-3">
                <i class="fa-solid fa-tower-cell text-amber-500 text-2xl"></i>
                <div>
                    <h3 class="text-xl font-bold text-white">A.O.K Deepwater Rig 09 Telemetry</h3>
                    <p class="text-xs text-gray-400">Live Satellite Telemetry Stream</p>
                </div>
            </div>
            <div class="space-y-3 font-mono text-xs">
                <div class="flex justify-between p-3 bg-navy-950 rounded-lg">
                    <span class="text-gray-400">FPSO Position:</span>
                    <span class="text-white">27°14'18"N 90°32'05"W</span>
                </div>
                <div class="flex justify-between p-3 bg-navy-950 rounded-lg">
                    <span class="text-gray-400">Subsea Wellhead Temp:</span>
                    <span class="text-amber-400">184.2 °F</span>
                </div>
                <div class="flex justify-between p-3 bg-navy-950 rounded-lg">
                    <span class="text-gray-400">Gas Flare Elimination:</span>
                    <span class="text-emerald-400">100% Closed Loop</span>
                </div>
            </div>
            <button onclick="closeModal('rigModal')" class="w-full py-3 rounded-xl bg-amber-500 text-navy-950 font-bold">Close Panel</button>
        </div>
    </div>

    <!-- Modal 2: XAMPP SQL Schema Helper Modal -->
    <div id="dbModal" class="fixed inset-0 bg-navy-950/80 backdrop-blur-md hidden z-50 flex items-center justify-center p-4">
        <div class="glass-card max-w-2xl w-full rounded-3xl p-6 sm:p-8 space-y-4 relative border-amber-500/30 max-h-[90vh] overflow-y-auto">
            <button onclick="closeModal('dbModal')" class="absolute top-4 right-4 text-gray-400 hover:text-white">
                <i class="fa-solid fa-xmark text-xl"></i>
            </button>
            <div class="flex items-center space-x-3">
                <i class="fa-solid fa-database text-amber-500 text-2xl"></i>
                <div>
                    <h3 class="text-xl font-bold text-white">XAMPP Integration & SQL Quick-Guide</h3>
                    <p class="text-xs text-gray-400">Import database into MySQL / phpMyAdmin</p>
                </div>
            </div>
            <p class="text-xs text-gray-300 leading-relaxed">
                To run this website locally on XAMPP:
            </p>
            <ol class="list-decimal list-inside text-xs text-amber-400 space-y-2 font-mono bg-navy-950 p-4 rounded-xl">
                <li>Start Apache & MySQL in your XAMPP Control Panel.</li>
                <li>Open phpMyAdmin (http://localhost/phpmyadmin).</li>
                <li>Create database <code class="text-white">aok_energy_db</code>.</li>
                <li>Import the <code class="text-white">aok_database.sql</code> file included in this generated output.</li>
                <li>Place these website files in <code class="text-white">C:/xampp/htdocs/aok_energy/</code>.</li>
            </ol>
            <button onclick="closeModal('dbModal')" class="w-full py-3 rounded-xl bg-amber-500 text-navy-950 font-bold">Got It</button>
        </div>
    </div>

    <!-- Modal 3: News Read Modal -->
    <div id="newsModal1" class="fixed inset-0 bg-navy-950/80 backdrop-blur-md hidden z-50 flex items-center justify-center p-4">
        <div class="glass-card max-w-xl w-full rounded-3xl p-6 sm:p-8 space-y-4 relative border-amber-500/30">
            <button onclick="closeModal('newsModal1')" class="absolute top-4 right-4 text-gray-400 hover:text-white">
                <i class="fa-solid fa-xmark text-xl"></i>
            </button>
            <span class="text-xs text-amber-400 font-mono">OFFICIAL PRESS RELEASE</span>
            <h3 class="text-xl font-bold text-white">A.O.K Expansion in Deepwater Operations</h3>
            <p class="text-xs text-gray-300 leading-relaxed">
                A.O.K Energy Holdings has officially sanctioned $1.2 Billion toward new ultra-deepwater drilling developments. Utilizing state-of-the-art telemetry and zero-flaring methane containment systems, the new platform expects first production by early 2027.
            </p>
            <button onclick="closeModal('newsModal1')" class="w-full py-3 rounded-xl bg-navy-800 text-white font-bold">Close News</button>
        </div>
    </div>

    <script>
        // Particle Background Canvas Script
        const canvas = document.getElementById('particle-canvas');
        const ctx = canvas.getContext('2d');
        let particles = [];

        function resizeCanvas() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        }
        window.addEventListener('resize', resizeCanvas);
        resizeCanvas();

        class Particle {
            constructor() {
                this.x = Math.random() * canvas.width;
                this.y = Math.random() * canvas.height;
                this.size = Math.random() * 2 + 1;
                this.speedY = Math.random() * -0.6 - 0.2;
                this.speedX = (Math.random() - 0.5) * 0.3;
                this.opacity = Math.random() * 0.5 + 0.2;
            }
            update() {
                this.y += this.speedY;
                this.x += this.speedX;
                if (this.y < 0) {
                    this.y = canvas.height;
                    this.x = Math.random() * canvas.width;
                }
            }
            draw() {
                ctx.fillStyle = `rgba(255, 184, 0, ${this.opacity})`;
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx.fill();
            }
        }

        function initParticles() {
            particles = [];
            const particleCount = Math.min(Math.floor(window.innerWidth / 15), 80);
            for (let i = 0; i < particleCount; i++) {
                particles.push(new Particle());
            }
        }
        initParticles();

        function animateParticles() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            particles.forEach(p => {
                p.update();
                p.draw();
            });
            requestAnimationFrame(animateParticles);
        }
        animateParticles();

        // Clock Update
        function updateClock() {
            const now = new Date();
            document.getElementById('utc-clock').innerText = now.toUTCString().split(' ')[4];
        }
        setInterval(updateClock, 1000);
        updateClock();

        // Animated Number Counters
        function animateValue(id, start, end, duration) {
            const obj = document.getElementById(id);
            if (!obj) return;
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                obj.innerText = Math.floor(progress * (end - start) + start).toLocaleString();
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        }

        setTimeout(() => {
            animateValue('counter-barrels', 0, 485000, 2000);
            animateValue('counter-facilities', 0, 42, 1500);
            animateValue('counter-safety', 0, 12500000, 2500);
        }, 300);

        // Project Grid Filter
        function filterProjects(category) {
            const cards = document.querySelectorAll('.project-card');
            const btns = document.querySelectorAll('.filter-btn');

            btns.forEach(btn => btn.classList.remove('active', 'bg-amber-500', 'text-navy-950', 'font-bold'));
            event.target.classList.add('active', 'bg-amber-500', 'text-navy-950', 'font-bold');

            cards.forEach(card => {
                if (category === 'all' || card.classList.contains(category)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        // ESG Calculator & Chart Setup
        const ctxChart = document.getElementById('esgChart').getContext('2d');
        let esgChart = new Chart(ctxChart, {
            type: 'bar',
            data: {
                labels: ['Standard Asset Baseline', 'A.O.K Hybrid Optimized'],
                datasets: [{
                    label: 'CO2 Intensity (Grams CO2e / MJ)',
                    data: [78, 32],
                    backgroundColor: ['rgba(239, 68, 68, 0.7)', 'rgba(16, 185, 129, 0.8)'],
                    borderColor: ['#ef4444', '#10b981'],
                    borderWidth: 1,
                    borderRadius: 8
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false }
                },
                scales: {
                    y: {
                        ticks: { color: '#9ca3af' },
                        grid: { color: 'rgba(255, 255, 255, 0.05)' }
                    },
                    x: {
                        ticks: { color: '#e5e7eb' },
                        grid: { display: false }
                    }
                }
            }
        });

        function updateEsgCalc() {
            const bpd = parseInt(document.getElementById('input-bpd').value);
            const renewable = parseInt(document.getElementById('input-renewable').value);
            const ccus = parseInt(document.getElementById('input-ccus').value);

            document.getElementById('val-bpd').innerText = bpd.toLocaleString() + ' BPD';
            document.getElementById('val-renewable').innerText = renewable + '%';
            document.getElementById('val-ccus').innerText = ccus + '%';

            // Computations
            const co2Saved = Math.round((bpd * 3.2) * (renewable / 100 + ccus / 100));
            const mwhSaved = Math.round((bpd * 1.2) * (renewable / 100));

            document.getElementById('calc-co2').innerText = co2Saved.toLocaleString();
            document.getElementById('calc-mwh').innerText = mwhSaved.toLocaleString();

            const newIntensity = Math.max(12, Math.round(78 - (renewable * 0.35 + ccus * 0.25)));
            esgChart.data.datasets[0].data[1] = newIntensity;
            esgChart.update();
        }

        document.getElementById('input-bpd').addEventListener('input', updateEsgCalc);
        document.getElementById('input-renewable').addEventListener('input', updateEsgCalc);
        document.getElementById('input-ccus').addEventListener('input', updateEsgCalc);

        // Form Handling
        function handleFormSubmit(e) {
            e.preventDefault();
            const name = document.getElementById('form-name').value;
            const email = document.getElementById('form-email').value;
            const company = document.getElementById('form-company').value;
            const service = document.getElementById('form-service').value;
            const message = document.getElementById('form-message').value;

            const sqlText = `INSERT INTO inquiries (full_name, email, company, service_type, message)\nVALUES ('${name}', '${email}', '${company}', '${service}', '${message.substring(0, 30)}...');`;
            document.getElementById('sql-preview-text').innerText = sqlText;

            document.getElementById('form-success').classList.remove('hidden');
        }

        function resetForm() {
            document.getElementById('inquiryForm').reset();
            document.getElementById('form-success').classList.add('hidden');
        }

        // Modal Helpers
        function openModal(id) {
            document.getElementById(id).classList.remove('hidden');
        }
        function closeModal(id) {
            document.getElementById(id).classList.add('hidden');
        }

        // Mobile Menu
        document.getElementById('mobile-menu-btn').addEventListener('click', () => {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>
</html>