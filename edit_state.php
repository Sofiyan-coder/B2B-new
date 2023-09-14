<!DOCTYPE html>
<html>
<head>
<title>Category Form</title>
<style>
/* Style for the form container */
form {

  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #f7f7f7;
  max-width: 500px;
  margin:200px;
  margin-left:630px;
}

/* Style for the select box */
.select-box select {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

/* Style for the input field */
input[type="text"] {
  width: 95%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}


/* Style for the button */
button[type="submit"] {
  background-color: #007bff;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  margin-left:200px;
}

/* Change button color on hover */
button[type="submit"]:hover {
  background-color: #0056b3;
}

/* Style for the list */
ul {
  list-style-type: none;
  padding: 0;
  margin-top: 20px;
  display: flex; /* Display links horizontally */
  justify-content: space-around; /* Space links evenly */
}

/* Style for list items (links) */
li {
  margin: 10px 0;
  justify-content:center;
  display:inline-block;
  margin-left:40px;
 
}

/* Style for the links */
a {
  text-decoration: none;
  color: #007bff;
}

/* Change link color on hover */
a:hover {
  color: #0056b3;
}

/* Style for the span element */
span {
  display: block;
  margin-top: 10px;
  font-weight: bold;
}
</style>
</head>
<body>
<form method="post" >

<div class="select-box">
  <select name="country_id">
    <option value="">--Select Country--</option>
    <?php
    $host = "localhost:3308";
    $dbusername = "root";
    $dbpassword = " ";
    $dbname = "b2b_onlinepharma";

    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

    if (mysqli_connect_error()) {
      die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
    }

    $state_query = "SELECT Cn_id, Cn_name FROM  country";
    $result = $conn->query($state_query);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<option value='".$row['Cn_id']."'>".$row['Cn_name']."</option>";
      }
    }

    $conn->close();
    ?>
  </select>
</div>

<span>Enter State_name:</span><br> 
<input type="text" name="state_name"><br><br>
<button type="submit" name="add_state" value="add_state">Add State</button>
<br><br>
<li><a href="country.php">Countries</a></li>
        <li><a href="state.php">States</a></li>
        <li><a href="district.php">Districts</a></li>
        <li><a href="taluka.php">Taluka</a></li>
        <li><a href="city.php">Cities</a></li>
</form>



<?php
$host = "localhost:3308";
$dbusername = "root";
$dbpassword = " ";
$dbname = "b2b_onlinepharma";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
$id=$_GET['updateid'];
if (mysqli_connect_error())

{
  die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
}

if (isset($_POST['add_state'])) 
{  
  $state_name = $_POST['state_name'];
  
  $sql = "UPDATE state SET S_nm = '$state_name' WHERE S_id = '$id'";
  
  if ($conn->query($sql)) {
    // echo "State added successfully";

           
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


}

$conn->close();
?>
</body>
</html>
