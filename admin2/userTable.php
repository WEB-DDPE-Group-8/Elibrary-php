<?php

//html-to-excel.php

$connect = new PDO("mysql:host=localhost;dbname=a2zlibrary", "root", "");

$query = "SELECT * FROM user";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();


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
       <form method="POST" id="convert_form" action="export.php">
            <table class="table table-striped table-bordered" id="table_content">
              <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>User Type</th>
                <th>Status</th>
              </tr>
              <?php
              foreach($result as $row)
              {
                echo '
                <tr>
                  <td>'.$row["FirstName"].'</td>
                  <td>'.$row["LastName"].'</td>
                  <td>'.$row["Email"].'</td>
                  <td>'.$row["IsAdmin"].'</td>
                  
                  <td>'.$row["Status"].'</td>
                </tr>
                ';
              }
              ?>
            </table>
            <input type="hidden" name="file_content" id="file_content" />
            <!-- <button type="button" name="convert" id="convert" class="btn btn-primary">Convert</button> -->
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