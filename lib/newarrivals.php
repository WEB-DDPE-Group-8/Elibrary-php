<?php
          include './config/dbconfig.php';
          $newarrivals = "Select * from books where Status = 'Approved' order by BookID DESC LIMIT 5 ";
          $newarrivals = $db->query($newarrivals);
?>