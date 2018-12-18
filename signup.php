<?php

require ("includes/db_info_1705.inc.php");
session_start();

if (isset($_POST['firstName'])) {
    $firstName = $mysqli->real_escape_string($_POST['firstName']);
}else{
die("first name taken");
}

if (isset($_POST['lastName'])) {
    $lastName = $mysqli->real_escape_string($_POST['lastName']);
}else{
die("last name taken");
}

if (isset($_POST['password'])) {
    $password = $mysqli->real_escape_string($_POST['password']);
    $password = md5($password);
    

}else{
die("password error");
}


if (isset($_POST['email'])) {
    $email = $mysqli->real_escape_string($_POST['email']);
}else{
die("email error");
}

if (isset($_POST['gender'])) {
    $gender = $mysqli->real_escape_string($_POST['gender']);
}else{
die("insert gender!");
}

$stmt = $mysqli->prepare("Select email From User WHERE email = ? ");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($email);
$count = $stmt->num_rows;


if ($email == '' || $password == '') {
    $_SESSION["userexist"] = false;
    header("Location:enterEP.php");
  }

else

if($count != 0){
  $_SESSION["userexist"] = false;
  header("Location:emailfail.php");
 }
 
  else{
    $stmt = $mysqli->prepare("Insert INTO User(firstName, lastName, email, password, gender) VALUES(?, ?, ?, ?, ?) ");
    $stmt->bind_param("sssss", $firstName, $lastName, $email, $password, $gender);
    $stmt->execute();
    $_SESSION["credentials"] = true;
    header("Location:login/login.php");
  }
?>