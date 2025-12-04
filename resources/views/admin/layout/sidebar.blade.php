<style>
  .logo-header[data-background-color] .btn-toggle, .logo-header[data-background-color] .more {
    color: #000 !important;
}
</style>
<div class="sidebar" data-background-color="white">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="">
            <a href="{{ route('admin') }}" class="logo">
              <img
                src="{{$company ? asset('storage/'.$company->logo) : asset('assets/admin/img/demoProfile.png') }}"
                alt="navbar brand"
                class="navbar-brand"
                height="70px"
                width="150px"
              />
              <!-- <span style="color:#fff;font-size:10px"></span> -->
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item {{ ($page=='home') ? 'active' : '' }}">
                <a href="/admin">
                  <i class="fas fa-home"></i>
                   <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item {{ ($page == 'slider' || $page == 'users'  || $page == 'wellcome' || $page=='ch') ? 'active submenu' : "" }} ">
                @if(($page == 'slider' || $page == 'users'  || $page == 'wellcome' || $page=='ch'))
                  <a data-bs-toggle="collapse" href="#web" class="" aria-expanded="true">
                @else
                  <a data-bs-toggle="collapse" class="collapsed" href="#web" aria-expanded="false">
                @endif
                  <i class="fas fa-globe"></i> 
                  <p>Web Content</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse {{ ($page == 'slider' || $page == 'users'  || $page == 'wellcome' || $page=='ch' ) ? 'show' : "" }}" id="web">
                  <ul class="nav nav-collapse">

                    {{-- <li>
                      <a href="{{ route('admin.slider') }}" style="padding: 5px 24px !important">
                        <p class="{{ ($page == 'slider') ? 'sub-item' : 'pl' }}">Slider</p>
                      </a>
                    </li> --}}

                    {{-- <li>
                      <a href="{{ route('admin.wellcome') }}" style="padding: 5px 24px !important">
                        <p class="{{($page == 'wellcome') ? 'sub-item' : "pl" }}">Welcome</p>
                      </a>
                    </li> --}}
                    <li>
                      <a href="{{ route('admin.ch-message') }}" style="padding: 5px 24px !important">
                        <p class="{{($page == 'ch') ? 'sub-item' : "pl" }}">Authority Message</p>
                      </a>
                    </li>

                    @can('viewAny' ,Auth()->user()) 
                    <li class="" >
                      <a href="{{ route('admin.users') }}" style="padding: 5px 24px !important">
                        <p class="{{ ($page == 'users') ? 'sub-item' : "pl" }}">Users</p>
                      </a>
                    </li>
                    @endcan
                  </ul>
                </div>
              </li>
              <li class="nav-item {{ ($page=='service') ? 'active' : '' }}">
                <a href="{{ route('admin.service') }}">
                  <i class="fas fa-project-diagram"></i>
                  <p>Service</p>
                </a>
              </li>
              
              <li class="nav-item {{ ($page == 'gallery_photo' || $page == 'gallery_video') ? 'active submenu' : "" }} ">
                @if(($page == 'gallery_photo' || $page == 'gallery_video'))
                  <a data-bs-toggle="collapse" href="#gallery" class="" aria-expanded="true">
                @else
                  <a data-bs-toggle="collapse" class="collapsed" href="#gallery" aria-expanded="false">
                @endif
                  <i class="fas fa-folder-open"></i> 
                  <p>Gallery</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse {{ ($page == 'gallery_photo' || $page == 'gallery_video') ? 'show' : "" }}" id="gallery">
                  <ul class="nav nav-collapse">
                      <li>
                      <a href="{{ route('admin.photogallery') }}" style="padding: 5px 24px !important">
                        <p class="{{ ($page == 'gallery_photo') ? 'sub-item' : 'pl' }}">Photo Gallery</p>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('admin.videogallery') }}" style="padding: 5px 24px !important">
                        <p class="{{($page == 'gallery_video') ? 'sub-item' : "pl" }}">Video Gallery</p>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              
              
              
              

              

             
             {{-- 
               

              <li class="nav-item  {{ ($page=='faq') ? 'active' : '' }}">
                <a href="{{ route('admin.faq') }}">
                  <i class="fas fa-question-circle"></i> 
                  <p>Faq</p>
                </a>
              </li>

              --}}

              <li class="nav-item  {{ ($page=='wings') ? 'active' : '' }}">
                <a href="{{ route('admin.wings') }}">
                <i class="fas fa-rocket"></i>
                  <p>Our Wings</p>
                </a>
              </li>

              {{-- <li class="nav-item  {{ ($page=='feedback') ? 'active' : '' }}">
                <a href="{{ route('admin.feedback') }}">
                 <i class="fas fa-comments"></i> 
                  <p>Feedback</p>
                </a>
              </li> --}}

              
               <li class="nav-item  {{ ($page=='management') ? 'active' : '' }}">
                <a href="{{ route('admin.management') }}">
                 <i class="fas fa-user-tie"></i>
                  <p>Management</p>
                </a>
              </li>
              

              <li class="nav-item {{ ($page=='contact') ? 'active' : '' }}">
                <a href="{{ route('admin.message') }}">
                  <i class="fas fa-envelope"></i>
                  <p>Contact</p>
                </a>
              </li>

              <li class="nav-item {{ ($page=='book') ? 'active' : '' }}">
                <a href="{{ route('admin.book') }}">
                  <i class="fas fa-envelope"></i>
                  <p>Service Book</p>
                </a>
              </li>

              <li class="nav-item {{ ($page=='about') ? 'active' : '' }}">
                <a href="{{ route('admin.about') }}">
                 <i class="fa fa-file-alt"></i>
                  <p>Pages</p>
                </a>
              </li>

              <li class="nav-item {{ ($page=='company') ? 'active' : '' }}">
                <a href="{{ route('admin.company') }}">
                  <i class="fas fa-building"></i>
                  <p>Company</p>
                  
                </a>
              </li>
             
             
              
            </ul>
          </div>
        </div>
      </div>