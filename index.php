<!DOCTYPE html>
<html lang="en">


<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/unparlogo.png" rel="icon">
  <title>UNPAR - Login</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
<?php
session_start();
if($_SESSION){
    if($_SESSION['level']=="admin")
    {
        header("Location: admin/index.php");
    }
    if($_SESSION['level']=="mahasiswa")
    {
        header("Location: mahasiswa/index.php");
    }
    if($_SESSION['level']=="dosen")
    {
      header("Location: dosen/index.php");
    }
}
include "login_exe.php";
?>
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                    <img src="img/unparlogo.png" style="max-height: 130px"><BR>
                  </div>
                  <form class="user" id="login" name="login" method="post" action="">
                    <div class="form-group"><BR><HR>
                      <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp"
                        placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small" style="line-height: 1.5rem;">
                        
                      </div>
                    </div>
                    <div class="form-group">
                      <button type="submit" name="login" id="login" class="btn btn-primary btn-block">Login</a>
                    </div>  
                  </form>   
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
</body>

</html>