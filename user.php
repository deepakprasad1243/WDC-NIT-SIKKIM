<?php 
session_start();
if (!isset($_SESSION['username']))
	header('location: registration.php');
?>
      <?php include 'includes/header.php'; ?>       





	  <?php include 'connection.php'; ?>

 <form action="" method="post">
    <div class="form-inline ">
          
          <h4><b><a href="user.php">User:<span style="color:green;"><i>
		  <?php
		  
		 $user=$_SESSION['username'];
		  echo $user;
		  
		  ?>
		  
		  
		  
		  </i></span></a></b></h4>
		  
      <button type="submit" name="logout"class="btn btn-danger">Logout</button>
    
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
							<div   style="text-align:center;height:20px;color:#9E9EA7;padding-top:5px;"><h2><b>Activities</b></h2><hr></div>
						</div>
						<div class="panel-body">
													<p> 
							 <a href="change.php">
							 <button type="button" class="btn  btn-info btn-lg" style="color:black;width:90%;margin-left:5%;">
                             <!--<span class="glyphicon glyphicon-search"></span---->Change password
                             </button></a>
							</p>
						<p> <a href="ruser_list.php">
							 <button type="button" class="btn  btn-info btn-lg" style="color:black;width:90%;margin-left:5%;">
                             <!--<span class="glyphicon glyphicon-search"></span------>Registration
                             </button></a>	
							
<!---------------------------------------------------------------------------------------------------------------------------->
                              


<!-----------------------------------------------------student login----------------------------------------------------------------------->							 
							 
							 
		


 



					 
							 
<!----------------------------------------------------------------------------------------------------------------------------------->							 
							</p>
							<p> 
							 <a href="view.php">
							 <button type="button" class="btn btn-info btn-lg" style="color:black;width:90%;margin-left:5%;">
                             <!--<span class="glyphicon glyphicon-search"></span--->Edit/Print form
                             </button></a>
							</p>
							<p> 
							 <a href="querry.php">
							 <button type="button" class="btn  btn-info btn-lg" style="color:black;width:90%;margin-left:5%;">
                             <!--<span class="glyphicon glyphicon-print"></span>-->File query
                             </button></a>
							</p>
							<p> 
							 <a href="#">
							 <button type="button" class="btn  btn-info btn-lg" style="color:black;width:90%;margin-left:5%;">
                             <!--<span class="glyphicon glyphicon-print"></span>-->Result
                             </button></a>
							</p>
							
							
						</div>
					</div>
				</div>
<!--------------------------------------------------------content start--------------------------------------------------------------------------------->
			
  
    
	         
			
	<div class="col-md-9">	       





					   <!--div id="annon_head" style="padding-left:32px;">
          <h2><b>WELCOME</b></h2>
          <hr>
        </div-->
		
	
			
			<div class="row" >
				
				<div class="col-md-12" >
					<div class="panel panel-default"style="border-radius: 1.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thick;">
						<!---<div class="panel-heading"style="background-color:#e5e0e0;border-radius: 1.5em 1.5em 0em 0em;"id="annon_head">
							<div   style="text-align:center;height:20px;color:#9E9EA7;padding-top:5px;"><h2>Administration</h2><hr></div>
						</div>-->
						<div class="panel-body">	
	
	<span style="color:green;text-align:center;padding-left:30%;"><b><h2><span style="color:red">WELCOME :</span> <?php
		  
		 $use=$_SESSION['name'];
		  echo $use;
		  
		  ?></h2></b> </span>
	
	<!--span style="color:teal;text-align:center;padding-left:30%;"><h2><img src="images/arrow.png" ></span><span><b>&nbsp&nbsp&nbsp&nbsp&nbspChoose what to do from activities.</h2></b> </span-->
	
	<?php
	
	$u=$_SESSION['username'];
	$sql="SELECT * FROM  `new registration` WHERE `Roll`= '$u'";
