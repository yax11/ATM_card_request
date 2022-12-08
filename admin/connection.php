<?php
session_start();
$_SESSION["admin"] = "admin";

if (isset($_SESSION["admin"])) {
    // echo $_SESSION["customer"];
    $customer = $_SESSION["customer"];
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "atm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
