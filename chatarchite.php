
<?php
session_start();
include("db_connect.php");
if(isset($_SESSION['lo_id']))
{
  $lo_id=$_SESSION['lo_id'];
  // var_dump($l_id);
}
//include('connect.php');
// if(empty($_SESSION))
// 	session_start();
$s="SELECT * FROM registration WHERE lo_id=$lo_id";
//var_dump($s);
    if(!$stmt=mysqli_query($con,$s))
    {
      die("prepare statement error1");
    }
    $result3=mysqli_fetch_array($stmt);

// if(!isset($_SESSION['s_username'])){
// 	header("Location:login.html");
// }
$name=$result3['name'];
$r_id=$result3['r_id'];
// echo $type;
?>   

<?php

	$SQL="SELECT * FROM architect INNER JOIN login on architect.lo_id=login.lo_id";
//var_dump($SQL);
	
 $chatname="SELECT * FROM architect where l_approve='approve'";
//var_dump($chatname);

 $rs=mysqli_query($con,$chatname);
$d=mysqli_fetch_array($rs);
//$namech=$d['name'];
//echo $namech;
$nameid=$d['ar_id'];
$stl_id=$d['lo_id'];






// $rs=mysqli_query($con,$chatname);
// $d=mysqli_fetch_array($rs);
$result=mysqli_query($con,$SQL);
//var_dump($result);
//$result2=mysqli_query($con,$sql2);


?>
<html>
<head>
  <title>chat</title>
</head>

<h2 align="center">Online Chat</h2>
 <p style="margin-left: 80%;">Hi - <?php echo $name;  ?> - <a href="logout.php">Logout</a></p> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<table border="1"class="table table-bordered table-striped" style="width: 80%;" align="center">
		<tr>
		<th>#</th>
		<th>Name</th>
		<th>Website</th>
		<th>Action</th>
		<!-- <th>Status</th> -->
		</tr>
<?php
$i=1;
	while($sql1=mysqli_fetch_array($result,MYSQLI_NUM))
	{

		// echo "<div class='list'>";
		?>
		
<tr>
	<td><?php echo $i;?></td>
	<td><?php  echo $sql1[3]; ?><?php echo $sql1[0];?><span class="badge badge-success"><?php 
	$sql = "SELECT * FROM chat_message WHERE to_id ='$r_id' and from_id ='$sql1[1]'";
	//var_dump($sql);
    
    $count = mysqli_query($con, $sql);
							$numcount= mysqli_num_rows($count);
							echo $numcount;
							?></span></td>
	
	<td><?php echo $sql1[5];?></td>
	<td ><a href='demoarc.php?lo_id=<?php  echo $sql1[1]?>&name=<?php  echo $sql1[3]?>&ar_id=<?php  echo $sql1[0]?>&username=<?php  echo $name?>&r_id=<?php  echo $r_id?>'><button id="mybtn" type="button" class="btn btn-info btn-xs start_chat" data-touserid="3" data-tousername="davidMoore">Start Chat</td>
	<!-- <td></td> -->
</tr>

		
	<?php	
	$i++;	
		
	}
	//while($sqll=mysqli_fetch_array($result2, MYSQLI_NUM))
	//{
		?>

<!-- <td>online</td> -->
<?php
	//}

?>
<!-- <script type="text/javascript">
	function chat(){
		var popup=document.getElementById("mypopup");
		popup.classList.toggle("show");
	}
</script>
-->