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

  


  @media (max-width: 768px) {
    .container {
      margin-top: 100px;
    }
  }
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
</style>



  <!-- START CONTENT -->
  <div class="container">
    <h1 class="text-center">Add Device</h1>
    <h6 class="text-center text-muted mb-4">INPUT PASSWORD TO CONNECT TO SSID</h6>

    <div class="card shadow mx-auto" style="max-width: 500px; border-radius:25px;"> <!-- Added mx-auto class for horizontal centering -->
      <div class="card-body">
        <h4 class="card-title text-center mb-4">Connect SSID</h4>
        <h2 class="card-title mb-4">SSID: ESP8266</h2>
        <div>

          <div class="input">
            <input type="text" class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="seeButton" required>
          </div>
        </div>
        <div class="d-flex justify-content-center">
          <a href="adevice1.php">
            <button class="btn btn-success btn-lg mt-3">Connect</button>
          </a>
        </div>
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
<?php include '../pages/components/navbar-bottom.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

</body>

</html>