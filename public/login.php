<<<<<<< HEAD
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="./multimedia/resources/logo/logo.png"/>
        
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
    
        <title>Login Form</title>
    </head>
    <body background="./multimedia/resources/banner-bg.jpg" >
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
    <center>

        <form action="/Elibrary-php/admin-profile.php" method="post">
            <table align="center"  bgcolor="transparent"  >
                <tr>
                    <td align="center"><h4  >LIBRARY MANAGENT SYSTEM<br></H4></td>
                </tr>
                <tr>
                    <td >LOGIN AS </td>
                    <td>:</td>
                </tr>
                <tr>
                    <td  >
                        <p>
                          <a href="logadmin.php">Admin</a>
                          <br>
                          <p>Or </p>
                          <br>
                         <a href="loguser.php">User</a>

                        </p>
                    </td>
                </tr>  
                </tr>
                
            </table>
        </form>
    </center>
    
       
    </body>
=======
<?php
include "../config/dbconfig.php";
include("../lib/db.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/pass.css">
    <link rel="stylesheet" href="../css/error.css">
    <link rel="icon" href="../multimedia/logo.png" type="image/icon type">

</head>
<body>
<?php
foreach($errors as $error)
                 {
              ?>
             <p class="error "><?php echo "please try again";}?>
            
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="login.php" method="POST" >
                    
                    <h2 class="text-center">Login Form</h2>
                    <p class="text-center">Login with your email/username and password.</p>
                    <?php
                    
                 foreach($errors as $error)
                 {
              ?>
             <p class="error "><?php echo "please try again";}?>
            
 
            </p>
                    <div class="form-group">
                        <input class="form-control"  name="cred" placeholder="Email Address" required >
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="pass" placeholder="Password" required>

                    </div>
                    <div class="link forget-pass text-left"><a href="change_pass.php">Forgot password?</a></div>
                    <div class="form-group">
                        <input class="form-control btn" type="submit" name="log_user" value="Login">
                    </div>
                    <div class="link login-link text-center">Not yet a member?<a href="/html/public/register.php">Signup now</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
>>>>>>> main
</html>