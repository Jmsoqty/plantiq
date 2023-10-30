<?php
session_start();
include 'php/userconfig.php';

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
}

// if (isset($_SESSION['status'])) {
//     if($_SESSION['status'] == "Logged In"){
//         header("Location:home.php");
//         exit();
//     }
// }
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Change Password</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="css/img/icon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/all.min.css">
    <link rel="stylesheet" href="fontawesome/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="home.css">
</head>
<body>
<br><br>
<div class="container">
    <div class="justify-content-center d-flex" style="margin-top: 50px; margin-bottom: 50px;">
        <h1>Forgot Password</h1>
    </div>
    <form action="php/reset_password.php" method="post">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="password" name="password" class="form-control form-control-lg my-4" placeholder="Enter New Password" style="border-radius: 10px;" required>
        <input type="password" name="confirm_password" class="form-control form-control-lg my-4" placeholder="Confirm Password" style="border-radius: 10px;" required>
        <center><label>EMAIL / ENTER OTP/<span style="color: green"> NEW PASSWORD</span></label></center>
        <center><button type="submit" class="btn btn-success btn-lg mt-3 fw-bold" style="padding: 10px 20px; font-size: 15px;">Save Changes</button></center>
    </form>
    <br><br><br>
    <div class="mx-auto text-center" style="margin-top: 100px;">
        <label style="color: grey">You remember your account?</label>  <a href="../index.php" style="color: green">Login</a>
    </div>
</div>
<!--
<div class="container">
    <div class="card shadow">
        <h1 class="mx-auto">Forgot Password</h1>
        <div class="card-body">
            <form action="php/reset_password.php" method="post">
                <input type="hidden" name="email" value="<?php echo $email; ?>">
                <input type="password" name="password" class="form-control form-control-lg my-4" placeholder="Enter New Password" required>
                <input type="password" name="confirm_password" class="form-control form-control-lg my-4" placeholder="Confirm Password" required>
                <center><label>Email/Enter OTP/<span style="color: green">New Password</span></label></center>
                <center><button type="submit" class="btn btn-success btn-lg mt-3">Save Changes</button></center>
            </form>
            <?php
                // Display error messages if they were passed in the URL
                //if (isset($_GET['errors'])) {
                //    $errors = explode(',', $_GET['errors']);
                //    foreach ($errors as $error) {
                //        echo "<script>Swal.fire({
                //                icon: 'error',
                //                title: 'ERROR',
                //                text: '$error'
                //            });</script>";

                //}
                //unset($_GET['errors']);
                //}
            ?>
        </div>
        <br><br><br>
        <div class="mx-auto">
            <label style="color: grey">You remember your account?</label>  <a href="login.php" style="color: green">Login</a>
        </div>
    </div>
</div>
            -->
<script>
    if (window.performance) {
      if (performance.navigation.type == 1) {
        // Reloaded the page using the browser's reload button
        window.location.href = "newpass.php";
      }
    }
    </script>
</body>
</html>
