

<!DOCTYPE html>
<html>
<head>
	<title>HomePage</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main-style.css">
</head>
<body>
	<header class="head-tag">
    <div class="container">
		<div class="row col-md-12">
			<ul class="nav navbar-nav navbar-right navlink">
			<li><a href="">Home</a></li>
			<li><a href="login.php">LogIn</a></li>
			<li><a href="register.php">SignUp</a></li>
			<?php
			if(isset($_SESSION['username'])){
			?>
			<li><a>Welcome: <?php echo $_SESSION["username"]; ?> !</a></li>
			<li><a href="login.php?logout">Logout</a></li>
			<?php
			}
			?>
			</ul>
		</div>
    </div>
	</header>
    <section class="cover-photo">
    <div class="container">
	<div class="text-center align-h1">
    <h1 class="">Create, Share and Store your PROFILE for free online</h1>
    <h1> Jobseeker's friendly website </h1> 
    <h1 class="head-link"><a href="register.php">CREATE PROFILE</a></h1>
	</div>
    </div>
    </section>
</body>
</html>