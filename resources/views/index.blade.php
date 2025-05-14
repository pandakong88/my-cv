@include('partials.header')
  <body data-spy="scroll" data-target=".site-nav-target" data-offset="200">

    {{-- NAAVBAR --}}
    @include('partials.navbar')
      <div class="cover-v1 jarallax" style="background-image: url('{{ asset('assets/images/cover_bg_2.jpg') }}');" id="home-section">
        <div class="container">
          <div class="row align-items-center">
              
            <div class="col-md-7 mx-auto text-center">
              <h1 class="heading gsap-reveal-hero">{{ $profile->nickname }}</h1>
              <h2 class="subheading gsap-reveal-hero">{{ $profile->slogan }}.</h2>
            </div>

          </div>
        </div>


        <a href="#portfolio-section" class="mouse-wrap smoothscroll">
          <span class="mouse">
            <span class="scroll"></span>
          </span>
          <span class="mouse-label">Scroll</span>
        </a>

      </div>
      <!-- END .cover-v1 -->


      <div class="unslate_co--section" id="portfolio-section">
        <div class="container">
          
          
          <div class="relative"><div class="loader-portfolio-wrap"><div class="loader-portfolio"></div></div> </div>
          <div id="portfolio-single-holder"></div>

          <div class="portfolio-wrapper">
            <div id="posts" class="row gutter-isotope-item">
              
                @foreach ($portfolios as $item)
                    <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                        <a href="{{ route('portfolio.show', $item->id) }}" class="portfolio-item isotope-item gsap-reveal-img" data-id="{{ $item->id }}"  target="_blank" rel="noopener">
                            <div class="overlay">
                                <span class="wrap-icon icon-link2"></span>
                                <div class="portfolio-item-content">
                                    <h3>{{ $item->name }}</h3>
                                    {{-- <p>{{ $item->short_description }}</p> --}}
                                </div>
                            </div>

                            @if ($item->images && count($item->images))
                                <img src="{{ asset('storage/' . $item->images[0]) }}" class="lazyload img-fluid" alt="Images" />
                            @endif
                        </a>
                    </div>
                @endforeach

              {{-- <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="portfolio-single-1.html" class="portfolio-item ajax-load-page isotope-item gsap-reveal-img" data-id="1">
                    <div class="overlay">
                      <span class="wrap-icon icon-link2"></span>
                      <div class="portfolio-item-content">
                        <h3>Shoe Rebranding</h3>
                        <p>web, branding</p>
                      </div>
                    </div>
                     <img src="{{ asset('assets/images/work_1_md.jpg') }}" class="lazyload  img-fluid" alt="Images" />
                  </a>
              </div> --}}
              
              {{-- <div class="item branding packaging illustration col-sm-6 col-md-6 col-lg-4 isotope-mb-2 ">
                <a href="portfolio-single-3.html" class="portfolio-item ajax-load-page item-portrait isotope-item gsap-reveal-img" data-id="3">
                    <div class="overlay">
                      <span class="wrap-icon icon-link2"></span>
                      <div class="portfolio-item-content">
                        <h3>Reworking</h3>
                        <p>branding, packaging, illustration</p>
                      </div>
                    </div>
                    <img src="{{ asset('assets/images/work_2_md.jpg') }}" class="lazyload img-fluid" alt="Images" />
                  </a>
              </div>

              <div class="item branding packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="portfolio-single-4.html" class="portfolio-item isotope-item gsap-reveal-img ajax-load-page" data-id="4">
                    <div class="overlay">
                      <span class="wrap-icon icon-link2"></span>
                      <div class="portfolio-item-content">
                        <h3>Modern Building</h3>
                        <p>branding, packaging</p>
                      </div>
                    </div>
                     <img src="{{ asset('assets/images/work_3_md.jpg') }}" class="lazyload  img-fluid" alt="Images" />
                  </a>
              </div>

              <div class="item web packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">

                <a href="images/work_4_full.jpg" class="portfolio-item isotope-item gsap-reveal-img" data-fancybox="gallery" data-caption="Watch">
                    <div class="overlay">
                      <span class="wrap-icon icon-photo2"></span>
                      <div class="portfolio-item-content">
                        <h3>Watch</h3>
                        <p>web, packaging</p>
                      </div>
                    </div>
                     <img src="{{ asset('assets/images/work_4_full.jpg') }}" class="lazyload  img-fluid" alt="Images" />
                  </a>

              </div>

              <div class="item illustration packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="images/work_5_md.jpg" class="portfolio-item isotope-item gsap-reveal-img" data-fancybox="gallery" data-caption="Shoe Rebranding">
                    <div class="overlay">
                      <span class="wrap-icon icon-photo2"></span>
                      <div class="portfolio-item-content">
                        <h3>Shoe Rebranding</h3>
                        <p>illustration, packaging</p>
                      </div>
                    </div>
                     <img src="{{ asset('assets/images/work_5_md.jpg') }}" class="lazyload  img-fluid" alt="Images" />
                  </a>
              </div>

              <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="portfolio-single-2.html" class="portfolio-item ajax-load-page item-portrait isotope-item gsap-reveal-img" data-id="2">
                    <div class="overlay">
                      <span class="wrap-icon icon-link2"></span>
                      <div class="portfolio-item-content">
                        <h3>Reshape</h3>
                        <p>web, branding</p>
                      </div>
                    </div>
                     <img src="{{ asset('assets/images/work_6_md.jpg') }}" class="lazyload  img-fluid" alt="Images" />
                  </a>
              </div>

              <div class="item branding packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="images/work_7_a_md.jpg" class="portfolio-item item-portrait isotope-item gsap-reveal-img " data-fancybox="gallery" data-caption="Modern Building">
                    <div class="overlay">
                      <span class="wrap-icon icon-photo2"></span>
                      <div class="portfolio-item-content">
                        <h3>Modern Building</h3>
                        <p>branding, packaging</p>
                      </div>
                    </div>
                     <img src="{{ asset('assets/images/work_7_a_md.jpg') }}" class="lazyload  img-fluid" alt="Images" />
                  </a>
              </div>

              <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="https://www.youtube.com/watch?v=mwtbEGNABWU" class="portfolio-item isotope-item gsap-reveal-img" data-fancybox="gallery" data-caption="Showreel 2019">
                    <div class="overlay">
                      <span class="wrap-icon icon-play_circle_filled"></span>
                      <div class="portfolio-item-content">
                        <h3>Showreel 2019</h3>
                        <p>web, branding</p>
                      </div>
                    </div>
                     <img src="{{ asset('assets/images/work_8_md.jpg') }}" class="lazyload  img-fluid" alt="Images" />
                  </a>
              </div>

              <div class="item web illustration col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="images/work_9_a_md.jpg" class="portfolio-item isotope-item gsap-reveal-img" data-fancybox="gallery" data-caption="Render Packaging">
                    <div class="overlay">
                      <span class="wrap-icon icon-photo2"></span>
                      <div class="portfolio-item-content">
                        <h3>Render Packaging</h3>
                        <p>web, illustration</p>
                      </div>
                    </div>
                     <img src="{{ asset('assets/images/work_9_a_md.jpg') }}" class="lazyload  img-fluid" alt="Images" />
                  </a>
              </div> --}}

            </div>
            
          </div>


        </div>
      </div>


      <div class="unslate_co--section">
        <div class="container">
          <div class="owl-carousel logo-slider">
            <div class="logo-v1 gsap-reveal">
               <img src="{{ asset('assets/images/vs code.png') }}" alt="Image" class="img-fluid">
            </div>
            <div class="logo-v1 gsap-reveal">
               <img src="{{ asset('assets/images/laravel.png') }}" alt="Image" class="img-fluid">
            </div>
            <div class="logo-v1 gsap-reveal">
               <img src="{{ asset('assets/images/ci.png') }}" alt="Image" class="img-fluid">
            </div>
            <div class="logo-v1 gsap-reveal">
               <img src="{{ asset('assets/images/js.png') }}" alt="Image" class="img-fluid">
            </div>
            <div class="logo-v1 gsap-reveal">
               <img src="{{ asset('assets/images/php.png') }}" alt="Image" class="img-fluid">
            </div>
            <div class="logo-v1 gsap-reveal">
               <img src="{{ asset('assets/images/bootstraps.png') }}" alt="Image" class="img-fluid">
            </div>
            <div class="logo-v1 gsap-reveal">
               <img src="{{ asset('assets/images/html.png') }}" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
      </div>

      <style>
        .logo-slider .logo-v1 {
          height: 125px; /* atau tinggi yang kamu suka */
          display: flex;
          align-items: center;
          justify-content: center;
          padding: 15px;
        }

        .logo-slider .logo-v1 img {
          max-height: 100%;  /* biar pas di container */
          max-width: 100%;
          object-fit: contain;
          aspect-ratio: 1/1; /* bikin kotak agar seragam, opsional */
        }

      </style>

      <div class="unslate_co--section" id="about-section">
        <div class="container">
          
          <div class="section-heading-wrap text-center mb-5">
            <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">About Me</span></h2>
            <span class="gsap-reveal">
             <img src="{{ asset('assets/images/divider.png') }}" alt="divider" width="76">
            </span>
          </div>
          

          <div class="row mt-5 justify-content-between">
            <div class="col-lg-7 mb-5 mb-lg-0">
              <figure class="dotted-bg gsap-reveal-img ">
                 <img src="{{ asset('assets/images/hitam putih.jpg') }}" alt="Image" class="img-fluid">
              </figure>
            </div>
            <div class="col-lg-4 pr-lg-5">
              <h3 class="mb-4 heading-h3"><span class="gsap-reveal">Crafting code, shaping ideas</span></h3>
              <p class="mb-4 gsap-reveal" style="text-align: justify;">{!! nl2br(e($profile->about)) !!}</p>
              {{-- <p class="mb-4 gsap-reveal">Berpengalaman membangun website fungsional menggunakan PHP, JavaScript, serta memahami OOP, integrasi API, dan testing. Selalu siap belajar, beradaptasi, dan tumbuh bersama teknologi.</p> --}}
              <p class="gsap-reveal"><a href="#" class="btn btn-outline-pill btn-custom-light">Download CV</a></p>
              <p class="gsap-reveal"><a href="#" class="btn btn-outline-pill btn-custom-light">Lihat CV</a></p>
            </div>
          </div>
        </div>
      </div>

    <div class="unslate_co--section" id="services-section">
      <div class="container">

        <div class="section-heading-wrap text-center mb-5">
          <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">My Services</span></h2>
          <span class="gsap-reveal"> 
            <img src="{{ asset('assets/images/divider.png') }}" alt="divider" width="76">
          </span>
        </div>

        <div class="row gutter-v3">
          
          @foreach ($service as $serviceItem)
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="feature-v1" data-aos="fade-up" data-aos-delay="0">
              <div class="wrap-icon mb-3">
                <img src="{{ asset('assets/images/svg/' . $serviceItem->icon) }}" alt="Image" width="45">
              </div>
              <h3>{!! nl2br(e($serviceItem->nama)) !!}</h3>
              <p>{{ $serviceItem->deskripsi }}</p>
            </div> 
          </div>
          @endforeach
          
        </div>
      </div>
    </div>


      <div class="unslate_co--section section-counter" id="skills-section" style="background: #000; color: #fff; padding: 2rem 0;">
        <div class="container">
          <div class="section-heading-wrap text-center mb-5">
            <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">My Skills</span></h2>
            <span class="gsap-reveal">
              <img src="{{ asset('assets/images/divider.png') }}" alt="divider" width="76">
            </span>
          </div>

          <div class="row">
            @foreach ($skill as $skill)
            <div class="col-md-6 mb-4">
              <h5>{{ $skill->nama_skill }} </h5>
              <div class="progress">
                <div class="progress-bar bg-primary" data-aos="fade-right" data-width="{{ $skill->persentase }}%" style="width: 0">
                <span class="skill-percent">{{ $skill->persentase }} %</span>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <style>
        .progress-bar {
          position: relative;
          background-color: #dc3545;
          width: 0;
          min-width: 2px;
          transition: width 2.5s ease-in-out;
          will-change: width;
        }
        .progress-bar {
          background-color: #dc3545; 
          /* transition: width 3.5s ease; */
           width: 0;
           transition: width 5s ease-in-out;
        }
         .skill-percent {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            font-weight: bold;
            color: #fff;
          }
      </style>

      <div class="unslate_co--section " id="certificate-section">
        <div class="container">
            <div class="section-heading-wrap text-center mb-5">
              <h2 class="heading-h2 text-center divider">
                <span class="gsap-reveal">My Certificates</span>
              </h2>
              <span class="gsap-reveal">
                <img src="{{ asset('assets/images/divider.png') }}" alt="divider" width="76">
              </span>
            </div>

            <!-- Carousel Mulai -->
            <div class="owl-carousel testimonial-slider" data-aos="fade-up"> 
              <!-- Sertifikat 1 -->
              @foreach ($certificate as $certificate)
                <div class="testimonial-inner-bg p-4 row align-items-center text-start">
                  <div class="col-12 col-md-4 mb-3 mb-md-0 text-center">
                    <img src="{{ asset('storage/' . $certificate->image) }}" alt="{{ $certificate->nama }}" class="img-fluid rounded shadow" style="max-width: 250px;">
                  </div>
                  <div class="col-12 col-md-8">
                    <h3 class="mb-2 fw-bold">{{ $certificate->nama }}</h3>
                    <p class="mb-2">{{ $certificate->deskripsi }}</p>
                    <span class="text-muted fst-italic">Diperoleh pada {{ $certificate->tanggal_diperoleh }} </span>
                  </div>
                </div>
              @endforeach
              
            </div>
            

          </div>
          <!-- Carousel Selesai -->
        </div>
      </div>
      <!-- END testimonial -->
      <style>
        .testimonial-inner-bg {
          min-height: 250px; /* atur sesuai kebutuhan, misalnya 250-300 */
          display: flex;
          align-items: center;
          position: relative;
          background-color: #222; /* atau warna gelap sesuai tema */
          border-bottom: 4px solid #e63946; /* warna merah aksen */
        }
        .testimonial-inner-bg::after {
          content: "";
          position: absolute;
          bottom: 0;
          left: 20px;
          right: 20px;
          height: 4px;
          /* background-color: #e63946; */
          border-radius: 2px;
        }
        .testimonial-inner-bg {
          transition: all 0.3s ease;
        }
        .testimonial-inner-bg:hover {
          transform: translateY(-5px);
          box-shadow: 0 8px 20px rgba(0,0,0,0.3);
        }
      </style>

     

      <!-- Font Awesome (penting untuk ikon sosial) -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

      <footer id="footer" class="unslate_co--footer text-light py-4 mt-9">
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
                  <a href="{{ $profile->github }}" class="text-light fs-1" title="GitHub">
                    <i class="fab fa-github fa-2x"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="{{ $profile->linkedin  }}" class="text-light fs-1" title="LinkedIn">
                    <i class="fab fa-linkedin-in fa-2x"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="{{ $profile->instagram }}" class="text-light fs-1" title="Instagram">
                    <i class="fab fa-instagram fa-2x"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="{{ $profile->whatsapp  }}" class="text-light fs-1" title="WhatsApp">
                    <i class="fab fa-whatsapp fa-2x"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="mailto:{{ $profile->email }}" class="text-light fs-1" title="Email">
                    <i class="fas fa-envelope fa-2x"></i>
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
      </footer>

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

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      AOS.init({ once: true });

      const bars = document.querySelectorAll('.progress-bar');

      const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            const el = entry.target;
            const targetWidth = el.getAttribute('data-width');
            const percentText = el.querySelector('.skill-percent');
            const targetPercent = parseInt(targetWidth);

            // Reset bar and number
            el.style.transition = 'none';
            el.style.width = '0';
            if (percentText) percentText.textContent = '0%';

            // Animate width and number
            requestAnimationFrame(() => {
              requestAnimationFrame(() => {
                el.style.transition = 'width 2.5s ease-in-out';
                el.style.width = targetWidth;

                // Animate the number
                let start = null;
                const duration = 2500;

                function animateNumber(timestamp) {
                  if (!start) start = timestamp;
                  const progress = timestamp - start;
                  const percent = Math.min(Math.round((progress / duration) * targetPercent), targetPercent);
                  if (percentText) percentText.textContent = percent + '%';
                  if (percent < targetPercent) {
                    requestAnimationFrame(animateNumber);
                  }
                }

                requestAnimationFrame(animateNumber);
              });
            });

            observer.unobserve(el);
          }
        });
      }, {
        threshold: 0.4
      });

      bars.forEach(bar => {
        observer.observe(bar);
      });
    });
  </script>






  </body>
</html>