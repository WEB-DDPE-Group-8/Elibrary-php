<?php
include "../config/dbconfig.php";
include("../lib/db.php");
 

if(isset($_POST['login_now'])){
        header('Location: login.php');
    }
    ?>
<?php
if($_SESSION['info'] == false){
    header('Location: bookshelf.php');
}
    ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Log in form</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/pass.css">
    <script src="../js/toggle.js" defer></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
 
  </head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
            <?php 
            if(isset($_SESSION['info'])){
                ?>
                <div class="alert alert-success text-center">
                <?php echo $_SESSION['info']; ?>
                </div>
                <?php
            }
            ?>
                <form action="pass_changed.php" method="POST">
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login_now" value="Login Now">
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>