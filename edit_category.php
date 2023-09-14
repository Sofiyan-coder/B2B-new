<!DOCTYPE html>
<html>
<head>
<title>Category Form</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

<style>
/* Style for the form container */
form {
  margin: 20px;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #f7f7f7;
  max-width: 400px;
  margin:200px;
  margin-left:650px;
  
}

/* Style for the input field */
input[type="text"] {
  width: 100%;
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
  margin-left:100px;
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
  display:flex;
  justify-content:center;
  display:inline-block;
  margin-left:30px;
 
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

span {
  display: block;
  margin-top: 10px;
  font-weight: bold;
}
</style>

</head>
<body>
<form method="post" >

<span>Enter Category_name:</span>
 <br> <input type="text" name="category_name"><br><br>
<button type="submit" name="add_category" value="add_category">Edit Category</button>
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


if (mysqli_connect_error())

{
  die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
}

if (isset($_POST['add_category'])) 
{
  $category_name = $_POST['category_name'];
  
//   $sql = "update 'category' set C_id = $id, C_name= '$category_name' where C_id=$id";
  
  $sql = "UPDATE category SET C_name = '$category_name' WHERE C_id = '$id'";

  if ($conn->query($sql)) {
    // echo "Category added successfully";

  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


}

$conn->close();
?>
</body>
</html>
