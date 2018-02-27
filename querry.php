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
							<li><a href="change.php"><button type="button" class="btn btn-info btn-lg " style="color:black;">
                             <!--<span class="glyphicon glyphicon-search"></span---->Change password
                             </button></a></li>
							<li><a href="ruser_list.php">
							 <button type="button" class="btn  btn-info btn-lg" style="color:black;overflow:hidden;">
                             <!--<span class="glyphicon glyphicon-search"></span------> Registration
                             </button></a></li>
							<li><a href="view.php">
							 <button type="button" class="btn btn-info btn-lg" style="color:black;">
                             <!--<span class="glyphicon glyphicon-search"></span--->Edit/Print form
                             </button></a> </li>
							<li><a href="querry.php">
							 <button type="button" class="btn  btn-default btn-lg disabled" style="color:red;">
                             <!--<span class="glyphicon glyphicon-print"></span>--><b>File query</b>
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
  
    
	         
			 <!----<div class="col-md-4" >
						
						<ul style="background-color:#e5e0e0;list-style:none;">
						
						
							<li><img src="images/log.png"/ style="height:450px; float:left;"></li>
							
						</ul>
				
				</div>---------->
	<div class="col-md-12">
					
							

		<div class="container" >
			
			<div class="row" >
				
<!--------------------------------------------------------content start--------------------------------------------------------------------------------->
			
  
    
	         
			
	<div class="col-md-12">	       





					   <div id="annon_head" style="padding-left:32px;">
          <h2><b>File query</b></h2>
          <hr>
        </div>
		
		
	
	
	
	
	
	
	
  
					
							

		
			
			<div class="row" style="padding-left:10%;padding-right:10%;" >
				
				<div class="col-md-12" >
					<div class="panel panel-default"style="border-radius: 1.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thick;">
						<!---<div class="panel-heading"style="background-color:#e5e0e0;border-radius: 1.5em 1.5em 0em 0em;"id="annon_head">
							<div   style="text-align:center;height:20px;color:#9E9EA7;padding-top:5px;"><h2>Administration</h2><hr></div>
						</div>-->
						<div class="panel-body">
						
						
						
						
						<!--------------------form header-------------------------------------------------------->
							
							
  
  <form action="" method="post" class="form-horizontal">
  
  <div class="form-group">
    <label class="control-label col-sm-3" for="querry"><h3>Your querry:</h3></label>
    <div class="col-sm-9"> 
      <b><textarea rows="7" type="text" class="form-control" name="querry" id="querry" placeholder="Write your querry/complaint here" style="color:green;" required></textarea></b>
    </div>
  </div>
  
  
 
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10" style="padding-left:40%;">
      <button type="submit" class="btn btn-primary btn-lg">Submit</button>
    </div>
  </div>
  
  <?php
if($_POST){


$u=$_SESSION['username'];
 $name=$_SESSION['name'];
  $email=$_SESSION['email'];
  $querry=mysqli_real_escape_string($con,$_POST['querry']);
  $date = date("Y-m-d");
  $Year=$_SESSION['Year'];

$sql="INSERT INTO `querries`(`Name`, `Roll No.`, `Email id`,`Batch`, `Querry`,`Dated`) VALUES ('$name','$u','$email','$Year','$querry','$date')";

mysqli_query($con,$sql) or die('<span style="color:red;text-align:center;padding-left:30%;"><b><h1>	&#10008; </h1><h3>This query has been already filed</h3></b></span>');
echo '<span style="color:green;text-align:center;padding-left:30%;"><b><h1>	&#10004; </h1><h3>Your query has been successfully filed!!!</h3></b></span>';

}
?>
  
</form>
  

							
							
							
							
						<!----------------------------------------------------------------------------------------->	
						</div>
					</div>
				</div>
				
			</div>
		
    </div>				
							
							
							
							
							
				
				
				
												
					
				
				
					
			
				
  
  





	<!---------------------------------------------------------end------------------------------------------------------------------------>			
			</div>
		</div>
    </div>				
							
							
							
							
							
				
				
				
												
					
				
				
					
			
				
  
  
</div>
<br><br><br>


<!---------------------------------------------------------------------php to get data-------------------------------------->



<!-------------------------------------------------------------------------------------------------------------------------->

<?php include 'footer.php'; ?>
