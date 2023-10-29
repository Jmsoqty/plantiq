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

  

<body>


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

<!-- BOTTOM NAVBAR -->
<?php include '../pages/components/navbar-bottom.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
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