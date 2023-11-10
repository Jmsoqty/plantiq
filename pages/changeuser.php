<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plant.IQ | Change Username </title>

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
<body>

  <!-- CoverPhoto -->
  <?php include '../pages/components/cover.php'; ?>

  <!-- TOP NAVBAR -->
  <?php include '../pages/components/navbar-back.php'; ?>

  <div class="container">
    <div class="text-center">
      <h2>Change Username</h2>
      <p class="text-muted">Input your new desire Username</p>

      <form action="" class="requires-validation" novalidate>

        <div class="form-floating my-4 text-start" style="position: relative;">
          <input type="text" class="form-control form-control-lg rounded-4" id="newUser" placeholder="New Username" required>
          <label for="newUser">Annabelle Roxas</label>
          <div class="valid-feedback">
            Looks good!
          </div>
          <span class="text-danger" id="validationMessage"></span>
        </div>

        <button type="submit" class="btn btn-primary btn-lg m-3 rounded-pill fw-bold" style="box-shadow: -4px 4px #3FAA3D;">Change Username</button>
						
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

const newUser = document.getElementById("newUser");
const validationMessage = document.getElementById("validationMessage");

function validateInput() {
    const inputValue = newUser.value;

    // Regular expression to allow only alphanumeric characters and spaces
    const regex = /^[a-zA-Z0-9\s]+$/;

    if (!regex.test(inputValue)) {
        validationMessage.textContent = "Special characters are not allowed.";
    } else {
        validationMessage.textContent = "";
    }
}

newUser.addEventListener("input", validateInput);
</script>

<!-- BOTTOM NAVBAR -->
<?php include '../pages/components/navbar-bottom.php'; ?>

<script src="../assets/js/bootstrap.bundle.js"></script>
<script src="../assets/js/all.min.js"></script>

</body>
</html>