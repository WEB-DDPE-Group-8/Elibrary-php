<?php  
   
   include("../config/dbconfig.php");
 

  if( isset($_GET["bookid"]))
  {
     $Id = $_GET["bookid"];
     $query = $db->query("Select * from books where BookID= $Id ");
             
 if($query->num_rows > 0)
 {
   $GLOBALS['row'] = $query->fetch_assoc()
  ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Product Card/Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="../css/desc.css" />
  <!-- <link rel="stylesheet" href="../css/style.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
    crossorigin="anonymous" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(document).ready(function () {
      $(".cart").click(function () {
        var price = $(this).data("price");
        var id = $(this).data("id");
        console.log(price);

        $.ajax({
          url: '/html/lib/cartadder.php',
          type: 'GET',
          data: {
            addtocart: true,
            price: price,
            id: id
          },
          success: function (status) {
            alert(status);
          }
        })
      })
    })
  </script>
</head>

<body>
  <?php 
    include("../inc/nav_bar.php");
    
    ?>

  <div class="card-wrapper">
    <div class="card">
      <!-- card left -->
      <div class="product-imgs">
        <div class="img-display">
          <div class="img-showcase">
            <?php
              if($row["BookID"]<=43){
        ?>
            <img src="../image/<?php echo $row['BookID']?>.png" alt="Cover page" />
            <?php
        }else{
        ?>
            <img src="<?php echo $row['Cover']?>" alt="Covert page" />
            <?php
        }
        ?>
          </div>
        </div>

      </div>
      <div class="product-content">
        <h2 class="product-title"><?php echo $row["Title"] ?> </h2>
        <div class="product-rating">
          <i class="fas fa-thumbs-up"><span><?php echo number_format($row["Likes"])?></span></i>
          <i class="fas fa-thumbs-down"><span><?php echo  number_format($row["Dislikes"]) ?></span></i>

        </div>

        <div class="product-price">
          <p class="new-price">Price: <span>$<?php echo $row["Price"] ?></span></p>
        </div>

        <div class="product-detail">
          <h2>Description:</h2>
          <ul>
            <?php echo $row["Description"] ?><br>
            <li>Title: <span><?php echo $row["Title"] ?> </span></li>
            <li>Author: <span><?php echo $row["Author"] ?> </span></li>
            <li>Language: <span><?php echo $row["Language"] ?></span></li>
            <li>Genre: <span><?php echo $row["Genre"] ?></span></li>
          </ul>
          <?php
            }
            else
            {
    ?>
          <P> No book Found matching the ID </P>
          <?php
            }
    ?>
          <?php
            }
            else{
    ?>
          <p> no book id </p>
          <?php
            }
    ?>
        </div>

        <div class="purchase-info">
          <!-- <a href="?addtocart=true&<?php echo 'id='.$row["BookID"]?>&<?php echo 'price='.$row['Price']?>" class="btn">Add to WishList</a> -->


          <?php
          if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
            ?>
          <button class="btn cart" data-id=<?php echo $row['BookID']?> data-price=<?php echo $row['Price']?>>Add to
            WishList</button>;
          <?php
          }
           else{
             if (str_contains($uri,"index"))
           echo '<a class="btn" href=public/login.php>Add to WishList</a>
           ';
           else
           echo '<a class="btn" href=../public/login.php>Add to WishList</a>';
           }
           ?>

          <a href="<?php
          if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
           echo $row["Book"];
           else{
             if (str_contains($uri,"index"))
           echo 'public/login.php';
           else
           echo '../public/login.php';
           }
           ?>" class="btn">Get Book</a>

        </div>
      </div>
    </div>
  </div>
  <!-- card right -->
  </div>
  </div>


  <?php 
    include '../lib/reviewGetter.php';
    include '../public/comments poster.php';
    include '../public/comments.php';
    include("../inc/footer.php") ?>
  <script src="../js/desc.js"></script>

</body>

</html>