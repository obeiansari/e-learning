<?php
if($conn = mysqli_connect('localhost','root','password','e-learning_db'))
{
	$query = "INSERT INTO register 	VALUES('','".$_REQUEST['reg_name']."','".$_REQUEST['reg_contact']."','".$_REQUEST['reg_email']."','".$_REQUEST['branch']."','".$_REQUEST['year']."','".$_REQUEST['reg_password']."','".$_REQUEST['Gender']."')";
	mysqli_query($conn,$query);
	mysqli_close($conn);
}
else
{
	echo "could not connect";
}
header('refresh:0; url=index.php');
?>