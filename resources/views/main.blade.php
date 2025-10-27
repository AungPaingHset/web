<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
<style>

    body{
        background: linear-gradient(135deg, #e8f5e8 0%, #f8f9fa 50%, #e0f2e0 100%);
    }
#glass-navbar {
            
             position: fixed;
    top: 20px;
    left: 0;
    right: 0;
    width: 80%;
    margin: 0 auto;
    border-radius: 80px; /* Full round on desktop */
    padding: 0.5rem 1rem;
    backdrop-filter: blur(10px);
    background-color: rgba(255, 255, 255, 0.141) !important;
    box-shadow: 0 2px 20px rgba(0,0,0,0.1);
    z-index: 9999;
    transition: border-radius 0.3s ease, padding 0.3s ease;
        }

        .navbar-brand {
    font-size: 1rem;
}

.nav-link {
    
    font-weight: 500;
    transition: color 0.3s ease;
    margin-right: 16px;
}

.nav-link:hover {
    color: #d4edda !important;
}


/* Default: white text/icons (for hero section) */
.navbar .nav-link,
.navbar .navbar-brand,
.navbar .navbar-brand i {
    color: white !important;
    transition: color 0.3s ease;
}


/* When scrolled past hero: switch to green */
.navbar.scrolled .nav-link,
.navbar.scrolled .navbar-brand,
.navbar.scrolled .navbar-brand i {
    color: #198754 !important; /* Bootstrap green or your preferred green */
}

/* Default for hero section: white text, green on hover */
.navbar .nav-link,
.navbar .navbar-brand,
.navbar .navbar-brand i {
    color: white !important;
    transition: color 0.3s ease;
}

.navbar .nav-link:hover {
    color: #004d29 !important; /* green on hover in hero */
}

/* Scrolled state: green text, white on hover */
/* .navbar.scrolled .nav-link,
.navbar.scrolled .navbar-brand,
.navbar.scrolled .navbar-brand i {
    color: #815714  !important;
} */

.navbar.scrolled .nav-link:hover {
    color: rgb(184, 182, 182) !important; /* white on hover in other sections */
}
 
/* Default: white toggler icon (for hero section) */
.navbar .navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='white' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}

/* Scrolled: green toggler icon (for other sections) */
.navbar.scrolled .navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='%23198754' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}

/* Logo image styles */
.logo-img {
    margin-right: 10px;
    width: 38px;
    height: 38px;
    object-fit: contain; /* Keeps aspect ratio, prevents distortion */
    transition: width 0.3s ease, height 0.3s ease;
}


/* Brand text styling */
.brand-text {
    left: 50px;
    font-weight: 500;
    font-size: 1rem;
    color: white; /* default color in hero */
    transition: color 0.3s ease;
}

/* Color change after scroll */
.navbar.scrolled .brand-text {
    color: #815714; /* green */
    
}


.navbar .navbar-brand {
    display: flex;
    align-items: center;
    padding: 0; /* Remove default padding if needed */
}

        /* Hide brand text on small screens */
