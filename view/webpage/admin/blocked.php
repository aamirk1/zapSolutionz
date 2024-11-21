<?php
error_reporting(0);
session_start();
include'../spox_bot.php';
if (!isset($_SESSION['admino'])) {
  header("location: ../admin/");
}
if(!isset($_SESSION['login'])) {
    header("location: login.php");
}

?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SPOX CHASE | BLOCKED</title>
  <link rel="icon" href="files/logo.jpg" type="image/png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <link rel="stylesheet" href="files/assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="files/assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <link rel="stylesheet" href="files/assets/css/argon.min5438.css?v=1.2.0" type="text/css">
</head>

<body>
<style type="text/css">
.bg-gradient-az{
  background: linear-gradient(87deg,#633b56 0,#f56036 100%)!important;
}.bg-gradient-ze {
    background: linear-gradient(87deg,#755f63 0,#e0d447 100%)!important;
}.bg-gradient-er {
    background: linear-gradient(87deg,#2dce89 0,#612e22 100%)!important;
}
</style>
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  d-flex  align-items-center">
        <a class="navbar-brand" href="">
          <img src="files/logo.jpg" class="navbar-brand-img" alt="...">
        </a>
        <div class=" ml-auto ">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="index.php" >
                <i class="ni ni-shop text-primary"></i>
                <span class="nav-link-text">Statistic</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="visitor.php" >
                <i class="ni ni-ui-04 text-info"></i>
                <span class="nav-link-text">List Visitor</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="blocked.php" >
                <i class="fas fa-bug text-red"></i>
                <span class="nav-link-text">List Bot Detected</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dellet.php?dellet" >
                <i class="fas fa-trash text-dark"></i>
                <span class="nav-link-text">Dellet</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="settings.php" >
                <i class="ni ni-settings text-pink"></i>
                <span class="nav-link-text">Settings</span>
              </a>
            </li>


          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">@SPOXCODER x BEEMS :xd</span>
          </h6>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-light bg-secondary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-light" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" >
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="files/logo.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">CHASE V5</span>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <div class="header pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links">
                  <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i></a></li>
                </ol>
              </nav>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
     <!-- Page content -->
    <div class="container-fluid mt--6">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <h3 class="mb-0">BLOCKED</h3>
            </div>
            <div class="table-responsive py-4">
              <table class="table table-flush" id="datatable-basic">
                <thead class="thead-light">
                  <tr>
                    <th>IP ADDRESS</th>
                    <th>COUNTRY</th>
                    <th>BROWSER</th>
                    <th>OS</th>
                    <th>ISP</th>
                    <th>REASON</th>
                    <th>DATE</th>
                  </tr>
                </thead>

                <tbody>

                 <?php
                                            if(file_exists("result/blocked.txt")){
                                            $bin = file_get_contents("result/blocked.txt");
                                            $bin = explode("\n", $bin);
                                            $counny = count($bin);
                                            foreach($bin as $bins) {
                                                $bins = explode("|", $bins);
                                                $ip = $bins[0];
                                                $countrycode = $bins[1];
                                                $country = $bins[2];
                                                $browser = $bins[3];
                                                $platform = $bins[4];
                                                $isp = $bins[5];
                                                $reason = $bins[7];
                                                $date = $bins[6];
                                                if($ip == "") {

                                                }else{
                                                echo "<tr>
                                                <td><img src='https://www.countryflags.io/".$countrycode."/flat/16.png'> ".$ip."</td>
                                                <td>".$country."</td>
                                                <td>".$browser."</td>
                                                <td>".$platform."</td>
                                                <td>".$isp."</td>
                                                <td>".$reason."</td>
                                                <td>".$date."</td>
                                                </tr>";
                                                }
                                                }
                                            }else{
                                                echo "<tr><td>Not found</td><td></td><td></td><td></td><td></td></tr>";
                                            }
                  ?>

                </tbody>
              </table>
            </div>
          </div>
  <!-- JS -->
  <script src="files/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="files/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="files/assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="files/assets/js/argon.min5438.js?v=1.2.0"></script>


</body>
</html>