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
        include "php/auth.php";
        include "php/check_session.php";
        $user =  $_SESSION['user'];
        ?>

        <!-- nav-dashboard-container start --->

        <div class="nav-dashboard-container">
            <nav class="nav-sidebar">
                <div class="nav-logo">
                    <img src="assets/university-logo.png" alt="university logo">
                    <span>Attendance Portal</span>
                </div>
                <div class="nav-manage-links">
                    <ul>
                        <li <?php if($user != "account_manager") echo 'style="display:none"'; ?>>
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
                            <form action="#" method="POST">
                                <button name="logout" type="submit">
                                    <span>Logout</span>
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="dashboard">
                <div class="dashboard-header">
                    <span>Dashboard</span>
                    <div class="user">
                        <img src="assets/user.jpg" alt="Emman Gwapo">
                        <div class="user-info">
                            <span>Emman Adonay</span>
                            <span>Super User</span>
                        </div>
                    </div>
                </div>
                <div class="dashboard-main">
                    <div class="dashboard-banner">
                        <span>Hello, Super Admin!</span>
                        <img src="assets/super-admin.png" alt="super admin">
                    </div>
                    <div class="dashboard-calendar">
                        <img src="assets/user_profile.jpg" alt="calendar">
                    </div>
                    <div class="dashboard-overview">
                        <span>Overview</span>
                    </div>
                    <div class="dashboard-dropdown">
                        <span>Comsoc Week Opening</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="dashboard-graph-1">
                        <img src="assets/user_profile.jpg" alt="calendar">
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

                        <img src="assets/user_profile.jpg" alt="calendar">
                    </div>
                    <div class="dashboard-data">

                    </div>
                </div>
            </main>
        </div>

        <!-- nav-dashboard-ontainer end --->
    </body>
</html>