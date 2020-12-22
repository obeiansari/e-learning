<?php
if($conn = mysqli_connect('localhost','root','password','e-learning_db'))
{
	$score=0;
	foreach ($_REQUEST as $key => $value)
	{
		if ($key!= 'submit')
		{
			$query = "SELECT correct FROM question WHERE id = $key ";
			$result = mysqli_query($conn,$query);
			if (mysqli_num_rows($result) > 0)
			{
				while ($row = mysqli_fetch_assoc($result))
				{
					if ($value==$row['correct'])
					{
					 $score++;			
					}
				}
			}
		}
	}
	echo "You have scored $score";

}




?>