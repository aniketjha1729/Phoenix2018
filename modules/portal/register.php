<?php

    require_once('../../includes/app.php');

    if($logged){
        header('location: ./panel');
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/logreq.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css"> -->

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>




</head>
<body>

<?php
if (isset($_GET['error'])) {
    echo '<p class="error">Error Logging In!</p>';
}
?>
<div class="container">

    <div class="row main ">
        <div class="main-login main-center">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-6">
                        <h1>Register</h1>
                    </div>
                </div>

            </div>
            <form class="form-horizontal" id="register-form" method="post" action="./register.do">

                <div class="form-group">
                    <label for="name" class="cols-sm-2 control-label">Name</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="name" id="name" value=""  placeholder="Enter your Name"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Email</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="email" id="email" value=""  placeholder="Enter your Email"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="username" class="cols-sm-2 control-label">Username</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="username" id="username" value=""  placeholder="Enter your Username"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="cols-sm-2 control-label">Password</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="password" class="form-control" name="password" id="password" value=""  placeholder="Enter your Password"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="password" class="form-control" name="confirm_password" id="confirm" value=""  placeholder="Confirm your Password"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="college_id" class="cols-sm-2 control-label">College ID</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fas fa-address-card fa-lg" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="coll_id" id="college_id"  placeholder="1710902073"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="mobile_no" class="cols-sm-2 control-label">Mobile No.</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fas fa-phone fa-lg" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="mobile" id="mobile_no"  placeholder="9876543210"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="stream">Stream</label>
                    <select name="stream" class="form-control" id="stream">
                        <option value="1">CSE</option>
                        <option value="2">IT</option>
                        <option value="3">ECE</option>
                        <option value="4">ME</option>
                        <option value="5">CE</option>
                        <option value="6">EE</option>
                        <option value="7">AIEE</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="year">Year</label>
                    <select name="entry_year" class="form-control" id="Year">
                        <option value="1">1st</option>
                        <option value="2">2nd</option>
                        <option value="3">3rd</option>
                        <option value="4">4th</option>
                    </select>
                </div>
                <div class="form-group ">
                    <input type="submit" name="submit" value="submit" class="btn btn-primary btn-lg btn-block login-button"  onclick="return regformhash(this.form,this.form.username,this.form.email,this.form.password,this.form.confirmpwd);">Register</input>
                </div>

            </form>

        </div>
    </div>
</div>



</body>
</html>




