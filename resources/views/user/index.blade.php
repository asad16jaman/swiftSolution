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

    .text-justify {
      text-align: justify;
    }

    .weight-900 {
      font-weight: 900;
    }

    .weight-700 {
      font-weight: 700;
    }

    .img-fluid {
      width: 100% !important;
      height: 100% !important;
    }

    .pt-0 {
      margin-top: 0px;
    }

    .home-card {
      border: 0;
      box-shadow: 1px 2px 8px #000000bf;
    }

    .sign-in-button:hover {
      color: #fff;

    }
  </style>
  <style>
    .form-control:focus {
      box-shadow: unset;
    }

    .sign-in-button {
      background-color: #0e363e !important;
      border-radius: 0px !important;
      color: #FFFFFF;
      font-weight: 600;
      padding: 5px 20px;
      border: 0px;
    }

    .bg-base {
      background: #0e363e;
      color: #fff;
    }

    .bg-base:hover {
      background-color: #fff;
      color: #000;
      border: 1px solid #0e363e;
    }

    /* .mt-md-from-5 {
                margin-top: 4.5rem !important;
              } */

    .form-control-sm {
      border-radius: 0px;
    }

    .heroTitle {
      bottom: 0;
      width: 100%;
      font-size: 18px;
      /* text-transform: uppercase; */
    }

    .welcome_lead {

      margin-bottom: 0;
      text-align: justify;
    }

    .home-card {
      height: 100%;
    }

    .py-hero {
      padding: 20px 0;
    }

    .welcomeImage_height {
      height: 240px !important;
      width: 100%;
    }

    .f-600 {
      font-weight: 600;
    }

    .learn-more-btn {
      font-size: 12px;
      padding: 3px 11px;
    }

    .managementImage_height {
      height: 75px !important;
        width: 75px !important;
        margin-right: 20px;

    }

    .header-bg {
      background-color: rgb(14 54 62) !important;
      color: #fff;
    }



    /* @media screen and (max-width:1400px) {
                .welcome_lead {
                  font-size: 12px;
                  margin-bottom: 0;
                  text-align: justify;
                }
              } */

    @media screen and (max-width:1400px) {
      .welcome_lead {
        font-size: 12px;
        margin-bottom: 0;
        text-align: justify;
      }

      .welcomeImage_height {
        height: 200px !important;
        width: 100%;
      }

      .f-14 {
        font-size: 12px;
      }

      .managementImage_height {
         height: 75px !important;
        width: 75px !important;
        margin-right: 20px;
      }
    }

    @media screen and (max-width:600px) {
      .heroTitle {
        font-size: 14px;
      }

      .section-1 .figure:before {
        top: 3px;
        left: -26px;
      }

      .section-1 .figure:after {
        left: 36px;
      }

      .welcomeImage_height {
        height: 150px !important;
        width: 100%;
      }
    }
  </style>

@endpush

