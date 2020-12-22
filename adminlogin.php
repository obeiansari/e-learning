<?php 
if ($conn = mysqli_connect('localhost','root','password','e-learning_db'))
 {
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
			header('refresh:1 url=exam.html');
		}
	}
	else
	{
		echo "username or password is incorrect";
	}
	mysqli_close($conn);
}
else
{
	echo "not connected";
}

?>