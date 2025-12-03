@extends('user.layout.app')

@section('title', 'Swift Solution | Management Page')

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
  </style>
@endpush

@section('content')
  <div class="page-title light-background" data-aos="fade">
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="/">Home</a></li>
          <li class="current">Team</li>
        </ol>
      </div>
    </nav>
  </div>
  <div class="container section-title mt-5 d-flex justify-content-center" data-aos="fade-up">
    <div class="g-img">
      <h2 style="margin-bottom:0px">Management Team</h2>
    </div>
  </div><!-- End Section Title -->
  <!-- Team Section -->
  <section id="team" class="team section pt-0">
    <!-- Section Title -->
    <div class="container">
      <div class="row gy-4 mb-4">
        @foreach ($teams as $team)
          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member team-shadow">
              <div class="card p-2 team-border">
                <div class="card-body p-0 bg-team-body">
                  <img src="{{ asset('storage/'.$team->photo ) }}" class="img-fluid" alt="">
                </div>
              </div>
              <div class="member-info">
                <div class="member-info-content">
                  <h4>{{ $team->name }}</h4>
                  <span class="text-white">{{ $team->designation }}</span>
                </div>
                <div class="social">
                  <a href="{{ $team->twitter_url ?? '#' }}" target="{{ $team->twitter_url ? '_blank' : '_self' }}"><i class="bi bi-twitter-x"></i></a>
                  <a href="{{ $team->facebook_url ?? '#' }}" target="{{ $team->facebook_url ? '_blank' : '_self' }}"><i class="bi bi-facebook"></i></a>
                  <a href="{{ $team->instagram_url ?? '#' }}" target="{{ $team->instagram_url ? '_blank' : '_self' }}"><i class="bi bi-instagram"></i></a>
                  <a href="{{ $team->linkedin_url ?? '#' }}" target="{{ $team->linkedin_url ? '_blank' : '_self' }}"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section><!-- /Team Section -->
@endsection

@push('script')
  <script>
  </script>
@endpush