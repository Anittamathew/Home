

 



<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->





<?php
session_start();
// require "orderheader.php";
if(isset($_GET['addpro_id']))
{
	$addpro_id=$_GET['addpro_id'];
}
if(isset($_GET['r_id']))
{
	$r_id=$_GET['r_id'];
}
if(isset($_GET['lo_id']))
{
	$lo_id=$_GET['lo_id'];
}
if(isset($_GET['productname']))
{
	$productname=$_GET['productname'];
}
?>

 <?php 

include('db_connect.php');
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $address=$_POST['address'];
  $country=$_POST['country'];
  $city=$_POST['city'];
  $state=$_POST['state'];
  $phone=$_POST['phone'];
  $pincode=$_POST['pincode'];
  $seen='unread';
  $b="INSERT INTO buynow(addpro_id,r_id,lo_id,productname,name,email,address,country,city,state,phone,pincode,seen)VALUES($addpro_id,$r_id,$lo_id,'$productname','$name','$email','$address','$country','$city','$state','$phone','$pincode','$seen')";
 //var_dump($b);
  
    if(mysqli_query($con,$b))

    {
      
      $_SESSION['msg']="Successfully Ordered....";
    }
  }





?>






<!DOCTYPE HTML>
<html>
<head>
<title>Home Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="customers/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="customers/css/etalage.css" rel="stylesheet" type="text/css" media="all" />
<link href="customers/css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style3.css" rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
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
<body style="background: url(images/background.jpeg) no-repeat center fixed;">
  <div class="header-top">
	 <div class="wrap"> 
		<div class="logo">
			<a href="index.php"><img src="customers/images/logos.png" alt=""/></a>
	    </div>
	    <div class="cssmenu">
		   <ul>
			 <li class="active"><a href="customer.php">previous</a></li> 
			 <li><a href="customer.php">Menu</a></li> 
			 <li><a href="mycart.php">My Cart</a></li> 
			 <li><a href="loginform.php">Sign out</a></li> 
		   </ul>
		</div>
		<ul class="icon2 sub-icon2 profile_img">
			<li><a class="active-icon c2" href="#"> </a>
				<ul class="sub-icon2 list">
					
					<li><p><a href=""></a></p></li>
				</ul>
			</li>
		</ul>
		<div class="clear"></div>
 	</div>
   </div>
  <!-- <div class="header-bottom">
   	<div class="wrap">-->
   		<!-- start header menu -->
		<!--<ul class="megamenu skyblue">-->
		    <!-- <li><a class="color1" href="#">Architect</a></li> -->
			<!--<li class="grid"><a class="color2" href="single3.php">Plans</a>
				</li>-->
  			   <!--<li class="active grid"><a class="color4" href="single2.php">Vastu</a>
				
				</li>
				<li><a class="color6" href="single4.php">Products</a>
				<div class="megapanel">
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
				<!--</li>
				<li><a class="color7" href="single5.php">Contractors</a>	
				</li>
				
		   </ul>
		   <div class="clear"></div>
     	</div>
       </div>-->

       <div class="index-banner">
       	  <div class="wmuSlider example1" style="height: 560px;">
			 
                <a class="wmuSliderPrev">Previous</a><a class="wmuSliderNext">Next</a>
                <ul class="wmuSliderPagination">
                	<li><a href="#" class="">0</a></li>
                	<li><a href="#" class="">1</a></li>
                	<li><a href="#" class="wmuActive">2</a></li>
                	<li><a href="#">3</a></li>
                	<li><a href="#">4</a></li>
                  </ul>
                 <a class="wmuSliderPrev">Previous</a><a class="wmuSliderNext">Next</a><ul class="wmuSliderPagination"><li><a href="#" class="wmuActive">0</a></li><li><a href="#" class="">1</a></li><li><a href="#" class="">2</a></li><li><a href="#" class="">3</a></li><li><a href="#" class="">4</a></li></ul></div>
            	 <script src="js/jquery.wmuSlider.js"></script> 
				 <script type="text/javascript" src="js/modernizr.custom.min.js"></script> 
						<script>
       						 $('.example1').wmuSlider();         
   						</script> 	           	      
             </div>




             <!-- header close-->



<h1 style="color: white">Order Here</h1>
	<div class="bg-w3layouts-main">
		<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fill out the form to enroll our service</h2>
		<div class="form-content-agileinfo">
			<form action="#" method="post">
				<div class="main-divs-agileits-w3layouts">
					<div class="bottom-w3-agileits-space form-text1">
						<input type="text" name="name" placeholder="Full Name" required="">
					</div>
					<div class="bottom-w3-agileits-space form-text2">
						<input type="email" name="email" placeholder="Email" required="">
					</div>
				</div>
				<div class="bottom-w3-agileits-space">
					<input type="text" name="address" placeholder="Address" required="">
				</div>
				<div class="bottom-w3-agileits-space form-text1">
					<select id="country1" class="frm-field required sect" name="country">
						<option value="India">India</option>
						<option value="Pakisthan">Pakisthan</option>
						<option value="Brazil">Brazil</option>
						<option value="Canada">Canada</option>
						<option value="Denmark">Denmark</option>
						<option value="France">France</option>
					</select>
				</div>
				<div class="main-divs-agileits-w3layouts">
					<div class="bottom-w3-agileits-space form-text1">
						<input type="text" name="city" placeholder="City" required="">
					</div>
					<div class="bottom-w3-agileits-space form-text2">
						<input type="text" name="state" placeholder="State" required="">
					</div>
				</div>

				<div class="main-divs-agileits-w3layouts">
					<div class="bottom-w3-agileits-space form-text1">
						<input type="text" name="phone" placeholder="Phone" required="">
					</div>
					<div class="bottom-w3-agileits-space form-text2">
						<input type="text" name="pincode" placeholder="Pincode" required="">
					</div>
				</div>
				
				<div class="bottom-text-wthree">
					<h6>May we send the order details to the mailing address that you provided?</h6>
					<ul class="radio-section">
						<li>
							<input type="radio" id="a-option" name="selector1">
							<label for="a-option">Yes</label>
							<div class="check"></div>
						</li>
						<li>
							<input type="radio" id="b-option" name="selector1">
							<label for="b-option">No</label>
							<div class="check">
								<div class="inside"></div>
							</div>
						</li>
					</ul>
					<div class="clear"></div>
				</div>
				<input type="submit" value="Order Now" name="submit">
				<?php 
				if(isset($_SESSION['msg']))
				{
					echo $_SESSION['msg'];
					//$_SESSION['msg']='';
					unset($_SESSION['msg']);
				}

				?> 
		 		<div class="clear"></div>
			</form>
		</div>
	</div>


            


        <!-- footer start-->
       <!-- <div class="footer">
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
       	 </div>
       	 <div class="footer-middle">
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
       	 </div>-->

       	 <div class="copy">
       	   <div class="wrap">
       	   	  <p>© All rights reserved | <a href="index.php"> Home</a></p>
       	   </div>
       	 </div>
       </div>
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