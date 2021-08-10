<?php

include 'header.php';

?>

<html>
<head>
<link rel="stylesheet" href="styles/signStyle.css">

</head>

<body>

<div class="signupForm">
<h1>Sign Up</h1>
<form action="" method="post">

<div class="container">
  <div class="email">
  <input type="email" id="eaddress" name="eaddress" placeholder="Email" required>
  </div>
  <div class="password">
  <input type="password" name="pass" id="pass" placeholder="Password" require>
  </div>
  <div class="first-name">
  <input type="text" id="fname" name="fname" placeholder="First Name" required> 
  </div>
  <div class="last-name">
  <input type="text" id="lname" name="lname" placeholder="Last Name" required>
  </div>
  <div class="address">
  <input type="text" id="address" name="address" placeholder="Address" required>
  </div>
  <div class="phone-number">
  <input type="tel" id="phone" name="phone" placeholder="Phone Number" pattern="[0-9]{10}" required>
  </div>
  <div class="submit">
    <input type="submit" value="Submit">

  </div>
</div>




</form>



</div>




</body>




</html>