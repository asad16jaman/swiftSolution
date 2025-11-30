@extends('user.layout.app')

@section('title', 'Swift Solution | Video Gallery Page')

@push('style')
  <style>
    .g-height {
      height: 184px !important;
      width: 100%;
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

  <div class="page-title light-background" data-aos="fade">

    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="/">Home</a></li>
          <li class="current">Video Gallery</li>
        </ol>
      </div>
    </nav>
  </div>

  <div class="container section-title mt-5 d-flex justify-content-center" data-aos="fade-up">
    <div class="g-img">
      <h2 style="margin-bottom:0px">Video Gallery</h2>
    </div>
    

  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up">
    <div class="row">

      <!-- End Service Item -->

      <div class="col-lg-3 col-md-4 col-6 mb-4" data-aos="fade-up" data-aos-delay="100">
        <div class="g-containerl position-relative p-1 h-100">
          <a href="https://youtu.be/M_rH3Z_R6-U?si=DqHtrLt_U-fM-T_Z" data-fancybox="gallery" data-caption="video gallery 1">
            <div class="position-relative g-container h-100">
              <div class="position-absolute  v_g-overlay">
                <i class="bi bi-play-fill video_icon"></i>
              </div>
              <img src="{{ asset('assets/user/assets/img/gallery/g1.jpg') }}" class="img-fluid g-height" alt="">
            </div>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-6 mb-4" data-aos="fade-up" data-aos-delay="100">
        <div class="g-containerl position-relative p-1 h-100">
          <a href="https://youtu.be/M_rH3Z_R6-U?si=DqHtrLt_U-fM-T_Z" data-fancybox="gallery" data-caption="video gallery 1">
            <div class="position-relative g-container h-100">
              <div class="position-absolute  v_g-overlay">
                <i class="bi bi-play-fill video_icon"></i>
              </div>
              <img src="{{ asset('assets/user/assets/img/gallery/g2.jpg') }}" class="img-fluid g-height" alt="">
            </div>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-6 mb-4" data-aos="fade-up" data-aos-delay="100">
        <div class="g-containerl position-relative p-1 h-100">
          <a href="https://youtu.be/M_rH3Z_R6-U?si=DqHtrLt_U-fM-T_Z" data-fancybox="gallery" data-caption="video gallery 1">
            <div class="position-relative g-container h-100">
              <div class="position-absolute  v_g-overlay">
                <i class="bi bi-play-fill video_icon"></i>
              </div>
              <img src="{{ asset('assets/user/assets/img/gallery/g4.jpg') }}" class="img-fluid g-height" alt="">
            </div>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-6 mb-4" data-aos="fade-up" data-aos-delay="100">
        <div class="g-containerl position-relative p-1 h-100">
          <a href="https://youtu.be/M_rH3Z_R6-U?si=DqHtrLt_U-fM-T_Z" data-fancybox="gallery" data-caption="video gallery 1">
            <div class="position-relative g-container h-100">
              <div class="position-absolute  v_g-overlay">
                <i class="bi bi-play-fill video_icon"></i>
              </div>
              <img src="{{ asset('assets/user/assets/img/gallery/g1.jpg') }}" class="img-fluid g-height" alt="">
            </div>
          </a>
        </div>
      </div>

     <div class="col-lg-3 col-md-4 col-6 mb-4" data-aos="fade-up" data-aos-delay="100">
        <div class="g-containerl position-relative p-1 h-100">
          <a href="https://youtu.be/M_rH3Z_R6-U?si=DqHtrLt_U-fM-T_Z" data-fancybox="gallery" data-caption="video gallery 1">
            <div class="position-relative g-container h-100">
              <div class="position-absolute  v_g-overlay">
                <i class="bi bi-play-fill video_icon"></i>
              </div>
              <img src="{{ asset('assets/user/assets/img/gallery/g2.jpg') }}" class="img-fluid g-height" alt="">
            </div>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-6 mb-4" data-aos="fade-up" data-aos-delay="100">
        <div class="g-containerl position-relative p-1 h-100">
          <a href="https://youtu.be/M_rH3Z_R6-U?si=DqHtrLt_U-fM-T_Z" data-fancybox="gallery" data-caption="video gallery 1">
            <div class="position-relative g-container h-100">
              <div class="position-absolute  v_g-overlay">
                <i class="bi bi-play-fill video_icon"></i>
              </div>
              <img src="{{ asset('assets/user/assets/img/gallery/g4.jpg') }}" class="img-fluid g-height" alt="">
            </div>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-6 mb-4" data-aos="fade-up" data-aos-delay="100">
        <div class="g-containerl position-relative p-1 h-100">
          <a href="https://youtu.be/M_rH3Z_R6-U?si=DqHtrLt_U-fM-T_Z" data-fancybox="gallery" data-caption="video gallery 1">
            <div class="position-relative g-container h-100">
              <div class="position-absolute  v_g-overlay">
                <i class="bi bi-play-fill video_icon"></i>
              </div>
              <img src="{{ asset('assets/user/assets/img/gallery/g3.jpg') }}" class="img-fluid g-height" alt="">
            </div>
          </a>
        </div>
      </div>

      

    </div>
  </div>







@endsection

@push('script')
  <script>

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

  </script>
@endpush