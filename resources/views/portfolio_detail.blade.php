@include('partials.header')
<body data-spy="scroll" data-target=".site-nav-target" data-offset="200">

  @include('partials.navbar')

      <div class="cover-v1 gradient-bottom-black jarallax">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-md-10 mx-auto text-center">
              <h1 class="heading" data-aos="fade-up">Shoe Rebranding</h1>
              <h2 class="subheading" data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from the countries.</h2>
            </div>

          </div>
        </div>

        <!-- dov -->
        <a href="#portfolio-single-section" class="mouse-wrap smoothscroll">
          <span class="mouse">
            <span class="scroll"></span>
          </span>
          <span class="mouse-label">Scroll</span>
        </a>

      </div>
      <!-- END .cover-v1 -->

      <div class="container">
        <div class="portfolio-single-wrap unslate_co--section" id="portfolio-single-section">

          <div class="portfolio-single-inner">
            <h2 class="heading-portfolio-single-h2">Shoe Rebranding</h2>

            <div class="row justify-content-between mb-5">
              <div class="col-12 mb-4">
                <div class="owl-carousel single-slider">
                  <figure class="mb-4">
                    <img src="images/work_1_full.jpg" alt="Image" class="img-fluid">
                  </figure>
                  <figure class="mb-4">
                    <img src="images/work_1_a_full.jpg" alt="Image" class="img-fluid">
                  </figure>
                </div>
              </div>
              <div class="col-12 mb-5">
                <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="detail-v1">
                      <span class="detail-label">Project Date</span>
                      <span class="detail-val">March 9th, 2020</span>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="detail-v1">
                      <span class="detail-label">Role</span>
                      <span class="detail-val"><a href="#">Identity</a>, <a href="#">Web Design</a></span>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="detail-v1">
                      <span class="detail-label">Client</span>
                      <span class="detail-val">unslate</span>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="detail-v1">
                      <span class="detail-label">Visit</span>
                      <span class="detail-val"><a href="#">https:///</a></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 pr-md-5">
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
              </div>
              <div class="col-md-6 pl-md-5">
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- Font Awesome (penting untuk ikon sosial) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    {{-- <footer id="footer" class="unslate_co--footer text-light py-4 mt-9">
      <div class="container">
        <div class="row gy-4 align-items-center text-center text-md-start">
          
          <!-- Branding -->
          <div class="col-md-4">
            <h5 class="fw-bold mb-2">Kontak Saya<span class="text-danger">.</span></h5>
            <p class="text-muted small mb-0">Tertarik kerja sama? Hubungi saya melalui media sosial atau email.</p>
          </div>

          <!-- Social Media -->
          <div class="col-md-4">
            <ul class="list-inline d-flex justify-content-center justify-content-md-start flex-wrap gap-3 mb-0">
              <li class="list-inline-item">
                <a href="{{ $profile->github }}" class="text-light fs-5" title="GitHub">
                  <i class="fab fa-github"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="{{ $profile->linkedin  }}" class="text-light fs-5" title="LinkedIn">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="{{ $profile->instagram }}" class="text-light fs-5" title="Instagram">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="{{ $profile->whatsapp  }}" class="text-light fs-5" title="WhatsApp">
                  <i class="fab fa-whatsapp"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="mailto:{{ $profile->email }}" class="text-light fs-5" title="Email">
                  <i class="fas fa-envelope"></i>
                </a>
              </li>
            </ul>
          </div>

          <!-- Contact Info -->
          <div class="col-md-4" >
            <p class="small mb-1"><i class="fas fa-map-marker-alt me-2 text-danger"></i>Yogyakarta, Indonesia</p>
            <p class="small mb-0"><i class="fas fa-envelope me-2 text-danger"></i><a href="mailto:{{ $profile->email }}" class="text-light text-decoration-none"> {{ $profile->email }}</a></p>
          </div>
        </div>

        <hr class="my-4 border-secondary">

        <div class="text-center small text-muted">
          &copy; {{ date('Y') }} Dibuat dengan <i class="fas fa-heart text-danger"></i> oleh <strong>Kamu</strong>
        </div>
      </div>
    </footer> --}}

    <style>
      #footer a:hover {
        color: #e63946 !important;
        transition: 0.3s;
      }
      #footer i {
        transition: transform 0.3s;
      }
      #footer i:hover {
        transform: scale(1.2);
      }
    </style>

  </div>

  <!-- Loader -->
  <div id="unslate_co--overlayer"></div>
  <div class="site-loader-wrap">
    <div class="site-loader"></div>
  </div>


  <script src="{{ asset('assets/js/scripts-dist.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

</body>

</html>