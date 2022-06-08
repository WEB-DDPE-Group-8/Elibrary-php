<section class="arrivals" id="arrivals">
  <h1 class="heading"><span>new arrivals</span></h1>

  <div class="swiper arrivals-slider">
    <div class="swiper-wrapper">

      <?php
      foreach($newarrivals as $newarrival){
          ?>
      <a href="public/desc.php?bookid=<?php echo $newarrival['BookID'] ?>" class="swiper-slide box">
        <div class="image">
          <?php
              if($newarrival["BookID"]<=43){
        ?>
          <img src="image/<?php echo $newarrival['BookID']?>.png" alt="Cover page" />
          <?php
        }else{
        ?>

          <img src="<?php 
         $newarrival['Cover']= substr($newarrival['Cover'], 3);
        echo $newarrival['Cover']
        
        ?>" alt="Covert page" />

          <?php
        }
        ?>

        </div>
        <div class="content">
          <h3><?php echo $newarrival['Title']?></h3>
          <div class="stars">
            <i class="fas fa-thumbs-up"> <?php echo number_format($newarrival['Likes'])?></i>
            <i class="fas fa-thumbs-down"><?php echo number_format($newarrival['Dislikes'])?></i>

          </div>
        </div>
      </a>
      <?php } ?>

    </div>
  </div>
</section>