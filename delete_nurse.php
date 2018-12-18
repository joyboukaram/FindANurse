<?php

require ("includes/db_info_1705.inc.php");
session_start();

$id = $_SESSION["id"];

if (isset($_POST['name'])) {
  $name = $mysqli->real_escape_string($_POST['name']);
}else{
die("dont try to mess around bro11 ;)");
}

$stmt = $mysqli->prepare("Select id from Reservation where bookday = ? AND user_id = ?");
  $stmt->bind_param("si",$name, $id);
  $stmt->execute();
  $stmt->store_result();
  $stmt->bind_result($reservation_id);
  $stmt->fetch();

  $stmt1 = $mysqli->prepare("DELETE FROM Reservation WHERE user_id= ? AND id = ? AND bookday = ?");
  $stmt1->bind_param("iis",$id, $reservation_id, $name);
  $stmt1->execute();
  $_SESSION["book_nurse"]=true;

  header("Location:./home.php");

?>