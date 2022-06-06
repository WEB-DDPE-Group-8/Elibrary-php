<?php
/**@var \PDO $pdo*/
    // $connect =$db;
    $record_per_page = 5;
    $page = '';

    $pdo = new PDO('mysql:host=localhost;dbname=a2zlibrary', 'root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $books = [];
    $search = $_GET['search'] ?? '';
    $GENRE = $_GET['g'] ?? '';
    $month = $_GET['m'] ?? '';
    $half_year = $_GET['hy'] ?? '';
    $year = $_GET['y'] ?? '';
    $five_year= $_GET['fy'] ?? '';

    if($search && !$GENRE ){
      $record_per_page = 5;
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
        $statement = $pdo->prepare("SELECT * FROM books WHERE Title LIKE :title order by BookID ASC LIMIT $start_from, $record_per_page ");
        $statement->bindValue('title', "%$search%");
        $statement->execute();
        $books = $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    else if($month) {
      $record_per_page = 5;
      $page = '';
      if(isset($_GET["page"])) {
       $page = $_GET["page"];
      }
      else {
      $page = 1;
      }
      $start_from = ($page-1)*$record_per_page;
      $statement = $pdo->prepare("SELECT * FROM books where DATEDIFF(CURRENT_DATE(), Year)<30 order by BookID ASC LIMIT $start_from, $record_per_page ");
      //$statement->bindValue('genre', "%$GENRE%");
      $statement->execute();
      $books = $statement->fetchAll(PDO::FETCH_ASSOC);

    }
    else if($half_year) {
      $record_per_page = 5;
      $page = '';
      if(isset($_GET["page"])) {
       $page = $_GET["page"];
      }
      else {
      $page = 1;
      }
      $start_from = ($page-1)*$record_per_page;
      $statement = $pdo->prepare("SELECT * FROM books where DATEDIFF(CURRENT_DATE(), Year)<180 order by BookID ASC LIMIT $start_from, $record_per_page ");
     // $statement->bindValue('genre', "%$GENRE%");
      $statement->execute();
      $books = $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    else if($year) {
      $record_per_page = 5;
      $page = '';
      if(isset($_GET["page"])) {
       $page = $_GET["page"];
      }
      else {
      $page = 1;
      }
      $start_from = ($page-1)*$record_per_page;
      $statement = $pdo->prepare("SELECT * FROM books where DATEDIFF(CURRENT_DATE(), Year)<365 order by BookID ASC LIMIT $start_from, $record_per_page ");
     // $statement->bindValue('genre', "%$GENRE%");
      $statement->execute();
      $books = $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    else if($five_year) {
      $record_per_page = 5;
      $page = '';
      if(isset($_GET["page"])) {
       $page = $_GET["page"];
      }
      else {
      $page = 1;
      }
      $start_from = ($page-1)*$record_per_page;
      $statement = $pdo->prepare("SELECT * FROM books where DATEDIFF(CURRENT_DATE(), Year)<1825 order by BookID ASC LIMIT $start_from, $record_per_page ");
     // $statement->bindValue('genre', "%$GENRE%");
      $statement->execute();
      $books = $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    else if($GENRE) {
      $record_per_page = 5;
      $page = '';
      if(isset($_GET["page"])) {
       $page = $_GET["page"];
      }
      else {
      $page = 1;
      }
      $start_from = ($page-1)*$record_per_page;
      $statement = $pdo->prepare("SELECT * FROM books WHERE Genre LIKE :genre and Status = 'Approved' order by BookID ASC LIMIT $start_from, $record_per_page ");
      $statement->bindValue('genre', "%$GENRE%");
      $statement->execute();
      $books = $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    else {
      $record_per_page = 5;
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
              SELECT * FROM books where Status = 'Approved' order by BookID ASC LIMIT $start_from, $record_per_page 
        ");
      $statement->execute();
      $books = $statement->fetchAll(PDO::FETCH_ASSOC);
      
    }