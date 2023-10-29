<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plant.IQ | Home</title>

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
  <!-- TOP NAVBAR -->
<?php include '../pages/components/navbar-top.php'; ?>


<div class="content">
    <!-- Your content here -->
    <div class="container">
          
<!-- 1 column -->
<div class="container">
  <div class="box center-text">
    <div class="row d-flex justify-content-center"> <!-- Added justify-content-center class here -->
      <div class="col me-5">
        <h5 class="d-flex justify-content-center">Planted For</h5>
        <h1 class="d-flex justify-content-center">19 Days</h1>
        <p class="d-flex justify-content-center">Your plant has exceeded the transfer date by 2 days transfer now</p>
      </div>
      <div class="col d-flex justify-content-center"> <!-- Added justify-content-center class here -->
        <div role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:65"></div>
      </div>
    </div>
  </div>
</div>

<button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-secondary">Secondary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button>
<!-- 1 column -->
<div class="container-1">
  <div class="row">
    
    <div class="col-xs-12 ">
      <div class="box-1">
      <div class="head">
      </div>

         
    </div>

  </div>
</div>



<!-- 2 columns -->
<h3>2 Columns</h3>
<div class="container">
  <div class="row">
    
    <div class="col-xs-12 col-sm-6">
      <div class="box">
        <p>class="col-xs-12 col-sm-6"</P>
      </div>
    </div>
    
    <div class="col-xs-12 col-sm-6">
      <div class="box">
        <p>class="col-xs-12 col-sm-6"</P>
      </div>
    </div>
    
  </div>
</div>





    
    </div>
</div>



<!-- BOTTOM NAVBAR -->
<?php include '../pages/components/navbar-bottom.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>


</body>
</html>