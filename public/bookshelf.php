       
    <?php 
          include '../lib/searchfunction.php';
    ?>
    
    <html>
    <head>
    <title>Book Shelf</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../multimedia/resources/logo/logo.png"/>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link rel="stylesheet" href="../css/sidenav.css">

    <!-- <script src="../js/script.js" defer></script>  -->
    <script src="../js/sidenav.js" defer></script>
  <style>
    .pagination{
      padding:8px 16px;
      border:1px solid #ccc;
      color:#333;
      font-weight:bold;
  }
  </style>
  
</head>

<body>
          <!-- header -->
         
    <?php 
          include("../inc/nav_bar.php");
          include '../inc/bookslider.php';
    ?>

<?php
$fetch = "SELECT DISTINCT Genre FROM books where Status = 'Approved'";
$genre_show = mysqli_query($db, $fetch);
$genres = mysqli_fetch_assoc($genre_show);

    ?>

<div id = "navv">
  <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <p>Categories <?php  
   count($genre);
      ?></p>
    <ul>
          <?php
          foreach ($genres as $genre){
            ?>
            <li><a href="?g=<?php echo $genre?>"><?php echo $genre?></a></li>          
          <?php
          }
          ?>
</ul>
      
    </div>
    
    <span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; Filter By</span>
</div>
      <!-- custom js file link  -->
 

<div align="center">
    <br />
    <?php
    $uri = $_SERVER['REQUEST_URI']; 
    if(str_contains($uri,"search") && str_contains($uri,"bookshelf")){
    $statementsearch->execute();
    $page_result = $statementsearch->fetchColumn();
    }
    else if(!str_contains($uri,"search") && str_contains($uri,"bookshelf")){
      $statement->execute();
      $page_result = $statement->fetchColumn();
      }
    
    
    $total_records = $page_result;
    $total_pages = ceil($total_records/$record_per_page);
    $start_loop = $page;
    $difference = $total_pages - $page;
    if($difference <= 5)
    {
     $start_loop = $total_pages - 5;
    }
    // else if($difference=0){
    //   $start_loop = -4;
    // }
    $end_loop = $start_loop + 4;
    if($page > 1)
    {
     echo "<a class=pagination href='bookshelf.php?page=1'>First</a>";
     echo "<a class=pagination href='bookshelf.php?page=".($page - 1)."'> << </a>";
    }
    // else if($page = 1){
    //   echo "<a class=pagination href='bookshelf.php?page=1'>First</a>";
    //   return 0;
    //   // echo "<a class=pagination href='bookshelf.php?page=".($page - 1)."'> << </a>";
    //  }
    for($i=$start_loop; $i<=$end_loop; $i++)
    {     
     echo "<a class=pagination href='bookshelf.php?page=".$i."'>".$i."</a>";
    }
    if($page <= $end_loop)
    {
     echo "<a class=pagination href='bookshelf.php?page=".($page + 1)."'> >></a>";
     echo "<a class=pagination href='bookshelf.php?page=".($total_pages)."'>Last</a>";
    }
    ?>
    </div>
 
<!--         
<div class="loader-container">
      <img src="image/loader-img.gif" alt="" />
</div> -->


<?php include("../inc/footer.php") ?>

</body>

</html>