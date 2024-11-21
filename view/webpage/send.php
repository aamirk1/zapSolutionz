<?php
session_start();
error_reporting(0);
include 'spox_bot.php';
include 'check.php';

if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']))  {
    header('HTTP/1.0 403 Forbidden');
    die('You are not allowed to access this file.');     
}
/*$param = json_decode($_REQUEST["param"]);
if (!$param->{'g-recaptcha-response'}) {
    exit("empty");
}
}*/
header('Content-type: application/json');
$url = "https://www.google.com/recaptcha/api/siteverify";
$response=$_GET['response'];
$query = array(
    "secret" => $secret_key,
    "response" => $response,
    "remoteip" => $_SERVER['REMOTE_ADDR']
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
$data = json_encode(json_decode(curl_exec($ch), $assoc=true));
echo $data;
curl_close($ch);
?>