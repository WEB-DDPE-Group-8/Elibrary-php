<?php

include '../inc/admin-nav.php';
include '../config/dbconfig.php';


//  session_start();

// $admin_id = $_SESSION['admin_id'];

// if(!isset($admin_id)){
//     header('location:login.php');
//  }
$query = "SELECT * FROM user";
$results = mysqli_query($db,$query);
if(isset($_GET['delete'])){


while($rows = mysqli_fetch_assoc($results)){
   
   if($rows['Status'] == 'Active'){
      $delete_id = $_GET['delete'];
      mysqli_query($db, "UPDATE user SET Status ='Deactivated' WHERE UserID = '$delete_id'") or die('query failed');
      header('location:admin_users.php');
   }
   else if($rows['Status'] == 'Deactivated'){
   $delete_id = $_GET['delete'];
   mysqli_query($db, "UPDATE user SET Status ='Active' WHERE UserID = '$delete_id'") or die('query failed');
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
   <title>users</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>
   
<?php //include '../inc/admin-nav.php'; ?>

<section class="users">

   <h1 class="title"> user accounts </h1>

   <div class="box-container">
      <?php
         $select_users = mysqli_query($db, "SELECT * FROM user") or die('query failed');
         while($fetch_users = mysqli_fetch_assoc($select_users)){
      ?>
      <div class="box">
         <p> user id : <span><?php echo $fetch_users['UserID']; ?></span> </p>
         <p> username : <span><?php echo $fetch_users['UserName']; ?></span> </p>
         <p> email : <span><?php echo $fetch_users['Email']; ?></span> </p>
         <p> user type : <span style="color:<?php if($fetch_users['IsAdmin'] == '1'){ echo 'var(--orange)'; } ?>"><?php echo $fetch_users['IsAdmin']; ?></span> </p>
         <a href="admin_users.php?delete=<?php echo $fetch_users['UserID']; ?>" onclick="return confirm('delete this user?');" class="delete-btn"><?php echo $fetch_users['Status']; ?></a>
      </div>
      <?php
         };
      ?>
   </div>

   <button class = "btn" style = "color: #f2f2f2; margin-left: 372px;"> <a href="userTable.php">see on table</a></button>

</section>


<!-- custom admin js file link  -->
<script src="js/admin_script.js"></script>

</body>
</html>