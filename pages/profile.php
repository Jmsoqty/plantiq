<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plant.IQ | Profile </title>

  <link rel="icon" href="../assets/img/icon.png">
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&family=Open+Sans:wght@300;400;500;600;700&family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">  <link rel="stylesheet" href="css\node_modules\bootstrap\dist\css\bootstrap.min.css">
  
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">

  <!-- Main Template -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">

</head>
<body>

  <!-- CoverPhoto -->
  <?php include '../pages/components/cover.php'; ?>

  <!-- TOP NAVBAR -->
  <?php include '../pages/components/navbar.php'; ?>

<div class="container mt-5">
    <div class="upload mx-auto" id="upload">
        <div class="position-relative d-inline-block">
            <div class="rounded-circle-container shadow position-relative">
                <img id="uploadedImage" src="../assets/img/annabelle.jpg" class="img-fluid" alt="Uploaded Image">
            </div>
            <label for="image" class="btn rounded position-absolute bottom-0 end-0 mb-2 me-2">
                <i class="fa-solid fa-plus d-flex justify-content-center p-2 mt-2 px-4" style="color: green;font-size: 2.4em; background-color: white; border-radius: 50%; width: 50px; height: 50px;"></i>
                <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" onchange="displayImage(event)" required style="display: none;">
            </label>
        </div>
        <div>
            <h1 class="fw-bold">Annabelle Roxas</h1>
            <span class="text-secondary">Owner</span>
        </div>
    </div>
</div>
<br><br>
<div class="slide-container swiper">
    <div class="d-flex justify-content-between">
        <div class="mx-5">
            <h1 class="fw-bold">My Plants</h1>
        </div>
        <div class="mx-5">
            <div class="btn-group">
                <button type="button" class="btn btn-transparen dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Device 1
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Device 2</a></li>
                    <li><a class="dropdown-item" href="#">Device 3</a></li>
            </div>
        </div>
    </div>

  <div class="slide-content mb-5">
    <div class="card-wrapper swiper-wrapper">
      <div class="bg-image swiper-slide">
              <div class="image-content">
                  <span class="overlay">  
                      <img src="../assets/img/onion.jpg" alt="" class="img-fluid rounded" style="height: 300px;">
                      <!-- Add a span or button inside the overlay -->
                      <div class="inner-div">
                          <button class="btn btn-outline-primary fw-bold" id="btn-plant">Onion
                          <br><span id="span-date">Transfer in: 2 days</span></button>
                      </div>
                  </span>
              </div>
          </div>

          <div class="bg-image swiper-slide">
              <div class="image-content">
                  <span class="overlay">  
                      <img src="../assets/img/lettuce.jpg" alt="" class="img-fluid rounded" style="height: 300px;">
                      <!-- Add a span or button inside the overlay -->
                      <div class="inner-div" style="mt-2">
                          <button class="btn btn-outline-primary fw-bold" id="btn-plant">Lettuce
                          <br><span id="span-date">Transfer in: 2 days</span></button>
                      </div>
                  </span>
              </div>
          </div>

          <div class="bg-image swiper-slide">
              <div class="image-content">
                  <span class="overlay">  
                      <img src="../assets/img/carrot.jpg" alt="" class="img-fluid rounded" style="height: 300px;">
                      <!-- Add a span or button inside the overlay -->
                      <div class="inner-div" style="mt-2">
                          <button class="btn btn-outline-primary fw-bold " id="btn-plant">Carrot
                          <br><span id="span-date">Transfer in: 2 days</span></button>
                      </div>
                  </span>
              </div>
          </div>

          <div class="bg-image swiper-slide">
              <div class="image-content">
                  <span class="overlay">  
                      <img src="../assets/img/sili.png" alt="" class="img-fluid rounded" style="height: 300px;">
                      <!-- Add a span or button inside the overlay -->
                      <div class="inner-div" style="mt-2">
                          <button class="btn btn-outline-primary fw-bold " id="btn-plant">Sili
                          <br><span id="span-date">Transfer in: 2 days</span></button>
                      </div>
                  </span>
              </div>
          </div>

          <div class="bg-image swiper-slide">
              <div class="image-content">
                  <span class="overlay">  
                      <img src="../assets/img/garlic.jpg" alt="" class="img-fluid rounded" style="height: 300px;">
                      <!-- Add a span or button inside the overlay -->
                      <div class="inner-div" style="mt-2">
                          <button class="btn btn-outline-primary fw-bold " id="btn-plant">Garlic
                          <br><span id="span-date">Transfer in: 2 days</span></button>
                      </div>
                  </span>
              </div>
          </div>

          <div class="bg-image swiper-slide">
              <div class="image-content">
                  <span class="overlay">  
                      <img src="../assets/img/cabbage.jpg" alt="" class="img-fluid rounded" style="height: 300px;">
                      <!-- Add a span or button inside the overlay -->
                      <div class="inner-div" style="mt-2">
                          <button class="btn btn-outline-primary fw-bold " id="btn-plant">Cabbage
                          <br><span id="span-date">Transfer in: 2 days</span></button>
                      </div>
                  </span>
              </div>
          </div>

          <div class="bg-image swiper-slide">
              <div class="image-content">
                  <span class="overlay">  
                      <img src="../assets/img/potato.png" alt="" class="img-fluid rounded" style="height: 300px;">
                      <!-- Add a span or button inside the overlay -->
                      <div class="inner-div" style="mt-2">
                          <button class="btn btn-outline-primary fw-bold " id="btn-plant">Potato
                          <br><span id="span-date">Transfer in: 2 days</span></button>
                      </div>
                  </span>
              </div>
          </div>

          <div class="bg-image swiper-slide">
              <div class="image-content">
                  <span class="overlay">  
                      <img src="../assets/img/brocoli.jpg" alt="" class="img-fluid rounded" style="height: 300px;">
                      <!-- Add a span or button inside the overlay -->
                      <div class="inner-div" style="mt-2">
                          <button class="btn btn-outline-primary fw-bold" id="btn-plant">Brocoli
                          <br><span id="span-date">Transfer in: 2 days</span></button>
                      </div>
                  </span>
              </div>
          </div>

          <div class="bg-image swiper-slide">
              <div class="image-content">
                  <span class="overlay">  
                      <img src="../assets/img/tomatoes.jpg" alt="" class="img-fluid rounded" style="height: 300px;">
                      <!-- Add a span or button inside the overlay -->
                      <div class="inner-div" style="mt-2">
                          <button class="btn btn-outline-primary fw-bold" id="btn-plant">Tomatoes
                          <br><span id="span-date">Transfer in: 2 days</span></button>
                      </div>
                  </span>
              </div>
          </div>
      </div>
  </div>
  <div class="swiper-button-next swiper-navBtn"></div>
  <div class="swiper-button-prev swiper-navBtn"></div>
  <div class="swiper-pagination"></div>
</div>

<script>
    function displayImage(event) {
        var image = document.getElementById('uploadedImage');
        image.src = URL.createObjectURL(event.target.files[0]);
    }
</script>

  <!-- BOTTOM NAVBAR -->
  <?php include '../pages/components/navbar-bottom.php'; ?>

  <!-- Swiper JS -->
  <script src="../assets/js/swiper-bundle.min.js"></script>
  <!-- JavaScript -->
  <script src="../assets/js/script-swiper.js"></script>
  <script src="../assets/js/bootstrap.bundle.js"></script>
  <script src="../assets/js/jquery-3.7.1.min.js"></script>
  <script src="../assets/js/navbarmenu.js"></script>
<br><br><br><br><br><br>
</body>
</html>