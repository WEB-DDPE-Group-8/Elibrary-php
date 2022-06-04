

<?php
if(!$_SESSION["loggedin"] === true)
{
header("location:login.php");
}
?>
<?php

@include '../config/dbconfig.php';

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($db, "DELETE FROM cart WHERE BookID = '$remove_id'");
   header('location:cart.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($db, "DELETE  FROM cart WHERE UserID = $_SESSION[UserID]");
   header('location:cart.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="../multimedia/resources/logo/logo.png" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/carrt.css" async />
    <link rel="stylesheet" type="text/css" href="css/footer.css" />
    <link rel="stylesheet" type="text/css" href="css/index.css" />

    <script src="../js/user.js"></script>
    <script src="../js/addtocart.js"></script>

    <title>Cart</title>
  </head>

  <body background="resources/banner-bg.jpg">
    <!-- header -->
    <?php include("../inc/nav_bar.php");?>
    
    <div id="outer" class="shop-items"></div>

    <section class="container content-section">
      <h2 class="section-header">CART</h2>
  <table>
     <thead>
      <div class="cart-row">
        <span class="btn" class="cart-item cart-header cart-column">ITEM</span>
         <span class="btn" class="cart-price cart-header cart-column">price</span>
         <span class="btn" class="cart-price cart-header cart-column">DELETE</span>
         
       </thead>  
<tbody>
<div class="cart-row">
<?php 

$select_cart = mysqli_query($db, "SELECT * FROM cart WHERE UserID =$_SESSION[UserID]");
$grand_total = 0;
if(mysqli_num_rows($select_cart) > 0){
   while($fetch_cart = mysqli_fetch_assoc($select_cart)){
?>

<tr>
   <td class="btn"><?php echo $fetch_cart['BookID']; ?></td>
   <td class="btn">$ <?php echo number_format($fetch_cart['Price']); ?></td>
 
   <td><a class="btn" href="cart.php?remove=<?php echo $fetch_cart['BookID']; ?>" onclick="return confirm('remove item from cart?')" class="delete-btn"> <i class="fas fa-trash"></i> Remove</a></td>
</tr>
<?php
  $grand_total += $fetch_cart['Price'];  
   };
};
?>
<tr class="table-bottom">
   <td><a class="btn" href="../index.php" class="option-btn" style="margin-top: 0;">continue shopping</a></td>
   <td class="btn" colspan="3">grand total</td>
   <td class="btn">$<?php echo $grand_total; ?>/-</td>
   <td><a class="btn" href="cart.php?" onclick="return confirm('are you sure you want to delete all?');" class="delete-btn"> <i class="fas fa-trash"></i> Remove all </a></td>
</tr>
</div>
</tbody>
       </div>     
		    </table>
      <a href="index.php" <?= ($grand_total > 1)?'':'disabled'; ?>>
   
       <button class="btn btn-primary btn-purchase" type="button">
        PURCHASE
      </button>
      </a>
    </section>

    <script src="../js/cart.js" defer></script>
    <?php include("../inc/footer.php") ?>
  </body>
</html>
