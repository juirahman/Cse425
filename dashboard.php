<?php 
session_start();

	include("connection.php");
	include("functions.php");
	
	include("donatesfunction.php");
	
	$user_data = check_login($con);
	
	


?>

<!DOCTYPE html>
<html>
<head>
	<title>Cure Blood Bank -Donor</title>
	<style>
		
		body {
	
	background-color: #f89aa6;
  }
.center {
   position: absolute;
   top: 30%;
   left: 50%;
   transform: translate(-50%, -50%);
   font-size: 40px;
}
</style></head>
<body>


    <div class="caption center">Welcome To Cure Blood Bank<br>
	Hello!
	<?php 
	echo $user_data['F_Name'];
		
	?>
    </div>

</body>
</html>