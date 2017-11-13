<!doctype html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<img src="images/background.jpg" class="back" />

<body>

<?php


$uname = $_POST['uname'];
$upass = $_POST['upass'];

$con =  mysql_connect("localhost","root","");

mysql_select_db('storage',$con);

$check = mysql_query("SELECT * FROM registerform WHERE `username` =  '".$_POST['uname']."' AND `password` = '".$_POST['upass']."'");

$checkuname = mysql_fetch_array($check);

if($checkuname['uname'] && $checkuname['upass']){
	
session_start('user');
$_SESSION['username'] = $checkuname['uname']; 
$_SESSION['userid'] = 	$checkuname['id'];

?>	

<script type="text/javascript">
var name = "<?php echo $checkuname['uname']; ?>";
alert("Welcome "+name);
window.location = "profile.php";
</script>
