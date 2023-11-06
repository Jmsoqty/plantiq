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
  <link rel="stylesheet" href="../assets/css/styles.css">

</head>
<style>

  .card{
    border-radius: 20px;
  }

  @media (max-width: 576px) {
    .card img {
      max-width: none; /* Prevent image from shrinking on mobile */
      height: 230px; /* Keep the fixed height */
    }
    .description {
      font-size: 8px; /* Adjust this value to your preference */
    }
    .type{
      font-size: 30px;
    }
  }

  @media (min-width: 577px) and (max-width: 767px) {
    .card img {
      max-width: none; /* Prevent image from shrinking on mobile */
      height: 230px; /* Keep the fixed height */
    }
    .description {
      font-size: 8px; /* Adjust this value to your preference */
    }
    .type{
      font-size: 30px;
    }
  }

  @media (max-width: 768px) and (max-width: 991px) {
    .card img {
      max-width: none; /* Prevent image from shrinking on mobile */
      height: 200px; /* Keep the fixed height */
    }
    .description {
      font-size: 20px; /* Adjust this value to your preference */
    }
    .type{
      font-size: 35px;
    }
  }

  @media (max-width: 992px) and (max-width: 1023px) {
    .card img {
      max-width: none; /* Prevent image from shrinking on mobile */
      height: 200px; /* Keep the fixed height */
    }
    .description {
      font-size: 20px; /* Adjust this value to your preference */
    }
    .type{
      font-size: 45px;
    }
  }

  @media (max-width: 1024) and (max-width: 1200px) {
    .card img {
      max-width: none; /* Prevent image from shrinking on mobile */
      height: 200px; /* Keep the fixed height */
    }
    .description {
      font-size: 20px; /* Adjust this value to your preference */
    }
    .type{
      font-size: 45px;
    }
  }

  .card img {
    max-width: 100%;
    height: auto;
    object-fit: cover;
    height: 200px; /* Adjust this value to your preference */
  }
</style>

<body>

  <!-- CoverPhoto -->
  <?php include '../pages/components/cover.php'; ?>

  <!-- TOP NAVBAR -->
  <?php include '../pages/components/navbar.php'; ?>

<div class="container mt-5">
<div class="card mb-3">
    <div class="row g-0">
        <div class="card col-md-4">
            <img class="img-fluid rounded-4" src="../assets/img/onion.jpg" alt="Garlic">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Recommend: </h5>
                <h1>Cabbage</h1>
                <p class="card-text">
                    An onion is a round vegetable with a brown skin that grows underground. 
                    It has many white layers on its inside which have a strong, sharp smell and taste.
                </p>
            </div>
        </div>
    </div>
</div>
<br>
<div class="card mb-3">
    <div class="row g-0">
        <div class="card col-md-4">
            <img class="img-fluid rounded-4" src="../assets/img/cabbage.jpg" alt="Cabbage">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Recommend:</h5>
                <h1>Cabbage</h1>
                <p class="card-text">
                    A cabbage is a round vegetable with a green leafy exterior. 
                    It is commonly used in salads and various dishes.
                </p>
            </div>
        </div>
    </div>
</div>
<br>
<div class="card mb-3">
    <div class="row g-0">
        <div class="card col-md-4">
            <img class="img-fluid rounded-4" src="../assets/img/garlic.jpg" alt="Garlic">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Recommend:</h5>
                <h1>Cabbage</h1>
                <p class="card-text">
                    Garlic is a pungent bulb that is commonly used as a seasoning in various dishes.
                    It adds a distinct flavor and aroma to food.
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