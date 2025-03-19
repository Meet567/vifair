<?php
include 'includes/db.php';


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) { 
// Collect form data
$participation_type = $_POST['participation_type'] ?? '';
$company_name = $_POST['Companyname'] ?? '';
$booth_area = $_POST['areaname'] ?? '';
$booth_type = $_POST['booth_type'] ?? '';
$opening_type = $_POST['opening_type'] ?? '';
$brand_name = $_POST['brandname'] ?? '';
$product_detail = $_POST['Productdetail'] ?? '';
$title = $_POST['title'] ?? '';  
$first_name = $_POST['firstname'] ?? '';
$last_name = $_POST['lastname'] ?? '';
$designation = $_POST['Designation'] ?? '';
$mobile = $_POST['exhibitionnumber'] ?? '';
$address_line1 = $_POST['Addresstype'] ?? '';
$city = $_POST['city'] ?? '';
$region = $_POST['Region'] ?? '';
$postal_code = $_POST['postalcode'] ?? '';
$country = $_POST['country'] ?? '';
$source = $_POST['source'] ?? '';
$email = $_POST['email'] ?? '';

$sql = "INSERT INTO delhi_exhibit_data (participation_type, company_name, booth_area, booth_type, opening_type, brand_name, product_detail, title, first_name, last_name, designation, mobile,  address_line1, city, region, postal_code, country, source,email)
        VALUES ('$participation_type', '$company_name', '$booth_area', '$booth_type', '$opening_type', '$brand_name', '$product_detail', '$title', '$first_name', '$last_name', '$designation', '$mobile',  '$address_line1', '$city', '$region', '$postal_code', '$country', '$source','$email')";

if ($conn->query($sql) === TRUE) {
    header("Location: ../index.php"); 
} else {
    echo "Error: " . $conn->error;
}
} else {
    header("Location: ../exhibit_reg.php"); 
}
?>
