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
    <form action="" class="requires-validation" novalidate>
      <div class="mb-3 mt-5 form-floating">
          <input type="password" class="form-control form-control-lg" placeholder="New Password" id="validationCustom01" style="border-radius: 10px;" fdprocessedid="s1ri14" required>
          <label for="validationServer01" class="form-label" style="color: gray;">Enter Password</label>
        <div class="invalid-feedback">
            Please provide atleast 8 characters.
        </div>
        <div class="valid-feedback">
            Looks good!
        </div>
      </div>

      <div class="mb-5 form-floating">
          <input type="password" class="form-control form-control-lg" placeholder="Confirm Password" id="validationCustom02" style="border-radius: 10px;" fdprocessedid="s1ri14" required>
          <label for="validationServer01" class="form-label" style="color: gray;">Confirm Password</label>
        <div class="invalid-feedback">
            Please confirm your password correctly.
        </div>
        <div class="valid-feedback">
            Looks good!
        </div>
      </div>

      <div class="justify-content-center d-flex">
          <button class="btn btn-lg btn-primary fw-bold m-5 rounded-pill" type="button" style="box-shadow: -4px 4px #3FAA3D;">Change Password</button>
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

<!-- BOTTOM NAVBAR -->
<?php include '../pages/components/navbar-bottom.php'; ?>

<script src="../assets/js/bootstrap.bundle.js"></script>
<script src="../assets/js/all.min.js"></script>

</body>
</html>