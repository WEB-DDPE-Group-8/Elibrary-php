<?php
/**@var \PDO $pdo*/


    $pdo = new PDO('mysql:host=localhost;port;dbname=a2zlibrary', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $search = $_GET['search']?? '';
    if($search){
        $statment = $pdo->prepare('SELECT * FROM books WHERE Title 
        LIKE : title');
        $statment->bindValue('title', "%$search%")
    }


    ?>
