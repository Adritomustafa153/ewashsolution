<?php
session_start();
include("db_connect.php");

if (isset($_POST['signUp'])) {

    // username and password sent from form  
    $uemail = $_POST['email'];
    $password = $_POST['pwd'];
    $Shop = $_POST['Shop'];
    $Location = $_POST['Location'];
    $Area = $_POST['Area'];


	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO shop VALUES ( '','',,'$Shop','$email','$Location','$Area','$password' )" )



   
}
?>