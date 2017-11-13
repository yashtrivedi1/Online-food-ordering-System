<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
include('func.php');

$name=$_POST["name"];
$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];
$con_password=$_POST["con_password"];
$hostel=$_POST["hostel"];
$number=$_POST["number"];




$query="INSERT INTO`registerform`(`name`,`username`,`email`,`password`,`con_password`,`hostel`,`number`)VALUES('$name','$username','$email','$password','$con_password','$hostel','$number')";

$data=mysqli_query($con,$query);

	if($data){
		
    echo "successfully registered ";
	 header('location:signup.php');
		
		}
else{
	
	echo mysqli_error($con);
	
	}
	
	

?>

</body>
</html>