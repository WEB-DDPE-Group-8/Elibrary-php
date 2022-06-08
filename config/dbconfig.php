<?php
    $servername='localhost';
    $usernam='root';
    $password='';
    $dbname = "a";
    
    $db = mysqli_connect($servername,$usernam,$password,$dbname);
    if(!$db){
        die('Could not Connect MySql Server:' .mysql_error());
      }