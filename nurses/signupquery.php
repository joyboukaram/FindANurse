<?php

require ("../includes/db_info_1705.inc.php");
session_start();

echo getcwd() . "\n";



$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$id = $_SESSION['id'];
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

// Check if image file is a actual image or fake image
// getimagesize($_SERVER['DOCUMENT_ROOT'] . '/media/test/test.jpg');
$check = getimagesize($_SERVER['DOCUMENT_ROOT'] , $_FILES["fileToUpload"]["name"]);
if($check !== false) {
	echo "File is an image - " . $check["mime"] . ".";
	$uploadOk = 1;
} else {
	echo "File is not an image.";
	$uploadOk = 0;
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 100000000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "PNG" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
}

if (isset($_POST['name'])) {
    $name = $mysqli->real_escape_string($_POST['name']);
}else{
die("name taken");
}

if (isset($_POST['username'])) {
    $username = $mysqli->real_escape_string($_POST['username']);
}else{
die("username taken");
}

if (isset($_POST['age'])) {
    $age = $mysqli->real_escape_string($_POST['age']);
}else{
die("age taken");
}

if (isset($_POST['date_of_birth'])) {
    $date_of_birth = $mysqli->real_escape_string($_POST['date_of_birth']);

}else{
die("date_of_birth error");
}


if (isset($_POST['email'])) {
    $email = $mysqli->real_escape_string($_POST['email']);
}else{
die("email error");
}

if (isset($_POST['phone'])) {
    $phone = $mysqli->real_escape_string($_POST['phone']);
}else{
die("insert phone!");
}

if (isset($_POST['description'])) {
    $description = $mysqli->real_escape_string($_POST['description']);
}else{
die("insert description!");
}

if (isset($_POST['years_of_experience'])) {
    $years_of_experience = $mysqli->real_escape_string($_POST['years_of_experience']);
}else{
die("insert years_of_experience!");
}

if (isset($_POST['Location'])) {
    $Location = $mysqli->real_escape_string($_POST['Location']);
}else{
die("insert Location!");
}


if (isset($_POST['password'])) {
    $password = $mysqli->real_escape_string($_POST['password']);
    
    
}else{
die("insert password!");
}



$stmt = $mysqli->prepare("Select email From Nurse WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($email);
$count = $stmt->num_rows;

if ($email == '' || $password == '') {
    $_SESSION["userexist"] = false;
    die("enter email / password");
  }

else

if($count != 0){
    $_SESSION["userexist"] = false;
    header("Location:exists.php");
   }

  else{
    $stmt = $mysqli->prepare("Insert INTO Nurse(name, age, date_of_birth, email, phone, description, years_of_experience, Location, image, password, username) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ");
    $stmt->bind_param("sissssissss", $name, $age, $date_of_birth, $email, $phone, $description, $years_of_experience, $Location, $target_file, $password, $username);
    $stmt->execute();
    $_SESSION["credentials"] = true;
    
    header("Location:signin.php");
  }
?>