<?php 
	setcookie("id", "1234", time()*60*60*24);

	//Remove cookie
	setcookie("id", "", time()-3600);
?>