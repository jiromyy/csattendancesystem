<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Manage Attendees</title>
    <link rel="stylesheet" href="css/manage-events.css" />
    <!-- icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://kit.fontawesome.com/b8e4159bd9.js" crossorigin="anonymous"></script>
    <!-- icons -->
    <!-- style -->
    <style>
        #add_event_form select {
            font-size: 16px;
        }
    </style>
</head>

<?php

/* START OF CREATE SCRIPT*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cs attendance system";

//creating connection
$connection = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['add_attendee'])) {
    // if the query was successful
    echo '<script>
    alert("Event Added Successfully");
    </script>';
    header("Refresh:0");
}



if (isset($_POST['edit_attendee'])) {
    echo '<script>
  alert("Event Edited Successfully");
  </script>';
    // }
    header("Refresh:0");
}
if (isset($_POST['delete_event'])) {
    echo '<script>
  alert("Event deleted Successfully");
  </script>';
    // }
    header("Refresh:0");
}

/* END OF CREATE SCRIPT*/
?>


<body>


    <div class="nav-events-container">
        <!-- start of sidebar -->
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
                </ul>
                <ul>
                    <li>
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        <button href="#"><span>Log Out</span></button>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- end of sidebar -->

        <!-- start of main component including header -->
        <main class="events">
            <div class="events-header">
                <span>Attendees</span>
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
                        <span>Super Admin</span>
                    </div>
                </div>
            </div>
            <div class="events-main">
                <div class="search-navigate">
                    <div class="left-search-navigate">
                        <input type="text" class="search" placeholder="Search by name, host, organization admin..." />
                    </div>
                    <div class="right-search-navigate">
                        <button class="create-button" id="create_button" onclick="show_modal('add')">Add New Attendee</button>
                    </div>
                </div>

                <table id="attendee-table">
                    <thead>
                    </thead>
                    <tbody>
                        <tr class="table-head">
                            <th>Name</th>
                            <th>Student Number</th>
                            <th>Year And Section</th>
                            <th>Total Fines</th>
                            <th class="btn-group-sm" style="width: 148px;">
                            </th>
                        </tr>

                        <tr class="row">
                            <td class="name">Last Name, First Name, Middle Name</td>
                            <td class="studentNumber">90-000001</td>
                            <td class="yearAndSection">3A</td>
                            <td class="totalFines">200</td>
                            <td class="btn-group-sm">
                                <a class="view_button" id="read_button" onclick="show_modal('read')"><span class="material-symbols-outlined"> visibility </span></a>
                                <a class="edit_button" id="edit_button" onclick="show_modal('edit')"><span class="material-symbols-outlined">
                                        edit
                                    </span></a>
                                <a class="delete_button" id="delete_button" onclick="show_modal('delete')"><span class="material-symbols-outlined">
                                        delete
                                    </span></a>
                            </td>
                        </tr>

                    </tbody>

                </table>
        </main>
        <!-- end of main component including header -->


        <!--start of create modal -->
        <div id="add_event_modal" class="modal">
            <div class="modal-content">
                <form action="" class="add_event_form" id="add_event_form" method="post">
                    <div class="title title_event_form-div">
                        <p class="title_event_form">Add Attendee</p>
                    </div>
                    <div class="input-div">
                        <div class="input-for-1">
                            <label for="first_name">First Name</label>
                            <input type="text" name="first_name" class="input first_name" value="" placeholder="Type here" required />
                        </div>
                    </div>


                    <div class="input-div">
                        <div class="input-for-1">
                            <label for="middle_name">Middle Name</label>
                            <input type="text" name="middle_name" class="input middle_name" value="" placeholder="Type here" required />
                        </div>
                    </div>
                    <div class="input-div">
                        <div class="input-for-1">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="last_name" class="input event_name" value="" placeholder="Type here" required />
                        </div>
                    </div>
                    <input type="text" name="org_id" class="input first_name" value="1" placeholder="Type here" hidden />
                    <div class="input-div">
                        <div class="input-for-1">
                            <label for="student_number">Student Number</label>
                            <input type="text" name="student_number" class="input student_number" value="" placeholder="Type here" required />
                        </div>
                    </div>
                    <div class="input-div">
                        <div class="input-for-1">
                            <label for="contact_number">Contact Number</label>
                            <input type="number" name="contact_number" class="input contact_number" value="" placeholder="Type here" required />
                        </div>
                    </div>
                    <div class="input-div college">
                        <div class="input-for-1">
                            <label for="college">College</label>
                            <select name="college" id="college" class="input" required>
                                <?php $query = mysqli_query($connection, "SELECT * FROM college");
                                ?>
                                <option value="">Select College</option>
                                <?php
                                if (mysqli_num_rows($query) > 0) {
                                    while ($row = mysqli_fetch_array($query)) {
                                        echo "<option value='", $row["college_id"], "'>", $row["college_name"], "</option>";
                                    }
                                }
                                ?>

                            </select>
                        </div>
                    </div>

                    <!-- courses -->
                    <div class="input-div" id="course">
                        <div class="input-for-1">
                            <label for="course">Course</label>
                            <select name="course" id="s" class="input" required>
                                <!-- the number of option elements and their values here is dependent on the value of the college select element -->
                            </select>
                        </div>
                    </div>
                    <div class="group-of-buttons">
                        <div class="input-for-1" id="close"><span class="close">Cancel</span></div>
                        <input type="submit" class="submit submit-event" name="add_attendee" value="Submit" />
                    </div>
                </form>
            </div>

        </div>
        <!-- end of create modal -->

        <!--start of edit modal -->
        <!-- edit events -->
        <div id="edit_event_modal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <form action="" class="edit_event_form" id="edit_event_form" method="post">
                    <div class="title title_event_form-div">
                        <p class="title_event_form">Edit Event</p>
                    </div>
                    <div class="input-div">
                        <div class="input-for-1">
                            <label for="event_name">Event Name</label>
                            <input type="text" name="event_name" class="input event_name" value="Computer Science Day" placeholder="Type here" required />
                        </div>
                    </div>

                    <!-- <div id="experienceSection"></div> -->
                    <div class="input-div">
                        <div class="input-for-1">
                            <label for="host">Host name</label>
                            <input type="text" name="host" class="input host" placeholder="Type here" required />
                        </div>
                    </div>
                    <div class="input-div">
                        <div class="input-for-3">
                            <label for="startDate">Start Date</label>
                            <input type="date" name="startDate" class="input date" placeholder="Type here" required />
                        </div>
                        <div class="input-for-3">
                            <label for="endDate">End Date</label>
                            <input type="date" name="endDate" class="input date" placeholder="Type here" required />
                        </div>
                        <div class="input-for-3">
                            <label for="session">Session</label>
                            <select name="session" id="session" class="input" required>
                                <option value="" selected>Select Value</option>
                                <option value="halfDay">Half Day</option>
                                <option value="wholeDay">Whole Day</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-div" id="halfDay">
                        <div class="input-for-2">
                            <label for="startTime">Start Time</label>
                            <input type="time" name="startTime" class="input" id="startTime" required>
                        </div>
                        <div class="input-for-2">
                            <label for="endTime">End Time</label>
                            <input type="time" name="endTime" class="input" id="endTime" required>
                        </div>
                    </div>
                    <div class="input-div" id="wholeDay">
                        <div class="input-for-2">
                            <label for="amStartTime">AM Start Time</label>
                            <input type="time" name="amStartTime" class="input" id="amStartTime">
                        </div>
                        <div class="input-for-2">
                            <label for="amEndTime">AM End Time</label>
                            <input type="time" name="amEndTime" class="input" id="amEndTime" required>
                        </div>
                        <div class="input-for-2">
                            <label for="amStartTime">PM Start Time</label>
                            <input type="time" name="amStartTime" class="input" id="amStartTime" required>
                        </div>
                        <div class="input-for-2">
                            <label for="amEndTime">PM End Time</label>
                            <input type="time" name="amEndTime" class="input" id="amEndTime" required>
                        </div>
                    </div>
                    <div class="input-div">
                        <div class="input-for-1">
                            <label for="event_desc">Description</label>
                            <input type="text" name="event_desc" class="input event_desc" placeholder="Type here" required />
                        </div>
                    </div>
                    <div class="input-div">
                        <div class="input-for-1">
                            <label for="fines">Fines</label>
                            <input type="text" name="fines" class="input fines" placeholder="Type here" required />
                        </div>
                    </div>

                    <div class="group-of-buttons">
                        <div class="input-for-1" id="close"><span class="close">Cancel</span></div>
                        <input type="submit" class="submit submit-event" name="edit_attendee" value="Submit" />
                    </div>
                </form>
            </div>
        </div>
        <!-- end of edit modal -->

        <!-- start of Read modal -->
        <div id="read_event_modal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <div class="right-part">
                    <img src="assets/event_image.png" alt="" class="event_img">
                </div>
                <div class="left-part">
                    <div class="upper-part">
                        <div class="eventHeader">
                            <h1>COMSOC WEEK Opening</h1>
                        </div>
                        <p class="description">
                            This event is an opening program and will serve as the ideal time to kick off every year's Organization Week for all Computer Science Students.
                        </p>
                    </div>
                    <div class="lower-part">
                        <ul>
                            <li>
                                <i class="fa-regular fa-calendar-days"></i>
                                <p>March 02, 2023</p>
                            </li>
                            <li>
                                <i class="fa-regular fa-clock"></i>
                                <p>13:00-17:00 </p>
                            </li>
                            <li>
                                <i class="fa-regular fa-user"></i>
                                <p>John Carlo Bisquera</p>
                            </li>
                            <li>
                                <i class="fa-regular fa-pen-to-square"></i>
                                <p>10.00 per punch</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <!-- start of Delete modal -->
        <div id="delete_event_modal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <div class="title title_event_form-div">
                    <p class="title_event_form">Delete Event</p>
                    <div class="input-for-1" id="close"><span class="close">Close</span></div>
                </div>
                <form action="" class="delete_event_form" id="delete_event_form" method="post">
                    <div class="input-div">
                        <p>The event <b>"COMSOC WEEK Opening,"</b> which was previously scheduled, will be deleted. This does imply that you cannot access any information about this event.
                            <br>
                            <br>
                            Please type <b>COMSOC WEEK Opening</b> to confirm
                        </p>
                    </div>
                    <div class="input-div">
                        <div class="input-for-1">

                            <input type="text" name="fines" class="input fines" placeholder="Type here" required />
                        </div>
                    </div>

                    <div class="group-of-buttons">
                        <input type="submit" class="submit submit-event delete-confirmation" name="delete_event" value="I understand, delete this event" />
                    </div>
                </form>
            </div>
        </div>


    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- downloaded jquery file -->
    <script src="script/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
    </script>
    <script src="script/dashboard.js"></script>
    <!-- internal js -->
    <script>
        // displaying modals
        let show_modal = (typeOfModal) => {
            /*
            The various modals will be opened by this function.
            ---------------------------------------------------
            Parameters
            ---------------------------------------------------
            typeOfModal : string. The following value are create, read, update, and delete
            */
            if (typeOfModal == "add") {
                let add_event_modal = document.querySelector("#add_event_modal");
                let add_event_form = document.querySelector("#add_event_form");
                let close_edit = add_event_form.getElementsByClassName("close")[0];
                add_event_modal.style.display = "block";
                window.onclick = function(event) {
                    // if the modal is open and if the length of the event_name field is 0, the user can close the modal by clicking exterior part of the modal component
                    if (event.target == add_event_modal || event.target == close_edit) {
                        console.log(12);
                        let notEmpty = false;
                        // if one of the form inputs have value then change the value of the variable notEmpty
                        add_event_form.querySelectorAll("[required]").forEach(function(i) {
                            console.log(i.value.length);
                            if (i.value.length != 0) {
                                notEmpty = true;
                                return;
                            }
                        });

                        // Yes-or-No Question message will pop
                        if (notEmpty) {
                            let m = confirm("If you decide to exit this page, no information will be kept. Are you sure?");
                            if (m == true) {
                                add_event_modal.style.display = "none";
                                add_event_form.querySelectorAll("[required]").forEach(function(i) {
                                    i.value = "";
                                });
                            }
                        } else {
                            add_event_modal.style.display = "none";
                        }
                    }
                };

                $(document).ready(function() {
                    $("#add_event_form #course").hide();
                    $('.college select').on('change', function() {
                        var college = $(this).val();
                        console.log(college)
                        if (college != 0) {
                            $("#add_event_form #course").show();

                            $.ajax({
                                type: 'POST',
                                url: 'ajaxData.php',
                                data: 'college_id=' + college,
                                success: function(html) {
                                    $('#course select').html(html);
                                }
                            });
                        } else {
                            $("#add_event_form #course").hide();
                        }
                    });
                });


            } else if (typeOfModal == "read") {
                let read_event_modal = document.querySelector("#read_event_modal");
                // read_event_modal.style.display = "block";
                window.onclick = function(event) {
                    // if the modal is open and if the length of the event_name field is 0, the user can close the modal by clicking exterior part of the modal component
                    if (event.target == read_event_modal) {
                        console.log(12);
                        read_event_modal.style.display = "none";
                    }

                };


            } else if (typeOfModal == "edit") {
                let edit_event_modal = document.querySelector("#edit_event_modal");
                let edit_event_form = document.querySelector("#edit_event_form");
                let close_edit = edit_event_form.getElementsByClassName("close")[0];
                edit_event_modal.style.display = "block";
                window.onclick = function(event) {
                    // if the modal is open and if the length of the event_name field is 0, the user can close the modal by clicking exterior part of the modal component
                    if (event.target == edit_event_modal || event.target == close_edit) {
                        console.log(12);
                        let notEmpty = false;
                        // if one of the form inputs have value then change the value of the variable notEmpty
                        edit_event_form.querySelectorAll("[required]").forEach(function(i) {
                            console.log(i.value.length);
                            if (i.value.length != 0) {
                                notEmpty = true;
                                return;
                            }
                        });

                        // Yes-or-No Question message will pop
                        if (notEmpty) {
                            let m = confirm("If you decide to exit this page, no information will be kept. Are you sure?");
                            if (m == true) {
                                edit_event_modal.style.display = "none";
                                edit_event_form.querySelectorAll("[required]").forEach(function(i) {
                                    i.value = "";
                                });
                            }
                        } else {
                            edit_event_modal.style.display = "none";
                        }
                    }
                };
                // changing session
                $(document).ready(function() {
                    toggleInput();
                    $("#edit_event_form #session").change(function() {
                        toggleInput();
                    });
                });

                function toggleInput() {
                    if ($("#edit_event_form #session").val() === "halfDay") {
                        $("#edit_event_form #halfDay").show();
                    } else {
                        $("#edit_event_form #halfDay").hide();
                        $("#edit_event_form #halfDay input").val("");
                        $("#edit_event_form #halfDay input").removeAttr("required")

                    }
                    if ($("#edit_event_form #session").val() === "wholeDay") {
                        $("#edit_event_form #wholeDay").show();
                    } else {
                        $("#edit_event_form #wholeDay").hide();
                        $("#edit_event_form #wholeDay input").val("");
                        $("#edit_event_form #wholeDay input").removeAttr("required")
                    }

                }

            } else if (typeOfModal == "delete") {
                let delete_event_modal = document.querySelector("#delete_event_modal");
                let delete_event_form = document.querySelector("#delete_event_form");
                let close_delete = delete_event_modal.getElementsByClassName("close")[0];
                delete_event_modal.style.display = "block";
                window.onclick = function(event) {
                    // if the modal is open and if the length of the event_name field is 0, the user can close the modal by clicking exterior part of the modal component
                    if (event.target == delete_event_modal || event.target == close_delete) {
                        console.log(12);
                        let notEmpty = false;
                        // if one of the form inputs have value then change the value of the variable notEmpty
                        delete_event_modal.querySelectorAll("[required]").forEach(function(i) {
                            console.log(i.value.length);
                            if (i.value.length != 0) {
                                notEmpty = true;
                                return;
                            }
                        });

                        // Yes-or-No Question message will pop
                        if (notEmpty) {
                            let m = confirm("If you decide to exit this page?");
                            if (m == true) {
                                delete_event_modal.style.display = "none";
                                delete_event_modal.querySelectorAll("[required]").forEach(function(i) {
                                    i.value = "";
                                });
                            }
                        } else {
                            delete_event_modal.style.display = "none";
                        }
                    }
                };


            }
        };
    </script>
</body>

</html>