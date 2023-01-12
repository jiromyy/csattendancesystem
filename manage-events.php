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

/* START OF CREATE SCRIPT*/

if (isset($_POST['create_event'])) {
  // $event_name = mysqli_real_escape_string($connection, trim($_POST['event_name']));
  // $host = mysqli_real_escape_string($connection, trim($_POST['host']));
  // $startDate = mysqli_real_escape_string($connection, trim($_POST['startDate']));
  // $start_time = mysqli_real_escape_string($connection, trim($_POST['start_time']));
  // $end_time = mysqli_real_escape_string($connection, trim($_POST['end_time']));
  // $event_desc = mysqli_real_escape_string($connection, trim($_POST['event_desc']));
  // $fines = mysqli_real_escape_string($connection, trim($_POST['fines']));
  // $sessionses = mysqli_real_escape_string($connection, trim($_POST['session']));
  // $org_admin_id = mysqli_real_escape_string($connection, trim($_POST['org_admin_id']));

  // $sql = "INSERT INTO events (event_name, host, startDate,start_time,end_time,event_desc, fines,sessionses, org_admin_id) VALUES ('$event_name', '$host', '$startDate', '$start_time', '$end_time', '$event_desc','$fines', '$sessionses', '$org_admin_id')";

  // $result =  $connection->query($sql);

  // if ($result) {
  echo '<script>
    alert("event Added Successfully");
    </script>';
  // }
  header("Refresh:0");
}

/* END OF CREATE SCRIPT*/
?>


