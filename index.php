<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="././multimedia/resources/logo/logoname2.png"/>
    
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/index.css"/>
    <link rel="stylesheet" type="text/css" href="css/footer.css"/>
    <link rel="stylesheet" type="text/css" href="css/team.css"/>

   <script src="searchfunction.js" defer></script>
    <script src="user.js" defer></script>
    <script src="addtocart.js" defer></script>

    <title>Library</title>

<style>
#search-box 
{
  width: 430px;
  box-sizing: border-box;
  border: 1px solid #292f46;
  border-radius: 56px 0px 0px 57px;
  font-size: 16px;
  background-color: white;
  justify-content:space-between;
  margin-left:30%;
  /* background-position: 10px 10px;  */
  /* background-repeat: no-repeat; */
  padding: 10px 10px 10px 6px;
  /* -webkit-transition: width 0.4s ease-in-out; */
  /* transition: width 0.4s ease-in-out; */
}
.search > form > button
{
    border-radius: 0px 56px 57px 0px;
}

.search > form 
{
display: flex;

}

header
{
    margin-bottom:40px;
}

</style>

</head>

<body background="./multimedia/resources/banner-bg.jpg">
    <!-- header -->
 
            <?php include("./inc/nav_bar.php")?>
     
        <div class="search" align = center hidden>
            <form id="frm" style="margin-bottom:20px">
                <input id="search-box" type="search" placeholder="Search for books..." list = "searchKey">
                <datalist id="searchKey">
                    <option value="The definitive guide to HTML">
                    <option value="HTML, CSS, Javascript web publishing">
                    <option value="The Psychology of money">
                    <option value="Atomic habits">
                    <option value="Ego is the Enemy">
                    <option value="Mindset">
                    <option value="Finish What you start">
                    
                </datalist>
                    <button onclick=find() id=label>Search</button>
                 </form>
               
            
        </div>
        
    <!-- home section -->
