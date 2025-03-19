<?php
session_start();
include '../includes/db.php';


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
    $mobile = trim($_POST['exhibitionnumber'] ?? '');
    $address_line1 = $_POST['Addresstype'] ?? '';
    $city = $_POST['city'] ?? '';
    $region = $_POST['Region'] ?? '';
    $postal_code = $_POST['postalcode'] ?? '';
    $country = $_POST['country'] ?? '';
    $source = $_POST['source'] ?? '';
    $email = trim($_POST['email'] ?? '');

    $errors = [];
    $old_input = $_POST; // Store old input
    
    // ✅ Validate email
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "❌ Error: Invalid email address.";
    }

     // ✅ Validate mobile (only digits, 10 digits, starts with 6-9)
    if (empty($mobile) || !ctype_digit($mobile) || strlen($mobile) !== 10 || !preg_match('/^[6-9]/', $mobile)) {
        $errors['phone'] = "❌ Error: Invalid phone number. It must be 10 digits and start with 6-9.";
    }

    // ✅ Redirect back if validation fails
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['old_input'] = $old_input;
        header("Location: ../../chennai_exhibit_reg.php");
        exit;
    }

    $sql = "INSERT INTO chennai_exhibit_data (participation_type, company_name, booth_area, booth_type, opening_type, brand_name, product_detail, title, first_name, last_name, designation, mobile,  address_line1, city, region, postal_code, country, source,email)
            VALUES ('$participation_type', '$company_name', '$booth_area', '$booth_type', '$opening_type', '$brand_name', '$product_detail', '$title', '$first_name', '$last_name', '$designation', '$mobile',  '$address_line1', '$city', '$region', '$postal_code', '$country', '$source','$email')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../../index.php"); 
    } else {
        echo "Error: " . $conn->error;
    }
    } else {
        header("Location: ../../chennai_exhibit_reg.php"); 
    }
 // deleted Functionality
    if (isset($_GET['delete_id'])) {
        $delete_id = intval($_GET['delete_id']); // Ensure the ID is an integer
        echo "<script>console.log('Delete ID: " . $delete_id . "');</script>"; // Debugging

        if ($delete_id > 0) { // Validate the ID
            $stmt = $conn->prepare("DELETE FROM chennai_exhibit_data WHERE id = ?");
            $stmt->bind_param("i", $delete_id);

            if ($stmt->execute()) {
                echo "<script>console.log('Record deleted successfully');</script>";
                echo "<script>alert('Record deleted successfully');</script>";
                header("Location: ../tables/chennai_exhibit_table.php"); // Redirect to the same page
                exit();
            } else {
                echo "<script>console.error('Error deleting record: " . $stmt->error . "');</script>";
                echo "<script>alert('Error deleting record: " . $stmt->error . "');</script>";
            }
            $stmt->close();
        } else {
            echo "<script>alert('Invalid record ID');</script>";
        }
    } else {
        echo "<script>console.log('Delete ID not set');</script>"; // Debugging
    }

?>
