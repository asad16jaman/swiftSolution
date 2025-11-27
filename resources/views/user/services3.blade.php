@extends('user.layout.app')

@section('title', 'Home Page')

@push('style')
    <style>
        .card-container {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 25px;
            max-width: 900px;
            margin: 40px auto;
        }

        .flip-card {
            width: 100%;
            height: 300px;
            perspective: 1000px;
        }

        .flip-inner {
            width: 100%;
            height: 100%;
            transition: transform 0.5s ease;
            transform-style: preserve-3d;
            position: relative;
        }

        /* Hover এ Y-axis flip */
        .flip-card:hover .flip-inner {
                transform: rotateY(180deg);
            } 

        /* Front & Back Common */
        .flip-front,
        .flip-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            /* border-radius: 12px; */
            overflow: hidden;
        }

        /* Front */
        .flip-front img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Back */
        .flip-back {
            background: #212832;
            color: #fff;
            transform: rotateY(180deg);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            text-align: center;
        }

        .btn-learn {
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 17px;
            color: #f0f016;
            transition: 0.5s;
        }

        .icon_left {
            padding-right: 15px;
            transition: 0.5s;
        }

        .btn-learn:hover .icon_left {
            padding-right: 5px;
        }

        .btn-learn:hover {
            color: #fff;
        }

        .card_h3 {
            font-weight: 900;
            text-align: center;
            -webkit-text-stroke: 2px #e11318;
            -webkit-text-fill-color: #fff;
            color: #fff;
            font-size: 35px;
        }
        .text-underline{
            text-decoration: underline;
            text-decoration-thickness: 3px;
            text-decoration-color: #e11318;
           text-underline-offset: 10px
        }
        .mt-80{
            margin-top: 80px;
        }
        .service-shadow{
            box-shadow: 1px 1px 4px 0px #00000094;
        }
    </style>
@endpush

@section('content')

