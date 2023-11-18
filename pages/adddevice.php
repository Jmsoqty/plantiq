<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plant.IQ | Add Device </title>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
  <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <link rel="icon" href="../assets/img/icon.png">

  <link rel="icon" href="../assets/img/icon.png">
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&family=Open+Sans:wght@300;400;500;600;700&family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
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


  <form class="requires-validation" novalidate>
    <div class="container text-center">
      <h2 class="fw-semibold">Add Device</h2>
      <label class="text-muted mb-4">Input or Scan the QR Code in your device</label>

      <div class="card shadow mx-auto" style="max-width: 500px; border-radius:25px;"> <!-- Added mx-auto class for horizontal centering -->
        <div class="card-body">
         
          <div class="col-1 "> 
          <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#addModal">
                    <i class="fa fa-qrcode mb-2" style="font-size: 30px;"></i>
</button>
                </div>
                <h4 class="card-title mb-4">Enter MAC Address</h2>
          <div class="mb-4 form-floating">
            <input type="text" name="text" id="text"  class="form-control form-control-lg" id="validationServer01" style="border-radius: 10px;" fdprocessedid="s1ri14" required>
            <label for="validationServer01" class="form-label" style="color: gray;">Input Password</label>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please input your password correctly.
            </div>
          </div>

          <button type="submit" type="submit" class="btn btn-primary btn-lg m-3 rounded-pill fw-bold w-50" style="box-shadow: -4px 4px #3FAA3D;"data-bs-toggle="modal" data-bs-target="#modal2">Connect</button>
        
        </div>
      </div>
    </div>
  </form>
