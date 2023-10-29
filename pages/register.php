<?php
session_start();
include '../php/userconfig.php';

// if (isset($_SESSION['status'])) {
//     if($_SESSION['status'] == "Logged In"){
//         header("Location:home.php");
//         exit();
//     }
// }
// Check if the session variables are set
$fullname = isset($_SESSION['fullname']) ? $_SESSION['fullname'] : '';
$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';

// Clear the session variables
unset($_SESSION['username']);
unset($_SESSION['email']);
?>
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
<div class="container mt-4 d-flex justify-content-center align-items-center border shadow-lg border-2 rounded">
  
  <div class="container">
    <div class="wrapper ">
    <div>
    <img class="img-fluid" src="../assets/img/title.png" alt="Your Image">
    </div>
        <div class="title mt-1"><h2>Register Account</h2></div>
        <form action="" method="post">
            <div class=" mb-2">
                <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
            </div>
            <div class=" mb-2">
                <input type="text" class="form-control" name="email" id="email" placeholder="Username" required>
            </div>
            <div class=" mb-2">
            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <div class=" mb-2">
            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <div class="mb-2">
                <label>
                    <input type="checkbox" id="showPassword" id="remember"> Show Password
                </label>
            </div>
        <!-- Sign In End -->
        
             <div class="d-flex justify-content-center">
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-lg mt-1" style="background-color: #26DB23; color: #ffffff;" >Create Account</button>
                </div>
             </div>
             <h5 class=" text-center mb-1">or</h5>
             
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-lg mt-2" style="background-color: #E5E4E2; color: black;">
                        <img src="../assets/img/google.png" alt="Google Logo" style="width: 30px; height: 30px; margin-right: 5px;"> Continue with Google
                    </button>
                </div>
             
             <div class="d-flex justify-content-center mt-1 text-muted mt-3">
                <a style="font-size:18px;">Already have a Account?</a>
                <a href="../index.php" style="font-size:18px; color: #26DB23; margin-left: 10px;">Login</a>
            </div>
            </form>
             </div>

             
        </div>
</div>
    </div>
</div>
</div>
</div>
<script>
  const fullNameInput = document.querySelector('input[name="fullname"]');
      fullNameInput.addEventListener('keypress', function(event) {
          const key = event.key;
          const regex = /[a-z A-Z]/;
      if (!regex.test(key)) {
            event.preventDefault();
        }
  });
</script>
<script>
    if (window.performance) {
      if (performance.navigation.type == 1) {
        // Reloaded the page using the browser's reload button
        window.location.href = "register.php";
      }
    }
    </script>
    <script>
        document.getElementById('showPassword').onclick = function() {
    if ( this.checked ) {
       document.getElementById('password').type = "text";
    } else {
       document.getElementById('password').type = "password";
    }
};
    </script>
</body>
</html>
