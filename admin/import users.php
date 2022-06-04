<?php

require_once '../models/usermodel.php';

$userModel = new UserModel();

?>

<!-- <link href="../css/import.css" rel="stylesheet" type="text/css" /> -->
<script src="../js/jquery-3.2.1.min.js" defer></script>
<script type="text/javascript" defer>
function validateFile() {
    var csvInputFile = document.forms["frmCSVImport"]["file"].value;
    if (csvInputFile == "") {
      error = "No source found to import";
      $("#response2").html(error).addClass("error");
      return false;
    }
    return true;
  }
</script>

<?php
if (isset($_POST["import"]))
{
   $response = $userModel->readUserRecords();
   unset($_POST["import"]);
}
?>

    <!-- <h2>Import User CSV file into Mysql using PHP</h2> -->
    <div class="outer-scontainer">
        <div class="row">
            <form class="form-horizontal" action="" method="post"
                name="frmCSVImport" id="frmCSVImport"
                enctype="multipart/form-data"
                onsubmit="return validateFile()">
                <div Class="input-row">
                    <input style="border: 1px solid " type="file" name="file" id="file"
                        class="file" accept=".csv,.xls,.xlsx">
                    <div class="import">
                        <button type="submit" id="submit" name="import"
                            class="btn">Import</button>
                    </div>
                </div>
            </form>

        </div><?php  
        // require_once 'user-list.php';
        ?></div>
        
        <div id="response2"
        class="<?php if(!empty($response["type"])) { echo $response["type"] ; } ?>">
        <?php if(!empty($response["message"])) { echo $response["message"]; } ?>
</div>

<?php



