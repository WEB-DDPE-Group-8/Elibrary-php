<?php
// Include the database configuration
//not done yet
include "dbconfig.php";

$statusmsg="";
//  File upload directory
$targetDir = "uploads/";

if(isset ($_POST["submit" ])) 
{
if(!empty ($_FILES[ "file"]["name" ])) {
   $fileName = basename($_FILES["file"]["name" ]) ;
   $targetFilepath = $targetDir . $fileName;
   $filetype= pathinfo($targetfilePath, PATHINFO_EXTENSION) ;

   // Allow certain file formats
    $allowTypes=array("jpg", "png", "jpeg", 'gif', 'pdf');

if (in_array ($fileType, $allowTypes) ){
    // upload flle to server
if (move_uploaded_file($_FILES[ "file"][ "tmp_name"], $targetFilepPath) ) {
    // insert image tile name into database
    $insert=$db->query("INSERT into images (file_name, uploaded_on) VALUES ('".SfileName."', NOW())") ;
if($insert)
{
    $statusmsg="The file ".$fileName. " has been uploaded successfully";
}
else{
    $statustsg="File upload failed, please try again.";
}
}
else{
    $statusMsg="sorry, there was an error uploading your file.";
}
}
else{
    $statustsg ='Sorry, only JPG, PEG, PNG, GIF, & PDF files are allowed to upload.';
}
}
else{
    $statusmsg="Please select a file to upload.";
}
}
?>