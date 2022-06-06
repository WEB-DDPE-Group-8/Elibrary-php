<section class="featured" id="featured">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script >
$(document).ready(function(){
  $(".cart").click(function (){
    var price = $(this).data("price");
    var id = $(this).data("id");
    console.log(price);

    $.ajax({
      url:'/html/lib/cartadder.php',
      type:'GET',
      data:{addtocart:true,price:price,id:id},
      success:function(status)
      {
        alert(status);
      }
    })
  })
})
</script>
<div class="swiper featured-slider">
   <div class="swiper-wrapper">
  <?php

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

foreach($books as $book)
          {
      ?>
    <div class="swiper-slide box">
    <?php 
      if(!str_contains($uri,"profile") )
      {
    ?>
      <div class="icons">
        <a href="<?php echo $desc.'desc.php'?>?bookid=<?php 
        echo $book["BookID"]?>" class="fas fa-eye">
        </a>
      </div>
      <?php
          }
      ?>
      <div class="image">
        <?php
        if($book["BookID"]<=43){
        ?>
        <img src="<?php echo($imgpath).$book["BookID"]?>.png" alt="Cover page" />
        <?php
        }else{
        ?>
        <img src="<?php echo $book["Cover"]?>" alt="Cover page" />
        <?php
        }
        ?>
      </div>

      <div class="content">
        <h3>
          <?php 
        echo $book["Title"];
        ?>
        </h3>

        <?php
          if(str_contains($uri,"profile") && $_SESSION["role"]=="Admin"){
            include '../lib/taskhandler.php' ;
        ?>
            <a  href="<?php echo $book["Book"]?>" class="btn">Get Book</a>
            <a href="?approvebook=<?php echo $book["BookID"]?>" class="btn">Approve</a>
            <a href="?rejectbook=<?php echo $book["BookID"]?>" class="btn">Reject</a>
              
        <?php
        } 
        else{
          ?>
          <a href="<?php
          if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
           echo $book["Book"];
           else{
             if (str_contains($uri,"index"))
           echo 'public/login.php';
           else
           echo '../public/login.php';
           }
           ?>" class="btn">Get Book</a>
          <button class="btn cart" data-id="<?php echo $book["BookID"]?>" data-price="<?php echo $book['Price']?>" >Add to WishList</button>
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
<!-- </div>
</div> -->
</section>