<?php
include '../config/dbconfig.php';
$sql="Select Books from cart where UserID = 1";
$cart = mysqli_query($db,$sql);
$cart = mysqli_fetch_assoc($cart);

$cart = implode(";",$cart);
var_dump($cart);

for($i=0 ; $i<=19; $i++)
{
    echo "k".$cart[$i];
};
?>