@extends('layouts.home')

@section('content')

<main id="main">
  <br><br><br><br><br>

  <!-- ======= Gallery Section ======= -->
  <section id="gallery-section" class="gallery-section">
    <div class="container" data-aos="fade-up">
      <div class="section-title text-center">
        {{-- <h2>Gallery</h2> --}}
        <a href="{{ url('/') }}">
          <img id="logo-image" class="SirvLogo" src="{{ asset($about->favicon) }}" alt="{{ $about->name }}" title="{{ $about->name }}">
        </a>
        <p class="mobile_font" style="margin-top: 30px; margin-bottom: 50px;">{!! __('home.ourlatestcollection') !!}</p>
      </div>
    </div>

    <div class="container-fluid pl-4 ml-4 mr-4" data-aos="fade-up" data-aos-delay="100">
      <div class="row g-3 gallery-grid" style="padding-left: 2rem !important; padding-right: 2rem !important;">
        @foreach ($gallery as $item) <!-- Limit to 8 images -->
          <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="gallery-item">
              <a href="{{ asset('storage/' . $item->foto_gallery) }}" class="gallery-lightbox" data-gall="gallery-item">
                <img src="{{ asset('storage/' . $item->foto_gallery) }}" alt="Gallery image" class="img-fluid">
              </a>
              <div class="gallery-info">
                <p class="gallery-date">{{ \Carbon\Carbon::parse($item->date)->format('d F Y') }}</p>
                <p class="gallery-title">{{ $item->title }}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>

    
  </section><!-- End Gallery Section -->

</main><!-- End #main -->

@endsection