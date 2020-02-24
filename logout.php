<?php 
session_start();
if($_SESSION["login_user_id"]!="")
{
	session_destroy();
	header("location:index.php");
}
?>
