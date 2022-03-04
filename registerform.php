<?php
session_start();
require "headerpart.php";
?>

 <?php 

include('db_connect.php');
if(isset($_POST['register']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $confirmpassword=$_POST['confirmpassword'];
  $type=$_POST['choose'];
  $approve='not approve';
  $b="INSERT INTO login(lo_email,lo_password,lo_rpassword,lo_type,l_approve)VALUES('$email','$password','$confirmpassword','$type','$approve')";
  
  if($con->query($b))

  {
    $id=mysqli_insert_id($con);

    $q="INSERT INTO registration(lo_id,name,email,type)VALUES($id,'$name','$email','$type')";
   //var_dump($q,$b);
  //   var_dump($q);
  // exit();
    if(mysqli_query($con,$q))

    {

     
	  if ($type=='Customer' || $type=='Architect' || $type=='Material Provider' || $type=='Contractor' || $type=='Service Provider' ){
		
		echo "<script>alert('U r Successfully Registered');window.location.href='loginform.php';</script>";
		}

      elseif($type=='Architect' || $type=='Material Provider' || $type=='Contractor' || $type=='Service Provider' ){
		echo "<script>alert('U r Successfully Registered wait for admin approval');window.location.href='index.php';</script>";
	  }
	else{
		echo "<script>alert('Registration went Wrong');</script>";
		header("Location:registerform.php");
	}
  }
 }
}



?>


<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Register Form </title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Stylish Register Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="registartion/css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="registartion/css/font-awesome.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Niconne&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body style="background: url(images/background.jpeg) no-repeat center fixed;">
	<!-- header -->

	<h1>
		<!-- <span>S</span>tylish
		 --><span>R</span>egister
		<span>H</span>ere</h1>
	<!-- //header -->
	<!-- content -->
	<div class="main-content-agile">
		<div class="sub-main-w3">
			<form action="#" method="post">
			<div class="form-style-agile">
					<label>Choose Type</label>
					<!-- <div class="pom-agile"> -->
						<br>
						<span class="fa fa-user-o" aria-hidden="true"></span>
						<select placeholder="" name="choose" type="select" required="" style="flex-basis: 93%;
        -webkit-flex-basis: 93%;">
							<option>Customer</option>
							<option>Service Provider</option>
							<option>Material Provider</option>
							<option>Architect</option>
							<option>Contractor</option>
						</select>
					<!-- </div> -->
				</div>
				<div class="form-style-agile">
					<label>Your Name</label>
					<div class="pom-agile">
						<span class="fa fa-user-o" aria-hidden="true"></span>
						<input placeholder="Your Name" name="name" type="text" required="">
					</div>
				</div>
				<div class="form-style-agile">
					<label>Email</label>
					<div class="pom-agile">
						<span class="fa fa-envelope" aria-hidden="true"></span>
						<input placeholder="Email" name="email" type="email" required="">
					</div>
				</div>

				<div class="form-style-agile">
					<label>Password</label>
					<div class="pom-agile">
						<span class="fa fa-key" aria-hidden="true"></span>
						<input placeholder="Password" name="password" type="password" id="password1" required="">
					</div>
				</div>
				<div class="form-style-agile">
					<label>Confirm Password</label>
					<div class="pom-agile">
						<span class="fa fa-key" aria-hidden="true"></span>
						<input placeholder="Confirm Password" name="confirmpassword" type="password" id="password2" required="">
					</div>
				</div>
				<div class="sub-agile">
					<input type="checkbox" id="brand1" value="">
					<label for="brand1">
						<span></span>I Accept to the Terms & Conditions</label>
				</div>
				<input type="submit" value="Register" name="register">
			
			    <input type="reset" value="Cancel" name="cancel">
			</form>
			<div>
		</div>
	</div>
		<div class="img-w3layouts">
			<img src="images/1.png" alt="">
		</div>
	</div>
	<!-- //content -->
	<!-- footer -->
	<div class="footer">
		<h2>&copy; Powered By Home:Your Building Partner. All rights reserved | 
			<a href="index.php">Home</a>
		</h2>
	</div>
	<!-- //foote r-->
   

	<!-- password-script -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script>
		 
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}

	</script>
	<!-- //password-script -->

</body>

</html> 