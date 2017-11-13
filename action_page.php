<?php 

	if(isset($_GET["sign_submit"]))
	{
	
	echo "fgdsvdvk";
		$server = "localhost";
		$username = "root";
		$db = "yash";
		$conn = mysqli_connect($server,$username,"");
		if(!$conn)
		{
			echo "plz try again";
		}
		else
		{
			//$conn2 = mysqli_select_db($db,$conn);
			echo "dfbhfdbv";
		}
		
		
		  $users_email = $_GET['email'];
		  $users_password = $_GET['password'];
		  $users_repeat_password = $_GET['repeat_password'];
		  
		 
		  

		  
		  $users_email = mysql_real_escape_string($users_email);
		  $users_password = mysql_real_escape_string($users_password);
		  $users_repeat_password = mysql_real_escape_string($users_repeat_password);
		
		
		  $sql="select email from sign-up where email='".$users_email."'";
			$result=mysql_query($sql);
		$number=mysql_num_rows($result);
		if($number ==0 ){
			echo "fgfyhvuyjgbjgvgh";
			$sqlwrite = "INSERT INTO  `sign-up` (`email` ,`password` ,`repeat_password`)
							VALUES ('$users_email','$users_password',' $users_repeat_password');";
		$run2 = mysql_query($sqlwrite);
		//echo ("<SCRIPT LANGUAGE='JavaScript'>
				//window.alert('registerd successfully')
				//		</SCRIPT>");
		echo'<script> window.location="sign_in.php"; </script> ';
		//header('Location: /sign-in.php');
		}	
		else{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Email is already registerd')
						</SCRIPT>");
		}
				 /* Redirect browser */
		exit();		
}		
?>
