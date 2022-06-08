<?php
session_start();
include '../config/dbconfig.php';
include "export users.php";
include '../inc/admin-nav.php';

$query = "SELECT * FROM user";
$results = mysqli_query($db,$query);

if(isset($_GET["delete"])){

while($rows = mysqli_fetch_assoc($results))
   {
      
            if($rows['Status'] == 'Active' && $rows['UserID'] ==  $_GET['delete'])
            {
               $delete_id = $_GET['delete'];
               mysqli_query($db, "UPDATE user SET Status ='Deactivated' WHERE UserID = '$delete_id'") or die('query failed');
               unset($_GET['delete']);
               header('location:admin_users.php');
            }
            else if($rows['Status'] == 'Deactivated' && $rows['UserID'] ==  $_GET['delete'])
            {
               $delete_id = $_GET['delete'];
               mysqli_query($db, "UPDATE user SET Status ='Active' WHERE UserID = '$delete_id'") or die('query failed');
               unset($_GET['delete']);
               header('location:admin_users.php');
            }
         
      }
   }

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dash Board Users</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="../css/style.css">
   <link rel="stylesheet" href="../css/admin_style.css">


   <style>
      .search-form {
         position: relative;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         transition: all 1s;
         width: 50px;
         height: 50px;
         background: white;
         box-sizing: border-box;
         border-radius: 25px;
         border: 4px solid white;
         padding: 5px;
      }

      .search-box {
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         ;
         height: 42.5px;
         line-height: 30px;
         outline: 0;
         border: 0;
         display: none;
         font-size: 1em;
         border-radius: 20px;
         padding: 0 20px;
      }

      .fa {
         box-sizing: border-box;
         padding: 10px;
         width: 42.5px;
         height: 42.5px;
         position: absolute;
         top: 0;
         right: 0;
         border-radius: 50%;
         color: #07051a;
         text-align: center;
         font-size: 1.2em;
         transition: all 1s;
      }

      .search-form:hover {
         width: 300px;
         cursor: pointer;
      }

      .search-form:hover input {
         display: block;
      }

      .search-form:hover .fa {
         background: #27ae60;
         color: white;
      }
   </style>

</head>

<body>

   <section class="users">

      <h1 class="title" style="color:black"> accounts </h1>

      <form action="" class="search-form" method="GET">
         <input type="search" name="user" placeholder="search here..." class="search-box" />
         <button type=submit class="fa fa-search"></button>
      </form>

      <div class="export_import">
         <form action="" method="post">
            <button class=btn type="submit" name="export_user">Export</button>
         </form>
         <?php
            include "import users.php";
         ?>
      </div>

      <div class="box-container">
         <?php
         include "search.php";
         while($fetch_users = mysqli_fetch_assoc($select_users)){
      ?>
         <div class="box">
            <p> username : <a href="../public/visit profile.php?visit=<?php echo $fetch_users["UserName"]?>"><span
                     style="color:black"><?php echo $fetch_users['UserName']; ?></span> </a> </p>
            <p> email : <span style="color:black"> <?php echo $fetch_users['Email']; ?></span> </p>
            <p> user type : <span style="color:black"><?php echo $fetch_users['IsAdmin']; ?></span> </p>
            <?php 
         if($fetch_users['IsAdmin'] == 'Admin'){
         ?>
            <a href="#"
               onclick="return confirm('You Cant Make Changes to <?php echo $fetch_users['UserName']; ?>, they are an admin')"
               class="btn"><?php echo $fetch_users['Status']; ?></a>
            <?php 
         }
         else{
            ?>
            <a href="admin_users.php?delete=<?php echo $fetch_users['UserID']; ?>"
               onclick="return confirm('Make Changes to <?php echo $fetch_users['UserName']; ?>')"
               class="btn"><?php echo $fetch_users['Status']; ?></a>
            <?php 
         }
         ?>
         </div>
         <?php
         };
      ?>
      </div>

   </section>

   <!-- custom admin js file link  -->
   <script src="js/admin_script.js"></script>

   <?php
include '../inc/footer.php';
?>

</body>

</html>