<?php
include "./../connection.php";
if (isset($_SESSION["customer"])) {
    $customer = $_SESSION["customer"];
}else{
    header("Location: ./../../login.php");
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
    die("customer not found");
}


$new_card_number = random_int(4,5).rand($min= 101, $max=999).rand($min= 1000, $max=9999).rand($min= 1000, $max=9999).rand($min= 1000, $max=9999);
$new_card_PIN = 1234;
$new_card_cvv = rand($min= 101, $max=999);
$new_card_exp = date('m').'/'.idate('y')+3;
//$date_applied = now


$q1 = "SELECT * FROM `card1` WHERE `account_number` = '$customer' ";
$query1 = $conn->query($q1);

$q2 = "SELECT * FROM `card2` WHERE `account_number` = '$customer' ";
$query2 = $conn->query($q2);

if (isset($_POST["r"]) && isset($_POST["card_type"]) && $_POST["d_address"]){
    $card_type = $_POST ["card_type"];
    $d_address = $_POST ["d_address"];
}else{
    die("Please fill all required fields");
}

//$_POST["r"] = "r";
//$_POST["card_type"] = "visa";
//$_POST["d_address"] = "Keffi";


if ($query1->num_rows == 0) {
//    echo "Card 1 space is Free<br>";
    $insert = "INSERT INTO `card1` (`id`, `account_number`, `card_number`, `card_exp`, `card_cvv`, `card_PIN`, `card_status`, `date_applied`) VALUES (NULL, '$customer' ,'$new_card_number', '$new_card_exp', '$new_card_cvv', '$new_card_PIN', 'processing...', NOW()) ";
    $result = $conn->query($insert);
    if ($result == 1) {
        echo '1';
    }else{
        echo 'Query not successful';
    }

}elseif ($query2->num_rows == 0){
//    echo "Card 2 space is Free<br>";
    $insert = "INSERT INTO `card2` (`id`, `account_number`, `card_number`, `card_exp`, `card_cvv`, `card_PIN`, `card_status`, `date_applied`) VALUES (NULL, '$customer' ,'$new_card_number', '$new_card_exp', '$new_card_cvv', '$new_card_PIN', 'processing...', NOW()) ";
    $result = $conn->query($insert);
    if ($result == 1) {
        echo '1';
    }else{
        echo 'Query not successful';
    }

}else{
    echo "<span style='color: red'>Maximum number of cards Reached</span>";
}


?>
