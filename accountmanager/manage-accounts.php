<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Accounts</title>

  <link rel="stylesheet" href="../css/manage-account.css" />

  <!-- icon -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <script src="https://kit.fontawesome.com/b8e4159bd9.js" crossorigin="anonymous"></script>
</head>



<body>
  <div class="nav-events-container">
    <nav class="nav-sidebar">
      <div class="nav-logo">
        <img src="../assets/university-logo.png" alt="university logo">
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
    <main class="events">
      <div class="events-header">
        <span>Accounts</span>
        <div class="user">
          <img src="../assets/user.jpg" alt="Emman Gwapo">
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
              <option value="account">Account Type</option>
              <option value="organization">Organization</option>
            </select>
            <button class="create-button" id="myBtn">Create New Account</button>
          </div>
        </div>

        <table>
          <thead>
          </thead>
          <tbody>
            <tr class="table-head">
              <th>User Name</th>
              <th>Accout Type</th>
              <th>Group/Organization</th>
              <th>Last Access</th>
              <th class="btn-group-sm" style="width: 148px;">
              </th>
            </tr>

            <tr class="row">
              <td class="event-name">iamlanie</td>
              <td class="date">Organization Admin</td>
              <td class="host">Computer Science Society</td>
              <td class="status">10 hours ago </td>
              <td class="btn-group-sm">
                <a class=""><span class="material-symbols-outlined"> visibility </span></a>
                <a class=""><span class="material-symbols-outlined">
                    edit
                  </span></a>
                <a class=""><span class="material-symbols-outlined">
                    delete
                  </span></a>
              </td>
            </tr>
            </tr>

            <tr class="row">
              <td class="event-name">emman_most_handsome</td>
              <td class="date">Attendance Checker</td>
              <td class="host">Computer Science Society</td>
              <td class="status">10 hours ago </td>
              <td class="btn-group-sm">
                <a class=""><span class="material-symbols-outlined"> visibility </span></a>
                <a class=""><span class="material-symbols-outlined">
                    edit
                  </span></a>
                <a class=""><span class="material-symbols-outlined">
                    delete
                  </span></a>
              </td>
            </tr>
            </tr>

            <tr class="row">
              <td class="event-name">g.antido</td>
              <td class="date">Organization Admin</td>
              <td class="host">Computer Science Society</td>
              <td class="status">10 hours ago </td>
              <td class="btn-group-sm">
                <a class=""><span class="material-symbols-outlined"> visibility </span></a>
                <a class=""><span class="material-symbols-outlined">
                    edit
                  </span></a>
                <a class=""><span class="material-symbols-outlined">
                    delete
                  </span></a>
              </td>
            </tr>

            <tr class="row">
              <td class="event-name">iamjoyce</td>
              <td class="date">Attendance Checker</td>
              <td class="host">Computer Science Society</td>
              <td class="status">10 hours ago </td>
              <td class="btn-group-sm">
                <a class=""><span class="material-symbols-outlined"> visibility </span></a>
                <a class=""><span class="material-symbols-outlined">
                    edit
                  </span></a>
                <a class=""><span class="material-symbols-outlined">
                    delete
                  </span></a>
              </td>
            </tr>

            <tr class="row">
              <td class="event-name">kingjc</td>
              <td class="date">Organization Admin</td>
              <td class="host">Computer Science Society</td>
              <td class="status">10 hours ago </td>
              <td class="btn-group-sm">
                <a class=""><span class="material-symbols-outlined"> visibility </span></a>
                <a class=""><span class="material-symbols-outlined">
                    edit
                  </span></a>
                <a class=""><span class="material-symbols-outlined">
                    delete
                  </span></a>
              </td>
            </tr>

            <tr class="row">
              <td class="event-name">jerome.m</td>
              <td class="date">Attendance Checker</td>
              <td class="host">Computer Science Society</td>
              <td class="status">10 hours ago </td>
              <td class="btn-group-sm">
                <a class=""><span class="material-symbols-outlined"> visibility </span></a>
                <a class=""><span class="material-symbols-outlined">
                    edit
                  </span></a>
                <a class=""><span class="material-symbols-outlined">
                    delete
                  </span></a>
              </td>
            </tr>

            <tr class="row">
              <td class="event-name">iamzai</td>
              <td class="date">Organization Admin</td>
              <td class="host">Computer Science Society</td>
              <td class="status">10 hours ago </td>
              <td class="btn-group-sm">
                <a class=""><span class="material-symbols-outlined"> visibility </span></a>
                <a class=""><span class="material-symbols-outlined">
                    edit
                  </span></a>
                <a class=""><span class="material-symbols-outlined">
                    delete
                  </span></a>
              </td>
            </tr>

            <tr class="row">
              <td class="event-name">mark_tagavillage</td>
              <td class="date">Attendance Checker</td>
              <td class="host">Computer Science Society</td>
              <td class="status">10 hours ago </td>
              <td class="btn-group-sm">
                <a class=""><span class="material-symbols-outlined"> visibility </span></a>
                <a class=""><span class="material-symbols-outlined">
                    edit
                  </span></a>
                <a class=""><span class="material-symbols-outlined">
                    delete
                  </span></a>
              </td>
            </tr>

            <tr class="row">
              <td class="event-name">r.martal</td>
              <td class="date">Organization Admin</td>
              <td class="host">Computer Science Society</td>
              <td class="status">10 hours ago </td>
              <td class="btn-group-sm">
                <a class=""><span class="material-symbols-outlined"> visibility </span></a>
                <a class=""><span class="material-symbols-outlined">
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


    <!--start of create modal -->
    <!-- create account -->
    <div id="myModal" class="modal">
      <!-- Modal content -->
      <div class="modal-content">
        <form action="" class="add_event_form" method="post">
          <div class="title title_event_form-div">
            <p class="title_event_form">Create New User Account</p>
          </div>
          <div class="input-div">
            <div class="input-for-1">
              <label for="account-type">Account Type</label>
              <input type="text" name="account-type" class="input account-type" placeholder="Type here" required />
            </div>
          </div>
          <div class="input-div">
            <div class="input-for-1">
              <label for="username">Username</label>
              <input type="text" name="username" class="input username" placeholder="Type here" required />
            </div>
          </div>
          <div class="input-div">
            <div class="input-for-1">
              <label for="event_desc">Password</label>
              <input type="password" name="" class="input password" placeholder="Type here" required />
            </div>
          </div>

          <div class="group-of-buttons">
            <div class="input-for-1"><span class="close">Cancel</span></div>
            <input type="submit" class="submit submit-event" name="create_event" value="Submit" />
          </div>
        </form>
      </div>
    </div>
    <!-- end of create modal -->




  </div>



  <script src="../script/accounts.js"></script>
</body>

</html>