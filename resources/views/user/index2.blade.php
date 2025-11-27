@extends('user.layout.app')

@section('title', 'Home Page')

@push('style')
  <link href="{{ asset('assets/user/assets/css/galleryeffect.css') }}" rel="stylesheet">
  <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>
  <style>
    .mt-70 {
      margin-top: 70px !important;
    }

    .about-shadow {
      box-shadow: -1px 2px 10px -1px #000000b0;
      z-index: 999;
    }

    .text-justify {
      text-align: justify;
    }

    .about-btn {
      background: #0e363e;
      color: #fff;
      font-size: 13px;
    }

    .weight-900 {
      font-weight: 900;
    }

    .about-title {
      display: flex;
      align-items: center;
    }

    .weight-700 {
      font-weight: 700;
    }

    .line {
      width: 45px;
      height: 1px;
      display: inline-block;
      background: #0e363e;
      margin-left: 15px;
    }

    .custom-underline {
      text-decoration: underline !important;
      text-decoration-color: #ff0000b8 !important;
      text-decoration-thickness: 3px !important;
      text-underline-offset: 12px;
    }

    .g-height {
      height: 184px !important;
    }

    .g-ovelay {
      left: 0px;
      right: 0px;
      top: 0;
      bottom: 0;
      background-color: transparent;
      transition: 0.5s;
    }

    .v_g-overlay {
      left: 0px;
      right: 0px;
      top: 0;
      bottom: 0;
      background-color: transparent;
      transition: 0.5s;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 50px;
      color: #106093;
    }

    .video_icon {
      background: #ff0909;
      padding: 0px 14px;
      font-size: 20px;
      border-radius: 10px;
      color: #fff;
    }

    .g-container:hover .g-ovelay {
      background-color: #58570a85;
    }

    .g-container:hover .v_g-overlay {
      background-color: #58570a85;
    }

    .img-fluid {
      width: 100% !important;
      height: 100% !important;
    }

    .pt-0 {
      margin-top: 0px;
    }
  </style>

  <style>
    

    .form-control:focus {
      box-shadow: unset;
    }

    .sign-in-button {
      background-color: #0e363e!important;
      border-radius: 0px !important;
      color: #FFFFFF;
      font-weight: 600;
      padding: 7px 40px;
    }

    .diagonal-section {
      position: relative;
      background: linear-gradient(45deg, #e46f0a, #0e363e);
      padding: 70px 0;
      overflow: hidden;
    }

    .diagonal-section::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 60%;
      background: #ffffff;
      clip-path: polygon(0 0, 100% 0, 100% 50%, 0 100%);
      z-index: 1;
    }

    .about-btn:hover {
      /* border: transparent; */
      background: #0e363e;
      color: #fff;
    }

    .lll {
      width: 100%;
      height: 100%;
      background-color: transparent;
    }

    .lllbefore {
      width: 70%;
      content: "";
      height: 70%;
      background-color: #e46f0a;
      top: 0;
      right: 0;
      position: absolute;
    }

    .lllafter {
      width: 70%;
      content: "";
      height: 70%;
      background-color: #0e363e;
      bottom: 0;
      left: 0;
      position: absolute;
    }

    .f-height {
      height: 510px !important;
    }

    .fc-height {
      height: 250px !important;
    }

    /* //new css is start hare for hero section */
    .heroImg {
      position: static !important;
      width: 100%;
    }

    .hero .icon-box {
      padding: 0px;
      background: #0181CA;
      position: relative;

    }


    .hero .icon-box h3 {
      margin: 0px;
      margin-bottom: 0px;

    }

    .heroCard_title {
      padding: 5px 0px;
      position: absolute;
      z-index: 1;
      right: 0;
      top: 10px;
      width: 65%;
      background: #0181ca;

    }

    .border-white {
      border: #e91e63 !important;
    }

    .title_container {
      position: relative;
    }

    .title_container::before {
      content: "";
      /* width: 10%; */
      height: 36px;
      /* background: red; */
      left: -35px;
      top: -5px;
      position: absolute;
      box-sizing: border-box;
      /* border-top: 10px solid; */
      border-right: 35px solid #0181ca;
      border-top: 0px solid transparent;
      border-bottom: 34px solid transparent;
    }

    .title_container::after {
      position: absolute;
      content: '';
      background-color: #0181ca;
      width: 26px;
      height: 2px;
      left: -55px;
      top: -5px;
    }

    .mt-md-from-5 {
      margin-top: 4.5rem !important;
    }

    .form-control-sm {
      border-radius: 0px;
    }
    .g-containerl{
      z-index: 1;
    }
    .g-containerl::before{
      content: '';
      position: absolute;
      width: 60%;
      height: 60%;
      background-color: #005ee9;
      top: 0;
      left: 0;
      z-index: -1;
    } 

    .g-containerl::after{
      content: '';
      position: absolute;
      width: 60%;
      height: 60%;
      background-color: #e91e63;
      bottom: 0;
      right: 0;
      z-index: -1;
    }
    
    
  </style>

