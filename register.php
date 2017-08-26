<?php
// Check Connection
include("config.php");

if (isset($_POST["username"])) {

	// Get data from form
		$f_username = $_POST["username"];
		$f_email_id = $_POST["email_id"];
		$f_password = $_POST["password"];

	// Select data from table
		$sql = "SELECT username FROM user WHERE username='$f_username'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		    
		    echo "Username already there!";
		    
		    }
	    else {
		    
		    $h_password = md5($f_password);
		    $sql = "INSERT INTO user (id, username, email, password) VALUES ('','$f_username', '$f_email_id', '$h_password')";
            
            if (mysqli_query($conn, $sql)) {
                echo "User Added!";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
		    
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
            <form class="form-signin" method="post" action="register.php">
                <span id="email" class="email"></span>
                 <input type="text" id="inputname" class="form-control" placeholder="Name" name="username" required autofocus>
                <input type="text" id="inputEmail" class="form-control" placeholder="Email address" name="email_id" required autofocus>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Submit</button>
            </form>
        </div>
    </div>
    </body>
    </html>