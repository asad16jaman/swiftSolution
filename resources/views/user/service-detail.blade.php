@extends('user.layout.app')

@section('title', 'Swift Solution | Service Detail Page')

@push('style')
    <style>
        .service-shadow {
            box-shadow: 1px 1px 4px 0px #00000094;
        }

        .slider_img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        .book_card_shadow{
            border: 0;
            box-shadow: 0px 1px 5px 4px #0000004d;
        }
        .book_submiting_btn{
            background: #0e363e;
            color: #fff;
            border: none;
        }
    </style>
@endpush

@section('content')

    <div class="page-title light-background" data-aos="fade">

        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li class="current">Service Detail</li>
                </ol>
            </div>
        </nav>
    </div>

    <!-- Starter Section Section -->

    <section id="service-details" class="service-details section">
        <div class="container">
            <!--  -->
            <div class="g-img w-100 mt-5 mb-5">
            <h2 style="margin-bottom:0px;font-weight:900" class="text-center">{{ $service->name }}</h2>
            </div>
            <div class="row gy-5">


                <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-details-slider swiper init-swiper">
                        <script type="application/json" class="swiper-config">
                            {
                              "loop": true,
                              "speed": 600,
                              "autoplay": {
                                "delay": 1000000000
                              },
                              "slidesPerView": "auto",
                              "navigation": {
                                "nextEl": ".swiper-button-next",
                                "prevEl": ".swiper-button-prev"
                              },
                              "pagination": {
                                "el": ".swiper-pagination",
                                "type": "bullets",
                                "clickable": true
                              }
                            }
                          </script>
                        <div class="swiper-wrapper align-items-center">

                           

                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/'. $service->slider1) }}" alt=""
                                        class="img-fluid services-img slider_img">
                                </div>

                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/'. $service->slider2) }}" alt=""
                                        class="img-fluid services-img slider_img">
                                </div>

                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/'. $service->slider3) }}" alt=""
                                        class="img-fluid services-img slider_img">
                                </div>

                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/'. $service->slider4) }}" alt=""
                                        class="img-fluid services-img slider_img">
                                </div>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                        <!-- <div class="swiper-pagination"></div> -->
                    </div>

                    

                    <div>
                       {!! $service->description !!}
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card book_card_shadow">
                        <div class="card-header">
                            <h3 class="card-title text-center">Booking Form</h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="post" class="php-email-form">
                                @csrf
                                <input type="text" name="serviceName" value="{{ $service->name }}" class="d-none" >
                                <div class="row gy-4">
                                    <div class="col-md-12">
                                        <label for="">Name*</label>
                                        <input type="text" value="asad"  name="name" class="form-control @error('name') 'is-invalid' @enderror" placeholder="Your Name"
                                            >
                                        @error('name') 
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="col-md-12 ">
                                        <label for="">Phone*</label>
                                        <input type="text" value="01755698321" class="form-control  @error('phone') 'is-invalid' @enderror" name="phone" placeholder="Your Phone"
                                            required="">
                                         @error('phone') 
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <label for="">Booking Date*</label>
                                        <input type="date" name="book_date" class="form-control  @error('book_date') 'is-invalid' @enderror" required="">
                                         @error('book_date') 
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="col-md-12 ">
                                        <label for="">Booking Time*</label>
                                        <input type="time" class="form-control  @error('book_time') 'is-invalid' @enderror" name="book_time" required="">
                                        @error('book_time') 
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Number Of People*</label>
                                        <input type="number" value="5" class="form-control  @error('people') 'is-invalid' @enderror" name="people"
                                            placeholder="Number Of People" required="">
                                         @error('number') 
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Message</label>
                                        <textarea class="form-control  @error('message') 'is-invalid' @enderror" name="message" rows="6" placeholder="If Any Message"
                                            required="">dddd</textarea>
                                         @error('message') 
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 text-end">
                                        <button type="submit" class="bg-submit book_submiting_btn">Book Now</button>
                                    </div>
                                </div>
                            </form><!-- End Contact Form -->
                        </div>
                    </div>
                </div>





            </div>
        </div>
    </section><!-- /Service Details Section -->


<!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Success</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        @if(session('success'))
          <p>{{ session('success') }}</p>
        @endif
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
      </div>

    </div>
  </div>
</div>

@endsection

@push('script')

<script>
     @if (session('success'))
        $(document).ready(function () {
            $('#successModal').modal('show');
        });
    @endif
</script>


@endpush