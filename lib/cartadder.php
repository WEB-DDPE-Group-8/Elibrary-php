<?php
    include '../config/dbconfig.php';
    session_start();
    if (isset($_GET['addtocart']) && $_GET['addtocart']== true) {
        
      $book_id = $_GET['id'];
      $price= $_GET['price'];

      $select_cart = mysqli_query($db, " SELECT * FROM cart WHERE BookID= '$book_id' AND UserID=$_SESSION[UserID]");
       
      if(mysqli_num_rows($select_cart) > 0){
        $status = 'product already added to WishList';
          echo $status;
      }else{
          $insert_product= mysqli_query($db, "INSERT INTO cart(BookID,UserID,Price) VALUES ( '$book_id','$_SESSION[UserID]', '$price')");
          $status = 'product  added to WishList';
          echo $status;
      }
    }
?>