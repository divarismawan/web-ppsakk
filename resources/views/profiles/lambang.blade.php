@extends('main-layout')

@section('title', 'Arti Lambang')

@section('content')

<main id="profiles" class="w3-animate-fading">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Arti Lambang PPSAKK</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Profile</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->

    <section id="profiles-ppsakk" class="arti-lambang">
      <img src="{{asset('assets/imgs/logo.png')}}" alt="" class="animate__animated zoom-in img-fluid">
      <h2 class="judul"><b>MAKNA LAMBANG PADA LOGO PPSAKK</b></h2>
      <p>PPSAKK memiliki LOGO dengan warna dasar Kuning emas, 
        berbentuk delapan padma dengan tujuh buah tombak. Di salah satu ruas 
        ujung bunga padma paling bawah menyembul gambar kepala Harimau 
        Hitam, di bagian tengah logo terdapat empat pohon kelapa berwarna 
        hijau. Masing-masing lambang ada maknanya</p>
      <div class="detail-arti">
        <p>(a) Warna Kuning lambang kesucian, bisa dimaknai bahwa setiap 
          semeton PPSAKK hendaknya memiliki fikiran yang jernih, tutur kata 
          yang sopan dan prilaku yang santun agar mencapai kebahagiaan dalam 
          rangka ngaturang ayah, baik sebagai krama maupun pengurus 
          (Pengurus Pusat maupun Pengempon Pura)</p>
        <p>(b) Bunga Padma berjumlah delapan (8) melambangkan asta dala 
          yaitu delapan mata angin, dimaknai bahwa warga kita sudah menyebar 
          ke seluruh penjuru dengan harapan semoga kebahagiaan, kebaikan, 
          kesejahteraan, ketenangan hidup datang dari semua arah yang ada di 
          dunia (baik micro maupun macro cosmos)</p>
        <p>(c) Pohon kelapa berjumlah empat (4) melambangkan bahwa Sirarya 
          Kuthawaringin berputra empat (1) Kyayi Klapodiyana/Kyayi 
          Kubontubuh; (2) Kyayi Parembu; (3) Kyayi Candi dan (4) I Gusti Ayu 
          Waringin</p>
        <p>(d) Tombak berjumlah tujuh melambangkan sapta (7) Arya yang 
          menyertai ekspedisi Maha Patih Gadjah Mada ke Bali dari Keraton 
          Madjapahit. Salah seorang Arya adalah Sirarya Kuthawaringin yang 
          merupakan Lelangit sameton PPSAKK.</p>
        <p>(e) Gambar kepala Macam Selem adalah lambang petulangan 
          Pratisentana Sira Arya Kubontubuh-Kuthawaringin sewaktu 
          mengadakan upacara atiwa-tiwa. Penggunaan Petulangan Macan
          Selem ini adalah anugerah Dalem sewaktu Kyayi Klapodiyana berhasil 
          membunuh harimau hitam di Blambangan Jawa Timur. </p>
      </div>
    </section>
</main>

@endsection('content')