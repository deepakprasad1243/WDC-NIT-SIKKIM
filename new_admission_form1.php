<?php 
session_start();
if (!isset($_SESSION['username']))
	header('location: registration.php');
?>
      <?php include 'includes/header.php'; ?>        
	  
	  
	  <?php include 'connection.php'; ?>

 <form action="" method="post">
 
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
    position: relative;
    left: 0;right: 0;
    top: -800px;
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
 
 
 
    <div class="form-inline ">
          
          <h4><b>User:<span style="color:green;"><i>
		  <?php
		  
		 $user=$_SESSION['username'];
		  echo $user;
		  
		  ?>
		  
		  
		  
		  </i></span></b></h4>
		  
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
							<div   style="text-align:center;height:20px;color:#9E9EA7;padding-top:5px;"><h2><b>New Admission Forms</b></h2><hr></div>
						</div>
						<div class="panel-body">
													<p> 
							 <a href="">
							 <button type="button" class="btn  btn-default btn-lg" style="color:red;width:90%;margin-left:5%;">
                             <!--<span class="glyphicon glyphicon-search"></span---->FORM - 1
                             </button></a>
							</p>
						<p> <a href="">
							 <button type="button" class="btn  btn-info btn-lg" style="color:black;width:90%;margin-left:5%;">
                             <!--<span class="glyphicon glyphicon-search"></span------>FORM - 2
                             </button></a>	
							
<!---------------------------------------------------------------------------------------------------------------------------->
                              


<!-----------------------------------------------------student login----------------------------------------------------------------------->							 
							 
							 
		


 



					 
							 
<!----------------------------------------------------------------------------------------------------------------------------------->							 
							</p>
							<p> 
							 <a href="">
							 <button type="button" class="btn btn-info btn-lg" style="color:black;width:90%;margin-left:5%;">
                             <!--<span class="glyphicon glyphicon-search"></span--->FORM - 3
                             </button></a>
							</p>
							<p> 
							 <a href="">
							 <button type="button" class="btn  btn-info btn-lg" style="color:black;width:90%;margin-left:5%;">
                             <!--<span class="glyphicon glyphicon-print"></span>-->FORM - 4 
                             </button></a>
							</p>
							
							
							
						</div>
					</div>
				</div>
