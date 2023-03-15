
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Studio</title>
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <!-- Navbar -->
  <?php include 'navbar.php' ?>
  <!-- End Navbar -->

 

  <!-- Hero -->
  <section id="hero" class="mb-3">
    <div class="container mt-3">
      <div class="row">
        <div class="col-lg-6">
          <h1 class="mt-5">Studio</h1>
          <p>Menyajikan Beberapa film populer terbaru</p>

          <a href="#paket" class="btn btn-md btn-secondary px-5">Pilih Film</a>
        </div>
        <div class="col-lg-6">
          <img src="../assets/img/film1.jpg" alt="" class="img-fluid mx-auto d-block" width="500">
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->

  <!-- Paket -->
  <section id="paket">
    <div class="container my-5">
      <h3 class="text-center mb-3">Daftar Film</h3>
 
      <div class="row justify-content-center">
      <?php
        require "../data/film.php";
        foreach ($datafilm as $index => $value){
        ?>
              <div class="col-md-3 col-sm-12">
                <div class="card">
                  <img src="../assets/img/<?= $value[3] ?>" name = "gambar" class="card-img-top" height="400">
                  <div class="card-body text-center">
                    <h4><?= $value[0] ?></h4>
                    <p><?= $value[1] ?></p>
                  </div>
                  <div class="card-footer text-center">
                    <h5>Rp. <?= number_format($value[2], 0, '.', ',') ?></h5>
                  <div class="d-grid gap-2 mt-2">
                  </div>
                </div>
               <div class="card-footer text-center">
                <!-- id menggunakan index dari array product -->
                <!-- id tersebut dikirim ke halaman transaksi -->
                <a href="transaksi.php?id=<?= $index ?>" class="btn btn-secondary">Pilih Film</a>
               </div>
              </div>
            </div>
            <?php 
          } 
          ?>
          </div>
        </div>
      </section>
  <!-- End Paket -->

  <div class="footer my-3">
    <div class="text-center">
      &copy; SMK ISFI Banjarmasin 2023
    </div>
  </div>

  <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>