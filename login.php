<?php
session_start();
// Check Connection
include("config.php");

if (isset($_GET["logout"])) {
	// remove all session variables
		session_unset(); 
	// destroy the session 
		session_destroy();
	echo "You have logged Out !";
}

if (isset($_POST["username"])) {

	// Get data from form
		$f_username = $_POST["username"];
		$f_password = $_POST["password"];

	// Select data from table
		$sql = "SELECT * FROM user WHERE username='$f_username'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		        $db_username = $row["username"];
		        $db_password = $row["password"];
		    }
		} else {
		    echo "No Records Found";
		}

	// Validate password and create session
        $h_password = md5($f_password);
		if ($h_password == $db_password) {
				$_SESSION['username'] = $db_username;
				$_SESSION['password'] = $db_password;
				header("location: home.php");
			}

		
		else{
			echo "Username or Password Incorrect !, Retry";
		}

}

// Close connection
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="img/download.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="post" action="login.php">
                <span id="email" class="email"></span>
                <input type="text" id="inputEmail" class="form-control" name="username" placeholder="username" required autofocus>
                <input type="text" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            </form>
            <a href="forgot-password.html" class="forgot-password">
                Forgot the password?
            </a> <span class="new-user">-</span>
             <a href="register.html" class="new-user">
                Are u a new-user?
            </a>
        </div>
    </div>
    </body>
    </html>