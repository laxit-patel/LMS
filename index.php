<!DOCTYPE html>
<html>

<head>
    <!-- include fonts and icons fromm includes -->
    <?php include_once("./backend/includes/landing_basic_head.html"); ?>

    <title>Library Management System</title>
    <!-- Argon CSS -->
    <link type="text/css" href="./assets/css/argon_style.css?v=1.0.1" rel="stylesheet">

</head>

<body>
<header class="header-global">
    <!-- include Nav fromm includes -->
    <?php include_once("./backend/includes/landing_navigation.html"); ?>
</header>
<main>
    <div class="position-relative">
        <!-- shape Hero -->
        <section class="section section-lg section-shaped pb-250">
            <div class="shape shape-style-1 shape-default">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="container py-lg-md d-flex">
                <div class="col px-0">
                    <div class="row">
                        <div class="col-lg-6">
                            <h1 class="display-3  text-white">A beautiful Library Management System
                                <span>With Soothing Interface</span>
                            </h1>
                            <p class="lead  text-white">Some Catchy paragraph about website and its components.</p>
                            <div class="btn-wrapper">
                                <a href="login.php" class="btn btn-info btn-icon mb-3 mb-sm-0">
                                    <span class="btn-inner--icon"><i class="fa fa-code"></i></span>
                                    <span class="btn-inner--text">Login</span>
                                </a>
                                <a href="singup.php" class="btn btn-white btn-icon mb-3 mb-sm-0">
                                    <span class="btn-inner--icon"><i class="ni ni-cloud-download-95"></i></span>
                                    <span class="btn-inner--text">Signup</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SVG separator -->
            <div class="separator separator-bottom separator-skew">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </section>
        <!-- 1st Hero Variation -->
    </div>








    <section class="section section-lg">
        <div class="container">
            <div class="row row-grid justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="display-3">some appealing text for
                        <span class="text-success">LMS homepage</span>
                    </h2>
                    <p class="lead">and this is some bla bla bla blabla blabla blabla blabla blabla blabla blabla blabla blacopy paste paragraph </p>
                    <div class="btn-wrapper">
                        <a href="" class="btn btn-primary mb-3 mb-sm-0">Get Started</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>

<!-- Footer Include Starts -->
<!-- this super simple way will allow you to only change the original file located in ./backend/includes/landing_footer.html and all footer throughout the system will change automatically -->
<?php include_once("./backend/includes/landing_footer.html"); ?>
<!-- Footer Include Ends -->

<!-- Core JS-->
<!-- this here were adding basic javascript files that are needed to run website remain same throughout the system -->
<?php include_once("./backend/includes/core_javascript_files.html"); ?>
<!-- Argon JS -->
<!-- argon.js is not included in core js because its javascript file of templates of template -->
<script src="./assets/js/argon_style.min.js"></script>
</body>

</html>