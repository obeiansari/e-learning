<?php
 session_start(); 
if ($conn = mysqli_connect('localhost','root','password','e-learning_db'))
{
}
else
{
	echo "not connected";exit;
}
$ad_email = $_POST['admin_email'];
$ad_password = $_POST['admin_password'];
$sql = "SELECT * FROM admin WHERE email= '$ad_email' AND password = '$ad_password'";
// echo "<pre>";
// print_r($sql);
// exit();
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) 
{
	while ($row = mysqli_fetch_assoc($result))
	{
		// echo "<pre>";

		$_SESSION['admin_email'] = $row['id'];
		// print_r($_SESSION);exit;
		header('refresh:0 url=redirect.php');
	}
}
else
{
	echo "username or password is incorrect";
}
mysqli_close($conn);
	// }

?>