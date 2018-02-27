<?php 
session_start();
if (!isset($_SESSION['username']))
	header('location: registration.php');
?>
<div style="min-width:850px;background-color:#e5e0e0;" >

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
						    <li><a href="change.php">
							 <button type="button" class="btn btn-info btn-lg" style="color:black;">
                             <!--<span class="glyphicon glyphicon-search"></span--->Change password
                             </button></a> </li>
							
							<li><a href="ruser_list.php">
							 <button type="button" class="btn  btn-info btn-lg" style="color:black;overflow:hidden;">
                             <!--<span class="glyphicon glyphicon-search"></span------>Registration
                             </button></a></li>
							<li><a href="view.php"><button type="button" class="btn btn-default btn-lg disabled" style="color:red;">
                             <!--<span class="glyphicon glyphicon-search"></span----><b>Edit/Print form</b>
                             </button></a></li>
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
  
    
	         
			 <!----<div class="col-md-4" >
						
						<ul style="background-color:#e5e0e0;list-style:none;">
						
						
							<li><img src="images/log.png"/ style="height:450px; float:left;"></li>
							
						</ul>
				
				</div>---------->
	<div class="col-md-12">
					
							

		<div class="container" >
			
			<div class="row" >
				
<!--------------------------------------------------------content start--------------------------------------------------------------------------------->
			
  
    
	         
			
	<div class="col-md-12" >	       





					   <div id="annon_head" style="padding-left:32px;">
          <h2><b>View/Edit Form</b></h2>
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
    <label class="control-label col-sm-3" for="pwd">Roll No.:</label>
    <div class="col-sm-9"> 
      <input type="text" class="form-control" name="username" id="pwd" placeholder="<?php
		 $user=$_SESSION['username'];
		  echo $user;
		  
		  ?>" value="<?php
		 $user=$_SESSION['username'];
		  echo $user;
		  
		  ?>" readonly>
    </div>
  </div>
  <!---div class="form-group">
    <label class="control-label col-sm-3" for="pwd">New Password:</label>
    <div class="col-sm-9"> 
      <input type="password" class="form-control" name="new" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="pwd">Confirm Password:</label>
    <div class="col-sm-9"> 
      <input type="password" class="form-control" name="confirm" id="pwd" placeholder="Enter password">
    </div>
  </div-->
 
 
 <?php
if($_POST){


$u=$_SESSION['username'];


$sql="SELECT * FROM  `registration` WHERE `Roll`= '$u'";
$result=mysqli_query($con,$sql) or die("error ..semister registerion not done!! ".mysqli_error($con));
           
			$row=mysqli_fetch_array($result);
			

if(!$row)		
{
	echo '<span style="color:red;text-align:center;"><b><h4>REGISTRATION NOT DONE!!!!!! </b></h4></span>';
	echo '<a href="ruser_list.php"><span style="color:teal;text-align:center;"><b><h4>CLICK HERE TO DO REGISTRATION . </b></h4></span></a>';
}
else
{
	
	echo "<script> location.href='print.php'; </script>";
	
	
}
	








   

echo "<br><br><br>";
}
else 
{
	
	echo (' <div class="form-group" style="padding-left:10%;"> 
    <div class="col-sm-offset-2 col-sm-10" >
      <img src="images/arrow - Copy.png" >&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-primary btn-lg">View semester registration form </button>
    </div>
    <div class="col-sm-offset-2 col-sm-10" style="padding-top:10px;">
      <a href="print_id.php">
	 <img src="images/arrow - Copy.png" >&nbsp&nbsp&nbsp&nbsp<button type="button" class="btn  btn-primary btn-lg">
                           View Identity card form
     </button></a>
    </div>
	<!---div class="col-sm-offset-2 col-sm-10" style="padding-top:10px;">
      <a href="#">
	 <img src="images/arrow - Copy.png" >&nbsp&nbsp&nbsp&nbsp<button type="button" class="btn  btn-primary btn-lg">
                           View New Admission forms
     </button></a>
    </div---->
	   
  </div>');
  
	
	
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
</div>