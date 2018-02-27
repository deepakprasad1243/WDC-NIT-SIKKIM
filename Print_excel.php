<?php 
session_start(); if (!isset($_SESSION['username'])) header('location: registration_admin.php');
?>

 <?php include 'connection.php'; ?>

<?php
if($_SESSION['do']=="all_datbase" || $_SESSION['do']=="batch_datbase")
{
	  if($_SESSION['do']=="all_datbase")
	  {
		  echo "\t\t\t\t\t\t\t".'STUDENTS DATABASE'."\n"."\n"."\n";
	  $sql="SELECT * FROM `new registration` ";
	  $setExcelName="Student Database";
	  }
       else
	   {
		   $year = $_SESSION['batch'];
		   echo "\t\t\t\t\t\t\t".'STUDENTS BATCH_'.$year.' DATABASE'."\n"."\n"."\n";
		   $sql="SELECT * FROM `new registration` WHERE `Year`= '$year' ";
		   $setExcelName="Student Batch_".$year."Database";
	   }
		   
	   
	   
	$result=mysqli_query($con,$sql) or die("error ..semister registerion not done!! ".mysqli_error($con));
           
			$row=mysqli_fetch_array($result);
			$setData="";
			$setMainHeader="";
			
if($row)
{	$count = 1;
$setMainHeader='S.NO.'."\t".'NAME'."\t".'ROLL NO.'."\t".'EMAIL ID'."\t".'CATEGORY'."\t".'COURSE'."\t".'SEMESTER'."\t".'YEAR'."\t".'BRANCH'."\t".'MOBILE NO.'."\t".'FATHER NAME'."\t".'FATHER MOBILE NO.'."\t".'RESIDENTIAL ADDRESS'."\t".'10TH %/CGPA'."\t".'12TH %AGE'."\t".'JEE MAIN ROLL NO.'."\t".'JEE MAIN RANK'."\t".'JEE advance roll no.'."\t".'JEE ADVANCE RANK';
			
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
		
		$rowLine=$count++."\t".$name."\t".$roll."\t".$email."\t".$cat."\t".$course."\t".$sem."\t".$year."\t".$branch."\t".$mn."\t".$fn."\t".$fmn."\t".$s1."\t".$s2.
		"\t".$pm."\t".$tn."\t".$td."\t".$sub."\t".$subj;
		
		$setData .= trim($rowLine)."\n";
		
		
		$row=mysqli_fetch_array($result);
		
		
		
	}
	
 
  
}
}
else
	if($_SESSION['do']=="all_registration" || $_SESSION['do']=="batch_registration")
{
 
  
 
	
	  if($_SESSION['do']=="all_registration")
	  {
	  $sql="SELECT * FROM `registration` ";
	  $setExcelName="Student registrations";
	  }
       else
	   {
		   $year = $_SESSION['batch'];
		   $sql="SELECT * FROM `registration` WHERE `Year`= '$year' ";
		   $setExcelName="Student Batch_".$year."registrations";
	   }
		   
	   
	   
	$result=mysqli_query($con,$sql) or die("error ..semister registerion not done!! ".mysqli_error($con));
           
			$row=mysqli_fetch_array($result);
			$setData="";
			$setMainHeader="";
			
if($row)
{	$count = 1;
$setMainHeader='S.NO.'."\t".'NAME'."\t".'ROLL NO.'."\t".'EMAIL ID'."\t".'CATEGORY'."\t".'COURSE'."\t".'SEMESTER'."\t".'YEAR'."\t".'BRANCH'."\t".'MOBILE NO.'."\t".'FATHER NAME'."\t".'FATHER MOBILE NO.'."\t".'SGPA-1'."\t".'SGPA-2'."\t".'PAYMENT MODE'."\t".'TRANSANCTION NO.'."\t".'TRANSANCTION DATE'."\t".'SUBJECT(s) CODE {SEMESTER}';
			
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
		
		$rowLine=$count++."\t".$name."\t".$roll."\t".$email."\t".$cat."\t".$course."\t".$sem."\t".$year."\t".$branch."\t".$mn."\t".$fn."\t".$fmn."\t".$s1."\t".$s2.
		"\t".$pm."\t".$tn."\t".$td."\t".$sub;
		
		$setData .= trim($rowLine)."\n";
		
		
		$row=mysqli_fetch_array($result);
		
		
		
	}
	
 
  
}
}

//This Header is used to make data download instead of display the data

 header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=".$setExcelName."_Reoprt.xls");

header("Pragma: no-cache");

header("Expires: 0");

//It will print all the Table row as Excel file row with selected column name as header.

echo ucwords($setMainHeader)."\n".$setData."\n";

?>