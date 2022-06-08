<?php

if(!$_SESSION["loggedin"] === true)
{
header("location:login.php");
}
include "../config/globals.php" 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="../css/catSelector.css" />
  <title>Pick Categories</title>
</head>

<body>
  <p>Choose atleast 3 Genres you are intereste in: </p>
  <form action="../lib/catGetter.php" method="GET">

    <div class="container">
      <!-- container begins here -->
      <?php
                foreach($Genres as $genre)
                {
              ?>
      <div class="checkbox">
        <input type="checkbox" value=<?php echo $genre;?> name="cat[]" id="" />
        <div class="box">
          <!-- <i class="fab fa-instagram"></i> -->
          <p data-text="<?php echo $genre; ?>"><?php echo $genre; ?></p>
        </div>
      </div>
      <?php
                }
              ?>
      <!-- input more categories here -->

      <!-- container ends here -->
    </div>
    <input type="submit" class="btn checkbox" name="categ" value="Continue">
  </form>

</body>

</html>