@extends('user.layout.app')

@section('title', 'Swift Solution | Contact Page')

@push('style')
  <style>
    .service-shadow {
      box-shadow: 1px 1px 4px 0px #00000094;
    }

    .bg-gr {
      background: linear-gradient(0deg, #005ee9, #ff581d)
    }

    .bg-submit {
      background: #0e363e;

    }

    .info-width {
      width: 76%;
    }

    .pb-card {
      padding-bottom: 20px;
    }

    .pt-card {
      padding-top: 20px;
    }
    .border-bottom{
      border-bottom: 2px dotted #fff !important;
    }
  </style>
@endpush

@section('content')
  <div class="page-title light-background" data-aos="fade">
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="/">Home</a></li>
          <li class="current">Contact Page</li>
        </ol>
      </div>
    </nav>
  </div>
  <!-- Starter Section Section -->
  <section id="contact" class="contact section">
    <!-- Section Title -->
    <div class="container section-title mt-5 d-flex justify-content-center" data-aos="fade-up">
      <div class="g-img">
        <h2 class="mb-0">Contact Us</h2>
      </div>
    </div><!-- End Section Title -->
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row mb-4">
        <div class="col-md-6 col-lg-4">
          <div class="row bg-gr" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-12 pt-card border-bottom">
              <div class="info-item d-flex  pb-3 justify-content-center align-items-center">
                <div><i class="bi bi-geo-alt"></i></div>
                <div class="info-width">
                  <h3 class="text-white">Address</h3>
                  <p class="text-white">{{ optional($company)->address }}</p>
                </div>
              </div>
            </div><!-- End Info Item -->
            <div class="col-lg-12 pb-card border-bottom pt-card">
              <div class="info-item d-flex  justify-content-center align-items-center">
                <div><i class="bi bi-telephone"></i></div>
                <div class="info-width">
                  <h3 class="text-white">Call Us</h3>
                  <p class="text-white">{{ optional($company)->phone }}</p>
                </div>
              </div>
            </div><!-- End Info Item -->
            <div class="col-lg-12  pb-card pt-card">
              <div class="info-item d-flex justify-content-center align-items-center">
                <div><i class="bi bi-envelope"></i></div>
                <div class="info-width">
                  <h3 class="text-white">Email Us</h3>
                  <p class="text-white">{{ optional($company)->email }}</p>
                </div>
              </div>
            </div><!-- End Info Item -->
          </div>
        </div>
        <div class="col-md-6 col-lg-8">
          <form action="{{ route('contactPage') }}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="300">
            @csrf
            <div class="row gy-4">
              <div class="col-md-6">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Your Name" required="">
                @error('name')
                  <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
              <div class="col-md-6 ">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Your Email" required="">
                @error('email')
                  <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
              <div class="col-md-12">
                <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" placeholder="Subject" required="">
                @error('subject')
                  <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
              <div class="col-md-12">
                <textarea class="form-control  @error('message') is-invalid @enderror" name="message" rows="6" placeholder="Message" required=""></textarea>
                @error('message')
                  <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
              <div class="col-md-12 text-end">
                <button type="submit" class="bg-submit">Send Message</button>
              </div>
            </div>
          </form><!-- End Contact Form -->
        </div>
      </div>
    </div>
  </section><!-- /Contact Section -->

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
  @if (session('success'))
        $(document).ready(function () {
            $('#successModal').modal('show');
        });
    @endif
</script>
@endpush