<?php
include "b2b_onlinepharma.php";

if(isset($_GET['Cn_id'])) { // Check if you are receiving 'Cn_id' through the URL
    $id = $_GET['Cn_id'];
    $id = mysqli_real_escape_string($conn, $id); // Sanitize input

    $sql = "DELETE FROM country WHERE Cn_id = '$id'"; // Use single quotes for string comparison

    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: admindash_country.php?msg=Record deleted successfully");
        exit; // Make sure to exit after redirecting
    } else {
        echo "Delete failed: " . mysqli_error($conn);
    }
} 
else if(isset($_GET['S_id'])) { // Check if you are receiving 'Cn_id' through the URL
    $id = $_GET['S_id'];
    $id = mysqli_real_escape_string($conn, $id); // Sanitize input

    $sql = "DELETE FROM state WHERE S_id = '$id'"; // Use single quotes for string comparison

    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: admindash_state.php?msg=Record deleted successfully");
        exit; // Make sure to exit after redirecting
    } else {
        echo "Delete failed: " . mysqli_error($conn);
    }
} 

else if(isset($_GET['D_id'])) { // Check if you are receiving 'Cn_id' through the URL
    $id = $_GET['D_id'];
    $id = mysqli_real_escape_string($conn, $id); // Sanitize input

    $sql = "DELETE FROM district WHERE D_id = '$id'"; // Use single quotes for string comparison

    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: admindash_district.php?msg=Record deleted successfully");
        exit; // Make sure to exit after redirecting
    } else {
        echo "Delete failed: " . mysqli_error($conn);
    }
}


else if(isset($_GET['T_id'])) { // Check if you are receiving 'Cn_id' through the URL
    $id = $_GET['T_id'];
    $id = mysqli_real_escape_string($conn, $id); // Sanitize input

    $sql = "DELETE FROM taluka WHERE T_id = '$id'"; // Use single quotes for string comparison

    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: admindash_taluka.php?msg=Record deleted successfully");
        exit; // Make sure to exit after redirecting
    } else {
        echo "Delete failed: " . mysqli_error($conn);
    }
}


else if(isset($_GET['C_id'])) { // Check if you are receiving 'Cn_id' through the URL
    $id = $_GET['C_id'];
    $id = mysqli_real_escape_string($conn, $id); // Sanitize input

    $sql = "DELETE FROM city WHERE C_id = '$id'"; // Use single quotes for string comparison

    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: admindash_city.php?msg=Record deleted successfully");
        exit; // Make sure to exit after redirecting
    } else {
        echo "Delete failed: " . mysqli_error($conn);
    }
}




?>