<?php 

	session_start();
	
	$_SESSION['loginid']=4;
	
	echo $_SESSION['loginid'];
	
?>