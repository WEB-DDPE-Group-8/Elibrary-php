<?php
include '../config/dbconfig.php';
$fetch = "SELECT DISTINCT `Genre` FROM `books`";
$genre_show = mysqli_query($db, $fetch);
$genres = mysqli_fetch_assoc($genre_show);

echo count($genres);

    ?>