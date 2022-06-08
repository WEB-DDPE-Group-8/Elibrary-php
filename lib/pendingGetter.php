<?php 
include '../config/dbconfig.php';
$sql="SELECT * from books where Status like '%Pending%' ";
$books = mysqli_query($db,$sql); 
?>