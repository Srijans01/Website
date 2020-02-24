<?php
include '../include/conn.php';
session_start();

if (empty($_SESSION["login_user_id"]))
{
	header("location:../team/execom.php");
	
}
else{

$id=$_SESSION["login_user_id"];
$branch=$_POST["brach"];
$branchyr=$_POST["brachyr"];
$email=$_POST["email"];
$dob=$_POST["dob"];
$memsince=$_POST["memsince"];
$passingyr=$_POST["passingyr"];
$fblink=$_POST["fblink"];
$tlink=$_POST["tlink"];
$llink=$_POST["llink"];
$ghlink=$_POST["ghlink"];
$glink=$_POST["glink"];
$about=$_POST["about"];
$password=md5($_POST["password"]);



	if (function_exists('date_default_timezone_set'))
{
  date_default_timezone_set('Asia/Kolkata');
}
$login=$_SESSION["login_user_id"];

$time=date("h:i:sa");
$date=date("m/d/y");


  
	$file = rand(1000000,100000000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$filesize = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="../img/team/";
	
	// new file size in KB
	$new_size = $filesize/1024;  
	// new file size in KB
	
	// make file name in lower case

	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	move_uploaded_file($file_loc,$folder.$final_file);
if($new_size==0)
{
	if(!empty($_POST["password"]))
	{
	$sql="update  users set  about='$about',fblink='$fblink',twitterlink='$tlink',linkedinlink='$llink',githublink='$ghlink',gplus='$glink',branchyr='$branchyr',branch='$branch',email='$email',dob='$dob',membersince='$memsince',passingyear='$passingyr',passwordhash='$password' where id='$id'";
	}
else{
	$sql="update  users set  about='$about',fblink='$fblink',twitterlink='$tlink',linkedinlink='$llink',githublink='$ghlink',gplus='$glink',branchyr='$branchyr',branch='$branch',email='$email',dob='$dob',membersince='$memsince',passingyear='$passingyr' where id='$id'";
	
	
	
}


}
elseif($new_size>0)
{
	if(!empty($_POST["password"]))
	{
	$sql="update  users set  about='$about',fblink='$fblink',twitterlink='$tlink',linkedinlink='$llink',githublink='$ghlink',gplus='$glink',branchyr='$branchyr',branch='$branch',email='$email',dob='$dob',membersince='$memsince',passingyear='$passingyr',passwordhash='$password',dpimage='$final_file' where id=$id";
	}
else{
	$sql="update  users set  about='$about',fblink='$fblink',twitterlink='$tlink',linkedinlink='$llink',githublink='$ghlink',gplus='$glink',branchyr='$branchyr',branch='$branch',email='$email',dob='$dob',membersince='$memsince',passingyear='$passingyr',dpimage='$final_file' where id=$id";
	
	
	
}
}	
	
	
	
	if(mysql_query($sql))
	{
		
		
		
		?>
		<script>
		alert('successfully uploaded');
        window.location.href='profile.php';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='bloglist.php';
        </script>
		<?php
	}
  }

?>