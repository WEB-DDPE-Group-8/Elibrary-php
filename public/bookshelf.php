<<<<<<< HEAD
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
         
    <?php 
 include("./inc/footer.php") ;

  foreach($books as $book)
  {
        
    ?>
    <section class="featured" id="featured">
  
      <div class="swiper featured-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide box">
            <div class="icons">
              <a href="cart.php" class="fas fa-heart"></a>
              <a href=description.php?bookid=<?php 
              echo $book["BookID"] ;
              ?> class="fas fa-eye"></a>
            </div>
            <div class="image">
              <img src="
              <?php 
              echo $book["Cover"];
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

              
             
             <a href="<?php echo $book["Book"];?>" class="btn">Buy Now</a>
              <a href="?<?php 'echo BookId= '.$book["BookId"] ?>?<?php echo 'Price='.$book['Price']?>" class="btn">Add to Cart</a>
            </div>
          </div>
</div>
</section>
<?php 
}
?>
</div>
</div>  
          
<?php include("./inc/footer.php") ?>

</body>

</html>

<?php 


 
=======
       <?php 
          include '../lib/searchfunction.php';
    ?>

       <html>

       <head>
         <title>Book Shelf</title>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="icon" href="../multimedia/logo.png" type="image/icon type">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
         <link rel="stylesheet" href="../css/sidenav.css">

         <script src="../js/script.js" defer></script>
         <script src="../js/sidenav.js"></script>
         <style>
           .pagination {
             padding: 8px 16px;
             border: 1px solid #ccc;
             color: #333;
             font-weight: bold;
           }
         </style>

       </head>

       <body>


         <?php 
          include("../inc/nav_bar.php");
          
          include '../inc/bookslider.php';
    // ?>
         <div id="navv">
           <span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; Filter By</span>
         </div>
         <div id="mySidenav" class="sidenav">
           <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
           <p>CATEGORIES</p>

           <ul>

             <?php
            $fetch = "SELECT DISTINCT Genre FROM books";
            $genre_show = mysqli_query($db, $fetch);
            while($genres = mysqli_fetch_array($genre_show)){
            
            ?>

             <li><a href="?g=<?php echo $genres[0]?>"><?php echo $genres[0]?></a></li>


             <?php
            }
            ?>
           </ul>
           <p>Published</p>
           <ul>
             <li><a href="?m=30">Past Month</a></li>
             <li><a href="?hy= 180"> Past 6 monthts </a></li>
             <li><a href="?y= 365">Past year</a></li>
             <li><a href="?fy= 1825">Past 5 years</a></li>
           </ul>
         </div>
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

         <!-- custom js file link  -->


         <?php 
include("../inc/footer.php")
 ?>

<!-- 
         <div class="loader-container">
           <img src="image/loader-img.gif" alt="" />
         </div> -->



       </body>

       </html>
>>>>>>> main
