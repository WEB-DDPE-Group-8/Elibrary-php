<?php
require_once ("config/dbconfig.php");


$admincodes = array(1234,5678);
$phonenumber = 7125020;
  
    INCLUDE("./config/dbconfig.php");
$errors= array();

if(isset($_POST["reg_user"])) 
{
    // $admin_code = "default";
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phonenumber = $_POST["phonenumber"];
    $email = $_POST["email"];

    if(empty($firstname)) 
    {
        array_push($errors,"First Name Required");
        return 0;
    }

    if(empty($lastname))
    {
        array_push($errors,"Last Name Required");
        return 0;
    }

    if(empty($username))
    {
        array_push($errors,"User Name Required");
        return 0;
    }

    if(empty($email))
    {
        array_push($errors,"User Name Required");
        return 0;
    }

    if(empty($phonenumber))
    {
        array_push($errors,"User Name Required");
        return 0;
    }

    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];

    if(empty($pass) || empty($pass2))
    {
        array_push($errors,"Password field is missing");
        return 0;
    }

    if($pass !== $pass2)
    {
        array_push($errors,"The two passwords you entered don't match");
        return 0;
    }

    $admin_code = $_POST['admin_code'];
    $isAdmin = in_array($admin_code,$admincodes);

    if($isAdmin == false)
    {
        array_push($errors,"The Admin code you entered is wrong");
        return 0;
    }

    {
        $createcart = "INSERT INTO cart (Books) values ('jnjdkgn') ";
        mysqli_query($db,$createcart);

        $querylatestcart = "Select MAX(Id) FROM cart";

        $cart = mysqli_query($db,$querylatestcart);
        
        $cartData = mysqli_fetch_assoc($cart);
        
        $cart_id = (int)$cartData ['MAX(Id)'] ;

        // echo print_r($sil2);
        $pass = password_hash($pass,PASSWORD_DEFAULT);
        $queryadmin = " INSERT INTO user  (UserName,Password,Email,PhoneNumber,FirstName,LastName,isAdmin,Cart_Id) values 
        ('$username','$pass','$email','$phonenumber','$firstname','$lastname','$isAdmin','$cart_id') ";
            
        mysqli_query($db, $queryadmin);

        $_SESSION["username"] = $username;
        $_SESSION["isAdmin"]=$isAdmin;

        header('location:/index.php');
        exit();
    }
 };

             
if(isset($_POST['log_user']))
{
    $cred = $_POST['cred'];
    $pass = $_POST['pass'];
    
    if(empty($cred) || empty($pass))
 {
        array_push($errors,"Missing Field(s)");
 }

    if(count($errors)==0)
 {
    $querycheck =" SELECT UserName,Email,Password from user where Email='$cred' OR UserName='$cred' ";
    
    $result = mysqli_query($db, $querycheck);
 
    if(mysqli_num_rows($result) == 1)
    {
        $userData = mysqli_fetch_assoc($result);  
        if($userData["Password"] == $pass)
        {
            foreach($userData as $rows)
            {
                //iterate the results object to get the values neede     
                $_SESSION["username"] = $userData["UserName"];
                $_SESSION["email"] =  $userData["Email"];
            }      
                header('location:../admin-profile.php');
            exit();
        }
        else
        {
            array_push($errors,"Invalid Password");
        }
    }
    else
    {
        array_push($errors,"Invalid username");
    }
 }
}


if(isset($_POST['log_out']))
{   
    ECHO "JDHFJK";
    var_dump($_SERVER['REQUEST_METHOD']);
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    // session_start() ;
    // session_destroy();
    //  header('Location:index.php');
    //  exit();
}
?>