<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plant.IQ | Home</title>

  <link rel="icon" href="../assets/img/icon.png">
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&family=Open+Sans:wght@300;400;500;600;700&family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">  <link rel="stylesheet" href="css\node_modules\bootstrap\dist\css\bootstrap.min.css">
  
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  
  <!-- Main Template -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/styles.css">

</head>
<body>

  <!-- CoverPhoto -->
  <?php include '../pages/components/cover.php'; ?>

  <!-- TOP NAVBAR -->
  <?php include '../pages/components/navbar.php'; ?>

<div class="container">
<a href="../pages/settings.php" class="text-black">
<i class="fa-solid fa-arrow-left"></i>
</a>    
    <div style="margin-top: 100px;">
        <h1 class="justify-content-center d-flex">Change Password</h1>
       <center> <span style="color: gray;">Input your desire Password</span> </center>
    </div>
    <div class="form-floating mt-3 text-start border border-dark rounded-4">
              <input type="text" class="form-control rounded-4" id="floatingPassword" placeholder="NewPassword" required>
              <label for="floatingconpassword" class="form-label">New Password</label>
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Not look good!
              </div>
            </div>
            <div class="form-floating mt-3 text-start border border-dark rounded-4">
              <input type="text" class="form-control rounded-4" id="floatingPassword" placeholder="ConfirmPassword" required>
              <label for="floatingconpassword" class="form-label">Confirm Password</label>
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Not look good!
              </div>
            </div>
           <center> <a href="./pages/home.php" class=" btn btn-primary btn-lg rounded-pill w-50 mt-5 ">Change Password</a> </center>
</div>

<!--
<div class="container mt-5">
    <div class="card mx-auto shadow" style="width: 30rem;">
    <h1 class="mx-auto mt-3">Change Password</h1>
    <label class="mx-auto" style="color: grey;">input your desire password</label>
    <div class="card-body">
            <form action="tms_login_backend.php" method="post">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingPass" placeholder="name@example.com">
                    <label for="floatingPass">New Password</label>
                    </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingConfPassword" placeholder="Password">
                    <label for="floatingConfPassword">Confirm Password</label>
                </div>
            </form>
            <div class="justify-content-center d-flex mx-auto">
                <a href="#">
                    <button class="btn btn-success btn-lg mt-3">Confirm</button>
                </a>
            </div>
        </div>
    </div>
</div>    
-->

<script src="js/bootstrap.bundle.min.css"></script>
</body>
</html>