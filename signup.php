<?php
session_start();
include("connection.php");
	include("functions.php");
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
	
        $F_Name = $_POST['F_Name'];
        $L_Name = $_POST['L_Name'];
        $DateOfBirth = $_POST['DateOfBirth'];
        $Address = $_POST['Address'];
        $D_bloodtype = $_POST['D_bloodtype'];
        $Phone_no =$_POST['Phone_no'];
		$Donorid = $_POST['Donorid'];
		$password = $_POST['password'];

		if(!empty($F_Name) &&!empty($L_Name) &&!empty($DateOfBirth) &&!empty($Address) &&!empty($D_bloodtype) &&!empty($Phone_no) &&!empty($Donorid) && !empty($password) )
        	{
$query = "INSERT into donor_login values ('$F_Name','$L_Name','$DateOfBirth','$Address','$D_bloodtype','$Phone_no','$Donorid','$password')";
mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>
<body>

    <style type="text/css">
    #text{
height: 25px;
border-radius: 5px;
padding: 4px;
border: solid thin;
width: 50%;


    }

#button{
    padding :10px;
    width: 100px;
    color:white;
        border: none;

}
#box{
     
    margin: auto;
    width: 700px;
    padding: 20px;
    background-image:url("bl1.JFIF");
   
    
}

</style> 

<div id="box">
    <form method="post">
    
        <div style ="font-size: 80px; margin: 100px; font-family: sans serif; font-weight: bold; text-allign: center">Sign In</div>
       

            
             <div style ="font-size: 30px; font-family: serif; ">F_Name:</div>
              <input id="text" type="text" name="F_Name"><br></br>
              <div style ="font-size: 30px; font-family: serif; ">L_Name:</div>
              <input id="text" type="text" name="L_Name"><br></br>
              <div style ="font-size: 30px; font-family: serif; ">DateOfBirth:</div>
              <input id="text" type="date" name="DateOfBirth"><br></br>
              <div style ="font-size: 30px; font-family: serif; ">Address:</div>
              <input id="text" type="text" name="Address"><br></br>
              <div style ="font-size: 30px; font-family: serif; ">D_bloodtype:</div>
              <input id="text" type="text" name="D_bloodtype"><br></br>
              <div style ="font-size: 30px; font-family: serif; ">Phone_no:</div>
              <input id="text" type="number" name="Phone_no"><br></br>
              <div style ="font-size: 30px; font-family:  serif; ">Donorid:</div>
             <input id="text" type="number" name="Donorid"><br></br>

              <div style ="font-size: 30px; font-family: serif; ">password:</div>
              <input id="text" type="password" name="password"><br></br>
<input  type="submit" value="Sign In"><br></br>
<a href="login.php"><div style ="font-size: 30px; font-family: serif;">Click to log In</div></a><br></br>

</form>
</div>
</body>
</html>