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