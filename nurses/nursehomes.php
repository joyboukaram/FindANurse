<?php
require('../middlewares/middleware.php');
require ("../includes/db_info_1705.inc.php");

ob_start();

$id = $_SESSION["id"];

$stmt_id = $mysqli -> prepare ("Select id, name FROM Nurse WHERE id = ?");
$stmt_id -> bind_param('i', $id);
$stmt_id -> execute();
$stmt_id -> store_result();
$stmt_id -> bind_result($id, $name); //takes the ones from the query in order and we name them as we want. l mhem ykouno bel dor.


 // while($stmt_id->fetch()){ IF FETCHING MANY THINGS
  
 // }

$stmt_id->fetch() //if fetching only one thing which is the first name here only
 
?>

<html>
<head>
    <title>Welcome</title>
    <link rel = "stylesheet" href = "nursehome.css">
    <script src = "nursehome.js" defer></script>
</head>

<body>

    <h1>Welcome <?= $name ?></h1>    

</body>

</html>