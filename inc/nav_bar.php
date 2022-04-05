
<header>

    <div class="nav">

        <div> <a href="#"> <br><img src="./multimedia/resources/logo/logoname2.png" alt="Book icon" width=40x height="auto"></a> </div>

        <div> <a href="index.php"><img src="./multimedia/resources/hm.png"  width= 40px height="auto" /><br>Home</a> </div>
        <div> <a href="index.php#section2">&nbsp;<img src="./multimedia/resources/feture.png"  width= 40px height="auto" /><br>Featured</a></div>
        <div> <a href="bookshelf.php">&nbsp;&nbsp&nbsp;<img src="./multimedia/resources/cat.png"  width= 40px height="auto" /> <br>Book Shelf</a></div>
        <div> <a href="index.php#section4">&nbsp;&nbsp;&nbsp;<img src="./multimedia/resources/icons/3061548-200.png"  width=40px height="auto" /> <br>Reviews</a></div>
        <div> <a href="index.php#section5">&nbsp;&nbsp;<img src="./multimedia/resources/Events.png"  width= 36px height="auto" /> <br>Events</a></div>
        <div> <a href="cart.php"> <img src="./multimedia/resources/icons/cart.jfif.png" alt="Cart" width= 40px> <br>Cart </a></div>
        <div> <a href="profile.php"><img src="./multimedia/resources/icons/person.jfif.png" alt="User's picture" width= 40px height=auto><br><span id="usrname">
        <?php 
 session_start();
if(isset($_SESSION['username']))   
        echo $_SESSION['username'];
else echo "@user"
        ?> 
        <a>
    </div>    
        </header>


