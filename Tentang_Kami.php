<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tentang Kami</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <link href="assets/css/styles.css" rel="stylesheet" />
  <script src="https://www.google.com/recaptcha/api.js"></script>
</head>



<body>
  <!-- Header -->
  <?php include 'header.php'; ?>
  <!-- Background Section -->
  <div class="background-container">
    <div class="gradient-transparan"></div>
    <h1 class="image-title z-3 px-5p">TENTANG KAMI</h1>
  </div>

  <!-- Tentang Kami Section -->
  <div class="px-20p mt-5">
    <h2 class="mt-5">PROFIL</h2>
    <p class="mt-5">
      Didirikan pada tahun 2018, Ini membuktikan bahwa INAKLUG merupakan konsultan pendidikan internasional<br>
      yang berpengalaman, terbesar, terpercaya, dan juga memiliki jam terbang tinggi untuk melayani para anak-anak<br>
      muda Indonesia untuk menuntut ilmu di berbagai negara maju dunia.
    </p>
    <div class="row mt-5">
      <div class="col">
        <img src="assets/girl.png" class="photo" alt="Photo 1">
        <h3 class="mt-4">VISI</h3>
        <p class="mt-4">Membangun Sumber Daya Indonesia yang mempunyai daya
          saing tinggi, tangguh secara internasional untuk menghadapi
          persaingan di era globalisasi serta membangun karakter
          pemimpin Indonesia masa depan yang tangguh, mandiri, dan
          profesional.</p>
      </div>
      <div class="col">
        <img src="assets/vr tentang kami.png" class="photo" alt="Photo 2">
        <h3 class="mt-4">MISI</h3>
        <p class="mt-4">Memfasilitasi siswa Indonesia untuk mengenyam pendidikan di
          berbagai perguruan tinggi di lebih dari 25 negara maju di dunia
          dengan layanan yang profesional.</p>
        <p class="mt-4">Memberikan bantuan konsultasi terhadap siswa/i Indonesia
          dalam mempersiapkan studinya dari berbagai aspek, baik
          aspek sosial, budaya, maupun pendidikan.</p>
      </div>
    </div>
    <div class="row mt-5">
      <div>
        <button type="button" class="btn btn-outline-primary ms-5 mt-5 rounded-pill pt-3 pb-3 ps-5 pe-5"
          onclick="window.location.href='layanan_kami.php'">LAYANAN KAMI</button>
      </div>
    </div>
  </div>

  <!-- Kantor Pusat -->
  <div class="margin-100">
    <?php include 'kantor_pusat.php'; ?>
  </div>

  <!-- Hubungi Kami Section -->
  <div class="px-20p mt-5">
    <h2 class="mt-5">HUBUNGI KAMI</h2>
    <p class="mt-3">Jika Anda memiliki pertanyaan atau membutuhkan informasi lebih lanjut, jangan ragu untuk menghubungi kami:</p>
    <form action="proses_hubungi.php" method="POST" class="mt-4">
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="mb-3">
        <label for="pesan" class="form-label">Pesan</label>
        <textarea class="form-control" id="pesan" name="pesan" rows="5" required></textarea>
      </div>
      <div class="g-recaptcha mb-3" data-sitekey="YOUR_SITE_KEY"></div>
      <button type="submit" class="btn btn-primary">Kirim Pesan</button>
    </form>
  </div>

  <!-- Footer -->
  <?php include 'footer.php'; ?>
</body>

</html>
