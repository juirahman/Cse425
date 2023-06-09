<?php

function check_patient($con)

{if(isset($_SESSION['Nid']))
	{

		$id = $_SESSION['Nid'];

	
		$query = "select * from patient where Nid = '$id' limit 1";
		

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: pboard.php");
	die;


}