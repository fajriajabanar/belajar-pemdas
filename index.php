<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
        
        <div class="card">
          <div class="card-body">
            <img src="assets/img/om.jpg" alt="logo" width="150" height="150" class="d-block mx-auto  rounded-circle">
            <h4 class="text-center">Login</h4>
            <form action="" method="POST">
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
              </div>
              <div class="d-grid gap-2">
                <button type="submit" name="login" class="btn btn-md btn-secondary">Login</button>
              </div>
            </form>
          </div>
        </div>

        <div class="mt-5 text-muted text-center">
          Belum punya akun? <a href="register.php">Daftar</a>
        </div>
      </div>
    </div>
  </div>

  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  if($username === "film" && $password === "17"){
      echo "<meta http-equiv='refresh' content='1;url=pages/home.php'>";
  }else{
      echo "<meta http-equiv='refresh' content='1;url=index.php'>";
  }
}
?>