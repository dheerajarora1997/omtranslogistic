<?php
include_once 'dbconnect.php';
$db = new Db_Connect();
$conn = $db->connect();
if ($_POST['name']!="" && $_POST['email']!="" && $_POST['mob']!="" && $_POST['dob']!="" && $_POST['origiancity']!="" && $_POST['destinationcity']!="" && $_POST['vehiclename']!="" && $_POST['auth']!="") {
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$mob = trim($_POST['mob']);
	
	$dob = trim($_POST['dob']);
	$country = strtolower(trim($_POST['origiancity']));
	$state = strtolower(trim($_POST['desinationcity']));
	$city =  strtolower(trim($_POST['vehiclename']));

         // salt
        $stmt = "INSERT INTO users(name,email,mob,dob,origiancity,destinationcity,vehiclename) VALUES('$name','$email','$dob','$mob','$origiancity','$destinationcity','$vehiclename')";
        	$result = mysqli_query($conn,$stmt) or die(mysql_error());
       mysqli_close($conn);
        	if($result)
        	{
        		 header("Location: nextpage.php");
        	}
        	else
        	{
        		 header("Location: details.php");
        	}
        // check for successful store
}
else {
     echo "Required parameters are missing! Please fill all fields carefully.";
header("Location: signup.php");
}
?>
