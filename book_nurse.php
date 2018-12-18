<?php

require "includes/db_info_1705.inc.php";
session_start();

$id = $_SESSION["id"];

if (isset($_POST['name'])) {
    $name = $mysqli->real_escape_string($_POST['name']);
} else {
    die("dont try to mess around bro11 ;)");
}

if (isset($_POST['bookday'])) {
    $bookday = $mysqli->real_escape_string($_POST['bookday']);
} else {
    die("dont try to mess around bookday ;)");
}

$stmt = $mysqli->prepare("Select id from Reservation where nurse_username = ? AND bookday = ?");

$stmt->bind_param("ss", $name, $bookday);

$stmt->execute();
$stmt->store_result();
$stmt->bind_result($res_id);
$count = $stmt->num_rows;
$stmt->fetch();

if ($count != 0) {
   
        $S_SEEION["nospace"] = true;
        header("Location: ./home.php");

    } else {
        
        $stmt1 = $mysqli->prepare("Insert INTO Reservation(user_id, nurse_username, bookday) VALUES(?, ?, ?) ");
        $stmt1->bind_param("iss", $id, $name, $bookday);
        $stmt1->execute();
        $_SESSION["book_nurse"] = true;

        header("Location: ./home.php");
    
}
 ?>