<!DOCTYPE html>
<html lang="en">
<head css>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/attendance_events.css">
    <script src="https://kit.fontawesome.com/b8e4159bd9.js" crossorigin="anonymous"></script>
</head>
    <body>
        <!-- nav-dashboard-container start --->

        <div class="nav-dashboard-container">
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
                            <a href="manage-accounts.php"><span>Accounts</span></a>
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
                    </ul>
                </div>
            </nav>
            <main class="dashboard">
                <div class="dashboard-header">
                    <span>Attendance Report</span>
                    <div class="user">
                        <img src="assets/user_profile.jpg" alt="Emman Gwapo">
                        <div class="user-info">
                            <span>Richdale Martal</span>
                            <span>Org Admin</span>
                        </div>
                    </div>
                </div>
                <div class="content-area">
                    <div class="section-1">
                        <a href="#"><span>Events</span></a>
                    </div>
                    <div class="section-2">
                        <div class="sub-section">
                            <input type="text" name="searchBox" id="searchBox">
                            <button>Search &nbsp;&nbsp;<i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                        <select name="sortEvents" id="sortEvents">
                            <option selected disabled hidden>Sort</option>
                            <option value="eventName">Event</option>
                            <option value="date">Date</option>
                        </select>
                    </div>
                    <div class="section-3">
                        <div class="card-holder">
                            <div class="card-upper-section">
                                <span>Host name here</span>
                                <span>Event name here</span>
                            </div>
                            <div class="card-bottom-section">
                                <div class="bottom-section-contents">
                                    <div class="sub-section">
                                        <span>Date here</span>
                                        <div class="progress">
                                            <div class="progress-bar">
                                                <div></div>
                                            </div>
                                            <span>Ongoing</span>
                                        </div>
                                    </div>
                                    <span class="span-titles">Description:</span>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia consequatur doloribus, recusandae optio ex reiciendis qui officia necessitatibus vel delectus!</p>
                                    <span class="span-titles">Fines: <p>10.00</p></span>
                                </div>
                                <button>View</button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>