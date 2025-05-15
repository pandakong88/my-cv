@include('partials.header')
<body data-spy="scroll" data-target=".site-nav-target" data-offset="200">

  @include('partials.navbar-detail')

      <div class="cover-v1 gradient-bottom-black jarallax">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-md-10 mx-auto text-center">
              <h1 class="heading" data-aos="fade-up">{{ $portfolio_detail->name }}</h1>
              <h2 class="subheading" data-aos="fade-up" data-aos-delay="100">{{ $portfolio_detail->short_description }}.</h2>
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
            <h2 class="heading-portfolio-single-h2">{{ $portfolio_detail->name }}</h2>

            <div class="row justify-content-between mb-5">
              @if($portfolio_detail->images && count($portfolio_detail->images))
              <div class="col-12 mb-4">
                <div class="owl-carousel single-slider">
                  @foreach($portfolio_detail->images as $image)
                  <figure class="mb-4">
                    <img src="{{ asset('storage/' . $image) }}" alt="Image" class="img-fluid">
                  </figure>
                  @endforeach
                </div>
              </div>
              @endif

              <div class="col-12 mb-5">
                <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="detail-v1">
                      <span class="detail-label">Project Date</span>
                      <span class="detail-val">{{ $portfolio_detail->project_date }}</span>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="detail-v1">
                      <span class="detail-label">Role</span>
                      <span class="detail-val"> <a href="#">{{ $portfolio_detail->role }}</a></span>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="detail-v1">
                      <span class="detail-label">Client</span>
                      <span class="detail-val">{{ $portfolio_detail->client }}</span>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="detail-v1">
                      <span class="detail-label">Visit</span>
                      <span class="detail-val"><a href="{{ $portfolio_detail->link }}">{{ $portfolio_detail->link }}</a></span>
                    </div>
                  </div>
                </div>
              </div>
              @if(count($secondHalf))
              <div class="col-md-6 pr-md-5">
                {!! implode('', $firstHalf) !!}
              </div>
              <div class="col-md-6 pl-md-5">
                 {!! implode('', $secondHalf) !!}
              </div>
              @else
              <div class="col-md-6 pr-md-5">
                {!! implode('', $firstHalf) !!}
              </div>
              @endif
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- Font Awesome (penting untuk ikon sosial) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

@include('partials.footer')
    

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