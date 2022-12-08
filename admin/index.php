
<?php
include 'connection.php';

if (!isset($_SESSION["customer"])) {
    header("Location: ./../login.php");
}
// $email = $result['email'];

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
</head>

<body class="g-sidenav-show   bg-gray-100" style="background-color: #93C645 !important">
<div class="min-height-300 bg-primary position-absolute w-100" style="background-color: #93C645 !important;"></div>
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="index.php">
            <img src="./assets/img/favicon.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">Bank NSUK</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="./index.php">
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
                <a class="nav-link " href="./card_requests.php">
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
            <div class="container">


<div class="container row">
    <div class="col-lg-6">
        <div class="card card-profile">
            <img src="./assets/img/bg-profile.jpg" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
                <div class="col-4 col-lg-4 order-lg-2">
                    <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                        <a">
                            <img src="./assets/img/favicon.jpg" class="rounded-circle img-fluid border border-2 border-white">
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body pt-0">

                <div class="row mt-4">
                    <div class="col">
                        <div class="d-flex justify-content-center">

                            <div class="d-grid text-center m-2">
                                <span class="text-lg font-weight-bolder">
                                    <?php

                                    $q = $conn->query("SELECT * FROM `customers` WHERE 1");
                                        echo $q->num_rows;

                                    ?>
                                </span>
                                <span class="text-sm opacity-8">Total Customers</span>
                            </div>

                            <div class="d-grid text-center mx-4 m-2">
                                <span class="text-lg font-weight-bolder">
                                    <?php

                                    $q2_1 = $conn->query("SELECT * FROM `card1` WHERE `card_status` = 'active'");
                                    $q2_2 = $conn->query("SELECT * FROM `card2` WHERE `card_status` = 'active'");

                                    echo $q2_1->num_rows + $q2_2->num_rows;

                                    ?>
                                </span>
                                <span class="text-sm opacity-8">Active Cards</span>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col">
                        <div class="d-flex justify-content-center">


                            <div class="d-grid text-center m-2">
                                <span class="text-lg font-weight-bolder">
                                    <?php

                                    $q3_1 = $conn->query("SELECT * FROM `card1` WHERE `card_status` = 'blocked'");
                                    $q3_2 = $conn->query("SELECT * FROM `card2` WHERE `card_status` = 'blocked'");

                                    echo $q3_1->num_rows + $q3_2->num_rows;

                                    ?>

                                </span>
                                <span class="text-sm opacity-8">Blocked Cards</span>
                            </div>

                            <div class="d-grid text-center m-2">
                                <span class="text-lg font-weight-bolder">
                                    <?php

                                    $q3_1 = $conn->query("SELECT * FROM `card1` WHERE `card_status` = 'processing...'");
                                    $q3_2 = $conn->query("SELECT * FROM `card2` WHERE `card_status` = 'processing...'");

                                    echo $q3_1->num_rows + $q3_2->num_rows;

                                    ?>

                                </span>
                                <span class="text-sm opacity-8">Requested Cards</span>
                            </div>


                        </div>
                    </div>
                </div>


<!--                <div class="text-center mt-4">-->
<!--                    <h5>-->
<!--                        Mark Davis<span class="font-weight-light">, 35</span>-->
<!--                    </h5>-->
<!--                    <div class="h6 font-weight-300">-->
<!--                        <i class="ni location_pin mr-2"></i>Bucharest, Romania-->
<!--                    </div>-->
<!--                    <div class="h6 mt-4">-->
<!--                        <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer-->
<!--                    </div>-->
<!--                    <div>-->
<!--                        <i class="ni education_hat mr-2"></i>University of Computer Science-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>
    </div>

</div>



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
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="./assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>