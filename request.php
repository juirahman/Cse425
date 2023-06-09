<?php 
session_start();

	include("connection.php");
	include("patientfunction.php");

	$user_data = check_Patient($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cure Blood Bank -Patient</title>
</head>
<body>

	
	<h1>Welcome to Cure Blood Bank</h1>

	<br>


</body>
</html>