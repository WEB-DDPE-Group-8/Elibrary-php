
<?php
if(isset($_SESSION["username"]))
{
header("location:login.php");
}
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./resources/logo/logo.png"/>

    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"/> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/footer.css"/> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/index.css"/> -->

    <title>Purchase Succesful</title>

    <style>
body {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 21px;
  background-color: black;
  background-size: auto;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 70%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 70%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>

<body background="resources/banner-bg.jpg">
<?php include("./inc/nav_bar.php") ?>

<body>

<form action="/action_page.php">
  <div class="container">
    <h1>Buy here</h1>
    <p>Please fill in this form to purchase the following book</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>
    <br>

    <label for="psw"><b>Creditcard Number</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <p> when buying this book you agree to this  <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn" > Buy now<?php header(location: index.php) ?></button>
  </div>
  
  <div class="container signin">
     <a href="index.php">Go back to home page</a>.</p>
  </div>
</form>

</body>
</html>



<?php include("./inc/footer.php") ?>


</body>
</html>