<!--------------------------------------------------------content start--------------------------------------------------------------------------------->
			
  
    
	         
			
	<div class="col-md-9">	       





					   <div id="annon_head" style="padding-left:32px;">
          <h2><b>Form - 1</b></h2>
          <hr>
        </div>
		
	
			
			<div class="row" >
				
				<div class="col-md-12" >
					<div class="panel panel-default"style="border-radius: 1.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thick;">
						<!---<div class="panel-heading"style="background-color:#e5e0e0;border-radius: 1.5em 1.5em 0em 0em;"id="annon_head">
							<div   style="text-align:center;height:20px;color:#9E9EA7;padding-top:5px;"><h2>Administration</h2><hr></div>
						</div>-->
						<div class="panel-body">	
	
	<!------------------------------------------------------form - 1-------------------------------------------------------------------------------------------------->
	
	<div class="col-md-12 " id="section-to-print" style="min-width: 420px;padding-left:5%;padding-right:5%;">
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
  <br>
  <table class="table table-bordered" style="border-width:2px;border-color:black;table-layout: fixed;" >
  <tbody>
  <tr>
        <td style="border-width:2px;border-color:black;"colspan=4><label>Name of the student:&nbsp&nbsp&nbsp&nbsp</label><?php $use=$_SESSION['name']; echo $use;?></td>
		<td style="border-width:2px;border-color:black;" colspan=4><label>Roll No.:&nbsp&nbsp&nbsp&nbsp</label><?php $user=$_SESSION['username']; echo $user;?></td> 
  </tr>
  <tr>
        <td style="border-width:2px;border-color:black;"colspan=3><label>Mobille No.:&nbsp&nbsp&nbsp&nbsp</label><?php echo $mn; ?></td>
		<td style="border-width:2px;border-color:black;"colspan=2><label>Category:&nbsp&nbsp&nbsp&nbsp</label><?php echo $cat; ?></td> 
		<td style="border-width:2px;border-color:black;"colspan=3><label>Email Id:&nbsp&nbsp&nbsp&nbsp</label><?php $email=$_SESSION['email']; echo $email;?></td> 
  </tr>
  <tr>
        <td style="border-width:2px;border-color:black;"colspan=3><label>Semister:&nbsp&nbsp&nbsp&nbsp</label><?php echo $sem; ?></td>
		<td style="border-width:2px;border-color:black;"colspan=2><label>Year:&nbsp&nbsp&nbsp&nbsp</label><?php echo $y; ?></td> 
		<td style="border-width:2px;border-color:black;"colspan=3><label>Branch:&nbsp&nbsp&nbsp&nbsp</label><?php echo $Branch; ?></td> 
  </tr>
  <tr>
        <td style="border-width:2px;border-color:black;"colspan=4><label>Father's&nbspName:&nbsp&nbsp&nbsp&nbsp </label><?php echo $fn; ?></td>
		<td style="border-width:2px;border-color:black;" colspan=4><label>Father's&nbspMobile&nbspNo.:&nbsp&nbsp&nbsp&nbsp</label><?php echo $fmn; ?></td> 
  </tr>
  <tr>
        <td style="border-width:2px;border-color:black;"colspan=4;rowspan=4><label>Present&nbspAddress:&nbsp&nbsp&nbsp&nbsp </label></p><br></p></td>
		<td style="border-width:2px;border-color:black;" colspan=4 ;rowspan=4><label>Permanent&nbspHome&nbspaddress:&nbsp&nbsp&nbsp&nbsp</label></p><br></p></td> 
  </tr>
  </tbody>
  </table>
  
  <table class="table table-bordered" style="border-width:2px;border-color:black;table-layout: fixed;" >
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
  <tbody>
  <tr>
        <td style="border-width:2px;border-color:black;padding:0;"><label>1.</label></td>
		<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>Subject Code</label></td> 
		<td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Subject Name</label></td> 
		<td style="border-width:2px;border-color:black;padding:0"colspan=1><label>Credit</label></td>
		<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>Semister</label></td> 
		<td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
  </tr>
  <tr>
        <td style="border-width:2px;border-color:black;padding:0;"><label>2.</label></td>
		<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>Subject Code</label></td> 
		<td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Subject Name</label></td> 
		<td style="border-width:2px;border-color:black;padding:0"colspan=1><label>Credit</label></td>
		<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>Semister</label></td> 
		<td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
  </tr>
  <tr>
        <td style="border-width:2px;border-color:black;padding:0;"><label>3.</label></td>
		<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>Subject Code</label></td> 
		<td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Subject Name</label></td> 
		<td style="border-width:2px;border-color:black;padding:0"colspan=1><label>Credit</label></td>
		<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>Semister</label></td> 
		<td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
  </tr>
  <tr>
        <td style="border-width:2px;border-color:black;padding:0;"><label>4.</label></td>
		<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>Subject Code</label></td> 
		<td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Subject Name</label></td> 
		<td style="border-width:2px;border-color:black;padding:0"colspan=1><label>Credit</label></td>
		<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>Semister</label></td> 
		<td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
  </tr>
  <tr>
        <td style="border-width:2px;border-color:black;padding:0;"><label>5.</label></td>
		<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>Subject Code</label></td> 
		<td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Subject Name</label></td> 
		<td style="border-width:2px;border-color:black;padding:0"colspan=1><label>Credit</label></td>
		<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>Semister</label></td> 
		<td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td> 
  </tr>
  </tbody>
  </table>
  <!-------------------------------------------------------------------------------------------------------------------------->
  
  <table class="table table-bordered" style="border-width:2px;border-color:black;table-layout: fixed;" >
  <thead>
   <td style="border-width:2px;border-color:black;padding:0;text-align:center;"colspan=6><label>ACEDEMICS DETAILS</label></td>	 
  </thead>

  <tbody>
  <tr>
  <td style="border-width:2px;border-color:black;"colspan=2><label>SGPA of last two semisters: </label></td>
  <td style="border-width:2px;border-color:black;"colspan=2><label>SGPA 1:&nbsp&nbsp&nbsp&nbsp</label><?php $use=$_SESSION['name']; echo $s1;?></td>
  <td style="border-width:2px;border-color:black;" colspan=2><label>SGPA 2:&nbsp&nbsp&nbsp&nbsp</label><?php $user=$_SESSION['username']; echo $s2;?></td> 
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
  <td style="border-width:2px;border-color:black;"colspan=2><label>Transanction No.:&nbsp&nbsp&nbsp&nbsp</label><?php $use=$_SESSION['name']; echo $tn;?></td>
  <td style="border-width:2px;border-color:black;" colspan=2><label>Transanction Date:&nbsp&nbsp&nbsp&nbsp</label><?php $user=$_SESSION['username']; echo $td;?></td> 
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
	
	
	
	
	<!---------------------------------------------------------------------------------------------------------------------------------------------------------------->
	
	
	
	
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
