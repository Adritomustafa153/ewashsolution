<!DOCTYPE html>
<html>

<head>
    <title>My Utility</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
    <style>
        body{
	
	background-image: url("lun1.jpg");
    height: 100vh;
    width: auto;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
}
    </style>
</head>

<body>

    <div class="login-section">
        <div class="form">
            <h1>Create your account</h1>
            <form method="post" action="insert.php">
                <span class="userid">
                    <label for="u_id">Enter Your email</label><br>
                    <input type="text" id="email" name="email" placeholder="email"><br>
                </span>
                <span class="name">
                    <label for="name">Name</label><br>
                    <input type="text" id="Name" name="Name" placeholder="Name"><br>
                </span>

                <span class="Address">
                    <label for="Address">Address</label><br>
                    <input type="text" id="address" name="address" placeholder="address"><br>
                </span>
                <span class="phone">
                    <label for="phone">phone</label><br>
                    <input type="text" id="phone" name="phone" placeholder="phone"><br>
                </span>
                <span class="passwordS">
                    <label for="pass">Password</label><br>
                    <input type="Password" id="pass" name="password" placeholder="Password"><br>
                </span>
                <button class="btn" name="submit">submit</button>
                <p class="forgot-password"><a href="login.php">log in now</a> </p>

            </form>

            <p class="forgot-password"><a href="#">Forgot Password</a> </p>
        </div>

    </div>

</body>

</html>