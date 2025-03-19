<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load PHPMailer
require '../vendor/autoload.php'; 
include '../includes/db.php';

// Ensure form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) { 

    // Sanitize and validate input
    function clean_input($data) {
        return htmlspecialchars(trim($data));
    }

    // Collect form data
    $participation_type = clean_input($_POST['participation_type'] ?? '');
    $company_name = clean_input($_POST['Companyname'] ?? '');
    $booth_area = clean_input($_POST['areaname'] ?? '');
    $booth_type = clean_input($_POST['booth_type'] ?? '');
    $opening_type = clean_input($_POST['opening_type'] ?? '');
    $brandNames = $_POST['brandname'] ?? [];
    $productDetails = $_POST['Productdetail'] ?? [];
    $title = clean_input($_POST['title'] ?? '');  
    $first_name = clean_input($_POST['firstname'] ?? '');
    $last_name = clean_input($_POST['lastname'] ?? '');
    $designation = clean_input($_POST['Designation'] ?? '');
    $mobile = clean_input($_POST['exhibitionnumber'] ?? '');
    $address_line1 = clean_input($_POST['Addresstype'] ?? '');
    $city = clean_input($_POST['city'] ?? '');
    $region = clean_input($_POST['Region'] ?? '');
    $postal_code = clean_input($_POST['postalcode'] ?? '');
    $country = clean_input($_POST['country'] ?? '');
    $source = clean_input($_POST['source'] ?? '');
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }

    // Convert brand names and product details into comma-separated strings
    $brand_name_str = implode(", ", array_map('clean_input', $brandNames));
    $product_detail_str = implode(", ", array_map('clean_input', $productDetails));

    // Check database connection
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    // Prepare SQL statement (Insert Only One Row)
    $stmt = $conn->prepare("INSERT INTO delhi_exhibit_data 
        (participation_type, company_name, booth_area, booth_type, opening_type, brand_name, product_detail, title, first_name, last_name, designation, mobile, address_line1, city, region, postal_code, country, source, email) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Bind parameters and execute
    $stmt->bind_param("sssssssssssssssssss", 
        $participation_type, $company_name, $booth_area, $booth_type, $opening_type, 
        $brand_name_str, $product_detail_str, $title, $first_name, $last_name, 
        $designation, $mobile, $address_line1, $city, $region, 
        $postal_code, $country, $source, $email);

    if ($stmt->execute()) {
        // Send Confirmation Email
        $mail = new PHPMailer(true);
        try {
            // SMTP settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; 
            $mail->SMTPAuth = true;
            $mail->Username = 'harshilpatel4010@gmail.com'; 
            $mail->Password = 'vrwf xkjw afdt aopn'; // Use App Password for security
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // 📩 1. Send Confirmation Email to User
            $mail->setFrom('harshilpatel4010@gmail.com', 'Vibrant India Tech');
            $mail->addAddress($email, "$first_name $last_name");
            $mail->Subject = "Exhibition Registration Confirmation";
            $mail->isHTML(true);
            $mail->Body = "
                <h3>Dear $first_name $last_name,</h3>
                <p>Thank you for registering for the exhibition.</p>
                <table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse; width: 100%;'>
                    <tr><th>Field</th><th>Value</th></tr>
                    <tr><td><strong>Company Name</strong></td><td>$company_name</td></tr>
                    <tr><td><strong>Booth Area</strong></td><td>$booth_area</td></tr>
                    <tr><td><strong>Booth Type</strong></td><td>$booth_type</td></tr>
                    <tr><td><strong>Brand Names</strong></td><td>$brand_name_str</td></tr>
                    <tr><td><strong>Product Details</strong></td><td>$product_detail_str</td></tr>
                </table>
                <p>We look forward to your participation.</p>
                <p>Best Regards,</p>
                <p>Vibrant India Tech</p>
            ";
            $mail->send(); 

            // 📩 2. Send Notification Email to Owner
            $mail->clearAddresses();
            $mail->addAddress('harshilpatel4010@gmail.com', 'Owner');
            $mail->Subject = "New Exhibition Registration - $first_name $last_name";

            $mail->Body = "
               <h3>New Registration Details</h3>
                <table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse; width: 100%;'>
                    <tr><th>Field</th><th>Value</th></tr>
                    <tr><td><strong>Participation Type</strong></td><td>$participation_type</td></tr>
                    <tr><td><strong>Company Name</strong></td><td>$company_name</td></tr>
                    <tr><td><strong>Booth Area</strong></td><td>$booth_area</td></tr>
                    <tr><td><strong>Booth Type</strong></td><td>$booth_type</td></tr>
                    <tr><td><strong>Opening Type</strong></td><td>$opening_type</td></tr>
                    <tr><td><strong>Brand Names</strong></td><td>$brand_name_str</td></tr>
                    <tr><td><strong>Product Details</strong></td><td>$product_detail_str</td></tr>
                    <tr><td><strong>Title</strong></td><td>$title</td></tr>
                    <tr><td><strong>First Name</strong></td><td>$first_name</td></tr>
                    <tr><td><strong>Last Name</strong></td><td>$last_name</td></tr>
                    <tr><td><strong>Designation</strong></td><td>$designation</td></tr>
                    <tr><td><strong>Mobile</strong></td><td>$mobile</td></tr>
                    <tr><td><strong>Address</strong></td><td>$address_line1</td></tr>
                    <tr><td><strong>City</strong></td><td>$city</td></tr>
                    <tr><td><strong>Region</strong></td><td>$region</td></tr>
                    <tr><td><strong>Postal Code</strong></td><td>$postal_code</td></tr>
                    <tr><td><strong>Country</strong></td><td>$country</td></tr>
                    <tr><td><strong>Source</strong></td><td>$source</td></tr>
                    <tr><td><strong>Email</strong></td><td>$email</td></tr>
                </table>
                <p><strong>Submitted on:</strong> " . date('Y-m-d H:i:s') . "</p>
            ";

            $mail->send();
            header("Location: ../../index.php?status=success");
            exit();
        } catch (Exception $e) {
            die("Email sending failed: " . $mail->ErrorInfo);
        }
    } else {
        die("Database insertion failed: " . $stmt->error);
    }

} else {
    header("Location: ../exhibit_reg.php"); 
}
?>