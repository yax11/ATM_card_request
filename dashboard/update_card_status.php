<?php

//include "./../connection.php";


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


$q1 = "SELECT * FROM `card1` WHERE `account_number` = '$customer' and `card_status` = 'processing...'";
$query1 = $conn->query($q1);

$q2 = "SELECT * FROM `card2` WHERE `account_number` = '$customer' and `card_status` = 'processing...'";
$query2 = $conn->query($q2);

function differenceInHours($startdate,$enddate){
    $starttimestamp = strtotime($startdate);
    $endtimestamp = strtotime($enddate);
    $difference = round(abs($endtimestamp - $starttimestamp)/3600);
    return $difference;
}

if ($query1->num_rows > 0) {
    $r = $query1->fetch_assoc();
    $startdate = date($r['date_applied']);
    $enddate = date('Y-m-d H:i:s');
    $difference = differenceInHours($startdate, $enddate);
//    echo $difference;
        if ($difference >= 24){
        $q1 = "UPDATE `card1` SET `card_status` = 'active' WHERE `account_number` = '$customer'";
        $query1 = $conn->query($q1);
        if ($query1){
//            echo $query1;
//            echo "Updated to ACTIVE";
        }
    }
//    else{
//        echo "Not Up to 24 Hours Yet";
//    }

}
//Move the below line up to runf the else statement
//else{
//    echo "No Processing card available";
//}


if ($query2->num_rows > 0){
    $r = $query2->fetch_assoc();
    $startdate = date($r['date_applied']);
    $enddate = date('Y-m-d H:i:s');
    $difference = differenceInHours($startdate, $enddate);
//    echo $difference;
        if ($difference >= 24){
        $q2 = "UPDATE `card2` SET `card_status` = 'active' WHERE `account_number` = '$customer'";
        $query2 = $conn->query($q2);
        if ($query2){
//            echo $query2;
//            echo "Updated to ACTIVE";
        }
    }else{
//        echo "Not Up to 24 Hours Yet";
    }

}
?>
