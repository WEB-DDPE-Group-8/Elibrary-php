<?php 

include 'config/dbconfig.php';
$sql="SELECT * from event where Status like '%active%' ";
$events = mysqli_query($db,$sql); 
?>

  <section class="blogs" id="blogs">
    <h1 class="heading"><span>our events</span></h1>

    <div class="swiper blogs-slider">
      <div class="swiper-wrapper">
        <?php  
foreach($events as $event):
        ?>
        <div class="swiper-slide box">
          <div class="image">
            <!-- <p></p> -->
            <img src="/html/<?php  echo "../multimedia/events/".basename($event["IMAGE"])  ?>" alt="" />
          </div>
          <div class="content">
            <h3><?php  echo $event["NAME"]  ?></h3>
            <p>
              <?php  echo $event["DESCRIPTION"]  ?>
            </p>
            <a href="../public/events.php?q=<?php  echo $event["NAME"]  ?>" class="btn">read more</a>
          </div>
        </div>
        <?php  
endforeach
?>
      </div>
    </div>
  </section>