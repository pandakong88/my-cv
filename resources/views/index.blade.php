<!doctype html>
<html lang="en">
  <head>
    <title>Unfold &mdash; A onepage portfolio HTML template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="keywords" content="html, css, javascript, jquery">
    <meta name="author" content="">

    
    <link rel="stylesheet" href= {{ asset("assets/css/vendor/icomoon/style.css") }}>
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/jquery.fancybox.min.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">



    <!-- Theme Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> 

  </head>
  <body data-spy="scroll" data-target=".site-nav-target" data-offset="200">

    <nav class="unslate_co--site-mobile-menu">
      <div class="close-wrap d-flex">
        <a href="#" class="d-flex ml-auto js-menu-toggle">
          <span class="close-label">Close</span>
          <div class="close-times">
            <span class="bar1"></span>
            <span class="bar2"></span>
          </div>
        </a>
      </div>
      <div class="site-mobile-inner"></div>
    </nav>


    <div class="unslate_co--site-wrap">

      <div class="unslate_co--site-inner">

        <div class="lines-wrap">
          <div class="lines-inner">
            <div class="lines"></div>
          </div>
        </div>
        <!-- END lines -->
      
      <nav class="unslate_co--site-nav site-nav-target">

        <div class="container">
        
          <div class="row align-items-center justify-content-between text-left">
            <div class="col-md-5 text-right">
              <ul class="site-nav-ul js-clone-nav text-left d-none d-lg-inline-block">
                <li class="has-children">
                  <a href="#home-section" class="nav-link">Home</a>
                  <ul class="dropdown">
                    <li>
                      <a href="index.html">Hero Image BG</a>
                    </li>
                    <li>
                      <a href="index-video.html">Video BG</a>
                    </li>
                    <li>
                      <a href="index-hero-slider.html">Hero Slider</a>
                    </li>
                    <li>
                      <a href="index-sidebar-menu.html">Sidebar Menu</a>
                    </li>
                    <li>
                      <a href="index-right-menu.html">Right Menu</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#portfolio-section" class="nav-link">Portfolio</a></li>
                <li><a href="#about-section" class="nav-link">About</a></li>
                <li><a href="#services-section" class="nav-link">Services</a></li>
              </ul>
            </div>
            <div class="site-logo pos-absolute">
              <a href="index.html" class="unslate_co--site-logo">Unfold<span>.</span></a>
            </div>
            <div class="col-md-5 text-right text-lg-left">
              <ul class="site-nav-ul js-clone-nav text-left d-none d-lg-inline-block">
                <li><a href="#skills-section" class="nav-link">Skills</a></li>
                <li><a href="#testimonial-section" class="nav-link">Testimonial</a></li>
                <li><a href="#journal-section" class="nav-link">Journal</a></li>
                <li><a href="#contact-section" class="nav-link">Contact</a></li>
              </ul>

              <ul class="site-nav-ul-none-onepage text-right d-inline-block d-lg-none">
                <li><a href="#" class="js-menu-toggle">Menu</a></li>
              </ul>

            </div>
          </div>
        </div>

      </nav>
      <!-- END nav -->

      <div class="cover-v1 jarallax" style="background-image: url('{{ asset('assets/images/cover_bg_2.jpg') }}');" id="home-section">
        <div class="container">
          <div class="row align-items-center">
              
            <div class="col-md-7 mx-auto text-center">
              <h1 class="heading gsap-reveal-hero">Arjunanda</h1>
              <h2 class="subheading gsap-reveal-hero">Programmer muda dengan semangat inovasi, siap berkarya dan berkembang di dunia teknologi.</h2>
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

            {{-- <div class="d-flex align-items-center mb-4 gsap-reveal gsap-reveal-filter">
              <h2 class="mr-auto heading-h2"><span class="gsap-reveal">Portfolio</span></h2>

              <a href="#" class="text-white js-filter d-inline-block d-lg-none">Filter</a>
              
              <div class="filter-wrap">
                <div class="filter ml-auto" id="filters">
                  <a href="#" class="active" data-filter="*">All</a>
                  <a href="#" data-filter=".web">Web</a>
                  <a href="#" data-filter=".branding">Branding</a>
                  <a href="#" data-filter=".illustration">Illustration</a>
                  <a href="#" data-filter=".packaging">Packaging</a>
                </div>
              </div>
            </div> --}}


            
            <div id="posts" class="row gutter-isotope-item">
              <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
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
              </div>
              <div class="item branding packaging illustration col-sm-6 col-md-6 col-lg-4 isotope-mb-2 ">
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
              </div>

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
                 <img src="{{ asset('assets/images/about_me_pic2.jpg') }}" alt="Image" class="img-fluid">
              </figure>
            </div>
            <div class="col-lg-4 pr-lg-5">
              <h3 class="mb-4 heading-h3"><span class="gsap-reveal">Crafting code, shaping ideas</span></h3>
              <p class="lead gsap-reveal">Saya adalah lulusan Sistem Informasi dengan ketertarikan tinggi pada web development dan solusi digital berbasis Laravel & CodeIgniter.</p>
              <p class="mb-4 gsap-reveal">Berpengalaman membangun website fungsional menggunakan PHP, JavaScript, serta memahami OOP, integrasi API, dan testing. Selalu siap belajar, beradaptasi, dan tumbuh bersama teknologi.</p>
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
          
          <!-- Web Development -->
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="feature-v1" data-aos="fade-up" data-aos-delay="0">
              <div class="wrap-icon mb-3">
                <img src="{{ asset('assets/images/svg/004-percentage.svg') }}" alt="Image" width="45">
              </div>
              <h3>Web <br> Development</h3>
              <p>Membangun website dinamis dan responsif menggunakan HTML, CSS, JavaScript, dan framework PHP seperti Laravel & CI.</p>
            </div> 
          </div>

          <!-- Sistem Informasi -->
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="feature-v1" data-aos="fade-up" data-aos-delay="100">
              <div class="wrap-icon mb-3">
                <img src="{{ asset('assets/images/svg/001-options.svg') }}" alt="Image" width="45">
              </div>
              <h3>Sistem <br> Informasi</h3>
              <p>Perancangan dan implementasi sistem informasi berbasis web untuk mendukung operasional bisnis dan organisasi.</p>
            </div> 
          </div>

          <!-- Data Analysis -->
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="feature-v1" data-aos="fade-up" data-aos-delay="200">
              <div class="wrap-icon mb-3">
                <img src="{{ asset('assets/images/svg/005-line-chart.svg') }}" alt="Image" width="45">
              </div>
              <h3>Data Analysis <br> & Reporting</h3>
              <p>Mengolah dan menganalisis data untuk menghasilkan laporan dan insight yang berguna bagi pengambilan keputusan.</p>
            </div> 
          </div>

          <!-- Android app -->
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="feature-v1" data-aos="fade-up" data-aos-delay="200">
              <div class="wrap-icon mb-3">
                <img src="{{ asset('assets/images/svg/003-contact-book.svg') }}" alt="Image" width="45">
              </div>
              <h3>Android App <br> (Pemula)</h3>
              <p>Pembuatan aplikasi Android sederhana untuk kebutuhan seperti input data, demo sistem, atau kalkulasi ringan.</p>
            </div> 
          </div>

          <!-- Database -->
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="feature-v1" data-aos="fade-up" data-aos-delay="0">
              <div class="wrap-icon mb-3">
                <img src="{{ asset('assets/images/svg/database.svg') }}" alt="Image" width="45">
              </div>
              <h3>Database <br> Management</h3>
              <p>Perancangan, optimasi, dan manajemen database menggunakan MySQL, PostgreSQL, hingga integrasi ke aplikasi web.</p>
            </div> 
          </div>

          <!-- Scrum -->
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="feature-v1" data-aos="fade-up" data-aos-delay="100">
              <div class="wrap-icon mb-3">
                <img src="{{ asset('assets/images/svg/srum.svg') }}" alt="Image" width="45">
              </div>
              <h3>Agile & <br> Scrum</h3>
              <p>Pengalaman kerja dengan metode Scrum, termasuk sprint planning, stand-up meeting, dan kolaborasi tim.</p>
            </div> 
          </div>

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
            <div class="col-md-6 mb-4">
              <h5>HTML </h5>
              <div class="progress">
                <div class="progress-bar bg-primary" data-aos="fade-right" data-width="100%" style="width: 0">
                <span class="skill-percent">0%</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-4">
              <h5>CSS</h5>
              <div class="progress">
                <div class="progress-bar bg-primary" data-aos="fade-right" data-width="10%" style="width: 0">
                <span class="skill-percent">0%</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-4">
              <h5>JavaScript </h5>
              <div class="progress">
                <div class="progress-bar bg-primary" data-aos="fade-right"  data-width="75%" style="width: 0">
                <span class="skill-percent">0%</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-4">
              <h5>PHP </h5>
              <div class="progress">
                <div class="progress-bar bg-primary" data-aos="fade-right"  data-width="80%" style="width: 0">
                <span class="skill-percent">0%</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-4">
              <h5>WordPress/CMS </h5>
              <div class="progress">
                <div class="progress-bar bg-primary" data-aos="fade-right"  data-width="90%" style="width: 0">
                <span class="skill-percent">0%</span></div>
              </div>
            </div>
            <div class="col-md-6 mb-4">
              <h5>Photoshop </h5>
              <div class="progress">
                <div class="progress-bar bg-primary" data-aos="fade-right"  data-width="55%"style="width: 0">
                <span class="skill-percent">0%</span>
                </div>
              </div>
            </div>
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

      <div class="unslate_co--section" id="testimonial-section">
        <div class="container">
          <div class="section-heading-wrap text-center mb-5">
            <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">My Happy Clients</span></h2>
            <span class="gsap-reveal"> <img src="{{ asset('assets/images/divider.png') }}" alt="divider" width="76"></span>
          </div>
        </div>

        <div class="owl-carousel testimonial-slider" data-aos="fade-up">
          <div>
            <div class="testimonial-v1">
              <div class="testimonial-inner-bg">
                <span class="quote">&ldquo;</span>
                <blockquote>
                  Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                </blockquote>
              </div>
              
              <div class="testimonial-author-info">
                 <img src="{{ asset('assets/images/person_man_1.jpg') }}" alt="Image">
                <h3>Eric Ingram</h3>
                <span class="d-block position">Product Designer @facebook</span>
              </div>

            </div>
          </div>
          <div>
            <div class="testimonial-v1">
              <div class="testimonial-inner-bg">
                <span class="quote">&ldquo;</span>
                <blockquote>
                  Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                </blockquote>
              </div>
              
              <div class="testimonial-author-info">
                 <img src="{{ asset('assets/images/person_man_2.jpg') }}" alt="Image">
                <h3>Ryan Mullins</h3>
                <span class="d-block position">Product Designer @Shopify</span>
              </div>

            </div>
          </div>
          <div>
            <div class="testimonial-v1">
              <div class="testimonial-inner-bg">
                <span class="quote">&ldquo;</span>
                <blockquote>
                  Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                </blockquote>
              </div>
              
              <div class="testimonial-author-info">
                 <img src="{{ asset('assets/images/person_woman_1.jpg') }}" alt="Image">
                <h3>Erica Miller</h3>
                <span class="d-block position">Product Designer @Twitter</span>
              </div>

            </div>
          </div>
        </div>

      </div>
      <!-- END testimonial -->

      <div class="unslate_co--section" id="journal-section">
        <div class="container">
          <div class="section-heading-wrap text-center mb-5">
            <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">My Journal</span></h2>
            <span class="gsap-reveal"> <img src="{{ asset('assets/images/divider.png') }}" alt="divider" width="76"></span>
          </div>

          
          <div class="row gutter-v4 align-items-stretch">
            <div class="col-sm-6 col-md-6 col-lg-8 blog-post-entry" data-aos="fade-up" data-aos-delay="0">

              <a href="blog-single.html" class="grid-item blog-item w-100 h-100">
                <div class="overlay">
                  <div class="portfolio-item-content">
                    <h3>A Mounteering Guide For Beginners</h3>
                    <p class="post-meta">By Joefrey <span class="small">&bullet;</span> 5 mins read</p>
                  </div>
                </div>
                 <img src="{{ asset('assets/images/post_1.jpg') }}" class="lazyload" alt="Image" />
              </a>


            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 blog-post-entry" data-aos="fade-up" data-aos-delay="100">
              <a href="blog-single.html" class="grid-item blog-item w-100 h-100">
                <div class="overlay">
                  <div class="portfolio-item-content">
                    <h3>A Mounteering Guide For Beginners</h3>
                    <p class="post-meta">By Joefrey <span class="small">&bullet;</span> 5 mins read</p>
                  </div>
                </div>
                 <img src="{{ asset('assets/images/post_2.jpg') }}" class="lazyload" alt="Image" />
              </a>
            </div>


            <div class="col-sm-6 col-md-6 col-lg-4 blog-post-entry" data-aos="fade-up" data-aos-delay="0">

              <a href="blog-single.html" class="grid-item blog-item w-100 h-100">
                <div class="overlay">
                  <div class="portfolio-item-content">
                    <h3>A Mounteering Guide For Beginners</h3>
                    <p class="post-meta">By Joefrey <span class="small">&bullet;</span> 5 mins read</p>
                  </div>
                </div>
                 <img src="{{ asset('assets/images/post_3.jpg') }}" class="lazyload" alt="Image" />
              </a>


            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 blog-post-entry" data-aos="fade-up" data-aos-delay="100">
              <a href="blog-single.html" class="grid-item blog-item w-100 h-100">
                <div class="overlay">
                  <div class="portfolio-item-content">
                    <h3>A Mounteering Guide For Beginners</h3>
                    <p class="post-meta">By Joefrey <span class="small">&bullet;</span> 5 mins read</p>
                  </div>
                </div>
                 <img src="{{ asset('assets/images/post_4.jpg') }}" class="lazyload" alt="Image" />
              </a>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-4 blog-post-entry" data-aos="fade-up" data-aos-delay="200">
              <a href="blog-single.html" class="grid-item blog-item w-100 h-100">
                <div class="overlay">
                  <div class="portfolio-item-content">
                    <h3>A Mounteering Guide For Beginners</h3>
                    <p class="post-meta">By Joefrey <span class="small">&bullet;</span> 5 mins read</p>
                  </div>
                </div>
                 <img src="{{ asset('assets/images/post_5.jpg') }}" class="lazyload" alt="Image" />
              </a>
            </div>


          </div>

        </div>
      </div>
      <!-- END blog posts -->


      <div class="unslate_co--section" id="contact-section">
        <div class="container">
          <div class="section-heading-wrap text-center mb-5">
            <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">Get In Touch</span></h2>
            <span class="gsap-reveal"> <img src="{{ asset('assets/images/divider.png') }}" alt="divider" width="76"></span>
          </div>


          <div class="row justify-content-between">
            
            <div class="col-md-6">
              <form method="post" class="form-outline-style-v1" id="contactForm">
                <div class="form-group row mb-0">

                  <div class="col-lg-6 form-group gsap-reveal">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control" id="name">
                  </div>
                  <div class="col-lg-6 form-group gsap-reveal">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" id="email">
                  </div>
                  <div class="col-lg-12 form-group gsap-reveal">
                    <label for="message">Write your message...</label>
                    <textarea name="message" id="message" cols="30" rows="7" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group row gsap-reveal">
                    <div class="col-md-12 d-flex align-items-center">
                      <input type="submit" class="btn btn-outline-pill btn-custom-light mr-3" value="Send Message">
                      <span class="submitting"></span>
                    </div>
                  </div>
              </form>
              <div id="form-message-warning" class="mt-4"></div> 
              <div id="form-message-success">
                Your message was sent, thank you!
              </div>

            </div>

            <div class="col-md-4">
              <div class="contact-info-v1">
                <div class="gsap-reveal d-block">
                  <span class="d-block contact-info-label">Email</span>
                  <a href="#" class="contact-info-val">info@yourdomain.com</a>
                </div>
                <div class="gsap-reveal d-block">
                  <span class="d-block contact-info-label">Phone</span>
                  <a href="#" class="contact-info-val">+12 345 6789 012</a>
                </div>
                <div class="gsap-reveal d-block">
                  <span class="d-block contact-info-label">Address</span>
                  <address class="contact-info-val">273 South Riverview Rd. <br> New York, NY 10011</address>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      </div> <!-- END .unslate_co-site-inner -->

      <footer class="unslate_co--footer unslate_co--section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-7">
              
              <div class="footer-site-logo"><a href="#">Unfold<span>.</span></a></div>

              <ul class="footer-site-social">
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Dribbble</a></li>
                <li><a href="#">Behance</a></li>
              </ul>

            </div>
          </div>
        </div>
      </footer>

      
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