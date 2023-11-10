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
    <link rel="stylesheet" href="../assets/css/style.css">

</head>

<body>

	<!-- CoverPhoto -->
	<?php include '../pages/components/cover.php'; ?>

	<!-- TOP NAVBAR -->
	<?php include '../pages/components/navbar.php'; ?>

	<!-- START CONTENT -->
	<form class="requires-validation" novalidate>
		<div class="container text-center">
			<h2 class="fw-semibold">Add Device</h2>
			<label class="text-muted mb-4">Input all the necessarry info in your Device</label>

			<div class="card shadow mx-auto" style="max-width: 500px; border-radius:25px;">
				<div class="card-body">
			
					<div class="form-floating mb-3 text-start">
						<input type="text" class="form-control rounded" id="floatingInput" placeholder="Name of Device" required>
						<label for="validationServer01" class="form-label">Name of Device</label>
						<div class="valid-feedback">
							Looks good!
						</div>
						<div class="invalid-feedback">
							Not looks good!
						</div>
					</div>

					<div class="form-floating mb-3 text-start">
						<input type="date" class="form-control rounded" id="floatingInput" placeholder="Starting Date of Plant" required>
						<label for="validationServer01" class="form-label">Starting Date of Plant</label>
						<div class="valid-feedback">
							Looks good!
						</div>
						<div class="invalid-feedback">
							Choose a date!
						</div>
					</div>

					<button type="submit" class="btn btn-primary btn-lg m-3 rounded-pill fw-bold w-50" style="box-shadow: -4px 4px #3FAA3D;">Add Device</button>
							
				</div>
			</div>
		</div>
	</form>

	<!-- BOTTOM NAVBAR -->
	<?php include '../pages/components/navbar-bottom.php'; ?>

	<script>
	(function () {
  'use strict';
  const forms = document.querySelectorAll('.requires-validation');
  Array.from(forms).forEach(function (form) {
    form.addEventListener('submit', function (event) {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }

      form.classList.add('was-validated');
    }, false);
  });
	})();
	</script>

	<script src="../assets/js/bootstrap.bundle.js"></script>
	<script src="../assets/js/jquery-3.7.1.min.js"></script>
	<script src="../assets/js/navbarmenu.js"></script>

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