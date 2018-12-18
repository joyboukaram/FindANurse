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
    

} else {
    die("error2");
}

$stmt = $mysqli->prepare("Select id, name, description, email, phone, age, date_of_birth, years_of_experience, Location, image From Nurse WHERE email = ? AND password = ?");
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $name, $description, $email, $phone, $age, $date_of_birth, $years_of_experience, $Location, $image);
$count = $stmt->num_rows;
$stmt->fetch();

if ($count != 0) {
    $_SESSION["logged_in"] = true;
    $_SESSION["id"] = $id;

    header("Location: index.php");
} else {
    $_SESSION["credentials"] = false;
    header("Location: wrong.php");
}
