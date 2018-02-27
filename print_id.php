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
					  <a href="user.php"><h4><b>User:<span style="color:green;"><i>
		  <?php
		 $user=$_SESSION['username'];
		  echo $user;
		  
		  ?>
		  
		  
		  
		  </i></span></b></h4></a>
		  <button type="submit" name="logout"class="btn btn-danger">Logout</button>
		  <button type="button" onclick="window.print();return false;" class="btn btn-success">&#128439&nbspPrint</button>
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
 
 
 
 
 
<!------------------------------------------------------------------------------------------------------------------------------------>
       
		
		
	
	
	
	
	
	
	
  <div class="row">
  
    
	         
			
	<div class="col-md-12">
					
							

		<div class="container" >
			
			<div class="row" >
			
			
		<!---------------------------------------------------------------------------------------------------------------------------------->	
			
			
			
			
		<!----------------------------------------------------------------------------------------------------------------------------------->	
			 <div id="annon_head" style="padding-left:32px;">
			 
          <h2><b>Print Form</b></h2>
		  
          <hr>
        </div><br>
			
				
				<div class="col-md-12 " id="section-to-print" style="min-width: 420px;padding-left:5%;padding-right:5%;">
				<table class="table borderless" style="table-layout: fixed;">
				<thead>
				<td colspan=2><img src="images/log.png"/></td>
				<td  colspan=5>
				<p><b><h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspराष्ट्रीय प्रौद्योगिकी संस्थान सिक्किम</h3></b></p>
				<p><b><h3>National Institute of Technology Sikkim</h3></b></p>
				<p><h4><b><i>An Institute of National Importance,under MHRD,GoI</i></b></h4></p>
				<p><h4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRavangla, South Sikkim-737139</h4></p>
				<p><h4 style="text-align:right;"><i>Form - 1:</i><b>20  /.........&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></h4></p>
				
				
				
				
				</td>
				</thead>
				</table>
					<div class="panel panel-default"style=" background-color:#e5e0e0; ">
						<div class="panel-heading"id="annon_head">
							<div   style="text-align:center;height:20px;color:#9E9EA7;padding-top:5px;"><h2 style="color:black;"><b>INFORMATION FOR IDENTITY CARD - 20 &nbsp&nbsp - &nbsp&nbsp&nbsp&nbsp   BATCH</b></h2><hr style="border-width: thick;border-color:black;"></div>
						</div>
						<div  style="height:200px;width:170px;padding-top:50px;margin-top:25px;margin-left:42%;border-color:black;  border-style: solid; border-width: medium; " >
						<p style="text-align:center">
						Recent passport size photograph
						</p>
						<p style="text-align:center">
						(not older than 6 months)
						</p>
						</div>
						<div class="panel-body">
						
						
					
						
						<!--------------------form header-------------------------------------------------------->
						
						
						
						
						
					<!-------------------------------get data-------------------------------------------------------------------->
					
					
<?php



$u=$_SESSION['username'];


$sql="SELECT * FROM  `registration` WHERE `Roll`= '$u'";
$result=mysqli_query($con,$sql) or die("error ..semister registerion not done!! ".mysqli_error($con));
           
			$row=mysqli_fetch_array($result);
			$cat=$row['Category'];
			$sem=$row['Semister'];
			$y=$row['Year'];
			$mn=$row['Mobile No.'];
			$fn=$row["Father's Name"];
			$fmn=$row["Father's mobile No."];
			$s1=$row['SGPA 1'];
			$s2=$row['SGPA 2'];
			$pm=$row['Payment Mode'];
			$tn=$row['Transaction No.'];
            $td=$row['transaction Date'];
			$Branch=$row['Branch'];


?>
					
					
					
