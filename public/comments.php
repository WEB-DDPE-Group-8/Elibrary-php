   <link rel="stylesheet" href="../css/comments.css" />

<div class="gtco-testimonials">
  <div class="owl-carousel owl-carousel1 owl-theme">
    <div>
    <?php
    // $reviews = mysqli_fetch_assoc($reviews);
    // if(count($reviews )>0)
    // {
    foreach($reviews as $review)
    { 
    ?>
      <div class="card text-center">
        <img
          class="card-img-top"
          src='../multimedia/users/<?php 
                   if(!file_exists("../multimedia/users/$review[UserID].jpg"))
                      {
                        echo("def.jpg");
                      }
                   else
                      {
                        echo $review["UserID"].".jpg";
                      }
                       ?>'
          alt=""
        />
        <div class="card-body">
          <h5>

            <a href="visit profile.php?visit=<?php echo $review["UserName"]?>">
            <?php echo $review["UserName"] ?>
            </a>
            <br />
          </h5>
          <p class="card-text">
          <?php echo  $review["Content"] ?>
          </p>
        </div>
      </div>
      <?php 
      }
    // }
    // else{
      ?>
      <!-- <div class="card text-center">
      <img
          class="card-img-top"
          src='../multimedia/users/<?php echo($review["UserID"])?>.jpg'
          alt=""
        />
      <div class="card-body">
        <h5></h5> -->
        <!-- <p class="card-text">
        <?php echo  "No comments for this book yet" ?>
         </p>
      </div>
    </div>   -->
  <?php
    // }
      ?>
      
      
    </div>
  </div>
 </div>
<br>
 
