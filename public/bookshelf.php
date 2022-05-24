<html>
    <head>
    <title>Book Shelf</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../multimedia/resources/logo/logo.png"/>
    
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"/> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/index.css"/> -->
    <!-- <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
      /> -->

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <!-- custom css file link  -->
    <!-- <link rel="stylesheet" href="../css/style.css" /> -->

    <script src="user.js" defer></script>
    <style>
  .pagination{
   padding:8px 16px;
   border:1px solid #ccc;
   color:#333;
   font-weight:bold;
  }
  </style>

</head>

<body background=./multimedia/resources/banner-bg.jpg>
          <!-- header -->
         
    <?php include("../inc/nav_bar.php");
          include '../lib/searchfunction.php';
          include '../inc/bookslider.php';
    ; ?>


      <!-- custom js file link  -->
  <script src="../js/script.js" defer></script> 

  <!-- <section class="featured" id="featured">

      <div class="swiper featured-slider">
        <div class="swiper-wrapper">
        <?php
        // include '../lib/cart-inc.php';
                foreach($books as $book)
                {
            ?>
          <div class="swiper-slide box">
           
            <div class="icons">
              <a href="cart.php" class="fas fa-heart"></a>
              <a href=../public/desc.php?bookid=<?php 
              echo $book["BookID"] ;
              ?> class="fas fa-eye"></a>
            </div>
            <div class="image">
              <img src="image/
              <?php 
              echo $book["BookID"];
                ?>
                " alt="" />
            </div>
            <div class="content">
              <h3>
                <?php 
              echo $book["Title"];
               ?>
               </h3>

              <div class="price"><?php
               echo "\$".$book["Price"].".00" ;
               ?>
              </div>

              <a href="<?php echo $book["Book"]?>" class="btn">Buy Now</a>
              <a href="?<?php echo 'BookID='.$book["BookID"]?>?<?php echo 'Price='.$book['Price']?>" class="btn">Add to Cart</a>
              </div>
          </div>
          <?php 
            }
            ?>  
          </div>
          </div>
        <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      </div>
        </div>

</section> -->

<div align="center">
    <br />
    <?php
    $page_query= $pdo->prepare(
      "
      SELECT * FROM books ORDER BY BookID DESC
      ");
    $page_query->execute();
    $page_result = $page_query->fetchColumn();
    $total_records = $page_result;
    
    $total_pages = ceil($total_records/$record_per_page);
    $start_loop = $page;
    $difference = $total_pages - $page;
    if($difference <= 5)
    {
     $start_loop = $total_pages - 5;
    }
    $end_loop = $start_loop + 4;
    if($page > 1)
    {
     echo "<a class=pagination href='bookshelf.php?page=1'>First</a>";
     echo "<a class=pagination href='bookshelf.php?page=".($page - 1)."'> << </a>";
    }
    for($i=$start_loop; $i<=$end_loop; $i++)
    {     
     echo "<a class=pagination href='bookshelf.php?page=".$i."'>".$i."</a>";
    }
    if($page <= $end_loop)
    {
     echo "<a class=pagination href='bookshelf.php?page=".($page + 1)."'> >></a>";
     echo "<a class=pagination href='bookshelf.php?page=".$total_pages."'>Last</a>";
    }
    ?>
    </div>
 
<!--         
<div class="loader-container">
      <img src="image/loader-img.gif" alt="" />
</div> -->


<?php include("../inc/footer.php") ?>

</body>

</html>