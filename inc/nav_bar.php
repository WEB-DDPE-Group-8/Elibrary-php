<!-- 
<header>

    <div class="nav">

        <div> <a href="#"> <br><img src="./multimedia/resources/logo/logoname2.png" alt="Book icon" width=40x height="auto"></a> </div>

        <div> <a href="index.php"><img src="./multimedia/resources/hm.png"  width= 40px height="auto" /><br>Home</a> </div>
        <div> <a href="index.php#section2">&nbsp;<img src="./multimedia/resources/feture.png"  width= 40px height="auto" /><br>Featured</a></div>
        <div> <a href="bookshelf.php">&nbsp;&nbsp&nbsp;<img src="./multimedia/resources/cat.png"  width= 40px height="auto" /> <br>Book Shelf</a></div>
        <div> <a href="index.php#section4">&nbsp;&nbsp;&nbsp;<img src="./multimedia/resources/icons/3061548-200.png"  width=40px height="auto" /> <br>Reviews</a></div>
        <div> <a href="index.php#section5">&nbsp;&nbsp;<img src="./multimedia/resources/Events.png"  width= 36px height="auto" /> <br>Events</a></div>
        <div> <a href=
<?php

// if(isset($_SESSION['username']))   
//         echo "cart.php";
// else echo "login.php";
?>
> <img src="./multimedia/resources/icons/cart.jfif.png" alt="Cart" width= 40px > <br>Cart  </a></div>
        <div> <a href="profile.php"><img src="./multimedia/resources/icons/person.jfif.png" alt="User's picture" width= 40px height=auto><br><span id="usrname">
        <?php 

// if(isset($_SESSION['username']))   
//         echo $_SESSION['username'];
// else echo "@user"
        ?> 
        <a>
    </div>    
        </header> -->

            <!-- header section starts  -->

            
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

    <header class="header">
      <div class="header-1">
        <a href="#" class="logo"> <i class="fas fa-book"></i> Book Store </a>

        <form action="" class="search-form">
          <input
            type="search"
            name=""
            placeholder="search here..."
            id="search-box"
          />
          <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="icons">
          <div id="search-btn" class="fas fa-search"></div>

          <a href=
"<?php
session_start();
if(isset($_SESSION['username'])) 
{echo "cart.php";}
else{echo "login.php";}
?>"
class="fas fa-heart"></a>

          <a href=
          "<?php
//session_start();
if(isset($_SESSION['username'])) 
{echo "cart.php";}
else{echo "login.php";}
?> "
class="fas fa-shopping-cart"> <br>
</a>
          <div id="login-btn" class="fas fa-user">
            <br> 
          </div>
          <?php 
            if(isset($_SESSION["username"]))
            echo $_SESSION["username"] ;?>
        </div>
      </div>

      <div class="header-2">
        <nav class="navbar">
          <a href="index.php">home</a>
          <a href="bookshelf.php">featured</a>
          <a href="#arrivals">arrivals</a>
          <a href="#reviews">reviews</a>
          <a href="#blogs">blogs</a>
          <a href="report.php">Statistics</a>
        </nav>
      </div>
    </header>

    <!-- header section ends -->

    <!-- bottom navbar  -->

    <nav class="bottom-navbar">
      <a href="index.php" class="fas fa-home"></a>
      <a href="bookshelf.php" class="fas fa-list"></a>
      <a href="#arrivals" class="fas fa-tags"></a>
      <a href="#reviews" class="fas fa-comments"></a>
      <a href="#blogs" class="fas fa-blog"></a>
    </nav>

    <!-- login form  -->

    <div class="login-form-container">
      <div id="close-login-btn" class="fas fa-times"></div>

      <form action="./lib/db.php" method="POST">
        <h3>sign in</h3>
        <span>username</span>
        <input
          type="text"
          name="cred"
          class="box"
          placeholder="enter your email"
          id=""
        />
        <span>password</span>
        <input
          type="password"
          name="pass"
          class="box"
          placeholder="enter your password"
          id=""
        />
        <div class="checkbox">
          <input type="checkbox" name="" id="remember-me" />
          <label for="remember-me"> remember me</label>
        </div>
        <input type="submit" value="sign in" name="log_user" class="btn" />
        <p>forget password ? <a href="#">click here</a></p>
        <p id="register">don't have an account ?
          <!-- <button id= "reg-btn"> click here to register</button> -->
           <a href="regadmin.php">create one</a></p>
      </form>
    </div>

    <!-- register form -->
    <div class="registration-form-container">
      <div id="close-login-btn" class="fas fa-times"></div>
<!--
      <form action="./lib/db.php" method="POST" >
      -->
      <form action="">
        <h3>sign in</h3>
        <span>username</span>
        <input
          type="text"
          name="cred"
          class="box"
          placeholder="enter your email"
          id=""
        />
        <span>password</span>
        <input
          type="password"
          name="pass"
          class="box"
          placeholder="enter your password"
          id=""
        />
        <div class="checkbox">
          <input type="checkbox" name="" id="remember-me" />
          <label for="remember-me"> remember me</label>
        </div>
        <input type="submit" value="sign in" name="log_user" class="btn" />
        <p>forget password ? <a href="#">click here</a></p>
        <p>don't have an account ? <a href="regadmin.php">create one</a></p>
      </form>
    </div> 

<!-- custom js file link  -->
<script src="js/script.js"></script>




