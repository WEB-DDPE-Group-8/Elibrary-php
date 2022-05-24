

<?php

if($_GET["visit"])
{
    include "../config/dbconfig.php";
    $visit = $_GET["visit"];

   $visit = $db->query("Select UserName,Email,FirstName,LastName,isAdmin,UserID FROM user WHERE UserName = '$visit'");
   $visit = mysqli_fetch_assoc($visit);

   $uploads = "SELECT COUNT(UserID) from books where UserID = $visit[UserID]";
   $uplds = mysqli_query($db,$uploads);
   $uplds  = mysqli_fetch_assoc($uplds);
   $visit["uploads"] = $uplds["COUNT(UserID)"];

   
}
?>