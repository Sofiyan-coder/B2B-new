<?php
$host = "localhost:3308";
$dbusername = "root";
$dbpassword = "";
$dbname = "b2b_onlinepharma";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
  die('Connect Error (' . $conn->connect_errno . ') ' . $conn->connect_error);
}

if (isset($_GET['category_id'])) {
  $category_id = $_GET['category_id'];
  
  $subcategory_query = "SELECT S_id, S_nm FROM subcategory WHERE C_id = '$category_id'";
  $result = $conn->query($subcategory_query);

  $subcategories = [];
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $subcategories[] = $row;
    }
  }

  echo json_encode($subcategories);
}

$conn->close();
?>
