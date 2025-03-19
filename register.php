
<?php
include 'admin/includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $company_name = $_POST['company_name'];
    $participation_type = $_POST['participation'];
    $booth_area = $_POST['booth_area'];
    $booth_type = $_POST['booth'];
    $opening = $_POST['opening'];
    $brand_name = $_POST['brand_name'];
    $product_detail = $_POST['product_detail'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $designation = $_POST['designation'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $postal_code = $_POST['postal_code'];
    $country = $_POST['country'];
    $how_did_you_hear = $_POST['how_did_you_hear'];

    $sql = "INSERT INTO registrations (name, company_name, participation_type, booth_area, booth_type, opening, brand_name, product_detail, first_name, last_name, mobile, email, designation, address, city, state, postal_code, country, how_did_you_hear) 
            VALUES ('$name', '$company_name', '$participation_type', '$booth_area', '$booth_type', '$opening', '$brand_name', '$product_detail', '$first_name', '$last_name', '$mobile', '$email', '$designation', '$address', '$city', '$state', '$postal_code', '$country', '$how_did_you_hear')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
