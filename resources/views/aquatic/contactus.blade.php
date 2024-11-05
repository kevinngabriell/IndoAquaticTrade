@extends('layouts.home')

@section('content')
 
<main id="main">
  {{-- <section class="breadcrumbs" style="background-color: black !important">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2 style="color:#f78628 !important"></h2>
        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li style="color:#f78628 !important">Contact Us</li>
        </ol>
      </div>

    </div>
  </section> --}}
  <br>
<br>
<br>

    <!-- ======= Contact Section ======= -->
     <!-- ======= Contact Section ======= -->
     <section id="contact" class="contact" style="background: #032f60 !important; color: #f78628 !important">
      <div  data-aos="fade-up">

        <div class="section-title align-center " >
          <p class="contact_mobile2" >Contact Us </p>
        </div>

      <div data-aos="fade-up">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15864.689555233223!2d106.59650390554741!3d-6.240997478838428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fd9ff11c86b1%3A0xe848c609ea81d6c9!2sRuko%20Solvang%20Arcade!5e0!3m2!1sid!2sid!4v1712827742674!5m2!1sid!2sid" style="border:0; width: 100%; height: 350px;" frameborder="0" allowfullscreen></iframe>
       </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h5 id="headoffice">HEADQUARTER:</h5>
                <p>{{ $about->perusahan }}</p>
                <p>{{ $about->address }}</p>
              </div>

              {{-- <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Open Hours:</h4>
                <p>
                  {!! ($about->open_hours) !!}
                </p>
              </div> --}}
              <div class="phone">
                <i class="bi bi-phone"></i>
                {{-- <h4>Call:</h4> --}}
                <p style="padding-top: 10px !important;">{{ $about->phone }}</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                {{-- <h4>Email:</h4> --}}
                <p style="padding-top: 10px !important;margin-left:-50px">
                <a style="margin-left:-50px" href="mailto:{{ $about->email }}" >{{ $about->email }}</a>
                </p>
              </div>


              <div class="email">
                <i class="bi bi-globe"></i>
                {{-- <h4>Website:</h4> --}}
               <p style="padding-top: 10px !important;margin-left:-50px"><a class="mt-1" style="margin-left:-50px" href="https://indoaquatictrade.com/" target="_blank" >www.indoaquatictrade.com</a>
               </p> 
              </div>

              <div class="email">
                <i class="bi bi-facebook"></i>
                {{-- <h4>Website:</h4> --}}
                <p style="padding-top: 10px !important;margin-left:-50px">
                <a style="margin-left:-50px" href="https://www.facebook.com/indoaquatictrade" target="_blank" >@indoaquatictrade</a>
                </p>
              </div>

              <div class="email">
                <i class="bi bi-instagram"></i>
                {{-- <h4>Website:</h4> --}}
                <p style="padding-top: 10px !important;margin-left:-50px">
                <a style="margin-left:-50px;" href="https://www.instagram.com/indoaquatictrade/" target="_blank" >@indoaquatictrade</a>
                </p>
              </div>

             

            </div>

          </div>

          <div class="col-lg-8 contact_mobile">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-left"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section>
    <!-- End Contact Section -->
    <!-- End Contact Section -->

  

    


  </main><!-- End #main -->

@endsection
