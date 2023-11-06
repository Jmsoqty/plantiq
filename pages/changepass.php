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
  <link rel="stylesheet" href="../assets/css/styles.css">

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

  <!-- TOP NAVBAR -->
  <?php include '../pages/components/navbar-back.php'; ?>

<div class="container">
  <div>
    <h1 class="text-center">Change Password</h1>
    <center><span style="color: gray;">Input your desire Password</span></center>
  </div>
    <form action="" onsubmit="return validateForm()" class="requires-validation" novalidate>
      <div class="mb-3 mt-5 form-floating">

          <input type="password" id="newPassword" class="form-control form-control-lg" placeholder="New Password"  id="validationServer01" style="border-radius: 10px;" fdprocessedid="s1ri14" maxlength="15"required>
          <label for="validationServer01" class="form-label" style="color: gray;">Enter Password</label>
        <div class="invalid-feedback mb-2">
            Please provide atleast 8 characters.
        </div>
        
      </div>

      <div class="mb-2 form-floating">
          <input type="password" id="confirmPassword" class="form-control form-control-lg" placeholder="Confirm Password" id="validationCustom02" style="border-radius: 10px;" fdprocessedid="s1ri14" maxlength="15"required>
          <label for="validationServer02" class="form-label" style="color: gray;">Confirm Password</label>
          <span id="passwordMatch"></span>
      </div>

      <div class="justify-content-center d-flex">
          <button class="btn btn-lg btn-primary fw-bold m-5 rounded-pill" type="submit" style="box-shadow: -4px 4px #3FAA3D;">Change Password</button>
      </div>    
    </form>
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
</script>

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
<!-- BOTTOM NAVBAR -->
<?php include '../pages/components/navbar-bottom.php'; ?>

<script src="../assets/js/bootstrap.bundle.js"></script>
<script src="../assets/js/all.min.js"></script>

</body>
</html>