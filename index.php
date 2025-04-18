<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoCare Workshop - Professional Auto Repair & Maintenance Services</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#fff1f2',
                            100: '#ffe4e6',
                            200: '#fecdd3',
                            300: '#fda4af',
                            400: '#fb7185',
                            500: '#f43f5e',
                            600: '#e11d48',
                            700: '#be123c',
                            800: '#9f1239',
                            900: '#881337',
                            950: '#4c0519',
                        },
                        secondary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                            950: '#082f49',
                        }
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'bounce-slow': 'bounce 2s infinite',
                        'pulse-slow': 'pulse 3s infinite',
                        'spin-slow': 'spin 3s linear infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
                        }
                    }
                }
            }
        }
    </script>
    <!-- <style type="text/tailwind">
        @layer components {
            .nav-link {
                @apply text-gray-700 hover:text-primary-600 transition-colors relative group;
            }
            .nav-link::after {
                @apply content-[''] absolute bottom-0 left-0 w-full h-0.5 bg-primary-500 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left;
            }
            .service-card {
                @apply group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1;
            }
            .service-icon {
                @apply bg-gradient-to-br from-primary-100 to-primary-50 rounded-xl p-4 mb-6 w-16 h-16 flex items-center justify-center group-hover:scale-110 transition-transform;
            }
            .btn-primary {
                @apply inline-flex items-center text-primary-600 hover:text-primary-700 font-semibold group-hover:translate-x-2 transition-transform;
            }
        }
    </style> -->
