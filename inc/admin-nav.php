
 
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
        <link rel="stylesheet" href="../css/style.css" />
        

        <header class="header">
          <div class="header-1">
            <a href="#" class="logo"> AdminPanel</a>

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

      // session_start();
      // if(isset($_SESSION['username'])) 
      // {
      //   echo "cart.php";
      // }
      // else{
      //   echo "login.php";
      // };

?>
    class="fas fa-heart"></a>




    <a href=
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
            <a href="../index.php">home</a>
            <a href="admin_page.php">DashBoard</a>
            <a href="admin_products.php">Events</a>
            <a href="admin_users.php">Users</a>
            <a href="admin_contacts.php">Tasks</a>

          </nav>
        </div>
      </header>


      <!-- header section ends -->

      <!-- bottom navbar  -->

      <nav class="bottom-navbar">
        <a href="../index.php" class="fas fa-home"></a>
        <a href="admin_page.php" class="fas fa-list"></a>
        <a href="admin_product.php" class="fas fa-tags"></a>
        <a href="admin_orders.php" class="fas fa-comments"></a>
        <a href="admin_users.php" class="fas fa-blog"></a>
        <a href="admin_contact.php" class="fas fa-blog"></a>
      </nav>

      <!-- login form  -->

      


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

