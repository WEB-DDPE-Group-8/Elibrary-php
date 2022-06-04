
<?php
    if (isset($_GET['addtocart'])) {
        
      $book_id = $_GET['id'];
      $price= $_GET['price'];

      $select_cart = mysqli_query($db, " SELECT * FROM cart WHERE BookID= '$book_id' AND UserID=$_SESSION[UserID]");

      if(mysqli_num_rows($select_cart) > 0){
          echo 'product already added to WishList';
      }else{
          $insert_product= mysqli_query($db, "INSERT INTO cart(BookID,UserID,Price) VALUES ( '$book_id','$_SESSION[UserID]', '$price')");
            echo 'product added to WishList succesfully';
      }
    }
    return 0;
?>
