
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
      <a class="navbar-brand m-0" href="index.php ">
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
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./pages/cards.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Cards</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Transfers</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Bill Payment</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Quick Loan</span>
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
          <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><?php echo $result['first_name']; ?></span>
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
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Account Balance</p>
                    <h5 class="font-weight-bolder">
                      <?php echo '???'.$result['account_balance'] ?>
                    </h5>
<!--                     <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder">+55%</span>
                      since yesterday
                    </p> -->
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

        <div class="row">

        <div class="col-lg-4 mt-4">
            <div class="card card-profile">
                <img src="./assets/img/bg-profile.jpg" alt="Image placeholder" class="card-img-top">
                <div class="row justify-content-center">
                    <div class="col-4 col-lg-4 order-lg-2">
                        <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                            <a>
                                <img src="./assets/img/team-2.png" class="rounded-circle img-fluid border border-2 border-white" alt="">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body pt-0">
                    <div class="text-center mt-4">

                        <div class="h6 font-weight-300">
                            <?php echo $result['email'];?>
                        </div>
                        <div class="h6 font-weight-300">
                            <span class="text-sm opacity-8">Full name</span><br>
                            <?php echo $result['first_name']." ".$result['last_name']." ".$result['other_name'];?>
                        </div>

                        <div class="h6 font-weight-300">
                            <span class="text-sm opacity-8">Account Number</span><br>
                            <?php echo ltrim($result['account_number'], "N");?>
                        </div>

                        <div class="h6 font-weight-300">
                            <span class="text-sm opacity-8">BVN</span><br>
                            <?php echo ltrim($result['BVN'], "B");?>
                        </div>

                    </div>
                </div>
            </div>
        </div>







        <div class="col-lg mb-lg-0 mb-4 mt-4">
          <div class="card ">
            <div class="card-header pb-0 p-3">
              <div class="d-flex justify-content-between">
                <h6 class="mb-2">Transaction History</h6>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center ">
                <thead>
                <tr>
                    <td class="w-30">
                        <div class="d-flex px-2 py-1 align-items-center">
                            <div class="ms-4">
                                <p class="text-xs font-weight-bold mb-0">Date</p>
<!--                                <h6 class="text-sm mb-0"></h6>-->
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <p class="text-xs font-weight-bold mb-0">Merchant:</p>
<!--                            <h6 class="text-sm mb-0">$230,900</h6>-->
                        </div>
                    </td>
                    <td class="align-middle text-sm">
                        <div class="col text-center">
                            <p class="text-xs font-weight-bold mb-0">Amount:</p>
<!--                            <h6 class="text-sm mb-0">29.9%</h6>-->
                        </div>
                    </td>
                </tr>
                </thead>
                  <tbody>
                  <tr>
                    <td class="w-30">
                      <div class="d-flex px-2 py-1 align-items-center">
                        <div>
                            <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">
                                <i class="fas fa-arrow-down" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="ms-4">
                          <p class="text-xs font-weight-bold mb-0">2022-12-05 18:31:59</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="text-center">
<!--                        <p class="text-xs font-weight-bold mb-0">Sales:</p>-->
                        <h6 class="text-sm mb-0">Chris Joan: GT Bank</h6>
                      </div>
                    </td>
                    <td>
                      <div class="text-center">
<!--                        <p class="text-xs font-weight-bold mb-0">Value:</p>-->
                        <h6 class="text-sm mb-0">40,000</h6>
                      </div>
                    </td>

                  </tr>
                  <tr>
                    <td class="w-30">
                      <div class="d-flex px-2 py-1 align-items-center">
                        <div>
                            <button class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">
                                <i class="fas fa-arrow-up" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="ms-4">
                            <p class="text-xs font-weight-bold mb-0">2022-12-05 18:31:59</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="text-center">
<!--                        <p class="text-xs font-weight-bold mb-0">Sales:</p>-->
                        <h6 class="text-sm mb-0">John Emmanuel : Access Bank</h6>
                      </div>
                    </td>
                    <td>
                      <div class="text-center">
<!--                        <p class="text-xs font-weight-bold mb-0">Value:</p>-->
                        <h6 class="text-sm mb-0">190,700</h6>
                      </div>
                    </td>

                  </tr>
                  <tr>
                    <td class="w-30">
                      <div class="d-flex px-2 py-1 align-items-center">
                        <div>
                            <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">
                                <i class="fas fa-arrow-down" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="ms-4">
                            <p class="text-xs font-weight-bold mb-0">2022-12-05 18:31:59</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="text-center">
<!--                        <p class="text-xs font-weight-bold mb-0">Sales:</p>-->
                        <h6 class="text-sm mb-0">Justin Emeka: NSUK Bank</h6>
                      </div>
                    </td>
                    <td>
                      <div class="text-center">
<!--                        <p class="text-xs font-weight-bold mb-0">Value:</p>-->
                        <h6 class="text-sm mb-0">143,960</h6>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
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