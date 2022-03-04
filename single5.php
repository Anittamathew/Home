 

 <?php 
  session_start();
 include("db_connect.php");
 //include("architectheader.php");
 if(isset($_SESSION['lo_id']))
{
	$lo_id=$_SESSION['lo_id'];
	//var_dump($l_id);
}
$s="SELECT * FROM registration where lo_id=$lo_id";
	if(!$stmt=mysqli_query($con,$s))
	{
		die("prepare statement error1");
	}
	$result1=mysqli_fetch_array($stmt);
	$r_id=$result1['r_id'];
$result=array();
 ?>

 

 


<!--
A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="profile/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="profile/css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="profile/css/chocolat.css" type="text/css" media="screen"><!-- chocolate css for gallery light box-->
<!-- animation -->
<link href="profile/css/animate.css" rel="stylesheet" type="text/css" media="all">
<!-- //animation --> 
<link href="profile/css/style.css" rel="stylesheet" type="text/css" media="all" />






<link href="customers/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="customers/css/etalage.css" rel="stylesheet" type="text/css" media="all" />
<link href="customers/css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>


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










<script type="text/javascript" src="customers/js/jquery.min.js"></script>
<script type="text/javascript" src="customers/js/jquery.etalage.min.js"></script>
<script type="text/javascript" src="customers/js/jquery.flexisel.js"></script>
<script type="text/javascript" src="customers/js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" src="customers/js/jquery.wmuSlider.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
<!-- start menu -->     
<link href="customers/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="customers/js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- end menu -->
<!-- top scrolling -->
<script type="text/javascript" src="customers/js/move-top.js"></script>
<script type="text/javascript" src="customers/js/easing.js"></script>
   <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
	
</head>

