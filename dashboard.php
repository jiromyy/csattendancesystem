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
                    include("navbar.php");
                ?>

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