<?php
    include("config/dbconfig.php");

if(isset($_POST["upload_book"])) 
{
    $bookname = $_POST['bookname'];
    $Author = $_POST['Author'];
    $date = $_POST['date'];
    $genre = $_POST['genre'];
    $lang = $_POST['lang'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $statusmsg="";
//  File upload directory
$targetDir = "uploads/";

  if(isset($_POST['upload_book']))
  {
    $Title = $_POST['bookname'];
    $Author = $_POST['Author'];
    $date = $_POST['date'];
    $genre = $_POST['genre'];
    $description = $_POST['description'];
    $lang = $_POST['lang'];
    $price=$_POST['price'];
    //   $sql_query="INSERT INTO books(Title,Author,Year,Genre,Description,Language,Price)
    //   VALUES('$Title','$Author','$date',' $genre','$description',$lang','$price)";
    //   if(mysqli_query($conn,$sql_query))
    //   {
    //       echo "new detais entry inserted succesfully!";
    //   }  
    //   mysqli_close($conn);
  }


if(isset ($_POST["upload_book" ])) 
{
    if(!empty ($_FILES["file"]["name"]))
    {
        $fileName = basename($_FILES["file"]["name"]);
        $path="uploads/".$bookname;
        if(!is_dir($path.'/'.$bookname))
        {
            mkdir($path, 0777 , true);
        }
        $targetFileCover = $targetDir.$bookname."/".$fileName;
    
        $filetype= pathinfo($targetFileCover, PATHINFO_EXTENSION);

        // Allow certain file formats
            $allowTypes=array("jpg", "png", "jpeg", 'gif', 'pdf');

        if (in_array ($filetype, $allowTypes))
        {
            // upload flle to server
            //  move_uploaded_file($_FILES["file"][ "tmp_name"], $targetFilePath);
        if (move_uploaded_file($_FILES["file"][ "tmp_name"], $targetFileCover) ) {
            // insert image tile name into database
            echo $statusMsg="moved uoloaded files";
        }
        else{
            echo  $statusMsg="sorry, there was an error uploading your file.";
        }
        }
        else
        {
            echo  $statustsg ='Sorry, only JPG, PEG, PNG, GIF, & PDF files are allowed to upload.';
        }
    }
    else{
        echo  $statusmsg="Please select a file to upload.";
    }


    ////////////////////////////////////////////////////////////


    if(!empty ($_FILES["bookpdf"]["name"]))
    {
        $fileName = basename($_FILES["bookpdf"]["name"]);

        $targetFileBook = $targetDir.$bookname."/".$fileName;
    
        $filetype= pathinfo($targetFileBook, PATHINFO_EXTENSION);

        // Allow certain file formats
        $allowTypes=array('pdf');

    if (in_array ($filetype, $allowTypes))
    {
        //upload flle to server
        // move_uploaded_file($_FILES["file"][ "tmp_name"], $targetFilePath);
        if (move_uploaded_file($_FILES["bookpdf"][ "tmp_name"],$targetFileBook) ) {

        echo "<p style='font-size:35px;'> Uploaded Successfully </p>.";
        // insert image tile name into database
    }
    else{
        echo  $statusMsg="sorry, there was an error uploading your file.";
    }
    }
    else
    {
        echo  $statustsg ='Sorry, only PDF files are allowed to upload.';
    }
    }

$insert= $db->query("INSERT INTO books(Title,Author,Year,Genre,Description,Language,Price,Cover,Book)
VALUES('$Title','$Author','$date',' $genre','$description','$lang','$price','$targetFileCover','$targetFileBook')");
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
        echo  $statusmsg="Please select a file to upload.";
    }



////////////////////////////////////////////
}

    //echo $bookname;
?>