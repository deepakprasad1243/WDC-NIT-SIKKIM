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
						    <li><a href="">
							 <button type="button" class="btn  btn-default btn-lg disabled" style="color:red;">
                             <!--<span class="glyphicon glyphicon-print"></span>--><b>Queries/complaints</b>
                             </button></a> </li>
							
							<li><a href="admin_registrations.php">
							 <button type="button" class="btn  btn-info btn-lg" style="color:black;overflow:hidden;">
                             <!--<span class="glyphicon glyphicon-search"></span------> Registrations
                             </button></a></li>
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
          <h2><b>Queries/complaints</b></h2>
          <hr>
        </div>
		
		
	
	
	
	
	
	
	
  
					
							

		
			
			<div class="row" style="padding-left:10%;padding-right:10%;" >
				
				<div class="col-md-12" >
					<div class="panel panel-default"style="border-color:#3C7570; background-color:#e5e0e0;border-width: thick;">
						<!---<div class="panel-heading"style="background-color:#e5e0e0;border-radius: 1.5em 1.5em 0em 0em;"id="annon_head">
							<div   style="text-align:center;height:20px;color:#9E9EA7;padding-top:5px;"><h2>Administration</h2><hr></div>
						</div>-->
						<div class="panel-body">
						
						
						
						
						<!--------------------form header-------------------------------------------------------->
							
							
  
  <form action="" method="post" class="form-horizontal">
  
  
  
   
	  <?php
	  
	  
	  
	
  
  if(isset($_POST['dateQuery']))
  {
	  
	  $date=$_POST['date'];
	  
	  $sql="SELECT * FROM `querries` WHERE `Dated`= '$date'";
	$result=mysqli_query($con,$sql) or die("error ..semister registerion not done!! ".mysqli_error($con));
           
			$row=mysqli_fetch_array($result);
if($row)
{	$count = 1;
			echo '<div id="annon_head" >
          <h2><b>Queries filed on '.$date.'</b></h2>
          <hr  style="border-width: medium;border-color:#3C7570;">
        </div>
			';		
echo ('<div style="overflow:auto;max-height:800px;">
<table  style="border-radius: 1.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: medium;" class="table table-striped table-responsive"  >');
echo ('<thead>
      <tr>
	    <th>S.NO.</th>
        <th>NAME</th>
        <th>ROLL NO.</th>
        <th>EMAIL ID</th>
		<th>BATCH</th>
		<th>QUERRY</th>
		<th>DATE</th>
      </tr>
    </thead>
	<tbody>');
	while($row)
	{
		$name=$row['Name'];
		$roll =$row['Roll No.'];
		$email=$row['Email id'];
		$batch=$row['Batch'];
		$query=$row['Querry'];
		$date=$row['Dated'];
		echo ('<tr>
		<td><input type="checkbox" name="delete[]" value="'.$query.'">'.$count++.'</td>
		<td>'.$name.'</td>
		<td>'.$roll.'</td>
		<td>'.$email.'</td>
		<td>'.$batch.'</td>
		<td>'.$query.'</td>
		<td>'.$date.'</td>
		
		</tr>
		
		');
		
		
		$row=mysqli_fetch_array($result);
		
		
		
	}
	

	
	
echo '</tbody></table></div>
	<div class="col-sm-offset-2 col-sm-8" style="padding-left:11%;padding-right:11%">
      <button type="submit" name="deleted" class="btn btn-danger btn-group-justified">Delete Selected</button>
    </div>';
  
}
  else
  {
	  echo '<div id="annon_head" >
          <h2><b>Queries filed on '.$date.'</b></h2>
          <hr  style="border-width: medium;border-color:#3C7570;">
        </div><br>
	  <div class="row" >
				
				<div class="col-md-8" >
					<div class="panel panel-default" style="border-radius:.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thin;text-align:center">
						
						<div class="panel-body">';
	  
	 echo '<span style="color:red;text-align:center;"><b><i>&#10008;&nbsp&nbspNo Query / complaint to show for this date. </i></b></span>'; 
	  echo '</div>
</div>
</div>
</div>';

  }
	  
	  
  }
  
  else
  
    if(isset($_POST['all']))
  {
	  
	  
	  
	  $sql="SELECT * FROM `querries` ";
	$result=mysqli_query($con,$sql) or die("error ..semister registerion not done!! ".mysqli_error($con));
           
			$row=mysqli_fetch_array($result);
if($row)
{	$count = 1;
			echo '<div id="annon_head" >
          <h2><b>All Queries / complaints </b></h2>
          <hr  style="border-width: medium;border-color:#3C7570;">
        </div>
			';		
echo ('<div style="overflow:auto;max-height:800px;">
<table  style="border-radius: 1.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: medium;" class="table table-striped table-responsive"  >');
echo ('<thead>
      <tr>
	    <th>S.NO.</th>
        <th>NAME</th>
        <th>ROLL NO.</th>
        <th>EMAIL ID</th>
		<th>BATCH</th>
		<th>QUERRY</th>
		<th>DATE</th>
      </tr>
    </thead>
	<tbody>');
	while($row)
	{
		$name=$row['Name'];
		$roll =$row['Roll No.'];
		$email=$row['Email id'];
		$batch=$row['Batch'];
		$query=$row['Querry'];
		$date=$row['Dated'];
		echo ('<tr>
		<td><input type="checkbox" name="delete[]" value="'.$query.'">'.$count++.'</td>
		<td>'.$name.'</td>
		<td>'.$roll.'</td>
		<td>'.$email.'</td>
		<td>'.$batch.'</td>
		<td>'.$query.'</td>
		<td>'.$date.'</td>
		
		</tr>
		
		');
		
		
		$row=mysqli_fetch_array($result);
		
		
		
	}
	

	
	
	
	echo '</tbody></table></div>
	<div class="col-sm-offset-2 col-sm-8" style="padding-left:11%;padding-right:11%">
      <button type="submit" name="deleted" class="btn btn-danger btn-group-justified">Delete Selected</button>
    </div>';
	

  
}
  else
  {
	  echo '<div id="annon_head" >
          <h2><b>All Queries / complaints </b></h2>
          <hr  style="border-width: medium;border-color:#3C7570;">
        </div><br>
	  <div id="annon_head" >
          <h2><b>All Queries / complaints </b></h2>
          <hr  style="border-width: medium;border-color:#3C7570;">
        </div><br>
	  <div class="row" >
				
				<div class="col-md-8" >
					<div class="panel panel-default" style="border-radius:.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thin;text-align:center">
						
						<div class="panel-body">';
	  
	 echo '<span style="color:red;text-align:center;"><b><i>&#10008;&nbsp&nbspNo Query / complaint to show. </i></b></span>'; 
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
	  
	  $sql="SELECT * FROM `querries` WHERE `Batch`= '$year' ";
	$result=mysqli_query($con,$sql) or die("error ..semister registerion not done!! ".mysqli_error($con));
           
			$row=mysqli_fetch_array($result);
if($row)
{	$count = 1;
			echo '<div id="annon_head" >
          <h2><b>Queries filed by '.$year.'</b></h2>
          <hr  style="border-width: medium;border-color:#3C7570;">
        </div>
			';		
echo ('<div style="overflow:auto;max-height:800px;">
<table  style="border-radius: 1.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: medium;" class="table table-striped table-responsive"  >');
echo ('<thead>
      <tr>
	    <th>S.NO.</th>
        <th>NAME</th>
        <th>ROLL NO.</th>
        <th>EMAIL ID</th>
		<th>BATCH</th>
		<th>QUERRY</th>
		<th>DATE</th>
      </tr>
    </thead>
	<tbody>');
	while($row)
	{
		$name=$row['Name'];
		$roll =$row['Roll No.'];
		$email=$row['Email id'];
		$batch=$row['Batch'];
		$query=$row['Querry'];
		$date=$row['Dated'];
		echo ('<tr>
		<td><input type="checkbox" name="delete[]" value="'.$query.'">'.$count++.'</td>
		<td>'.$name.'</td>
		<td>'.$roll.'</td>
		<td>'.$email.'</td>
		<td>'.$batch.'</td>
		<td>'.$query.'</td>
		<td>'.$date.'</td>
		
		</tr>
		
		');
		
		
		$row=mysqli_fetch_array($result);
		
		
		
	}
	

	
	
	
	
  echo '</tbody></table></div>
	<div class="col-sm-offset-2 col-sm-8" style="padding-left:11%;padding-right:11%">
      <button type="submit" name="deleted" class="btn btn-danger btn-group-justified">Delete Selected</button>
    </div>';
}
  else
  {
	  echo '<div id="annon_head" >
          <h2><b>Queries filed by '.$year.'</b></h2>
          <hr  style="border-width: medium;border-color:#3C7570;">
        </div><br>
	  <div class="row" >
				
				<div class="col-md-8" >
					<div class="panel panel-default" style="border-radius:.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thin;text-align:center">
						
						<div class="panel-body">';
	  
	 echo '<span style="color:red;text-align:center;"><b><i>&#10008;&nbsp&nbspNo Query / complaint to show for this Batch. </i></b></span>'; 
	 
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
		  echo (' <div class="row" style="padding-left:11%;">
		  <div class="col-md-4"><label for="sgpa" style="float:right;">Enter date: </label></div>
	      <div class="col-md-4"><input type="date" name="date" class="form-control" id="fees" placeholder="transfer date" required></div>
		  </div>');
		  echo'<br> <div class="form-group "> 
    <div class="col-sm-offset-2 col-sm-8" style="padding-left:11%;padding-right:11%">
      <button type="submit" name="dateQuery" class="btn btn-primary btn-group-justified">Get Queries/complaints</button>
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
      <button type="submit" name="batchQuery" class="btn btn-primary btn-group-justified">Get Queries/complaints</button>
    </div>
  </div>';
	  }
	  else
	  {
		echo('<div class="form-group "> 
    <div class="col-sm-offset-2 col-sm-8" style="padding-left:11%;padding-right:11%">
      <button type="submit" name="all" class="btn btn-primary btn-group-justified">Get All Queries/complaints</button>
    </div>
  </div>


		<div class="form-group ">
		
		<div class="col-sm-offset-2 col-sm-8" style="padding-left:11%;padding-right:11%">
      <button type="submit" name="dated" class="btn btn-primary btn-group-justified">Get Queries/complaints by date</button>
	  </div></div>
	  <div class="form-group "> 
    <div class="col-sm-offset-2 col-sm-8" style="padding-left:11%;padding-right:11%">
      <button type="submit" name="batch" class="btn btn-primary btn-group-justified">Get Queries/complaints by Student Batch</button>
    </div>
  </div>
	  ');  
	  }
		  
	  }

  if(isset($_POST['deleted']))
	{
		$count = 0;
		if(isset($_POST['delete']))
		{	
		$del=$_POST['delete'];
		foreach($del as $value )
		{
			
		$sql="DELETE FROM `querries` WHERE `Querry` = '$value'";
	     mysqli_query($con,$sql) or die("error ".mysqli_error($con));
		 $count++;
		}
		echo '
	  <div class="row" >
				
				<div class="col-md-8" >
					<div class="panel panel-default" style="border-radius:.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thin;text-align:center">
						
						<div class="panel-body">';
		echo'<span style="color:green;text-align:center;"><b><i>	&#10004;&nbsp&nbsp'.$count.' queries successfully deleted. </i></b></span></div></div></div></div>';
		}
		else{
		 echo '
	  <div class="row" >
				
				<div class="col-md-8" >
					<div class="panel panel-default" style="border-radius:.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thin;text-align:center">
						
						<div class="panel-body">';
		echo'<span style="color:red;text-align:center;"><b><i>	&#10008;&nbsp&nbspno query selected to delete. </i></b></span></div></div></div></div>';
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
