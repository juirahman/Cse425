<?php 
session_start();

	include("connection.php");
	include("functions.php");

	//$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cure Blood Bank</title>
    <style>
    h1{
   text-align: center;
}

.caption{
   font-size: 25px;
   font-weight: bolder;
   font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
.top-right {
  position: absolute;
  top: 8px;
  right: 16px;
}
.top-right2 {
  position: absolute;
  top: 8px;
  right: 5px;
}
.center {
   position: absolute;
   top: 30%;
   left: 50%;
   transform: translate(-50%, -50%);
   font-size: 50px;
}
.center2 {
   position: absolute;
   top: 40%;
   left: 50%;
   transform: translate(-50%, -50%);
   font-size: 2s0px;
}

</style>
</head>
<body>

<img src="indeximgnew.JPEG" height=500px  width=100%>

<div class="caption center">Cure Blood Bank</div>
<div class="caption center2">Donate blood,save a life</div>
<a href="Admin.php"><div style ="font-size: 30px; font-family: serif;"><div class="caption top-right">Admin</div></div></a><br>
<div style ="font-size: 40px; font-family: serif; font-weight:bold ">Why you should donate blood?</div>

<div style ="font-size: 20px; font-family: serif; ">
<img align ="right" src="why.JFIF" height =400px >
<br>Blood donation is a community responsibility.<br>
Blood is needed every two seconds.About one in seven people entering a hospital needs blood.<br>
Blood is always needed for treatment of accident victims, cancer patients, hemophiliacs and surgery patients.<br> 
Blood cannot be manufactured.<br>
Our blood supply comes from caring donors like you. It takes about one hour of your time.<br>
When you give blood, it gives someone another smile, another hug, another chance. It is the gift of life.<br>
Be a Hero. Give Blood.<br></div>

<br><div style ="font-size: 40px; font-family: serif; font-weight:bold">Want to donate Blood?</div>
<a href="login.php"><div style ="font-size: 30px; font-family: serif;">Donate</div></a><br>
<br><div style ="font-size: 40px; font-family: serif; font-weight:bold">Need Blood?</div>
<a href="patient.php"><div style ="font-size: 30px; font-family: serif;">Send a request!</div></a><br>
<img align ="right" src="about.JFIF" height =500px >
<a href="donorlist.php"><div style ="font-size: 30px; font-family: serif;">Available Blood types</div></a><br>
<br><div style ="font-size: 40px; font-family: serif; font-weight:bold">About Us</div></a><br>
<div style ="font-size: 20px; font-family: serif; "><p>Cure Blood Bank stores blood of various blood types.<br>
   Cure blood bank promises to provide you the best service in times of emergency.<br>
   You can donate blood and request for blood without any hassle.<br>
    We request you to come forward and donate blood to help the community.<br>
</p></div>
<br><div style ="font-size: 40px; font-family: serif; font-weight:bold">Contact Us</div></a><br>
<div style ="font-size: 20px; font-family: serif; ">+1234567897<br>


</div>
</body>
</html>