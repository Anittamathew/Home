<?php 
  session_start();
 include("db_connect.php");
 //include("architectheader.php");
 if(isset($_SESSION['lo_id']))
{
	$lo_id=$_SESSION['lo_id'];
	//var_dump($lo_id);
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



<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Customer Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="customers/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- <link href="customers/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> -->
<!-- <link href="customers/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" /> -->
<link href="customers/css/etalage.css" rel="stylesheet" type="text/css" media="all" />
<link href="customers/css/form.css" rel="stylesheet" type="text/css" media="all" />
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
<body>
  <div class="header-top">
	 <div class="wrap"> 
		<div class="logo">
			<a href="index.php"><img src="customers/images/logos.png" alt=""/></a>
	    </div>
	    <div class="cssmenu">
		   <ul>
			 <!--<li class="active"><a href="registerform.php">Sign up & Save</a></li> -->
			 <!--<li><a href="shop.html">Store Locator</a></li> 
			 <li><a href="loginform.php">My Account</a></li>--> 
			 <li><a href="index.php">Sign out </a></li>
			 <a href="demo.php"><img src="images/cart3.png"></a>
			 <a href="wish.php"><img src="images/wish.png"></a> 
			 <!-- <li><a href="wish.php"><img src="images/wish.png"></a></li> -->
		   </ul>
		</div>
		
		<div class="clear"></div>
 	</div>
   </div>
   <div class="header-bottom">
   	<div class="wrap">
   		<!-- start header menu -->
		<ul class="megamenu skyblue">
		    <!-- <li><a class="color1" href="#">Architect</a></li> -->
		    <li class="grid"><a class="color2" href="chatmaterial.php">Chat</a>
				</li>
			<li class="grid"><a class="color2" href="single3.php">Architects</a>
				</li>
  			   <!--<li class="active grid"><a class="color4" href="demosingle2.php?lo_id=<?php echo $lo_id;?>">Vastu</a>
				
				</li>-->
				<!--<li class="grid"><a class="color2" href="chatastro.php">Chat</a>
				</li>
				<li class="grid"><a class="color2" href="chatarchite.php">chatarc</a>
				</li>-->				
				<!--<li class="grid"><a class="color2" href="chatcon.php">chatcon</a></li>-->
				<li><a class="color6" href="services.php">Services</a></li>

				<li><a class="color7" href="single5.php">Contractors</a>
					
				</li>
				<li><a class="color6" href="mycart.php">My Cart</a>
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
				

				 

	<a href="mycart.php"><span class="glyphicon glyphicon-shopping-cart"></span></a>
	
				
		   </ul>
		   <div class="clear"></div>
     	</div>
       </div>

       <div class="index-banner">
       	  <div class="wmuSlider example1" style="height: 560px;">
			  <!-- <div class="wmuSliderWrapper"> -->
				  <!-- <article style="position: relative; width: 100%; opacity: 1;">  -->
				   	<!-- <div class="banner-wrap"> -->
					   	<!-- <div class="slider-left"> -->
							<!-- <img src="images/banner1.jpg" alt=""/>  -->
						<!-- </div> -->
						 <!-- <div class="slider-right"> -->
						    <!-- <h1>Classic</h1> -->
						    <!-- <h2>White</h2> -->
						    <!-- <p>Lorem ipsum dolor sit amet</p> -->
						    <!-- <div class="btn"><a href="shop.html">Shop Now</a></div> -->
						 <!-- </div> -->
						 <!-- <div class="clear"></div> -->
					 <!-- </div> -->

					<!-- </article> -->
				   <!-- <article style="position: absolute; width: 100%; opacity: 0;">  -->
				   	 <!-- <div class="banner-wrap"> -->
					   	<!-- <div class="slider-left"> -->
							<!-- <img src="images/banner2.jpg" alt=""/>  -->
						<!-- </div>
						 <div class="slider-right">
						    <h1>Classic</h1>
						    <h2>White</h2>
						    <p>Lorem ipsum dolor sit amet</p>
						    <div class="btn"><a href="shop.html">Shop Now</a></div>
						 </div>
						 <div class="clear"></div>
					 </div>
				   </article>
				   <article style="position: absolute; width: 100%; opacity: 0;">
				   	<div class="banner-wrap">
					   	<div class="slider-left">
							<img src="images/banner1.jpg" alt=""/> 
						</div>
						 <div class="slider-right">
						    <h1>Classic</h1>
						    <h2>White</h2>
						    <p>Lorem ipsum dolor sit amet</p>
						    <div class="btn"><a href="shop.html">Shop Now</a></div>
						 </div>
						 <div class="clear"></div>
					 </div>
				   </article>
				   <article style="position: absolute; width: 100%; opacity: 0;">
				   	<div class="banner-wrap">
					   	<div class="slider-left">
							<img src="images/banner2.jpg" alt=""/> 
						</div>
						 <div class="slider-right">
						    <h1>Classic</h1>
						    <h2>White</h2>
						    <p>Lorem ipsum dolor sit amet</p>
						    <div class="btn"><a href="shop.html">Shop Now</a></div>
						 </div>
						 <div class="clear"></div>
					 </div>
				   </article>
				   <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	 <div class="banner-wrap">
					   	<div class="slider-left">
							<img src="images/banner1.jpg" alt=""/> 
						</div>
						 <div class="slider-right">
						    <h1>Classic</h1>
						    <h2>White</h2>
						    <p>Lorem ipsum dolor sit amet</p>
						    <div class="btn"><a href="shop.html">Shop Now</a></div>
						 </div>
						 <div class="clear"></div>
					 </div>
			      </article>
				</div> -->
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
             <div class="main">
                <div class="wrap">
             	  <!--<div class="content-top">
             		<div class="lsidebar span_1_of_c1">
					  <p>Home Your Building Partner</p>
					</div>
					<div class="cont span_2_of_c1">
					  <div class="social">	
					     <ul>	
						  <li class="facebook"><a href="#"><span> </span></a><div class="radius"> <img src="images/radius.png"><a href="#"> </a></div><div class="border hide"><p class="num"></p></div></li>
						 </ul>
			   		   </div>
					   <div class="social">	
						   <ul>	
							  <li class="twitter"><a href="#"><span> </span></a><div class="radius"> <img src="images/radius.png"></div><div class="border hide"><p class="num"></p></div></li>
						  </ul>
			     		</div>
						 <div class="social">	
						   <ul>	
							  <li class="google"><a href="#"><span> </span></a><div class="radius"> <img src="images/radius.png"></div><div class="border hide"><p class="num"></p></div></li>
						   </ul>
			    		 </div>
						 <div class="social">	
						   <ul>	
							  <li class="dot"><a href="#"><span> </span></a><div class="radius"> <img src="images/radius.png"></div><div class="border hide"><p class="num"></p></div></li>
						  </ul>
			     		</div>
						<div class="clear"> </div>
					  </div>
					  <div class="clear"></div>			
				   </div>-->





				  <div class="content-bottom">
				   <div class="box1">
				   	<?php
				$s="SELECT * FROM addproduct";
				if(!$stmt=mysqli_query($con,$s))
				{
					die("prepare statement error1");
				}
				$d=array();
				while($row=mysqli_fetch_array($stmt))
				{
					$d[]=$row;
					     $image=$row['image'];
 						 $name=$row['name'];
 						 $details=$row['details'];
 						 $price=$row['price'];
 						 $category=$row['category'];
 						 $about=$row['about'];
 						 $addpro_id=$row['addpro_id'];
				
				?>
				    <div class="col_1_of_3 span_1_of_3"><a href="single1.php?addpro_id=<?php echo $addpro_id;?>">
				     <div class="view view-fifth">
				  	  <div class="top_box">
					  	<h3 class="m_1"><?php echo $name;?></h3>
					  	<!--<p class="m_2">Lorem ipsum</p>-->
				         <div class="grid_img">
						   <div class="css3"><img src="images/<?php echo $image;?>" alt=""/></div>
					          <div class="mask">
	                       		<div class="info">Quick View</div>
			                  </div>
	                    </div>
                       <div class="price"><?php echo $price;?></div>
					   </div>
					    </div>


					    <?php
					    $a=$con->query("SELECT*, SUM(rating) as total_sales from product_rate WHERE addpro_id =$addpro_id");
		while($arow=$a->fetch_array()){
			
			 $sale=$arow['total_sales'];
			 //echo $sale;
		}
					    ?>
                    <?php

$totalVotesQuery = "SELECT * FROM product_rate WHERE addpro_id= '" . $addpro_id . "'";
    
    if ($result7 = mysqli_query($con, $totalVotesQuery)) {
        // Return the number of rows in result set
        $rowCount = mysqli_num_rows($result7);
        // Free result set
        mysqli_free_result($result7);
    } // endIf
    
    //echo $rowCount;
    if($rowCount==0)
    {
    	$rowCount=1;
    }
    //$rat=1;
    $rat=$sale/$rowCount;
    //echo $rat;

?>
<?php



		    	      if($rat<=1)
{?>


	<span class="rating">


 <a  class="rating-input" href="" ><span class="rating-star1"></span></a>
				        <input type="" class="rating-input" id="rating-input-1-5" name="rating-input-1">
				        <label for="rating-input-1-5" class="rating-star1"></label>
				        <input type="" class="rating-input" id="rating-input-1-4" name="rating-input-1">
				        <label for="rating-input-1-4" class="rating-star"></label>
				        <input type="" class="rating-input" id="rating-input-1-3" name="rating-input-1">
				        <label for="rating-input-1-3" class="rating-star"></label>
				        <input type="" class="rating-input" id="rating-input-1-2" name="rating-input-1">
				        <label for="rating-input-1-2" class="rating-star"></label>
				        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
				        <label for="rating-input-1-1" class="rating-star"></label>&nbsp;
		        	  (<?php echo $rat;?>)
		    	      </span>

<?php
}
else if($rat<=2){
?>
<span class="rating">


 <a  class="rating-input" href="" ><span class="rating-star1"></span></a> 
				        <input type="" class="rating-input" id="rating-input-1-5" name="rating-input-1">
				        <label for="rating-input-1-5" class="rating-star1"></label>
				        <input type="" class="rating-input" id="rating-input-1-4" name="rating-input-1">
				        <label for="rating-input-1-4" class="rating-star1"></label>
				        <input type="" class="rating-input" id="rating-input-1-3" name="rating-input-1">
				        <label for="rating-input-1-3" class="rating-star"></label>
				        <input type="" class="rating-input" id="rating-input-1-2" name="rating-input-1">
				        <label for="rating-input-1-2" class="rating-star"></label>
				        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
				        <label for="rating-input-1-1" class="rating-star"></label>&nbsp;
		        	  (<?php echo $rat;?>)
		    	      </span>
<?php


}
else if($rat<3){
?>
<span class="rating">


<!-- <a  class="rating-input" href="" ><span class="rating-star1"></span></a> -->
				        <input type="" class="rating-input" id="rating-input-1-5" name="rating-input-1">
				        <label for="rating-input-1-5" class="rating-star1"></label>
				        <input type="" class="rating-input" id="rating-input-1-4" name="rating-input-1">
				        <label for="rating-input-1-4" class="rating-star1"></label>
				        <input type="" class="rating-input" id="rating-input-1-3" name="rating-input-1">
				        <label for="rating-input-1-3" class="rating-star1"></label>
				        <input type="" class="rating-input" id="rating-input-1-2" name="rating-input-1">
				        <label for="rating-input-1-2" class="rating-star"></label>
				        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
				        <label for="rating-input-1-1" class="rating-star"></label>&nbsp;
		        	  (<?php echo $rat;?>)
		    	      </span>
<?php


}
else if($rat<=4){
?>
<span class="rating">


<!-- <a  class="rating-input" href="" ><span class="rating-star1"></span></a> -->
				        <input type="" class="rating-input" id="rating-input-1-5" name="rating-input-1">
				        <label for="rating-input-1-5" class="rating-star1"></label>
				        <input type="" class="rating-input" id="rating-input-1-4" name="rating-input-1">
				        <label for="rating-input-1-4" class="rating-star1"></label>
				        <input type="" class="rating-input" id="rating-input-1-3" name="rating-input-1">
				        <label for="rating-input-1-3" class="rating-star1"></label>
				        <input type="" class="rating-input" id="rating-input-1-2" name="rating-input-1">
				        <label for="rating-input-1-2" class="rating-star1"></label>
				        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
				        <label for="rating-input-1-1" class="rating-star"></label>&nbsp;
		        	  (<?php echo $rat;?>)
		    	      </span>
<?php


}
else if($rat<=5){
?>
<span class="rating">


<!-- <a  class="rating-input" href="" ><span class="rating-star1"></span></a> -->
				        <input type="" class="rating-input" id="rating-input-1-5" name="rating-input-1">
				        <label for="rating-input-1-5" class="rating-star1"></label>
				        <input type="" class="rating-input" id="rating-input-1-4" name="rating-input-1">
				        <label for="rating-input-1-4" class="rating-star1"></label>
				        <input type="" class="rating-input" id="rating-input-1-3" name="rating-input-1">
				        <label for="rating-input-1-3" class="rating-star1"></label>
				        <input type="" class="rating-input" id="rating-input-1-2" name="rating-input-1">
				        <label for="rating-input-1-2" class="rating-star1"></label>
				        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
				        <label for="rating-input-1-1" class="rating-star1"></label>&nbsp;
		        	  (<?php echo $rat;?>)
		    	      </span>
<?php


}


else
{
//echo "string";
 ?>

<span class="rating">


<!-- <a  class="rating-input" href="" ><span class="rating-star1"></span></a> -->
				        <input type="" class="rating-input" id="rating-input-1-5" name="rating-input-1">
				        <label for="rating-input-1-5" class="rating-star"></label>
				        <input type="" class="rating-input" id="rating-input-1-4" name="rating-input-1">
				        <label for="rating-input-1-4" class="rating-star"></label>
				        <input type="" class="rating-input" id="rating-input-1-3" name="rating-input-1">
				        <label for="rating-input-1-3" class="rating-star"></label>
				        <input type="" class="rating-input" id="rating-input-1-2" name="rating-input-1">
				        <label for="rating-input-1-2" class="rating-star"></label>
				        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
				        <label for="rating-input-1-1" class="rating-star"></label>&nbsp;
		        	  (0)
		    	      </span>

<?php
}
?>


					   <!--<span class="rating">
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
		    	      </span>-->


                    <ul class="add-to-links">
    			   <li><img src="images/cart3.png" alt=""/><a href="mycartaction.php?r_id=<?php echo $r_id;?>&addpro_id=<?php echo $addpro_id;?>">Add to Cart</a></li>
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



       	<!-- <div class="footer-middle">
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
       	   	  <p>© 2022 Home. All rights reserved | <a href="index.php">Home</a></p>
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