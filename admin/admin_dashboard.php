<?php

include 'config.php';

session_start();

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $sql = "SELECT * FROM admin WHERE Email = '$email' AND Password = '$password'";
  $result = mysqli_query($link, $sql);
  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['Name'];
    $_SESSION['emailaddress'] = $row['Email'];
    echo "<script> alert('Login Successfull') </script>";
    echo "<script> window.location.href = 'admin_home.php' </script>";
  } else{
    echo "<script>alert('Oops! Email or Password is Wrong.')</script>";
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
              <h3 class="card-title text-left mb-3">Login</h3>
              <form method="POST">
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control p_input" name="email" id="input" required>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control p_input" name="password" id="input" required>
                </div>
                <div class="form-group d-flex align-items-center justify-content-between">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input"> Remember me </label>
                  </div>
                  <a href="admin_forget_pass.php" class="forgot-pass">Forgot password</a>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-lg btn-block enter-btn" name="submit">Login</button>
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