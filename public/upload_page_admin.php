<?php
if(!$_SESSION["loggedin"] === true)
{
header("location:login.php");
return 0;
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- <link rel="stylesheet" type="text/css" href="css/footer.css"/> -->

        <link rel="stylesheet" href="../css/upld.css" /> 

    <link rel="shortcut icon" href="./resources/logo/logo.png"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>   
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" href="css/min.css" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css" />

    <script src="user.js"></script>
    <script src="addtocart.js" defer></script>
    <script src="upload.js" defer></script>
    
    <title>Upload</title>

    </head>

<body background="../multimedia/resources/banner-bg.jpg">


<?php  include '../inc/nav_bar.php' ?>

<form action="upload_page_admin.php" method="post" enctype="multipart/form-data">
  
  <h1>This page is for a user to <strong>upload books </strong> in a pdf format</h1>
<div class=whole>
 <div class =cont1> 
      <!-- title -->
  <div class="form-group">
    <label for="title">Title <span>Use title case to get a better result</span></label>
    <input type="text" name="bookname" id="title" class="form-controll"/>
  </div>

  <!-- Author -->
  <div class="form-group">
    <label for="auth">Author <span>Use title case to get a better result</span></label>
    <input type="text" name="Author" id="auth" class="form-controll"/>
  </div>

  <!-- Date -->
  <div class="form-group">
    <label for="date">Date <span>Use title case to get a better result</span></label>
    <input type="date" name="date" id="date" class="form-controll"/>
  </div>

  <!-- Category -->
  <div class="form-group">
    <label for="cat">Category <span>Use title case to get a better result</span></label>
    <select name="genre"  id="cat" class="form-controll">
    <?php
$Genres = array("Action",
"Adventure",
"Comedy",
"Crime ",
"Fantasy",
"Historical",
"Horror",
"Romance",
"Classics",
"Graphic Novel",
"Detective ",
"Historical Fiction",
"Literary Fiction",
"Science Fiction",
"Short Storie",
"Thriller",
"Women's Fiction",
"Biographies" ,
"Cookbook",
"Essay",
"History",
"Memoir",
"Poetry",
"Self-help",
"True-Crime");

foreach($Genres AS $genre){
?>
    <option value=<?php echo $genre?>><?php echo $genre?> </option>
<?php

}
?>
    <!-- <option value=""> </option>
    <option value=""> </option>
    <option value=""> </option>
    <option value=""> </option>
    <option value=""> </option>
    <option value=""> </option>
    <option value=""> </option> -->
    <option value="Other">Other</option>
</select>
  </div>
  
  <!-- Language -->
  <div class="form-group">
    <label for="lang">Language <span>Select from the below options</span></label>
    <select name="lang"  id="lang" class="form-controll">
    <option value="English"> English</option>
    <option value="French">Francais</option>
    <option value="Spanish">Espanol</option>
    <option value="Amharic">Amharic  </option>
    <option value="Dutch">Deutsch</option>
    <option value="Other">Other</option>
    </select>
    
  </div>


  <!-- Description -->
  <div class="form-group">
    <label for="desc">Description <span>Explain a littile about the book</span></label>
    <textarea name="description" id="" cols="30" rows="10" required id="desc" class="form-controll"></textarea>
    
  </div>
  </div>
  <!-- cont1 -->

<div class=cont2>
  <!-- image upload -->
  <div class="form-group file-area">
        <label for="images">Image(s) <span>Your images should be at least 400x300 wide</span></label>
    <input type="file" name="file" id="images" required="required" accept="*.jpg"/>
    <div class="file-dummy">
      <div class="success">Great, your files are selected. Keep on.</div>
      <div class="default">Please select some files</div>
    </div>
  </div>

  <!-- file upload -->
  <div class="form-group file-area">
        <label for="file">File <span>Your file should be in pdf format</span></label>
    <input type="file"  name="bookpdf" id="file" required="required" multiple="multiple"/>
    <div class="file-dummy">
      <div class="success">Great, your files are selected. Keep on.</div>
      <div class="default">Please select some files</div>
    </div>
  </div>
  <!-- cont2 -->
</div>

</div>
<!-- whole -->
  <!-- submit -->
  <div class="form-group">
    <button type="submit">Upload Book</button>
  </div>
  
</form>


<?php  include '../inc/footer.php' ?>
</body>
</html>