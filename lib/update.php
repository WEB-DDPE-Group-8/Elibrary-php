<?php
// session_start();
include ("../config/dbconfig.php");

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $errors= array();
  if(isset($_POST["update"]))
  {
    unset($_POST["update"]);
     try{
          if(empty($_POST["fname"])) 
          {
              array_push($errors,"First Name Required");
              echo $errors;
              return 0;
          }
          else{
              $fname  =test_input($_POST["fname"]);
              if (!preg_match("/^[a-zA-Z-']*$/",$fname)) {
                  array_push($errors,"Only letters and white space allowed for First name");
                  return 0;
                }
          }
          if(empty($_POST["lname"])) 
          {
              array_push($errors,"Last Name Required");
              return 0;
          }
          else{
              $lname  =test_input($_POST["lname"]);
              if (!preg_match("/^[a-zA-Z-']*$/",$lname)) {
                  array_push($errors,"Only letters and white space  allowed for Last name");
                  return 0;
                }
          }
          if(empty($_POST["usrname"]))
              {
                  array_push($errors,"User Name Required");
                  return 0;
              }
              else{
                
                  $usrname  =test_input($_POST["usrname"]);
                  if (!preg_match("/^([\w][\w\-_\x{0020}]{3,10})$/",$usrname)) {
                      array_push($errors,"User Name error <br> Only letters and white space allowed <br> 3-10 characters");
                      echo $usrname;
                      echo $errors[0];
                      return 0;
                  }
              }
  
          if(empty($_POST["email"]))
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
          if(empty($_POST["about"]))
              {
                  array_push($errors,"About Required");
                  return 0;
              }
              else{
                  $about  =test_input($_POST["about"]);
                  if (!preg_match("/^\w+(?:\s+\w+){0,200}$/",$about)) {
                      array_push($errors,"Invalid Email Format ");
                      return 0;
                  }
              }

              if(count($errors)> 0)
              {
                foreach($errors as $error){
                    echo $error;
                }
            }
             else{
              $queryupd = "UPDATE user SET Email='$email', UserName='$usrname',  About='$about',  FirstName ='$fname', LastName='$lname' WHERE UserID = $_SESSION[UserID] ";
              mysqli_query($db, $queryupd);
  
              $_SESSION["firstname"]=$fname;
              $_SESSION["lastname"] = $lname;
              $_SESSION["username"]=$usrname;
              $_SESSION["about"]   =$about;
              $_SESSION["email"]   =$email;
                return 0;
              }
              
              }
              catch (mysqli_sql_exception $e) {
                  if(str_contains($e, "Duplicate entry")) {

                      array_push($errors,"UserName already Taken");
                      foreach($errors as $error){
                        echo $error;
                      return $errors[0];
                      }
                  }
                  echo "in catch";
                      die("Error inserting user details into database: " .  $e->getMessage());
                      return 0;
                     
          }
  }
?>