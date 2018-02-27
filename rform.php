<?php 
session_start();
if (!isset($_SESSION['username']))
	header('location: registration.php');
?>


      <?php include 'includes/header.php'; ?>       




	  <?php include 'connection.php'; ?>



<form action="" method="post">
   <!--------------------------------------------------------------------------------------------------------------------->
	<head>
	<style>
  
  .affix {
      top: 0; left :0;
      width: 100%;
      z-index: 9999 !important;
	  background-color:#009688;
	  
  }

  .affix + .container-fluid{
      padding-top: 70px;
	  background-color:#009688;
	  
  }
  </style>
	</head>
	
	<div>
	<nav class="navbar navbar-default "  data-spy="affix" data-offset-top="197">
				<div class="container-fluid">
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					  </button>
					  <a href="user.php"><h4><b>User:<span style="color:green;"><i>
		  <?php
		 $user=$_SESSION['username'];
		  echo $user;
		  
		  ?>
		  
		  
		  
		  </i></span></b></h4></a>
		  <button type="submit" name="logout"class="btn btn-danger">Logout</button>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="change.php"><button type="button" class="btn btn-info btn-lg" style="color:black;">
                             <!--<span class="glyphicon glyphicon-search"></span---->Change password
                             </button></a></li>
							<li><a href="">
							 <button type="button" class="btn  btn-default btn-lg disabled" style="color:red;overflow:hidden;">
                             <!--<span class="glyphicon glyphicon-search"></span------><b>Registration</b>
                             </button></a></li>
							<li><a href="view.php">
							 <button type="button" class="btn btn-info btn-lg" style="color:black;">
                             <!--<span class="glyphicon glyphicon-search"></span--->Edit/Print form
                             </button></a> </li>
							<li><a href="querry.php">
							 <button type="button" class="btn  btn-info btn-lg" style="color:black;">
                             <!--<span class="glyphicon glyphicon-print"></span>-->File query
                             </button></a> </li>
							<li>
							 <a href="#">
							 <button type="button" class="btn  btn-info btn-lg" style="color:black;">
                             <!--<span class="glyphicon glyphicon-print"></span>-->Result
                             </button></a>
							 </li>
						</ul>
					</div>
				</div>
			</nav>
	
	
	
	<!--------------------------------------------------------------------------------------------------------------------->
    
          <hr>
        
        
	</div>	
  </form>
 
	
	
	
	
	
<?php
if(isset($_POST['logout'])){

{
	session_destroy();
	echo "<script> location.href='registration.php'; </script>";
        exit;
}

}
?>





 <div class="row">
 
 <div class="col-md-12">
					
							

		<div class="container" >
		<div class="row" >
		
		<!------------------------------------------------------------------------------------------------------------------------------>
		
		
		
		
		<!------------------------------------------------------------------------------------------------------------------------------->
<div class="col-md-12">
        <div id="annon_head" style="padding-left:32px;">
          <h2><b>Semister Registration Form</b></h2>
          <hr>
        </div>
		<br><br><br>
		
	
	<?php

if($_POST)
{


$name=mysqli_real_escape_string($con,$_SESSION['name']);
$roll=mysqli_real_escape_string($con,$_SESSION['username']);
$email=mysqli_real_escape_string($con,$_SESSION['email']);
$category=mysqli_real_escape_string($con,$_POST['category']);
$course=mysqli_real_escape_string($con,$_POST['course']);
$semister=mysqli_real_escape_string($con,$_POST['semister']);
$year=mysqli_real_escape_string($con,$_POST['year']);
$branch=mysqli_real_escape_string($con,$_POST['branch']);
$number=mysqli_real_escape_string($con,$_POST['number']);
$fname=mysqli_real_escape_string($con,$_POST['fname']);
$fnumber=mysqli_real_escape_string($con,$_POST['fnumber']);
$sgpa1=mysqli_real_escape_string($con,$_POST['sgpa1']);
$sgpa2=mysqli_real_escape_string($con,$_POST['sgpa2']);
$pm=mysqli_real_escape_string($con,$_POST['pm']);
$transaction=mysqli_real_escape_string($con,$_POST['transaction']);
$date=mysqli_real_escape_string($con,$_POST['date']);
$subject=$_POST['subject'];
$sub=implode(",",$subject);

if(isset($_POST['update']))
{
	$sql="UPDATE `registration` SET `Category`='$category',`Course`='$course',`Semister`='$semister',`Year`='$year',`Branch`='$branch',`Mobile No.`='$number',`Father's Name`='$fname',`Father's mobile No.`='$fnumber',`SGPA 1`='$sgpa1',`SGPA 2`='$sgpa2',`Payment Mode`='$pm',`Transaction No.`='$transaction',`transaction Date`='$date',`Subject(s) opted {semister}`='$sub'
	WHERE  `Roll`= '$roll'";
	mysqli_query($con,$sql) or die("error in updation".mysqli_error($con));
	
	
	$sql="UPDATE `new registration` SET `Semister`='$semister',`Year`='$year',`Mobile No.`='$number',`Father's mobile No.`='$fnumber' WHERE  `Roll`= '$roll'";
	mysqli_query($con,$sql) or die("error in updation".mysqli_error($con));
	
	echo '<span style="color:green;text-align:center;padding-left:30%;"><b><h1>	&#10004; </h1><h3> successfully updated changes!!!</h3></b></span>';
	
	echo '<span style="color:green;text-align:center;padding-left:30%;"><b><h3>Redirecting to view your form page in few seconds!!!!!</h3></b></span>';
echo '<meta http-equiv="refresh" content="5;url=view.php" />';
}
else
{
$sql="INSERT INTO `registration`(`Name`, `Roll`, `Email id`, `Category`, `Course`, `Semister`, `Year`, `Branch`, `Mobile No.`, `Father's Name`, `Father's mobile No.`, `SGPA 1`, `SGPA 2`, `Payment Mode`, `Transaction No.`, `transaction Date`,`Subject(s) opted {semister}`)
 VALUES ('$name','$roll','$email','$category','$course','$semister','$year','$branch','$number','$fname','$fnumber','$sgpa1','$sgpa2','$pm','$transaction','$date','$sub')";
mysqli_query($con,$sql) or die("error in registration".mysqli_error($con));

$sql="UPDATE `new registration` SET `Semister`='$semister',`Year`='$year',`Mobile No.`='$number',`Father's mobile No.`='$fnumber' WHERE  `Roll`= '$roll'";
	mysqli_query($con,$sql) or die("error in updation".mysqli_error($con));


echo '<span style="color:green;text-align:center;padding-left:30%;"><b><h1>	&#10004; </h1><h3> successfully registerd!!!</h3></b></span>';

echo '<span style="color:green;text-align:center;padding-left:30%;"><b><h3>Redirecting to main page in few seconds!!!!!</h3></b></span>';
echo '<meta http-equiv="refresh" content="5;url=ruser_list.php" />';
}
	
}	







?>
	
	
	
	
	
	
	
	
	
	
	
	
	</div>
	<br><br><br>
	</div>
	 </div>
	</div>
</div>

<?php include 'footer.php'; ?>
