<style>
  .footer_link_container {}

  .footer_link_container p {
    margin-bottom: 10px;
  }

  .footer_link_container p .icon {
    font-size: 16px;
  }

  .footer_link_container p .footer_link a {
    color: #fff;
  }
  .contact_icon_footer i{
    font-size: 18px !important;
  }
  .footer_contact p{
    margin-bottom: 9px;
  }
  #footer h4{
    margin-bottom: 22px;
  } 
</style>


<footer id="footer" class="footer dark-background">

  <div class="container">
    <div class="row gy-3">
      <div class="col-lg-4 col-md-6 d-flex">
        <!--  -->
        <div class="address">
          <h4>{{ optional($company)->name }}</h4>
          <p class="text-justify">{{ optional($company)->footer_text }}</p>
          <!-- <p>A108 Adam Street</p>
            <p>New York, NY 535022</p> -->
          <p></p>
        </div>

      </div>

      <div class="col-lg-2 col-md-6 d-flex">
        <!-- <i class="bi bi-telephone icon"></i> -->
        <div class="footer_link_container">
          <h4>Usefull Link</h4>
          <p>
            <span class="icon"><i class="fa fa-check"></i></span>
            <span class="footer_link"><a href="{{ route('home') }}">Home</a></span>
          </p>
          <p>
            <span class="icon"><i class="fa fa-check"></i></span>
            <span class="footer_link"><a href="{{ route('about') }}">About</a></span>
          </p>
          <p>
            <span class="icon"><i class="fa fa-check"></i></span>
            <span class="footer_link"><a href="{{ route('photoGallery') }}">Photo Gallery</a></span>
          </p>
          <p>
            <span class="icon"><i class="fa fa-check"></i></span>
            <span class="footer_link"><a href="{{ route('videoGallery') }}">Video Gallery</a></span>
          </p>
          <p>
            <span class="icon"><i class="fa fa-check"></i></span>
            <span class="footer_link"><a href="{{ route('contactPage') }}">Contact</a></span>
          </p>
          <!-- <p>
              <strong>Phone:</strong> <span>+1 5589 55488 55</span><br>
              <strong>Email:</strong> <span>info@example.com</span><br>
            </p> -->
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-flex">
        <!-- <i class="bi bi-clock icon"></i> -->
        <div class="footer_contact">
          <h4>Contact Information</h4>
          <p>
            <span class="contact_icon_footer"><i class="bi bi-geo-alt icon"></i></span>
            <span>{{ optional($company)->address ?? "Not Set Yet" }}</span>
          </p>
          <p>
            <span class="contact_icon_footer"><i class="icon fa fa-phone"></i></span>
            <span>{{ optional($company)->phone ?? "Not Set Yet" }}</span>
          </p>

          <p>
            <span class="contact_icon_footer"><i class="icon fa fa-envelope"></i></span>
            <span>{{ optional($company)->email ?? "Not Set Yet" }}</span>
          </p>
          <!-- <p>
              <strong>Mon-Sat:</strong> <span>11AM - 23PM</span><br>
              <strong>Sunday</strong>: <span>Closed</span>
            </p> -->

          <div class="social-links d-flex mt-4">
            <a href="{{ optional($company)->twiter }}" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="{{ optional($company)->facebook }}" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="{{ optional($company)->instagram }}" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="{{ optional($company)->linkdin }}" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <h4>Our Location</h4>
        <div class="ftco-footer-widget mb-4">
            <iframe src="{{ optional($company)->map_url }}" width="100%" height="160" style="border:0;" allowfullscreen=""
              loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          
        </div>
      </div>

    </div>
  </div>

  <div class="container copyright text-center mt-4 d-flex justify-content-between">
    <p>© <span>Copyright</span> <strong class="px-1 sitename">Swift Solution</strong> <span>All Rights Reserved</span>
    </p>
    <div class="credits">
      Designed by <a href="https://linktechbd.com/">Link-Up Technology</a>
    </div>
  </div>

</footer>