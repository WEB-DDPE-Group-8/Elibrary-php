<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="../multimedia/resources/logo/logo.png"/>
        
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>
        <link rel="stylesheet" type="text/css" href="../css/footer.css"/>
        <link rel="stylesheet" type="text/css" href="../css/index.css"/>
       
        <script src="../js/user.js" defer> </script>
        

        <title>Admin Login Form</title>
    </head>
    <body background="../multimedia/resources/banner-bg.jpg" >
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
    <table align="center"  bgcolor="transparent">
        <tr>
            <td align="center"><h4 >A<sup>2</sup>Z<br>ADMIN LOGIN FORM</H4></td>
        </tr>
        <tr>
            <td >LOGIN AS </td>
            <td>:</td>
        </tr>
        <tr>
            <td  >
                <p>
                    
                    <label for=user>Admin</label>

                </p>
            </td>
        </tr>  
        </tr>
        <form action=logadmin.php method=post>
            <tr>
        <td>

            <?php include("../lib/db.php");

            foreach($errors as $error)
            {
                echo $error;
            }
            ?>
            </td>
        </tr>
        <tr>
            <td align="center"><input name="cred" title="Enter a valid Username or an Email Address" id=email type="text" placeholder="Email or Username" size="45" ></td>
        </tr>
        <tr>
            <td align="center"><input name="pass" title="Enter a valid Password" id=pass type="password" placeholder="Password" size="45" ></td>
        </tr>
        <tr>
            <td align="center"> <button class="btn" type="submit" name="log_user" id=log value="Log in">Log in</button> </td>
        </tr>
        <tr>
            <td align="center">
                Not yet a member?<a href="regadmin.php"><br>Register</a>
            </td>
        </tr>
    </table>
        </form>
       
    <?php include("../inc/footer.php") ?>
            
          
    </body>

</html>