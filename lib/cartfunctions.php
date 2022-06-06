<?php


session_start();
@include '../config/dbconfig.php';

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($db, "DELETE FROM cart WHERE BookID = '$remove_id'");
};

if(isset($_GET['delete_all'])){
   mysqli_query($db, "DELETE  FROM cart WHERE UserID = $_SESSION[UserID]");
   header('location:cart.php');
}

if(isset($_GET["addto"])){
    $id = $_GET["addto"];
    $sql = "UPDATE books SET Downloads = Downloads + 1 where BookID = $id";
    $remove = "DELETE FROM cart where BookID =$id AND UserID = $_SESSION[UserID]";
    $db->query($sql);
    $db->query($remove);
}

?>