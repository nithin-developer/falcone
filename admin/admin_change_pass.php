<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: admin_dashboard.php");
}

$email = $_SESSION['sendemail'];

if (isset($_POST['update'])) {

    $pass = md5($_POST['cpass']);

    $connect = mysqli_connect('localhost', 'Nithin', '6364', 'max-login');

    $sql = "UPDATE admins SET Password = '$pass' WHERE Email = '$email'";
    $update = mysqli_query($connect, $sql) or die("database error:" . mysqli_error($connect));

    if (!$update) {
        echo "<script>alert('Somethig Went Wrong!')</script>";
    } else {
        echo "<script>alert('Password Updated Successfully!')</script>";
        echo "<script>window.location.replace('admin_dashboard.php')</script>";

    }
}
// }else{
//     echo "<script>alert('Not Working')</script>";
// }

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
        #password,
        #checkPassword {
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
                            <h3 class="card-title text-left mb-3 text-center">Change Your Password</h3>
                            <form method="POST">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" onkeyup="check()" class="form-control p_input" id="password" required>
                                </div><br>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" name="cpass" onkeyup="check()" class="form-control p_input" id="checkPassword" required>
                                </div><br>
                                <div class="text-center">
                                    <button type="submit" name="update" class="btn btn-primary btn-lg btn-block enter-btn">Update Password</button>
                                    <p id="alertPassword"></p>
                                    <p><?php echo $email ?></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var check = function() {

            if (
                document.getElementById('password').value ==
                document.getElementById('checkPassword').value) {

                document.getElementById('alertPassword').style.color = '#8cc63E';

                document.getElementById('alertPassword').innerHTML = '<span><i class = "fas fa-check-circle"></i>Password Match!</span>';
            } else {

                document.getElementById('alertPassword').style.color = '#EE2B39';

                document.getElementById('alertPassword').innerHTML = '<span><i class = "fas fa-exclamation-triangle"></i>Password Not Match!</span>';
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