<!--------------------------------------------------------------------------------------------------------------------------------------->					
						
						
						
						
						
						
						
						
						
						
						
						
						
							
							
  
  <form action="rform.php" method="post">
  
  
  <!----------------------------------------------1st line--------------------------------------------------------------------------------->
  
  <table class="table table-bordered" style="border-width:2px;border-color:black;table-layout: fixed;" >
  <tbody>
  <tr>
		<td style="border-width:2px;border-color:black;"colspan=1><h3>1.</h3></td>
        <td style="border-width:2px;border-color:black;"colspan=4><label><p><h4>Specimen Signature</h4></p><p>(Full Signature)</p></label></td>
		<td style="border-width:2px;border-color:black;" colspan=7></td> 
  </tr>
  <tr>
		<td style="border-width:2px;border-color:black;"colspan=1><h3>2.</h3></td>
        <td style="border-width:2px;border-color:black;"colspan=4><label><p><h4>IDENTITY CARD NO.</h4></p><p>(For office use only)</p></label></td>
		<td style="border-width:2px;border-color:black;" colspan=7><h4>NITSKM/BTECH/20</h4></td> 
  </tr>
  <tr>
		<td style="border-width:2px;border-color:black;"colspan=1><h3>3.</h3></td>
        <td style="border-width:2px;border-color:black;"colspan=4><label><p><h4>VALID UPTO</h4></p><p>(For office use only)</p></label></td>
		<td style="border-width:2px;border-color:black;" colspan=7><h4>JULY,20</h4></td> 
  </tr>
  <tr>
		<td style="border-width:2px;border-color:black;"colspan=1><h3>4.</h3></td>
        <td style="border-width:2px;border-color:black;"colspan=4><label><p><h4>Name of the Student</h4></p><p></p></label></td>
		<td style="border-width:2px;border-color:black;" colspan=7><h4><?php $use=$_SESSION['name']; echo $use;?></h4></td> 
  </tr>
  <tr>
		<td style="border-width:2px;border-color:black;"colspan=1><h3>5.</h3></td>
        <td style="border-width:2px;border-color:black;"colspan=4><label><p><h4>Father's Name </h4><p></p></label></td>
		<td style="border-width:2px;border-color:black;" colspan=7><h4><?php echo $fn; ?></h4></td> 
  </tr>
  <tr>
		<td style="border-width:2px;border-color:black;"colspan=1><h3>6.</h3></td>
        <td style="border-width:2px;border-color:black;"colspan=4><label><p><h4>Mother's Name </h4><p></p></label></td>
		<td style="border-width:2px;border-color:black;" colspan=7><h4></h4></td> 
  </tr>
  <tr>
		<td style="border-width:2px;border-color:black;"colspan=1><h3>7.</h3></td>
        <td style="border-width:2px;border-color:black;"colspan=4><label><p><h4>Course Admitted in</h4></p><p>(For office use only)</p></label></td>
		<td style="border-width:2px;border-color:black;" colspan=7></td> 
  </tr>
  <tr>
		<td style="border-width:2px;border-color:black;"colspan=1><h3>8.</h3></td>
        <td style="border-width:2px;border-color:black;"colspan=4><label><p><h4>DEPARTMENT</h4></p><p></p></label></td>
		<td style="border-width:2px;border-color:black;" colspan=7><h4><?php echo $Branch; ?></h4></td> 
  </tr>
  <tr>
		<td style="border-width:2px;border-color:black;"colspan=1><h3>9.</h3></td>
        <td style="border-width:2px;border-color:black;"colspan=4><label><p><h4>Roll No.</h4></p><p></p></label></td>
		<td style="border-width:2px;border-color:black;" colspan=7><h4><?php $user=$_SESSION['username']; echo $user;?></h4></td> 
  </tr>
  <tr>
		<td style="border-width:2px;border-color:black;"colspan=1><h3>10.</h3></td>
        <td style="border-width:2px;border-color:black;"colspan=4><label><p><h4>Date Of Birth</h4></p>(dd-mm-yyyy)<p></p></label></td>
		<td style="border-width:2px;border-color:black;" colspan=7></td> 
  </tr>
  
 
  </tbody>
  </table>
  
  <br><br><br><br><br><br>
  
  
  <table class="table borderless" style="table-layout: fixed;">
				<thead>
				<td colspan=2><img src="images/log.png"/></td>
				<td  colspan=5>
				<p><b><h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspराष्ट्रीय प्रौद्योगिकी संस्थान सिक्किम</h3></b></p>
				<p><b><h3>National Institute of Technology Sikkim</h3></b></p>
				<p><h4><b><i>An Institute of National Importance,under MHRD,GoI</i></b></h4></p>
				<p><h4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRavangla, South Sikkim-737139</h4></p>
				<p><h4 style="text-align:right;"><i>Form - 1:</i><b>20  /.........&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></h4></p>
				
				
				
				
				</td>
				</thead>
				</table>
  
  
  
    <table class="table table-bordered" style="border-width:2px;border-color:black;table-layout: fixed;" >
  <tbody>
  <tr>
		<td style="border-width:2px;border-color:black;"colspan=1><h3>11.</h3></td>
        <td style="border-width:2px;border-color:black;"colspan=4><label><p><h4>Hostel Address</h4></p><p>(For office use only)</p></label></td>
		<td style="border-width:2px;border-color:black;" colspan=7><h4><p>&nbsp&nbsp&nbsp</p><p>&nbsp&nbsp&nbsp</p>National Institute of Technology Sikkim<p></p>Ravangla , South Sikkim-737139, INDIA</h4></td> 
  </tr>
  <tr>
		<td style="border-width:2px;border-color:black;"colspan=1><h3>12.</h3></td>
        <td style="border-width:2px;border-color:black;"colspan=4><label><p><h4>Permanent Adress</h4></p><p></p></label></td>
		<td style="border-width:2px;border-color:black;" colspan=7><h4><p>House No:</p><p>Street Name:</p><p>Locality:</p><p>City:</p><p>District:</p><p>Post Office:</p><p>Police Station</p><p>State:</p><p>Pin code</p></h4></td> 
  </tr>
  <tr>
		<td style="border-width:2px;border-color:black;"colspan=1><h3>13.</h3></td>
        <td style="border-width:2px;border-color:black;"colspan=4><label><p><h4>Student's Contact No.</h4></p><p>(Mobile)</p></label></td>
		<td style="border-width:2px;border-color:black;" colspan=7><h4><?php echo $mn; ?></h4></td> 
  </tr>
  <tr>
		<td style="border-width:2px;border-color:black;"colspan=1><h3>14.</h3></td>
        <td style="border-width:2px;border-color:black;"colspan=4><label><p><h4>Emergency Contact No.</h4></p><p>Landline(with STD code)&mobile no.</p></label></td>
		<td style="border-width:2px;border-color:black;" colspan=7></td> 
  </tr>
  <tr>
		<td style="border-width:2px;border-color:black;"colspan=1><h3>15.</h3></td>
        <td style="border-width:2px;border-color:black;"colspan=4><label><p><h4>Blood Group </h4><p></p></label></td>
		<td style="border-width:2px;border-color:black;" colspan=7></td> 
  </tr>
  <tr>
		<td style="border-width:2px;border-color:black;"colspan=1><h3>16.</h3></td>
        <td style="border-width:2px;border-color:black;"colspan=4><label><p><h4>Email Id of Student </h4><p></p></label></td>
		<td style="border-width:2px;border-color:black;" colspan=7><h4><?php $email=$_SESSION['email']; echo $email;?></h4></td> 
  </tr>
 
  
 
  </tbody>
  </table>
  
  
  <p><h4><b>I declare that the information given above is true and can be used for issuing Identity card.</b></h4></p>
  <br>
  <table class="table borderless" style="table-layout: fixed;">
  <tbody>
  <tr>
  <td colspan=6><h4><p>Signature of Guardian</p><p>Date:</p><p>Place:</p></h4></td>
  <td colspan=6><h4><p>Signature of candidate</p><p>Date:</p><p>Place:</p></h4></td>
  </tr>
  </tbody>
  </table>
  
  
  
  
  
  
  
 
  
 
  
  
  <!----------------------------------------------end of 1st line----------------------------------------------------------------------------------->
  
  
  <!------------------------------------------2nd line--------------------------------------------------------------------------->
     

	 
	 
	 
	 
	 
	 
  
	 
	 
	 
	 
	 
	 
	
	  
 
	<!----------------------------------------end of 2nd line------------------------------------------------------------>
	
	<!--------------------------------------3rd line----------------------------------------------------------------->
	 





  
  
  
  
  
  

    <!---hr  style="border-width: medium;border-color:#3C7570;">


     
	 
	 <div   style="text-align:center;color:#9E9EA7;" id="annon_head"><h2>Acedemic and payment details</h2><hr style="border-width: medium;border-color:#3C7570;"></div--->
	 
	 


	 
	
	<!-------------------------------------end of third line------------------------------------------------------------------------->
	<!------------------------------------acedemic and payment details---------------------------------------------------------------->
	<!----br>
	<div class="row">
  <div class=" col-md-12" style="padding-bottom:10px;">
    <div class="col-md-4"><label for="sgpa" style="float:right;">SGPA&nbspof&nbspthe&nbsplast&nbsptwo&nbspsemisters: </label></div>
    <div class="col-md-4"><input type="number" step="any" name="sgpa1" class="form-control" id="sgpa" placeholder="<?php echo $s1; ?>" value="<?php echo $s1; ?>"></div>
	<div class="col-md-4"><input type="number" step="any" name="sgpa2" class="form-control" id="sgpa" placeholder="<?php echo $s2; ?>" value="<?php echo $s2; ?>"></div>
  </div>
  
  </div--->
  
  
  
  
  <!----br>
  <div class="row">
  <div class=" col-md-12" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="fees"  style="float:right;">Tuition&nbspfees&nbsppayment&nbspdetails: </label></div>
    <div class="col-md-3"><select class="form-control" name="pm" id="fees" style="width:100%;">
        
		<option value="online transfer">Online Transfer</option>
        
      </select>
	</div>
	<div class="col-md-3"><input type="text" name="transaction" class="form-control" id="fees" placeholder="txn no =<?php echo $tn; ?>" value="<?php echo $tn; ?>" ></div>
	<div class="col-md-3"><input type="date" name="date" class="form-control" id="fees" placeholder="<?php echo $td; ?>" value="<?php echo $td; ?>"  ></div>
  </div>
  
  </div----->
	
	
	
	
	
	<!---------------------------------------------------------------------------------------------------------------------------------->
	<!---------------------------------------------course registered-------------------------------------------------------------------->
	
	 <!--hr  style="border-width: medium;border-color:#3C7570;"><div   style="text-align:center;color:#9E9EA7;" id="annon_head"><h2>Course Registered</h2>
	 <div   style="color:red;" id="annon_head">note : do course registration again !!!! </div><hr style="border-width: medium;border-color:#3C7570;"></div>
	<br><br-->
	
