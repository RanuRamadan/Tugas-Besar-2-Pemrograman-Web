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
      document.getElementById("MySubmitBtn").disabled = false;
    }
  </script>
</head>
<body>
  <?php
  include 'header.php';
  ?>
  
  <div class="background-hubungi" style="padding-top: 80px;">
    <div class="gradient-transparan">
    </div>
    <h1 class="image-title z-3 px-5p">HUBUNGI KAMI</h1>
  </div>
  
  <div class="px-20p mt-5 ">
    <h2>KIRIM PESAN</h2>
    <div class="container text-center">
      <div class="row row-cols-2">
        <div class="col"><span class="input-group-text mt-5">Nama*</span>
          <input
            type="text"
            class="form-control"
            placeholder="Nama Lengkap Anda"
            aria-label="Nama Lengkap Anda" />
        </div>
        <div class="col"><span class="input-group-text mt-5">E-mail*</span>
          <input
            type="text"
            class="form-control"
            placeholder="Alamat E-mail Anda"
            aria-label="Alamat E-mail Anda" />
        </div>
        <div class="col"><span class="input-group-text mt-5">Perushaan/Organisasi</span>
          <input
            type="text"
            class="form-control"
            placeholder="Nama Perushaan/Organisasi"
            aria-label="Nama Perushaan/Organisasi" />
        </div>
        <div class="col"> <span class="input-group-text mt-5">Telepon</span>
          <input
            type="text"
            class="form-control"
            placeholder="Nomor Telepon Anda"
            aria-label="Nomor Telepon Anda" />
        </div>
      </div>
    </div>

    <div class="d-flex flex-column mt-5">
      <span class="input-group-text">Isi Pesan*</span>
      <textarea class="form-control" aria-label="With textarea"></textarea>
    </div>
    <div class="d-flex flex-row align-center mt-5">
      <div class="g-recaptcha" data-sitekey="6LeFPqIqAAAAAPmAhppwvxzUbo3pbQE-p15sbY8n" data-callback="enableSubmitBtn"></div>
      <div>
        <button type="button" id="MySubmitBtn" class="btn btn-outline-primary ms-5 rounded-pill pt-3 pb-3 ps-5 pe-5 ">KIRIM PESAN</button>
      </div>
    </div>
    <h3 class="margin-100">LOKASI KAMI</h3>
    <h4 class="mt-5">KANTOR PUSAT</h4>
    <p class="mt-3">
      Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat<br />
      Phone : (+62 21) 398 38706 - Fax: (+62 21) 316 1701<br />
      Hotline: +6281519040071 / +62811998167
    </p>
    <h5 class="mt-5">KANTOR CABANG</h5>
    <p class="mt-3">
      Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat<br />
      Phone : (+62 21) 398 38706 - Fax: (+62 21) 316 1701<br />
      Hotline: +6281519040071 / +62811998167
    </p>
  </div>

  <?php
  include 'footer.php';
  ?>
</body>

</html>
