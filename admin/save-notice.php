<?php
if ($conn = mysqli_connect('localhost','root','password','e-learning_db')) {
	$query = "INSERT INTO notice VALUES ('','".$_REQUEST['notice']."')";
	mysqli_query($conn, $query);
	mysqli_close($conn);
	// header('refresh:1, location=notice.php');
}
else
{
	echo "could not connect.";
}
	header('refresh:1 url=notice.php');
	// header('location=notice.php');

?>