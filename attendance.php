<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/attendance.css">
    <title>Attendance</title>
</head>
<body>
    <div class="attendance-page">
        <div class="Nav-Panel">
        </div>
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
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem odio, cumque deserunt doloremque amet fuga reiciendis et voluptate magnam, eaque dolor nemo officia nostrum veniam minima, officiis a delectus qui.</p>
                                </div>
                                <div class="eventFines">
                                    <h4>Fines</h4>
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
