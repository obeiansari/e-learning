<?php
// session_start(); 
// if (!isset($_SESSION['admin_email']))
// {
// 	header('refresh:0 url=admin.php');	
// }
if ($conn = mysqli_connect('localhost','root','password','e-learning_db')) {
	$query = "select * from `subjects`;";
	$result = mysqli_query($conn,$query);
	$type = [];
	while ($row = mysqli_fetch_assoc($result))
	{
		$type[$row['id']] = $row['name'];
	}
	mysqli_close($conn);
}
else
{
	echo"Could not connect.";
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
	<title>questions</title>
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
		margin-top: 30px;
		height: 70vh;
		overflow: auto;
	}
	h1
	{
		text-align: center;
	}
	.save
	{
		margin-top: 20px;
		margin-bottom: 20px;
		width: 100%;
	}
	.ans1
	{
		margin-top: 30px;
		margin-bottom: 30px;
	}
	.ans1
	{
		margin-top: 30px;
		margin-bottom: 30px;
	}
	.ans2
	{
		margin-top: 30px;
		margin-bottom: 30px;
	}
	.my
	{
		margin-left: -25px;
	}
</style>
<script src="../WOW-master/dist/wow.min.js"></script>
<script>
	new WOW().init();
</script>
</head>
<body>
	<div class="container wow zoomIn ">
		<h1>ADD QUESTIONS</h1>
		<a href="logout.php"><span class="btn btn-primary" style="float: right;">Logout</span></a>
		<form method="post" action="addquestion.php">
			<div class="col-xs-12">
				<div class="col-xs-12">
					
					<label>Select Subjects:</label>
					<select class="form-control" name="sub">
						<option value="0">--Select--</option>
						<?php
						foreach ($type as $key => $value) 
						{
							echo "<option value='".$key."'>".$value."</option>";
						}
						?>

					</select>
				</div>
			</div>
			<div class="col-xs-12 ques">		
				<div class="col-xs-12 col-md-12">			
					<label>Add New Question:</label>
					<input type="text" class="form-control" name="question">
				</div>
				<div class="col-xs-12">		
					<div class="col-xs-12">	
						<div class="col-xs-6 ans1">
							<div class="col-xs-3">	
								<label style="line-height: 34px;">Answer 1:</label>
								<input type="radio" name="correct" value="1">
							</div>
							<div class="col-xs-9 my">	
								<input type="text" class="form-control width" name="question1">
							</div>
						</div>
						<div class="col-xs-6 ans2">
							<div class="col-xs-3">	
								<label style="line-height: 34px;">Answer 2:</label>
								<input type="radio" name="correct" value="2">
							</div>
							<div class="col-xs-9 my">	
								<input type="text" class="form-control width" name="question2">
							</div>
						</div>
					</div>
					<div class="col-xs-12">	
						<div class="col-xs-6">
							<div class="col-xs-3">	
								<label style="line-height: 40px;">Answer 3:</label>
								<input type="radio" name="correct" value="3">
							</div>
							<div class="col-xs-9 my">	
								<input type="text" class="form-control width" name="question3">
							</div>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-3">	
								<label style="line-height: 40px;">Answer 4:</label>
								<input type="radio" name="correct" value="4">
							</div>
							<div class="col-xs-9 my">	
								<input type="text" class="form-control width" name="question4">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12">
				<span class="btn btn-primary add" style="float: right;">Add more</span>
			</div>
			<div class="col-md-12 col-xs-12">	
				<button class="btn btn-primary save" type="submit">Save</button>
			</div>
		</form>	
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.add').click(function(){
				$('.ques').append(`<div class="col-xs-12 col-md-12">			
					<label>Add New Question:</label>
					<input type="text" class="form-control" name="subject">
					</div>
					<div class="col-xs-12">		
					<div class="col-xs-12">	
					<div class="col-xs-6 ans1">
					<div class="col-xs-3">	
					<label style="line-height: 34px;">Answer 1:</label>
					<input type="radio" name="question">
					</div>
					<div class="col-xs-9 my">	
					<input type="text" class="form-control width" name="question1">
					</div>
					</div>
					<div class="col-xs-6 ans2">
					<div class="col-xs-3">	
					<label style="line-height: 34px;">Answer 2:</label>
					<input type="radio" name="question">
					</div>
					<div class="col-xs-9 my">	
					<input type="text" class="form-control width" name="question1">
					</div>
					</div>
					</div>
					<div class="col-xs-12">	
					<div class="col-xs-6">
					<div class="col-xs-3">	
					<label style="line-height: 40px;">Answer 3:</label>
					<input type="radio" name="question">
					</div>
					<div class="col-xs-9 my">	
					<input type="text" class="form-control width" name="question1">
					</div>
					</div>
					<div class="col-xs-6">
					<div class="col-xs-3">	
					<label style="line-height: 40px;">Answer 4:</label>
					<input type="radio" name="question">
					</div>
					<div class="col-xs-9 my">	
					<input type="text" class="form-control width" name="question1">
					</div>
					</div>
					</div>`)
			});


		})
	</script>
</body>
</html>