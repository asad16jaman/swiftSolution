@extends('user.layout.app')

@section('title', 'Swift Solution | About Page')

@push('style')
  <style>
     .about-top-image {
            width: 50%;
            height: auto;
            float: right !important;
            padding: 10px 20px;
            /* background-color: red */
        }

        .about-top-image img {
            width: 100%;
            height: auto;
            object-fit: contain;
        }
        @media screen and (max-width:1024px){
            .about-area {
                     padding-top: 0px; 
                }
        }
        @media screen and (max-width:500px){
                .header_area + section, .header_area + row, .header_area + div {
                margin-top: 61px;
            }
            .about-top-image {
                width: 100%;
                padding: 10px 20px;
            }
            .f-18{
                font-size: 18px;
            }
        }
  </style>
@endpush

@section('content')
  <div class="page-title light-background" data-aos="fade">
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="/">Home</a></li>
          <li class="current">About</li>
        </ol>
      </div>
    </nav>
  </div>
  <div class="container section-title mt-5 d-flex justify-content-center" style="padding-bottom:30px" data-aos="fade-up">
    <div class="g-img">
      <h2 style="margin-bottom:0px">{{ $about->title }}</h2>
    </div>
  </div><!-- End Section Title -->
 <section class="about-area pt-0"  data-aos="fade-up" data-aos-delay="100">
        <div class="container">
            <div class="row">
                <div class="col-12 py-3" style="text-align: justify;">
                    <div class="about-top-image">
                        <img src="{{ asset('storage/'. $about->picture ) }}" alt="pic">
                    </div>
                    <p class="mt-2" style="text-align: justify;">
                       {!! $about->description !!}
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
  <script>
    
  </script>
@endpush