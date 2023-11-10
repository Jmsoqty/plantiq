<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plant.IQ | Change Password </title>

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

<style scoped>
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

  <!-- TOP NAVBAR -->
  <?php include '../pages/components/navbar-back.php'; ?>

  <div class="container">
    <div class="text-center">
      <h2>Change Password</h2>
      <p class="text-muted">Input your desire Password</p>

      <form action="" onsubmit="return validateForm()" class="requires-validation" novalidate>

        <div class="form-floating my-4" style="position: relative;">
          <input type="password" class="form-control form-control-lg rounded-4" id="newPassword" placeholder="New Password" fdprocessedid="s1ri14" maxlength="8" required>
          <label for="newPassword">Enter Password</label>

          <div class="invalid-feedback">
            Please provide at least 8 characters.
          </div>
          <span class="toggle-password mt-1" id="newPassword"><i class="fa-regular fa-eye"></i></span>
        </div>

        <div class="form-floating mb-2 text-start" style="position: relative;">
          <input type="password" class="form-control form-control-lg rounded-4" id="confirmPassword" placeholder="Confirm Password" fdprocessedid="s1ri14" maxlength="8" required>
          <label for="confirmPassword">Confirm Password</label>
          
          <div>
            <span id="passwordMatch"></span>
          </div>
          <span class="toggle-password mt-1" id="confirmPassword"><i class="fa-regular fa-eye"></i></span>
        </div>
        
        <button class="btn btn-lg btn-primary fw-bold m-5 rounded-pill text-center" type="submit" style="box-shadow: -4px 4px #3FAA3D;">Change Password</button>
        
      </form>
    </div>
  </div>

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

<!-- BOTTOM NAVBAR -->
<?php include '../pages/components/navbar-bottom.php'; ?>

<script src="../assets/js/bootstrap.bundle.js"></script>
<script src="../assets/js/all.min.js"></script>

</body>
</html>