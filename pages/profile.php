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



<br><br><br>
<div class="container mt-5">
  <div class="upload" id="upload">
    <center>
      <div id="idbox" class="shadow d-flex rounded-circle" style="height: 150px; width: 150px;">
        <img src="css/img/sili.jpg" class="rounded-circle img-fluid" alt="Uploaded Image">  
      </div>
      <div class="btn rounded">
          <i class="fa-solid fa-camera"></i>
          <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" required>
      </div>
    </center>
  </div>

    <script>
        const image_input = document.querySelector("#image");
        var uploaded_image = "";

        image_input.addEventListener("change", function() {
            const reader = new FileReader();
            reader.addEventListener("load", () => {
                uploaded_image = reader.result;
                document.querySelector("#idbox").style.backgroundImage = `url('${uploaded_image}')`;
            });
            reader.readAsDataURL(this.files[0]);
        })
    </script>
  <br>
</div>
</div>
<script>
document.getElementById('image').addEventListener('change', function() {
    var file = this.files[0];
    if (file) {
        var reader = new FileReader();
        reader.onload = function(event) {
            var img = document.getElementById('imagePreview');
            img.src = event.target.result;
        }
        reader.readAsDataURL(file);
    }
});
</script>

<!-- BOTTOM NAVBAR -->
<?php include './pages/components/navbar-bottom.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

</body>
</html>