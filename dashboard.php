<!DOCTYPE html>
<html lang="en">
<head css>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <script src="https://kit.fontawesome.com/b8e4159bd9.js" crossorigin="anonymous"></script>
</head>
    <body>

        <?php  
        include("php/auth.php");
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

        <!-- nav-dashboard-container start --->

        <div class="nav-dashboard-container">
            <nav class="nav-sidebar">
                <a href="dashboard.php" class="nav-logo">
                    <img src="assets/organization-logo.png" alt="university logo">
                    <span>Attendance Portal</span>
                </a>
                <ul  class="nav-manage-links">
                    <li>
                        <a href="dashboard.php">
                            <i class="fa-solid fa-chart-column"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li  <?php if ($user != "attendance_checker" && $user != "super_admin") echo 'style=display:none'?>>
                        <a href="#">
                            <i class="fa-solid fa-pencil"></i>
                            <span>Get Attendance</span>
                        </a>
                    </li>
                    <li>
                            <span>Manage</span>
                    </li>
                    <li <?php if ($user != "account_manager" && $user != "super_admin") echo 'style=display:none'?>>
                        <a href="manage-accounts.php">
                            <i class="fa-solid fa-wallet"></i>
                            <span>Accounts</span>
                        </a>
                    </li>
                    <li <?php if ($user != "org_manager" && $user != "super_admin") echo 'style=display:none'?>>
                        <a href="manage-events.php">
                            <i class="fa-regular fa-note-sticky"></i>
                            <span>Events</span>
                        </a>
                    </li>
                    <li <?php if ($user != "org_manager" && $user != "super_admin") echo 'style=display:none'?>>
                        <a href="#">
                            <i class="fa-solid fa-users"></i>
                            <span>Attendee</span>
                        </a>
                    </li>
                    <li <?php if ($user != "org_manager" && $user != "super_admin") echo 'style=display:none'?>>
                        <a href="attendance_events.php">
                            <i class="fa-regular fa-flag"></i>
                            <span>Attendance</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <main class="dashboard">
                <div class="dashboard-header">
                    <span>Dashboard</span>
                    <div class="user">
                        <div class="user-profile">
                            <img src="assets/user.jpg" alt="Emman Gwapo">
                            <div class="dropdown">
                                <i class="fa-solid fa-chevron-down"></i>
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <span>option 1</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>option 2</span>
                                        </a>
                                    </li>
                                    <li>
                                        <form action="#" method="POST">
                                            <button name="logout" type="submit">
                                                <span>Logout</span>
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="user-info">
                            <span>Emman Adonay</span>
                            <span><?php echo $type ?></span>
                        </div>
                    </div>
                </div>
                <div class="dashboard-main">
                    <div class="dashboard-banner">
                        <!-- <span>Hello, <?php echo $type ?>!</span> -->
                        <!-- <img src="assets/super-admin.png" alt="super admin"> -->
                    </div>
                    <div class="dashboard-calendar">
                        <!-- <img src="assets/user_profile.jpg" alt="calendar"> -->
                    </div>
                    <div class="dashboard-overview">
                        <span>Overview</span>
                    </div>
                    <div class="dashboard-dropdown">
                        <span>Comsoc Week Opening</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="dashboard-graph-1">
                        <!-- <img src="assets/user_profile.jpg" alt="calendar"> -->
                    </div>
                    <div class="dashboard-graph-2">
                        <div class="expected-attendee">
                            <span>Expected Attendee</span>
                            <span>Events</span>
                        </div>
                        <span>319</span>
                    </div>
                    <div class="dashboard-graph-3">
                        <div class="incomplete-attendee">
                            <span>Incomplete</span>
                            <span>Incomplete Attendance Logs</span>
                        </div>
                        <span>20</span>
                    </div>
                    <div class="dashboard-graph-4">
                        <div class="absent-attendee">
                            <span>Absent</span>
                            <span>No Absent Logs</span>
                        </div>
                        <span>10</span>
                    </div>
                    <div class="dashboard-event">

                        <!-- <img src="assets/user_profile.jpg" alt="calendar"> -->
                    </div>
                    <div class="dashboard-data">

                    </div>
                </div>
            </main>
        </div>

        <!-- nav-dashboard-ontainer end --->

        <script src="script/dashboard.js"></script>
    </body>
</html>