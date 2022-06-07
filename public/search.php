
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="../multimedia/resources/logo/logo.png" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/carrt.css" async />
    <link rel="stylesheet" type="text/css" href="css/footer.css" />
    <link rel="stylesheet" type="text/css" href="css/index.css" />

    ></script>

    
  </head>
     
  <body background="books webstie/image/banner-bg.jpg">
     
		 
      	
     <?php include "config/dbconfig.php";
	       include "inc/nav_bar.php";
	 ?>

            <?php
               if(isset($_GET['search']))
               {
                 $filtervalues=$_GET['search'];
                 $query="SELECT * FROM books WHERE CONCAT(cover,Author,Title,Description) LIKE '%$filtervalues%'";
                 $query_run = mysqli_query($db,$query);

                 if(mysqli_num_rows($query_run)>0)
                 {
                   foreach($query_run as $items)
                   {
                   ?>
                    <img class="card-img-top" src="<?php echo $items['cover'] ?>" alt="Card image cap">
					  <div class="card-body">
					    <h2 class="card-title"> TITLE:<?php echo $items['Title'] ?></h2>
					    <h2 class="card-text">Description:<?php echo $items['Description'] ?></h2>
              <h2 class="card-text">PRICE:<?php echo $items['price'] ?></h2>
              <h2 class="card-text">AUTHOR:<?php echo $items['Author'] ?></h2>
					    <form action="cart.php" method="GET">
					    	<input type="hidden" name="name" value="<?php echo $items['Title'] ?>">
                <input type="hidden" name="price" value="<?php echo $items['price'] ?>">
					    	<button type="submit" name="addtoCart" class="btn btn-primary">
					    		<i class="fa fa-shopping-cart"></i> Add to Cart
					    	</button>
					    </form>
					  </div>
                  <?php
                 }
               }
                else{
                    ?> 
                    <tr>
                       <td colspan="4">book not found</td> 
                    </tr>
                    <?php
                }
                 
              }
            ?>
            </tbody>
            <?php