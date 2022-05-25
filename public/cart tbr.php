<?php
if(isset($_SESSION["username"]))
{
header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="../multimedia/resources/logo/logo.png" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/carrt.css" async />
    <link rel="stylesheet" type="text/css" href="../css/index.css" />

    <script src="../js/user.js"></script>
    <script src="../js/addtocart.js"></script>

    <title>Cart</title>
  </head>

  <body background="resources/banner-bg.jpg">
    <!-- header -->
    <?php include("../inc/nav_bar.php") ?>
    
    <div id="outer" class="shop-items"></div>

    <section class="container content-section">
      <h2 class="section-header">CART</h2>
      <div class="cart-row">
        <span class="cart-item cart-header cart-column">ITEM</span>
        <span class="cart-price cart-header cart-column">PRICE</span>
      </div>
      <div class="cart-items"></div>
      <div class="cart-total">
        <strong class="cart-total-title">Total</strong>
        <span class="cart-total-price"> ETB 0</span>
      </div>

      <button class="btn btn-primary btn-purchase" type="button">
        PURCHASE
      </button>
    </section>
    <button class="btn" onclick="clean()">Empty my cart</button>
    
    <?php include("../inc/footer.php") ?>

    <script src="cart.js" defer></script>
  </body>
</html>
<?php?>