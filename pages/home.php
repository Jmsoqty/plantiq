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
  <?php include '../pages/components/navbar-top.php'; ?>

  <h6 class="mt-2 ms-2 position-relative">
    Status:  Connected <i class="fa-solid fa-circle text-success"></i>
  </h6>

  <div class="container">
  
    <!-- COLUMN 1 CONTENT -->
    <div class="container pt-3">
      <div class="card border-0 rounded-4">
        <div class="card-body">
          <div class="row">
            <div class="col-6">
              <h5 class="text-center">Planted For</h5>
              <h2 class="text-center text-primary">19 Days</h2>
              <p class="text-center text-secondary">Your plant has exceeded the transfer date by 2 days transfer now</p>
            </div>
            <div class="col-6 d-flex justify-content-center align-items-center">
              <div role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:65"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br><br>

    <!-- COLUMN 2 CONTENT -->
    <div class="container mb-5">
      <div class="card border-success rounded-4">
        <div class="card-body">
          <div class="d-flex justify-content-between mb-4">
            <h5 class="card-title fw-bolder">Device 1</h5>
            <a href="../pages/calendar.php" class="">
              <i class="fa-solid fa-ellipsis fa-xl text-dark"></i>
            </a>
          </div>

          <div class="row">
            <div class="col-6">
              <label class="fw-bold mb-2">Date Planted:</label>
              <p class="">October 3, 2023</p>
            </div>
            <div class="col-6">
              <label class="fw-bold mb-2">Date of Transfer:</label>
              <p class="">October 24, 2023</p>
            </div>
          </div>

          <div>
            <label class="fw-bold mb-2">Today's Schedule:</label>
            <p class="">9:30 AM October 2023</p>
          </div>

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

    <br><br>

  </div>


  <!-- BOTTOM NAVBAR -->
  <?php include '../pages/components/navbar-bottom.php'; ?>

  <script src="../assets/js/bootstrap.bundle.js"></script>
  <script src="../assets/js/jquery-3.7.1.min.js"></script>
  <script src="../assets/js/navbarmenu.js"></script>
  <script src="../assets/js/all.min.js"></script>

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

  <script>
    // Function to edit the content of the editpic
    function editElement() {
      // Allow editing by removing the "contenteditable" attribute
      document.querySelectorAll('[contenteditable="true"]').forEach(function(el) {
        el.removeAttribute("contenteditable");
      });
    }

    // Function to delete the editpic
    function deleteElement() {
      // Remove the entire #editpic element
      const editpic = document.querySelector(".edit-pic");
      if (editpic) {
        editpic.remove();
      }
    }
  </script>

</body>
</html>

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