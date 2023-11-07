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
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/styles.css">
  <link rel="stylesheet" href="../assets/css/main.css">

  <style scoped>

    .btn-info.text-light:hover,
    .btn-info.text-light:focus {
        background: #000;
    }

    table, tbody, td, tfoot, th, thead, tr {
      border-color: #ededed !important;
      border-style: solid;
      background: #fff;
      border-width: 1px !important;
    }

    .fc-daygrid-day-top{
      text-align: center;
    }

    .fc-dayGridMonth-button, .fc-dayGridWeek-button, .fc-list-button{
      display: none;
    }

    .fc-toolbar-chunk{
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 5px 10px;
      
    }

    .fc .fc-daygrid-day.fc-day-today {
      background-color: rgba(38, 219, 35, 0.15) !important; /* Change the background color and use !important */
    }

    .fc .fc-highlight{
      background: rgba(38, 219, 35, 0.3);
    }

    /* For mobile screens (less than or equal to 768px width) */
    @media (max-width: 768px) {
      .fc-toolbar-chunk h2.fc-toolbar-title {
        font-size: 16px !important; /* Adjust font size for mobile screens */
        font-weight: bold;
      }
    }

    /* For medium screens (greater than 768px width) */
    @media (min-width: 769px) {
      .fc-toolbar-chunk h2.fc-toolbar-title {
        font-size: 22px !important; /* Adjust font size for medium screens */
        font-weight: bold;
      }
    }

  </style>

</head>

<body>

  <!-- CoverPhoto -->
  <?php include '../pages/components/cover.php'; ?>

  <!-- TOP NAVBAR -->
  <?php include '../pages/components/navbar-top.php'; ?>

  <!-- HOME NAVBAR -->
  <?php include '../pages/components/navbar-home.php'; ?>

  <div class="container py-5" id="page-container">

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-note">
        Add notes
    </button>

    <div class="mt-4" id="calendar"></div>

  </div>

  <!-- BOTTOM NAVBAR -->
  <?php include '../pages/components/navbar-bottom.php'; ?>

  <!-- Add Event Modal -->
  <div class="modal fade" id="add-note" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Schedule Form</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="save_schedule.php" method="post" id="schedule-form">
          <div class="modal-body">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="title" placeholder="Title" required>
              <label for="title">Title</label>
            </div>
            <div class="form-floating mb-3">
              <textarea class="form-control" placeholder="Leave a description here" id="description" style="height: 100px" required></textarea>
              <label for="description">Description</label>
            </div>
            <div class="d-flex">
              <div class="form-floating mb-3 w-50 me-1">
                <input type="date" class="form-control" id="start_datetime" placeholder="Enter a date" required>
                <label for="start_datetime">Starting Date</label>
              </div>
              <div class="form-floating mb-3 w-50 ms-1">
                <input type="date" class="form-control" id="end_datetime" placeholder="Enter a date">
                <label for="end_datetime">Ending Date</label>
              </div>
            </div>
          </div>
        </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-primary" type="submit" form="schedule-form"><i class="fa fa-save"></i> Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Add Event Modal -->

  <!-- Event Details Modal -->
  <div class="modal fade" id="add-note" tabindex="-1" aria-labelledby="edit-note" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Schedule Details</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="save_schedule.php" method="post" id="schedule-form">
          <div class="modal-body">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="title" placeholder="Title" required>
              <label for="title">Title</label>
            </div>
            <div class="form-floating mb-3">
              <textarea class="form-control" placeholder="Leave a description here" id="description" style="height: 100px" required></textarea>
              <label for="description">Description</label>
            </div>
            <div class="d-flex">
              <div class="form-floating mb-3 w-50 me-1">
                <input type="date" class="form-control" id="start" placeholder="Enter a date" required>
                <label for="start">Starting Date</label>
              </div>
              <div class="form-floating mb-3 w-50 ms-1">
                <input type="date" class="form-control" id="end" placeholder="Enter a date">
                <label for="end">Ending Date</label>
              </div>
            </div>
          </div>
        </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-primary" id="edit" data-id="">Edit</button>
          <button type="button" class="btn btn-sm btn-danger" id="delete" data-id="">Edit</button>
          <button type="button" class="btn btn-dark btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Event Details Modal -->


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
  <script src="../assets/js/navbarmenu.js"></script>
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/calendar.js"></script>


</html>