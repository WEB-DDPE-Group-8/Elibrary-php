<?php
session_start();

$admincodes = array(1234,5678);
$phonenumber = 7125020;
  
    INCLUDE("../config/dbconfig.php");

if(isset($_POST["req_user"])) 
{
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];
    // $phonenumber = mysqli_real_escape_string($db,$_POST['phonenumber']);
    $admin_code = mysqli_real_escape_string($db,$_POST['admin_code']);

    $email = mysqli_real_escape_string($db,$_POST['email']);

    $pass = password_hash($pass, PASSWORD_DEFAULT);

    $isAdmin = in_array($admin_code,$admincodes);//check if theres an admin code in admin code(s)

    
        // if($isAdmin)
        // {
$createcart = 'INSERT INTO cart (Books) values ("jnjdkgn")';

 $cart_idmysqli_query($db,$createcart);

$querylatestcart = "Select MAX('Cart-Id') from cart ";
 $sil = mysqli_query($db,$querylatestcart);
 $sil2 = mysqli_fetch_assoc($sil);
echo print_r($sil2);
//     $queryadmin = "INSERT INTO user
//         (UserName,Email,PhoneNumber,FirstName,LastName,isAdmin,Cart_Id) VALUES
//         ('$username','$email','$phonenumber','$firstname','$lastname',$isAdmin,$querylatestcart )";
    
//         mysqli_query($db, $queryadmin);

//         $_SESSION['username'] = $username;
//         $_SESSION['isAdmin']=$isAdmin;

        // header('location:index2.php');
        // exit();
        // }
}
        
        
    if(isset($_POST['log_user']))
{

    $cred = $_POST['cred'];
    $pass = $_POST['pass'];


    $querycheck = "SELECT * from user where Email='$cred' OR UserName='$cred'" ;
    
    $result = mysqli_query($db, $querycheck);
    
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
     unset($_SESSION['username']);
     unset($_SESSION['email']);
    session_destroy();
     header('Location:/');
     exit();
}
?>