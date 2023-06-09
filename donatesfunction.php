<!DOCTYPE html>
<html>
<head>
	<title>Cure Blood Bank -Donor</title>
</head>
<body>
	<?php


function check_donates($con)

{if(isset($_SESSION['donorid']))
	{

		$id = $_SESSION['donorid'];

	
		$query = "select * from donates where donorid= '$id' limit 1";
		
	
		

		$result = mysqli_query($con,$query);
		$resultcheck=mysqli_num_rows($result);
		if($resultcheck > 0)
		{

		while ($row=mysqli_fetch_assoc($result))
		{echo $row['donorid'];}}}
		}?>
		</body>
		</html>
	
