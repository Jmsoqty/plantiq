
<div class="container">
  <div class="top" style="padding-top: 50px;">
    <div class="d-flex flex-row">
      <div class="dropdown flex-grow-1">
        <button class="btn btn-outline-dark dropdown-toggle mt-2 ms-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          Switch Device
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Device 1</a></li>
          <li><a class="dropdown-item" href="#">Device 2</a></li>
          <li><a class="dropdown-item" href="#">Device 3</a></li>
        </ul>
      </div>

      <div class="dropdown">
        <a class="btn mt-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa-solid fa-bell fa-2xl navbtn"></i>
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
    <a href="#" class="btn mt-2" id="logoutBtn">
        <i class="fa-solid fa-arrow-right-from-bracket fa-2xl navbtn"></i>
    </a>
</div>

<!-- Logout Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            
            <div class="modal-body">
                Are you sure you want to logout?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" id="cancelBtn">Cancel</button>
                <a href="../index.php" class="btn btn-primary">Logout</a>
            </div>
        </div>
    </div>
</div>


    </div>
  </div>
</div>
<script>
    // JavaScript to show the modal when the button is clicked
    document.getElementById('logoutBtn').addEventListener('click', function() {
        $('#logoutModal').modal('show');
    });

    // Optional: JavaScript to handle logout confirmation
    document.getElementById('confirmLogout').addEventListener('click', function() {
        // Perform logout action here
    });
    
</script> 
<script>
  // JavaScript to close the modal without redirecting when the "Cancel" button is clicked
  document.getElementById('cancelBtn').addEventListener('click', function() {
        $('#logoutModal').modal('hide');
    });
  </script>