@media (max-width: 576px) {
    .brand-text {
        display: none;
    }
}
/* Hide brand text on tablet and mobile (≤992px) */
@media (max-width: 992px) {
    .brand-text {
        display: none;
    }
}
        
        @media (max-width: 576px) {
            #glass-navbar {
                border-radius: 20px;
                padding: 0.5rem;
            }
        }

        
        @media (max-width: 992px) {
            #glass-navbar {
                border-radius: 20px;
                padding: 0.5rem 0.75rem;
            }
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='black' stroke-width='2' stroke-linecap='round' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }
        #glass-btn {
        backdrop-filter: blur(10px);
    background-color: rgba(255, 255, 255, 0.141) !important;
    box-shadow: 0 2px 20px rgba(0,0,0,0.1);
        }


       
    </style>
    <body>

    {{-- <title>EcoKyats - Smart Waste Management</title> --}}
    <nav id="glass-navbar" class="navbar navbar-expand-lg sticky ">
            <div class="container justify-content-between">

                <a class="navbar-brand fw-bold " href="{{ url('/') }}">
                    <img src="/asset/main/logo.png" alt="" class="logo-img">
                    <span class="brand-text">{{ config('app.name', 'EcoKyats') }}</span>
                </a>
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon "></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarSupportedContent">
            
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link  text-center fw-bolder" href="#issues">Challenges</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-center fw-bolder" href="#solutions" >Solutions</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-center fw-bolder" href="{{ url('/ebin')}}" >E-bin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-center fw-bolder" href="{{ url('/articles') }}" >Our Community</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item"><a class="nav-link text-center text-black fw-bolder" href="{{ route('login') }}">Login</a></li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item"><a class="nav-link text-center text-black fw-bolder" href="{{ route('register') }}">Register</a></li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-success text-end  fs-6" href="#" data-bs-toggle="dropdown">
                                    <small>{{ Auth::user()->name }}</small>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" id="glass-btn">
                                    <li>
                                        <a class="dropdown-item"  href="{{ route('logout') }}"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                    </li>
                                </ul>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

    <!-- Hero Section -->
    <section class="hero-section" style="background-image: url('{{ asset('asset/main/background.jpg') }}');">

        <div class="container py-5">
            <div class="row align-items-start min-vh-100 pt-5">
                <div class="col-lg-12"  style="border-radius: 20px; padding: 15px ">
                    <h1 class="display-4 fw-bolder text-white  text-center mb-4 mt-5 pt-2">
                        Smart Waste Management<br> for a Cleaner Earth
                    </h1>
                    <p class="lead text-white  mb-4 text-center mb-5" style="opacity: 0.9;">
                        Join EcoKyats in revolutionizing waste management through <br>AI-powered scanning, 
                        education, and smart E-bin solutions.
                    </p>
                    <div class="d-flex gap-3 justify-content-center">
                        <a href="{{ url('/ebin') }}" class="btn btn-light btn-lg" style="position: relative; z-index: 990;">
    <i class="fas fa-trash-alt  me-2 text-success"></i> E-bin
