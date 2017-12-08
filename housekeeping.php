<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Housekeeping Management</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Housekeeping Management</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Employee Details:
                    <a href="index.php?add_emp" class="btn btn-info pull-right">Add Employee</a>
                </div>
                <div class="panel-body">
                    <?php
                    if (isset($_GET['error'])) {
                        echo "<div class='alert alert-danger'>
                                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Error on Shift Change !
                            </div>";
                    }
                    if (isset($_GET['success'])) {
                        echo "<div class='alert alert-success'>
                                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Shift Successfully Changed!
                            </div>";
                    }
                    ?>
                    <table class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%"
                           id="rooms">
                        <thead>
                        <tr>
                            <th>Sr. No</th>
							<th>Staff</th>
							<th>Duty</th>
                            <th>Schedule Start Date</th>
                            <th>Schedule End Date</th>
							<th>Duty Remarks</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        //$staff_query = "SELECT * FROM staff  JOIN staff_type JOIN shift ON staff.staff_type_id =staff_type.staff_type_id ON shift.";
                        $staff_query = "SELECT * FROM housekeeping  NATURAL JOIN staff NATURAL JOIN duty";
                        $staff_result = mysqli_query($connection, $staff_query);

                        if (mysqli_num_rows($staff_result) > 0) {
                            while ($staff = mysqli_fetch_assoc($staff_result)) { ?>
                                <tr>

                                    <td><?php echo $staff['housekeeping_id']; ?></td>
									<td><?php echo $staff['emp_name']; ?></td>        
									<td><?php echo $staff['duty_type']; ?></td>									
                                    <td><?php echo $staff['schedule_startdate']; ?></td>
									<td><?php echo $staff['schedule_enddate']; ?></td>				
									<td><?php echo $staff['duty_remark']; ?></td>
									
                                    <td>

                                        <button data-toggle="modal"
                                                data-target="#empDetail<?php echo $staff['housekeeping_id']; ?>"
                                                data-id="<?php echo $staff['housekeeping_id']; ?>" id="editEmp"
                                                class="btn btn-info"><i class="fa fa-pencil"></i></button>
												
                                        <a href='functionmis.php?empid=<?php echo $staff['housekeeping_id']; ?>'
                                           class="btn btn-danger" onclick="return confirm('Are you Sure?')"><i
                                                    class="fa fa-trash"></i></a>
                   
                                    </td>
                                </tr>


                                <?php
                            }
                        }
                        ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <p class="back-link">MIS Developed by <a href="https://www.pcsaini.in">pcsaini</a></p>
        </div>
    </div>

</div>    <!--/.main-->

<?php
//$staff_query = "SELECT * FROM staff  JOIN staff_type JOIN shift ON staff.staff_type_id =staff_type.staff_type_id ON shift.";
$staff_query = "SELECT * FROM housekeeping  NATURAL JOIN staff NATURAL JOIN duty";
$staff_result = mysqli_query($connection, $staff_query);

if (mysqli_num_rows($staff_result) > 0) {
    while ($staffGlobal = mysqli_fetch_assoc($staff_result)) {
   //     $housekeeping_id = explode(" ", $staffGlobal['housekeeping_id']);
        ?>

        <!-- Employee Detail-->
        <div id="empDetail<?php echo $staffGlobal['housekeeping_id']; ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Housekeeping Detail</h4>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Housekeeping Detail:</div>
                                    <div class="panel-body">
                                        <form data-toggle="validator" role="form" action="functionmis.php"
                                              method="post">
                                            <div class="row">
											
											<div class="form-group col-lg-6">
                                                    <label>Sr.No</label>
												<input type="text" class="form-control" readonly value="<?php echo $staffGlobal['housekeeping_id']; ?>"
                                                        name="housekeeping_id">
													   </div>
													   
											<div class="form-group col-lg-6">
                                                    <label>Staff Name</label>
												<input type="text" class="form-control" readonly value="<?php echo $staffGlobal['emp_name']; ?>"
                                                        name="emp_id">
													   </div>

											
                                                <div class="form-group col-lg-6">
                                                    <label>Duty Type</label>
                                                    <select class="form-control" id="duty_id" name="duty_id"
                                                            required>
                                                        <option selected disabled>Select Duty Type</option>
                                                        <?php
                                                        $query = "SELECT * FROM duty";
                                                        $result = mysqli_query($connection, $query);
                                                        if (mysqli_num_rows($result) > 0) {
                                                            while ($staff = mysqli_fetch_assoc($result)) {
                                                             //   echo '<option value=" ' . $staff['duty_id'] . ' "  selected  >' . $staff['duty_id'] . '</option>';
                                                                echo '<option value="' . $staff['duty_id'] . '" ' . (($staff['duty_id'] == $staffGlobal['duty_id']) ? 'selected="selected"' : "") . '>' . $staff['duty_type'] . '</option>';
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>

												<div class="form-group col-lg-6">
                                                    <label>Schedule Start Date</label>
                                                    <input type="date" class="form-control" placeholder="Schedule Start Date"
                                                           id="schedule_startdate" value="<?php echo $staffGlobal['schedule_startdate']; ?>"
                                                           name="schedule_startdate" required>
                                                </div>
												
												<div class="form-group col-lg-6">
                                                    <label>Schedule End Date</label>
                                                    <input type="date" class="form-control" placeholder="Schedule End Date"
                                                           id="schedule_enddate" value="<?php echo $staffGlobal['schedule_enddate']; ?>"
                                                           name="schedule_enddate" required>
                                                </div>
												
												<div class="form-group col-lg-6">
                                                    <label>Duty Remarks</label>
                                                    <input type="text" class="form-control" placeholder="Duty Remarks"
                                                           id="duty_remark" value="<?php echo $staffGlobal['duty_remark']; ?>"
                                                           name="duty_remark" required>
                                                </div>
												
											
                                                <input type="hidden" class="form-control" placeholder="Duty Remarks"
                                                           id="emp_id" value="<?php echo $staffGlobal['emp_id']; ?>"
                                                           name="emp_id" required>
                                     
												
					
                                            </div>

                                            <button type="submit" class="btn btn-lg btn-primary" name="submit2">Submit
                                            </button>
                                            <button type="reset" class="btn btn-lg btn-danger">Reset</button>
                                        </form>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>

            </div>
        </div>

        <?php
    }
}