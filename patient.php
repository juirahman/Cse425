<?php
session_start();
include("connection.php");
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
	
        $F_Name = $_POST['F_Name'];
        $L_Name = $_POST['L_Name'];
        $p_bloodtype = $_POST['p_bloodtype'];
        $email = $_POST['email'];
    $Nid = $_POST['Nid'];
       
	if(!empty($F_Name) &&!empty($L_Name) &&!empty($p_bloodtype) &&!empty($email)&&!empty($Nid)  )
        	{
$query = "INSERT into patient values ('$F_Name','$L_Name','$p_bloodtype','$email','$Nid')";
mysqli_query($con, $query);

header("Location: pboard.php");
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
    
        <div style ="font-size: 80px; margin: 100px; font-family: sans serif; font-weight: bold; text-allign: center">Send a Request</div>
       

            
             <div style ="font-size: 30px; font-family: serif; ">F_Name:</div>
              <input id="text" type="text" name="F_Name"><br></br>
              <div style ="font-size: 30px; font-family: serif; ">L_Name:</div>
              <input id="text" type="text" name="L_Name"><br></br>
              <div style ="font-size: 30px; font-family: serif; ">p_bloodtype:</div>
              <input id="text" type="text" name="p_bloodtype"><br></br>
              <div style ="font-size: 30px; font-family: serif; ">email:</div>
              <input id="text" type="email" name="email"><br></br>
              <div style ="font-size: 30px; font-family: serif; ">Nid:</div>
              <input id="text" type="number" name="Nid"><br></br>
              
              <input  type="submit" value="Request"><br></br>



</form>
</div>
</body>
</html>