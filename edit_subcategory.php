<!DOCTYPE html>
<html>
<head>
<title>Subcategory Form</title>
<style>
/* Style for the form container */
form {

  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #f7f7f7;
  max-width: 400px;
  margin:200px;
  margin-left:650px;
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
  margin-left:130px;
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
<form method="post">
<div class="select-box">
  <select name="category_id">
    <option value="">--Select Category--</option>
    <?php
    $host = "localhost:3308";
    $dbusername = "root";
    $dbpassword = " ";
    $dbname = "b2b_onlinepharma";

    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

    if (mysqli_connect_error()) {
      die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
    }

    $category_query = "SELECT C_id, C_name FROM category";
    $result = $conn->query($category_query);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<option value='".$row['C_id']."'>".$row['C_name']."</option>";
      }
    }

    $conn->close();
    ?>
  </select>
</div>

<span>Enter SubCategory_name:</span>
<br><br>
 <input type="text" name="sub_category_name"><br><br>
<button type="submit" name="add_subcategory" value="add_subcategory">Edit Subcategory</button>
<br><br>
         <li><a href="Category.php">Category</a></li>
        <li><a href="SubCategory.php">SubCategory</a></li>
        <li><a href="Medicine.php">Medicine</a></li>   
</form>

<?php
$host = "localhost:3308";
$dbusername = "root";
$dbpassword = " ";
$dbname = "b2b_onlinepharma";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

$id=$_GET['updateid'];

if (mysqli_connect_error()) {
  die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
}

if (isset($_POST['add_subcategory'])) {
  $sub_category_name = $_POST['sub_category_name'];
  
  $sql = "UPDATE subcategory SET S_nm = '$sub_category_name' WHERE S_id = '$id'";

  
  if ($conn->query($sql)) {
    // echo "Subcategory added successfully";

  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>
</body>
</html>
