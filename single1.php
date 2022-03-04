<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
 include("db_connect.php");
// include("architectheader.php");
if(isset($_GET['addpro_id']))
{
	$addpro_id=$_GET['addpro_id'];
}
if(isset($_SESSION['lo_id']))
{
	$lo_id=$_SESSION['lo_id'];
	//var_dump($l_id);
}

 $s="SELECT * FROM registration WHERE lo_id=$lo_id";
		if(!$stmt=mysqli_query($con,$s))
 		{
			die("prepare statement error1");
		}
		$result2=mysqli_fetch_array($stmt);
		$r_id=$result2['r_id'];
		$r_name=$result2['name'];


		


if(isset($_POST['send']))
{
   // $image=$_FILES['image']['name'];
  // $planname=$_POST['planname'];
  $description=$_POST['review'];
  // $lo_id=$result['lo_id'];

  $q="INSERT INTO review_product(r_id,addpro_id,review,review_name)VALUES($r_id,$addpro_id,'$description','$r_name')";
  // var_dump($q);
  // exit();

    if(mysqli_query($con,$q))

    {
       // move_uploaded_file($_FILES['image']['tmp_name'],$image);
      $_SESSION['msg1']="Successfully Registered....";
    }
  }








 if(isset($_SESSION['lo_id']))
{
	$lo_id=$_SESSION['lo_id'];
	//var_dump($l_id);
}
$v="SELECT * FROM registration where lo_id=$lo_id";
// var_dump($s);
		if(!$stmt=mysqli_query($con,$v))
		{
			die("prepare statement error1");
		}
		$result6=mysqli_fetch_array($stmt);
		$r_id=$result6['r_id'];

if(isset($_GET['addpro_id']))
{
	$addpro_id=$_GET['addpro_id'];
	//var_dump($l_id);
}
$s="SELECT * FROM addproduct where addpro_id=$addpro_id";
// var_dump($s);
		if(!$stmt=mysqli_query($con,$s))
		{
			die("prepare statement error1");
		}
		$result=mysqli_fetch_array($stmt);
			     $image=$result['image'];
 				 $name=$result['name'];
 				 $details=$result['details'];
 				 $price=$result['price'];
 				 $lo_id1=$result['lo_id'];
 				 // $category=$result['category'];
 				 $about=$result['about'];
 				 
		// echo $image;
 				 if(isset($_POST['rate']))
 				 {
 				 	$rating=$_POST['rating'];
 				 	$checkIfExistQuery="SELECT * FROM product_rate WHERE r_id='" .$r_id . "' and addpro_id='".$addpro_id."'";
 				 	if ($resu= mysqli_query($con,$checkIfExistQuery)) {
 				 		$rowcount=mysqli_num_rows($resu);
 				 		# code...
 				 	}
 				 	if($rowcount == 0){
 				 		$insertquery="INSERT INTO product_rate(r_id,addpro_id,rating) VALUES ('" .$r_id."','".$addpro_id."','".$rating."')";
 				 		$resu=mysqli_query($con, $insertquery);
 				 		   $_SESSION['msg'] ="success";
 				 	}else{
 				 		$_SESSION['msg'] ="already rated";
 				 	}
 				 }

?>

<!DOCTYPE HTML>
<html>
<head>
<title>HOME:Customer</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="customers/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="customers/css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="customers/js/jquery.min.js"></script>
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
<script type="text/javascript" src="customers/js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
<!----details-product-slider--->
				<!-- Include the Etalage files -->
					<link rel="stylesheet" href="customers/css/etalage.css">
					<script src="customers/js/jquery.etalage.min.js"></script>
				<!-- Include the Etalage files -->
				<script>
						jQuery(document).ready(function($){
			
							$('#etalage').etalage({
								thumb_image_width: 300,
								thumb_image_height: 400,
								
								show_hint: true,
								click_callback: function(image_anchor, instance_id){
									alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
								}
							});
							// This is for the dropdown list example:
							$('.dropdownlist').change(function(){
								etalage_show( $(this).find('option:selected').attr('class') );
							});

					});
				</script>
				<!----//details-product-slider--->	
