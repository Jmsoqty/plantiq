<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plant.IQ | Add Device </title>
  <link rel="icon" href="../assets/img/icon.png">

  <link rel="icon" href="../assets/img/icon.png">
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&family=Open+Sans:wght@300;400;500;600;700&family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css\node_modules\bootstrap\dist\css\bootstrap.min.css">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <!-- Main Template -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">

</head>

<body>

  <!-- CoverPhoto -->
  <?php include '../pages/components/cover.php'; ?>

  <!-- TOP NAVBAR -->
  <?php include '../pages/components/navbar.php'; ?>


  <form class="requires-validation" novalidate>
    <div class="container text-center">
      <h2 class="fw-semibold">Add Device</h2>
      <label class="text-muted mb-4">Input password to connect to SSID</label>

      <div class="card shadow mx-auto" style="max-width: 500px; border-radius:25px;"> <!-- Added mx-auto class for horizontal centering -->
        <div class="card-body">
          <h4 class="card-title mb-4">SSID: ESP8266</h2>
          <div class="mb-4 form-floating">
            <input type="password" class="form-control form-control-lg" id="validationServer01" placeholder="Password" style="border-radius: 10px;" fdprocessedid="s1ri14" required>
            <label for="validationServer01" class="form-label" style="color: gray;">Password</label>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please input your password correctly.
            </div>
          </div>

          <button type="submit" type="submit" class="btn btn-primary btn-lg m-3 rounded-pill fw-bold w-50" style="box-shadow: -4px 4px #3FAA3D;">Connect</button>
        
        </div>
      </div>
    </div>
  </form>

  <!-- BOTTOM NAVBAR -->
  <?php include '../pages/components/navbar-bottom.php'; ?>

<script>
  
(function () {
  'use strict';

  // Select all forms with the "requires-validation" class
  const forms = document.querySelectorAll('.requires-validation');

  // Iterate through the selected forms
  forms.forEach(function (form) {
    // Add a submit event listener to each form
    form.addEventListener('submit', function (event) {
      // Check the form's validity
      if (!form.checkValidity()) {
        // Prevent form submission if the form is not valid
        event.preventDefault();
        event.stopPropagation();
      }

      // Add the "was-validated" class to indicate validation has occurred
      form.classList.add('was-validated');
    }, false);
  });
})();

</script>

  <script src="../assets/js/bootstrap.bundle.js"></script>
  <script src="../assets/js/jquery-3.7.1.min.js"></script>
  <script src="../assets/js/navbarmenu.js"></script>
  <script src="../assets/js/all.min.js"></script>

</body>
</html>