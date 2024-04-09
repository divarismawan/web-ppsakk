<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PPSAKK | @yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="assets/imgs/logo.png" rel="apple-touch-icon">
  <link href="assets/imgs/logo.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  
  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendors/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendors/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendors/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendors/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendors/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendors/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendors/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <link href="{{asset('assets/fullcalendar/packages/core/main.css')}}" rel='stylesheet' />
  <link href="{{asset('assets/fullcalendar/packages/daygrid/main.css')}}" rel='stylesheet' />

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  

</head>

<body>
  <header id="header" class="fixed-top d-flex align-items-center bs-dark">
      <div class="container d-flex align-items-center">
        <a href="/"><img class="logo-ppsakk" src="{{asset('assets/imgs/logo.png')}}"></a>
        <h1 class="logo me-auto"><a href="/">PPSAKK</a></h1>
        <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

              <div class="offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="navbarOffcanvasLgLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">PPSAKK</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                    <div class="offcanvas-body">
                      <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                          <a class="nav-link" aria-current="page" href="/">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="/maintenance" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                          </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/sejarah">Sejarah</a></li>
                            <li><a class="dropdown-item" href="/arti-lambang">Arti Lambang</a></li>
                            <!-- <li><a class="dropdown-item" href="/maintenance">Kepengurusan</a></li> -->
                            <li>
                            </li>
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/blog">Blog</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/maintenance">Album</a>
                        </li>
                        
                        <li><a href="/calendar" class="getstarted">Kalender</a></li>
                      </ul>
                    </div>
                  </div>
              </div>
          </nav>
      </div>
  </header>
  <!-- ======= Navbar ======= -->
  @yield('content')
 
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          
            <div class="col-lg-5 col-md-6 footer-links">
              <div class="google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31562.615077276656!2d115.39123835022775!3d-8.564532954672543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd213dadcc8906d%3A0x5030bfbca832220!2sGelgel%2C%20Klungkung%2C%20Klungkung%20Regency%2C%20Bali%2C%20Indonesia!5e0!3m2!1sen!2sus!4v1710214427742!5m2!1sen!2sus" 
                width="100%" height="240" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>

            <div class="col-lg-7 col-md-6">
              <div class="footer-info">
                <h3>PPSAKK</h3>
                <p>
                  Gelgel, Klungkung <br><br>
                  <strong>Phone:</strong> +1 5589 55488 55<br>
                  <strong>Email:</strong>ketutmertha1946@gmail.com<br>
                </p>
                <div class="social-links mt-3">
                  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                  <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendors/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendors/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendors/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendors/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('assets/vendors/php-email-form/validate.js')}}"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

  <script src='assets/fullcalendar/packages/core/main.js'></script>
  <script src='assets/fullcalendar/packages/interaction/main.js'></script>
  <script src='assets/fullcalendar/packages/daygrid/main.js'></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  </body>
</html>