<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @if(Request::is('blogs/*'))
            {{ $blogs->title }} - {{ $about ->name }}
        @else
            {{ $about->name }} - {{ $about ->sub }}
        @endif
    </title>
    <meta name="description" content="
        @if(Request::is('blogs/*'))
            {{ $blogs->description ?? Str::limit(strip_tags($blog->content), 160) }}
        @else
            {{ $about ->description }}
        @endif
    ">
    <meta name="keywords" content="
        @if(Request::is('blogs/*'))
            {{ $blogs->keyword ?? 'blog, article, skipjack tuna, seafood' }}
        @else
            {{ $about ->keywords }}
        @endif
    ">
    <meta property="og:title" content="{{ $about ->name }}">
    <meta property="og:description" content="{{ $about ->description }}">
    <meta property="og:image" content="{{ asset($about->favicon) }}">
    <meta property="og:url" content="https://indoaquatictrade.com/">
    <meta name="twitter:title" content="{{ $about ->name }}">
    <meta name="twitter:description" content="https://indoaquatictrade.com/">
    <meta name="twitter:url" content="{{ asset($about ->favicon) }}">
    <meta name="twitter:card" content="summary">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset($about ->favicon) }}">
    <link rel="apple-touch-icon" href="{{ asset($about ->favicon) }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Playfair+Display:400,500,600,700|Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('themeaqua/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('themeaqua/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('themeaqua/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('themeaqua/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('themeaqua/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('themeaqua/assets/css/style.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet">

    <style>
        .header-transparent {
            background-color: transparent;
            transition: background-color 0.3s ease;
        }
        .header-white {
            background-color: #E5E7EB !important;
            transition: background-color 0.3s ease;
            color: black !important;
        }
        .logo-white {
            color: white;
        }
        .logo-black {
            width: 90% !important;
            color: black;
        }
        .language-white {
            color: white !important;
        }
        .language-black {
            color: black !important;
        }
        
    </style>
