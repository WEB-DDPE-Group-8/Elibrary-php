<?php
include ('config/dbconfig.php');
    $feat = "SELECT 
    *
    FROM 
    books
    WHERE
    Downloads > 500
    order 
    by 
    Downloads 
    ASC
    LIMIT 8";
    $books = $db->query($feat);
    if(!str_contains($uri,"index"))
    $books = mysqli_fetch_assoc($books)
?>