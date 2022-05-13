<?php
// namespace Phppot;

// use Phppot\DataSource;

require_once '../models/usermodel.php';
require_once '../models/bookmodel.php';

$userModel = new UserModel();
$bookModel = new BookModel();

if (isset($_POST["import"])) {
    $response = $userModel->readUserRecords();
}
?>

<link href="../css/import.css" rel="stylesheet" type="text/css" />
<script src="../js/jquery-3.2.1.min.js"></script>

<script type="text/javascript">
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

    <h2>Import User CSV file into Mysql using PHP</h2>
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
                        <button type="submit" id="submit" name="import"
                            class="btn-submit">Import</button>
                    </div>
                </div>
            </form>

        </div><?php  require_once 'user-list.php';?></div>
        
        <div id="response2"
        class="<?php if(!empty($response["type"])) { echo $response["type"] ; } ?>">
        <?php if(!empty($response["message"])) { echo $response["message"]; } ?>
        </div>

    



<?php



if (isset($_POST["import_book"])) {
    $response = $bookModel->readBookRecords();
}
?>
<script type="text/javascript">
function validateFile() {
    var csvInputFile = document.forms["frmCSVImportBook"]["file"].value;
    if (csvInputFile == "") {
      error = "No source found to import";
      $("#response").html(error).addClass("error");
      return false;
    }
    return true;
  }

</script>

    <h2>Import Book CSV file into Mysql using PHP</h2>
    <div class="outer-scontainer">
        <div class="row">
            <form class="form-horizontal" action="" method="post"
                name="frmCSVImportBook" id="frmCSVImportBook"
                enctype="multipart/form-data"
                onsubmit="return validateFile()">
                <div Class="input-row">
                    <input type="file" name="file" id="file"
                        class="file" accept=".csv,.xls,.xlsx">
                    <div class="import">
                        <button type="submit" id="submit" name="import_book"
                            class="btn-submit">Import</button>
                    </div>
                </div>
            </form>

        </div><?php  require_once 'book-list.php';?></div>



    <div id="response"
        class="<?php if(!empty($response["type"])) { echo $response["type"] ; } ?>">
        <?php if(!empty($response["message"])) { echo $response["message"]; } ?>
        </div>