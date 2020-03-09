<?php 

$conn=mysqli_connect("localhost","root","","tour");
if(!$conn)
{
	die("problem in connecting".mysqli_connect_error());
}
$selectuser=mysqli_query($conn,"SELECT * FROM login ");
$result=mysqli_num_rows($selectuser);
 return $result;

