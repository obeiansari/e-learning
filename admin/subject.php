<?php
// if (!isset($_SESSION['admin_email']))
// {
// 	header('refresh:0 url=admin.php');	
// }
if ($conn = mysqli_connect('localhost','root','password','e-learning_db'))
{
	$query =  "SELECT * FROM subjects ORDER BY id;";
	$result = mysqli_query($conn,$query);
	$notice = [];
	while ($row = mysqli_fetch_assoc($result))
	{
		$notice[] = $row['name'];
	}
	mysqli_close($conn);
}
else
{
	echo "could not connect";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script src="../js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../animate.css">
	<title>subject</title>
	<style type="text/css">
	body
	{
		background-image: url('../images/bg3.jpg');
		background-repeat: no-repeat;
		background-size: cover;
		height: 100vh;
	}
	.container
	{
		border: 1px solid;
		box-shadow: 1px 29px 25px -23px #181515;
		margin-top: 50px;
		border-color: #e2f4fe;
	}
	h1
	{
		text-align: center;
	}
	.save
	{
		margin-top: 20px;
		margin-bottom: 20px;
	}
</style>
<script src="../WOW-master/dist/wow.min.js"></script>
<script>
	new WOW().init();
</script>
</head>
<body>
	<div class="container wow fadeInUp">
		<h1>ADD SUBJECTS</h1>
		<form method="post" action="addsubjects.php">
			<div class="col-xs-12 col-md-12">			
				<label>Add New Subject:</label>
				<input type="text" class="form-control" name="subject">
			</div>
			<div class="col-md-12 col-xs-12">	
				<button class="btn btn-primary save" type="submit">Save</button>
			</div>
		</form>	
		<div class="col-xs-12">
			<h4>ADDED SUBJECTS:</h4>
			<?php	
			foreach ($notice as $key => $value) 
			{
				echo "<p>
				".$value."
				</p>";
			}
			?>

		</div>
	</div>
</body>
</html>