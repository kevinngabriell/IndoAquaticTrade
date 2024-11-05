<!-- resources/views/home.blade.php -->

@extends('layouts.home')

@section('content')

<main id="main">
    {{-- <section class="breadcrumbs" style="background-color: black  !important">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2 style="color:#f78628 !important"></h2>
          <ol>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li style="color:#f78628 !important">About Us</li>
          </ol>
        </div>

      </div>
    </section> --}}
<br>
<br>
<br>
     <!-- About 2  -->
     <section class="py-3 py-md-5 py-xl-12 aboutnew" style="background-color: white !important;color:#032f60 !important">
      <div class="container">
        <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center mt-4 mb-4">
          <div class="col-12 col-lg-6 col-xl-6">
            <img class="img-fluid rounded" loading="lazy" src="{{ asset('themeaqua/assets/img/logoperusahaan.jpeg') }}" alt="">
          </div>
          <div class="col-12 col-lg-6 col-xl-6">
            <div class="row justify-content-xl-center">
              <div class="col-12 col-xl-11">
                <h2 class="h1 mb-2">About <span style="color: #f78628">Us</span></h2>
                  <p class="mb-5" style="text-align: justify;">{{ $profile->sejarah }}</p>
                <h2 class="h1 mb-2">Our <span style="color: #f78628">Vision</span></h2>
                <p class="mb-5">{{ $profile->visi_misi }}</p>
                <h2 class="h1 mb-2">Our <span style="color: #f78628">Mission</span></h2>
                <ul>
                  @php
                      $profilLines = explode(PHP_EOL, $profile->profil);
                  @endphp
                  @foreach($profilLines as $line)
                      <li>{{ $line }}</li>
                  @endforeach
              </ul>
              <div class="btns download">
                <a href="{{ asset('cv/COMPANY PROFILE.pdf') }}" download class="btn-menu animated fadeInUp scrollto">Download Company Profile</a>
            </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
       <!-- About 2  -->

  </main><!-- End #main -->

@endsection
