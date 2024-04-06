@extends('main-layout')

@section('title', 'Blog')

@section('content')  
  
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Blog</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry">

              <div class="entry-img">
                <img src="{{asset('assets/imgs/besakih.png')}}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Pura Padharman 
                  Sira Arya Kubontubuh-Kuthawaringin Memang Bukan Di Besakih</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i>I Made Pageh Suardhana</li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time datetime="2020-01-01">3 Maret 2023</time></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                Memang pernah ada (beredar) beberapa tulisan (publikasi) yang menyebutkan adanya Padharman 
                Arya Kubontubuh di kompleks Pura Besakih. Tetapi penelusuran terhadap kebenaran 
                isi tulisan tersebut menghasilkan kesimpulan seperti disajikan dalam uraian berikut
                </p>
                <div class="read-more">
                  <a href="/blog/berita">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->


            <!-- Page blog -->
            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
              </ul>
            </div>
          </div><!-- End blog entries list -->

          <!-- Side bar blog -->
          <div class="col-lg-4">
            <div class="sidebar">
              <h3 class="sidebar-title">Download Laporan</h3>

              <div class="sidebar-item recent-posts">
                <div class="post-laporan">
                  <i class="bi bi-file-earmark-pdf"></i>
                  <div class="post-item clearfix">
                    <h4><a href="assets/docs/PPSAKK Laporan Kegiatan Penataran Pemangku Maret 2021.pdf" download>
                      Laporan PPSAKK Kegiatan Penataran Pemangku Maret 2021</a></h4>
                    <time datetime="2020-01-01">16 Maret 2024</time>
                  </div>
                </div>
                
                <div class="sidebar-item recent-posts">
                  <div class="post-laporan">
                    <i class="bi bi-file-earmark-pdf"></i>
                    <div class="post-item clearfix">
                      <h4><a href="assets/docs/PPSAKK Buku Panduan Karya 2024.pdf">
                      PPSAKK Buku Panduan Karya 2024</a></h4>
                      <time datetime="2020-01-01">16 Maret 2024</time>
                    </div>
                </div>

                <div class="sidebar-item recent-posts">
                  <div class="post-laporan">
                    <i class="bi bi-file-earmark-pdf"></i>
                    <div class="post-item clearfix">
                      <h4><a href="assets/docs/PPSAKK  Penataran Pemangku TANTANGAN.....pdf">
                        PPSAKK  Penataran Pemangku TANTANGAN TERHADAP HINDU BALI</a></h4>
                      <time datetime="2020-01-01">16 Maret 2024</time>
                    </div>
                </div>

                <div class="sidebar-item recent-posts">
                  <div class="post-laporan">
                    <i class="bi bi-file-earmark-pdf"></i>
                    <div class="post-item clearfix">
                      <h4><a href="assets/docs/PPSAKK Laporan Kegiatan Restorasi .pdf">
                        PPSAKK Laporan Kegiatan Restorasi </a></h4>
                      <time datetime="2020-01-01">16 Maret 2024</time>
                    </div>
                </div>

              </div><!-- End sidebar recent posts-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
  @endsection('content') 