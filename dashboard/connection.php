<?php

session_start();

if (isset($_SESSION["customer"])) {
  // echo $_SESSION["customer"];
  $customer = $_SESSION["customer"];
}else{
  header("Location: ./../login.php");
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

$q = "SELECT * FROM `customers` WHERE `account_number` = '$customer' ";

$query = $conn->query($q);


if ($query->num_rows > 0) {

  $result = $query->fetch_assoc();
} else {
  echo "customer not found";
}
