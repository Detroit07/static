<?php
require('db.php');

if (isset($_POST['submit'])) {
$name=$_POST['fname'];
$address=$_POST['addr'];
$email=$_POST['email'];
$password=$_POST['pass'];
$number=$_POST['num'];
$gender=$_POST['g1'];
$city=$_POST['cty'];

	$sql="insert into signup(name,address,email,password,number,gender,city)".
	"values('$name','$address','$email','$password','$number','$gender','$city')";
	$res=mysqli_query($conn,$sql);
	if(!$res)
	{
		die("query failed".mysqli_errno($conn));
		}
		else
		{
			echo"<strong> SIGNUP SUCESSFULL</strong>";
          
		}
}

?>