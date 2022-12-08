<?php
include './../connection.php';
include "./../update_card_status.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./../assets/img/favicon.png">
  <link rel="icon" type="image/png" href="./../assets/img/favicon.png">
  <title>
      Bank NSUK
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="./../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="./../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="./../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

</head>

<body class="g-sidenav-show   bg-gray-100" style="background-color: #93C645 !important">
  <div class="min-height-300 bg-primary position-absolute w-100" style="background-color: #93C645 !important;"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="./index.php ">
        <img src="./../assets/img/favicon.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Bank NSUK</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="./../index.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="cards.php">
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
          <h6 class="font-weight-bolder text-white mb-0">Cards</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body">
                <?php echo $result['first_name']; ?>
              </span>
              <!-- <input type="text" class="form-control" placeholder="Type here..."> -->
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="./../logout.php" class="nav-link text-white font-weight-bold px-0">
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
        <div class="col-lg-8">
          <div class="row">
            <div class="col-md-12 mb-lg-4 mb-4">
              <div class="card mt-4">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col d-flex align-items-center">
                      <a class="btn bg-gradient-dark mb-0" onclick="request_new_card()">
                        <i class="fas fa-plus"></i>&nbsp;&nbsp;&nbsp;&nbsp;Request New Card</a>
                    </div>
                  </div>
                </div>
                  <div class="card-content">
                      &nbsp;
                  </div>
              </div>
            </div>

          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Cards Information</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cards Type</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Expires</th>
                      <th class="text-secondary opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php 
                    include('return_cards.php');
                    include('return_cards2.php');
                     ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>

<!-- Insert the table here -->

          </div>
        </div>

        <div class="col-md-4 mt-4">
          <div class="card card-profile">
            <img src="../assets/img/bg-profile.jpg" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
              <div class="col-4 col-lg-4 order-lg-2">
                <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                  <a href="javascript:;">
                    <img src="./../assets/img/team-2.png" class="rounded-circle img-fluid border border-2 border-white" alt="">
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
      </div>


        <div class="col-12 mt-4">
          <!-- Former card Location -->
        </div>


    
    </div>
  </main>

  <!--   Core JS Files   -->
  <script src="./../assets/js/core/popper.min.js"></script>
  <script src="./../assets/js/core/bootstrap.min.js"></script>
  <script src="./../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./../assets/js/plugins/smooth-scrollbar.min.js"></script>
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
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./../assets/js/argon-dashboard.min.js?v=2.0.4"></script>

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

  <script type="text/javascript">

      function track_process(){
          $.ajax({
              url: "track_cards.php",
              type: 'POST',
              data:{info:"all"},
              success: function(data, textStatus) {
                  Swal.fire({
                      html: data,
                      showCloseButton: false,
                  })
              }
          })
      }

    function view_status(){
      alert("HI");
    }

    function track_card() {
      $.ajax({
        url: "return_cards.php",
        type: 'POST',
        data:{info:"all"},
        success: function(data, textStatus) {
          Swal.fire({
            html: data,
            showCloseButton: false,
          })
        }
      })
    }

    function track_card2() {
      $.ajax({
        url: "return_cards2.php",
        type: 'POST',
        data:{info:"all"},
        success: function(data, textStatus) {
          Swal.fire({
            html: data,
            showCloseButton: false,
          })
        }
      })
    }


    function request_new_card() {
      $.ajax({
        url: "request_form.php",
        success: function (data, textStatus) {
          form = data
          Swal.fire({
            html: form,
              showCloseButton: true,
              showConfirmButton: false,
              allowOutsideClick: false,
              allowEscapeKey: false,
              showClass: {
                  // popup: 'animate__animated animate__fadeIn'
              },
              hideClass: {
                  popup: 'animate__animated animate__fadeOut'
              }
          })
        }
      })
    }


    function block_card(number) {
        $.ajax({
        url: "block_card.php",
        type: 'POST',
        data:{card_number: number},
        success: function(data, textStatus) {
          Swal.fire({
            html: data,
              showConfirmButton: false,
          })
          setTimeout(() => { location.reload(); }, 2000);

        },
      })
    }

    function unblock_card(number) {
        $.ajax({
        url: "unblock_card.php",
        type: 'POST',
        data:{card_number: number},
        success: function(data, textStatus) {
          Swal.fire({
            html: data,
            showConfirmButton: false,
            })
          setTimeout(() => { location.reload(); }, 2000);
        }
      })
    }

    function send_data() {
          let card_type = $('#card_type').val();
          let d_address = $('#d_address').val();

        $.ajax({
            url: "request_card.php",
            type: 'POST',
            data:{card_type: card_type, d_address: d_address,r:'1'},
            success: function(data, textStatus) {

                if (data === "1") {
                    setTimeout(function() {$("#error_area").html("")}, 2000)
                    Swal.fire({
                        html: "Request Successfully sent",
                        text: 'An email will be sent to your Email with Updates!',
                        position: 'top',
                        icon: 'success',
                        timer: 1500,
                        showCloseButton: false,
                        showConfirmButton: false,
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                    })

                } else{
                    setTimeout(function() {$("#error_area").html(data)}, 2000)
                }
            },
            beforeSend: function() {
                $("#error_area").html("<img src='./../assets/img/spinner.gif' width='50'>")
            }
        })
      }

  </script>



</body>

</html>
