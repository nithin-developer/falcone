<?php

session_start();

if(!isset($_SESSION['username'])) {
  header("Location: admin_dashboard.php");
}

$otp = $_SESSION['sendotp'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Falcone - Admin Dashboard</title>
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/Screenshot 2022-06-27 203604.jpg" />
    <style>
        #otpent {
            color: bisque;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                    <div class="card col-lg-4 mx-auto">
                        <div class="card-body px-5 py-5">
                            <h3 class="card-title text-left mb-3 text-center">Verify OTP</h3>
                            <form method="POST">
                                <div class="form-group">
                                    <label>Enter OTP</label>
                                    <input type="number" class="form-control p_input" id="otpent" required>
                                </div><br>
                                <a href="admin_change_pass.php">
                                    <div class="text-center">
                                        <button type="submit" onclick="verifyEnterdOTP()" class="btn btn-primary btn-lg btn-block enter-btn">Verify OTP</button>
                                </a>
                                <p>OTP is sent to your Email</p>
                                <p><?php echo $otp ?></p>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        function verifyEnterdOTP() {

            var otp1 = document.getElementById("otpent").value;
            var otp2 = ("<?php echo ($otp) ?>");

            if (otp1 == otp2) {
                alert("OTP Verification Successful");
                window.open("admin_change_pass.php");
                window.close();
            } else {
                alert("Invalid OTP, Entered OTP is Wrong!")
            }
        }
    </script>
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
</body>

</html>