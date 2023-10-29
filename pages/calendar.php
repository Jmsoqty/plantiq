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
  .status-indicator {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    display: inline-block;
    margin-left: 5px;
    margin-right: 10px;
}

.status-green {
    background-color: green;
}
.status-indicator.status-yellow {
    background-color: yellow;
}

.status-indicator.status-blue {
    background-color: blue;
}

/* Responsive Styling */
@media (max-width: 768px) {
    .status-indicator {
        width: 8px;
        height: 8px;
        margin-left: 3px;
        margin-right: 6px;
    }

    .status-text {
        font-size: 14px;
    }
}

@media (max-width: 576px) {
    .status-indicator {
        width: 6px;
        height: 6px;
        margin-left: 2px;
        margin-right: 4px;
    }

    .status-text {
        font-size: 12px;
    }
}
/* Default styles */
.status-container {
    text-align: center;
}
.container {
    margin: 20px;
}

.card {
    border-radius: 25px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}

/* Responsive styles */

/* Small devices (landscape phones, 576px and up) */
@media (min-width: 576px) {
    .box .col {
        margin: 10px;
    }

    .card {
        margin: 10px;
    }
}

/* Medium devices (tablets, 768px and up) */
@media (min-width: 768px) {
    .box .col {
        margin: 20px;
    }

    .card {
        margin: 20px;
    }
}

/* Large devices (desktops, 992px and up) */
@media (min-width: 992px) {
    .box .col {
        margin: 30px;
    }

    .card {
        margin: 30px;
    }
}

/* Extra large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) {
    .box .col {
        margin: 40px;
    }

    .card {
        margin: 40px;
    }
}
.light-text {
    color: #757575; /* Or any light color you prefer */
}
ul {list-style-type: none;}
body {font-family: Verdana, sans-serif;}

/* Month header */
.month {
  padding: 70px 25px;
  width: 100%;
  background: white;
  text-align: center;
}

/* Month list */
.month ul {
  margin: 0;
  padding: 0;
}

.month ul li {
  color: black;
  font-size: 20px;
  text-transform: uppercase;
  letter-spacing: 3px;
}

/* Previous button inside month header */
.month .prev {
  float: left;
  padding-top: 10px;
}

/* Next button */
.month .next {
  float: right;
  padding-top: 10px;
}

/* Weekdays (Mon-Sun) */
.weekdays {
  margin: 0;
  padding: 10px 0;
  background-color:#ddd;
}

.weekdays li {
  display: inline-block;
  width: 13.6%;
  color: #666;
  text-align: center;
}

/* Days (1-31) */
.days {
  padding: 10px 0;
  background: white;
  margin: 0;
}

.days li {
  list-style-type: none;
  display: inline-block;
  width: 13.6%;
  text-align: center;
  margin-bottom: 5px;
  font-size:12px;
  color: black;

}

/* Highlight the "current" day */
.days li .active {
  padding: 5px;
  background: #1abc9c;
  color: white !important
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
      
    <span class="status-text">Status Connected:</span> <span class="status-indicator status-green"></span> 
 </div>
    <i class="icon fa-solid fa-arrow-right-from-bracket"></i>
<i class="icon fa-regular fa-bell me-3 "></i>
</div>
<button type="button" class="btn btn-success btn-lg" style="margin-left: 70px; margin-top:20px;">Calendar</button>
<button type="button" class="btn btn-default btn-lg" style="margin-left: 10px; margin-top:20px;">Logs</button>
<button type="button" class="btn btn btn-lg" style="margin-left: 10px; margin-top:20px;">History</button>
<div class="month">
  <ul>
    <li class="prev">&#10094;</li>
    <li class="next">&#10095;</li>
    <li>August<br><span style="font-size:18px">2023</span></li>
  </ul>
</div>

<ul class="weekdays">
  <li>Su</li>
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
</ul>

<ul class="days">
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li><span class="active">10</span></li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>

 

</ul>
<div class="status-container">
    <span class="status-indicator status-yellow"></span> <span class="status-text">Sunlight</span>
    <span class="status-indicator status-blue"></span> <span class="status-text">Water</span>
    <span class="status-indicator status-red"></span> <span class="status-text">Not Receive Any</span>
    <span class="status-indicator status-green"></span> <span class="status-text">Ready to Harvest</span>
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
  <!-- BOTTOM NAVBAR -->
<?php include '../pages/components/navbar-bottom.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>