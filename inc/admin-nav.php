<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
<script src="js/script.js" defer></script>
<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
<link rel="stylesheet" href="../css/style.css" />


<header class="header">
  <div class="header-1">
    <a href="#" class="logo"> AdminPanel</a>

    <a class="user-icon" href="../public/profile.php" class="fas fa-user"> </a>

    <?php
                    // session_start();
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
      <a href="admin_events.php">Events</a>
      <a href="admin_users.php">Users</a>
      <a href="admin_books.php">Books</a>
    </nav>
  </div>
</header>


<!-- header section ends -->

<!-- bottom navbar  -->

<nav class="bottom-navbar">
  <a href="../index.php" class="fas fa-home"></a>
  <a href="admin_page.php" class="fas fa-list"></a>
  <a href="admin_events.php" class="fas fa-calendar"></a>

  <a href="admin_users.php" class="fas fa-users"></a>
  <a href="admin_books.php" class="fas fa-book"></a>
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
    $pdo = new PDO('mysql:host=localhost;dbname=a2zlibrary', 'root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $books = [];
    $search = $_GET['search']?? '';
    

    if($search){
        header("location:../public/bookshelf.php");
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