<body>
  <div class="header-top">
	 <div class="wrap"> 
		<div class="logo">
			<a href="index.php"><img src="customers/images/logos.png" alt=""/></a>
	    </div>
	    <div class="cssmenu">
		   <ul>
			 <!--<li class="active"><a href="register.html">Sign up & Save</a></li> -->
			 <li><a href="customer.php">Menu</a></li> 
			 <li><a href="mycart.php">My Cart</a></li>
			 <li><a href="index.php">Sign Out</a></li> 
		   </ul>
		</div>
		<ul class="icon2 sub-icon2 profile_img">
			<li><a class="active-icon c2" href="#"> </a>
				<ul class="sub-icon2 list">
					<li><h3>Products</h3><a href=""></a></li>
					<!--<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>-->
				</ul>
			</li>
		</ul>
		<div class="clear"></div>
 	</div>
   </div>
   <div class="header-bottom">
   	<div class="wrap">
   		<!-- start header menu -->
		<ul class="megamenu skyblue">
		    <!-- <li><a class="color1" href="#">Architect</a></li> -->
			<li class="grid"><a class="color2" href="chatcon.php">Chat</a>
				</li>
				
  			  <!-- <li class="active grid"><a class="color4" href="#">Astrologer</a>-->
				
				</li>
				<li><a class="color6" href="customernew.php">Products</a>
					</li>
				<li><a class="color7" href="single3.php">Architects</a>

				</li>

					<li><a class="color7" href="services.php">Services</a>
				</li>
				<!--<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>shop</h4>
								<ul>
									<li><a href="shop.html">new arrivals</a></li>
									<li><a href="shop.html">men</a></li>
									<li><a href="shop.html">women</a></li>
									<li><a href="shop.html">accessories</a></li>
									<li><a href="shop.html">kids</a></li>
									<li><a href="shop.html">brands</a></li>
								</ul>	
							</div>	
							<div class="h_nav">
								<h4 class="top">my company</h4>
								<ul>
									<li><a href="shop.html">trends</a></li>
									<li><a href="shop.html">sale</a></li>
									<li><a href="shop.html">style videos</a></li>
									<li><a href="shop.html">accessories</a></li>
									<li><a href="shop.html">kids</a></li>
									<li><a href="shop.html">style videos</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>man</h4>
								<ul>
									<li><a href="shop.html">new arrivals</a></li>
									<li><a href="shop.html">men</a></li>
									<li><a href="shop.html">women</a></li>
									<li><a href="shop.html">accessories</a></li>
									<li><a href="shop.html">kids</a></li>
									<li><a href="shop.html">style videos</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>help</h4>
								<ul>
									<li><a href="shop.html">trends</a></li>
									<li><a href="shop.html">sale</a></li>
									<li><a href="shop.html">style videos</a></li>
									<li><a href="shop.html">accessories</a></li>
									<li><a href="shop.html">kids</a></li>
									<li><a href="shop.html">style videos</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="shop.html">login</a></li>
									<li><a href="shop.html">create an account</a></li>
									<li><a href="shop.html">create wishlist</a></li>
									<li><a href="shop.html">my shopping bag</a></li>
									<li><a href="shop.html">brands</a></li>
									<li><a href="shop.html">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>my company</h4>
								<ul>
									<li><a href="shop.html">trends</a></li>
									<li><a href="shop.html">sale</a></li>
									<li><a href="shop.html">style videos</a></li>
									<li><a href="shop.html">accessories</a></li>
									<li><a href="shop.html">kids</a></li>
									<li><a href="shop.html">style videos</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>popular</h4>
								<ul>
									<li><a href="shop.html">new arrivals</a></li>
									<li><a href="shop.html">men</a></li>
									<li><a href="shop.html">women</a></li>
									<li><a href="shop.html">accessories</a></li>
									<li><a href="shop.html">kids</a></li>
									<li><a href="shop.html">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
				</div>-->
				
				
		   </ul>
		   <div class="clear"></div>
     	</div>
       </div>
      
             <div class="main">
                <div class="wrap">
             	  <div class="content-top">

				  <div class="content-bottom">
				   <div class="box1">
				   	<?php
				$s="SELECT * FROM addcontracts";
				// var_dump($s);
				if(!$stmt=mysqli_query($con,$s))
				{
					die("prepare statement error1");
				}
				$d=array();
				while($row=mysqli_fetch_array($stmt))
				{
					$d[]=$row;
					     $image=$row['image'];
 						  $planname=$row['planname'];
 						  $cost=$row['cost'];
 						   $add_id=$row['add_id'];
				
 						 // $website=$row['website'];
 						 // $address=$row['address'];
 						 // $choose=$row['choose'];
 						 // $email=$row['email'];
 						// $a_id=$row['a_id'];
				
				?>
				    <div class="col_1_of_3 span_1_of_3"><a href="contractsview.php?add_id=<?php echo $add_id;?>">
				     <div class="view view-fifth">
				  	  <div class="top_box">
					  	<h3 class="m_1"><?php echo $planname;?></h3>
					  	<!--<p class="m_2">Lorem ipsum</p>-->
				         <div class="grid_img">
						   <div class="css3"><img src="images/<?php echo $image;?>" alt=""/></div>
					          <div class="mask">
	                       		<div class="info">Quick View</div>
			                  </div>
	                    </div>
                       <div class="price"><?php echo $cost;?></div>
					   </div>
					    </div>
					   <span class="rating">
				        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
				        <label for="rating-input-1-5" class="rating-star1"></label>
				        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
				        <label for="rating-input-1-4" class="rating-star1"></label>
				        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
				        <label for="rating-input-1-3" class="rating-star1"></label>
				        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
				        <label for="rating-input-1-2" class="rating-star"></label>
				        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
				        <label for="rating-input-1-1" class="rating-star"></label>&nbsp;
		        	  (45)
		    	      </span>
						 <ul class="list">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="#">Add To Bag </a>
								<ul class="sub-icon1 list">
									<li><h3>sed diam nonummy</h3><a href=""></a></li>
									<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clear"></div>
			    	</a></div>
			    	
<?php
}
?>



 <div class="clear"></div>
			    </div> 
			  </div>
			 </div>
        </div>
        <!--<div class="footer">
       	  <div class="footer-top">
       		<div class="wrap">
       			   <div class="col_1_of_footer-top span_1_of_footer-top">
				  	 <ul class="f_list">
				  	 	<li><img src="images/f_icon.png" alt=""/><span class="delivery">Free delivery on all orders over £100*</span></li>
				  	 </ul>
				   </div>
				   <div class="col_1_of_footer-top span_1_of_footer-top">
				  	<ul class="f_list">
				  	 	<li><img src="images/f_icon1.png" alt=""/><span class="delivery">Customer Service :<span class="orange"> (800) 000-2587 (freephone)</span></span></li>
				  	 </ul>
				   </div>
				   <div class="col_1_of_footer-top span_1_of_footer-top">
				  	<ul class="f_list">
				  	 	<li><img src="images/f_icon2.png" alt=""/><span class="delivery">Fast delivery & free returns</span></li>
				  	 </ul>
				   </div>
				  <div class="clear"></div>
			 </div>
       	 </div>-->
       	 <!--<div class="footer-middle">
       	 	<div class="wrap">
       	 		<div class="section group">
				<div class="col_1_of_middle span_1_of_middle">
					<dl id="sample" class="dropdown">
			        <dt><a href="#"><span>Please Select a Country</span></a></dt>
			        <dd>
			            <ul>
			                <li><a href="#">Australia<img class="flag" src="images/as.png" alt="" /><span class="value">AS</span></a></li>
			                <li><a href="#">Sri Lanka<img class="flag" src="images/srl.png" alt="" /><span class="value">SL</span></a></li>
			                <li><a href="#">Newziland<img class="flag" src="images/nz.png" alt="" /><span class="value">NZ</span></a></li>
			                <li><a href="#">Pakistan<img class="flag" src="images/pk.png" alt="" /><span class="value">Pk</span></a></li>
			                <li><a href="#">United Kingdom<img class="flag" src="images/uk.png" alt="" /><span class="value">UK</span></a></li>
			                <li><a href="#">United States<img class="flag" src="images/us.png" alt="" /><span class="value">US</span></a></li>
			            </ul>
			         </dd>
   				    </dl>
   				 </div>
				<div class="col_1_of_middle span_1_of_middle">
					<ul class="f_list1">
						<li><span class="m_8">Sign up for email and Get 15% off</span>
						<div class="search">	  
							<input type="text" name="s" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
							<input type="submit" value="Subscribe" id="submit" name="submit">
							<div id="response"> </div>
			 			</div><div class="clear"></div>
			 		    </li>
					</ul>
				</div>
				<div class="clear"></div>
			   </div>
       	 	</div>
       	 </div>

       	 <div class="copy">
       	   <div class="wrap">
       	   	  <p>© All rights reserved | Template by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></p>
       	   </div>
       	 </div>
       </div>-->
       <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
        <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
</body>
</html>