<?php

	$path = dirname(__FILE__);
	set_include_path($path);

	require_once('db.php');
	require_once('functions.php');

	sec_session_start();

	error_reporting(E_ALL);
	ini_set('display_errors', '1');

	$logged = 0;

	if (login_check($mysqli) == true) {
	    $logged = 1;
	} else {
	    $logged = 0;
	}

	$adminLogged = 0;

	if (login_check($mysqli, 2) == true) {
	    $adminLogged = 1;
	} else {
	    $adminLogged = 0;
	}


?>