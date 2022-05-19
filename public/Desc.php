<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Product Card/Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../css/desc.css" />
    <link rel="stylesheet" href="../css/style.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
      crossorigin="anonymous"
    />
  </head>
  <body>
    <?php include("../inc/nav_bar.php") ?>

    <div class="card-wrapper">
      <div class="card">
        <!-- card left -->
        <div class="product-imgs">
          <div class="img-display">
            <div class="img-showcase">
              <img src="shoes_images/shoe_1.jpg" alt="shoe image" />
              
            </div>
          </div>
          <!-- <div class="img-select">
            <div class="img-item">
              <a href="#" data-id="1">
                <!-- <img src="shoes_images/shoe_1.jpg" alt="shoe image" /> -->
              </a>
            </div>
            <div class="img-item">
              <a href="#" data-id="2">
                <!-- <img src="shoes_images/shoe_2.jpg" alt="shoe image" /> -->
              </a>
            </div>
            <div class="img-item">
              <a href="#" data-id="3">
                <!-- <img src="shoes_images/shoe_3.jpg" alt="shoe image" /> -->
              </a>
            </div>
            <div class="img-item">
              <a href="#" data-id="4">
                <!-- <img src="shoes_images/shoe_4.jpg" alt="shoe image" /> -->
              </a>
            </div>
          </div>
        </div> -->
        <!-- card right -->
        <?php  
   
          include("../config/dbconfig.php");
 
         if( isset($_GET["bookid"]))
         {
            $Id = $_GET["bookid"];
            $query = $db->query("Select * from books where BookID= $Id ");
                    
        if($query->num_rows > 0)
        {
          $GLOBALS['row'] = $query->fetch_assoc()
         ?>
        <div class="product-content">
          <h2 class="product-title"><?php echo $row["Title"] ?> </h2>
          <div class="product-rating">
            <i class="fas fa-star">Likes</i>
            <i class="fas fa-star">DisLikes</i>
            
          </div>

          <div class="product-price">
            <p class="new-price">Price: <span>$<?php echo $row["Price"] ?></span></p>
          </div>

          <div class="product-detail">
            <h2>Description:</h2>
            <?php echo $row["Description"] ?>
            <ul>
              <li>Title: <span><?php echo $row["Title"] ?> </span></li>
              <li>Author: <span><?php echo $row["Author"] ?> </span></li>
              <li>Language: <span><?php echo $row["Language"] ?></span></li>
              <li>Genre: <span><?php echo $row["Genre"] ?></span></li>
            </ul>
            <?php
        }
        else
        {
?>
<P> No book Found  </P>
<?php
        }
?>
<?php
        }
        else{
?>
<p> no book id </p>
<?php
        }
?>
          </div>

          <div class="purchase-info">
            <button type="button" class="btn">
              Add to Cart <i class="fas fa-shopping-cart"></i>
            </button>
          </div>

          <div class="social-links">
            <p>Share At:</p>
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#">
              <i class="fab fa-whatsapp"></i>
            </a>
            <a href="#">
              <i class="fab fa-pinterest"></i>
            </a>
          </div>
        </div>
      </div>
    </div>


    <?php 
    include "comments.php";
    include("../inc/footer.php") ?>
    <script src="../js/desc.js"></script>

  </body>
</html>