@endpush

@section('content')

  <!-- Hero Section -->


  <section id="hero" class="hero section dark-background">
    <img src="{{ asset('assets/user/assets/img/hero-bg.jpg') }}" alt="">

    <div class="container">

      <div class="row">
        <div class="col-12 col-lg-8">
          <div class="row gy-4 mt-5 justify-content-center">
            <div class="col-xl-4 col-md-4 section-2 " data-aos="fade-right" data-aos-delay="100">
              <figure class="figure">
                <img src="" />
                <figcaption>
                  <h3 class="title">Hotel</h3>
                  <h3 class="hover text-center">View Detail</h3>
                </figcaption>
                <a href="{{ route('our_services', ['type' => 'hotel']) }}"></a>
              </figure>
            </div>
            <div class="col-xl-4 col-md-4 section-2" data-aos="fade-right" data-aos-delay="300">
              <figure class="figure">
                <img src="{{ asset('assets/user/assets/img/service/resturant.jpg') }}" />
                <figcaption>
                  <h3 class="title">
                    Restaurant
                  </h3>
                  <h3 class="hover text-center">View All</h3>
                </figcaption>
                <a href=""></a>
              </figure>
            </div>

            <div class="col-xl-4 col-md-4 section-2" data-aos="fade-right" data-aos-delay="600">
              <figure class="figure">
                <img src="{{ asset('assets/user/assets/img/service/travel.jpg') }}" />
                <figcaption>
                  <h3 class="title">
                    Travel
                  </h3>
                  <h3 class="hover  text-center">Read More</h3>
                </figcaption>
                <a href="{{ route('our_services', ['type' => 'travel']) }}"></a>
              </figure>
            </div>
            <div class="col-xl-4 col-md-4 section-2" data-aos="fade-right" data-aos-delay="900">
              <figure class="figure">
                <img src="{{ asset('assets/user/assets/img/service/event.jpg') }}" />
                <figcaption>
                  <h3 class="title">
                    Event Management
                  </h3>
                  <h3 class="hover text-center">Read More</h3>
                </figcaption>
                <a href="{{ route('our_services', ['type' => 'Event']) }}"></a>
              </figure>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4" data-aos="fade-left" data-aos-delay="1100">
          <div class="mt-md-from-5 mt-2">
            <div class="card border border-white" style="background-color: #005ee98c;">
              <div class="card-body">
                <h5 class="card-title text-white">
                  <!-- Your Query/Feedback -->
                  Take Any Service
                </h5>
                <div class="mt-3">
                  <form action="https://linktechbd.com/query-store" method="POST">
                    <input type="hidden" name="_token" value="8coIaW5M8wHMTreIID0vxWirC73UNvs33UAyQdCU"> <input
                      type="hidden" name="_method" value="POST">
                    <div class="row pt-1">
                      <div class="col-3 pe-0">
                        <label for="name" class="form-label custom-form-label text-white">Name</label>
                      </div>
                      <div class="col-9">
                        <input type="text" value="" class="form-control form-control-sm custom-form-control " id="name"
                          name="name" placeholder="name" required="">

                      </div>
                    </div>
                    <div class="row mt-1">
                      <div class="col-3 pe-0">
                        <label for="phone" class="form-label custom-form-label text-white">Phone</label>
                      </div>
                      <div class="col-9">
                        <input type="text" value="" class="form-control form-control-sm custom-form-control " id="phone"
                          name="phone" placeholder="phone number" required="">
                      </div>
                    </div>
                    <div class="row mt-1">
                      <div class="col-3 pe-0">
                        <label for="email" class="form-label custom-form-label text-white">Email</label>
                      </div>
                      <div class="col-9">
                        <input type="email" value="" class="form-control form-control-sm custom-form-control " id="email"
                          placeholder="email" name="email">
                      </div>
                    </div>
                    <div class="row mt-1">
                      <div class="col-3 pe-0">
                        <label for="service" class="form-label custom-form-label text-white">Service</label>
                      </div>
                      <div class="col-9">
                        <select type="text" class="form-control form-control-sm custom-form-control " id="service"
                          name="service">
                          <option value="" disabled="" selected="">Select service</option>
                          <option value="1">Hotel Booking</option>
                          <option value="2">Restaurant Booking</option>
                          <option value="3">Travel And Tourism</option>
                          <option value="4">Event Manage</option>
                        </select>
                      </div>
                    </div>
                    <div class="row mt-1">
                      <div class="col-3 pe-0">
                        <label for="message" class="form-label custom-form-label text-white">Message</label>
                      </div>
                      <div class="col-9">
                        <textarea type="text" class="form-control form-control-sm custom-form-control " id="message"
                          rows="3" name="message" placeholder="write here..." value=""></textarea>
                      </div>
                    </div>
                    <div class="float-end mt-2">
                      <button class="btn sign-in-button">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- /Hero Section -->

  <!-- About Section -->
  <section id="about" class="about section diagonal-section">
    <div class="container section-6">
      <div class="row gy-4 align-items-stretch">
        <div class="col-12">
          <div class="card border-0 p-3 about-shadow " data-aos="fade-up" style="z-index:2">
            <div class="row">
              <div class="col-md-6 col-12">
                <div class=" position-relative">
                  <div class="figure hover-effect">
                    <div class="lll p-3 position-relative">
                      <div class="lllbefore"></div>
                      <div class="lllafter"></div>
                      <img src="{{ asset('assets/user/assets/img/hotel/about2.jpg') }}" />
                    </div>
                    <figcaption>
                      <h3></h3>
                    </figcaption>
                    <a href="#"></a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-12 d-flex align-items-center">
                <div>
                  <h1 class="weight-700 about-title">About Us <span class="line"></span></h1>
                  <h4>Crafting Timeless Moments, Creating Memories That Last Forever</h4>
                  <p class="text-justify">
                    Welcome to Swift Solution, where we turn your dreams into delightful experiences. We specialize in a
                    wide range of services including restaurant management, tours & travel solutions, and event management
                    — all crafted to meet your needs with perfection and passion. Whether you’re planning an elegant
                    dinner, an exciting trip, or a memorable event, our dedicated team ensures every detail is handled
                    with care and creativity. Let us make your moments special and your experiences unforgettable.
                  </p>
                  <a href="" class="btn about-btn">Explore More</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Photo Gallery Section -->
  <section id="services" class=" section pt-0 mt-70">
    <!-- Section Title -->

    <div class="container section-title d-flex justify-content-center" data-aos="fade-up">
      <div class="g-img">
        <h2 class="">Photo Gallery</h2>
      </div>
    </div>
    
    <!-- End Section Title -->
    <div class="container section-5">
      <div class="row gy-4">


        <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">

          <figure class="figure f-height">
            <img src="{{ asset('assets/user/assets/img/gallery/g1.jpg') }}" alt="" />
            <figcaption>
              <div class="icon">
                <span><ion-icon name="images"></ion-icon></span>
              </div>
              <h2 class="text-white text-center">German Collection dssdasda dasdas</h2>
              <div class="caption">
                <p>View the collection</p>
              </div>
            </figcaption>
            </a>
            <a href="{{ asset('assets/user/assets/img/gallery/g1.jpg') }}" data-fancybox="gallery" data-caption=""></a>
          </figure>

        </div>


        <!-- End Service Item -->


        <div class="col-lg-8 col-md-6 col-12">
          <div class="row h-100">

            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="100">
              <figure class="figure fc-height">
                <img src="{{ asset('assets/user/assets/img/gallery/g1.jpg') }}" alt="" />
                <figcaption>
                  <div class="icon">
                    <span><ion-icon name="images"></ion-icon></span>
                  </div>
                  <h2 class="text-white text-center">German Collection dssdasda dasdas</h2>
                  <div class="caption">
                    <p>View the collection</p>
                  </div>
                </figcaption>
                </a>
                <a href="{{ asset('assets/user/assets/img/gallery/g1.jpg') }}" data-fancybox="gallery"
                  data-caption=""></a>
              </figure>
            </div>

            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="100">
              <figure class="figure fc-height">
                <img src="{{ asset('assets/user/assets/img/gallery/g2.jpg') }}" alt="" />
                <figcaption>
                  <div class="icon">
                    <span><ion-icon name="images"></ion-icon></span>
                  </div>
                  <h2 class="text-white text-center">German Collection dssdasda dasdas</h2>
                  <div class="caption">
                    <p>View the collection</p>
                  </div>
                </figcaption>
                </a>
                <a href="{{ asset('assets/user/assets/img/gallery/g2.jpg') }}" data-fancybox="gallery"
                  data-caption=""></a>
              </figure>
            </div>

            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="100">
              <figure class="figure fc-height">
                <img src="{{ asset('assets/user/assets/img/gallery/g4.jpg') }}" alt="" />
                <figcaption>
                  <div class="icon">
                    <span><ion-icon name="images"></ion-icon></span>
                  </div>
                  <h2 class="text-white text-center">German Collection dssdasda dasdas</h2>
                  <div class="caption">
                    <p>View the collection</p>
                  </div>
                </figcaption>
                </a>
                <a href="{{ asset('assets/user/assets/img/gallery/g4.jpg') }}" data-fancybox="gallery"
                  data-caption=""></a>
              </figure>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
              <figure class="figure fc-height">
                <img src="{{ asset('assets/user/assets/img/gallery/g1.jpg') }}" alt="" />
                <figcaption>
                  <div class="icon">
                    <span><ion-icon name="images"></ion-icon></span>
                  </div>
                  <h2 class="text-white text-center">German Collection dssdasda dasdas</h2>
                  <div class="caption">
                    <p>View the collection</p>
                  </div>
                </figcaption>
                </a>
                <a href="{{ asset('assets/user/assets/img/gallery/g1.jpg') }}" data-fancybox="gallery"
                  data-caption=""></a>
              </figure>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
              <figure class="figure fc-height">
                <img src="{{ asset('assets/user/assets/img/gallery/g2.jpg') }}" alt="" />
                <figcaption>
                  <div class="icon">
                    <span><ion-icon name="images"></ion-icon></span>
                  </div>
                  <h2 class="text-white text-center">German Collection dssdasda dasdas</h2>
                  <div class="caption">
                    <p>View the collection</p>
                  </div>
                </figcaption>
                </a>
                <a href="{{ asset('assets/user/assets/img/gallery/g2.jpg') }}" data-fancybox="gallery"
                  data-caption=""></a>
              </figure>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
              <figure class="figure fc-height">
                <img src="{{ asset('assets/user/assets/img/gallery/g4.jpg') }}" alt="" />
                <figcaption>
                  <div class="icon">
                    <span><ion-icon name="images"></ion-icon></span>
                  </div>
                  <h2 class="text-white text-center">German Collection dssdasda dasdas</h2>
                  <div class="caption">
                    <p>View the collection</p>
                  </div>
                </figcaption>
                </a>
                <a href="{{ asset('assets/user/assets/img/gallery/g4.jpg') }}" data-fancybox="gallery"
                  data-caption=""></a>
              </figure>
            </div>



          </div>
        </div>

      </div>
    </div>
  </section><!-- /Photo Gallery Section -->

  <!-- Video Gallery Section -->
  <section id="services" class="services section pt-0">
    <!-- Section Title -->
    <div class="container section-title d-flex justify-content-center" data-aos="fade-up">
       <div class="g-img">
           <h2>Video Gallery</h2>
       </div>
     
    </div><!-- End Section Title -->
    <div class="container">
      <div class="row gy-4">

        <!-- End Service Item -->
        <div class="col-lg-8 col-md-6 col-12">
          <div class="row h-100">
            <div class="col-lg-4 col-md-6 col-12 mb-4" data-aos="fade-up" data-aos-delay="100">
              <div class="g-containerl position-relative p-1 h-100">
              <a href="https://youtu.be/M_rH3Z_R6-U?si=DqHtrLt_U-fM-T_Z" data-fancybox="gallery"
                data-caption="video gallery 1">
                <div class="position-relative g-container h-100">
                  <div class="position-absolute  v_g-overlay">
                    <i class="bi bi-play-fill video_icon"></i>
                  </div>
                  <img src="{{ asset('assets/user/assets/img/gallery/g1.jpg') }}" class="img-fluid g-height" alt="">
                </div>
              </a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-4 " data-aos="fade-up" data-aos-delay="100">
              <div class="g-containerl position-relative p-1">
                <a href="https://youtu.be/M_rH3Z_R6-U?si=DqHtrLt_U-fM-T_Z" data-fancybox="gallery"
                data-caption="video gallery 2">
                <div class=" position-relative g-container h-100">
                  <div class="position-absolute v_g-overlay">
                    <i class="bi bi-play-fill video_icon"></i>
                  </div>
                  <img src="{{ asset('assets/user/assets/img/gallery/g2.jpg') }}" class="img-fluid g-height" alt="">
                </div>
                </a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-4" data-aos="fade-up" data-aos-delay="100">
              <div class="g-containerl position-relative p-1">
              <a href="https://youtu.be/M_rH3Z_R6-U?si=DqHtrLt_U-fM-T_Z" data-fancybox="gallery"
                data-caption="video gallery 3">
                <div class=" position-relative g-container h-100">
                  <div class="position-absolute v_g-overlay">
                    <i class="bi bi-play-fill video_icon"></i>
                  </div>
                  <img src="{{ asset('assets/user/assets/img/gallery/g4.jpg') }}" class="img-fluid g-height" alt="">
                </div>
              </a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
              <div class="g-containerl position-relative p-1 h-100">
              <a href="https://youtu.be/M_rH3Z_R6-U?si=DqHtrLt_U-fM-T_Z" data-fancybox="gallery"
                data-caption="video gallery 4">
                <div class=" position-relative g-container h-100">
                  <div class="position-absolute v_g-overlay">
                    <i class="bi bi-play-fill video_icon"></i>
                  </div>
                  <img src="{{ asset('assets/user/assets/img/gallery/g1.jpg') }}" class="img-fluid g-height" alt="">
                </div>
              </a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
              <div class="g-containerl position-relative p-1">
              <a href="https://youtu.be/yY8J8Hm_Vas?si=S25IVtcgZAQ9MZpk" data-fancybox="gallery"
                data-caption="video gallery 4">
                <div class="position-relative g-container  h-100">
                  <div class="position-absolute v_g-overlay">
                    <i class="bi bi-play-fill video_icon"></i>
                  </div>

                  <img src="{{ asset('assets/user/assets/img/gallery/g2.jpg') }}" class="img-fluid g-height" alt="">
                </div>
              </a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="100">
              <div class="g-containerl position-relative p-1">
              <a href="https://youtu.be/yY8J8Hm_Vas?si=S25IVtcgZAQ9MZpk" data-fancybox="gallery"
                data-caption="video gallery 5">
                <div class=" position-relative g-container  h-100">
                  <div class="position-absolute v_g-overlay">
                    <i class="bi bi-play-fill video_icon"></i>
                  </div>
                  <img src="{{ asset('assets/user/assets/img/gallery/g4.jpg') }}" class="img-fluid g-height" alt="">
                </div>
              </a>
              </div>
            </div>

          </div>
        </div>

        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="g-containerl position-relative p-1">
          <a href="https://youtu.be/yY8J8Hm_Vas?si=S25IVtcgZAQ9MZpk" data-fancybox="gallery"
            data-caption="video gallery 6">
            <div class="position-relative g-container h-100">
              <div class="position-absolute v_g-overlay">
                <i class="bi bi-play-fill video_icon"></i>
              </div>
              <img src="{{ asset('assets/user/assets/img/gallery/vg1.png') }}" class="img-fluid" alt="">
            </div>
          </a>
          
        </div>

      </div>
    </div>
  </section><!-- /Video Gallery Section -->

  <!-- Team Section -->
  <section id="team" class="team section pt-0">
    <!-- Section Title -->
    <div class="container section-title d-flex justify-content-center" data-aos="fade-up">
       <div class="g-img">
            <h2>Management Team</h2>
       </div>
      
    </div><!-- End Section Title -->
    <div class="container">
      <div class="row gy-4">
        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="member team-shadow">
            <div class="card p-2 team-border">
              <div class="card-body p-0 bg-team-body">
                <img src="{{ asset('assets/user/assets/img/team/team-1.jpg') }}" class="img-fluid" alt="">
              </div>
            </div>
            <div class="member-info">
              <div class="member-info-content">
                <h4>Walter White</h4>
                <span class="text-white">Chief Executive Officer</span>
              </div>
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="member team-shadow">
            <div class="card p-2 team-border">
              <div class="card-body p-0 bg-team-body">
                <img src="{{ asset('assets/user/assets/img/team/team-2.jpg') }}" class="img-fluid" alt="">
              </div>
            </div>
            <div class="member-info">
              <div class="member-info-content">
                <h4>Sarah Jhonson</h4>
                <span class="text-white">Sarah Jhonson</span>
              </div>
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="member team-shadow">
            <div class="card p-2 team-border">
              <div class="card-body p-0 bg-team-body">
                <img src="{{ asset('assets/user/assets/img/team/team-4.jpg') }}" class="img-fluid" alt="">
              </div>
            </div>
            <div class="member-info">
              <div class="member-info-content">
                <h4>Amanda Jepson</h4>
                <span class="text-white">Accountant</span>
              </div>
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="member team-shadow">
            <div class="card p-2 team-border">
              <div class="card-body p-0 bg-team-body">
                <img src="{{ asset('assets/user/assets/img/team/team-3.png') }}" class="img-fluid" alt="">
              </div>
            </div>
            <div class="member-info">
              <div class="member-info-content">
                <h4>William Anderson</h4>
                <span class="text-white">CTO</span>
              </div>
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

  </section><!-- /Team Section -->

  <!-- Client Section -->
  <section id="clients" class="team section pt-0">
    <!-- Section Title -->
    <div class="container section-title d-flex justify-content-center" data-aos="fade-up">
       <div class="g-img">
          <h2>Our Clients</h2>
       </div>
      
    </div><!-- End Section Title -->
    <div class="container">
      <!-- ===== Owl Carousel Start ===== -->
      <div class="owl-carousel owl-theme" id="client-carousel" data-aos="fade-up">

        <div class="item position-relative gallery-card">
          <div class="card">
            <div class="card-body p-1">
              <img src="{{ asset('assets/user/assets/img/client/c1.png') }}" class="img-fluid" alt="Gallery Image"
                style="height:80px !important; object-fit:cover;">
            </div>
          </div>
        </div>
        <div class="item position-relative gallery-card">
          <div class="card">
            <div class="card-body p-1">
              <img src="{{ asset('assets/user/assets/img/client/c2.png') }}" class="img-fluid" alt="Gallery Image"
                style="height:80px !important; object-fit:cover;">
            </div>
          </div>
        </div>
        <div class="item position-relative gallery-card">
          <div class="card">
            <div class="card-body p-1">
              <img src="{{ asset('assets/user/assets/img/client/c3.png') }}" class="img-fluid" alt="Gallery Image"
                style="height:80px !important; object-fit:cover;">
            </div>
          </div>
        </div>
        <div class="item position-relative gallery-card">
          <div class="card">
            <div class="card-body p-1">
              <img src="{{ asset('assets/user/assets/img/client/c4.png') }}" class="img-fluid" alt="Gallery Image"
                style="height:80px !important; object-fit:cover;">
            </div>
          </div>
        </div>

        <div class="item position-relative gallery-card">
          <div class="card">
            <div class="card-body p-1">
              <img src="{{ asset('assets/user/assets/img/client/c1.png') }}" class="img-fluid" alt="Gallery Image"
                style="height:80px !important; object-fit:cover;">
            </div>
          </div>
        </div>
        <div class="item position-relative gallery-card">
          <div class="card">
            <div class="card-body p-1">
              <img src="{{ asset('assets/user/assets/img/client/c2.png') }}" class="img-fluid" alt="Gallery Image"
                style="height:80px !important; object-fit:cover;">
            </div>
          </div>
        </div>
        <div class="item position-relative gallery-card">
          <div class="card">
            <div class="card-body p-1">
              <img src="{{ asset('assets/user/assets/img/client/c3.png') }}" class="img-fluid" alt="Gallery Image"
                style="height:80px !important; object-fit:cover;">
            </div>
          </div>
        </div>
        <div class="item position-relative gallery-card">
          <div class="card">
            <div class="card-body p-1">
              <img src="{{ asset('assets/user/assets/img/client/c4.png') }}" class="img-fluid" alt="Gallery Image"
                style="height:80px !important; object-fit:cover;">
            </div>
          </div>
        </div>
      </div>
      <!-- ===== Owl Carousel End ===== -->
    </div>
  </section><!-- /Team Section -->

