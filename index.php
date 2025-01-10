<!DOCTYPE html>
<html lang="en">

<head>
  <title>Hubungi Kami</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <link href="assets/css/styles.css" rel="stylesheet" />

  <script src="https://www.google.com/recaptcha/api.js"></script>
  <script>
    function enableSubmitBtn() {
      console.log("enable")
      document.getElementById("mySubmitBtn").disabled = false;
    }
  </script>
</head>

<body>
    <?php
    include 'header.php';
    ?>
    <!-- Bagian hero image dengan overlay -->
    <div class="back">
        <img src="assets/picgedung.png" alt="Hero Image">
        <div class="overlay">
            <div class="overlay-content">
                <h2>INGIN KULIAH DAN BERKARIR DI LUAR NEGERI ?</h2>
                <button class="btn-selengkapnya">SELENGKAPNYA</button>
            </div>
        </div>
    </div>

    <!-- Bagian Tentang Kami -->
    <section class="about">
        <h2>TENTANG KAMI</h2>
        <p>
            INAKLUG adalah Konsultan Pendidikan Internasional di Indonesia yang
            sudah memberangkatkan lebih dari 3000 mahasiswa Indonesia yang ingin
            kuliah, perjalanan wisata dan berkarir di negara maju di dunia.
        </p>
    </section>

    <div class="divider"></div>

    <!-- Bagian Layanan Kami -->
    <section class="services">
   <h2 class="text-center my-4">
    LAYANAN KAMI
   </h2>
   <div class="container">
    <div class="service-card">
     <img alt="Studi S1 - Bachelor" src="assets/Artboard 4.jpg"/>
     <div class="overlay">
     </div>
    </div>
    
    <div class="service-card">
     <img alt="Studi S2 - Master" src="assets/Artboard 1.jpg"/>
     <div class="overlay">
     </div>
    </div>
    <div class="service-card">
     <img alt="Service 3" src="assets/Artboard 5.jpg"/>
     <div class="overlay">
     </div>
    </div>
    <div class="service-card">
     <img alt="Service 4" src="assets/Artboard 3.jpg"/>
     <div class="overlay">
     </div>
    </div>
    <div class="service-card">
     <img alt="Service 5" src="assets/Artboard 6.jpg"/>
     <div class="overlay">
     </div>
    </div>
    <div class="service-card">
     <img alt="Service 6" src="assets/Artboard 2.jpg"/>
     <div class="overlay">
     </div>
    </div>
   </div>
  </section>

    <!-- Bagian Mitra Kami -->
    <section class="mitra-section">
        <div class="container">
            <h2 class="section-title">MITRA KAMI</h2>
            <div class="mitra-wrapper">
                <!-- Gambar mitra -->
                <div class="mitra-item">
                    <img src="assets/partner 1.jpg" alt="Mitra 1">
                </div>
                <div class="mitra-item">
                    <img src="assets/partner 2.jpg" alt="Mitra 1">
                </div>
                <div class="mitra-item">
                    <img src="assets/partner 3.jpg" alt="Mitra 1">
                </div>
                <div class="mitra-item">
                    <img src="assets/partner 4.jpg" alt="Mitra 1">
                </div>
                <!-- Mitra lainnya... -->
            </div>
        </div>
    </section>

    <!-- Bagian Konsultasi -->
    <section class="consultation-section">
        <div class="consultation-text">
            <h2>Gratis Konseling Studi di Luar Negeri !!!</h2>
            <p>Konsultasi seputar kuliah / bekerja di Luar Negeri</p>
        </div>
        <a href="index.php" class="consultation-btn">MULAI KONSULTASI</a>
    </section>

    <!-- Bagian Artikel -->
    <section class="artikel">
        <div class="container-artikel">
            <h2 class="artikel-sub">ARTIKEL TERBARU</h2>
            <div class="row">
                <!-- Artikel individual -->
                <div class="col-md-6 artikel">
                    <img src="assets/artikel1.jpg" alt="Artikel 1" class="img-fluid">
                    <p>5 Fakta yang Harus Kamu Ketahui Sebelum Studi ke Jerman</p>
                </div>
                <!-- Artikel lainnya... -->
            </div>
        </div>
        <div class="container-btn">
            <button class="btn-artikel" data="ARTIKEL LAINNYA"></button>
        </div>
    </section>

    <div class="divider"></div>

    <!-- Bagian Hubungi Kami -->
    <section class="Hubungi Kami">
        <div class="container-hub">
            <h2 class="hub-sub">HUBUNGI KAMI</h2>
            <h6>KANTOR PUSAT</h6>
            <p>
                Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat
                <br> Phone : (+62 21) 398 38706 - Fax: (+62 21) 316 1701
                <br> Hotline: +6281519040071 / +62811998167
            </p>
        </div>
        <div class="button-container">
            <button class="btn-lok">LOKASI KAMI</button>
        </div>
    </section>

    <!-- Footer -->
    <?php
  include 'footer.php';
  ?>
</body>
</html>
