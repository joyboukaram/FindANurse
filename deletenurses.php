<?php
require ("includes/db_info_1705.inc.php");

$stmt=$mysqli->prepare("SELECT Nurse.name, Reservation.bookday, Nurse.username FROM Nurse, Reservation WHERE Reservation.nurse_username = Nurse.username  AND Reservation.user_id = $id");
          
          $stmt->execute();
          $stmt->store_result();
          $stmt->bind_result($nurse_name, $bookday, $nurse_username);
          $count = $stmt->num_rows;


          ?>