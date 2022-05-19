<!DOCTYPE html>

<html>
<head>
    <title>Description</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./resources/logo/logo.png"/>
    <!-- <script src="user.js"></script> -->
    <script src="../js/addtocart.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css"/>
    <!-- <link rel="stylesheet" type="text/css" href="css/footer.css"/> -->
    <link rel="stylesheet" type="text/css" href="../css/index.css"/>


</head>

<body background="../multimedia/resources/banner-bg.jpg">
<?php
include("../inc/nav_bar.php");
?>
          <!-- header -->
          <table align="center">
    <tr>
        <td>

            <div id="book">
        <p id="p1"><img alt=""></p>
      
            </div>
        
        </td>
        <td>
    <div>
        <ul>
<?php  
   
    include("../config/dbconfig.php");
    
    // $row = [];

         if( isset($_GET["bookid"]))
         {
            $Id = $_GET["bookid"];
            $query = $db->query("Select * from books where BookID= $Id ");
                    
        if($query->num_rows > 0)
        {
          $GLOBALS['row'] = $query->fetch_assoc()
         ?>
            <p><b>Title:</b><br> <span id=name> <?php echo $row["Title"] ?> </span></p>
            <p><b>Author:</b><br><span id=auth><?php echo $row["Author"] ?></span></p>
            <p><b>Description:</b><br>
              <span  id="descr"><?php echo $row["Description"] ?>
              </span> </p>
            <p><b>Language:</b><br><span id="lang" ><?php echo $row["Language"] ?></p>
            <p><b>Genre:</b><br><span id="cat"></span><?php echo $row["Genre"] ?> </span></p>
            <p><b>Price:</b><br>ETB <span  id="pr"> <?php echo $row["Price"] ?></span></p>
            
        </ul>
    </div>
    </td>
</tr>
<?php
        }
        else
        {
?>
<P> No book Found  </P>
<?php
        }
?>
<?php
        }
        else{
?>
<p> no book id </p>
<?php
        }
?>
</table>

<table align="center">
    <tr>
        <td align="center">
            <br><br><br>
<form method="POST" action="">
            <button id=addto>Add to cart</a></button><br>

            <!-- <script>
              var addto = document.getElementById("addto")
              addto.addEventListener("click",function()
              {
                var cart = []
                  
    // localStorage.setItem("Cart",JSON.stringify(cart))
mig = JSON.parse(localStorage.getItem("History"))
     
    var New = JSON.parse(localStorage.getItem("Cart"))
        if(!New.includes(mig))
        {
        New.push(mig)
        localStorage.setItem("Cart",JSON.stringify(New))
        console.log(localStorage.getItem("Cart"));
        }
        else
        {
            alert("Item already in cart")
        }
              })
            </script> -->
            <button id=share onclick=sharef() ><a   style="text-decoration: none;"> Share</a> </button>
        </td>
    </tr>
</table>
<br><br><br>

<p><big>Readers also liked</big></p>
<hr size =12px color =grey>
<?php
 $genre = $row['Genre'];
 $related = $db->query("Select * from books Where Genre LIKE 'Fantasy'");
 $related = $related->fetch_assoc();
?>
<a  href= "Description.php?<?php echo $related["BookID"] ?>"><img  src="resources/books/2.jpg" width=255 height="400px"></a> 

<hr size =12px color =grey>
<br>

<?php
    // $review = $db->query("Select * from reviews where BookID = $row[BookID]");

    $reviews = $db->query("SELECT 
   user.UserID,user.UserName,reviews.UserID, reviews.Content,reviews.reaction
    FROM 
        reviews
    INNER JOIN 
        user 
    ON
        user.UserID=reviews.UserID
    Where
    BookID =$Id
    "
                        );
    // $reviews = mysqli_fetch_assoc($review);
    $reviews->fetch_assoc();
   ?>

<p>Comments</p>    


    <?php 

        include "comments poster.php";
        include "comments.php";
        include("../inc/footer.php")  
    ?>

</body>

</html>
