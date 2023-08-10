<?php
	$con = new mysqli("localhost","root","","blms");
	if(!$con){
		echo "Error".$con->error;
	}
?>