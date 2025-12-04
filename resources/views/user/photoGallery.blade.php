@extends('user.layout.app')
@section('title', 'Swift Solution | Photo Gallery Page')
@push('style')
  <link href="{{ asset('assets/user/assets/css/galleryeffect.css') }}" rel="stylesheet">
  <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>
  <style>
    .g-height {
      height: 184px !important;
      width: 100%;
    }
  </style>
@endpush
@section('content')
  <div class="page-title light-background" data-aos="fade">
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="/">Home</a></li>
          <li class="current">Photo Gallery</li>
        </ol>
      </div>
    </nav>
  </div>
  <div class="container section-title mt-5 d-flex justify-content-center" data-aos="fade-up">
    <div class="g-img">
      <h2 style="margin-bottom:0px">Photo Gallery</h2>
    </div>
  </div><!-- End Section Title -->
  <div class="container section-5" data-aos="fade-up">
    <div class="row">
      @foreach ($photo_gallery as $gallery)
        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
          <figure class="figure w-100">
            <img src="{{ asset('storage/' . $gallery->img) }}" alt="" />
            <figcaption>
              <div class="icon">
                <span><ion-icon name="images"></ion-icon></span>
              </div>
              <h2 class="text-white text-center">{{ $gallery->title }}</h2>
              <div class="caption">
                <p>View the collection</p>
              </div>
            </figcaption>
            <a href="{{ asset('storage/' . $gallery->img) }}" data-fancybox="{{ $gallery->title }}"
              data-caption="{{ $gallery->title }}">
            </a>
          </figure>
        </div>
      @endforeach
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