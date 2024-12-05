<?php
session_start();
include("connection.php");

//$con=new mysqli($servername,$username,$password,$dbname);

$username=$_POST['user'];
$email=$_POST['mail'];
$password=$_POST['pass'];
//data insertion:
/*$query="insert into login values('$username','$email','$password')";
if(mysqli_query($con,$query))
{
echo "record inserted";
}*/
	
	//Fetch and check data of database:
	$query1="select USER_NAME,PASSWORD from login where user_name='$username'";
	$res=mysqli_query($con,$query1);

	if($row=mysqli_fetch_assoc($res))
	{
		if($row['USER_NAME']==$username && $row['PASSWORD']==$password)
		{
		$_SESSION['user']=$username;
		header('location:admin1/nice-html/index.php');
		}
		else
		{
		echo "Login Failed";
		}
	}
	else
	{
		echo " You can't login";
	}

	//Display database:
?>
