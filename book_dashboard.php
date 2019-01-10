<?php

if(isset($_GET["user"]))
{
    $user = $_GET["user"];
}
else
{
    $user = "Stranger";
}

?>
<!DOCTYPE html>
<html>

<head>

    <!-- include basic header-->
    <?php include_once("./backend/includes/landing_basic_head.html"); ?>
    <!-- head End -->

    <title>Books</title>
    <!-- Argon CSS -->
    <link type="text/css" href="./assets/css/argon.css?v=1.0.0" rel="stylesheet">
</head>

<body>
<!-- Sidenav include from backend/includes-->
<?php include_once("./backend/includes/dashboard_sidenav.html"); ?>
<!-- sidenav ends>

<!-- Main content -->
<div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./default_dashboard.php">Books</a>
            <?php include_once("./backend/includes/dashboard_topnav.html"); ?>

        </div>
    </nav>
    <!-- Header -->

    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="card bg-dark shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-white text-lg mb-0">Last Added</h5>
                            <span class="h2 font-weight-bold mb-0 text-primary">What A Man Live By</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
                                <i class="fas fa-chart-bar"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                        <span class="text-nowrap text-white">Since last month</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Page content -->
    <div class="container-fluid mt--8">

        <!-- Dark table -->
        <div class="row mt-5">
            <div class="col">
                <div class="card bg-default shadow">
                    <div class="card-header bg-transparent border-0">
                        <h3 class="text-white mb-0">Available Books</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-dark table-flush">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Author</th>
                                <th scope="col">Status</th>
                                <th scope="col">Users</th>
                                <th scope="col">Duration</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <a href="#" class="avatar rounded-circle mr-3">
                                            <img alt="Image placeholder" src="./assets/img/icons/flat-literature/002-ebook-1.png    ">
                                        </a>
                                        <div class="media-body">
                                            <span class="mb-0 text-sm">What A Man Live By</span>
                                        </div>
                                    </div>
                                </th>
                                <td>
                                    Tolstoy
                                </td>
                                <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i> Fetched
                      </span>
                                </td>
                                <td>
                                    <div class="avatar-group">
                                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                            <img alt="Image placeholder" src="./assets/img/theme/team-1-800x800.jpg" class="rounded-circle">
                                        </a>
                                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Romina Hadid">
                                            <img alt="Image placeholder" src="./assets/img/theme/team-2-800x800.jpg" class="rounded-circle">
                                        </a>
                                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Alexander Smith">
                                            <img alt="Image placeholder" src="./assets/img/theme/team-3-800x800.jpg" class="rounded-circle">
                                        </a>
                                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Jessica Doe">
                                            <img alt="Image placeholder" src="./assets/img/theme/team-4-800x800.jpg" class="rounded-circle">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="mr-2">60%</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>


                            <tr>




                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php include_once("./backend/includes/login_footer.html"); ?>
    </div>
</div>
<!-- Argon Scripts -->
<!-- Core -->
<?php include_once("./backend/includes/core_javascript_files.html"); ?>
<!-- Optional JS -->
<script src="./assets/vendor/chart.js/dist/Chart.min.js"></script>
<script src="./assets/vendor/chart.js/dist/Chart.extension.js"></script>
<!-- Argon JS -->
<script src="./assets/js/argon.js?v=1.0.0"></script>
</body>

</html>