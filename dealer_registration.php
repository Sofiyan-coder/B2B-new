<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- <style>
  .mask {
    display: flex;
    align-items: center;
    height: 1500px;
    background: linear-gradient(to right, #43cea2, #185a9d);
  }

  #registrationForm {
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    width:600px;
    margin-left:650px;
  }

 
 
  #registrationForm button {
    display: block;
    margin-bottom: 15px;
    padding: 10px;
    width: 90%;
    margin-left:25px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }


  #registrationForm select
  {  
    display: flex;
    margin-bottom: 15px;
    padding: 10px;
    width: 99%;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  #registrationForm input{
    display: block;
    margin-bottom: 15px;
    padding: 10px;
    width: 95%;
    height:30px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  #registrationForm button {
    background-color: #185a9d;
    color: #fff;
    cursor: pointer;
  }

  #registrationForm button:hover {
    background-color: #0b3861;
  }
</style> -->



    <script>
            function submitForm() {
            var name = document.getElementById("form3Example1m").value;
           
            var pincode = document.getElementById("form3Example90").value;
            var phoneNumber = document.getElementById("phone_no").value;
            var email = document.getElementById("form3Example97").value;
            var passWord = document.getElementById("password1").value;
            var gstNumber = document.getElementById("form3Example11n").value;
            var panNumber = document.getElementById("form3Example1n").value;
            var drugLicenseNumber = document.getElementById("form3Example12n").value;
            var name1 = document.getElementById("form3Example1m").value;

            // Name validation
            if (!/^[A-Za-z\s]+$/.test(name)) {
                showerror ('name',"Name should only contain alphabets and spaces.");
                return;
            }


            // Name validation
            if (!/^[A-Za-z\s]+$/.test(name1)) {
                alert("Name should only contain alphabets and spaces.");
                return;
            }

          // Pincode validation
            if (!/^\d{6}$/.test(pincode)) {
                alert("Pincode should be a 6-digit number.");
                return;
            }

            // Phone number validation
            if (!/^\d{10}$/.test(phoneNumber)) {
                alert("Phone number should be a 10-digit number.");
                return;
            }

            // Email validation
            if (!/\S+@\S+\.\S+/.test(email)) {
                alert("Invalid email address.");
                return;
            }


            if (password.length < 6) {
                alert("Password should be a 6-digit number.");
                return;
            }


            // GST number validation
            if (!/^\d{15}$/.test(gstNumber)) {
                alert("GST number should be a 15-digit number.");
                return;
            }

            // PAN number validation
            if (!/^\d{10}$/.test(panNumber)) {
                alert("PAN number should be a 10-digit number.");
                return;
            }

            // Drug License number validation
            if (!/^\d{12}$/.test(drugLicenseNumber)) {
                alert("Drug License number should be a 12-digit number.");
                return;
            }



        
            // All fields are valid, submit the form
            document.getElementById("registrationForm").submit();


   

 
}


    </script>
</head>
<body>
<div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <form id="registrationForm" method="post">
            <!-- Your form content here -->



            <input type="text" id="form3Example1m" placeholder="Owner Name" name="dealer_name">
            <input type="text" id="form3Example1m" placeholder="Shop Name" name="dealershop_name"/>
            <input type="text" id="form3Example8" placeholder="Shop Address" name="dealershop_address"/>
            <div class="select-box">
            <select name="country_name" id="countrySelect">
            <option value="">--Select Country--</option>
                    <!-- <?php
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
                        echo "<option value='". $country_row['Cn_id']  . $country_row['Cn_name'] . "'>" . $country_row['Cn_name'] . "</option>";
                        }
                    }

                      $conn->close();
                   ?> -->
    </select>
    </div>
    <div class="select-box">
    <select name="state_name" id="stateSelect">
      <option value="">--Select State--</option>
     
    </select>
  </div>
<br>
  <div class="select-box">
    <select name="district_name" id="district_Select">
      <option value="">--Select District--</option>
      <!-- Districts will be populated dynamically using JavaScript -->
    </select>
  </div>
<br>
  <div class="select-box">
    <select name="taluka_name" id="taluka_Select">
      <option value="">--Select Taluka--</option>
      <!-- Districts will be populated dynamically using JavaScript -->
    </select>
  </div>

  <div class="select-box">
    <select name="city_name" id=" city_Select">
      <option value="">--Select City--</option>
      <!-- Citys will be populated dynamically using JavaScript -->
    </select>
  </div>

            <input type="text" id="form3Example90" placeholder="Pincode" name="dealer_pincode">
            <input type="text" id="phone_no" placeholder="Phone Number" name="dealer_phone">
            <input type="text" id="form3Example97" placeholder="Email" name="dealer_email">
            <input type="password" id="password" placeholder="Password1" name="dealer_pass">

            <select name="qualification" id="qualificationSelect">
                <option value="S.S.L.C">S.S.L.C</option>
                <option value="Registered Pharmacist">Registered Pharmacist</option>
                <!-- Add more options as needed -->
                  </select>

            <input type="text" id="form3Example11n" placeholder="GST Number" name="dealer_gst">
            <input type="text" id="form3Example1n" placeholder="PAN Number" name="dealer_pan">
            <input type="text" id="form3Example12n" placeholder="Drug License Number" name="dealer_drug">
            <button type="submit" name="submit" id="submitBtn">Submit</button>
        </form>
    </div>


    <script>

        
