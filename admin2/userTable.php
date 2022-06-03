<?php

//html-to-excel.php

// $connect = new PDO("mysql:host=localhost;dbname=a2zlibrary", "root", "");

// $query = "SELECT * FROM user";

// $statement = $connect->prepare($query);

// $statement->execute();

// $result = $statement->fetchAll();

require_once '../inc/admin-nav.php';
require_once '../config/dbconfig.php';

require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet; 
use PhpOffice\PhpSpreadsheet\Writer\Xlsx; 

// Creates New Spreadsheet 
$spreadsheet = new Spreadsheet(); 
  
// Retrieve the current active worksheet 
$sheet = $spreadsheet->getActiveSheet(); 

$query = "SELECT * FROM user";
$results = mysqli_query($db,$query);

if(isset($_POST["convert"])){
$sheet->setCellValue("A1", "First Name");
$sheet->setCellValue("B1", "Last Name");
$sheet->setCellValue("C1", "Email");
$sheet->setCellValue("D1", "User Type");
$sheet->setCellValue("E1", "Status");

$i = 0;

while($fetch_users = mysqli_fetch_assoc($results)){

  $sheet->setCellValue("A".($i+2),  $fetch_users["FirstName"]);
  $sheet->setCellValue("B".($i+2), $fetch_users["LastName"]);
  $sheet->setCellValue("C".($i+2), $fetch_users["Email"]);
  $sheet->setCellValue("D".($i+2), $fetch_users["IsAdmin"]);
  $sheet->setCellValue("E".($i+2), $fetch_users["Status"]); 

  $i++; 

}

// Write an .xlsx file  
$writer = new Xlsx($spreadsheet); 
  
// Save .xlsx file to the files directory 
$writer->save('stat.xlsx'); 
}

?>



<!DOCTYPE html>
<html>
   <head>
     <title>Convert HTML Table to Excel using PHPSpreadsheet</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
   </head>
   <body>
     <div class="container">
      <br />
      <h3 align="center">All users of the website</h3>
      <br />
      <div class="table-responsive">
       <form method="POST" id="convert_form" action="">
            <table class="table table-striped table-bordered" id="table_content">
              <>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>User Type</th>
                <th>Status</th>
              
              <?php
            //  foreach($result as $fetch_users)
             // {
                // echo '
                // <tr>
                //   <td>'.$row["FirstName"].'</td>
                //   <td>'.$row["LastName"].'</td>
                //   <td>'.$row["Email"].'</td>
                //   <td>'.$row["IsAdmin"].'</td>    
                //   <td>'.$row["Status"].'</td>
                // </tr>
                // ';
             // }
              ?>

<?php
         $select_users = mysqli_query($db, "SELECT * FROM user") or die('query failed');
         while($fetch_users = mysqli_fetch_assoc($select_users)):
           ?>
     
        <tr>
                  <td> <?php echo $fetch_users["FirstName"]; ?></td>
                  <td> <?php echo $fetch_users["LastName"];?></td>
                  <td> <?php echo $fetch_users["Email"];?></td>
                  <td> <?php echo $fetch_users["IsAdmin"];?></td>    
                  <td> <?php echo $fetch_users["Status"];?></td>
                </tr>
     
                <?php
        endwhile;
      ?>
            </table>
            

            <button type="submit" name="convert" id="convert" class="btn btn-primary">Convert</button>
          </form>
          <br />
          <br />
      </div>
     </div>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  </body>
</html>

<script>
$(document).ready(function(){
 $('#convert').click(function(){
    var table_content = '<table>';
    table_content += $('#table_content').html();
    table_content += '</table>';
    $('#file_content').val(table_content);
    $('#convert_form').submit();
  });
});
</script>


