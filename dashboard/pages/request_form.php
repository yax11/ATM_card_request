<?php
include "./../connection.php";


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

$customer = $_SESSION["customer"];
$q = "SELECT * FROM `customers` WHERE `account_number` = '$customer' ";
$query = $conn->query($q);

if ($query->num_rows > 0) {
    $result = $query->fetch_assoc();
} else {
    die("customer not found");
}


?>


<div class="col">
  <div class="card">
    <div class="card-body">
      <p class="text-uppercase text-sm">Card Request Form</p>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="example-text-input" class="form-control-label">Name to Appear on Card</label>
            <input class="form-control" type="text" value="<?php echo $result['last_name']." ".$result['first_name'] ?>" readonly>
          </div>
        </div>
      </div>

        <div class="col-md">
          <div class="form-group">
            <label for="example-text-input" class="form-control-label">Card Type</label>
            <select class="form-control" name="card_type" id="card_type">
              <option>Master card</option>
              <option>Visa card</option>
            </select>
          </div>
        </div>
      </div>

        <div class="row">
            <div class="col-md">
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Delivery Address</label>
                    <input class="form-control" type="text" value="FNAS NSUK" name="d_address" id="d_address">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Notice</label>
                    <input class="form-control" type="text" value="An update will be sent to your registered email address." readonly>
                </div>
            </div>
        </div>

      <div class="row" >
          <p class="text-center" id="error_area" >

          </p>

      </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <button type="button" class="btn btn-lg btn-primary btn-lg " style="background-color: #93C645;"  onclick="send_data()">Submit</button>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>


