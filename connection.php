

<?php 


$con =  mysqli_connect('localhost','root','','registration');


if($con)
	{
		echo "Successfully Connected";
	}
	else 
	{
		echo "not Connected to database";
	}


?>
