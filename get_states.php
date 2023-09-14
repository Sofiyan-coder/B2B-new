<?php
$host = "localhost:3308";
$dbusername = "root";
$dbpassword = "";
$dbname = "b2b_onlinepharma";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
  die('Connect Error (' . $conn->connect_errno . ') ' . $conn->connect_error);
}

if (isset($_GET['country_id'])) {
  $country_id = $_GET['country_id'];
  
  $state_query = "SELECT S_id, S_nm FROM state WHERE Cn_id = '$country_id'";
  $result = $conn->query($state_query);

  $states = [];
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $states[] = $row;
    }
  }

  echo json_encode($states);
}

$conn->close();
?>
