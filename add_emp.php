<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Add Employee</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Employee</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Employee Detail:</div>
                <div class="panel-body">
                    <div class="emp-response"></div>
                    <form role="form" id="addEmployee" data-toggle="validator">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="form-group col-lg-3">
                                <label>Staff</label>
                                <select class="form-control" id="staff_type" required data-error="Select Staff Type">
                                    <option selected disabled>Select Staff Type</option>
                                    <?php
                                    $query = "SELECT * FROM staff_type";
                                    $result = mysqli_query($connection, $query);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($staff = mysqli_fetch_assoc($result)) {
                                            echo '<option value="' . $staff['staff_type_id'] . '">' . $staff['staff_type'] . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-3">
                                <label>Shift</label>
                                <select class="form-control" id="shift" required data-error="Select Shift Type">
                                    <option selected disabled>Select Staff Type</option>
                                    <?php
                                    $query = "SELECT * FROM shift";
                                    $result = mysqli_query($connection, $query);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($shift = mysqli_fetch_assoc($result)) {
                                            echo '<option value="' . $shift['shift_id'] . '">' . $shift['shift'] . ' - ' . $shift['shift_timing'] . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-3">
                                <label>First Name</label>
                                <input type="text" class="form-control" placeholder="First Name" id="first_name" required data-error="Enter First Name">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-3">
                                <label>Last Name</label>
                                <input type="text" class="form-control" placeholder="Last Name" id="last_name" required data-error="Enter Last Name">
                            </div>
							</div>
							
							<div class="col-lg-12">
                            <div class="form-group col-lg-3">
                                <label>Bank Card Type</label>
                                <select class="form-control" id="id_card_id" required data-error="Select Bank Card Type" onchange="validId(this.value);">
                                    <option selected disabled>Select Bank Card Type</option>
                                    <?php
                                    $query = "SELECT * FROM id_card_type";
                                    $result = mysqli_query($connection, $query);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($id_card_type = mysqli_fetch_assoc($result)) {
                                            echo '<option value="' . $id_card_type['id_card_type_id'] . '">' . $id_card_type['id_card_type'] . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-3">
                                <label>Bank Account Number</label>
                                <input type="text" class="form-control" placeholder="Bank Account No" id="id_card_no" required data-error="Enter Bank Account Number">
                                <div class="help-block with-errors"></div>
                            </div>
						
                            <div class="form-group col-lg-3">
                                <label>Contact Number</label>
                                <input type="number" class="form-control" placeholder="Contact Number" id="contact_no" required data-error="Enter Contact Number">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-3">
                                <label>Address</label>
                                <input type="text" class="form-control" placeholder="address" id="address">
                                <div class="help-block with-errors"></div>
                            </div>
							</div>
							
							<div class="col-lg-12">
                            <div class="form-group col-lg-3">
                                <label>Salary</label>
                                <input type="number" class="form-control" placeholder="Salary" id="salary" data-error="Enter Salary" required data-error="Enter Salary">
                                <div class="help-block with-errors"></div>
                            </div>
							
							<div class="form-group col-lg-3">
                            <label>Date of Birth</label>
                            <input type="date" class="form-control" placeholder="Date of Birth" id="dob">
							<div class="help-block with-errors"></div>
                            </div>
							
							<div class="form-group col-lg-3">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="Username" id="username" required data-error="Enter Username">
							<div class="help-block with-errors"></div>
                            </div>
							
							<div class="form-group col-lg-3">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" id="password" required data-error="Enter Password">
							<div class="help-block with-errors"></div>
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




