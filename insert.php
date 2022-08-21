<?php
    include_once 'db_connect.php';
    if(isset($_POST['submit'])){

        $u_email = $_POST['email'];
        $u_name = $_POST['Name'];
        $u_address = $_POST['address'];
        $u_phone = $_POST['phone'];
        $u_password = $_POST['password'];

        if(!empty($u_email) && !empty($u_password) && !empty($u_name) && !empty( $u_address) && !empty( $u_phone)){
            $sql = "INSERT INTO login_info (email,u_name,address,phone,pass) VALUES ('$u_email','$u_name','$u_address','$u_phone','$u_password')";
            $result = $conn->query($sql);

            if ($result === TRUE) {
                header("Location: login.php");
            }
            else{
            echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }else{
           echo "Please...Enter all the fields"; 
        }
    }
