<?php
 session_start();
//  include "config/globals.php";
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
$root = $root."/html";

?>
 
        <link
        rel="stylesheet"
        href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
        
        />
        <script src="js/script.js" defer></script>
        <!-- font awesome cdn link  -->
        <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        />
        <link rel="stylesheet" href="/html/css/style.css" />
        

        <header class="header">
          <div class="header-1">
            <a href="#" class="logo"> <i class="fas fa-book"></i> Book Store </a>

            <form action=""  class="search-form" method="GET">
              <input
                type="search"
                name="search"
                placeholder="search here..."
                id="search-box"
              />
              <label for="search-box" class="fas fa-search"></label>
            </form>

            <div class="icons">
              <div id="search-btn" class="fas fa-search"></div>
            
            <a href=
            <?php
              if(isset($_SESSION['username'])) 
              {
                echo "/html/public/cart.php";
              }
              else{
                echo "/html/public/login.php";
              };
               ?>
            class="fas fa-heart">
          </a>

          <a href=
          <?php
           if(isset($_SESSION["username"]))
               echo "/html/public/cart.php" ;
            else
               {echo "/html/public/login.php";}
          ?>
          class="fas fa-shopping-cart"><br></a>
               
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
            <a href="/html/public/file_manipulation.php">File Manipulation</a>
            <a href="/html/index.php#blogs">blogs</a>
            <a href="/html/public/report.php">Statistics</a>
            <?php
             if(isset($_SESSION["isAdmin"]) && $_SESSION["isAdmin"]=="1") 
             {
             ?>
            <a href="/html/admin/admin page.php">Dashboard</a>
           <?php 
            };
           ?>
          </nav>
        </div>
      </header>

      <!-- header section ends -->

      <!-- bottom navbar  -->

      <nav class="bottom-navbar">
      <a href="/html/index.php" class="fas fa-home">home</a>
            <a href="/html/index.php#featured" class="fas fa-list">featured</a>
            <a href="/html/public/bookshelf.php" >BookShelf</a>
            <a href="/html/index.php#arrivals" class="fas fa-tags"> arrivals</a>
            <a href="/html/index.php#reviews" class="fas fa-comments" >reviews</a>
            <a href="/html/public/file_manipulation.php" >File Manipulation</a>
            <a href="/html/index.php#blogs" class="fas fa-blog">blogs</a>
            <a href="/html/public/report.php" >Statistics</a>
      </nav>

      <!-- login form  -->

      <div class="login-form-container">
        <div id="close-login-btn" class="fas fa-times"></div>
        
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
          <p>forgot password ? <a href="#">click here</a></p>
          <p id="register">don't have an account ?
            <!-- <button id= "reg-btn"> click here to register</button> -->
            <a href="/html/public/register.php">create one</a></p>
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
?>

<?php
/**@var \PDO $pdo*/
    // $connect =$db;
    $record_per_page = 5;
    $page = '';
    // if(isset($_GET["page"]))
    // {
    // $page = $_GET["page"];
    // }
    // else
    // {
    // $page = 1;
    // }

    // $start_from = ($page-1)*$record_per_page;

    // $query = "SELECT * FROM books order by BookID DESC LIMIT $start_from, $record_per_page";
    // $result = mysqli_query($connect, $query);


    $pdo = new PDO('mysql:host=localhost;dbname=a2zlibrary', 'root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $books = [];
    $search = $_GET['search'] ?? '';

    if($search){
      $record_per_page = 5;
      $page = '';
      if(isset($_GET["page"]))
      {
      $page = $_GET["page"];
      }
      else
      {
      $page = 1;
      }

        $start_from = ($page-1)*$record_per_page;
        $statement = $pdo->prepare("SELECT * FROM books WHERE Title LIKE :title order by BookID DESC LIMIT $start_from, $record_per_page ");
        $statement->bindValue('title', "%$search%");
        $statement->execute();
        $books = $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    else{
      $record_per_page = 5;
      $page = '';
      if(isset($_GET["page"]))
      {
      $page = $_GET["page"];
      }
      else
      {
      $page = 1;
      }

      $start_from = ($page-1)*$record_per_page;
      $statement= $pdo->prepare(
        "
              SELECT * FROM books order by BookID DESC LIMIT $start_from, $record_per_page 
        ");
      $statement->execute();
      $books = $statement->fetchAll(PDO::FETCH_ASSOC);
      
    }

