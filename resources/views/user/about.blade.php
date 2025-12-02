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
      <h2 style="margin-bottom:0px">About Us</h2>
    </div>
  </div><!-- End Section Title -->

 <section class="about-area pt-0"  data-aos="fade-up" data-aos-delay="100">
        <div class="container">
            <div class="row">
                <div class="col-12 py-3" style="text-align: justify;">
                    <div class="about-top-image">
                        <img src="{{ asset('assets/user/assets/img/gallery/g2.jpg') }}" alt="pic">
                    </div>
                    <p class="mt-2" style="text-align: justify;">
                       Swift Solution has been delivering exceptional services in the fields of Travel & Tourism, Event Management, Hotel Booking, and Restaurant Reservation since its inception. Over the years, we have built a strong reputation for ensuring comfortable, reliable, and memorable travel experiences for clients across Bangladesh.

                        We understand that traveling to a new destination—whether for leisure, business, or any special purpose—can sometimes feel overwhelming. That’s why our dedicated team works tirelessly to make the entire journey smooth, organized, and worry-free. From planning your perfect holiday to arranging luxury hotel stays, managing events, coordinating transportation, and ensuring the best dining experiences—we take care of everything with professionalism and precision.

                        Our 24×7 support team is committed to guiding you at every step, offering personalized recommendations, curated travel itineraries, and affordable solutions tailored to your needs. With our extensive network of trusted partners, including top hotels, restaurants, airlines, travel guides, and event venues, we ensure that you receive the highest standard of service at the most competitive prices.

                        We specialize in a wide range of services—International & Domestic Tours, Business Travel Assistance, Corporate Events, Destination Weddings, Hotel & Resort Bookings, Restaurant Reservations, and Customized Travel Packages designed to suit families, couples, and corporate groups. Our professionals work together to guarantee your comfort, convenience, and complete satisfaction.

                        As one of the rapidly growing travel and event management companies, Company Name has evolved from being a service provider to becoming a trusted brand known for its reliability, transparency, and customer-centric approach. We aim to transform every journey into a beautiful memory and every event into a remarkable experience.

                        We continue to blend world-class travel solutions, innovative planning, and premium customer care to establish ourselves as a leading name in the travel and hospitality industry. With a mission to deliver excellence, we are here to make your travel smoother, your events grander, and your moments unforgettable.
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