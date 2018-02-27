<?php 
session_start();
if (!isset($_SESSION['username']))
	header('location: registration_admin.php');
?>


 <?php include 'includes/header.php'; ?>        
 
 
 <?php include 'connection.php'; ?>

 <form action="" method="post">
    <!--------------------------------------------------------------------------------------------------------------------->
	<head>
	<style>
  
  
  
  
  
	
	
	@media print{
  body * {
    visibility: hidden;
  }
  #section-to-print, #section-to-print * {
    visibility: visible;
    top: 0;
  }
  #section-to-print {
    position: absolute;
    left: 0;right: 0;
    top: -350px;
  }
}
  
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
					  <a href="admin_home.php"><h4><b>User:<span style="color:green;"><i>
		  <?php
		 $user=$_SESSION['username'];
		  echo $user;
		  
		  ?>
		  
		  
		  
		  </i></span></b></h4></a>
		  <button type="submit" name="logout"class="btn btn-danger">Logout</button>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav navbar-right">
						    <li><a href="admin_home.php">
							 <button type="button" class="btn  btn-info btn-lg" style="color:black;overflow:hidden;">
                             <!--<span class="glyphicon glyphicon-search"></span------> Queries/complaints
                             </button></a></li>
							
							 
							<li><a href="admin_registrations.php">
							 <button type="button" class="btn btn-info btn-lg" style="color:black;">
                             <!--<span class="glyphicon glyphicon-search"></span--->Registrations
                             </button></a> </li>
							 <li><a href="">
							 <button type="button" class="btn  btn-default btn-lg disabled" style="color:red;">
                             <!--<span class="glyphicon glyphicon-print"></span>--><b></b>Student database
                             </button></a> </li>
							<li><a href="admin_edit.php">
							 <button type="button" class="btn  btn-info btn-lg " style="color:black;">
                             <!--<span class="glyphicon glyphicon-print"></span>-->Edit Details
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
	echo "<script> location.href='registration_admin.php'; </script>";
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
          <h2><b>Student Databases</b></h2>
          <hr>
        </div>
		
		
	
	
	
	
	
	
	
  
					
							

		
			
			<div class="row">
				
				<div class="col-md-12" >
					<div class="panel panel-default"style="border-color:#3C7570; background-color:#e5e0e0;border-width: thick;overflow:hidden;">
						<!---<div class="panel-heading"style="background-color:#e5e0e0;border-radius: 1.5em 1.5em 0em 0em;"id="annon_head">
							<div   style="text-align:center;height:20px;color:#9E9EA7;padding-top:5px;"><h2>Administration</h2><hr></div>
						</div>-->
						<div class="panel-body">
						
						
						
						
						<!--------------------form header-------------------------------------------------------->
							
							
  
  <form action="" method="post" class="form-horizontal">
  
  
  
   
	  
	  
    
  
  
  <?php
  
  if(isset($_POST['dateQuery']))
  {
	  
	  $roll=$_POST['date'];
	  
	  
	  $sql="SELECT * FROM `new registration` WHERE `Roll`= '$roll'";
	$result=mysqli_query($con,$sql) or die("error ..semister registerion not done!! ".mysqli_error($con));
           
			$row=mysqli_fetch_array($result);
if($row)
{	$count = 1;
			echo '<div id="annon_head" >
          <h2><b>Database of '.$roll.' </b></h2>
          <hr  style="border-width: medium;border-color:#3C7570;">
        </div>
			';		


	while($row)
	{
		$name=$row['Name'];
		$roll =$row['Roll'];
		$email=$row['Email id'];
		$cat=$row['Category'];
		$course=$row['Course'];
		$sem=$row['Semister'];
		$year=$row['Year'];
		$branch=$row['Branch'];
		$mn=$row['Mobile No.'];
		$fn=$row["Father's Name"];
		$fmn=$row["Father's mobile No."];
		$s1=$row['Residential address'];
		$s2=$row['10th'];
		$pm=$row['12th'];
		$tn=$row['JEE main roll no.'];
        $td=$row['JEE main rank'];
		$sub=$row['JEE advance roll no.'];
		$subj=$row['JEE advance rank'];
		$bloc=$row['Blocked'];
		if($bloc=="yes")
		{
			echo' <span style="color:red;text-align:center;"><h3><b><u><i>This user is blocked.To unblock  go to end of this page.</i></u></b></h3></span>';
		}
		
		
		echo('<div class="col-md-12 " id="section-to-print" style="min-width: 620px;">
				<table class="table borderless" style="table-layout: fixed;">
				<thead>
				<td colspan=2><img src="images/log.png"/></td>
				<td  colspan=5>
				<p><b><h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspराष्ट्रीय प्रौद्योगिकी संस्थान सिक्किम</h3></b></p>
				<p><b><h3>National Institute of Technology Sikkim</h3></b></p>
				<p><h4><b><i>An Institute of National Importance,under MHRD,GoI</i></b></h4></p>
				<p><h4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRavangla, South Sikkim-737139</h4></p>
				<p><h4 style="text-align:right;"><i>Form no.:</i><b>BTech/........................&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></h4></p>
				
				</td>
				</thead>
				</table>
					<div class="panel panel-default"style="border-color:#3C7570; background-color:#e5e0e0;border-width: thick; ">
						<div class="panel-heading"style="border-width: thick;"id="annon_head">
							<div   style="text-align:center;height:20px;color:#9E9EA7;padding-top:5px;"><h2 style="color:teal;"><b>Database of '.$roll.'</b></h2><hr style="border-width: thick;border-color:#3C7570;"></div>
						</div>
						<div class="panel-body">');
		
		echo('
   <br>
  <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="name"  >Name:</label></div>
    <div class="col-md-9">'.$name.'</div>
  </div>
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="roll"  >Roll No.:</label></div>
    <div class="col-md-9">'.$roll.'</div>
  </div>
  </div>
  
  
  
  <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="email"  >Email id:</label></div>
    <div class="col-md-9">'.$email.'</div>
  </div>
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="category"  >Category:</label></div>
    <div class="col-md-9">'.$cat.'
	</div>
  </div>
  </div>
  
  
  
  
 
	 
	 
 
  
  
  
  <!----------------------------------------------end of 1st line----------------------------------------------------------------------------------->
  
  
  
  
  
  <!------------------------------------------2nd line--------------------------------------------------------------------------->
     
	 
	 
	 
	 
	 
	 
	<div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="course" >Course:</label></div>
    <div class="col-md-9">'.$course.'
	</div>
  </div>
  
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="semister"  >Semester:</label></div>
    <div class="col-md-9">'.$sem.'
	</div>
  </div>
  
  </div> 
	 
	 
	 
	 
	 <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="year"  >Year:</label></div>
    <div class="col-md-9">'.$year.'
	</div>
  </div>
  
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="branch">Branch:</label></div>
    <div class="col-md-9">'.$branch.'
	</div>
  </div>
  
  </div> 
	
<div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="number">Mobile&nbspNo.:</label></div>
    <div class="col-md-9">'.$mn.'</div>
  </div>
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3" style="padding-left:0px;"><label for="fname"  >Father\'s&nbspName:</label></div>
    <div class="col-md-9">'.$fn.'</div>
  </div>
  </div>
  
  
  
  
  
   <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-4"><label for="fnumber"  >Father\'s&nbspmobile&nbspNo.:</label></div>
    <div class="col-md-8">'.$fmn.'</div>
  </div>
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-4"><label for="fnumber"  >Residential&nbspAddress:</label></div>
    <div class="col-md-8">'.$s1.'</div>
  </div>
  
  </div>	
	 
	 
	 
	 
	 
	
	  
 
	<!----------------------------------------end of 2nd line------------------------------------------------------------>
	
	<hr style="border-width: medium;border-color:#3C7570;">


     
	 
	 <div   style="text-align:center;color:#9E9EA7;" id="annon_head"><h2>Acedemic details</h2><hr style="border-width: medium;border-color:#3C7570;"></div>
	 
	 


	 
	
	<!-------------------------------------end of third line------------------------------------------------------------------------->
	<!------------------------------------acedemic and payment details---------------------------------------------------------------->
	<br>
	<div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-6"><label for="10" >10th&nbsp(%/CGPA): </label></div>
    <div class="col-md-6">'.$s2.'</div>
  </div>
  
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-6"><label for="12" >12th&nbsp(%/CGPA): </label></div>
    <div class="col-md-6">'.$pm.'</div>
  </div>
  
  </div>
  
  
  
  <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-6"><label for="mainroll" >JEE&nbspmain&nbsproll&nbspno.:</label></div>
    <div class="col-md-6">'.$tn.'</div>
  </div>
  
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-6"><label for="mainrank" >JEE&nbspmain&nbsprank: </label></div>
    <div class="col-md-6">'.$td.'</div>
  </div>
  
  </div>
  <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-6"><label for="mainroll" >JEE&nbspAdvance&nbsproll&nbspno.:</label></div>
    <div class="col-md-6">'.$sub.'</div>
  </div>
  
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-6"><label for="mainrank" >JEE&nbspAdvance&nbsprank: </label></div>
    <div class="col-md-6">'.$subj.'</div>
  </div>
  
  </div>
  </div>
  </div>
  </div>
		');
		
		
		
		
		$row=mysqli_fetch_array($result);
		
		
		
	}
	

	
	
	
	echo '</tbody></table></div>
	<div class="col-md-12">
	   <br>
	   
    <div class=" col-sm-4" >
	<p><b><h4><input type="checkbox" name="droll" value="'.$roll.'"><span style="color:red">&nbsp&nbspCheck it if you want to delete this database!</span></h4></b></p>
    <p><button type="submit" name="deleted" class="btn btn-danger btn-lg"><b>&nbspDelete '.$roll.'\'s Database</b></button></p>
    </div>
	<div class=" col-sm-4" >
	<hr style="border-color:#e5e0e0;">
      <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="button" onclick="window.print();return false;"  class="btn btn-success btn-lg"><b>&#128439&nbspClick to PRINT</b></button></p>
    </div>';
	if($bloc=="yes")
	{
		echo '<div class=" col-sm-4" >
	
	<p><b><h4><input type="checkbox" name="broll" value="'.$roll.'"><span style="color:red">&nbsp&nbspCheck it if you want to unblock '.$roll.'!</span></h4></b></p>
      <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" name="unblock"  class="btn btn-warning btn-lg"><b>&#10004&nbspUnblock '.$roll.'</b></button></p>
    </div>
	<br><br><br><br><br><br><br><br>
	
	
  </div>	
	';
	}
	else
	{
	
	echo '<div class=" col-sm-4" >
	
	<p><b><h4><input type="checkbox" name="broll" value="'.$roll.'"><span style="color:red">&nbsp&nbspCheck it if you want to block '.$roll.'!</span></h4></b></p>
      <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" name="block"  class="btn btn-warning btn-lg"><b>&#10008&nbspBlock '.$roll.'</b></button></p>
    </div>
	<br><br><br><br><br><br><br><br>
	
	
  </div>	
	';
	}

  
}
  else
  {
	  echo '<div id="annon_head" >
          <h2><b>Database of '.$roll.' </b></h2>
          <hr  style="border-width: medium;border-color:#3C7570;">
        </div><br>
	  <div class="row" style="padding-left:26%;">
				
				<div class="col-md-8" >
					<div class="panel panel-default" style="border-radius:.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thin">
						
						<div class="panel-body">';
	  
	 echo '<span style="color:red;text-align:center;"><b><i>&#10008;&nbsp&nbspDatabase of '.$roll.' not found. </i></b></span>'; 
	  echo '</div>
</div>
</div>
</div>';

  }
	  
	  
  }
  
  
  else
  
    if(isset($_POST['all']))
  {
	  
	  $_SESSION['do']="all_datbase";
	  echo '</form>
  <form action="Print_excel.php" method="post" class="form-horizontal">';
	  
	  
	  
	  
	  $sql="SELECT * FROM `new registration` ";
	$result=mysqli_query($con,$sql) or die("error ..semister registerion not done!! ".mysqli_error($con));
           
			$row=mysqli_fetch_array($result);
if($row)
{	$count = 1;
			echo '<div id="annon_head" >
          <h2><b>All Student Databases </b></h2>
          <hr  style="border-width: medium;border-color:#3C7570;">
        </div>
			';		
echo ('<div style="overflow:auto;max-height:800px;">
<table  style="border-radius: 1.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: medium; " class="table table-striped table-responsive"  >');
echo ('<thead>
      <tr>
	    <th>S.NO.</th>
        <th>NAME</th>
        <th>ROLL NO.</th>
        <th>EMAIL ID</th>
		<th>CATEGORY</th>
		<th>COURSE</th>
		<th>SEMESTER</th>
		<th>YEAR</th>
		<th>BRANCH</th>
		<th>MOBILE NO.</th>
		<th>FATHER NAME</th>
		<th>FATHER MOBILE NO.</th>
		<th>RESIDENTIAL ADDRESS</th>
		<th>10TH %/CGPA</th>
		<th>12TH %AGE</th>
		<th>JEE MAIN ROLL NO.</th>
		<th>JEE MAIN RANK</th>
		<th>JEE ADVANCE ROLL NO.</th>
		<th>JEE ADVANCE RANK</th>
      </tr>
    </thead>
	<tbody>');
	while($row)
	{
		$name=$row['Name'];
		$roll =$row['Roll'];
		$email=$row['Email id'];
		$cat=$row['Category'];
		$course=$row['Course'];
		$sem=$row['Semister'];
		$year=$row['Year'];
		$branch=$row['Branch'];
		$mn=$row['Mobile No.'];
		$fn=$row["Father's Name"];
		$fmn=$row["Father's mobile No."];
		$s1=$row['Residential address'];
		$s2=$row['10th'];
		$pm=$row['12th'];
		$tn=$row['JEE main roll no.'];
        $td=$row['JEE main rank'];
		$sub=$row['JEE advance roll no.'];
		$subj=$row['JEE advance rank'];
		echo ('<tr>
		<td>'.$count++.'</td>
		<td>'.$name.'</td>
		<td>'.$roll.'</td>
		<td>'.$email.'</td>
		<td>'.$cat.'</td>
		<td>'.$course.'</td>
		<td>'.$sem.'</td>
		<td>'.$year.'</td>
		<td>'.$branch.'</td>
		<td>'.$mn.'</td>
		<td>'.$fn.'</td>
		<td>'.$fmn.'</td>
		<td>'.$s1.'</td>
		<td>'.$s2.'</td>
		<td>'.$pm.'</td>
		<td>'.$tn.'</td>
		<td>'.$td.'</td>
		<td>'.$sub.'</td>
		<td>'.$subj.'</td>
		
		</tr>
		
		');
		
		
		$row=mysqli_fetch_array($result);
		
		
		
	}
	

	
	
	
	echo '</tbody></table></div>';
	
	 echo '<div class="form-group "> 
    <div class="col-sm-offset-2 col-sm-8" style="padding-left:11%;padding-right:11%">
      <button type="submit" name="print" class="btn btn-primary btn-group-justified">Print database</button>
    </div>
  </div>';

  
}
  else
  {
	  echo '<div id="annon_head" >
          <h2><b>All Student Database </b></h2>
          <hr  style="border-width: medium;border-color:#3C7570;">
        </div><br>
	  <div class="row" style="padding-left:26%;">
				
				<div class="col-md-8" >
					<div class="panel panel-default" style="border-radius:.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thin">
						
						<div class="panel-body">';
	  
	 echo '<span style="color:red;text-align:center;"><b><i>&#10008;&nbsp&nbspNo Database found. </i></b></span>'; 
	 echo '</div>
</div>
</div>
</div>';
 
  }
	 
	  
  }
  
  
  else
  
  if(isset($_POST['batchQuery']))
  {
	  
	  $year=$_POST['year'];
	  $_SESSION['do']="batch_datbase";
	  $_SESSION['batch']=$year;
	  
	  
	  $sql="SELECT * FROM `new registration` WHERE `Year`= '$year' ";
	$result=mysqli_query($con,$sql) or die("error ..semister registerion not done!! ".mysqli_error($con));
           
			$row=mysqli_fetch_array($result);
if($row)
{	$count = 1;
			echo '<div id="annon_head" >
          <h2><b>Databse of '.$year.' </b></h2>
          <hr  style="border-width: medium;border-color:#3C7570;">
        </div>
			';		
echo ('<div style="overflow:auto;max-height:800px;">
<table  style="border-radius: 1.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: medium; " class="table table-striped table-responsive"  >');
echo ('<thead>
      <tr>
	    <th>S.NO.</th>
        <th>NAME</th>
        <th>ROLL NO.</th>
        <th>EMAIL ID</th>
		<th>CATEGORY</th>
		<th>COURSE</th>
		<th>SEMESTER</th>
		<th>YEAR</th>
		<th>BRANCH</th>
		<th>MOBILE NO.</th>
		<th>FATHER NAME</th>
		<th>FATHER MOBILE NO.</th>
		<th>RESIDENTIAL ADDRESS</th>
		<th>10TH %/CGPA</th>
		<th>12TH %AGE</th>
		<th>JEE MAIN ROLL NO.</th>
		<th>JEE MAIN RANK</th>
		<th>JEE ADVANCE ROLL NO.</th>
		<th>JEE ADVANCE RANK</th>
      </tr>
    </thead>
	<tbody>');
	while($row)
	{
		$name=$row['Name'];
		$roll =$row['Roll'];
		$email=$row['Email id'];
		$cat=$row['Category'];
		$course=$row['Course'];
		$sem=$row['Semister'];
		$year=$row['Year'];
		$branch=$row['Branch'];
		$mn=$row['Mobile No.'];
		$fn=$row["Father's Name"];
		$fmn=$row["Father's mobile No."];
		$s1=$row['Residential address'];
		$s2=$row['10th'];
		$pm=$row['12th'];
		$tn=$row['JEE main roll no.'];
        $td=$row['JEE main rank'];
		$sub=$row['JEE advance roll no.'];
		$subj=$row['JEE advance rank'];
		echo ('<tr>
		<td>'.$count++.'</td>
		<td>'.$name.'</td>
		<td>'.$roll.'</td>
		<td>'.$email.'</td>
		<td>'.$cat.'</td>
		<td>'.$course.'</td>
		<td>'.$sem.'</td>
		<td>'.$year.'</td>
		<td>'.$branch.'</td>
		<td>'.$mn.'</td>
		<td>'.$fn.'</td>
		<td>'.$fmn.'</td>
		<td>'.$s1.'</td>
		<td>'.$s2.'</td>
		<td>'.$pm.'</td>
		<td>'.$tn.'</td>
		<td>'.$td.'</td>
		<td>'.$sub.'</td>
		<td>'.$subj.'</td>
		
		</tr>
		
		');
		
		
		$row=mysqli_fetch_array($result);
		
		
		
	}
	

	
	 echo '</form>
  <form action="Print_excel.php" method="post" class="form-horizontal">';
	
	echo '</tbody></table></div>';
	 echo '<div class="form-group "> 
    <div class="col-sm-offset-2 col-sm-8" style="padding-left:11%;padding-right:11%">
      <button type="submit" name="print" class="btn btn-primary btn-group-justified">Print database</button>
    </div>
  </div>';
  echo '</form>
  <form action="" method="post" class="form-horizontal">';

  
}
  else
  {
	  echo '<div id="annon_head" >
          <h2><b>Databse of '.$year.' </b></h2>
          <hr  style="border-width: medium;border-color:#3C7570;">
        </div><br>
	  <div class="row" style="padding-left:26%;">
				
				<div class="col-md-8" >
					<div class="panel panel-default" style="border-radius:.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thin">
						
						<div class="panel-body">';
	  
	 echo '
	 <span style="color:red;text-align:center;"><b><i>&#10008;&nbsp&nbspNo Database of '.$year.' found. </i></b></span>'; 
	 
echo '</div>
</div>
</div>
</div>';
	 
  }
	  
	  
  }
  else 
  
 {
		  
		  if(isset($_POST['dated']))
	  {
		  echo (' <div class="row" style="padding-left:16%;">
		  <div class="col-md-4"><label for="sgpa" style="float:right;">Enter Student Roll No.: </label></div>
	      <div class="col-md-4"><input type="text" name="date" class="form-control" id="fees" placeholder="Roll No." required></div>
		  </div>');
		  echo'<br> <div class="form-group "> 
    <div class="col-sm-offset-2 col-sm-8" style="padding-left:11%;padding-right:11%">
      <button type="submit" name="dateQuery" class="btn btn-primary btn-group-justified">Get Database</button>
    </div>
  </div>';
	  }else
	  if(isset($_POST['batch']))
	  {
		  echo (' <div class="row" style="padding-left:11%;">
		  
    <div class="col-md-4"><label for="year"  style="float:right;">Select Batch:</label></div>
    <div class="col-md-4"><select class="form-control" name="year" id="year" style="width:100%;">
        <option>--Select batch--</option>
		<option value="1st year">1st year Batch</option>
        <option value="2nd year">2nd year Batch</option>
        <option value="3rd year">3rd year Batch</option>
        <option value="4th year">4th year Batch</option>
      </select>
	</div>
  
		  </div>');
		  echo'<br> <div class="form-group "> 
    <div class="col-sm-offset-2 col-sm-8" style="padding-left:11%;padding-right:11%">
      <button type="submit" name="batchQuery" class="btn btn-primary btn-group-justified">Get Database</button>
    </div>
  </div>';
	  }
	  else
	  {
		echo('<div class="form-group "> 
    <div class="col-sm-offset-2 col-sm-8" style="padding-left:11%;padding-right:11%">
      <button type="submit" name="all" class="btn btn-primary btn-group-justified">Get All Databases</button>
    </div>
  </div>


		<div class="form-group ">
		
		<div class="col-sm-offset-2 col-sm-8" style="padding-left:11%;padding-right:11%">
      <button type="submit" name="dated" class="btn btn-primary btn-group-justified">Get Databases by Student Roll No.</button>
	  </div></div>
	  <div class="form-group "> 
    <div class="col-sm-offset-2 col-sm-8" style="padding-left:11%;padding-right:11%">
      <button type="submit" name="batch" class="btn btn-primary btn-group-justified">Get Databases by Students Batch</button>
    </div>
  </div>
	  ');  
	  }
		  
	  }

   if(isset($_POST['deleted']))
	{
		
		if(isset($_POST['droll']))
		{	
		$del=$_POST['droll'];
		
			
		$sql="DELETE FROM `new registration` WHERE `Roll` = '$del'";
	     mysqli_query($con,$sql) or die("error ".mysqli_error($con));
		 
		echo '
	  <div class="row" style="padding-left:26%;">
				
				<div class="col-md-8" >
					<div class="panel panel-default" style="border-radius:.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thin">
						
						<div class="panel-body">';
		echo'<span style="color:green;text-align:center;"><b><i>	&#10004;&nbsp&nbspregistration form of '.$del.' is successfully deleted. </i></b></span></div></div></div></div>';
		}
		else{
		 echo '
	  <div class="row" style="padding-left:26%;">
				
				<div class="col-md-8" >
					<div class="panel panel-default" style="border-radius:.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thin">
						
						<div class="panel-body">';
		echo'<span style="color:red;text-align:center;"><b><i>	&#10008;&nbsp&nbspregistration form was not deleted as confirmation checkbox was not checked. Please try again. </i></b></span></div></div></div></div>';
		}
	}
	
	
	
	if(isset($_POST['block']))
	{
		
		if(isset($_POST['broll']))
		{	
		$del=$_POST['broll'];
		  $n="yes";
			
		$sq="UPDATE `new registration` SET `Blocked`='$n' WHERE `Roll`= '$del'";	
        mysqli_query($con,$sq) or die("error in registration".mysqli_error($con));
		 
		echo '
	  <div class="row" style="padding-left:26%;">
				
				<div class="col-md-8" >
					<div class="panel panel-default" style="border-radius:.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thin">
						
						<div class="panel-body">';
		echo'<span style="color:green;text-align:center;"><b><i>	&#10004;&nbsp&nbsp'.$del.' is successfully blocked. </i></b></span></div></div></div></div>';
		}
		else{
		 echo '
	  <div class="row" style="padding-left:26%;">
				
				<div class="col-md-8" >
					<div class="panel panel-default" style="border-radius:.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thin">
						
						<div class="panel-body">';
		echo'<span style="color:red;text-align:center;"><b><i>	&#10008;&nbsp&nbspuser was not blocked as confirmation checkbox was not checked. Please try again. </i></b></span></div></div></div></div>';
		}
	}
	
	if(isset($_POST['unblock']))
	{
		
		if(isset($_POST['broll']))
		{	
		$del=$_POST['broll'];
		  $n="";
			
		$sq="UPDATE `new registration` SET `Blocked`='$n' WHERE `Roll`= '$del'";	
        mysqli_query($con,$sq) or die("error in registration".mysqli_error($con));
		 
		echo '
	  <div class="row" style="padding-left:26%;">
				
				<div class="col-md-8" >
					<div class="panel panel-default" style="border-radius:.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thin">
						
						<div class="panel-body">';
		echo'<span style="color:green;text-align:center;"><b><i>	&#10004;&nbsp&nbsp'.$del.' is successfully unblocked. </i></b></span></div></div></div></div>';
		}
		else{
		 echo '
	  <div class="row" style="padding-left:26%;">
				
				<div class="col-md-8" >
					<div class="panel panel-default" style="border-radius:.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thin">
						
						<div class="panel-body">';
		echo'<span style="color:red;text-align:center;"><b><i>	&#10008;&nbsp&nbspuser was not unblocked as confirmation checkbox was not checked. Please try again. </i></b></span></div></div></div></div>';
		}
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
