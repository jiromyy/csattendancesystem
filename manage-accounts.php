
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Accounts</title>

  <link rel="stylesheet" href="css/manage-account.css" />

  <!-- icon -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <script src="https://kit.fontawesome.com/b8e4159bd9.js" crossorigin="anonymous"></script>
</head>

<body>

  <?php  
    include("php/auth.php");
    include("php/get_accounts.php");
    $user = $_SESSION['user'];
    include("php/check_session.php");

    $type = $user === "account_manager" ? "Account Manager" : 
      ($user === "org_admin" ? "Organization Admin": 
        ($user === "attendance_checker" ? "Attendance Checker":
          ($user === "super_admin" ? "Super Admin": "Else"
          )
        )
      ); 
    ?>
    
  <div class="nav-events-container">
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
              <li <?php if ($user != "attendance_checker" && $user != "super_admin") echo 'style=display:none'?>>
                  <i class="fa-solid fa-pencil"></i>
                  <a href="#"><span>Get Attendance</span></a>
              </li>
              <li>
                  <span>Manage</span>
              </li>
              <li <?php if ($user != "account_manager" && $user != "super_admin") echo 'style=display:none'?>>
                  <i class="fa-solid fa-wallet"></i>
                  <a href="manage-accounts.php"><span>Accounts</span></a>
              </li>
              <li <?php if ($user != "org_manager" && $user != "super_admin") echo 'style=display:none'?>>
                  <i class="fa-regular fa-note-sticky"></i>
                  <a href="#"><span>Events</span></a>
              </li>
              <li <?php if ($user != "org_manager" && $user != "super_admin") echo 'style=display:none'?>>
                  <i class="fa-solid fa-users"></i>
                  <a href="#"><span>Attendee</span></a>
              </li>
              <li <?php if ($user != "org_manager" && $user != "super_admin") echo 'style=display:none'?>>
                  <i class="fa-regular fa-flag"></i>
                  <a href="#"><span>Attendance</span></a>
              </li>
              <li>
                  <i class="fa-solid fa-arrow-right-from-bracket"></i>
                  <form action="#" method="POST">
                      <button name="logout" type="submit">
                          <span>Logout</span>
                      </button>
                  </form>
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
          <tbody>
            <tr class="table-head">
              <th>User Name</th>
              <th>Accout Type</th>
              <th>Group/Organization</th>
              <th>Last Access</th>
              <th class="btn-group-sm" style="width: 148px;">
              </th>
            </tr>
            <?php if(mysqli_num_rows($result)==0){ ?>
              <tr>  
                  <td colspan='5'><h2>-- No Records --</h2></td>
              </tr>  
                  <?php } ?>

            <?php    
              while($row = mysqli_fetch_assoc($result)){
              $username = $row['username'];
              $type = $row['account_type'];
              $org = $row['org_name'];

              $typetext = $type === "account_manager" ? "Account Manager" : 
                ($type === "org_admin" ? "Organization Admin": 
                  ($type === "attendance_checker" ? "Attendance Checker":
                    ($type === "super_admin" ? "Super Admin": "Else"
                    )
                  )
                ); 
            ?>

            <tr class="row">
              <td class="event-name"><?php echo $username?></td>
              <td class="date"><?php echo $typetext?></td>
              <td class="host"><?php echo $org?></td>
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
            <?php } ?>
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