<?php
$host = "localhost";
$user = "root";  // Change this if you have a different MySQL username
$password = "";  // Change this if your MySQL has a password
$database = "vifair";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}
?>

<?php
// $host = "localhost";
// $user = "u779815092_vibrantindia";  // Removed extra quote
// $password = "t&ZndsVs3#CVibrantFair";
// $database = "u779815092_vibrantindia";

// $conn = new mysqli($host, $user, $password, $database);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
?>
