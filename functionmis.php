<?php
/**
 * Created by PhpStorm.
 * User: vishal
 * Date: 10/21/17
 * Time: 4:16 PM
 */
include_once 'db.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo $username;
    echo $password;
    $query = "select * from login where username = '$username' and password='$password'";
    $result = mysqli_query($connection, $query);

    $userdetails = mysqli_fetch_assoc($result);

    if($userdetails['username']=='manager')
    {
        header('Location: index.php?room_mang');
    }
    else{

        header('Location: login.php');
    }


}

if (isset($_POST['submit'])) {

    $emp_id = $_POST['emp_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $staff_type_id = $_POST['staff_type_id'];
    $shift_id= $_POST['shift_id'];
    $id_card_type = $_POST['id_card_type'];
    $id_card_no = $_POST['id_card_no'];
    $address = $_POST['address'];
    $contact_no = $_POST['contact_no'];
    $joining_date = strtotime($_POST['joining_date']);
    $salary = $_POST['salary'];
	$username = $_POST['username'];
	$password = $_POST['password'];

    $query="UPDATE staff
SET emp_name='$first_name $last_name', staff_type_id='$staff_type_id', shift_id='$shift_id', id_card_type=$id_card_type,
id_card_no='$id_card_no',address='$address',contact_no='$contact_no',joining_date='$joining_date',salary='$salary',username='$username',password='$password'
WHERE emp_id=$emp_id ";
//echo $query;
    if (mysqli_query($connection, $query)) {
        header('Location: index.php?staff_mang');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}


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
        header('Location: index.php?housekeeping');
    } else {
        echo "Error updating record: " . mysqli_error($connection);
    }
}

if (isset($_GET['empid'])!="")
{
   $emp_id=$_GET['empid'];
    $deleteQuery = "DELETE FROM staff WHERE emp_id=$emp_id";
    if (mysqli_query($connection, $deleteQuery)) {
        header('Location: index.php?staff_mang');
    } else {
        echo "Error updating record: " . mysqli_error($connection);
    }
}

if (isset($_GET['hkemp'])!="")
{
   $hkemp=$_GET['hkemp'];
    $deleteQuery = "DELETE FROM housekeeping WHERE housekeeping_id=$hkemp";
    if (mysqli_query($connection, $deleteQuery)) {
        header('Location: index.php?housekeeping');
    } else {
        echo "Error updating record: " . mysqli_error($connection);
    }
}

if (isset($_GET['hkemp2'])!="")
{
   $hkemp2=$_GET['hkemp2'];
    $deleteQuery = "DELETE FROM housekeeping WHERE housekeeping_id=$hkemp2";
    if (mysqli_query($connection, $deleteQuery)) {
        header('Location: index2.php?housekeeping');
    } else {
        echo "Error updating record: " . mysqli_error($connection);
    }
}


?>