<?php
session_start();
include("db_connect.php");

// if (isset($_POST['signUp'])) {

    // username and password sent from form  
    $uemail = $_POST['email'];
    $password = $_POST['psw'];
    $Shop = $_POST['Shop']; 
    $Location = $_POST['Location'];
    $Area = $_POST['Area'];
    $contact = $_POST['contact'];




mysqli_query($conn,"INSERT INTO shop VALUES ('','NULL','$Shop','$contact','$uemail','$Location','$Area','$password' )") 
?>

