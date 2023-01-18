<!DOCTYPE html>
<html lang="en">
<head css>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>
    <link rel="stylesheet" href="css/attendance_events.css">
    <script src="https://kit.fontawesome.com/b8e4159bd9.js" crossorigin="anonymous"></script>
</head>
    <body>
                <?php
                    include("navbar.php");
                ?>
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

        <script src="script/attendance_events.js"></script>
    </body>
</html>