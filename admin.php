<?php
include ("./db.php")
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./resources/logo/logo.png" />

    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <title>admin page</title>
  </head>
  <body background="resources/banner-bg.jpg">
    <center>
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <div>
        <h1>Admin Login</h1>

        <form action="admin.php" method="POST">
          <label for="username">Username or email</label><br />
          <input id="username" type="text" name=cred placeholder="User Name" required /> <br />

          <label for="pass">Password </label><br />
          <input type="Password" id="pass" name="pass" placeholder="Password"required /> <br />

          <input id="keep me signed in" type="checkbox" />
          <label for="keep me signed in"> Keep me signed</label><br /><br />

          <input type="submit" name="log_user" value="Submit" />
        </form>
      </div>
    </center>
  </body>
</html>
