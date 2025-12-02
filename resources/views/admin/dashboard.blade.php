@extends('admin.layout.app')

@section('title', 'Admin Page')

@section('pageside')
  @include('admin.layout.sidebar',['page' => 'home'])
@endsection
@section('style')
  <style>
    .d_icon{
          font-size: 36px;
          margin-bottom: 0px;
          line-height: 0;
    }
  </style>
@endsection

@section('bodyContent')

<div class="container">

          <div class="page-inner">
            <div class="d-flex align-items-center justify-content-center align-items-md-center flex-column flex-md-row pt-2 pb-4">
              <div >
                <div class="card mb-1">
                  <div class="card-body p-0 d-flex justify-content-center">
                      <img src="{{ optional($company)->logo ? asset('storage').'/'.$company->logo : "" }}" alt="">
                  </div>
                </div>
                <h3 class="fw-bold mb-3 text-center">{{ optional($company)->name }}</h3>
              
              </div>
            </div>
            <div class="row">
                  <div class="col-xl-3 col-md-6">
                    <a href="{{ route('admin.users') }}">
                        <div class="card" style="background:#ebf8ff">
                          <div class="card-body text-center">
                              <p class="d_icon"><i class="fas fa-users"></i></p>
                              <h4>Users</h4>
                          </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-3 col-md-6">
                    <a href="{{ route('admin.service') }}">
                        <div class="card" style="background:#fffbeb">
                          <div class="card-body text-center">
                              <p class="d_icon"><i class="fas fa-project-diagram"></i></p>
                              <h4>Service</h4>
                          </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-3 col-md-6">
                    <a href="{{ route('admin.wings') }}">
                        <div class="card" style="background:#f5f3ff">
                          <div class="card-body text-center">
                              <p class="d_icon"><i class="fas fa-rocket"></i></p>
                              <h4>Wigns</h4>
                          </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-3 col-md-6">
                    <a href="{{ route('admin.management') }}">
                        <div class="card" style="background:#fdf2f8	">
                          <div class="card-body text-center">
                            <p class="d_icon"><i class="fas fa-user-tie"></i></p>
                             
                              <h4>Management</h4>
                          </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-3 col-md-6">
                    <a href="{{ route('admin.photogallery') }}">
                        <div class="card" style="background: #f0fdfa">
                          <div class="card-body text-center">
                              <p class="d_icon"><i class="fas fa-image"></i></p>
                              <h4>Photo Gallery</h4>
                          </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-3 col-md-6">
                    <a href="{{ route('admin.videogallery') }}">
                        <div class="card" style="background:#f0fdf4	">
                          <div class="card-body text-center">
                              <p class="d_icon"><i class="fas fa-video"></i></p>
                              <h4>Video Gallery</h4>
                          </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-3 col-md-6">
                    <a href="{{ route('admin.message') }}">
                        <div class="card" style="background:#eef2ff	">
                          <div class="card-body text-center">
                              <p class="d_icon"><i class="fas fa-envelope"></i></p>
                              <h4>Message</h4>
                          </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-3 col-md-6">
                    <a href="{{ route('admin.logout') }}">
                        <div class="card" style="background:#f9d4d4	">
                          <div class="card-body text-center">
                              <p class="d_icon"><i class="fas fa-share"></i></p>
                              <h4>Logout</h4>
                          </div>
                        </div>
                    </a>
                </div>
            </div>
          </div>
        </div>

@endsection


