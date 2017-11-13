<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Online Food Ordering System</title>
<link href="food.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="jquery-3.2.1.js"></script> 
<script type="text/javascript" src="pro.js"></script>
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {float:left;width:50%}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    color: #000;
    font-size: 40px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
</head>

<body>
<div id="p0">
<div id="p1"><h3 id="text1">Online Food Ordering System</h3></div>
<div id="p2">
<ul id="nav1">
<li class="home"><a href="index.php" id="a1"><strong>Home</strong></a></li>
<li class="home"><a href="sindex.php" id="a2"><strong>Kiosks</strong></a></li>
<li class="home"><a href="sign-in.php" id="a3"><strong>Register</strong></a></li>
<li class="home"><a href="#con" id="a4"><strong>Contact Us</strong></a></li>
<li class="home"><a href="sign-in.php" id="a5"><strong>Log In</strong></a></li>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up !</button>


</ul>

</div>
</div>





<h2>Modal Signup Form</h2>


<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-content animate" action="action_page.php">
    <div class="container">
      <label><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <label><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="repeat_password" required>
      <input type="checkbox" checked="checked"> Remember me
      <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" name="sign-submit"   class="signupbtn">Sign Up!</button>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<div id="sliderbutton"></div>
<div id="slider">
<img src="images/pav.jpg">
<img src="images/8-foods-we-eat-in-the-us-that-are-banned-in-other-1-22862-1372120003-1_big.jpg">
<img src="images/burger.jpg">
<img src="images/DSC00034.jpg">
<img src="images/iqmnxwxpefeuyogfxcnxpfitvped4v5rlik3akfniwpgope0avogatjvrmrfwmap-.jpg">

</div>

<a href="signup.php" id="but1"><button type="button" id="but1">Register Now</button></a>
<div id="toptext">
<pre id="toptext1">   <i>  Order Your
     Tasty Meals
     Online</i></pre>
       </div>
       <div>
<pre id="subtext">
<!--<pre id="subtext1">--><i>
     The Tastiest Meal
     at your doorstep
</i>
</pre>


</div>
<div id ="welcome"><p id="welcome1"><strong>Welcome to Online Food Ordering System</strong></p> </div>
<div id="order">
<img src="images/59607591-green-beans-with-tomatoes-sauce-in-cooking-pot-with-ingredients-on-cutting-board-for-vegetarian-dish.jpg" id="order1" >
</div>
<button type="button" class="but2"><p>Order Meal</p></button>
<div id="Manage">
<img src="images/images (1).jpg" id="order1" >
</div>
<button type="button" id="but3"><p>Manage Account</p></button>
<div id="about">
<img src="images/1704_Palak-Paneer-and-Cooking-In-India_004.jpg" id="order1" >
</div>
<button type="button" id="but4"><p>About Us</p></button>
<div id="subtext2">
<pre id="subtext3"><strong>

Order your Favorite meal from our wide range
of partners.We assure our clients the best,
hygenic and healthy food just like home.</strong></pre>
</div>
<div id="subtext4">
<pre id="subtext5"><strong>

Now review your account details and your info
Also review your previous orders and summary
of monthly expenses.
</strong></pre> 
</div>
<div id="subtext6">
<pre id="subtext7"><strong>
In case of any kind of complaint or feedback
contact us on the given links. Also follow us
on social platform.

</strong></pre> 
</div>
<div id="form">
</div>
</div>
<div id="abtus">
<div id="abtus1">
<img src="images/order_food_online.jpg" id="abtimg">

</div>
<div id="abtus2">
<p id="abthead"><b>About Online Food Ordering System</b></p><br>
<pre id="abttext"><strong>
We believe restaurants are at their best when they focus their efforts on
the quality of their food and service. Whether it be in the kitchen preparing 
for dinner or at the front door greeting customers, these activities are what
make a restaurant. Said another way, restaurants excel when they’re working 
offline.At Online food order we are driven by one purpose: to provide kiosks
with the tools needed to compete in an increasingly technical world.</strong></pre>

</div>
<div id="con">
<div id=last>
<a href="www.fb.com">
<div id=fb></div></a>
<a href="www.fb.com">
<div id=twitter></div></a>
<a href="www.fb.com">
<div id=linkdin></div></a>
<a href="www.fb.com">
<div id=youtube><!--<a href="www.fb.com"></a>--></div></a>
<div id=f><b>F</b></div>
<div id=ind><b>ind Us</b></div>
<div id=eml><b>Email:</b></div>
<div id=mai><b>info @ ofos.co.in</b></div>
<div id=ph><b>Phone:9876543210</b></div>
<div id=q><b>Q</b></div>
<div id=uick><b>uick Message</b></div>
<div id="ligh"></div>
<div id="nm">Name</div>
<div id=nm1>

<form action="msg.php" method="post" enctype="multipart/form-data">
<input type="text" name="name1"  id="nm1" >


</div>
<div id="ms1">Message</div>
<div id=ms2>
<input type="text" name="message1"  id="ms2" >

<input type="submit" value="Submit" id="subb";>

</div>




</div>
<div id=line1></div>
<div id=line2></div>

</body>
</html>
