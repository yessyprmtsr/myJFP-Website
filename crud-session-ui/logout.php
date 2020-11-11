<?php 


// here it will destroy the session with current user login username and password and redirect the user back to login page

session_start();

$_SESSION['username'] = "";

unset ($_SESSION ['username']);

session_unset();
session_destroy();

header ("Location: login.php");

?>
