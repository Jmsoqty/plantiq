<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="shortcut icon" href="css/img/icon.png" type="image/x-icon">


  <!-- http://fortawesome.github.io/Font-Awesome/get-started/ -->
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="../plantiq/css/includes/style.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <script src="..plantiq/css/node_modules/bootstrap/js/src/dropdown.js"></script>

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

  main {
    max-width: 1200px;
    margin: 30px auto;
    padding: 0 20px;
    width: 100%;
    display: grid;
    /* Define Auto Row size */
    grid-auto-rows: 100px;
    /*Define our columns */
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    grid-gap: 1em;
  }

  article {
    border-radius: 10px;
    padding: 20px;
    background-color: #eeeeee;
  }

  button{
    background-color: transparent;
    border: none;
    
  }
</style>

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

 
    <div class="dropdown ms-4">
      <button onclick="toggleDropdown()" class="dropbtn">Device 1 <i class="fa-solid fa-caret-down ms-2"></i></button>
    
      <div id="myDropdown" class="dropdown-content">
      <ul class="dropdown-menu">
        <li><a href="#"><span class="status-green"></span> Device 1</a></li>
        <li><a href="#"><span class="status-red"></span> Device 2</a></li>
    </ul>
      </div>
    </div>
    <i class="icon fa-solid fa-arrow-right-from-bracket"></i>
<i class="icon fa-regular fa-bell me-3 "></i>


  
 
  <!-- END TOP NAV -->
 

  
    
    <!-- Your content here -->
    <div class="container">

      <!-- 1 column -->
      <div class="container">
        <div class="box center-text">
          <div class="row d-flex justify-content-center">
            <div class="col me-5">
              <h5 class="d-flex justify-content-center">Planted For</h5>
              <h1 class="d-flex justify-content-center">19 Days</h1>
              <p class="d-flex justify-content-center">Your plant has exceeded the transfer date by 2 days transfer now</p>
            </div>
            <div class="col d-flex justify-content-center">
              <div role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:65"></div>
            </div>
          </div>
        </div>
      </div>


      <!-- 1 column -->
      <div class="container"">
        <div class="row">
          <div class="col-xs-12">
            <div class="card"  style="border-radius: 25px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;;">
              <div class="card-body">
                <div style="display: flex; justify-content: space-between;" class="mb-4">
                  <h5 class="card-title">Device 1</h5>
                  <button><i class="fa-solid fa-ellipsis fa-lg"></i></i></button>
                </div>

                <div class="row">
                  <div class="col">
                    <p class="card-text">Date Planted:</p>
                    <p class="card-text">October 3, 2023</p>
                  </div>
                  <div class="col">
                    <p class="card-text">Date Of Transfer:</p>
                    <p class="card-text">October 24, 2023</p>
                  </div>
                </div>

                <div>
                  <p class="card-text mt-4">Today's Schedule:</p>
                  <p class="card-text mb-4">9:30 AM October 222</p>
                </div>

                <div class="d-flex justify-content-end">
                  <div class="dropdown">
                    <button>Plant Layout: 8</button>
                    <div class="dropdown-menu">
                      <a href="#">1</a>
                      <a href="#">4</a>
                      <a href="#">8</a>
                    </div>
                  </div>
                </div>

                <div class="wrap">
                  <main>
                    <article>1</article>
                    <article>2</article>
                    <article>3</article>
                    <article>4</article>
                    <article>5</article>
                    <article>6</article>
                    <article>7</article>
                    <article>8</article>
                  </main>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
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