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

// session_start();

// $admin_id = $_SESSION['admin_id'];

// if(!isset($admin_id)){
//    header('location:login.php');
// };

// if(isset($_POST['add_product'])){

//    $name = mysqli_real_escape_string($conn, $_POST['name']);
//    $price = $_POST['price'];
//    $image = $_FILES['image']['name'];
//    $image_size = $_FILES['image']['size'];
//    $image_tmp_name = $_FILES['image']['tmp_name'];
//    $image_folder = '/html/multimedia/events/'.$image;

//    $select_product_name = mysqli_query($conn, "SELECT name FROM `products` WHERE name = '$name'") or die('query failed');

//    if(mysqli_num_rows($select_product_name) > 0){
//       $message[] = 'event already added';
//    }else{
//       $add_product_query = mysqli_query($conn, "INSERT INTO `products`(name, price, image) VALUES('$name', '$price', '$image')") or die('query failed');

//       if($add_product_query){
//          if($image_size > 2000000){
//             $message[] = 'image size is too large';
//          }else{
//             move_uploaded_file($image_tmp_name, $image_folder);
//             $message[] = 'product added successfully!';
//          }
//       }else{
//          $message[] = 'product could not be added!';
//       }
//    }
// }

if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
   // $delete_image_query = mysqli_query($conn, "SELECT image FROM `products` WHERE id = '$delete_id'") or die('query failed');
   // $fetch_delete_image = mysqli_fetch_assoc($delete_image_query);
   // unlink('uploaded_img/'.$fetch_delete_image['image']);
   mysqli_query($db, "DELETE FROM `event` WHERE ID = '$delete_id'") or die('query failed');
   header('location:admin_events.php');
}

// if(isset($_POST['update_product'])){

//    $update_p_id = $_POST['update_p_id'];
//    $update_name = $_POST['update_name'];
//    $update_price = $_POST['update_price'];

//    mysqli_query($conn, "UPDATE `products` SET name = '$update_name', price = '$update_price' WHERE id = '$update_p_id'") or die('query failed');

//    $update_image = $_FILES['update_image']['name'];
//    $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
//    $update_image_size = $_FILES['update_image']['size'];
//    $update_folder = 'uploaded_img/'.$update_image;
//    $update_old_image = $_POST['update_old_image'];

//    if(!empty($update_image)){
//       if($update_image_size > 2000000){
//          $message[] = 'image file size is too large';
//       }else{
//          mysqli_query($conn, "UPDATE `products` SET image = '$update_image' WHERE id = '$update_p_id'") or die('query failed');
//          move_uploaded_file($update_image_tmp_name, $update_folder);
//          unlink('uploaded_img/'.$update_old_image);
//       }
//    }

//    header('location:admin_products.php');

// }

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

</head>
<body>
   
<?php include '../inc/admin-nav.php'; ?>

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
      <textarea  min="0" name="description" class="box" placeholder="description of event" required></textarea>
      <input type="file" name="image" accept="image/jpg, image/jpeg, image/png" class="box" required>
      <!-- <input type="file" name="image" class="box" required> -->
      <input type="submit" value="add event" name="add_product" class="btn">
   </form>

</section>

<!-- product CRUD section ends -->

<!-- show products  -->

<section class="show-products">

   <div class="box-container">


<?php

while($rows = mysqli_fetch_assoc($results)){
   ?>
      <div class="box">
         <img width=150px height=auto src="<?php echo $rows['IMAGE']; ?>" alt="">
         <div class="name"><?php echo $rows["NAME"]; 
         ?></div>
         <div class="price"><?php echo $rows["DESCRIPTION"]; ?></div>
         <a href="admin_events.php?update=<?php echo $rows['ID']; ?>" class="option-btn">update</a>
         <a href="admin_events.php?delete=<?php echo $rows['ID']; ?>" class="delete-btn" onclick="return confirm('Remove this Event?');">delete</a>
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
      <input type="text" name="update_name" value="<?php echo $fetch_update['NAME']; ?>" class="box" required placeholder="enter event">
     
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

</body>
</html>