<!-- top scrolling -->
<script type="text/javascript" src="customers/js/move-top.js"></script>
<script type="text/javascript" src="customers/js/flexisel.js"></script>
<script type="text/javascript" src="customers/js/jquery.wmuSlider.js"></script>
<script type="text/javascript" src="customers/js/easing.js"></script>
   <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>	
	<style type="text/css">
		.b {
	padding: 4% 0;
}
.b  {
	font-family: 'Open Sans', sans-serif;
	cursor: pointer;
	border: none;
	outline: none;
	display: inline-block;
	font-size:0.85em;
	padding: 10px 34px;
	background:#555;
	border-bottom: 4px solid #1D1C1C;
	color: #FFF;
	text-transform: uppercase;
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
}
.b :hover{
	background: #FFAF02;
	border-bottom: 4px solid #DF9A06;
}
	</style>
	<style type="text/css">
.con {
    border: 2px solid #dedede;
    background-color: #f1f1f1;
    border-radius: 5px;
    padding: 10px;
    margin: 0px 0;
    color: #fff;
    width: 950px;
    height:80px;
    word-wrap:break-word;
}

/* Darker chat container */
.darker {
    border-color: #ccc;
    background-color: #555;
    /*float: right;*/
}
.con img {
    float: left;
    max-width: 60px;
    width: 80%;
    margin-right: 20px;
    border-radius: 50%;
}
.right{
	text-align: right;
}
/****** Style Star Rating Widget *****/

.rating1 {
  border: none;
  float: left;
}

