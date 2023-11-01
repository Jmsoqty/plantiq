<?php require_once('../php/db-connect.php') ?>

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

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  
  <!-- Main Template -->
  <link rel="stylesheet" href="../assets/css/styles.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/main.css">

    <style>
    .btn-info.text-light:hover,
    .btn-info.text-light:focus {
        background: #000;
    }
    table, tbody, td, tfoot, th, thead, tr {
      border-color: #ededed !important;
      border-style: solid;
      border-width: 1px !important;
    }
    </style>

</head>

<body>

  <!-- CoverPhoto -->
  <?php include '../pages/components/cover.php'; ?>

  <!-- TOP NAVBAR -->
  <?php include '../pages/components/navbar-top.php'; ?>

  <!-- HOME NAVBAR -->
  <div class="container" style="padding-top: 50px;">
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a href="../pages/calendar.php" class="nav-link active bg-primary" aria-current="page">
          Calendar
        </a>
      </li>
      <li class="nav-item">
        <a href="../pages/logs.php" class="nav-link btn" aria-current="page">
        Logs
        </a>
      </li>
      <li class="nav-item">
        <a href="../pages/history.php" class="nav-link btn" aria-current="page">
        History
        </a>
      </li>
    </ul>
  </div>

  <div class="container py-5" id="page-container">
    <div class="row">
      <div class="col-md-9">
        <div id="calendar"></div>
      </div>
      <div class="col-md-3">
        <div class="card rounded-0 shadow">
          <div class="card-header bg-gradient bg-primary text-light">
            <h5 class="card-title">Schedule Form</h5>
          </div>
          <div class="card-body">
            <div class="container-fluid">
              <form action="../php/save_schedule.php" method="post" id="schedule-form">
                <input type="hidden" name="id" value="">
                <div class="form-group mb-2">
                  <label for="title" class="control-label">Title</label>
                  <input type="text" class="form-control form-control-sm rounded-0" name="title" id="title" required>
                </div>
                <div class="form-group mb-2">
                  <label for="description" class="control-label">Description</label>
                  <textarea rows="3" class="form-control form-control-sm rounded-0" name="description" id="description" required></textarea>
                </div>
                <div class="form-group mb-2">
                  <label for="start_datetime" class="control-label">Start</label>
                  <input type="datetime-local" class="form-control form-control-sm rounded-0" name="start_datetime" id="start_datetime" required>
                </div>
                <div class="form-group mb-2">
                  <label for="end_datetime" class="control-label">End</label>
                  <input type="datetime-local" class="form-control form-control-sm rounded-0" name="end_datetime" id="end_datetime" required>
                </div>
              </form>
            </div>
          </div>
          <div class="card-footer">
            <div class="text-center">
              <button class="btn btn-primary btn-sm rounded-0" type="submit" form="schedule-form"><i class="fa fa-save"></i> Save</button>
              <button class="btn btn-default border btn-sm rounded-0" type="reset" form="schedule-form"><i class="fa fa-reset"></i> Cancel</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- BOTTOM NAVBAR -->
  <?php include '../pages/components/navbar-bottom.php'; ?>

  <!-- Add Event Modal -->
<div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="schedule-form">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content rounded-0">
      <div class="modal-header rounded-0">
        <h5 class="modal-title">Add Event</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body rounded-0">
        <div class="container-fluid">
          <form id="event-form">
            <div class="mb-3">
              <label for="event-title" class="form-label">Title</label>
              <input type="text" class="form-control" id="event-title" name="title">
            </div>
            <div class="mb-3">
              <label for="event-description" class="form-label">Description</label>
              <textarea class="form-control" id="event-description" name="description"></textarea>
            </div>
            <div class="mb-3">
              <label for="event-start" class="form-label">Start Date and Time</label>
              <input type="datetime-local" class="form-control" id="event-start" name="start_datetime">
            </div>
            <div class="mb-3">
              <label for="event-end" class="form-label">End Date and Time</label>
              <input type="datetime-local" class="form-control" id="event-end" name="end_datetime">
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer rounded-0">
        <div class="text-end">
          <button type="button" class="btn btn-primary btn-sm rounded-0" id="save-event">Save</button>
          <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Add Event Modal -->


  <!-- Event Details Modal -->
  <div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content rounded-0">
        <div class="modal-header rounded-0">
          <h5 class="modal-title">Schedule Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body rounded-0">
          <div class="container-fluid">
            <dl>
              <dt class="text-muted">Title</dt>
              <dd id="title" class="fw-bold fs-4"></dd>
              <dt class="text-muted">Description</dt>
              <dd id="description" class=""></dd>
              <dt class="text-muted">Start</dt>
              <dd id="start" class=""></dd>
              <dt class="text-muted">End</dt>
              <dd id="end" class=""></dd>
            </dl>
          </div>
        </div>
        <div class="modal-footer rounded-0">
          <div class="text-end">
            <button type="button" class="btn btn-primary btn-sm rounded-0" id="edit" data-id="">Edit</button>
            <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete" data-id="">Delete</button>
            <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Event Details Modal -->

  <script>
       // Add a new modal for entering schedule details (if not already added)

// Date click event
calendar.on('dateClick', function(info) {
    // Open the add event modal
    addEventModal.modal('show');

    // Set the start date and time in the modal form
    var startDateTime = info.date.toISOString().slice(0, 16);
    addEventModal.find('#start_datetime').val(startDateTime);

    // Reset the modal form on close
    addEventModal.on('hidden.bs.modal', function () {
        $('#event-form')[0].reset();
    });
});


    </script>
<?php 
$schedules = $conn->query("SELECT * FROM `schedule_list`");
$sched_res = [];
foreach($schedules->fetch_all(MYSQLI_ASSOC) as $row){
    $row['sdate'] = date("F d, Y h:i A",strtotime($row['start_datetime']));
    $row['edate'] = date("F d, Y h:i A",strtotime($row['end_datetime']));
    $sched_res[$row['id']] = $row;
}
?>
<?php 
if(isset($conn)) $conn->close();
?>

</body>

<script>
    var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
</script>

  <script src="../assets/js/bootstrap.bundle.js"></script>
  <script src="../assets/js/jquery-3.7.1.min.js"></script>
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/calendar.js"></script>


</html>