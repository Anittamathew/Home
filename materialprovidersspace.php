 <?php 
  session_start();
 include("db_connect.php");
 include("materialheader.php");
 if(isset($_SESSION['lo_id']))
{
	$lo_id=$_SESSION['lo_id'];
	//var_dump($l_id);
}

 //$s="SELECT * FROM registration WHERE l_id=$l_id";
		//if(!$stmt=mysqli_query($con,$s))
 		//{
// 			die("prepare statement error1");
// 		}
// 		$result=mysqli_fetch_array($stmt);
		


 ?> 



<?php
include('db_connect.php');
if(isset($_POST['send']))
{
    $image=$_FILES['image']['name'];
  $companyname=$_POST['companyname'];
  $website=$_POST['website'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];
  // $choose=$_POST['choose'];
  // $lo_id=$result['lo_id'];

  $q="INSERT INTO material_provider(lo_id,image,companyname,phone,website,address)VALUES($lo_id,'$image','$companyname','$phone','$website','$address')";
  // var_dump($q);
  // exit();

    if(mysqli_query($con,$q))

    {
        move_uploaded_file($_FILES['image']['tmp_name'],$image);
      $_SESSION['msg']="Successfully Registered....";
    }
  }

$s="SELECT * FROM material_provider INNER JOIN registration on material_provider.lo_id=registration.lo_id WHERE material_provider.lo_id=$lo_id";
		if(!$stmt=mysqli_query($con,$s))
		{
			die("prepare statement error1");
		}
		$result=mysqli_fetch_array($stmt);
		


if(isset($_POST['edit']))
{
  $companyname=$_POST['companyname'];
  $website=$_POST['website'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];
   // $email=$_POST['email'];
  $qu="UPDATE material_provider SET companyname='$companyname',website='$website',phone='$phone',address='$address'";

 $result=$con->query($qu);
  if($result)
  {
     // echo "<script>window.location.replace('astrologerspace.php');</script>";
    header("Location:materialprovidersspace.php");
  }
}






?>







<!-- <?php
// session_start();
// require "headerpart.php";
?>

 -->



<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Material Provider Home</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Vitae Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="profile/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="profile/css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="profile/css/chocolat.css" type="text/css" media="screen"><!-- chocolate css for gallery light box-->
<!-- animation -->
<link href="profile/css/animate.css" rel="stylesheet" type="text/css" media="all">
<!-- //animation --> 
<link href="profile/css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="profile/js/jquery-1.11.1.min.js"></script>
<script src="profile/js/bootstrap.js"></script>
<script src="profile/js/controls.js"></script>
<script src="profile/js/easing.js"></script>
<script src="profile/js/jarallax.js"></script>
<script src="profile/js/jquery.chocolat.js"></script>
<script src="profile/js/jquery.filterizr.js"></script>

<script src="profile/js/SmoothScroll.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- onlinefonts -->
<link href="//fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200,300,400,700" rel="stylesheet">
<!-- //onlinefonts -->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" style="background-color: #000;"> 
	<div class="banner-text-w3ls">	
		  <div class="header1" id="home"> 
			
		
	<div class="about" id="about">
		 <div class="container">	
				<!--<h3 class="w3l-heading">About me</h3>-->
			
			<!-- <div class="col-md-4 w3-about-top">
                        <input type="file" name="image1" accept=".gif, .jpg, .png" />
               
				<img src="..//new project/images/pro.jpg" class="img-responsive" alt="about-img"/>
                        <input type="file" name="image1" accept=".gif, .jpg, .png" /> 
</div>-->
			<div class="col-md-8 w3l-about" style="margin-top: 20%;">
					<div class="w3ls-heading">
						<h2></h2>
					</div>
					
					<div class="w3l-button">
						<a href="#" data-toggle="modal" data-target="#myModal">profile</a>
					</div>
					<br>
					<div class="w3l-button">
						<a href="deletearchitect.php?r_id=<?php echo $result['r_id'];?>">remove account</a>
					</div>
			</div>	
			<div class="clearfix"></div>
		</div>
	 </div> 