<div class="page-title light-background" data-aos="fade">
      <!-- <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Hotel & Restaurants</h1>
              
            </div>
          </div>
        </div>
      </div> -->
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current">Hotel & Restaurants</li>
          </ol>
        </div>
      </nav>
    </div>

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section" style="padding:40px">
        <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up" style="padding-bottom: 0px;">
         @if ($service_type == 'hotel')
            <h2>Hotel</h2>
         @else
            <h2>Restaurants</h2>
         @endif

      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up">
        <div class="row">

        @if ($service_type == 'hotel')
        
       
            <div class="col-lg-4">
                <div class="card-container">
                    <div class="flip-card  ">
                        <div class="flip-inner service-shadow">
                            <!-- Front Side -->
                            <div class="flip-front">
                                <img src="{{ asset('assets/user/assets/img/hotel/radisson.jpg') }}" alt="">
                                <div class="position-absolute w-100" style="bottom: 10px;">
                                    <h3 class="card_h3">Radissan</h3>
                                    
                                </div>
                            </div>
                            <!-- Back Side -->
                            <div class="flip-back">
                                <h3 class="card_h3">Radissan</h3>
                                <p>
                                    Radisson e premium hospitality, modern amenities ar serene environment paben — relaxing luxury experience er jonno perfect ek nam.
                                </p>
                                <a href="{{ route('services.detail',['uid' => 'dkdsflsdl']) }}" class="btn-learn btn-sm">
                                    <i class="bi bi-arrow-right icon_left"></i>
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card-container">
                    <div class="flip-card ">
                        <div class="flip-inner service-shadow">
                            <!-- Front Side -->
                            <div class="flip-front ">
                                <img src="{{ asset('assets/user/assets/img/hotel/meri.webp') }}" alt="">
                                <div class="position-absolute w-100" style="bottom: 10px;">
                                    <h3 class="card_h3">Le-Meridien</h3>
                                </div>
                            </div>
                            <!-- Back Side -->
                            <div class="flip-back">
                                <h3 class="card_h3">Le-Meridien</h3>
                                <p>
                                    "Le Méridien e elegant design, signature dining ar upscale comfort apnake diye thake unique lifestyle-inspired stay experience."
                                </p>
                                <a href="{{ route('services.detail',['uid' => 'dkdsflsdl']) }}" class="btn-learn btn-sm">
                                    <i class="bi bi-arrow-right icon_left"></i>
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card-container">
                    <div class="flip-card">
                        <div class="flip-inner  service-shadow">
                            <!-- Front Side -->
                            <div class="flip-front">
                                <img src="{{ asset('assets/user/assets/img/hotel/she.jpg') }}" alt="">
                                <div class="position-absolute w-100" style="bottom: 10px;">
                                    <h3 class="card_h3">Sheraton</h3>
                                </div>
                            </div>
                            <!-- Back Side -->
                            <div class="flip-back">
                                <h3 class="card_h3">Sheraton</h3>
                                <p> 
                                    "Hotel Sheraton e world-class comfort, premium facilities ar elegant ambiance paben — luxury stay er jonno etai perfect choice."
                                </p>
                                <a href="{{ route('services.detail',['uid' => 'dkdsflsdl']) }}" class="btn-learn btn-sm">
                                    <i class="bi bi-arrow-right icon_left"></i>
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card-container ">
                    <div class="flip-card">
                        <div class="flip-inner  service-shadow">
                            <!-- Front Side -->
                            <div class="flip-front">
                                <img src="{{ asset('assets/user/assets/img/hotel/hilton.jpg') }}" alt="">
                                <div class="position-absolute w-100" style="bottom: 10px;">
                                    <h3 class="card_h3">Hilton</h3>
                                </div>
                            </div>
                            <!-- Back Side -->
                            <div class="flip-back">
                                <h3 class="card_h3">Hilton</h3>
                                <p> 
                                    "Hotel Hilton e world-class comfort, premium facilities ar elegant ambiance paben — luxury stay er jonno etai perfect choice."
                                </p>
                                <a href="{{ route('services.detail',['uid' => 'dkdsflsdl']) }}" class="btn-learn btn-sm">
                                    <i class="bi bi-arrow-right icon_left"></i>
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card-container">
                    <div class="flip-card">
                        <div class="flip-inner  service-shadow">
                            <!-- Front Side -->
                            <div class="flip-front">
                                <img src="{{ asset('assets/user/assets/img/hotel/hayt.webp') }}" alt="">
                                <div class="position-absolute w-100" style="bottom: 10px;">
                                    <h3 class="card_h3">Hyatt Regency</h3>
                                </div>
                            </div>
                            <!-- Back Side -->
                            <div class="flip-back">
                                <h3 class="card_h3">Hyatt Regency</h3>
                                <p> 
                                    "Hotel Hyatt Regency e world-class comfort, premium facilities ar elegant ambiance paben — luxury stay er jonno etai perfect choice."
                                </p>
                                <a href="{{ route('services.detail',['uid' => 'dkdsflsdl']) }}" class="btn-learn btn-sm">
                                    <i class="bi bi-arrow-right icon_left"></i>
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card-container">
                    <div class="flip-card">
                        <div class="flip-inner service-shadow">
                            <!-- Front Side -->
                            <div class="flip-front">
                                <img src="{{ asset('assets/user/assets/img/hotel/caption.jpg') }}" alt="">
                                <div class="position-absolute w-100" style="bottom: 10px;">
                                    <h3 class="card_h3">InterContinental</h3>
                                </div>
                            </div>
                            <!-- Back Side -->
                            <div class="flip-back">
                                <h3 class="card_h3">InterContinental</h3>
                                <p> 
                                    "Hotel InterContinental e world-class comfort, premium facilities ar elegant ambiance paben — luxury stay er jonno etai perfect choice."
                                </p>
                                <a href="{{ route('services.detail',['uid' => 'dkdsflsdl']) }}" class="btn-learn btn-sm">
                                    <i class="bi bi-arrow-right icon_left"></i>
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         @elseif($service_type == 'resturant')
            <div class="col-lg-4">
                <div class="card-container">
                    <div class="flip-card ">
                        <div class="flip-inner service-shadow">
                            <!-- Front Side -->
                            <div class="flip-front ">
                                <img src="{{ asset('assets/user/assets/img/resturant/kfc.webp') }}" alt="">
                                <div class="position-absolute w-100" style="bottom: 10px;">
                                    <h3 class="card_h3">KFC</h3>
                                </div>
                            </div>
                            <!-- Back Side -->
                            <div class="flip-back">
                                <h3 class="card_h3">KFC</h3>
                                <p>
                                    "KFC  elegant design, signature dining ar upscale comfort apnake diye thake unique lifestyle-inspired stay experience."
                                </p>
                                <a href="{{ route('services.detail',['uid' => 'resturant']) }}" class="btn-learn btn-sm">
                                    <i class="bi bi-arrow-right icon_left"></i>
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card-container">
                    <div class="flip-card ">
                        <div class="flip-inner service-shadow">
                            <!-- Front Side -->
                            <div class="flip-front ">
                                <img src="{{ asset('assets/user/assets/img/resturant/piza.jpg') }}" alt="">
                                <div class="position-absolute w-100" style="bottom: 10px;">
                                    <h3 class="card_h3">Pizza Hut</h3>
                                </div>
                            </div>
                            <!-- Back Side -->
                            <div class="flip-back">
                                <h3 class="card_h3">Pizza Hut</h3>
                                <p>
                                    "KFC  elegant design, signature dining ar upscale comfort apnake diye thake unique lifestyle-inspired stay experience."
                                </p>
                                <a href="{{ route('services.detail',['uid' => 'resturant']) }}" class="btn-learn btn-sm">
                                    <i class="bi bi-arrow-right icon_left"></i>
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card-container">
                    <div class="flip-card ">
                        <div class="flip-inner service-shadow">
                            <!-- Front Side -->
                            <div class="flip-front ">
                                <img src="{{ asset('assets/user/assets/img/resturant/star-kabab-restaurant.jpg') }}" alt="">
                                <div class="position-absolute w-100" style="bottom: 10px;">
                                    <h3 class="card_h3">Star Kabab</h3>
                                </div>
                            </div>
                            <!-- Back Side -->
                            <div class="flip-back">
                                <h3 class="card_h3">Star Kabab</h3>
                                <p>
                                    "Star Kabab  elegant design, signature dining ar upscale comfort apnake diye thake unique lifestyle-inspired stay experience."
                                </p>
                                <a href="{{ route('services.detail',['uid' => 'resturant']) }}" class="btn-learn btn-sm">
                                    <i class="bi bi-arrow-right icon_left"></i>
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

         @endif


        </div>
      </div>

    </section><!-- /Starter Section Section -->


   




@endsection

@push('script')
    <script>

    </script>
@endpush