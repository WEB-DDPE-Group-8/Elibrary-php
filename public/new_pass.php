<?php
include "../config/dbconfig.php";
include("../lib/db.php");



if(isset($_POST['change_pass'])){
    $_SESSION['info'] = "";
    $password =  $_POST['password'];
    $cpassword = $_POST['cpassword'];
    if (!preg_match("/^(?=.*\d)(?=.*[a-zA-Z])(?!.*\s).{6,12}$/",$password)) {

      array_push($errors,"A password must contain between 6 and 12 characters, and contains at least one number.");
      }
      else{
        if($password !== $cpassword)
        {
              array_push($errors, "Confirm password not matched!");
        }
        else
        {
            $code = 0;
            $email = $_SESSION['email']; //getting this email using session
            $encpass = password_hash($password, PASSWORD_DEFAULT);
            $update_pass = "UPDATE user SET Password = '$encpass' WHERE Email = '$email'";
            $run_query = mysqli_query($db, $update_pass);
            if($run_query){
                $info = "Your password changed.$update_pass Now you can login with your new password.";
                $_SESSION['info'] = $info;
                header('Location: pass_changed.php');
            }else{
                array_push($errors, "Failed to change your password!");
            }
      }
      }
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Create a New Password</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/pass.css">
  <link rel="icon" href="../multimedia/logo.png" type="image/icon type">
  <script src="../js/toggle.js" defer></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4 form">
        <?php  
            foreach($errors as $error)
            {
              ?>
        <p class="error"><?php echo $error;
            }
       ?>
        </p>

        <form method="post" action="new_pass.php">
          <h2>Change Password</h2>
          <div class="form-group">
            <span>Password</span>
            <input name="password" class="form-control" placeholder="Creat new Password" />
          </div>
          <div class="form-group">
            <span>Comfirm Password</span>
            <input name="cpassword" class="form-control" placeholder="Confirm Password" />
            <input name="change_pass" type="submit" value="Change" class="btn form-control" />
          </div>
        </form>
      </div>
    </div>
  </div>


</body>

</html>