<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->

    <style>

        .progress {
            position: relative;
            height: 25px;
            padding-left: 0;
            padding-right: 0;
        }
        .progress > .progress-type {
            position: absolute;
            left: 0;
            font-weight: 800;
            padding: 3px 30px 2px 10px;
            color: rgb(255, 255, 255);
            background-color: rgba(25, 25, 25, 0.2);
        }
        .progress > .progress-completed {
            position: absolute;
            right: 0;
            font-weight: 800;
            padding: 0;
        }
    </style>
</head>
<body>

<?php

include "./../connection.php";

if (isset($_SESSION["customer"])){
    $customer = $_SESSION["customer"];
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "atm";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$q1 = "SELECT * FROM `card1` WHERE `account_number` = '$customer' and `card_status` = 'processing...'";
$query1 = $conn->query($q1);

function differenceInHours($startdate, $enddate){
    $starttimestamp = strtotime($startdate);
    $endtimestamp = strtotime($enddate);
    return round(abs($endtimestamp - $starttimestamp)/3600);
}

if ($query1->num_rows > 0) {
    $r = $query1->fetch_assoc();
    $startdate = date($r['date_applied']);
    $enddate = date('Y-m-d H:i:s');
    $difference = differenceInHours($startdate, $enddate);
//    echo $difference;
    $width = ($difference*4)+4;
    $dif = 24 - $difference;
    $card1 = <<<card
<div class="container">
    <div class="row">
        <span class="mb-4" >Card will be available(Active) in $dif Hour(s) time.</span>
        <span class="mb-4" >A mail will be sent to you with updates.</span>
        <div class="progress">
<!--                <span class="sr-only">Complete</span>-->
                    <div style="width: $width%" class="progress-bar progress-bar-success" role="progressbar" >
                <span class="sr-only">Complete</span>
            </div>
            <span class="progress-completed">$width%</span>
        </div>
    </div>
</div>
card;
    echo $card1;
}

$q2 = "SELECT * FROM `card2` WHERE `account_number` = '$customer' and `card_status` = 'processing...'";
$query2 = $conn->query($q2);

if ($query2->num_rows > 0){
    $r = $query2->fetch_assoc();
    $startdate = date($r['date_applied']);
    $enddate = date('Y-m-d H:i:s');
    $difference = differenceInHours($startdate, $enddate);
//    echo $difference;
    $width = ($difference*4)+4;
    $dif = 24 - $difference;
    $card2 = <<<card
<div class="container">
    <div class="row">
        <span class="mb-4" >Card will be available(Active) in $dif Hour(s) time.</span>
        <span class="mb-4" >A mail will be sent to you with updates.</span>
        <div class="progress">
<!--                <span class="sr-only">Complete</span>-->
                    <div style="width: $width%" class="progress-bar progress-bar-success" role="progressbar" >
                <span class="sr-only">Complete</span>
            </div>
            <span class="progress-completed">$width%</span>
        </div>
    </div>
</div>
card;

    echo $card2;
}


?>

</body>
</html>
