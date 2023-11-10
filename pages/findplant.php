<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plant.IQ | Find Plants</title>

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

  .card img {
    max-width: 100%;
    height: auto;
    object-fit: cover;
    height: 100%; /* Adjust this value to your preference */
  }

  /* Media query for tablet and mobile screens */
  @media (max-width: 768px) {
    .card-body {
      font-size: 12px; /* Adjust the font size as needed */
    }
  }

</style>

<body>

  <!-- CoverPhoto -->
  <?php include '../pages/components/cover.php'; ?>

  <!-- TOP NAVBAR -->
  <?php include '../pages/components/navbar-find.php'; ?>
   
  <div class="container mt-3">
    <h2 class="position-relative">Suggestions:</h2>

    <div class="card my-3 rounded-4 border border-success">
      <div class="row g-0">
        <div class="col-5">
          <img class="img-fluid rounded-4" src="../assets/img/onion.jpg" alt="">
        </div>
        <div class="col-7">
          <div class="card-body">
            <h4>Onions</h4>
            <p>
              An onion is a round vegetable with a brown skin that grows underground. 
              It has many white layers on its inside which have a strong, sharp smell and taste.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="card my-3 rounded-4 border border-success">
      <div class="row g-0">
        <div class="col-5">
          <img class="img-fluid rounded-4" src="../assets/img/onion.jpg" alt="">
        </div>
        <div class="col-7">
          <div class="card-body">
            <h4>Onions</h4>
            <p>
              An onion is a round vegetable with a brown skin that grows underground. 
              It has many white layers on its inside which have a strong, sharp smell and taste.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="card my-3 rounded-4 border border-success">
      <div class="row g-0">
        <div class="col-5">
          <img class="img-fluid rounded-4" src="../assets/img/onion.jpg" alt="">
        </div>
        <div class="col-7">
          <div class="card-body">
            <h4>Onions</h4>
            <p>
              An onion is a round vegetable with a brown skin that grows underground. 
              It has many white layers on its inside which have a strong, sharp smell and taste.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="card my-3 rounded-4 border border-success">
      <div class="row g-0">
        <div class="col-5">
          <img class="img-fluid rounded-4" src="../assets/img/onion.jpg" alt="">
        </div>
        <div class="col-7">
          <div class="card-body">
            <h4>Onions</h4>
            <p>
              An onion is a round vegetable with a brown skin that grows underground. 
              It has many white layers on its inside which have a strong, sharp smell and taste.
            </p>
          </div>
        </div>
      </div>
    </div>

  </div>

<!-- BOTTOM NAVBAR -->
<?php include '../pages/components/navbar-bottom.php'; ?>

  <script src="../assets/js/bootstrap.bundle.js"></script>
  <script src="../assets/js/jquery-3.7.1.min.js"></script>
  <script src="../assets/js/navbarmenu.js"></script>

</body>
</html>