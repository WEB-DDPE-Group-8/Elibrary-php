<?php
          include './config/dbconfig.php';
          $newarrivals = "Select * from books order by BookID DESC LIMIT 5 ";
          $newarrivals = $db->query($newarrivals);
          // $newarrivals=mysqli_fetch_assoc($newarrivals);
          // print_r($newarrivals['Year']);
          // $d=strtotime($newarrivals['Year']);
          // $d=date("Y-m-d h:i:sa", $d);
          // // echo $d;
          // $currdate = date("Y-m",  mktime(0));
          // echo date('Y-m',strtotime("-2 months",strtotime($currdate)));
?>