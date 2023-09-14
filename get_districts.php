<?php
$host = "localhost:3308";
$dbusername = "root";
$dbpassword = "";
$dbname = "b2b_onlinepharma";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
  die('Connect Error (' . $conn->connect_errno . ') ' . $conn->connect_error);
}

if (isset($_GET['state_id'])) {
  $state_id = $_GET['state_id'];
  
  $district_query = "SELECT D_id, D_nm FROM district WHERE S_id = '$state_id'";
  $result = $conn->query($district_query);

  $districts = [];
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $districts[] = $row;
    }
  }

  echo json_encode($districts);
}

$conn->close();
?>
