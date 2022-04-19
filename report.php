<link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/index.css"/>
    <link rel="stylesheet" type="text/css" href="css/footer.css"/>
    <link rel="stylesheet" type="text/css" href="css/team.css"/>
<?php include("./inc/nav_bar.php") ?>
<?php include("./config/dbconfig.php");  
if (isset($_POST["submit"])){
    $dwlds= $_POST["dwlds"];
    $sql= "select * from books where Downloads > $dwlds";
    $values= $db -> query($sql);
    
    while ($values2= $values->fetch_assoc()){
    echo $values2["Title"] ."\n";}
    

}



?>
<form method= "POST" action= "report.php">
    <input name= "dwlds" type= "number" placeholder= "Filter by downloads">
    <button type= "submit" name= "submit">Submit</button>


</form>

<?php include("./inc/footer.php") ?>

