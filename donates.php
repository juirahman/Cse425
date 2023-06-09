<?php
session_start();

include "connection.php";
    include("donatesfunction.php");
    if($_SERVER['REQUEST_METHOD'] == "POST")
    
        {
            //read from database
            $query = "select * from donates where donorid = '$donorid' ";
            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {

                    $user_data = mysqli_fetch_assoc($result);
    }}}

?>


