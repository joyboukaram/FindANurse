<?php
require ("../includes/db_info_1705.inc.php");
$id = $_SESSION["id"];
$arr = [];
$stmt = $mysqli->prepare("SELECT * FROM Nurse where id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
while($row = $result->fetch_assoc()) {
  $arr[] = $row;
}
if(!$arr) echo('No rows');
$stmt->close();

?>