.rating1 > input { display: none; }
.rating1 > label:before {
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating1 > .half:before {
  content: "\f089";
  position: absolute;
}
.checked {
  color: orange;
}
.rating1 > label {
  color: #ddd;
 float: right;
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating1 > input:checked ~ label, /* show gold star when clicked */
.rating1:not(:checked) > label:hover, /* hover current star */
.rating1:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

.rating1 > input:checked + label:hover, /* hover current star when changing rating */
.rating1 > input:checked ~ label:hover,
.rating1 > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating1 > input:checked ~ label:hover ~ label { color: #FFED85;  }


</style>
				
</head>
<body>
  <div class="header-top">
	 <div class="wrap"> 
		<div class="logo">
		<a href="index.php"><img src="customers/images/logos.png" alt=""/></a>
	    </div>
	    <div class="cssmenu">
		   <ul>
			 <li class="active"><a href="customer.php">Previous</a></li> 
			 <li><a href="shop.html">Store Locator</a></li> 
			 <li><a href="login.php">My Account</a></li> 
			 <li><a href="logout.php">signOut</a></li> 
		   </ul>
		</div>
		<ul class="icon2 sub-icon2 profile_img">
			<li><a class="active-icon c2" href="#"> </a>
				<ul class="sub-icon2 list">
					<li><h3>Products</h3><a href=""></a></li>
					<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
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
			<li class="grid"><a class="color2" href="#">Architect</a>

				</li>
  			  <!-- <li class="active grid"><a class="color4" href="#">Astrologer</a>
				
				</li>-->
				<li><a class="color6" href="#">Products</a>
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
				</li>
				<li><a class="color7" href="single3.php">Contractors</a>
				
				</li>
				
						   </ul>
		   <div class="clear"></div>
     	</div>
       </div>
       <div class="single">
         <div class="wrap">
     	    <div class="rsidebar span_1_of_left">
				   <section  class="sky-form">
                   	  
                   	  <h4>Category</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<!--<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Flats (70)</label>-->
							</div>
							<!--<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Athletic Shoes (48)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Athletic Shoes (48)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Heels (38)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other (1)</label>
						    </div>-->
						</div>

		         </section>

		        <section  class="sky-form">
					<h4>Price</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Rs.500 and below</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs.501 - Rs.1000</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs.1001 - Rs.3000</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs.3001 - Rs.5000</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs.5001 - Rs.6000</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs.6001 and above</label>
							
							</div>
						</div>
		        </section>

		</div>
		<div class="cont span_2_of_3">
			  <div class="labout span_1_of_a1">
				<!-- start product_slider -->
				     <ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="images/<?php echo $image;?>" />
									<img class="etalage_source_image" src="images/<?php echo $image;?>" />
								</a>
							</li>
							
						</ul>
					
					
			<!-- end product_slider -->
			</div>
			<div class="cont1 span_2_of_a1">
				<h3 class="m_3"><?php echo $name;?></h3>
				
				<div class="price_single">
							  <!-- <span class="reducedfrom">$66.00</span> -->
							  <!--<span class="actual"><?php echo $price;?></span><a href="#">click for offer</a>-->
							</div>
				<!--<ul class="options">
					<h4 class="m_9">Select a Size</h4>
					<li><a href="#">6</a></li>
					<li><a href="#">7</a></li>
					<li><a href="#">8</a></li>
					<li><a href="#">9</a></li>
					<div class="clear"></div>
				</ul>-->
				<br>
				<!-- <div class="btn_form" > -->
					
					<a href="order1.php?r_id=<?php echo $r_id;?>&addpro_id=<?php echo $addpro_id;?>&lo_id=<?php echo $lo_id1;?>&productname=<?php echo $name;?>"> <button class="b">buy now</button></a>
<!-- </div>
 -->				<!-- <div class="btn_form">
				   <form>
				   	<button href="order.php">buy now</button>
					 <a href="order.php"><input type="submit" value="buy now" title="" name="buy"></a>
				  </form>
				</div> -->
				<ul class="add-to-links">
    			   <li><img src="images/cart3.png" alt=""/><a href="mycartaction.php?r_id=<?php echo $r_id;?>&addpro_id=<?php echo $addpro_id;?>">Add to Cart</a></li>
    			</ul>
    			<p class="m_desc"><?php echo $about;?></p>
    			
                <div class="social_single">	
				   <ul>	
					  <li class="fb"><a href="#"><span> </span></a></li>
					  <li class="tw"><a href="#"><span> </span></a></li>
					  <li class="g_plus"><a href="#"><span> </span></a></li>
					  <li class="rss"><a href="#"><span> </span></a></li>		
				   </ul>
			    </div>

<form method="post">
			    <select name="rating" style="height: 40px;">
	<option value="5">5</option>
	<option value="4">4</option>
	<option value="3">3</option>
	<option value="2">2</option>
	<option value="1">1</option>

   </select>&nbsp;&nbsp;&nbsp;&nbsp; <button class="b" type="submit" name="rate">rate now</button><?php 
				if(isset($_SESSION['msg']))
				{
					echo $_SESSION['msg'];
					//$_SESSION['msg']='';
					unset($_SESSION['msg']);
				}

				?></form>
 
			    
   
</form>

 <?php
 $Query = "SELECT * FROM product_rate WHERE r_id =$r_id and addpro_id=$addpro_id";
//exit();
$res=mysqli_query($con,$Query);
// var_dump($res);
$count=mysqli_num_rows($res);
print_r($count);
if($count)
{
$resul=mysqli_fetch_array($res);
//print_r($resul);
$rating=$resul['rating'];


//print_r($resul);
//exit();
if($rating==1)
{?>
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

<?php
}
else if($rating==2){
?>
<span class="rating">
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
				    </span>

<?php


}
else if($rating==3){
?>
<span class="rating">
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
				    </span>

<?php


}
else if($rating==4){
?>
<span class="rating">
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
				    </span>

<?php


}
else if($rating==5){
?>
<span class="rating"

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
				    </span>
				    

<?php

}

}

elseif($count==0)
{
//echo "string";
}
 ?>


 <!-- <span class="rating">
 -->

<!-- <a  class="rating-input" href="" ><span class="rating-star1"></span></a> -->
<!-- 				        <input type="" class="rating-input" id="rating-input-1-5" name="rating-input-1">
				        <label for="rating-input-1-5" class="rating-star1"></label>
				        <input type="" class="rating-input" id="rating-input-1-4" name="rating-input-1">
				        <label for="rating-input-1-4" class="rating-star1"></label>
				        <input type="" class="rating-input" id="rating-input-1-3" name="rating-input-1">
				        <label for="rating-input-1-3" class="rating-star1"></label>
				        <input type="" class="rating-input" id="rating-input-1-2" name="rating-input-1">
				        <label for="rating-input-1-2" class="rating-star"></label>
				        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
				        <label for="rating-input-1-1" class="rating-star"></label>&nbsp;
		        	  (45)
		    	      </span>
				
 -->



			</div>
			<div class="clear"></div>
     
     
        <!--  <ul id="flexiselDemo3">
			<li><img src="images/pic11.jpg" /><div class="grid-flex"><a href="#">Bloch</a><p>Rs 850</p></div></li>
			<li><img src="images/pic10.jpg" /><div class="grid-flex"><a href="#">Capzio</a><p>Rs 850</p></div></li>
			<li><img src="images/pic9.jpg" /><div class="grid-flex"><a href="#">Zumba</a><p>Rs 850</p></div></li>
			<li><img src="images/pic8.jpg" /><div class="grid-flex"><a href="#">Bloch</a><p>Rs 850</p></div></li>
			<li><img src="images/pic7.jpg" /><div class="grid-flex"><a href="#">Capzio</a><p>Rs 850</p></div></li>
		 </ul> -->
	    <script type="text/javascript">
		 $(window).load(function() {
			$("#flexiselDemo1").flexisel();
			$("#flexiselDemo2").flexisel({
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		
			$("#flexiselDemo3").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	 <div class="toogle">
     	<h3 class="m_3">Product Details</h3>
     	<p class="m_text"><?php echo $details;?></p>
     </div>					
	 <div class="toogle">
     	<h3 class="m_3">Reviews</h3>
     	<?php
     	$w="SELECT * FROM review_product WHERE addpro_id='$addpro_id' ORDER BY review DESC";
     	$result8=mysqli_query($con,$w);
     	$numcomment=mysqli_num_rows($result8);
     	?>
     	<div>
     	<img src="customers/images/pencil.png"><?php echo $numcomment;?> Reviews..</div>
     	<!-- <p class="m_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p> -->
     	<form method="post">
     		<textarea placeholder="add reviews here..." cols="130" rows="5" name="review" style="border-color: black;"></textarea>
     		<!-- <ul class="icon2 sub-icon2 profile_img">
			<li class="active-icon c2"> -->
     		<button type="submit" name="send" style="background-color: #000000; /* Green */
     		
  border: none;
  color: white;
   
  text-decoration-color:black;
  /*padding: 20px;*/
  text-align: center;
  text-decoration: none;
  /*display: inline-block;*/
  font-size: 26px;
  /*margin: 4px 2px;*/
  cursor: pointer;
  border-radius: 50%;">+</button>
</li>
</ul>
     	</form>


<?php
if($result8):
	while($row5 = $result8->fetch_array()):
?>
 

<div class="con darker">

	<img src="customers/images/<?php echo $row5['image'];?>">
	<table>
		<tr>
			<td> 
	<?php echo $row5['review_name'];echo '&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp';?><br><br>
</td>
	<td><span class="right"><?php echo $row5['time'];?></span></table></td></tr>
	<tr><td colspan="2"><?php echo $row5['review'];?></td></tr>
	</table>
	</div>
	<?php endwhile; ?>
	<?php endif; ?>
</div>








     </div>
     </div>
     <div class="clear"></div>
	 </div>
     </div>
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
       	 </div>-->

       	 <div class="copy">
       	   <div class="wrap">
       	   	  <p>© All rights reserved | Home</a></p>
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