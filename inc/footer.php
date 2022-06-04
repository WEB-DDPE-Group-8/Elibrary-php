    
        <link rel="stylesheet" type="text/css" href="../css/footer.css"/>
        
        <link rel="stylesheet" type="text/css" href="css/footer.css"/>
        <style>
#myBtn:hover
{
    background-color: white;
    color: #27ad60;
    transition: 1s;
}

#myBtn
{
    /* display: none; */
    position: fixed;
    bottom: 10px;
    right: 30px;
    z-index: 99;
    font-size: 26px;
    border:  solid ;
    outline: none;
    background-color: #27ad60;
    color: white;
    cursor: pointer;
    padding: 20px;
    padding-left:30px;
    padding-right:30px ;
    border-radius: 100px;
  }

</style>

        <button onclick="topFunction()" id="myBtn">&#8593;</button>
    <div class="space"></div>
    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>our locations</h3>
          <a href="#"> <i class="fas fa-map-marker-alt"></i> Ethiopia </a>
          <a href="#"> <i class="fas fa-map-marker-alt"></i> africa </a>
          <a href="#"> <i class="fas fa-map-marker-alt"></i> USA </a>
          <a href="#"> <i class="fas fa-map-marker-alt"></i> russia </a>
          <a href="#"> <i class="fas fa-map-marker-alt"></i> france </a>
          <a href="#"> <i class="fas fa-map-marker-alt"></i> japan </a>
        </div>

        <div class="box">
          <h3>quick links</h3>
          <a href="/html/index.php"> <i class="fas fa-arrow-right"></i> home </a>
          <a href="/html/public/bookshelf.php"> <i class="fas fa-arrow-right"></i> BookShelf </a>
          <a href="/html/index.php#featured"> <i class="fas fa-arrow-right"></i> featured </a>
          <a href="/html/index.php#arrivals"> <i class="fas fa-arrow-right"></i> arrivals </a>
          <a href="/html/index.php#reviews"> <i class="fas fa-arrow-right"></i> reviews </a>
          <a href="/html/index.php#blogs"> <i class="fas fa-arrow-right"></i> blogs </a>
        </div>

        <div class="box">
          <h3>extra links</h3>
          <a href="/html/public/profile.php"> <i class="fas fa-arrow-right"></i> account info </a>
          <a href="cart.php"> <i class="fas fa-arrow-right"></i> Wishlist</a>
          <a href="/html/public/privacypolicyonly.php"> <i class="fas fa-arrow-right"></i> privacy policy </a>
          <!-- <a href="#"> <i class="fas fa-arrow-right"></i> payment method </a>
          <a href="#"> <i class="fas fa-arrow-right"></i> our serivces </a> -->
        </div>

        <?php 
          $uri = $_SERVER['REQUEST_URI']; 
          if(str_contains($uri,"index")){
            $impath = "image/worldmap.png";
          }
          else{
            $impath = "../image/worldmap.png";
          }
          ?>

        <div class="box">
          <h3>contact info</h3>
          <a href="#"> <i class="fas fa-phone"></i> +251 19988342</a>
          <a href="#"> <i class="fas fa-phone"></i> +251 19988342 </a>
          <a href="#"> <i class="fas fa-envelope"></i> group8@gmail.com </a>
          
           <img src=<?php echo $impath ?> class="map" alt="" />
        </div>
      </div>

      <!-- <div class="share">
          <a href="#" class="fab fa-facebook-f"></a>
          <a href="#" class="fab fa-twitter"></a>
          <a href="#" class="fab fa-instagram"></a>
          <a href="#" class="fab fa-linkedin"></a>
          <a href="#" class="fab fa-pinterest"></a>
      </div> -->
      
    </section>

    <div class="footer">  
      <div class="credit">
          created by <span>Group 8</span> | 
        </div>
    </div>


    <!-- footer section ends -->

    <!-- loader  -->

    <!-- <div class="loader-container">
      <img src="image/loader-img.gif" alt="" />
    </div> -->

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");
        
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
          if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 500) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }
        
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
        </script>

    <!-- custom js file link  -->
    <!-- <script src="js/script.js"></script> -->