<?php
$host = "172.22.46.80";
$dbusername = "root";
$dbpassword = "";
$dbname = "b2b_onlinepharma";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()) {
  die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
}
?>
