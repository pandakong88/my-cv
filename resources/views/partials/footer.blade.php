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