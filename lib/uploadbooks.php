<?php
    include("./config/dbconfig.php");

if(isset($_POST["upload_book"])) 
{
    $bookname = mysqli_real_escape_string($db,$_POST['bookname']);
    $Author = mysqli_real_escape_string($db,$_POST['Author']);
    $date = mysqli_real_escape_string($db,$_POST['date']);
    $genre = mysqli_real_escape_string($db,$_POST['genre']);
    $lang = mysqli_real_escape_string($db,$_POST['lang']);
    $description = mysqli_real_escape_string($db,$_POST['description']);
    $price = mysqli_real_escape_string($db,$_POST['price']);

    
$statusmsg="";
//  File upload directory
$targetDir = "uploads/";

if(isset ($_POST["upload_book" ])) 
{
if(!empty ($_FILES["file"]["name"])){

   $fileName = basename($_FILES["file"]["name" ]) ;
  
   $targetFilePath = $targetDir . $fileName;
   echo $targetFilePath;
   $filetype= pathinfo($targetFilePath, PATHINFO_EXTENSION);

   // Allow certain file formats
    $allowTypes=array("jpg", "png", "jpeg", 'gif', 'pdf');

if (in_array ($filetype, $allowTypes) ){
    // upload flle to server
    //  move_uploaded_file($_FILES["file"][ "tmp_name"], $targetFilePath);
if (move_uploaded_file($_FILES["file"][ "tmp_name"], $targetFilePath) ) {
    // insert image tile name into database
    $insert= $db->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())") ;
if($insert)
{
    // echo must be removed used only for debudding purposes only
  echo  $statusmsg="\n The file ".$fileName. " has been uploaded successfully";
}
else{
    echo  $statustsg="File upload failed, please try again.";
}
}
else{
    echo  $statusMsg="sorry, there was an error uploading your file.";
}
}
else{
    echo  $statustsg ='Sorry, only JPG, PEG, PNG, GIF, & PDF files are allowed to upload.';
}
}
else{
    echo  $statusmsg="Please select a file to upload.";
}
}

    echo $bookname;
}

?>