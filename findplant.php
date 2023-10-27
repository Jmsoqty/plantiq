<!DOCTYPE html>
<html>

<head>
  <title>Find Plant</title>
  <link rel="shortcut icon" href="css/img/icon.png" type="image/x-icon">



  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSS FOLDER -->
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="../plantiq/css/includes/style.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css\node_modules\bootstrap\dist\css\bootstrap.min.css">

  <style>
    body {
      height: fit-content;
    }

    .boxy {
      display: flex;
      background: white;
      padding: 10px;
      border: 2px #ccc solid;
      color: #333;
      height: 180px;
      border-radius: 25px;
      margin: auto;
      box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }

    .boxy img {
      width: auto;
      height: 100%;
      border-radius: 25px;
    }

    p {
      font-size: 18px;
    }

    h6.headline {
      font-weight: bolder;
    }

    h6.sub {
      font-size: small;
    }

    @media (max-width: 768px) {

      /* Styles for small screens */
      img {
        max-width: 140px;
        height: 100%;
        margin: auto;
      }

      p {
        font-size: 10px;
      }

      h6.headline {
        font-weight: bolder;
        font-size: 14px;
        /* Adjust the font size for h6 in mobile view */
      }

      h6.sub {
        font-size: 9px;
      }

      /* Additional styles for small screens */
    }
  </style>
</head>

<body>

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

   <div class="top fixed-top">
    <div class="dropdown ms-4">
      <button onclick="toggleDropdown()" class="dropbtn">Device 1 <i class="fa-solid fa-caret-down ms-2"></i></button>

      <div id="myDropdown" class="dropdown-content">
        <a href="#">Device 2</a>
        <a href="#">Add Device <i class="fa-solid fa-plus ms-1"></i></a>
      </div>
    </div>
    <i class="icon fa-regular fa-bell me-3"></i>
    <i class="icon fa-solid fa-arrow-right-from-bracket "></i>


  </div>

  <!-- END TOP NAV -->
  

  <div class="content">
    <div class="container">

      <br>
      <h1> SUGGESTIONS: </h1>

      <!-- CONTENT START -->
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


</body>

</html>