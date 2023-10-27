<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Settings</title>
  <link rel="shortcut icon" href="css/img/icon.png" type="image/x-icon">

  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="../plantiq/css/includes/style.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css\node_modules\bootstrap\dist\css\bootstrap.min.css">

</head>

<body>

  <!-- NAVBAR START -->

  <nav class="nav fixed-bottom">
    <a href="home.php" class="nav__link nav__link--active">
      <i class="fa fa-fw fa-home"></i>
      <span class="nav__text">Home</span>
    </a>
    <a href="findplant.php" class="nav__link ">
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
    <!-- Your content here -->
    <h1>SETTINGS VIEW</h1>
    <h1>SETTINGS VIEW</h1>
    <h1>SETTINGS VIEW</h1>
    <h1>SETTINGS VIEW</h1>
    <h1>SETTINGS VIEW</h1>
    <h1>SETTINGS VIEW</h1>
    <h1>SETTINGS VIEW</h1>
    <h1>SETTINGS VIEW</h1>
    <h1>SETTINGS VIEW</h1>
    <h1>SETTINGS VIEW</h1>
    <h1>SETTINGS VIEW</h1>
    <h1>SETTINGS VIEW</h1>
    <h1>SETTINGS VIEW</h1>
    <h1>SETTINGS VIEW</h1>
    <h1>SETTINGS VIEW</h1>
    <h1>SETTINGS VIEW</h1>


  </div>

  <!-- BOTTOM NAVBAR -->
  <?php include 'css\navbar.php'; ?>

</body>

</html>