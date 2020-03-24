@extends('layouts.app')

@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">
          <img class="" src="{{ asset('imperial/assets/img/logo.png')}}" width="400px" alt="">
        </div>

        <h1>Welcome to Agenprops</h1>
        <h2>Kita membantu and dalam mencari properti yang cocok buat anda</h2>
        <div class="actions">
          <a href="#about" class="btn-services">Get Started</a>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href=""><img src="{{ asset('imperial/assets/img/logo.png')}}" width="200px" alt=""></a>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Header 1</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#properties">Properties</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#blogs">Blogs</a></li>
          <li><a href="#agent">Agent</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header><!-- End Header -->


  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">About Us</h3>
            <div class="section-title-divider"></div>
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</p>
          </div>
        </div>
      </div>
      <div class="container about-container wow fadeInUp">
        <div class="row">

          <div class="col-lg-6 about-img">
            <img src="{{ asset('imperial/assets/img/about-img.jpg')}}" alt="">
          </div>

          <div class="col-md-6 about-content">
            <h2 class="about-title">We provide great services and ideass</h2>
            <p class="about-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
              in reprehenderit in voluptate
            </p>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

        <!-- ======= Properties Section ======= -->
        <section id="properties">
          <div class="container wow fadeInUp">
            <div class="row">
              <div class="col-md-12">
                <h3>Properties</h3>
                <div class="section-title-divider"></div>
                <p class="section-description">Si stante, hoc natura videlicet vult, salvam esse se, quod concedimus ses haec dicturum fuisse</p>
              </div>
            </div>
    
            <div class="row">
              <div class="col-md-3">
                <a class="properties-item venobox" style="background-image: url({{ asset('imperial/assets/img/portfolio-1.jpg')}});" href="{{ asset('imperial/assets/img/portfolio-1.jpg')}}" data-gall="portfolioGallery">
                  <div class="details">
                    <h4>Properties</h4>
                    <span>Alored dono par</span>
                  </div>
                </a>
              </div>
    
              <div class="col-md-3">
                <a class="properties-item venobox" style="background-image: url({{ asset('imperial/assets/img/portfolio-2.jpg')}});" href="{{ asset('imperial/assets/img/portfolio-2.jpg')}}" data-gall="portfolioGallery">
                  <div class="details">
                    <h4>Properties</h4>
                    <span>Alored dono par</span>
                  </div>
                </a>
              </div>
    
              <div class="col-md-3">
                <a class="properties-item venobox" style="background-image: url({{ asset('imperial/assets/img/portfolio-3.jpg')}});" href="{{ asset('imperial/assets/img/portfolio-3.jpg')}}" data-gall="portfolioGallery">
                  <div class="details">
                    <h4>Properties</h4>
                    <span>Alored dono par</span>
                  </div>
                </a>
              </div>
    
              <div class="col-md-3">
                <a class="properties-item venobox" style="background-image: url({{ asset('imperial/assets/img/portfolio-4.jpg')}});" href="{{ asset('imperial/assets/img/portfolio-4.jpg')}}" data-gall="portfolioGallery">
                  <div class="details">
                    <h4>Properties</h4>
                    <span>Alored dono par</span>
                  </div>
                </a>
              </div>
    
              <div class="col-md-3">
                <a class="properties-item venobox" style="background-image: url({{ asset('imperial/assets/img/portfolio-5.jpg')}});" href="{{ asset('imperial/assets/img/portfolio-5.jpg')}}" data-gall="portfolioGallery">
                  <div class="details">
                    <h4>Properties</h4>
                    <span>Alored dono par</span>
                  </div>
                </a>
              </div>
    
              <div class="col-md-3">
                <a class="properties-item venobox" style="background-image: url({{ asset('imperial/assets/img/portfolio-6.jpg')}});" href="{{ asset('imperial/assets/img/portfolio-6.jpg')}}" data-gall="portfolioGallery">
                  <div class="details">
                    <h4>Properties</h4>
                    <span>Alored dono par</span>
                  </div>
                </a>
              </div>
    
              <div class="col-md-3">
                <a class="properties-item venobox" style="background-image: url({{ asset('imperial/assets/img/portfolio-7.jpg')}});" href="{{ asset('imperial/assets/img/portfolio-7.jpg')}}" data-gall="portfolioGallery">
                  <div class="details">
                    <h4>Properties</h4>
                    <span>Alored dono par</span>
                  </div>
                </a>
              </div>
    
              <div class="col-md-3">
                <a class="properties-item venobox" style="background-image: url({{ asset('imperial/assets/img/portfolio-8.jpg')}});" href="{{ asset('imperial/assets/img/portfolio-8.jpg')}}" data-gall="portfolioGallery">
                  <div class="details">
                    <h4>Properties</h4>
                    <span>Alored dono par</span>
                  </div>
                </a>
              </div>
    
            </div>
          </div>
        </section><!-- End Properties Section -->

         <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Our Services</h3>
            <div class="section-title-divider"></div>
            <p class="section-description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 service-item">
            <div class="service-icon"><i class="fa fa-desktop"></i></div>
            <h4 class="service-title"><a href="">Lorem Ipsum</a></h4>
            <p class="service-description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
          <div class="col-md-4 service-item">
            <div class="service-icon"><i class="fa fa-bar-chart"></i></div>
            <h4 class="service-title"><a href="">Dolor Sitema</a></h4>
            <p class="service-description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-md-4 service-item">
            <div class="service-icon"><i class="fa fa-paper-plane"></i></div>
            <h4 class="service-title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="service-description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
          <div class="col-md-4 service-item">
            <div class="service-icon"><i class="fa fa-photo"></i></div>
            <h4 class="service-title"><a href="">Magni Dolores</a></h4>
            <p class="service-description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
          <div class="col-md-4 service-item">
            <div class="service-icon"><i class="fa fa-road"></i></div>
            <h4 class="service-title"><a href="">Nemo Enim</a></h4>
            <p class="service-description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-md-4 service-item">
            <div class="service-icon"><i class="fa fa-shopping-bag"></i></div>
            <h4 class="service-title"><a href="">Eiusmod Tempor</a></h4>
            <p class="service-description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Blogs Section ======= -->
    <section id="blogs">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Blogs</h3>
            <div class="section-title-divider"></div>
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <div class="blog-item">
              <div class="pic"><img src="{{ asset('imperial/assets/img/team-1.jpg')}}" alt=""></div>
              <h4>Walter White</h4>
              <span>Category</span>
            </div>
          </div>

          <div class="col-md-3">
            <div class="blog-item">
              <div class="pic"><img src="{{ asset('imperial/assets/img/team-2.jpg')}}" alt=""></div>
              <h4>Sarah Jhinson</h4>
              <span>Category</span>
            </div>
          </div>

          <div class="col-md-3">
            <div class="blog-item">
              <div class="pic"><img src="{{ asset('imperial/assets/img/team-3.jpg')}}" alt=""></div>
              <h4>William Anderson</h4>
              <span>Category</span>
            </div>
          </div>

          <div class="col-md-3">
            <div class="blog-item">
              <div class="pic"><img src="{{ asset('imperial/assets/img/team-4.jpg')}}" alt=""></div>
              <h4>Amanda Jepson</h4>
              <span>Category</span>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Blogs Section -->

    <!-- ======= Subscrbe Section ======= -->
    <section id="subscribe">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-8">
            <h3 class="subscribe-title">Subscribe For Updates</h3>
            <p class="subscribe-text">Join our 1000+ subscribers and get access to the latest tools, freebies, product announcements and much more!</p>
          </div>
          <div class="col-md-4 subscribe-btn-container">
            <a class="subscribe-btn" href="#">Subscribe Now</a>
          </div>
        </div>
      </div>
    </section><!-- End Subscrbe Section -->

        <!-- ======= Agents Section ======= -->
        <section id="agents">
          <div class="container wow fadeInUp">
            <div class="row">
              @foreach ($agents as $agent)
                  
              <div class="col-md-12">
                <h3 class="section-title">Agents</h3>
                <div class="section-title-divider"></div>
                <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
              </div>
            </div>
    
            <div class="row">
              <div class="col-md-3">
                <div class="member">
                  <div class="pic"><img src="{{ asset('imperial/assets/img/team-1.jpg')}}" alt=""></div>
                <h4>{{ $agent->name }}</h4>
                  <span>Category</span>
                  <div class="social">
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-phone"></i></a>
                  </div>
                </div>
              </div>
              
              <div class="col-md-3">
                <div class="member">
                  <div class="pic"><img src="{{ asset('imperial/assets/img/team-2.jpg')}}" alt=""></div>
                  <h4>Sarah Jhinson</h4>
                  <span>Category</span>
                  <div class="social">
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-phone"></i></a>
                  </div>
                </div>
              </div>
    
              <div class="col-md-3">
                <div class="member">
                  <div class="pic"><img src="{{ asset('imperial/assets/img/team-3.jpg')}}" alt=""></div>
                  <h4>William Anderson</h4>
                  <span>Category</span>
                  <div class="social">
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-phone"></i></a>
                  </div>
                </div>
              </div>
              
              <div class="col-md-3">
                <div class="member">
                  <div class="pic"><img src="{{ asset('imperial/assets/img/team-4.jpg')}}" alt=""></div>
                  <h4></h4>
                  <span>Category</span>
                  <div class="social">
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-phone"></i></a>
                  </div>
                </div>
              </div>
              @endforeach
              
            </div>
          </div>
        </section><!-- End Agents Section -->
        
    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Contact Us</h3>
            <div class="section-title-divider"></div>
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
              <p></p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>info@example.com</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validate"></div>
                </div>
                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>Agentprops</strong>. All Rights Reserved
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
@endsection
{{-- <div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif --}}