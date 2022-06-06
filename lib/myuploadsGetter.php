<?php 

include '../config/dbconfig.php';
$sql="SELECT * from books where UserID = $_SESSION[UserID] ";
$books = mysqli_query($db,$sql); 
$count = mysqli_num_rows($books); 
?>