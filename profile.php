<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link rel="shortcut icon" href="css/img/icon.png" type="image/x-icon">


  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="../plantiq/css/includes/style.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css\node_modules\bootstrap\dist\css\bootstrap.min.css">

</head>
<style>
   .dropdown {
    position: relative;
    display: inline-block;
  }



  .dropdown button {
    background-color: #f5f5f5;
    border: 1px solid #ccc;
    border-radius: 4px;
    padding: 8px 12px;
    cursor: pointer;
  }

  .dropdown .dropdown-menu {
    display: none;
    position: absolute;
    background-color: #fff;
    min-width: 160px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    z-index: 1;
  }

  .dropdown:hover .dropdown-menu {
    display: block;
  }

  .dropdown a {
    display: block;
    padding: 8px 12px;
    text-decoration: none;
    color: #333;
  }

  .dropdown a:hover {
    background-color: #f5f5f5;
  }
  .image-container {
    text-align: center;
    margin-bottom: 20px;
}

.img {
    max-width: 100%;
    height: auto;
}

h1 {
    font-size: 1.5em;
    margin: 10px 0;
}

h3.light-text {
    color: #757575;
}

h2 {
    font-size: 1.2em;
    text-align: left;
    margin: 20px 0;
}

/* Responsive styles */
@media (max-width: 768px) {
    h1 {
        font-size: 1.2em;
    }
}

@media (max-width: 480px) {
    h1 {
        font-size: 1em;
    }

    h2 {
        font-size: 1em;
    }
}
.img {
  border-radius: 50%;
}
.light-text {
    color: #757575;
}
.me-2 {
   
    white-space: nowrap; /* Prevent line breaks */
    justify-content: center; /* Center the items horizontally */
    align-items: center; /* Center the items vertically */
}

.image {
    width: 30%; /* Make sure the image takes 100% of the container's width */
    height: auto; /* Maintain aspect ratio */
    display: inline-block; /* Display images in a horizontal line */
    margin: 0 10px; /* Add some horizontal space between images (adjust as needed) */
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
    <a href="adddevice.php" class="nav__link">
      <i class="fa fa-solid fa-plus"></i>
      <span class="nav__text">Add Device</span>
    </a>
    <a href="profile.php" class="nav__link nav__link--active">
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


  <!-- </div> -->
  <!-- END TOP NAV -->

  <div class="container">
    <!-- Your content here -->
    <div class="image-container">
        <img class="img" src="css/img/sili.jpg"  class="img-responsive">
        <h1> Annabelle Roxas </h1>
        <h3 class="light-text">Owner</h3>
    </div>
<h2> My Plants </h2> 

        <div class="me-2">
          <img class="image" src="css/img/sili.jpg" class="img-responsive">
          <img class="image" src="css/img/sili.jpg" class="img-responsive">
          <img class="image" src="css/img/sili.jpg" class="img-responsive">

  </div>
  
  

  <!-- BOTTOM NAVBAR -->
  <?php include 'css\navbar.php'; ?>
  <script>
    // Close the dropdown when the page is initially loaded
    document.getElementById("myDropdown").style.display = "none";

    function toggleDropdown() {
      var dropdown = document.getElementById("myDropdown");
      if (dropdown.style.display === "block") {
        dropdown.style.display = "none";
      } else {
        dropdown.style.display = "block";
      }
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdown = document.getElementById("myDropdown");
        if (dropdown.style.display === "block") {
          dropdown.style.display = "none";
        }
      }
    }
  </script>
</body>

</html>