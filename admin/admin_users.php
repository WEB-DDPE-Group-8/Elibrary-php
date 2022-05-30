<?php
session_start();
include '../config/dbconfig.php';
   if(false){
      $getusers = "SELECT UserName,Email,PhoneNumber,Status,FirstName,LastName,IsAdmin,Interests,Status FROM user";
      $users =mysqli_query($db,$getusers);
      $report='"No","User Name","Email","Phone","Status","First Name","Last Name","Is Admin","Interests","Status"'."\n";
      $count = 1;
    while ($q = mysqli_fetch_assoc($users)) {
      $report .= $count++.",";
    foreach($q AS $key => $value){
      // $pos = strpos($value, '"');
      // if ($pos !== false) {
      //     $value = str_replace('"', '\"', $value);
         // echo $value;
         $report .= '"'.$value.'",';
      // }
      }
      $report .= "\n";
    }
    echo $report;
    date_default_timezone_set('Africa/Addis_Ababa');
    $curr_date=date('d-m-y');;
    $fileName="User List Report(".$curr_date.").csv";
    header("Content-type: application/csv");
   header("Content-Disposition: attachment; filename=".$fileName);
    exit;
    header("Location:index.php");
   }

include '../inc/admin-nav.php';



$query = "SELECT * FROM user";
$results = mysqli_query($db,$query);

if(isset($_GET["delete"])){

while($rows = mysqli_fetch_assoc($results))
   {
      
            if($rows['Status'] == 'Active' && $rows['UserID'] ==  $_GET['delete'])
            {
               $delete_id = $_GET['delete'];
               mysqli_query($db, "UPDATE user SET Status ='Deactivated' WHERE UserID = '$delete_id'") or die('query failed');
               unset($_GET['delete']);
               header('location:admin_users.php');
            }
            else if($rows['Status'] == 'Deactivated' && $rows['UserID'] ==  $_GET['delete'])
            {
               $delete_id = $_GET['delete'];
               mysqli_query($db, "UPDATE user SET Status ='Active' WHERE UserID = '$delete_id'") or die('query failed');
               unset($_GET['delete']);
               header('location:admin_users.php');
            }
         
      }
   }
// if(isset($_POST["ulist"])){

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dash Board Users</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">
   <link rel="stylesheet" href="../css/style.css">

</head>
<body>
   
<?php //include '../inc/admin-nav.php'; 
include 'import users.php';
?>


<section class="users">

   <h1 class="title" style="color:black"> user accounts </h1>

   <div class="box-container">
      <?php
         $select_users = mysqli_query($db, "SELECT * FROM user") or die("query failed");
         while($fetch_users = mysqli_fetch_assoc($select_users)){
      ?>
      <div class="box">
         <p> username : <span  style="color:black"><?php echo $fetch_users['UserName']; ?></span> </p>
         <p> email : <span  style="color:black">   <?php echo $fetch_users['Email']; ?></span> </p>
         <p> user type : <span style="color:black"><?php echo $fetch_users['IsAdmin']; ?></span> </p>
         <a href="admin_users.php?delete=<?php echo $fetch_users['UserID']; ?>" onclick="return confirm('Make Changes to <?php echo $fetch_users['UserName']; ?>')" class="btn"><?php echo $fetch_users['Status']; ?></a>
      </div>
      <?php
         };
      ?>
   </div>

</section>

<!-- custom admin js file link  -->
<script src="js/admin_script.js"></script>

</body>
</html>