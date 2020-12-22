<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script src="../js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="animate.css">
	<title>MCQ</title>
	<style type="text/css">
	body
	{
		background-image: url('images/bg3.jpg');
		background-repeat: no-repeat;
		background-size: cover;
		font-size: 20px;
	}
</style>
</head>
<body>
	<form action="correct.php" method="post">
		<?php
		if ($conn = mysqli_connect('localhost','root','password','e-learning_db'))
		{
	// $query = "SELECT * FROM question WHERE sub_id='".$_REQUEST['subject']."';"
			$query = "SELECT * FROM question WHERE sub_id=3";

			$result = mysqli_query($conn,$query);
	// echo "<pre>";
	// print_r($result);
	// exit();
			$i=1;
			while ($row = mysqli_fetch_assoc($result))
			{
				echo '<div>
				<div><label>Q.'.$i.'&nbsp&nbsp</label><label>'.$row["question"].'</label>
				</div>
				<div>
				<div class="col-md-6"><input type="radio" name="'.$row['id'].'" value="1"><label>'.$row["answer1"].'</label></div>
				<div class="col-md-6"><input type="radio" name="'.$row['id'].'" value="2"><label>'.$row["answer2"].'</label></div>
				<div class="col-md-6"><input type="radio" name="'.$row['id'].'" value="3"><label>'.$row["answer3"].'</label></div>
				<div class="col-md-6"><input type="radio" name="'.$row['id'].'" value="4"><label>'.$row["answer4"].'</label></div>
				</div>
				</div>';
		// echo "<pre>";
		// print_r($row);
		// // exit();
				$i++;
			}

		}
		?>
		<!-- <input  type="submit" name="submit" value="submit"> -->
		<button style="margin-left: 25%; margin-top: 35px;" class="btn btn-primary" name="submit">Submit</button>
	</form>
</body>
</html>