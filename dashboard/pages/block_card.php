<?php 

include './../connection.php';

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 


if (isset($_SESSION["customer"])) {
  $customer = $_SESSION["customer"];
}else{
  header("Location: ./../../login.php");
}


// $_POST['card_number'] = '5173 1267 2126 8484';

if (isset($_POST['card_number'])) {
	$card_number = $_POST['card_number'];
}else{
	die("No card details received");
}

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$q1 = "SELECT * FROM `card1` WHERE `card_number` = '$card_number' ";
$q2 = "SELECT * FROM `card2` WHERE `card_number` = '$card_number' ";

$query1 = $conn->query($q1);
$query2 = $conn->query($q2);


if ($query1->num_rows > 0) {
  $result = $query1->fetch_assoc();
  // echo "1";

} elseif ($query2->num_rows > 0){
  $result = $query2->fetch_assoc();
  // echo "2";
}else{
  die("Card not found");
}


$customer = $result["account_number"];

$card1 = "SELECT * FROM `card1` WHERE `card_number` = '$card_number' ";
$card2 = "SELECT * FROM `card2` WHERE `card_number` = '$card_number' ";


$Card1 = $conn->query($card1);
$Card2 = $conn->query($card2);



if ($Card1->num_rows == 1) {
	// echo "FOUND IN 1"; 
  	$d = "UPDATE `card1` SET `card_status` = 'blocked' WHERE `account_number` = '$customer' ";
  	$dq = $conn->query($d);
  	
  	if ($dq) {
  		echo "DONE";
  	}


} elseif ($Card2->num_rows == 1) {
	// echo "FOUND IN 2";
  	$d = "UPDATE `card2` SET `card_status` = 'blocked' WHERE `account_number` = '$customer' ";
  	$dq = $conn->query($d);
  	// $r = $query->fetch_assoc();
  	if ($dq) {
  		echo "DONE";
  	}

}else {
  echo "NOT FOUND";
}

