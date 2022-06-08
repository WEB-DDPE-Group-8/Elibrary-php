<script src="../js/script.js" defer></script>
<!-- trial -->
<style>
  .title {
    display: none;
    width: 100px;
    height: auto;
    position: relative;
    /* background:green; */
  }

  img:hover+.title {
    /* content: attr(data-title); */
    display: block;
    position: absolute;

    transform: translateY(-50px);
  }
</style>

<section class="featured" id="featured">
  <div class="swiper featured-slider">
    <div class="swiper-wrapper">
      <?php

    $imgpath = "../image/";
    $desc = "../public/";
   


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


          <p class="btn">
            <?php
            echo $book["Status"];
        ?>
          </p>


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