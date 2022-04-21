<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="./resources/logo/logo.png"/>

        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <!-- <link rel="stylesheet" type="text/css" href="css/footer.css"/> -->

        <script src="user.js"></script>
        <script src="addtocart.js" defer></script>
        <script src="upload.js" defer></script>

        
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
      href="css/min.css"
    />

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css" />
    
    <title>Upload</title>

<style>

select
{
padding: 6px 2px;
margin: 8px 0;
display: inline-block;
border: 1px solid #e8e8e8;
border-radius: 4px;
box-sizing: border-box;
}

input[type=number]
{
    padding: 2px 0px;
margin: 8px 0;
display: inline-block;
border: 1px solid #e8e8e8;
border-radius: 4px;
box-sizing: border-box; 
}
input[type=text], textarea,input[type=number]
{
padding: 6px 2px;
margin: 8px 0;
display: inline-block;
border: 1px solid #e8e8e8;
border-radius: 4px;
box-sizing: border-box;
}

input[type=date]
{
    background-color: #bababa;
    border-radius: 4px;
    border:none;
    padding:4px 2px
}

input[type=submit]:hover
{
    background-color: #032879;
}

input[type=submit]
{
background-color:#0237ab;
padding: 18px;
border: none;
border-radius: 5px;
color: white;
font-size:medium;
font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
margin-top: 25px;
margin-left:50%;
}


input[type=file]
{
    background-color: #bababa;
}


select
{
    background-color: #bababa;
}


textarea
{
    border:none;
    resize:none;
}

#uploadform
{
    margin-left:70px;
}

#uploadform p #bookname
{
    margin-left:70px;
}
#uploadform p #author
{
    margin-left:100px;
}
#uploadform p #date
{
    margin-left:40px;
}
#uploadform p #genre
{
    margin-left:90px;
}
#uploadform p #lang
{
    margin-left:110px;
}

    </style>

    </head>

<body background="resources/banner-bg.jpg">
             <!-- header -->
            <?php include("./inc/nav_bar.php") ?>
 <div id="cont">    
<center>
        <p>This page is for a user to upload any file in a pdf format to our servers</p><br/>
</center>  

<div id="addbutton"style="float: right">                
            <label for="cover">

            
                <div > 
                    <p>
                    <label for="cover"> <img id=blah src="resources/add-image.png"  width="auto" height=auto > <br/> Add Cover Page(s) </label>
                    <input hidden id="cover" type=file accept="image/*">
    <script>
        cover.onchange = evt => {
            const [file] = cover.files
            if (file) {
            blah.src = URL.createObjectURL(file)
            console.log(blah.src)
            }
        }
    </script>
                    </p>
                </div>


                <div>
                    <p>
                        <label for="filec"> <img id=nm src="resources/add-file.png" width="52px"> <br/> Add Book  </label>
                        <input id="filec" type="file"  hidden >
    <script>
        filec.onchange = evt => {
            const [file] = filec.files
            if (file) {
            nm.src ="./resources/add-file-success.png"
            }
        }
    </script>
                        
                    </p>
                </div>
            </label><br/>
  
</div>



  <div id="uploadform">
            <form>
        <p>
        <label for="bookname">Book Name</label>
        <input type="text" id="bookname"  size=40 required> 
        </p>

        <p>
            <label for="author">Author</label>
            <input placeholder="Anonymus" value="Anonymus" type="text" id="author" size=40 />
        </p>

        <p>
            <label for="date" >Date of publishing</label>
            <input id="date" type="date" value="2020-02-22" required ></input>
        </p>
            
<p>
        <label for="genre">Category</label>
        <select name="genre" id="genre" size required >
            <option value="Other">Choose an option</option>
            <option value="Educational">Educational</option>
            <option value="Self-help">Self-help</option>
            <option value="Biography">Biography</option>
            <option value="Sci-fi">Sci-fi</option>
            <option  value="World history">World History</option>
            <option  value="Business">Business</option>
            <option  value="Other">Other</option>
        </select>
</p>

<p>
        <label for="'lang">Language</label>

        <select id="lang" name="lang" required>

        <option value="English"> English</option>
        <option value="French">Francais</option>
        <option value="Spanish">Espanol</option>
        <option value="Amharic">Amharic  </option>
        <option value="Dutch">Deutsch</option>
        <option  value="other">Other</option>
        </select>
</p>

<p>
        <label for="Desc" title="Describe what your book is about, the characters, the plot and the setting but be sure not to include spoilers">Description<br/></label>
        <textarea id="Desc" rows="10" cols="30">
        </textarea>  
</p>

<p>
        <label for=price >Price<br/> </label>
        <b><em title="Enter price in dollars we'll convert currency based on location">$ </em></b><input id=price type=number>
</p>

<p>
</form>
         
         
       
</p>

</div>
<div > <center><a href="success.php" style="text-decoration:none;"> <button id=upld> Submit</button> </a> </center> </div>
</div>      

<?php include("./inc/footer.php") ?>

</body>
</html>