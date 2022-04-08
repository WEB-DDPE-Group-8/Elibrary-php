<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="././multimedia/resources/logo/logo.png"/>
    <title>Profile </title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
   
    <link rel="stylesheet" type="text/css" href="css/index.css"/>
    <link rel="stylesheet" type="text/css" href="css/footer.css"/>
<style>

#profilepic > div
{
    display: flex;
    flex-direction: column;
    float: right;
    margin-top: 130px;
    /* padding-left:-500px; */   
}


#profile> div
{
 float:right;
 padding-right: 60px;
 
}


#status ul
{
    display: block;
    /* align-items:flex-end; */
    /* background-color: rgb(6, 79, 79); */
    justify-content: center;
    list-style: none;
}


#upload button
{
    padding: 5px;
}


#info
{
    display: flex;
}


main
{
    margin:40px;
}


</style>

</head>
 
<body background="./multimedia/resources/banner-bg.jpg">
        <!-- header -->
        <?php include("./inc/nav_bar.php") ?>
 
        <main>
  <div id="overarch">
<div id="profilepic">
   
    <Div>           
        
        <img src="./multimedia/resources/icons/location.png" alt="location icon" height = "150px">
        <span> Ethiopia, AA</span>
    </Div> 
              
                        <figure>
                            <label for="cover">
                                <img src="./multimedia/resources/icons/person.jfif.png" alt="name of user">
                                <input hidden id="cover" type=file accept="image/*" multiple>
                                
                            </label>
                            
                        </figure>
                   

</div>



<div id= profile>        
    <div>        
        <h3>Contact me at:</h3>
        <p>E-mail:<span id=emali_name></p>
</div>    
             
                    <h3> <span id="prof_name"></span></h3>
                   
                   
      
                  
</div>


</div>

<div id="Upload">
  <br><br><br>
                     <center>
                        <div id=btnsss>
                            <button>
                              <a  style="text-decoration: none;"  href="upload page.php">Upload a Book </a>  
                            </button>
                                            <br><br><br><br><br><br>
                                            <a style="text-decoration: none;" href="indext.php"> <button id=logout onclick=<?php unset($_SESSION['username']) ?>>
                             Logout 
                            </button></a>  
                            </div>
                            </center>
                        </div>           
</div>
                    
</div>
        </main>

        <?php include("./inc/footer.php") ?>
        <script src="user.js"></script>
</body>
</html>
