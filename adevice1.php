<!DOCTYPE html>
<html>

<head>
  <title>Add Device</title>
  <link rel="shortcut icon" href="css/img/icon.png" type="image/x-icon">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- LINKS -->
  <!-- http://fortawesome.github.io/Font-Awesome/get-started/ -->
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="../plantiq/css/includes/style.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css\node_modules\bootstrap\dist\css\bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<style>
  .container {
    margin-top: 100px; 
}






@media (max-width: 768px) {
    .container {
        margin-top: 100px;
    }
}

</style>
  

<body>


  <!-- NAVBAR START -->

  <nav class="nav fixed-bottom">
    <a href="home.php" class="nav__link">
      <i class="fa fa-fw fa-home"></i>
      <span class="nav__text">Home</span>
    </a>
    <a href="findplant.php" class="nav__link ">
      <i class="fa fa-solid fa-book-bookmark"></i>
      <span class="nav__text">Find Plants</span>
    </a>
    <a href="adddevice.php" class="nav__link nav__link--active">
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


  <!-- START CONTENT -->
  <div class="container">
    <h1 class="text-center">Add Device</h1>
    <h6 class="text-center text-muted mb-4">input all the necessarry Info in your Device</h6>

    <div class="card shadow mx-auto" style="max-width: 500px; border-radius:25px;"> 
      <div class="card-body">
        <div>

          <div class="input">
            <input type="text" class="form-control form-control-lg mb-2" placeholder="Name of Device" required>
            <input type="text" class="datepicker form-control form-control-lg" placeholder="Date Planted" required>
            <textarea class="form-control form-control-lg mt-2" id="" cols="57" rows="5" placeholder="Plants in this Device"></textarea>
          </div>
        </div>
        <div class="d-flex justify-content-center">
          <a href="adevice1.php">
            <button class="btn btn-success btn-lg mt-3">Add Device</button>
          </a>
        </div>
      </div>
    </div>

  </div>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

  <script>
    $(document).ready(function() {
        $('.datepicker').datepicker({
            format: 'mm/dd/yyyy', // Customize the date format as needed
            todayHighlight: true,
            autoclose: true
        });
    });
</script>

</body>

</html>