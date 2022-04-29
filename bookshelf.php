<?php?>
<html>
    <head>
    <title>Book Shelf</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./multimedia/resources/logo/logo.png"/>
    <script src="user.js" defer></script>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/bookshelf.css"/>
     <!-- <link rel="stylesheet" type="text/css" href="css/footer.css"/> -->
    <link rel="stylesheet" type="text/css" href="css/index.css"/>

    <script src="addtocart.js" defer></script>

    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
      href="css/min.css"
    />

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css" />

</head>

<body background=./multimedia/resources/banner-bg.jpg>
          <!-- header -->


         
    <?php include("./inc/nav_bar.php")  ?>   

<div id="gallery">
    <div>    
    </div>

    <?php 
include("./config/dbconfig.php");

$query = $db->query("Select * from books");

if($query->num_rows > 0)
{
    while($row = $query->fetch_assoc())
    {
        $imageURL = 'uploads/'.$row["Cover"];
        ?>

    <section class="featured" id="featured">
  
      <div class="swiper featured-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide box">
            <div class="icons">
              <a href="cart.php" class="fas fa-heart"></a>
              <a href=description.php?bookid=<?php echo $row["BookID"] ?> class="fas fa-eye"></a>
            </div>
            <div class="image">
              <img src="<?php echo $imageURL; ?>" alt="" />
            </div>
            <div class="content">
              <h3><?php echo $row["Title"] ?></h3>
              <div class="price"><?php echo "\$".$row["Price"].".00" ?><span>$20.99</span>
              </div>
              <a href="#" class="btn">Buy Now</a>
              <a href="#" class="btn">Add to Cart</a>
            </div>
          </div>
</div>
</section>
<?php 
}//end of the while loop -->
}//end if the if statement
else {
?>
 <p>"NO images found..."</p>
 <?php
 }
?>

      <div>
          
      </div>
        </div>
</div>  
          
<?php include("./inc/footer.php") ?>

</body>

</html>