<?php
session_start();
if ($conn = mysqli_connect('localhost','root','password','e-learning_db'))
{
	$email = $_POST['log_email'];
	$password = $_POST['log_password'];

	if (isset($_SESSION['log_email']))
	{
		header('url=exam1.php');
		
	}
	else
	{
		$query = "SELECT * FROM register WHERE email='$email' AND password='$password'";
		$result = mysqli_query($conn,$query);
		$_SESSION['log_email']=$email;
		if (mysqli_num_rows($result)>0)
		{
			while ($row = mysqli_fetch_assoc($result))
			{
				header('url=exam1.php');
			}
		}
		else
		{
			echo "username or password is incorrect";
			header('url=index.php');
		}
	}
	mysqli_close($conn);
}
else
{
	echo "not connected";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>exam</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="animate.css">
	<style type="text/css">
	body
	{
		background-image: url('images/bg3.jpg');
		height: 100vh;
	}
	.container
	{
		border: 1px solid;
		border-color: #e2f4fe;
		box-shadow: 1px 29px 25px -23px #181515;
		margin-top: 50px;	
	}
	.submit
	{
		margin-top: 20px;
		margin-bottom: 20px;
	}
	h3
	{
		text-align: center;
	}
	.bt
	{
		text-align: center
	}
</style>
</head>
<body>
	<div class="container">
		<form method="post" action="student.php">
			<h3>Select Subject</h3>
			<select class=" form-control">		
				<option value="0">--Select--</option>
				<?php
				foreach ($subject as $key => $value) 
				{
					echo "<option value='".$key."'>".$value."</option>";
				}
				?>
			</select>
			<div class="col-xs-12 bt ">
				<button class="btn btn-primary submit" type="submit">Submit</button>
				<a href="userlogout.php">
					<span class="btn btn-danger">Logout</span>
				</a>

			</div>
			<div class="col-xs-12">
			</div>
		</form>
	</div>

</body>
</html>