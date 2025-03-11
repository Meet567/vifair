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

 // ✅ Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format.";
    }

    // ✅ Validate phone number (10 digits, starts with 6-9)
    if (!ctype_digit($mobile) || strlen($mobile) !== 10 || !preg_match('/^[6-9]/', $mobile)) {
        $errors['mobile'] = "Invalid phone number. It must be 10 digits and start with 6-9.";
    }

    // ✅ Validate postal code (only numbers, length 5-10)
    if (!ctype_digit($postal_code) || strlen($postal_code) < 5 || strlen($postal_code) > 10) {
        $errors['postal_code'] = "Invalid postal code. It must be between 5 to 10 digits.";
    }

$sql = "INSERT INTO chennai_exhibit_data (participation_type, company_name, booth_area, booth_type, opening_type, brand_name, product_detail, title, first_name, last_name, designation, mobile,  address_line1, city, region, postal_code, country, source,email)
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
