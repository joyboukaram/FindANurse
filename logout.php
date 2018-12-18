<?php
require_once("includes/db_info_1705.inc.php");
session_start();

ob_start();
foreach($_SESSION as $key => $val){
	unset($_SESSION[$key]);
}
session_destroy();

header('Location: index.php');
?>

