<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head css>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Report | Days</title>
    <link rel="stylesheet" href="css/attendance_days.css">
    <script src="https://kit.fontawesome.com/b8e4159bd9.js" crossorigin="anonymous"></script>
</head>
    <body>
            <?php
                include("navbar.php");
            ?>
                <div class="content-area">
                    <div class="section-1">
                        <a href="attendance_events.php"><span>Events &nbsp;</span></a>
                        <a href="attendance_days.php"><span>&gt; &nbsp;Days</span></a>
                    </div>
                    <div class="section-2">
                        <div class="card">
                            <div class="card-left-section">
                                <span>Event name</span>
                                <span>Day 1</span>
                            </div>
                            <div class="card-right-section">
                                <div class="right-sub-section">
                                    <span>February 14, 2023</span>
                                    <div class="progress">
                                        <div class="progress-bar">
                                            <div class="progress-bar-progress"></div>
                                        </div>
                                        <span>Finished</span>
                                    </div>
                                    <div class="attendance-details-section">
                                        <span>Attendance Check</span>
                                        <div class="time-details">
                                            <span>Time in</span>
                                            <span>7:00 AM</span>
                                        </div>
                                        <div class="time-details">
                                            <span>Time out</span>
                                            <span>12:00 PM</span>
                                        </div>
                                        <div class="time-details">
                                            <span>Time in</span>
                                            <span>13:00 PM</span>
                                        </div>
                                        <div class="time-details">
                                            <span>Time out</span>
                                            <span>17:00 PM</span>
                                        </div>
                                    </div>
                                    <button><a href="#">View Report</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <script src="script/attendance_events.js"></script>
    </body>
</html>