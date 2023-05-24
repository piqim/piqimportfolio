<?php
session_start();
//The start of the login session
if (!isset($_SESSION['id_user'])) {
	//If user is yet to log in, user will be moved to this file
	header('Location: index.php');
	exit();
}
?>