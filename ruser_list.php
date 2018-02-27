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
                             <!--<span class="glyphicon glyphicon-search"></span------><b> Registration</b>
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
  
    
	         
			 <!----<div class="col-md-4" >
						
						<ul style="background-color:#e5e0e0;list-style:none;">
						
						
							<li><img src="images/log.png"/ style="height:450px; float:left;"></li>
							
						</ul>
				
				</div>---------->
	<div class="col-md-12">
					
							

		<div class="container" >
			
			<div class="row" >
				<div class="col-md-3">
					<div class="panel panel-default"style="border-radius: 1.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thick;">
						<div class="panel-heading"style="background-color:#e5e0e0;border-radius: 1.5em 1.5em 0em 0em;"id="annon_head">
							<div   style="text-align:center;height:20px;color:#9E9EA7;padding-top:5px;"><h2><b>Available Registrations</b></h2><hr></div>
						</div>
						<div class="panel-body">
													<p> 
							 <a href="ruser.php">
							 <button type="button" class="btn btn-info btn-lg box-shadow--2dp" style="color:black;width:90%;margin-left:5%;">
                             <!--<span class="glyphicon glyphicon-search"></span---->Semester registration
                             </button></a>
							</p>
						 
							 	
							
<!---------------------------------------------------------------------------------------------------------------------------->
                              


<!-----------------------------------------------------student login----------------------------------------------------------------------->							 
							 
							 
		


 



					 
							 
<!----------------------------------------------------------------------------------------------------------------------------------->							 
							
							<p> 
							 <a href="#">
							 <button type="button" class="btn btn-info btn-lg" style="color:black;width:90%;margin-left:5%;">
                             <!--<span class="glyphicon glyphicon-search"></span--->WDC registration
                             </button></a>
							</p>
							<p> 
							 <a href="#">
							 <button type="button" class="btn  btn-info btn-lg" style="color:black;width:90%;margin-left:5%;">
                             <!--<span class="glyphicon glyphicon-print"></span>-->TnP registration
                             </button></a>
							</p>
							
							
						</div>
					</div>
				</div>
<!--------------------------------------------------------content start--------------------------------------------------------------------------------->
			
  
    
	         
			
	<div class="col-md-9">	       





					   <div id="annon_head" style="padding-left:32px;">
          <h2><b>Registration </b></h2>
          <hr>
        </div>
		
		
	
	
	
	
	
	
	
  
					
							

		<div class="wrapper" >
			
			<div class="row" >
				
				<div class="col-md-12" >
					<div class="panel panel-default"style="border-radius: 1.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thick;">
						<!---<div class="panel-heading"style="background-color:#e5e0e0;border-radius: 1.5em 1.5em 0em 0em;"id="annon_head">
							<div   style="text-align:center;height:20px;color:#9E9EA7;padding-top:5px;"><h2>Administration</h2><hr></div>
						</div>-->
						<div class="panel-body">
						
						
						
						
						<!--------------------form header-------------------------------------------------------->
							
							
  
  
  
<span style="color:teal;text-align:center;padding-left:30%;"><h2><img src="images/arrow.png" ></span><span><b>&nbsp&nbsp&nbsp&nbsp&nbspChoose what you want to register for.</h2></b> </span>
							
							
							
							
						<!----------------------------------------------------------------------------------------->	
						</div>
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
