<?php
session_start();

include("db_connect.php");

if(isset($_SESSION['lo_id']))
{
	$lo_id=$_SESSION['lo_id'];
	//var_dump($l_id);
	
}

$res=array();
?>








<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Service Providers </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="admin/css/bootstrap1.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="admin/css/style5.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="admin/js/jquery-2.1.1.min1.js"></script> 
<!--icons-css-->
<link href="admin/css/font-awesome1.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--//skycons-icons-->

</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
							    <a href="index.php"><img src="customers/images/logos.png" alt=""/></a>
									<!--<img id="logo" src="" alt="Logo"/>--> 
					 								
							</div>
							<!--search-box-->
								<!--<div class="search-box">
									<form>
										<input type="text" placeholder="Search..." required="">	
										<input type="submit" value="">					
									</form>
								</div>//end-search-box-->
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right">
							<div class="profile_details_left"><!--notifications of menu start -->
								<!--<ul class="nofitications-dropdown">
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 3 new messages</h3>
												</div>
											</li>
											<li><a href="#">
											   <div class="user_img"><img src="images/p4.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											</a></li>
											<li class="odd"><a href="#">
												<div class="user_img"><img src="images/p2.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor </p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											</a></li>
											<li><a href="#">
											   <div class="user_img"><img src="images/p3.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											</a></li>
											<li>
												<div class="notification_bottom">
													<a href="#">See all messages</a>
												</div> 
											</li>
										</ul>
									</li>
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 3 new notification</h3>
												</div>
											</li>
											<li><a href="#">
												<div class="user_img"><img src="images/p5.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											 </a></li>
											 <li class="odd"><a href="#">
												<div class="user_img"><img src="images/p6.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li><a href="#">
												<div class="user_img"><img src="images/p7.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li>
												<div class="notification_bottom">
													<a href="#">See all notifications</a>
												</div> 
											</li>
										</ul>
									</li>	
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">9</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 8 pending task</h3>
												</div>
											</li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Database update</span><span class="percentage">40%</span>
													<div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													<div class="bar yellow" style="width:40%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
												   <div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													 <div class="bar green" style="width:90%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
													<div class="clearfix"></div>	
												</div>
											   <div class="progress progress-striped active">
													 <div class="bar red" style="width: 33%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
												   <div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													 <div class="bar  blue" style="width: 80%;"></div>
												</div>
											</a></li>
											<li>
												<div class="notification_bottom">
													<a href="#">See all pending tasks</a>
												</div> 
											</li>
										</ul>
									</li>	
								</ul>
								<div class="clearfix"> </div>-->
							</div>
							<!--notification menu end -->
							<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="images/p1.png" alt=""> </span> 
												<div class="user-name">
													<p>3A</p>
													<span>Administrator</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<!--<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
											<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>--> 
											<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
<!-- /script-for sticky-nav -->
<!--inner block start here-->


<div class="inner-block">
    <div class="product-block">
    	<div class="pro-head">
    		<h2>Service Providers</h2>
    	</div>

<?php
	$q="SELECT * FROM service_provider INNER JOIN login on service_provider.lo_id=login.lo_id";

	  if(!$stmt=mysqli_query($con,$q)) 
	  {
	  	echo "prepare statement error";
	  }
	  $d=array();
	  while($row=mysqli_fetch_array($stmt))
	  {
	  	$d[]=$row;
	  	$companyname=$row['companyname'];
	  	$image=$row['image'];
	  	$phone=$row['phone'];
	  	$website=$row['website'];
	  	$address=$row['address'];
	   // $choose=$row['choose'];
	    $lo_id=$row['lo_id'];
	    // $add_id=$row['add_id'];
	 	// $approve=$row['l_approve'];
   //      $l_status=$row['l_status'];
	  
	?>



    	<div class="col-md-3 product-grid">
    		<div class="product-items">
	    		    <div class="project-eff">
						<div id="nivo-lightbox-demo"> <p> <a href="images/<?php echo $image;?>"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
							<img class="img-responsive" src="images/<?php echo $image;?>" alt="">
					</div>
	    		<div class="produ-cost">
	    			<h4><?php echo $companyname;?></h4>
	    			<h4><?php echo $website;?></h4>
	    			<h5><?php echo $address;?></h5>
	    			<h6><?php echo $phone;?></h6>
	    			<!--<h6><?php echo $choose;?></h6>--> 


	    			<a href="archapprove.php?lo_id=<?php echo $lo_id;?>" style="a:visited * {
  color: black;
}"><span class="glyphicon glyphicon-thumbs-up" style="color: white;size: 30px;"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    			<a href="archdisapprove.php?lo_id=<?php echo $lo_id;?>"><span class="glyphicon glyphicon-thumbs-down" style="color: white;size: 30px;"></span></a>

	    		</div>
    		</div>
    	</div>
    	<?php
    }
    ?>

      <div class="clearfix"> </div>
    </div>
</div>

<!--inner block end here-->
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
			<script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
				<script type="text/javascript">
				$(document).ready(function(){
				    $('#nivo-lightbox-demo a').nivoLightbox({ effect: 'fade' });
				});
				</script>

<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2022 Home.Your Building Partner <a href="index.php">| Home</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div><!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="adminprofile.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
		        
		          <li><a href="allregistration.php"><i class="fa fa-clipboard"></i><span>Registrations</span></a></li>
		          <li><a href="customerlist.php"><i class="fa fa-clipboard"></i><span>Customers</span></a></li>
		       
		        <li><a href="#"><i class="fa fa-home"></i><span>Contractors</span><span class="fa fa-angle-right" style="float: right"></span></a>
		      	<ul id="menu-academico-sub" >
		         	<li id="menu-academico-boletim" ><a href="contract.php">Contractors</a></li>
		         	<li id="menu-academico-avaliacoes" ><a href="contractsadded.php">Works</a></li> 
			    </ul>
		      </li>
		         
		         <li><a href="#"><i class="fa fa-home"></i><span>Architects</span><span class="fa fa-angle-right" style="float: right"></span></a>
		      	<ul id="menu-academico-sub" >
		         	<li id="menu-academico-boletim" ><a href="architectapprove.php">Architects</a></li>
		         	<li id="menu-academico-avaliacoes" ><a href="plan.php">Plans</a></li> 
			    </ul>
		      </li>
		     <li><a href="#"><i class="fa fa-home"></i><span>Services</span><span class="fa fa-angle-right" style="float: right"></span></a>
		      	<ul id="menu-academico-sub" >
		         	<li id="menu-academico-boletim" ><a href="serviceprovideradmin.php">Service Providers</a></li>
		         	<li id="menu-academico-avaliacoes" ><a href="servicesadmin.php">Services</a></li> 
			    </ul>
		      </li>
		     <li><a href="#"><i class="fa fa-shopping-cart"></i><span>Products</span><span class="fa fa-angle-right" style="float: right"></span></a>
		         	 <ul id="menu-academico-sub" >
		         	    <li id="menu-academico-boletim" ><a href="materialapprove.php">Material Providers</a></li><li id="menu-academico-avaliacoes" ><a href="product.php">Product</a></li> 
			         </ul>
		     </li>         
		      </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="admin/js/jquery.nicescroll1.js"></script>
		<script src="admin/js/scripts1.js"></script>
		<!--//scrolling js-->
<script src="admin/js/bootstrap1.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
