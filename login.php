<?php

include 'header.php';

?>
<html>
<head>
<link rel="stylesheet" href="styles/loginStyle.css">

</head>

<body>

<div class="loginForm">
<h1>Login</h1>
<form action="includes/login.inc.php" method="post">

<div class="container">
  <div class="email">
  <input type="email" id="eaddress" name="eaddress" placeholder="Email" required>
  </div>
  <div class="password">
  <input type="password" name="pass" id="pass" placeholder="Password" require>
  </div>
  
  <div class="submit">
    <input type="submit" value="Submit">

  </div>
</div>




</form>



</div>




</body>




</html>