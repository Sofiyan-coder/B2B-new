<!DOCTYPE html>
<html>
<head>
<title>District Form</title>
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
<form method="post">

<div class="select-box">
  <select name="country_id" id="countrySelect">
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
<br>
<div class="select-box">
  <select name="state_id" id="stateSelect">
    <option value="">--Select State--</option>
    <!-- States will be populated dynamically using JavaScript -->
  </select>
</div>

<span>Enter District Name:</span><br> <input type="text" name="district_name"><br><br>
<button type="submit" name="add_district" value="add_district">Add District</button>
<br><br>
<li><a href="country.php">Countries</a></li>
        <li><a href="state.php">States</a></li>
        <li><a href="district.php">Districts</a></li>
        <li><a href="taluka.php">Taluka</a></li>
        <li><a href="city.php">Cities</a></li>
</form>



<script>
const stateSelect = document.getElementById('stateSelect');
const countrySelect = document.getElementById('countrySelect');

countrySelect.addEventListener('change', () => {
  const selectedCountryId = countrySelect.value;
  fetchStates(selectedCountryId);
});

function fetchStates(countryId) {
  stateSelect.innerHTML = '<option value="">--Select State--</option>';
  
  if (countryId) {
    fetch(`get_states.php?country_id=${countryId}`)
      .then(response => response.json())
      .then(states => {
        states.forEach(state => {
          const option = document.createElement('option');
          option.value = state.S_id;
          option.textContent = state.S_nm;
          stateSelect.appendChild(option);
        });
      })
      .catch(error => {
        console.error('Error fetching states:', error);
      });
  }
}
</script>

<?php
$host = "localhost:3308";
$dbusername = "root";
$dbpassword = " ";
$dbname = "b2b_onlinepharma";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()) {
  die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
}

if (isset($_POST['add_district'])) {
  $state_id = $_POST['state_id'];
  $district_name = $_POST['district_name'];
  
  $sql = "INSERT INTO district (S_id, D_nm) VALUES ('$state_id', '$district_name')";
  
  if ($conn->query($sql)) {
    // echo "District added successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>
</body>
</html>
