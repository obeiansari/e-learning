<?php
if ($conn = mysqli_connect('localhost','root','password','e-learning_db'))
{
	$query = "INSERT INTO subjects VALUES('','".$_REQUEST['subject']."')";
	mysqli_query($conn,$query);
	mysqli_close($conn);
}
else
{
	echo "could not connect";
}
header('refresh:1; url=subject.php');
?>