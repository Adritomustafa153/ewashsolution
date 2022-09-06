<?php
	include 'db_connect.php';
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$area=$_POST['area'];
    $pass=$_POST['password'];
	$sql = "INSERT INTO shop (s_id, s_name, pass, s_loaction,s_contact,s_email,s_area) VALUES (NULL, '$name', '$pass', '$area','$phone','$email','$area');";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>