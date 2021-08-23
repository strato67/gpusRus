<?php

function emptyInputSignup($name,$email,$pass,$passcheck,$address,$phone){
    $result;
    if(empty($name)||empty($email)||empty($pass)||empty($passcheck)||empty($address)||empty($phone)){
        $result=true;
    }else{
        $result=false;
    }
    return $result;
}
function invalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result=true;
    }else{
        $result=false;
    }
    return $result;
}
function passMatch($pass,$passcheck){
    $result;
    if($pass!=$passcheck)){
        $result=true;
    }else{
        $result=false;
    }
    return $result;
}
function emailExists($conn,$email){
    $sql = "SELECT * FROM users WHERE usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../signup.php?error=stmfail");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"ss",$email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}
function createUser($conn,$name,$email,$pass,$address,$phone){
    $sql = "INSERT INTO users (usersName,usersEmail,usersPwd,usersAdd,usersPhone) VALUES (?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../signup.php?error=stmfail");
        exit();
    }
    $hashedPass = password_hash($pass, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"sssss",$name,$email,$hashedPass,$address,$phone);
    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
    header("location: ../signup.php?success");
        exit();
}




