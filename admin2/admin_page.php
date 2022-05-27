<?php

include '../config/dbconfig.php';

// session_start();

// $admin_id = $_SESSION['admin_id'];

// if(!isset($admin_id)){
//    header('location:login.php');
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin panel</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>
   
<?php include '../inc/admin-nav.php'; ?>
<!-- admin dashboard section starts  -->

<section class="dashboard">

   <h1 class="title">dashboard</h1>

   <div class="box-container">

   <div class="box">
         <?php 
            $select_users = mysqli_query($db, "SELECT * FROM user WHERE IsAdmin = 'user'") or die('query failed');
            $number_of_users = mysqli_num_rows($select_users);
         ?>
         <h3><?php echo $number_of_users; ?></h3>
         <p>normal users</p>
      </div>

      <div class="box">
         <?php 
            $select_users = mysqli_query($db, "SELECT * FROM user WHERE IsAdmin = 'ADMIN'") or die('query failed');
            $number_of_users = mysqli_num_rows($select_users);
         ?>
         <h3><?php echo $number_of_users; ?></h3>
         <p>ADMIN</p>
      </div>

      <div class="box">
         <?php 
            $select_users = mysqli_query($db, "SELECT * FROM user") or die('query failed');
            $number_of_users = mysqli_num_rows($select_users);
         ?>
         <h3><?php echo $number_of_users; ?></h3>
         <p>TOTAL USERS</p>
      </div>

      


      <div class="box">
         <?php 
            // $select_pending = mysqli_query($db, "SELECT * FROM 'events'") or die('query failed');

            // $fetch_pendings = mysqli_fetch_assoc($select_pending);

            // $total_pendings = 0;
            // $events = mysqli_query($db, "SELECT * FROM 'events'") or die('query failed');
            // $number_of_events = mysqli_num_rows($select_messages);

            // $count = 0;

            // $select_pending = mysqli_query($db, "SELECT COUNT(*) AS TOTAL FROM 'events") or die('query failed');

            $sql = "SELECT COUNT(*) AS total from events";
            $result = $db->query($sql);
            $data =  $result->fetch_assoc();
           


            // if(mysqli_num_rows($select_pending) > 0){
            //        while($fetch_pendings = mysqli_fetch_assoc($select_pending)){
            //          // $total_price = $fetch_pendings['total_price'];
            //          // $total_pendings += $total_price;
            //          $count++;
            //       };
            //    };

            // $total_pendings = 0;
            // $select_pending = mysqli_query($conn, "SELECT total_price FROM `orders` WHERE payment_status = 'pending'") or die('query failed');
            // if(mysqli_num_rows($select_pending) > 0){
            //    while($fetch_pendings = mysqli_fetch_assoc($select_pending)){
            //       $total_price = $fetch_pendings['total_price'];
            //       $total_pendings += $total_price;
            //    };
            // };
         ?>
         <h3><?php  echo $data['total']; ?></h3>
         <p>Add Events</p>
      </div>

   </div>

</section>

<!-- admin dashboard section ends -->



<!-- custom admin js file link  -->
<script src="../js/admin_script.js"></script>

</body>
</html>