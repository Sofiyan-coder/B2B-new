<!DOCTYPE html>
<html>
<head>
<title>Taluka Form</title>
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
      $dbpassword = "";
      $dbname = "b2b_onlinepharma";

      $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

      if ($conn->connect_error) {
        die('Connect Error (' . $conn->connect_errno . ') ' . $conn->connect_error);
      }

      $country_query = "SELECT Cn_id, Cn_name FROM country";
      $country_result = $conn->query($country_query);

      if ($country_result->num_rows > 0) {
        while ($country_row = $country_result->fetch_assoc()) {
          echo "<option value='" . $country_row['Cn_id'] . "'>" . $country_row['Cn_name'] . "</option>";
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
<br>
  <div class="select-box">
    <select name="district_id" id="district_Select">
      <option value="">--Select District--</option>
      <!-- Districts will be populated dynamically using JavaScript -->
    </select>
  </div>

 <span> Enter Taluka Name:</span><br>
  <input type="text" name="taluka_name"><br><br>
  <button type="submit" name="add_taluka" value="add_taluka">Add Taluka</button>

  <br><br>
<li><a href="country.php">Countries</a></li>
        <li><a href="state.php">States</a></li>
        <li><a href="district.php">Districts</a></li>
        <li><a href="taluka.php">Taluka</a></li>
        <li><a href="city.php">Cities</a></li>
</form>



<script>
const stateSelect = document.getElementById('stateSelect');
const district_Select = document.getElementById('district_Select');
const countrySelect = document.getElementById('countrySelect');

countrySelect.addEventListener('change', () => {
  const selectedCountryId = countrySelect.value;
  fetchStates(selectedCountryId);
});

stateSelect.addEventListener('change', () => {
  const selectedStateId = stateSelect.value;
  fetchDistricts(selectedStateId);
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

function fetchDistricts(stateId) {
  district_Select.innerHTML = '<option value="">--Select District--</option>';
  
  if (stateId) {
    fetch(`get_districts.php?state_id=${stateId}`)
      .then(response => response.json())
      .then(districts => {
        districts.forEach(district => {
          const option = document.createElement('option');
          option.value = district.D_id;
          option.textContent = district.D_nm;
          district_Select.appendChild(option);
        });
      })
      .catch(error => {
        console.error('Error fetching districts:', error);
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
  $id=$_GET['updateid'];
  if ($conn->connect_error) {
    die('Connect Error (' . $conn->connect_errno . ') ' . $conn->connect_error);
  }

  if (isset($_POST['add_taluka'])) {
   
   
    $taluka_name = $_POST['taluka_name'];

    $sql = "UPDATE taluka SET T_nm = '$taluka_name' WHERE T_id = '$id'";

    if ($conn->query($sql)) {
      // echo "Taluka added successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }

  $conn->close();
}
?>
</body>
</html>
