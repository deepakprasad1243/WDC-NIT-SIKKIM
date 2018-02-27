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
							<li><a href="ruser_list.php">
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
          <h2><b>Semester Registration Form</b></h2>
          <hr>
        </div>
		
		
	
	
	<?php
if($_GET){
$s=$_GET['semister'];
$c=$_GET['course'];
$b=$_GET['branch'];


if($c=="btech")
{
	if(($b=="cse")&&($s!="invalid"))
	{
		echo "<script> location.href='registration_form_btech_cse.php'; </script>";
        exit;
	} else
	if(($b=="ece")&&($s!="invalid"))
	{
		echo "ece btech";
	} else
	if(($b=="eee")&&($s!="invalid"))
	{
		echo "eee btech";
	} else
	if(($b=="ce")&&($s!="invalid"))
	{
		echo "ce btech";
	} else
	if(($b=="me")&&($s!="invalid"))
	{
		echo "me btech";
	} else
	if(($b=="bt")&&($s!="invalid"))
	{
		echo "bt btech";
	}
	else
    {
    echo '<span style="color:red;text-align:center;padding-left:30%;"><b><h3>Some invalid choice selected!!!!.please select valid branch or valid semister for B.tech programme</h3></b> </span>';	
    }
}
else
if($c=="mtech")	
{
	if(($b=="cse")&&($s!="invalid")&&($s<="4"))
	{
		echo "cse mtech";
	} else
	if(($b=="ece")&&($s!="invalid")&&($s<="4"))
	{
		echo "ece Mtech";
	} else
	if(($b=="eee")&&($s!="invalid")&&($s<="4"))
	{
		echo "eee Mtech";
	}
	else
    {
    echo '<span style="color:red;text-align:center;padding-left:30%;"><b><h3>Some invalid choice selected!!!!.please select valid branch or valid semister for M.tech programme</h3></b> </span>';	
    }
	
}
else
if($c=="phd")
{
	if(($b=="cse")&&($s!="invalid"))
	{
		echo "cse phd";
	} else
	if(($b=="ece")&&($s!="invalid"))
	{
		echo "ece phd";
	} else
	if(($b=="eee")&&($s!="invalid"))
	{
		echo "eee phd";
	} else
	if(($b=="phy")&&($s!="invalid"))
	{
		echo "physics phd";
	} else
	if(($b=="me")&&($s!="invalid"))
	{
		echo "me phd";
	} else
	if(($b=="chem")&&($s!="invalid"))
	{
		echo "chemistry phd";
	} else
	if(($b=="math")&&($s!="invalid"))
	{
		echo "mathematics phd";
	}
	else
    {
    echo '<span style="color:red;text-align:center;padding-left:30%;"><b><h3>Some invalid choice selected!!!!.please select valid branch or valid semister for B.tech programme</h3></b> </span>';	
    }
}	
else
{
echo '<span style="color:red;text-align:center;padding-left:30%;"><b><h3>No course selected!!!!.please select your course </h3></b></span>';	
}






   


}
?>
	
	
	
	
  
					
							

		<div class="wrapper" >
			
			<div class="row" style="padding-left:10%;padding-right:10%;">
				
				<div class="col-md-12" >
					<div class="panel panel-default"style="border-radius: 1.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thick;">
						<!---<div class="panel-heading"style="background-color:#e5e0e0;border-radius: 1.5em 1.5em 0em 0em;"id="annon_head">
							<div   style="text-align:center;height:20px;color:#9E9EA7;padding-top:5px;"><h2>Administration</h2><hr></div>
						</div>-->
						<div class="panel-body">
						
						
						
						
						<!--------------------form header-------------------------------------------------------->
							
							
  
  <form action="" method="get">
    <div class="form-inline">
     <!-- <label for="sel1">Select list (select one):</label>-->
	 <div class="col-md-4">
      <select class="form-control " name="course" style="width:100%;">
        <option>--------Seclect course--------</option>
		<option value="btech">B.Tech</option>
        <option value="mtech" disabled>M.Tech</option>
        <option value="phd" disabled>Phd</option>
        
      </select>
      </div>
	  
	  <div class="col-md-4">
      <!--label for="sel2">Select list (select one):</label-->
      <select class="form-control" name="semister"  style="width:100%;">
        <option value="invalid">--------Select semester--------</option>
        <option value="1">1st semester</option>
        <option value="2">2nd semester</option>
        <option value="3">3rd semester</option>
		<option value="4">4th semester</option>
		<option value="5">5th semester</option>
		<option value="6">6th semester</option>
		<option value="7">7th semester</option>
		<option value="8">8th semester</option>
      </select>
	  </div>
	  
	 <!-- <div class="col-md-2">
      <select class="form-control " id="sel1" style="width:100%;">
        <option>--Seclect year--</option>
		<option>1st year</option>
        <option>2nd year</option>
        <option>3rd year</option>
        <option>4th year</option>
      </select>
      </div>--->
	  
	  <div class="col-md-4">
	  <!---label for="sel3">Select list (select one):</label-->
      <select class="form-control" name="branch"  style="width:100%;">
        <option>------------select branch------------</option>
        <option value="cse">Computer Science And Engineering</option>
        <option value="ece"disabled>Electronics And Communication Engineering</option>
        <option value="eee"disabled>Electrical And Electronics Engineering</option>
		<option value="me"disabled>Mechanical Engineering</option>
		<option value="ce"disabled>Civil Engineering</option>
		<option value="bt"disabled>Biotechnology</option>
		<option value="math"disabled>Mathematics</option>
		<option value="phy"disabled>Physics</option>
		<option value="chem"disabled>Chemistry</option>
		<option value="sst"disabled>Humanities And Social Sciences</option>
      </select>
	  </div><hr>
	  <div class="col-md-12">
	   <br>
    <div style="padding-left:45%;">
      <button type="submit" class="btn btn-primary">Load form</button>
    </div>
  </div>
    </div>
  </form>
  

							
							
							
							
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



<!---------------------------------------------------------------------php to get data-------------------------------------->



<!-------------------------------------------------------------------------------------------------------------------------->

<?php include 'footer.php'; ?>
