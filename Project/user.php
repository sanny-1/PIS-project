<?php
	
	session_start();
	
	if($_SESSION["var001"]===true)
	{
		include_once 'header.php';
		include_once 'nav.php';
		include_once 'news.php';
		include_once 'homepage.php';	
		include_once 'ind_bg.php';
		include_once 'teaching.php';
		include_once 'contact.php';
		include_once 'footer.php';
		
	}
	else
	{
		header("location: index.php");
	}
?>