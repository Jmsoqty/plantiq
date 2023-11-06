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
  <link rel="stylesheet" href="../assets/css/styles.css">

</head>

<body>

  <!-- CoverPhoto -->
  <?php include '../pages/components/cover.php'; ?>

  <!-- TOP NAVBAR -->
  <?php include '../pages/components/navbar.php'; ?>


<style>
  
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown button {
  background-color: #f5f5f5;
  border: 1px solid #ccc;
  border-radius: 4px;
  padding: 8px 12px;
  cursor: pointer;
}

.dropdown .dropdown-menu {
  display: none;
  position: absolute;
  background-color: #fff;
  min-width: 160px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  z-index: 1;
}

.dropdown:hover .dropdown-menu {
  display: block;
}

.dropdown a {
  display: block;
  padding: 8px 12px;
  text-decoration: none;
  color: #333;
}

.dropdown a:hover {
  background-color: #f5f5f5;
}

</style>
  <!-- START CONTENT -->
<div class="container">
    <h1 class="text-center fw-bold">Add Device</h1>
    <h6 class="text-center text-muted mb-4">INPUT PASSWORD TO CONNECT TO SSID</h6>
  <div class="card shadow mx-auto" style="max-width: 500px; border-radius:25px;"> <!-- Added mx-auto class for horizontal centering -->
    <div class="card-body">
      <h4 class="card-title text-center mb-4">Connect SSID</h4>
      <h2 class="card-title mb-4">SSID: ESP8266</h2>

      <form class="requires-validation" novalidate>
            <div class=" mb-4 form-floating">
                <input type="password" class="form-control form-control-lg" id="validationServer01" placeholder="Password" style="border-radius: 10px;" fdprocessedid="s1ri14" required>
                <label for="validationServer01" class="form-label" style="color: gray;">Password</label>
                <div class="invalid-feedback">
                    Please input your password correctly.
                </div>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
      </form>
      <div class="d-flex justify-content-center">
        <a href="adevice1.php">
          <button type="submit" class="btn btn-success btn-lg mt-3" style="background-color: #26DB23;">Connect</button>
        </a>
      </div>
    </div>
  </div>
</div>
  <!-- BOTTOM NAVBAR -->
  <?php include '../pages/components/navbar-bottom.php'; ?>


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
  <script src="../assets/js/bootstrap.bundle.js"></script>
  <script src="../assets/js/jquery-3.7.1.min.js"></script>
  <script src="../assets/js/navbarmenu.js"></script>
  <script src="../assets/js/all.min.js"></script>

  <script>
    $(document).ready(function() {

      //hides dropdown content
      $(".size_chart").hide();

      //unhides first option content
      $("#option1").show();

      //listen to dropdown for change
      $("#size_select").change(function() {
        //rehide content on change
        $('.size_chart').hide();
        //unhides current item
        $('#' + $(this).val()).show();
      });

    });
  </script>

</body>
</html>