</head>
<body class="font-sans">
    <?php include 'includes/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="min-h-screen relative flex items-center justify-center bg-gradient-to-br from-primary-600 via-primary-500 to-secondary-600 overflow-hidden py-32">
        <!-- Animated Background -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute w-full h-full bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0zNiAxOGMzLjMxNCAwIDYgMi42ODYgNiA2cy0yLjY4NiA2LTYgNi02LTIuNjg2LTYtNiAyLjY4Ni02IDYtNiIgc3Ryb2tlPSJyZ2JhKDI1NSwyNTUsMjU1LDAuMSkiLz48L2c+PC9zdmc+')] opacity-10"></div>
        </div>

        <!-- Background Shapes with enhanced animations -->
        <div class="absolute inset-0">
            <div class="absolute -top-20 -right-20 w-72 h-72 bg-gradient-to-br from-white/20 to-white/5 rounded-full animate-float blur-xl"></div>
            <div class="absolute -bottom-20 -left-20 w-48 h-48 bg-gradient-to-tr from-white/20 to-white/5 rounded-full animate-float delay-1000 blur-xl"></div>
            <div class="absolute top-1/2 right-1/4 w-36 h-36 bg-gradient-to-bl from-white/20 to-white/5 rounded-full animate-float delay-2000 blur-xl"></div>
        </div>

        <!-- Content with enhanced animations and styling -->
        <div class="container mx-auto px-6 text-center relative z-10">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 drop-shadow-lg relative" data-aos="fade-up">
                    Welcome to 
                    <span class="relative">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-white to-primary-100">AutoCare</span>
                    </span>
                    Workshop
                </h1>
                <p class="text-lg md:text-xl text-white/90 mb-4 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                    Your trusted partner in automotive excellence
                </p>
                <p class="text-base md:text-lg text-white/80 mb-8 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    Experience professional car care services with state-of-the-art technology and expert technicians.
                </p>
                
                <!-- Enhanced CTA Buttons -->
                <div class="flex flex-col md:flex-row gap-6 justify-center mb-16" data-aos="fade-up" data-aos-delay="300">
                    <a href="booking.php" class="group relative px-8 py-4 rounded-full font-semibold bg-white text-primary-600 hover:bg-primary-600 hover:text-white transition-all duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg">
                        <span class="flex items-center">
                            <i class="fas fa-calendar-check mr-2"></i>
                            Book Service
                            <i class="fas fa-arrow-right ml-2 transition-transform group-hover:translate-x-1"></i>
                        </span>
                        <span class="absolute inset-0 rounded-full bg-white/20 animate-pulse-slow"></span>
                    </a>
                    <a href="#services" class="group relative px-8 py-4 rounded-full font-semibold border-2 border-white text-white hover:bg-white hover:text-primary-600 transition-all duration-300 ease-in-out transform hover:scale-105">
                        <span class="flex items-center">
                            <i class="fas fa-wrench mr-2"></i>
                            Our Services
                            <i class="fas fa-chevron-right ml-2 transition-transform group-hover:translate-x-1"></i>
                        </span>
                    </a>
                </div>

                <!-- Enhanced Features Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl mx-auto" data-aos="fade-up" data-aos-delay="400">
                    <div class="group bg-white/10 backdrop-blur-lg p-8 rounded-2xl transition-all duration-300 hover:-translate-y-2 hover:bg-white/15 cursor-pointer">
                        <div class="w-16 h-16 bg-gradient-to-br from-white/30 to-white/10 rounded-full flex items-center justify-center mb-4 mx-auto group-hover:scale-110 transition-transform">
                            <i class="fas fa-tools text-2xl text-white"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-white mb-2">Expert Mechanics</h3>
                        <p class="text-white/70">Certified professionals</p>
                    </div>
                    <div class="group bg-white/10 backdrop-blur-lg p-8 rounded-2xl transition-all duration-300 hover:-translate-y-2 hover:bg-white/15 cursor-pointer">
                        <div class="w-16 h-16 bg-gradient-to-br from-white/30 to-white/10 rounded-full flex items-center justify-center mb-4 mx-auto group-hover:scale-110 transition-transform">
                            <i class="fas fa-clock text-2xl text-white"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-white mb-2">Quick Service</h3>
                        <p class="text-white/70">Fast turnaround time</p>
                    </div>
                    <div class="group bg-white/10 backdrop-blur-lg p-8 rounded-2xl transition-all duration-300 hover:-translate-y-2 hover:bg-white/15 cursor-pointer">
                        <div class="w-16 h-16 bg-gradient-to-br from-white/30 to-white/10 rounded-full flex items-center justify-center mb-4 mx-auto group-hover:scale-110 transition-transform">
                            <i class="fas fa-shield-alt text-2xl text-white"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-white mb-2">Quality Guarantee</h3>
                        <p class="text-white/70">100% satisfaction</p>
                    </div>
                    <div class="group bg-white/10 backdrop-blur-lg p-8 rounded-2xl transition-all duration-300 hover:-translate-y-2 hover:bg-white/15 cursor-pointer">
                        <div class="w-16 h-16 bg-gradient-to-br from-white/30 to-white/10 rounded-full flex items-center justify-center mb-4 mx-auto group-hover:scale-110 transition-transform">
                            <i class="fas fa-dollar-sign text-2xl text-white"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-white mb-2">Best Prices</h3>
                        <p class="text-white/70">Competitive rates</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enhanced Scroll Indicator -->
        <!-- <div class="absolute bottom-8 left-1/2 -translate-x-1/2 text-white text-center cursor-pointer group" data-aos="fade" data-aos-delay="800">
            <span class="block text-sm mb-2 group-hover:text-primary-200 transition-colors">Scroll Down</span>
            <i class="fas fa-chevron-down animate-bounce-slow group-hover:text-primary-200 transition-colors"></i>
        </div> -->
    </section>

    <!-- Services Section -->
    <section class="bg-gradient-to-br from-gray-50 to-white py-24" id="services">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4" data-aos="fade-up">Our Core Services</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                    Experience excellence in automotive care with our specialized services designed to keep your vehicle in perfect condition
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                <!-- Comprehensive Diagnostics & Repair -->
                <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-gradient-to-br from-primary-100 to-primary-50 rounded-2xl p-6 mb-8 transform group-hover:scale-105 transition-all duration-500">
                        <svg class="w-12 h-12 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Comprehensive Diagnostics & Repair</h3>
                    <ul class="text-gray-600 mb-8 space-y-3">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-primary-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Advanced Computer Diagnostics
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-primary-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Engine & Transmission Repair
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-primary-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Electrical System Service
                        </li>
                    </ul>
                    <a href="booking.php" class="inline-flex items-center justify-center w-full px-6 py-3 text-white bg-primary-600 rounded-xl hover:bg-primary-700 transition-colors group">
                        Schedule Diagnosis
                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>

                <!-- Maintenance & Service Packages -->
                <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-gradient-to-br from-primary-100 to-primary-50 rounded-2xl p-6 mb-8 transform group-hover:scale-105 transition-all duration-500">
                        <svg class="w-12 h-12 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Maintenance & Service Packages</h3>
                    <ul class="text-gray-600 mb-8 space-y-3">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-primary-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Complete Oil Service
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-primary-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Brake System Maintenance
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-primary-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Multi-Point Inspection
                        </li>
                    </ul>
                    <!-- <a href="booking.php" class="inline-flex items-center justify-center w-full px-6 py-3 text-white bg-primary-600 rounded-xl hover:bg-primary-700 transition-colors group"> -->
                    <a href="booking.php" class="inline-flex items-center justify-center w-full px-6 py-3 text-white bg-primary-600 rounded-xl hover:bg-primary-700 transition-colors group">
                        Book Maintenance
                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>

                <!-- Performance & Specialty Services -->
                <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="300">
                    <div class="bg-gradient-to-br from-primary-100 to-primary-50 rounded-2xl p-6 mb-8 transform group-hover:scale-105 transition-all duration-500">
                        <svg class="w-12 h-12 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Performance & Specialty Services</h3>
                    <ul class="text-gray-600 mb-8 space-y-3">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-primary-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Performance Tuning
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-primary-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Electric Vehicle Service
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-primary-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Custom Modifications
                        </li>
                    </ul>
                    <a href="booking.php" class="inline-flex items-center justify-center w-full px-6 py-3 text-white bg-primary-600 rounded-xl hover:bg-primary-700 transition-colors group">
                        Explore Services
                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="bg-gradient-to-br from-gray-50 to-white py-24" id="why-us">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4" data-aos="fade-up">Why Choose AutoCare</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                    Experience excellence in automotive care with our premium services
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-7xl mx-auto">
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1" data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-gradient-to-br from-primary-100 to-primary-50 rounded-xl p-4 mb-6 w-16 h-16 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="fas fa-certificate text-2xl text-primary-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Certified Experts</h3>
                    <p class="text-gray-600">Our team consists of certified professionals with years of experience in handling all types of vehicles.</p>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1" data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-gradient-to-br from-primary-100 to-primary-50 rounded-xl p-4 mb-6 w-16 h-16 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="fas fa-cog text-2xl text-primary-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Modern Equipment</h3>
                    <p class="text-gray-600">We use state-of-the-art diagnostic and repair equipment to ensure precise service.</p>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1" data-aos="fade-up" data-aos-delay="300">
                    <div class="bg-gradient-to-br from-primary-100 to-primary-50 rounded-xl p-4 mb-6 w-16 h-16 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="fas fa-clock text-2xl text-primary-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Quick Service</h3>
                    <p class="text-gray-600">Get your vehicle back on the road quickly with our efficient service process.</p>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1" data-aos="fade-up" data-aos-delay="400">
                    <div class="bg-gradient-to-br from-primary-100 to-primary-50 rounded-xl p-4 mb-6 w-16 h-16 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="fas fa-dollar-sign text-2xl text-primary-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Competitive Pricing</h3>
                    <p class="text-gray-600">Quality service at reasonable prices with transparent pricing policy.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="bg-gradient-to-br from-primary-600 via-primary-500 to-secondary-600 py-24" id="stats">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-7xl mx-auto">
                <!-- Cars Serviced -->
                <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-8 text-center transform hover:-translate-y-1 transition-all duration-300" data-aos="fade-up">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-car text-2xl text-white"></i>
                    </div>
                    <div class="text-4xl font-bold text-white mb-2">15,000+</div>
                    <div class="text-white/80">Cars Serviced</div>
                </div>

                <!-- Happy Clients -->
                <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-8 text-center transform hover:-translate-y-1 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-users text-2xl text-white"></i>
                    </div>
                    <div class="text-4xl font-bold text-white mb-2">5,000+</div>
                    <div class="text-white/80">Happy Clients</div>
                </div>

                <!-- Expert Mechanics -->
                <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-8 text-center transform hover:-translate-y-1 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-wrench text-2xl text-white"></i>
                    </div>
                    <div class="text-4xl font-bold text-white mb-2">20+</div>
                    <div class="text-white/80">Expert Mechanics</div>
                </div>

                <!-- Years Experience -->
                <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-8 text-center transform hover:-translate-y-1 transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-trophy text-2xl text-white"></i>
                    </div>
                    <div class="text-4xl font-bold text-white mb-2">25+</div>
                    <div class="text-white/80">Years Experience</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="bg-gradient-to-br from-gray-100 to-white py-24" id="testimonials">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4" data-aos="fade-up">What Our Clients Say</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                    Read testimonials from our satisfied customers who trust us with their vehicles
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                <!-- Testimonial Card 1 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="mb-6">
                        <i class="fas fa-quote-left text-4xl text-primary-500 opacity-50"></i>
                        <p class="mt-4 text-gray-600 italic">"Excellent service! They diagnosed and fixed my car's issue quickly. Very professional and knowledgeable team."</p>
                    </div>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="John Smith" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900">John Smith</h4>
                            <p class="text-gray-500 text-sm">Regular Customer</p>
                        </div>
                        <div class="ml-auto flex text-primary-500">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Card 2 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="mb-6">
                        <i class="fas fa-quote-left text-4xl text-primary-500 opacity-50"></i>
                        <p class="mt-4 text-gray-600 italic">"I've been taking my cars here for years. Their attention to detail and customer service is unmatched. Highly recommended!"</p>
                    </div>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Sarah Johnson" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900">Sarah Johnson</h4>
                            <p class="text-gray-500 text-sm">Loyal Customer</p>
                        </div>
                        <div class="ml-auto flex text-primary-500">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Card 3 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                    <div class="mb-6">
                        <i class="fas fa-quote-left text-4xl text-primary-500 opacity-50"></i>
                        <p class="mt-4 text-gray-600 italic">"The team at AutoCare went above and beyond to fix my electric vehicle. Their expertise in modern vehicles is impressive."</p>
                    </div>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/men/28.jpg" alt="Michael Chen" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900">Michael Chen</h4>
                            <p class="text-gray-500 text-sm">EV Owner</p>
                        </div>
                        <div class="ml-auto flex text-primary-500">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Card 4 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="400">
                    <div class="mb-6">
                        <i class="fas fa-quote-left text-4xl text-primary-500 opacity-50"></i>
                        <p class="mt-4 text-gray-600 italic">"Fair pricing and transparent communication throughout the repair process. They even provided video updates of the work being done!"</p>
                    </div>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Emily Rodriguez" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900">Emily Rodriguez</h4>
                            <p class="text-gray-500 text-sm">First-time Customer</p>
                        </div>
                        <div class="ml-auto flex text-primary-500">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Card 5 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="500">
                    <div class="mb-6">
                        <i class="fas fa-quote-left text-4xl text-primary-500 opacity-50"></i>
                        <p class="mt-4 text-gray-600 italic">"Their performance tuning service transformed my car's handling and power delivery. The results exceeded my expectations!"</p>
                    </div>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="David Thompson" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900">David Thompson</h4>
                            <p class="text-gray-500 text-sm">Performance Enthusiast</p>
                        </div>
                        <div class="ml-auto flex text-primary-500">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest News Section -->
    <section class="bg-gradient-to-br from-gray-50 to-white py-24" id="news">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4" data-aos="fade-up">Latest Auto Tips</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                    Stay updated with our latest automotive maintenance tips
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                <!-- News Card 1 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1" data-aos="fade-up" data-aos-delay="100">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1609521263047-f8f205293f24?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80" alt="Car Maintenance" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Essential Car Maintenance Tips</h3>
                        <p class="text-gray-600 mb-4">Learn about the basic maintenance steps to keep your car running smoothly.</p>
                        <a href="#" class="inline-flex items-center text-primary-600 hover:text-primary-700 font-semibold group">
                            Read More
                            <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- News Card 2 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80" alt="Winter Care" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Winter Car Care Guide</h3>
                        <p class="text-gray-600 mb-4">Prepare your vehicle for the winter season with these important tips.</p>
                        <a href="#" class="inline-flex items-center text-primary-600 hover:text-primary-700 font-semibold group">
                            Read More
                            <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- News Card 3 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1" data-aos="fade-up" data-aos-delay="300">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1609521263047-f8f205293f24?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80" alt="Fuel Efficiency" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Improve Fuel Efficiency</h3>
                        <p class="text-gray-600 mb-4">Simple ways to improve your vehicle's fuel efficiency and save money.</p>
                        <a href="#" class="inline-flex items-center text-primary-600 hover:text-primary-700 font-semibold group">
                            Read More
                            <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-16 pb-8">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                <!-- About Section -->
                <div class="space-y-6">
                    <h3 class="text-2xl font-bold">AutoCare</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Your trusted partner in automotive care. We provide professional car repair and maintenance services with a commitment to excellence.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-primary-500 transition-colors">
                            <i class="fab fa-facebook text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-primary-500 transition-colors">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-primary-500 transition-colors">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-primary-500 transition-colors">
                            <i class="fab fa-linkedin text-xl"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="space-y-6">
                    <h3 class="text-xl font-semibold">Quick Links</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="#home" class="text-gray-400 hover:text-primary-500 transition-colors flex items-center">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="#services" class="text-gray-400 hover:text-primary-500 transition-colors flex items-center">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                                <span>Services</span>
                            </a>
                        </li>
                        <!-- Additional quick links follow the same pattern -->
                    </ul>
                </div>

                <!-- Services Links -->
                <div class="space-y-6">
                    <h3 class="text-xl font-semibold">Services</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="booking.php" class="text-gray-400 hover:text-primary-500 transition-colors flex items-center">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                                <span>Oil Change</span>
                            </a>
                        </li>
                        <!-- Additional service links follow the same pattern -->
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="space-y-6">
                    <h3 class="text-xl font-semibold">Contact Info</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-3">
                            <i class="fas fa-map-marker-alt mt-1 text-primary-500"></i>
                            <span class="text-gray-400">123 Workshop Street<br>City, Country</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-phone text-primary-500"></i>
                            <span class="text-gray-400">+1 234 567 890</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-envelope text-primary-500"></i>
                            <span class="text-gray-400">info@autocare.com</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <i class="fas fa-clock mt-1 text-primary-500"></i>
                            <span class="text-gray-400">
                                Mon - Fri: 8:00 AM - 6:00 PM<br>
                                Sat: 9:00 AM - 4:00 PM
                            </span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="border-t border-gray-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm">&copy; 2024 AutoCare Workshop. All rights reserved.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-primary-500 transition-colors text-sm">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-primary-500 transition-colors text-sm">Terms of Service</a>
                    <a href="#" class="text-gray-400 hover:text-primary-500 transition-colors text-sm">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Mobile menu toggle
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        }

        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });
    </script>
</body>
</html> 
