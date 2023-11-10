<?php
session_start();
include '../php/userconfig.php';

// if (isset($_SESSION['status'])) {
//     if($_SESSION['status'] == "Logged In"){
//         header("Location:home.php");
//         exit();
//     }
// }
// Check if the session variables are set
$fullname = isset($_SESSION['fullname']) ? $_SESSION['fullname'] : '';
$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';

// Clear the session variables
unset($_SESSION['username']);
unset($_SESSION['email']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plant.IQ | Home</title>

  <link rel="icon" href="../assets/img/icon.png">
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&family=Open+Sans:wght@300;400;500;600;700&family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">  <link rel="stylesheet" href="css\node_modules\bootstrap\dist\css\bootstrap.min.css">
  
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  
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
<form class="requires-validation" novalidate onsubmit="return validateForm()">
  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="text-center" style="border-radius: 1rem;">
            <h3 class="fw-bold mb-4">Register your Account</h3>

            <div class="form-floating mb-2 text-start rounded-4">
                <input type="text" id="textInput" class="form-control rounded-4" id="floatingInput" placeholder="Username"  autocomplete="off" maxlength="20" required>
                <label for="validationServer01" class="form-label">Username</label>
                <div class="invalid-feedback">
                </div>
                <span id="validationMessage" style="color: red;"></span>

            </div>

            <div class="form-floating mb-2 text-start rounded-4" id="emailForm">
                <input type="text" id="emailInput" class="form-control rounded-4" id="floatingInput" placeholder="Email" autocomplete="" required>
                <label for="emailInput" class="form-label">Email</label>
                <span id="emailStatus"></span>
            </div>

            <div class="form-floating mb-2 text-start rounded-4">
                <input type="password" id="newPassword" class="form-control rounded-4" id="floatingPassword" placeholder="Password" maxlength="15" required>
                <label for="floatingPassword">Password</label>
                <!-- <i class="fa-solid fa-eye" id="togglePassword" data-toggle="tooltip" data-placement="right" title="Show/Hide password" style="cursor: pointer"></i> -->
                <div class="invalid-feedback mb-2">
                  Provide at least 10 characters.
                </div>
            </div>

            <div class="form-floating mb-2 text-start rounded-4">
                <input type="password" id="confirmPassword" class="form-control rounded-4" id="floatingPassword" placeholder="ConfirmPassword" maxlength="15" required>
                <label for="floatingconpassword" class="form-label">Confirm Password</label>
                <span id="passwordMatch"></span>

            </div>
            
            <a href="./pages/home.php" class="btn btn-primary btn-lg rounded-pill w-50 mt-2" style="box-shadow: -4px 4px #3FAA3D;">Register Account</a>
            <h5 class="text-center my-3">or</h5>
 
            <div class="d-flex justify-content-center">
              <button type="submit" onclick="signIn()" class="btn btn-light btn-lg rounded-pill fw-bold" style="box-shadow: -4px 4px #BEB5B5;">
                <img src="../assets/img/google.png" alt="Google Logo"  style="width: 30px; height: 30px; margin-right: 5px;"> Continue with Google
              </button>
            </div>
 
            <div class="d-flex justify-content-around mt-3">
              <a class="text-decoration-none text-dark">Already have an account?</a>
              <a class="text-decoration-none text-primary" href="../index.php">Login</a>
            </div>
            <br><br>

          </div>  
        </div>
      </div>
    </div>
  </section>
</form>


<script>
  const fullNameInput = document.querySelector('input[name="fullname"]');
      fullNameInput.addEventListener('keypress', function(event) {
          const key = event.key;
          const regex = /[a-z A-Z]/;
      if (!regex.test(key)) {
            event.preventDefault();
        }
  });
</script>

<!-- Username Script -->
<script>
    const textInput = document.getElementById("textInput");
    const validationMessage = document.getElementById("validationMessage");

    function validateInput() {
        const inputValue = textInput.value;

        // Regular expression to allow only alphanumeric characters and spaces
        const regex = /^[a-zA-Z0-9\s]+$/;

        if (!regex.test(inputValue)) {
            validationMessage.textContent = "Special characters are not allowed.";
        } else {
            validationMessage.textContent = "";
        }
    }

    textInput.addEventListener("input", validateInput);
  </script>

<!-- Email Script -->
<script>
  const emailInput = document.getElementById("emailInput");
  const emailStatus = document.getElementById("emailStatus");
  const emailForm = document.getElementById("emailForm");

  function validateEmail() {
      const email = emailInput.value;
      const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

      if (!regex.test(email)) {
          emailStatus.textContent = "Invalid email address";
          emailStatus.style.color = "red";
          return false;
      } else {
          emailStatus.textContent = "Valid email address";
          emailStatus.style.color = "green";
          return true;
      }
  }

  emailForm.addEventListener("submit", function(event) {
      if (!validateEmail()) {
          event.preventDefault(); // Prevent form submission
      }
  });

  emailInput.addEventListener("input", function() {
      validateEmail();
  });
</script>


<!-- NewPass and ConfirmPass Script -->
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


<script>
    if (window.performance) {
      if (performance.navigation.type == 1) {
        // Reloaded the page using the browser's reload button
        window.location.href = "register.php";
      }
    }
    </script>
    <script>
        document.getElementById('showPassword').onclick = function() {
    if ( this.checked ) {
       document.getElementById('password').type = "text";
    } else {
       document.getElementById('password').type = "password";
    }
};
</script>
</body>
</html>
