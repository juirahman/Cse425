<?php

function check_Admin($con)
{

	if(isset($_SESSION['Adminid']))
	{

		$id = $_SESSION['Adminid'];
		$query = "select * from admin where Adminid = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	
	header("Location: http://localhost/phpmyadmin/index.php?route=/database/structure&server=1&db=donor");
	die;


}