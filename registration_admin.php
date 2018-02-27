
      <?php include 'includes/header.php'; ?>       




	  <?php include 'connection.php'; ?>

 

        <div id="annon_head" style="padding-left:32px;">
          <h2><b>Student Portal</b></h2>
          <hr>
        </div>
		
		
	<!---------------------------------------------------------------------php to get data-------------------------------------->



<!-------------------------------------------------------------------------------------------------------------------------->
	
	
	
	
	
	
  <div class="row">
  
    
	         
			 <!----<div class="col-md-4" >
						
						<ul style="background-color:#e5e0e0;list-style:none;">
						
						
							<li><img src="images/log.png"/ style="height:450px; float:left;"></li>
							
						</ul>
				
				</div>---------->
	<div class="col-md-12">
					
							

		<div class="container" >
			
			<div class="row" >
				<div class="col-md-12">
					<div class="panel panel-default"style="border-color:#e5e0e0; background-color:#e5e0e0; min-width:340px;">
						
						<div class="panel-body">
							
							
<!---------------------------------------------------------------------------------------------------------------------------->
                              


		 
<!-----------------------------------------------------student login----------------------------------------------------------------------->							 
							 
							 
		


  
  <!-- Trigger the modal with a button -->
  <!--button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button-->

  <!-- Modal -->
  
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color:#616161;border-radius:5px 5px 0px 0px;">

          <h2 style="text-align:center;color:white">Admin Login</h2>
        </div>
        <div class="modal-body">
          <form action="" method="post" class="form-horizontal">
  <div class="form-group">
    <label class="control-label col-sm-3" for="email">Username:</label>
    <div class="col-sm-9">
      <input  name="username" class="form-control" id="email" placeholder="Enter username" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="pwd">Password:</label>
    <div class="col-sm-9"> 
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password" required>
    </div>
  </div>
  
  <!---------------------------------------------------------------------------------------------------->
  
  <?php
if($_POST){
	
	
	
	echo '<div class="row" >
				
				<div class="col-md-12" >
					<div class="panel panel-default" style="border-radius:.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thin;text-align:center">
						
						<div class="panel-body">';
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	$u=mysqli_real_escape_string($con,$_POST['username']);

$p=mysqli_real_escape_string($con,md5($_POST['password']));

$sql="SELECT `username`,`password` FROM `admin` WHERE `username`= '$u'";
	$passw=mysqli_query($con,$sql) or die("error in connection".mysqli_error($con));
           
			$pas=mysqli_fetch_array($passw);
			$pass=$pas['password'];
			$user=$pas['username'];
if(($user==$u))
{			
			
if(($p==$pass))
{
	
	session_start();
	$_SESSION['username']=$u;
	$_SESSION['name']=$user;
	
	echo "<script> location.href='admin_home.php'; </script>";
        exit;
}
else
{
	
	
	echo '<span style="color:red;text-align:center;"><b><i>&#10008;&nbsp&nbspInvalid password. Please try again. </i></b></span>';
}
}
else{
	
	echo '<span style="color:red;text-align:center;"><b><i>&#10008;&nbsp&nbspInvalid username. Please try again. </i></b></span>';
	
}



echo '</div>
</div>
</div>
</div>';
}

?>
  
  <!---------------------------------------------------------------------------------------------------->
  
  
  
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      
    </div>
  </div>
  <div class="form-group ">
    <label class="control-label col-sm-3" for="pwd"></label>  
    <div class="col-sm-9" >
      <button type="submit" class="btn btn-primary btn-group-justified">Login</button>
    </div>
  </div>
</form>
        </div>
        <div class="modal-footer">
		  <a href="registration.php"><button type="button" class="btn btn-info" data-dismiss="modal" style="float:left;"><b>Student Login</b></button></a>
          
        </div>
      </div>
      
    </div>
  
  



					 
							 
<!----------------------------------------------------------------------------------------------------------------------------------->							 
							
							
							
							
						</div>
					</div>
				</div>
				
				
			</div>
		</div>
    </div>				
							
							
							
							
							
				
				
				
												
					
				
				
					
			
				
  
  
</div>





<?php include 'footer.php'; ?>
