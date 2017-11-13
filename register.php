<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Online Food Ordering System</title>
<link href="food.css" type="text/css" rel="stylesheet">
<link href="style.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="jquery-3.2.1.js"></script> 
<script type="text/javascript" src="pro.js"></script>

</head>

<body>
<div id="p0">
<div id="p1"><h3 id="text1">Online Food Ordering System</h3></div>
<div id="p2">
<ul id="nav1">
<li class="home"><a href="index.php" id="a1"><strong>Home</strong></a></li>
<li class="home"><a href="" id="a2"><strong>Kiosks</strong></a></li>
<li class="home"><a href="register.php" id="a3"><strong>Register</strong></a></li>
<li class="home"><a href="" id="a4"><strong>Contact Us</strong></a></li>
<li class="home"><a href="login.php" id="a5"><strong>Log In</strong></a></li>
</ul>

</div>
</div>
<div class="login"><h1>LOGIN</h1>
<form action="login.php" method="post" enctype="multipart/form-data">
<table cellpadding="50px" cellspacing="35px">
<tr>
<td><input class="inform" type="text" name="username" placeholder="username"/></td>
</tr>
<tr>
<td><input class="inform" type="password" name="password" placeholder="password" /></td>
</tr>
<tr>
<td><input class="inform" type="submit" value="Submit" />
</td>
</tr>
</table>
</form>
</div>
<div class="order">
<h1>Register Now</h1>
<form action="registerdata.php" method="post" enctype="multipart/form-data">
<table cellpadding="20px" cellspacing="25px">
<tr>
<td><input class="inform1" type="text" name="name" placeholder="name"/></td>
</tr>
<tr>
<td><input class="inform1" type="email" name="email" placeholder="email" /></td>
</tr>
<tr>
<td><input class="inform1" type="text" name="username" placeholder="username" /></td>
</tr>
<tr>
<td><input class="inform1" type="password" name="password" placeholder="password" /></td>
</tr>
<tr>
<td><input class="inform1" type="numeric" name="contact"  placeholder="Contact Number"/></td></tr>
<tr>
<td ><select name="hostel" class="inform1" placeholder="Hostel">
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
<tr>
<td><input class="inform1" type="submit" value="Submit" />
</td>
</tr>
</table>
</form>

</div>
</body>
</html>
