<?php

if (!isset($_SESSION)){
    session_start();
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "atm";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['account_number']) && isset($_POST['password'])) {
  $account_number = "N".$_POST['account_number'];
  $password = $_POST['password'];
  if (!empty($account_number) && !empty($password)) {
    $sql = "SELECT `account_number` FROM customers WHERE `account_number` = '$account_number' && `online_password` = '$password' ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      $v = $result->fetch_assoc();
      $customer = $v["account_number"];
        $_SESSION['customer'] = $customer;
        echo "1";
    } else {
      echo "0";
    }
  } else{
    echo "One of the Fields is Empty";}
}else{
  echo "Data Not Set";
}
$conn->close();

