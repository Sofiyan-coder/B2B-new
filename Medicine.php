<!DOCTYPE html>
<html>
<head>
<title>Medicine Form</title>
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
    <select name="category_id" id="categorySelect">
      <option value="">--Select Category--</option>
      <?php
      $host = "localhost:3308";
      $dbusername = "root";
      $dbpassword = "";
      $dbname = "b2b_onlinepharma";

      $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

      if ($conn->connect_error) {
        die('Connect Error (' . $conn->connect_errno . ') ' . $conn->connect_error);
      }

      $category_query = "SELECT C_id, C_name FROM category";
      $category_result = $conn->query($category_query);

      if ($category_result->num_rows > 0) {
        while ($category_row = $category_result->fetch_assoc()) {
          echo "<option value='" . $category_row['C_id'] . "'>" . $category_row['C_name'] . "</option>";
        }
      }

      $conn->close();
      ?>
    </select>
  </div>
  <br>

  <div class="select-box">
    <select name="sub_category_id" id="subCategorySelect">
      <option value="">--Select SubCategory--</option>
      <!-- Subcategories will be populated dynamically using JavaScript -->
    </select>
  </div>
  
 <span> Enter Medicine Name:</span><br> <input type="text" name="name"><br><br>
  <button type="submit" name="add_medicine" value="add_medicine">Add Medicine</button>
  <br><br>
         <li><a href="Category.php">Category</a></li>
        <li><a href="SubCategory.php">SubCategory</a></li>
        <li><a href="Medicine.php">Medicine</a></li>  
</form>



<script>
const subCategorySelect = document.getElementById('subCategorySelect');
const categorySelect = document.getElementById('categorySelect');

categorySelect.addEventListener('change', () => {
  const selectedCategoryId = categorySelect.value;
  fetchSubcategories(selectedCategoryId);
});

function fetchSubcategories(categoryId) {
  subCategorySelect.innerHTML = '<option value="">--Select SubCategory--</option>';
  
  if (categoryId) {
    fetch(`get_subcategories.php?category_id=${categoryId}`)
      .then(response => response.json())
      .then(subcategories => {
        subcategories.forEach(subcategory => {
          const option = document.createElement('option');
          option.value = subcategory.S_id;
          option.textContent = subcategory.S_nm;
          subCategorySelect.appendChild(option);
        });
      })
      .catch(error => {
        console.error('Error fetching subcategories:', error);
      });
  }
}
</script>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $host = "localhost:3308";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = "b2b_onlinepharma";

  $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

  if ($conn->connect_error) {
    die('Connect Error (' . $conn->connect_errno . ') ' . $conn->connect_error);
  }

  if (isset($_POST['add_medicine'])) {
    $sub_category_id = $_POST['sub_category_id'];
    $name = $_POST['name'];

    $sql = "INSERT INTO medicine ( M_nm, S_id) VALUES ( '$name', '$sub_category_id')";

    if ($conn->query($sql)) {
      // echo "Medicine added successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }

  $conn->close();
}
?>
</body>
</html>
