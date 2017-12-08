<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Add Housekeeping</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Housekeeping</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Housekeeping Detail:</div>
                <div class="panel-body">
                    <div class="hh-response"></div>
                    <form role="form" id="addHousekeep" data-toggle="validator">
                        <div class="row">
						<div class="col-lg-12">
                            <div class="form-group col-lg-6">
                                <label>Staff</label>
                                <select class="form-control" id="emp_id" required data-error="Select Staff">
                                    <option selected disabled>Select Staff</option>
                                    <?php
                                    $query = "SELECT * FROM staff WHERE staff_type_id=2";
                                    $result = mysqli_query($connection, $query);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($staff = mysqli_fetch_assoc($result)) {
                                            echo '<option value="' . $staff['emp_id'] . '">' . $staff['emp_id'] . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Duty</label>
                                <select class="form-control" id="duty_id" required data-error="Select Duty Type">
                                    <option selected disabled>Select Duty Type</option>
                                    <?php
                                    $query = "SELECT * FROM duty";
                                    $result = mysqli_query($connection, $query);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($shift = mysqli_fetch_assoc($result)) {
                                            echo '<option value="' . $shift['duty_id'] . '">' . $shift['duty_id'] . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Schedule Start Date</label>
                                <input type="date" class="form-control" placeholder="Schedule Start Date"
                                 id="schedule_startdate" required>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Schedule End Date</label>
                                <input type="date" class="form-control" placeholder="Schedule End Date"
                                 id="schedule_enddate"required>
                            </div>
							
							
							
                            <div class="form-group col-lg-6">
                            <label>Duty Remarks</label>
                            <textarea rows="5" cols="3" class="form-control" placeholder="Duty Remarks" style="resize: none";
                                 id="duty_remark" required></textarea>
                            </div>

                            </div>

                        </div>

                        <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                        <button type="reset" class="btn btn-lg btn-danger">Reset</button>
                    </form>
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




