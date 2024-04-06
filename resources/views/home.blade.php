@extends('main-layout')

@section('title', 'Beranda')

@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
        <div class="carousel-item active">
        <div class="blury-backgorund bg-img" style="background-image: url('assets/imgs/besakih.png')"></div>
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">PASEMETONAN PRATISENTANA</h2>
              <h2 class="animate__animated animate__fadeInDown">SIRA ARYA KUBONTUBUH-KUTHAWARINGIN</h2>
              <p class="animate__animated animate__fadeInUp"> Situs ini bertujuan untuk menyediakan informasi yang mendalam tentang warisan budaya dan nilai-nilai Kawitan yang dijunjung tinggi, dengan tujuan untuk mendidik dan menginspirasi.</p>
              <!-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> -->
            </div>
          </div>
        </div>


      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Service / Berita Section ======= -->
    <section id="services" class="services">
      
      <div class="container">
        <div class="row">
          <h2>Post Terbaru</h2>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <h4><a>Laporan PPSAKK Kegiatan Penataran Pemangku Maret 2021</a></h4>
              <p>Kami berterima kasih kepada Ida Sanghyang Widi Wasa dan Ida Betara Betari atas terselenggaranya Penataran Pemangku dan Srati PPSAKK dengan lancar. 
                Dokumen laporan kegiatan ini penting untuk pengembangan Mental Spiritual, 
                kami berharap dapat memberikan manfaat dan penguatan kapasitas kepada pemangku dan srati. 
                Terima kasih kepada semua pihak yang telah berkontribusi, dan mohon maaf atas segala kekurangan yang ada.</p>
                <a href="assets/docs/PPSAKK Laporan Kegiatan Penataran Pemangku Maret 2021.pdf" download>
                  <p>Download</p>
                </a>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <h4><a> Laporan PPSAKK Kegiatan Restorasi </a></h4>
              <p>Restorasi pelinggih dilakukan untuk menyesuaikan dengan perluasan palemahan di mandala utama Pura Dalem Tugu, 
                dengan tujuan mempertahankan nilai estetika serta sejarahnya. Pembangunan balé Paselang dan 
                balé Pawédan dilakukan untuk melengkapi struktur Pura sesuai tata titi pembangunan dan kebutuhan Pura Kawitan Pedharman. 
                Rencana pamralinaan terhadap sebuah Padma dan petunjuk terkait upacara serta program donor darah juga menjadi 
                bagian dari rencana restorasi ini, dengan petunjuk yang diharapkan dari Ida Pedanda.</p>
                <a href="assets/docs/PPSAKK Laporan Kegiatan Restorasi .pdf">
                  <p>Download</p>
                </a>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <h4><a href="#">PPSAKK Pedharman tidak mesti di Besakih</a></h4>
              <p>
                Hasil penelusuran menunjukkan bahwa informasi mengenai keberadaan Padharman Arya Kubontubuh di kompleks Pura Besakih tidak sepenuhnya tepat. 
                Sejumlah sumber menegaskan bahwa Padharman tersebut sebenarnya tidak ada di Besakih, melainkan di Pura Dalem Tugu, Gelgel, Klungkung. 
                Berdasarkan penelitian dari berbagai sumber, termasuk PPSAKK Pusat, disimpulkan bahwa Padharman Arya Kubontubuh tidak terdapat di kompleks Pura Besakih. 
                Oleh karena itu, Pura Dalem Tugu di Gelgel, Klungkung, diakui sebagai Pura Kawitan Padharman Sira Arya Kubontubuh-Kuthawaringin.</p>
                <a href="assets/docs/PPSAKK Pedharman tidak mesti di Besakih.pdf" download>
                  <p>Download</p>
                </a>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <h4><a href="#">PPSAKK Penataran Pemangku Sasananing Pemangku</a></h4>
              <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
              <a href="assets/docs/PPSAKK Penataran Pemangku Sasananing Pemangku.pdf">
                <p>Download</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->
    
    <!-- ======= Dokumentasi Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <h2>Dokumentasi</h2>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/imgs/dokumentasi/IMG_8707.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/imgs/dokumentasi/IMG_8707.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/imgs/dokumentasi/IMG_8728.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/imgs/dokumentasi/IMG_8728.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/imgs/dokumentasi/IMG_8770.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/imgs/dokumentasi/IMG_8770.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
              </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/imgs/dokumentasi/IMG_8808.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/imgs/dokumentasi/IMG_8808.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                 </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/imgs/dokumentasi/IMG_8770.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/imgs/dokumentasi/IMG_8770.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                  </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/imgs/dokumentasi/IMG_8755.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/imgs/dokumentasi/IMG_8755.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                  </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/imgs/dokumentasi/IMG_8836.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/imgs/dokumentasi/IMG_8836.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                 </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/imgs/dokumentasi/IMG_8856.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/imgs/dokumentasi/IMG_8856.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                  </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- End Dokumentasi Section -->

  </main><!-- End #main -->
  @endsection