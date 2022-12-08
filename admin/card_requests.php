
<?php
include 'connection.php';

if (!isset($_SESSION["customer"])) {
    header("Location: ./../login.php");
}

$table_start = <<<table


      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Projects table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                  <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                      <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                      <input type="text" class="form-control" placeholder="Type here...">
                    </div>
                  </div>
                <table class="table align-items-center justify-content-center mb-0 display" id="all_customers"  style="width:100%">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Account Number</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Card Number</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Card Expires</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">CVV</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Status</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Action</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>

table;

$table_end = <<<table
    
                      </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>



table;



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/favicon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <title>
        Bank NSUK
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="./assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />


    <link id="pagestyle" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet" />
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>


    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <script>

        $(document).ready( function () {
            $('#all_customers').DataTable();
        } );
    </script>


</head>

<body class="g-sidenav-show   bg-gray-100" style="background-color: #93C645 !important">
<div class="min-height-300 bg-primary position-absolute w-100" style="background-color: #93C645 !important;"></div>
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.php " target="_blank">
            <img src="./assets/img/favicon.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">Bank NSUK</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="./index.php">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Admin Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="./all_customers.php">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">All Customers</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active " href="./card_requests.php">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Cards requests</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="#">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-app text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Settings & Help</span>
                </a>
            </li>

</aside>
<main class="main-content position-relative border-radius-lg " style="background-color: #93C645 !important">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page"></li>
                </ol>
                <h6 class="font-weight-bolder text-white mb-0">Admin Dashboard</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                        <span class="input-group-text text-body">Admin</span>
                        <!-- <input type="text" class="form-control" placeholder="Type here..."> -->
                    </div>
                </div>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a href="./logout.php" class="nav-link text-white font-weight-bold px-0">
                            <i class="fa fa-user me-sm-1"></i>
                            <span class="d-sm-inline d-none">Sign Out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col mb-xl-0 mb-4">



                <?php
                $q1 = "SELECT * FROM `card1` WHERE `card_status` = 'processing...'";
                $q2 = "SELECT * FROM `card2` WHERE `card_status` = 'processing...'";

                $query1 = $conn->query($q1);
                $query2 = $conn->query($q2);


                if ($query1->num_rows > 0){

                    echo $table_start;

                    while ($row = $query1->fetch_assoc()){

                        $an = ltrim($row['account_number'], "N");
                        $cn = $row['card_number'];
                        $cx = $row['card_exp'];
                        $cvv = $row['card_cvv'];
                        $cs = $row['card_status'];
                        $da = $row['date_applied'];

                        $rows = <<<row

                    <tr>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">$an</p>
                      </td>
                      
                      <td>
                        <p class="text-sm font-weight-bold mb-0">$cn</p>
                      </td>

                      <td>
                        <span class="text-xs font-weight-bold">$cx</span>
                      </td>

                      <td>
                        <span class="text-xs font-weight-bold">$cvv</span>
                      </td>

                      <td>
                        <span class="text-xs font-weight-bold">$cs</span>
                      </td>

                      <td>
                        <span class="text-xs font-weight-bold">$da</span>
                      </td>

                    </tr>


row;
                        echo $rows;
                    }


                }else{
//                    echo "Not Found";
                }



                if ($query2->num_rows > 0){

                    while ($row = $query2->fetch_assoc()){

                        $an = ltrim($row['account_number'], "N");
                        $cn = $row['card_number'];
                        $cx = $row['card_exp'];
                        $cvv = $row['card_cvv'];
                        $cs = $row['card_status'];
                        $da = $row['date_applied'];

                        $rows = <<<row

                    <tr>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">$an</p>
                      </td>
                      
                      <td>
                        <p class="text-sm font-weight-bold mb-0">$cn</p>
                      </td>

                      <td>
                        <span class="text-xs font-weight-bold">$cx</span>
                      </td>

                      <td>
                        <span class="text-xs font-weight-bold">$cvv</span>
                      </td>

                      <td>
                        <span class="text-xs font-weight-bold">$cs</span>
                      </td>

                      <td>
                        <span class="text-xs font-weight-bold">$da</span>
                      </td>

                    </tr>


row;
                        echo $rows;
                    }

                    echo $table_end;

                }else{
//                    echo "Not Found";
                }

                ?>



            </div>
        </div>
    </div>


</main>
<!--   Core JS Files   -->
<script src="./assets/js/core/popper.min.js"></script>
<script src="./assets/js/core/bootstrap.min.js"></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="./assets/js/plugins/chartjs.min.js"></script>

<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }


</script>
<!-- Github buttons -->
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="./assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>