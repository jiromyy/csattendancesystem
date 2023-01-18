<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Manage Events</title>
  <link rel="stylesheet" href="css/manage-events.css" />
  <!-- icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <script src="https://kit.fontawesome.com/b8e4159bd9.js" crossorigin="anonymous"></script>
  <!-- icons -->
</head>

<?php
include("navbar.php");
?>

<div class="content-area">
  <div class="search-navigate">
    <div class="left-search-navigate">
      <input type="text" class="search" placeholder="Search by name, host, organization admin..." />
    </div>
    <div class="right-search-navigate">
      <select name="sort" class="sort" id="sort">
        <option value="name" selected>Sort</option>
        <option value="name">Name</option>
        <option value="date">Date Created</option>
        <option value="status">Status</option>
      </select>
      <button class="create-button" id="create_button" onclick="show_modal('add')">Create New</button>
    </div>
  </div>

  <table>
    <thead>
      <tr class="row-header">
        <th>Event Name</th>
        <th>Date</th>
        <th>Host</th>
        <th>Status</th>
        <th class="btn-group-sm" style="width: 148px;">
        </th>
      </tr>
    </thead>
    <tbody>


      <tr class="row-body">
        <td class="event-name cell">Computer Science Day</td>
        <td class="date cell">February 15, 2023</td>
        <td class="host cell">Alan Turing</td>
        <td class="status cell">Upcoming </td>
        <td class="btn-group-sm cell cell-long">
          <a class="crud-button view_button" id="read_button" onclick="show_modal('read')"><span class="material-symbols-outlined"> visibility </span></a>
          <a class="crud-button edit_button" id="edit_button" onclick="show_modal('edit')"><span class="material-symbols-outlined">
              edit
            </span></a>
          <a class="crud-button delete_button" id="delete_button" onclick="show_modal('delete')"><span class="material-symbols-outlined">
              delete
            </span></a>
        </td>
      </tr>
    </tbody>
  </table>
  </main>
  <!-- end of main component including header -->


  <!--start of create modal -->
  <div id="add_event_modal" class="modal">
    <div class="modal-content">
      <form action="" class="form add_form" id="add_event_form" method="post">
        <div class="title add_event title-form-div">
          <p class="title_event_form">Create Event</p>
        </div>
        <div class="input-container">
          <div class="input-for-1">
            <label for="event_name">Event Name</label>
            <input type="text" name="event_name" class="input event_name" value="" placeholder="Type here" required />
          </div>
        </div>

        <!-- <div id="experienceSection"></div> -->
        <div class="input-container">
          <div class="input-for-1">
            <label for="host">Host name</label>
            <input type="text" name="host" class="input host" placeholder="Type here" required />
          </div>
        </div>
        <div class="input-container">
          <div class="input-for-3">
            <label for="startDate">Start Date</label>
            <input type="date" name="startDate" class="input date" placeholder="Type here" required />
          </div>
          <div class="input-for-3">
            <label for="endDate">End Date</label>
            <input type="date" name="endDate" class="input date" placeholder="Type here" required />
          </div>
          <div class="input-for-3">
            <label for="session">Session</label>
            <select name="session" id="session" class="input" required>
              <option value="" selected>Select Value</option>
              <option value="halfDay">Half Day</option>
              <option value="wholeDay">Whole Day</option>
            </select>
          </div>
        </div>
        <div class="input-container" id="halfDay">
          <div class="input-for-2">
            <label for="startTime">Start Time</label>
            <input type="time" name="startTime" class="input" id="startTime" required>
          </div>
          <div class="input-for-2">
            <label for="endTime">End Time</label>
            <input type="time" name="endTime" class="input" id="endTime" required>
          </div>
        </div>
        <div class="input-container" id="wholeDay">
          <div class="input-for-2">
            <label for="amStartTime">AM Start Time</label>
            <input type="time" name="amStartTime" class="input" id="amStartTime">
          </div>
          <div class="input-for-2">
            <label for="amEndTime">AM End Time</label>
            <input type="time" name="amEndTime" class="input" id="amEndTime" required>
          </div>
          <div class="input-for-2">
            <label for="amStartTime">PM Start Time</label>
            <input type="time" name="amStartTime" class="input" id="amStartTime" required>
          </div>
          <div class="input-for-2">
            <label for="amEndTime">PM End Time</label>
            <input type="time" name="amEndTime" class="input" id="amEndTime" required>
          </div>
        </div>
        <div class="input-container">
          <div class="input-for-1">
            <label for="event_desc">Description</label>
            <input type="text" name="event_desc" class="input event_desc" placeholder="Type here" required />
          </div>
        </div>
        <div class="input-container">
          <div class="input-for-1">
            <label for="fines">Fines</label>
            <input type="text" name="fines" class="input fines" placeholder="Type here" required />
          </div>
        </div>

        <div class="group-of-buttons">
          <div class="input-for-1" id="close"><span class="close">Cancel</span></div>
          <input type="submit" class="submit submit-event" name="edit_event" value="Submit" />
        </div>
      </form>
    </div>

  </div>
  <!-- end of create modal -->

  <!--start of edit modal -->
  <!-- edit events -->
  <div id="edit_event_modal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <form action="" class="form edit_form" id="edit_event_form" method="post">
        <div class="title title-form-div">
          <p class="title_event_form">Edit Event</p>
        </div>
        <div class="input-container">
          <div class="input-for-1">
            <label for="event_name">Event Name</label>
            <input type="text" name="event_name" class="input event_name" value="Computer Science Day" placeholder="Type here" required />
          </div>
        </div>

        <div class="input-container">
          <div class="input-for-1">
            <label for="host">Host name</label>
            <input type="text" name="host" class="input host" placeholder="Type here" required />
          </div>
        </div>
        <div class="input-container">
          <div class="input-for-3">
            <label for="startDate">Start Date</label>
            <input type="date" name="startDate" class="input date" placeholder="Type here" required />
          </div>
          <div class="input-for-3">
            <label for="endDate">End Date</label>
            <input type="date" name="endDate" class="input date" placeholder="Type here" required />
          </div>
          <div class="input-for-3">
            <label for="session">Session</label>
            <select name="session" id="session" class="input" required>
              <option value="" selected>Select Value</option>
              <option value="halfDay">Half Day</option>
              <option value="wholeDay">Whole Day</option>
            </select>
          </div>
        </div>
        <div class="input-container" id="halfDay">
          <div class="input-for-2">
            <label for="startTime">Start Time</label>
            <input type="time" name="startTime" class="input" id="startTime" required>
          </div>
          <div class="input-for-2">
            <label for="endTime">End Time</label>
            <input type="time" name="endTime" class="input" id="endTime" required>
          </div>
        </div>
        <div class="input-container" id="wholeDay">
          <div class="input-for-2">
            <label for="amStartTime">AM Start Time</label>
            <input type="time" name="amStartTime" class="input" id="amStartTime">
          </div>
          <div class="input-for-2">
            <label for="amEndTime">AM End Time</label>
            <input type="time" name="amEndTime" class="input" id="amEndTime" required>
          </div>
          <div class="input-for-2">
            <label for="amStartTime">PM Start Time</label>
            <input type="time" name="amStartTime" class="input" id="amStartTime" required>
          </div>
          <div class="input-for-2">
            <label for="amEndTime">PM End Time</label>
            <input type="time" name="amEndTime" class="input" id="amEndTime" required>
          </div>
        </div>
        <div class="input-container">
          <div class="input-for-1">
            <label for="event_desc">Description</label>
            <input type="text" name="event_desc" class="input event_desc" placeholder="Type here" required />
          </div>
        </div>
        <div class="input-container">
          <div class="input-for-1">
            <label for="fines">Fines</label>
            <input type="text" name="fines" class="input fines" placeholder="Type here" required />
          </div>
        </div>

        <div class="group-of-buttons">
          <div class="input-for-1" id="close"><span class="close">Cancel</span></div>
          <input type="submit" class="submit submit-event" name="edit_event" value="Submit" />
        </div>
      </form>
    </div>
  </div>
  <!-- end of edit modal -->

  <!-- start of Read modal -->
  <div id="read_event_modal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <div class="right-part">
        <img src="assets/event_image.png" alt="" class="event_img">
      </div>
      <div class="left-part">
        <div class="upper-part">
          <div class="eventHeader">
            <h1>COMSOC WEEK Opening</h1>
          </div>
          <p class="description">
            This event is an opening program and will serve as the ideal time to kick off every year's Organization Week for all Computer Science Students.
          </p>
        </div>
        <div class="lower-part">
          <ul>
            <li>
              <i class="fa-regular fa-calendar-days"></i>
              <p>March 02, 2023</p>
            </li>
            <li>
              <i class="fa-regular fa-clock"></i>
              <p>13:00-17:00 </p>
            </li>
            <li>
              <i class="fa-regular fa-user"></i>
              <p>John Carlo Bisquera</p>
            </li>
            <li>
              <i class="fa-regular fa-pen-to-square"></i>
              <p>10.00 per punch</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>


  <!-- start of Delete modal -->
  <div id="delete_event_modal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <form action="" class="form delete_form" id="delete_event_form" method="post">
        <div class="title title-form-div">
          <p class="title_event_form">Delete Event</p>
          <div class="input-for-1" id="close"><span class="close">Close</span></div>
        </div>
        <div class="input-container">
          <p>The event <b>"COMSOC WEEK Opening,"</b> which was previously scheduled, will be deleted. This does imply that you cannot access any information about this event.
            <br>
            <br>
            Please type <b>COMSOC WEEK Opening</b> to confirm
          </p>
        </div>
        <div class="input-container">
          <div class="input-for-1">

            <input type="text" name="fines" class="input fines" placeholder="Type here" required />
          </div>
        </div>

        <div class="group-of-buttons">
          <input type="submit" class="submit submit-event delete-confirmation" name="delete_event" value="I understand, delete this event" />
        </div>
      </form>
    </div>
  </div>


