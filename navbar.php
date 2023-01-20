<head>
    <link rel="stylesheet" href="css/navbar.css">
</head>
<body>

    <?php
    $page = $_SESSION['page'];  
    include("php/header.php");
    ?>

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
                <li <?php if ($user != "org_admin" && $user != "super_admin") echo 'style=display:none'?>>
                    <a href="manage-events.php">
                        <i class="fa-regular fa-note-sticky"></i>
                        <span>Events</span>
                    </a>
                </li>
                <li <?php if ($user != "org_admin" && $user != "super_admin") echo 'style=display:none'?>>
                    <a href="#">
                        <i class="fa-solid fa-users"></i>
                        <span>Attendee</span>
                    </a>
                </li>
                <li <?php if ($user != "org_admin" && $user != "super_admin") echo 'style=display:none'?>>
                    <a href="attendance_events.php">
                        <i class="fa-regular fa-flag"></i>
                        <span>Attendance</span>
                    </a>
                </li>
            </ul>
        </nav>
        <main class="dashboard">
            <div class="dashboard-header">
                <span><?php echo $page;?></span>
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
            <!-- insert content here --->
<!--  PRESERVE THIS END TAG TO CALLER
        </main>
    </div>
    <script src="script/dashboard.js"></script>
</body> 

-->