const stateSelect = document.getElementById('stateSelect');
const districtSelect = document.getElementById('district_Select');
const talukaSelect = document.getElementById('taluka_Select');
const citySelect = document.getElementById('city_Select');
const countrySelect = document.getElementById('countrySelect');

countrySelect.addEventListener('change', () => {
  const selectedCountryId = countrySelect.value;
  fetchStates(selectedCountryId);
});

stateSelect.addEventListener('change', () => {
  const selectedStateId = stateSelect.value;
  fetchDistricts(selectedStateId);
});

districtSelect.addEventListener('change', () => {
  const selectedDistrictId = districtSelect.value;
  fetchTalukas(selectedDistrictId);
});

talukaSelect.addEventListener('change', () => {
  const selectedTalukaId = talukaSelect.value;
  fetchCities(selectedTalukaId);
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
  districtSelect.innerHTML = '<option value="">--Select District--</option>';
  
  if (stateId) {
    fetch(`get_districts.php?state_id=${stateId}`)
      .then(response => response.json())
      .then(districts => {
        districts.forEach(district => {
          const option = document.createElement('option');
          option.value = district.D_id;
          option.textContent = district.D_nm;
          districtSelect.appendChild(option);
        });
      })
      .catch(error => {
        console.error('Error fetching districts:', error);
      });
  }
}

function fetchTalukas(districtId) {
  talukaSelect.innerHTML = '<option value="">--Select Taluka--</option>';
  
  if (districtId) {
    fetch(`get_talukas.php?district_id=${districtId}`)
      .then(response => response.json())
      .then(talukas => {
        talukas.forEach(taluka => {
          const option = document.createElement('option');
          option.value = taluka.T_id;
          option.textContent = taluka.T_nm;
          talukaSelect.appendChild(option);
        });
      })
      .catch(error => {
        console.error('Error fetching talukas:', error);
      });
  }
}

function fetchCities(talukaId) {
  citySelect.innerHTML = '<option value="">--Select City--</option>';
  
  if (talukaId) {
    fetch(`get_cities.php?taluka_id=${talukaId}`)
      .then(response => response.json())
      .then(cities => {
        cities.forEach(city => {
          const option = document.createElement('option');
          option.value = city.C_id;
          option.textContent = city.C_nm;
          citySelect.appendChild(option);
        });
      })
      .catch(error => {
        console.error('Error fetching cities:', error);
      });
  }
}



</script>
    <!-- <?php
$servername = "localhost:3308";
$username = "root";
$password = " ";
$dbname = "b2b_onlinepharma";

$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
  die('Connect Error (' . $conn->connect_errno . ') ' . $conn->connect_error);
}  

if (isset($_POST['submit'])) {
    $dealer_name = $_POST['dealer_name']; // Fix the attribute name here
    $dealershop_name = $_POST['dealershop_name'];
    $dealershop_address = $_POST['dealershop_address'];
    $country_name = $_POST['country_name'];
    $state_name = $_POST['state_name'];
    $district_name = $_POST['district_name'];
    $taluka_name = $_POST['taluka_name'];
    $city_name = $_POST['city_name'];
    $dealer_pincode = $_POST['dealer_pincode'];
    $dealer_phone = $_POST['dealer_phone'];
    $dealer_email = $_POST['dealer_email'];
    $dealer_pass= $_POST['dealer_pass'];
    $dealer_gst = $_POST['dealer_gst'];
    $dealer_pan = $_POST['dealer_pan'];
    $dealer_drug = $_POST['dealer_drug'];
    $qualification = $_POST['qualification'];

    $sql = "INSERT INTO dealer ( Name, shop_name,Shop_address,country,State,District ,Taluka ,City ,Pincode,Mobile_number,Email ,Password,GST_number,PAN_number,DrugLicence_no,Qualification ) 
    VALUES ( '$dealer_name', '$dealershop_name', ' $dealershop_address','$country_name', x'$state_name' ,'$district_name','$taluka_name','$city_name ',' $dealer_pincode', '$dealer_phone', ' $dealer_email', ' $dealer_pass',' $dealer_gst', ' $dealer_pan', '$dealer_drug','$qualification')";


    if ($conn->query($sql)) {
      echo " added successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }

  $conn->close();
?> -->


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>