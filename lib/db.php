<?php
session_start();

include ("../config/dbconfig.php");

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

$admincodes = array(1234,5678);
$phonenumber = 0000000000;
  
$errors= array();

if(isset($_POST["register"])) 
{
    if(!empty($firstname)) 
    {
        array_push($errors,"First Name Required");
        return 0;
    }
    else{
        $firstname  =test_input($_POST["firstname"]);
        if (!preg_match("/^[a-zA-Z-']*$/",$firstname)) {
            array_push($errors,"Only letters and white space allowed");
            return 0;
          }
    }

    // if(!empty($gender)) 
    // {
    //     array_push($errors,"Gender Required");
    //     return 0;
    // }
    // else{
    //     $gender =test_input($_POST["gender"]);
    //     if (!preg_match("/^(?:m|M|male|Male|f|F|female|Female)$ /",$gender)) {
    //         array_push($errors,"Wrong input for gender try refreshing this page");
    //         return 0;
    //       }
    // }

    if(!empty($lastname))
    {
        array_push($errors,"Last Name Required");
        return 0;
    }
    else{
        $lastname  =test_input($_POST["lastname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
            array_push($errors,"Last Name error");
            return 0;
          }
    }

    if(!empty($username))
    {
        array_push($errors,"User Name Required");
        return 0;
    }
    else{

        $username  =test_input($_POST["username"]);
        if (!preg_match("/^([\w][\w\-_\x{0020}]{3,10}[\w])$/",$username)) {
            array_push($errors,"User Name error,Only letters and white space allowed");
            return 0;
          }
    }

    if(!empty($email))
    {
        array_push($errors,"User Name Required");
        return 0;
    }
    else{
        $email  =test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors,"Invalid Email Format ");
            return 0;
          }
    }

    if(!empty($phonenumber))
    {
        array_push($errors,"User Name Required");
        return 0;
    }
    else{

        $phonenumber  =test_input($_POST["phonenumber"]);
        // if (!preg_match("/^([\w][\w\-_\u0020]{4,18}[\w])$/",$username)) {
        //     array_push($errors,"Invalid User Name");
        //     return 0;
        //  
    }

    if(!empty($pass) || !empty($pass2))
    {
        array_push($errors,"Password field is missing");
        return 0;
    }
    else{
        $pass = test_input($_POST["pass"]);
        $pass2 =  test_input($_POST["pass2"]);
        
        
        if (!preg_match("/^(?=.*\d)(?=.*[a-zA-Z])(?!.*\s).{6,12}$/",$pass)) {
            array_push($errors,"A password must contain between 6 and 12 characters, and contains at least one number.
            ");
            return 0;
          }
            else{
                if($pass !== $pass2)
                {
                    array_push($errors,"The two passwords you entered don't match");
                    return 0;
                }     
            }
    }

    // if(!empty($dob)){
    //     array_push($errors,"Dob field is missing");
    //     return 0;
    // "}"

    if(empty($_POST["role"])){ 

        array_push($errors,"$_POST[role],Role cannot be empty");
        return 0;
    }
    else{
        $role =  test_input($_POST['role']);
        if($role == "admin")
        {
            if(!empty($admin_code))
            {
                $admin_code =  test_input($_POST['admin_code']);
                $isAdmin = in_array($admin_code,$admincodes);
                    if($isAdmin == false)
                        {
                            array_push($errors,"The Admin code you entered is wrong");
                            return 0;
                        }
            }
        }
    }


    {
        $createcart = "INSERT INTO cart (Books) values ('empty') ";
        mysqli_query($db,$createcart);

        $querylatestcart = "Select MAX(Id) FROM cart";

        $cart = mysqli_query($db,$querylatestcart);
        
        $cartData = mysqli_fetch_assoc($cart);
        
        $cart_id = (int)$cartData['MAX(Id)'];

        $pass = password_hash($pass,PASSWORD_DEFAULT);
        
        $queryadmin = " INSERT INTO user  (UserName,Password,Email,PhoneNumber,FirstName,LastName,isAdmin,Cart_Id) values 
        ('$username','$pass','$email','$phonenumber','$firstname','$lastname','$isAdmin','$cart_id') ";
            
        mysqli_query($db, $queryadmin);

        $_SESSION["username"] = $username;
        $_SESSION["isadmin"] = $isAdmin;
        $_SESSION["email"] =  $email;

        $_SESSION["firstname"]=$firstname;
        $_SESSION["lastname"]=$lastname;
        $_SESSION["PhoneNumber"]=$phonenumber;
        
        $_SESSION["Cart_Id"]=$userData["Cart_Id"];

        // $_SESSION["CreditCard"]=$userData["CreditCard"];
        // $_SESSION["Interests"]=$userData["Interests"];

        header('location:../public/catSelector.php');
        exit();
    }
};
 
 
if(isset($_POST["log_user"]))
{
    $cred = $_POST["cred"];
    $pass = $_POST['pass'];
    
    if(empty($cred) || empty($pass))
 {
        array_push($errors,"Missing Field(s)");
        return 0;
 }

    if(count($errors)==0)
 {
    $querycheck =" SELECT * from user where Email='$cred' OR UserName='$cred' ";
    
    $result = mysqli_query($db, $querycheck);
    // $result = mysqli_fetch_assoc($result);
 
    if(mysqli_num_rows($result) == 1)
    {
        $userData = mysqli_fetch_assoc($result);
        
       if(password_verify($pass,$userData["Password"]))
       {
        // if($userData["Password"] == $pass)
        // {
            foreach($userData as $e)
            {
                //iterate the results object to get the values needed
                $_SESSION["UserID"]      =   $userData["UserID"];
                $_SESSION["username"]    =   $userData["UserName"];
                $_SESSION["email"]       =   $userData["Email"];
                $_SESSION["firstname"]   =   $userData["FirstName"];
                $_SESSION["lastname"]    =   $userData["LastName"];
                $_SESSION["phonenumber"] =   $userData["PhoneNumber"];
                $_SESSION["interests"]   =   $userData["Interests"];
                $_SESSION["cart_id"]     =   $userData["Cart_Id"];
                $_SESSION["creditcard"]  =   $userData["CreditCard"];
                $_SESSION["role"]        =   $userData["IsAdmin"];
            }      
            // echo $_SESSION["role"];
                header("location:../public/profile.php");
            // exit;
        }
        else
        {
            array_push($errors,"Invalid Password");
            return 0;
        }
    }
    else
    {
        array_push($errors,"Invalid username");
        return 0;
    }
 }
 else
 {
    array_push($errors,"An error has occured");
 }

}


if(isset($_POST["log_out"]))
{   
    session_unset();
    session_destroy();
    header("Location:../index.php");
     exit();
}
?>