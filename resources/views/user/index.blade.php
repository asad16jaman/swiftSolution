@extends('user.layout.app')

@section('title', 'Swift Solution | Home Page')

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
      height: 200px !important;
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

    .card {
      width: 100%;
    }



    /* @media screen and (max-width:1400px) {
                      .welcome_lead {
                        font-size: 12px;
                        margin-bottom: 0;
                        text-align: justify;
                      }
                    } */

    .hero img {
      position: static;
      border-radius: 4px 4px 0 0;
      /* transition: 0.35s ease-in-out; */
    }

    .m_card-1 {
      margin: 1px;
    }

    .heroCard_h4 {
      color: #0e363e;
      text-align: center;
      margin: 5px 0px;
      font-size: 18px;
    }

    /* .hero_overlay{
          width: 100%;
        height: 100%;
        background: #0e363e94;
        position: absolute;
        top: 0;
        visibility: hidden;
         transition: 0.35s; 
        display: flex;
        align-items: center;
        justify-content: center;
        } */

    .m_card-1:hover .hero_overlay {
      visibility: visible;
    }

    /* Parent must be relative */
    .lll {
      position: relative;
      overflow: hidden;
    }

    /* Image default state */
    .service-img-height {
      width: 100%;
      transition: transform 0.4s ease;
    }

    /* Zoom on hover of card */
    .m_card-1:hover .service-img-height {
      transform: scale(1.1);
    }

    /* Overlay */
    .hero_overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: #0e363e94;
      opacity: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      transition: opacity 0.4s ease;
    }

    /* On hover show overlay */
    .m_card-1:hover .hero_overlay {
      opacity: 1;
    }

    /* Button inside overlay */
    .view_btn {
      background: white;
      color: #0e363e;
      padding: 4px 8px;
      border-radius: 4px;
      text-decoration: none;
      font-weight: 600;
      font-size: 14px;
    }



    @media screen and (max-width:1400px) {
      .welcome_lead {
        font-size: 12px;
        margin-bottom: 0;
        text-align: justify;
      }

      .welcomeImage_height {
        height: 150px !important;
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
            @foreach ($wings as $wing)
              <div
                class="col-xl-4 col-md-4 col-6 section-2  {{ $loop->iteration < 4 ? 'mb-4' : ''  }}  {{ $loop->iteration == 4 ? 'mb-4 mb-lg-0' : ''  }} d-flex justify-content-center"
                data-aos="fade-right" data-aos-delay="{{ ($loop->index * 2) * 100 }}">
                  <div class="card">
                  <div class="card-body m_card-1 p-0">
                    <div class="position-relative lll">
                      <img src="{{ asset('storage/' . $wing->img) }}" class="service-img-height">
                      <div class="hero_overlay">
                        <a href="{{ route('our_services', ['type' => $wing->nav_name ]) }}" class="view_btn">View Detail</a>
                      </div>
                    </div>
                    <div>
                     <a href="{{ route('our_services', ['type' => $wing->nav_name ]) }}"> <h4 class="heroCard_h4">{{ $wing->title }}</h4></a>
                    </div>
                  </div>
                </div>
              
              </div>
            @endforeach
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
                  <form action="{{ route('sayhellow') }}" method="POST">
                    @csrf
                    <div class="row pt-xxl-2 mt-1">
                      <div class="col-3 pe-0">
                        <label for="name" class="form-label custom-form-label text-white">Name</label>
                      </div>
                      <div class="col-9">
                        <input type="text" value="{{ old('name') }}" class="form-control form-control-sm custom-form-control " id="name"
                          name="name" placeholder="name">
                      </div>
                    </div>
                    <div class="row mt-xxl-2 mt-1">
                      <div class="col-3 pe-0">
                        <label for="phone" class="form-label custom-form-label text-white">Phone</label>
                      </div>
                      <div class="col-9">
                        <input type="text" value="{{ old('phone') }}" class="form-control form-control-sm custom-form-control " id="phone"
                          name="phone" placeholder="number" required="">
                      </div>
                    </div>
                    <div class="row mt-xxl-2 mt-1">
                      <div class="col-3 pe-0">
                        <label for="email" class="form-label custom-form-label text-white">Email</label>
                      </div>
                      <div class="col-9">
                        <input type="email" value="{{ old('email') }}" class="form-control form-control-sm custom-form-control " id="email"
                          placeholder="email" name="email">
                      </div>
                    </div>

                    <div class="row mt-xxl-2 mt-1">
                      <div class="col-3 pe-0">
                        <label for="company" class="form-label custom-form-label text-white">Company</label>
                      </div>
                      <div class="col-9">
                        <input type="text" value="{{ old('company') }}" class="form-control form-control-sm custom-form-control " id="company"
                          placeholder="Company Name" name="company">
                      </div>
                    </div>

                    <div class="row mt-xxl-2 mt-1">
                      <div class="col-3 pe-0">
                        <label for="subject" class="form-label custom-form-label text-white">Subject</label>
                      </div>
                      <div class="col-9">
                        <input type="text" value="{{ old('subject') }}" class="form-control form-control-sm custom-form-control " id="subject"
                          placeholder="subject" name="subject">
                      </div>
                    </div>

                    <div class="row mt-xxl-2 mt-1">
                      <div class="col-3 pe-0">
                        <label for="message" class="form-label custom-form-label text-white">Message</label>
                      </div>
                      <div class="col-9">
                        <textarea type="text" class="form-control form-control-sm custom-form-control " id="message"
                          rows="4" name="message" placeholder="write here...">{{ old('message') }}</textarea>
                      </div>
                    </div>
                    <div class="float-end mt-xxl-2 mt-1">
                      <button type="submit" class="btn sign-in-button card_btn">
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
                <h5 class="mb-2 f-600">{{ optional($welcome)->title }}</h5>
                <div class="col-12">
                  <p class="welcome_lead f-14">
                    {!!  strip_tags(optional($welcome)->description) !!}
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12 d-flex">
          <div class="card home-card" data-aos="fade-down" data-aos-delay="300">
            <div class="card-header text-center header-bg">
              {{ optional($about)->title }}
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-5">
                  <img src="{{ asset('storage/' . optional($about)->picture) }}"
                    class="img-fluid img-thumbnail welcomeImage_height" />
                </div>
                <div class="col-7">
                  <div class="h-100 d-flex align-items-center flex-col">
                    <div>
                      <h5 class="mb-2 f-600">{{ optional($company)->name }}</h5>
                      <p class="welcome_lead f-14">
                        {!! substr(strip_tags(optional($about)->description), 0, 220) !!}

                      <div class="d-flex justify-content-end mt-2">
                        <button class="btn bg-base learn-more-btn">
                          {{ optional($about)->button }}
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
                  <img src="{{ asset('storage/' . optional($auth_message)->img) }}"
                    class="img-fluid img-thumbnail managementImage_height" />

                  <div class="mb-2">
                    <h5 class="mb-0 f-600">{{ optional($auth_message)->name  }}</h5>
                    <small><i>{{ optional($auth_message)->designation  }}</i></small><br>
                    <small><i>{{ optional($auth_message)->company  }}</i></small>
                  </div>
                </div>
                <div class="col-12">
                  <div class="d-flex align-items-center">
                    <div>

                      <p class="welcome_lead f-14">
                        {{ substr(strip_tags(optional($auth_message)->speech), 0, 310) }}
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
          </div>
        </div>

      </div>

    </div>
  </section>



  <!-- Error Modal -->
<div class="modal fade" id="errorModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">Validation Error</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

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

    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: false,
      mirror: false,
    });

     document.addEventListener("DOMContentLoaded", function () {
        @if ($errors->any())
            var myModal = new bootstrap.Modal(document.getElementById('errorModal'));
            myModal.show();
        @endif
    });

    @if (session('success'))
        $(document).ready(function () {
            $('#successModal').modal('show');
        });
    @endif



  </script>
@endpush