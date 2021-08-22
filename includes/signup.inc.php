<?php

if(isset($_POST["submit"])){
    $name = $_POST["fname"]." ".$_POST["lname"];
    $email = $_POST["eaddress"];
    $pass = $_POST["pass"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];


}else{
    header("location: ../signup.php");
}