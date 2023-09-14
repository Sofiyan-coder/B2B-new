<?php
include "b2b_onlinepharma.php";


 if(isset($_GET['C_id'])) { // Check if you are receiving 'Cn_id' through the URL
    $id = $_GET['C_id'];
    $id = mysqli_real_escape_string($conn, $id); // Sanitize input

    $sql = "DELETE FROM category WHERE C_id = '$id'"; // Use single quotes for string comparison

    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: admindash_category.php?msg=Record deleted successfully");
        exit; // Make sure to exit after redirecting
    } 
}


else if(isset($_GET['S_id'])) { // Check if you are receiving 'Cn_id' through the URL
    $id = $_GET['S_id'];
    $id = mysqli_real_escape_string($conn, $id); // Sanitize input

    $sql = "DELETE FROM subcategory WHERE S_id = '$id'"; // Use single quotes for string comparison

    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: admindash_subcategory.php?msg=Record deleted successfully");
        exit; // Make sure to exit after redirecting
    } 
}

else if(isset($_GET['M_id'])) { // Check if you are receiving 'Cn_id' through the URL
    $id = $_GET['M_id'];
    $id = mysqli_real_escape_string($conn, $id); // Sanitize input

    $sql = "DELETE FROM medicine WHERE M_id = '$id'"; // Use single quotes for string comparison

    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: admindash_medicine.php?msg=Record deleted successfully");
        exit; // Make sure to exit after redirecting
    } 

}
?>