<body>


  <div class="nav-events-container">
    <!-- start of sidebar -->
    <nav class="nav-sidebar">
      <div class="nav-logo">
        <img src="assets/university-logo.png" alt="university logo">
        <span>Attendance Portal</span>
      </div>
      <div class="nav-manage-links">
        <ul>
          <li>
            <i class="fa-solid fa-chart-column"></i>
            <a href="#"><span>Dashboard</span></a>
          </li>
          <li>
            <i class="fa-solid fa-pencil"></i>
            <a href="#"><span>Get Attendance</span></a>
          </li>
          <li>
            <span>Manage</span>
          </li>
          <li>
            <i class="fa-solid fa-wallet"></i>
            <a href="#"><span>Accounts</span></a>
          </li>
          <li>
            <i class="fa-regular fa-note-sticky"></i>
            <a href="#"><span>Events</span></a>
          </li>
          <li>
            <i class="fa-solid fa-users"></i>
            <a href="#"><span>Attendee</span></a>
          </li>
          <li>
            <i class="fa-regular fa-flag"></i>
            <a href="#"><span>Attendance</span></a>
          </li>
          <li>
            <i class="fa-solid fa-arrow-right-from-bracket"></i>
            <button href="#"><span>Log Out</span></button>
          </li>
        </ul>
      </div>
    </nav>

    <!-- end of sidebar -->

    <!-- start of main component including header -->
    <main class="events">
      <div class="events-header">
        <span>Events</span>
        <div class="user">
          <img src="assets/user.jpg" alt="Emman Gwapo">
          <div class="user-info">
            <span>Emman Adonay</span>
            <span>Super User</span>
          </div>
        </div>
      </div>
      <div class="events-main">
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
            <button class="create-button" id="create_button">Create New</button>
          </div>
        </div>

        <table>
          <thead>
          </thead>
          <tbody>
            <tr class="table-head">
              <th>Event Name</th>
              <th>Date</th>
              <th>Host</th>
              <th>Status</th>
              <th class="btn-group-sm" style="width: 148px;">
              </th>
            </tr>

            <tr class="row">
              <td class="event-name">Computer Science Day</td>
              <td class="date">February 15, 2023</td>
              <td class="host">Alan Turing</td>
              <td class="status">Upcoming </td>
              <td class="btn-group-sm">
                <a><span class="material-symbols-outlined"> visibility </span></a>
                <a class="edit_button" id="edit_button" onclick="edit_modal()"><span class="material-symbols-outlined">
                    edit
                  </span></a>
                <a class=""><span class="material-symbols-outlined">
                    delete
                  </span></a>
              </td>
            </tr>
            <tr class="row">
              <td class="event-name">Computer Science Day</td>
              <td class="date">February 15, 2023</td>
              <td class="host">Alan Turing</td>
              <td class="status">Upcoming </td>
              <td class="btn-group-sm">
                <a><span class="material-symbols-outlined"> visibility </span></a>
                <a class="edit_button" id="edit_button" onclick="edit_modal()"><span class="material-symbols-outlined">
                    edit
                  </span></a>
                <a class=""><span class="material-symbols-outlined">
                    delete
                  </span></a>
              </td>
            </tr>



          </tbody>

        </table>
    </main>
    <!-- end of main component including header -->


    <!--start of create modal -->
    <div id="create_event_modal" class="modal">
      <div class="modal-content">
        <form action="" class="add_event_form" method="post">
          <div class="title title_event_form-div">
            <p class="title_event_form">Create New Event</p>
          </div>
          <div class="input-div">
            <div class="input-for-1">
              <label for="event_name">Event Name</label>
              <input type="text" name="event_name" class="input event_name" placeholder="Type here" required />
            </div>
          </div>
          <div class="input-div">
            <div class="input-for-1">
              <label for="host">Host name</label>
              <input type="text" name="host" class="input host" placeholder="Type here" required />
            </div>
          </div>
          <div class="input-div">
            <div class="input-for-3">
              <label for="date">Date</label>
              <input type="date" name="startDate" class="input date" placeholder="Type here" required />
            </div>
            <div class="input-for-3">
              <label for="start_time">Start Time</label>
              <input type="time" name="start_time" class="input start_time" placeholder="Type here" required />
            </div>
            <div class="input-for-3">
              <label for="end_time">End Time</label>
              <input type="time" name="end_time" class="input end_time" placeholder="Type here" required />
            </div>
          </div>
          <div class="input-div">
            <div class="input-for-1">
              <label for="event_desc">Description</label>
              <input type="text" name="event_desc" class="input event_desc" placeholder="Type here" required />
            </div>
          </div>
          <div class="input-div">
            <div class="input-for-1">
              <label for="fines">Fines</label>
              <input type="text" name="fines" class="input fines" placeholder="Type here" required />
            </div>
          </div>
          <!-- org admin id -->
          <input type="text" name="org_admin_id" placeholder="Type here" value="1" hidden />

          <div class="group-of-buttons">
            <div class="input-for-1"><span class="close">Cancel</span></div>
            <input type="submit" class="submit submit-event" name="create_event" value="Submit" />
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
        <form action="" class="add_event_form" id="edit_event_form" method="post">
          <div class="title title_event_form-div">
            <p class="title_event_form">Edit Event</p>
          </div>
          <div class="input-div">
            <div class="input-for-1">
              <label for="event_name">Event Name</label>
              <input type="text" name="event_name" class="input event_name" value="Computer Science Day" placeholder="Type here" required />
            </div>
          </div>
          <div class="input-div">
            <div class="input-for-1">
              <label for="host">Host name</label>
              <input type="text" name="host" class="input host" placeholder="Type here" required />
            </div>
          </div>
          <div class="input-div">
            <div class="input-for-3">
              <label for="date">Date</label>
              <input type="date" name="startDate" class="input date" placeholder="Type here" required />
            </div>
            <div class="input-for-3">
              <label for="start_time">Start Time</label>
              <input type="time" name="start_time" class="input start_time" placeholder="Type here" required />
            </div>
            <div class="input-for-3">
              <label for="end_time">End Time</label>
              <input type="time" name="end_time" class="input end_time" placeholder="Type here" required />
            </div>
          </div>
          <div class="input-div">
            <div class="input-for-1">
              <label for="event_desc">Description</label>
              <input type="text" name="event_desc" class="input event_desc" placeholder="Type here" required />
            </div>
          </div>
          <div class="input-div">
            <div class="input-for-1">
              <label for="fines">Fines</label>
              <input type="text" name="fines" class="input fines" placeholder="Type here" required />
            </div>
          </div>
          <input type="text" name="org_admin_id" placeholder="Type here" value="1" hidden />
          <input type="text" name="fines" placeholder="Type here" value="1" hidden />
          <input type="text" name="session" placeholder="Type here" value="afternoon" hidden />

          <div class="group-of-buttons">
            <div class="input-for-1"><span class="close">Cancel</span></div>
            <input type="submit" class="submit submit-event" name="create_event" value="Submit" />
          </div>
        </form>
      </div>
    </div>
    <!-- end of edit modal -->




  </div>



  <script src="script/events.js"></script>
</body>

</html>