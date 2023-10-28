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
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/style.css">

</head>
<body>
  <!-- TOP NAVBAR -->
<?php include './pages/component/navbar-top.php'; ?>



<div class="dropdown d-flex float-right mt-2">
    <button class="btn" type="button" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fa fa-sign-out fa-2x"></i>
    </button>
</div>

<div class="dropdown float-right mt-2">
    <button class="btn dropdown-toggle" type="button" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-bell fa-2x"></i>
        <span  class="position-absolute translate-middle badge rounded-pill bg-danger "> 99+</span>
    </button>
</div>


 <button class="btn btn-default dropdown-toggle custom-button mt-2 mx-2 " type="button" data-toggle="dropdown">
    <i class="fa fa-retweet"></i> Device 
</button>

<!-- Start -->
<br><br>
<div class="card shadow mx-5">
  <div class="card-body">
    <center><h1 class="card-title">Scan QR or Connect</h1></center>
        <div>
            <div class="input">
                <input type="text" class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="seeButton" required>
            </div>
        </div>
        <div>
            <a href="adevice1.php">
                <center><button class="btn btn-success btn-lg mt-3">Connect</button></center>
            </a>
        </div>
  </div>
</div>

<script>
    document.getElementById('seeButton').addEventListener('click', function() {
        var passwordInput = document.getElementById('passwordInput');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
        } else {
            passwordInput.type = 'password';
        }
    });
</script>

<!-- BOTTOM NAVBAR -->
<?php include './pages/component/navbar-bottom.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

</body>
</html>