@endsection

@push('script')
  <script>

    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: false,
      mirror: false,
    });

    // 
    // const aosElements = document.querySelectorAll('[data-aos]');

    // // observer তৈরি করা
    // const observer = new IntersectionObserver((entries) => {

    //   entries.forEach(entry => {
    //     const el = entry.target;

    //     if (!entry.isIntersecting) {
    //       el.classList.remove('aos-animate');
    //     } else {
    //       setTimeout(() => {
    //         AOS.refreshHard();
    //       }, 100);
    //     }
    //   });
    // });

    // aosElements.forEach(el => observer.observe(el));

    Fancybox.bind("[data-fancybox]", {
      zoomEffect: false,
      Carousel: {
        gestures: false,
        Zoomable: {
          Panzoom: {
            startPos: {
            },
          },
        },
      },
    });



    $(document).ready(function () {
      $('#client-carousel').owlCarousel({
        loop: true,
        margin: 15,
        nav: true,
        dots: false,
        autoplay: true,
        slideTransition: "linear",
        rtl: true,
        autoplayTimeout: 3000,
        smartSpeed: 3000,
        autoplayHoverPause: true,
        navText: [

        ],
        responsive: {
          0: { items: 2 },
          576: { items: 3 },
          768: { items: 4 },
          992: { items: 6 }
        }
      });
    });





  </script>
@endpush