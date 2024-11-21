<?php
error_reporting(0);
session_start();
include'../spox_bot.php';
if (!isset($_SESSION['admino'])) {
  header("location: ../admin/");
}
if(isset($_POST['password'])) {
    if($_POST['password'] == $admin_password) {
        $_SESSION['login'] = $_POST['password'];
        exit(header("Location: index.php"));
    }else{
        exit(header("Location: ?invalid"));
    }
}
?>

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SPOX V5 | Login</title>
  <link rel="icon" href="files/logo.jpg" type="image/png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <link rel="stylesheet" href="files/assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="files/assets/css/argon.min5438.css?v=1.2.0" type="text/css">
</head>

<body class="bg-default g-sidenav-show g-sidenav-pinned" style="min-height: 100vh;">
  <div class="main-content">
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">Welcome!</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>

    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">

            <div class="card-body px-lg-5 py-lg-5">
              <?php
              if (isset($_GET['invalid'])) {
                echo '<p style="color: red">Please check your entries and try again.</p>';
              }
              ?>
              <form role="form" action="login.php" method="POST">
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" name="password" type="password" required="">
                  </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                  <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">Remember me</span>
                  </label>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4">Sign in</button>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>