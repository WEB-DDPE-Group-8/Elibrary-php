<?php 

$status ="";
if(isset($_GET["rejectbook"]))
{
  $id=   $_GET["rejectbook"];
  $sql = "Update books SET Status = 'Rejected' WHERE BookID = $id";
  mysqli_query($db,$sql);
  
}

if(isset($_GET["approvebook"]))
{
    $id=   $_GET["approvebook"];
    $sql = "Update books SET Status = 'Approved' WHERE BookID= $id";
    mysqli_query($db, $sql);
    // $db->query($sql);
    echo $status;
    
}
?>