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
  <?php include '../pages/components/navbar.php'; ?>



  <div class="container pt-3 mt-5">
      <div class="row">
        <div class="col-9">
          <h3 class="fw-bold mt-3">Settings</h3>
          <h5 class="text-secondary fw-bold mt-4">
    <a href="../pages/changeuser.php" class="text-decoration-none text-black"><i class="fas fa-pencil-alt"></i>Change Username</a>
</h5>
<h5 class="text-secondary fw-bold mt-4">
    <a href="../pages/changepass.php" class="text-decoration-none text-black"><i class="fas fa-pencil-alt"></i>Change Password</a>
</h5>

        
        </div>
        <div class="col-3 text-end arrow-col">
          <span class="arrow">></span>
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