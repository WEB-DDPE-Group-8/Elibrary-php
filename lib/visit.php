

<?php

if($_GET["visit"])
{
    include "../config/dbconfig.php";
    $visit = $_GET["visit"];

   $visit = $db->query("Select UserName,Email,FirstName,LastName,isAdmin,UserID FROM user WHERE UserName = '$visit'");

   $visit = mysqli_fetch_assoc($visit);
}
?>