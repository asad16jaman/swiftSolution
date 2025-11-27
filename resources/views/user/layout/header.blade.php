<header id="header" class="header d-flex align-items-center fixed-top mainNav">
    <div class="container position-relative d-flex align-items-center justify-content-center">

      <a href="/" class="logo d-flex align-items-center me-auto me-xl-0 d-lg-none">
        <img src="{{ asset('assets/user/assets/img/swift_logo.png') }}" alt="">
      </a> 

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class=" {{ Route::is('home') ? 'active' : '' }} ">Home</a></li>
          <li ><a href="{{ route('about') }}" class=" {{ Route::is('about') ? 'active' : '' }} ">About</a></li>
          <!-- <li><a href="">Services</a></li> -->
          <li class="dropdown" c
          ><a href="#" class=" {{ (Route::is('videoGallery') || Route::is('photoGallery')) ? 'active' : '' }} "><span>Gallery</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ route('photoGallery') }} " class=" {{ Route::is('photoGallery') ? 'active' : '' }} ">Photo</a></li>
              <li><a href="{{ route('videoGallery') }}" class=" {{ Route::is('videoGallery') ? 'active' : '' }} ">Video</a></li>
            </ul>
          </li>
          <li><a href="{{ route('our_management') }}" class=" {{ Route::is('our_management') ? 'active' : '' }} ">Team</a></li>

          <!-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> -->
          
          <li><a href="{{ route('contactPage') }}" class=" {{ Route::is('contactPage') ? 'active' : '' }} ">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <!-- <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div> -->

    </div>
  </header>