<?php

	require_once('../../includes/app.php');

	if($logged){
		header('location: ./panel');
	}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="../assets/css/logreq.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

    <script src="../assets/js/sha512.js"></script>
    <script src="../assets/js/forms.js"></script>

</head>
<body>
<div class="container">

    <div class="row main">

        <div class="main-login main-center">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-6">
                        <h2>Log In</h2>
                    </div>
                </div>
            </div>

            <form class="form-horizontal" id="login-form" method="post" action="login.do">
                <?php
                if (isset($_GET['err'])) {
                    echo '<p class="alert alert-warning">Error Logging in! Please check username and/or password.</p>';
                }
                ?>
                <div class="form-group">
                    <label for="username" class="cols-sm-2 control-label">Username</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="email" id="username"  placeholder="Enter your Username"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="cols-sm-2 control-label">Password</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
                        </div>
                    </div>
                </div>

                <div class="form-group ">
                    <input type="submit" class="btn btn-primary btn-lg btn-block login-button" onclick="formhash(this.form, this.form.password);">LOG IN</input>
                </div>
                <div class="text-center">
                    <a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
                </div>

            </form>

        </div>
    </div>
</div>
</body>
</html>