<!-- Modal -->
<div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="modal2Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal2Label">Select your Plants</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="dropdown-center text-end">
            <select id="size_select" class="btn btn-outline-dark dropdown-toggle" type="button" data-bs-toggle="dropdown">
              <option value="option1">PLANT 2</option>
              <option value="option2">PLANT 4</option>
              <option value="option3">PLANT 6</option>
              <option value="option4">PLANT 8</option>
            </select>
          </div>

          <!-- 2 PLANTS -->
          <div class="container rounded mt-3" style="background-color: #EEEEEE;">
            <div id="option1" class="size_chart">
              <div class="mapouter">
                <div class="row p-2 hidden-div" id="div2">
                  <div class="col-6">
                    <div class="image-container">
                      <button type="button" class="btn plus-button position-absolute" data-bs-toggle="modal" data-bs-target="#modal1">
                        <i class="fa-regular fa-square-plus fa-xl"></i>
                      </button>
                      <img src="../assets/img/sili.png" id="plantbox" class="img-fluid rounded-4">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="image-container">
                      <button type="button" class="btn plus-button position-absolute" data-bs-toggle="modal" data-bs-target="#modal1">
                        <i class="fa-regular fa-square-plus fa-xl"></i>
                      </button>
                      <img src="../assets/img/pechay.png" id="plantbox" class="img-fluid rounded-4">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- 4 PLANTS -->
          <div class="container rounded mt-3" style="background-color: #EEEEEE;">
            <div id="option2" class="size_chart">
              <div class="mapouter">
                <div class="row p-2 hidden-div" id="div2">
                  <div class="col-6">
                    <div class="image-container">
                      <button type="button" class="btn plus-button position-absolute" data-bs-toggle="modal" data-bs-target="#modal1">
                        <i class="fa-regular fa-square-plus fa-xl"></i>
                      </button>
                      <img src="../assets/img/sili.png" id="plantbox" class="img-fluid rounded-4">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="image-container">
                      <button type="button" class="btn plus-button position-absolute" data-bs-toggle="modal" data-bs-target="#modal1">
                        <i class="fa-regular fa-square-plus fa-xl"></i>
                      </button>
                      <img src="../assets/img/pechay.png" id="plantbox" class="img-fluid rounded-4">
                    </div>
                  </div>
                </div>

                <div class="row p-2 hidden-div" id="div4">
                  <div class="col-6">
                    <div class="image-container">
                      <button type="button" class="btn plus-button position-absolute" data-bs-toggle="modal" data-bs-target="#modal1">
                        <i class="fa-regular fa-square-plus fa-xl"></i>
                      </button>
                      <img src="../assets/img/tomato.png" id="plantbox" class="img-fluid rounded-4">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="image-container">
                      <button type="button" class="btn plus-button position-absolute" data-bs-toggle="modal" data-bs-target="#modal1">
                        <i class="fa-regular fa-square-plus fa-xl"></i>
                      </button>
                      <img src="../assets/img/onion.png" id="plantbox" class="img-fluid rounded-4">
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <!-- 6 PLANTS -->
          <div class="container rounded mt-3" style="background-color: #EEEEEE;">
            <div id="option3" class="size_chart">
              <div class="mapouter">
                <div class="row p-2 hidden-div" id="div6">
                  <div class="col-4">
                    <div class="image-container mb-3">
                      <button type="button" class="btn plus-button position-absolute" data-bs-toggle="modal" data-bs-target="#modal1">
                        <i class="fa-regular fa-square-plus fa-xl"></i>
                      </button>
                      <img src="../assets/img/sili.png" id="plantbox" class="img-fluid rounded-4">
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="image-container">
                      <button type="button" class="btn plus-button position-absolute" data-bs-toggle="modal" data-bs-target="#modal1">
                        <i class="fa-regular fa-square-plus fa-xl"></i>
                      </button>
                      <img src="../assets/img/pechay.png" id="plantbox" class="img-fluid rounded-4">
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="image-container">
                      <button type="button" class="btn plus-button position-absolute" data-bs-toggle="modal" data-bs-target="#modal1">
                        <i class="fa-regular fa-square-plus fa-xl"></i>
                      </button>
                      <img src="../assets/img/sili.png" id="plantbox" class="img-fluid rounded-4">
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="image-container">
                      <button type="button" class="btn plus-button position-absolute" data-bs-toggle="modal" data-bs-target="#modal1">
                        <i class="fa-regular fa-square-plus fa-xl"></i>
                      </button>
                      <img src="../assets/img/pechay.png" id="plantbox" class="img-fluid rounded-4">
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="image-container">
                      <button type="button" class="btn plus-button position-absolute" data-bs-toggle="modal" data-bs-target="#modal1">
                        <i class="fa-regular fa-square-plus fa-xl"></i>
                      </button>
                      <img src="../assets/img/sili.png" id="plantbox" class="img-fluid rounded-4">
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="image-container">
                      <button type="button" class="btn plus-button position-absolute" data-bs-toggle="modal" data-bs-target="#modal1">
                        <i class="fa-regular fa-square-plus fa-xl"></i>
                      </button>
                      <img src="../assets/img/sili.png" id="plantbox" class="img-fluid rounded-4">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- 8 PLANTS -->
          <div class="container rounded mt-3" style="background-color: #EEEEEE;">
            <div id="option4" class="size_chart">
              <div class="mapouter">
                <div class="row p-2 hidden-div" id="div8">
                  <div class="col-3">
                    <div class="image-container mb-3">
                      <button type="button" class="btn plus-button position-absolute" data-bs-toggle="modal" data-bs-target="#modal1">
                        <i class="fa-regular fa-square-plus fa-xl"></i>
                      </button>
                      <img src="../assets/img/sili.png" id="plantbox" class="img-fluid rounded-4">
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="image-container">
                      <button type="button" class="btn plus-button position-absolute" data-bs-toggle="modal" data-bs-target="#modal1">
                        <i class="fa-regular fa-square-plus fa-xl"></i>
                      </button>
                      <img src="../assets/img/pechay.png" id="plantbox" class="img-fluid rounded-4">
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="image-container">
                      <button type="button" class="btn plus-button position-absolute" data-bs-toggle="modal" data-bs-target="#modal1">
                        <i class="fa-regular fa-square-plus fa-xl"></i>
                      </button>
                      <img src="../assets/img/sili.png" id="plantbox" class="img-fluid rounded-4">
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="image-container">
                      <button type="button" class="btn plus-button position-absolute" data-bs-toggle="modal" data-bs-target="#modal1">
                        <i class="fa-regular fa-square-plus fa-xl"></i>
                      </button>
                      <img src="../assets/img/pechay.png" id="plantbox" class="img-fluid rounded-4">
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="image-container">
                      <button type="button" class="btn plus-button position-absolute" data-bs-toggle="modal" data-bs-target="#modal1">
                        <i class="fa-regular fa-square-plus fa-xl"></i>
                      </button>
                      <img src="../assets/img/sili.png" id="plantbox" class="img-fluid rounded-4">
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="image-container">
                      <button type="button" class="btn plus-button position-absolute" data-bs-toggle="modal" data-bs-target="#modal1">
                        <i class="fa-regular fa-square-plus fa-xl"></i>
                      </button>
                      <img src="../assets/img/sili.png" id="plantbox" class="img-fluid rounded-4">
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="image-container">
                      <button type="button" class="btn plus-button position-absolute" data-bs-toggle="modal" data-bs-target="#modal1">
                        <i class="fa-regular fa-square-plus fa-xl"></i>
                      </button>
                      <img src="../assets/img/sili.png" id="plantbox" class="img-fluid rounded-4">
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="image-container">
                      <button type="button" class="btn plus-button position-absolute" data-bs-toggle="modal" data-bs-target="#modal1">
                        <i class="fa-regular fa-square-plus fa-xl"></i>
                      </button>
                      <img src="../assets/img/sili.png" id="plantbox" class="img-fluid rounded-4">
                    </div>
                  </div>
                  </div>
    </div>
  </div>