@section('content')
  <!-- Hero Section -->

  <section id="hero" class="hero section dark-background">
    <!-- <img src="{{ asset('assets/user/assets/img/giphy.gif') }}" alt=""> -->

    <video width="100%" height="100%" autoplay loop muted playsinline>
      <source src="{{ asset('assets/user/assets/img/hero_v1.mp4') }}" type="video/mp4">
    </video>

    <div class="container section-1">
      <div class="row">
        <div class="col-12 col-lg-8 col-xxl-9">
          <div class="row justify-content-center py-hero">

            <div class="col-xl-4 col-md-4 col-6 section-2 d-flex justify-content-center" data-aos="fade-right"
              data-aos-delay="100">
              <figure class="figure figure2">
                <div class="position-relative h-100">
                  <img src="{{ asset('assets/user/assets/img/service/hotel.webp') }}" class="service-img-height">
                  <h1 class="text-dark position-absolute heroTitle">Hotel & Resort</h1>
                </div>
                <figcaption>
                  <h3>Detail</h3>
                </figcaption>
                <a href="{{ route('our_services', ['type' => 'hotel']) }}"></a>
              </figure>
            </div>

            <div class="col-xl-4 col-md-4  col-6 section-2  d-flex justify-content-center" data-aos="fade-right"
              data-aos-delay="300">
              <figure class="figure figure2">
                <div class="position-relative h-100">
                  <img src="{{ asset('assets/user/assets/img/service/resturant.jpg') }}" class="service-img-height">
                  <h1 class="text-dark position-absolute heroTitle">Resturant Business</h1>
                </div>
                <figcaption>
                  <h3>Detail</h3>
                </figcaption>
                <a href="{{ route('our_services', ['type' => 'resturant']) }}"></a>
              </figure>
            </div>

            <div class="col-xl-4 col-md-4 col-6 section-2  d-flex justify-content-center" data-aos="fade-right"
              data-aos-delay="600">
              <figure class="figure figure2">
                <div class="position-relative h-100">
                  <img src="{{ asset('assets/user/assets/img/service/travel.jpg') }}" class="service-img-height">
                  <h1 class="text-dark position-absolute heroTitle">Travel & Tourism</h1>
                </div>
                <figcaption>
                  <h3>Detail</h3>
                </figcaption>
                <a href="{{ route('our_services', ['type' => 'travel']) }}"></a>
              </figure>
            </div>

            <div class="col-xl-4 col-md-4 col-6 section-2  d-flex justify-content-center" data-aos="fade-right"
              data-aos-delay="100">
              <figure class="figure figure2 mb-2 mb-lg-0">
                <div class="position-relative h-100">
                  <img src="{{ asset('assets/user/assets/img/service/event.jpg') }}" class="service-img-height">
                  <h1 class="text-dark position-absolute heroTitle">Event Management</h1>
                </div>
                <figcaption>
                  <h3>Detail</h3>
                </figcaption>
                <a href=""></a>
              </figure>
            </div>

            <div class="col-xl-4 col-md-4 col-6 section-2  d-flex justify-content-center" data-aos="fade-right"
              data-aos-delay="600">
              <figure class="figure figure2 mb-0">
                <div class="position-relative h-100">
                  <img src="{{ asset('assets/user/assets/img/service/delivery.png') }}" class="service-img-height">
                  <h1 class="text-dark position-absolute heroTitle">Logistics & Delivery</h1>
                </div>
                <figcaption>
                  <h3>Detail</h3>
                </figcaption>
                <a href=""></a>
              </figure>
            </div>

            <div class="col-xl-4 col-md-4 col-6 section-2  d-flex justify-content-center" data-aos="fade-right"
              data-aos-delay="900">
              <figure class="figure figure2 mb-0">
                <div class="position-relative h-100">
                  <img src="{{ asset('assets/user/assets/img/service/tour.webp') }}" class="service-img-height">
                  <h1 class="text-dark position-absolute heroTitle">Tour Guide</h1>
                </div>
                <figcaption>
                  <h3>Detail</h3>
                </figcaption>
                <a href=""></a>
              </figure>
            </div>

          </div>
        </div>

        <div class="col-12 col-lg-4 col-xxl-3 mb-5 mb-lg-0" data-aos="fade-left" data-aos-delay="1100">
          <div class="d-flex align-items-center h-100">
            <div class="card border border-white" style="background-color: #0f4e8147;border-radius:12px;width:100%">
              <div class="card-body py-xx-4 py-3">
                <h5 class="card-title text-white">
                  <!-- Your Query/Feedback -->
                  Say Hello To US
                </h5>
                <div class="">
                  <form action="https://linktechbd.com/query-store" method="POST">
                    <input type="hidden" name="_token" value="8coIaW5M8wHMTreIID0vxWirC73UNvs33UAyQdCU"> <input
                      type="hidden" name="_method" value="POST">
                    <div class="row pt-xxl-2 mt-1">
                      <div class="col-3 pe-0">
                        <label for="name" class="form-label custom-form-label text-white">Name</label>
                      </div>
                      <div class="col-9">
                        <input type="text" value="" class="form-control form-control-sm custom-form-control " id="name"
                          name="name" placeholder="name" required="">
                      </div>
                    </div>
                    <div class="row mt-xxl-2 mt-1">
                      <div class="col-3 pe-0">
                        <label for="phone" class="form-label custom-form-label text-white">Phone</label>
                      </div>
                      <div class="col-9">
                        <input type="text" value="" class="form-control form-control-sm custom-form-control " id="phone"
                          name="phone" placeholder="number" required="">
                      </div>
                    </div>
                    <div class="row mt-xxl-2 mt-1">
                      <div class="col-3 pe-0">
                        <label for="email" class="form-label custom-form-label text-white">Email</label>
                      </div>
                      <div class="col-9">
                        <input type="email" value="" class="form-control form-control-sm custom-form-control " id="email"
                          placeholder="email" name="address">
                      </div>
                    </div>

                    <div class="row mt-xxl-2 mt-1">
                      <div class="col-3 pe-0">
                        <label for="company" class="form-label custom-form-label text-white">Company</label>
                      </div>
                      <div class="col-9">
                        <input type="text" value="" class="form-control form-control-sm custom-form-control " id="company"
                          placeholder="Company Name" name="company">
                      </div>
                    </div>

                    <div class="row mt-xxl-2 mt-1">
                      <div class="col-3 pe-0">
                        <label for="subject" class="form-label custom-form-label text-white">Subject</label>
                      </div>
                      <div class="col-9">
                        <input type="text" value="" class="form-control form-control-sm custom-form-control " id="subject"
                          placeholder="subject" name="email">
                      </div>
                    </div>

                    <div class="row mt-xxl-2 mt-1">
                      <div class="col-3 pe-0">
                        <label for="message" class="form-label custom-form-label text-white">Message</label>
                      </div>
                      <div class="col-9">
                        <textarea type="text" class="form-control form-control-sm custom-form-control " id="message"
                          rows="4" name="message" placeholder="write here..." value=""></textarea>
                      </div>
                    </div>
                    <div class="float-end mt-xxl-2 mt-1">
                      <button class="btn sign-in-button card_btn">

                        Submit
                        <span class="line-bottom"></span>
                        <span class="line-left"></span>
                      </button>
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
    <div class="container section-6 py-5">
      <div class="row gy-4 align-items-stretch">

        <div class="col-lg-4 col-md-6 col-12 d-flex">
          <div class="card home-card" data-aos="fade-right" data-aos-delay="100">
            <!-- <div class="card-header text-center">
                Welcome To Swift Solution
              </div> -->
            <div class="card-body">
              <div class="row">

                {{-- <div class="col-5">
                  <img src="{{ asset('assets/user/assets/img/hotel/welcome.jpg') }}" class="img-fluid" />
                </div> --}}
                <h5 class="mb-2 f-600">Welcome To Swift Solution</h5>
                <div class="col-12">
                  <p class="welcome_lead f-14">
                    Welcome to Swift Solution — where your plans transform into seamless and memorable experiences. From
                    travel and tourism to event coordination, hotel and restaurant booking and excellence in every step of
                    your journey. Whether you're planning a relaxing getaway, organizing a special event, or searching for
                    the perfect dining experience, our expert team is here to support you with personalized service and
                    reliable solutions. With a commitment to quality Swift Solution ensures that every moment becomes
                    effortless.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12 d-flex">
          <div class="card home-card" data-aos="fade-down" data-aos-delay="300">
            <div class="card-header text-center header-bg">
              About Swift Solution
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-5">
                  <img src="{{ asset('assets/user/assets/img/hotel/about.png') }}"
                    class="img-fluid img-thumbnail welcomeImage_height" />
                </div>
                <div class="col-7">
                  <div class="h-100 d-flex align-items-center flex-col">
                    <div>
                      <h5 class="mb-2 f-600">Swift Solution</h5>
                      <p class="welcome_lead f-14">
                        Swift Solution is your trusted partner for smooth, organized, and memorable services. We provide
                        complete support in travel and tourism, event management hotel and restaurant booking—ensuring
                        comfort, reliability.
                        {{--
                        , and the perfect experience every time. With a dedicated team and a
                        commitment to
                        quality. --}}
                      <div class="d-flex justify-content-end mt-2">
                        <button class="btn bg-base learn-more-btn">
                          Read More
                        </button>
                      </div>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12 d-flex">
          <div class="card home-card" data-aos="fade-left" data-aos-delay="900">
            <div class="card-header text-center header-bg">
              Massage From Management
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12 d-flex mb-2">
                  <img src="{{ asset('assets/user/assets/img/hotel/asad.png') }}"
                    class="img-fluid img-thumbnail managementImage_height" />

                  <div class="mb-2">
                    <h5 class="mb-0 f-600">ASADUZZAMAN</h5>
                    <small><i>CEO</i></small><br>
                    <small><i>Swift Solution</i></small>
                  </div>
                </div>
                <div class="col-12">
                  <div class="d-flex align-items-center">
                    <div>

                      <p class="welcome_lead f-14">
                        At Swift Solution, we are dedicated to delivering reliable,events,
                        and
                        hospitality. Our goal is to ensure every client experiences comfort.
                        confidence in every step. With a
                        commitment to integrity and excellence, we look forward to building lasting relationships and
                        creating
                        meaningful experiences for all.
                      </p>
                      <div class="d-flex justify-content-end mt-2">
                        <button class="btn bg-base learn-more-btn">
                          Read More
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            {{--
            <div class="card-body">
              <div class="row">
                <div class="col-5">
                  <img src="{{ asset('assets/user/assets/img/hotel/asad.png') }}"
                    class="img-fluid img-thumbnail managementImage_height" />
                </div>
                <div class="col-7">
                  <div class="d-flex align-items-center">
                    <div>
                      <div class="mb-2">
                        <h5 class="mb-0 f-600">ASADUZZAMAN</h5>
                        <small><i>CEO</i></small><br>
                        <small><i>Swift Solution</i></small>
                      </div>
                      <p class="welcome_lead f-14">
                        At Swift Solution, we are dedicated to delivering reliable,events,
                        and
                        hospitality. Our goal is to ensure every client experiences comfort.
                        confidence in every step. With a
                        commitment to integrity and excellence, we look forward to building lasting relationships and
                        creating
                        meaningful experiences for all.
                      </p>
                      <div class="d-flex justify-content-end mt-2">
                        <button class="btn bg-base learn-more-btn">
                          Read More
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>--}}


          </div>
        </div>

      </div>

    </div>
  </section>


@endsection

@push('script')
  <script>

    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: false,
      mirror: false,
    });

    {
      {
        -- // 
            const aosElements = document.querySelectorAll('[data-aos]');
        // observer 
        const observer = new IntersectionObserver((entries) => {
          entries.forEach(entry => {
            const el = entry.target;
            if (!entry.isIntersecting) {
              el.classList.remove('aos-animate');
            } else {
              setTimeout(() => {
                AOS.refreshHard();
              }, 100);
            }
          });
        });
        aosElements.forEach(el => observer.observe(el)); --}
    }








  </script>
@endpush