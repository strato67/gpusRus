<?php

include 'header.php';

?>

<html>
<head>
<link rel="stylesheet" href="styles/signupStyle.css">

</head>


<div class="signupForm">
<h1>Sign Up</h1>
<form action="" method="post">




<input type="email" id="eaddress" name="eaddress" placeholder="Email" required>
<input type="password" name="pass" id="pass" placeholder="Password" require>
<input type="text" id="fname" name="fname" placeholder="First Name" required> 
<input type="text" id="lname" name="lname" placeholder="Last Name" required>
<input type="tel" id="phone" name="phone" placeholder="Phone Number" pattern="[0-9]{10}" required>

<input type="submit" value="Submit">

</form>



</div>


</html>