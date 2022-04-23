<?php
// session_start();

$admincodes = array(1234,5678);
$phonenumber = 7125020;
  
include ("config/dbconfig.php");

if(isset($_POST["req_user"])) 
{
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];
    // $phonenumber = mysqli_real_escape_string($db,$_POST['phonenumber']);
    $admin_code =$_POST['admin_code'];
    $email =$_POST['email'];

    $pass = password_hash($pass,PASSWORD_DEFAULT);

    $isAdmin = in_array($admin_code,$admincodes);//check if theres an admin code in admin code(s)

    
        // if($isAdmin)
        // {
 $createcart = "INSERT INTO cart (Books) values ('jnjdkgn')";

  mysqli_query($db,$createcart);

 $querylatestcart = "Select MAX(Id) FROM cart ";

 $sil = mysqli_query($db,$querylatestcart);
 
 $sil2 = mysqli_fetch_assoc($sil);
 
$cart_id = (int)$sil2 ['MAX(Id)'] ;

// echo print_r($sil2);

$queryadmin = " INSERT INTO user  (UserName,Email,PhoneNumber,FirstName,LastName,isAdmin,Cart_Id) values 
('$username','$email','$phonenumber','$firstname','$lastname','0','$cart_id')";
echo $queryadmin;
        mysqli_query($db, $queryadmin);

        $_SESSION['username'] = $username;
        $_SESSION['isAdmin']=$isAdmin;

        header('location:/index.php');
        // exit();
        // }
    }
        
        
    if(isset($_POST['log_user']))
{

    $cred = $_POST['cred'];
    $pass = $_POST['pass'];


    $querycheck =
   " 
    SELECT * from user where Email='$cred' OR UserName='$cred' 
    ";
    
    $result = mysqli_query($db, $querycheck);

    echo print_r($result);
    
    foreach($result as $rows)
    {
        //iterate the results object to get the values neede     
    $_SESSION["username"] = $rows["UserName"];
    $_SESSION["email"] =  $rows["Email"];
    }      
    header('location:../admin-profile.php');
    exit();
}

if(isset($_GET['logout']))
{   
    //  unset($_SESSION['username']);
    //  unset($_SESSION['email']);
    session_destroy();
    // session_abort();
     header('Location:index.php');
     exit();
}
?>