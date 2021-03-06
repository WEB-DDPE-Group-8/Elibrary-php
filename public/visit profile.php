<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <link rel="stylesheet" href="../css/profile2.css">
  <link rel="icon" href="../multimedia/logo.png" type="image/icon type">
  <title>Profile</title>
</head>

<body>
  <?php
include "../inc/nav_bar.php";     
if(!$_SESSION["loggedin"] === true)
{
header("location:login.php");
}           
?>

  <div class="main-content">
    <?php
include "../lib/visit.php";

?>
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
      </div>
    </div>
  </div>
  <!-- Page content -->
  <div class="container-fluid mt--7">
    <div class="row">
      <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
        <div class="card card-profile shadow">
          <div class="row justify-content-center">
            <div class="col-lg-3 order-lg-2">
              <div class="card-profile-image">
                <a href="#">
                  <img src='../multimedia/users/<?php 
                   if(!file_exists("../multimedia/users/$visit[UserID].jpg"))
                      {
                        echo("def.jpg");
                      }
                   else
                      {
                        echo  $visit["UserID"].".jpg";
                      }
                       ?>' class="rounded-circle">
                </a>
              </div>
            </div>
          </div>
          <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
            <div class="d-flex justify-content-between">
              <a href="mailto: <?php echo $visit["Email"] ?>" class="btn btn-sm btn-default float-right">Message</a>
            </div>
          </div>
          <div class="card-body pt-0 pt-md-4">
            <div class="row">
              <div class="col">
                <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                  <div>
                    <span class="heading"><?php echo $visit["uploads"] ?></span>
                    <span class="description">Uploads</span>
                  </div>
                  <div>
                    <span class="heading">
                      <?php  
                        
                        echo  $visit["isAdmin"]; 
                          
                       ?>
                    </span>
                    <span class="description">Role</span>
                  </div>
                  <div>
                    <span class="heading">89</span>
                    <span class="description">Comments</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center">
              <h3>
                <?php echo $visit["UserName"] ?><span class="font-weight-light">, 27</span>
              </h3>
              <div class="h5 font-weight-300">
                <i class="ni location_pin mr-2"></i>Bucharest, Romania
              </div>
              <div class="h5 mt-4">
                <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
              </div>
              <div>
                <i class="ni education_hat mr-2"></i>University of Computer Science
              </div>
              <hr class="my-4">
              <p><?php echo $_SESSION['about']  ?></p>
              <a href="#">Show more</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-8 order-xl-1">
        <div class="card bg-secondary shadow">
          <div class="card-header bg-white border-0">
            <div class="row align-items-center">


            </div>
          </div>
          <div class="card-body">
            <h6 class="heading-small text-muted mb-4">User information</h6>
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group focused">
                    <label class="form-control-label" for="input-username">Username</label>
                    <input type="text" id="input-username" class="form-control form-control-alternative" readonly
                      placeholder="Username" value=<?php echo $visit["UserName"] ?>>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Email address</label>
                    <input type="email" id="input-email" class="form-control form-control-alternative" readonly
                      placeholder=<?php echo $visit["Email"]?>>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group focused">
                    <label class="form-control-label" for="input-first-name">First name</label>
                    <input type="text" id="input-first-name" class="form-control form-control-alternative" readonly
                      placeholder="First name" value=<?php echo $visit["FirstName"] ?>>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group focused">
                    <label class="form-control-label" for="input-last-name">Last name</label>
                    <input type="text" id="input-last-name" class="form-control form-control-alternative" readonly
                      placeholder="Last name" value=<?php echo $visit["LastName"]?>>
                  </div>
                </div>
              </div>
            </div>
            <hr class="my-4">
          </div>

        </div>
      </div>
    </div>
  </div>
  </div>
  </div>



  <?php
include "../inc/footer.php";
  ?>

</body>

</html>