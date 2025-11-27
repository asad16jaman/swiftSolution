@extends('user.layout.app')

@section('title', 'Home Page')

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

                            @if($uid == 'resturant')

                            <div class="swiper-slide">
                                    <img src="{{ asset('assets/user/assets/img/resturant/rs1.jpg') }}" alt=""
                                        class="img-fluid services-img slider_img">
                                </div>

                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/user/assets/img/resturant/rs2.jpg') }}" alt=""
                                        class="img-fluid services-img slider_img">
                                </div>

                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/user/assets/img/resturant/rs3.jpg') }}" alt=""
                                        class="img-fluid services-img slider_img">
                                </div>

                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/user/assets/img/resturant/rs4.png') }}" alt=""
                                        class="img-fluid services-img slider_img">
                                </div>

                            @else
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/user/assets/img/d-gallery/g-3.jpg') }}" alt=""
                                        class="img-fluid services-img slider_img">
                                </div>

                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/user/assets/img/d-gallery/g-1.jpg') }}" alt=""
                                        class="img-fluid services-img slider_img">
                                </div>

                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/user/assets/img/d-gallery/g-2.jpg') }}" alt=""
                                        class="img-fluid services-img slider_img">
                                </div>

                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/user/assets/img/d-gallery/g-4.jpg') }}" alt=""
                                        class="img-fluid services-img slider_img">
                                </div>

                            @endif


                        </div>
                        <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
                        <!-- <div class="swiper-pagination"></div> -->
                    </div>

                    <h3>Radisson e premium hospitality, modern amenities ar serene environment paben — relaxing luxury
                        experience er jonno perfect ek nam.</h3>

                    <div>
                        <p>Hotel Radisson offers a refined blend of comfort, luxury, and modern hospitality designed to
                            elevate
                            every guest experience. Crafted with attention to detail, our services focus on delivering
                            exceptional care, convenience, and an atmosphere that feels both elegant and inviting.</p>

                        <p>We provide world-class amenities and personalized attention to ensure every stay becomes
                            memorable.
                            Every moment at Radisson is shaped to deliver satisfaction, whether you are here for business,
                            leisure, or a peaceful getaway.</p>

                        <p>✔ Luxury Accommodation</p>

                        Our rooms are designed with a balance of sophistication and comfort. Featuring premium bedding, warm
                        lighting, and breathtaking city views, each room provides a relaxing and stylish environment for
                        guests seeking both rest and inspiration.

                        <p>✔ Fine Dining Experience</p>

                        Radisson offers a curated selection of international and local cuisines prepared by experienced
                        chefs. From signature dishes to seasonal specialties, our dining experience blends flavor,
                        presentation, and impeccable service to create an unforgettable culinary journey.

                        <p>✔ Conference & Event Facilities</p>

                        For business travelers, we offer fully equipped conference rooms, elegant banquet halls, and modern
                        event spaces suitable for meetings, seminars, corporate gatherings, and private celebrations. Our
                        event team ensures seamless planning and smooth execution.

                        <p>✔ Exceptional Guest Services</p>

                        Our dedicated hospitality team is always ready to assist with concierge support, airport transfers,
                        room service, and personalized guest care. Whether you need travel arrangements or city
                        recommendations, we ensure a hassle-free and comfortable experience.

                        <p>✔ A Stay to Remember</p>

                        At Hotel Radisson, every detail is designed to make your stay meaningful and memorable. We combine
                        luxury, convenience, and heartfelt hospitality to provide an atmosphere where guests feel valued and
                        truly at home.
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-box">
                        <h4>Serices List</h4>
                        <div class="services-list">
                            <a href="{{ route('our_services',['type' => 'hotel']) }}" class="{{ $uid !== 'resturant' ? 'active' : '' }}"><i class="bi bi-arrow-right-circle"></i><span>Hotel
                                    </span></a>
                            <a href="{{ route('our_services', ['type'=> 'resturant']) }}" class="{{ $uid == 'resturant' ? 'active' : '' }}"><i class="bi bi-arrow-right-circle"></i><span>Resturant</span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Travel & Tourism</span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Event Management</span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Tourism</span></a>
                        </div>
                    </div><!-- End Services List -->
                    <div class="service-box">
                        <h4>Important</h4>
                        <div class="download-catalog">
                            <a href="{{ route('resturant.book') }}"><i class="bi bi-calendar-check"></i><span>Booking</span></a>
                            <a href="{{ route('contactPage') }}"><i class="bi bi-telephone"></i><span>Contact Us</span></a>
                        </div>
                    </div><!-- End Services List -->
                    <div class="help-box d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-headset help-icon"></i>
                        <h4>Have a Question?</h4>
                        <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>+1 5589
                                55488 55</span></p>
                        <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a
                                href="mailto:contact@example.com">contact@example.com</a></p>
                    </div>

                    
                </div>





            </div>
        </div>
    </section><!-- /Service Details Section -->

@endsection

@push('script')




@endpush