<?php
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>A2z Library</title>

    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <!-- custom css file link  -->
    <!-- <link rel="stylesheet" href="style.css" /> -->
    <link rel="stylesheet" href="css/style.css" />
    <script src="./js/script.js" defer></script> 
    <!-- <script src="script.js" defer></script>   -->
    
    <!-- <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script> -->


  </head>
  <body>
    <!-- home section starts  -->
    <?php

    include("inc/nav_bar.php") ;
    // include("nav_bar.php") ;
?>
<!-- custom js file link  -->

    <section class="home" id="home">
      <div class="row">
        <div class="content">
          <h3>All new books</h3>
          <p>
            check out all our new arrivals and new books that have 
            been uploaded by passionate writers from all over the world
          </p>
          <a href="public/bookshelf.php" class="btn">Discover</a>
        </div>

        <div class="swiper books-slider">
          <div class="swiper-wrapper">
            <a href="#" class="swiper-slide"
              ><img src="image/1.png" alt=""
            /></a>
            <a href="#" class="swiper-slide"
              ><img src="image/2.png" alt=""
            /></a>
            <a href="#" class="swiper-slide"
              ><img src="image/3.png" alt=""
            /></a>
            <a href="#" class="swiper-slide"
              ><img src="image/4.png" alt=""
            /></a>
            <a href="#" class="swiper-slide"
              ><img src="image/5.png" alt=""
            /></a>
            <a href="#" class="swiper-slide"
              ><img src="image/6.png" alt=""
            /></a>
          </div>
          <img src="image/stand.png" class="stand" alt="" />
        </div>
      </div>
    </section>

    <!-- home section ense  -->

    <!-- icons section starts  -->

    <section class="icons-container">
      <div class="icons">
        <i class="fas fa-shipping-fast"></i>
        <div class="content">
          <h3>Fast Downloads</h3>
          <p>Lightning fast Downloads</p>
        </div>
      </div>

      <div class="icons">
        <i class="fas fa-lock"></i>
        <div class="content">
          <h3>secure downloads</h3>
          <p>100 secure documents</p>
        </div>
      </div>

      <div class="icons">
        <i class="fas fa-redo-alt"></i>
        <div class="content">
          <h3>Persistent Wishlist</h3>
          <p>Lifetime storage</p>
        </div>
      </div>

      <div class="icons">
        <i class="fas fa-headset"></i>
        <div class="content">
          <h3>24/7 support</h3>
          <p>contact us anytime</p>
        </div>
      </div>
    </section>

    <!-- icons section ends -->

    <!-- featured section starts  -->

    <!-- <section class="featured" id="featured">
      <h1 class="heading"><span>featured books</span></h1>

      <div class="swiper featured-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide box">
            <div class="icons">
              <a href="#" class="fas fa-search"></a>
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
              <img src="image/1.png" alt="" />
            </div>
            <div class="content">
              <h3>featured books</h3>
              <div class="price">$15.99 <span>$20.99</span></div>
              <a href="#" class="btn">add to cart</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <div class="icons">
              <a href="#" class="fas fa-search"></a>
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
              <img src="image/2.png" alt="" />
            </div>
            <div class="content">
              <h3>featured books</h3>
              <div class="price">$15.99 <span>$20.99</span></div>
              <a href="#" class="btn">add to cart</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <div class="icons">
              <a href="#" class="fas fa-search"></a>
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
              <img src="image/3.png" alt="" />
            </div>
            <div class="content">
              <h3>featured books</h3>
              <div class="price">$15.99 <span>$20.99</span></div>
              <a href="#" class="btn">add to cart</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <div class="icons">
              <a href="#" class="fas fa-search"></a>
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
              <img src="image/4.png" alt="" />
            </div>
            <div class="content">
              <h3>featured books</h3>
              <div class="price">$15.99 <span>$20.99</span></div>
              <a href="#" class="btn">add to cart</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <div class="icons">
              <a href="#" class="fas fa-search"></a>
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
              <img src="image/5.png" alt="" />
            </div>
            <div class="content">
              <h3>featured books</h3>
              <div class="price">$15.99 <span>$20.99</span></div>
              <a href="#" class="btn">add to cart</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <div class="icons">
              <a href="#" class="fas fa-search"></a>
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
              <img src="image/6.png" alt="" />
            </div>
            <div class="content">
              <h3>featured books</h3>
              <div class="price">$15.99 <span>$20.99</span></div>
              <a href="#" class="btn">add to cart</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <div class="icons">
              <a href="#" class="fas fa-search"></a>
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
              <img src="image/7.png" alt="" />
            </div>
            <div class="content">
              <h3>featured books</h3>
              <div class="price">$15.99 <span>$20.99</span></div>
              <a href="#" class="btn">add to cart</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <div class="icons">
              <a href="#" class="fas fa-search"></a>
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
              <img src="image/8.png" alt="" />
            </div>
            <div class="content">
              <h3>featured books</h3>
              <div class="price">$15.99 <span>$20.99</span></div>
              <a href="#" class="btn">add to cart</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <div class="icons">
              <a href="#" class="fas fa-search"></a>
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
              <img src="image/9.png" alt="" />
            </div>
            <div class="content">
              <h3>featured books</h3>
              <div class="price">$15.99 <span>$20.99</span></div>
              <a href="#" class="btn">add to cart</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <div class="icons">
              <a href="#" class="fas fa-search"></a>
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
              <img src="./image/10.png" alt="" />
            </div>
            <div class="content">
              <h3>featured books</h3>
              <div class="price">$15.99 <span>$20.99</span></div>
              <a href="#" class="btn">add to cart</a>
            </div>
          </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </section> -->

        <?php  
        include 'lib/featured.php';
        include 'inc/bookslider.php';
        ?>

    <!-- featured section ends -->

    <!-- newsletter section starts -->

    <section class="newsletter">
      <form action="">
        <h3>subscribe for latest updates</h3>
        <input
          type="email"
          name=""
          placeholder="enter your email"
          id=""
          class="box"
        />
        <input type="submit" value="subscribe" class="btn" />
      </form>
    </section>

    <!-- newsletter section ends -->

    <!-- arrivals section starts  -->



          <?php
            include 'lib/newarrivals.php';
            include 'inc/newarrivalsection.php';
          ?>


    <!-- arrivals section ends -->

    <!-- deal section starts  -->

    <section class="deal">
      <div class="content">
        <h3>Best of all</h3>
        <h1>Our content</h1>
        <p>
         Generated by our users promoting small 
         writers whose content are made  Compatoble 
         with any device and enabling other to have the experience of 
         being publishers at the same time
        </p>
        <a href="public/bookshelf.php" class="btn">Discover</a>
      </div>

      <div class="image">
        <img src="image/deal-img.jpg" alt="" />
      </div>
    </section>

    <!-- deal section ends -->

    <!-- reviews section starts  -->

    <section class="reviews" id="reviews">
      <h1 class="heading"><span>client's reviews</span></h1>

      <div class="swiper reviews-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide box">
            <img src="image/pic-1.png" alt="" />
            <h3>john deo</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique
              facere hic.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="image/pic-2.png" alt="" />
            <h3>john deo</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique
              facere hic.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="image/pic-3.png" alt="" />
            <h3>john deo</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique
              facere hic.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
          </div>
          <div class="swiper-slide box">
            <img src="image/pic-4.png" alt="" />
            <h3>john deo</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique
              facere hic.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="image/pic-5.png" alt="" />
            <h3>john deo</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique
              facere hic.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="image/pic-6.png" alt="" />
            <h3>john deo</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique
              facere hic.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- reviews section ends -->

    <!-- blogs section starts  -->
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
              <img src="/html/<?php  echo "multimedia/events/".basename($event["IMAGE"])  ?>" alt="" />
            </div>
            <div class="content">
              <h3><?php  echo $event["NAME"]  ?></h3>
              <p>
              <?php  echo $event["DESCRIPTION"]  ?>
              </p>
              <a href="public/events.php?q=<?php  echo $event["NAME"]  ?>" class="btn">read more</a>
            </div>
          </div>
          <?php  
endforeach
?>
        </div>
      </div>
    </section>


    <!-- blogs section ends -->

    <!-- loader  -->

    <!-- <div class="loader-container">
      <img src="image/loader-img.gif" alt="" />
    </div>  -->
  
    <?php
     include("./inc/footer.php") ;
    ?>
<!-- <link rel="stylesheet" href="./css/main.css" /> -->
     </body>
     </html>


