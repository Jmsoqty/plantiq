<?php
session_start();
include '../php/userconfig.php';

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
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plant.IQ | Change Username</title>
  <link rel="icon" href="../assets/img/icon.png">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&family=Open+Sans:wght@300;400;500;600;700&family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">  <link rel="stylesheet" href="css\node_modules\bootstrap\dist\css\bootstrap.min.css">
  
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">

  <!-- Main Template -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">

</head>
<style>
    #passwordMatch {
        font-weight: bold;
    }

    .match {
        color: green;
    }

    .no-match {
        color: red;
    }
</style>
<body>
<!-- CoverPhoto -->
<?php include '../pages/components/cover.php'; ?>

<br><br><br>
<div class="container">
    <div class="justify-content-center d-flex" style="margin-top: 50px; margin-bottom: 50px;">
        <h1>Forgot Password</h1>
    </div>
<form action="php/reset_password.php" method="post" onsubmit="return validateForm()" class="requires-validation" novalidate>
    <div class="mx-auto text-align">
        <div class="form-floating mb-2">
            <input type="password" id="newPassword" class="form-control form-control-lg" id="validationServer01"
                placeholder="New Password" style="border-radius: 10px;" fdprocessedid="s1ri14" maxlength="15"
                required>
            <label for="validationServer01" class="form-label" style="color: gray;">New Password </label>
            <div class="invalid-feedback mb-2">
                Provide at least 10 characters.
            </div>
        </div>
        <div class="form-floating mb-2">
            <input type="password" id="confirmPassword" class="form-control form-control-lg" id="validationServer02"
                placeholder="Confirm Password" style="border-radius: 10px;" fdprocessedid="s1ri14" maxlength="15" required>
            <label for="validationServer02" class="form-label" style="color: gray;">Confirm Password</label>
            <span id="passwordMatch"></span>
        </div>
    </div>
    <div class="mx-auto text-center">
        <nav aria-label="breadcrumb mt-2">
            <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a class="text-secondary">Email</a></li>
            <li class="breadcrumb-item"><a class="text-secondary">Enter OTP</a></li>
            <li class="breadcrumb-item"><a class="text-success fw-semibold" href="newpass.php">New Password</a></li>
            </ol>
        </nav>
        <div class="justify-content-center d-flex">
            <button type="submit" class="btn btn-primary btn-lg fw-bold m-5 rounded-pill" style="box-shadow: -4px 4px #3FAA3D;">Submit</button>
        </div>
    </div>    
</form>
<br><br><br>
    <div class="mx-auto text-center" style="margin-top: 100px;">
        <label style="color: grey">You remember your account?</label>  <a href="../index.php" style="color: green">Login</a>
    </div>
</div>

<script>
    if (window.performance) {
      if (performance.navigation.type == 1) {
        // Reloaded the page using the browser's reload button
        window.location.href = "newpass.php";
      }
    }
</script>

<!-- Confirmation Script --> 
<script>
        const newPasswordInput = document.getElementById("newPassword");
        const confirmPasswordInput = document.getElementById("confirmPassword");
        const passwordMatchLabel = document.getElementById("passwordMatch");

        function validatePassword() {
            const newPassword = newPasswordInput.value;
            const confirmPassword = confirmPasswordInput.value;

            if (newPassword !== confirmPassword) {
                passwordMatchLabel.classList.remove("match");
                passwordMatchLabel.classList.add("no-match");
                passwordMatchLabel.textContent = "Passwords do not match";
            } else {
                passwordMatchLabel.classList.remove("no-match");
                passwordMatchLabel.classList.add("match");
                passwordMatchLabel.textContent = "Passwords match";
            }
        }

        newPasswordInput.addEventListener("input", validatePassword);
        confirmPasswordInput.addEventListener("input", validatePassword);
</script>

<!-- Validation Script -->
<script>
(function () {
  'use strict';
  const forms = document.querySelectorAll('.requires-validation');
  Array.from(forms).forEach(function (form) {
    form.addEventListener('submit', function (event) {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }

      form.classList.add('was-validated');
    }, false);
  });
})();
</script>

    <!-- JavaScript -->
    <script src="../assets/js/bootstrap.bundle.js"></script>
    <script src="../assets/js/all.min.js"></script>

</body>
</html>
