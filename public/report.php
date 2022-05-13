
<?php include("../inc/nav_bar.php") ?>

<link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/index.css"/>
    <!-- <link rel="stylesheet" type="text/css" href="css/footer.css"/> -->
    <link rel="stylesheet" type="text/css" href="css/team.css"/>

<?php 

include("../config/dbconfig.php");  
$header = array("Downloads","Year","Language","Likes","Dislikes");

$queries = array(
"select  Title,Author,Year,Description,Language from books where Downloads > 2",
"select  Title,Author,Year,Description,Language from books where Year > 2005",
"select  Language ,COUNT(*) AS lang from books Group by Language ",
"select  Title,Author,Year,Description,Language from books where Likes > 0",
"select  Title,Author,Year,Description,Language from books where Dislikes > 100"
);
$myfile = fopen("report.txt", "w") or die("Unable to open file!");
     for($query=0 ; $query<count($queries) ; $query++)
     {
        $download = $db -> query($queries[$query]);
         echo "<h1>$header[$query]</h1>" ;
         $head = $header[$query]."\n";
         fwrite($myfile, $head);
    while ($download2 = $download->fetch_assoc())
    {
        ?>
        <table>
            <tr>
                <td>
        <?php
        foreach($download2 as $e)
        {
            echo $e.","."\n";
            $body = $e.",";
            fwrite($myfile, $body);
            ?> 
            

            </td>
            <td></td>
            <td>
                <?php
                };
                fwrite($myfile, "\n");?>   
               </td> 
            </tr>
        </table>
        
        <?php   
    }
    
    }
    fclose($myfile);
?>

<?php
// include "../models/usermodel.php";

// $userModel = new UserModel();

// if (isset($_POST["importuser"])) {
//     $response = $userModel->readUserRecords();
// }
?>

 <link   href="../admin/csv-to-mysql/style.css" rel="stylesheet" type="text/css" />
 <script src="jquery-3.2.1.min.js"></script>
 <script type="text/javascript">

function validateFile() {
    var csvInputFile = document.forms["frmCSVImport"]["file"].value;
    if (csvInputFile == "") {
      error = "No source found to import";
      $("#response").html(error).addClass("error");
      return false;
    }
    return true;
  }

</script>
    <br><br><br><br><br><br>
    <!-- <h2>Import user CSV file into Mysql using PHP</h2>
    <div class="outer-scontainer">
        <div class="row">
            <form class="form-horizontal" action="" method="post"
                name="frmCSVImport" id="frmCSVImport"
                enctype="multipart/form-data"
                onsubmit="return validateFile()">
                <div Class="input-row">
                    <input type="file" name="file" id="file"
                        class="file" accept=".csv,.xls,.xlsx">
                    <div class="import">
                        <button type="submit" id="submit" name="importuser"
                            class="btn-submit">Import User</button>
                    </div>
                </div>
            </form>

        </div><?php 
        //  require_once '../admin/csv-to-mysql/list.php';?></div>

    <div id="response"
        class="<?php
        //  if(!empty($response["type"])) { echo $response["type"] ; } ?>">
        <?php
        //  if(!empty($response["message"])) { echo $response["message"]; } ?>
        </div> -->

<!-- book upload section -->
<?php

require_once '../admin/csv-to-mysql/list.php'; 

$BookModel = new BookModel();

if (isset($_POST["importbook"])) {
    $response = $BookModel->readBookRecords();
}
?>
        <br><br><br><br><br><br>
    <h2>Import book CSV file into Mysql using PHP</h2>
    <div class="outer-scontainer">
        <div class="row">
            <form class="form-horizontal" action="" method="post"
                name="frmCSVImport" id="frmCSVImport"
                enctype="multipart/form-data"
                onsubmit="return validateFile()">
                <div Class="input-row">
                    <input type="file" name="file" id="file"
                        class="file" accept=".csv,.xls,.xlsx">
                    <div class="import">
                        <button type="submit" id="submit" name="importbook"
                            class="btn-submit">Import Books</button>
                    </div>
                </div>
            </form>

        </div><?php  
        // require_once '../admin/csv-to-mysql/list.php';
        ?></div>

    <div id="response"
        class="<?php
         if(!empty($response["type"])) { echo $response["type"] ; } ?>">
        <?php
         if(!empty($response["message"])) { echo $response["message"]; } ?>
        </div>


<?php include("../inc/footer.php") ?>

