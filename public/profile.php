<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
   <link rel="stylesheet" href="../css/profile2.css">
    <title>Profile </title>
</head>

<body>
<?php
include "../inc/nav_bar.php";
if(!isset($_SESSION["loggedin"]) )
{
header("location:login.php");
}  
?>

  <div class="main-content">
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello <?php echo $_SESSION["username"] ?></h1>
            <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
            <!-- <a href="#!" class="btn btn-info">Edit profile</a> -->
          </div>
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
                   if(!file_exists("../multimedia/users/$_SESSION[UserID].jpg"))
                      {
                        echo("def.jpg");
                      }
                   else
                      {
                        echo  $_SESSION["UserID"].".jpg";
                      }
                       ?>'
                     class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
                <button onclick="edit()" id="edit" class="btn btn-sm">Edit profile</button>
              </div>
            </div>
            <div class="card-body pt-0 pt-md-4">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                    <div>
                      <span class="heading"><?php echo $_SESSION["uploads"] ?></span>
                      <span class="description">Uploads</span>
                    </div>
                    <div>
                      <span class="heading"> 
                        <?php
                        echo $_SESSION["role"]; 
                       ?>
                      </span>
                      <span class="description">Role</span>
                    </div>
                    <div>
                      <!-- <span class="heading">89</span>
                      <span class="description">Comments</span> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h3>
                  <?php echo $_SESSION["username"] ?><span class="font-weight-light">, 27</span>
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
                <div class="col-8">
                  <h3 class="mb-0">My account</h3>
                </div>
                <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                </div>
              </div>
            </div>
            <div class="card-body">
           <?php 
            include '../lib/update.php';
           ?>
              
              <form action="profile.php" method="POST">
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <h2> 
                  <?php
                if(isset($errors) && count($errors)>0){
                  foreach($errors as $error)
                  {
                    echo($error);
                  }
                }
                ?></h2>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Username</label>
                        <input type="text" id="input-username" name="usrname" class="form-control form-control-alternative" readonly placeholder="Username" value=<?php echo $_SESSION["username"] ?> >
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" readonly name="email"  class="form-control  form-control-alternative" placeholder="Email" value= <?php echo $_SESSION["email"]?> >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">First name</label>
                        <input type="text" id="input-first-name" readonly name="fname"  class="form-control form-control-alternative" placeholder="First name" value=<?php echo $_SESSION["firstname"] ?>>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Last name</label>
                        <input type="text" id="input-last-name" readonly name="lname"  class="form-control form-control-alternative" placeholder="Last name" value= <?php echo $_SESSION["lastname"]?>>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">About me</h6>
                <div class="pl-lg-4">
                  <div class="form-group focused">
                    <label>About Me</label>
                    <textarea rows="4" class="form-control form-control-alternative" name="about" readonly placeholder="A few words about you ..."><?php echo $_SESSION['about']  ?></textarea>
                  </div>
                  <div>
                  <button hidden type="submit" name="update" class="btn upd-prof">Update<button>
                      <a class="btn" href="upload_page_admin.php">Upload a Book</a>
                  </div>
                </form>

                <form method="POST" action="../lib/db.php">
                  <button type="submit" name="log_out" class="btn">Log out<button>
                </form>
                </div>
                <button hidden  onclick="cancelEdit()"  class="btn upd-prof">Cancel<button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<script src="../js/edit.js"></script>
<?php include '../shared/myuploads.php'; ?>
  <?php
  if($_SESSION["role"]=="Admin"){
  include '../admin/tasks.php' ;
}
   ?>
  <?php include '../inc/footer.php'; ?>
</body>
</html>