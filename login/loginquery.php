<?php
ob_start();
session_start();
require "../includes/db_info_1705.inc.php";

if (isset($_POST['email'])) {
    $email = $mysqli->real_escape_string($_POST['email']);
} else {
    die("error1");
}

if (isset($_POST['password'])) {
    $password = $mysqli->real_escape_string($_POST['password']);
    $password = md5($password); 

} else {
    die("error2");
}

$stmt = $mysqli->prepare("Select id, firstName From User WHERE email = ? AND password = ?");
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $first_name);
$count = $stmt->num_rows;
$stmt->fetch();

if ($count != 0) {
    $_SESSION["logged_in"] = true;
    $_SESSION["id"] = $id;
    $_SESSION["first_name"] = $first_name;
    

    header("Location:../home.php");
} else {
    $_SESSION["credentials"] = false;
    header("Location: wrong.php");
}
