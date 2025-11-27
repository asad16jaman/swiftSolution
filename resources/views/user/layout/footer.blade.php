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
          <h4>Swift Solution</h4>
          <p class="text-justify">© 2025 Swift Solution. We provide professional Hotel & Resort Booking, Restaurant Reservations, Tourism &
            Travel Assistance, and Event Management services. Thank you for choosing us as your trusted partner for
            seamless hospitality and travel experiences.</p>
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
            <span>Mirpur-10,Dhaka</span>
          </p>
          <p>
            <span class="contact_icon_footer"><i class="icon fa fa-phone"></i></span>
            <span>+8821456987232</span>
          </p>

          <p>
            <span class="contact_icon_footer"><i class="icon fa fa-envelope"></i></span>
            <span>demo_info@gmail.com</span>
          </p>
          <!-- <p>
              <strong>Mon-Sat:</strong> <span>11AM - 23PM</span><br>
              <strong>Sunday</strong>: <span>Closed</span>
            </p> -->

          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <h4>Our Location</h4>
        <div class="ftco-footer-widget mb-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3046.70405037474!2d90.36675717439343!3d23.806463086623516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c72d1a5bf2a9%3A0x25a0f9a592e96ad8!2sLink-Up%20Technology%20Ltd.!5e1!3m2!1sen!2sbd!4v1764221765887!5m2!1sen!2sbd" width="100%" height="160" style="border:0;" allowfullscreen=""
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