</div>
		
	</div>
	<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						<h4 class="modal-title">Vitae</h4>
				</div> 
				<form method="post">
				<div class="modal-body">
					<div class="about"> 
						
						<div class="col-md-8 col-sm-8 col-xs-8 about-right wthree">
							<h3>Hi, i'm <span><input type="text" name="name" value="<?php echo $result['name'];?>" style="border: none;"> </span></h3>
							<h4>MATERIAL PROVIDER </h4>
							<ul class="address">
								<li>
									<ul class="agileits-address-text ">
										<li><b>NAME</b></li>
										<li><input type="text" name="companyname" value="<?php echo $result['companyname'];?>" style="border: none;"></li>
									</ul>
								</li>
								<li>
									<ul class="agileits-address-text">
										<li><b>PHONE </b></li>
										<li><input type="text" name="phone" value="<?php echo $result['phone'];?>" style="border: none;"></li>
									</ul>
								</li>
								<li>
									<ul class="agileits-address-text">
										<li><b>PLACE</b></li>
										<li><input type="text" name="address" value="<?php echo $result['address'];?>" style="border: none;"></li>
									</ul>
								</li>

								<li>
									<ul class="agileits-address-text">
										<li><b>EMAIL </b></li>
										<li><a href="mailto:example@mail.com"><input type="text" name="email" value="<?php echo $result['email'];?>" style="border: none;"></a></li>
									</ul>
								</li>
								<li>
									<ul class="agileits-address-text">
										<li><b>WEB</b></li>
										<li><a href="http://"<?php echo $result['website'];?>.com><input type="text" name="website" value="<?php echo $result['website'];?>" style="border: none;"></a></li>
									</ul>
								</li>
								<li class="w3_agile-contact jarallax"><input type="submit" value="Done" name="edit"></li>
								<div class="clearfix"> </div>
								<!-- <li>
									<ul class="w3_agile-contact jarallax">
										<li><input type="submit" value="Edit" name="edit"></li>
										<li><input type="submit" value="Delete" name="delete"></li>
									</ul>
								</li> -->
							</ul> <div class="clearfix"> </div>
						</div> 
					<div class="clearfix"> </div>
				</div>
			</div>
		</form>
		<div class="clearfix"> </div>
		</div>
	</div>
	<!-- </div> -->
</div>

<div class="agile-border">
	<span></span>
</div>
<div class="sidenav" style="margin-top: 4%">
 <div id="contact" class="w3_agileits-contact"> 
		<!-- <div class="container">-->
				<h3 class="w3l-heading">contact</h3>
				 <div class="w3_agile-contact jarallax"> 
					<form action="#" method="post" enctype="multipart/form-data">
						<p style="color:#e2004d";>Upload a valid proof:</p>
						 <input type="file" name="proof" accept=".gif, .jpg, .png" placehpilder="proof" required>
						 <p style="color:#e2004d";>Upload your image:</p>
						 <input type="file" name="image" accept=".gif, .jpg, .png" placehpilder="photo" required>

						<input type="text" placeholder="Company Name" name="companyname" class="name" title="Companyname must be between 3 and 15 characters" pattern="^[a-z0-9_-]{3,15}$"  required="">
						<input type="text" placeholder="Phone Number" name="phone" class="name" pattern="[6-9]{1}[0-9]{9}" title="Phone number with 6-9 and remaing 9 digit with 0-9" required="">
						<input type="text" placeholder="Website" name="website" class="email" required >
						<textarea name="address" placeholder="Address"></textarea>
						<!--<textarea name="choose" placeholder="Why you choose me?"></textarea>-->
						<input type="submit" value="Done" name="send">
					</form>
					<!-- <h4>or</h4>
					<a href="mailto:info@example.com">info@example.com</a>
					<h5>+12 345 6789</h5>
					<ul class="social-icons-w3_agile">
						<li><a href="#" class="fa fa-facebook icon icon-border facebook"> </a></li>
						<li><a href="#" class="fa fa-twitter icon icon-border twitter"> </a></li>
						<li><a href="#" class="fa fa-google-plus icon icon-border googleplus"> </a></li>
					</ul> -->
				</div> 
		<!-- </div>	 -->
	<!-- </div> -->
</div>	
<!-- footer -->
<div class="agileits_w3layouts-footer text-center">
	<div class="container">
		<p>&copy; 2022 Home. All rights reserved | Design by <a href="index.php">Home</a></p>
	</div>
</div>	
<!-- //footer -->	
<!-- //contact -->
<!-- PopUp-Box-JavaScript -->
		<script src="js/jquery.chocolat.js"></script>
		<script type="text/javascript">
			$(function() {
				$('.filtr-item a').Chocolat();
			});
		</script>
	<!-- //PopUp-Box-JavaScript -->	
	<!-- fliter-JavaScript -->
		<script src="js/jquery.filterizr.js"></script>
		<script src="js/controls.js"></script>
		<script type="text/javascript">
			$(function() {
				$('.filtr-container').filterizr();
			});
		</script>
	<!-- //fliter-JavaScript -->
<script src="js/jarallax.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript">
	/* init Jarallax */
	$('.jarallax').jarallax({
		speed: 0.5,
		imgWidth: 1366,
		imgHeight: 768
	})
</script>
<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/easing.js"></script>
<!-- //here ends scrolling icon -->
	

</body>
</html>