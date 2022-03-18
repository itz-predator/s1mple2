<?php
	session_start();
	unset($_SESSION["id"]);
	header("Location: ../../Registration_Login/index.php");
	
?>