<div id=all>
    <div id=first>
       
                <div>
                    <h1> Upto 30% for all sales!!!</h1> 
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic veritatis et possimus temporibus illum ex eaque quo 
                        inventore, ullam ipsum blanditiis reprehenderit, quae harum neque ducimus modi. Quis, ab nobis.
                    </p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic veritatis et possimus temporibus illum ex eaque quo
                         inventore, ullam ipsum blanditiis reprehenderit, quae harum neque ducimus modi. Quis, ab nobis.
                    </p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic veritatis et possimus temporibus illum ex eaque quo
                         inventore, ullam ipsum blanditiis reprehenderit, quae harum neque ducimus modi. Quis, ab nobis.
                    </p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic veritatis et possimus temporibus illum ex eaque quo 
                        inventore, ullam ipsum blanditiis reprehenderit, quae harum neque ducimus modi. Quis, ab nobis.
                    </p> 
                </div>

                    <div  class="bookstand">
                        <div>
                    <a href="#"> <img src="./multimedia/resources/books/fiker-eske.jfif" alt="fiker-eske-mekaber" width="143px" ></a>
                    <a href="#"> <img src="./multimedia/resources/books/admas.jfif" alt="keadmas-bashager" width="143px"></a>
                    </div>

                    

                    <div>
                    <a href="#"> <img src="./multimedia/resources/books/oromay.jfif" alt="oromay" width="143px"></a>
                    <a href="#"> <img src="./multimedia/resources/books/dertogada.jfif" alt="dertogada" width="143px" height="99%"></a>
                        </div>

                        <div>
                    <img src="./multimedia/resources/stand.png" alt="stand" width="300px">
                        </div>
   
                    </div>
                
    </div>
   


    <br> <br><br>

    <!-- second page-->
    <section>
        <div>
            <table width=100%   align="center" background= "./multimedia/resources/table-banner.png">
                <tr>
                    <td> <h3> <img src="./multimedia/resources/icons/icon1.png.jpg" alt="book-icon" width="44px"> All the books you need</h3>
                        <br><i> <i>We over thousands of books hosted in our website</p> </i>  <br>                      
                    </td>
                    <td> <h3> <img src="./multimedia/resources/icons/icon2.png.jpg" alt="secure-icon" width="44px"> Secure </h3> 
                        <br><i> <i>Our website is 100% secure</p> </i> <br>
                    </td>
                    <td> <h3> <img src="./multimedia/resources/icons/icon3.jfif.jpg" alt="24/7access-icon" width="44px"> 24/7 Access</h3> 
                        <br><i> <i>Our website is up all the time</p> </i>  <br>
                    </td>
                    <td> <h3> <img src="./multimedia/resources/icons/icon4.png" alt="cheap-icon" width="44px"> Affordable </h3> 
                        <br><i> <i>Books in our collection are all affordable</p> </i>  <br>
                    </td>
                </tr>
            </table>
            <br> <br> <br>      
        </div>

        <!-- featured-books-->
        <div id="section2">
            <a id="featuredbooks"></a>
                 <CENTER> <h2> Featured books </h2> </CENTER>
        
          <table align="center" width= 100%>
              <tr>
              <td>
                    <a onclick=setlookout(124) href="Description.php"> <img src="./multimedia/resources/books/fiker-eske.jfif" alt="fiker-eske-mekaber" width="143px"> </a>
                    <p> <strong> ፍቅር እስከ መቃብር </strong> </p>
                              <p> <big> ETB 23.25.</big>  </p>
                              <p> <address>Author:Hadisu Alemayehu </address></p>
                    <button onclick=migrate(124)> Add To Cart</button>   
                  </td>
                  <td>
                    <a onclick=setlookout(124) href="Description.php"> <img src="./multimedia/resources/books/fiker-eske.jfif" alt="fiker-eske-mekaber" width="143px"> </a>
                    <p> <strong> ፍቅር እስከ መቃብር </strong> </p>
                              <p> <big> ETB 23.25.</big>  </p>
                              <p> <address>Author:Hadisu Alemayehu </address></p>
                    <button onclick=migrate(124)> Add To Cart</button>   
                  </td>
                  <td>
                    <a onclick=setlookout(114)  href="Description.php"> <img src="./multimedia/resources/books/admas.jfif" alt="keadmas-bashager" width="143px"></a>  
                    <p> <strong> ከአድማስ ባሻገር</strong> </p>
                    <p> <big> ETB 12.12</big>  </p>
                    <p> <address>Author:Baalu Girma </address></p>
                    <button onclick=migrate(114)> Add To Cart</button>   
                  </td>
                  <td>
                    <a onclick=setlookout(122) href="Description.php" > <img src="./multimedia/resources/books/oromay.jfif" alt="oromay" width="143px"></a>
                    <p> <strong> ኦሮማይ </strong> </p>
                    <p> <big> 25.36.</big>  </p>
                    <p> <address>Author:Baalu Girma </address></p>
                    <button onclick=migrate(122)> Add To Cart</button>     
                  </td>
                  <td>
                    <a onclick=setlookout(118) href="Description.php" > <img src="./multimedia/resources/books/dertogada.jfif" alt="dertogada" width="143px"></a>  
                    <p> <strong> ዴርቶጋዳ </strong> </p>
                              <p> <big>ETB 12.12</big>  </p>
                              <p> <address>Author:Yismaeke worku </address></p>
                    <button onclick=migrate(118)> Add To Cart</button>   
                  </td>
              </tr>

              <tr>
                <td>
                  <a onclick=setlookout(110) href="Description.php" > <img src="./multimedia/resources/books/10.jpg" alt="fiker-eske-mekaber" width="143px"> </a>
                  <p> <strong> CSS Visual Dicitonary </strong> </p>
                            <p> <big> ETB 35.53</big>  </p>
                            <p> <address>Author:Greg Sidelnikov </address></p>
                  <button onclick=migrate(110)> Add To Cart</button>   
                </td>
                <td>
                  <a onclick=setlookout(123)  href="Description.php"> <img src="./multimedia/resources/books/the secret of life.jpg" alt="keadmas-bashager" width="143px"></a>  
                  <p> <strong> The Secret of life </strong> </p>
                            <p> <big> ETB 45.18</big>  </p>
                            <p> <address>Author:Amanda Love </address></p>
                  <button onclick=migrate(123)> Add To cart</button>   
                </td>
                <td>
                  <a onclick=setlookout(116)  href="Description.php"> <img src="./multimedia/resources/books/anne frank.jpg" alt="oromay" width="143px"></a>
                  <p> <strong> Anne Frank </strong> </p>
                            <p> <big> ETB 25.25</big>  </p>
                            <p> <address>Author:B.M Mooyart </address></p>
                  <button onclick=migrate(116)> Add To Cart</button>     
                </td>
                <td>
                  <a onclick=setlookout(14)  href="Description.php"> <img src="./multimedia/resources/books/4.jpg" alt="dertogada" width="143px"></a>  
                  <p> <strong> The Psychology of money </strong> </p>
                  <p> <big> ETB 45.52</big>  </p>
                  <p> <address>Author:Morgan Housel </address></p>
                  <button onclick=migrate(14)> Add To Cart</button>   
                </td>
            </tr>


          </table>
          <br>
        </div>
    </section>

    <section>
        <!-- Register-->
        <form action="">
          <br>
          <br>
          <br>
          <br>
          
        <div  align ="center">
            <h2 align ="center"> Subscribe To Get The Latest News</h2>
            
            <table width = 100%  align="center" background= "./multimedia/resources/r2.jfif"> 
                <tr>
                    <td align="center">
                    <br><br><br><br>
                    <input type="email" align ="center" placeholder="Enter your Email" required>
                    <br><br>
                    <Button onclick="subs()">Subscribe</Button>
                    <br><br><br><br><br><br><br><br>
                </td>
                </tr>
            </table>
            <br><br><br>
        </div>
    </form>
       
    
        <div id=dotd>
            <div>
                        <h1>Deal Of The Day</h1>
                        <h2> 30% Discount</h2>
                        <p> for this week we have put a 30% sales off all books.<br>
                            Dont miss this chance of ordering your favoirte book!!!
                        </p>
                   <button> Buy Now! </button>  
           </div>

           <div>
                <img src="./multimedia/resources/bookOfTheDay.jfif" alt="book of the day" width="500px">
            </div>   
         
        </div>

        <a id="reviews"></a>
        <center> <h2> Client's Reviews</h2> </center>

        <div id="section4" width = 100% align = center>
                <div>
                       <img src="./multimedia/resources/icons/person.jfif.png" alt="someone's picture" width= 64px>
                       <h3> someone</h3>
                       <p>I really enjoy this site props to the one's who developed this.
                        I give this site 5 star. 
                </div>
                   
                <div>
                        <img src="./multimedia/resources/icons/person.jfif.png" alt="someone's picture"  width= 64px>
                        <h3> someone</h3>
                        <p>I really enjoy this site props to the one's who developed this.
                            I give this site 5 star. 
                        </p> 
                </div>
                   
                <div>
                        <img src="./multimedia/resources/icons/person.jfif.png" alt="someone's picture"  width= 64px>
                        <h3> someone</h3>
                        <p>I really enjoy this site props to the one's who developed this.
                            I give this site 5 star. 
                        </p> 
                </div>
                   
                <div>
                       <img src="./multimedia/resources/icons/person.jfif.png" alt="someone's picture" width= 64px>
                       <h3> someone</h3>
                       <p>I really enjoy this site props to the one's who developed this.
                        I give this site 5 star. 
                    </p> 
                </div>
                    
                <div>
                        <img src="./multimedia/resources/icons/person.jfif.png" alt="someone's picture"  width= 64px>
                        <h3> someone</h3>
                        <p>I really enjoy this site props to the one's who developed this.
                            I give this site 5 star. 
                        </p> 
                </div>
                    
                <div>
                        <img src="./multimedia/resources/icons/person.jfif.png" alt="someone's picture"  width= 64px>
                        <h3> someone</h3>
                        <p>I really enjoy this site props to the one's who developed this.
                            I give this site 5 star. 
                        </p>  
                </div> 
        </div>
    

        
        <center>
          <h2> Upcoming Events</h2>
      </center>
    <div id="section5" width = 50% align = center>
         
            <div>
                        <img src="./multimedia/resources/events/event.jfif" alt="book reading for the elderly">
                        <p> <i> Book reading event for the senior citizens. </i></p>
                        <button> Read More </button> 
            </div>


            <div>
                        <img src="./multimedia/resources/events/event1.jfif" alt="book launch event">
                        <p> <i>New book launching soon </i> </p>
                        <button> Read More </button>
            </div>


            <div>
                        <img src="./multimedia/resources/events/event2.jfif" alt="book reading event">
                        <p> <i>Book reading event for all </i> </p>
                        <button> Read More </button>
             </div>
    </div>

    </section>

    <!-- about us section-->
    <br />
    <br />
    <br />
    <br />

    <div id = "bod">
    <h2 style="font-size: 40px" ><center>The Team</center></h2>

      <div id = "boxes">
    <div class= "container">
        <div class= "box">
            <div class = "imgBox">
                <img src = "./multimedia/resources/capture.png">
            </div>
            <div class = content>
                 <h3>Tesfamariam Amsalu <br /> <span>Developer</span></h3>
                
            </div>
        </div>
    </div>
    <div class= "container">
        <div class= "box">
            <div class = "imgBox">
                <img src = "./multimedia/resources/capture.png">
            </div>
            <div class = content>
                 <h3>Selina Yeshanew <br /> <span>Developer</span></h3>
                
            </div>
        </div>
    </div>

    <div class= "container">
        <div class= "box">
            <div class = "imgBox">
                <img src = "./multimedia/resources/capture.png">
            </div>
            <div class = content>
                 <h3>Betelhem Mekonnen <br /> <span>Developer</span></h3>
                
            </div>
        </div>
    </div>
    <div class= "container">
        <div class= "box">
            <div class = "imgBox">
                <img src = "./multimedia/resources/capture.png">
            </div>
            <div class = content>
                 <h3>Tibebe Solomon <br /> <span>Developer</span></h3>
                
            </div>
        </div>
    </div>
    <div class= "container">
        <div class= "box">
            <div class = "imgBox">
                <img src = "./multimedia/resources/capture.png">
            </div>
            <div class = content>
                 <h3>Tsion Tesfaye <br /> <span>Developer</span></h3>
                
            </div>
        </div>
    </div>
</div>

        </div>

    <!-- footer section-->  
      <!-- Site footer -->
   <?php include("./inc/footer.php") ?>
  
      <button onclick="topFunction()" id="myBtn">&#8593;</button>
      <!-- scroll to top function -->
    <script>
      //Get the button
      var mybutton = document.getElementById("myBtn");
      
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {scrollFunction()};
      
      function scrollFunction() {
        if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 500) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }
      
      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
      </script>
      
     
</body>
</html>