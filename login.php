<?php
session_start();
if (isset($_SESSION["customer"])) {
  header("Location: ./index.php");
  echo "window.location.replace('./dashboard/');";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./dashboard/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./dashboard/assets/img/favicon.png">
    <title>
        Login
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="./dashboard/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./dashboard/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="./dashboard/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="./dashboard/assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />

    <meta charset="utf-8">

    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="css/jquery.loadingModal.css">


</head>

<body class="">


<main class="main-content  mt-0">
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                        <div class="card card-plain">
                            <div class="card-header pb-0 text-start">
                                <h4 class="font-weight-bolder">Sign In</h4>
                                <p class="mb-0">Enter your online banking details</p>
                            </div>
                            <div class="card-body">
                                <form role="form">
                                    <div class="mb-3">
                                        <input class="form-control form-control-lg" placeholder="Account Number" name="account_number" id="account_number"  aria-label="Email">
                                    </div>
                                        <div class="mb-3">
                                            <input type="password" class="form-control form-control-lg" name="password" placeholder="Password" id="password" aria-label="Password">
                                        </div>
                                    <div class="text-center">
                                        <button type="button" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0" style="background-color: #93C645;"  onclick="send_data()">Sign in</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                        <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                             style="
                   background-image: url('dashboard/assets/img/bg-profile.jpg');
                   background-position: center;
                   background-size: auto;
                   background-repeat: no-repeat">
                            <span class="mask bg-gradient-primary opacity-6"></span>
                            <h4 class="mt-5 text-white font-weight-bolder position-relative">"Attention is the new currency"</h4>
                            <p class="text-white position-relative">The more effortless the writing looks, the more effort the writer actually put into the process.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!--   Core JS Files   -->
<script src="./dashboard/assets/js/core/popper.min.js"></script>
<script src="./dashboard/assets/js/core/bootstrap.min.js"></script>
<script src="./dashboard/assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="./dashboard/assets/js/plugins/smooth-scrollbar.min.js"></script>
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
<script src="./dashboard/assets/js/argon-dashboard.min.js?v=2.0.4"></script>

<script type="text/javascript">

    function send_data() {
        let $an = $("#account_number").val();
        let $pw = $("#password").val();

        $.ajax({url: "log.php",
            type: 'POST',
            data: {
                account_number: $an,
                password: $pw,
            },
            success: function(data, textStatus){
                let x = data;

                if (x === '1') {
                    swal({
                        // title:"Success!",
                        title:"Logged In",
                        // text:"Loged In!",
                        icon:"success",
                    });
                    window.location.href = "./dashboard";

                } else if(x === "0"){
                    swal({
                        title:"Invalid Login Detials!",
                        // title:x,
                        text:"",
                        icon:"error",
                    });



                }else{
                    swal({
                        // title:x,
                        title:"Error",
                        text:"",
                        icon:"error",
                    });
                }


            }})

    }

</script>

</body>

</html>