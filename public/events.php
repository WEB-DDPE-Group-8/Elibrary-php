<<<<<<< HEAD
<?php 
include("./inc/nav_bar.php");
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
              <img src="image/bookreading.jpg" alt="" />
            </div>
            <div class="content">
              <h3>book reading event</h3>
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
=======
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../multimedia/logo.png" type="image/icon type">
  <title>Document</title>
</head>

<body>
  <?php 
include '../config/dbconfig.php';
include("../inc/nav_bar.php") ;
if(isset($_GET['q']))
{
  $events = $_GET['q'];
  $sql = "SELECT * FROM `event` WHERE NAME='$events' ";
  $ev = mysqli_query($db,$sql);
  $event = mysqli_fetch_assoc($ev);
}
 ?>
  <center>
    <img src="<?php  echo $event["IMAGE"]  ?>" alt="event picture" srcset="">

    <h1> <u><?php  echo $event["NAME"]  ?> </u></h1>
  </center>

  <p> <?php  echo $event["DESCRIPTION"]  ?></p>
  <?php 
include("../inc/footer.php");
 ?>
</body>

</html>
>>>>>>> main
