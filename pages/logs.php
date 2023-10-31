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
  <?php include '../pages/components/navbar-top.php'; ?>
<!-- HOME NAVBAR -->
<?php include '../pages/components/navbar-home.php'; ?>
  
<div class="card-body" style='overflow-x:auto; margin-top:30px'>
        <table id="tbl" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <h5 class="ms-2">October 24, 2023</h5>
            <tr>
              <th width="20%">Device Name</th>
              <th width="20%">Plant Status</th>
              <th width="17%">PH Level</th>
              <th width="20%">Water Level</th>
              <th width="20%">Soil Moisture</th>
              <th width="15%">Time</th>
              
            </tr>
           
            
          </thead>

          <tbody>

          <table id="tbl" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <h5 class="ms-2 mt-5">October 25, 2023</h5>
            <tr>
              <th width="20%">Device Name</th>
              <th width="20%">Plant Status</th>
              <th width="17%">PH Level</th>
              <th width="20%">Water Level</th>
              <th width="20%">Soil Moisture</th>
              <th width="15%">Time</th>
              
            </tr>
           
            
          </thead>

          <tbody>

          


  <!-- BOTTOM NAVBAR -->
<?php include '../pages/components/navbar-bottom.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>