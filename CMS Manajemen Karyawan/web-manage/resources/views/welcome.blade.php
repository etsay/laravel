<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <title>Landing Page Manajemen Karyawan</title>
</head>
<body>

<!-- Header Section -->
<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="{{ url('/') }}"><img src="img/logo.jpg" alt="Logo" height="60"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}" style="background-color: #808080; color: #fff;">Login</a>
              </li>
          </ul>
      </div>
  </nav>
</header>

  

<!-- Hero Section -->
<section class="jumbotron text-center" style="background-image: url('{{ asset('img/herobg.jpg') }}'); background-size: cover; background-position: center; color: #000000;">
    <div class="container" style="background-color: rgba(255, 255, 255, 0.7); padding: 20px; border-radius: 10px;" data-aos="zoom-in"  data-aos-duration="3000">
      <h1 class="display-4 font-weight-bold">Sistem Manajemen Karyawan</h1>
      <p class="lead">Kelola data karyawan dengan mudah dan efisien.</p>
      <a class="btn btn-primary btn-lg" href="#hiring" role="button">Daftar Karyawan</a>
    </div>
</section>

  

<!-- About Section -->
<section class="container my-5">
    <div class="text-center">
      <h2 class="display-4">Tentang Kami</h2>
      <p class="lead">Kami adalah tim yang berkomitmen untuk menyediakan solusi terbaik dalam manajemen karyawan. 
        Dengan platform kami, Anda dapat dengan mudah dan efisien mengelola data karyawan, memantau kinerja, 
        dan menjalin kolaborasi yang kuat di dalam tim. Kami percaya bahwa keberhasilan perusahaan dimulai dari 
        manajemen karyawan yang baik. Bergabunglah dengan kami dan tingkatkan produktivitas serta kepuasan tim Anda.</p>
    </div>
</section>



<!-- Hiring Section -->
<section class="container my-5" id="hiring" data-aos="zoom-in"  data-aos-duration="1500">
    <div class="row">
      <!-- Kolom Pertama (Banner) -->
      <div class="col-md-6">
        <img src="img/hiring.jpg" alt="Banner" class="img-fluid">
      </div>
  
      <!-- Kolom Kedua (Text Heading, Jargon, CTA Link Daftar) -->
      <div class="col-md-6">
        <div class="jumbotron text-center">
          <h2 class="display-4">Bergabung Bersama Kami!</h2>
          <p class="lead">Temukan peluang karier yang menarik bersama tim kami.</p>
          <p>Jargon atau tagline menarik tentang kesempatan bekerja di perusahaanmu.</p>
          <a class="btn btn-primary btn-lg" href="{{ route('registration.form') }}" role="button">Daftar Sekarang</a>
        </div>
      </div>
    </div>
  </section>
  

<!-- QnA Section -->
<section class="container my-5" data-aos="zoom-in"  data-aos-duration="1500">
    <h2 class="text-center">Pertanyaan Umum</h2>
  
    <div class="accordion" id="qnaAccordion">
      <!-- Pertanyaan 1 -->
      <div class="card">
        <div class="card-header" id="qnaHeading1">
          <h5 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#qnaCollapse1" aria-expanded="true" aria-controls="qnaCollapse1">
              Apa keuntungan bergabung dengan perusahaan kami?
            </button>
          </h5>
        </div>
  
        <div id="qnaCollapse1" class="collapse show" aria-labelledby="qnaHeading1" data-parent="#qnaAccordion">
          <div class="card-body">
            Bergabung dengan perusahaan kami memberikan peluang pengembangan, lingkungan kerja yang mendukung, dan nilai-nilai etika kerja tinggi. Kamu akan menjadi bagian dari tim inovatif yang fokus pada pencapaian tujuan bersama.
          </div>
        </div>
      </div>
  
      <!-- Pertanyaan 2 -->
      <div class="card">
        <div class="card-header" id="qnaHeading2">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#qnaCollapse2" aria-expanded="false" aria-controls="qnaCollapse2">
              Bagaimana saya bisa melamar pekerjaan di perusahaan ini?
            </button>
          </h5>
        </div>
        <div id="qnaCollapse2" class="collapse" aria-labelledby="qnaHeading2" data-parent="#qnaAccordion">
          <div class="card-body"> 
            Temukan lowongan di situs web perusahaan, ikuti petunjuk pendaftaran, dan kirim aplikasi dengan resume. Semoga sukses!
          </div>
        </div>
      </div>
  
      <!-- Tambahkan pertanyaan dan jawaban sesuai kebutuhan -->
    </div>
  </section>

<!-- Footer Section -->
<footer class="bg-dark text-light text-center py-3">
    <div class="container">
      <!-- Logo -->
      <img src="img/logo.jpeg" alt="Footer Logo" height="60" class="mb-3">
      <!-- Ubah nilai height sesuai dengan kebutuhan -->

      <!-- Social Media Icons -->
      <div class="social-media-icons mb-3">
        <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
        <!-- Tambahkan ikon media sosial lainnya sesuai kebutuhan -->
      </div>
  
      <!-- Quick Links -->
      <div class="quick-links mb-3">
        <a href="#">Tentang Kami</a> | <a href="#">Kebijakan Privasi</a> | <a href="#">Hubungi Kami</a>
        <!-- Tambahkan tautan cepat lainnya sesuai kebutuhan -->
      </div>
  
      <!-- Alamat -->
      <p class="mb-3">Jalan Contoh No. 123, Kota Kamu, Indonesia</p>
  
      <!-- Copyright -->
      <p>&copy; 2024 Nama Perusahaan. All rights reserved.</p>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>
