<div class="container">
  <div class="top" style="padding-top: 50px;">
    <div class="d-flex flex-row">
      <div class="dropdown flex-grow-1"></div>
      <div class="input-group ms-1" style="width:350px;">
        <input type="text" class="form-control input-text"  placeholder="Search for a plant" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-outline-success btn-lg" type="button"><i class="fa fa-search"></i></button>
        </div>
      </div>
      <div class="dropdown">
      <a class="btn mt-2 position-relative" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-bell fa-2xl navbtn"></i>
            <span class="position-absolute top-21 start-51 translate-middle p-2 bg-danger border border-light rounded-circle">
                <span class="visually-hidden">New alerts</span>
            </span>
        </a>
        <ul class="dropdown-menu">
          <div class="container" style="width: 25rem;">
            <div class="card-body d-flex justify-content-between">
              <div class="">
                <img src="../assets/img/notificon.png" class="img-fluid" style="max-width: 50px;" alt="Notification Icon">
                <label class="fw-bold">Plants Need Water!</label>
              </div>
              <div class="">
                <label class="fw-light">Now!</label>
              </div>
            </div>
            <div class="mt-2">
              <label class="fw-bold mb-0">Plants Need Watering Immediately check your plants</label>
            </div>
          </div>
        </ul>
      </div>
      <div class="dropdown">
      <button type="button" class="btn mt-2" data-bs-toggle="modal" data-bs-target="#logoutModal">
        <i class="fa-solid fa-arrow-right-from-bracket fa-2xl navbtn"></i>
      </button>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content p-5 rounded-5">
      <div class="text-center fw-bold">
      <i class="fa-solid fa-circle-exclamation mb-3" style="color: #ff0000; font-size: 100px;"></i>
        <br>
        Are you sure you want to logout?
      </div>
      <div class="d-flex justify-content-around mt-3">
        <button type="button" class="btn btn-danger rounded-pill" data-bs-dismiss="modal">Close</button>
        <a href="../index.php" class="btn btn-primary rounded-pill">Logout</a>
      </div>
    </div>
  </div>
</div>