$result=mysqli_query($con,$sql) or die("error ..semister registerion not done!! ".mysqli_error($con));
           
			$row=mysqli_fetch_array($result);
			$cat=$row['Category'];
			$course=$row['Course'];
			$sem=$row['Semister'];
			$y=$row['Year'];
			$Branch=$row['Branch'];
			$mn=$row['Mobile No.'];
			$fn=$row["Father's Name"];
			$fmn=$row["Father's mobile No."];
			$ten=$row['10th'];
			$twelve=$row['12th'];
			$jeeroll=$row['JEE main roll no.'];
			$jeerank=$row['JEE main rank'];
			
			
	
	?>
	<!------------------------------------profile--------------------------------------------------->
	 <!----------------------------------------------1st line--------------------------------------------------------------------------------->
  <hr style="border-width: medium;border-color:#3C7570;">
   <div   style="color:#9E9EA7;" id="annon_head"><h2> Your Profile</h2><hr style="border-width: medium;border-color:#3C7570;"></div><br>
  <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="name"  style="float:right;">Name:</label></div>
    <div class="col-md-9"><input type="text" name="name" class="form-control" id="name" placeholder="<?php $use=$_SESSION['name'];echo $use; ?>" readonly   ></div>
  </div>
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="roll"  style="float:right;">Roll No.:</label></div>
    <div class="col-md-9"><input type="text" name="roll" class="form-control" id="roll" placeholder="<?php $use=$_SESSION['username'];echo $use; ?>" readonly   ></div>
  </div>
  </div>
  
  
  
  <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="email"  style="float:right;">Email id:</label></div>
    <div class="col-md-9"><input type="email" name="email" class="form-control" id="email" placeholder="<?php $use=$_SESSION['email'];echo $use; ?>" readonly   ></div>
  </div>
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="category"  style="float:right;">Category:</label></div>
    <div class="col-md-9"><input type="email" name="email" class="form-control" id="email" placeholder="<?php echo $cat; ?>" readonly   >
	</div>
  </div>
  </div>
  
  
  
  
 
	 
	 
 
  
  
  
  <!----------------------------------------------end of 1st line----------------------------------------------------------------------------------->
  
  
  
  
  
  <!------------------------------------------2nd line--------------------------------------------------------------------------->
     
	 
	 
	 
	 
	 
	 
	<div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="course" style="float:right;">Course:</label></div>
    <div class="col-md-9"><input type="email" name="email" class="form-control" id="email" placeholder="<?php echo $course; ?>" readonly   >
	</div>
  </div>
  
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="semister"  style="float:right;">Semester:</label></div>
    <div class="col-md-9"><input type="email" name="email" class="form-control" id="email" placeholder="<?php echo $sem; ?>" readonly   >
	</div>
  </div>
  
  </div> 
	 
	 
	 
	 
	 <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="year"  style="float:right;">Year:</label></div>
    <div class="col-md-9"><input type="email" name="email" class="form-control" id="email" placeholder="<?php echo $y; ?>" readonly   >
	</div>
  </div>
  
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="branch"  style="float:right;">Branch:</label></div>
    <div class="col-md-9"><input type="email" name="email" class="form-control" id="email" placeholder="<?php echo $Branch; ?>" readonly   >
	</div>
  </div>
  
  </div> 
	
<div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="number"  style="float:right;">Mobile&nbspNo.:</label></div>
    <div class="col-md-9"><input type="number" name="number" class="form-control" id="number" placeholder="<?php echo $mn; ?>" readonly></div>
  </div>
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3" style="padding-left:0px;"><label for="fname"  style="float:right;">Father's&nbspName:</label></div>
    <div class="col-md-9"><input type="text" name="fname" class="form-control" id="fname" placeholder="<?php echo $fn; ?>" readonly></div>
  </div>
  </div>
  
  
  
  
  
   <div class="row">
  <div class=" col-md-12" style="padding-bottom:10px;">
    <div class="col-md-5"><label for="fnumber"  style="float:right;">Father's&nbspmobile&nbspNo.:</label></div>
    <div class="col-md-7"><input type="number" name="fnumber" class="form-control" id="fnumber" placeholder="<?php echo $fmn; ?>" readonly></div>
  </div>
  
  </div>	
	 
	 
	 
	 
	 
	
	  
 
	<!----------------------------------------end of 2nd line------------------------------------------------------------>
	
	<hr style="border-width: medium;border-color:#3C7570;">


     
	 
	 <div   style="text-align:center;color:#9E9EA7;" id="annon_head"><h2>Your Acedemic details</h2><hr style="border-width: medium;border-color:#3C7570;"></div>
	 
	 


	 
	
	<!-------------------------------------end of third line------------------------------------------------------------------------->
	<!------------------------------------acedemic and payment details---------------------------------------------------------------->
	<br>
	<div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-6"><label for="10" style="float:right;">10th&nbsp(%/CGPA): </label></div>
    <div class="col-md-6"><input type="number" step="any" name="ten" class="form-control" id="10" placeholder="<?php echo $ten; ?>" readonly></div>
  </div>
  
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-6"><label for="12" style="float:right;">12th&nbsp(%/CGPA): </label></div>
    <div class="col-md-6"><input type="number" step="any" name="twelve" class="form-control" id="12" placeholder="<?php echo $twelve; ?>" readonly></div>
  </div>
  
  </div>
  
  
  
  <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-6"><label for="mainroll" style="float:right;">JEE&nbspmain&nbsproll&nbspno.:</label></div>
    <div class="col-md-6"><input type="number" name="mainroll" class="form-control" id="mainroll" placeholder="<?php echo $jeeroll; ?>" readonly></div>
  </div>
  
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-6"><label for="mainrank" style="float:right;">JEE&nbspmain&nbsprank: </label></div>
    <div class="col-md-6"><input type="number" name="mainrank" class="form-control" id="mainrank" placeholder="<?php echo $jeerank; ?>" readonly></div>
  </div>
  
  </div>
  
  
  
  
  
  
  
  
  
  
  
 
	
	
	
	
	
	<!---------------------------------------------------------------------------------------------------------------------------------->
	<!---------------------------------------------------------------------------------------------->
	
	
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
