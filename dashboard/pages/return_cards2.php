<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 


if (isset($_SESSION["customer"])) {
  $customer = $_SESSION["customer"];
}else{
  header("Location: ./../../login.php");
}


$details = "0";

if (isset($_POST['info'])) {
  
  if ($_POST["info"] == "all") {
    $details = "all";
  }else{
    $details = "0";
  }

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


$q2 = "SELECT * FROM `card2` WHERE `account_number` = '$customer' ";

$query2 = $conn->query($q2);

if ($query2->num_rows == 1) {
  $card2 = $query2->fetch_assoc();



    $number = $card2["card_number"];
    $status = $card2["card_status"];
    $exp = $card2["card_exp"];

    switch ($status) {
        case 'active':
            $status = "<span class='badge badge-sm bg-gradient-success'>$status</span>";
            $block_card = <<<c
            <a class='btn bg-warning text-white mb-0'onclick="block_card('$number')"><i class='fas fa-exclamation'></i>&nbsp;&nbsp;Block Card</a><br><br>
c;
            $view = <<<c
            <a class="btn bg-gradient-light mb-0" onclick="track_card2()"><i class="fas"></i>View</a>
c;
            // code...
            break;

        case 'blocked':
            $status = "<span class='badge badge-sm bg-gradient-danger'>$status</span>";
            $block_card = <<<c
    <a class='btn bg-success text-white mb-0'onclick="unblock_card('$number')"><i class='fas fa-exclamation'></i>&nbsp;&nbsp;Unblock Card</a><br><br>
c;    // code...
            $view = <<<c
    <a class="btn bg-gradient-light mb-0" onclick="track_card2()"><i class="fas"></i>View</a>
c;
            break;

        case 'processing...':
            $status = "<span class='badge badge-sm bg-gradient-warning'>$status</span>";
            $block_card = <<<c
            <a class='btn bg-warning text-white mb-0'onclick="view_status('$number')"><i class='fas fa-exclamation'></i>&nbsp;&nbsp;Block Card</a><br><br>
c;
            $view = <<<c
            <a class="btn bg-gradient-light mb-0" onclick="track_process()"><i class="fas"></i>Track</a>
c;
            $exp = "-";
            // code...
            break;

        default:
            // code...
            break;
    }

if (substr($number, 0,1) == '5') {
  $type = "Master Card";
  $image = "../assets/img/logos/mastercard.png";
}else{
  $type = "Visa";
  $image = "../assets/img/logos/visa.png";
}

$names = $result["first_name"]." ".$result["last_name"];


$cards1 = <<<CARDS

                      <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="$image" class="avatar avatar-sm me-3" alt="user5">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">$names</h6>
                            <p class="text-xs text-secondary mb-0">$type</p>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                          $status
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">$exp</span>
                      </td>
                      <td class="align-middle">
                      <input type="hidden" name="card2" id="card2" value="$number">
                      <input type="hidden" name="card2_customer" id="card2" value="$number">
                      $view
                      </td>
                    </tr>


CARDS;

$cards1_all = <<<CARDS

<div class="row">
<div class="col-12">
<div class="row">
            <div class="col-12 mb-xl-0 mb-4">
              <div class="card bg-transparent shadow-xl">
                <div class="overflow-hidden position-relative border-radius-xl" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/card-visa.jpg');">
                  <span class="mask bg-gradient-dark"></span>
                  <div class="card-body position-relative z-index-1 p-3">
                    <i class="fas fa-wifi text-white p-2"></i>
                    <h5 class="text-white mt-4 mb-5 pb-2">$number</h5>
                    <div class="d-flex">
                      <div class="d-flex">
                        <div class="me-4">
                          <p class="text-white text-sm opacity-8 mb-0">Card Holder</p>
                          <h6 class="text-white mb-0">$names</h6>
                        </div>
                        <div>
                          <p class="text-white text-sm opacity-8 mb-0">Expires</p>
                          <h6 class="text-white mb-0">$exp</h6>
                        </div>
                      </div>
                      <div class="ms-auto w-20 d-flex align-items-end justify-content-end">
                        <img class="w-60 mt-2" src="$image" alt="logo">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="row">
                <div class="col-md-6 mt-md-0 mt-4">
                  <div class="card">
                    <div class="card-body pt-0 p-3 text-center"><br>
                      
                      $block_card                    
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>
</div>
</div>
</div>


CARDS;



if ($details == "all") {
  echo $cards1_all;
}else{
  echo $cards1;
}




} else {
  $card2_status = '0';
  // die();
  // die("<span>Card 1 Not Available</span>");
}