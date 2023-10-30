<?php
session_start();
include './php/userconfig.php';

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
  <title>Plant.IQ | Home</title>

  <link rel="icon" href="./assets/img/icon.png">
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&family=Open+Sans:wght@300;400;500;600;700&family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">  <link rel="stylesheet" href="css\node_modules\bootstrap\dist\css\bootstrap.min.css">
  
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  
  <!-- Main Template -->
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/styles.css">

</head>
<body>


  

<form class="requires-validation" novalidate>
  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="text-center" style="border-radius: 1rem;">

            <img src="./assets/img/title.png" class="img-fluid px-1 w-50 mb-3">

            <h5 class="fw-bold mb-3">Login to your Account</h5>

            <div class="form-floating mb-3 text-start border border-dark rounded-4">
              <input type="text" class="form-control rounded-4" id="floatingInput" placeholder="Username" required>
              <label for="validationServer01" class="form-label">Username</label>
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Not look good!
              </div>
            </div>

            <div class="form-floating mb-3 text-start border border-dark rounded-4">
              <input type="password" class="form-control rounded-4" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Password</label>
              <!-- <i class="fa-solid fa-eye" id="togglePassword" data-toggle="tooltip" data-placement="right" title="Show/Hide password" style="cursor: pointer"></i> -->
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Not look good!
              </div>
            </div>


            <div class="my-3 d-flex justify-content-between">
              <label>
                <input type="checkbox" name ="remember" <?php if(isset($_COOKIE['fnbkn'])){echo "checked='checked'"; } ?> id="remember" checked> Remember me
              </label>
              <a href="pages/forgotpass.php" class="text-decoration-none text-secondary">Forgot password?</a>
            </div>

            <!-- <button type="submit" class="btn btn-lg" style="background-color: #26DB23; color: #ffffff;" >Log In</button> -->
            <a href="./pages/home.php" class="btn btn-primary btn-lg rounded-pill w-50 mt-5">Login</a>

            <h5 class="text-center my-3">or</h5>
             
            <div class="d-flex justify-content-center">
              <button type="button" onclick="signIn()" class="btn btn-light btn-lg">
                <img src="./assets/img/google.png" alt="Google Logo" style="width: 30px; height: 30px; margin-right: 5px;"> Continue with Google
              </button>
            </div>
             
            <div class="d-flex justify-content-around mt-3">
              <a class="text-decoration-none text-dark">Don't have Account?</a>
              <a class="text-decoration-none text-primary" href="pages/register.php">Create Account</a>
            </div>
            
            <br><br>
        
          </div>  
        </div>
      </div>
    </div>
  </section>
</form>

<script src="./assets/js/bootstrap.bundle.js"></script>
<script src="./assets/js/script.js"></script>

<script>
if (window.performance && performance.navigation.type === 1) {
  window.location.href = "index.php";
  }

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

</body>
</html>
