
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            @foreach($data3 as $logo)
        <a href="{{route('index')}}"><img src="{{asset('uploads/'. $logo->image)}}" class="img"  style="height:50px; width: 100%;"></a>
        @endforeach
        @foreach($data4 as $contact)
            <p>
              {{$contact->address}}<br>
              <strong>Phone:</strong> +1 {{$contact->phone}}<br>
              <strong>Email:</strong> <a href="mailto:{{$contact->email}}"> {{$contact->email}}</a><br>
            </p>
            @endforeach
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('index')}}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('aboutus')}}">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('services')}}">Services</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('portfolio')}}">Portfolio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('team')}}">Team</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('testimonial')}}">Testimonials</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('blog')}}">Blog</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('contact')}}">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>eCompany</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
          Designed by <a href="https://www.instagram.com/inihirzala/">Nihir Zala</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        @foreach($data4 as $social)
        <a href="{{$social->twitter}}" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="{{$social->facebook}}" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="{{$social->instagram}}" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="{{$social->skype}}" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="{{$social->linkedin}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        @endforeach
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  

</body>

</html>