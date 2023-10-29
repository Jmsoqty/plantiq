<?php
session_start();
include 'php/userconfig.php';

// if (isset($_SESSION['status'])) {
//     if($_SESSION['status'] == "Logged In"){
//         header("Location:home.php");
//         exit();
//     }
// }
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
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/style.css">

</head>
<body>
  
<div class="container mt-4 d-flex justify-content-center align-items-center border shadow-lg border-2 rounded">
  
  <div class="container">
    <div class="wrapper ">
    <div>
    <img class="img-fluid" src="./assets/img/title.png" alt="Your Image">
    </div>
        <h2 class=" text-center mb-3">Login to your Account</h2>
        <form action="php/user_signin.php" method="post">
            <div class="mb-3">
                <input type="text" class="form-control" name="username" id="username" placeholder="Username" value = "<?php if(isset($_COOKIE['fnbkn'])) echo $_SESSION['fnbkn']; ?>" required>
            </div>
            <div class="mb-3">
            <input id="password" type="password" class="form-control" name="password" placeholder="Password" value="<?php if(isset($_COOKIE['qbtuyqug'])) echo $_SESSION['qbtuyqug']; ?>" required>
            </div>
            <div class="mb-3 d-flex justify-content-between">
                <label>
                    <input type="checkbox" name ="remember" <?php if(isset($_COOKIE['fnbkn'])){echo "checked='checked'"; } ?> id="remember"> Remember me
                </label>
                <a href="forgotpass.php" class="forgot-password justify-content-end">Forgot password?</a>
            </div>
        <!-- Sign In End -->
        <?php
                // Display error messages if they were passed in the URL
                if (isset($_GET['errors'])) {
                    $errors = explode(',', $_GET['errors']);
                    foreach ($errors as $error) {
                        echo "<script>Swal.fire({
                                icon: 'error',
                                title: 'ERROR',
                                text: '$error'
                            });</script>";

                }       
                unset($_GET['errors']);
                }
            ?>
             <div class="d-flex justify-content-center">
             <!-- <button type="submit" class="btn btn-lg" style="background-color: #26DB23; color: #ffffff;" >Log In</button> -->
              <a href="./pages/home.php" class="btn btn-primary btn-lg w-50">Login</a>
             </div>
             </form>      
             <h5 class=" text-center mb-3">or</h5>
             
             <div class="d-flex justify-content-center">
             <button type="button" onclick="signIn()" class="btn btn-lg" style="background-color: #E5E4E2; color: black;">
               <img src="./assets/img/google.png" alt="Google Logo" style="width: 30px; height: 30px; margin-right: 5px;"> Continue with Google
             </button>
             </div>
             
              <div class="d-flex justify-content-center mt-3">
                <a style="font-size:15px;">Don't have Account?</a>
                <a href="pages/register.php" style="font-size:15px; color: #26DB23; margin-left: 10px;">Create Account</a>
               </div>
               <br><br>
                
             

             
      </div>
    </div>              
  </div>
</div>
<script>
    if (window.performance) {
      if (performance.navigation.type == 1) {
        // Reloaded the page using the browser's reload button
        window.location.href = "index.php";
      }
    }
    </script>
</body>
</html>
