<?php
if ($conn = mysqli_connect('localhost','root','password','e-learning_db'))
{
	$query = "SELECT id, notice FROM notice";
	$result = mysqli_query($conn, $query);
	$notice = [];
	// echo "<pre>";
	// print_r($result);
	// exit;
	while ($row = mysqli_fetch_assoc($result))
	{
		$notice[] = $row;
		// $notice = $row['notice'];

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
	<title>EDIT</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script src="../js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../animate.css">
	<style type="text/css">
	.container
	{
		margin-top: 40px;
	}
</style>
</head>
<body>
	<div class="container">
		<table border="1px solid " width="100%">
			<tr>
				<th>ID</th>
				<th>Notice</th>
				<th>Action</th>
			</tr>
			<?php
			foreach ($notice as $key => $value)
			{
				# code...

				echo "
				<tr>
				<td>".$value['id']."</td>
				<td>".$value['notice']."</td>
				<td> <a href='edit.php'>Edit</a></td>
				</tr>
				";
			}
			?>
		</table>
	</div>
</body>
</html>