</div>


<!-- scripts -->
<script src="script\dashboard.js"></script>
<!-- downloaded jquery file -->
<script src="script/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
</script>



<!-- internal js -->
<script>
  // displaying modals
  let show_modal = (typeOfModal) => {
    /*
    The various modals will be opened by this function.
    ---------------------------------------------------
    Parameters
    ---------------------------------------------------
    typeOfModal : string. The following value are create, read, update, and delete
    */
    if (typeOfModal == "add") {
      let add_event_modal = document.querySelector("#add_event_modal");
      let add_event_form = document.querySelector("#add_event_form");
      let close_edit = add_event_form.getElementsByClassName("close")[0];
      add_event_modal.style.display = "block";
      window.onclick = function(event) {
        // if the modal is open and if the length of the event_name field is 0, the user can close the modal by clicking exterior part of the modal component
        if (event.target == add_event_modal || event.target == close_edit) {
          console.log(12);
          let notEmpty = false;
          // if one of the form inputs have value then change the value of the variable notEmpty
          add_event_form.querySelectorAll("[required]").forEach(function(i) {
            console.log(i.value.length);
            if (i.value.length != 0) {
              notEmpty = true;
              return;
            }
          });

          // Yes-or-No Question message will pop
          if (notEmpty) {
            let m = confirm("If you decide to exit this page, no information will be kept. Are you sure?");
            if (m == true) {
              add_event_modal.style.display = "none";
              add_event_form.querySelectorAll("[required]").forEach(function(i) {
                i.value = "";
              });
            }
          } else {
            add_event_modal.style.display = "none";
          }
        }
      };
      // changing session
      $(document).ready(function() {
        toggleInput();
        $("#session").change(function() {
          toggleInput();
        });
      });

      function toggleInput() {
        if ($("#add_event_form #session").val() === "halfDay") {
          $("#add_event_form #halfDay").show();
        } else {
          $("#add_event_form #halfDay").hide();
          $("#add_event_form #halfDay input").val("");
          $("#add_event_form #halfDay input").removeAttr("required")

        }
        if ($("#session").val() === "wholeDay") {
          $("#add_event_form #wholeDay").show();
        } else {
          $("#add_event_form #wholeDay").hide();
          $("#add_event_form #wholeDay input").val("");
          $("#add_event_form #wholeDay input").removeAttr("required")
        }

      }

    } else if (typeOfModal == "read") {
      let read_event_modal = document.querySelector("#read_event_modal");
      read_event_modal.style.display = "block";
      window.onclick = function(event) {
        // if the modal is open and if the length of the event_name field is 0, the user can close the modal by clicking exterior part of the modal component
        if (event.target == read_event_modal) {
          console.log(12);
          read_event_modal.style.display = "none";
        }

      };

    } else if (typeOfModal == "edit") {
      let edit_event_modal = document.querySelector("#edit_event_modal");
      let edit_event_form = document.querySelector("#edit_event_form");
      let close_edit = edit_event_form.getElementsByClassName("close")[0];
      edit_event_modal.style.display = "block";
      window.onclick = function(event) {
        // if the modal is open and if the length of the event_name field is 0, the user can close the modal by clicking exterior part of the modal component
        if (event.target == edit_event_modal || event.target == close_edit) {
          console.log(12);
          let notEmpty = false;
          // if one of the form inputs have value then change the value of the variable notEmpty
          edit_event_form.querySelectorAll("[required]").forEach(function(i) {
            console.log(i.value.length);
            if (i.value.length != 0) {
              notEmpty = true;
              return;
            }
          });

          // Yes-or-No Question message will pop
          if (notEmpty) {
            let m = confirm("If you decide to exit this page, no information will be kept. Are you sure?");
            if (m == true) {
              edit_event_modal.style.display = "none";
              edit_event_form.querySelectorAll("[required]").forEach(function(i) {
                i.value = "";
              });
            }
          } else {
            edit_event_modal.style.display = "none";
          }
        }
      };
      // changing session
      $(document).ready(function() {
        toggleInput();
        $("#edit_event_form #session").change(function() {
          toggleInput();
        });
      });

      function toggleInput() {
        if ($("#edit_event_form #session").val() === "halfDay") {
          $("#edit_event_form #halfDay").show();
        } else {
          $("#edit_event_form #halfDay").hide();
          $("#edit_event_form #halfDay input").val("");
          $("#edit_event_form #halfDay input").removeAttr("required")

        }
        if ($("#edit_event_form #session").val() === "wholeDay") {
          $("#edit_event_form #wholeDay").show();
        } else {
          $("#edit_event_form #wholeDay").hide();
          $("#edit_event_form #wholeDay input").val("");
          $("#edit_event_form #wholeDay input").removeAttr("required")
        }

      }

    } else if (typeOfModal == "delete") {
      let delete_event_modal = document.querySelector("#delete_event_modal");
      let delete_event_form = document.querySelector("#delete_event_form");
      let close_delete = delete_event_modal.getElementsByClassName("close")[0];
      delete_event_modal.style.display = "block";
      window.onclick = function(event) {
        // if the modal is open and if the length of the event_name field is 0, the user can close the modal by clicking exterior part of the modal component
        if (event.target == delete_event_modal || event.target == close_delete) {
          console.log(12);
          let notEmpty = false;
          // if one of the form inputs have value then change the value of the variable notEmpty
          delete_event_modal.querySelectorAll("[required]").forEach(function(i) {
            console.log(i.value.length);
            if (i.value.length != 0) {
              notEmpty = true;
              return;
            }
          });

          // Yes-or-No Question message will pop
          if (notEmpty) {
            let m = confirm("If you decide to exit this page?");
            if (m == true) {
              delete_event_modal.style.display = "none";
              delete_event_modal.querySelectorAll("[required]").forEach(function(i) {
                i.value = "";
              });
            }
          } else {
            delete_event_modal.style.display = "none";
          }
        }
      };


    }
  };
</script>
</body>

</html>