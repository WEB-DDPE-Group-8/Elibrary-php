<?php
 session_start();
//  if(isset($_GET["addto"])){
//   $id = $_GET["addto"];
//   $sql = "SELECT BOOK FROM books where BookID=$id";
//   $book = $db->query($sql);
//   $book = mysqli_fetch_assoc($book);

  
//   $dwnld = "UPDATE books SET Downloads = Downloads + 1 where BookID = $id";
//   $remove = "DELETE FROM cart where BookID = '$id' AND UserID = $_SESSION[UserID]";
//   header('Content-Type: application/octet-stream');
//   header("Content-Disposition: attachment; filename= $book[BOOK]");

//   // sleep(1);
// // header("location: cart.php");
//   $db->query($dwnld);
//   $db->query($remove);
    
// }
  ?>

  
<!-- final cart -->
<?php 

?>


    <link
    rel="stylesheet"
    href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    
    />
    <script src="../js/script.js" defer></script>
    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link rel="stylesheet" href="/html/css/style.css" />

    <header class="header">
      <div class="header-1">
        <a href="" class="logo"> <i class="fas fa-book"></i> </a>

        <form action="/html/public/bookshelf.php"  class="search-form" method="GET">
          <input
            type="search"
            name="search"
            placeholder="search here..."
            id="search-box"
          />
          <button type for="search-box" class="fas fa-search"></button>
        </form>

        <div class="icons">
          <div id="search-btn" class="fas fa-search"></div>
      <?php
        $uri = $_SERVER['REQUEST_URI']; 
        if(!str_contains($uri,"index")){
          include "../inc/counter.php";
          }
        else if(str_contains($uri,"index")||str_contains($uri,"html/") )
        {
        include "inc/counter.php";
        }
       
      ?>

      <a href=
      <?php
        if(isset($_SESSION["username"]))
            echo "/html/public/cart.php" ;
        else
            {echo "/html/public/login.php";}
      ?>
      class="fas fa-shopping-cart"><?php  if(isset($_SESSION["UserID"])) echo "[".$row_count."]"; ?><br></a>
            
  <div id="login-btn" class="fas fa-user">
  <br>
            </div>
            <?php
        if(isset($_SESSION["username"]))
        echo $_SESSION["username"] ;
        else
          echo "@user";
  ?>
  </div>
        </div>
        </div>
    
    <div class="header-2">
      <nav class="navbar">
        <a href="/html/index.php">home</a>
        <a href="/html/index.php#featured">featured</a>
        <a href="/html/public/bookshelf.php">BookShelf</a>
        <a href=/html/index.php#arrivals>arrivals</a>
        <a href="/html/index.php#reviews">reviews</a>
        <!-- <a href="/html/public/file_manipulation.php">File Manipulation</a> -->
        <a href="/html/index.php#blogs">events</a>
        <!-- <a href="/html/public/report.php">Statistics</a> -->
        <?php
          if(isset($_SESSION["role"]) && $_SESSION["role"]=="Admin") 
          {
          ?>
          <i class="fas fa-user-gear"></i>
        <a href="/html/admin/admin_page.php">Dashboard</a>
        <?php 
        };
        ?>
      </nav>
    </div>
  </header>
  <nav class="bottom-navbar">
  <a href="/html/index.php" class="fas fa-home"></a>
        <a href="/html/public/bookshelf.php" class="fas fa-list"></a>

        <!-- <a href="/html/public/bookshelf.php" >BookShelf</a> -->

        <a href="/html/index.php#arrivals" class="fas fa-tags"></a>
        <a href="/html/index.php#reviews" class="fas fa-comments"></a>
        
        <!-- <a href="/html/public/file_manipulation.php" >File Manipulation</a> -->
        <a href="/html/index.php#blogs" class="fas fa-blog"></a>
        
        <?php
          if(isset($_SESSION["role"]) && $_SESSION["role"]=="Admin") 
          {
          ?>
        <a href="/html/admin/admin_page.php" class="fas fa-columns"></a>
        <?php }?></nav>

  <!-- login form  -->

  <div class="login-form-container">
    <div id="close-login-btn" class="fas fa-times"></div>
    <?php  
if(isset($errors))
foreach($errors as $error){
  echo $error;
}
    ?>
    <form action="/html/lib/db.php" method="POST">
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
        <label for="remember-me">remember me</label>
      </div>
      <input type="submit" value="sign in" name="log_user" class="btn" />
     
      <p id="register">don't have an account?<a href="/html/public/register.php">create one</a></p>
        <p id = "forget">forgot password ? <a href="/html/public/change_pass.php">click here</a></p>
    </form>
  </div>

  <?php

  if(!isset($_SESSION['username']))
{
   echo 
   <<<_END
   <script>
   
   let loginForm = document.querySelector('.login-form-container');
   
   document.querySelector('#login-btn').onclick = () =>
   {
   loginForm.classList.toggle('active');
   };
   
   document.querySelector('#close-login-btn').onclick = () => {
   loginForm.classList.remove('active');
   };
   </script>
   _END;
  }
  else
{
  //  header("location:admin-profile.php");
        // ob_start();
        // header("location:index.php");
echo  
<<<_END
       <script>
      
     document.querySelector('#login-btn').onclick = () =>
     {
         location.href='/html/public/profile.php';
     };
         </script>
_END; 
}

