<?php
require ("includes/db_info_1705.inc.php");

$stmt=$mysqli->prepare("SELECT Nurse.name, Reservation.bookday FROM Nurse, Reservation WHERE Nurse.username = Reservation.nurse_username AND Reservation.user_id=$id");
          
          $stmt->execute();
          $stmt->store_result();
          $stmt->bind_result($nurse_name, $bookday);
          $count = $stmt->num_rows;
          ?>