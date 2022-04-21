<!DOCTYPE html>

<html>
<head>
    <title>Description</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./resources/logo/logo.png"/>
    <!-- <script src="user.js"></script> -->
    <script src="addtocart.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <!-- <link rel="stylesheet" type="text/css" href="css/footer.css"/> -->
    <link rel="stylesheet" type="text/css" href="css/index.css"/>


</head>

<body background="resources/banner-bg.jpg">
          <!-- header -->
         <?php  include("./inc/nav_bar.php") ?>

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
          
            <p><b>Title:</b><br> <span id=name> kjsdbkfjdb </span></p>
             <p><b>Author:</b><br><span id=auth>Jon Duckett</span></p>
            
            <p><b>Description:</b><br>
              <span  id="descr">A full-color introduction to the basics of HTML and CSS from the publishers of Wrox!
                Every day, more and more people want to learn some HTML and CSS. Joining the professional web designers and programmers are new audiences who need to know a little bit of code at work (update a content management system or e-commerce store) and those who want to make their personal blogs more attractive. Many books teaching HTML and CSS are dry and only written for those who want to become programmers, which is why this book takes an entirely new approach.
                Introduces HTML and CSS in a way that makes them accessible to everyone—hobbyists, students, and professionals—and it’s full-color throughout
               Utilizes information graphics and lifestyle photography to explain the topics in a simple way that is engaging
                Boasts a unique structure that allows you to progress through the chapters from beginning to end or just dip into topics of particular interest at your leisure
                This educational book is one that you will enjoy picking up, reading, then referring back to. It will make you wish other technical topics were presented in such a simple, attractive and engaging way!
              </span> </p>
            <p><b>Language:</b><br><span id="lang" >English</p>
            <p><b>Genre:</b><br><span id="cat"></span>Tech </span></p>
            <p><b>Price:</b><br>ETB <span  id="pr"> 100</span></p>
            
        </ul>
    </div>
    </td>
</tr>
</table>

<table align="center">
    <tr>
        <td align="center">
            <br><br><br>

            <button id=addto>Add to cart</a></button><br>
            <script>
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
            </script>
            <button id=share onclick=sharef() ><a   style="text-decoration: none;"> Share</a> </button>
        </td>
    </tr>
</table>
<br><br><br>

<p><big>Readers also liked</big></p>
<hr size =12px color =grey>
<a onclick=setlookout(12) href= "Description.php"><img  src="resources/books/2.jpg" width=255 height="400px"></a> 
<a onclick=setlookout(11) href= "Description.php"><img  src="resources/books/1.jpg" width=255 height="400px"></a> 
<a onclick=setlookout(110) href= "Description.php"><img  src="resources/books/10.jpg" width=255 height="400px"></a> 
<a onclick=setlookout(112) href= "Description.php"><img  src="resources/books/12.jpg" width=255 height="400px"></a> 
<a onclick=setlookout(13) href= "Description.php"><img  src="resources/books/3.jpg" width=255 height="400px"></a> 

<hr size =12px color =grey>
<br>


<p>Comments</p>

<div >
   
    <img src="resources/icons/person.jfif.png" height="50px">
    <p> <b>Someone</b></p>
    
    <p>
        This book was really insightful and helped me learn the basics of which I was having a hard time grasping.
    </p>

    <img src="resources/icons/person.jfif.png" height="50px">
    <p> <b>Someone</b></p>
    
    <p>
        This book was really insightful and helped me learn the basics of which I was having a hard time grasping.
    </p>

<details>
    <summary>Read More</summary>

    <img src="resources/icons/person.jfif.png" height="50px">
    <p> <b>Someone</b></p>
    
    <p>
        This book was really insightful and helped me learn the basics of which I was having a hard time grasping.
    </p>

    
    <img src="resources/icons/person.jfif.png" height="50px">
    <p> <b>Someone</b></p>
    
    <p>
        This book was really insightful and helped me learn the basics of which I was having a hard time grasping.
    </p>

    
    <img src="resources/icons/person.jfif.png" height="50px">
    <p> <b>Someone</b></p>
    
    <p>
        This book was really insightful and helped me learn the basics of which I was having a hard time grasping.
    </p>

    
    <img src="resources/icons/person.jfif.png" height="50px">
    <p> <b>Someone</b></p>
    
    <p>
        This book was really insightful and helped me learn the basics of which I was having a hard time grasping.
    </p>

    
    <img src="resources/icons/person.jfif.png" height="50px">
    <p> <b>Someone</b></p>
    
    <p>
        This book was really insightful and helped me learn the basics of which I was having a hard time grasping.
    </p>

    
    <img src="resources/icons/person.jfif.png" height="50px">
    <p> <b>Someone</b></p>
    
    <p>
        This book was really insightful and helped me learn the basics of which I was having a hard time grasping.
    </p>

</div>
</details>

<?php include("./footer.php") ?>

<script>
// console.log("book key "+ localStorage.getItem("History"))
    
var hist = JSON.parse(localStorage.getItem("History"))
var rem = document.getElementById("p1");
var div = document.getElementById("book")
var p = document.getElementById("p1");
         
        //  var bookimg = document.createElement("p");
var bookimg = document.createElement("img");

console.log(localStorage.getItem(hist))
if(localStorage.getItem(hist))
{
var infn = JSON.parse(localStorage.getItem(hist))
// console.log(name)
// console.log(infn.title)
bookimg.src=infn.impath
document.getElementById("name").textContent=infn.title.toUpperCase()
document.getElementById("descr").textContent=infn.desc
document.getElementById("auth").textContent=infn.auth
document.getElementById("lang").textContent=infn.lang
document.getElementById("descr").textContent=infn.desc
document.getElementById("cat").textContent=infn.cat
document.getElementById("pr").textContent=infn.price
div.appendChild(bookimg);
// console.dir(name)
}
else
    {
    alert("book key not found")
    }

             </script>

<?php include("./inc/footer.php")  ?>

</body>

</html>
