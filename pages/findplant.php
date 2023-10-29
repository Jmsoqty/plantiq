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




<div class="dropdown d-flex float-right mt-2">
    <button class="btn" type="button" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fa fa-sign-out fa-2x"></i>
    </button>
</div>

  <!-- NAVBAR START -->

  <nav class="nav fixed-bottom">
    <a href="home.php" class="nav__link">
      <i class="fa fa-fw fa-home"></i>
      <span class="nav__text">Home</span>
    </a>
    <a href="findplant.php" class="nav__link nav__link--active">
      <i class="fa fa-solid fa-book-bookmark"></i>
      <span class="nav__text">Find Plants</span>
    </a>
    <a href="adddevice.php" class="nav__link">
      <i class="fa fa-solid fa-plus"></i>
      <span class="nav__text">Add Device</span>
    </a>
    <a href="profile.php" class="nav__link">
      <i class="fa fa-regular fa-user"></i>
      <span class="nav__text">Profile</span>
    </a>
    <a href="settings.php" class="nav__link">
      <i class="fa fa-solid fa-gear"></i>
      <span class="nav__text">Settings</span>
    </a>
  </nav>

  <!-- NAVBAR END -->

   <!-- TOP NAV -->

  
   <!-- <div class="dropdown ms-4">
      <button onclick="toggleDropdown()" class="dropbtn">Device 1 <i class="fa-solid fa-caret-down ms-2"></i></button>
    
      <div id="myDropdown" class="dropdown-content">
      <ul class="dropdown-menu">
        <li><a href="#"><span class="status-green"></span> Device 1</a></li>
        <li><a href="#"><span class="status-red"></span> Device 2</a></li>
    </ul>
      </div>
    </div> -->
   
<i class="icon fa-solid fa-arrow-right-from-bracket"></i>
<i class="icon fa-regular fa-bell me-3 "></i>


 <button class="btn btn-default dropdown-toggle custom-button mt-2 mx-2 " type="button" data-toggle="dropdown">
    <i class="fa fa-retweet"></i> Device 
</button>
<br>
<div class="container">
<label class="display-4 mx-5"><b>Suggestions:</b> </label>
<div class="card mx-2 my-2 shadow-lg">
  <div class="card-body">
    <div class="d-flex justify-content-start">
        <div>
        <img class="rounded img-fluid" id="img-plants" src="css/img/sili.jpg">
        </div>

        <div class="text">
          <p>Recommended:</p>
          <h6 class="headline">Red Chili Peppers</h6>
          <h6 class="sub">7-10 Days</h6>

          <h6 class="sub">Start the seeds indoors in a small punnet or pot in October/November and transplant outdoors only when weather is consistently warm – usually early December.</h6>
        </div>
      </div>

      <div class="boxy mt-3">
        <div class="me-2">
          <img class="img" src="css/img/sili.jpg" class="img-responsive">
        </div>

        <div class="text">
          <p>Recommended:</p>
          <h6 class="headline">Red Chili Peppers</h6>
          <h6 class="sub">7-10 Days</h6>

          <h6 class="sub">Start the seeds indoors in a small punnet or pot in October/November and transplant outdoors only when weather is consistently warm – usually early December.</h6>
        </div>
      </div>

      <div class="boxy mt-3">
        <div class="me-2">
          <img class="img" src="css/img/sili.jpg" class="img-responsive">
        </div>

        <div class="text">
          <p>Recommended:</p>
          <h6 class="headline">Red Chili Peppers</h6>
          <h6 class="sub">7-10 Days</h6>

          <h6 class="sub">Start the seeds indoors in a small punnet or pot in October/November and transplant outdoors only when weather is consistently warm – usually early December.</h6>
        </div>
      </div>

      <div class="boxy mt-3">
        <div class="me-2">
          <img class="img" src="css/img/sili.jpg" class="img-responsive">
        </div>

        <div class="text">
          <p>Recommended:</p>
          <h6 class="headline">Red Chili Peppers</h6>
          <h6 class="sub">7-10 Days</h6>

          <h6 class="sub">Start the seeds indoors in a small punnet or pot in October/November and transplant outdoors only when weather is consistently warm – usually early December.</h6>
        </div>
      </div>

      <div class="boxy mt-3">
        <div class="me-2">
          <img class="img" src="css/img/sili.jpg" class="img-responsive">
        </div>

        <div class="text">
          <p>Recommended:</p>
          <h6 class="headline">Red Chili Peppers</h6>
          <h6 class="sub">7-10 Days</h6>

          <h6 class="sub">Start the seeds indoors in a small punnet or pot in October/November and transplant outdoors only when weather is consistently warm – usually early December.</h6>
        </div>
      </div>

    </div>
  </div>
</div>
<div class="card mx-2 my-2 shadow-lg">
  <div class="card-body">
    <div class="d-flex justify-content-start">
        <div>
        <img class="rounded img-fluid" id="img-plants" src="css/img/sili.jpg">
        </div>
        <div class="mx-5">
        <h3>Recommended:</h3>
        <h1><b>Red Chili Peppers</b></h1>
        <label>7 - 10 days</label>
        <p>From there, you’ll need to include an RTL version of our CSS. For example, here’s the stylesheet for our compiled and minified CSS with RTL enabled:</p>
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