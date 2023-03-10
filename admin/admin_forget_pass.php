<?php

session_start();


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require('PHPMailer/Exception.php');
require('PHPMailer/SMTP.php');
require('PHPMailer/PHPMailer.php');

if (isset($_POST['getotp'])) {
  $email = $_POST['email'];
  $otp = rand(100000, 999999);
  $_SESSION['sendotp'] = $otp;
  $_SESSION['sendemail'] = $email;
  $mail = new PHPMailer(true);

  try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'applemac6364@gmail.com';
    $mail->Password   = 'oqnjiwuhnuqtajbt';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    // $mail->setFrom($email, $name);
    $mail->addAddress($email);

    $mail->isHTML(true);
    $mail->Subject = 'MAX Plus Verification Code';
    $mail->Body    = "Hello!, Your Verification code to activate your Subscription is <br><br> <h3>$otp</h3>";

    if ($mail->send()) {
      echo "<script>alert('OTP Sent to Your Email')</script>";
      echo "<script>window.location.replace('admin_getotp_pass.php')</script>";
    }
  } catch (Exception $e) {
    echo "<script>alert('Message could not be sent! Mailer Error')</script>";
  }
}

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
    #input {
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
              <h3 class="card-title text-left mb-3 text-center">Forget Password</h3>
              <form method="POST">
                <div class="form-group">
                  <label>Your Registered Email</label>
                  <input type="email" class="form-control p_input" name="email" id="input" required>
                </div><br>
                <a href="admin_getotp_pass.php">
                  <div class="text-center">
                    <button type="submit" name="getotp" class="btn btn-primary btn-lg btn-block enter-btn">Get OTP</button>
                </a>
                <p>Terms and conditions apply</p>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/misc.js"></script>
  <script src="assets/js/settings.js"></script>
  <script src="assets/js/todolist.js"></script>
</body>

</html>