<?php  
if(!isset($SESSION['username'])){
	session_start();
	session_unset();
	session_destroy();
	header("Location:login.php");
}else{header("Location:home.php");}
?>