</a>

                        <a href="{{ url('/#issues') }}" class="btn btn-outline-light btn-lg " id="glass-btn"style="position: relative; z-index: 990;">
                            Learn More
                        </a>
                    </div>
                </div>
                {{-- <div class="col-lg-6">
                    <div class="hero-image">
                        <i class="fas fa-recycle hero-icon"></i>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <!-- Issues Section -->
    <section id="issues" class="py-5" style="background: linear-gradient(135deg, #e8f5e8 0%, #f8f9fa 50%, #e0f2e0 100%);" >
        <div class="container py-3" >
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="display-5 fw-bold mb-4">Environmental Issues</h2>
                    <p class="lead text-muted">
                        Understanding the causes of waste pollution is the first step toward creating solutions.
                    </p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="issue-card h-100 " id="glass-btn">
                        <div class="issue-icon">
                            <i class="fas fa-bottle-water"></i>
                        </div>
                        <h4>Plastic Pollution</h4>
                        <p>Over 8 million tons of plastic waste enter our oceans annually, harming marine life and ecosystems.</p>
                        <div class="issue-stats">
                            <span class="stat-number">8M+</span>
                            <span class="stat-label">tons yearly</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="issue-card h-100">
                        <div class="issue-icon">
                            <i class="fas fa-industry"></i>
                        </div>
                        <h4>Industrial Waste</h4>
                        <p>Manufacturing processes generate toxic waste that contaminates soil and water sources.</p>
                        <div class="issue-stats">
                            <span class="stat-number">2.01B</span>
                            <span class="stat-label">tons globally</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="issue-card h-100">
                        <div class="issue-icon">
                            <i class="fas fa-trash"></i>
                        </div>
                        <h4>Landfill Overflow</h4>
                        <p>Improper waste disposal leads to overflowing landfills and methane gas emissions.</p>
                        <div class="issue-stats">
                            <span class="stat-number">36%</span>
                            <span class="stat-label">greenhouse gases</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="issue-card h-100">
                        <div class="issue-icon">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <h4>Food Waste</h4>
                        <p>One-third of all food produced globally is wasted, contributing to unnecessary resource depletion.</p>
                        <div class="issue-stats">
                            <span class="stat-number">1.3B</span>
                            <span class="stat-label">tons wasted</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="issue-card h-100">
                        <div class="issue-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h4>E-Waste Crisis</h4>
                        <p>Electronic waste is the fastest-growing waste stream, containing toxic materials.</p>
                        <div class="issue-stats">
                            <span class="stat-number">54M</span>
                            <span class="stat-label">tons yearly</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="issue-card h-100">
                        <div class="issue-icon">
                            <i class="fas fa-smog"></i>
                        </div>
                        <h4>Air Pollution</h4>
                        <p>Waste burning and improper disposal release harmful chemicals into the atmosphere.</p>
                        <div class="issue-stats">
                            <span class="stat-number">7M</span>
                            <span class="stat-label">deaths yearly</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Solutions Section -->
    <section id="solutions" class="py-5 mt-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="display-5 fw-bold mb-4">Smart Solutions</h2>
                    <p class="lead text-muted">
                        Discover how EcoKyats and E-bin technology can help reduce waste and protect our environment.
                    </p>
                </div>
            </div>
            
            <!-- E-bin Introduction -->
            {{-- <div class="row align-items-center mb-5">
                <div class="col-lg-6">
                    <div class="solution-content">
                        <h3 class="h2 fw-bold mb-4">Introducing E-bin</h3>
                        <p class="lead mb-4">
                            Our smart E-bin system uses AI-powered recognition to automatically sort waste, 
                            making recycling effortless and efficient.
                        </p>
                        <div class="feature-list">
                            <div class="feature-item">
                                <i class="fas fa-robot text-success"></i>
                                <span>AI-powered waste recognition</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-sort text-success"></i>
                                <span>Automatic sorting system</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-chart-line text-success"></i>
                                <span>Real-time analytics</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ebin-visual">
                        <i class="fas fa-trash-alt ebin-icon"></i>
                        <div class="ebin-features">
                            <div class="feature-dot" data-bs-toggle="tooltip" title="Camera Scanner">
                                <i class="fas fa-camera"></i>
                            </div>
                            <div class="feature-dot" data-bs-toggle="tooltip" title="AI Processing">
                                <i class="fas fa-brain"></i>
                            </div>
                            <div class="feature-dot" data-bs-toggle="tooltip" title="Auto Sort">
                                <i class="fas fa-arrows-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <!-- Solution Cards -->
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="solution-card h-100">
                        <div class="solution-icon">
                            <i class="fas fa-recycle"></i>
                        </div>
                        <h4>Smart Recycling</h4>
                        <p>Use our AI scanner to identify recyclable materials and get proper disposal instructions.</p>
                        <ul class="solution-benefits">
                            <li>95% accuracy rate</li>
                            <li>Instant material identification</li>
                            <li>Proper disposal guidance</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="solution-card h-100">
                        <div class="solution-icon">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <h4>Reduce & Reuse</h4>
                        <p>Learn practical tips to minimize waste generation and find creative reuse opportunities.</p>
                        <ul class="solution-benefits">
                            <li>Daily eco-tips</li>
                            <li>DIY upcycling guides</li>
                            <li>Waste reduction challenges</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="solution-card h-100">
                        <div class="solution-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4>Community Action</h4>
                        <p>Join local cleanup events and connect with environmentally conscious community members.</p>
                        <ul class="solution-benefits">
                            <li>Local event notifications</li>
                            <li>Community leaderboards</li>
                            <li>Impact tracking</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Waste Reduction Tips -->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="tips-section">
                        <h3 class="text-center mb-4">Quick Waste Reduction Tips</h3>
                        <div class="row g-3">
                            <div class="col-md-6 col-lg-3">
                                <div class="tip-card">
                                    <i class="fas fa-shopping-bag"></i>
                                    <h5>Bring Your Own Bag</h5>
                                    <p>Use reusable bags for shopping to reduce plastic waste.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="tip-card">
                                    <i class="fas fa-coffee"></i>
                                    <h5>Reusable Cups</h5>
                                    <p>Carry a reusable coffee cup to avoid disposable containers.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="tip-card">
                                    <i class="fas fa-seedling"></i>
                                    <h5>Compost Organic</h5>
                                    <p>Turn food scraps into nutrient-rich compost for plants.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="tip-card">
                                    <i class="fas fa-gift"></i>
                                    <h5>Donate Items</h5>
                                    <p>Give away items you no longer need instead of throwing them away.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Scanner Section -->
    <section id="scanner" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="display-5 fw-bold mb-4">AI Waste Scanner</h2>
                    <p class="lead text-muted">
                        Upload an image or use your webcam to identify waste materials and get recycling guidance.
                    </p>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="scanner-container">
                        <div class="scanner-tabs">
                            <button class="tab-btn active" data-tab="upload">
                                <i class="fas fa-upload me-2"></i>Upload Image
                            </button>
                            <button class="tab-btn" data-tab="webcam">
                                <i class="fas fa-camera me-2"></i>Use Webcam
                            </button>
                        </div>
                        
                        <!-- Upload Tab -->
                        <div class="tab-content active" id="upload-tab">
                            <div class="upload-area" id="uploadArea">
                                <i class="fas fa-cloud-upload-alt upload-icon"></i>
                                <h4>Drop your image here</h4>
                                <p>or click to browse files</p>
                                <input type="file" id="imageInput" accept="image/*" hidden>
                            </div>
                        </div>
                        
                        <!-- Webcam Tab -->
                        <div class="tab-content" id="webcam-tab">
                            <div class="webcam-container">
                                <video id="webcam" autoplay playsinline></video>
                                <canvas id="canvas" hidden></canvas>
                                <div class="webcam-controls">
                                    <button id="startWebcam" class="btn btn-success">
                                        <i class="fas fa-video me-2"></i>Start Camera
                                    </button>
                                    <button id="captureBtn" class="btn btn-primary" style="display: none;">
                                        <i class="fas fa-camera me-2"></i>Capture
                                    </button>
                                    <button id="stopWebcam" class="btn btn-danger" style="display: none;">
                                        <i class="fas fa-stop me-2"></i>Stop Camera
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Preview Area -->
                        <div class="preview-area" id="previewArea" style="display: none;">
                            <img id="previewImage" alt="Preview">
                            <div class="preview-controls">
                                <button id="scanBtn" class="btn btn-success btn-lg">
                                    <i class="fas fa-search me-2"></i>Scan Material
                                </button>
                                <button id="clearBtn" class="btn btn-outline-secondary">
                                    <i class="fas fa-times me-2"></i>Clear
                                </button>
                            </div>
                        </div>
                        
                        <!-- Loading -->
                        <div class="scanning-loader" id="scanningLoader" style="display: none;">
                            <div class="loader-animation">
                                <i class="fas fa-cog fa-spin"></i>
                            </div>
                            <h4>Analyzing Material...</h4>
                            <p>Our AI is identifying the waste type</p>
                        </div>
                        
                        <!-- Results -->
                        <div class="scan-results" id="scanResults" style="display: none;">
                            <div class="result-header">
                                <h3>Scan Results</h3>
                            </div>
                            <div class="result-content">
                                <div class="material-info">
                                    <div class="material-icon" id="materialIcon">
                                        <i class="fas fa-question"></i>
                                    </div>
                                    <div class="material-details">
                                        <h4 id="materialType">Unknown</h4>
                                        <p id="materialMessage">Processing...</p>
                                        <div class="confidence-bar">
                                            <span>Confidence: <span id="confidenceText">0%</span></span>
                                            <div class="progress">
                                                <div class="progress-bar" id="confidenceBar" style="width: 0%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="recycling-info" id="recyclingInfo">
                                    <div class="recyclable-status" id="recyclableStatus">
                                        <i class="fas fa-recycle"></i>
                                        <span>Recyclable</span>
                                    </div>
                                    <div class="disposal-instructions" id="disposalInstructions">
                                        <h5>Disposal Instructions:</h5>
                                        <p id="instructionsText">Instructions will appear here...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feedback Section -->
    <section id="feedback" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="display-5 fw-bold mb-4">User Feedback</h2>
                    <p class="lead text-muted">
                        Share your experience with EcoKyats and E-bin technology. Your feedback helps us improve!
                    </p>
                </div>
            </div>
            
            <div class="row">
                <!-- Feedback Form -->
                <div class="col-lg-6 mb-5">
                    <div class="feedback-form-container">
                        <h3 class="mb-4">Share Your Feedback</h3>
                        <form id="feedbackForm">
                            <div class="mb-3">
                                <label for="userName" class="form-label">Name</label>
                                <input type="text" class="form-control" id="userName" required>
                            </div>
                            <div class="mb-3">
                                <label for="userEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="userEmail" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Rating</label>
                                <div class="rating-stars" id="ratingStars">
                                    <i class="fas fa-star" data-rating="1"></i>
                                    <i class="fas fa-star" data-rating="2"></i>
                                    <i class="fas fa-star" data-rating="3"></i>
                                    <i class="fas fa-star" data-rating="4"></i>
                                    <i class="fas fa-star" data-rating="5"></i>
                                </div>
                                <input type="hidden" id="userRating" value="5">
                            </div>
                            <div class="mb-3">
                                <label for="userMessage" class="form-label">Your Experience</label>
                                <textarea class="form-control" id="userMessage" rows="4" 
                                    placeholder="Tell us about your experience with EcoKyats and E-bin..." required></textarea>
                            </div>
                            <button type="submit" class="btn btn-success btn-lg w-100">
                                <i class="fas fa-paper-plane me-2"></i>Submit Feedback
                            </button>
                        </form>
                    </div>
                </div>
                
                <!-- Feedback Display -->
                <div class="col-lg-6">
                    <div class="feedback-display">
                        <h3 class="mb-4">What Users Say</h3>
                        <div id="feedbackList" class="feedback-list">
                            <!-- Feedback items will be loaded here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5 class="fw-bold mb-3">
                        <i class="fas fa-leaf me-2"></i>EcoKyats
                    </h5>
                    <p class="text-light">
                        Leading the way in smart waste management and environmental protection 
                        through innovative E-bin technology.
                    </p>
                    <div class="social-links">
                        <a href="#" class="text-light me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="fw-bold mb-3">Quick Links</h6>
                    <ul class="list-unstyled">
                        <li><a href="#home" class="text-light text-decoration-none">Home</a></li>
                        <li><a href="#issues" class="text-light text-decoration-none">Issues</a></li>
                        <li><a href="#solutions" class="text-light text-decoration-none">Solutions</a></li>
                        <li><a href="#scanner" class="text-light text-decoration-none">Scanner</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h6 class="fw-bold mb-3">E-bin Features</h6>
                    <ul class="list-unstyled">
                        <li class="text-light">AI Material Recognition</li>
                        <li class="text-light">Automatic Sorting</li>
                        <li class="text-light">Real-time Analytics</li>
                        <li class="text-light">Mobile Integration</li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-4">
                    <h6 class="fw-bold mb-3">Contact Info</h6>
                    <div class="contact-info">
                        <p class="text-light mb-2">
                            <i class="fas fa-envelope me-2"></i>info@ecokyats.com
                        </p>
                        <p class="text-light mb-2">
                            <i class="fas fa-phone me-2"></i>+1 (555) 123-4567
                        </p>
                        <p class="text-light">
                            <i class="fas fa-map-marker-alt me-2"></i>Green Tech Center, Eco City
                        </p>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="text-light mb-0">&copy; 2024 EcoKyats. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="text-light mb-0">Making the world cleaner, one scan at a time.</p>
                </div>
            </div>
        </div>
    </footer>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const navbar = document.getElementById('glass-navbar');

        function updateNavbarOnScroll() {
            if (window.scrollY > window.innerHeight * 0.95) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        }

        window.addEventListener('scroll', updateNavbarOnScroll);
        updateNavbarOnScroll(); // Trigger once on load in case page is already scrolled
    });
    </script>
</body>
</html>