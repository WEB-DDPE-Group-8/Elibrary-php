<?php
session_start();
include '../config/dbconfig.php';
include 'export books.php';
include '../inc/admin-nav.php'; 

$query = "SELECT * FROM books";
$results = mysqli_query($db,$query);

if(isset($_GET["delete"])){

while($rows = mysqli_fetch_assoc($results)){
   
   if($rows['Status'] == 'Approved' && $rows['BookID'] ==  $_GET['delete']){
      $delete_id = $_GET['delete'];
      mysqli_query($db, "UPDATE books SET Status ='Rejected' WHERE BookID = '$delete_id'") or die('query failed');
      unset($_GET['delete']);
      header('location:admin_books.php');
   }
   else if($rows['Status'] == 'Rejected' && $rows['BookID'] ==  $_GET['delete']){
   $delete_id = $_GET['delete'];
   mysqli_query($db, "UPDATE books SET Status ='Approved' WHERE BookID = '$delete_id'") or die('query failed');
   unset($_GET['delete']);
   header('location:admin_books.php');
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
   <link rel="stylesheet" href="../css/admin_style.css">
   <link rel="stylesheet" href="../css/style.css">
   <style>
.export_import{
display:flex;
}
   </style>
</head>
<body>

<div class="export_import"> 
   <form action="" method="post">
<button class=btn type="submit" name="export_book">Export</button>
</form>
      <?php
         include "import books.php";
      ?>
   </div>
   



<section class="users">

   <h1 class="title" style="color:black"> Books List </h1>

   <div class="box-container">
      <?php
         $select_books = mysqli_query($db, "SELECT * FROM books") or die("query failed");
         while($fetch_books = mysqli_fetch_assoc($select_books)){
            //  var_dump($fetch_books);
      ?>
      <div class="box">
         <p> Title : <span  style="color:black"><?php echo $fetch_books['Title']; ?></span> </p>
         <p> Author : <span  style="color:black">   <?php echo $fetch_books['Author']; ?></span> </p>
         <p> Lang : <span style="color:black"><?php echo $fetch_books['Language']; ?></span> </p>
         <a href="<?php echo $fetch_books["Book"]?>" class="btn">Get Book</a>
       
         <a href="admin_books.php?delete=<?php echo $fetch_books['BookID']; ?>" onclick="return confirm('Make Changes to <?php echo $fetch_books['Title']; ?>')" class="btn"><?php echo $fetch_books['Status']; ?></a>
      </div>
      <?php
         };
      ?>
   </div>

</section>


<!-- custom admin js file link  -->
<script src="js/admin_script.js"></script>

</body>
</html>