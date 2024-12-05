
<?php
include("connection.php");

$con=new mysqli($servername,$username,$password,$dbname);
$nm=$_POST['name'];
$mail=$_POST['email'];
$msg=$_POST['message'];
//data insertion:
$query="insert into contact values('$nm','$mail','$msg')";
if(mysqli_query($con,$query))
{
echo "Records Inserted";
}
else
{
echo "Failed";
}



?>
