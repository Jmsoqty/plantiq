<?php
session_start();
include 'php/userconfig.php';

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
<title>Forgot Password</title>
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
    <form action="php/email_check.php" method="post">
        <input type="email" name="email" class="form-control form-control-lg my-4" placeholder="juandelacruz@gmail.com" style="border-radius: 10px;" required>
        <center><label><span style="color: green">EMAIL </span>/ ENTER OTP / NEW PASSWORD</label></center>
        <center><button type="submit" class="btn btn-success btn-lg mt-3 mb-3 fw-bold" style="padding: 10px 20px; font-size: 15px;">Send OTP</button></center>
    </form>
            <?php
                 // Display error messages if they were passed in the URL
                 if (isset($_GET['errors'])) {
                     $errors = explode(',', $_GET['errors']);
                     foreach ($errors as $error) {
                         echo "<script>Swal.fire({
                                icon: 'error',
                                title: 'ERROR',
                                text: '$error'
                            });</script>";

                }
                unset($_GET['errors']);
                }
            ?>
         <div class="mx-auto text-center">
            <label style="color: grey">Click here if you didn't receive a code:</label>  <a href="" style="color: green">Resend</a>
        </div><br><br><br>
        <div class="mx-auto text-center">
            <label style="color: grey">You remember your account?</label>  <a href="login.php" style="color: green">Login</a>
        </div>
</div>
<!--
<div class="container">
    <div class="card shadow">
        <h1 class="mx-auto">Forgot Password</h1>
        <div class="card-body">
            <form action="php/email_check.php" method="post">
            <input type="email" name="email" class="form-control form-control-lg my-4" placeholder="juandelacruz@gmail.com" required>
            <center><label><span style="color: green">Email</span>/Enter OTP/New Password</label></center>
            <center><button type="submit" class="btn btn-success btn-lg mt-3">Send OTP</button></center>
            </form>
            <?php
                // Display error messages if they were passed in the URL
                // if (isset($_GET['errors'])) {
                //     $errors = explode(',', $_GET['errors']);
                //     foreach ($errors as $error) {
                //         echo "<script>Swal.fire({
                //                icon: 'error',
                //                title: 'ERROR',
                //                text: '$error'
                //            });</script>";

                //}
                //unset($_GET['errors']);
                //}
            ?>
        </div>
        <div class="mx-auto">
            <label style="color: grey">Click here if you didn't receive a code:</label>  <a href="" style="color: green">Resend</a>
        </div><br><br><br>
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
        window.location.href = "forgotpass.php";
      }
    }
    </script>
</body>
</html>
