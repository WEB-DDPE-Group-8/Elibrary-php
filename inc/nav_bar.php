


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

<?php

// if(isset($_SESSION['username'])) 
// {echo "cart.php";}
// else
// {echo "login.php";}


// <<<_END
?>
 <div lass="fas fa-shopping-cart"><br></a>
            <div id="login-btn" class="fas fa-user">
              <br> 
            </div>
<!-- //  _END; -->
    <?php     
            if(isset($_SESSION["username"]))
            echo $_SESSION["username"] ;
// <<<_END 
?>
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

      <!-- register form
      <div class="registration-form-container">
        <div id="close-login-btn" class="fas fa-times"></div>
  <!--
        <form action="./lib/db.php" method="POST" >
        -->
        <!-- <form action="">
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
      </div>  --> 

  <!-- custom js file link  -->
<!-- _END;

  if(false)
  {
header("location:index.php");
    
  //   echo " -->
  // <script>
  
  
  // let loginForm = document.querySelector('.login-form-container');
  
  // document.querySelector('#login-btn').onclick = () =>
  // {

  //   // location.href('index.php') ;
  //  // loginForm.classList.toggle('active');
  // };
  
  // document.querySelector('#close-login-btn').onclick = () => {
  //   loginForm.classList.remove('active');
  // };
  // </script>
  <!-- // ";
  }
  
  else{
        header("location:index.php");
        // echo  <<<_END
        // <script>
       
        
        // let loginForm = document.querySelector('.login-form-container');
      
        // document.querySelector('#login-btn').onclick = () =>
        // {
        //   location.href('index.php') ;
        // };
        // </script>
        // _END; -->
  <!-- }

?> -->
 

  





