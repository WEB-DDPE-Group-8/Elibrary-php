<?php?>
<html>
    <head>
    <title>Book Shelf</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./multimedia/resources/logo/logo.png"/>
    <script src="user.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/bookshelf.css"/>
    <link rel="stylesheet" type="text/css" href="css/footer.css"/>
    <link rel="stylesheet" type="text/css" href="css/index.css"/>

    <script src="addtocart.js"></script>

</head>

<body background=./multimedia/resources/banner-bg.jpg>
          <!-- header -->


         <?php include("./inc/nav_bar.php") ?>

         <form action="bookshelf.php" method="get">
          <input type=number name=year >
          <input type="submit" value="submit" name="submit">
</form>

   
    <div class="css">
        <h1></h1>
    </div>



<div id="gallery">
    <div>    
    </div>
     <div class="img-gallery">
<?php 
include("./config/dbconfig.php");
if(isset($_GET["submit"]))
{
$year = $_GET["year"];

$query = $db->query("Select * from books where year > $year");

if($query->num_rows > 0)
{
    while($row = $query->fetch_assoc())
    {
        // $imageURL = 'uploads/'.$row["file_name"];
        echo $row["Author"];
        echo $row["Title"];
        echo $row["Year"];
        echo $row["Genre"];
        echo $row["Description"]."\n";
?>
 <!-- <a href="description.php"><img src="<?php echo $imageURL; ?>"width="200" height="350"/></a> -->
 <?php 
}//end of the while loop -->
}//end if the if statement
else {
?>
 <p>"NO images found..."</p>
 <?php
 }
}
?>
      <div>
          
      </div>
        </div>
</div>  
          
<?php include("./inc/footer.php") ?>

</body>

</html>