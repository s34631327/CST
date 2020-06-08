<?php session_start(); 
	// unset($_SESSION['username']);
	// unset($_SESSION['dpm']);
	// unset($_SESSION['acc']);
	session_destroy();
	echo '<meta http-equiv=REFRESH CONTENT=0;url=login.php>';
?>