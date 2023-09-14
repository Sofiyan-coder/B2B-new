<?php
$host = "localhost:3308";
$dbusername = "root";
$dbpassword = "";
$dbname = "b2b_onlinepharma";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
  die('Connect Error (' . $conn->connect_errno . ') ' . $conn->connect_error);
}

if (isset($_GET['taluka_id'])) {
  $taluka_id = $_GET['taluka_id'];
  
  $city_query = "SELECT C_id, C_nm FROM city WHERE T_id = '$taluka_id'";
  $result = $conn->query($city_query);

  $cities = [];
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $cities[] = $row;
    }
  }

  echo json_encode($cities);
}

$conn->close();
?>