<!----div class="row">
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
      <tr>
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
      </tr>
    </tbody>
  </table>
</div>
</div><br-------->	







<!------div class="row">
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
    <tbody>
      <tr>
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
      </tr>
    </tbody>
  </table>
</div>
</div><br------->	







<!----div class="row">
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
    <tbody>
      <tr>
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
      </tr>
	  
    </tbody>
  </table>
</div>
</div><br------->	











<!------div class="row">
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
    <tbody>
      <tr>
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
      </tr>
	 
	 
    </tbody>
  </table>
</div>
</div><br------->	







	
	<!----------------------------------------------------------------------------------------------------------------------------------->
	
	
	
	
	
	
  
  
  </form>
  

							
							
							
							
						<!----------------------------------------------------------------------------------------->	
						</div>
					</div>
				</div>
				
			</div>
		</div>
    </div>				
							
							
							
							
	<div class="col-md-12">
	   <br>
	   
    
	<div style="padding-left:45%;">
      <button type="button" onclick="window.print();return false;"  class="btn btn-danger btn-lg">&#128439&nbspClick to PRINT</button>
    </div>
	<br><br><br><br><br><br><br><br>
	
	
  </div>						
				
				
				
												
					
				
				
					
			
				
  
  
</div>
</div>


  

<!--------------------------------------------------------------------------------------------------------------------------------------------->



<?php include 'footer.php'; ?>
