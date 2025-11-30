@extends('user.layout.app')

@section('title', 'Home Page')

@push('style')
    <style>
        .card-container {
            position: relative;
            overflow: hidden;
        }

        /* Image Zoom Effect */
        .card-container img {
            width: 100%;
            transition: transform 0.6s ease;
        }

        .card-container:hover img {
            transform: scale(1.15);
        }

        /* background: #0f4e818a; */
        /* Overlay Effect */
        .overlay {
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top , red,transparent);
            display: flex;
            justify-content: center;
            align-items: center;
            top: 100%;
            /* start from bottom */
            left: 0;
            transition: top 0.5s ease-in-out;
        }

        .card-container:hover .overlay {
            top: 0;
        }

        .card-container:hover .card_h3 {
            display: none;
        }

        .card_h3 {
            font-weight: 900;
            text-align: center;
            -webkit-text-stroke: 2px #0e363e;
            -webkit-text-fill-color: #fff;
            color: #fff;
            font-size: 35px;
            bottom: 8px;
            width: 101%;
        }

        .overlay_h3 {
            font-weight: 900;
            text-align: center;
            -webkit-text-stroke: 2px #e11318;
            -webkit-text-fill-color: #fff;
            color: #fff;
            font-size: 35px;
            bottom: 8px;
            width: 101%;
        }

        .card_btn:hover{
            color: #fff;
        }
        .overlay_Name{
            bottom: 10px;
            color: #ffffff;
        }

        .card_btn {
            padding: 10px 20px;
            background: #0e363e;
            color: #fff;
            border: none;
            font-size: 18px;
            font-weight: 600;
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }

        .card_btn::before,
        .card_btn::after,
        .card_btn .line-bottom,
        .card_btn .line-left {
            content: "";
            position: absolute;
            background: #fff;
            opacity: 0;
        }

        /* TOP */
        .card_btn::before {
            width: 0%;
            height: 2px;
            top: 0;
            left: 0;
        }

        /* RIGHT */
        .card_btn::after {
            width: 2px;
            height: 0%;
            top: 0;
            right: 0;
        }

        /* BOTTOM */
        .card_btn .line-bottom {
            width: 0%;
            height: 2px;
            bottom: 0;
            right: 0;
        }

        /* LEFT */
        .card_btn .line-left {
            width: 2px;
            height: 0%;
            bottom: 0;
            left: 0;
        }

        @keyframes border-top {
            0% {
                width: 0%;
                opacity: 1;
            }

            25% {
                width: 100%;
                opacity: 1;
            }

            26% {
                opacity: 0;
            }

            100% {
                opacity: 0;
            }
        }

        @keyframes border-right {
            0% {
                height: 0%;
                opacity: 0;
            }

            24% {
                opacity: 0;
            }

            25% {
                opacity: 1;
            }

            50% {
                height: 100%;
                opacity: 1;
            }

            51% {
                opacity: 0;
            }

            100% {
                opacity: 0;
            }
        }

        @keyframes border-bottom {
            0% {
                opacity: 0;
            }

            49% {
                opacity: 0;
            }

            50% {
                opacity: 1;
                width: 0%;
            }

            75% {
                width: 100%;
                opacity: 1;
            }

            76% {
                opacity: 0;
            }

            100% {
                opacity: 0;
            }
        }

        @keyframes border-left {
            0% {
                opacity: 0;
            }

            74% {
                opacity: 0;
            }

            75% {
                opacity: 1;
                height: 0%;
            }

            100% {
                height: 100%;
                opacity: 1;
            }
        }

        .card_btn:hover::before {
            animation: border-top 2s linear infinite;
        }

        .card_btn:hover::after {
            animation: border-right 2s linear infinite;
        }

        .card_btn:hover .line-bottom {
            animation: border-bottom 2s linear infinite;
        }

        .card_btn:hover .line-left {
            animation: border-left 2s linear infinite;
        }

        .card{
      overflow: hidden!important;
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

                <div class="col-lg-4 mb-4">
                    <a href="">
                    <div class="card-container">
                        <div class="card">
                            <div class="card-body p-0 position-relative">
                                <img src="{{ asset('assets/user/assets/img/hotel/radisson.jpg') }}" alt=""
                                    class="img-fluid">
                                <h3 class="card_h3 position-absolute">Radissan</h3>
                            </div>
                        </div>
                        <a href="{{ route('services.detail',['uid' => 'dkdsflsdl']) }}">
                            <div class="overlay">
                                
                                <h3 class="overlay_Name position-absolute">Radissan</h3>
                                <a href="{{ route('services.detail',['uid' => 'dkdsflsdl']) }}" class="card_btn">
                                    See Detail
                                    <span class="line-bottom"></span>
                                    <span class="line-left"></span>
                                </a>
                            </div>
                        </a>
                    </div>
                    </a>
                </div>

                <div class="col-lg-4">
                    <div class="card-container">
                        <div class="card">
                            <div class="card-body p-0 position-relative">
                                <img src="{{ asset('assets/user/assets/img/hotel/meri.webp') }}" alt=""
                                    class="img-fluid">
                                <h3 class="card_h3 position-absolute">Le-Meridien</h3>
                            </div>
                        </div>
                        <div class="overlay">
                            <h3 class="overlay_Name position-absolute">Le-Meridien</h3>
                            <a href="{{ route('services.detail',['uid' => 'dkdsflsdl']) }}" class="card_btn">
                                See Detail
                                <span class="line-bottom"></span>
                                <span class="line-left"></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card-container">
                        <div class="card">
                            <div class="card-body p-0 position-relative">
                                <img src="{{ asset('assets/user/assets/img/hotel/she.jpg') }}" alt=""
                                    class="img-fluid">
                                <h3 class="card_h3 position-absolute">Sheraton</h3>
                            </div>
                        </div>
                        <div class="overlay">
                            <h3 class="overlay_Name position-absolute">Sheraton</h3>
                            <a href="{{ route('services.detail',['uid' => 'dkdsflsdl']) }}" class="card_btn">
                                See Detail
                                <span class="line-bottom"></span>
                                <span class="line-left"></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card-container">
                        <div class="card">
                            <div class="card-body p-0 position-relative">
                                <img src="{{ asset('assets/user/assets/img/hotel/hilton.jpg') }}" alt=""
                                    class="img-fluid">
                                <h3 class="card_h3 position-absolute">Hilton</h3>
                            </div>
                        </div>
                        <div class="overlay">
                            <h3 class="overlay_Name position-absolute">Hilton</h3>
                            <a href="{{ route('services.detail',['uid' => 'dkdsflsdl']) }}" class="card_btn">
                                See Detail
                                <span class="line-bottom"></span>
                                <span class="line-left"></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card-container">
                        <div class="card">
                            <div class="card-body p-0 position-relative">
                                <img src="{{ asset('assets/user/assets/img/hotel/hayt.webp') }}" alt=""
                                    class="img-fluid">
                                <h3 class="card_h3 position-absolute">Hyatt Regency</h3>
                            </div>
                        </div>
                        <div class="overlay">
                            <h3 class="overlay_Name position-absolute">Hyatt Regency</h3>
                            <a href="{{ route('services.detail',['uid' => 'dkdsflsdl']) }}" class="card_btn">
                                See Detail
                                <span class="line-bottom"></span>
                                <span class="line-left"></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card-container">
                        <div class="card">
                            <div class="card-body p-0 position-relative">
                                <img src="{{ asset('assets/user/assets/img/hotel/caption.jpg') }}" alt=""
                                    class="img-fluid">
                                <h3 class="card_h3 position-absolute">InterContinental</h3>
                            </div>
                        </div>
                        <div class="overlay">
                            <h3 class="overlay_Name position-absolute">InterContinental</h3>
                            <a href="{{ route('services.detail',['uid' => 'dkdsflsdl']) }}" class="card_btn">
                                See Detail
                                <span class="line-bottom"></span>
                                <span class="line-left"></span>
                            </a>
                        </div>
                    </div>
                </div>







            </div>
        </div>

    </section><!-- /Starter Section Section -->







@endsection

@push('script')
    <script>

    </script>
@endpush