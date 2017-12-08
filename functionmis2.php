<?php
/**
 * Created by PhpStorm.
 * User: vishal
 * Date: 10/21/17
 * Time: 4:16 PM
 */
include_once 'db.php';



if (isset($_POST['submit2'])) {

    $housekeeping_id = $_POST['housekeeping_id'];
	$duty_remark = $_POST['duty_remark'];
    $schedule_startdate = $_POST['schedule_startdate'];
    $schedule_enddate = $_POST['schedule_enddate'];
	$emp_id = $_POST['emp_id'];
	$duty_id = $_POST['duty_id'];
	
    $query="UPDATE housekeeping 
SET duty_remark='$duty_remark', schedule_startdate='$schedule_startdate', schedule_enddate='$schedule_enddate', emp_id=$emp_id, duty_id=$duty_id 
WHERE housekeeping_id=$housekeeping_id ";
//echo $query;
    if (mysqli_query($connection, $query)) {
        header('Location: index3.php?housekeeping');
    } else {
        echo "Error updating record: " . mysqli_error($connection);
    }
}






?>

