
 
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
        <link rel="stylesheet" href="css/style.css" />
        

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

      session_start();
      if(isset($_SESSION['username'])) 
      {
        echo "cart.php";
      }
      else{
        echo "login.php";
      };

?>
    class="fas fa-heart"></a>

    <?php
    if(isset($_SESSION["username"]))
    echo "cart.php" ;
    else
    {echo "login.php";}
    ?>
    class="fas fa-shopping-cart"><br></a>
               
    <div id="login-btn" class="fas fa-user">
                  <br>
                </div>
                <?php
            if(isset($_SESSION["username"]))
            echo $_SESSION["username"] ;
            else
            echo "@user"
?>

</div>
        </div>

        <div class="header-2">
          <nav class="navbar">
            <a href="index.php">home</a>
            <a href="bookshelf.php">featured</a>
            <a href="#arrivals">arrivals</a>
            <a href="#reviews">reviews</a>
            <a href="file_manipulation.php">File Manipulation</a>
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

        <div>

        </div>
        <form action="lib/db.php" method="POST">
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
            <a href="register.php">create one</a></p>
        </form>
      </div>



  <!-- custom js file link  -->
  <?php

  if(!isset($_SESSION['username']))
{
   echo "
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
   ";
}
  else
{
  //  header("location:admin-profile.php");
        // ob_start();
        // header("location:index.php");
echo  <<<_END
       <script>
      
     document.querySelector('#login-btn').onclick = () =>
     {
         location.href='admin-profile.php';
     };
         </script>
_END; 
}
?>

<?php
/**@var \PDO $pdo*/


    $pdo = new PDO('mysql:host=localhost;dbname=a2zlibrary', 'root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $books = [];
    $search = $_GET['search']?? '';

    if($search){
        $statement = $pdo->prepare('SELECT * FROM books WHERE Title LIKE :title');
        $statement->bindValue('title', "%$search%");
        $statement->execute();
        $books = $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    else{
      $statement= $pdo->prepare('SELECT * FROM books');
      $statement->execute();
      $books = $statement->fetchAll(PDO::FETCH_ASSOC);
    }

