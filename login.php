
<?php
session_start();

include "connection.php";
    include("functions.php");
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        
      
        $Donorid = $_POST['Donorid'];
        $password = $_POST['password'];

        if(!empty($Donorid) && !empty($password) )
        {
            //read from database
            $query = "select * from donor_login where Donorid = '$Donorid' ";
            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {

                    $user_data = mysqli_fetch_assoc($result);
                    
                    if($user_data['password'] === $password)
                    {

                        $_SESSION['Donorid'] = $user_data['Donorid'];
                        header("Location: dashboard.php");
                        die;
                    }
                }
            }
            
            echo "wrong username or password!";
        }else
       {
            echo "wrong username or password!";
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
    
        <div style ="font-size: 80px; margin: 200px; font-family: sans serif; font-weight: bold; text-allign: center">Donor Log In</div>
        <div style ="font-size: 30px; font-family:  serif; ">Donorid:</div>
             <input id="text" type="number" name="Donorid"><br></br>

             <div style ="font-size: 30px; font-family: serif; ">password:</div>
              <input id="text" type="password" name="password"><br></br>
              <input  type="submit" value="Log In"><br></br>
              <a href="signup.php"> <div style ="font-size: 30px;  font-family: sans serif; font-weight: bold; ">Click to Sign In</div></a><br><br>

</form>
</div>
</body>
</html>

