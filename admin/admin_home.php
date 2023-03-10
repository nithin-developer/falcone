<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: admin_home.php");
}

$email = $_SESSION['username'];

$connect = mysqli_connect('localhost', 'Nithin', '6364', 'falcone');

$count2 = "SELECT COUNT(*) as admin FROM admin";
$count_result2 = mysqli_query($connect, $count2);
$countnew2 = mysqli_fetch_assoc($count_result2);

$count3 = "SELECT COUNT(*) as proofs FROM proofs";
$count_result3 = mysqli_query($connect, $count3);
$countnew3 = mysqli_fetch_assoc($count_result3);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Falcone - Admin Dashboard</title>

    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/Screenshot 2022-06-27 203604.jpg" />
    <style>
        .row {
            display: flex;
            flex-wrap: wrap;
            padding: 0 4px;
        }

        /* Create two equal columns that sits next to each other */
        .column {
            flex: 50%;
            padding: 0 4px;
        }

        .column img {
            margin-top: 8px;
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <div class="container-scroller">

        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <a class="sidebar-brand brand-logo text-decoration-none text-white font-weight-medium" href="admin_home.php">F A L C O N E</a>
                <a class="sidebar-brand brand-logo-mini text-decoration-none text-white font-weight-medium" href="admin_home.php">F</a>
            </div>
            <ul class="nav">
                <li class="nav-item profile">
                    <div class="profile-desc">
                        <div class="profile-pic">
                            <div class="count-indicator">
                                <img class="img-xs rounded-circle " src="assets/images/faces/face2.jpg" alt="">
                                <span class="count bg-success"></span>
                            </div>
                            <div class="profile-name">
                                <h5 class="mb-0 font-weight-normal"><?php echo $email ?></h5>
                                <span>Admin </span>
                            </div>
                        </div>
                        <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                        <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                            <a href="admin_forget_pass.php" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-settings text-primary"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="logout.php" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-logout text-danger  text-info"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">Log Out</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">Navigation</span>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="admin_home.php">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item menu-items">
                    <a class="nav-link" href="register.php">
                        <span class="menu-icon">
                            <i class="mdi mdi-contacts"></i>
                        </span>
                        <span class="menu-title">Register Admin</span>
                    </a>
                </li>

            </ul>
        </nav>

        <div class="container-fluid page-body-wrapper">
            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo-mini text-decoration-none text-white font-weight-medium" href="admin_home.php">FALCONE</a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <ul class="navbar-nav w-100">
                        <li class="nav-item w-100">
                            <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                                <input type="text" class="form-control" placeholder="Search products">
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                                <div class="navbar-profile">
                                    <img class="img-xs rounded-circle" src="assets/images/faces/face2.jpg" alt="">
                                    <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo $email ?></p>
                                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                                <h6 class="p-3 mb-0">Profile</h6>
                                <div class="dropdown-divider"></div>
                                <a href="admin_forget_pass.php" class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-settings text-success"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Change Password</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="logout.php" class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-logout text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Log out</p>
                                    </div>
                                </a>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                        <span class="mdi mdi-format-line-spacing"></span>
                    </button>
                </div>
            </nav>

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-xl-0 col-sm-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="d-flex align-items-center align-self-start">
                                                <h3 class="mb-0"><?php echo $countnew2['admin'] ?></h3>
                                                <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="icon icon-box-success ">
                                                <span class="mdi mdi-arrow-top-right icon-item"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="text-muted font-weight-normal">Our Admins</h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-0 col-sm-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="d-flex align-items-center align-self-start">
                                                <h3 class="mb-0"><?php echo $countnew3['proofs'] ?></h3>
                                                <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="icon icon-box-success ">
                                                <span class="mdi mdi-arrow-top-right icon-item"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="text-muted font-weight-normal">Number of Deposits</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="row row-cols-1 row-cols-md-3 g-4">

                                <?php

                                $connect = mysqli_connect('localhost', 'Nithin', '6364', 'falcone');

                                $sql = "SELECT * FROM proofs";
                                $resultset = mysqli_query($connect, $sql) or die("database error:" . mysqli_error($connect));

                                $i = 0;
                                while ($record = mysqli_fetch_assoc($resultset)) {

                                ?>
                                    <div class="col">
                                        <div class="card">
                                            <img src="../dashboard/main/proofs/<?php echo $record['image_name'] ?>" id="pay" alt="image">
                                        </div>
                                    </div>

                                <?php
                                    $i++;
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                            Nithin Kumar K 2022</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Design and
                            Developed by Nithin Kumar K </span>
                    </div>
                </footer>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="http://www.chartjs.org/assets/Chart.js"></script>
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <script>
        (function($) {
            'use strict';
            $.fn.andSelf = function() {
                return this.addBack.apply(this, arguments);
            }
            $(function() {
                if ($("#transaction-history").length) {
                    var areaData = {
                        labels: ['Applications', 'Subscribers'],
                        datasets: [{
                            data: [<?php echo $countnew4['ios'] ?>, <?php echo $countnew1['sub'] ?>],
                            backgroundColor: [
                                "#ffab00", "#00d25b"
                            ]
                        }]
                    };
                    var areaOptions = {
                        responsive: true,
                        maintainAspectRatio: true,
                        segmentShowStroke: false,
                        cutoutPercentage: 70,
                        elements: {
                            arc: {
                                borderWidth: 0
                            }
                        },
                        legend: {
                            display: false
                        },
                        tooltips: {
                            enabled: true
                        }
                    }
                    var transactionhistoryChartPlugins = {
                        beforeDraw: function(chart) {
                            var width = chart.chart.width,
                                height = chart.chart.height,
                                ctx = chart.chart.ctx;

                            ctx.restore();
                            var fontSize = 1;
                            ctx.font = fontSize + "rem sans-serif";
                            ctx.textAlign = 'left';
                            ctx.textBaseline = "middle";
                            ctx.fillStyle = "#ffffff";

                            var text = "",
                                textX = Math.round((width - ctx.measureText(text).width) / 2),
                                textY = height / 2.4;

                            ctx.fillText(text, textX, textY);

                            ctx.restore();
                            var fontSize = 0.75;
                            ctx.font = fontSize + "rem sans-serif";
                            ctx.textAlign = 'left';
                            ctx.textBaseline = "middle";
                            ctx.fillStyle = "#6c7293";

                            var texts = "",
                                textsX = Math.round((width - ctx.measureText(text).width) / 1.93),
                                textsY = height / 1.7;

                            ctx.fillText(texts, textsX, textsY);
                            ctx.save();
                        }
                    }
                    var transactionhistoryChartCanvas = $("#transaction-history").get(0).getContext("2d");
                    var transactionhistoryChart = new Chart(transactionhistoryChartCanvas, {
                        type: 'doughnut',
                        data: areaData,
                        options: areaOptions,
                        plugins: transactionhistoryChartPlugins
                    });
                }
            });
        })(jQuery);
    </script>
</body>

</html>