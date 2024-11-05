<!-- resources/views/home.blade.php -->

@extends('layouts.home')
@section('content')
 
  <!-- ======= Hero Section ======= -->
  <section id="hero2" class="hero-section">
    <div>
      <h1>{!! __('home.hometitle') !!}</h1>
      <div class="line mt-3">
        <div style="color: #fff;">{!! __('home.homedesc') !!}</div>
      </div>
      <div class="btn-menu mt-4"><a href="#aboutus">{!! __('home.discovermore') !!}</a></div>
    </div>
    <div class="image-content">
    </div>
  </section>

  <main id="main">
    <!-- About Section -->
    <section id="aboutus" class="py-3 py-md-5 py-xl-12 mt-5 about-section">
      <div class="container">
        <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center mt-4 mb-4">
          <div class="col-12 col-lg-6 col-xl-6">
            <div class="row mb-4" style="gap: 30px;">
              <div class="col-5 col-lg-5 col-xl-5 p-0">
                <div class="card2">
                  <div class="card-body">
                    <h1>{!! __('home.successfulshipmentNumbers') !!}</h1>
                    <p>{!! __('home.successfulshipment') !!}</p>
                  </div>
                </div>
              </div>
              <div class="col-5 col-lg-5 col-xl-5 p-0">
                <div class="card2">
                  <div class="card-body">
                    <h1>{!! __('home.clientsatisfactionNumbers') !!}</h1>
                    <p>{!! __('home.clientsatisfaction') !!}</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" style="gap: 30px;">
              <div class="col-5 col-lg-5 col-xl-5 p-0">
                <div class="card2">
                  <div class="card-body">
                    <h1>{!! __('home.happycustomersNumbers') !!}</h1>
                    <p>{!! __('home.happycustomers') !!}</p>
                  </div>
                </div>
              </div>
              <div class="col-5 col-lg-5 col-xl-5 p-0">
                <div class="card2">
                  <div class="card-body">
                    <h1>{!! __('home.countriesservedNumbers') !!}</h1>
                    <p>{!! __('home.countriesserved') !!}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="line-blue col-12 col-lg-6 col-xl-6">
            <div class="row">
              <div class="section-title mb-2">
                <h2>{!! __('home.aboutus') !!}</h2>
              </div>  
              <h3>{!! __('home.aboutusdesc') !!}</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Product Category Section -->
    <section id="product-category-section" class="product-category-section">  
      <div class="section-title align-items-center">
        <p>{!! __('home.productcategory') !!}</p>
      </div>

      <div class="product-category-content ml-r mr-5">
        <div class="row">
          <!-- Card 1 -->
          <div class="col-12 col-md-4 mb-4">
            <div class="product-card">
              <img src="{{ asset('themeaqua/assets/img/seaperch-fish-white-snapper-fish1.png') }}" alt="Live Products">
              <div class="category-label">{!! __('home.liveproducts') !!}</div>
              <div class="product-overlay"></div>
              <div class="product-description orange-card">
                <h4>{!! __('home.liveproducts') !!}</h4>
                <p>{!! __('home.liveproductsdesc') !!}</p>
              </div>
            </div>
          </div>
          <!-- Card 2 -->
          <div class="col-12 col-md-4 mb-4">
            <div class="product-card">
              <img src="{{ asset('themeaqua/assets/img/seaperch-fish-white-snapper-fish2.png') }}" alt="Frozen Products">
              <div class="category-label">{!! __('home.frozenproducts') !!}</div>
              <div class="product-overlay"></div>
              <div class="product-description orange-card">
                <h4>{!! __('home.frozenproducts') !!}</h4>
                <p>{!! __('home.frozenproductsdesc') !!}</p>
              </div>
            </div>
          </div>
          <!-- Card 3 -->
          <div class="col-12 col-md-4 mb-4">
            <div class="product-card">
              <img src="{{ asset('themeaqua/assets/img/seaperch-fish-white-snapper-fish3.png') }}" alt="Fresh Products">
              <div class="category-label">{!! __('home.freshproducts') !!}</div>
              <div class="product-overlay"></div>
              <div class="product-description orange-card">
                <h4>{!! __('home.freshproducts') !!}</h4>
                <p>{!! __('home.freshproductsdesc') !!}</p>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-center">
            <a class="btn animated fadeInUp scrollto" href="{{ url('/product') }}">
                {!! __('home.seeallproducts') !!}
            </a>
        </div>
      </div>    
    </section>

    <!-- Why Us Section -->
    <section id ="why-us-section" class="why-us-section py-3 py-md-5 py-xl-12">  
      <div class="section-title align-items-center">
        <p>{!! __('home.whychooseus') !!}</span></p>
      </div>
      <p class="text-center chooseus-text">{!! __('home.whychooseusdesc') !!}</p>
      <div class="container">
        <div class="row gy-3 gy-md-4 gy-lg-0 mb-2">
          <div class="row align-items-lg-center mt-4 mb-4">
            <!-- Repeat for each award -->
            <div class="chooseus-card-container">
              <div class="chooseus-card start"> <!-- Add Start for Top Left and bottom left border radisu -->
                  <div class="chooseus-card-icon"><img src="{{ asset('themeaqua/assets/img/verified.png') }}" ></div>
                  <h3>{!! __('home.productquality') !!}</h3>
                  <p>{!! __('home.productqualitydesc') !!}</p>
              </div>
              <div class="chooseus-card">
                  <div class="chooseus-card-icon"><img src="{{ asset('themeaqua/assets/img/ship.png') }}" ></div>
                  <h3>{!! __('home.shippingreliability') !!}</h3>
                  <p>{!! __('home.shippingreliabilitydesc') !!}</p>
              </div>
              <div class="chooseus-card">
                  <div class="chooseus-card-icon"><img src="{{ asset('themeaqua/assets/img/money.png') }}" ></div>
                  <h3>{!! __('home.pricingcompetitiveness') !!}</h3>
                  <p>{!! __('home.pricingcompetitivenessdesc') !!}</p>
              </div>
              <div class="chooseus-card end"> <!-- Add Start for Top right and bottom right border radisu -->
                  <div class="chooseus-card-icon"><img src="{{ asset('themeaqua/assets/img/chat.png') }}" ></div>
                  <h3>{!! __('home.customsolutions') !!}</h3>
                  <p>{!! __('home.customsolutionsdesc') !!}</p>
              </div>
          </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Product Section -->
    <section id="international" class="international py-3 py-md-5 py-xl-12">  
      <div class="section-title align-items-center">
        <p>{!! __('home.trustedbyinternationalstandars') !!}</p>
      </div>
      
      <div class="running-text-wrapper">
        <div class="running-text">
          <img class="img-fluid rounded" loading="lazy" src="{{ asset('themeaqua/assets/img/safetycertification.png') }}" alt="">
          <img class="img-fluid rounded" loading="lazy" src="{{ asset('themeaqua/assets/img/gmpcertification.png') }}" alt="">
          <img class="img-fluid rounded" loading="lazy" src="{{ asset('themeaqua/assets/img/hacppcertification.png') }}" alt="">
          <img class="img-fluid rounded" loading="lazy" src="{{ asset('themeaqua/assets/img/halalcertification.png') }}" alt="">
          <img class="img-fluid rounded" loading="lazy" src="{{ asset('themeaqua/assets/img/safecertification.png') }}" alt="">
        </div>
      </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery-section">
        <div class="section-title text-center">
            <p>{!! __('home.ourlatestcollection') !!}</p>
        </div>
        <div class="gallery-container">
            <div class="gallery-grid">
                @foreach ($gallery->take(8) as $item) <!-- Limit to 8 images -->
                    <img src="{{ asset('storage/' . $item->foto_gallery) }}" class="gallery-item" alt="Gallery image">
                @endforeach
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a class="btn animated fadeInUp scrollto" href="{{ url('/galleries') }}">
                {!! __('home.morecollection') !!}
            </a>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="events2" class="events-section">
        <div class="section-title text-center">
            <p>{!! __('home.seafoodinsightsonourblog') !!}</p>
        </div>  
        <div class="container">
            <div class="row align-items-lg-center mt-4 mb-4">
                @foreach ($blogs->take(3) as $item)
                    <div class="col-4 col-lg-3 col-xl-4">
                        <div class="card">
                            <div class="card-img-top" style="position: relative; min-height: 400px;">
                                <!-- Wrap the image and the overlay in an anchor tag to make the whole area clickable -->
                                <a href="{{ url('/blogs/' . $item->slug) }}" style="text-decoration: none;">
                                    <img src="{{ asset('storage/' . $item->image_blog) }}" class="img-fluid" alt="Blog Image" >
                                    <div class="overlay" style="position: absolute; bottom: 0; left: 0; width: 100%; background: rgba(0, 0, 0, 0.5); color: white; padding: 15px;">
                                        <p>{{ \Carbon\Carbon::parse($item->date)->diffForHumans() }}</p>
                                        <h5>{{ $item->title }}</h5>
                                        <p>Read More</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a class="btn animated fadeInUp scrollto" href="{{ url('/blogs') }}">
                {!! __('home.moreblogs') !!}
            </a>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center mt-4 mb-4">
          <div class="col-12 col-lg-6 col-xl-6">
            <div class="card contact-card mb-30">
              <div class="card-body">
                <h4 class="card-title">{!! __('home.letsbuildawesomeproject') !!}</h4>
                <p>{!! __('home.gotaprojectcontactus') !!}</p>

                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <p>{!! __('home.name') !!}</p>
                      <input type="text" name="name" class="form-control" id="name" placeholder="Full name" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                      <p>{!! __('home.email') !!}</p>  
                      <input type="email" class="form-control" name="email" id="email" placeholder="Email address" required>
                    </div>
                  </div>
                  <div class="form-group mt-3">
                    <p>{!! __('home.subjects') !!}</p>  
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjects" required>
                  </div>
                  <div class="form-group mt-3">
                    <p>{!! __('home.yourmessage') !!}</p>  
                    <textarea class="form-control" name="message" rows="8" placeholder="Write text here ..." required></textarea>
                  </div>
                  <div class="my-3">
                    <div class="loading">{!! __('home.loading') !!}</div>
                    <div class="error-message"></div>
                    <div class="sent-message">{!! __('home.messagehasbeensent') !!}</div>
                  </div>
                  <div class="text-left">
                    <button type="submit" class="btn">{!! __('home.sendmessage') !!}</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="maps col-12 col-lg-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15864.689555233223!2d106.59650390554741!3d-6.240997478838428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fd9ff11c86b1%3A0xe848c609ea81d6c9!2sRuko%20Solvang%20Arcade!5e0!3m2!1sid!2sid!4v1712827742674!5m2!1sid!2sid" style="border:0; width: 100%; height:50vw;" style="border:0;" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection