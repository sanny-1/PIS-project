<?php
	session_start();
	$_SESSION["var001"]=false;
	unset($_SESSION["var002"]);
	unset($_SESSION["var003"]);
?>
You have successfully logged out.....
<meta http-equiv="refresh" content="2;url=index.php" />