</div>
                </div>
              </div>
            </div>
          </div>
  <!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content p-5 rounded-5">
      <div class="text-center fw-bold">
          Scan the QR Code
        <br> <br>
        <video id="preview" width="100%"></video>
      <!-- <img src="../assets/img/scanner.png" alt="" class="img-fluid rounded" style="height: 150px;"> -->
       <br>
      </div>
      <div class="d-flex justify-content-around mt-5">
        <button type="button" class="btn btn-danger rounded-pill" data-bs-dismiss="modal">Close</button>
        <!-- <a href="" class="btn btn-primary rounded-pill ms-2" data-bs-toggle="modal" data-bs-target="#modal2">Connect</a> -->
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">MANAGE PLANTS</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="card my-3 rounded-4 border border-light">
          <div class="row g-0">
            <div class="col-5 border-0">
              <img class="img-fluid rounded-4 edit-pic" src="../assets/img/pechay.png">
            </div>
            <div class="col-7">
              <div class="card-body">
                <h5 contenteditable="true">Pechay Plant</h5>
                <select class="form-select form-control-sm border border-dark">
                  <option disabled selected>Select plant Status</option>
                  <option class="text-primary fw-semibold" value="">Alive</option>
                  <option class="text-danger fw-semibold" value="">Dead</option>
                </select>
                <div class="mt-4">
                  <button class="btn btn-primary" onclick="editElement()">Edit</button>
                  <button class="btn btn-danger" onclick="deleteElement()">Remove</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <hr>
        
        <div class="position-relative my-3">
          <input type="text" class="form-control rounded-pill border border-success" placeholder="Search for a plant">
          <a href="#" id="search" class="search-button">
            <span class="fa fa-search text-dark me-1"></span>
          </a>
        </div>

        <h4>Recommended Plants</h4>

        <div class="card card-custom my-3 rounded-4 border border-success">
          <div class="row g-0">
            <div class="col-5">
              <img class="img-fluid rounded-4" src="../assets/img/onion.jpg" alt="">
            </div>
            <div class="col-7">
              <div class="card-body card-body-custom">
                <h5>Onions</h5>
                <p>
                  An onion is a round vegetable with a brown skin that grows underground. 
                  It has many white layers on its inside which have a strong, sharp smell and taste.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="card card-custom my-3 rounded-4 border border-success">
          <div class="row g-0">
            <div class="col-5">
              <img class="img-fluid rounded-4" src="../assets/img/onion.jpg" alt="">
            </div>
            <div class="col-7">
              <div class="card-body card-body-custom">
                <h5>Onions</h5>
                <p>
                  An onion is a round vegetable with a brown skin that grows underground. 
                  It has many white layers on its inside which have a strong, sharp smell and taste.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="card card-custom my-3 rounded-4 border border-success">
          <div class="row g-0">
            <div class="col-5">
              <img class="img-fluid rounded-4" src="../assets/img/onion.jpg" alt="">
            </div>
            <div class="col-7">
              <div class="card-body card-body-custom">
                <h5>Onions</h5>
                <p>
                  An onion is a round vegetable with a brown skin that grows underground. 
                  It has many white layers on its inside which have a strong, sharp smell and taste.
                </p>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  <!-- BOTTOM NAVBAR -->
  <?php include '../pages/components/navbar-bottom.php'; ?>

  <script>
    let scanner = new Instascan.Scanner({video: document.getElementById('preview')});
    Instascan.Camera.getCameras().then(function(cameras){
      if(cameras.length > 0){
        scanner.start(cameras[0]);
      }else{
        alert('No cameras found');
      }
    }).catch(function(e){
      console.error(e);
    });

    scanner.addListener('scan',function(c){
      document.getElementById('text').value=c;
    });
    </script>
<script>
  
(function () {
  'use strict';

  // Select all forms with the "requires-validation" class
  const forms = document.querySelectorAll('.requires-validation');

  // Iterate through the selected forms
  forms.forEach(function (form) {
    // Add a submit event listener to each form
    form.addEventListener('submit', function (event) {
      // Check the form's validity
      if (!form.checkValidity()) {
        // Prevent form submission if the form is not valid
        event.preventDefault();
        event.stopPropagation();
      }

      // Add the "was-validated" class to indicate validation has occurred
      form.classList.add('was-validated');
    }, false);
  });
})();

</script>
<script>
    $(document).ready(function() {

      //hides dropdown content
      $(".size_chart").hide();

      //unhides first option content
      $("#option1").show();

      //listen to dropdown for change
      $("#size_select").change(function() {
        //rehide content on change
        $('.size_chart').hide();
        //unhides current item
        $('#' + $(this).val()).show();
      });

    });
  </script>

  <script src="../assets/js/bootstrap.bundle.js"></script>
  <script src="../assets/js/jquery-3.7.1.min.js"></script>
  <script src="../assets/js/navbarmenu.js"></script>
  <script src="../assets/js/all.min.js"></script>

</body>
</html>