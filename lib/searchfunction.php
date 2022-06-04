<?php
/**@var \PDO $pdo*/
    // $connect =$db;
    $record_per_page = 20;
    $page = '';

    $pdo = new PDO('mysql:host=localhost;dbname=a2zlibrary', 'root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $books = [];
    $search = $_GET['search'] ?? '';

    if($search){
      $record_per_page = 10;
      $page = '';
      if(isset($_GET["page"]))
      {
      $page = $_GET["page"];
      }
      else
      {
      $page = 1;
      }

        $start_from = ($page-1)*$record_per_page;
        $statementsearch = $pdo->prepare("SELECT * FROM books WHERE Title LIKE :title order by BookID ASC LIMIT $start_from, $record_per_page ");
        $statementsearch->bindValue('title',"%$search%");
        $statementsearch->execute();
        $books = $statementsearch->fetchAll(PDO::FETCH_ASSOC);
    }
    else{
      $record_per_page = 10;
      $page = '';
      if(isset($_GET["page"]))
      {
      $page = $_GET["page"];
      }
      else
      {
      $page = 1;
      }

      $start_from = ($page-1)*$record_per_page;
      $statement= $pdo->prepare(
        "
              SELECT * FROM books order by BookID ASC LIMIT $start_from, $record_per_page 
        ");
      $statement->execute();
      $books = $statement->fetchAll(PDO::FETCH_ASSOC);
      
    }