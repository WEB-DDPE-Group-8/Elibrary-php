<script src="../js/script.js" defer></script>
<!-- trial -->
<style>
  .title
  {
    display:none;
    width:100px;
    height:auto;
    position:relative;
    /* background:green; */
  }
 img:hover +  .title {
  /* content: attr(data-title); */
  display:block;
  position: absolute;

  transform: translateY(-50px);
}
  </style>


<section class="featured" id="featured">
 <!-- <?php var_dump($books) ?> -->
    <div class="swiper featured-slider">
       <div class="swiper-wrapper">
      <?php
      $uri = $_SERVER['REQUEST_URI']; 
      $imgpath = "";
      $desc = "";

       if(str_contains($uri,"index"))
       {
          $imgpath = "image/";
          $desc = "public/";
       }
       else if (str_contains($uri,"bookshelf"))
       {
        $imgpath = "../image/";
        $desc = "../public/";
       }
       else if (str_contains($uri,"profile"))
       {
        $imgpath = "../image/";
       }

      ?>
    
    <?php
              foreach($books as $book)
              {
          ?>
        <div class="swiper-slide box">
        <?php 
          if(!str_contains($uri,"profile") )
          {
        ?>
          <div class="icons">
            <a href="cart.php" class="fas fa-heart"></a>
            <a href="<?php echo $desc.'desc.php'?>?bookid=<?php 
            echo $book["BookID"]?>" class="fas fa-eye">
            </a>
          </div>
          <?php
              }
          ?>
          <div class="image">
            <img src="<?php echo($imgpath).$book["BookID"]?>.png" alt="Cover page missing" />
            <div class="title" ><?php echo $book["Description"] ?> </div>
          </div>
          <div class="content">
            <h3>
              <?php 
            echo $book["Title"];
            ?>
            </h3>

            <div class="price"><?php
            echo "\$".$book["Price"].".00";
            ?>
            </div>
                    <!--admin exclusive -->
            <?php
              if(str_contains($uri,"profile") && $_SESSION["role"]=="Admin"){
                include '../lib/taskhandler.php' ;
            ?>
                <a href="<?php echo $book["Book"]?>" class="btn">Get Book</a>
                <a href="?approvebook=<?php echo $book["BookID"]?>" class="btn">Approve</a>
                <a href="?rejectbook=<?php echo $book["BookID"]?>" class="btn">Reject</a>
                  
            <?php
            } 
            else{
              ?>
              <a href="<?php echo $book["Book"]?>" class="btn">Buy Now</a>
              <a href="?<?php echo 'BookID='.$book["BookID"]?>?<?php echo 'Price='.$book['Price']?>" class="btn">Add to Cart</a>
            <?php  
            }
            ?>
            </div>
        </div>
        <?php 
          }
          ?>  
        </div>
    <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
  </div>
  </div>
  </div>
</section>