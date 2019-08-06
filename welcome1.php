<!---<link rel="stylesheet" type="text/css" href="form.css">---->
<?php
$user= $_POST['email'];
$pwd= $_POST['pwd'];

$con=mysqli_connect("localhost","admin","admin","info");
if(!($con))
echo("server not connect");

$que= mysqli_query($con,"SELECT * FROM `student` WHERE email= '$user' and password= '$pwd' ");

if(mysqli_num_rows($que)>0)
{
session_start();

$_SESSION['name']= $user;

header("location:home.php");
}
else
{
echo "<h1 class='h1'>You can not logged in</h1>"."<br>";
echo "<h1 class='h1'>Please sign up</h1>";
}


?>
<button style="font-size:25px;margin-left:572px;"><a href="signup.php" style="text-decoration:none;color:black;">Sign up</a></button>



