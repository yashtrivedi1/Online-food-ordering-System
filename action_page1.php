<?php 

	if(isset($_GET["sign_submit"]))
	{
	
	echo "fgdsvdvk";
		$server = "localhost";
		$username = "shankarshiv097";
		$db = "home_builder";
		$conn = mysql_connect($server,$username,"Shiva@12");
		if(!$conn)
		{
			echo "plz try again";
		}
		else
		{
			$conn2 = mysql_select_db($db,$conn);
			echo "dfbhfdbv";
		}
		
		  $users_name = $_GET['name'];
		  $users_email = $_GET['email'];
		  $users_password = $_GET['password'];
		  $users_contact = $_GET['contact'];
		 
		  

		  $users_name = mysql_real_escape_string($users_name);
		  $users_email = mysql_real_escape_string($users_email);
		  $users_password = mysql_real_escape_string($users_password);
		  $users_contact = mysql_real_escape_string($users_contact);
		
		
		  $sql="select email from sign_up where email='".$users_email."'";
			$result=mysql_query($sql);
		$number=mysql_num_rows($result);
		if($number ==0 ){
			echo "fgfyhvuyjgbjgvgh";
			$sqlwrite = "INSERT INTO  `sign_up` (`email` ,`password` ,``)
							VALUES ('$users_name ',  '$users_email','$users_password',' $users_contact');";
		$run2 = mysql_query($sqlwrite);
		//echo ("<SCRIPT LANGUAGE='JavaScript'>
				//window.alert('registerd successfully')
				//		</SCRIPT>");
		echo'<script> window.location="login.php"; </script> ';
		//header('Location: /login.php');
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
