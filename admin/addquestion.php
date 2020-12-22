<?php
if ($conn = mysqli_connect('localhost','root','password','e-learning_db'))
{
	$query = "INSERT INTO question VALUES('','".$_REQUEST['sub']."','".$_REQUEST['question']."','".$_REQUEST['question1']."','".$_REQUEST['question2']."','".$_REQUEST['question3']."','".$_REQUEST['question4']."','".$_REQUEST['correct']."')";
	// echo $query;
	// exit;
	mysqli_query($conn,$query);
	mysqli_close($conn);
}
else
{
	echo "could not connect";
}
header('refresh:1; url=question.php');
?>