</head>
<body>
  
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
            <a href="{{ url('/') }}" class="logo me-auto me-lg-0">
                <img id="logo-image" class="Sirv" src="{{ asset($about ->logo) }}" alt="{{ $about ->name }}" title="{{ $about ->name }}" style="height:auto !important;">
            </a>
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link {{ Request::is('/') ? 'active logo-white' : 'logo-black' }}" href="{{ url('/') }}">Home</a></li>
                    <li><a class="nav-link scrollto {{ Request::path() == 'about-us' ? 'inactive' : '' }}" href="{{ url('/') }}#aboutus">About Us</a></li>
                    <li><a class="nav-link scrollto {{ Request::path() == 'product' ? 'active' : '' }}" href="{{ url('/product') }}">Product</a></li>
                    <li><a class="nav-link scrollto {{ Request::path() == 'galleries' ? 'active' : '' }}" href="{{ url('/galleries') }}">Collection</a></li>
                    <li><a class="nav-link scrollto {{ Request::is('/blogs') ? 'active logo-white' : 'logo-black' }}" href="{{ url('/blogs') }}">Blog</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle" style="color: #fff"></i>
            </nav>
            <div class="align-items-center" style="display: flex; flex-direction: row;">
            <!-- {{ url('/contact-us') }} -->
                <a href="{{ url('/contact-us') }}" class="btn-menu">Contact Us</a>
                <div class="dropdown">
                    <button class="dropdown-toggle" type="button" id="dropdownButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset(app()->getLocale() === 'zh' ? 'themeaqua/assets/img/cn.png' : 'themeaqua/assets/img/eng.png') }}" alt="{{ app()->getLocale() }}" >
                        {{ strtoupper(app()->getLocale()) }} <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownButton">
                        <li><a class="dropdown-item" href="{{ url('?locale=en') }}"><img src="{{ asset('themeaqua/assets/img/eng.png') }}" alt="EN" style="width:20px; height:auto;"> English</a></li>
                        <li><a class="dropdown-item" href="{{ url('?locale=zh') }}"><img src="{{ asset('themeaqua/assets/img/cn.png') }}" alt="ZH" style="width:20px; height:auto;"> Chinese</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
  <!-- End Header -->

  <!-- Main Content -->
  <main>
    @yield('content')
  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="footer-info">
              <img src="{{ asset($about ->logo) }}" alt="Indo Aquatic Trade">
              <p class="mt-4">Indo Aquatic Trade brings you the finest seafood, delivering the authentic taste of the ocean in every bite</p>
              <div class="social-links mt-3">
                <a href="https://facebook.com/indoaquatictrade" class="social-icon"><i class="fab fa-facebook"></i></a>
                <!-- <a href="https://twitter.com/aquatictrade_" class="social-icon"><i class="fab fa-twitter"></i></a> -->
                <a href="https://www.instagram.com/indoaquatictrade/" class="social-icon"><i class="fab fa-instagram"></i></a>
                <!-- <a href="https://www.youtube.com/channel/UCfT7k4jdhgffqzIpArlDn2g" class="social-icon"><i class="fab fa-youtube"></i></a> -->
                <!-- <a href="https://www.linkedin.com/in/yuricolaurentiuslung23/" class="social-icon"><i class="fab fa-linkedin"></i></a> -->
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="footer-links">
                <h4>Pages</h4>
                <div class="footer-links-columns">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/about-us') }}">About us</a></li>
                        <li><a href="{{ url('/product') }}">Product</a></li>
                    </ul>
                    <ul>
                        <li><a href="{{ url('/galleries') }}">Collection</a></li>
                        <li><a href="{{ url('/blogs') }}">Blog</a></li>
                        <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
          <div class="col-md-4">
            <div class="footer-links">
              <h4>Contact</h4>
              <ul>
                <li><i class="fas fa-phone"></i>{{ $about ->phone }}</li>
                <li><i class="fas fa-envelope"></i> {{ $about ->email }}</li>
                <li><i class="fas fa-map-marker-alt"></i>{{ $about ->address }}</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="https://wa.me/+628119278980?text=Hello%2C%20I%20have%20a%20question.%20" target="_blank" class="floatChat">
    <img src="{{ asset('themeaqua/assets/img/wa2.png') }}" alt="whatsapp" width="50">
  </a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('themeaqua/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('themeaqua/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('themeaqua/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('themeaqua/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('themeaqua/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('themeaqua/assets/js/main.js') }}"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
        const header = document.getElementById('header');
        const logoImage = document.getElementById('logo-image');
        const languageButton = document.getElementById('dropdownButton');  // Grab the language button
        const isHome = window.location.pathname === '/'; 
        const isBlog = window.location.pathname === '/blogs'; 
        const whiteLogoSrc = "{{ asset($about ->favicon) }}"; // Path to your black logo
        const defaultLogoSrc = "{{ asset($about ->logo) }}";
        const contactUsButton = document.querySelector('.btn-menu');
        const mobileNavToggle = document.querySelector('.mobile-nav-toggle');

        function updateHeaderOnScroll() {
            if (window.scrollY > 0 || !isHome && !isBlog) {
                header.classList.remove('header-transparent');
                header.classList.add('header-white');
                logoImage.src = whiteLogoSrc;
                languageButton.classList.add('language-black');
                contactUsButton.classList.add('btn-scroll');
                mobileNavToggle.classList.add('scroll');

                document.querySelectorAll('.nav-link').forEach(link => {
                    link.classList.remove('logo-white');
                    link.classList.add('logo-black');
                });
            } else {
                header.classList.add('header-transparent');
                header.classList.remove('header-white');
                logoImage.src = defaultLogoSrc;
                languageButton.classList.remove('language-black');
                contactUsButton.classList.remove('btn-scroll');
                mobileNavToggle.classList.remove('scroll');

                document.querySelectorAll('.nav-link').forEach(link => {
                    link.classList.remove('logo-black');
                    link.classList.add('logo-white');
                });
            }
        }

        // Run on page load
        updateHeaderOnScroll();

        // Update on scroll
        window.addEventListener('scroll', updateHeaderOnScroll);
    });
</script>
</body>
</html>
