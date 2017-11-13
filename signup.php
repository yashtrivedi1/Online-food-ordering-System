<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sign Up</title>
<link href="css/signup.css" type="text/css" rel="stylesheet" />
<link href="food.css" type="text/css" rel="stylesheet" />
<script type="text/javascript">
function myf(){
var name=document.forms['myform']['name'].value;

if(name==null||name==""){
	document.getElementById("name_error").innerHTML="*The name field is required.";
	document.forms['myform']['name'].focus();
	return false;
}

var user=document.forms['myform']['username'].value;

if(user==null||user==""){
	document.getElementById("user_error").innerHTML="*The username field is required.";
	document.forms['myform']['username'].focus();
	return false;
}

var email=document.forms['myform']['email'].value;
var at=email.indexOf("@");
var dot=email.lastIndexOf(".");
if(email==null || email==""){
	document.getElementById("email_error").innerHTML="*The email field is required.";
	document.forms['myform']['email'].focus();
	return false;

	}
else if( at<1|| dot-at<2 ||dot+2>=email.length){
	document.getElementById("email_error").innerHTML="*Please enter valid email.";
	document.forms['myform']['email'].focus();
	return false;

}
var pass=document.forms['myform']['password'].value;
var plen=pass.length;
if(pass==null || pass=="")
{
	document.getElementById("pass_error").innerHTML="*The password field is required.";
document.forms['myform']['password'].focus();
	
	return false;
}
else if(plen<6)
{
	document.getElementById("pass_error").innerHTML="*Password length must be in between 6 to 15 char";
document.forms['myform']['password'].focus();
	return false;
}

var conp=document.forms['myform']['con_password'].value;
if(conp==null || conp=="")
{
	document.getElementById("conpass_error").innerHTML="*The confirm password field is required.";
document.forms['myform']['con_password'].focus();
	
	return false;
}
else if(conp!=pass)
{
document.getElementById("conpass_error").innerHTML="*Password confirmation does not match.";
document.forms['myform']['con_password'].focus();
return false;
}
}



function myfun(){
	var email=document.forms['myform1']['loginemail'].value;

if(email==null||email==""){
	document.getElementById("lname_error").innerHTML="*The name field is required.";
	document.forms['myform1']['loginemail'].focus();
	return false;
}
var pass=document.forms['myform1']['loginpass'].value;
var plen=pass.length;
if(pass==null || pass=="")
{
	document.getElementById("lpass_error").innerHTML="*The password field is required.";
document.forms['myform1']['loginpass'].focus();
	
	return false;
}


function myfunforgot(){
	var remail=document.forms['myform2']['remail'].value;

if(remail==null||remail==""){
	document.getElementById("remail_error").innerHTML="*The email field is required.";
	document.forms['myform2']['remail'].focus();
	return false;
}

}
}
</script>
</head>

<body>
<div id="p0">
<div id="p1"><h3 id="text1">Online Food Ordering System</h3></div>
<div id="p2">
<ul id="nav1">
<li class="home"><a href="index.php" id="a1"><strong>Home</strong></a></li>
<li class="home"><a href="" id="a2"><strong>Kiosks</strong></a></li>
<li class="home"><a href="signup.php" id="a3"><strong>Register</strong></a></li>
<li class="home"><a href="" id="a4"><strong>Contact Us</strong></a></li>
<li class="home"><a href="signup.php" id="a5"><strong>Log In</strong></a></li>

</ul>

</div>
</div>
<div class="main">
<div class="header">

</div> <!--header div-->
<div class="content">
<div class="signup">
<h2 class="hsignup">SIGN UP</h2>

<div class="table">
<table width="90%" >
<form action="signupshow.php" name="myform" method="post" enctype="multipart/form-data" onsubmit="return myf()">
<tr><td>
<input type="text" name="name" placeholder="NAME" id="iname"/><span id="name_error" style="color:red"> </span><br />
</td></tr>
<tr><td>
<input type="text" name="username" placeholder="USERNAME" id="iuser"/><span id="user_error" style="color:red"> </span><br />
</td></tr>
<tr><td>
<input type="email" name="email" placeholder="EMAILID" id="iemail"/><span id="email_error" style="color:red"> </span><br />
</td></tr>

<tr><td>
<input type="password" name="password" placeholder="PASSWORD" id="ipass" /><span id="pass_error" style="color:red"> </span><br />
</td></tr>
<tr><td>
<input type="password" name="con_password" placeholder="CONFIRM PASSWORD" id="iconpass" /><span id="conpass_error" style="color:red"> </span><br />
</td></tr>

<tr>
<td ><select name="hostel"  id="iconpass" placeholder="Hostel">
<option value="Boys1">Boys Hostel 1</option>
<option value="Boys2">Boys Hostel 2</option required>
<option value="Boys3">Boys Hostel 3</option required>
<option value="Boys4">Boys Hostel 4</option required>
<option value="Boys5">Boys Hostel 5</option required>
<option value="Boys6">Boys Hostel 6</option required>
<option value="Boys7">Boys Hostel 7</option required>
<option value="Girls1">Girls Hostel 1</option required>
<option value="Girls2">Girls Hostel 2</option required>
<option value="Girls3">Girls Hostel 3</option required>
<option value="Girls4">Girls Hostel 4</option required>
<option value="Girls5">Girls Hostel 5</option required>
</select>
</td>

</tr>
<tr><td>
<input type="numeric" name="number" placeholder="CONTACT NO" id="iconpass" /><span id="conpass_error" style="color:red"> </span><br />
</td></tr>

<tr>
<tr><td>
<input type="submit" name="submit" value="SIGN UP" id="isignup" />
</td></tr>

</form>
</table>
</div><!--table div-->
</div><!--signup div-->

<div class="signin">
<h2 class="hsignin">SIGN IN</h2>
<div class="tablein">
<form action="signuplogin.php" name="myform1" method="post" enctype="multipart/form-data" onsubmit="return myfun()">
<table width="90%">
<tr><td>
<input type="text" placeholder="USERNAME" id="lemail" name="uname" ><span id="lname_error" style="color:red"> </span><br>
</td></tr>
<tr><td>
<input type="password" placeholder="PASSWORD" id="lpass" name="upass"><span id="lpass_error" style="color:red"> </span><br>
</td></tr>
<tr><td>
<input type="submit" value="SIGN IN" name="signin" id="lsignin" />
</td></tr>			
</table>
</form>
<h2 class="forgot">Forgot Password??</h2>
<div class="forgotpass">
<form action="SendMail.class.php" name="myform2" method="post" onsubmit="return myfunforgot()">
<table width="90%">
<tr><td>
<input type="email" name="remail" placeholder="REGISTERED EMAIL-ID" id="remail" /><span id="remail_error" style="color:red"> </span><br>
</td></tr>
<tr><td>
<input type="submit" value="SEND" name="send" id="rsignin" />
</td></tr>
</table>
</form>
</div><!--forgotpass-->

</div><!--signin div-->
</div><!--content div-->

</div><!--main div-->
</div>
</body>
</html>
