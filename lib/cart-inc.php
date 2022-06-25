<?php
    include ('../config/dbconfig.php');

$ids = array();
// Get cart items
function get_cart($nr = FALSE, $id = FALSE){
  global $db;

  if ($id) {
    $sql = mysqli_query($db, "SELECT * FROM cart WHERE BookID = '$id'");
    return mysqli_fetch_assoc($sql);
  }
}

// Get Products related to cart ids
function cart_prod($id){
  global $db;
  $sql = mysqli_query($db, "SELECT * FROM books WHERE id = '$id'");
  return mysqli_fetch_assoc($sql);
}


// Check if add to cart button has been clicked
if (isset($_GET['BookID']) && isset($_GET['Price'])) {
  
  $book_id = $_GET['BookID'];
  $price= $_GET['Price'];

  echo $book_id ;

  foreach (get_cart() as $row) {  
    $ids[] = $row['BookID'];
  }

  if (in_array($book_id, $ids)) {
    $book = get_cart(false, $book_id);

    $nprc = $book['Price'] + $price;

    $sql = mysqli_query($db, "UPDATE cart SET  price = '$nprc' WHERE BookID = '$book_id'");

    if ($sql) {
      header("Location: ../public/cart.php");
    }
  }else{

    $sql = mysqli_query($db, "INSERT INTO cart VALUES ('', '$book_id', '$price')");

    if ($sql) {
      header("Location: ../public/cart.php");
    }
  }
}



// Add or remove items in cart
if (isset($_POST['change_cart_items'])) {
  // Select data
  $sql = mysqli_query($conn, "SELECT * FROM cart WHERE id = '".$_POST['id']."' LIMIT 1");
  $item = mysqli_fetch_assoc($sql);
  }

  