
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="http://icons.iconarchive.com/icons/graphicloads/colorful-long-shadow/64/User-icon.png" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name"><?php echo $user['emp_name'];?></div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Cleaning</div>
			<!--<?php echo $user['staff_type_id'];?>-->
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <ul class="nav menu">
        <?php
        if (isset($_GET['housekeeping'])){ ?>
            <li class="active">
                <a href="index3.php?housekeeping"><em class="fa fa-dashboard">&nbsp;</em>
                    Housekeeping
                </a>
            </li>
        <?php } else{?>
            <li>
                <a href="index3.php?housekeeping"><em class="fa fa-dashboard">&nbsp;</em>
                    Housekeeping
                </a>
            </li>

<?php }?>


        <li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
    </ul>
</div><!--/.sidebar-->