<?php 
include "include/functions.php";
$userid=$_POST["userid"];
$pass= $_POST["pass"];

$pass1=md5($pass);
session_start();
if($_SESSION["login_user_id"]!="")
{
	session_destroy();
}
$sql="select * from users where username='$userid' or memid='$userid' and passwordhash='$pass1'";
$res=mysql_query($sql) or die();
$count=mysql_num_rows($res);
$member=mysql_fetch_assoc($res);
if($count==1)
{	
	
	$_SESSION["login_user_id"]=$member["id"];
	if($member["admin"]==1)
	{
$_SESSION["admin"]=1;
	
}
header("location:index.php");	
}

else
{
header("location:index.php");
}
?>
                            