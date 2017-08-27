<?php
	session_start();
	if (isset($_SESSION["username"])) {
			unset($_SESSION["username"]);
	}
	$_SESSION = array();
	session_destroy();
	header("location:loginpage.php?message=0000");
	?>