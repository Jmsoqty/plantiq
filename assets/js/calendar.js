var calendar;
var Calendar = FullCalendar.Calendar;
var events = [];

$(function() {
  // Populate the calendar with events from the scheds object
  Object.keys(scheds).map(k => {
    var row = scheds[k];
    events.push({
      id: row.id,
      title: row.title,
      start: new Date(row.start_datetime),
      end: new Date(row.end_datetime),
      data: row
    });
  });

  var date = new
 
Date();
  var d = date.getDate(),
    m = date.getMonth(),
    y = date.getFullYear();

  calendar = new Calendar(document.getElementById('calendar'), {
    headerToolbar: {
      left: 'prev,next today',
      right: 'dayGridMonth,dayGridWeek,list',
      center: 'title'
    },
    selectable: true,
    themeSystem: 'bootstrap',
    // Populate the calendar with events
    events: events,
    eventClick: function(info) {
      var event = info.event;
      var _details = $('#event-details-modal');
      var id = event.id;

      if (!!scheds[id]) {
        var data = event.data;
        _details.find('#title').text(data.title);
        _details.find('#description').text(data.description);
        _details.find('#start').text(data.start_datetime);
        _details.find('#end').text(data.end_datetime);
        _details.find('#edit,#delete').attr('data-id', id);
        _details.modal('show');
      } else {
        alert("Event is undefined");
      }
    },
    eventDidMount: function(info) {
      // Do Something after events mounted
    },
    editable: true
  });

  calendar.render();

  // Form reset listener
  $('#schedule-form').on('reset', function() {
    $(this).find('input:hidden').val('');
    $(this).find('input:visible').first().focus();
  });

  // Edit Button
  $('#edit').click(function() {
    var id = $(this).attr('data-id');

    if (!!scheds[id]) {
      var _form = $('#schedule-form');
      var data = scheds[id];

      _form.find('[name="id"]').val(data.id);
      _form.find('[name="title"]').val(data.title);
      _form.find('[name="description"]').val(data.description);
      _form.find('[name="start_datetime"]').val(data.start_datetime.toISOString());
      _form.find('[name="end_datetime"]').val(data.end_datetime.toISOString());
      $('#event-details-modal').modal('hide');
      _form.find('[name="title"]').focus();
    } else {
      alert("Event is undefined");
    }
  });

  $('#delete').click(function() {
    var id = $(this).attr('data-id');
  
    if (!!scheds[id]) {
      var _conf = confirm("Are you sure to delete this scheduled event?");
  
      if (_conf === true) {
        // Send an AJAX request to delete the event
        $.ajax({
          url: "./delete_schedule.php",
          type: "POST",
          data: {
            id: id
          },
          success: function(response) {
            if (response.success === true) {
              // Remove the event from the calendar
              calendar.removeEvent(id);
  
              // Clear the event details modal
              $('#event-details-modal').find('input').val('');
              $('#event-details-modal').find('textarea').val('');
  
              // Show a success message
              alert("Event deleted successfully.");
            } else {
              alert("Failed to delete event. Error: " + response.error);
            }
          },
          error: function(error) {
            console.error(error);
            alert("An error occurred while deleting the event.");
          }
        });
      }
    } else {
      alert("Event is undefined");
    }
  });
})