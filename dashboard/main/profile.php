<?php

session_start();

$name = $_SESSION['username'];

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'falcone');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($link === false) {
    die("ERROR: could not connect. " . mysqli_connect_error());
}

if (!isset($_SESSION['username'])) {
    header("Location: Falcone/index.php");
}

if (isset($_POST['passupdate'])) {
    $current = md5($_POST['cupass']);
    $new = md5($_POST['nepass']);
    $confirm = md5($_POST['cpass']);
    $email = $_SESSION['emailadd'];

    $sql = "SELECT * FROM users WHERE Email = '$email'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
    $old = $row['Password'];
    if ($current == $old) {
        $sql = "UPDATE users SET Password = '$new' WHERE Email = '$email'";
        $update = mysqli_query($link, $sql) or die("database error:" . mysqli_error($link));

        if (!$update) {
            echo "<script>alert('Somethig Went Wrong!')</script>";
        } else {
            echo "<script>alert('Password Updated Successfully!')</script>";
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/newlogo.png" type="image/x-icon" />
    <title>Falcone | Profile</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="css/vendors_css.css">

    <!-- Style-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/skin_color.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.css" integrity="sha512-+Zybl5OKqmaXx42ysgDdEODFRj8kLRQFy87G77NWmQxS8JMiQhDKovhffSaUuMDyaKxZOZrzouVbQMtBrUcv7w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="admin/assets/icons/feather-icons/feather.min.js"></script>

</head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

    <div class="wrapper">
        <div id="loader"></div>

        <header class="main-header">
            <div class="d-flex align-items-center logo-box justify-content-start">
                <!-- Logo -->
                <a href="index.php" class="logo">
                    <!-- logo-->
                    <div class="logo"></div>
                    <div class="logo-lg w-100" style="margin-left: 40px;">
                        <span class="light-logo"><img src="img/newlogo-black.png" alt="logo"></span>
                        <span class="dark-logo"><img src="img/newlogo.png" alt="logo"></span>
                    </div>
                </a>
            </div>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <div class="app-menu">
                    <ul class="header-megamenu nav">
                        <li class="btn-group nav-item">
                            <a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light" data-toggle="push-menu" role="button">
                                <i data-feather="align-left"></i>
                            </a>
                        </li>
                        <li class="btn-group d-lg-inline-flex d-none">
                            <div class="app-menu">
                                <div class="search-bx mx-5">
                                    <form>
                                        <div class="input-group">
                                            <input type="search" class="form-control" placeholder="Search" aria-label="Search">
                                            <div class="input-group-append">
                                                <button class="btn" type="submit" id="button-addon3"><i data-feather="search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="navbar-custom-menu r-side">
                    <ul class="nav navbar-nav">

                        <li class="btn-group d-md-inline-flex d-none">
                            <a href="javascript:void(0)" title="skin Change" class="waves-effect skin-toggle waves-light">
                                <label class="switch">
                                    <input type="checkbox" data-mainsidebarskin="toggle" id="toggle_left_sidebar_skin">
                                    <span class="switch-on"><i class="mdi mdi-lightbulb-on"></i></span>
                                    <span class="switch-off"><i class="mdi mdi-lightbulb"></i></span>
                                </label>
                            </a>

                        </li>

                        <li class="btn-group d-lg-inline-flex d-none">
                            <a href="#" data-provide="fullscreen" class="waves-effect waves-light full-screen btn-warning-light" title="Full Screen">
                                <i data-feather="maximize"></i>
                            </a>
                        </li>
                        <!-- User Account-->
                        <li class="dropdown user user-menu">
                            <a href="#" class="waves-effect waves-light dropdown-toggle w-auto l-h-12 bg-transparent py-0 no-shadow" data-bs-toggle="dropdown" title="User">
                                <div class="d-flex pt-5">
                                    <div class="text-end me-10">
                                        <p class="pt-5 fs-14 mb-0 fw-700 text-primary"><?php echo $name ?></p>
                                        <small class="fs-10 mb-0 text-uppercase text-mute">User</small>
                                    </div>
                                    <img src="../images/avatar/avatar-1.png" class="avatar rounded-10 bg-primary-light h-40 w-40" alt="" />
                                </div>
                            </a>
                            <ul class="dropdown-menu animated flipInX">
                                <li class="user-body">
                                    <a class="dropdown-item" href="profile.php"><i class="ti-user text-muted me-2"></i>
                                        Profile</a>
                                    <a class="dropdown-item" href="profile.php"><i class="ti-settings text-muted me-2"></i> Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="logout.php"><i class="ti-lock text-muted me-2"></i>
                                        Logout</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>

        <aside class="main-sidebar">
            <!-- sidebar-->
            <section class="sidebar position-relative">
                <div class="multinav">
                    <div class="multinav-scroll" style="height: 100%;">
                        <!-- sidebar menu-->
                        <ul class="sidebar-menu">
                            <li class="treeview">
                                <a href="index.php">
                                    <i data-feather="monitor"></i><span>Dashboard</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="deposits.php">
                                    <i data-feather="package"></i><span>Deposit</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="withdraw.php">
                                    <i data-feather="inbox"></i><span>Withdrawal</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="subscription.php">
                                    <i data-feather="shopping-bag"></i><span>Referral`s</span>
                                </a>
                            </li><br><br><br><br><br><br>
                            <li class="treeview mt-xl-200">
                                <br><br><br><br><a href="logout.php">
                                    <i data-feather="power"></i><span>Logout</span>
                                </a>
                            </li>
                    </div>
                </div>
            </section>
        </aside>

        <div class="content-wrapper">
            <div class="container-full">
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xl-12 col-12">
                            <h3 class="mb-20">User Profile</h3>
                            <form action="" method="post">
                                <div class="col-xl-12 col-12">
                                    <div class="row row-cols-1 row-cols-md-2 g-4">
                                        <div class="col">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Profile Details</h4>
                                                    <center>
                                                        <img src="https://cdn.icon-icons.com/icons2/1378/PNG/512/avatardefault_92824.png" class="mb-20" width="35%">
                                                    </center>

                                                    <?php

                                                    $email = $_SESSION['emailadd'];
                                                    $sql = "SELECT * FROM users WHERE email = '$email'";
                                                    $result = mysqli_query($link, $sql);
                                                    if ($result->num_rows > 0) {
                                                        $row = mysqli_fetch_assoc($result);

                                                    ?>

                                                        <h5>Name : <?php echo $row['Name'] ?></h5>
                                                        <h5>Email : <?php echo $row['Email'] ?></h5>
                                                        <h5>Referral Code : <?php echo $row['referral_code'] ?></h5>
                                                        <h5>Account Created : <?php echo $row['created_at'] ?></h5>

                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title mb-30">Change Password</h4>
                                                    <label for="">Current Password</label>
                                                    <input class="form-control mb-20" name="cupass" type="password" placeholder="Current Password">
                                                    <label for="">New Password</label>
                                                    <input class="form-control mb-20" name="nepass" type="password" placeholder="New Password">
                                                    <label for="">Confirm Password</label>
                                                    <input class="form-control mb-30" name="cpass" type="password" placeholder="Confirm Password">
                                                    <div class="col-2 mx-auto">
                                                        <input type="submit" name="passupdate" value="Update" class="form-control btn-success mb-25">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <footer class="main-footer pull-right">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script> <a href="">Nithin
                Kumar K</a>. All Rights Reserved.<br>
        </footer>


        <script src="js/vendors.min.js"></script>
        <script src="js/pages/chat-popup.js"></script>
        <script src="../assets/icons/feather-icons/feather.min.js"></script>

        <script src="../assets/vendor_components/apexcharts-bundle/irregular-data-series.js"></script>
        <script src="../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
        <script src="../../www.amcharts.com/lib/4/core.js"></script>
        <script src="../../www.amcharts.com/lib/4/charts.js"></script>
        <script src="../../www.amcharts.com/lib/4/themes/animated.js"></script>
        <script src="../assets/vendor_components/Web-Ticker-master/jquery.webticker.min.js"></script>
        <script src="../assets/vendor_components/moment/min/moment.min.js"></script>
        <script src="../assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

        <!-- Specie Admin Admin App -->
        <script src="js/demo.js"></script>
        <script src="js/template.js"></script>
        <script src="js/pages/dashboard.js"></script>

</body>

</html>