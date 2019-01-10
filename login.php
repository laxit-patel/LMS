<?php

if(isset($_POST["login_form"]))
{
    $name = $_POST["user_name"];

    header("Location: ./default_dashboard.php?user=$name");
}


?>
<!DOCTYPE html>
<html>

<head>
    <!-- include fonts and icons fromm includes -->
    <?php include_once("./backend/includes/landing_basic_head.html"); ?>
    
    <title>LMS - Login</title>
    <!-- Argon CSS -->
    <link type="text/css" href="./assets/css/argon.css?v=1.0.0" rel="stylesheet">
</head>

<body class="bg-default">
<div class="main-content">
    <!-- Navbar from includes folder-->
    <?php include_once("./backend/includes/login_navbar.html"); ?>

    <!-- Navbar Ends -->

    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8">

        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary shadow border-0">

                    <div class="card-body px-lg-5 py-lg-5">

                        <div class="text-xl text-center text-primary">Log In</div>
                        <hr>

                        <form role="form" method="post" action="">
                            <div class="form-group mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Email" type="email" name="user_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Password" type="password">
                                </div>
                            </div>
                            <div class="custom-control custom-control-alternative custom-checkbox">
                                <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                                <label class="custom-control-label" for=" customCheckLogin">
                                    <span class="text-muted">Remember me</span>
                                </label>
                            </div>
                            <div class="text-center">
                                <button name="login_form" type="submit" class="btn btn-primary my-4">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <a href="#" class="text-light"><small>Forgot password?</small></a>
                    </div>
                    <div class="col-6 text-right">
                        <a href="#" class="text-light"><small>Create new account</small></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Footer Include Starts -->
<!-- this super simple way will allow you to only change the original file located in ./backend/includes/landing_footer.html and all footer throughout the system will change automatically -->
<?php include_once("./backend/includes/login_footer.html"); ?>
<!-- Footer Include Ends -->


<!-- Argon Scripts -->
<!-- Core -->
<script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- Argon JS -->
<script src="./assets/js/argon.js?v=1.0.0"></script>
</body>

</html>