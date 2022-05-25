<?php
 if(isset($_SESSION["username"])){
 $uri = $_SERVER['REQUEST_URI']; 
 if(str_contains($uri,"index"))
 {
    include 'config/dbconfig.php';
 }
 else{
    include '../config/dbconfig.php';
 }

 $select_rows = mysqli_query($db, "SELECT * FROM cart where UserID = $_SESSION[UserID]") or die('query failed');
 $row_count = mysqli_num_rows($select_rows);
}
?>