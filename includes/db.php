<?php
/**
 * These are the database login details
 */
define("HOST", "localhost");     // The host you want to connect to.
define("USER", "root");    // The database username.
define("PASSWORD", "2101996");    // The database password.
define("DATABASE", "phoenix");    // The database name.

define("CAN_REGISTER", "any");
define("DEFAULT_ROLE", "member");

define("SECURE", FALSE);    // FOR DEVELOPMENT ONLY!!!!

$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);

if($mysqli->connect_errno) {
    die("Database connection failed: ". $mysqli->connect_error()." ( ". $mysqli->connect_errno()." )");
}
?>