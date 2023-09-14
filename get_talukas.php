
<?php
$host = "localhost:3308";
$dbusername = "root";
$dbpassword = "";
$dbname = "b2b_onlinepharma";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
  die('Connect Error (' . $conn->connect_errno . ') ' . $conn->connect_error);
}

if (isset($_GET['district_id'])) {
  $district_id = $_GET['district_id'];
  
  $taluka_query = "SELECT T_id, T_nm FROM taluka WHERE D_id = '$district_id'";
  $result = $conn->query($taluka_query);

  $talukas = [];
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $talukas[] = $row;
    }
  }

  echo json_encode($talukas);
}

$conn->close();
?>