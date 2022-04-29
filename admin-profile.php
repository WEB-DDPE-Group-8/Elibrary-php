<?php
if(isset($_SESSION["username"]))
{
header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./multimedia/resources/logo/logo.png"/>

    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/footer.css"/>
    <link rel="stylesheet" type="text/css" href="css/index.css"/>

    <!-- <script src="user.js"></script>
    <script src="Addtask.js" defer> </script> -->

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
        

    <title>Admin Profile</title>
</head>
<body>
    <body background="multimedia/resources/banner-bg.jpg">
            <!-- header -->
             <?php 
            include("./inc/nav_bar.php");
             ?> 
     
        <main>
            <div id="profilepic">

                <Div>           
                    
                    <img src="multimedia/resources/icons/location.png" alt="location icon" height = "150px">
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
                    <p>E-mail: <span id=emali_name>
                    <?php  
                    if(isset($_SESSION['email']))
                    {
                        echo $_SESSION["email"];
                    }
                    else
                    {
                        echo "Name@domain.com";
                    }
                        ?>
                    
                </span></p>
                </div>    
                            
                                <h3> <span id="prof_name"></span></h3>               
            </div>
            
            <!--  -->
            
            <div id=admin-tasks>
                <p style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-style: oblique;">Books to be apprpoved</p>
                <form>
                <ul id="list"></ul>

            </div>
    <div id="Upload">
        <br><br><br>
    <center>
        <div id=btnsss>
        <button>
            <a  style="text-decoration: none;"  href="upload_page_admin.php">Upload a Book </a>  
        </button>
        <BR>
        
    <form action="./lib/db.php" method="GET">
        <input type="submit" id="logout" name="log_out" value="Logout">
    </form>
        
        </div>
        </center>
        </div>           
    </div>
                        
    </div>  
    </main>     

            <?php include("./inc/footer.php") ?>
</body>
</html>