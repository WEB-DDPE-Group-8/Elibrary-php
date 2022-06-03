<?php

include '../config/dbconfig.php';


$query = "SELECT * FROM events";
$results = mysqli_query($db,$query);

if(isset($_POST['add_product'])){
   //if(!empty($_POST['name'] && !empty($_POST['description'] && !empty($_POST['image'])))){
      $name = $_POST['name'];
      $description = $_POST['description'] ;
      $image = $_POST['image'];


      $query = "INSERT INTO events(NAME, DESCRIPTION, IMAGE) VALUES ('$name', '$description', '$image')";
      $run = mysqli_query($db, $query);

      if($run){
         echo "Event add";
      }
      else{
         echo "form not submitted";
      }
}


if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];

   mysqli_query($db, "DELETE FROM `events` WHERE id = '$delete_id'") or die('query failed');
   header('location:admin_products.php');
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

</head>
<body>
   
<?php include '../inc/admin-nav.php'; ?>

<!-- product CRUD section starts  -->

<section class="add-products">

   <h1 class="title">shop products</h1>

   <form action="" method="post" enctype="multipart/form-data">
      <h3>add product</h3>
      <input type="text" name="name" class="box" placeholder="add event name" required>
      <input type="text" min="0" name="description" class="box" placeholder="description of event" required>
      <!-- <input type="file" name="image" accept="image/jpg, image/jpeg, image/png" class="box" required> -->
      <input type="text" name="image" class="box" required>
      <input type="submit" value="add product" name="add_product" class="btn">
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
         <!-- <img src="uploaded_img/<?php// echo $fetch_products['image']; ?>" alt=""> -->
         <div class="name"><?php echo $rows["NAME"]; 
         
         ?></div>
       
         <div class="price"><?php echo $rows["DESCRIPTION"]; ?></div>
         <a href="admin_products.php?update=<?php echo $rows['ID']; ?>" class="option-btn">update</a>
         <a href="admin_products.php?delete=<?php echo $rows['ID']; ?>" class="delete-btn" onclick="return confirm('delete this product?');">delete</a>
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
         $update_query = mysqli_query($db, "SELECT * FROM 'events' WHERE id = '$update_id'") or die('query failed');
         if(mysqli_num_rows($update_query) > 0){
            while($fetch_update = mysqli_fetch_assoc($update_query)){
   ?>
   <form action="" method="post" enctype="multipart/form-data">
      <input type="hidden" name="update_p_id" value="<?php echo $fetch_update['id']; ?>">
      <input type="hidden" name="update_old_image" value="<?php echo $fetch_update['image']; ?>">
      <img src="uploaded_img/<?php echo $fetch_update['image']; ?>" alt="">
      <input type="text" name="update_name" value="<?php echo $fetch_update['name']; ?>" class="box" required placeholder="enter product name">
      <input type="number" name="update_price" value="<?php echo $fetch_update['price']; ?>" min="0" class="box" required placeholder="enter product price">
      <input type="file" class="box" name="update_image" accept="image/jpg, image/jpeg, image/png">
      <input type="submit" value="update" name="update_product" class="btn">
      <input type="reset" value="cancel" id="close-update" class="option-btn">
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
<script src="js/admin_script.js"></script>

</body>
</html>