<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant.IQ | Add Device</title>
    <link rel="icon" href="../assets/img/icon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&family=Open+Sans:wght@300;400;500;600;700&family=Ubuntu:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css\node_modules\bootstrap\dist\css\bootstrap.min.css">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Main Template -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">

</head>

<body>

    <!-- CoverPhoto -->
<<<<<<< HEAD
    <?php include '../pages/components/cover.php'; ?>
=======
  <?php include '../pages/components/cover.php'; ?>
>>>>>>> 938023eaef297925c80e435eccac957735dd8fcf

    <!-- TOP NAVBAR -->
    <?php include '../pages/components/navbar.php'; ?>

    <!-- START CONTENT -->
    <div class="container">
        <h1 class="text-center">Add Device</h1>
        <h6 class="text-center text-muted mb-4">input all the necessarry Info in your Device</h6>

        <div class="card shadow mx-auto" style="max-width: 500px; border-radius:25px;">
            <div class="card-body">
                <div>

                    <div class="input">
                        <input type="text" class="form-control form-control-lg mb-2" placeholder="Name of Device"
                            required>
                        <input type="text" class="datepicker form-control form-control-lg" placeholder="Date Planted"
                            required>
                        <textarea class="form-control form-control-lg mt-2" id="" cols="57" rows="5"
                            placeholder="Plants in this Device"></textarea>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="adevice1.php">
                        <button class="btn btn-success btn-lg mt-3" style="background-color: #26DB23;">Add
                            Device</button>
                    </a>
                </div>
            </div>
        </div>

    </div>

    <!-- BOTTOM NAVBAR -->
    <?php include '../pages/components/navbar-bottom.php'; ?>

    <script src="../assets/js/bootstrap.bundle.js"></script>
    <script src="../assets/js/jquery-3.7.1.min.js"></script>
    <script src="../assets/js/navbarmenu.js"></script>

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

<!-- Modal -->
<div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>