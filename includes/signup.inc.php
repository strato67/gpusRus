<?php

if(isset($_POST["submit"])){
    //Setting up database variables
    $name = $_POST["fname"]." ".$_POST["lname"];
    $email = $_POST["eaddress"];
    $pass = $_POST["pass"];
    $passcheck = $_POST["passrepeat"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    
    //Check if user signed up correctly
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    //Empty input handling
    if(emptyInputSignup($name,$email,$pass,$passcheck,$address,$phone)!==false){
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    //Check valid email
    if(invalidEmail($email)!==false){
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    //Check password match
    if(passMatch($pass,$passcheck)!==false){
        header("location: ../signup.php?error=invalidPass");
        exit();
    }
    //Check email exists already
    if(emailExists($conn,$email)!==false){
        header("location: ../signup.php?error=accountexists");
        exit();
    }

    createUser($conn,$name,$email,$pass,$address,$phone);


}else{
    //Redirect to sign up if user accessed page incorrectly
    header("location: ../signup.php");
}
?>