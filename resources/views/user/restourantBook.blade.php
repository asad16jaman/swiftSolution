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
    .text-white{
      color: #ffffff !important;
    }
  </style>
@endpush

@section('content')

  <div class="page-title light-background" data-aos="fade">
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="/">Home</a></li>
          <li class="current">Resturant Book</li>
        </ol>
      </div>
    </nav>
  </div>

  <!-- Starter Section Section -->

  <section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title d-flex justify-content-center" data-aos="fade-up">
      <div class="g-img">
        <h2>Restourant Book Page</h2>
      </div>

    </div>
    <!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="row bg-gr" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-12 pt-card border-bottom">
              <div class="info-item d-flex  pb-3 justify-content-center align-items-center">
                <h1 class="text-white">Star Kabab</h1>
              </div>
            </div><!-- End Info Item -->

            <div class="col-lg-12 pb-card border-bottom pt-card">
              <div class="info-item d-flex  justify-content-center align-items-center">
                <img src="{{ asset('assets/user/assets/img/resturant/rs1.jpg') }}" class="img-fluid" alt="">
              </div>
            </div><!-- End Info Item -->

            <div class="col-lg-12  pb-card pt-card">
              <div class="info-item d-flex justify-content-center align-items-center">
                <h5 class="text-white">Star Kabab e premium hospitality, modern amenities ar serene environment paben — relaxing luxury experience er jonno perfect ek nam.</h5>

              </div>
            </div><!-- End Info Item -->

          </div>
        </div>

        <div class="col-md-6 col-lg-8">
          <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="300">
            <div class="row gy-4">

              <div class="col-md-6">
                <label for="">Name*</label>
                <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
              </div>

              <div class="col-md-6 ">
                <label for="">Phone*</label>
                <input type="text" class="form-control" name="phone" placeholder="Your Phone" required="">
              </div>

              <div class="col-md-6">
                <label for="">Booking Date*</label>
                <input type="date" name="date" class="form-control" required="">
              </div>

              <div class="col-md-6 ">
                <label for="">Booking Time*</label>
                <input type="time" class="form-control" name="time"  required="">
              </div>


              <div class="col-md-12">
                <label for="">Number Of People*</label>
                <input type="number" class="form-control" name="people" placeholder="Number Of People" required="">
              </div>

              <div class="col-md-12">
                <label for="">Message</label>
                <textarea class="form-control" name="message" rows="6" placeholder="If Any Message" required=""></textarea>
              </div>

              <div class="col-md-12 text-end">
                <!-- <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div> -->

                <button type="submit" class="bg-submit">Book Now</button>
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