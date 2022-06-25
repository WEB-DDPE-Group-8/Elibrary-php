<?php use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


include "../config/dbconfig.php";
include("../lib/db.php");
include("../includes/PHPMailer.php");
include("../includes/SMTP.php");
include("../includes/EXCEPTION.php");


if(isset($_POST['check_email']) && $_POST['email']) {
  $email=$_POST['email'];
  $check_email="SELECT * FROM user WHERE Email = '$email'";
  $run_sql=mysqli_query($db, $check_email);

  if(mysqli_num_rows($run_sql) > 0) {
    $code=rand(999999, 111111);
    $insert_code="UPDATE user SET code = $code WHERE email = '$email'";
    $run_query=mysqli_query($db, $insert_code);

    if($run_query) {
      $subject="Password Reset Code";
      $message="As you have requested, Your password reset code is $code";
      $mail=new PHPMailer();
      $mail->IsSMTP();
      $mail->Host="smtp.gmail.com";
      $mail->SMTPAuth=TRUE;
      $mail->SMTPSecure="tls";
      $mail->Port=587;
      $mail->Username="a2zlibraryofficial@gmail.com";
      $mail->Password="yotyiikxvvovnhiq";


      $mail->Subject=$subject;
      $mail->SetFrom("a2zlibraryofficial@gmail.com");
      $mail->Body=$message;
      $mail->addAddress($email, "esteemed customer");

      if ($mail->Send()) {
        $info="We've sent a passwrod reset otp to your email - $email";
        $_SESSION['info']=$info;
        $_SESSION["email"]=$email;
        header('location: reset_code.php');
        exit();
      }

      else {
        array_push($errors, "Error When sending code");
      }
    }

    else {
      array_push($errors, "Something went wrong");

    }
  }

  else {
    array_push($errors, "This email address does not exist!");
  }
}

?>
<!DOCTYPE html>
  <html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Change Password</title>
    <link rel="stylesheet" href="../css/register.css">
    <link rel="icon" href="../multimedia/logo.png" type="image/icon type">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/pass.css">
    <script src="../js/toggle.js" defer></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>

  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-4 offset-md-4 form"><?php foreach($errors as $error) {
  ?><p class="error"><?php echo $error;
}

?></p>
          <form method="post" action=" change_pass.php">
            <h2 class="text-center">Forgot Password</h2>
            <div class="form-group"><span>username</span><input type="email" name="email" class="form-control"
                placeholder="enter your email" required /></div>
            <div class="form-group"><input name="check_email" type="submit" value="Send Code"
                class="btn form-control" /></div>
          </form>
        </div>
      </div>
    </div>
  </body>

  </html>