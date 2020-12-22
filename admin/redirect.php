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
	<title>Operations</title>
	<style type="text/css">
	body
	{
		background-image: url('../images/bg3.jpg');
		background-repeat: no-repeat;
		background-size: cover;
		height: 100vh;
	}
	.btn
	{
		display:inline-block;
		margin-left: 165px;
		margin-top: 30px;
	}
</style>
</head>
<body>
	<center>
		<h1><b>Which opration do you want to perform?</b></h1>
	</center>
	<div class="btn">
		<div style="display: inline-block;">	
			<form method="post" action="notice.php">		
				<button class="btn btn-primary" type="submit">Change Notice</button>
			</form>
		</div>
		<div style="display: inline-block;">		
			<form method="post" action="question.php">	
				<button class="btn btn-primary" type="submit">Add Questions</button>
			</form>	
		</div>
		<div style="display: inline-block;">		
			<form method="post" action="subject.php">	
				<button class="btn btn-primary" type="submit">Add Subjects</button>
			</form>	
		</div>
	</div>
</body>
</html>