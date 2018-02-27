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
							
							 <li><a href="">
							 <button type="button" class="btn  btn-default btn-lg disabled" style="color:red;">
                             <!--<span class="glyphicon glyphicon-print"></span>--><b></b>Registrations
                             </button></a> </li>
							
							<li><a href="admin_database.php">
							 <button type="button" class="btn btn-info btn-lg" style="color:black;">
                             <!--<span class="glyphicon glyphicon-search"></span--->Student database
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
          <h2><b>Registrations</b></h2>
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
	  
	  $sql="SELECT * FROM `registration` WHERE `Roll`= '$roll'";
	$result=mysqli_query($con,$sql) or die("error ..semister registerion not done!! ".mysqli_error($con));
           
			$row=mysqli_fetch_array($result);
if($row)
{	$count = 1;
			echo '<div id="annon_head" >
          <h2><b>Registration form of '.$roll.' </b></h2>
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
		$y=$row['Year'];
		$Branch=$row['Branch'];
		$mn=$row['Mobile No.'];
		$fn=$row["Father's Name"];
		$fmn=$row["Father's mobile No."];
		$s1=$row['SGPA 1'];
		$s2=$row['SGPA 2'];
		$pm=$row['Payment Mode'];
		$tn=$row['Transaction No.'];
        $td=$row['transaction Date'];
		$subject=explode(",",$row['Subject(s) opted {semister}']);
		
		echo('<div class="col-md-12 " id="section-to-print" style="min-width: 420px;padding-left:5%;padding-right:5%;">
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
							<div   style="text-align:center;height:20px;color:#9E9EA7;padding-top:5px;"><h2 style="color:teal;"><b>registration form (B.tech) computer science & engineering department</b></h2><hr style="border-width: thick;border-color:#3C7570;"></div>
						</div>
						<div class="panel-body">');
		
		
		echo ('
		
		
		
  
  
  <!----------------------------------------------1st line--------------------------------------------------------------------------------->
  <br>
  <table class="table table-bordered" style="border-width:2px;border-color:black;table-layout: fixed;" >
  <tbody>
  <tr>
        <td style="border-width:2px;border-color:black;"colspan=4><label>Name of the student:&nbsp&nbsp&nbsp&nbsp</label>'.$name.'</td>
		<td style="border-width:2px;border-color:black;" colspan=4><label>Roll No.:&nbsp&nbsp&nbsp&nbsp</label>'.$roll.'</td> 
  </tr>
  <tr>
        <td style="border-width:2px;border-color:black;"colspan=3><label>Mobille No.:&nbsp&nbsp&nbsp&nbsp</label>'.$mn.'</td>
		<td style="border-width:2px;border-color:black;"colspan=2><label>Category:&nbsp&nbsp&nbsp&nbsp</label>'.$cat.'</td> 
		<td style="border-width:2px;border-color:black;"colspan=3><label>Email Id:&nbsp&nbsp&nbsp&nbsp</label>'.$email.'</td> 
  </tr>
  <tr>
        <td style="border-width:2px;border-color:black;"colspan=3><label>Semister:&nbsp&nbsp&nbsp&nbsp</label>'.$sem.'</td>
		<td style="border-width:2px;border-color:black;"colspan=2><label>Year:&nbsp&nbsp&nbsp&nbsp</label>'.$y.'</td> 
		<td style="border-width:2px;border-color:black;"colspan=3><label>Branch:&nbsp&nbsp&nbsp&nbsp</label>'.$Branch.'</td> 
  </tr>
  <tr>
        <td style="border-width:2px;border-color:black;"colspan=4><label>Father\'s&nbspName:&nbsp&nbsp&nbsp&nbsp </label>'.$fn.'</td>
		<td style="border-width:2px;border-color:black;" colspan=4><label>Father\'s&nbspMobile&nbspNo.:&nbsp&nbsp&nbsp&nbsp</label>'.$fmn.'</td> 
  </tr>
  <tr>
        <td style="border-width:2px;border-color:black;"colspan=4;rowspan=4><label>Present&nbspAddress:&nbsp&nbsp&nbsp&nbsp </label></p><br></p></td>
		<td style="border-width:2px;border-color:black;" colspan=4 ;rowspan=4><label>Permanent&nbspHome&nbspaddress:&nbsp&nbsp&nbsp&nbsp</label></p><br></p></td> 
  </tr>
  </tbody>
  </table>');
  
  
  
  
  
  
  
  echo (' <table class="table table-bordered" style="border-width:2px;border-color:black;table-layout: fixed;text-align:center;" >
  <thead>
   <td style="border-width:2px;border-color:black;padding:0;text-align:center;"colspan=14><label>COURSES REGISTERED</label></td>
		 
  </thead>
  <thead>
        <td style="border-width:2px;border-color:black;padding:0;"><label>S No.</label></td>
		<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>Subject Code</label></td> 
		<td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Subject Name</label></td> 
		<td style="border-width:2px;border-color:black;padding:0"colspan=1><label>Credit</label></td>
		<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>Semister</label></td> 
		<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>Remark of HOD/Adviser</label></td> 	 
  </thead>
  <tbody>');
  
  foreach ($subject as $sub)
  {
	 if($sub=="MA1002{2}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>MA1002</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Mathematics-II</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>3</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>2nd</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	 
	 if($sub=="PH1001{2}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>PH1001</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Physics</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>3</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>2nd</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	 if($sub=="EE1001{2}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>EE1001</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Electrical Science</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>3</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>2nd</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	 if($sub=="ZZ1002{2}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>ZZ1002</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Engineering Graphics</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>3</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>2nd</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	 if($sub=="CS1001{2}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>CS1001</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Foundation of Computing</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>2</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>2nd</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	 if($sub=="PH1091{2}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>PH1091</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Physics Laboratory</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>1</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>2nd</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	   if($sub=="ZZ1092{2}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>ZZ1092</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Workshop-II</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>2</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>2nd</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	 
	 
	 
	  if($sub=="MA2002{4}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>MA2002</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Mathematics-IV</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>3</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>4th</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	  if($sub=="CS2004{4}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>CS2004</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Computer Organisation</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>4</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>4th</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	  if($sub=="CS2005{4}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>CS2005</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Data Structures and Algorithms</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>4</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>4th</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	  if($sub=="CS2006{4}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>CS2006</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Discrete Structures</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>4</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>4th</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	  if($sub=="CS4001{4}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>CS4001</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Environmental Studies</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>3</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>4th</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	  if($sub=="CS2093{4}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>CS2093</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Hardware Laboratory</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>3</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>4th</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	  if($sub=="CS2094{4}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>CS2094</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Data Structures Laboratory</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>3</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>4th</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	 
	 
	 if($sub=="CS3006{6}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>CS3006</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Computers Network</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>3</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>6th</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	 if($sub=="Elective-II{6}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Elective-II</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>4</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>6th</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	 if($sub=="Elective-III{6}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Elective-III</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>4</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>6th</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	 if($sub=="Elective-IV{6}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Elective-IV</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>4</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>6th</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	 if($sub=="CS3093{6}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>CS3093</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Network Laboratory</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>3</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>6th</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	 
	 
	 if($sub=="ME4104{8}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>ME4104</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Principles of Management</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>3</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>8th</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	 if($sub=="Elective-VIII{8}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Elective-VIII</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>4</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>8th</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	 if($sub=="Elective-X{8}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Elective-X</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>4</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>8th</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	 if($sub=="CS4099{8}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>CS4099</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Project</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>5</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>8th</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	
	  
	  
	  
	  
  }
  
 
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  echo('
  
  <table class="table table-bordered" style="border-width:2px;border-color:black;table-layout: fixed;" >
  <thead>
   <td style="border-width:2px;border-color:black;padding:0;text-align:center;"colspan=6><label>ACEDEMICS DETAILS</label></td>	 
  </thead>

  <tbody>
  <tr>
  <td style="border-width:2px;border-color:black;"colspan=2><label>SGPA of last two semisters: </label></td>
  <td style="border-width:2px;border-color:black;"colspan=2><label>SGPA 1:&nbsp&nbsp&nbsp&nbsp</label>'.$s1.'</td>
  <td style="border-width:2px;border-color:black;" colspan=2><label>SGPA 2:&nbsp&nbsp&nbsp&nbsp</label>'.$s2.'</td> 
  </tr>
  <tr>
  <td style="border-width:2px;border-color:black;"colspan=2><label>Acedemics Affairs Clearence</label></td>
  <td style="border-width:2px;border-color:black;"colspan=4><label>Comment: .............................................................................</label>
  <p><b><h5 style="float:right;">Dean Acedemics Affairs&nbsp&nbsp&nbsp&nbsp</b></h5></p></td>
  </tr>
  </tbody>
  </table>
  
  
  <table class="table table-bordered" style="border-width:2px;border-color:black;table-layout: fixed;" >
  

  <tbody>
  <tr>
  <td style="border-width:2px;border-color:black;"colspan=2><label>Tuition&nbspfees&nbsppayment&nbspAmount: </label></td>
  <td style="border-width:2px;border-color:black;"colspan=2><label>Transanction No.:&nbsp&nbsp&nbsp&nbsp</label>'.$tn.'</td>
  <td style="border-width:2px;border-color:black;" colspan=2><label>Transanction Date:&nbsp&nbsp&nbsp&nbsp</label>'.$td.'</td> 
  </tr>
  <tr>
  <td style="border-width:2px;border-color:black;"colspan=2><label>Date:</label></td>
  <td style="border-width:2px;border-color:black;"colspan=4><label>Signature of the student:</label></td>
  </tr>
  <tr>
  <td style="border-width:2px;border-color:black;"colspan=2><label>Date:</label></td>
  <td style="border-width:2px;border-color:black;"colspan=4><label>Seal & Signature of the HOD/Adviser:</label><p><br><br></P></td>
  </tr>
  
  <tr>
  <td style="border-width:2px;border-color:black;"colspan=2><label>Student Affairs Clearence</label></td>
  <td style="border-width:2px;border-color:black;"colspan=4><label>Comment: .............................................................................</label>
  <p><b><h5 style="float:right;">Dean Student Affairs&nbsp&nbsp&nbsp&nbsp</b></h5></p></td>
  </tr>
  </tbody>
  </table>
  
  
 
  
  
  






	
	<!----------------------------------------------------------------------------------------------------------------------------------->
	
	
	
	
	
	
  
  
  
  

							
							
							
							
						<!----------------------------------------------------------------------------------------->	
						</div>
					</div>
				</div>
				
			</div>
		</div>
    </div>				
							
							
							
							
	<div class="col-md-12">
	   <br>
	   
    <div class=" col-sm-6" style="padding-left:10%">
	<p><b><h4><input type="checkbox" name="droll" value="'.$roll.'"><span style="color:red">&nbsp&nbspCheck it if you want to delete this form!</span></h4></b></p>
    <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" name="deleted" class="btn btn-danger btn-lg"><b>&#10001;&nbspDelete this form</b></button></p>
    </div>
	<div class=" col-sm-6" style="padding-left:10%">
	<hr style="border-color:#e5e0e0;">
      <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="button" onclick="window.print();return false;"  class="btn btn-success btn-lg"><b>&#128439&nbspClick to PRINT</b></button></p>
    </div>
	<br><br><br><br><br><br><br><br>
	
	
  </div>						
		
		');
		
		
		$row=mysqli_fetch_array($result);
		
		
		
	}
	

	
	
	
	

  
}
  else
  {
	  echo '<div id="annon_head" >
          <h2><b>Registration form of '.$roll.' </b></h2>
          <hr  style="border-width: medium;border-color:#3C7570;">
        </div><br>
	  <div class="row" style="padding-left:26%;">
				
				<div class="col-md-8" >
					<div class="panel panel-default" style="border-radius:.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thin">
						
						<div class="panel-body">';
	  
	 echo '<span style="color:red;text-align:center;"><b><i>&#10008;&nbsp&nbspRegistration not done by '.$roll.'. </i></b></span>'; 
	  echo '</div>
</div>
</div>
</div>';

  }
	  
	  
  }
  
  else
  
    if(isset($_POST['all']))
  {
	  
	   $_SESSION['do']="all_registration";
	  echo '</form>
  <form action="Print_excel.php" method="post" class="form-horizontal">';
	  
	  
	  
	  
	  $sql="SELECT * FROM `registration` ";
	$result=mysqli_query($con,$sql) or die("error ..semister registerion not done!! ".mysqli_error($con));
           
			$row=mysqli_fetch_array($result);
if($row)
{	$count = 1;
			echo '<div id="annon_head" >
          <h2><b>All Registrations </b></h2>
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
		<th>SGPA-1</th>
		<th>SGPA-2</th>
		<th>PAYMENT MODE</th>
		<th>TRANSANCTION NO.</th>
		<th>TRANSANCTION DATE</th>
		<th>SUBJECT(s) CODE {SEMESTER}</th>
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
		$s1=$row['SGPA 1'];
		$s2=$row['SGPA 2'];
		$pm=$row['Payment Mode'];
		$tn=$row['Transaction No.'];
        $td=$row['transaction Date'];
		$sub=$row['Subject(s) opted {semister}'];
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
		
		</tr>
		
		');
		
		
		$row=mysqli_fetch_array($result);
		
		
		
	}
	

	
	
	
	echo '</tbody></table></div>';

	
	 echo '<div class="form-group "> 
    <div class="col-sm-offset-2 col-sm-8" style="padding-left:11%;padding-right:11%">
      <button type="submit" name="print" class="btn btn-primary btn-group-justified">Print data</button>
    </div>
  </div>';

  
}
  else
  {
	  echo '<div id="annon_head" >
          <h2><b>All Registrations </b></h2>
          <hr  style="border-width: medium;border-color:#3C7570;">
        </div><br>
	  <div class="row" style="padding-left:26%;">
				
				<div class="col-md-8" >
					<div class="panel panel-default" style="border-radius:.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thin">
						
						<div class="panel-body">';
	  
	 echo '<span style="color:red;text-align:center;"><b><i>&#10008;&nbsp&nbspNo Registrations to show. </i></b></span>'; 
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
	  $_SESSION['do']="batch_registration";
	  $_SESSION['batch']=$year;
	  
	  $sql="SELECT * FROM `registration` WHERE `Year`= '$year' ";
	$result=mysqli_query($con,$sql) or die("error ..semister registerion not done!! ".mysqli_error($con));
           
			$row=mysqli_fetch_array($result);
if($row)
{	$count = 1;
			echo '<div id="annon_head" >
          <h2><b>All Registrations of '.$year.' </b></h2>
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
		<th>SGPA-1</th>
		<th>SGPA-2</th>
		<th>PAYMENT MODE</th>
		<th>TRANSANCTION NO.</th>
		<th>TRANSANCTION DATE</th>
		<th>SUBJECT(s) CODE {SEMESTER}</th>
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
		$s1=$row['SGPA 1'];
		$s2=$row['SGPA 2'];
		$pm=$row['Payment Mode'];
		$tn=$row['Transaction No.'];
        $td=$row['transaction Date'];
		$sub=$row['Subject(s) opted {semister}'];
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
		
		</tr>
		
		');
		
		
		$row=mysqli_fetch_array($result);
		
		
		
	}
	

	 echo '</form>
  <form action="Print_excel.php" method="post" class="form-horizontal">';
	
	echo '</tbody></table></div>';
	 echo '<div class="form-group "> 
    <div class="col-sm-offset-2 col-sm-8" style="padding-left:11%;padding-right:11%">
      <button type="submit" name="print" class="btn btn-primary btn-group-justified">Print data</button>
    </div>
  </div>';
  echo '</form>
  <form action="" method="post" class="form-horizontal">';


  
}
  else
  {
	  echo '<div id="annon_head" >
          <h2><b>All Registrations of '.$year.' </b></h2>
          <hr  style="border-width: medium;border-color:#3C7570;">
        </div><br>
	  <div class="row" style="padding-left:26%;">
				
				<div class="col-md-8" >
					<div class="panel panel-default" style="border-radius:.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thin">
						
						<div class="panel-body">';
	  
	 echo '
	 <span style="color:red;text-align:center;"><b><i>&#10008;&nbsp&nbspNo Registrations done by any student of '.$year.'. </i></b></span>'; 
	 
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
      <button type="submit" name="dateQuery" class="btn btn-primary btn-group-justified">Get Registrations</button>
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
      <button type="submit" name="batchQuery" class="btn btn-primary btn-group-justified">Get Registrations</button>
    </div>
  </div>';
	  }
	  else
	  {
		echo('<div class="form-group "> 
    <div class="col-sm-offset-2 col-sm-8" style="padding-left:11%;padding-right:11%">
      <button type="submit" name="all" class="btn btn-primary btn-group-justified">Get All Registrations</button>
    </div>
  </div>


		<div class="form-group ">
		
		<div class="col-sm-offset-2 col-sm-8" style="padding-left:11%;padding-right:11%">
      <button type="submit" name="dated" class="btn btn-primary btn-group-justified">Get Registrations by Student Roll No.</button>
	  </div></div>
	  <div class="form-group "> 
    <div class="col-sm-offset-2 col-sm-8" style="padding-left:11%;padding-right:11%">
      <button type="submit" name="batch" class="btn btn-primary btn-group-justified">Get Registrations by Students Batch</button>
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
		
			
		$sql="DELETE FROM `registration` WHERE `Roll` = '$del'";
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
