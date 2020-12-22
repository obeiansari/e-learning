
<?php
	// if (!isset($_SESSION['admin_email']))
	// {
	// 	header('refresh:0 url=admin.php');	
	// }
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
	<title>notice</title>
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
		border-color: #e2f4fe;
		box-shadow: 1px 29px 25px -23px #181515;

		margin-top: 50px;
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
	<div class="container wow rotateInDownLeft">
		<h1>ADD NOTICES</h1>
		<form method="post" action="save-notice.php">
			<div class="col-xs-12 col-md-12">			
				<label>New Notice:</label>
				<textarea class="form-control" name="notice"></textarea>
			</div>
			<div class="col-md-12 col-xs-12">	
				<button class="btn btn-primary save" type="submit">Save</button>
			</div>
		</form>	
	</div>
</body>
</html>