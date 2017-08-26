



<?php
session_start();
// if(isset($_SESSION['username'])){
//     echo "Welcome: ".$_SESSION['username'].", Your password is: ".$_SESSION['password'];   
// }
// else{
//     header("location:login.php");
// }
?>
<!--<a href="login.php?logout">Logout</a>-->





<!DOCTYPE html>
<html>
<head>
	<title>RESUME CREATION</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main-style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<section class="bgimage Home" id="Home">
 <header class="home-head">
 	<div class="container">
 		<div class="row col-md-6">
 		<div class="dropdown">
 		<a href=""><img src="" class="img-circle" id="logo"></a>
         <div class="dropdown-content">
    		<a href="#Profile">Profile</a>
            <a href="#">Active Users</a>
    		<a href="#">Signout</a>
  		</div>
  		</div>
  		<h1 class="inline"></h1>
 		</div>
 		<div class="col-md-6">
 		<ul class="nav navbar-nav navbar-right navlink">
			<li><a href="#Home">HOME</a></li>
			<li><a href="#Profile">CREATE PROFILE</a></li>
			<li><a href="#Contact">CONTACT</a></li>
			<form action="" class="search-form nav navbar-nav navbar-right">
                <div class="form-group has-feedback dropdown">
       				<input type="text" class="form-control" name="search" id="search" placeholder="search">
              		<span class="fa fa-search form-control-feedback" aria-hidden="true" style="color: black;"></span>
            	</div>
            </form>
			</ul>
 		</div>
 	</div>
 </header>
 <div class="container">
 <div class="row home-content">
 	<h1 class="home-decor">Do the Honors is a Profile Creation Website...</h1>
 	<h1 class="home-decor">Helps for Creating Profile and Web-Scraping...</h1>
 	<h1 class="home-decor">Searching many things Whereever it is...</h1>
 </div>
 </div>	
 </section>
 <section id="Profile" class="Profile">
 <div class="container">
    <h1 class="text-center">MY PROFILE</h1>
 	<form class="form-size">
     <div class="row col-md-12">
     	<img src="" class="image-circle">
     	<h1></h1>
     	</div>
     	<div class="row col-md-6">
     	<input type="name" name="" class="form-control input" placeholder="Enter your Firstname" id="name">
     	<h1></h1>
     	</div>
     	<div class="col-md-6">
     	<input type="name" name="" class="form-control input" placeholder="Enter your Lastname" id="name">
     	<h1></h1>
     </div>
     <div class="row col-md-6">
     <input type="text" name="" class="form-control input" placeholder="Enter your date of birth" id="dob">
     <h1></h1>
       </div>
       <div class="col-md-6">
     	<input type="contact" name="" class="form-control input" placeholder="Enter Contact Number" id="contact">
     	<h1></h1></div>
     	<div class="row col-md-12">
     		<textarea placeholder="Enter your Hobbies" id="hobby"></textarea>
     	  <h1></h1>	
     	</div>
     	<div class="row text-center">
     		<button class="btn btn-primary button">SUBMIT</button>
     	</div>
 	</form>
 	</div>
 </section>
 	<section class="contact bg-primary" id="Contact">
      <div class="container">
        <h2>I
          <i class="fa fa-heart"></i>
          new friends!</h2>
        <ul class="list-inline list-social">
          <li class="list-inline-item social-instagram">
            <a href="#">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
          <li class="list-inline-item social-facebook">
            <a href="#">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item social-google-plus">
            <a href="#">
              <i class="fa fa-google-plus"></i>
            </a>
          </li>
        </ul>
      </div>
    </section>
</body>
</html>