<?php 
include("./inc/nav_bar.php");
include("./config/dbconfig.php");
$query = "SELECT * FROM events";
$results = mysqli_query($db,$query);


 ?> 
<div id="section5" width = 1000px align = center>
    <marquee behavior="" direction="right"><h2> Upcoming Events</h2></marquee>
    <section class="featured" id="featured">
      <h1 class="heading"><span>Events</span></h1>

      <div class="swiper featured-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide box">
            <div class="icons">
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
              <!-- <img src="image/bookreading.jpg" alt="" /> -->
              <p> <?php 
                   while($rows = mysqli_fetch_assoc($results)){
                      ?>
                      <?php   echo $rows['EVENT-IMAGE']; ?>
                     
                     
             </p>
            </div>
            <div class="content">
              <h3> 
                      <?php   echo $rows['EVENT-NAME']; ?>
                     
                      <?php       }
                    ?></h3>
              <a href="#" class="btn">Read more</a>
            </div>
          </div>

          
          <div class="swiper-slide box">
            <div class="icons">
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
              <img src="image/book-2.png" alt="" />
            </div>
            <div class="content">
              <h3>featured books</h3>
              <a href="#" class="btn">add to cart</a>
            </div>
          </div>
</div>
</section>
</div>

<?php 
include("./inc/footer.php");
 ?> 