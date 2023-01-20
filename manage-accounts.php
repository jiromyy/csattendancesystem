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
$_SESSION['page'] = 'Accounts';
include("navbar.php");
include("php/get_accounts.php");
?>
<div class="content-area">
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
      <button class="create-button" id="create_button" onclick="show_modal('add')">Create New Account</button>
    </div>
  </div>

  <table>
    <thead>
      <tr class="row-header">
        <th>User Name</th>
        <th>Account Type</th>
        <th>Group</th>
        <th>Last Access</th>
        <th class="btn-group-sm" style="width: 148px;">
        </th>
      </tr>
    </thead>
    <tbody>
      <?php if (mysqli_num_rows($result) == 0) { ?>
        <tr class="row-body" style="justify-content: center;">
          <td colspan='5'>
            <h2>-- No Records --</h2>
          </td>
        </tr>
      <?php } ?>

      <?php
      while ($row = mysqli_fetch_assoc($result)) {
        $username = $row['username'];
        $type = $row['account_type'];
        $org = $row['org_name'];

        $typetext = $type === "account_manager" ? "Account Manager" : ($type === "org_admin" ? "Organization Admin" : ($type === "attendance_checker" ? "Attendance Checker" : ($type === "super_admin" ? "Super Admin" : "Else"
        )
        )
        );
      ?>

        <tr class="row-body">
          <td class="event-name"><?php echo $username ?></td>
          <td class="date"><?php echo $typetext ?></td>
          <td class="host"><?php echo $org ?></td>
          <td class="status">10 hours ago </td>
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
<script src="script/accounts.js"></script>
<script src="script/dashboard.js"></script>
</body>

</html>