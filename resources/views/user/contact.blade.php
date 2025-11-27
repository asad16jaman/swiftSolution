@extends('user.layout.app')

@section('title', 'Home Page')

@push('style')
  <style>
    .service-shadow {
      box-shadow: 1px 1px 4px 0px #00000094;
    }

    .bg-gr {
      background: linear-gradient(0deg, #005ee9, #ff581d)
    }

    .bg-submit {
      background: #0e363e;

    }

    .info-width {
      width: 76%;
    }

    .pb-card {
      padding-bottom: 20px;
    }

    .pt-card {
      padding-top: 20px;
    }
    .border-bottom{
      border-bottom: 2px dotted #fff !important;
    }
  </style>
@endpush

@section('content')

  <div class="page-title light-background" data-aos="fade">
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="/">Home</a></li>
          <li class="current">Contact Page</li>
        </ol>
      </div>
    </nav>
  </div>

  <!-- Starter Section Section -->

  <section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title mt-5 d-flex justify-content-center" data-aos="fade-up">
      <div class="g-img">
        <h2>Contact Us</h2>
      </div>

    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row mb-4">
        <div class="col-md-6 col-lg-4">
          <div class="row bg-gr" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-12 pt-card border-bottom">
              <div class="info-item d-flex  pb-3 justify-content-center align-items-center">
                <div><i class="bi bi-geo-alt"></i></div>
                <div class="info-width">
                  <h3 class="text-white">Address</h3>
                  <p class="text-white">house no17 , Road no 6 , Block A , Mirpur 10</p>
                </div>
              </div>
            </div><!-- End Info Item -->

            <div class="col-lg-12 pb-card border-bottom pt-card">
              <div class="info-item d-flex  justify-content-center align-items-center">
                <div><i class="bi bi-telephone"></i></div>
                <div class="info-width">
                  <h3 class="text-white">Call Us</h3>
                  <p class="text-white">+1 5589 55488 55</p>
                </div>
              </div>
            </div><!-- End Info Item -->

            <div class="col-lg-12  pb-card pt-card">
              <div class="info-item d-flex justify-content-center align-items-center">
                <div><i class="bi bi-envelope"></i></div>
                <div class="info-width">
                  <h3 class="text-white">Email Us</h3>
                  <p class="text-white">swiftslutionbd2010@gmail.com</p>
                </div>

              </div>
            </div><!-- End Info Item -->

          </div>
        </div>
        <div class="col-md-6 col-lg-8">
          <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="300">
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
              </div>

              <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
              </div>

              <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
              </div>

              <div class="col-md-12 text-end">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="submit" class="bg-submit">Send Message</button>
              </div>

            </div>
          </form><!-- End Contact Form -->
        </div>
      </div>





    </div>

  </section><!-- /Contact Section -->

@endsection

@push('script')




@endpush