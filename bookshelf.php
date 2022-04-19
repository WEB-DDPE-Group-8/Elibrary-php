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

<body background=./multimedia/resources/banner-bg.jpg"">
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
      <!-- <a onclick="setlookout(113)" href= "Description.php"><img  src=./multimedia/resources/books/13.jpg width="200" height=" 350" ></a>
      <a onclick="setlookout(112)" href= "Description.php"><img  src=./multimedia/resources/books/12.jpg width="200" height=" 350" ></a>
      <a onclick="setlookout(111)" href= "Description.php"><img  src=./multimedia/resources/books/11.jpg width="200" height=" 350"></a>
      <a onclick="setlookout(14)" href= "Description.php"><img  src=./multimedia/resources/books/4.jpg width="200" height=" 350" ></a>
      <a onclick="setlookout(15)" href= "Description.php"><img  src=./multimedia/resources/books/5.jpg width="200" height=" 350" ></a>
      <a onclick="setlookout(15)" href= "Description.php"><img  src=./multimedia/resources/books/5.jpg width="200" height=" 350" ></a>
      <a onclick="setlookout(16)" href= "Description.php"><img  src=./multimedia/resources/books/6.jpg width="200" height=" 350" ></a>
      <a onclick="setlookout(17)" href= "Description.php"><img  src=./multimedia/resources/books/7.jpg width="200" height=" 350" ></a>
      <a onclick="setlookout(18)" href= "Description.php"><img  src=./multimedia/resources/books/8.jpg width="200" height=" 350" ></a>
      <a onclick="setlookout(19)" href= "Description.php"><img  src=./multimedia/resources/books/9.jpg width="200" height=" 350" ></a>
      <a onclick="setlookout(110)" href= "Description.php"><img  src=./multimedia/resources/books/10.jpg width="200" height=" 350" ></a>
      <a onclick="setlookout(13)" href= "Description.php"><img  src=./multimedia/resources/books/3.jpg width="200" height=" 350" ></a>
      <a onclick="setlookout(11)" href= "Description.php"><img  src=./multimedia/resources/books/1.jpg width="200" height=" 350" ></a>
      <a onclick="setlookout(12)" href= "Description.php"><img  src=./multimedia/resources/books/2.jpg width="200" height=" 350" ></a>
      <a onclick="setlookout(113)" href= "Description.php"> <img  src=./multimedia/resources/books/13.jpg width="200" height=" 350" ></a>
      <a onclick="setlookout(112)" href= "Description.php"><img  src=./multimedia/resources/books/12.jpg width="200" height=" 350" ></a>
      <a onclick="setlookout(111)" href= "Description.php"> <img  src=./multimedia/resources/books/11.jpg width="200" height=" 350"></a>
      <a onclick="setlookout(14)" href= "Description.php"><img  src=./multimedia/resources/books/4.jpg width="200" height=" 350" ></a> -->
      <div>
          
      </div>
        </div>
</div>  
          
<?php include("./inc/footer.php") ?>

</body>

</html>