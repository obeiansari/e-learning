<?php 
if ($conn = mysqli_connect('localhost','root','password','e-learning_db'))
{
		// echo "<pre>";
		// print_r($conn);
		// exit(); 
	$email = $_POST['log_email'];
	$password = $_POST['log_password'];
	session_start(); // session starts with the help of this function 
	if(isset($_SESSION['log_email']))   // Checking whether the session is already there or not if 
                                       // true then header redirect it to the home page directly 
	{
		header("refresh:1 url=exam.php"); 
	}
	else
	{
		// echo "<pre>";
		// print_r("hii");
		// exit();
		$query = "SELECT * FROM register WHERE email='$email' AND password='$password'";
		$result = mysqli_query($conn,$query);
		
		if (mysqli_num_rows($result) > 0) 
		{
			while ($row = mysqli_fetch_assoc($result)) 
			{
				$_SESSION['log_email']=$email;
				header('refresh:0; url=exam.php');
			}

		}
		else
		{
			echo "user id or password is incorrect";
			header('refresh:0; url=index.php');

		}
	}
	mysqli_close($conn);
}
else
{
	echo "not connected";
}
?>

