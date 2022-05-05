<?php
  extract($_POST);
// $uemail= $_POST['uemail'];
// $upass= $_POST['upass'];

# Data connection
require_once 'connect.php';
if(isset($loginSubmit)){
    $upass = md5($upass);
		//Query
	$query = "SELECT * FROM chatbox WHERE email = '$uemail' AND password = '$upass'";

	//Execution
	$result = $con->query($query);

	/*echo "<pre>";
	print_r($result);*/

	// $row = $result->num_rows;
	$row = mysqli_num_rows($result);
	$data = $result->fetch_object();

	// echo "$data->email";
if($row == 1){
	session_start();
	$_SESSION['sessId'] = session_id();
	$_SESSION['userId'] = $data->id;
	$_SESSION['userName'] = $data->name;
	$_SESSION['userEmail'] = $data->email;
	$_SESSION['userMobile'] = $data->mobile;
	header('location:message.php');
	// echo "Logged In";
}
else{
	if(empty($uemail)){
		echo "Please Fill Email First";
	}
	elseif(empty($upass)){
		echo "Please Fill Password First";
	}
	else{
		echo "Invalid Credentials";
	}
 }
	
}


?>

