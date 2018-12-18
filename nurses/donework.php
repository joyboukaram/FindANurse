<?php
require ("../includes/db_info_1705.inc.php");

$stmt=$mysqli->prepare("SELECT User.firstName, User.lastName, Reservation.bookday FROM User, Reservation, Nurse WHERE Reservation.nurse_username = Nurse.username  AND Reservation.user_id = User.id AND Nurse.id = $id");
          
          $stmt->execute();
          $stmt->store_result();
          $stmt->bind_result($user_firstName, $user_lastName, $bookday);
          $count = $stmt->num_rows;


          ?>