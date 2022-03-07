<?php 

$server = "localhost";
$username = "root";
$password = "";
$database = "login_register_cake";

    $conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die( '<script>alert("Connection Failed.")</script>'.mysqli_connect_error());
}
?>