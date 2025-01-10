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

</head>

<body>
    <?php
    include 'header.php';
    ?>
    <div class="background-layanan">
        <div class="gradient-transparan">
        </div>
        <h1 class="image-title z-3 px-5p">LAYANAN KAMI</h1>
    </div>
    <div class="d-flex justify-content-center align-items-center mt-5">
        <div class="w-75">
            <div class="container text-center mt-5">
                <div class="row">

                    <div class="col">
                        <img src="assets/studi s1.png" class="photo" alt="Photo 1">
                    </div>
                    <div class="col">
                        <img src="assets/studi s2.png" class="photo" alt="Photo 1">
                    </div>
                    <div class="col">
                        <img src="assets/study bahasa asing.png" class="photo" alt="Photo 1">
                    </div>
                </div>
            </div>
            <div class="container text-center mt-3">
                <div class="row">
                    <div class="col">
                        <img src="assets/studi s3.png" class="photo" alt="Photo 1">
                    </div>
                    <div class="col">
                        <img src="assets/study tour.png" class="photo" alt="Photo 1">
                    </div>
                    <div class="col">
                        <img src="assets/ausbildung.png" class="photo" alt="Photo 1">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="margin-100">
        <?php
        include 'kantor_pusat.php';
        ?>
    </div>

    <?php
    include 'footer.php';
    ?>

</body>

</html>