<?php
/**
 * Created by PhpStorm.
 * User: vishal
 * Date: 10/23/17
 * Time: 1:45 PM
 */ ?>
<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css"/>
</head>
<body>


<div class="container">
    <div class="card card-container">
        <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png"/>
        <p id="profile-name" class="profile-name-card">Login to Delonix Regia</p>
        <br>
        <div class="result">
            <?php
            if (isset($_GET['empty'])){
                echo '<div class="alert alert-danger">Enter NRIC or Password</div>';
            }elseif (isset($_GET['loginE'])){
                echo '<div class="alert alert-danger">NRIC or Password Don\'t Match</div>';
            } ?>
        </div>
        <form class="form-signin" data-toggle="validator" action="ajax.php" method="post">
            <div class="row">
                <div class="form-group col-lg-12">
                    <input type="text" name="username" class="form-control" placeholder="NRIC" required
                           data-error="Enter NRIC">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-lg-12">
                    <input type="password" name="password" class="form-control" placeholder="Password" required
                           data-error="Enter Password">
                    <div class="help-block with-errors"></div>
                </div>
            </div>

            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="login">Login</button>

        </form><!-- /form -->

    </div><!-- /card-container -->
</div><!-- /container -->

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/validator.min.js"></script>
</body>
</html>