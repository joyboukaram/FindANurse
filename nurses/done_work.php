<?php

require "../includes/db_info_1705.inc.php";
session_start();

$id = $_SESSION["id"];

if (isset($_POST['name'])) {
  $name = $mysqli->real_escape_string($_POST['name']);
}else{
die("dont try to mess around bro11 ;)");
}

$stmt = $mysqli->prepare("Select Reservation.id from Reservation, Nurse where bookday = ? AND Reservation.nurse_username = Nurse.username");
  $stmt->bind_param("s",$name);
  $stmt->execute();
  $stmt->store_result();
  $stmt->bind_result($reservation_id);
  $stmt->fetch();

  $stmt1 = $mysqli->prepare("DELETE FROM Reservation WHERE  id = ?");
  $stmt1->bind_param("i", $reservation_id);
  $stmt1->execute();
  $_SESSION["book_nurse"]=true;

  header("Location: index.php");

?>