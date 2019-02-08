<?php
//
	require_once('../../includes/app.php');

	$username = "";
	$email = "";
	$name = "";


	if($adminLogged){

		$id = $_SESSION["user_id"];

	}
	else{
		header('location: ./login');
	}

//?>

<!DOCTYPE html>
<html>
	<head>
		<title>Phoenix</title>


		Hello World <br />
        <a href="logout">Logout</a>

	</body>


</html>