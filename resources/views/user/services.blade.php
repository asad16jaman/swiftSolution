@extends('user.layout.app')

@section('title', 'Swift Solution | Service Page')

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
            background: linear-gradient(to top, #0e363e, #0e363e00);
            display: flex;
            justify-content: space-between;
            align-items: end;
            top: 100%;
            left: 0;
            transition: top 0.5s ease-in-out;
        }

        .img-fluid{
            height: 218px;
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
            /* -webkit-text-stroke: 2px #0e363e; */
            /* -webkit-text-fill-color: #0f4e81; */
            color: #000;
            font-size: 23px;
            /* bottom: 8px; */
            width: 101%;
            margin-bottom: 0;
            padding: 8px 0;
        }

        .nameOfService {
            /* position: absolute; */
        }

        .nameOfService_container {
            bottom: 0px;
            margin-bottom: 0;
            color: red;
            left: -100%;
            transition: 0.35s ease-in-out;
            /* transition-delay: 0.35s; */
        }

        .nameOfService {
            margin-bottom: 0px;
            padding-bottom: 10px;
            padding-left: 16px;
            color: #fff;
            text-transform: uppercase;
            font-family: cursive;
        }

        .card-container:hover .nameOfService_container {
            left: 0;
        }

        .view_detailContainer {
            padding: 9px 13px;
            position: absolute;
            right: 0;
            bottom: 0;
        }

        .view_detail_btn {
            color: #fff;
            padding: 1px 2px;
            display: none;
            transition-delay: 1s;
            border-bottom: 1px solid #fff;
        }

        .card-container:hover .view_detail_btn {
            display: block;
        }

        .card-change {
            border: none;
            box-shadow: 1px 1px 2px 2px #00000029;
            overflow: hidden;
        }
        
        
        
    </style>
@endpush

@section('content')

    <div class="page-title light-background" data-aos="fade">
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
        <div class="container section-title mb-5" data-aos="fade-up" style="padding-bottom: 0px;">
                <div class="g-img">
                    <h2 class="mb-0">{{ $wing->title }}</h2>
                </div>
                
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">
            <div class="row">

            @foreach ($services as $service)
                <div class="col-lg-4 mb-4 col-12 col-md-6">
                    <a href="">
                        <div class="">
                            <div class="card card-change">
                                <div class="card-body p-0 position-relative card-container">
                                    <img src="{{ asset('storage/'.$service->thum) }}" alt=""
                                        class="img-fluid">
                                    <!--  -->
                                    <div class="overlay"></div>
                                    <div class="position-absolute nameOfService_container">
                                        <p class="nameOfService">{{ $service->name }}</p>
                                    </div>
                                    <div class="view_detailContainer"><a href="{{ route('services.detail',['slug' => $service->slug ]) }}" class="view_detail_btn">View Detail</a>
                                    </div>
                                </div>
                                <div>
                                    <a href="{{ route('services.detail',['slug' => $service->slug ]) }}"><h3 class="card_h3">{{ $service->name }}</h3></a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
                

                {{-- <div class="col-lg-4 mb-4 col-12 col-md-6">
                    <div>
                        <div class="card card-change">
                            <div class="card-body p-0 position-relative card-container">
                                <img src="{{ asset('assets/user/assets/img/hotel/meri.webp') }}" alt="" class="img-fluid">
                                <!--  -->
                                <div class="overlay"></div>
                                <div class="position-absolute nameOfService_container">
                                    <p class="nameOfService">Le-Meridien</p>
                                </div>
                                <div class="view_detailContainer"><a href="{{ route('services.detail',['uid' => 'dkdsflsdl']) }}" class="view_detail_btn">View Detail</a></div>
                            </div>
                            <div>
                                <h3 class="card_h3">Le-Meridien</h3>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 mb-4 col-12 col-md-6">
                    <div>
                        <div class="card card-change">
                            <div class="card-body p-0 position-relative card-container">
                                <img src="{{ asset('assets/user/assets/img/hotel/she.jpg') }}" alt="" class="img-fluid">
                                <!--  -->
                                <div class="overlay"></div>
                                <div class="position-absolute nameOfService_container">
                                    <p class="nameOfService">Sheraton</p>
                                </div>
                                <div class="view_detailContainer"><a href="{{ route('services.detail',['uid' => 'dkdsflsdl']) }}" class="view_detail_btn">View Detail</a></div>
                            </div>
                            <div>
                                <h3 class="card_h3">Sheraton</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 col-12 col-md-6">
                    <div>
                        <div class="card card-change">
                            <div class="card-body p-0 position-relative card-container">
                                <img src="{{ asset('assets/user/assets/img/hotel/hilton.jpg') }}" alt="" class="img-fluid">
                                <!--  -->
                                <div class="overlay"></div>
                                <div class="position-absolute nameOfService_container">
                                    <p class="nameOfService">Hilton</p>
                                </div>
                                <div class="view_detailContainer"><a href="{{ route('services.detail',['uid' => 'dkdsflsdl']) }}" class="view_detail_btn">View Detail</a></div>
                            </div>
                            <div>
                                <h3 class="card_h3">Hilton</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 col-12 col-md-6">
                    <div>
                        <div class="card card-change">
                            <div class="card-body p-0 position-relative card-container">
                               <img src="{{ asset('assets/user/assets/img/hotel/hayt.webp') }}" alt="" class="img-fluid">
                                <!--  -->
                                <div class="overlay"></div>
                                <div class="position-absolute nameOfService_container">
                                    <p class="nameOfService">Hyatt Regency</p>
                                </div>
                                <div class="view_detailContainer"><a href="{{ route('services.detail',['uid' => 'dkdsflsdl']) }}" class="view_detail_btn">View Detail</a></div>
                            </div>
                            <div>
                                <h3 class="card_h3">Hyatt Regency</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 col-12 col-md-6">
                    <div>
                        <div class="card card-change">
                            <div class="card-body p-0 position-relative card-container">
                                <img src="{{ asset('assets/user/assets/img/hotel/caption.jpg') }}" alt="" class="img-fluid">
                                <!--  -->
                                <div class="overlay"></div>
                                <div class="position-absolute nameOfService_container">
                                    <p class="nameOfService">InterContinental</p>
                                </div>
                                <div class="view_detailContainer"><a href="{{ route('services.detail',['uid' => 'dkdsflsdl']) }}" class="view_detail_btn">View Detail</a></div>
                            </div>
                            <div>
                                <h3 class="card_h3">InterContinental</h3>
                            </div>
                        </div>
                    </div>
                </div> --}}

                
            </div>
        </div>
    </section><!-- /Starter Section Section -->

@endsection

@push('script')
    <script>

    </script>
@endpush