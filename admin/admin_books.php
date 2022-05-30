<?php
session_start();
include '../config/dbconfig.php';
   if(false){
      $getbooks = "SELECT Title,Downloads,Author,Description,Genre,Language,Price,Likes,Dislikes,Status FROM books";
      $books =mysqli_query($db,$getbooks);
      $report='"Title","Downloads","Author","Description","Genre","Language","Price","Likes","Dislikes","Status"'."\n";
      $count = 1;
      if(mysqli_num_rows($books)>0)
    {
       while ($q = mysqli_fetch_assoc($books)) {
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
   }
    else
    {
       $report='"no file",';
    }
    date_default_timezone_set('Africa/Addis_Ababa');
    $curr_date=date('d-m-y');;
    $fileName="Bsook List Report(".$curr_date.").csv";
    header("Content-type: text/x-csv");
    header("Content-Disposition: attachment; filename=".$fileName);
   echo $report;
    exit;
    header("Location:admin_events.php");
   }
include '../inc/admin-nav.php'; 

$query = "SELECT * FROM books";
$results = mysqli_query($db,$query);
if(isset($_GET["delete"])){

while($rows = mysqli_fetch_assoc($results)){
   
   if($rows['Status'] == 'Active' && $rows['UserID'] ==  $_GET['delete']){
      $delete_id = $_GET['delete'];
      mysqli_query($db, "UPDATE user SET Status ='Deactivated' WHERE UserID = '$delete_id'") or die('query failed');
      unset($_GET['delete']);
      header('location:admin_users.php');
   }
   else if($rows['Status'] == 'Deactivated' && $rows['UserID'] ==  $_GET['delete']){
   $delete_id = $_GET['delete'];
   mysqli_query($db, "UPDATE user SET Status ='Active' WHERE UserID = '$delete_id'") or die('query failed');
   unset($_GET['delete']);
   header('location:admin_users.php');
}
   
}
}

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
   
<?php 
include 'import books.php';
?>


<section class="users">

   <h1 class="title" style="color:black"> Books List </h1>

   <div class="box-container">
      <?php
         $select_books = mysqli_query($db, "SELECT * FROM books") or die("query failed");
         while($fetch_books = mysqli_fetch_assoc($select_books)){
            //  var_dump($fetch_books);
      ?>
      <div class="box">
         <p> Title : <span  style="color:black"><?php echo $fetch_books['Title']; ?></span> </p>
         <p> Author : <span  style="color:black">   <?php echo $fetch_books['Author']; ?></span> </p>
         <p> Lang : <span style="color:black"><?php echo $fetch_books['Language']; ?></span> </p>
         <a href="admin_users.php?delete=<?php echo $fetch_books['UserID']; ?>" onclick="return confirm('Make Changes to <?php echo $fetch_books['Title']; ?>')" class="btn"><?php echo $fetch_books['Status']; ?></a>
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