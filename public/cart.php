<?php
// include '../inc/nav_bar.php';
?>

<link rel="stylesheet" href="../css/cart final.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" defer></script> 



<?php
// if(isset($_SESSION["username"]))
// {
// header("location:login.php");
// }

// ?>
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
    <?php include("../inc/nav_bar.php");
        //   include ("../config/dbconfig.php");
    ?>
 <!-- final cart -->
<?php 

$select_cart = mysqli_query($db, "SELECT * FROM cart WHERE UserID =$_SESSION[UserID]");
$grand_total = 0;
?>

 <div class="card">
            <div class="row">
                <div class="col-md-8 cart">
                    <div class="title">
                        <div class="row">
                            <div class="col"><h4><b>Shopping Cart</b></h4></div>
                            <div class="col align-self-center text-right text-muted"><p><?php echo mysqli_num_rows($select_cart)?> Items<p></div>
                        </div>
                    </div> 
                    
<?php 
if(mysqli_num_rows($select_cart) > 0){
   while($fetch_cart = mysqli_fetch_assoc($select_cart)){
?>
                    <div class="row border-top border-bottom">
                        <div class="row main align-items-center">
                            <div class="col-2"><img class="img-fluid" src='../image/<?php echo $fetch_cart['BookID']; ?>.png'></div>
                            <div class="col">
                                <div class="row text-muted"><?php echo $fetch_cart['BookID']; ?></div>
                                <div class="row"><?php echo $fetch_cart['BookID']; ?></div>
                            </div>
                            <div class="col">
                                <a class="btn" href="">Buy </a>
                            </div>
                            <div class="col"> &dollar; <?php echo number_format($fetch_cart['Price']); ?> <span class="close" style="color:red"> <a  href="cart.php?remove=<?php echo $fetch_cart['BookID']; ?>" onclick="return confirm('remove item from cart?')" class="delete-btn" > <i class="fas fa-trash" style="color:red"></i></a></span></div>
                        </div>
                    </div>
<?php
$grand_total += $fetch_cart['Price'];  
   }}
?>
                </div>
                <div class="col-md-4 summary">
                    <div><h5><b>Summary</b></h5></div>
                    <hr>
                    <div class="row">
                        <div class="col" style="padding-left:0;">ITEMS 3</div>
                        <div class="col text-right">&dollar;<?php echo $grand_total; ?></div>
                    </div>
                    <form>
                      
                        <p>GIVE CODE</p>
                        <input id="code" placeholder="Enter your code">
                    </form>
                    <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                        <div class="col">TOTAL PRICE</div>
                        <div class="col text-right">&dollar;<?php echo $grand_total; ?></div>
                    </div>
                    <button class="btn">CHECKOUT</button>
                </div>
            </div>
            
        </div>

<!-- final cart -->
    <?php include("../inc/footer.php") ?>
  </body>
</html>



    
        <!-- <?php
// include '../inc/footer.php'
        ?> -->