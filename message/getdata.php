<?php
extract($_POST);
extract($_GET);
extract($_FILES);
require_once 'connect.php';
if(isset($regSubmit)){
	/*echo "<pre>";
	print_r($_POST);*/
	//$uname = $_POST['uname'];
	//$uemail = $_POST['uemail'];
	//$upass = $_POST['upass'];
	//$umobile = $_POST['umobile'];
	/*database connection*/
	
	$upass = md5($upass);
	/*query*/
	$query = "INSERT INTO chatbox VALUES(NULL,'$uname', '$uemail', '$upass', '$umobile', NOW(), NOW(), 1)";
	/* query execution*/
	if($con->query($query)) {
		header("location:login.php");
		//echo "your data has been submitted.....";
	}
	else{
		echo mysqli_error($con);
	}
}
elseif(isset($messageSubmit)) {
	
    //echo "successfuly";
    require_once 'session.php';
    $query = "INSERT INTO message VALUES(NULL, '$user_id', '$message', NOW(), NOW(), 1)";
    if($con->query($query)) {
		header('location:message.php');
    }
    else{
    	echo mysqli_error($con);
    }
}
 ?>