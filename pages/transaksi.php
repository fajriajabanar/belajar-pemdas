<?php
// GET ID DIDAPAT DARI URL YAG BERNAMA ID
// GET IT DISIMPAN KE DALAM VARIABLE ID
$id=$_GET["id"];
// echo $id;

require "../data/film.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elektronik - Transaksi</title>
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
<?php 
include 'navbar.php'; 

?> 

<div class="container my-5"> 
<form action="" method="POST"> 
<div class="row"> 
<div class="col-md-6 col-sm-12"> 
<div class="mb-2">
<label for="no-transaksi" class="form-label">No. Transaksi</label> 
<input type="text" id="no-transaksi" class="form-control" value="<?= mt_rand() ?>" readonly > 
</div> 

<div class="mb-2"> 
<label for="tanggal-transaksi" class="form-label">Tanggal Transaksi</label> 
<input type="date" id="tanggal-transaksi" class="form-control" required> 
</div> 

<div class="mb-2"> 
<label for="nama-customer" class="form-label">Nama  Customer</label> 
<input type="text" id="nama-customer" class="form-control" required> 
</div> 

<div class="mb-2"> 
<label for="paket" class="form-label">Pilihan Film</label> 
<input type="text" id="paket" class="form-control" value="<?= $datafilm [$id][0] ?>" readonly> 
</div> 

<div class="mb-4"> 
<label for="harga" class="form-label">Harga</label> 
<input type="text" id="harga" class="form-control"  value="<?= $datafilm [$id][2]  ?>" readonly> 
</div> 

<div class="mb-2"> 
<label for="tanggal-transaksi" class="form-label">Jumlah</label> 
<input type="number" id="jumlah" name="jumlah" value="" class="form-control"> 
</div> 


<div class="my-2"> 
<button type="button" class="btn btn-sm btn-dark" onclick="hitungTotal()">Hitung Total Harga</button> 
</div> 
</div> 
          </div>
        </div>
      </div>
    </div>
  </div>

  <hr> 
<div class="mb-2"> 
<label for="total-harga" class="form-label">Total Harga</label> 
<input type="text" id="total-harga" class="form-control" readonly> 
</div>

<div class="row"> 
<div class="col-6"> 
<div class="mb-2"> 
<label for="pembayaran" class="form-label">Pembayaran</label> 
<input type="text" id="pembayaran" class="form-control" required> 
</div> 

<button type="button" class="btn btn-sm btn-dark" onclick="hitungKembalian()">Hitung Kembalian</button> 
</div> 

<div class="col-6"> 
<div class="mb-2"> 
<label for="kembalian" class="form-label">Kembalian</label> 
<input type="text" id="kembalian" class="form-control" readonly> 
</div> 

<button type="button" class="btn btn-sm btn-dark w-100" onclick="simpan()">Simpan Transaksi</button> 

</div> 
</div> 
</div>
</form> 
</div> 
</div>
</div>
</br>

<?php 
include 'footer.php'; 
?>
  
  <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min .js" integrity="sha384- ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
<script> 
// HITUNG TOTAL HARGA 
function hitungTotal() { 
    let harga = parseInt(document.querySelector('#harga').value); 
    let tambahan = parseInt(document.querySelector('#jumlah').value); 
    let totalHarga = harga * tambahan; 
document.getElementById("total-harga").value = totalHarga; 
} 
// HITUNG KEMBALIAN 
function hitungKembalian() { 
let total = parseInt(document.getElementById("total-harga").value); let pembayaran = parseInt(document.getElementById("pembayaran").value); if (pembayaran >= total) { 
let kembalian = pembayaran - total; 
document.getElementById("kembalian").value = kembalian; 
} else { 
alert("Uang Tidak Cukup"); 
} 
} 
// SIMPAN TRANSAKSI 
function simpan() { 
alert('Data Berhasil Disimpan'); 
window.location = 'home.php'; 
} 
</script>
</body>
</html>
