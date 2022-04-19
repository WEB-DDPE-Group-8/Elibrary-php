<head>
<link rel="stylesheet" href="../books webstie/css/s.css">
<style></style>
</head>
<header>

    <div class="nav">

        <div> <a href="#"> <br><img src="./multimedia/resources/logo/logoname2.png" alt="Book icon" width=40x height="auto"></a> </div>

        <!-- <div> <a href="index.php"><img src="./multimedia/resources/hm.png"  width= 40px height="auto" /><br>Home</a> </div>
        <div> <a href="index.php#section2">&nbsp;<img src="./multimedia/resources/feture.png"  width= 40px height="auto" /><br>Featured</a></div>
        <div> <a href="bookshelf.php">&nbsp;&nbsp&nbsp;<img src="./multimedia/resources/cat.png"  width= 40px height="auto" /> <br>Book Shelf</a></div>
        <div> <a href="index.php#section4">&nbsp;&nbsp;&nbsp;<img src="./multimedia/resources/icons/3061548-200.png"  width=40px height="auto" /> <br>Reviews</a></div>
        <div> <a href="index.php#section5">&nbsp;&nbsp;<img src="./multimedia/resources/Events.png"  width= 36px height="auto" /> <br>Events</a></div>
        <div> <a href="cart.php"> <img src="./multimedia/resources/icons/cart.jfif.png" alt="Cart" width= 40px> <br>Cart </a></div>
        <div> <a href="profile.php"><img src="./multimedia/resources/icons/person.jfif.png" alt="User's picture" width= 40px height=auto><br><span id="usrname"> -->
        
        <div class="header-1">
       
       <a href="#" class="logo"> <i class="fas fa-book"></i> bookly </a>

       <form action="" class="search-form">
           <input type="search" name="" placeholder="search here..." id="search-box">
           <label for="search-box" class="fas fa-search"></label>
       </form>

       <div class="icons">
           <div id="search-btn" class="fas fa-search"></div>
           <a href="#" class="fas fa-heart"></a>
           <a href="#" class="fas fa-shopping-cart"></a>
           <div id="login-btn" class="fas fa-user"></div>
       </div>

   </div>

   <div class="header-2">
       <nav class="navbar">
           <a href="#home">home</a>
           <a href="#featured">featured</a>
           <a href="#arrivals">arrivals</a>
           <a href="#reviews">reviews</a>
           <a href="#blogs">blogs</a>
       </nav>
   </div>

</header>

<!-- header section ends -->

<!-- bottom navbar  -->

<nav class="bottom-navbar">
   <a href="#home" class="fas fa-home"></a>
   <a href="#featured" class="fas fa-list"></a>
   <a href="#arrivals" class="fas fa-tags"></a>
   <a href="#reviews" class="fas fa-comments"></a>
   <a href="#blogs" class="fas fa-blog"></a>
</nav>    

        
        <?php 
 session_start();
if(isset($_SESSION['username']))   
        echo $_SESSION['username'];
else echo "@user"
        ?> 
        <a>
    </div>    
        </header>


