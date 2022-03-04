<?php


include("db_connect.php");
if(isset($_SESSION['lo_id']))
{
	$lo_id=$_SESSION['lo_id'];
	// var_dump($l_id);
}
$s="SELECT * FROM material_provider where lo_id=$lo_id";
	if(!$stmt=mysqli_query($con,$s))
	{
		die("prepare statement error1");
	}
	$result1=mysqli_fetch_array($stmt);
	$m_id=$result1['m_id'];

	// $t="SELECT * FROM booknow where lo_id=$lo_id";
	// var_dump($t);
	// if(!$stmt=mysqli_query($con,$t))
	// {
	// 	die("prepare statement error1");
	// }
	// $result2=mysqli_fetch_array($stmt);
	//---$r_id=$result2['r_id'];
	// $lo_id=$result2['lo_id'];
	// echo $r_id;
$result=array();


	//echo $a_id;

?> 
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Home</title>
	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Exertion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<!-- <script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script> -->
	<!-- //Meta Tags -->
	<!-- Style-sheets -->
	<link href="hd/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="hd/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="hd/css/fontawesome-all.css" rel="stylesheet">
	<!--// Style-sheets -->
		<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
	<!--web-fonts-->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800" rel="stylesheet">
	<!--//web-fonts-->
</head>

<body>
	<!-- banner -->
	<!-- <section class="banner"> -->
		<!-- header -->



<header>
		<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container">
			<a class="navbar-brand" href="index.php">Home</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
			    aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<!--<a class="nav-link" href="index.php">Home
							<span class="sr-only">(current)</span>
						</a>-->
					</li>
					<li class="nav-item">
						<a class="nav-link" href="addproduct.php">Add materials</a>
					</li>
					<!-- <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
						    aria-expanded="false">
							Pages
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item text-center" href="projects.html">Projects</a>
							<a class="dropdown-item text-center" href="typography.html">Typography</a>
						</div>
					</li> -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
						    aria-expanded="false">
							Notifications<span class="badge badge-light">
								<?php 
							$totalno1= "SELECT * FROM buynow WHERE lo_id='$lo_id' AND seen='unread'";
							if ($result1= mysqli_query($con, $totalno1))
                            {
                            	$rowcount1=mysqli_num_rows($result1);
                            	mysqli_free_result($result1);

                            }
                            echo $rowcount1;
							?></span>
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<?php
								$m3="SELECT * FROM buynow WHERE lo_id='$lo_id' AND seen='unread'";
								if(!$stmt=mysqli_query($con,$m3))
				{
					die("prepare statement error1");
				}
				$d=array();
				while($row1=mysqli_fetch_array($stmt))
				{
					$d[]=$row1;
					     
 						 $productname=$row1['productname'];
 						 $name=$row1['name'];
 						 $email=$row1['email'];
 						 $buy_id=$row1['buy_id'];
							?>
							<a class="dropdown-item text-center" href="" style="color:blue;"><?php echo $name;?>&nbsp;&nbsp;&nbsp;<?php echo $email;?>&nbsp;&nbsp;&nbsp;<?php echo $productname;?></a>
							<a class="dropdown-item text-center" href="matnotread.php?buy_id=<?php echo $buy_id;?>"><button class="btn btn-primary">view</button></a>
							<?php
								}
							?>
						</div>
					</li>
						<li class="nav-item dropdown">

						
						<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
						    aria-expanded="false" >
							chat<span class="badge badge-light">
								<?php 
							$totalno= "SELECT * FROM chat_message WHERE to_id='$lo_id' and status=0";
							if ($result= mysqli_query($con, $totalno))
                            {
                            	$rowcount=mysqli_num_rows($result);
                            	mysqli_free_result($result);

                            }
                            echo $rowcount;
							?> </span></a>
                         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<?php

				
                       	$s="SELECT * FROM chat_message WHERE to_id='$lo_id' and status=0";
                       	//var_dump($s);
				//var_dump($s);
              if(!$stmt=mysqli_query($con,$s))
				{
					die("prepare statement error1");
				}
				$d=array();
				while($row5=mysqli_fetch_array($stmt))
				{
					$d[]=$row5;
					     
 						 $message=$row5['message'];
 						 $from_user=$row5['from_user'];
 						 $from_id=$row5['from_id'];
 						 $to_user=$row5['to_user'];
 						 $to_id=$row5['to_id'];

 						 //echo $r_id;
						//$lo_id=$row['lo_id'];
 						 $time=$row5['time'];

?>
<a class="text-center" style="color: #ed1a3a;font-size: 15px;">&nbsp&nbsp<?php echo $from_user;?>&nbsp&nbsp<?php echo $time;?><br>&nbsp&nbsp<a type="button" class="btn btn-primary" href="readarc.php?lo_id=<?php  echo $lo_id?>&name=<?php  echo $from_user?>&a_id=<?php  echo $from_id?>&username=<?php echo $to_user?>&r_id=<?php  echo $to_id?>">chat</a><br><br>
						
						<?php
					}
					
						?>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="logout.php">Log out</a>
					</li>
				</ul>
				<!--<form action="#" method="post" class="form-inline my-2 my-lg-0 search mx-lg-auto">
					<input class="form-control mr-sm-2" type="search" placeholder="Search here..." name="Search" required="">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>-->
			</div>
			</div>
		</nav>
		
		</header>
	<!-- </section> -->
</body>
</html>