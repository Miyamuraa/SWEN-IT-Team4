<?php
include_once "db.php";
session_start();
if (isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
    $userQuery = "SELECT * FROM staff WHERE emp_id = '$user_id'";
    $result = mysqli_query($connection, $userQuery);
    $user = mysqli_fetch_assoc($result);
	
}else{
    header('Location:login.php');
}
include_once "header.php";
include_once "sidebar2.php";

if (isset($_GET['housekeeping.php'])){
    include_once "housekeeping2.php";
}

else{
    include_once "housekeeping2.php";
}

include_once "footer.php";