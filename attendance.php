<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/attendance.css">
    <script src="https://kit.fontawesome.com/b8e4159bd9.js" crossorigin="anonymous"></script>
    <title>Attendance</title>
</head>
<body>
    <div class="attendance-page">
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
        <div class="Content-Area">
            <div class="section-1">
                <h1>Attendance Report</h1>
                <div class="sub-section">
                    <form action="" method="post">
                        <img src="assets/user_profile.jpg" alt="user-profile">
                        <div class="profile-info">
                            <h3>John Carlo Bisquera</h3>
                            <h6>Org Admin</h6>
                        </div>
                    </form>
                </div>
            </div>
            <div class="section-2">
                <form action="" method="post">
                    <div class="page-navigate">
                        <a href="#">Events</a>
                    </div>
                    <div class="search-navigate">
                        <input type="text" name="searchbox" id="searchbox" placeholder="Search by event name, date">
                        <button id="searchButton">Search</button>
                        <select name="Sort" id="sortEvents">
                            <option selected disabled hidden>Sort</option>
                            <option value="eventName">Event</option>
                            <option value="date">Date</option>
                        </select>
                    </div>
                    <div class="eventsArea">
                        <div class="card">
                            <div class="upper-section">
                                <h3>Host name here</h3>
                                <h1>Event Name Here</h1>
                            </div>
                            <div class="lower-section">
                                <h6>02-08-2023 to 02-10-2023</h6>
                                <div class="eventDescription">
                                    <h4>Event Description:</h4>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. In cum illo rem non excepturi corporis suscipit porro repudiandae vitae a!</p>
                                </div>
                                <div class="eventFines">
                                    <h4>Fines:</h4>
                                    <p>10.00</p>
                                </div>
                                <a href="#">View</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="upper-section">
                                <h3>Host name here</h3>
                                <h1>Event Name Here</h1>
                            </div>
                            <div class="lower-section">
                                <h6>02-08-2023 to 02-10-2023</h6>
                                <div class="eventDescription">
                                    <h4>Event Description:</h4>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. In cum illo rem non excepturi corporis suscipit porro repudiandae vitae a!</p>
                                </div>
                                <div class="eventFines">
                                    <h4>Fines:</h4>
                                    <p>10.00</p>
                                </div>
                                <a href="#">View</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="upper-section">
                                <h3>Host name here</h3>
                                <h1>Event Name Here</h1>
                            </div>
                            <div class="lower-section">
                                <h6>02-08-2023 to 02-10-2023</h6>
                                <div class="eventDescription">
                                    <h4>Event Description:</h4>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. In cum illo rem non excepturi corporis suscipit porro repudiandae vitae a!</p>
                                </div>
                                <div class="eventFines">
                                    <h4>Fines:</h4>
                                    <p>10.00</p>
                                </div>
                                <a href="#">View</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="upper-section">
                                <h3>Host name here</h3>
                                <h1>Event Name Here</h1>
                            </div>
                            <div class="lower-section">
                                <h6>02-08-2023 to 02-10-2023</h6>
                                <div class="eventDescription">
                                    <h4>Event Description:</h4>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. In cum illo rem non excepturi corporis suscipit porro repudiandae vitae a!</p>
                                </div>
                                <div class="eventFines">
                                    <h4>Fines:</h4>
                                    <p>10.00</p>
                                </div>
                                <a href="#">View</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="upper-section">
                                <h3>Host name here</h3>
                                <h1>Event Name Here</h1>
                            </div>
                            <div class="lower-section">
                                <h6>02-08-2023 to 02-10-2023</h6>
                                <div class="eventDescription">
                                    <h4>Event Description:</h4>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. In cum illo rem non excepturi corporis suscipit porro repudiandae vitae a!</p>
                                </div>
                                <div class="eventFines">
                                    <h4>Fines:</h4>
                                    <p>10.00</p>
                                </div>
                                <a href="#">View</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="upper-section">
                                <h3>Host name here</h3>
                                <h1>Event Name Here</h1>
                            </div>
                            <div class="lower-section">
                                <h6>02-08-2023 to 02-10-2023</h6>
                                <div class="eventDescription">
                                    <h4>Event Description:</h4>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. In cum illo rem non excepturi corporis suscipit porro repudiandae vitae a!</p>
                                </div>
                                <div class="eventFines">
                                    <h4>Fines:</h4>
                                    <p>10.00</p>
                                </div>
                                <a href="#">View</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="upper-section">
                                <h3>Host name here</h3>
                                <h1>Event Name Here</h1>
                            </div>
                            <div class="lower-section">
                                <h6>02-08-2023 to 02-10-2023</h6>
                                <div class="eventDescription">
                                    <h4>Event Description:</h4>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. In cum illo rem non excepturi corporis suscipit porro repudiandae vitae a!</p>
                                </div>
                                <div class="eventFines">
                                    <h4>Fines:</h4>
                                    <p>10.00</p>
                                </div>
                                <a href="#">View</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
