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
						    
							 <li><a href="admin_registrations.php">
							 <button type="button" class="btn  btn-info btn-lg" style="color:black;overflow:hidden;">
                             <!--<span class="glyphicon glyphicon-search"></span------>Queries/complaints
                             </button></a></li>
							
							<li><a href="admin_registrations.php">
							 <button type="button" class="btn  btn-info btn-lg" style="color:black;overflow:hidden;">
                             <!--<span class="glyphicon glyphicon-search"></span------> Registrations
                             </button></a></li>
							<li><a href="admin_database.php">
							 <button type="button" class="btn btn-info btn-lg" style="color:black;">
                             <!--<span class="glyphicon glyphicon-search"></span--->Student database
                             </button></a> </li>
							 <li><a href="">
							 <button type="button" class="btn  btn-default btn-lg disabled" style="color:red;">
                             <!--<span class="glyphicon glyphicon-print"></span>--><b>Edit Details</b>
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
          <h2><b>Edit Details</b></h2>
          <hr>
        </div>
		
		
	
	
	
	
	
	
	
  
					
							

		
			
			<div class="row"  >
				
				<div class="col-md-12" >
					<div class="panel panel-default"style="border-color:#3C7570; background-color:#e5e0e0;border-width: thick;">
						<!---<div class="panel-heading"style="background-color:#e5e0e0;border-radius: 1.5em 1.5em 0em 0em;"id="annon_head">
							<div   style="text-align:center;height:20px;color:#9E9EA7;padding-top:5px;"><h2>Administration</h2><hr></div>
						</div>-->
						<div class="panel-body">
						
						
						
						
						<!--------------------form header-------------------------------------------------------->
							
							
  
  <form action="" method="post" class="form-horizontal">
  
  
  <div style="padding-left:25%; ">
  <br>
  <div class="row" >
		  <div class="col-md-4" ><label for="sgpa">Enter Student Roll No.: </label></div>
	      <div class="col-md-4"><input type="text" name="roll" class="form-control" id="fees" placeholder="Roll No." required></div>
 </div>
 <br> <div class="form-group " > 
    <div class="col-sm-4" Style="padding-top:10px;">
      <button type="submit" name="editr" class="btn btn-primary btn-group-justified">Edit Registration Details </button>
    </div>
	<div class="col-sm-4" Style="padding-top:10px;">
      <button type="submit" name="editd" class="btn btn-primary btn-group-justified">Edit Database Details</button>
    </div>
  </div>
  
  </div>
  
  <?php
  
