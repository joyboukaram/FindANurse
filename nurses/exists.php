<?php
require ("../includes/db_info_1705.inc.php");


?>

<html>

<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="signup.css" rel="stylesheet">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<!-- <script src="signup.js" defer></script> -->
<!------ Include the above in your HEAD tag ---------->
<head>

<body>
<div class="container">
            <form action="signupquery.php"  role="form" class="form-horizontal" method="post" enctype="multipart/form-data" autocomplete="off">
            <h3 style="color: red;">User exists</h3>    
            
            <h2>Registration</h2>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="name" id="name" placeholder="name" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="age" class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-9">
                        <input type="text" name="username" id="username" placeholder="username" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="age" class="col-sm-3 control-label">Age</label>
                    <div class="col-sm-9">
                        <input type="text" name="age" id="age" placeholder="age" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
                    <div class="col-sm-9">
                        <input type="text" name="date_of_birth" id="birthDate" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email* </label>
                    <div class="col-sm-9">
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control" name= "email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
                    <div class="col-sm-9">
                        <input type="phoneNumber" name="phone" id="phoneNumber" placeholder="Phone number" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">Description </label>
                    <div class="col-sm-9">
                        <input type="text" name="description"id="description" placeholder="description" class="form-control" style="height: 130px;">
                    </div>
                </div>
                <div class="form-group">
                        <label for="years_of_experience" class="col-sm-3 control-label">Experience </label>
                    <div class="col-sm-9">
                        <input type="text" id="years_of_experience" name="years_of_experience" placeholder="years_of_experience" class="form-control">
                    </div>
                </div>
                 <div class="form-group">
                        <label for="location" class="col-sm-3 control-label">Location </label>
                    <div class="col-sm-9">
                        <input type="text" name="Location" id="Location" placeholder="Location" class="form-control">
                    </div>
                </div>




                <input type="file" name="fileToUpload" id = "fileToUpload" accept="image/*">




                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password*</label>
                    <div class="col-sm-9">
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                    </div>
                </div>
                
                        <br>
                <button type="submit" id="submit" value="submit" name="submit" class="btn btn-primary btn-block">Register</button>
           
            <p id = "have_account">Have an account?<br>Sign in <a href="signin.php">here</a>
        </div> <!-- ./container -->
</body>
</html>
