<?php
include ('config/dbconfig.php');

function fetch_featured(){
    $feat = "SELECT 
    *
    FROM 
    books
    WHERE
    Downloads > 5000000 
    order 
    by 
    Downloads 
    ASC
    LIMIT 8";
    $books = $db->query($feat);
}




?>