if(isset($_POST['editr']))
{
		$u=$_POST['roll'];

           
           $sql="SELECT * FROM  `registration` WHERE `Roll`= '$u'";
           $result=mysqli_query($con,$sql) or die("error ..semister registerion not done!! ".mysqli_error($con));
           $row=mysqli_fetch_array($result);
		   
    if($row)
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
		
		
echo('
		<br>
  <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="name"  style="float:right;">Name:</label></div>
    <div class="col-md-9"><input type="text" name="name" class="form-control" id="name" placeholder="'.$name.'" value="'.$name.'"></div>
  </div>
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="roll"  style="float:right;">Roll No.:</label></div>
    <div class="col-md-9"><input type="text" name="roll" class="form-control" id="roll" placeholder="'.$roll.'" value="'.$roll.'"></div>
  </div>
  </div>
  
  
  
  <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="email"  style="float:right;">Email id:</label></div>
    <div class="col-md-9"><input type="email" name="email" class="form-control" id="email" placeholder="'.$email.'" value="'.$email.'"></div>
  </div>
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="category"  style="float:right;">Category:</label></div>
    <div class="col-md-9"><select class="form-control " name="category" id="category">
	    <option value="'.$cat.'">'.$cat.'</option>
		<option value="General">General</option>
        <option value="OBC">OBC</option>
        <option value="SC">SC</option>
        <option value="ST">ST</option>
      </select>
	</div>
  </div>
  </div>
  
  
  
  
 
	 
	 
 
  
  
  
  <!----------------------------------------------end of 1st line----------------------------------------------------------------------------------->
  
  
  
  
  
  <!------------------------------------------2nd line--------------------------------------------------------------------------->
     
	 
	 
	 
	 
	 
	 
	<div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="course" style="float:right;">Course:</label></div>
    <div class="col-md-9"><select class="form-control " name="course" id="course" style="width:100%;" readonly>
	<option value="B.tech">B.Tech</option>
	</select>
	</div>
  </div>
  
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="semister"  style="float:right;">Semister:</label></div>
    <div class="col-md-9"><select class="form-control" name="semister" id="semister"  style="width:100%;">
        <option value="'.$sem.'">'.$sem.'</option>
        <option value="1st semister">1st semister</option>
        <option value="2nd semister">2nd semister</option>
        <option value="3rd semister">3rd semister</option>
		<option value="4th semister">4th semister</option>
		<option value="5th semister">5th semister</option>
		<option value="6th semister">6th semister</option>
		<option value="7th semister">7th semister</option>
		<option value="8th semister">8th semister</option>
      </select>
	</div>
  </div>
  
  </div> 
	 
	 
	 
	 
	 <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="year"  style="float:right;">Year:</label></div>
    <div class="col-md-9"><select class="form-control" name="year" id="year" style="width:100%;">
        <option value="'.$y.'">'.$y.'</option>
		<option value="1st year">1st year</option>
        <option value="2nd year">2nd year</option>
        <option value="3rd year">3rd year</option>
        <option value="4th year">4th year</option>
      </select>
	</div>
  </div>
  
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="branch"  style="float:right;">Branch:</label></div>
    <div class="col-md-9"><select class="form-control" name="branch" id="branch"  style="width:100%;" readonly>
        <option value="'.$Branch.'">'.$Branch.'</option>
      </select>
	</div>
  </div>
  
  </div> 
	 
	 
	 
	 
	 
	 
	
	  
 
	<!----------------------------------------end of 2nd line------------------------------------------------------------>
	
	<!--------------------------------------3rd line----------------------------------------------------------------->
	 




      <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="number"  style="float:right;">Mobile&nbspNo.:</label></div>
    <div class="col-md-9"><input type="number" name="number" class="form-control" id="number" placeholder="'.$mn.'" value="'.$mn.'"></div>
  </div>
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3" style="padding-left:0px;"><label for="fname"  style="float:right;">Father\'s&nbspName:</label></div>
    <div class="col-md-9"><input type="text" name="fname" class="form-control" id="fname" placeholder="'.$fn.'" value="'.$fn.'"></div>
  </div>
  </div>
  
  
  
  
  
   <div class="row">
  <div class=" col-md-12" style="padding-bottom:10px;">
    <div class="col-md-5"><label for="fnumber"  style="float:right;">Father\'s&nbspmobile&nbspNo.:</label></div>
    <div class="col-md-7"><input type="number" name="fnumber" class="form-control" id="fnumber" placeholder="'.$fmn.'"></div>
  </div>
  
  </div>


    <hr  style="border-width: medium;border-color:#3C7570;">


     
	 
	 <div   style="text-align:center;color:#9E9EA7;" id="annon_head"><h2>Acedemic and payment details</h2><hr style="border-width: medium;border-color:#3C7570;"></div>
	 
	 


	 
	
	<!-------------------------------------end of third line------------------------------------------------------------------------->
	<!------------------------------------acedemic and payment details---------------------------------------------------------------->
	<br>
	<div class="row">
  <div class=" col-md-12" style="padding-bottom:10px;">
    <div class="col-md-4"><label for="sgpa" style="float:right;">SGPA&nbspof&nbspthe&nbsplast&nbsptwo&nbspsemisters: </label></div>
    <div class="col-md-4"><input type="number" step="any" name="sgpa1" class="form-control" id="sgpa" placeholder="'.$s1.'" value="'.$s1.'"></div>
	<div class="col-md-4"><input type="number" step="any" name="sgpa2" class="form-control" id="sgpa" placeholder="'.$s2.'" value="'.$s2.'"></div>
  </div>
  
  </div>
  
  
  
  
  <br>
  <div class="row">
  <div class=" col-md-12" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="fees"  style="float:right;">Tuition&nbspfees&nbsppayment&nbspdetails: </label></div>
    <div class="col-md-3"><select class="form-control" name="pm" id="fees" style="width:100%;">
        
		<option value="online transfer">Online Transfer</option>
        
      </select>
	</div>
	<div class="col-md-3"><input type="text" name="transaction" class="form-control" id="fees" placeholder="'.$tn.'" value="'.$tn.'"></div>
	<div class="col-md-3"><input type="date" name="date" class="form-control" id="fees" placeholder="'.$td.'" value="'.$td.'"></div>
  </div>
  
  </div>
	
	
	
	
	
	<!---------------------------------------------------------------------------------------------------------------------------------->
	<!---------------------------------------------course registered-------------------------------------------------------------------->
	
	 <hr  style="border-width: medium;border-color:#3C7570;"><div   style="text-align:center;color:#9E9EA7;" id="annon_head"><h2>Course Registered</h2>
	 <div   style="color:red;" id="annon_head">note : do course registration again !!!! </div><hr style="border-width: medium;border-color:#3C7570;"></div>
	<br><br>
	
<div class="row">
  <div class=" col-md-12" style="padding-bottom:10px;">
  <h3>2nd Semister</h3>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Select subject</th>
        <th>Subject code</th>
        <th>Subject name</th>
		<th>Credit</th>
      </tr>
    </thead>
    <tbody>
	');
	
	
	if($sem=="2nd semister")
	{
	echo ('<tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="MA1002{2}" checked>
            </div>
		</td>
        <td>MA1002</td>
        <td>Mathematics-II</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="PH1001{2}" checked>
            </div>
		</td>
		<td>PH1001</td>
        <td>Physics</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EE1001{2}" checked>
            </div>
		</td>
		<td>EE1001</td>
        <td>Electrical Science</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ZZ1002{2}" checked>
            </div>
		</td>
		<td>ZZ1002</td>
        <td>Engineering Graphics </td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS1001{2}" checked>
            </div>
		</td>
		<td>CS1001</td>
        <td>Foundation of Computing</td>
        <td>2</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="PH1091{2}" checked>
            </div>
		</td>
		<td>PH1091</td>
        <td>Physics Laboratory</td>
        <td>1</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ZZ1092{2}" checked>
            </div>
		</td>
		<td>ZZ1092</td>
        <td>Workshop-II</td>
        <td>2</td>
      </tr>');	
	}
	else
	{
		echo ('<tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="MA1002{2}">
            </div>
		</td>
        <td>MA1002</td>
        <td>Mathematics-II</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="PH1001{2}">
            </div>
		</td>
		<td>PH1001</td>
        <td>Physics</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EE1001{2}">
            </div>
		</td>
		<td>EE1001</td>
        <td>Electrical Science</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ZZ1002{2}">
            </div>
		</td>
		<td>ZZ1002</td>
        <td>Engineering Graphics </td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS1001{2}">
            </div>
		</td>
		<td>CS1001</td>
        <td>Foundation of Computing</td>
        <td>2</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="PH1091{2}">
            </div>
		</td>
		<td>PH1091</td>
        <td>Physics Laboratory</td>
        <td>1</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ZZ1092{2}">
            </div>
		</td>
		<td>ZZ1092</td>
        <td>Workshop-II</td>
        <td>2</td>
      </tr>');
	}
	
	
	
	
      
   echo(' </tbody>
  </table>
</div>
</div><br>	







<div class="row">
  <div class=" col-md-12" style="padding-bottom:10px;">
  <h3>4th Semister</h3>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Select subject</th>
        <th>Subject code</th>
        <th>Subject name</th>
		<th>Credit</th>
      </tr>
    </thead>
    <tbody>');
	
	
	
	if($sem=="4th semister")
	{
	echo ('<tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="MA2002{4}" checked>
            </div>
		</td>
        <td>MA2002</td>
        <td>Mathematics-IV</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS2004{4}" checked>
            </div>
		</td>
		<td>CS2004</td>
        <td>Computer Organisation</td>
        <td>4</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS2005{4}" checked>
            </div>
		</td>
		<td>CS2005</td>
        <td>Data Structures and Algorithms</td>
        <td>4</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS2006{4}" checked>
            </div>
		</td>
		<td>CS2006</td>
        <td>Discrete Structures</td>
        <td>4</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS4001{4}" checked>
            </div>
		</td>
		<td>CS4001</td>
        <td>Environmental Studies</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS2093{4}" checked>
            </div>
		</td>
		<td>CS2093</td>
        <td>Hardware Laboratory</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS2094{4}" checked>
            </div>
		</td>
		<td>CS2094</td>
        <td>Data Structures Laboratory</td>
        <td>3</td>
      </tr>');	
	}
	else
	{
		echo ('<tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="MA2002{4}">
            </div>
		</td>
        <td>MA2002</td>
        <td>Mathematics-IV</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS2004{4}">
            </div>
		</td>
		<td>CS2004</td>
        <td>Computer Organisation</td>
        <td>4</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS2005{4}">
            </div>
		</td>
		<td>CS2005</td>
        <td>Data Structures and Algorithms</td>
        <td>4</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS2006{4}">
            </div>
		</td>
		<td>CS2006</td>
        <td>Discrete Structures</td>
        <td>4</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS4001{4}">
            </div>
		</td>
		<td>CS4001</td>
        <td>Environmental Studies</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS2093{4}">
            </div>
		</td>
		<td>CS2093</td>
        <td>Hardware Laboratory</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS2094{4}">
            </div>
		</td>
		<td>CS2094</td>
        <td>Data Structures Laboratory</td>
        <td>3</td>
      </tr>');
	}
	

	
	
      
   echo' </tbody>
  </table>
</div>
</div><br>	







<div class="row">
  <div class=" col-md-12" style="padding-bottom:10px;">
  <h3>6th Semister</h3>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Select subject</th>
        <th>Subject code</th>
        <th>Subject name</th>
		<th>Credit</th>
      </tr>
    </thead>
    <tbody>';
	
	
	if($sem=="6th semister")
	{
	echo ('<tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS3006{6}" checked>
            </div>
		</td>
        <td>CS3006</td>
        <td>Computers Network</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="Elective-II{6}" checked>
            </div>
		</td>
		<td></td>
        <td>Elective-II</td>
        <td>4</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="Elective-III{6}" checked>
            </div>
		</td>
		<td></td>
        <td>Elective-III</td>
        <td>4</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="Elective-IV{6}" checked>
            </div>
		</td>
		<td></td>
        <td>Elective-IV </td>
        <td>4</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS3093{6}" checked>
            </div>
		</td>
		<td>CS3093</td>
        <td>Network Laboratory</td>
        <td>3</td>
      </tr>');	
	}
	else
	{
		echo ('<tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS3006{6}">
            </div>
		</td>
        <td>CS3006</td>
        <td>Computers Network</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="Elective-II{6}">
            </div>
		</td>
		<td></td>
        <td>Elective-II</td>
        <td>4</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="Elective-III{6}">
            </div>
		</td>
		<td></td>
        <td>Elective-III</td>
        <td>4</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="Elective-IV{6}">
            </div>
		</td>
		<td></td>
        <td>Elective-IV </td>
        <td>4</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS3093{6}">
            </div>
		</td>
		<td>CS3093</td>
        <td>Network Laboratory</td>
        <td>3</td>
      </tr>');
	}
	

	
	
echo '	
      
	  
    </tbody>
  </table>
</div>
</div><br>	











<div class="row">
  <div class=" col-md-12" style="padding-bottom:10px;">
  <h3>8th Semister</h3>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Select subject</th>
        <th>Subject code</th>
        <th>Subject name</th>
		<th>Credit</th>
      </tr>
    </thead>
    <tbody>';
	
	
	if($sem=="8th semister")
	{
	echo ('<tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME4104{8}" checked>
            </div>
		</td>
        <td>ME4104</td>
        <td>Principles of Management</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="Elective-VIII{8}" checked>
            </div>
		</td>
		<td></td>
        <td>Elective-VIII</td>
        <td>4</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="Elective-IX{8}" checked>
            </div>
		</td>
		<td></td>
        <td>Elective-IX</td>
        <td>4</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="Elective-X{8}" checked>
            </div>
		</td>
		<td></td>
        <td>Elective-X</td>
        <td>4</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS4099{8}" checked>
            </div>
		</td>
		<td>CS4099</td>
        <td>Project</td>
        <td>5</td>
      </tr>');	
	}
	else
	{
		echo ('<tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME4104{8}">
            </div>
		</td>
        <td>ME4104</td>
        <td>Principles of Management</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="Elective-VIII{8}">
            </div>
		</td>
		<td></td>
        <td>Elective-VIII</td>
        <td>4</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="Elective-IX{8}">
            </div>
		</td>
		<td></td>
        <td>Elective-IX</td>
        <td>4</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="Elective-X{8}">
            </div>
		</td>
		<td></td>
        <td>Elective-X</td>
        <td>4</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS4099{8}">
            </div>
		</td>
		<td>CS4099</td>
        <td>Project</td>
        <td>5</td>
      </tr>');
	}
	
echo '
	
      
	 
	 
    </tbody>
  </table>
</div>
</div><br>	







	
	<!----------------------------------------------------------------------------------------------------------------------------------->
	
	
	
	
	
	<div class="col-md-12">
	   <br>
	   
    <div style="padding-left:45%;">
      <button type="submit" name="update" class="btn btn-primary btn-lg">Submit Changes</button>
    </div>
	
  </div>';
		
		
		
    }
	else
  {
	  echo '<br>
	  <div class="row" >
				
				<div class="col-md-8" >
					<div class="panel panel-default" style="border-radius:.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thin;text-align:center">
						
						<div class="panel-body">';
	  
	 echo '
	 <span style="color:red;text-align:center;"><b><i>&#10008;&nbsp&nbspRegistrations not done by '.$u.' . </i></b></span>'; 
	 
echo '</div>
</div>
</div>
</div>';
	 
  }
	
			

		
}
  
  
  
 if(isset($_POST['update']))
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
	
	
	$sql="UPDATE `registration` SET `Name`='$name',`Roll`='$roll',`Email id`='$email',`Category`='$category',`Course`='$course',`Semister`='$semister',`Year`='$year',`Branch`='$branch',`Mobile No.`='$number',`Father's Name`='$fname',`Father's mobile No.`='$fnumber',`SGPA 1`='$sgpa1',`SGPA 2`='$sgpa2',`Payment Mode`='$pm',`Transaction No.`='$transaction',`transaction Date`='$date',`Subject(s) opted {semister}`='$sub'
	WHERE  `Roll`= '$roll'";
	mysqli_query($con,$sql) or die("error in updation".mysqli_error($con));
	
	
	$sql="UPDATE `new registration` SET `Semister`='$semister',`Year`='$year',`Mobile No.`='$number',`Father's mobile No.`='$fnumber' WHERE  `Roll`= '$roll'";
	mysqli_query($con,$sql) or die("error in updation".mysqli_error($con));
	
	 echo '<br>
	  <div class="row" >
				
				<div class="col-md-8" >
					<div class="panel panel-default" style="border-radius:.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thin;text-align:center">
						
						<div class="panel-body">';
	  
	 echo '
	 <span style="color:red;text-align:center;"><b><i>&#10004;&nbsp&nbspSuccessfully updated the registration form of '.$roll.' . </i></b></span>'; 
	 
echo '</div>
</div>
</div>
</div>';
	

}
  
  
 ?>
 
 
	
<?php 
 
  
  if(isset($_POST['editd']))
{
		$u=$_POST['roll'];

           
           $sql="SELECT * FROM  `new registration` WHERE `Roll`= '$u'";
           $result=mysqli_query($con,$sql) or die("error ..semister registerion not done!! ".mysqli_error($con));
           $row=mysqli_fetch_array($result);
		   
    if($row)
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
		
		
		echo ('
		
		
		 <br>
  <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="name"  style="float:right;">Name:</label></div>
    <div class="col-md-9"><input type="text" name="name" class="form-control" id="name" placeholder="'.$name.'" value="'.$name.'"></div>
  </div>
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="roll"  style="float:right;">Roll No.:</label></div>
    <div class="col-md-9"><input type="text" name="roll" class="form-control" id="roll" placeholder="'.$roll.'" value="'.$roll.'" ></div>
  </div>
  </div>
  
  
  
  <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="email"  style="float:right;">Email id:</label></div>
    <div class="col-md-9"><input type="email" name="email" class="form-control" id="email" placeholder="'.$email.'" value="'.$email.'" ></div>
  </div>
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="category"  style="float:right;">Category:</label></div>
    <div class="col-md-9"><select class="form-control " name="category" id="category">
	    <option value="'.$cat.'">'.$cat.'</option>
		<option value="General">General</option>
        <option value="OBC">OBC</option>
        <option value="SC">SC</option>
        <option value="ST">ST</option>
      </select>
	</div>
  </div>
  </div>
  
  
  
  
 
	 
	 
 
  
  
  
  <!----------------------------------------------end of 1st line----------------------------------------------------------------------------------->
  
  
  
  
  
  <!------------------------------------------2nd line--------------------------------------------------------------------------->
     
	 
	 
	 
	 
	 
	 
	<div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="course" style="float:right;">Course:</label></div>
    <div class="col-md-9"><select class="form-control " name="course" id="course" style="width:100%;">
	<option value="'.$course.'">'.$course.'</option>
	<option value="b.tech">B.Tech</option>
	<option value="M.tech">M.Tech</option>
	<option value="Phd">Phd</option>
	<option value="M.sc">M.sc</option>
	</select>
	</div>
  </div>
  
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="semister"  style="float:right;">Semister:</label></div>
    <div class="col-md-9"><select class="form-control" name="semister" id="semister"  style="width:100%;">
        <option value="'.$sem.'">'.$sem.'</option>
        <option value="1st semister">1st semister</option>
        <option value="2nd semister">2nd semister</option>
        <option value="3rd semister">3rd semister</option>
		<option value="4th semister">4th semister</option>
		<option value="5th semister">5th semister</option>
		<option value="6th semister">6th semister</option>
		<option value="7th semister">7th semister</option>
		<option value="8th semister">8th semister</option>
      </select>
	</div>
  </div>
  
  </div> 
	 
	 
	 
	 
	 <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="year"  style="float:right;">Year:</label></div>
    <div class="col-md-9"><select class="form-control" name="year" id="year" style="width:100%;">
        <option value="'.$year.'">'.$year.'</option>
		<option value="1st year">1st year</option>
        <option value="2nd year">2nd year</option>
        <option value="3rd year">3rd year</option>
        <option value="4th year">4th year</option>
      </select>
	</div>
  </div>
  
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="branch"  style="float:right;">Branch:</label></div>
    <div class="col-md-9"><select class="form-control" name="branch" id="branch"  style="width:100%;">
                <option value="'.$branch.'">'.$branch.'</option>
        <option value="cse">Computer Science And Engineering</option>
        <option value="ece">Electronics And Communication Engineering</option>
        <option value="eee">Electrical And Electronics Engineering</option>
		<option value="me">Mechanical Engineering</option>
		<option value="ce">Civil Engineering</option>
		<option value="bt">Biotechnology</option>
		<option value="math">Mathematics</option>
		<option value="phy">Physics</option>
		<option value="chem">Chemistry</option>
		<option value="sst">Humanities And Social Sciences</option>
      </select>
	</div>
  </div>
  
  </div> 
	 
	 
	 
	 
	 
	 
	
	  
 
	<!----------------------------------------end of 2nd line------------------------------------------------------------>
	
	<!--------------------------------------3rd line----------------------------------------------------------------->
	 




      <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="number"  style="float:right;">Mobile&nbspNo.:</label></div>
    <div class="col-md-9"><input type="number" name="number" class="form-control" id="number" placeholder="'.$mn.'" value="'.$mn.'" ></div>
  </div>
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3" style="padding-left:0px;"><label for="fname"  style="float:right;">Father\'s&nbspName:</label></div>
    <div class="col-md-9"><input type="text" name="fname" class="form-control" id="fname" placeholder="'.$fn.'" value="'.$fn.'"></div>
  </div>
  </div>
  
  
  
  
  
   <div class="row">
  <div class=" col-md-12" style="padding-bottom:10px;">
    <div class="col-md-5"><label for="fnumber"  style="float:right;">Father\'s&nbspmobile&nbspNo.:</label></div>
    <div class="col-md-7"><input type="number" name="fnumber" class="form-control" id="fnumber" placeholder="'.$fmn.'" value="'.$fmn.'" ></div>
  </div>
  
  </div>
  
  
  
   <div class="row">
  <div class=" col-md-12" style="padding-bottom:10px;">
    <div class="col-md-2"><label for="address"  style="float:right;">Residential&nbspaddress:</label></div>
    <div class="col-md-10"><input type="text" name="address" class="form-control" id="address" placeholder="'.$s1.'" value="'.$s1.'"></div>
  </div>
  
  </div>


    <hr style="border-width: medium;border-color:#3C7570;">


     
	 
	 <div   style="text-align:center;color:#9E9EA7;" id="annon_head"><h2>Acedemic details</h2><hr style="border-width: medium;border-color:#3C7570;"></div>
	 
	 


	 
	
	<!-------------------------------------end of third line------------------------------------------------------------------------->
	<!------------------------------------acedemic and payment details---------------------------------------------------------------->
	<br>
	<div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="10" style="float:right;">10th&nbsp(%/CGPA): </label></div>
    <div class="col-md-9"><input type="number" step="any" name="ten" class="form-control" id="10" placeholder="'.$s2.'" value="'.$s2.'"></div>
  </div>
  
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="12" style="float:right;">12th&nbsp(%/CGPA): </label></div>
    <div class="col-md-9"><input type="number" step="any" name="twelve" class="form-control" id="12" placeholder="'.$pm.'" value="'.$pm.'"></div>
  </div>
  
  </div>
  
  
  
  <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-4"><label for="mainroll" style="float:right;">JEE&nbspmain&nbsproll&nbspno.:</label></div>
    <div class="col-md-8"><input type="number" name="mainroll" class="form-control" id="mainroll" placeholder="'.$tn.'" value="'.$tn.'"></div>
  </div>
  
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="mainrank" style="float:right;">JEE&nbspmain&nbsprank: </label></div>
    <div class="col-md-9"><input type="number" name="mainrank" class="form-control" id="mainrank" placeholder="'.$td.'" value="'.$td.'"></div>
  </div>
  
  </div>
  
  
  
  
   <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-4"><label for="advanceroll" style="float:right;">JEE&nbspadvance&nbsproll&nbspno.:</label></div>
    <div class="col-md-8"><input type="number" name="advanceroll" class="form-control" id="advanceroll" placeholder="'.$sub.'" value="'.$sub.'" ></div>
  </div>
  
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3" style="padding-left:0px;"><label for="advancerank" style="float:right;">JEE&nbspadvance&nbsprank: </label></div>
    <div class="col-md-9"><input type="number" name="advancerank" class="form-control" id="advancerank" placeholder="'.$subj.'" value="'.$subj.'"></div>
  </div>
  
  </div>
  
  
  
  
  
  
 
	
	
	
	
	
	<!---------------------------------------------------------------------------------------------------------------------------------->
	<!---------------------------------------------course registered-------------------------------------------------------------------->
	
	 
	
	
	







	
	<!----------------------------------------------------------------------------------------------------------------------------------->
	
	
	
	
	
	<div class="col-md-12">
	   <br>
	   
    <div style="padding-left:45%;">
      <button type="submit" name="dupdate" class="btn btn-primary">Submit</button>
    </div>
	
  </div>
		
		
		');
		
		
	}
	else
  {
	  echo '<br>
	  <div class="row" >
				
				<div class="col-md-8" >
					<div class="panel panel-default" style="border-radius:.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thin;text-align:center">
						
						<div class="panel-body">';
	  
	 echo '
	 <span style="color:red;text-align:center;"><b><i>&#10008;&nbsp&nbspDatabase of '.$u.' not found . </i></b></span>'; 
	 
echo '</div>
</div>
</div>
</div>';
	 
  }
	
  
} 



if(isset($_POST['dupdate']))
{
	


$name=mysqli_real_escape_string($con,$_POST['name']);
$roll=mysqli_real_escape_string($con,$_POST['roll']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$category=mysqli_real_escape_string($con,$_POST['category']);
$course=mysqli_real_escape_string($con,$_POST['course']);
$semister=mysqli_real_escape_string($con,$_POST['semister']);
$year=mysqli_real_escape_string($con,$_POST['year']);
$branch=mysqli_real_escape_string($con,$_POST['branch']);
$number=mysqli_real_escape_string($con,$_POST['number']);
$fname=mysqli_real_escape_string($con,$_POST['fname']);
$fnumber=mysqli_real_escape_string($con,$_POST['fnumber']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$ten=mysqli_real_escape_string($con,$_POST['ten']);
$twelve=mysqli_real_escape_string($con,$_POST['twelve']);

$mainroll=mysqli_real_escape_string($con,$_POST['mainroll']);
$mainrank=mysqli_real_escape_string($con,$_POST['mainrank']);
$advanceroll=mysqli_real_escape_string($con,$_POST['advanceroll']);
$advancerank=mysqli_real_escape_string($con,$_POST['advancerank']);
	
	
	
	
	$sql="UPDATE `new registration` SET `Name`='$name',`Roll`='$roll',`Email id`='$email',`Category`='$category',`Course`='$course',
	`Semister`='$semister',`Year`='$year',`Branch`='$branch',`Mobile No.`='$number',`Father's Name`='$fname',
	`Father's mobile No.`='$fnumber',`Residential address`='$address',`10th`='$ten',`12th`='$twelve',`JEE main roll no.`='$mainroll',`JEE main rank`='$mainrank'
     ,`JEE advance roll no.`='$advanceroll',`JEE advance rank`='$advancerank'	WHERE  `Roll`= '$roll'";
	mysqli_query($con,$sql) or die("error in updation".mysqli_error($con));
	
	 echo '<br>
	  <div class="row" >
				
				<div class="col-md-8" >
					<div class="panel panel-default" style="border-radius:.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thin;text-align:center">
						
						<div class="panel-body">';
	  
	 echo '
	 <span style="color:red;text-align:center;"><b><i>&#10004;&nbsp&nbspSuccessfully updated the Database of '.$roll.' . </i></b></span>'; 
	 
echo '</div>
</div>
</div>
</div>';
	

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
