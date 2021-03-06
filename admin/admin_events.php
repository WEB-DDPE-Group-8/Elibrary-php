<?php
session_start();
include '../config/dbconfig.php';


$query = "SELECT * FROM event";
$results = mysqli_query($db,$query);

if(isset($_POST['add_product'])){
   unset($_POST['add_product']);


   if(!empty($_POST['name'] && !empty($_POST['description'] && !empty($_FILES['image']['name'])))){
      // $name = $_POST['name'];
      $description = $_POST['description'] ;
      // $image = $_POST['image'];
   $name = mysqli_real_escape_string($db, $_POST['name']);
//    $price = $_POST['price'];
   $fileName = basename($_FILES['image']['name']);
   $filetype= pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

   // $image = $_FILES['image']['name'];
   $fileName = mysqli_num_rows($results) + 1;
   $image = $fileName.".$filetype";
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = "../multimedia/events/$image";
   $select_event_name = mysqli_query($db, "SELECT name FROM `event` WHERE name = '$name'") or die('query failed');

   if(mysqli_num_rows($select_event_name) > 0){
         $message[] = 'event already exists';
         
   header('location:admin_events.php');
   }else{
      // $img_path = $image_folder.$image;
      $query = "INSERT INTO event (NAME, DESCRIPTION, IMAGE) VALUES ('$name', '$description', '$image_folder')";
      $run = mysqli_query($db, $query);

      if($run){
         move_uploaded_file($image_tmp_name, $image_folder);
         $message[] = 'Event added successfully!';
         unset($_POST['add_product']);
      
   header('location:admin_events.php');
      }
      else{
         $message[] = "form not submitted";
         unset($_POST['add_product']);
         

   header('location:admin_events.php');
      }
  }
   }
   else{
      $message[] = "all fields required";
      unset($_POST['add_product']);
      

   header('location:admin_events.php');
}
}

if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
   mysqli_query($db, "Update `event` set Status='inactive' WHERE ID = '$delete_id'") or die('query failed');
   header('location:admin_events.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>products</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
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

   <?php include '../inc/admin-nav.php'; ?>


   <h1 class="title" style="color:black"> Events </h1>
   <form action="" class="search-form" method="GET">
      <input type="search" name="event" placeholder="search here..." class="search-box" />
      <button type=submit class="fa fa-search"></button>
   </form>

   <!-- product CRUD section ends -->
   <!-- product CRUD section starts  -->
   <section class="add-products">
      <?php
if(isset($message) && count($message)>0){
   foreach($message as $key)
      echo  $key;
}
   ?>

      <form action="" method="post" enctype="multipart/form-data">
         <h3>Add Events</h3>
         <input type="text" name="name" class="box" placeholder="add event name" required>
         <textarea min="0" name="description" class="box" placeholder="description of event" required></textarea>
         <input type="file" name="image" accept="image/jpg, image/jpeg, image/png" class="box" required>
         <!-- <input type="file" name="image" class="box" required> -->
         <input type="submit" value="add event" name="add_product" class="btn">
      </form>

   </section>
   <!-- show products  -->

   <section class="show-products">

      <div class="box-container">


         <?php
  include "search.php";
while($rows = mysqli_fetch_assoc($select_events)){
   ?>
         <div class="box">
            <img width=150px height=auto src="<?php echo $rows['IMAGE']; ?>" alt="">
            <div class="name"> <a href="../public/events.php?q=<?php   echo $rows["NAME"]; ?>"><?php echo $rows["NAME"]; 
         ?> </a></div>
            <div class="price"><?php echo $rows["DESCRIPTION"]; ?></div>
            <a href="admin_events.php?delete=<?php echo $rows['ID']; ?>" class="delete-btn"
               onclick="return confirm('Remove this Event?');">delete</a>
         </div>
         <?php
      }
      ?>
      </div>
   </section>

   <section class="edit-product-form">

      <?php
      if(isset($_GET['update'])){
         $update_id = $_GET['update'];
         $update_query = mysqli_query($db, "SELECT * FROM event WHERE ID = '$update_id' AND Status = active") or die('query failed');
         if(mysqli_num_rows($update_query) > 0){
            while($fetch_update = mysqli_fetch_assoc($update_query)){
   ?>
      <form action="" method="post" enctype="multipart/form-data">
         <input type="hidden" name="update_p_id" value="<?php echo $fetch_update['ID']; ?>">
         <input type="hidden" name="update_old_image" value="<?php echo $fetch_update['IMAGE']; ?>">
         <img src="uploaded_img/<?php echo $fetch_update['IMAGE']; ?>" alt="">
         <input type="text" name="update_name" value="<?php echo $fetch_update['NAME']; ?>" class="box" required
            placeholder="enter event">

         <input type="file" class="box" name="update_image" accept="image/jpg, image/jpeg, image/png">
         <input type="submit" value="update" name="update_product" class="btn">
         <input type="reset" value="cancel" id="close-update" class="delete-btn">
      </form>
      <?php
         }
      }
      }else{
         echo '<script>document.querySelector(".edit-product-form").style.display = "none";</script>';
      }
   ?>

   </section>

   <!-- custom admin js file link  -->
   <script src="../js/admin_script.js"></script>
   <?php
include '../inc/footer.php';
?>
</body>

</html>